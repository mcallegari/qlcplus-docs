---
title: 'Chaser Editor'
date: '12:08 21-08-2023'
---

The chaser editor, as its name suggests, is used to edit ![](/basics/chaser.png) [Chaser](/basics/glossary-and-concepts#chaser) functions.  
A Chaser is composed by steps and each step is represented by

* A progressive number
* The related function name
* Fade in time
* Hold time
* Fade out time
* Step total duration time
* A note field in case you need to write something to remember what the step does

The timings steps and the note field can be modified by double clicking on them. By default the times are taken in seconds (for example 135 means 2m15s), unless you use the same syntax QLC+ uses (for example 1m12s.80)

### Controls

|     |     |
| --- | --- |
| **Chaser name** | Change the name of the chaser. |
| ![](/basics/speed.png) | Show/Hide the Speed Dial widget, used to facilitate the Chaser parameters tuning like Fade In, Fade Out and Hold |
| ![](/basics/player_play.png) | Start to run the Chaser to test the playback beginning from the selected step |
| ![](/basics/player_stop.png) | Stop a previously started playback |
| ![](/basics/back.png) | When playback is active, go to the previous step in the Chaser |
| ![](/basics/forward.png) | When playback is active, go to the next step in the Chaser |
| ![](/basics/editcopy.png) | Copy the selected steps into the clipboard. |
| ![](/basics/editpaste.png) | Paste the previously copied steps from clipboard to the current position selected. If none, the steps will be appended at the end of the list |
| ![](/basics/editcut.png) | Remove the selected steps from the list and copy them into the clipboard. |
| ![](/basics/edit_add.png) | Add an existing [Function](/basics/glossary-and-concepts#functions) to the chaser, using the [Select Function](../function-selection) dialog. The function are inserted after the currently selected step. |
| ![](/basics/edit_remove.png) | Remove the selected step from the chaser. |
| ![](/basics/up.png) | Move the selected step above/before the previous step. |
| ![](/basics/down.png) | Move the selected step below/after the next step. |
| ![](/basics/random.png) | Reorder (shuffle) the selected scenes randomly. Main differences to "Run Order: Random" are that the shuffled scene order is static, predictable, can be modified manually and doesn't necessarily affect all scenes. |
| **Run Order** | * Loop: Run through the steps over and over again.<br>* Single Shot: Run through the steps once and then stop.<br>* Ping Pong: Run through the steps over and over again, reversing direction at both ends.<br>* Random: Run through the steps over and over again in random order. |
| **Direction** | * Forward: Run through the steps from start to end; 1, 2, 3...<br>* Backward: Run through the steps from end to start; ...3, 2, 1 |
| **Fade In Speed** | * Common: Apply the same speed for all the steps in this Chaser<br>* Per step: Apply a user defined speed for each step in this Chaser<br>* Default: Apply the default speed for each step (0 seconds). |
| **Fade Out Speed** | * Common: Apply the same speed for all the steps in this Chaser<br>* Per step: Apply a user defined speed for each step in this Chaser<br>* Default: Apply the default speed for each step (0 seconds). |
| **Step Duration** | * Common: Apply the same duration for all the steps in this Chaser<br>* Per step: Apply a user defined duration for each step in this Chaser |