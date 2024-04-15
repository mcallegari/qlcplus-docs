---
title: OSC
date: '05:18 22-08-2023'
---

Introduction
------------

QLC+ supports the [OSC protocol](https://en.wikipedia.org/wiki/Open_Sound_Control) through an input/output plugin that receives and transmits packets on the network.  
No extra requirements are needed, since QLC+ has a native implementation of the OSC protocol that works on Linux, Windows and OSX systems.  
The OSC plugin can send and receive packets from multiple network cards, virtual addresses, the loopback device (127.0.0.1) and multiple universes per network interface.  
By default the OSC plugin will listen on ports starting from 7700, plus the QLC+ universe minus one.  
The output, instead, will use ports starting from 9000, plus the QLC+ universe minus one.  
  
For example:  
QLC+ Universe 1 --> OSC input port 7700, output port 9000  
QLC+ Universe 2 --> OSC input port 7701, output port 9001  
...  
QLC+ Universe 8 --> OSC input port 7707, output port 9007  
  

Configuration
-------------

When clicking on the ![](/basics/configure.png) configuration button, a small dialog will be displayed, showing the Universes Configuration panel.  
  
After a QLC+ universe is patched with an OSC input or output, an entry will be displayed in this list, allowing to manually configure the desired parameters to be used by the OSC plugin.  
  
For each OSC input or output the following parameters can be set:

* **Input Port:** If the patched line is opened for input, this parameters defines the port QLC+ will listen to in order to receive OSC data from your external controller.
* **Output address:** If the patched line is opened for input, this is the destination IP address used to send feedback to your external controller.  
    If the patched line is opened for output, this is the destination IP address used to send OSC data on the network.  
    OSC output packets are composed to obtain an OSC path like the following: /QLC+ universe - 1/dmx/DMX channel - 1  
    For example channel 12 of QLC+ universe 4 will have the following path: /3/dmx/11  
    All the values transmitted by the OSC plugin use the float type.
* **Output port:** If the patched line is opened for input, this is the destination port used to send feedback to your external controller.  
    If the patched line is opened for output, this is the destination port used to send OSC data on the network.

**Note:** When patching a Input+Feedback line, the output IP/port you need to change are the ones in the 'Inputs' section. Just leave the 'Outputs' section as default.

Controllers
-----------

QLC+ has been tested with the following OSC controllers:

* [TouchOSC](https://hexler.net/software/touchosc). A pre-defined input profile is ready to use for the Mix16 layout.