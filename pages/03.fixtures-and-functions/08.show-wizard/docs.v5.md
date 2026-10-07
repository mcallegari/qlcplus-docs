---
title: 'Show Wizard'
date: '12:00 07-10-2026'
taxonomy:
    category:
        - docs
---

The **Show Wizard** builds a complete, ready-to-run show for you — fixture
positions, palettes, effects and a Virtual Console — from a few high-level
choices. It is meant to get you from an empty project to a usable rig in
minutes, and to give newcomers a working example to learn from.

Open it with the <i class="fa fa-hat-wizard fa-2x" style="color:yellow"></i>
**Show Wizard** button at the top of the right panel in the
[Fixtures and Functions](/fixtures-and-functions) workspace. It opens as a
full-screen overlay with six steps; a step indicator at the top shows where you
are, and **← Back** / **Next →** buttons at the bottom move between steps. The
last step's button reads **Generate ✦** instead of **Next →**.

Nothing is written to your project until you press **Generate** on the last
step, and the whole result — stage layout, functions and Virtual Console — is
created in one go and is **fully undoable with Ctrl+Z**, just like any other
change. Closing the wizard with the **✕** button at any time discards your
choices without touching the project.

## Step 1 — Show Type

The first step asks what kind of show you are building. Your choice sets
sensible defaults for the rest of the wizard — the suggested venue in step 3
and the effects pre-selected in step 4 — but every one of those defaults can
still be changed afterwards.

| Show type | Typical use | Effects emphasis |
|-----------|--------------|-------------------|
| **Club Night** | Box / club | Fast chasers, strobe hits, RGB chases, BPM-locked effects |
| **Concert / Live** | Rock stage | Position presets, colour washes, audience blinders, movement EFX |
| **Theatrical** | Theatre | Scene-based, slow fades, warm colours, gobo patterns, position presets |
| **Architectural** | Open space | Gentle pixel chases, colour blends, ambient loops |
| **Custom** | Any | Nothing is pre-selected — choose everything yourself in the next steps |

## Step 2 — Fixture Groups & Roles

This step organises your fixtures into **groups** and assigns each group a
**role**. Roles drive both the automatic stage placement in step 3 and which
effects get generated for the group in step 4.

The step is split into three columns:

* **Fixture Browser** (left) — the same browser used elsewhere in QLC+. Drag a
  fixture from it onto a group box in the middle column to patch it and add it
  to that group in one action.
* **Fixture Groups** (middle) — your group boxes. Click **+ Add group** to
  create an empty, named box (default name "Group N"), then drag fixtures onto
  it. Tick a group's checkbox to include it in the automatic placement and in
  the generated functions. Groups that already exist in the project (created
  outside the wizard) are listed here too, so you can bring existing rigs into
  the wizard's effects and Virtual Console generation without re-patching
  anything.
* **Detected capabilities & roles** (right) — for every **ticked** group, shows
  the role assigned to it and the capabilities QLC+ detected from its fixtures
  (movement, colour mixing, gobo, shutter, dimmer). Roles are suggested
  automatically from those capabilities, but you can change any group's role by
  hand.

### Roles

| Role | Icon | Meaning |
|------|------|---------|
| **Key Light** | 💡 | Front/top wash, the main illumination |
| **Fill Light** | 🔦 | Supplemental wash from a different angle |
| **Back Light** | 🔙 | Rear backlight / up-lighter |
| **Side Light** | 📐 | Boom or side light (theatre wings) |
| **Effect** | ✨ | Aerial effect fixture, mid-air beams |
| **Strip / Bar** | ▬ | LED strip or batten running across the rig |
| **Blinder** | 💥 | Audience blinder / strobe |
| **Hazer** | 💨 | Hazer or fogger |
| **Floor** | ⬆ | Floor up-lighter |

> A group whose fixtures are **already patched and positioned** elsewhere in
> the project (i.e. it contributes no *new* fixtures) lets the wizard skip Step
> 3 entirely — see below.

## Step 3 — Venue & Stage

