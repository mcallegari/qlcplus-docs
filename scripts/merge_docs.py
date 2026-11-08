#!/usr/bin/env python3
"""Merge the Grav pages of one documentation flavour into a single Markdown
file that pandoc turns into a PDF.

A flavour is a version + language pair, e.g. v5 + it. Page files follow
Grav's naming: chapter.v5_it.md, default.v5.md, docs.v4_de.md, docs.md...
A file without a language suffix (docs.md) belongs to the default
language, v4 English.

Usage:
    merge_docs.py --version v5 --lang it [--release 5.1.0] [--date 2026-11-08]
    merge_docs.py --list-langs v5        # JSON list of languages, for CI

Output goes to build/<version>-<lang>/: the merged Markdown, the images it
uses, the LaTeX title page and header, and a pandoc defaults file.
The path of the PDF pandoc will write is printed on stdout.
Run scripts/build-pdf.sh to do the whole build.
"""

import argparse
import datetime
import json
import posixpath
import re
import shutil
import subprocess
import sys
import unicodedata
from pathlib import Path
from urllib.parse import unquote

DEFAULT_VERSION = "v4"  # Grav's default language: files without suffix belong to it
EXCLUDED_FOLDERS = {"feed"}
PAGE_FILE_RE = re.compile(r"^(chapter|default|docs)(?:\.(v\d+)(?:_([a-z]{2}))?)?\.md$")
RASTER_EXT = {".png", ".jpg", ".jpeg"}
CONVERT_TO_PNG_EXT = {".gif", ".webp", ".bmp", ".tif", ".tiff"}
INLINE_ICON_HEIGHT = "1.5em"

# Text for the cover and LaTeX settings, per language.
# "babel" is only loaded when the language package exists in the TeX install.
STRINGS = {
    "en": dict(doc="Documentation", subtitle="Comprehensive guide to version {n}", version="Version {n}",
               toc="Table of Contents", release="Release", date="Published", written="Written by... you!",
               chapter="Chapter", babel=None),
    "it": dict(doc="Documentazione", subtitle="Guida completa alla versione {n}", version="Versione {n}",
               toc="Indice", release="Release", date="Pubblicato", written="Scritta da... te!",
               chapter="Capitolo", babel="italian"),
    "de": dict(doc="Dokumentation", subtitle="Umfassendes Handbuch zu Version {n}", version="Version {n}",
               toc="Inhaltsverzeichnis", release="Release", date="Veröffentlicht", written="Geschrieben von... dir!",
               chapter="Kapitel", babel="ngerman"),
    "fr": dict(doc="Documentation", subtitle="Guide complet de la version {n}", version="Version {n}",
               toc="Table des matières", release="Release", date="Publié le", written="Écrite par... vous !",
               chapter="Chapitre", babel="french"),
    "es": dict(doc="Documentación", subtitle="Guía completa de la versión {n}", version="Versión {n}",
               toc="Índice", release="Release", date="Publicado", written="¡Escrita por... ti!",
               chapter="Capítulo", babel="spanish"),
    "ca": dict(doc="Documentació", subtitle="Guia completa de la versió {n}", version="Versió {n}",
               toc="Índex", release="Release", date="Publicat", written="Escrita per... tu!",
               chapter="Capítol", babel="catalan"),
}
PDF_TEMPLATES = Path(__file__).resolve().parent / "pdf"
LOGO = Path("01.basics/qlcplus.svg")  # inside the pages folder

FENCE_RE = re.compile(r"^\s{0,3}(```+|~~~+)")
ATX_RE = re.compile(r"^(#{1,6})\s+(.*?)\s*#*\s*$")
SETEXT_RE = re.compile(r"^\s{0,3}(=+|-+)\s*$")
CHAPTER_NUMBER_RE = re.compile(r"^\S+\s+\d+$")  # "Chapter 2", "Capitolo 2", ...
# ![alt](src "title") or [text](href "title"); text may hold one level of nested [] (an image).
LINK_RE = re.compile(
    r"(!?)\[((?:[^\[\]]|\[[^\[\]]*\])*)\]\(\s*<?([^)\s>]*)>?(?:\s+(?:\"[^\"]*\"|'[^']*'))?\s*\)")
