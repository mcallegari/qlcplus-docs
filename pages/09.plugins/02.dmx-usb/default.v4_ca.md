---
title: 'DMX USB'
date: '05:08 22-08-2023'
---

Introducció
------------

The DMX USB plugin supports a variety of FTDI-based USB-to-DMX devices.

Supported USB DMX devices can be found on our [compatibility](https://www.qlcplus.org/discover/compatibility) page.

Configuration
-------------

DMX USB devices should be automatically detected from QLC+ and displayed in the input/output panels list.  
If for some reason the auto-detection fails, you can "force" the type of your DMX USB adapter manually.  
Click on the name of your device and open the configuration dialog by clicking on the ![](/basics/configure.png) icon on the bottom-right side of the panel.  
You will see a list of DMX USB devices currently connected to your computer. Each one has a drop down menu where you can force the device type.  
Here's the meaning of each one:

* **Open TX**: Enttec USB DMX Open (and clones) in output mode
* **Open RX**: Generic FTDI devices receive mode
* **Pro RX/TX**: Enttec USB DMX Pro or most of the DMXKing devices
* **Pro Mk2**: Enttec USB DMX Pro Mk2 - 2 DMX outputs, 1 DMX input, 1 MIDI IN and 1 MIDI OUT ports are available
* **Ultra Pro**: DMXKing ultraDMX Pro with 2 outputs and 1 input
* **DMX4ALL**: DMX4ALL USB-DMX STAGE-PROFI MK2
* **Vince Tx**: Vince DMX512 USB in output mode

**Note for OSX users:** If your adapter is detected but doesn't produce any output, most likely you'll find the solution in the [Questions and Answers](/basics/questions-and-answers) page (Question #3).  
**Note 1**: Eurolite USB-DMX512 Pro devices must be forced to the "Pro RX/TX" mode to operate correctly.  
**Note 2**: On Windows, Enttec open DMX clones might flicker at 44Hz. You can try and decrease the output frequency until the issue is resolved.

Requirements
------------

### Linux

On all Linux distributions, you need to install libftdi. If you install QLC+ with the Ubuntu Software Center or some other automatic installer tool, this library will be installed automatically for you.  
In some cases, if the device doesn't output anything, it might be useful to add your user to the "dialout" group with the following command:

sudo adduser your\_user\_name dialout

### macOS

On Apple macOS, you don't need any drivers at all since QLC+ uses the macOS native USB interface. Installing the D2XX drivers should cause no harm, but **DO NOT INSTALL VCP (Virtual COM Port) drivers** as they will definitely interfere with QLC+. If you have previously installed the VCP drivers, consult the [FTDI installation guides](http://www.ftdichip.com/Support/Documents/InstallGuides.htm) on how to uninstall them.

**OSX Mavericks (or later) issues**: please check [Questions & answers #3](/basics/questions-and-answers)

### Windows

On Microsoft Windows, the plugin needs the [latest D2XX drivers from FTDI](http://www.ftdichip.com/Drivers/D2XX.htm). Normally, when a FTDI device is plugged in for the first time, Windows will automatically download the D2XX drivers for you, so no action is needed at all.  
If that doesn't happen, please consult the [FTDI installation guides](http://www.ftdichip.com/Support/Documents/InstallGuides.htm) to know how to install the drivers.  
**DO NOT INSTALL VCP (Virtual COM Port) drivers** as they will probably interfere with the D2XX interface.

ENTTEC DMX USB Pro supported modes
----------------------------------

Following a grid showing the IO modes supported by QLC+ for devices like DMX USB Pro and Pro Mk2.  
If a mode is not listed here, it means it is not supported by QLC+ or the device itself because of hardware limitations, so please do not report them as issues in the QLC+ forum.


|     |     |     |     |     |     |     |     |     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
|     | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 |
| DMX1 IN | o |     |     | o |     |     | o |     |     | o |     |     | o |     |
| DMX1 OUT |     | o |     |     | o |     |     | o |     |     | o |     |     | o |
| DMX2 OUT (1) |     |     | o | o | o |     |     |     |     |     |     |     |     |     |
| MIDI IN (2) |     |     |     |     |     | o | o | o |     |     |     | o | o | o |
| MIDI OUT (2) |     |     |     |     |     |     |     |     | o | o | o | o | o | o |


(1) DMX2 OUT is available only on DMX USB Mk2 Pro  
(2) MIDI IN and MIDI OUT are available only on DMX USB Mk2 Pro with a 5-way breakout cable. MIDI OUT signals are sent from 1 to 512 as described in the [MIDI plugin channels map](../midi#channels-map)

Tuning
------

**Note: Manual tuning should never be performed except for some very particular cases. Use it at your own risk!**  
It is possible to change the DMX frame size for Enttec Open (and like) devices with a hidden settings key on each platform. The key tells QLC+ how many channels should be transmitted in each DMX frame, so for a DMX universe (by default 512).  
Please refer to the [Manual parameters tuning](/advanced/parameters-tuning#2-dmx-usb-enttec-open-channels-number) DMX USB Enttec Open section.
