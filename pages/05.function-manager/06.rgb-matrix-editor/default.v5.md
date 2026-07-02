---
title: 'RGB Matrix Editor'
date: '12:24 21-08-2023'
media_order: blending.png
---

An **RGB Matrix** plays animated patterns, text and images across a **fixture
group** laid out as a grid — LED panels, pixel bars, a wall of PARs, and so on.
The RGB Matrix Editor opens in the right panel of the
[Fixtures and Functions](/fixtures-and-functions) workspace, with a live
**preview** of the animation.

## Basic settings

* **Name** — the matrix's name (top bar).
* **Fixture Group** — the group of fixtures the matrix plays on. The group's
  layout (rows × columns) defines the pixel grid. Choose a group before anything
  is shown.
* **Pattern** — the animation algorithm to play. QLC+ ships many built-in
  patterns, plus script-based ones; some patterns expose their own extra
  **Parameters** (see below).
* **Save this matrix to a sequence** — converts the running matrix into a
  sequence of steps, so you can fine-tune or trim it as a chaser.
* **Blend mode** — how the matrix combines with other output on the same
  fixtures: **Default (HTP)**, **Mask**, **Additive** or **Subtractive**.
* **Color mode** — which fixture capability the matrix drives: **Default (RGB)**,
  **White**, **Amber**, **UV**, **Dimmer** or **Shutter**.
* **Colors** — the colour (or colours) the pattern uses. Depending on the
  pattern you can set up to five colours; each has a reset button.

## Parameters

Some patterns add a **Parameters** section with controls specific to that
pattern (for example the number of bars, the size of a shape, and so on). It
appears only when the selected pattern has adjustable parameters.

## Text patterns

When the pattern is **Text**, a text section appears:

* **Text** — the message to scroll or display.
* **Font** — choose and size the font.
* **Animation** — how the text moves: **Letters** (one at a time),
  **Horizontal** or **Vertical** scrolling.
* **Offset** — **X** / **Y** position of the text on the grid.

## Image patterns

When the pattern is **Image**, an image section appears:

* **Image** — pick the image (or animated GIF) file to display.
* **Animation** — **Static**, **Horizontal**, **Vertical** or **Animation**
  (play the frames).
* **Offset** — **X** / **Y** position of the image on the grid.

## Speed

* **Steps fade in** — fade time into each animation step.
* **Steps hold** — how long each step is held.
* **Steps fade out** — fade time out of each step.
* **Tempo type** — measure times in **Time** or in **Beats**.

## Order and direction

* **Run Order** — **Loop**, **Single Shot** or **Ping Pong**.
* **Direction** — **Forward** or **Backward**.
