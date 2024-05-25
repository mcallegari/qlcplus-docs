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

Nodle USB DMX interface
-----------------------

The Nodle USB DMX interface is available in two versions: For self-construction it is called
[Nodle U1](https://www.dmxcontrol-projects.org/en/projects/nodle-u1.html) or ready made it is called [Nodle R4S](https://www.dmxcontrol-projects.org/en/projects/nodle-r4s.html) (ready for show).

It can output and input DMX data and it has a built-in merger mode. When activated via the configuration
dialog, the device merges any DMX data coming from QLC+ (if selected as output) with all
DMX data coming from the device's input in an HTP (Highest Takes Precedence) manner.

If set, the merger mode persists even when QLC+ is closed as long as the device is powered.
This way the device is transparent to incoming DMX data and just forwards them.

The device buffers incoming DMX data. So when the connection at the DMX input is interrupted the last
DMX data is repeated until the connection is reestablished or the device is reset.

Check the product manual for further information, connection, and peculiar issues.

FX5 USB DMX
-----------

Although not available anymore. The FX5 USB DMX adapter is still supported either for output and input
DMX data. It offers the same features as the Nodle USB DMX. Check the product manual for the connection and peculiar issues.