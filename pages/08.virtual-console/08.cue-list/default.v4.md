---
title: 'Cue List'
date: '03:34 22-08-2023'
---

A Cue List provides a list of [Functions](/basics/glossary-and-concepts#functions) that you can step through with a single keyboard key. The Cue List is designed for theatrical performances where the lighting operator needs only to follow the script and toggle the next cue as the performance goes on.

The first column on the Cue List displays the cue number that runs from 1 to infinity and beyond[*](https://en.wikipedia.org/wiki/Buzz_Lightyear). The second column shows the individual [Function](/basics/glossary-and-concepts#functions) name that has been assigned to that particular cue.

**Please note** that only [Chasers](/basics/glossary-and-concepts#chaser) can be assigned to a Cue List, for the simple reason that the Chaser is the only function with a duration. Since any other Function can be added as a step to a Chaser with the [Chaser Editor](/function-manager/chaser-editor), it is simple to create the desired Cues by mixing [Scenes](/basics/glossary-and-concepts#scene), [Collections](/basics/glossary-and-concepts#collection), and so on...

### Configuration

Cue Lists can be configured with the object properties button ![](/basics/edit.png) found in the toolbar or by double clicking on the Cue List widget.  

|     |     |
| --- | --- |
| **Cue list name** | Set the friendly name of the Cue List. The name appears as the Cue List's second column title. |
| **Cue list** | **Chaser**: Select the [Chaser](/basics/glossary-and-concepts#chaser) to associate with the Cue List.  <br>![](/basics/attach.png) Associate a [Chaser](/basics/glossary-and-concepts#chaser) with the Cue List using the [Select Function](/function-manager/function-selection) dialog.  <br>![](/basics/detach.png) Detach the selected Chaser from the Cue List.  <br>  <br>**Playback buttons layout**: Select how the playback can be controlled with the two available buttons.  <br>  <br>**Behavior of the Next/Previous buttons when the chaser is not active**: Select the behaviour of the Next and Previous buttons when the Chaser is not running. Basically this option determines the action that should be taken when the Chaser is started for the first time or when the Chaser is stopped at any cue in the list.  <br>The possible choices are:<br><br>**Run chaser from first/last cue (default)**: This is the default behaviour and it will run the Chaser with its original running order (Normal or Reverse)<br>**Run chaser from next/previous cue**: Start the Chaser from the cue where it has been interrupted<br>**Select next/previous cue**: This performs only a selection of a cue, without running the Chaser<br>**Do nothing**: No action is taken in this case. This is useful when working only with the Play/Stop button |
| **Playback** | You can select the key that you want to use to start/stop the selected cue in the Cue List with this option. The key combination is shown in the text field; if the field is empty, there is no key combination currently attached to the Cue List. |
| **Next cue** | You can select the key that you want to use to skip to the next cue in the Cue List with this option. The key combination is shown on the text field; if the field is empty, there is no key combination currently attached to the Cue List. |
| **Previous cue** | You can select the key that you want to use to skip to the previous cue in the Cue List with this option. The key combination is shown on the text field; if the field is empty, there is no key combination currently attached to the Cue List. |
| **Side Fader** | **Behaviour**: Select the behaviour of the side fader.<br><br>If **Crossfade** is selected, a fader will be displayed on the left side of the panel, implementing the crossfade functionality between cues.<br>If **Steps** is selected, a fader will be displayed on the left side of the panel, and its value will determine which cue of the Cue List to run. |

  

### Operate mode

When switching QLC+ to [Operate Mode](/basics/glossary-and-concepts#modes), the Cue List will become active, allowing the selection of the desired cues included in the associated Chaser.  
  
Pressing the ENTER key will start the selected cue.  
  
The following items are displayed at the bottom of the Cue List widget:  
  

|     |     |
| --- | --- |
| **Cue progress bar** | A progress bar showing the current running cue status.  <br>When a fade in speed is set and is not set to "default" the bar will be colored in green.  <br>During the hold time the bar will be colored in blue. The text displayed on the bar is the time remaining for the cue to end.  <br>If the cue duration is set to infinite (∞), the bar will just display the fade in progress in green. |
| ![](/basics/slider.png) | When clicked, this button will open/close a side panel showing a fader to control crossfade or step selection.  <br>(See next chapter for Crossfade details) |
| ![](/basics/player_play.png)  <br>![](/basics/player_pause.png)  <br>![](/basics/player_stop.png) | There are 3 playback states that a Cue list can assume: **running**, **paused** and **stopped**.  <br>The layout of the playback control buttons can be decided in the configuration dialog, and the playback rules applied are always as follows:  <br>![](/basics/player_play.png)  <br>When clicked from a stopped state, the playback starts from the currently selected cue. If no cue is selected, the playback starts from the first cue according to the associated Chaser running order.  <br>Once clicked, the button icon changes depending on the chosen buttons layout, which could be "pause" or "stop".  <br>When clicked from a paused state, the playback will be resumed from where it was left.  <br>  <br>![](/basics/player_pause.png)  <br>When clicked, the playback of the currently running cues is paused, freezing everything that was running to the current state (lights will stay on, motors will stop moving, etc).  <br>The button background will turn into a light blue, to indicate that clicking it again will resume the cue playback from where it was left.  <br>**Note:** It is possible to pause fade in and hold phases, but not a fade out.  <br>  <br>![](/basics/player_stop.png)  <br>When clicked, the currently running cue will be stopped, and the cue selection will stay on the last played cue. Any paused state will be reset and lights will be shut down.  <br>If the buttons layout is "Play/Pause + Stop", pressing this button for the second time, will bring back the selected cue to the first cue of the Chaser (or the last if the running order is reversed) |
| ![](/basics/back.png) | Go back to the previous cue in the Cue List, which will then be reproduced. When the top is reached, the previous cue will be the last cue of the Cue List |
| ![](/basics/forward.png) | Go to the next cue in the Cue List, which will then be reproduced. When reaching the bottom, the next cue will be the first of the Cue List |

  

### Crossfade

The side fader can be used to manually control crossfade between two consecutive cues.  
  
The numbers at the top and bottom of the fader show the "current cue" and "next cue".  
The label for the current cue has a blue label. This will be at 100% when the playback of the Cue List is started.  
The label for the next cue has an orange label and will be at 0% when the playback of the Cue List is started.  
  
When the Cue list is running, the crossfade fader controls the intensity of the associated cues, overriding their Fade In and Fade Out speeds and so allowing manual control of the transition.  
  
After the fader has been moved to the opposite end of its travel, the following changes take place:  

* The orange next cue label changes to blue. This indicates that the old next cue has become the new current cue.
* The blue current cue label changes to orange and the number of the cue is increased by 2. So this fader now controls the cue which comes after the old next cue.

  

### Hint

When a cue is added to a Chaser using the [Chaser Editor](/function-manager/chaser-editor), the default duration is set to 0.  
To avoid the cues in the Cue List looping frantically without any result, set the duration of your cues, either by double clicking on the duration field or by using the Speed Dial widget![](/basics/speed.png)  
Note that if you need scenes that you're going to crossfade manually with the Cue List widget, you probably will want to set the duration of the cues to "infinite" (∞) using the [Speed Dial widget](../speed-dial). This can be enabled in the Chaser Editor by clicking on the ![](/basics/speed.png) button.