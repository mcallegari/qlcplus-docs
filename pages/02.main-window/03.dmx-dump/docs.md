---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

The DMX Dump functionality allows you to save the current DMX values that are being sent to the output universes at a particular moment. Basically it takes a "snapshot" of DMX channels and saves them for a later use.  
DMX Dump can save values to a new [Scene](/basics/glossary-and-concepts#scene) or overwite the values of an existing Scene. The "dumped" Scene can also be added to an existing [Chaser](/basics/glossary-and-concepts#chaser), Virtual Console [button](vcbutton.html) or [slider](vcslider.html)  
  
Please note that:

*   Selected Channels/Chasers will be remembered when re-opening this window
*   The DMX values saved are taken before the Grand Master

When opening the DMX Dump window, the following options will appear:

| | |
| - | - |
| **Scene name** | Defines the name of the Scene that will be created. If no name is specified, a default name like "New Scene From Live" and a numeric identification will be set, allowing fast use of this functionality. |
| ![](/basics/scene.png) **Select an existing Scene** | By clicking on this button, a Function selection window will be displayed, allowing to select an existing Scene to be overwritten with the current DMX values.<br><br>***Note:*** Overwriting a Scene doesn't ask for confirmation and can be a potentially dangerous operation if you select the wrong Scene by mistake. So be careful when using this functionality.<br><br>When a Scene is selected, the DMX Dump window will automatically set two things for you:<br>*   The "Dump selected channels" option will be checked<br>*   The Fixtures tree will be updated, and only the channels enabled in the Scene channels will be selected. If you need to overwrite different channels, just select/unselect them manually before confirming the operation<br>
| **Dump all channels** | If this option is selected, QLC+ will dump all the channels of all the universes and all the fixtures. To inform the user about what this option will do, a report in the form of (Universes, Fixtures, Channels) will be displayed. |
| **Dump selected channels** | If this option is selected, the panel below will be activated, allowing you to choose exactly which channels that you want to be saved into a Scene. They are organized in a tree by Universes and Fixtures. |
| **Add to** | This section offers you immediate use of your scene in an existing Virtual Console widget.<br>Options are:<br><br>**Chaser**: The list contains all the chasers present when DMX Dump window is opened. Each Chaser has a checkbox that, if checked, will tell QLC+ to add the newly created Scene to the selected chasers.<br>This feature is very useful when using [Cue Lists](vccuelist.html) in the [Virtual Console](virtualconsole.html) panel, because the newly created Scene will appear in the Cue List for immediate use during a live performance.<br>**Button**: The list contains all the buttons currently present in your Virtual Console space.<br>When selected, the buttons will be set to activate/deactivate the Scene just captured. You will see the button label chaning to "Scene from live ..." and a progress number to identify it.<br>***Note:*** Any previous function associated to the selected buttons will be overwritten!<br>**Slider**: The list contains all the sliders currently present in your Virtual Console space.<br>As with buttons, all the selected sliders will be set to control the Scene just captured.<br>***Note 1***: A slider must be in **playback mode** to work as an intensity controller for a Scene.<br>***Note 2***: Any previous function associated with the selected sliders will be overwritten! |
| **Dump only non-zero values** | This option will tell QLC+ to save only the channels with values that are **not** equal to zero.<br>If you know what you're doing, this could save project space and avoid channels conflicts with other Virtual Console widgets. |