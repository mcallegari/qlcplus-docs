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
* **Name** — the name the item is listed under. It starts as the file name of
  the mesh, so renaming is how you tell two copies of the same mesh apart.
  Available when a single item is selected.
* **Color** — click the colour swatch to choose a base colour for the selected
  items. The colour tints the mesh rather than flooding it, so a mesh that
  carries its own materials keeps its shading: the folds of a curtain stay
  visible once it is turned red. Set it back to the default grey for the
  mesh's own appearance.
* The list below shows all custom items; click one to select it (and edit its
  name, colour, position, rotation and scale above).
