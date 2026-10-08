---
title: Channels
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 20%;
}
table th:nth-of-type(2) {
    width: 80%;
}
</style>

The **Channels** section contains all the channels the fixture understands across
all of its modes. Their order here does not matter — channels are arranged into a
specific order inside each mode in the [Modes](../modes) section. What matters
here is each channel's **name** and its **capabilities** (its DMX value ranges and
what they do).

A small toolbar sits at the top of the section:

| Button | What it does |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new channel** | Creates a new channel and opens the [Channel Editor](#channel-editor) on the right. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Removes the selected channels from the fixture **and from all modes**. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Channel wizard** | Creates many similar channels at once (see [Capability wizard](#capability-wizard)). |

Click a channel to select it; **double-click** it to open it in the Channel
Editor. Channels can be **dragged** from this list into a mode's channel list in
the [Modes](../modes) section.

## Channel Editor

The Channel Editor opens in the panel on the **right** of the editor. It is used
to edit an individual channel and the DMX value ranges of each **capability** (a
colour, a gobo, prism rotation, and so on). Refer to your fixture's manual (its
"DMX chart") for the exact channels and value ranges.

|     |     |
| --- | --- |
| **Name** | The channel name. When you pick a channel **Preset** (a single-capability channel), a name is suggested automatically, which you can still customise. |
| **Preset** | A preset is a shortcut that speeds up definition creation and gives the QLC+ engine the information it needs to recognise and correctly treat a channel. For example, picking a colour preset (Red, Green, Blue, …) or a Pan/Tilt preset fills in all the required information with a single click. When a preset is selected the rest of the editor becomes inactive. If the channel has multiple DMX ranges (capabilities), leave **Preset** on "Custom" and define the capabilities yourself (below). |
| **Type** | The channel's role in the fixture. Choosing a type implicitly sets the channel's precedence ([LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence) or [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence)), so it is important to pick the correct type.<br><br>The intensity/colour types obey the **HTP** rule: **Intensity, Red, Green, Blue, Cyan, Magenta, Yellow, White, Amber, UV, Lime and Indigo**.<br>All the other types obey the **LTP** rule: **Beam, Colour, Effect, Gobo, Maintenance, Nothing, Pan, Tilt, Prism, Shutter and Speed**.<br><br>**Intensity** is used for dimmer / master dimmer channels.<br>**Primary colours** (Red, Cyan, White, …) control single colour channels — don't confuse these with the "Colour" type below. Note that the [Grand Master](/basics/glossary-and-concepts#grand-master) controls only Intensity and primary colour channels by default, and the Colour tool is available only when a fixture provides primary RGBAWUV/CMY colour channels.<br>The **Colour** type controls a fixed colour wheel or predefined colour macros — *don't* assign individual RGBAW/CMY channels to it.<br>The **Gobo** type controls gobo wheel position or indexing.<br>The **Speed** type controls something speed-related (gobo rotation, rainbow speed, …).<br>The **Prism** type controls a prism.<br>The **Shutter** type controls a shutter, strobe or iris.<br>The **Beam** type controls a beam shaper (such as a zoom).<br>The **Effect** type controls something that doesn't fit the other groups.<br>The **Maintenance** type controls features such as reset or a cooling fan.<br>The **Nothing** type is a channel spacer or placeholder.<br>The **Pan** and **Tilt** types control the Pan/Tilt (X/Y) movement of moving heads or lasers. |
| **Role** | Applicable to channel pairs that make up 16-bit values, usually **Pan** or **Tilt** (some newer fixtures also support 16-bit dimmer, RGB, gobo or focus).<br>For 8-bit values (one channel per feature) assign the **Coarse (MSB)** control byte. For 16-bit values (two channels per feature) assign **Coarse (MSB)** to the coarse channel and **Fine (LSB)** to the fine channel. If unsure, use **Coarse (MSB)**. |
| **Default value** | The DMX value (0–255) the channel is set to on power up. For example, some moving heads centre their Pan/Tilt, meaning an initial value of 127. |
| **Capabilities** | The list of DMX value ranges for the channel, each with a **From** value, a **To** value and a **Description**. If a channel provides only one capability (e.g. pan or dimmer) use a channel preset instead. For richer channels (colours, gobos) create a range for each entry (e.g. 0–15 white, 16–32 blue …). Click a row's From / To / Description to edit it; press **Tab** to move between fields and continue onto the next row. A ⚠ warning icon appears on a row whose description is empty or whose range overlaps another. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> | **Delete the selected capabilities** from the channel. |
| <i class="fa fa-2x fa-palette" style="color:yellow"></i> | **Automatic colour assignment** — for a colour channel, fills in standard colour capabilities automatically. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> | **Capability wizard** — creates several equally-sized capabilities at once (see below). |

### Capability preset

Each capability can be given a **preset**, which tells the QLC+ engine more about
that range of DMX values. Depending on the preset type, extra fields appear:

* **ColorMacro** — pick a single colour (used typically on colour wheels).
* **ColorDoubleMacro** — pick two colours to represent an intermediate colour
  wheel position.
* **GoboMacro** — choose a gobo picture to show when this range is active.
* **StrobeFrequency** — enter a precise strobe frequency in Hertz.
* **StrobeFreqRange** — enter a minimum and maximum frequency (in Hertz) for a
  strobe range.
* **Alias** — a special preset indicating that when this range is active, a
  channel should be replaced. See the [Aliases](../aliases) section.

A **Preview** or **Value(s)** box next to the preset lets you set the associated
colour(s), gobo image or frequency value(s).

## Capability wizard

The Capability Wizard quickly creates multiple capability ranges of the same
size. This usually applies to fixed colours, gobo indices and macro channels.

|     |     |
| --- | --- |
| **Start** | The starting value for the new capabilities. Adjust it to skip any capabilities that already exist at the start of the channel's range. |
| **Width** | The size of each value range. |
| **Amount** | The number of capabilities to create. |
| **Name** | The common name for each capability. Use a hash `#` to mark where an index number goes (e.g. "Gobo #" creates Gobo 1, Gobo 2, Gobo 3 …). |
| **Sample** | Updates as you change the parameters, previewing the capabilities that will be created. |
