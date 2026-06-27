---
title: 'Simple Desk'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapter 6

# Simple Desk

The simple desk emulates a typical lighting console that is able to control a full 512-channel DMX universe with a multiple cue stacks operated with playback sliders.  
Simple desk is divided into two main areas: **channels** (top area) and **cues** (bottom area).  
The channels area reflects exactly the current status of each DMX channel of each universe. If channels are controlled with no project loaded, users have a completely manual control of them.  
When a project is loaded, instead, moving a Simple desk channel will override any other QLC+ function trying to control that channel. A visual indication will turn the channel background to red, informing the user that Simple desk now has the total control of it.  
This is very useful in some live circumstances where a running function needs some manual adjustment.  
To "disengage" Simple desk from overriding channels, just click on the reset button. Resetting channels will either bring them back to zero or to the value previously set by a function.  
  
Cues operates separately from other QLC+ components. For example, cues within the cue stack are not visible in the [Function Manager](/function-manager) and [Scenes](/basics/glossary-and-concepts#scene) are not visible in the cue stack.

Controls - Universe
-------------------

The universe box contains the sliders that are used to control individual DMX channels in the first DMX universe. Since 512 sliders cannot fit nicely on the screen at the same time, they have been divided into pages. By default, each page contains 32 sliders but that can be [tuned](#tuning).

|     |     |
| --- | --- |
| ![](/basics/tabview.png) | Switch the view mode from all channels to fixture channels. Please note that if no fixtures has been defined, the second mode will produce an empty result |
| ![](/basics/back.png) | Skip to the previous DMX page. |
| **Universe page box** | Displays the current DMX page. You can skip to a page by writing the page number directly into this box or use the mouse wheel to skip between pages quickly. |
| ![](/basics/forward.png) | Skip to the next DMX page. |
| ![](/basics/fileclose.png) | Reset all DMX sliders back to zero or to the value previously set by a function. |
| **GM** | The [Grand Master](/basics/glossary-and-concepts#grand-master) |

Controls - Playback
-------------------

The playback box contains a bunch of playback sliders each of which may contain a cue stack. The playbacks can be used to "play back" the contents of their cue stacks and they can also be used to adjust their overall intensity of the cue.

|     |     |
| --- | --- |
| ![](/basics/check.png) | Select the currently-active playback, whose cue stack is shown on the right side of the screen. |
| **Playback slider** | Adjust the intensity of playback's cue stack. When the slider is drawn all the way to zero, the cue stack is stopped. Any value above zero will start replaying the playbacks' cue stack. |
| ![](/basics/flash.png) | Flash the playback's first cue. |

Controls - Cue Stack
--------------------

The cue stack box shows the contents of the currently selected playback.

|     |     |
| --- | --- |
| ![](/basics/back.png) | Skip to the previous cue (or start playback on the last cue in the cue stack with full intensity). |
| ![](/basics/player_stop.png) | Stop the currently active cue stack. |
| ![](/basics/forward.png) | Skip to the next cue (or start playback on the first cue in the cue stack with full intensity). |
| ![](/basics/edit.png) | Switch to/from cue edit mode. When this button is pressed, you can edit the contents of individual cues; the currently active cue's contents are shown on the DMX sliders.<br><br>The Fade In speed, Fade Out speed and Duration as well as the name of individual cues can be adjusted with the speed dials that are displayed in a separate tool window. You can also select multiple cues to adjust their speeds all at the same time, but then the DMX sliders are disabled to prevent you from accidentally overwriting all cue contents with the same values. |
| ![](/basics/record.png) | Record a new cue, taking its contents from the current DMX slider values. |
| **Cue Stack** | This box displays the contents of the currently selected playback's cue stack, along with the index number (1, 2, 3...), Fade In speed, Fade Out speed, Duration and an optional name for each cue.<br><br>You can change the cue order by dragging the cues on top of each other, either one at a time or multiple cues at the same time. |

Tuning
------

Please refer to the [Manual parameters tuning](/advanced/parameters-tuning#1-simple-desk) Simple Desk section