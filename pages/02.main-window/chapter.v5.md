---
title: 'Main Window'
taxonomy:
    category: docs
child_type: docs
media_order: 'main-window-v5.png,main-window.png'
---

<style>
    #chapter p {
        text-align: left;
    }
</style>

### Chapter 2

# Main Window

The QLC+ Main Window consists of four main parts:

1.  A top bar with the global shortcuts
2.  A context sub-menu bar containing controls for the selected context
3.  Main context area, which can be a preview or operative panel
4.  Side panels to act on the current view without wasting space

![](/main-window/main-window-v5.png)

Most of the controls throughout the software have tooltips, which pop up after holding your mouse cursor over them for a short while.

### Top bar (1)

The main top bar contains the following shortcuts (from left to right):

* * *
#### ![](../basics/qlcplus.svg?resize=48,48) Global actions menu

This menu is accessible from any QLC+ context and is a shortcut to the main project operations.  
The menu items are listed here:

![](../basics/filenew.svg) Create a blank new project (CTRL+N)  
![](../basics/fileopen.svg?resize=48,48) Open an existing project (when over, shows a list of recent files) (CTRL+O)  
![](../basics/filesave.svg?resize=48,48) Save the current project (CTRL+S)  
![](../basics/filesaveas.svg?resize=48,48) Save the current project with a new name  
![](../basics/import.svg?resize=48,48) Import Fixtures and Functions from an existing project  

![](../basics/undo.svg) Undo the last operation  
![](../basics/redo.svg) Redo the last operation undone  

![](../basics/network.svg) Configure client and server network settings (either native or web interface)  
![](../basics/diptool.svg) Open the DIP switch calculation tool  
![](../basics/configure.svg) Open the UI settings panel to tune colors, scaling, etc..  
<i class="fa fa-maximize fa-2x"></i> Toggle full screen mode (CTRL+F11)  
<i class="fa fa-earth-europe fa-2x"></i> Switch the UI language (might require an application restart)  
<i class="fa fa-circle-info fa-2x"></i> View information about QLC+  

* * *

#### Context switching buttons

By pressing these buttons, you can switch from one context to the other.  
Contexts can help with the design phase, the live operations or the input/output configuration.  
Contexts can be detached from the main window by right clicking on their button.  

![](../basics/editor.svg?resize=48,48) View the [Fixtures and Functions Context](/fixtures-functions-manager)  
![](../basics/virtualconsole.svg?resize=48,48) View the [Virtual Console](/virtual-console)  
![](../basics/simpledesk.svg?resize=48,48) View the [Simple Desk](/simple-desk)  
![](../basics/showmanager.svg?resize=48,48) View the [Show Manager](/show-manager)  
![](../basics/inputoutput.svg?resize=48,48) View the [Input/Output](/input-output) configuration manager

#### Global helpers

The main window top bar includes more helpers on the right side of the screen.

![](../basics/dmxdump.svg?resize=48,48) Open the [DMX Dump](dmx-dump) popup to quickly create Scenes  
<i class="fa fa-wave-square fa-2x"></i>    BPM control: shows the current BPM number and open the [BPM Control](/bpm-system) popup  
![](../basics/stopall.svg?resize=48,48) Show the running function number and allow to stop them all at once  


### Context Sub-Control Bar (2)

This is another menu bar which changes per-context (or is not present at all) where you can either select the context preview mode or find a toolbar with various controls.  

* Fixtures And Functions shows preview mode and universe selectors 
* Virtual Console shows a page selector
* Simple Desk shows a universe selector and reset
* Show Manager shows editor and playback controls
* Input/Output Manager has no sub-control bar

### Main Working Area (3)

Everything happens here. Which panel is active depends on which context is currently selected.

### Side Panels (4)

Side Panels have been introduced in version 5 to save space and provide quick tools to enhance the project editing.  
In these panels you can find tools such as:
* Fixture browser
* Fixtures, Functions, Palettes or Widgets editors
* Input/Output Plugins, Input Profiles or Virtual Console Widgets list