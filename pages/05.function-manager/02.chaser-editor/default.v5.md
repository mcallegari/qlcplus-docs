---
title: 'Chaser Editor'
date: '12:08 21-08-2023'
---

A **Chaser** plays a list of functions (usually scenes) one after another, each
for a defined time. It's the main way to build sequences of looks — colour
chases, step-based effects, cue stacks, and so on. The Chaser Editor opens in
the right panel of the [Fixtures and Functions](FixturesAndFunctions.md)
workspace.

## Toolbar

* **Name** — the chaser's name (top bar text field).
* **Back** (arrow) — returns to the previous editor.
* **Preview previous / next step** (circled arrows) — when preview is on, steps
  through the chaser manually so you can check each look on the output.
* **Add a new step** (＋) — opens the Function Manager in a side panel; drag
  functions in, or use it to pick functions to append as steps.
* **Duplicate the selected step(s)** (clone) — copies the selected steps.
* **Randomize the selected step(s) order** (shuffle) — shuffles the order of the
  selected steps.
* **Auto-set step durations** (stopwatch) — divides the chaser's total duration
  evenly across the selected steps.
* **Remove the selected steps** (－) — deletes the selected steps.
* **Print** — prints the list of chaser steps.

## The steps list

Each row is a step: the function it plays, its **fade in**, **hold** and **fade
out** times, and an optional **note**.

* **Click** a step to select it; **Ctrl+click** for several.
* **Drag** steps to reorder them, or drag functions in from the Function Manager
  to add them.
* **Double-click** a step's time fields to edit the times.
* **Double-click** the function name to open that function's own editor.

## Run properties

The collapsible **Run properties** section controls how the chaser plays back:

* **Run Order** — **Loop** (repeat), **Single Shot** (play once), **Ping Pong**
  (forward then backward), or **Random**.
* **Direction** — **Forward** or **Backward**.
* **Tempo** — whether times are measured in **Time** or in **Beats** (synced to
  the tempo).
* **Fade In** / **Fade Out** — where each step gets its fade time from:
  * **Default** — use the function's own fade.
  * **Common** — one fade value shared by every step.
  * **Per Step** — each step has its own fade value (editable in the list).
* **Duration** — where the step duration comes from: **Common** (one value for
  all steps) or **Per Step**.
