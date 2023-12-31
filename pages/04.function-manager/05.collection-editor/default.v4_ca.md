---
title: 'Collection Editor'
date: '12:21 21-08-2023'
---

The collection editor, as its name suggests, is used to edit ![](/basics/collection.png) [Collection](/basics/glossary-and-concepts#collection) functions.  
Collections are very helpful in a workflow where you create QLC+ functions dedicated to specific areas of your show. For example, you can create a number of Scenes to control only colors, some other Scenes to control only positions and so on. Then you can create a number of Chasers and EFX for automations.  
When you have created all the basic elements of your show, you can then use Collections to build a sort of "shortcut" to compound scenes. For example a color Scene + a position Scene.

**Note:** Collections don't have speed setting; each function you include in a collection follows its own speed settings.

**Important**: The order of the Functions in a Collection is fundamental when dealing with HTP/LTP usage or relative values. QLC+ will internally start the Functions of a Collection from the first to the last, so if they use the same channels, just keep this in mind because you might run into undesired effects.  
For example a Scene setting Pan/Tilt channels + a EFX in relative mode must have a precise order: the Scene in the first position and the EFX in the second position.

### Controls

|     |     |
| --- | --- |
| **Collection name** | Change the name of the collection. |
| ![](/basics/edit_add.png) | Add an existing [Function](/basics/glossary-and-concepts#functions) to the collection, using the [Select Function](../function-selection) dialog. The order of the functions has no significance. |
| ![](/basics/edit_remove.png) | Remove the selected functions from the collection. |