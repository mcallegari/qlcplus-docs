---
title: Frame
date: '03:39 22-08-2023'
---

A Frame is a container that can hold a variety of widgets, including other frames, inside. In fact, the whole Virtual Console is already your bottom-most frame. Also, if you apply some [styling attributes](../styling-and-placement) to a frame, all of its children (which have not had their own non-default style settings applied) also inherit their parent's style properties.

Configuration<br>-------------

Frames can be configured with the properties ![](/basics/edit.png) button found in the toolbar or by double clicking the frame itself.  
  
Other than the standard [styling & placement options](../styling-and-placement), Frames have the following additional options, divided into 2 tabs:  

### Appearance tab

* **Frame name**: Allow you to assign an arbitrary label to the Frame. This will be displayed only when the "Show header" option is enabled (see below).
* **Accept child widgets**: Allow you to add widgets to the Frame.
* **Allow resizing**: Allow the Frame height and width to be changed.
* **Show header**: Display the frame header. By default it will display 3 elements: An expand/collapse button, the frame name and a enable/disable button. Some further optional controls are displayed when the Frame is in multipage mode. See next paragraph.

### Pages tab

Virtual Console Frames can be turned into multi-page widgets, useful when dealing with a lot of widgets or controllers supporting pages.  
The multi-page functionality is disabled by default, but can be enabled in this tab.  
Following the options to configure this functionality:

* **Enable**: This check box enables/disables the multi-page functionality. When enabled, VC frames will display additional controls in the header bar (if the header bar is also enabled). These are: Previous page button, page name and next page button.
* **Number of pages**: With this counter it is possible to determine the number of pages the frame is going to handle.
* **Clone first page widgets**: When checked, QLC+ will clone the widgets of the frame's first page into all the other new pages defined by the "Number of pages" field. This is a very useful option to speed up the mapping of an external controller where all the pages have the same widgets.
* **External input - Previous page**: You can set an external input signal or a keyboard combination here which will cause the previous page of the frame to be displayed.
* **External input - Next page**: You can set an external input signal or a keyboard combination here which will cause the previous page of the frame to be displayed.
* **Page shortcuts**: in the bottom section of the pages tab, it is possible to assign to each page a custom name, an external input signal or a keyboard combination.  
    In this way a page can be accessed directly without going through the intermediate pages.  
    

Header Controls<br>---------------

By default a Frame is displayed with a header. Following a brief description of the default and optional controls that can be used either in Operate or Design mode.

* ![](/basics/expand.png) **Expand/Collapse button**: when clicked, the Frame size will be dramaticaly reduced, to save space on your Virtual Console. The collapsed state is saved in your project.
* **Frame name**: a label displaying the Frame name
* ![](/basics/check.png) **Enable/Disable button**: when clicked, the Frame will go into a disable state. All the widgets inside the Frame will not respond anymore to input controls.  
    This is useful, for example, to use the same input controls on widgets of different frames. For example if you bound the key "G" to a button in Frame A and also to a button on Frame B, you can enable one Frame at a time to use your key binding univocally.
* ![](/basics/back.png) Page ![](/basics/forward.png) **Multipage controls** (Optional): when a Frame is configured in multipage mode, some extra buttons will be displayed on the header, allowing you to switch between the Frame pages and to keep track of the current page you're in.