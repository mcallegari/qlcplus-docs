---
title: 'Fixture Browser'
date: '14:32 27-06-2026'
taxonomy:
    category:
        - docs
---

The **Fixture Browser** is where you patch new fixtures into your project. Open
it with the **Add Fixtures** button at the top of the left panel in the
[Fixtures and Functions](FixturesAndFunctions.md) workspace.

It lets you find a fixture definition in the library, set how it should be
patched, and drag it into one of the views.

## Finding a fixture

There are two ways to find a fixture:

* **Browse by manufacturer** — the browser opens on a list of manufacturers.
  Click a manufacturer to see its models, then click a model to select it. Use
  the back arrow (the manufacturer name at the top) to return to the
  manufacturer list.
* **Search** — type at least three characters in the search box at the top. The
  list switches to a search result tree, grouped by manufacturer, matching your
  text against manufacturers and models.

## Toolbar buttons

At the top of the browser:

* **＋ Create a new fixture definition** — opens the fixture definition editor to
  build a brand-new fixture from scratch.
* **Edit the selected fixture definition** — opens the selected fixture's
  definition in the editor. Enabled once a model is selected.
* **Remap fixtures** (shuffle icon) — opens the **Fixture Remap** tool, used to
  transfer the patch and contents of an existing project onto a different set of
  fixtures.

## Fixture properties

When you select a model, a **Fixture properties** panel appears at the bottom of
the browser. Set these before dragging the fixture into a view — they decide how
it is named, where it is patched, and how many copies are created.

| Property | Meaning |
|----------|---------|
| **Name** | The name the fixture (or fixtures) will have in your project. A default name is suggested; edit it as you like. When you add more than one at a time, they are numbered automatically. |
| **Universe** | The universe the fixture is patched to. The drop-down lists the universes you have defined. |
| **Address** | The starting DMX address (1–512) within that universe. The browser suggests the first free address that fits; it is recalculated whenever you change the mode, quantity or the number of fixtures already patched. |
| **Quantity** | How many copies of this fixture to add in one go (1–512). The copies are laid out back-to-back from the starting address, separated by the **Gap**. |
| **Channels** | The number of DMX channels the fixture uses. This is set automatically by the selected **Mode** and is read-only for fixtures that have modes. For a generic/dimmer fixture with no modes, you can set the channel count yourself (1–512). |
| **Gap** | The number of empty channels to leave between consecutive copies when **Quantity** is greater than one (0–511). Use this to keep each fixture on a round address, or to reserve room for expansion. |
| **Mode** | The fixture's operating mode (shown only for fixtures that define modes). Different modes expose different channel sets — e.g. a basic mode versus an extended mode with more controls. Selecting a mode updates the **Channels** count. |

### Inspecting a mode's channels

Next to the **Mode** drop-down is an **info** button (ⓘ). Toggle it on to list
all the channels of the selected mode, each with its name and a type icon, so
you can confirm the mode does what you expect before patching.

## Patching the fixture

Once the properties are set, **drag the fixture into a view** to patch it:

* In the **Universe View**, the grid highlights the channels it will occupy
  (one block per copy, separated by the gap) and shows whether the address is
  free.
* In the **2D / 3D View**, drop it where you want it positioned on the stage.

If the chosen address overlaps an existing fixture, an **"Address overlapping"**
error is shown and you should pick another DMX address.

## Generic RGB Panel

Selecting the special **Generic RGB Panel** model shows a dedicated **RGB panel
properties** panel instead, with extra parameters for describing a matrix of
pixels. A live preview at the bottom updates as you change them, showing the
pixel layout, the snake/zig-zag wiring and the start corner.

In addition to **Name**, **Universe** and **Address** (as above), you set:

| Property | Meaning |
|----------|---------|
| **Components** | The colour order of each pixel: **RGB**, **BGR**, **BRG**, **GBR**, **GRB**, **RBG**, or **RGBW**. Match this to how your panel's LEDs are wired so colours come out correct. |
| **Size** | The panel resolution in pixels, as **columns × rows** (width up to 170, height up to 999). This determines how many cells the matrix has. |
| **Physical** | The real-world size of the panel, as **width × height** in millimetres. Used to draw the panel to scale in the 2D/3D views. |
| **Start corner** | Which corner the pixel chain begins at: **Top-Left**, **Top-Right**, **Bottom-Left** or **Bottom-Right**. Marked by a dot in the preview. |
| **Displacement** | How the wiring runs from row to row (or column to column): **Snake** (alternating direction each line) or **Zig Zag** (every line runs the same direction). This must match your panel so effects map correctly. |
| **Direction** | Whether the pixels are chained **Horizontally** (row by row) or **Vertically** (column by column). |

Because a single panel can use a large number of channels — potentially more
than one universe — the panel may span several universes starting from the
chosen address.
