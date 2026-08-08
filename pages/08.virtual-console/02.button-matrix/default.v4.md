---
title: 'Button Matrix'
date: '14:30 21-08-2023'
---

A **Button Matrix** is a quick way to create a whole **grid of buttons** at once,
instead of adding them one by one. It belongs to the
[Virtual Console](/virtual-console) and is ideal for banks of scenes, colour
buttons, or any set of looks you want laid out in a tidy block.

A Button Matrix is not a separate kind of widget: it creates a
[Frame](../frame) (or [Solo Frame](../solo-frame)) filled with a grid of
[Buttons](../button). Once created, each button is configured individually, and
the surrounding frame behaves like any other frame.

## Creating one

Drag **Button Matrix** from the widget list onto the page. A **Widget matrix
setup** dialog appears, where you set:

* **Columns** — the number of buttons across (1–99).
* **Rows** — the number of buttons down (1–99).
* **Width / Height** — the size of each individual button, in pixels.
* **Frame type** — whether the buttons go inside a **Normal** frame or a **Solo**
  frame:
  * **Normal** — the buttons are independent.
  * **Solo** — only one button's function plays at a time; starting one stops the
    others (see [Solo Frame](../solo-frame))). Perfect for a grid of
    mutually-exclusive looks such as a colour palette.

Confirm to create the grid.

## After creation

* Each cell is an ordinary [Button](../button) — select one in edit mode to
  attach a function and set its behaviour.
* The grid lives in a [Frame](../frame), so you can move, resize, label and
  page the whole block together.

## Tips

* Choose **Solo** at creation time for a colour or look palette, so the grid
  automatically behaves as a one-at-a-time selector.
* Drag a multi-selection of functions onto the matrix to populate several buttons
  quickly.
