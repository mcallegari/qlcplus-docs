---
title: Slider
date: '03:02 22-08-2023'
---

A **Slider** is a fader in the [Virtual Console](VirtualConsole.md). Depending on
how it's configured it can control the level of a set of channels, act as a
submaster, drive the Grand Master, or adjust an attribute of a function. The
**Knob** widget is the same control drawn as a rotary dial instead of a fader.

## Settings

### Display Style

* **DMX Value / Percentage** — whether the slider's readout shows raw DMX
  (0–255) or a percentage.
* **Normal / Inverted** — the slider's direction (top = maximum, or top =
  minimum).

### Slider Mode

The mode decides what the slider actually controls:

* **Level** — controls the level of a chosen set of **channels** (the most common
  mode). See *Level mode* below.
* **Adjust** — adjusts an **attribute** of an attached function (for example its
  intensity or a custom attribute).
* **Submaster** — the slider acts as a submaster, scaling the level of the
  widgets within its frame.
* **Grand Master** — the slider controls the Grand Master (the global master
  level).

### Function Control (Adjust mode)

* **Attribute** — which function attribute the slider adjusts.
* **Detach the current function** — clears the attached function.

### Level mode

* **Channels** — the channels the slider drives. Use **Add/Remove channels** to
  pick fixture channels.
* **Show flash button** — adds a momentary flash button to the slider that snaps
  it to full while pressed.
* **Click & Go button** — adds a quick colour/preset picker next to the slider:
  * **None**, **RGB/CMY** (colour picker) or **Gobo/Effect/Macro** (preset
    picker).
* **Monitor channel levels** — the slider follows (monitors) the actual output
  level of its channels.
* **Values range** — **Upper limit** and **Lower limit** constrain the range the
  slider travels between.

### Grand Master mode

* **Grand Master mode** — **Reduce values** (scale proportionally) or **Limit
  values** (cap).
* Applies to **Intensity channels** only or **All channels**.

### External input

* **Catch up with the external controller input value** — when bound to a
  physical fader, the slider only starts moving once the hardware fader passes
  the current value, preventing jumps ("pickup"/"soft takeover").

## Tips

* Use **Level** mode with a Click & Go button to make a single fader that both
  dims and colours a group of fixtures.
* Use **Submaster** mode in a frame of buttons/sliders to add a master level over
  that whole section of the console.
