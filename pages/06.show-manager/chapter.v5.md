---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

A **Show** is a timeline that arranges other functions (scenes, chasers, audio,
video, …) on **tracks** against time, so a whole performance can be played back
as one. Editing a Show is different from the other functions: it opens its own
full-screen workspace, the **Show Manager**, instead of the right-panel editor.

You enter it by creating a Show from the **Add a new function** menu, or by
double-clicking an existing Show in the Function Manager.

## The timeline

The main area is a **timeline**: time runs left to right, and each horizontal
**track** holds the function items placed on it. A moving **cursor** marks the
current playback position, and a header shows time (or beat) markers.

* **Drag** a function from the right panel's Function Manager onto a track to add
  it to the show at that time.
* **Click** an item to select it; enable multiple selection (right panel) to
  select several.
* **Drag** items along a track to change when they play, or between tracks.
* **Double-click** an item to open the underlying function's own editor.

## Toolbar

Across the top:

* **Name** — the show's name.
* **Show items color** (colour icon) — sets the colour of the selected timeline
  items, to colour-code your show.
* **Lock / Unlock** — locks the selected items so they can't be moved or
  resized by accident (the icon toggles between lock and unlock).
* **Snap to grid** (grid icon) — makes items snap to the time grid when you move
  them.
* **Stretch the original function** — when enabled, resizing an item stretches
  the underlying function's timing to fit, rather than just cropping it.
* **Remove the selected items** (－) — removes the selected items from the show.
  (The original functions are **not** deleted.)
* **Copy** / **Paste** — copy the selected items and paste them at the cursor
  position.
* **Time display** — the current cursor time.
* **Play / Pause** and **Stop / Rewind** — play back the show from the cursor,
  pause/resume, and stop (press again to rewind to the start).
* **Markers** — the time division shown on the header: **Time**, or beats at
  **BPM 4/4**, **3/4** or **2/4**.
* **Zoom** — zoom the timeline in and out along the time axis.

## Tracks

Each track is one row of the timeline.

* Use the **＋ Create a new track** control to add a track.
* When a track is selected, **move track up / down** arrows (top-left of the
  timeline) reorder it among the other tracks.

## Right panel

While in the Show Manager the right panel is the usual
[Function Manager](FunctionManager.md), so you can drag any function onto the
timeline. It also gains a **Timing Settings** button specific to shows.
