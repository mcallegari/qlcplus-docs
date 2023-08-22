---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ supports a number of command line parameters to automate/extend some functionalities on startup.  
Using command line parameters can be tricky depending on the operating system you're using:

**Linux**: just open a terminal and type "qlcplus" followed by the parameters you need
**Windows**: create a shortcut of qlcplus.exe (usually located in C:\\QLC+) on your desktop. Right click on the shortcut and select "Properties". In the "Target" field you will see something like "C:\\QLC+\\qlcplus.exe". There you can add command line parameters. When done click OK.  
      
    Example: Setting Czech locale:
    
    ![](../locale.png)

**OSX**: This is the most difficult case since QLC+ on OSX is bundled into a DMG package. You need to open a terminal and "cd" into the QLC+ DMG like this:  
    cd QLC+.app\\Contents\\MacOS  
    When done, type "qlcplus" followed by the parameters you need

  

|     |
| --- |
| **-c or --closebutton**<br><br>**Description:** Define a position for a close button in the virtual console. The button can be used to close QLC+. Only has an effect in kiosk mode (see -k) and is most useful when in fullscreen mode without a window manager.<br><br>**Parameters:** x,y,w,h<br><br>**Examples:**  <br>Create a button at (x400, y500) whose size is (w70, h50):  <br>qlcplus -c 400,500,70,50  <br>qlcplus --closebutton 400,500,70,50 |
| -d or --debug<br>-------------<br><br>**Description:** Enable debug mode and optionally set the output level. Note that since 4.8.0 messages for level DEBUG (0) are not included in released binaries.<br><br>**Parameters:** Level (see [QtMsgType](https://doc.qt.io/qt-5/qtglobal.html#QtMsgType-enum))<br><br>**Examples:**  <br>Enable debug mode and set debug level to 0:  <br>qlcplus -d  <br>qlcplus --debug  <br>  <br>Enable debug mode and set debug level to 3:  <br>qlcplus -d 3 |
| -f or --fullscreen<br>------------------<br><br>**Description:** Start the application in fullscreen mode<br><br>**Parameters:** Method (either 'normal' or 'resize')<br><br>**Examples:**  <br>Tell the window manager to give the whole screen space to QLC+:  <br>qlcplus -f  <br>qlcplus --fullscreen  <br>qlcplus -f normal  <br>qlcplus --fullscreen normal  <br>  <br>Resize QLC+ to take up the whole screen space (useful in custom X11 sessions without a window manager):  <br>qlcplus -f resize  <br>qlcplus --fullscreen resize |
| -g or --log<br>-----------<br><br>**Description:** Log debug messages to a file ($HOME/QLC+.log)<br><br>**Parameters:** None<br><br>**Examples:**  <br>Enable debug messages and store them to log  <br>qlcplus -d 0 -g  <br>qlcplus --debug 0 --log |
| -h or --help<br>------------<br><br>**Description:** Display command-line help (only in Linux & OS X)<br><br>**Parameters:** None<br><br>**Examples:**  <br>Display the command-line help:  <br>qlcplus -h  <br>qlcplus --help |
| -k or --kiosk<br>-------------<br><br>**Description:** Enable kiosk-mode (only [virtual console](virtualconsole.html) is visible and the application is locked in [operate mode](/basics/glossary-and-concepts#Modes))<br><br>**Parameters:** None<br><br>**Examples:**  <br>Start the application in kiosk mode:  <br>qlcplus -k  <br>qlcplus --kiosk |
| -l or --locale<br>--------------<br><br>**Description:** Use the given locale for translation<br><br>**Parameters:** Locale name (currently supported: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Examples:**  <br>Use finnish language:  <br>qlcplus -l fi_FI  <br>qlcplus --locale fi_FI |
| -m or --nowm<br>------------<br><br>**Description:** Inform the application that the system doesn't provide a window manager. QLC+ will therefore add some extra controls to close the windows.<br><br>**Parameters:** None<br><br>**Examples:**  <br>Start QLC+ with no window manager:  <br>qlcplus -m  <br>qlcplus --nowm |
| -n or --nogui<br>-------------<br><br>**Description:** Start the application with the GUI hidden (Raspberry Pi only)<br><br>**Parameters:** None<br><br>**Examples:**  <br>Start QLC+ with no visible GUI:  <br>qlcplus -n  <br>qlcplus --nogui |
| -o or --open<br>------------<br><br>**Description:** Open the given workspace file<br><br>**Parameters:** File name<br><br>**Examples:**  <br>Open mydesk.qxw:  <br>qlcplus -o mydesk.qxw  <br>qlcplus --open mydesk.qxw |
| -p or --operate<br>---------------<br><br>**Description:** Start the application in [Operate](/basics/glossary-and-concepts#Modes) mode.<br><br>**Parameters:** None<br><br>**Examples:**  <br>Start QLC+ in operate mode:  <br>qlcplus -p  <br>qlcplus --operate |
| -v or --version<br>---------------<br><br>**Description:** Display the current application version number<br><br>**Parameters:** None<br><br>**Examples:**  <br>qlcplus -v  <br>qlcplus --version |
| -w or --web<br>-----------<br><br>**Description:** Enable remote web access on port 9999<br><br>**Parameters:** None<br><br>**Examples:**  <br>qlcplus -w  <br>qlcplus --web |
| -wp or --web-port<br>-----------------<br><br>**Description:** Use a specific port for web access<br><br>**Parameters:** Port number<br><br>**Examples:**  <br>qlcplus -wp 12345  <br>qlcplus --web-port 12345 |
| -wa or --web-auth<br>-----------------<br><br>**Description:** Enable remote web access with users authentication<br><br>**Parameters:** None<br><br>**Examples:**  <br>qlcplus -wa  <br>qlcplus --web-auth |
| -a or --web-auth-file<br>---------------------<br><br>**Description:** Specify a file where to store web access basic authentication credentials<br><br>**Parameters:** File name<br><br>**Examples:**  <br>qlcplus -wa qlcplus_passwd  <br>qlcplus --web-auth-file qlcplus_passwd |