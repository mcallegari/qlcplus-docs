---
title: 'Input Profiles'
date: '04:57 22-08-2023'
---

## What is an input profile?

An input profile is a configuration that maps input signals from an external control device (such as a MIDI controller, DMX controller, or other input hardware) to specific functions within QLC+. This allows users to control various aspects of their light show using their preferred hardware interface, without needing to know the underlying communication protocol.

## Select an Input Profile

QLC+ Is bundled with many input profiles ready for you to use. If your device is already supported, you can activate the profile by:
 1. Selecting the ![](/basics/input_output.png) Inputs/Outputs tab
 2. Select the desired universe on the left part of the screen
 3. Click the Profile tab placed beside the Mapping tab on the top right part of the screen.
 4. Find the input profile and click the accompanying check mark to select it. 


## Add/Edit a Profile

If the device you want to use isn't in the list of bundled input profiles, you are able to make one yourself. 

**Click the ![](/basics/edit_add.png) create new input profile button to start making a profile definition for your input profile. Alternatively, you can edit any existing profile by selecting the appropriate item and clicking the ![](/basics/edit.png) edit button. The procedure is exactly the same in both cases from now on.**

## Input Profile Editor

### General
The general tab is the place to enter general information about the fixture (How eloquently named). 

#### Manufacturer
If your manufacturer is already listed, use the same spelling and capitalisation.
#### Model
Model names can include the full name and version of the controller. E.g. APC Mini MK2
#### Type
**First enter the profile's manufacturer and the model to these fields and select profile type.**

**Type** is one of:
 - MIDI - for MIDI profiles, usually used with [MIDI plugin](/plugins/midi)
 - OSC - for OSC profiles, used with [OSC plugin](/plugins/osc)
 - HID - for HID profiles, used with [HID plugin](/plugins/hid)
 - DMX - generic DMX profiles
 - ENTTEC - ENTTEC Wing profiles, used with Enttec Wing plugin

So far, the only difference is that MIDI profiles show MIDI message parameters in the channel editor.

**Now click the Input Mapping tab to edit the profile's channels.** You have two choices for adding channel definitions: Manual and Automatic:

#### Manual mode
If you're pretty savvy with MIDI codes or have good knowledge of the plugins and how they work, you can enter the parameters manually.

![](/basics/edit_add.png) Click the add button to enter individual channel information by hand for each channel.  
![](/basics/edit_remove.png) Click to remove an existing channel  

#### Automatic mode
Most of the time, you're better off pressing buttons on your controller to automatically detect and assign them.

![](/basics/wizard.png) Click the automatic wizard button to attempt automatic channel detection. You'll receive further instructions from QLC+. You must have an [input plugin](/input-output) assigned to the current universe for this feature to work. Also, you must first stop the wizard to be able to navigate away from this dialog page.

####  properties

When you add ![](/basics/edit_add.png) or edit ![](/basics/edit.png) a channel, a small window will be displayed, asking you to fill or change some parameters:

* **Number**: The channel number. Since QLC+ supports a wide variety of input plugins, the channel number might not be intuitive, so only edit this if you know what you're doing.
* **Name**: The channel name. This is an arbitrary string to indicate the purpose of a channel.
* **Type**: The channel type. This can be: ![](/basics/slider.png) Slider, ![](/basics/knob.png) Knob, ![](/basics/button.png) Button or ![](/basics/knob.png) Encoder  
    Other types: ![](/basics/back.png) Previous page, ![](/basics/forward.png) Next Page, ![](/basics/star.png) Set Page are used to control multipage frames.

For MIDI profiles the dialog contains additional fields:

* Channel
* Message
* Param
* Note

where you can enter the channel specification (which translates to channel number) in a more intuitive way.

  
**Note that you cannot add the same channel multiple times to one profile.**


#### ![](/basics/slider.png) Sliders movement properties

If your input profile includes slider channels, when you click on them you'll notice some extra properties showing up at the bottom of the input profile editor main window. With those, you can set how values received from a slider should act within QLC+.  
  
