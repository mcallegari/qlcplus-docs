---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

### Chapter 5

# Show Manager

The Show Manager has been introduced in QLC+ starting from version 4.0.0, after forking the original QLC code on November 5th, 2012.  
  
This feature is meant to give users the possibility of setting up a time driven show in a friendly and completely graphical way.  
The graphic interface shows a multitrack view, typical of audio sequencers or video editing softwares, and with it users are allowed to place QLC+ [Functions](/basics/glossary-and-concepts#functions) at the desired place and time in the view.  
Show Manager gives a lot of flexibility during a [Show](/basics/glossary-and-concepts#show) creation thanks to its visual-oriented approach. Once understood the basic elements, it is very easy to create, move or edit the existing functions and improve a Show by adding new tracks to it.  
  
Typical use cases of Shows are those gigs where a band plays songs following a metronome and the light show has always to be the same, following the music.  
Another case are visual entertainment shows, where dancers or singers follow some music and lights create the atmosphere at the right time.  
  
The Show Manager drives users to make large use of the Sequence function. Here's the explanation of the difference between a Chaser and a Sequence.  

Sequences vs Chasers
--------------------

Even if the [Sequence](/basics/glossary-and-concepts#sequence) and the [Chaser](/basics/glossary-and-concepts#chaser) functions have some common ground, they're not the same thing.  
If not done yet, you are invited to read once again their definitions in the [Basic Concepts & Glossary](/basics/glossary-and-concepts) page of this documentation.  
The main differences are:

* **Steps**: The steps of a Chaser can represent any QLC+ Function, while the steps of a Sequence represents different values of the same [Scene](/basics/glossary-and-concepts#scene).  
    In other words, a Chaser is an independent function, while a Sequence can exist only on top of a Scene.  
    The reason for this is, as mentioned before, the visual approach of the Show Manager. If a track of a Show is the graphical representation of a Scene, then it's more intuitive to think that each Sequence created on that track is a function controlling the values of that Scene.
* **Order**: Chasers can be reproduced in any order (Forward, Backward, Ping-Pong, Random) while in the Show Manager, Sequences are always reproduced from the beginning to the end (Forward). Again, this is related to the visual aspect of the Show Manager, where the playback has a natural time forward direction.  
    On the other hand, Sequences created with the Function Manager can have the same order properties of Chasers.
* **Editing**: The editing approach between Sequences and Chaser is different too.  
    Normally the workflow of a Chaser is: create a Function, then add it to the Chaser as a step.  
    The workflow of a Sequence is: create a Scene, create a Sequence on top of it, add steps to it.  
    The Sequence approach might be very effective when you design a light show if you can pre-determine which fixtures you're going to use. Another major advantage of Sequence editing is that when you create a new step, the values of the previous step are copied in the new one. So the user is simply required to adjust the differences between them.  
    If you are going to create 500 steps and they're all different, then Sequences and Chasers will take almost the same time to be created.  
    
* **Synchronization**: another major advantage of using Sequences in a Show is that a Show can easily be extended (or reduced) while with a Chaser you will have a hard time to synchronize the new functions to the existing ones.  
    An example. Let's say your project controls 50 fixtures that are a mixture of moving heads, PARs and scanners. At some point you buy a couple of lasers and you want them to become active in existing scenes at precise moments in time. The Show Manager allows you to do that in a few minutes! You just need to add the 2 new fixtures to the project, add a track to the Shows affected by the change and create a few Sequences to control the lasers.  
    The Show Manager resume functionality will also save you a lot of time when testing the new changes.  
    With Chasers you'd probably have to deal with complex [Collections](/basics/glossary-and-concepts#collection) and review the timings of a few steps before finding the right combination.

Show Manager toolbar controls
-----------------------------

|     |     |     |
| --- | --- | --- |
| ![](/basics/show.png) | CTRL+H | Create a new [Show](/basics/glossary-and-concepts#show). A Show is represented as a multitrack workspace where tracks, sequences and audio elements can be added |
| **Shows list** |     | This drop down box lists the currently created Shows. Clicking on a Show will display it. |
| ![](/basics/edit_add.png) | CTRL+N | Create a new track or add existing functions to the Show. When clicking on this button a window is displayed, allowing you to perform the following operations:<br><br>* Create a new track: This creates a new empty track that will serve as a container for Sequences and Audio functions.<br>* Import an existing Scene. This will create a new track and a 10 seconds Sequence with one single step representing the selected Scene.<br>* Import an existing Sequence: this operation scans the existing tracks and if it finds a track already bound to the Sequence's bound Scene, then add the Sequence to that track at the cursor position.  <br>    If no compatible track is found, a new track will be created and bound to the Sequence's bound Scene.<br>* Import an existing [Chaser](/basics/glossary-and-concepts#chaser): add a Chaser function at the cursor position on the selected track. If no track is available, it will create a new one.<br>* Import an existing [Audio](/basics/glossary-and-concepts#audio): add an Audio function at the cursor position on the selected track. If no track is available, it will create a new one.<br>* Import an existing [EFX](/basics/glossary-and-concepts#efx): add an EFX function at the cursor position on the selected track. If no track is available, it will create a new one.<br>* Import an existing [RGB Matrix](/basics/glossary-and-concepts#rgb-matrix): add a RGB Matrix function at the cursor position on the selected track. If no track is available, it will create a new one.<br><br>A Show can have a virtually infinite number of tracks. |
| ![](/basics/sequence.png) | CTRL+E | Create a new [Sequence](/basics/glossary-and-concepts#sequence) item and bind it to the selected track. |
| ![](/basics/audio.png) | CTRL+A | Create a new [Audio](/basics/glossary-and-concepts#audio) item. An audio item simply represents an audio file. Audio items can be added on any track, but if you want to to create a separate track for it, just create an new track.  <br>**Note:** It is possible to display the waveform preview of an audio item just by right clicking it and selecting the channels you want to display (mono, left channel, right channel, stereo)  <br>**Warning:** Even though QLC+ allows you to, it is not possible to play two audio files simultaneously. Especially on Windows, you might experience unwanted crashes. |
| ![](/basics/editcopy.png) | CTRL+C | Copy the currently selected item into QLC+ clipboard |
| ![](/basics/editpaste.png) | CTRL+V | Paste QLC+ clipboard content at the cursor position. When performing this operation two checks are performed:<br><br>* Overlapping: checks if the item you're going to paste overlaps with an existing item in the selected track<br>* Validity: If you're pasting a Sequence, QLC+ will verify that the Sequence contents are compatible with the currently selected track |
| ![](/basics/editdelete.png) | Del | Delete the currently selected item. This can be a sequence, an audio item or a track. Note that deleting a track will delete also all its sequences/audio children.  <br>**Note: Show Manager will only perform a "visual removal" of functions. To permanently delete them, please use the [Function Manager](functionmanager.html)** |
| ![](/basics/color.png) | CTRL+R | Assign a custom color to the selected item |
| ![](/basics/lock.png) | CTRL+K | Lock or unlock then selected item. Once an item is locked, it cannot be dragged on the timeline anymore |
| ![](/basics/speed.png) | CTRL+T | Open a window where you can adjust the selected item start time and total duration. The behaviour of the latter will depend on the selected item.  <br>On Audio and Video items it does nothing.  <br>On Sequences and Chasers it will stretch all the steps timings to fit to the desired duration.  <br>On EFXs and RGB Matrices some extra options will be displayed, allowing to stretch the original function or loop the function until the desired duration is reached. |
| ![](/basics/grid.png) | CTRL+G | Enable/disable the "Snap to grid" functionality. The view will be filled with vertical bars corresponding to the header markers (time or BPM)  <br>Snapping to grid will correct your items by dragging them to the nearest reference bar |
| **00:00:00.000** |     | This field displays the cursor time position both if the playback is stopped or activated |
| ![](/basics/player_play.png)![](/basics/player_pause.png) | Space | Start the current Show playback from the cursor position, or pause it and leave the lights on. |
| ![](/basics/player_stop.png) | CTRL+Space | Stop the current Show playback. Clicking once will stop the cursor at the current position for resuming later. Clicking twice will restore the cursor to 0 seconds.  <br>**Hint:** When resuming a show with audio tracks, please keep in mind that audio accuracy depends on the file formats you are using. For example MP3 files resume is not particularly accurate, while wave files resume is. |
| **Time markers** |     | This drop down menu lets you to choose the desired time division to display for your Show.  <br>This can be either 'Time'. 'BPM 4/4', 'BPM 3/4' or 'BPM 2/2' |
| **BPMs** |     | When a BPM time division mode is selected, this field lets you decide the appropriate BPM to set for you Show. This ranges from 20 to 240.  <br>This can be quite useful when dealing with electronic music or BPM synchronized shows |

Just 4 steps
------------

The Show Manager has been set up to be used quickly and easily. Basically, with just 4 steps a complete [Show](/basics/glossary-and-concepts#show) can be created:

### * Add a new Show ![](/basics/show.png)

First of all you need to add a new Show to the view. This creates an empty multitrack view with no tracks and no items, ready to be filled.  
A popup will appear asking the name to assign to the Show. It is possible to change the name afterwards with the [Function Manager](functionmanager.html), using the [Show Editor](showeditor.html) panel.

### * Add a track ![](/basics/edit_add.png)

When you add a track, a popup will ask you to select an existing function or to create a new one with a default name.  
When done, a new track will be created. All the sequences created on this track will act only on the associated Scene, not affecting any of the other tracks.  
A newly created track will be set automatically as active. An active track has a green light on the left hand side.  
A Track can be set to ![](../images/track-mute.png) mute and ![](../images/track-solo.png) solo states. The mute state will exclude the track from the playback, while the solo state will mute all the other tracks of the Show.  
When right clicking on a track, it is possible to move it up ![](/basics/up.png) or down ![](/basics/down.png) for logical ordering.  
Once selected, a track will display its [Scene Editor](sceneeditor.html) on the bottom of the screen.

### * Add some [Functions](/basics/glossary-and-concepts#function)

When a track has been activated, you can quickly add a ![](/basics/sequence.png) [Sequence](/basics/glossary-and-concepts#sequence) or an ![](/basics/audio.png) [Audio](/basics/glossary-and-concepts#audio) function to it by pressing the toolbar buttons.  
Otherwise, by clicking on the ![](/basics/edit_add.png) button, it is possible to import existing QLC+ Functions and add them to the Show timeline.  
A new item will be placed at the cursor position, but it is always possible to move it to the desired time just by dragging it along the timeline.  
An item cannot be moved to another track, since it is bound to the track where it has originally been created.  
An item can be copied ![](/basics/editcopy.png), pasted ![](/basics/editpaste.png) or deleted ![](/basics/editdelete.png) with the toolbar icons. The pasted item will be placed at the current cursor position.  
The item background color can be changed with the toolbar icon ![](/basics/color.png). The assigned color will be saved in your project file.  
Once selected, an item will display its specific Function Editor on the right hand side of the screen. When right clicking an item a contextual menu will be displayed, showing the following options:

* **Preview**: This option is available only on audio items. It will display the waveform preview for right, left or stereo channels when available
* **Align to cursor**: This option will move the selected item to the cursor position
* ![](/basics/lock.png)**Lock/Unlock**: Once an item is locked, it cannot be dragged on the timeline anymore

Follow step 4 to understand how to fill a Sequence  

### * Edit your Functions

Once an item has been created, it is now the time to edit it.  
**Please note** that the difference between a Chaser and a Sequence is that a Sequence is bound to the Track (so the Scene) where it has been created. So, when adding a step, QLC+ will not ask to select a particular function, but will always use the channels of the same Scene.  
When editing a Function, you will see the item changing on the multitrack view, giving an immediate feedback for aligning to other items or particular points in time.  
Fade In and Fade Out times will be displayed as diagonal lines over the items on the multitrack view, while different steps/loops will be divided by vertical lines.  

  
To increase the complexity of the Show, more Functions can be added. Just repeat the above steps depending on your needs.  

And finally...play! ![](/basics/player_play.png)
---------------------------------------------

When a complete show has finally been created, it can be played just by clicking on the Play icon.  
Playback always starts from the current cursor postion. The cursor position can be changed by clicking on the time line.