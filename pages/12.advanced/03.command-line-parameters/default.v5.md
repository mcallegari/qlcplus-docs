---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ supports a number of command line parameters to automate/extend some functionalities on startup.  
Using command line parameters can be tricky depending on the operating system you're using:

**Linux**: just open a terminal and type `qlcplus5` followed by the parameters you need<br>
**Windows**: create a shortcut of qlcplus5.exe (usually located in C:\\QLC+) on your desktop. Right click on the shortcut and select "Properties". In the "Target" field you will see something like `C:\\QLC+\\qlcplus5.exe`. There you can add command line parameters. When done click OK.<br>
For example, to force the German language at startup, modify your shortcut command line like this:

![](../command-line-v5.png)

**OSX**: This is the most difficult case since QLC+ on OSX is bundled into a DMG package. You need to open a terminal and "cd" into the QLC+ DMG like this:<br>`cd QLC+.app\\Contents\\MacOS`<br>
When done, type `./qlcplus5` followed by the parameters you need.

|     |
| --- |
| **-o or --open**<br><br>**Description:** Open the given workspace file<br><br>**Parameters:** File name<br><br>**Examples:**  <br>Open sample.qxw:  <br>qlcplus5 -o sample.qxw  <br>qlcplus5 --open sample.qxw |

|     |
| --- |
| **-9 or --openlast**<br><br>**Description:** Open the project file from last session<br><br>**Parameters:** None<br><br>**Examples:**  <br>Open the last opened file:  <br>qlcplus5 -9  <br>qlcplus5 --openlast |

|     |
| --- |
| **-f or --fullscreen**<br><br>**Description:** Start the application in fullscreen mode<br><br>**Parameters:** None<br><br>**Examples:**  <br>Tell the window manager to give the whole screen space to QLC+:  <br>qlcplus5 -f  <br>qlcplus5 --fullscreen |

|     |
| --- |
| **-h or --help**<br><br>**Description:** Display command-line help (only on Linux and macOS)<br><br>**Parameters:** None<br><br>**Examples:**  <br>Display the command-line help:  <br>qlcplus5 -h  <br>qlcplus5 --help |

|     |
| --- |
| **-3 or --no3d**<br><br>**Description:** Disable the 3d preview sub-context<br><br>**Parameters:** None<br><br>**Examples:**  <br>Disable the 3d preview:  <br>qlcplus5 -3  <br>qlcplus5 --no3d |

|     |
| --- |
| **-k or --kiosk**<br><br>**Description:** Enable kiosk-mode (only [virtual console](/virtual-console) is visible<br><br>**Parameters:** None<br><br>**Examples:**  <br>Start the application in kiosk mode:  <br>qlcplus5 -k  <br>qlcplus5 --kiosk |

|     |
| --- |
| **-l or --locale**<br><br>**Description:** Use the given language for translation<br><br>**Parameters:** Language code (currently supported: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Examples:**  <br>Use finnish language:  <br>qlcplus5 -l fi_FI  <br>qlcplus5 --locale fi_FI |

|     |
| --- |
| **-m or --nowm**<br><br>**Description:** Inform the application that the system doesn't provide a window manager. QLC+ will therefore add some extra controls to close the windows.<br><br>**Parameters:** None<br><br>**Examples:**  <br>Start QLC+ with no window manager:  <br>qlcplus5 -m  <br>qlcplus5 --nowm |

|     |
| --- |
| **-v or --version**<br><br>**Description:** Display the current application version number<br><br>**Parameters:** None<br><br>**Examples:**  <br>qlcplus5 -v  <br>qlcplus5 --version |

|     |
| --- |
| **-w or --web**<br><br>**Description:** Enable remote web access on port 9999<br><br>**Parameters:** None<br><br>**Examples:**  <br>qlcplus5 -w  <br>qlcplus5 --web |

|     |
| --- |
| **-wp or --web-port**<br><br>**Description:** Use a specific port for web access<br><br>**Parameters:** Port number<br><br>**Examples:**  <br>qlcplus5 -wp 12345  <br>qlcplus5 --web-port 12345 |

|     |
| --- |
| **-wa or --web-auth**<br><br>**Description:** Enable remote web access with users authentication<br><br>**Parameters:** None<br><br>**Examples:**  <br>qlcplus5 -wa  <br>qlcplus5 --web-auth |

|     |
| --- |
| **-a or --web-auth-file**<br><br>**Description:** Specify a file where to store web access basic authentication credentials<br><br>**Parameters:** File name<br><br>**Examples:**  <br>qlcplus5 -wa qlcplus_password  <br>qlcplus5 --web-auth-file qlcplus_password |

|     |
| --- |
| **-d or --debug**<br><br>**Description:** Enable debug mode. Note that debug messages are not included in released binaries.<br><br>**Parameters:** None<br><br>**Examples:**  <br>Enable debug mode:  <br>qlcplus5 -d  <br>qlcplus5 --debug  <br>  |

|     |
| --- |
| **-g or --log**<br><br>**Description:** Log debug messages to a file (`$HOME/QLC+.log`)<br><br>**Parameters:** None<br><br>**Examples:**  <br>Enable debug messages and store them to log  <br>qlcplus5 -d -g  <br>qlcplus5 --debug --log |
