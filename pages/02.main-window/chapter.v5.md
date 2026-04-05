---
title: 'Main Window'
taxonomy:
    category: docs
child_type: docs
media_order: main-window-v5.png
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

![](../basics/filenew.svg) New workspace (CTRL+N)  
![](../basics/fileopen.svg?resize=48,48) Open an existing workspace (hold the button longer for a list of recent files) (CTRL+O)  
![](../basics/filesave.svg?resize=48,48) Save the current workspace (CTRL+S)  
![](../basics/filesaveas.svg?resize=48,48) Save the current workspace with a new name  
![](../basics/import.svg?resize=48,48) Import Fixtures and Functions from an existing project  

![](../basics/undo.svg) Undo the last operation  
![](../basics/redo.svg) Redo the last operation undone  

![](../basics/network.svg) Configure client and server network settings (either native or web interface)  
![](../basics/diptool.svg) Open the DIP switch calculation tool  
![](../basics/configure.svg) Open the UI settings panel to tune colors, scaling, etc..  
<i class="fab fa-maximize fa-2x"></i> Toggle full screen mode (CTRL+F11)  
<i class="fab fa-earth-europe fa-2x"></i> Switch the UI language (might require an application restart)  
<i class="fab fa-circle-info fa-2x"></i> View information about QLC+  

* * *

#### Context switching buttons

![](../basics/add_dump.png)[DMX Dump](dmx-dump) (CTRL+D)  
![](../basics/liveedit.png)[Live Edit](live-edit): allows you to modify a function while QLC+ is in Operate Mode  
![](../basics/liveedit_vc.png) Live Edit Virtual Console: allows you to modify the Virtual Console while QLC+ is in Operate Mode. Click to Toggle  
![](../basics/panic.png) Stop All Functions (CTRL+Shift+ESC)  
![](../basics/blackout.png) Toggle Blackout  
![](../basics/operate.png) Switch between Design Mode and Operate Mode (CTRL+F12)

### Active Panel (2)

Everything happens here. Which panel is active depends on which tab is currently selected.

### Panel Tabs (3)

At the bottom of main window you can find easy eye catching icons for switching between QLC+ contexts.  
By double clicking on a tab, **a context can be detached on a separate window**. To reattach a detached context, just close the window.  
QLC+ contexts appear in the following order (from left to right):

![](../basics/fixture.png) View the [Fixture Manager](/fixture-manager)  
![](../basics/function.png) View the [Function Manager](/function-manager)  
![](../basics/show.png) View the [Show Manager](/show-manager)  
![](../basics/virtualconsole.png) View the [Virtual Console](/virtual-console)  
![](../basics/slidermatrix.png) View the [Simple Desk](/simple-desk)  
![](../basics/input_output.png) View the [Input/Output](/input-output) configuration manager
