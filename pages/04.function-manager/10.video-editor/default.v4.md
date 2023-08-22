---
title: 'Video Editor'
date: '04:33 22-08-2023'
---

The video editor, as its name suggests, is used to edit ![](/basics/video.png) [Video](/basics/glossary-and-concepts#video) functions.  

Controls
--------

|     |     |
| --- | --- |
| ![](/basics/player_play.png) | Start/stop the video playback. If the file doesn't exist or an invalid URL has been entered, this button will have no effect |
| **Video name** | Change the name of the Video function. By default this is set with the file name, until it is manually changed. |
| **File name** | If the attached file is local, displays the absolute path of the video file. A local source file can be changed by clicking on the "..." button on the right side.  <br>It is also possible to stream a video from the network. Just click on the ![](/basics/global.png) button and enter a valid HTTP URL. |
| **Duration** | Displays the video file duration in the typical QLC+ way. For example: 04m14s.22. |
| **Resolution** | Displays the resolution in pixels detected on the attached video file.  <br>**Note**: since QLC+ relies on the [Qt libraries](https://www.qt.io/) to play video sources, there is a known issue for which Qt is not able to detect the size (and codecs) of videos in Windows and Mac OSX.  <br>Basically a size of "0x0" will be displayed. The fullscreen video playback will be OK though.  <br>On detection failure, a default size of 640x480 pixels is internally set to allow the windowed mode to work.  <br>Hopefully this will be fixed by the Qt team in the future. |
| **Video codec** | Displays the codec used to compress the video stream into the attached video file. |
| **Audio codec** | Displays the codec used to compress the audio stream into the attached video file. |
| **Screen** | Allows to select the output screen where the video should be playback. This will normally displays just one choice unless multiple video outputs (monitors, projectors) are connected to the system |
| **Video Output** | Allows to choose how the attached video should be displayed. Possible options are<br><br>* **Windowed**: a window with the original size of the video will be displayed on the selected output screen.<br>* **Fullscreen**: The video will use the whole screen size, without showing any window decoration (title bar, etc) |
| **Playback mode** | Allows to choose how the attached video should be played. Possible options are<br><br>* **Single shot**: The video will be played just once<br>* **Loop**: The video playback will be restarted from the beginning when reaching the end. The loop mode will continue indefinitely until the Video function is stopped. |