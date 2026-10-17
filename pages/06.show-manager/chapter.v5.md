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
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
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
| <i class="fa fa-drum fa-2x"></i> **Show the tempo sections** | Shows the tempo lane below the header (see [Tempo sections](#tempo-sections)). Needs **Time** markers. |
| <i class="fa fa-right-left fa-2x"></i> **Convert Chasers and EFX between Time and Beats tempo** | Opens the tempo converter (see [Tempo sections](#tempo-sections)). |
| <i class="fa fa-arrows-left-right-to-line fa-2x"></i> **Stretch the original function** | When enabled, resizing an item stretches the underlying function's timing to fit, rather than just cropping it. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected items** | Removes the selected items from the show. (The original functions are **not** deleted.) |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Copy the selected items into the clipboard. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Paste items from the clipboard at the cursor position. |
| **Time display** | The current cursor time. |
| <i class="fa fa-play fa-2x"></i> **Play / Pause** | Play back or pause/resume the Show from the cursor position. |
| <i class="fa fa-stop fa-2x"></i> **Stop / Rewind** | Stop thr Show playback (press again to rewind to the start). |
| **Markers** | The time division shown on the header: **Time**, or beats at **BPM 4/4**, **3/4** or **2/4**. |
| <i class="fa fa-2x fa-magnifying-glass-minus"></i><i class="fa fa-2x fa-magnifying-glass-plus"></i> **Zoom** | Zoom the timeline in and out along the time axis. |

## Tracks

Each track is one row of the timeline.

* Use the <i class="fa fa-plus" style="color:limegreen"></i> **Create a new track** control to add a track.
* When a track is selected, the <i class="fa fa-angle-up"></i> / <i class="fa fa-angle-down"></i> **move track up / down** arrows (top-left of the
  timeline) reorder it among the other tracks.

## Tempo sections

A show often plays several songs, each at its own tempo. **Tempo sections** give the show the tempo of each part of the timeline, so chasers, sequences and EFX set to a **Beats** tempo follow the beat of the song they play over instead of the global BPM. Items in a collection follow too. Shows without sections are unchanged.

Click <i class="fa fa-drum"></i> **Show the tempo sections** to show the tempo lane. A section has a start, a length, a **BPM** (decimals allowed), the **beats per bar** and a name, normally one per song. Drag a section to move it, or its edges to resize it. Sections can't overlap, and edges snap to item edges. Place a section's start on the song's first downbeat, and moving or editing a section never moves the show items.

| Button | What it does |
|--------|--------------|
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Add a tempo section at the cursor** | Adds a section that lasts up to the next one, and opens its editor. |
| <i class="fa fa-music fa-2x"></i> **Add tempo sections from the selected audio items** | Adds a section per audio item. When items overlap existing sections, you can let the new sections **take over from their start**: the earlier sections are cut where a new song starts. |
| <i class="fa fa-pen fa-2x"></i> **Edit the selected tempo section** | Sets the **BPM**, **beats per bar** and name. Double-click does the same. |
| **Split the selected tempo section at the cursor** | Splits the section at the nearest beat. |
| <i class="fa fa-trash-can fa-2x" style="color:crimson"></i> **Delete the selected tempo section** | **Shift**+click deletes all the sections. |

All changes can be undone. While the show plays, the main toolbar shows the BPM of the section playing and a circle that flashes on each beat of the bar.

### Converting Time and Beats tempo

Existing chasers and EFX with a **Time** tempo can be converted to **Beats** at a song's tempo, and back. Click **Convert Chasers and EFX between Time and Beats tempo**, or the same button next to **Tempo** in the chaser editor.

| Option | What it does |
|--------|--------------|
| **Chasers and EFX of** | The selected items, the whole show or all shows. Those in collections are included. |
| **Tempo** | The section under each item, a chosen section or a typed BPM. |
| **Round to** | Rounds step times to a 1, ½, ¼ or ⅛ beat. |
| **Apply to** | The functions themselves, which changes them wherever they are used, or new copies for the show, with one copy per tempo unless unticked. |

The converter previews the result, and the whole conversion is one undo step.

A Virtual Console Speed Dial writes milliseconds, which a **Beats** tempo chaser reads as beats, so the converter warns when a chaser has a Speed Dial. Disconnect it from chasers that follow tempo sections.

Only chasers, sequences and EFX follow the sections so far. RGB matrices and scenes still follow the global BPM.

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
