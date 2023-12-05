---
title: 'Parameters Tuning'
date: '11:41 22-08-2023'
---

This section explains how to manually get at and tune some QLC+ parameters not available from the UI.  
Keep in mind that if you cannot change them from the UI, it means there is a good reason for it.

> **Warning: DO NOT edit the configuration files manually unless you know what you're doing. Any misplaced change can cause program crashes or awkward instability.**


## QLC+ configuration location
<hr>

Linux
-----

Configuration files are located in your user $HOME directory, in the .config/qlcplus folder.  
Here's the quick command to access it from a terminal:  
`cd $HOME/.config/qlcplus`  
You will find both QLC+ and Fixture editor configuration files.

Windows
-------

Configuration parameters are stored in the Windows registry.  
To access it, run the "regedit" tool and search for the key named "qlcplus".
The key where user configuration is stored is named

`Computer\HKEY_CURRENT_USER\Software\qlcplus\`

Mac OSX
-------

Configuration files are located in your user $HOME directory, in the Library/Preferences folder, which is by default hidden by OSX.  
Here's the quick command to access it from a terminal:  
`cd $HOME/Library/Preferences`  
The QLC+ configuration file is called `net.sf.Q Light Controller Plus.plist` while the Fixture editor configuration file is called `net.sf.Fixture Definition Editor.plist`.  
  
**Please note that preferences are cached!** Basically OSX loads all the plist files in memory at boot, and if you change them manually it will ignore the changes. Even worse, periodically it refreshes the files, so it overwrites your changes.  
The solution is, after changing a .plist file, open a terminal and type this:  
`killall -u yourusername cfprefsd`  
Where `yourusername` is the name of the user you use to access your Mac. The command forces OSX to reload the preferences, including your changes.

## Configuration Reset
<hr>

Sometimes it might be necessary to reset the QLC+ configuration and bring QLC+ to a "Factory defaults" state.  
To do so, locate the configuration as explained in the first paragraph, then do the following:

* On Linux and OSX use the `rm 'filename'` command to delete the configuration file
* On Windows delete the whole 'qlcplus' KEY using regedit

## Parameters syntax
<hr>

Due to Qt differences on different platforms, parameters are stored in different ways depending on your Operating System.

Linux
-----

Parameters are stored in a plain text file that you can modify with a plain text editor like gedit, kwrite, kate, nano, vim or similar. They are presented as follows:

    [category]
    name=value

Windows
-------

Parameters are stored in the Windows registry and can be modified with the regedit tool included in every Windows version. They are presented as follows:

    "category" is displayed as a folder
    "parameter" is contained in "category" and is represented as a key. It is most likely that all QLC+ keys are an integer type.
    "value" is the actual value of "parameter"

Mac OSX
-------

Parameters are stored in a plain text file that you can modify with a plain text editor like [TextWrangler](https://www.barebones.com/products/textwrangler/) or similar. They are presented as follows:

    <key>category.name</key>
    <string>value</string>
    or
    <integer>42</integer>

## Parameters list
<hr>

Most likely you will not find the following parameters in a standard QLC+ configuration. To make them effective, you need to **add** them at the end of your configuration file.

### 1. Simple Desk

**Category:** `simpledesk`<br>
**Name:** `channelsperpage`<br>
**Type:** integer<br>
**Description:** Set the number of DMX channel sliders displayed per page<br>
**Default:** 32<br>
<br>
**Category:** `simpledesk`<br>
**Name:** `playbacksperpage`<br>
**Type:** integer<br>
**Description:** set the number of playback sliders displayed per page<br>
**Default:** 15<br>

### 2. DMX USB Enttec Open channels number

**Category:** `enttecdmxusbopen`<br>
**Name:** `channels`<br>
**Type:** integer<br>
**Description:** Set the maximum number of DMX channels transmitted by Enttec Open (and similar) devices.<br>
In some cases this could solve flickering issues. For example you might try with 256.<br>
**Default:** 512<br>

### 3. uDMX frequency

**Category:** `udmx`<br>
**Name:** `frequency`<br>
**Type:** integer<br>
**Description:** Set the DMX frame frequency in Hertz for uDMX devices<br>
**Default:** 30<br>

### 4. uDMX channels number

**Category:** `udmx`<br>
**Name:** `channels`<br>
**Type:** integer<br>
**Description:** Set the maximum number of DMX channels transmitted by uDMX devices.<br>
In some cases this could solve flickering issues. For example you might try with 128.<br>
**Default:** 512<br>

### 5. Master Timer frequency

**Category:** `mastertimer`<br>
**Name:** `frequency`<br>
**Type:** integer<br>
**Description:** Set the QLC+ core timer frequency in Hertz<br>
**Default:** 50<br>