HTML_TAG_RE = re.compile(r"<[^>]+>")
THEMATIC_BREAK_RE = re.compile(r"^\s{0,3}([*_-])(?:[ \t]*\1){2,}[ \t]*$")
EMOJI_RE = re.compile("[\U0001F000-\U0001FAFF✨️‍]")
SYMBOLS = str.maketrans({"✕": "×", "⬆": "↑", "✦": "•", "⚠": "!", "ⓘ": "(i)", "▬": "—", "▦": "■"})


class Page:
    def __init__(self, folder, route, depth):
        self.folder = folder
        self.route = route
        self.depth = depth
        self.children = []
        self.file = None
        self.translated = True
        self.meta = {}
        self.title = None
        self.lines = []
        self.anchors = {}  # heading slug -> id

    @property
    def id(self):
        return "p-" + self.route.strip("/").replace("/", "--")


class Merger:
    def __init__(self, pages_dir, version, lang, out_dir):
        self.pages_dir = pages_dir
        self.version = version
        self.lang = lang
        self.out_dir = out_dir
        self.route_to_folder = {"/": pages_dir}
        self.pages_by_route = {}
        self.used_ids = set()
        self.images = {}  # source path -> output name
        self.warnings = []

    # ---------- page tree ----------

    def scan(self, folder, route="/", depth=0):
        pages = []
        subdirs = [d for d in folder.iterdir()
                   if d.is_dir() and d.name not in EXCLUDED_FOLDERS and not d.name.startswith((".", "_"))]
        # Numbered folders in order, then the unnumbered (hidden) ones
        subdirs.sort(key=lambda d: (not re.match(r"^\d+\.", d.name), d.name))
        for d in subdirs:
            slug = re.sub(r"^\d+\.", "", d.name)
            page_route = posixpath.join(route, slug)
            self.route_to_folder[page_route] = d
            page = Page(d, page_route, depth + 1)
            page.children = self.scan(d, page_route, depth + 1)
            self.pick_file(page)
            if page.file is None and not page.children:
                continue
            if page.file is not None and page.meta.get("visible") == "false":
                continue  # placeholder for a page that doesn't exist in this version
            pages.append(page)
        return pages

    def pick_file(self, page):
        files = {}
        for f in page.folder.glob("*.md"):
            m = PAGE_FILE_RE.match(f.name)
            if m:
                files[(m.group(2) or DEFAULT_VERSION, m.group(3) or "en")] = f
        page.file = files.get((self.version, self.lang))
        if page.file is None and self.lang != "en":
            page.file = files.get((self.version, "en"))
            page.translated = page.file is None
        if page.file is None:
            # No content for this version: only used as a heading if it has children.
            fallback = files.get((DEFAULT_VERSION, self.lang)) or files.get((DEFAULT_VERSION, "en"))
            if fallback:
                page.title = read_front_matter(fallback.read_text(encoding="utf-8"))[0].get("title")
            return
        text = page.file.read_text(encoding="utf-8")
        page.meta, body = read_front_matter(text)
        page.title = page.meta.get("title")
        page.lines = body.splitlines()
        if not page.translated:
            self.warn(f"no {self.lang} translation, using English: {page.file.relative_to(self.pages_dir)}")

    def walk(self, pages):
        for p in pages:
            yield p
            yield from self.walk(p.children)

    # ---------- markdown processing ----------

    def prepare(self, page):
        """Normalise headings and work out the anchors of a page."""
        lines = setext_to_atx(page.lines)
        if page.file is not None and page.file.name.startswith("chapter"):
            lines = self.strip_chapter_heading(page, lines)
        # Body headings go below the page title; on pages with subpages they go one
        # level further down, so they don't sit at the same level as the subpages.
        top = page.depth + (2 if page.children else 1)
        levels = [len(m.group(1)) for _, m in iter_headings(lines)]
        shift = (top - min(levels)) if levels else 0
        page.id_base = self.unique_id(page.id)
        for i, m in iter_headings(lines):
            level = max(top, min(6, len(m.group(1)) + shift))
            text = clean_heading(m.group(2))
            slug = slugify(text)
            if not text:
                lines[i] = ""
                continue
            hid = self.unique_id(f"{page.id_base}--{slug or 'section'}")
            page.anchors.setdefault(slug, hid)
            lines[i] = ("#" * level, text, hid)
        page.lines = lines
        self.pages_by_route[page.route] = page

    def strip_chapter_heading(self, page, lines):
        """Chapter files start with '### Chapter N' and '# Title': use the H1 as the title."""
        for i, m in iter_headings(lines):
            if len(m.group(1)) == 1:
                page.title = clean_heading(m.group(2)) or page.title
                lines[i] = ""
                break
            if CHAPTER_NUMBER_RE.match(m.group(2).strip()):
                lines[i] = ""
            else:
                break
        return lines

    def unique_id(self, base):
        hid, n = base, 2
        while hid in self.used_ids:
            hid, n = f"{base}-{n}", n + 1
        self.used_ids.add(hid)
        return hid

    def render(self, page):
        out = [f"{'#' * page.depth} {escape_heading(page.title or page.folder.name)} {{#{page.id_base}}}", ""]
        in_fence = None
        for line in page.lines:
            if isinstance(line, tuple):
                hashes, text, hid = line
                out.append(f"{hashes} {escape_heading(text)} {{#{hid}}}")
                continue
            fence = FENCE_RE.match(line)
            if fence:
                marker = fence.group(1)[0] * 3
                if in_fence is None:
                    in_fence = marker
                elif marker == in_fence:
                    in_fence = None
                out.append(line)
                continue
            if not in_fence and line.lstrip().startswith("|"):
                # A '|' inside `code` would split the table cell
                line = re.sub(r"`[^`]*`", lambda m: re.sub(r"(?<!\\)\|", r"\\|", m.group(0)), line)
            out.append(line if in_fence else self.rewrite_links(page, line))
        out.append("")
        return "\n".join(out)

    def rewrite_links(self, page, line):
        standalone = LINK_RE.fullmatch(line.strip().rstrip("\\").strip()) is not None

        def repl(m):
            is_image, text, href = m.group(1) == "!", m.group(2), m.group(3)
            if is_image:
                return self.image(page, href, standalone)
            text = LINK_RE.sub(lambda mm: self.image(page, mm.group(3), False) if mm.group(1) else mm.group(0), text)
            target = self.link_target(page, href)
            return f"[{text}]({target})" if target else text

        return LINK_RE.sub(repl, line)

    def resolve_route(self, page, path):
        route = posixpath.normpath(posixpath.join(page.route, path)) if not path.startswith("/") \
            else posixpath.normpath(path)
        parts = route.strip("/").split("/")
        if parts and re.fullmatch(r"v\d+(_[a-z]{2})?", parts[0]):  # /v5_it/route -> /route
            parts = parts[1:]
        return "/" + "/".join(p for p in parts if p)

    def link_target(self, page, href):
        if not href:
            return None
        if re.match(r"^[a-z][a-z0-9+.-]*:", href, re.I):  # http:, https:, mailto:...
            return href
        path, _, frag = href.partition("#")
        path = path.split("?", 1)[0]
        target = page if not path else self.pages_by_route.get(self.resolve_route(page, unquote(path)).rstrip("/") or "/")
        if target is None:
            return None  # page not in this PDF (other version, file download...)
        if frag:
            return "#" + target.anchors.get(slugify(unquote(frag)), target.id_base)
        return "#" + target.id_base

    def image(self, page, src, standalone):
        if not src or re.match(r"^[a-z]+:", src, re.I):
            if src:
                self.warn(f"remote image skipped: {src} ({page.route})")
            return ""
        path, _, query = src.partition("?")
        path = unquote(path.split("#", 1)[0])
        route = self.resolve_route(page, path)
        folder = self.route_to_folder.get(posixpath.dirname(route))
        candidates = [folder / posixpath.basename(route)] if folder else []
        candidates.append(page.folder / path)
        source = next((c for c in candidates if c.is_file()), None)
        if source is None:
            self.warn(f"missing image: {src} ({page.file.relative_to(self.pages_dir)})")
            return ""
        name = self.images.get(source)
        if name is None:
            rel = source.relative_to(self.pages_dir).with_suffix("")
            stem = "--".join(re.sub(r"^\d+\.", "", p) for p in rel.parts)
            ext = source.suffix.lower()
            ext = ".pdf" if ext == ".svg" else ".png" if ext in CONVERT_TO_PNG_EXT else ext
            name = self.images[source] = f"images/{stem}{ext}"
        if not standalone:
            attrs = f"height={INLINE_ICON_HEIGHT}"
        else:
            size = re.search(r"(?:^|&)(?:resize|cropResize)=(\d+)", query)
            attrs = f"width={size.group(1)}px" if size else ""
        return f"![]({name})" + (f"{{{attrs}}}" if attrs else "")

    # ---------- output ----------

    def copy_images(self):
        img_dir = self.out_dir / "images"
        img_dir.mkdir(parents=True, exist_ok=True)
        svg_tool = next((t for t in ("rsvg-convert", "inkscape", "magick", "convert") if shutil.which(t)), None)
        raster = []
        for source, name in self.images.items():
            dest = self.out_dir / name
            ext = source.suffix.lower()
            if ext == ".svg":
                if not svg_tool:
                    sys.exit("error: install rsvg-convert (librsvg2-bin) to convert SVG images")
                svg_to_pdf(svg_tool, source, dest)
            elif ext in CONVERT_TO_PNG_EXT:
                run([imagemagick(), f"{source}[0]", str(dest)])
                raster.append(dest)
            else:
                shutil.copyfile(source, dest)
                raster.append(dest)
        # Same DPI everywhere so screenshots and icons keep a consistent scale
        tool = imagemagick(required=False)
        if tool and raster:
            cmd = [tool, "mogrify"] if tool == "magick" else ["mogrify"]
            for i in range(0, len(raster), 200):
                run(cmd + ["-units", "PixelsPerInch", "-density", "96"] + [str(p) for p in raster[i:i + 200]])
        elif raster:
            self.warn("ImageMagick not found: image DPI not normalised")

    def warn(self, msg):
        self.warnings.append(msg)


