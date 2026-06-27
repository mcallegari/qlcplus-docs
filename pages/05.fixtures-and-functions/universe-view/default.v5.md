---
title: 'Universe View'
date: '13:53 27-06-2026'
---

# Universe View

The **Universe View** shows a single DMX universe as a grid of its 512
channels. It is the most technical of the four views and is useful for checking
exactly which channels each fixture occupies, spotting gaps or overlaps, and
re-addressing fixtures.

It is one of the four views available from the toolbar at the top of the
[Fixtures and Functions](FixturesAndFunctions.md) workspace. Use the **universe
selector** in that toolbar to choose which universe you are looking at.

## The grid

The view is a grid of cells, one cell per DMX channel (addresses 1–512). Each
fixture occupies a contiguous block of cells corresponding to its channels,
labelled with the fixture name. The icon shown in each cell indicates the type
of that channel (intensity, colour, pan, tilt, and so on).

Hover over a cell to see a tooltip describing the fixture and channel at that
address.

The name of the universe currently shown is displayed at the top left.

## Selecting fixtures

* **Click** a fixture's cells to select it. Selecting a fixture replaces the
  current selection.
* Hold **Ctrl** (or enable **Toggle multiple selection** in the left panel) to
  add fixtures to the selection instead of replacing it.

## Moving a fixture

Drag a selected fixture along the grid to move it to a different starting
address. While you drag, the target cells are highlighted to show where the
fixture will land:

* If the new position is free, the move is allowed.
* If the new position would overlap another fixture, the move is rejected and
  the fixture stays where it was.

## Cut and paste

Two buttons at the top right of the view let you duplicate or relocate fixtures:

* **Cut** (scissors) — copies the currently selected fixtures to the clipboard.
* **Paste** (clipboard) — places the clipboard fixtures at the first available
  free position in the universe. If there isn't enough free space, an error is
  shown and nothing is pasted.

## Adding fixtures

You can also drag a fixture from the **Add Fixtures** browser (left panel)
directly onto the grid. While dragging, the grid highlights the channels the
fixture would occupy and shows whether the chosen address is free. Drop it on a
free block to patch it there.
