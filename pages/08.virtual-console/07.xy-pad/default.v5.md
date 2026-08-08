---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

An **XY Pad** is a two-axis control for **pan and tilt** — drag the cursor around
the pad and the attached moving fixtures follow. It's the natural way to position
moving heads and scanners by hand from the [Virtual Console](/virtual-console).

The pad's horizontal axis drives **pan** and the vertical axis drives **tilt**.
The whole area represents the complete range of movement your fixtures can reach:
the left edge is minimum pan, the right edge maximum pan, the top edge minimum
tilt and the bottom edge maximum tilt.

## Widget elements

|     |     |
| --- | --- |
| **Range sliders** | The two-handle sliders on the top and left side. They define the **range window**: the portion of the pad the cursor is allowed to move in. |
| **Main area** | The dark area in the centre, representing all the possible X/Y positions. |
| **Range window** | The semi-transparent cyan rectangle drawn on top of the main area, marking the limits set with the range sliders. It is hidden when the range sliders cover the full range. |
| **Cursor** | The highlighted round handle. Drag it with the mouse/touch, with the value sliders, or move it from an external controller. |
| **Fixture position dots** | The small yellow dots showing where each controlled fixture head actually is, read back from the DMX output. They let you see fixtures that lag behind the cursor (pan/tilt speed, fades) or that are limited to a narrower range. |
| **Value sliders** | The single-handle sliders on the bottom and right side. They set the X and Y position independently, which is handy for precise, one-axis adjustments. |
| **Presets** | The row of buttons under the pad, shown only when at least one preset has been added. An active preset button is highlighted. |

## Adding fixtures

Fixtures are added from the widget **settings**, in the **Fixtures** section:

* Click the <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a
  fixture/head** button to open the fixture side panel, then **drag** items onto
  the drop area below the list.
* You can drop a **universe**, a **fixture group**, a **fixture** or a single
  **head**. Universes, groups and fixtures are expanded into their individual
  heads, and heads already in the list are not added twice.
* Each row shows the head **name** and its current **X-Axis Range** and **Y-Axis
  Range**, in the units of the current Range Display Mode. A reversed axis is
  marked with **(R)**.
* Heads with no Pan or Tilt channel can be added, but they simply produce no
  output — the pad only drives the Pan/Tilt channels it finds.

Select rows in the list (with Ctrl/Shift for multiple selection) to act on them
with the <i class="fa fa-2x fa-pencil"></i> and
<i class="fa fa-2x fa-minus" style="color:crimson"></i> buttons of the same
toolbar.

## Limiting the movement

There are two independent ways to keep your fixtures from pointing where they
shouldn't — at the ceiling, into the audience, or off the stage. They can be
used together.

### 1. The range window (range sliders)

The top and left **range sliders** limit the area the pad works in. A
semi-transparent cyan rectangle marks the resulting **range window** over the
main area.

* When dragging with the mouse, the cursor is **clamped** to the window: it will
  not leave it even if you drag outside.
* When moving the pad from an **external controller**, the incoming value is
  **scaled** to the window instead. The full travel of a physical fader maps onto
  the reduced window, so you get more sensitivity where it matters, and the
  feedback sent back to the controller is scaled the same way.
* The range window is a property of the *pad*, not of the fixtures: it applies to
  all controlled heads at once.

### 2. Per-fixture Pan/Tilt range

Select one or more heads in the **Fixtures** list and click the
<i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the selected
fixture head(s)** button. A dialog lets you set, for both **Pan** and **Tilt**:

|     |     |
| --- | --- |
| **Minimum** | Start of the usable range for that head. |
| **Maximum** | End of the usable range for that head. |
| **Reverse** | Invert the direction of that axis for that head. |

The whole main area is always used, and each head's range is **scaled onto it**.
This is what makes a mixed rig behave consistently: a 540° pan fixture can be
made to move exactly like a 360° one, so all heads point at the same spot when
the cursor is in the same place.

For example, setting the Pan minimum to 20% and the maximum to 80% means the
cursor at the left edge outputs 20% (DMX 51), at the right edge 80% (DMX 204),
and everything in between is scaled proportionally.

> The values in this dialog are expressed in the units of the current **Range
> Display Mode** (see below): degrees, percentage or DMX. When several heads are
> selected, the dialog shows the range of the first selected head, and — in
> Degrees mode — the maximum allowed value is the smallest range among the
> selection, so the entered values are valid for every selected head. Pressing
> OK applies the same range to all of them.

## Settings

### Display Properties

* **Inverted Y-Axis** — flip the vertical axis, so the maximum tilt value is
  reached at the top of the pad instead of the bottom. Useful for fixtures rigged
  upside down on a truss.

### Range Display Mode

Selects the units used when displaying and editing the fixtures' Pan/Tilt ranges:

* **Degrees** — the physical angles taken from the fixture definition. Only
  meaningful for fixtures whose definition declares a pan/tilt range.