# ---------- helpers ----------

def read_front_matter(text):
    """Return (simple top-level YAML keys, body)."""
    text = text.lstrip("﻿")
    m = re.match(r"^---\s*\n(.*?)\n---\s*(?:\n|$)", text, re.S)
    if not m:
        return {}, text
    meta = {}
    for line in m.group(1).splitlines():
        kv = re.match(r"^([A-Za-z_][\w-]*):\s*(.*?)\s*$", line)
        if kv:
            value = kv.group(2)
            if len(value) >= 2 and value[0] == value[-1] == "'":
                value = value[1:-1].replace("''", "'")
            elif len(value) >= 2 and value[0] == value[-1] == '"':
                value = value[1:-1].replace('\\"', '"')
            meta[kv.group(1)] = value
    return meta, text[m.end():]


def iter_headings(lines):
    """Yield (index, ATX match) for headings outside code fences."""
    in_fence = None
    for i, line in enumerate(lines):
        if not isinstance(line, str):
            continue
        fence = FENCE_RE.match(line)
        if fence:
            marker = fence.group(1)[0] * 3
            in_fence = marker if in_fence is None else (None if marker == in_fence else in_fence)
            continue
        if not in_fence:
            m = ATX_RE.match(line)
            if m:
                yield i, m


def setext_to_atx(lines):
    """'Title\\n-----' -> '## Title' so all headings can be shifted the same way."""
    out, in_fence = [], None
    for line in lines:
        fence = FENCE_RE.match(line)
        if fence:
            marker = fence.group(1)[0] * 3
            in_fence = marker if in_fence is None else (None if marker == in_fence else in_fence)
        under = None if in_fence or fence else SETEXT_RE.match(line)
        prev = out[-1] if out else ""
        if under and prev.strip() and not re.match(r"^\s*([|#>*+-]|\d+[.)]\s)", prev) and not prev.startswith("    "):
            out[-1] = ("#" if under.group(1)[0] == "=" else "##") + " " + prev.strip()
            continue
        if not in_fence and not fence and THEMATIC_BREAK_RE.match(line):
            out.extend(["", "***", ""])  # pandoc's commonmark_x misreads spaced rules like "* * *"
            continue
        out.append(line)
    return out


