-- Pandoc filter for the PDF build: deal with the bits of raw HTML used in the pages.

-- <br> (often inside table cells) becomes a real line break;
-- other inline HTML (e.g. <i class="fa ..."> icons) is dropped.
function RawInline(el)
  if el.format:match('html') then
    if el.text:match('^<br%s*/?>$') then
      return pandoc.LineBreak()
    end
    return {}
  end
end

-- Dividers: a thin full-width line instead of LaTeX's short centred rule.
function HorizontalRule()
  return pandoc.RawBlock('latex',
    '\\par\\noindent{\\color{qlcmuted!40}\\rule{\\linewidth}{0.4pt}}\\par')
end

-- HTML blocks such as <style> are web-only.
function RawBlock(el)
  if el.format:match('html') then
    return {}
  end
end