This step picks a **stage type** and a **stage size**, then shows how your
ticked groups will be positioned on it. It is **skipped automatically** when
none of the ticked groups contain a fixture the wizard still needs to place —
for example, if you only ticked an existing group that is already positioned in
the [3D View](/fixtures-and-functions/3d-view). The step indicator greys out
the skipped step instead of hiding it, so you always see where it would have
been.

* **Venue type** — one of four stage shapes. Each lists the show types it suits
  best:

  | Stage | Description | Best for |
  |-------|-------------|----------|
  | **Open Space** | Plain floor, no scenic elements. Good for temporary rigs and general-purpose events. | Architectural, Custom |
  | **Box / Club** | Four walls and a ceiling, truss along the perimeter. | Club Night |
  | **Rock Stage** | Raised stage, front truss and vertical columns. | Concert / Live |
  | **Theatre** | Proscenium arch, front-of-house bars, side booms. | Theatrical |

* **Stage size (metres)** — **Width**, **Height** and **Depth**, pre-filled with
  a size suggested from your fixture count. Adjust the fields if your real
  venue differs; this is the same environment size used by the
  [3D View](/fixtures-and-functions/3d-view)'s **Width / Height / Depth**
  settings, so changing it here changes it there too.
* **Automatic fixture placement** (right side) — lists, for each ticked group,
  where its fixtures will be rigged and how many fixtures that is, for example
  *Key Light → Front truss, high — aimed at stage centre ~45°*. Placement
  follows common rigging conventions for the role — front trusses for key
  light, rear trusses for backlight, alternating wing booms for side light, a
  full-width batten for strips, and so on — and heads are spread evenly across
  the available positions. No manual 3D placement is needed, though you can
  always fine-tune individual fixtures afterwards in the 3D View.

## Step 4 — Effects

This step selects which **functions** the wizard will generate — grouped into
families, with a running count of how many are selected. Effects that need a
capability none of your fixtures have (for example movement effects on a rig of
plain dimmers) are shown **greyed out** and cannot be enabled. Click **All /
None** on a family's header to select or clear every available effect in that
family at once.

| Family | Effects | Needs |
|--------|---------|-------|
| 🎨 **Color** | Color Palette, Color Rainbow, Split Color, Gobo Palette | Colour mixing and/or gobo channels |
| 💡 **Intensity** | Shutter Effects, Blinder Hit, Strobe Chase, Heartbeat | A shutter/strobe channel, or a dimmer |
| 🎯 **Movement** | Position Presets, Fly Out, Fly In, Circle Chase, Figure Eight, Audience Sweep | Pan/Tilt fixtures |
| ▦ **Matrix** | Pixel Chase, Wave, Fireworks, Plasma, Marquee | A dimmer or colour-mixing fixture (movers included — matrix effects run on intensity when no colour mixing is available) |
| 🎬 **Show Cues** | Ambient Loop | At least one **static** (non-moving) colour-mixing fixture |

Each show type pre-selects a sensible subset on entry to this step (for
example, Club Night turns on Color Rainbow, Blinder Hit, Strobe Chase, Circle
Chase and Pixel Chase; Theatrical turns on Color Palette, Position Presets,
Gobo Palette and Ambient Loop), but you can freely add or remove effects
regardless of the show type you picked in step 1. **Custom** starts with
nothing selected.

## Step 5 — Controller

This **optional** step binds a patched MIDI, OSC or DMX input controller to the
Virtual Console the wizard is about to build. Skip it freely — you can always
map controls by hand later with **Auto Detect** on any Virtual Console widget.

* **Connected controllers** (left) — every universe that currently has an input
  patch (not just a plugin line that *could* be patched). Click an entry to
  select it for mapping; click it again to deselect. Each entry shows the
  plugin, the universe number, and a few capability pills: the patched **input
  profile** name (or *No input profile* when generic/linear mapping will be
  used instead), how many **buttons** and **faders** the wizard found, whether
  the profile has **colour LEDs**, and whether **feedback** is already enabled
  on that universe. If nothing is patched yet, a button here takes you straight
  to the **Input/Output** panel to patch one, then back to the wizard.
