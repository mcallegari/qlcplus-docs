---
title: 'Input Output'
date: '04:54 22-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapter 8

# Input/Output

By default QLC+ provides 4 universes but you can add/remove them as needed.  
The input/output mapping is saved in the currently loaded project. This allows you to port your project on another computer/OS without the need to reconfigure it every time.  
If no project is loaded, QLC+ will keep the I/O mapping as a "fallback" configuration.

Input/Output Manager
--------------------

To access the Input/Output Manager, just click on the tab with the ![](/basics/input_output.png) icon placed on the bottom of the QLC+ main screen.  
The screen is composed in this way:  

* On the left hand side there is the list of internal universes that QLC+ can manage
* On the right hand side there is the list of devices and their mapped inputs, outputs and feedback lines that QLC+ has detected
* On the bottom right hand side there is a panel displaying brief information on the currently selected device

Every device has a checkbox whenever an input, output or feedback line is available.  
Each QLC+ universe can map a single input, a single output and a single feedback line  

Some plugins might require configuration before they can be used' so you might not be able to see all inputs/outputs at first. The configuration button is place next to the information panel and it is enabled if the plugin allows any manual setting.  
The button icon is: ![](/basics/configure.png)

Adding/Removing universes
-------------------------

QLC+ supports any number of universes, depending on the CPU limit of the device controlling them.  
On the left hand side of the Input/Output Manager there is a toolbar where you can add/remove, name and configure universes.

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Add a new universe. The universe will have a name like "Universe X", where X is a progressive number assigned by QLC+ (and also the Universe ID). |
| ![](/basics/edit_remove.png) | Remove the currently selected universe.  <br>**Please be careful with this operation as it can compromise your project and cannot be reverted.**  <br>When deleting a universe, if it is currently patched or some fixtures are mapped on it, a popup message will appear asking for confirmation if the operation should be completed or abandoned. |
| **Universe name** | An arbitrary string that you can set to quickly identify the meaning of a Universe |
| **Passthrough** | See [below](#universe-passthrough) |

Patching
--------

To patch a plugin's input/output line to the selected universe, you need to place a tick in that particular plugin's input/output line. You can have only one line assigned to a universe at a time, so when you check another line, the tick will move from its previous position to the one you just checked.  
If you don't see any line on a plugin, it means you don't have any device that QLC+ understands and you're left with the one and only (non-selectable) choice: None.

When an input/output line is checked, the corresponding universe information on the left hand side of the screen will change and will display the new configuration set.  
The plugin information on the bottom right hand side of the screen will change as well and will give you the new status of the plugin line.

Universe Passthrough
--------------------

When passthrough is enabled, universe just forwards what it receives in its input line to its output line. This is useful for several things:

* **Protocol converter**: when you want to use QLC+ to act as a "protocol" converter. For example you can use this feature to transparently map an ArtNet network to a DMX USB adapter or even MIDI.
* **Monitor external data**: patch fixtures and watch the data in DMX monitor
* **Merge data from external controller**: Have external lighting desk control some of the channels independently (for example conventionals) and QLC+ control intelligent lights on the same universe.
* **Raspberry Pi**: forward data from QLC+ on PC while programming scenes; when the workspace is transferred, Raspberry becomes main controller; the devices are always connected to RPi

Passthrough data is not affected by QLC+ grandmaster or channel modifiers. It is merged in HTP fashion with QLC+ output if there are any fixtures patched at that channel (Note: it does not use LTP/HTP channel settings). Blackout affects passthrough data.

Input and Feedbacks
-------------------

When a plugin input line is checked, it gets enabled right away, so you can perform a basic test to double check if your hardware is working properly with QLC+.  
Just move a fader/knob on your external device, and if everything works fine, you will see a ![](/basics/input.png) icon appearing beside the corresponding universe on the left side of the screen.

If your input device supports a return channel, QLC+ can send a visual/mechanical feedback to it. Devices such as Behringer BCF2000 support this feature.  
At the moment feedbacks are supported only through MIDI, OSC and loopback.

To learn how to setup your external input device for the best use with QLC+, please continue your reading with the [howto for input profiles](input-profiles).