---
title: HID
date: '05:13 22-08-2023'
---

Introduction
------------

The HID plugin supports the [HID system](https://en.wikipedia.org/wiki/Human_interface_device) on Windows and Linux.  
HID is a generic way of mapping input/output devices such as joysticks, touchpads, keyboards, mice, etc.  
The QLC+ HID plugin aims to support only joysticks and the FX5 USB DMX adapter.

Requirements
------------

No special requirement is needed for this plugin. Just make sure your operating system is actually recognizing the device you're going to use. On Linux you might need some kernel modules (normally provided by modern distributions) and on Windows a driver provided by the device manufacturer.

Joysticks
---------

QLC+ tries to detect the specific joystick functionalities, such as axes and buttons, as individual channels that can be mapped to your Virtual Console widgets.  
Axes and buttons are mapped by QLC+ in sequential order, so for example if your joystick supports 2 axes and 4 buttons, they will appear in the input mapping dialogues like this:  

* channel 1: X-axis
* channel 2: Y-axis
* channel 3: Button 1
* channel 4: Button 2
* channel 5: Button 3
* channel 6: Button 4

FX5 USB DMX
-----------

The [FX5 USB DMX](https://fx5.de/) adapter is supported either for output and input DMX data. Check the product manual for the connection and peculiar issues.