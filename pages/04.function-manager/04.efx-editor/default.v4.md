---
title: 'EFX Editor'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

The EFX editor, as its name suggests, is used to edit ![](/basics/efx.png) [EFX](/basics/glossary-and-concepts#efx) functions. The view is split into two tabs:

* **General** tab is for selecting [Fixtures](/basics/glossary-and-concepts#fixtures), speed and fixture order.
* **Movement** tab is for selecting details on how the fixtures should move their beams.

### General Tab Controls

![](efx-general.png)

|     |     |
| --- | --- |
| ![](/basics/speed.png) | Adjust the EFX speed settings:<br><br>**Fade In:** Fade the EFX startup to target size<br>**Fade Out:** Currently not used<br>**Duration:** The duration of one full round using the selected pattern |
| ![](/basics/player_play.png) | Enable the output and run the EFX to test how it looks like |
| **EFX name** | Change the name of the EFX. |
| **Fixture list** | * Step: Shows the order in which the fixtures start their movement in serial/asymmetric order<br>* Fixture: The name of each fixture that has been added to the EFX<br>* Mode: The channels the EFX should control. They can be **Position**, **Dimmer** or **RGB**  <br>    Note: when selecting RGB, you might want to enable the "Color Background" described below.<br>* Reverse: When checked, the fixture reverses its movement as opposed to non-reversed fixtures. The "normal" direction is set by direction in the "Movement" page.<br>* Start Offset: Value in degrees, where on the movement path this fixture should start |
| ![](/basics/edit_add.png) | Add a [Fixture](/basics/glossary-and-concepts#fixtures) to the EFX, after the currently selected position. Since EFX is used for moving the head or mirror of an intelligent fixture, only fixtures with **pan and tilt** capability (8bit or 16bit) can be added to an EFX. |
| ![](/basics/edit_remove.png) | Remove the selected fixtures from the EFX. |
| ![](/basics/up.png) | Raise the selected fixture upwards (earlier) in serial order. |
| ![](/basics/down.png) | Lower the selected fixture downwards (later) in serial order. |
| **Fixture order** | Change the EFX's fixture order—see below. |

### Movement Tab Controls

![](efx-movement.png)

|     |     |
| --- | --- |
| **Pattern area** | Shows a 2D-projection of the fixtures' head/mirror movement. Every time you change a parameter, one small dot for each fixture travels the complete path in its selected direction from its start offset.<br><br>The speed of the movement reflects selected speed settings. |
| **Direction** | Default direction of the fixtures (can be altered individually for each fixture by the checkbox in the **Reverse** column)<br><br>* Forward: The fixtures move forwards along the pattern path<br>* Backward: The fixtures move backwards along the pattern path |
| **Run order** | * Loop: Run thru the steps over and over again.<br>* Single Shot: Run thru the steps once and then stop.<br>* Ping Pong: Run thru the steps over and over again, reversing direction at both ends. |
| **Pattern** | Select the movement pattern algorithm.<br><br>* Circle<br>* Eight<br>* Line: goes from one end to the other and back; faster in the middle, slower at the ends<br>* Line2: goes in one direction only; speed is always the same<br>* Diamond<br>* Square<br>* SquareChoppy<br>* Leaf<br>* Lissajous |
| **Parameters** | * Width: Choose the pan width (0-255)<br>* Height: Choose the tilt height (0-255)<br>* X Offset: Move the pattern's horizontal (pan) centerpoint (0-255)<br>* Y Offset: Move the pattern's vertical (tilt) centerpoint (0-255)<br>* Rotation: Rotate the pattern along its axis (0-360 degrees)<br>* Start Offset: Where along the path the movement should start (0-360 degrees)<br>* X Frequency: Change the **Lissajous** pattern's X (horizontal) frequency (0-32)<br>* Y Frequency: Change the **Lissajous** pattern's Y (vertical) frequency (0-32)<br>* X Phase: Change the **Lissajous** pattern's X (horizontal) phase (0-360 degrees)<br>* Y Phase: Change the **Lissajous** pattern's Y (vertical) phase (0-360 degrees) |
| **Color Bacground** | When enabled, the EFX preview background will display a RGB palette, to show what the EFX does when controlling RGB channels |
| **Relative** | See below. |

### Fixture Order

Fixtures taking part in an EFX function can be set to follow the algorithm in certain order:

* **Parallel:** all fixtures follow the same pattern synchronously
* **Serial:** fixtures start following the pattern one after the other, with a little delay between each of them.
* **Asymmetric:** all fixtures start moving simultaneously, but with similar offset as in the Serial mode.

### Direction

EFX functions' direction can be reversed for all fixtures at once or on a per-fixture basis. The function can also be set to do an infinite loop, an infinite ping-pong-loop (direction is reversed after each pass) or it can run through just once, in a single-shot mode, after which it terminates by itself. If the function is set to do an infinite loop, it must be stopped manually.

### Relative Mode

EFX position is absolute by default-in other words, the selected EFX will exclusively control the X/Y position of the specified heads. When the Relative Mode checkbox is enabled, the EFX position acts as a layer on top of any position that has already been set (e.g. by a scene or even another EFX). In other words, the EFX is relative to current fixture position.

In absolute mode. the EFX can be set to run at specific head position (e. g. do circle downstage center, stage left, etc.)

In relative mode, the center of the preview window (offset x=127, offset y=127) will be applied to current head position.

It is useful to reduce number of EFX presets: let's say we want to have 3 types of EFX (pan saw, tilt saw, circle) at 4 places (e.g. 4 stage corners). In absolute mode that means 3x4 = 12 presets. If we want to change something, we have to edit many functions. We most probably need also one VC button for each. In relative mode, we create one EFX preset for each EFX type (pan saw, tilt saw, circle), and we set offset to neutral (x=127, y=127). Then, we create scenes with PAN & TILT channels for each position. Now we have only 3+4 presets (and 3+4 VC buttons, preferably in 2 solo frames).

**Tips&Tricks**

In relative mode, it is also possible to fade between positions (set fade time in scenes) while the EFX is running.

Using XYPad and relative mode, it is possible to move EFX to any place during the show.