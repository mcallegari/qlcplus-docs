---
title: Audio
date: '05:01 22-08-2023'
---

This page describes how to select an input or output audio device to be used inside QLC+.

To access the Input/Output Manager, just click on the tab with the ![](/basics/input_output.png) icon placed on the bottom of the QLC+ main screen.  
Select the desired universe on the left hand side of the screen and then click the Audio tab placed beside the Profile tab on the top right hand side of the screen.

The list of audio devices detected by QLC+ is displayed. Each device has a checkbox depending on if it supports input capture or audio output capabilities.  
The first entry of the list is always **"Default device"**, and it is selected as input and output by default. In this way QLC+ will work in most of the cases out of the box.  
The default device is the one that you currently use to listen to music or to record audio with a microphone.

If in your system there are additional audio cards (PCI or USB), it is possible to select them in this panel as the preferred QLC+ input or output device.  
Basically an input device is used by [Virtual Console Audio Triggers](/virtual-console/audio-triggers) while an output device is used by [audio functions](/basics/glossary-and-concepts#audio).

The selection of an audio input/output line should take immediate effect in QLC+. If not you are invited to restart QLC+ to allow a complete initialization of the internal audio engine.