---
title: OS2L
date: '05:18 22-08-2023'
---

Introduction
------------

The OS2L plugin allows direct communication between QLC+ and an OS2L capable host.  
OS2L specifications can be found at: [http://os2l.org](http://os2l.org/)  
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