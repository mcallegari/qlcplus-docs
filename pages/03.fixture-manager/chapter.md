---
title: 'Fixture Manager'
taxonomy:
    category: docs
child_type: docs
---

### Chapter 3

# Fixture Manager
The fixture manager is the heart of QLC+'s fixture-oriented architecture. As its name already says, you can manage (add, remove and edit) your lighting fixtures from the fixture manager. On the left side of the manager there is a list that displays all of the fixtures in the current workspace. When a fixture is selected, the right side of the window displays the details of the selected fixture. When a [Fixture Group](/basics/glossary-and-concepts#fixture-group) is selected, the right side of the window is occupied by the [Fixture Group Editor](fixturegroupeditor.html).

### Controls

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Add new [Fixture](/basics/glossary-and-concepts#fixtures)(s) to the workspace with the [Add/Edit Fixture](add-edit-fixtures) dialog. |
| ![](/basics/rgbpanel.png) | Add a RGB panel to the workspace with with the [Add RGB Panel](addrgbpanel.html) dialog. |
| ![](/basics/edit_remove.png) | Remove the selected fixtures from the workspace. This also removes the fixtures from ALL groups they have been assigned to. |
| ![](/basics/configure.png) | Edit the currently selected fixture's properties with the [Add/Edit Fixture](add-edit-fixtures) dialog. |
| ![](/basics/fade.png) | Opens the [Channel Properties Configuration](channelproperties.html) window. |
| ![](/basics/group.png) | Assign the selected fixtures to a [Fixture Group](/basics/glossary-and-concepts#fixture-group) displayed in a popup menu. If you have no groups defined yet, you can choose to create a new one from the menu that opens when this button is clicked. |
| ![](/basics/ungroup.png) | Resign (remove) the selected fixtures from the group they are currently in. Note that removing fixtures from a group will NOT destroy the fixtures completely. Also, removal from one group will not affect the fixtures' memberships to other groups. |
| ![](/basics/up.png) | Move the selected Channel Group up |
| ![](/basics/down.png) | Move the selected Channel Group down |
| ![](/basics/fileimport.png) | Imports a fixture list file (.qxfl) into QLC+. Please note that fixture addresses conflicts are not handled, so it is suggested to use this functionality on an empty project. |
| ![](/basics/fileexport.png) | Exports the list of fixtures currently available on a QLC+ project into a file with extension .qxfl. This file can be used afterward with the import functionality. |
| ![](/basics/remap.png) | Opens the [Fixtures remapping](fixturesremap.html) window. |
