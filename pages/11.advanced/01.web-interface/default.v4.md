---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

By default, QLC+ includes a native web server to expose on traditional web browsers some of the software features.  
It comes very handy when you need to run QLC+ on a device without a display (headless system) either to work standalone or for remote controlling.  
The web interface is not enabled by default but can be easily activated by running QLC+ with "-w" or "--web" option. Please refer to the [command line parameters](../command-line-parameters) page of this documentation to learn how to do it.

The web interface can be accessed from any modern web browser running on any device, such as a computer, a tablet or a smartphone. Your browser needs to support the web sockets technology to communicate with QLC+, and it is recommended to use Google Chrome.  
It is also possible to design custom web pages and access QLC+ functionalities via web API which are basically strings formatted in a specific way and sent to QLC+ via websocket.  
A test page with the available APIs can be found [here](https://www.qlcplus.org/Test_Web_API.html).

To access the QLC+ web interface simply connect to this address:  
**http://\[IP address\]:9999**  
  
Where \[IP address\] is the IP address of the device you want to access via web. For example: http://192.168.0.100:9999  
The web interface consists in three pages:

* Virtual Console
* Simple Desk
* Configuration

Virtual Console page
--------------------

This page is displayed by default when accessing the web interface address and it represents the QLC+ Virtual Console.  
If a project is loaded, this page will display the widgets previously created with QLC+, otherwise it will just show an empty page.  
It is possible to load a project with the **Load project** button placed on the top left corner of the page. A window will show up, allowing you to choose a file from the device you're using to control the device where QLC+ is running.  
The project file will be transferred via web and loaded by QLC+.  
To access the QLC+ configuration page, just click on the **Configuration** button.

Simple Desk page
----------------

This page is a simplified version of the Simple Desk that you can find in the QLC+ desktop version. It displays DMX universes divided by pages, where each page shows 32 channels. You can switch between pages with the left/right arrow buttons and select the current displayed universe with the drop down menu on the top right of the page.  
It is also possible to reset a universe at once by pressing the reset button (gray X)  

### DMX Keypad

When clicking on the "DMX Keypad" button in the Simple Desk top bar, you can jump to a new page where a traditional DMX keypad is displayed.  
The keypad is useful to set a batch of channel values with a single command. Following a table explaining the key commands that you can find on the right side of the pad.  
  

|     |     |
| --- | --- |
| **Key** | **Description** |
| AT  | sets a value for a specified DMX channel or group of channels (range).  <br>Example: **13 AT 148** (sets channel 13 to value 148) |
| THRU | selects a range of DMX channels  <br>Example: **3 THRU 15 AT 133** (sets channels 3 to 15 to value 133) |
| FULL | sets the maximum value (255) to the selected DMX channels or group of channels  <br>Example: **18 FULL** (sets channel 18 to 255)  <br>**1 THRU 10 FULL** (sets channels 1 to 10 to 255) |
| ZERO | sets the minimum value (0) to the selected DMX channels or group of channels  <br>Example: **4 ZERO** (sets channel 4 to 0) |
| BY  | sets a channels gap within a range  <br>Example: **1 THRU 10 BY 2 AT 100** (sets channels 1, 3, 5, 7, and 9 to value 100) |
| +%  | increases by given percent the current values of the channels  <br>Example: **1 THRU 10 BY 2 +% 20** (increases by 20% the current values of the channels 1, 3, 5, 7, and 9) |
| -%  | reduces by given percent the current values of the channels  <br>Example: **1 THRU 10 BY 2 -% 20** (reduces by 20% the current values of the channels 1, 3, 5, 7, and 9) |

  
Please keep in mind that:

* Every command is sent to QLC+ only when pressing the ENTER button
* DMX addresses are contiguous between universes, so Universe 1 ranges from 1 to 512, Universe 2 from 513 to 1024 and so on
* You can manually write commands in the top text box once you learn the keypad commands syntax

Configuration page
------------------

This page allows to remotely set the QLC+ configuration, divided in four areas:

* **Universes configuration**: Allows to set the inputs, outputs, feedback, profiles and passthrough mode for each QLC+ universe. This is basically the same functionality of the QLC+ input/output panel.  
    Since a QLC+ project contains also the I/O information, most likely you won't have to manually configure it on this page, but just check if everything is correct.  
    
* **Audio configuration**: Allows to select the audio devices used for audio playback or audio input.  
    
* **User loaded fixtures**: Allows to remotely load a custom fixture to QLC+.  
    When clicking on the **Load fixture** button, a window will show up, allowing you to choose a file from the device you're using to control the device where QLC+ is running.  
    The fixture file will be transferred via web and loaded by QLC+.  
    When adding new custom fixtures it is recommended to reload a project or either restart QLC+ on the target device.  
    
* **Authorized users**: This section is available only when starting QLC+ with the "-wa" or "--web-auth" option. It enables basic HTTP authentication (no HTTPS or certificates involved).  
    When enabling this feature for the first time, you need to add at least an administrator, otherwise you will not be asked for any password when accessing the web interface.  
    Users can have the following access levels:
    
    * **Everything**: This is the access level for administrators. They can access every functionality of the web interface and add more authenticated users
    * **Virtual Console and Simple Desk**: a user with this access level can view the Virtual Console and Simple Desk page, but cannot access the Configuration page
    * **Only Virtual Console**: a user with this access level can view only the Virtual Console page, but cannot access the Simple Desk and the Configuration page
    
    An administrator can:
    * Add more users by filling the Username and Password fields and then clicking on the "Add user" button
    * Delete an existing user by clicking on the "Delete user" button
    * Change the access level or password of an existing user and then click on the "Change" button

Once the configuration has been set, it is possible to go back to the web interface main page by clicking on the **Back** button, placed at the top left corner of the page.

Known limitations
-----------------

The QLC+ web interface is still a work in progress feature and it has some known limitations you should be aware of if you intend to use it.

* Speed Dial, XY Pad, and Animation widgets are not supported yet
* Sliders with a Knob appearance are not supported yet
* Sliders Click & Go button is not supported yet
* Frame enable state is not handled yet
* Cue List crossfade sliders not supported yet
* Cue List "Play/Stop + Pause" layout not supported yet
* Cue List notes live editing is not handled yet
* Virtual Console Grand Master is not handled yet