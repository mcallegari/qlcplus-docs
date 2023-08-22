---
title: 'Kiosk Mode'
date: '08:17 22-08-2023'
---

QLC+ has a special mode when your lighting needs to be operated by inexperienced people, or you just want to prevent unwanted changes. It's called the Kiosk mode. In this mode only the Virtual Console is displayed, so no editing is possible.

When you want to start QLC+ in kiosk mode, run:

`qlcplus -k -f -o workspace.qxw -p -c 500,10,32,32`

* **-k** enables the kiosk mode
* **-f** puts QLC+ in fullscreen mode
* **-o workspace.qxw** opens specified workspace
* **-p** starts operate mode
* **-c 500,10,32,32** creates a close button with size of 32x32 pixels, 500 pixels from left and 10 pixels from top.

You can of course specify your own workspace file for **-o**, and size/position for **-c**.

You can omit any of the paramteres if you need to - for example, omit **-c 500,10,32,32** if you don't want close button, and omit **-f** if you don't want fullscreen.

All command-line parameters are described [here](../command-line-parameters).