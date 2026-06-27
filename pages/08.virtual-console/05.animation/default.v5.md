---
title: Animation
date: '03:09 22-08-2023'
---

An **Animation** widget plays and controls an [RGB Matrix](RGBMatrixEditor.md)
function, letting you change its **colours** and switch its **pattern preset**
live. It's the performance front-end for pixel/LED effects in the
[Virtual Console](VirtualConsole.md).

Attach an RGB Matrix function by dragging it onto the widget or from the
settings.

## Settings

* **Attached Function** — the RGB Matrix this widget controls. Use **Detach the
  current function** to clear it.
* **Apply color and preset changes immediately** — when on, colour or preset
  changes take effect instantly; when off, they apply the next time the function
  starts.

### Appearance

Choose which controls the widget displays:

* **Level Fader** — a fader for the matrix's intensity.
* **Label** — the widget's text label.
* **Color 1–5 Buttons** — colour buttons that set the matrix's colours live (how
  many are useful depends on the pattern).
* **Preset List** — a list to switch the matrix's pattern/algorithm on the fly.

## Presets

The Animation widget has a **Presets** tab where you build the list of selectable
presets:

* **Add a fixed-color preset** for a chosen colour slot.
* **Add R/G/B knobs** for a colour slot (live colour mixing).
* **Add a script algorithm preset** (choose one of the matrix algorithms).
* **Add a Text preset** using text you enter.
* Reorder presets with **move up / move down**, or **remove** them.

## Tips

* Build a **Preset List** of your favourite looks for a matrix so an operator can
  switch between them with one tap.
* Turn on **Apply changes immediately** for hands-on, improvised colour control.
