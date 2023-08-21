---
title: 'Questions and Answers'
date: '08:32 21-08-2023'
---

In this page you will find the common questions that may come to mind when starting with QLC+.  
Here you can either find the answer directly or find help to point you in the right direction.  
  

| | |
| -- | -- | -- |
| 1 | Q: | QLC+ cannot detect my USB device |
| | A: | QLC+ supports a wide variety of USB devices. First of all you should check if the physical connection is OK. Usually a LED on your device should indicate if it is powered up and working correctly.<br><br>If you are using Windows and your device is manufactured by Peperoni or Velleman, please read the information on how to get them working on these help pages. For licensing issues they both need an extra DLL file to work. Please check [Peperoni output plugin](peperonioutput.html) or [Velleman output plugin](vellemanoutput.html)<br><br>If you're using Linux, please check if your distribution detected the device when plugged in. Basically, the `dmesg` command should tell you something. |

===

| | |
| -- | -- | -- |
| 2 | Q: | I've got several [buttons](vcbutton.html) in my Virtual Console. I need a way to disable the currently active button when I enable another one. How do I do that? |
| | A: | Simply place your buttons inside a [Solo Frame](vcsoloframe.html). It does exactly that. |

| | |
| -- | -- | -- |
| 3 | Q: | I just upgraded my Mac to Mavericks (or later) and my USB DMX adapter doesn't transmit any data. |
| | A: | The problem is in an Apple driver called AppleUSBFTDI, which takes control of every FTDI based device detected in the system.<br>There are a few ways to solve the problem, but basically the result is the same: the Apple driver must be disabled.<br><br>Please check the dedicated page to understand how to [disable the Apple FTDI driver](disable_apple_ftdi_driver.html)<br>Otherwise, you can download the [ENTTEC FTDI Driver Control tool](https://www.dmxis.com/release/FtdiDriverControl.zip) and try to enable/disable the Apple driver with it.<br><br>**Note 1: this can compromise the behaviour of other USB devices, so do it only if you know what you're doing!**<br>**Note 2: every time Mac OS receives an update, you need to perform this procedure again!**<br>**Note 3: Most likely, when you disable/enable the Apple driver, you need to reboot your Mac** |
  
| | |
| -- | -- | -- |
| 4 | Q: | Where is the QLC+ user folder located in my system? |
| | A: | The user folder is where user fixtures, input profiles, RGB scripts and MIDI templates go.<br>It changes depending on your operating system:<br>**Linux**: it is a hidden folder in your user home directory: `$HOME/.qlcplus`<br>**Windows**: it is a folder in your user (e.g. MyUser) directory: `C:\\Users\\MyUser\\QLC+`<br>**Mac OS**: it is located in your user `Library` directory: `$HOME/Library/Application\\ Support/QLC+`<br>You can reach any of these folders from a terminal with the `cd` command. For example:<br><br>`cd $HOME/Library/Application\\ Support/QLC+`<br><br> Please keep in mind that fixures and input profiles found in the user folder will have precedence over the same files in the QLC+ system folder. |


| | |
| -- | -- | -- |
| 5 | Q: | Where is the QLC+ system folder located in my system? |
| | A: | The system folder is where QLC+ resources (fixtures, input profiles, RGB scripts, etc) are installed and it changes depending on your operating system:<br>**Linux**: it's a fixed folder named `/usr/share/qlcplus`<br>**Windows**: it is the folder where you actually installed QLC+. By default: `C:\\QLC+`<br>**Mac OS**: it is a folder inside the QLC+ bundle (.app file). It is possible to browse the QLC+.app bundle contents simply with Finder. Just right click on the file and select "Show Package Contents".<br>Otherwise, the system folder can be reached with a terminal but it depends on where you installed QLC+.<br>For example if you dragged QLC+ into Applications it will be: `/Applications/QLC+.app/Contents/Resources` |

  

| | |
| -- | -- | -- |
| 6 | Q: | QLC+ cannot play some videos on Windows |
| | A: | QLC+ relies on the Qt libraries which relies on the DirectShow filters installed in the system.<br>Unfortunately the basic codecs supported by Windows are quite poor, so you need to install some extra codecs package like K-Lite, [available here](https://www.codecguide.com/download_kl.htm). |

| | |
| -- | -- | -- |
| 7 | Q: | I have a 4k display and everything in the QLC+ interface is extremely small |
| | A: | You need to add an option to the QLC+ command line to tell the Qt libraries to autoscale the interface on a High DPI display. Examples:<br><br>**Linux (from terminal)**: `QT\_AUTO\_SCREEN\_SCALE\_FACTOR=1 qlcplus`<br>**Windows shortcut**: `C:\\Windows\\System32\\cmd.exe /c "SET QT\_AUTO\_SCREEN\_SCALE\_FACTOR=1 && START /D ^"C:\\QLC+^" qlcplus.exe"`<br>**Mac OS (from terminal)**: `QT\_AUTO\_SCREEN\_SCALE\_FACTOR=1 QLC+.app\\Contents\\MacOS\\qlcplus`<br><br>In case, see the [command line parameters page](commandlineparameters.html) for further information. |