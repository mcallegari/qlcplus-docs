---
title: 'Slider Matrix'
date: '03:07 22-08-2023'
---

A **Slider Matrix** is a quick way to create a whole **bank of sliders** at once,
instead of adding them one by one. It belongs to the
[Virtual Console](VirtualConsole.md) and is ideal for channel-per-fader layouts,
groups of submasters, or any row of faders you want laid out together.

A Slider Matrix is not a separate kind of widget: it creates a
[Frame](VCFrame.md) (or [Solo Frame](VCFrame.md)) filled with a grid of
[Sliders](VCSlider.md). Once created, each slider is configured individually, and
the surrounding frame behaves like any other frame.

## Creating one

Drag **Slider Matrix** from the widget list onto the page. A **Widget matrix
setup** dialog appears, where you set:

* **Columns** — the number of sliders across (1–99).
* **Rows** — the number of sliders down (1–99).
* **Width / Height** — the size of each individual slider, in pixels (sliders
  default to a tall, narrow shape).
* **Frame type** — whether the sliders go inside a **Normal** frame or a **Solo**
  frame:
  * **Normal** — the sliders are independent (the usual choice).
  * **Solo** — only one slider's function plays at a time (see
    [Solo Frame](VCFrame.md)).

Confirm to create the bank.

## After creation

* Each cell is an ordinary [Slider](VCSlider.md) — select one in edit mode to set
  its mode (Level, Submaster, etc.) and the channels or attribute it controls.
* The bank lives in a [Frame](VCFrame.md), so you can move, resize, label and
  page the whole block together. Add a **Submaster** slider to the frame to put a
  master level over the whole bank.

## Tips

* Build a row of **Level** sliders to make a simple channel-per-fader desk.
* Keep related sliders in one frame and add a **Submaster** to ride them all from
  a single fader.
