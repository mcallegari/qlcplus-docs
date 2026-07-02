---
title: 'Scene Editor'
---

A **Scene** is the most basic function: a fixed look made of channel values for
one or more fixtures. The Scene Editor opens in the right panel of the
[Fixtures and Functions](/fixtures-and-functions) workspace when you create or
edit a scene.

A scene is built from **components** — the fixtures, fixture groups and palettes
that it controls. You set the actual channel values for these components using
the views and the channel tools in the left panel; the editor itself manages
which components belong to the scene and how it fades.

## Toolbar

* **Name** — the scene's name (the text field in the top bar). Edit it freely.
* **Back** (arrow) — returns to the previous editor or to the Function Manager.
* **Add a fixture/group** (fixture icon with ＋) — opens the Fixture Group
  Manager in a side panel; drag fixtures or groups from it into the scene.
* **Add a palette** (palette icon with ＋) — opens the Palette Manager in a side
  panel; drag palettes into the scene to drive its values from a palette.
* **Remove the selected items** (－) — removes the selected components from the
  scene, after confirmation.

## The component list

The main area lists every component (fixture, group or palette) in the scene.

* **Click** a component to select it; selecting a fixture also selects it in the
  views so you can edit its channel values.
* **Ctrl+click** to select several.
* You can also **drag** fixtures, groups or palettes straight onto the list to
  add them.

## Setting values

To set the look, select the scene's fixtures and adjust their channels using the
**channel capability tools** in the left panel (Intensity, Colour, Position,
etc.) or the **DMX View**. The values are stored in the scene as you change them.

## Speed

The collapsible **Speed** section sets how the scene fades when triggered:

* **Fade in** — the time the scene takes to fade up to its values.
* **Fade out** — the time it takes to fade back out when stopped.

Double-click a time field, or use the clock button next to it, to enter a value
in the time editor.

> When a scene is part of a **Sequence**, it is edited through the Sequence
> Editor's *Fixtures* tab rather than on its own. See
> [Sequence Editor](SequenceEditor.md).
