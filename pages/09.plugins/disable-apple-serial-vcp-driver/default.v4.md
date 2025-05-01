---
title: 'Disable Apple Serial VCP Driver'
date: '08:06 22-08-2023'
---

Considered all the issues that have been raised by QLC+ users around this topic, here's an extract of the official [FTDI Application Note 134](https://www.ftdichip.com/Support/Documents/AppNotes/AN_134_FTDI_Drivers_Installation_Guide_for_MAC_OSX.pdf)

## Disabling the Apple-provided VCP on OS X 10.9 and later

A VCP driver for most FTDI USB to serial converters is provided as part of the kernel in OS X 10.9 and later. OS X loads this driver (AppleUSBFTDI.kext) when a device with standard FTDI vendor and product identifiers is connected. To use FTDI's own VCP instead, or to use D2XX programs, AppleUSBFTDI must be disabled, unloaded or blocked, as follows.

### Disable by Renaming (OS X 10.9 and 10.10 only)

Note: this method works **only on 10.9 Mavericks and 10.10 Yosemite.**  
  
Start a terminal session (Go > Applications > Utilities > Terminal) and copy/paste the following text to the command prompt:

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.kext AppleUSBFTDI.disabled
sudo touch /System/Library/Extensions
```

then reboot.  
To re-enable VCP, rename AppleUSBFTDI.disabled back to AppleUSBFTDI.kext

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.disabled AppleUSBFTDI.kext
sudo touch /System/Library/Extensions
```

then reboot.

### Temporarily Unload (all versions of OS X)

Note: this method works on all versions of OS X.  
  
It is possible to unload Apple's VCP for the current session, i.e. until the next reboot:

```
sudo kextunload -b com.apple.driver.AppleUSBFTDI
```

(If a warning message indicates that the kext can't be unloaded, then reboot and retry the above command.) To reload:

```
sudo kextload -b com.apple.driver.AppleUSBFTDI
```

The kextunload and kextload commands can be run in any directory.

### Block with D2xxHelper (OS X 10.9 and later)

Note: this is the only non-temporary method which works on **10.11 El Capitan**.  
  
FTDI provides a signed kernel extension (D2xxHelper.kext) which contains no code but acts to prevent OS X from matching an FTDI chip (with standard vendor and product identifiers) with a VCP driver, either Apple's or FTDI's. This leaves the device unclaimed, and available for D2XX programs only.  
1\. Disconnect all FTDI devices.  
2\. Download and run the D2xxHelper installer from [https://ftdichip.com/drivers/d2xx-drivers/](https://ftdichip.com/drivers/d2xx-drivers/)
3\. Reboot.  
4\. Reconnect the FTDI devices.