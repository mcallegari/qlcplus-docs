---
title: 'Fixture Group Manager'
date: '14:33 27-06-2026'
taxonomy:
    category:
        - docs
---

The **Fixture Group Manager** lists all the fixtures in your project, organised
by universe, and lets you create **fixture groups**, inspect and rename items,
and edit fixture and channel properties. Open it with the **Fixture Groups**
button in the left panel of the
[Fixtures and Functions](FixturesAndFunctions.md) workspace.

## The tree

The main area is a tree. At the top level are the **universes**; expand a
universe to see the **fixtures** patched to it, and expand a fixture to see its
**heads** and **channels**. **Fixture groups** you create also appear here as
expandable nodes.

### Selecting items

* **Click** an item to select it (a universe, group, fixture, head or channel).
  Selecting fixtures here also selects them in the views.
* Hold **Ctrl** to select several items at once.
* **Double-click** a node to expand or collapse it.

### Building groups by dragging

Drag fixtures (or whole selections) onto a group node to add them to that group.
Groups let you select and control several fixtures together throughout the
program.

## Toolbar buttons

* **＋ Add a new fixture group** — creates a new, empty fixture group.
* **－ Remove the selected items** — deletes the selected fixtures and/or
  fixture groups. (Removing a fixture from inside a group removes it from the
  group.)
* **Apply changes to fixtures of the same type** (double-check icon) — when
  editing fixture/channel properties, makes your edits apply to every other
  fixture of the same type as well. Toggle on or off.
* **Search** (magnifier) — opens a search box to filter the tree by group,
  fixture or channel name.
* **Rename the selected items** — renames the selected item. When several items
  are selected, you can rename them all at once with automatic numbering.
* **Inspect the selected item** (info icon) — opens an information summary of the
  selected item in the main view (a universe/group summary, or a fixture
  summary). Toggle off to return to the previous view.
* **Edit the selected item** (pencil icon) — enters editing mode for the
  selected item:
  * For a **fixture group**, opens the group editor in the main view.
  * For a **fixture** (or universe), opens the channel properties editor and
    widens the panel to show the property columns.
* **Add/Remove a linked fixture** (link icon) — appears while editing a fixture;
  adds or removes a linked copy of the fixture (a fixture that shares the same
  DMX address).

## Channel properties

When you edit a fixture, the panel widens and shows a row of columns for each
channel:

* **Name** — the channel name.
* **Mode** — the channel's working mode.
* **Flags** — special channel flags.
* **Can fade** — whether the channel is allowed to fade between values.
* **Behaviour** — how the channel behaves when several functions drive it
  (precedence).
* **Modifier** — an optional channel modifier curve.

These settings let you fine-tune how each channel responds. With **Apply to
fixtures of the same type** enabled, changes propagate to all matching fixtures.
