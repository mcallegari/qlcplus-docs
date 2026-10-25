---
title: uDMX
date: '05:20 22-08-2023'
media_order: zadig_udmx_windows.png
---

Introduction
------------

The uDMX Output plugin supports the [Anyma uDMX](https://www.anyma.ch/research/udmx/) USB-DMX interface on Linux, macOS and Windows.

Requirements
------------

### Linux

On all Linux distributions, you need to install libusb. If you install QLC+ with the Ubuntu Software Center or some other automatic installer tool, this library will be installed automatically for you.

### macOS

On Apple macOS, you don't need any drivers at all since QLC+ uses the macOS native USB interface.

### Windows

QLC+ talks to uDMX devices through libusb, which is included in the QLC+ installer, so no extra DLL is needed. The device must use the **WinUSB** driver, which can be installed with [Zadig](https://zadig.akeo.ie): open Zadig, select **Options > List All Devices**, choose the uDMX device, select **WinUSB** and click **Install Driver**.

![](zadig_udmx_windows.png)

Tuning
------

It is possible to change the DMX frame frequency for all uDMX devices with a hidden settings key on each platform. The key tells QLC+ how many times each DMX frame (512 channels) should be sent to the universe per second. A value of "30" means 30 times per second (30Hz). Please refer to the [Manual parameters tuning](/advanced/parameters-tuning#3-udmx-frequency) uDMX section
