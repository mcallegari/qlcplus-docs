---
title: Peperoni
date: '05:19 22-08-2023'
media_order: zadig-peperoni-usb.png
---

Introduction
--------------

The Peperoni Output plugin supports USB-DMX output devices produced by [Peperoni Light](http://www.peperoni-light.de/products1.htm).

Requirements
--------------

### Linux

On all Linux distributions, you need to install libusb. If you install QLC+ with the Ubuntu Software Center or some other automatic installer tool, this library will be installed automatically for you.

### Mac OS X

Nothing special is needed for Mac OS X. All required components are already inside the Q Light Controller Plus application bundle because QLC+ uses the OS X native USB interface.

### Windows

QLC+ talks to Peperoni devices through libusb, which is included in the QLC+ installer, so no extra DLL is needed. The device must use the **WinUSB** driver:

* Devices with firmware 0x1000 or newer install the WinUSB driver automatically when plugged in.
* Devices with older firmware need the WinUSB driver installed manually with [Zadig](https://zadig.akeo.ie): open Zadig, select **Options > List All Devices**, choose the Peperoni device, select **WinUSB** and click **Install Driver**. Alternatively, update the device firmware.
* For the X-Switch, select **libusbK** instead of WinUSB in Zadig, since WinUSB can't change the device's USB configuration.

![](zadig-peperoni-usb.png)
