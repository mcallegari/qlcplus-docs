---
title: 'Simple Desk'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>

The **Simple Desk** is a manual DMX control surface. It gives you a fader and a
value box for every channel of a universe, plus a **keypad** for entering
console-style commands — letting you control your rig by hand, just like a
traditional lighting desk. It's ideal for quick hands-on control, busking, and
testing.

Open it from the main toolbar (the Simple Desk icon). What you set here can be
captured into a Scene with [DMX Dump](DMXDump.md).

## Layout

The Simple Desk is split into two areas, with a draggable divider between them:

* **Top** — the channel faders for the selected universe.
* **Bottom** — the **Fixture List**, the **Commands history**, and the
  **keypad**.

## Channel faders

The top area shows one column per DMX channel of the current universe, each with:

* A **channel icon** — click it to open a dedicated tool for that channel type
  (slider or preset chooser). Press **Esc** to close it.
* A **fader** — drag to set the channel value.
* A **value box** — type an exact value. It shows DMX (0–255) or percentage
  (0–100%) depending on the display mode.
* The **DMX address** of the channel.
* A **reset** (✕) button — returns the channel to its normal (non-overridden)
  state.

Channels you have changed by hand are **overridden** and shown in **red**. Other
channels are tinted to show which fixture they belong to (alternating shades for
neighbouring fixtures).

### Toolbar

Above the faders:

* **Universe** — choose which universe the faders control.
* **Reset the whole universe** (✕) — clears all overrides in the current
  universe.
* **DMX / %** — toggle the value boxes between raw DMX values (0–255) and
  percentages (0–100%).

## Fixture List

The bottom-left list shows the fixtures patched to the current universe with
their address range. Click a fixture to scroll the fader view to its first
channel, making it easy to find a fixture's channels in a full universe.

## Keypad and commands history

The bottom-right area is a numeric **keypad** for entering commands, with a
**Commands history** beside it. Each command you run is added to the history;
**double-click** a history entry to load it back into the keypad so you can
re-run or edit it.

Type a command with the on-screen keypad (or your keyboard) and press **ENTER**
to run it. **CLR** clears the current command.

## Keypad command syntax

Keypad commands address one or more channels and set their values, in the style
of a classic lighting console. Channels are addressed by their **DMX address**
within the current universe (1-based).

### Keywords and operators

| Token | Meaning |
|-------|---------|
| `AT` | Set the addressed channel(s) to a value: `1 AT 200`. |
| `THRU` | A range — of channels (`1 THRU 10`) or, after `AT`, of values for a fade across the range. |
| `BY` | A step when addressing a range: `1 THRU 20 BY 2` selects every other channel. |
| `FULL` | Shortcut for the maximum value (255 / 100%). |
| `ZERO` | Shortcut for value 0. |
| `+` | Add to the channels' current values: `1 + 20`. |
| `-` | Subtract from the channels' current values: `1 - 20`. |
| `+%` | Increase the current values by a percentage: `1 +% 10`. |
| `-%` | Decrease the current values by a percentage: `1 -% 10`. |

The keypad shows `+`/`-` or `+%`/`-%` depending on the current display mode.

### Basic forms

| Command | Effect |
|---------|--------|
| `5` | Selects channel 5 (and makes it the working selection). |
| `5 AT 128` | Sets channel 5 to value 128. |
| `5 FULL` | Sets channel 5 to full (255). |
| `5 ZERO` | Sets channel 5 to 0. |

### Ranges

| Command | Effect |
|---------|--------|
| `1 THRU 10 AT 255` | Sets channels 1 to 10 all to 255. |
| `1 THRU 10 BY 2 AT 128` | Sets every second channel from 1 to 10 (1, 3, 5, 7, 9) to 128. |
| `1 THRU 10 AT 0 THRU 255` | Spreads values evenly across the range — a fade from 0 on channel 1 up to 255 on channel 10. |

### Relative changes

| Command | Effect |
|---------|--------|
| `1 THRU 10 + 20` | Adds 20 to the current value of each channel 1–10 (clamped to 255). |
| `1 THRU 10 - 20` | Subtracts 20 from each (clamped to 0). |
| `1 +% 10` | Raises channel 1's current value by 10%. |
| `1 -% 10` | Lowers channel 1's current value by 10%. |

### Repeating on the last selection

If you enter a command **without specifying channels** (for example just
`AT 100`, `FULL`, or `ZERO`), it applies to the **same channels as the previous
command**. This lets you select a set of channels once and then keep adjusting
them:

```
1 THRU 8 AT 255   ← select channels 1–8 and set them to full
ZERO              ← the same channels 1–8 go to 0
AT 128            ← the same channels 1–8 go to 128
```

> Values are always DMX (0–255) in commands. A `THRU` value range and the `BY`
> step let you build fades and patterns in a single line, exactly as on a
> hardware console.
