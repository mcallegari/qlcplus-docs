#!/usr/bin/env bash
# Build the PDF of one documentation flavour.
#
#   scripts/build-pdf.sh <version> [lang] [extra pandoc options...]
#   e.g. scripts/build-pdf.sh v5 it
#
# Environment:
#   RELEASE       release number for the title page (e.g. 5.1.0)
#   DOC_DATE      date for the title page (default: today)
#   PANDOC        "docker" (default when Docker is available) or a local pandoc binary
#   PANDOC_IMAGE  Docker image to use (default below; same as CI)
#
# Output: build/pdf/QLC+_<release>_User_Manual_<LANG>.pdf (prints the path when done)
set -euo pipefail

VERSION=${1:?usage: $0 <version> [lang]}
LANG_CODE=${2:-en}
shift $(( $# < 2 ? $# : 2 ))
PANDOC_IMAGE=${PANDOC_IMAGE:-pandoc/extra:3.11-debian}
if [[ -z "${PANDOC:-}" ]]; then
  if command -v docker >/dev/null; then PANDOC=docker; else PANDOC=pandoc; fi
fi

cd "$(dirname "$0")/.."

# Fonts: Inter (text) and JetBrains Mono (code), both under the SIL Open Font License.
# Pinned versions, checksum-verified; only the styles used by scripts/pdf/header.tex.
FONT_DIR=build/fonts
fetch_font() {  # <url> <sha256> <license file> <font files inside the zip...>
  local url=$1 sha=$2 license=$3; shift 3
  local tmp; tmp=$(mktemp -d)
  echo "Downloading $url" >&2
  curl -fsSL -o "$tmp/font.zip" "$url"
  echo "$sha  $tmp/font.zip" | sha256sum -c --quiet
  unzip -q -j -o "$tmp/font.zip" "$@" -d "$FONT_DIR"
  unzip -q -p "$tmp/font.zip" "$license" > "$FONT_DIR/LICENSE-$(basename "$url" .zip).txt"
  rm -rf "$tmp"
}
mkdir -p "$FONT_DIR"
[[ -f $FONT_DIR/Inter-Regular.ttf ]] || fetch_font \
  https://github.com/rsms/inter/releases/download/v4.1/Inter-4.1.zip \
  9883fdd4a49d4fb66bd8177ba6625ef9a64aa45899767dde3d36aa425756b11e LICENSE.txt \
  extras/ttf/Inter-{Regular,Italic,Light,SemiBold,SemiBoldItalic,ExtraBold}.ttf
[[ -f $FONT_DIR/JetBrainsMono-Regular.ttf ]] || fetch_font \
  https://github.com/JetBrains/JetBrainsMono/releases/download/v2.304/JetBrainsMono-2.304.zip \
  6f6376c6ed2960ea8a963cd7387ec9d76e3f629125bc33d1fdcd7eb7012f7bbf OFL.txt \
  fonts/ttf/JetBrainsMono-{Regular,Italic,Bold,BoldItalic}.ttf

merge_args=(--version "$VERSION" --lang "$LANG_CODE")
[[ -n "${RELEASE:-}" ]] && merge_args+=(--release "$RELEASE")
[[ -n "${DOC_DATE:-}" ]] && merge_args+=(--date "$DOC_DATE")
pdf=$(python3 scripts/merge_docs.py "${merge_args[@]}")

# TTFONTS tells TeX where to find the downloaded fonts (the trailing ':' keeps the default paths)
defaults="build/$VERSION-$LANG_CODE/defaults.yaml"
if [[ "$PANDOC" == docker ]]; then
  docker run --rm \
    --volume "$PWD:/data" --workdir /data \
    --user "$(id -u):$(id -g)" --env HOME=/tmp --env TEXMFVAR=/tmp/texmf-var \
    --env TTFONTS="/data/$FONT_DIR:" \
    "$PANDOC_IMAGE" --defaults "$defaults" "$@"
else
  TTFONTS="$PWD/$FONT_DIR:" "$PANDOC" --defaults "$defaults" "$@"
fi

echo "$pdf"