* **Percentage** — 0–100% of the fixture's full travel.
* **DMX** — raw DMX values, 0–255.

Changing the mode does not change the stored ranges, only how they are shown and
entered.

### Fixtures

The list of heads controlled by the pad, with its toolbar:

|     |     |
| --- | --- |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a fixture/head** | Opens the fixture side panel and the drop area to add universes, groups, fixtures or single heads. |
| <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the selected fixture head(s)** | Opens the Pan/Tilt range dialog for the selected head(s). See *Per-fixture Pan/Tilt range* above. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected fixture head(s)** | Removes the selected head(s) from the pad. |

## Presets

Presets are shown as buttons under the pad and give one-tap access to positions,
effects and fixture subsets. They are managed in the **Presets** tab of the
widget settings.

|     |     |
| --- | --- |
| ![](/basics/position.svg?resize=48,48) **Position Preset** | Stores the current cursor XY position as a preset. The default name is the X/Y coordinates at the time of creation. |
| ![](/basics/functions.svg?resize=48,48) **Scene/EFX Function Preset** | Opens the Function Manager side panel; drop ![](/basics/scene.svg?resize=48,48) [Scene](/basics/glossary-and-concepts#scene) or ![](/basics/efx.svg?resize=48,48) [EFX](/basics/glossary-and-concepts#efx) functions on the drop area to turn them into presets. The default name is the function name. Scenes without any Pan or Tilt channel are rejected. |
| ![](/basics/group.svg?resize=48,48) **Fixture Group Preset** | Opens the fixture side panel; drop universes, groups, fixtures or heads to create a fixture-group preset. Only heads already controlled by the pad are kept. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove selected preset** | Deletes the selected preset. |
| <i class="fa fa-2x fa-arrow-up"></i> / <i class="fa fa-2x fa-arrow-down"></i> **Move selected preset up / down** | Reorders the selected preset, which is also the order of the buttons under the pad. |
| **Preset name** | Renames the selected preset. The name is what appears on the button. |

### Preset types and behaviour

Only **one preset at a time** can be active. Activating a preset automatically
deactivates the previous one.

* ![](/basics/position.svg?resize=48,48) **Position** — clicking the button moves
  the cursor to the stored position. The pad keeps working normally afterwards,
  so you can nudge the position by hand from there.
* ![](/basics/efx.svg?resize=48,48) **EFX** — starts the
  [EFX](/function-manager/efx-editor) function. Click the button again (or
  activate another preset) to stop it. While the EFX runs, the fixture position
  dots show the fixtures moving along the pattern.
* ![](/basics/scene.svg?resize=48,48) **Scene** — starts the
  [Scene](/function-manager/scene-editor) function, which sets its own Pan/Tilt
  values. Click again to stop it.
  > Note that the **whole** Scene is started, colours, dimmers and everything
  > else included. It is best to create dedicated Scenes containing only Pan and
  > Tilt channels for use as XY Pad presets.
* ![](/basics/group.svg?resize=48,48) **Fixture Group** — restricts the pad to a
  **subset** of the heads it controls: while active, only those heads follow the
  cursor, the others hold their position. Click again to release the restriction
  and control all heads once more. The list shows how many heads the preset
  holds.

## External input

Like every Virtual Console widget, the XY Pad can be driven from MIDI, OSC,
DMX-in or any other supported input. The following controls can be assigned in
the widget's input configuration:

|     |     |
| --- | --- |
| **Pan / Horizontal axis** | Coarse horizontal (pan) position. Scaled to the range window when one is set. |
| **Pan fine** | Fine (LSB) horizontal position, for fixtures with 16-bit pan. |
| **Tilt / Vertical axis** | Coarse vertical (tilt) position. Scaled to the range window when one is set. |
| **Tilt fine** | Fine (LSB) vertical position, for fixtures with 16-bit tilt. |
| **Width** | Reserved for the range window width. |
| **Height** | Reserved for the range window height. |
| **Preset: &lt;name&gt;** | One entry is created for each preset. Sending a maximum value (button press) activates or toggles that preset, exactly like clicking its button. |

Whenever the position changes from something *other* than external input — a
mouse drag, a preset recall, an undo — the pad sends **feedback** with the
current position. Absolute/motorized faders follow the cursor, and encoders get
their internal value re-seeded so they keep working relative to the actual
position. Feedback is not echoed back while the controller itself is moving the
pad, so there is no feedback loop.

## Tips

* Set per-fixture **X/Y ranges** so a mixed rig of moving heads all point at the
  same spot when the pad cursor is centred.
* Use the **range window** to keep an XY Pad safely inside the stage area, and
  gain fader resolution on an external controller at the same time.
* Save common positions as **position presets** for instant recall during a show,
  and reorder them so the most used ones come first.
* Add **fixture group presets** to a single pad instead of building several pads:
  one tap selects which heads you are aiming.
* Watch the **fixture position dots** to check that every head really reached the
  position — heads still on their way, or with a narrower range, are immediately
  visible.
