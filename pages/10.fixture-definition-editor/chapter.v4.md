---
title: 'Fixture Definition Editor'
date: '05:24 22-08-2023'
taxonomy:
    category: docs
media_order: 'fixture_editor_physical.png,fixture_editor_aliases.png,fixture_editor_channel_color.png,fixture_editor_channel_gobo.png,fixture_editor_channel_preset.png,fixture_editor_channel_shutter.png,fixture_editor_channel_wizard.png,fixture_editor_channels.png,fixture_editor_general.png,fixture_editor_mode_channels.png,fixture_editor_mode_edit_head.png,fixture_editor_mode_heads.png'
---

### Chapter 10

# Fixture Definition Editor

The Fixture Definition Editor is a separate application bundled together with QLC+ for creating and modifying [fixture definitions](/basics/glossary-and-concepts#fixtures). Having a fixture definition for each of your lights allows QLC+ to know how to control them.

## Saving your fixture definitions

To use your fixture definitions in QLC+, you must save them in a location where QLC+ expects to find them. There are two places where you can save your fixture definitions:
1. In the same folder as your QLC+ workspace (Handy if you want to give your workspace to someone else)
2. In the user fixtures folder found in the following locations:
    * Linux: it is a hidden folder in your user home directory: $HOME/.qlcplus/Fixtures
    * Windows: it is a folder in your user (e.g. MyUser) directory: C:\\Users\\MyUser\\QLC+\\Fixtures
    * Mac OS: it is located in your user Library directory: $HOME/Library/Application\\ Support/QLC+/Fixtures

**Important note: you SHOULD NOT save or copy your custom fixtures into the QLC+ system fixtures folder. This is because when QLC+ is uninstalled, all the fixtures in this folder are deleted. It can also cause unintended conflicts between the system and your own fixture definitions.**

Main toolbar
------------
The main window in the Fixture Editor is just an empty workspace that contains the actual editor windows used to edit fixture definitions. The following options are available to you:

|     |     |
| --- | --- |
| ![](/basics/filenew.png) | Create a new fixture definition. Opens an empty Fixture Editor window. |
| ![](/basics/fileopen.png) | Open an existing fixture definition. Opens the fixture definition in a Fixture Editor window. |
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
