---
title: 'Palette Manager'
date: '14:34 27-06-2026'
taxonomy:
    category:
        - docs
---

The **Palette Manager** lists the **palettes** in your project and lets you
create, edit and delete them. Open it with the **Palettes** button in the left
panel of the [Fixtures and Functions](FixturesAndFunctions.md) workspace.

A palette is a saved, reusable value of a particular kind — an intensity level,
a colour, a pan/tilt position, or a 3D position — that you can apply to fixtures
and reference from your functions. Changing a palette updates everywhere it is
used.

## The list

The main area lists every palette, each with an icon for its type and its name.

* **Click** a palette to select it; **Ctrl+click** to select several.
* **Drag** a palette onto fixtures or other targets to apply it.
* **Double-click** a palette to open its editing tool (see below).

## Filtering by type

The toolbar at the top has one toggle button per palette type. Each shows a
**count** of how many palettes of that type exist, and toggling it filters the
list:

* **Intensity** — dimmer levels.
* **Color** — colours (RGB / CMY / WAUV).
* **Position** — pan / tilt positions.
* **3D Position** — positions defined as a point in the 3D stage.

The **search** button (magnifier) opens a box to filter the list by palette
name.

## Creating and editing a palette

**Double-click** a palette to open the matching tool over the list, where you
can adjust its value:

* Intensity palettes open the **Intensity** tool.
* Colour palettes open the **Color** tool.
* Position palettes open the **Position** tool.
* Zoom palettes open the **Beam** tool.
* 3D position palettes open the **3D Position** tool.

Adjust the value in the tool and close it to store the change in the palette.

## Deleting palettes

Select one or more palettes and click the **－ Delete** button (red minus). A
confirmation dialog lists the palettes about to be removed; confirm to delete
them.
