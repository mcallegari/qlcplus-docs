---
title: 'Audio Editor'
date: '04:32 22-08-2023'
---

The audio editor, as its name suggests, is used to edit ![](/basics/audio.png) [Audio](/basics/glossary-and-concepts#audio) functions.  
It offers basic controls and shows information about the attached audio file.

Controls
--------

|     |     |
| --- | --- |
| ![](/basics/player_play.png) | Start/stop the audio file playback. If the file doesn't exist, this button will have no effect |
| **Audio name** | Change the name of the Audio function. By default this is set with the file name, until it is manually changed. |
| **File name** | Displays the absolute path of the current file attached to this Audio function. The source file can be changed by clicking on the "..." button on the right side. |
| **Duration** | Displays the audio file duration in the typical QLC+ way. For example: 04m14s.22. |
| **Channels** | Displays the number of channels detected from the attached audio file. 2 means stereo and 1 means mono. |
| **Sample Rate** | Displays the sample frequency of the attached audio file, in Hertz. For example: 44100Hz, 48000Hz, etc |
| **Bitrate** | Displays the bitrate of the attached audio file, in Kb/s. Audio files can have a constant bitrate (CBR) or a variable bitrate (VBR). In the latter case, an average bitrate is displayed. |
| **Loop** | Loop audio playback until explicitly stopped. |
| ![](/basics/speed.png) | Show/Hide the Speed Dial widget, used to facilitate the audio fade in/out parameters tuning |
| **Fade In** | Text box to enter a fade in time for the audio playback. Times can be entered in a QLC+ way (e.g. 3s.55) or in seconds (e.g. entering '2' and pressing Enter will turn into 02s.00) |
| **Fade Out** | Text box to enter a fade out time for the audio playback. Times can be entered like in the Fade In box |
| **Audio Device** | Select a specific audio output device to be used to play the attached audio file. This list is the same you can find in the [Audio Input/Output panel](audio-input-output.html) |