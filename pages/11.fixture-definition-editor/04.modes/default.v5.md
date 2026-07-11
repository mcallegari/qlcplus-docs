---
title: Modes
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

The **Modes** section contains all the [modes](/basics/glossary-and-concepts#fixture-mode)
the fixture can be configured to. Each mode is an ordered arrangement of the
channels you defined in the [Channels](../channels) section, matching how the
fixture behaves in that operating mode.

A small toolbar sits at the top of the section:

| Button | What it does |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new mode** | Creates a new mode and opens the [Mode Editor](#mode-editor) on the right. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected mode(s)** | Removes the selected mode. Removing a mode does not delete any channels or other modes. |

Each mode appears as a row showing its name. **Double-click** a mode to open it in
the Mode Editor.

## Mode Editor

The Mode Editor opens in the panel on the **right**. It has a **Name** field
(each mode's name must be unique) and three sections: **Channels**, **Emitters**
and **Physical**.

### Channels

Here you place the fixture's channels in the exact order the fixture uses them in
this mode.

| Button | What it does |
|--------|--------------|
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Removes the selected channels from this mode. Other modes are left untouched. |
| <i class="fa fa-2x fa-certificate"></i> **Create a new emitter** | Groups the selected channels into a new [emitter](#emitters). |

To **add** channels to the mode, **drag** them from the [Channels](../channels)
section into this list (a "Drop channels here" area is shown when the mode is
empty). Drag channels within the list to reorder them — their order is
fundamental to the mode definition. The **Acts on** column next to each channel
binds it to another channel (for example, a channel that controls the speed of a
rotating gobo).

### Emitters

Emitters (called *heads* in earlier versions) let you define multiple light
sources within a single fixture, so QLC+ can treat each one individually — for
example in [Fixture Groups](/basics/glossary-and-concepts#fixture-group) or the
2D/3D views. If a mode drives just one light source there is no need to define
emitters.

Create an emitter from the mode's **Channels** section: select the channels that
belong to a single light source, then use <i class="fa fa-certificate"></i>
**Create a new emitter**. Each emitter is numbered automatically (#1, #2, …) and
lists the channels assigned to it.

| Button | What it does |
|--------|--------------|
| <i class="fa fa-minus" style="color:crimson"></i> **Remove the selected emitter(s)** | Deletes the selected emitters. |

Only include the channels that are specific to each light source. For example, if
three heads each have their own dimmer, include the dimmer channel in each
emitter; if the fixture has a single dimmer for all heads, leave it out.

### Physical

This section holds the same properties as the global [Physical](../physical)
section. Choose:

* **Use global settings** — the mode uses the fixture's global physical
  information (the default).
* **Override global settings** — the mode has its own physical values; the fields
  become editable so you can enter them.
