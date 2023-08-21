---
title: 'Function Manager'
date: '11:55 21-08-2023'
taxonomy:
    category: docs
---

### Chapter 4

# Function Manager

With the function manager you can manage all of your functions that do the actual work of automating your lights. You can create new functions, remove and edit existing ones as well as create copies of them. Controls are on the upper part of the window; the lower part displays all of your functions as well as the function editor for the currently selected function (if any).

Each function type can be found under its own category: Scene for scenes, EFX for EFX's etc. When a new function is created or an existing one selected, the appropriate editor is chosen and displayed on the right hand side of the Function Manager window. Changes made in the editor pane are stored immediately in the functions themselves and no additional OK clicks are required.

Controls
--------

|     |     |
| --- | --- |
| ![](/basics/scene.png) | Create a new [Scene](/basics/glossary-and-concepts#scene) and edit it using the [Scene Editor](sceneeditor.html). (Shortcut: CTRL+1) |
| ![](/basics/chaser.png) | Create a new [Chaser](/basics/glossary-and-concepts#chaser) and edit it using the [Chaser Editor](chasereditor.html). (Shortcut: CTRL+2) |
| ![](/basics/sequence.png) | Create a new [Sequence](/basics/glossary-and-concepts#sequence) and edit it using the [Chaser Editor](chasereditor.html). (Shortcut: CTRL+3) |
| ![](/basics/efx.png) | Create a new [EFX](/basics/glossary-and-concepts#efx) and edit it using the [EFX Editor](efxeditor.html). (Shortcut: CTRL+4) |
| ![](/basics/collection.png) | Create a new [Collection](/basics/glossary-and-concepts#collection) and edit it using the [Collection Editor](collectioneditor.html). (Shortcut: CTRL+5) |
| ![](/basics/rgbmatrix.png) | Create a new [RGB Matrix](/basics/glossary-and-concepts#rgb-matrix) and edit it using the [RGB Matrix Editor](rgbmatrixeditor.html). (Shortcut: CTRL+6) |
| ![](/basics/script.png) | Create a new [RGB Script](/basics/glossary-and-concepts#rgb-script) and edit it using the [RGB Script Editor](rgbmscriptapi.html). (Shortcut: CTRL+7) |
| ![](/basics/audio.png) | Create a new [Audio](/basics/glossary-and-concepts#audio) function to be used in [Chasers](/basics/glossary-and-concepts#chaser) or [Shows](/basics/glossary-and-concepts#show). (Shortcut: CTRL+8) |
| ![](/basics/video.png) | Create a new [Video](/basics/glossary-and-concepts#video) function to be used in [Chasers](/basics/glossary-and-concepts#chaser) or [Shows](/basics/glossary-and-concepts#show). (Shortcut: CTRL+9) |
| ![](/basics/folder.png) | Create a new folder in the selected category. (Shortcut: CTRL+L) A folder can be renamed by double clicking on it.  <br>When a folder is selected, a newly created function will be added to it. To move existing functions inside a folder, just select and drag them into it. In the same way they can be moved outside a folder by dragging them onto a category item.  <br>When deleting a folder, all the functions and subfolders contained into it will be deleted as well.  <br>**Note:** Empty folders will not be saved into your project. |
| ![](/basics/autostart.png) | Open the Function selection dialog to choose a startup function. The selected function will be started every time QLC+ switches to operate mode. This is very useful when running QLC+ in kiosk mode (thus using [-k or -p flags](commandlineparameters.html))  <br>A special entry named "&lt;No function&gt;" is present to remove a previously set startup function. |
| ![](/basics/wizard.png) | Start the [Function Wizard](functionwizard.html). (Shortcut: CTRL+W) |
| ![](/basics/editcopy.png) | Create a copy of each of the selected functions. **Note**: cloning a Sequence will clone its bound Scene too. |
| ![](/basics/editdelete.png) | Permanently remove the selected function(s). |