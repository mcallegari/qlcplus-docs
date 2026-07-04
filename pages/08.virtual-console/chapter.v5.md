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
  pages. To the right are a ![](../basics/grid.svg?resize=24,24) **snapping**
  toggle (snap widgets to a grid) and **zoom** controls.
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

| Button | What it does |
|--------|--------------|
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Add a new widget** | Opens the widget list; drag a widget type onto the page to create it. |
| ![](../basics/edit.svg?resize=48,48) **Edit mode** | Toggles edit mode (the button shows a flashing red border while active). With a widget selected it shows that widget's properties. |
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Opens the function list so you can drag functions onto widgets to attach them. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected widgets** | Deletes the selected widgets. |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Copies the selected widgets to the clipboard. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Pastes the widgets from the clipboard onto the page. You can also drag the paste button onto a target frame to paste inside it. |

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
| ![](../basics/button.svg?resize=48,48) [Button](/virtual-console/button) | Triggers a function (toggle, flash, blackout, …). |
| ![](../basics/buttonmatrix2.png?resize=48,48) [Button Matrix](/virtual-console/button-matrix) | Create a grid of buttons inside a frame. |
| ![](../basics/slider.svg?resize=48,48) [Slider](/virtual-console/slider) | A fader for levels, submasters, the Grand Master or a function attribute. |
| ![](../basics/sliders.svg?resize=48,48) [Slider Matrix](/virtual-console/slider-matrix) | Create a grid of sliders inside a frame. |
| ![](../basics/knob.svg?resize=48,48) [Knob](/virtual-console/slider) | A rotary variant of the Slider. |
| ![](../basics/animation.svg?resize=48,48) [Animation](/virtual-console/animation) | Plays and controls an RGB Matrix with live colour/preset changes. |
| ![](../basics/speed.svg?resize=48,48) [Speed Dial](/virtual-console/speed-dial) | Sets and multiplies the timing of functions. |
| ![](../basics/xypad.svg?resize=48,48) [XY Pad](/virtual-console/xy-pad) | Two-axis pan/tilt control for moving fixtures. |
| ![](../basics/cuelist.svg?resize=48,48) [Cue List](/virtual-console/cue-list) | Plays a chaser cue by cue, like a theatrical cue stack. |
| ![](../basics/frame.svg?resize=48,48) [Frame](/virtual-console/frame) | A container that groups widgets. |
| ![](../basics/soloframe.svg?resize=48,48) [Solo Frame](/virtual-console/solo-frame) | A container that ensures only one of its functions plays at a time. |
| ![](../basics/label.svg?resize=48,48) [Label](/virtual-console/label) | A static text label for titling and grouping. |
| ![](../basics/audiotriggers.svg?resize=48,48) [Audio Triggers](/virtual-console/audio-triggers) | Drives functions/levels from live audio analysis. |
| ![](../basics/clock.svg?resize=48,48) [Clock](/virtual-console/clock) | A clock, stopwatch or countdown that can schedule functions. |