* **Mapping options** (right, enabled once a controller is selected):

  | Option | Effect |
  |--------|--------|
  | **Auto-map Virtual Console controls** | Binds the generated buttons, faders and XY pads to the controller's channels: controller buttons drive VC buttons, faders/encoders drive intensity sliders and pan/tilt. |
  | **Send feedback to the controller** | Patches the controller's output line so its LEDs light up and its motorised faders move to match the Virtual Console state. |
  | **Match LED colours to button colours** | On a controller whose input profile has a colour table, lights each colour button's pad in the nearest matching colour. Ignored on controllers without colour LEDs. |

  Below the options, an **Estimated usage** box gives a live preview of what the
  mapping will consume, e.g. *"18 of 24 buttons, 3 of 9 faders"*, updated as you
  change the controller or the options.

QLC+ recognises common **pad-grid** controllers (such as APC mini or Launchpad
layouts) from their input profile and maps controls so that the same kind of
control always lands in the same place on the grid regardless of which
Virtual Console page is showing: page-switch buttons, colour swatches, effect
triggers and show-cue buttons each get their own band of rows. Controllers
without a recognised grid still get a usable mapping — buttons are handed out
in order and faders are mapped to the sliders the wizard creates.

## Step 6 — Summary

The last step reviews what will be created, in two columns:

* **What will be created** (left) — one card per section: **Stage** (how many
  groups were positioned, and on which stage type — or a note that the existing
  layout was left untouched when step 3 was skipped), **Functions** (how many
  effects were selected), **Virtual Console** (one main page plus one frame
  page per group), and **Controller** (the mapping summary from step 5, or *"No
  external controller mapped"*). Below that, every selected effect is listed as
  a small tag.
* **Virtual Console layout preview** (right) — a schematic mock-up of the
  multipage frame the wizard will build: an **All Groups** page plus one page
  per ticked group, each with its own intensity slider, colour buttons, XY pad
  (for groups with movement) and effect buttons, and a row of show-cue buttons
  (Ambient, Blinder) shared across every page. Click the page tabs in the
  mock-up to preview a different page before generating.

Press **Generate ✦** to build everything. A brief **"Generating…"** indicator
appears in the footer; the wizard then closes itself automatically and your new
show is ready in the main workspace.

## What gets created

* **Stage** — when step 3 was not skipped, each ticked group's fixtures are
  patched (if not already) and positioned in the
  [3D View](/fixtures-and-functions/3d-view) according to their role and the
  chosen stage type.
* **Fixture Groups** — every ticked group becomes (or stays) a real
  [Fixture Group](/fixtures-and-functions/fixture-group-manager), including a
  synthetic **All Groups** group spanning every ticked group's fixtures, used
  by the master Virtual Console page.
* **Functions** — for every group and for the All Groups aggregate, the wizard
  creates the palettes (colour, dimmer, shutter) and scenes needed to drive each
  selected effect, filed in function-tree folders per group. Movement effects
  are built from a base **Position** scene plus an
  [EFX](/function-manager/efx-editor) (or a **Chaser** for step-based effects
  such as Strobe Chase), so they always start from a defined aim. Matrix
  effects use an [RGB Matrix](/function-manager/rgb-matrix-editor) with a
  built-in script, falling back to plain intensity animation on fixtures with
  no colour mixing.
* **Virtual Console** — a single multipage **Frame** acting as the master
  layout: page 0 is **All Groups**, followed by one page per ticked group, with
  intensity sliders, colour/gobo buttons, movement/effect buttons and, for
  groups with movement, an [XY Pad](/virtual-console/xy-pad). Page switching
  uses hidden one-channel dimmers patched on a spare universe through the
  [Loopback](/plugins/loopback) plugin — you do not need to set this up
  yourself.
* **External controller mapping** — when step 5 had a controller selected, the
  generated widgets are bound to it following the mapping options you chose,
  with feedback and colour matching applied where enabled.

> Re-running the wizard does not merge into or modify anything it generated
> before — each run adds a new set of groups, functions and a new Virtual
> Console frame. Delete the previous ones first (or simply undo) if you want to
> start over.
