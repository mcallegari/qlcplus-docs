---
title: 'Solo Frame'
date: '03:43 22-08-2023'
---

A **Solo Frame** is a special [Frame](VCFrame.md) in the
[Virtual Console](VirtualConsole.md) with one extra rule: only **one** of the
functions inside it can play at a time. Starting a function automatically stops
any other function running from a widget in the same frame.

This makes a Solo Frame the natural container for any group of looks that should
be mutually exclusive — a row of colour buttons, a bank of scene "states", or a
palette where selecting a new look replaces the previous one. Without it you'd
have to stop the old look manually before starting the new one.

A Solo Frame is the same widget as a [Frame](VCFrame.md) and shares all of its
settings; it simply adds the solo behaviour and the **Solo Frame Options**
section.

## How the solo behaviour works

* When a widget inside the frame **starts a function**, every other function
  started by widgets in the same frame is **stopped**.
* This applies to the widgets directly contained in the frame (for example its
  [Buttons](VCButton.md)), giving you a clean one-at-a-time selector.
* It only affects functions started *from within this frame* — functions running
  elsewhere on the console are not touched.

## Settings

A Solo Frame has all the [Frame settings](VCFrame.md#settings) — Header, Pages,
Shortcuts — plus:

### Solo Frame Options

* **Exclude monitored functions** — keeps functions that are only being
  *monitored* from being stopped by the solo rule. Use this when a widget in the
  frame is monitoring/reflecting a function's state rather than actively playing
  it, so monitoring isn't interrupted every time another button is pressed.

## Creating one

* Drag **Solo Frame** from the widget list onto the page, **or**
* When creating a [Button Matrix](VCButtonMatrix.md) or
  [Slider Matrix](VCSliderMatrix.md), choose **Solo** as the frame type to wrap
  the whole grid in a Solo Frame.

## Tips

* Put a palette of colour or scene buttons in a Solo Frame so pressing one always
  cancels the previous one — no "stop" step needed.
* Combine with **Pages** (from the Frame settings) to build a paged, one-at-a-time
  selector that still behaves solo on every page.