def clean_text(text):
    """Characters no print font has: drop emoji, turn full-width ＋/－ etc. into ASCII."""
    text = EMOJI_RE.sub("", text).translate(SYMBOLS)
    return re.sub(r"[！-～]", lambda m: unicodedata.normalize("NFKC", m.group(0)), text)


def clean_heading(text):
    text = re.sub(r"!\[[^\]]*\]\([^)]*\)", "", text)          # icons
    text = re.sub(r"\[((?:[^\[\]]|\[[^\[\]]*\])*)\]\([^)]*\)", r"\1", text)  # links -> text
    text = HTML_TAG_RE.sub("", text)
    text = re.sub(r"\s*\{[#.][^}]*\}\s*$", "", text)          # existing {#id} attributes
    return text.strip()


def escape_heading(text):
    # A trailing '{...}' would be read as attributes by pandoc
    return text.replace("{", "\\{").replace("}", "\\}")


def slugify(text):
    text = re.sub(r"[*_`]", "", HTML_TAG_RE.sub("", text))
    text = unicodedata.normalize("NFKD", text).encode("ascii", "ignore").decode().lower()
    text = re.sub(r"[^a-z0-9\s-]", "", text)
    return re.sub(r"[\s-]+", "-", text).strip("-")


def latex_escape(text):
    repl = {"\\": r"\textbackslash{}", "&": r"\&", "%": r"\%", "$": r"\$", "#": r"\#",
            "_": r"\_", "{": r"\{", "}": r"\}", "~": r"\textasciitilde{}", "^": r"\textasciicircum{}"}
    return "".join(repl.get(c, c) for c in text)


