---
title: 'Glossary and Concepts'
date: '07:32 21-08-2023'
---

<style>
    img {
        margin: 0;
        display: none;
    }
</style>
Q Light Controller Plus (QLC+ for short) is meant to control lighting equipment used in various performances, like live concerts and theatres etc. The main intention is that QLC+ will be able to outperform commercial lighting desks without the need for a 500+ page manual through the use of an intuitive and flexible user interface.

This page has been arranged in alphabetical order to facilitate searching for a specific topic.

### ![](../audio.png) Audio

An audio [function](#functions) is an object representing an audio file stored in a disk.  
QLC+ supports the most common audio formats like Wave, MP3, M4A, Ogg and Flac. It supports mono or stereo channels and several sample rates like 44.1KHz, 48KHz, etc...  
Audio functions can be placed in [Chaser](#chaser) or in a [Show](#show) at the desired time, using the [Show Manager](showmanager.html) panel.  
Like most of the QLC+ functions, Audio supports fade in and fade out times.  

### ![](../blackout.png) Blackout

Blackout is used to set all channels in all universes to zero and keep them that way, regardless of which functions are currently being run or what values have been set to them manually. When blackout is turned off, the current values of all channels are sent to each universe.

### Capabilities

Some channels in intelligent fixtures provide many kinds of functions, or _capabilities_ like switching the lamp on when the channel value is \[240-255\], setting a red color on a color wheel when the value is exactly \[15\], or simply controlling the fixture's dimmer intensity with values \[0-255\]. Each of these individual function is called a capability and each of them has these three properties:

*   Minimum value: The minimum channel value that provides a capability.
*   Maximum value: The maximum channel value that provides a capability.
*   Name: The friendly name of a capability.

### Channel Groups

Channel groups can be added and defined in the [Fixture Manager](fixturemanager.html) panel by using the [Channel groups editor](channelsgroupeditor.html).  
Channel groups can have a user defined name and can group together any user defined channels selected from an existing Fixtures list.

### ![](../chaser.png) Chaser

A chaser [function](#functions) is built up from multiple scenes that are run in sequence, one after the other, when the chaser function is started. The next function is run only after the previous has finished. Any number of [functions](#functions) can be inserted to a chaser.

The Chaser function's direction can be reversed. The Chaser function can also be set to do an infinite loop, an infinite ping-pong-loop (direction is reversed after each pass) or it can run through just once, in a single-shot mode, after which it terminates by itself. If the function is set to loop infinitely, it must be stopped manually.

As of version 3.3.0, each chaser has its own speed settings:

*   **Fade In:** The fade in speed of a step
*   **Hold:** The hold time of a step
*   **Fade Out:** The fade out speed of a step
*   **Duration:** The duration of a step

Copies of chaser functions can be created with the [Function Manager](functionmanager.html). The scenes inside a chaser are not duplicated when a chaser is copied. Only the order and direction are copied to the new one.

### Click And Go

Click And Go is a technology that allows the user to quickly access macros and colors in a completely visual way and with just a couple of clicks. This can lead to more efficient live shows and more freedom to choose the desired result very easily.  
So far, three types of widgets are available:

*   Single Color (applies to: Red, Green, Blue, Cyan, Yellow, Magenta, Amber and White intensity channels)
*   RGB Color Picker. Controls values for selected RGB channels with a single click
*   Gobo/Macro Picker. Access and display a Gobo/Macro defined in the Fixture definition

An overview with screenshots is available [here](https://qlcplus.org/clickandgo.html)

### ![](../collection.png) Collection

A collection [function](#functions) encapsulates multiple functions that are run simultaneously when the collection function is executed. Any number of functions can be inserted to a collection, but each function can be inserted only once and a collection cannot be a direct member of itself.

Collections have no speed settings. The speed of each member function is set individually using their own editors.

Copies of collection functions can be created with the [Function Manager](functionmanager.html). The functions contained in a collection are not duplicated; only the list of functions is copied.

### DMX

[DMX](https://en.wikipedia.org/wiki/DMX512) is short for **D**igital **M**ultiple**X**. It basically defines a whole bunch of properties, protocol, wiring etc. In the case of lighting software, it defines the maximum number of channels (512) per universe and the value range of each channel (0-255).

QLC+ supports unlimited universes (there are 4 initial, but more can be added if needed). They do not necessarily need to be connected to DMX hardware; rather, DMX has just been selected as the de facto lighting standard. Actual hardware abstraction (whether it's analogue 0-10V, DMX or some other method) is achieved through [output plugins](#outputplugins).

### ![](../efx.png) EFX

An EFX [function](#functions) is mainly used to automate moving lights (e.g. scanners & moving heads). The EFX can create complex mathematical paths on an X-Y plane that are converted to DMX values for the fixture's pan and tilt channels. **Only fixtures that contain valid pan & tilt channels can take part in an EFX function.** Lately EFX can control also other channels like Dimmer or RGB.

### ![](../fixture.png) Fixtures

A fixture is essentially one lighting device. It can be, for example, one moving head, one scanner, one laser etc.. However, for simplicity, individual PAR cans (and the like) that are usually controlled thru one dimmer channel per can, can be grouped together to form one single fixture.

With the Fixture Definition Editor, users can edit shared fixture information stored in a fixture library that contains the following properties for each fixture:

*   Manufacturer (e.g. Martin)
*   Model (e.g. MAC250)
*   Type (Color Changer, Scanner, Moving Head, Smoke, Haze, Fan...)
*   Physical properties (bulb type, beam angle, dimensions...)
*   Channels:
    *   Channel group (Intensity, Pan, Tilt, Gobo, Color, Speed etc.)
    *   8bit and 16bit channel bindings for pan & tilt groups
    *   Optional primary color for intensity channels (RGB/CMY)
    *   Value ranges for channel features (e.g. 0-5:Lamp on, 6-15:Strobe etc..)

These fixture definitions can then be used to create actual fixtures in the Q Light Controller Plus application, that will have additional properties defined by users:

*   DMX Universe
*   DMX Address
*   Name

Several instances of a fixture can be created (e.g. users must be able to have several instances of a MAC250 in use). Each fixture can be named, but the name is not used internally by QLC+ to identify individual fixture instances. The same goes for the DMX address. Nevertheless users are encouraged to name their fixtures in some systematic way to help identify each of them -- if necessary.

Generic dimmer devices don't need their own fixture definitions, because usually multiple dimmers are patched into a common address space, employing one or more dimmer racks. Users can create instances of these generic dimmer entities just by defining the number of channels each one of them should have.

### ![](../group.png) Fixture Group

A fixture group is, as the name says, a group of [fixtures](#fixtures). They also define (at a rather basic level) the actual physical, real world arrangement of these fixtures. This knowledge can be used, for example, in the RGB Matrix to produce a wall of RGB-mixable lights that can act as individual pixels in a graphic pattern or scrolling text.

### Fixture Mode

Many manufacturers design their intelligent lights in such a way that they can be configured to understand different sets of channels. For example, a scanner might have two configuration options: one for only 8bit movement channels (1x pan, 1x tilt) and another one for 16bit movement channels (2x pan, 2x tilt). Instead of creating a completely new fixture definition for each variation, they have been bundled together in QLC+'s fixture definitions into fixture modes.

### ![](../function.png) Functions

The number of functions is practically unlimited. Functions are used to automate the setting of values to DMX channels. Each function type has its own way of automating lights.

The function types are:

*   [Scene](#scene)
*   [Chaser](#chaser)
*   [Sequence](#sequence)
*   [EFX](#efx)
*   [RGB Matrix](#rgbmatrix)
*   [Collection](#collection)
*   [Show](#show)
*   [Audio](#audio)
*   [Video](#video)

Each function can be named and, although the name is not used to uniquely identify individual functions, users are encouraged to name their functions in some systematic and concise way to help identify each of them. For your own comfort.

As of version 3.3.0, each function has its own speed settings:

*   **Fade In:** The time used to fade HTP (in Scenes also LTP) channels to their target value
*   **Fade Out:** The time used to fade HTP/intensity channels back to zero
*   **Duration:** The duration of the current step (not applicable on Scenes)

### Grand Master

The Grand Master is used as the final master slider before values are written to the actual physical DMX hardware. Usually, the Grand Master affects only **Intensity** channels, but can also be changed to effect the values of **all** channels.

The Grand Master has also two **Value Modes** that control the way _how_ the Grand Master affects channel values:

*   Reduce: Affected channels' values are reduced by a percentage set with the Grand Master slider. For example, Grand Master at 50% will result in all affected channels being reduced to 50% of their **current** values.
*   Limit: Affected channels cannot get larger values than the value set with the Grand Master slider. For example, Grand Master at 127 will result in all the affected channels' maximum values being limited at exactly 127.

### Head

A head represents an individual light output device in a fixture. Usually, a single fixture contains exactly one output, like the lens, the bulb, or a set of LEDs. There is, however, an increasing number of fixtures on the market that, although treated as a single fixture, have multiple light output devices, i.e. heads.

For example, you might have a RGB LED bar fixture that is assembled onto a single chassis and as such it appears as a single fixture with one DMX input and one DMX output. However, it is actually comprised of four separate RGB LED "fixtures". These separate fixtures are treated in QLC+ as heads; they share some properties with their sibling heads, they can be controlled individually, but they might also have a master intensity control that controls the light output of all the heads together.

Each head belongs to a [Fixture Mode](#fixtureMode) because in one mode, a fixture might provide enough channels to control each of its heads individually while in another mode, only a handful of channels might be provided for controlling all the heads simultaneously.

### HTP (Highest Takes Precedence)

HTP is a rule that decides what level is sent to out to a DMX universe by a channel when the channel is being controlled by more than one [function](#functions) or Virtual Console widget. Generally, intensity channels obey the HTP rule. This includes generic intensity channels used to control _light intensity_ with dimmers and also channels controlling the intensity of a color, typically in an LED fixture.

The HTP rule is simple: the highest level (nearer 100%) that is currently being sent to a channel is the one that gets sent out to the DMX universe.

Let's say you have two sliders that control the same intensity channel. First, you set slider 1 to 50% and then move slider 2 from 0% to 75%. As long as slider 2 is below 50% nothing happens, but after crossing the 50% level set by slider 1, the light intensity increases up to 75%. If you drag slider 2 again towards 0%, the light intensity decreases until it reaches the 50% set by slider 1 and stays at 50% until slider 1 is dragged down.

A crossfade between 2 [Scenes](#scene) will replace the HTP levels in the first scene with the HTP levels of the second. The new HTP levels will be combined with HTP levels from other functions and virtual console widgets as above. See also [LTP](#ltp).

### ![](../input_output.png) Input/Output plugins

QLC+ supports a variety of plugins to send and receive data from/to the external world.  
A plugin can be an interface to physical devices (such as DMX adapters or MIDI controllers) or to a network protocol (such as [ArtNet](artnetplugin.html), [OSC](oscplugin.html) or [E1.31](e131plugin.html)).  
Plugins support input, output or feedback capabilities depending on the device or the protocol they're controlling.  

The primary input methods for QLC+ are naturally the keyboard and mouse. Users can assign keyboard keys to virtual console buttons and drag sliders and do pretty much everything with a mouse.

Although, with plugins it is possible to attach additional input devices to one's computer to alleviate the rather clumsy and slow user experience that is achieved with a regular mouse and a keyboard. Plugins supporting an input line provide capabilities for getting external devices to produce input data to various QLC+ elements.

An input line is a connection provided by some hardware or network which is accessed through an input plugin. It can be, for example, a MIDI IN connector in the user's computer (or peripheral) to which users can connect MIDI-capable input devices like slider boards etc.

An output line is a connection provided by a hardware or network which is accessed through an output plugin. In other words, it is a real DMX universe, but has been dubbed output to separate it from QLC+'s internal universes. You could think of them as individual XLR output connectors in your DMX hardware.

### Input profiles

Input profiles can be thought of as [fixtures'](#fixtures) cousins; they contain information on specific devices that produce input data. An input device can be, for example, a slider board like the Behringer BCF-2000, Korg nanoKONTROL, an Enttec Playback Wing...

### LTP (Latest Takes Precedence)

LTP is a rule that decides what level is sent to out to a DMX universe by a channel when the channel is being controlled by more than one [function](#functions) or Virtual Console widget. Generally, it is used for channels that have been assigned to groups other than the **Intensity** group, such as pan, tilt, gobo, strobe speed and other _intelligent fixture parameters_

The LTP rule is simple: the latest level that has been set by a function or a Virtual Console widget gets sent out to the DMX universe.

During a crossfade between [Scenes](#scene), LTP levels will often be changed. This has to be handled with some care as some LTP levels need to jump immediately to a new level, for example, changing from one gobo to another. LTP groups such as pan and tilt, however, might need to change gradually from one level to another during a crossfade. Different timings can be achieved by combining scenes in a [Collection](#collection). See also [HTP](#htp).

### ![](../operate.png) Modes

Q Light Controller Plus is based on the common concept of having two distinct operational modes to prevent accidental and possibly harmful changes during operation:

*   Design mode is meant to edit the behaviour of the program; create and edit [functions](#functions) and [fixtures](#fixtures) and adjust how they work.
*   Operate mode is meant to execute the created functions that eventually control the user's lighting fixtures.

### ![](../rgbmatrix.png) RGB Matrix

An RGB matrix [function](#functions) can be used to impose simple graphics and text on a matrix (a grid or a wall) of RGB and/or monochrome fixture [heads](#head). The RGB matrix function has been designed to be extendable with [scripts](#rgbscript) that can be written by users.

Each RGB matrix has its own speed settings:

*   **Fade In:** Time to fade each pixel ON
*   **Fade Out:** Time to fade each pixel OFF
*   **Duration:** The duration of the current step/frame

### ![](../rgbmatrix.png) RGB Script

A RGB script is a program written in [ECMAScript](https://en.wikipedia.org/wiki/ECMAScript) (also known as JavaScript) that produces the necessary image data for [RGB Matrix](#rgbmatrix) functions. Learn more from the [RGB Script API](rgbscriptapi.html) page.

### ![](../scene.png) Scene

A scene [function](#functions) comprises the values of selected channels that are contained in one or more fixture instances. When a scene is started, the time it takes for its channels to reach their target values depends on the scene's speed settings:

Each function has its own speed settings:

*   **Fade In:** The time used to fade all channels to their target values, from whatever value they had
*   **Fade Out:** The time used to fade HTP/intensity channels back to zero. Note that ONLY [HTP](#htp) channels are affected by this setting.

Copies of scene functions can be created with the [Function Manager](functionmanager.html). All of the scene's contents are copied to the duplicate.

### ![](../sequence.png) Sequence

A Sequence has some of the functionality of a [Chaser](#chaser).  
It is equivalent to a Chaser in which each step is a single [Scene](#scene) and every one of those Scenes controls the same set of channels. A Sequence is bound to one specific Scene, which means that all the steps of the Sequence can only control the enabled channels of that Scene.  
When creating new steps in a Sequence, no Function selection pop-up will appear, since a Sequence step cannot include other Functions, unlike a Chaser step.  
When a Sequence is created, a special sequence icon will appear in the [Function Manager](functionmanager.html) as a child of the Scene to which it is bound.  
To understand the difference between a Sequence and a Chaser, you are invited to read the second paragraph of the [Show Manager](showmanager.html) documentation.

### ![](../script.png) Script

The Script [function](#functions) works on a simple yet powerful scripting language to automate QLC+ functionalities in a sequential order. A Script can be modified with the [Script Editor](scripteditor.html).

### ![](../show.png) Show

A Show is an advanced [function](#functions) which encapsulates most of the QLC+ Functions to create a time driven light show. A Show can be created only with the [Show Manager](showmanager.html) and can be inspected and renamed with the [Show Editor](showeditor.html).

### ![](../video.png) Video

A video [function](#functions) is an object representing a video file stored in a disk or a network URL.  
The supported video formats depends on your Operating System. For example Mac OSX is limited to MOV/MP4 files and not much more.  
Video functions can be placed in [Chaser](#chaser) or in a [Show](#show) at the desired time, using the [Show Manager](showmanager.html) panel.