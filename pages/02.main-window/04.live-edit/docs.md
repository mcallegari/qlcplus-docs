---
title: 'Live Edit'
taxonomy:
    category:
        - docs
---

Starting from version 4.5.0, QLC+ offers a functionality which allows the adjustment of your [Functions](/basics/glossary-and-concepts#functions) while in [Operate Mode](/basics/glossary-and-concepts#modes).  
The Live Edit icon ![](/basics/liveedit.png) is located in the QLC+ top bar, beside the [DMX Dump](dmxdump.html) icon ![](/basics/add_dump.png) and it is activated only when the user has switched to Operate Mode.  
When clicking on the Live Edit icon, a [Function selection](selectfunction.html) panel will be displayed, allowing the selection of the function you want to adjust.  
When you press OK, the correct editor will be displayed for editing that function.  
At the moment, the following functions are supported for live editing:

*   ![](/basics/scene.png) [Scene](/basics/glossary-and-concepts#scene) will open a [Scene Editor](sceneeditor.html)  
    Note that by default the editor will be set in "Blind mode" when you edit a Scene that is not currently running, in case you want to make the changes effective only when the Scene is being replayed the next time it is selected. For a currently running Scene the editor will open in live mode by default.
*   ![](/basics/chaser.png) [Chaser](/basics/glossary-and-concepts#chaser) will open a [Chaser Editor](chasereditor.html)
*   ![](/basics/efx.png) [EFX](/basics/glossary-and-concepts#efx) will open an [EFX Editor](efxeditor.html)
*   ![](/basics/rgbmatrix.png) [RGB Matrix](/basics/glossary-and-concepts#rgbmatrix) will open an [RGB Matrix Editor](rgbmatrixeditor.html)  
      
    The types of functions listed in the [Function selection](selectfunction.html) can be selected by using the filter check boxes at the bottom of the panel.  
    There is an option at the top of the panel to list currently running functions only.  
      
    Note that if another function is running when performing a live edit, HTP channels in the other function may prevent some adjustments from being seen on the stage.