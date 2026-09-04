---
title: '3D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

The **3D View** renders your stage in three dimensions, complete with fixtures,
beams, colours and atmospheric smoke. It is the most realistic preview of your
show and is useful for visualising beam angles, positions and looks as an
audience would see them.

It is one of the four views available from the toolbar at the top of the
[Fixtures and Functions](/fixtures-and-functions) workspace.

> **Note:** The 3D View requires a system capable of the necessary graphics
> rendering. On systems that don't support it, a notice is shown in place of the
> 3D scene.

## Moving around

* **Zoom** — use the zoom buttons in the toolbar or the mouse wheel.
* **Orbit / pan** — drag in the scene to look around the stage.

## Selecting and positioning fixtures

* **Click** a fixture to select it; **Ctrl+click** to add to the selection.
* Selected fixtures can be positioned and rotated precisely from the settings
  panel (below), or aimed at a point in space with the **Pick a 3D point** tool
  in the left panel (shortcut **Ctrl+P**) — click in the scene and the selected
  fixtures point at that spot.

## View settings

Click the **settings** button (the "bars" icon) in the toolbar to open the 3D
settings panel. Its sections can be expanded and collapsed.

### Environment

* **Type** — the stage preset to render (e.g. simple stage, box, theatre).
* **Width / Height / Depth** — the size of the stage environment, in metres or
  feet (the unit follows the 2D view's setting).

### Rendering

* **Quality** — render quality: **Low**, **Medium**, **High** or **Ultra**.
  Higher settings look better but demand more from your graphics hardware.
* **Ambient light** — overall brightness of the scene when no fixtures are lit
  (0–100%).
* **Fixture light** — a global multiplier on the light your fixtures cast onto
  the stage and the set (0–200%, 100% by default). The 3D view adds the output
  of every fixture together, so a rig with many fixtures pointed at the same
  area can wash the stage out to flat white or full-intensity color and lose
  all detail. Turn this down to bring the surfaces back without dimming the
  environment, which **Ambient light** controls separately. It does not affect
  the beams in the air; use **Smoke amount** for those.
* **Lumens (experimental)** — render your rig photometrically instead of giving
  every fixture the same output (off by default). Two things change when you
  tick it:
  1. Each fixture is scaled by its real output: a 20000 lumen stage wash
    and a small LED PAR light the stage very differently in reality, and now they
    do so in the 3D view as well. The brightness comes from the **Lumens** value
    in the fixture definition's physical properties, spread over the beam angle
    so a narrow beam of the same output lands more intensely than a wide one, and
    measured against the brightest fixture in your project, so that fixture keeps
    the brightness it had and the rest fall in below it
  2. Light falls off with distance, as it does in the room: a fixture hung high lays a wider, dimmer
    pool than the same fixture hung low, and zooming a beam in concentrates it.
    The distance light travels is measured against the scale of your own rig — the
    average height your fixtures are placed at — so a small stage and an arena
    each expose sensibly without a setting to tell them apart. A fixture whose
    definition leaves Lumens unset is treated as being as bright as the reference,
    so it never goes dark; if no fixture in the project has the value, nothing
    changes. Use **Fixture light** alongside it to set the overall level.
  * This setting is marked experimental because the look it produces may still
    change. It depends on your fixture definitions carrying sensible Lumens and
    beam angle figures, and many do not. It also does not yet handle floor standing
    fixtures well: uplighters are averaged in with the hung rig when the
    reference distance is worked out, so a rig that mixes the two can render its
    uplighters very hot. Turning **Fixture light** down pulls the frame back if
    that happens. The beams in the air are not affected by the distance falloff
    yet, only the light landing on surfaces.
* **Smoke amount** — how much atmospheric haze is in the air (0–100%), which
  makes beams more visible.
* **Show FPS** — displays a frame-rate counter, useful for judging performance.

### Position / Rotation

These sections appear when something is selected and let you enter exact
**X / Y / Z** values:

* **Position** — the location of the selected items, in millimetres.
* **Rotation** — the orientation of the selected items, in degrees.

When several items are selected, edits are applied relative to the whole group.

### Scale

Appears when a **custom item** is selected. Sets the **X / Y / Z** scale as a
percentage. The **lock** button keeps the three axes proportional, so changing
one scales the item uniformly.

### Custom items

You can add your own 3D meshes to the scene (decor, set pieces, trusses, etc.):

* **Add** (＋) — pick a mesh file (`.obj`, `.dae`, `.3ds`, `.stl`, `.blend`, …)
  to place in the scene.
* **Remove** (－) — delete the selected custom items.
* **Normalize** (compress icon) — resets the selected items to a standard size.
* The list below shows all custom items; click one to select it (and edit its
  position, rotation and scale above).