There are two behaviours: Absolute and Relative.  
  
**Absolute** is the default setting and basically tells QLC+ to use the slider values exactly as they are received from an external controller.  
  
**Relative** is a more advanced behaviour that comes handy when using a HID Joystick with a QLC+ [XY Pad widget](/virtual-console/xy-pad) or a [Slider widget](/virtual-console/slider). Values received from an external controller are treated as relative movement starting from the current position of a Virtual Console widget.  
Let's make an example. Suppose you have a XY Pad in your Virtual Console, controlling and monitoring a group of moving heads. During your show you will have a number of scenes moving the heads pan and tilt. At some point you want to slightly adjust the position of the heads of just a few degrees. Here is when the relative movement kicks in. When you move your joystick (or external slider) QLC+ will adjust the heads from their current positions. The direction will depend directly from your external controller. The relative movement will stop when the external controller will return to its origin. Joysticks have a spring for that.  
In addition to this, the Input Profile Editor Relative setting allows you to set a **Sensitivity** parameter that will instruct QLC+ about the strength of your external controller movements. The higher this value is, the slower the movements will occur. The lower, the faster.


#### ![](/basics/knob.png) Encoder properties

An encoder is an endless rotary control and can be treated only as a relative control. Basically the encoder can start at any position and when turned clockwise or counter-clockwise it will generate positive or negative offsets inside QLC+. When an Input Profile channel is set to the Encoder type, it is possible to specify a **sensitivity** value, which is nothing but the relative offset that will be added to or subtracted from the current QLC+ channel value.


#### ![](/basics/button.png) Button properties

It is possible to change the behaviour of individual buttons from an input profile, and the following properties will be used globally in QLC+.  
  
**Generate an extra Press/Release when toggled**: this is a quite specific option used for example when dealing with TouchOSC or the Behringer BCF2000.  
QLC+ toggle events are triggered when a high+low sequence is received. This means that QLC+ expects a non zero value (typically 255) followed by a zero value to toggle, for example, a button.  
Devices like BCF2000 or software like TouchOSC, instead, send just a non zero value when activating a button, and a zero value when deactivating it.  
When checking this option, QLC+ will generate the "missing" events to standardize the way some controller work. So, for example, the BCF2000 will look like sending 255+0 when pressing a button, and another 255+0 when pressing it again.  
  
**Custom feedback**: with the "Lower value" and "Upper value" boxes, it is possible to force custom values to be sent when the selected button sends a non-zero and a zero value.  
For example, with this option it is possible to set globally how AKAI APC devices LEDs should be colored when activated/deactivated.  
Note that this option is global in QLC+, but it can be overridden if needed by a specific Virtual Console widget, through its configuration page.

### Colours
Some controllers allow colours to be specified when the button is activated. Input Profiles allow a set of colours to be defined so they can be selected more easily when editing Virtual Console widget feedback. 
![](/basics/edit_add.png) Click the add button to add a feedback value and corresponding colour.
#### Feedback Value
This is the value which QLC+ needs to send the controller in order to generate the colour.

#### Colour Picker
Pick the colour that the button will be when at the specified value

#### Colour Label
A name for the created colour. E.g "Blue"

### MIDI Channels
Some controllers allow different channels to map to different display modes for feedback colours. For example, the AKAI APC Mini MK2 allows for the following channels/modes:
![](/input-output/input-profile-midi-channels.png)

# Back to the input profile definitions panel

When you're done with channels mapping, click the OK button to accept changes and save the input profile. If you didn't enter a manufacturer/model for the profile, you'll be prompted to enter them before you can continue.  
Now you should see the profile you just defined in the list of available input profiles. Remember how to assign it to the current universe? Scroll up to Profile assignment if you don't.

To remove any existing input profiles, click the ![](/basics/edit_remove.png) remove button. Note that some profiles are so-called system profiles and cannot be removed unless you're the administrator.

That's all!  
Now you can start using your preferred profile. When assigning an input channel to a QLC+ element (like Virtual Console sliders, channel groups, etc..) you will see that your Input profile mapping will be used.
