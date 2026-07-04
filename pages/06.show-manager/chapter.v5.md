---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapter 5

# Show Manager 

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

| Button | What it does |
|--------|--------------|
| **Name** | The show's name. |
| ![](../basics/color.svg?resize=48,48) **Show items color** | Sets the colour of the selected timeline items, to colour-code your show. |
| ![](../basics/lock.svg?resize=48,48) **Lock / Unlock** | Locks the selected items so they can't be moved or resized by accident (the icon toggles between lock and unlock). |
| ![](../basics/grid.svg?resize=48,48) **Snap to grid** | Makes items snap to the time grid when you move them. |
| <i class="fa fa-arrows-left-right-to-line fa-2x" style="color:lightyellow"></i> **Stretch the original function** | When enabled, resizing an item stretches the underlying function's timing to fit, rather than just cropping it. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected items** | Removes the selected items from the show. (The original functions are **not** deleted.) |
| <i class="fa fa-copy fa-2x"></i> **Copy** / <i class="fa fa-paste fa-2x"></i> **Paste** | Copy the selected items and paste them at the cursor position. |
| **Time display** | The current cursor time. |
| <i class="fa fa-play fa-2x"></i> **Play / Pause** / <i class="fa fa-stop fa-2x"></i> **Stop / Rewind** | Play back the show from the cursor, pause/resume, and stop (press again to rewind to the start). |
| **Markers** | The time division shown on the header: **Time**, or beats at **BPM 4/4**, **3/4** or **2/4**. |
| **Zoom** | Zoom the timeline in and out along the time axis. |

## Tracks

Each track is one row of the timeline.

* Use the <i class="fa fa-plus" style="color:limegreen"></i> **Create a new track** control to add a track.
* When a track is selected, the <i class="fa fa-angle-up"></i> / <i class="fa fa-angle-down"></i> **move track up / down** arrows (top-left of the
  timeline) reorder it among the other tracks.

## The timing tool

The <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i> **Timing** button in the right panel opens the **timing tool**, a
panel for adjusting the exact position and length of the items on the timeline
without having to drag them by hand. It is the precise counterpart to
dragging items around: perfect for lining cues up to the frame, or for nudging a
whole selection by a fixed amount.

Everything in the tool follows the show's **Markers** setting: when the timeline
is in **Time** mode, values are shown and entered as time (hours, minutes,
seconds, milliseconds); when it is in one of the **BPM** modes, they are shown
and entered as beats.

The tool is divided into three sections.

### Alignment

Snaps the selected items to the playback **cursor**:

* **Align start to cursor** — moves each selected item so that it *starts* at the
  cursor position.
* **Align end to cursor** — stretches or shrinks each selected item so that it
  *ends* at the cursor position (keeping its start where it is).

### Timings

Shows the **Start time**, **End time** and **Duration** of the selected item.
Click any of the three to reveal a compact **h / m / s / ms** (or beats) editor
in its place, type the exact value, and the item updates immediately:

* With a **single item** selected, the value you type is applied **absolutely** —
  the item is placed exactly there.
* With **several items** selected, the fields read *Multiple* and any change is
  applied **relatively** — the same offset is added to every selected item, so
  you can shift a whole block by, say, +2 seconds at once.

Locked items (see the toolbar's lock button) are left untouched.

### Cut/Insert

Adds or removes a span of time across the **whole show** at the cursor position —
so you can make room for a new section, or close a gap, and everything after the
cursor shifts accordingly:

* **Length** — click to set how much time to cut or insert (in the same h / m / s
  / ms or beats editor).
* **Insert time** — pushes everything after the cursor later by *Length*,
  opening an empty gap.
* **Cut time** — removes a span of *Length* starting at the cursor, pulling
  everything after it earlier.

## Right panel

While in the Show Manager the right panel is the usual
[Function Manager](/function-manager), so you can drag any function onto the
timeline. It also gains the <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i> **Timing** button described above.