def run(cmd):
    result = subprocess.run(cmd, capture_output=True, text=True)
    if result.returncode != 0:
        sys.exit(f"error running {' '.join(cmd[:3])}...: {result.stderr.strip()}")


def imagemagick(required=True):
    tool = "magick" if shutil.which("magick") else "convert" if shutil.which("convert") else None
    if tool is None and required:
        sys.exit("error: ImageMagick is required to convert GIF/WebP images")
    return tool


def svg_to_pdf(tool, source, dest):
    if tool == "rsvg-convert":
        run([tool, "-f", "pdf", "-o", str(dest), str(source)])
    elif tool == "inkscape":
        run([tool, str(source), "--export-type=pdf", f"--export-filename={dest}"])
    else:
        run([tool, str(source), str(dest)])


def list_langs(pages_dir, version):
    """Languages with chapter-level pages for this version, English first ([] if none)."""
    langs = set()
    for f in pages_dir.glob("*/*.md"):
        m = PAGE_FILE_RE.match(f.name)
        if m and (m.group(2) or DEFAULT_VERSION) == version:
            langs.add(m.group(3) or "en")
    if langs:
        langs.add("en")  # untranslated pages fall back to English
    return sorted(langs, key=lambda lang: (lang != "en", lang))


def fill_template(name, values):
    text = (PDF_TEMPLATES / name).read_text(encoding="utf-8")
    for key, value in values.items():
        text = text.replace(f"<<{key}>>", value)
    leftover = re.findall(r"<<[A-Z_]+>>", text)
    if leftover:
        sys.exit(f"error: {name} has unknown placeholders {leftover}")
    return text


def write_latex_files(out_dir, pages_dir, version, lang, release, date):
    s = STRINGS.get(lang, STRINGS["en"])
    n = version.lstrip("v")
    esc = latex_escape

    babel = ""
    if s["babel"]:
        # Proper hyphenation, only if the TeX install has this language
        babel = r"\IfFileExists{%s.ldf}{\usepackage[shorthands=off,%s]{babel}}{}" % (s["babel"], s["babel"])
    header = fill_template("header.tex", {
        "CHAPTER": esc(s["chapter"]),
        "FOOTER": esc(f"Q Light Controller+ {release or n}  ·  {s['doc']}"),
        "BABEL": babel,
    })
    (out_dir / "header.tex").write_text(header, encoding="utf-8")

    logo = out_dir / "logo.pdf"
    tool = next((t for t in ("rsvg-convert", "inkscape", "magick", "convert") if shutil.which(t)), None)
    if not tool:
        sys.exit("error: install rsvg-convert (librsvg2-bin) to convert SVG images")
    svg_to_pdf(tool, pages_dir / LOGO, logo)

    release_block = (r"\qlclight\footnotesize\color{white!60!qlcdeep} %s\\[2pt]\qlcbold\small %s"
                     % (esc(s["release"]), esc(release))) if release else ""
    cover = fill_template("cover.tex", {
        "LOGO": logo.as_posix(),
        "DOC": esc(s["doc"]),
        "SUBTITLE": esc(s["subtitle"].format(n=n)),
        "VERSION_LABEL": esc(s["version"].format(n=n)),
        "RELEASE_BLOCK": release_block,
        "WRITTEN": esc(s["written"]),
        "DATE_LABEL": esc(s["date"]),
        "DATE": esc(date),
    })
    (out_dir / "titlepage.tex").write_text(cover, encoding="utf-8")
    return s


