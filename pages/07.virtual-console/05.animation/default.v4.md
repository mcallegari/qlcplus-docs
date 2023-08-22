---
title: Animation
date: '03:09 22-08-2023'
---

An Animation widget is a complete tool to operate with the [RGB Matrices](/basics/glossary-and-concepts#function) of your project.  
It displays several graphical elements to fully control a matrix during live shows.  
Most importantly, it allows you to define a number of so called "custom controls" to quickly recall presets, colors and properties and apply them immediately to a running matrix.

Introduction
------------

When clicking on the ![](/basics/animation.png) icon, an Animation widget will be added to your Virtual Console.  
By default, the widget will display 4 elements:

* On the leftmost side, a slider to control the playback and the intensity of a RGB Matrix.  
    The slider movement can be associated to an external controller input line.  
    It behaves exactly like a [Virtual Console Slider](slider) in playback mode.
* On the top right side, two [Click & Go](/basics/glossary-and-concepts#click-and-go) buttons to set the matrix start and end color. When clicking on them during the [Operate Mode](/basics/glossary-and-concepts#modes), a color picker menu will be displayed.
* Below the two buttons, a drop down menu to select the desired Matrix animation or preset.

The space below the animation menu, is reserved for Custom Controls. They can be defined in the widget configuration window and each of them will be displayed as a single button.  
Each custom control can be associated to a key combination or an external controller input line.

Configuration
-------------

An Animation widget can be configured with the properties ![](/basics/edit.png) button found in the Virtual Console toolbar or by double clicking the widget itself.

### General Page

|     |     |
| --- | --- |
| **Widget name** | Set the friendly name of the widget, displayed above the two Click & Go buttons |
| **Matrix Function** | Shows you the name of the [RGB Matrix](/basics/glossary-and-concepts#rgb-matrix) Function that is currently assigned to the widget.<br><br>![](/basics/attach.png) Attach a RGB Matrix Function to the widget  <br>![](/basics/detach.png) Detach the current function from the widget |
| **Apply color and preset changes immediately** | Select whether the changes to the Matrix must be applied immediately or at the next Matrix loop |
| **External input** | You can attach an external input channel from an input device (like a slider board) to the widget slider so that you don't always have to use the mouse or touch screen to control the Matrix playback or intensity.<br><br>**Input universe**: The input universe from which you wish to get input data for the slider.<br>**Input channel**: The individual input channel within the selected input universe that you wish to use for controlling the slider.<br>**Auto Detect**: When toggled, you can just move/press a button/slider/knob on your external input hardware and it will be automatically assigned to the slider. The latest combination is shown on the text boxes when QLC+ receives input data. If you don't see anything in the boxes, your input connection might have a problem that you need to fix first.<br>**Choose...**: Shows the [Select Input Channel](select-input-channel) dialog that you can use to select an input channel manually. |

### Custom Controls Page

A custom control is a "shortcut" to a functionality of a RGB Matrix.  
Basically you can control all the options that are normally used in the [RGB Matrix Editor](rgb-matrix-editor) during the design phase of a show. The only option you can't control is the Fixture group used by a RGB Matrix Function.  
In this configuration page the user can define any number of custom controls depending on the needs during a live performance.  
Each custom control is represented as a button in the Animation widget layout and can be either clicked with the mouse or pressed on a touchscreen, or associated to a key combination or an external controller input line.

|     |     |
| --- | --- |
| **![](/basics/color.png) Add start color** | Add a Matrix start color control. When clicking this button, a color selection tool will be displayed.  <br>The button displayed in the widget's layout will have a background color representing the one selected and the letter **S**. |
| **![](/basics/color.png) Add end color** | Add a Matrix end color control. When clicking this button, a color selection tool will be displayed.  <br>The button displayed in the widget's layout will have a background color representing the one selected and the letter **E**. |
| **![](/basics/fileclose.png) Add end color reset** | Add a Matrix end color reset control.  <br>The button displayed in the widget's layout will have a gray background color and when pressed, it will reset the current matrix end color (if previously set) |
| **![](/basics/script.png) Add preset** | Add a Matrix preset control. When clicking this button, a dialog will be displayed for the preset selection.  <br>The button displayed in the widget's layout will have a gray background color and a label corresponding to the preset's name. |
| **![](/basics/fonts.png) Add text** | Add a Matrix text animation control. When clicking this button, a dialog will be displayed requiring to enter the desired text to be animated on the Matrix.  <br>The button displayed in the widget's layout will have a gray background color and a label corresponding to the chosen text. |
| **![](/basics/edit_remove.png) Remove** | Remove the currently selected control from the controls list. |f