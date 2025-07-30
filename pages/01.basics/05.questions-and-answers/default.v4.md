---
title: 'Questions and Answers'
date: '08:32 21-08-2023'
media_order: dmx-usb-settings.png
---

In this page you will find the common questions that may come to mind when starting with QLC+.  
Here you can either find the answer directly or find help to point you in the right direction.  

#### Question #1: QLC+ cannot detect my USB device

**A:** QLC+ supports a wide variety of USB devices. First of all you should check if the physical 
connection is OK. Usually a LED on your device should indicate if it is powered up and working correctly.

If you are using Windows and your device is manufactured by Peperoni or Velleman, please read the 
information on how to get them working on these help pages. For licensing issues they both need an extra
DLL file to work. Please check [Peperoni output plugin](/plugins/peperoni) or [Velleman output plugin](/plugins/velleman)

If you're using Linux, please check if your distribution detected the device when plugged in. Basically,
the `dmesg` command should tell you something.

#### Question #2: I've got several [buttons](/virtual-console/button) in my Virtual Console. I need a way to disable the currently active button when I enable another one. How do I do that?

**A:** Simply place your buttons inside a [Solo Frame](/virtual-console/solo-frame). It does exactly that.

#### Question #3: I just upgraded my Mac to Mavericks (or later) and my USB DMX adapter doesn't transmit any data.

**A:** The problem is in an Apple driver called AppleUSBFTDI, which takes control of every FTDI based
device detected in the system.

There are a few ways to solve the problem, but basically the result is the same: the Apple driver must be disabled.

Please check the dedicated page to understand how to [disable the Apple FTDI driver](/plugins/disable-apple-serial-vcp-driver)

Otherwise, you can download the [ENTTEC FTDI Driver Control tool](https://www.dmxis.com/release/FtdiDriverControl.zip)
and try to enable/disable the Apple driver with it.

**Note 1: this can compromise the behaviour of other USB devices, so do it only if you know what you're doing!**

**Note 2: every time Mac OS receives an update, you need to perform this procedure again!**

**Note 3: Most likely, when you disable/enable the Apple driver, you need to reboot your Mac**

#### Question #4: Where is the QLC+ user folder located in my system?

**A:** The user folder is where user fixtures, input profiles, RGB scripts and MIDI templates go.

It changes depending on your operating system:

* **Linux**: it is a hidden folder in your user home directory: `$HOME/.qlcplus`
* **Windows**: it is a folder in your user (e.g. <Username>) directory: `C:\\Users\\<Username>\\QLC+`
* **Mac OS**: it is located in your user `Library` directory: `$HOME/Library/Application\\ Support/QLC+`

You can reach any of these folders from a terminal with the `cd` command. For example:

`cd $HOME/Library/Application\\ Support/QLC+`

Please keep in mind that fixtures and input profiles found in the user folder will have precedence over
the same files in the QLC+ system folder. 

You can also save custom [Fixture Definitions](/basics/glossary-and-concepts#fixtures) and
[Input Profiles](/input-output/input-profiles) in the same folder as your project, QLC+ will find
them when you open that project.

#### Question #5: Where is the QLC+ system folder located in my system?

**A:** The system folder is where QLC+ resources (fixtures, input profiles, RGB scripts, etc) are installed
and it changes depending on your operating system:

* **Linux**: it's a fixed folder named `/usr/share/qlcplus`
* **Windows**: it is the folder where you actually installed QLC+. By default: `C:\\QLC+`
* **Mac OS**: it is a folder inside the QLC+ bundle (.app file). It is possible to browse
  the QLC+.app bundle contents simply with Finder. Just right click on the file and select
  "Show Package Contents".<br>Otherwise, the system folder can be reached with a terminal
  but it depends on where you installed QLC+. For example if you dragged QLC+ into
  Applications it will be: `/Applications/QLC+.app/Contents/Resources`

#### Question #6: QLC+ cannot play some videos on Windows

**A:** QLC+ relies on the Qt libraries which relies on the DirectShow filters installed in the system.

Unfortunately the basic codecs supported by Windows are quite poor, so you need to install some extra
codecs package like K-Lite, [available here](https://www.codecguide.com/download_kl.htm).

#### Question #7: I have a 4k display and everything in the QLC+ interface is extremely small

**A:** You need to add an option to the QLC+ command line to tell the Qt libraries to autoscale
the interface on a High DPI display. Examples:

* **Linux (from terminal)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 qlcplus`
* **Windows shortcut**: `C:\\Windows\\System32\\cmd.exe /c "SET QT_AUTO_SCREEN_SCALE_FACTOR=1 && START /D ^"C:\\QLC+^" qlcplus.exe"`
* **Mac OS (from terminal)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 QLC+.app\\Contents\\MacOS\\qlcplus`

In case, see the [command line parameters page](/advanced/command-line-parameters) for further information.

#### Question #8: My lights flicker. What can I do?

**A:** Sometimes an unbuffered USB DMX adapter or a noisy DMX line can cause some fixtures to
flicker unexpectedly. QLC+ allows you to adjust the output frequency rate to mitigate the undesired effect.
Please consider that a good DMX refresh rate should be around 44Hz.<br>Here's an example showing an
Open DMX clone settings panel. You can access it by double-clicking on the output line or by selecting
an output line and by clicking on the ![](/basics/configure.png) icon.

![dmx-usb-settings](dmx-usb-settings.png "dmx-usb-settings")

