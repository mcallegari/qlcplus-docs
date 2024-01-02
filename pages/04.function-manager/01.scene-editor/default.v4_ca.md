---
title: 'Scene Editor'
---

The scene editor, as its name suggests, is used to edit ![](/basics/scene.png) [Scene](/basics/glossary-and-concepts#scene) functions. The editor is divided into tabs; with the first, **General** tab, you control the list of fixtures and [channel groups](/basics/glossary-and-concepts#channel-groups) that take part in the scene editing, together with the Scene name.  
All subsequent tabs are used to control the individual channel values for each fixture and, if any are defined, the channels groups values.

General Tab Controls
--------------------

On the left hand part of the screen, the buttons to control the fixtures used in the scene are displayed.

|     |     |
| --- | --- |
| **Scene name** | Change the name of the scene. |
| ![](/basics/edit_add.png) | Add an existing [Fixture](/basics/glossary-and-concepts#fixtures) to the scene. |
| ![](/basics/edit_remove.png) | Remove the selected [Fixture(s)](/basics/glossary-and-concepts#fixtures) from the scene. |
| ![](/basics/check.png) | Enable all channels of the selected fixtures. |
| ![](/basics/uncheck.png) | Disable all channels of the selected fixtures. |

On the right hand part of the screen, the buttons to control the [channel groups](/basics/glossary-and-concepts#channel-groups) used in the scene are displayed

|     |     |
| --- | --- |
| ![](/basics/check.png) | Enable all the selected channel groups. |
| ![](/basics/uncheck.png) | Disable all the selected channel groups. |


**Hint:** It's useful to know that when a channels group is checked/unchecked, the fixtures controlled by the group will be automatically added to the left panel. The channels controlled by the group will also be automatically enabled/disabled on each fixture.

Channel Groups Tabs
-------------------

This tab will be displayed only if one or more channel groups are selected in the General tab.  
Each Channel Group will be displayed with a quick macro access button ([Click And Go](/basics/glossary-and-concepts#click-and-go) if supported), a label with the group value, a fader and the name of the group.

Fixture Tabs
------------

Each fixture is represented by its own tab that contains sliders for each of the fixture's channels. Each channel can be enabled or disabled with a check box at the top of the channel unit. The value of each channel can be set either by typing the value to the edit box at the top of the slider or by moving the slider. Channels that provide multiple functions such as gobos, colors, etc. also have a button above the channel slider - this button can be used to directly select a specific function or capability provided by that channel.  
**Hint**: The keyboard shortcut to move between channels values edit boxes is '**Tab**' to move to the right and '**Shift + Tab**' to move to the left.

### Channel enabled/disabled status

If a channel has not been enabled, the scene will not touch that particular channel's value, ever.

If a channel has been enabled, the scene will change that channel's value to the value that is defined in the scene. This is useful, for example, when you wish to control only the dimmer channel of a scanner fixture - you wouldn't want the scene to touch the scanner's pan, tilt, color or gobo channels when you just want to fade in or fade out with the dimmer channel.

### Controls

|     |     |
| --- | --- |
| ![](/basics/check.png) | Enable all channels from the current fixture. In all channels mode, select channels for all fixtures. |
| ![](/basics/uncheck.png) | Disable all channels from the current fixture. In all channels mode, disable channels for all fixtures. |
| ![](/basics/back.png) | Go to the previous tab in the view. If the first tab is selected, this will go to the last tab in the view. Keyboard shortcut: '**ALT+Left**' |
| ![](/basics/forward.png) | Go to the next tab in the view. If the last tab is selected, this will go to the first tab in the view. Keyboard shortcut: '**ALT+Right**' |
| ![](/basics/editcopy.png) | The Copy functionality has 2 modes:  <br><br>**Copy the values** (and enabled/disabled states) of all channels in the current fixture to the clipboard.<br>**Copy only the selected channels** (CTRL-clicked, yellow background) values into the clipboard. |
| ![](/basics/editpaste.png) | Paste the values from clipboard to the current fixture. If no channels were selected during 'copy', then all the enabled/disabled states will be pasted along with the channel values. |
| ![](/basics/editcopyall.png) | The 'Copy all' functionality has 2 modes:<br><br>**Copy all values** (and enabled/disabled states) of all channels to all other fixtures taking part in the scene.<br>**Copy only the selected channels** (CTRL-clicked, yellow background) values to all the other fixtures taking part in the scene. |
| ![](/basics/color.png) | Launch a color tool to select a specific color and set that color to the current fixture; This feature is enabled only for fixtures that are capable of CMY/RGB color mixing. |
| ![](/basics/xypad.png) | Launch a position tool (similar to [XYPad](/virtual-console/xy-pad) in Virtual console) to select a head/mirror position for the current fixture; This feature is enabled only for fixtures that have either pan or tilt channels. All heads of current fixture will be changed to the same value. |
| ![](/basics/speed.png) | Show/Hide the Speed Dial widget, used to adjust the Scene parameters such as Fade In and Fade Out |
| ![](/basics/tabview.png) | Switch between "tab view" and "all channels view". The first mode will display one tab for each fixture, while the second will display a single tab for all the fixtures |
| ![](/basics/blind.png) | Toggle blind mode for the selected fixture. |
| ![](/basics/record.png) | Clone the current scene and add a new step to the Chaser selected from the drop down list beside this button |