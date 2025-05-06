---
title: OS2L
date: '05:18 22-08-2023'
---

Introduction
------------

The OS2L plugin allows direct communication between QLC+ and an OS2L capable host.  
OS2L specifications can be found at: [https://os2l.org](https://os2l.org/)
At the moment the only OS2L host supported is [Virtual DJ](https://www.virtualdj.com/).  
QLC+ OS2L plugin will work either on the same host (127.0.0.1) or on a different host with an OS of your choice (Windows, macOS, Linux)

Configuration - Virtual DJ
--------------------------

First and foremost, you need to tell VDJ where to send OS2L messages.  
Open VDJ settings, go to the 'Options' panel and type 'os2l' in the top search box.  
Modify the 'os2lDirectIp' field by setting the IP:port where VDJ can reach QLC+. For example, '127.0.0.1:9996' should work if QLC+ runs on the same (Windows) PC of VDJ.  
Once done, restart VDJ.  
  
Now go to QLC+, enable the OS2L plugin on any universe. If you have set a specific port in VDJ, open the OS2L configuration dialog and set the same port there.  
Once done, QLC+ will start receiving signals from VDJ (joystick icon will blink beside the Universe box)

Custom Clients
--------------

In order to support custom clients an Input Profile must be configured that maps OS2L message to channels. The OS2L plugin listens to the following events: `beat`, `cmd` and `btn`.

A `beat` message will change the value at channel 8342 to 255 if received. Example: `{"evt":"beat"}`.

A `cmd` message will set the the channel given by `id` to the value given by `param`. Example: `{"evt": "cmd", "id": "1", "param": 255}`.

A `btn` message can also be mapped. The channel is controlled by a CRC of the `name`. The easiest way to figure the channel is to use the automatic input mapper when setting up the Input Profile. The value sent to the channel is either 255 on `on` or 0 on `off`. Example: `{"evt":"btn","name":"Light Left 2","state":"on"}`.

