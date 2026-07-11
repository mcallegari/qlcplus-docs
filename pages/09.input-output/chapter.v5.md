---
title: 'Input Output'
date: '04:54 22-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Chapter 8

# Input/Output

The **Input/Output** context is where you connect QLC+'s internal **universes**
to the real world — the plugins and devices that send DMX out to your lights, and
the controllers that send input in. By default QLC+ provides several universes,
and you can add or remove them as needed.

The input/output mapping is saved inside the current project, so you can move a
project to another computer or operating system without reconfiguring it. If no
project is loaded, QLC+ keeps the mapping as a "fallback" configuration.

Open the context from the ![](/basics/inputoutput.svg?resize=24,24)
**Inputs/Outputs** tab at the bottom of the QLC+ main screen.

## Layout

The context is a patch diagram with a panel on each side:

* **Left panel** — the tools for the **input** side of the selected universe
  (input plugins, input profiles, and plugin/audio configuration).
* **Centre** — a row of blocks, one per **universe** (plus an audio block at the
  top). Input patches attach on the left of each block, output patches on the
  right, drawn as connecting **wires**.
* **Right panel** — the tools for the **output** side, plus blackout and the
  universe add/remove buttons.

Click a universe block to select it; the side panels then act on that universe.

## The universe block

Each universe is drawn as a central block with its wires:

* **Name** — double-click the block to rename the universe to something
  meaningful ("Stage left", "Movers", …).
* <i class="fa fa-2x fa-arrow-right-long"></i> **Passthrough** — the small arrow button
  toggles passthrough for the universe (see [below](#universe-passthrough)).
* **F — Feedback** — when an input patch is present, the **F** button
  enables/disables the feedback line back to the controller.

## Patching

Patching is done by **drag and drop**:

* Open the **input** or **output** plugin list from the side panel (the
  ![](/basics/inputoutput.svg?resize=24,24) button), then **drag a plugin line**
  onto the left (input) or right (output) side of a universe block. A wire is
  drawn to show the connection.
* Each universe can have **one input** line but **several output** lines (drop
  more plugin lines on the right to add them).
* To **remove** a patch, drag its patch block away from the universe and drop it
  on the <i class="fa fa-2x fa-trash-can"></i> bin that appears at the bottom of the
  screen.

If a plugin needs configuration before its lines appear, use the
![](/basics/configure.svg?resize=24,24) **plugin configuration** button in the
side panel (it is shown only when the plugin supports manual settings).

## Adding / removing universes

The right panel holds the universe management buttons:

| Button | What it does |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new universe** | Adds a new universe, named "Universe X" where X is a progressive number (also its ID). |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected universe** | Removes the last universe. **Be careful — this can affect fixtures patched to it and cannot be undone.** |

## Blackout

The right panel also has a blackout toggle
(<i class="fa fa-2x fa-eye"></i> / <i class="fa fa-2x fa-eye-slash"></i>) that forces **all
output patches** to zero — an instant "lights off" for the whole rig. Toggle it
again to restore output.

## Universe passthrough

When passthrough is enabled, a universe simply forwards whatever it receives on
its **input** line to its **output** line. This is useful for:

* **Protocol conversion** — e.g. transparently map an Art-Net network to a DMX
  USB adapter or MIDI.
* **Monitoring external data** — patch fixtures and watch incoming data in the
  DMX monitor.
* **Merging an external desk** — let an external lighting desk control some
  channels while QLC+ controls intelligent lights on the same universe.
* **Raspberry Pi setups** — program on a PC, then hand playback to a Pi that stays
  wired to the devices.

Passthrough data is not affected by the Grand Master or channel modifiers. It is
merged HTP with QLC+ output where fixtures are patched (it does not use LTP/HTP
channel settings). Blackout **does** affect passthrough data.

## Audio

The block at the top of the list represents the **audio** input and output
devices. Select it, then use the ![](/basics/audiocard.svg?resize=24,24) buttons
in the side panels to choose the audio input source and output device, and the
![](/basics/configure.svg?resize=24,24) button to open the audio configuration.

## Input and feedback

When an input line is patched it is enabled immediately, so you can test it: move
a fader or knob on your controller and, if it is working, you'll see input
activity on that universe.

If your controller has a return channel, QLC+ can send it visual/mechanical
**feedback** (for example to light up buttons or motorise faders on a Behringer
BCF2000). Enable it with the **F** button on the universe block. Feedback is
currently supported over MIDI, OSC and loopback.

To get the most from an external controller, set up an **input profile** — see
[Input Profiles](input-profiles).
