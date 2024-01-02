---
title: 'Speed Dial'
date: '03:18 22-08-2023'
media_order: speeddial.png
---

Speed dials are meant for adjusting the speed of a set of functions from virtual console, much like bus-mode sliders in the previous versions of QLC+. While the bus concept relied on assigning functions and a slider to the same bus, the speed dial's method is a simpler and more straightforward one: The user directly selects a set of functions whose speed properties are controlled with the dial, thus removing the need for buses in the middle.


The widget is displayed as following:

![](speeddial.png)

### Widget elements

|     |     |
| --- | --- |
| **(1) Time control buttons** | The plus and minus buttons increment or decrement by one the currently focused time field of **(4)**. By default the focused field is milliseconds |
| **(2) Dial** | The dial can be manually rotated indefinitely to adjust the current focused time field of **(4)**. By default the focused field is milliseconds |
| **(3) Tap Button** | The tap button sets the Speed Dial time value to the interval between the button press/release actions. The faster it will be pressed, the lower the time value will be |
| **(4) Time fields** | The 4 time fields display the current time value of the Speed Dial and they can be adjusted individually either by entering a number with a keyboard, or by using the time controls buttons **(1)**, the dial **(2)**, the tap button **(3)** or presets **(11)**. |
| **(5) Divider button** | Divide the current time factor by 2 and apply it to the current Speed Dial time.  <br>A factor lower than 1x will become a fraction like 1/2x, 1/4x, etc |
| **(6) Time factor** | Displays the current factor multiplied by the time currently displayed in **(4)**.  <br>A factor lower than 1x is a divider. Example: time = 8s.28, factor = 1/4x, result = 02s.07 |
| **(7) Multiplier button** | Multiply the current time factor by 2 and apply it to the current Speed Dial time. |
| **(8) Reset button** | Reset the current time factor to 1x and apply it to the current Speed Dial time. |
| **(9) Factored time** | Displays the result of the Speed Dial time multiplied by the current time factor **(6)** |
| **(10) Apply button** | Applies the current Speed Dial time to the Functions associated. This is useful when multiple Speed Dials are present in a Virtual Console |
| **(11) Preset buttons** | This area displays the time presets, if present, added by the user |

### Operation

The speed dial itself looks and works just as the same as the speed dials in various function editors: There is a **big dial (2)** in the middle that increases the time when rotated clockwise and decreases it when rotated counter-clockwise. The plus ![](/basics/edit_add.png) and minus ![](/basics/edit_remove.png) buttons **(1)** are an alternative way of adjusting the speed.

The **current time** value **(4)** is displayed in four parts. When any of these fields is clicked, the dial and the plus/minus buttons will increase/decrease that unit of time. The mouse wheel can also be used instead of the dial/buttons and the fields also accept values entered on the numeric keypad.

* **h**: Hours
* **m**: Minutes
* **s**: Seconds
* **.xx**: Centiseconds (100ths of a second)

The **tap** button **(3)** can be used to match the time to a beat. The elapsed time between clicks is measured and this time is set for the controlled functions, just as if the dial had been adjusted to that particular time.

For cuelists/chasers and RGB Matrices, the tap button advances the function to next step/position when speed dial is set to adjust duration. The tapped tempo must be more than 1/4 of the original duration.

### Configuration - Functions tab

Speed dials can be configured with the properties ![](/basics/edit.png) button found in the toolbar or by double clicking the speed dial itself.

**Speed Dial Name**Change the dial's name.**Function table**

Displays the list of functions, whose speed value(s) are being controlled by the dial.

For each speed value (fade in, fade out, duration), it is possible to set a multiplier.

|     |     |
| --- | --- |
| **Fade In factor** | Select a multiplier to adjust the functions' [fade in speed](/basics/glossary-and-concepts#functions) |
| **Fade Out factor** | Select a multiplier to adjust the functions' [fade out speed](/basics/glossary-and-concepts#functions) |
| **Duration factor (+tap)** | Select a multiplier to adjust the functions' [duration](/basics/glossary-and-concepts#functions) |

This multiplier will be applied to the speed dial value before adjusting the functions' speed value.

Select **(Not Sent)** so the functions' speed value will not be affected by this speed dial.

![](/basics/edit_add.png)Add function(s) to be controlled by the speed dial.![](/basics/edit_remove.png)Remove the selected functions from the speed dial's list of controlled functions.

### Configuration - Input tab

Input from an external controller can be configured here

* **Absolute Value**: Select an absolute time range (and precision) that an external signal will control
* **Tap**: Connect a signal or a key combination to the Speed Dial Tap button **(3)**
* **Apply**: Connect a signal or a key combination to the Speed Dial apply button **(10)**

one for value with minimum and maximum and another for tap button.

### Configuration - Appearance tab

Individual visibility of the widget's layout elements can be switched on or off here. This way it is possible to save some screen real estate if some of the fields are not needed (e.g. when controlled by an external controller, the big dial is not needed).

|     |
| --- |
| **Show the plus and minus buttons** |
| **Show the central dial** |
| **Show the tap button** |
| **Show the hours field** |
| **Show the minutes field** |
| **Show the seconds field** |
| **Show the milliseconds field** |
| **Show multiplier and divider buttons** |
| **Show the apply button** |

### Configuration - Mutliplier tab

Here it is possible to select if the multiply factor should be reset when the dial **(2)** is manually adjusted and individual external controls for the multiplier button **(5)**, the divider button **(7)** and the reset factor button **(8)**

### Configuration - Presets tab

A preset is a way to have a quick access to a predifined value for a speed dial.  
Each preset is represented as a button in the speed dial widget layout, and can be either clicked with the mouse or pressed on a touchscreen, or associated to a key combination or an external controller input line.  
On the left of the preset tab, there is the list of presets. When selecting a preset in this list, the button on the right will be able to edit its properties.

|     |     |
| --- | --- |
| **![](/basics/edit_add.png) Add preset** | Add a preset |
| **![](/basics/edit_remove.png) Remove preset** | Remove selected preset |
| **![](/basics/editclear.png) Preset name** | Edit the selected preset's name. By the default the name is the dial time. |
| ![](/basics/speed.png)**Speed dial** | Edit the selected preset's time value |