def main():
    ap = argparse.ArgumentParser(description=__doc__.split("\n\n")[0])
    ap.add_argument("--version", help="documentation version, e.g. v5")
    ap.add_argument("--lang", default="en", help="language code, e.g. it (default: en)")
    ap.add_argument("--release", default="", help="release number shown on the title page")
    ap.add_argument("--date", default=datetime.date.today().isoformat(), help="date shown on the title page")
    ap.add_argument("--pages", default="pages", type=Path, help="Grav pages folder")
    ap.add_argument("--out", default="build", type=Path, help="output folder")
    ap.add_argument("--list-langs", metavar="VERSION", help="print the languages of VERSION as JSON and exit")
    args = ap.parse_args()

    if args.list_langs:
        print(json.dumps(list_langs(args.pages, args.list_langs)))
        return
    if not args.version or not re.fullmatch(r"v\d+", args.version):
        ap.error("--version must look like v4 or v5")
    lang = args.lang.lower()
    if lang not in list_langs(args.pages, args.version):
        ap.error(f"no {lang} pages for {args.version}; available: {', '.join(list_langs(args.pages, args.version))}")

    flavour = f"{args.version}-{lang}"
    out_dir = args.out / flavour
    shutil.rmtree(out_dir, ignore_errors=True)
    out_dir.mkdir(parents=True)

    merger = Merger(args.pages, args.version, lang, out_dir)
    tree = merger.scan(args.pages)
    pages = list(merger.walk(tree))
    for page in pages:
        merger.prepare(page)
    markdown = clean_text("\n".join(merger.render(page) for page in pages))
    (out_dir / "qlcplus-docs.md").write_text(markdown, encoding="utf-8")
    merger.copy_images()

    s = write_latex_files(out_dir, args.pages, args.version, lang, args.release, args.date)
    # e.g. QLC+_5.3.1_User_Manual_IT.pdf (the version, e.g. v5, when there's no release number)
    tag = re.sub(r"[^\w.+-]+", "-", args.release).strip("-") or args.version
    pdf = args.out / "pdf" / f"QLC+_{tag}_User_Manual_{lang.upper()}.pdf"
    pdf.parent.mkdir(parents=True, exist_ok=True)
    defaults = {
        "from": "commonmark_x-implicit_figures-emoji-smart",
        "input-files": [str(out_dir / "qlcplus-docs.md")],
        "output-file": str(pdf),
        "standalone": True,
        "pdf-engine": "lualatex",
        "resource-path": [str(out_dir), "."],
        "filters": ["scripts/pdf/filter.lua"],
        "top-level-division": "chapter",
        "number-sections": True,
        "table-of-contents": True,
        "toc-depth": 2,
        "include-in-header": [str(out_dir / "header.tex")],
        "include-before-body": [str(out_dir / "titlepage.tex")],
        "metadata": {"toc-title": s["toc"]},
        "variables": {
            "documentclass": "report",
            "classoption": ["oneside"],
            "papersize": "a4",
            "geometry": ["top=2.4cm", "bottom=2.4cm", "left=2.2cm", "right=2.2cm", "headsep=0.8cm"],
            "secnumdepth": 1,
            "subparagraph": True,  # leave heading styles to titlesec (header.tex)
            "colorlinks": True,
            "toccolor": "qlcslate",
            "title-meta": f"Q Light Controller+ {s['doc']} " + (args.release or args.version),
            "author-meta": "docs.qlcplus.org",
        },
    }
    # JSON is valid YAML, so pandoc reads this as a defaults file
    (out_dir / "defaults.yaml").write_text(json.dumps(defaults, indent=2, ensure_ascii=False), encoding="utf-8")

    for w in merger.warnings:
        print(f"warning: {w}", file=sys.stderr)
    print(f"{flavour}: {len(pages)} pages, {len(merger.images)} images, {len(merger.warnings)} warnings -> {out_dir}",
          file=sys.stderr)
    print(pdf)  # the only line on stdout: build-pdf.sh reads it


if __name__ == "__main__":
    main()
