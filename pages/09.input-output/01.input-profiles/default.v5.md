---
title: 'Input Profiles'
date: '04:57 22-08-2023'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

## What is an input profile?

An **input profile** maps the signals coming from an external control device (a
MIDI controller, an OSC app, a DMX desk, a joystick, …) to channels QLC+ can
understand, so you can control your show with your preferred hardware without
knowing the underlying protocol. Once a profile is assigned to a universe, its
channels can be linked to Virtual Console widgets, channel groups and more.

## Selecting an input profile

QLC+ ships with many ready-made profiles. To assign one:

1. Open the ![](/basics/inputoutput.svg?resize=24,24) **Inputs/Outputs** context.
2. Select the universe on which the device is patched.
3. Open the **input profiles** list from the left panel (the **P** button).
4. Find your device's profile and select it. It attaches to the universe's input
   patch.

## Creating / editing a profile

If your device isn't in the list, you can make your own. From the input profiles
list, use the <i class="fa fa-2x fa-plus" style="color:limegreen"></i> button to create
a new profile, or select an existing one and edit it. Either way the **Input
Profile Editor** opens; the procedure is the same from here on.

## Input Profile Editor

The editor is organised into tabs, with a shared toolbar for adding, removing and
saving items:

| Button | What it does |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add** | Adds a new channel / colour / MIDI channel, depending on the current tab. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove** | Removes the selected item. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard** | (Input Mapping tab) Toggles the automatic channel-detection wizard (see below). |
| ![](/basics/filesave.png?resize=48,48) **Save this profile** | Saves the profile. If manufacturer/model are empty you'll be asked to fill them first. |

### General

The **General** area holds the profile's identification:

* **Manufacturer** — the device manufacturer. If it's already in the list, use the
  same spelling and capitalisation.
* **Model** — the device model, including version if relevant (e.g. "APC Mini
  MK2").
* **Type** — the profile type: **MIDI**, **OS2L**, **OSC**, **HID**, **DMX** or
  **ENTTEC**. MIDI profiles show extra MIDI message fields in the channel editor
  and expose the **MIDI Channels** tab and MIDI global settings.

For MIDI profiles a **MIDI Global Settings** option is available: *When MIDI notes
are used, send a Note Off when value is 0*.

### Input Mapping

This tab lists the profile's channels (Channel number, Name and Type). There are
two ways to add channels.

**Manual** — use the <i class="fa fa-plus" style="color:limegreen"></i> **Add**
button to enter channel details by hand. Handy if you know your device's MIDI/OSC
codes.

**Automatic** — use the
<i class="fa fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard** to detect
channels by operating the controls on your device. QLC+ adds each control as you
touch it. An input plugin must be patched to the current universe for this to
work, and you must stop the wizard before leaving the page.

> You cannot add the same channel more than once to a profile.

#### Channel properties

When you add or edit a channel you set:

* **Number** — the channel number. Because QLC+ supports many plugins this may not
  be intuitive, so only change it if you know what you're doing.
* **Name** — an arbitrary label describing the control's purpose.
* **Type** — the kind of control:
  ![](/basics/slider.png?resize=24,24) **Slider**,
  ![](/basics/knob.png?resize=24,24) **Knob**,
  ![](/basics/button.png?resize=24,24) **Button** or
  ![](/basics/knob.png?resize=24,24) **Encoder**. Three special types —
  ![](/basics/back.png?resize=24,24) **Previous Page**,
  ![](/basics/forward.png?resize=24,24) **Next Page** and
  ![](/basics/star.png?resize=24,24) **Page Set** — are used to control
  multi-page frames.

For **MIDI** profiles the editor adds **Channel**, **Message**, **Param** and
**Note** fields, letting you enter the MIDI specification in a more intuitive way
(these translate into the channel number).

#### ![](/basics/slider.png?resize=24,24) Slider movement

Selecting a **Slider** channel reveals its movement behaviour:

* **Absolute** (default) — QLC+ uses the received value exactly as sent.
* **Relative** — the value is treated as movement from the widget's current
  position, useful with an HID joystick driving an [XY Pad](/virtual-console/xy-pad)
  or [Slider](/virtual-console/slider) widget. A **Sensitivity** value sets how
  strong the movement is — higher is slower, lower is faster.

#### ![](/basics/knob.png?resize=24,24) Encoder

An encoder is an endless rotary control, always relative: turning it generates
positive or negative offsets in QLC+. A **Sensitivity** value sets the size of the
offset added or subtracted per step.

#### ![](/basics/button.png?resize=24,24) Button

Buttons expose extra global behaviour:

* **Generate an extra Press/Release when toggled** — for devices (e.g. Behringer
  BCF2000) or software (e.g. TouchOSC) that send only a single value on press.
  QLC+ synthesises the "missing" release so toggles behave consistently.
* **Custom Feedback** — with **Lower value** and **Upper value** you force custom
  values to be sent back when the button is off/on, for example to set the LED
  colour on AKAI APC devices. This is global, but a specific Virtual Console
  widget can override it.

### Colors

Some controllers can display colours on their buttons. This tab lets you define a
set of feedback colours so they can be picked easily when editing Virtual Console
widget feedback. Use <i class="fa fa-plus" style="color:limegreen"></i> **Add** to
add an entry with:

* **Value** — the value QLC+ must send the controller to produce the colour.
* **Color** — the colour shown at that value (a colour picker).
* **Label** — a name for the colour (e.g. "Blue").

### MIDI Channels

For MIDI devices that use different MIDI channels for different feedback/display
modes (for example the AKAI APC Mini MK2), this tab lets you add the relevant
MIDI channels with a descriptive name, via <i class="fa fa-plus"
style="color:limegreen"></i> **Add**.

## Saving

When you're done, save the profile with the
![](/basics/filesave.png?resize=24,24) **Save** button (you'll be prompted for
manufacturer/model if they're missing). Your new profile then appears in the
input profiles list, ready to assign to a universe as described above.

Note that some bundled profiles are **system profiles** and cannot be removed
unless you have administrator rights.
