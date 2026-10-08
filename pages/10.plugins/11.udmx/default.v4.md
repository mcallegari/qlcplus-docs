---
title: uDMX
date: '05:20 22-08-2023'
---

Introduction
------------

The uDMX Output plugin supports the [Anyma uDMX](https://www.anyma.ch/research/udmx/) USB-DMX interface on Linux and macOS.

Requirements
------------

### Linux

On all Linux distributions, you need to install libusb. If you install QLC+ with the Ubuntu Software Center or some other automatic installer tool, this library will be installed automatically for you.

### macOS

On Apple macOS, you don't need any drivers at all since QLC+ uses the macOS native USB interface.

### Windows

This device is not yet supported on Windows.

Tuning
------

It is possible to change the DMX frame frequency for all uDMX devices with a hidden settings key on each platform. The key tells QLC+ how many times each DMX frame (512 channels) should be sent to the universe per second. A value of "30" means 30 times per second (30Hz). Please refer to the [Manual parameters tuning](/advanced/parameters-tuning#3-udmx-frequency) uDMX section