---
title: Peperoni
date: '05:19 22-08-2023'
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

You must install the [Peperoni USBDMX Windows drivers](http://www.lighting-solutions.de/support/driver.html). Usually these come on a CD along with the Peperoni device you've bought.  
If after installing the driver, QLC+ still doesn't detect your Peperoni device, copy the usbdmx.dll file you find inside the driver ZIP package (i386 folder) into the main QLC+ folder.

* Unzip the driver package to a folder on your hard disk.
* Plug the peperoni device to a USB port.
* If you're running a 32bit version of Windows, point the "Found new hardware" wizard to look for the driver under **windows/i386**.
* If you're running a 64bit version of Windows, point the "Found new hardware" wizard to look for the driver under **windows/ia64** or **windows/amd64**.