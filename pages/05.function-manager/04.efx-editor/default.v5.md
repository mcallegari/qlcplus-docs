---
title: 'EFX Editor'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

An **EFX** (effect) moves fixtures along a mathematical path — circles, eights,
lines and other shapes — automatically. It's the quickest way to create
pan/tilt movement effects (and colour/dimmer effects) across many fixtures at
once. The EFX Editor opens in the right panel of the
[Fixtures and Functions](FixturesAndFunctions.md) workspace.

A large **preview** shows the path and the position of each fixture in real time
as you change the settings.

## Fixtures

The **Fixtures** section lists the fixtures (or heads) taking part in the effect.

* **Add a fixture/head** (＋) — opens a chooser to add fixtures to the effect.
* **Add an increasing offset to all fixtures** — automatically spreads the
  fixtures out along the path by giving each a progressively larger start offset,
  so they chase around the shape instead of moving together.
* **Remove the selected fixture head(s)** (－) — removes fixtures from the effect.

For each fixture in the list you can set:

* **Mode** — what the effect drives for that fixture: **Position**, **Dimmer**,
  **RGB**, or **Position + Dimmer**.
* **Reverse** — makes that fixture travel the path in the opposite direction.
* **Start offset** — where on the path that fixture begins (in degrees), used to
  fan fixtures out around the shape.

## Pattern

The **Pattern** section defines the shape and how it sits in space:

* **Pattern** — the base shape (circle, eight, line, diamond, lissajous, etc.).
* **Relative movement** — runs the effect relative to each fixture's current
  position rather than from an absolute centre.
* **Width / Height** — the size of the shape.
* **X offset / Y offset** — moves the shape's centre.
* **Rotation** — rotates the whole shape.
* **Start offset** — shifts where the path begins.
* **X / Y frequency** and **X / Y phase** — shape the lissajous-style maths that
  produce more complex figures.

### Dimmer envelope

When the effect drives dimmers, an envelope shapes the intensity along the path:

* **Dimmer width**, **Dimmer attack**, **Dimmer decay** — the shape of the
  intensity pulse.
* **Dimmer shape** — **Sine**, **Square** or **Triangle**.
* **Dimmer distribution** — how the pulse is spread across fixtures: **Linear**,
  **Mirror**, **Wings**, **Blocks** or **Random**.
* **Dimmer wings** — the number of wings when using the Wings distribution.

## Speed

The **Speed** section sets the timing of the effect:

* **Fade in** — time to fade the effect in when it starts.
* **Loop** — the duration of one full cycle around the path.
* **Fade out** — time to fade out when it stops.

## Order and direction

* **Run Order** — **Loop**, **Single Shot** or **Ping Pong**.
* **Direction** — **Forward** or **Backward**.
* **Fixture Order** — how the fixtures relate to each other on the path:
  **Parallel** (all together), **Serial** (one after another) or **Asymmetric**.
