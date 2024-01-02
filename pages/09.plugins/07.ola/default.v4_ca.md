---
title: OLA
date: '05:17 22-08-2023'
---

Introducció
------------

The OLA plugin allows direct communication between QLC+ and the [OLA framework](https://www.opendmx.net/index.php/Open_Lighting_Architecture) on the same machine.

Requirements
------------

The OLA plugin requires OLA to be installed on the system.  
Since OLA doesn't run on Windows, only Linux and macOS users can benefit from this plugin.  
Information on how to download and install OLA can be found [here](https://opendmx.net/index.php/Download_%26_Install_OLA).  
QLC+ needs the OLA server to be running to be able to communicate with the OLA framework. This can be done either manually by starting up "olad" from a terminal or in the configuration panel by ticking "Run standalone OLA daemon".

Configuration
-------------

When pressing the configuration button over a OLA output line, a small popup window will appear showing the basic information of how QLC+ outputs are mapped against OLA universes.  
On the bottom, a check button will allow you to force the OLA server startup.

OLA Setup
---------

When you have made sure that everything is working in QLC+ and have checked how the universes are mapped, you can setup OLA to output the signal received from QLC+ to a DMX device, either USB or over the network.  
Here's an [introduction of OLA usage](https://www.opendmx.net/index.php/Using_OLA).  
Basically you need to open a web browser, connect to [http://localhost:9090](http://localhost:9090) or [http://127.0.0.1:9090](http://127.0.0.1:9090) and add a universe that has the same number mapped in QLC+ and select the desired output line.