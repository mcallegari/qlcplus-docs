---
title: 'Fixture Definition Editor'
date: '05:24 22-08-2023'
taxonomy:
    category: docs
media_order: 'fixtureeditor_physical.png,fixtureeditor_aliases.png,fixtureeditor_channel_color.png,fixtureeditor_channel_gobo.png,fixtureeditor_channel_preset.png,fixtureeditor_channel_shutter.png,fixtureeditor_channel_wizard.png,fixtureeditor_channels.png,fixtureeditor_general.png,fixtureeditor_mode_channels.png,fixtureeditor_mode_edit_head.png,fixtureeditor_mode_heads.png'
---

### Chapter 10

# Fixture Definition Editor

Fixture Definition Editor is a separate application bundled together with QLC+ for creating and modifying [fixture definitions](/basics/glossary-and-concepts#fixtures) used by QLC+. The definitions tell QLC+ (and users) important details about fixtures, such as which channel is used for pan movement, what value in which channel changes the beam color to green, how the fixture is reset etc...

The main window in the Fixture Editor is just an empty workspace that contains the actual editor windows used to edit fixture definitions.

**Important note: for many reasons, you SHOULD NOT save or copy your custom fixtures in the QLC+ system fixtures folder. The most important is that when you uninstall QLC+, the system fixtures folder gets deleted, so your fixtures.  
You are recommended to save them in the user fixtures folder. To find it, please refer to the [Q & A section](/basics/questions-and-answers) of this documentation.**

Main toolbar
------------

|     |     |
| --- | --- |
| ![](/basics/filenew.png) | Create a new fixture definition. Opens an empty Fixture Editor window. |
| ![](/basics/fileopen.png) | Open an existing fixture definiton. Opens the fixture definition in a Fixture Editor window. |
| ![](/basics/filesave.png) | Save the fixture definition in the currently active Fixture Editor window. |
| ![](/basics/filesaveas.png) | Save the fixture definition with a given name in the currently active Fixture Editor window. |

Fixture Editor
==============

Fixture Editor windows contain everything needed to edit one Fixture Definition at a time. The windows are separated in five tabs: 
[**General**](general)<br>
[**Physical**](physical)<br>
[**Channels**](channels)<br>
[**Modes**](modes)<br>
[**Aliases**](aliases)<br>
Tabs are organized in a logical order that should be followed from left to right when creating a new fixture definition.
