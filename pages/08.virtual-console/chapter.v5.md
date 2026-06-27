---
title: 'Virtual Console'
date: '14:21 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapter 7

# Virtual Console

The **Virtual Console** is your custom control surface for running the show. You
build it from **widgets** — buttons, sliders, XY pads, cue lists, clocks and more
— laid out on one or more **pages**, and arranged exactly how you want to operate
your rig live. In short: the rest of QLC+ is where you *create* functions; the
Virtual Console is where you *play* them.

It has two modes:

* **Operate mode** (default) — clicking widgets triggers them. This is how the
  console is used during a show.
* **Edit mode** — you add, move, resize and configure widgets.

## Layout

* A **toolbar** across the top shows one tab per **page**; click a tab to switch
  pages. To the right are a **snapping** toggle (snap widgets to a grid) and
  **zoom** controls.
* The **page area** below is the canvas where widgets live.
* In edit mode, a **right panel** holds the editing tools.

### Pages

The console can have several pages, each its own surface of widgets — for
example one page per song, or per area of the stage.

* **Click** a page tab to show that page.
* **Right-click** a page tab to **detach** it into its own window (handy for a
  second screen).
* A page can be **PIN-protected**; switching to it then asks for the PIN.

See [VC Page](VCPage.md) for page settings (size, PIN, adding/removing pages).

## Right panel (edit tools)

* **Add a new widget** (＋) — opens the widget list; drag a widget type onto the
  page to create it.
* **Edit mode** (pencil, flashing red border when active) — toggles edit mode.
  With a widget selected it shows that widget's properties.
* **Function Manager** (functions icon) — opens the function list so you can drag
  functions onto widgets to attach them.
* **Remove the selected widgets** (－) — deletes the selected widgets.
* **Copy** / **Paste** — copy the selected widgets and paste them (you can also
  drag the paste button onto a target).

## Working with widgets

* **Drag** a widget type from the list onto the page to add it. Some widgets
  (Button Matrix, Slider Matrix) ask for a number of rows and columns first.
* In edit mode, **click** a widget to select it (Ctrl-click for several), **drag**
  to move, and use the handles to resize.
* **Attach a function** to a widget by dragging it from the Function Manager onto
  the widget.

## Widget properties

When a widget is selected in edit mode, the right panel shows its properties,
organised into tabs:

* **Settings** — the widget's own options (documented per widget below).
* **Presets** — for widgets that support them (Animation, XY Pad, Speed Dial).
* **External controls** — map physical controllers and keyboard shortcuts to the
  widget (see [External controls](#external-controls)).

### Basic properties (all widgets)

Every widget shares a **Basic properties** section:

* **Label** — the widget's caption.
* **Background color** — the widget's background colour.
* **Foreground color** — the colour of its text/graphics.
* **Font** — the font used for its label.
* **Background image** — an optional image shown behind the widget.
* **Z-Index** — stacking order, so overlapping widgets layer predictably.
* **Alignment** — when several widgets are selected, align them left / right /
  top / bottom.

### External controls

The **External controls** tab maps inputs to the widget so you can operate it
from hardware. You can bind:

* an **external input** (a fader, button or encoder from a MIDI/DMX/OSC/etc.
  input profile), or
* a **keyboard shortcut**.

This lets the Virtual Console be driven from a physical control surface or the
keyboard instead of the mouse.

## The widgets

| Widget | Purpose |
|--------|---------|
| [Frame / Solo Frame](VCFrame.md) | A container that groups widgets; a Solo Frame ensures only one of its functions plays at a time. |
| [Button](VCButton.md) | Triggers a function (toggle, flash, blackout, …). |
| [Slider](VCSlider.md) | A fader for levels, submasters, the Grand Master or a function attribute. |
| [Knob](VCSlider.md) | A rotary variant of the Slider. |
| [Cue List](VCCueList.md) | Plays a chaser cue by cue, like a theatrical cue stack. |
| [Speed Dial](VCSpeedDial.md) | Sets and multiplies the timing of functions. |
| [XY Pad](VCXYPad.md) | Two-axis pan/tilt control for moving fixtures. |
| [Animation](VCAnimation.md) | Plays and controls an RGB Matrix with live colour/preset changes. |
| [Label](VCLabel.md) | A static text label for titling and grouping. |
| [Audio Triggers](VCAudioTriggers.md) | Drives functions/levels from live audio analysis. |
| [Clock](VCClock.md) | A clock, stopwatch or countdown that can schedule functions. |

Button Matrix and Slider Matrix are simply quick ways to create a grid of
[Buttons](VCButton.md) or [Sliders](VCSlider.md) inside a frame.
