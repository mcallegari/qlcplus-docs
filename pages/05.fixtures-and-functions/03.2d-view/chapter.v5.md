---
title: '2D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

# 2D View

The **2D View** shows your fixtures laid out on a flat plan of the stage. Each
fixture is drawn at its real position and, when fixtures are emitting light, you
see their colour and beam from the chosen point of view. It is the main view for
arranging a rig spatially and for designing looks visually.

It is one of the four views available from the toolbar at the top of the
[Fixtures and Functions](FixturesAndFunctions.md) workspace.

## Moving around

* **Zoom** — use the zoom buttons in the toolbar, or the **mouse wheel** over
  the view, to zoom in and out.
* **Scroll** — when the plan is larger than the window, use the scrollbars to
  pan.
* A **custom background image** (see settings) can be placed behind the grid,
  for example a plan of the venue.

## Selecting fixtures

* **Click** a fixture to select it (replacing the current selection).
* **Click an empty area and drag** to draw a selection rectangle; every fixture
  inside it is selected. The rectangle works in any drag direction.
* Hold **Ctrl** while clicking or rubber-banding to add to the current
  selection.
* **Click an empty area** without dragging to clear the selection.

## Moving fixtures

Drag a selected fixture (or a group of selected fixtures) to reposition it on
the stage. The position is stored in real-world units (metres or feet), so the
2D and 3D views stay consistent.

You can also drag a fixture from the **Add Fixtures** browser (left panel)
straight onto the plan.

## View settings

Click the **settings** button (the "bars" icon) in the toolbar to open the 2D
settings panel on the right. It contains:

### Environment

* **Width / Height / Depth** — the size of the stage environment, in metres or
  feet.
* **Grid units** — switch between **Meters** and **Feet**. Existing sizes are
  converted automatically when you switch.
* **Point of view** — choose how the stage is seen: **Top**, **Front**, **Right
  side** or **Left side** view. This changes which plane the fixtures are
  arranged on.

### Custom Background

* **Set a custom background** (image button) — pick an image file to show behind
  the grid.
* The path of the current image is shown next to it.
* **Reset background** (✕) — removes the background image.

### Selected fixtures

This section appears when one or more fixtures are selected:

* **Gel color** — for dimmer/generic fixtures, click the colour swatch to choose
  a gel colour applied to the fixture's beam.
* **Fixed zoom** — sets a fixed beam angle (in degrees) for fixtures that don't
  have a zoom channel.
* **Rotation** — rotates the selected fixtures on the current point of view.
* **Alignment** — align the selected fixtures to the **left** or to the **top**.
* **Distribution** — distribute the selected fixtures **equally** in the
  horizontal or vertical direction (useful for evening out spacing across a
  row or column).
