---
title: 'EFX Editor'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

An **EFX** (effect) moves fixtures along a mathematical path — circles, eights, lines and other shapes — automatically. It's the quickest way to create pan/tilt movement effects (and dimmer or RGB effects) across many fixtures at once. The EFX Editor opens in the right panel of the [Fixtures and Functions](/fixtures-and-functions) workspace.

## Preview

A large **preview** at the top shows the path and the position of each fixture in real time as you change the settings.

| Action | Result |
|--------|--------|
| **Click** the preview | Toggles between the flat (2D) view and the sphere view. |
| **Drag** in the sphere view | Rotates the sphere horizontally, so you can look at the path from another angle. |

## Fixtures

The **Fixtures** section lists the fixtures (or heads) taking part in the effect.

| Button | What it does |
|--------|--------------|
| <i class="fa fa-2x fa-arrow-down-wide-short"></i> **Set an offset on all fixtures** | Opens a popup to spread the fixtures around the path in one go (see below). |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a fixture/head** | Opens the Fixture Group Manager in a side panel. Drag universes, groups, fixtures or single heads onto the drop area below the list. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected fixture head(s)** | Removes the selected heads from the effect (asks for confirmation). |

### Offset popup

| Setting | Meaning |
|---------|---------|
| **Offset** | The offset value in degrees (0–360). |
| **Increasing** | Gives each fixture a progressively larger offset, so they chase around the shape instead of moving together. |
| **Randomize** | Gives each fixture a random offset. |

**Increasing** and **Randomize** are mutually exclusive. With neither ticked, the same offset is applied to every fixture.

### The fixtures list

| Column | Meaning |
|--------|---------|
| **#** | The head's index in the effect — this is the order used by the **Serial** and **Asymmetric** fixture orders. |
| **Fixture** | The fixture or head name. |
| **Mode** | What the effect drives for that head: **Position** (pan/tilt), **Dimmer**, or **RGB**. |
| **Reverse** | Makes that head travel the path in the opposite direction. |
| **Start offset** | Where on the path that head begins, in degrees (0–359). |

Click a row to select it; **Ctrl+click** or **Shift+click** to select several before removing them.

## Pattern

The **Pattern** section defines the shape and how it sits in space.

| Setting | Meaning |
|---------|---------|
| **Pattern** | The base shape: **Circle**, **Eight**, **Line**, **Line2**, **Diamond**, **Square**, **SquareChoppy**, **SquareTrue**, **Leaf** or **Lissajous**. |
| **Relative movement** | Runs the effect relative to each fixture's current position instead of from an absolute centre. Hides the X/Y offset fields. |
| **Width** | Horizontal size of the shape (0–127). |
| **Height** | Vertical size of the shape (0–127). |
| **X offset** | Moves the shape's centre horizontally (0–255). Absolute mode only. |
| **Y offset** | Moves the shape's centre vertically (0–255). Absolute mode only. |
| **Rotation** | Rotates the whole shape (0–359°). |
| **Start offset** | Shifts where on the shape the path begins (0–360°). |
| **Enable dimmer control** | Lets the EFX drive fixture intensity as well. Off by default, in which case the EFX animates pan/tilt only. |

### Lissajous parameters

These four fields appear only when the **Lissajous** pattern is selected; they shape the maths that produces the more complex figures.

| Setting | Meaning |
|---------|---------|
| **X frequency** | Number of horizontal oscillations per cycle (0–32). |
| **Y frequency** | Number of vertical oscillations per cycle (0–32). |
| **X phase** | Horizontal phase shift (0–360°). |
| **Y phase** | Vertical phase shift (0–360°). |

Changing the ratio between X and Y frequency is what turns the figure from a simple circle into the classic Lissajous knots.

## Speed

The **Speed** section sets the timing of the effect. **Double-click** a time field, or use the <i class="fa fa-2x fa-clock"></i> button next to it, to open the time editor.

| Setting | Meaning |
|---------|---------|
| **Fade in** | Time to fade the effect in when it starts. |
| **Loop** | The duration of one full cycle around the path. |
| **Fade out** | Time to fade out when it stops. |

## Order and direction

### Run Order

| Icon | Mode | Behaviour |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repeats the path forever. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Runs one full cycle, then stops. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Runs the path forwards, then backwards, and repeats. |

### Direction

| Icon | Mode | Behaviour |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Travels the path in the normal direction. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Travels the path in the opposite direction. |

### Fixture Order

| Icon | Mode | Behaviour |
|------|------|-----------|
| **P** | **Parallel** | All fixtures travel the path together (their **Start offset** still spreads them out). |
| **S** | **Serial** | Fixtures are spread evenly around the path, one after another, in list order. |
| **A** | **Asymmetric** | Fixtures are spread as in Serial, but every other fixture runs in the opposite direction. |
