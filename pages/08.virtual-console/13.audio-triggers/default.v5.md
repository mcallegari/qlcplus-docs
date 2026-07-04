---
title: 'Audio Triggers'
date: '03:46 22-08-2023'
---

An **Audio Triggers** widget listens to live audio (from the computer's audio
input) and uses its **frequency spectrum** to drive functions, DMX channels or
other widgets. It's how you make lights react to music automatically in the
[Virtual Console](VirtualConsole.md).

The incoming sound is split into a number of **frequency bars** (bass to treble),
and each bar can be assigned a target that it controls as the music plays.

## Settings

* **Activation threshold** — the level a bar must reach before its target is
  triggered.
* **Deactivation threshold** — the level a bar must fall back below before its
  target is released. (Having the two thresholds separate prevents flickering on
  and off.)

### Spectrum Bars

* **Number of bars** — how many frequency bands the spectrum is divided into.
  More bars give finer control across the frequency range.

### Per-bar assignment

For each bar you set:

* **Name** — a label for the bar.
* **Type** — what the bar controls:
  * **None** — unused.
  * **DMX** — drives a DMX channel level.
  * **Function** — starts/stops a function. **Drop a Function here** to assign it.
  * **Widget** — drives another VC widget. **Drop a VC Widget here** to assign
    it.
* **Information** — shows the current assignment.

## Tips

* Assign the **bass** bars to intensity or strobe functions and the **treble**
  bars to colour changes for a classic music-reactive look.
* Tune the **activation / deactivation thresholds** to the track so effects fire
  on beats without chattering.
