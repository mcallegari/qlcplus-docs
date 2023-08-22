---
title: MIDI
date: '05:15 22-08-2023'
---

Introduction
------------

This plugin gives input/output support for the [MIDI protocol](https://en.wikipedia.org/wiki/MIDI) and gives the user freedom to control typical parameters like channels, Notes, Program Change and Control Change.  
The MIDI plugin can be quite powerful used in combination with MIDI devices such as keyboards, MIDI controllers (like Behringer BCF2000 or KORG nanoKONTROL) or a software audio sequencer like Cubase or Ardour 3.  
The usage can vary from fader-to-fader control (the BCF2000 case) to sequence triggering for synchronized shows (metronome controlled gigs using an audio sequencer)

Configuration
-------------

When you click on the configuration button ![](/basics/configure.png) a window will appear, showing all the MIDI input and output lines detected.  
Each line has three options that can be changed depending on your needs:

* **MIDI Channel**: This is the channel where QLC+ will receive or send data through the MIDI system. MIDI channels can go from 1 to 16. The special "1-16" channel will tell QLC+ to receive or send data on any MIDI channel.
* **Mode**: This is the MIDI mode that QLC+ will use to send data through the MIDI system. This parameter can assume three possible values:
    * **Note velocity**: in this mode, QLC+ will send data using MIDI notes velocity. MIDI notes can go from 21 (A0) to 108 (C8) and each note can have a velocity going from 0 to 127, which will be doubled inside QLC+ to match the DMX range (0-255).
    * **Control Change**: this is one of the MIDI protocol messages (like Program Change) frequently used by MIDI controllers. Each device should list the supported CC messages in its user manual, so please consult it before using this mode. The CC range can go from 0 to 127 and can have values from 0 to 127, which will be doubled inside QLC+ to match the DMX range (0-255).
    * **Program Change**: this is one of the MIDI protocol messages (like Control Change) frequently used by MIDI controllers. Each device should list the supported PC messages in its user manual, so please consult it before using this mode. The PC range can go from 0 to 127 and can have values from 0 to 127, which will be doubled inside QLC+ to match the DMX range (0-255).
* **Initialization message**: This is a list of presets (templates) containing the intialization message that QLC+ will send when opening a MIDI device before using it. A detailed explanation of this functionality is written below.

Feedbacks
---------

The MIDI plugin is one of the QLC+ plugins supporting feedbacks. When QLC+ detects a MIDI device with an output line, it will enable the feedback check box in the [Input/Output panel](/input-output). Please note that output and feedback are exclusive, so they cannot both be used at the same time.  
If your MIDI device supports a return channel, QLC+ can send a visual/mechanical feedback to it. Devices such as the Behringer BCF2000 support this feature. This is very useful during live shows to have immediate knowledge of the current state of faders mapped in QLC+.  
  
A small trick that can be achieved with QLC+ is to use feedback as a generic MIDI output line to trigger external controllers/sequencers.  
Let's look at some examples:

* Input: **OSC** ---\> Output: **DMX USB** --\> Feedback: **MIDI**
* Input: **Enttec Wing** --\> Output: **ArtNet** --\> Feedback: **MIDI**

KORG nanoPAD X Axis
-------------------

For unknown reasons, the nanoPAD factory defaults don't map the X Axis of the pad area. To have it fully working with QLC+, please download the KORG utility (Windows and macOS only) from [here](http://i.korg.com/SupportPage.aspx?productid=415) and set the X Axis to CC2 (Control Change #2).

AKAI APC LED Feedbacks
----------------------

When using one of the Akai APC family controller, there is one feature that could come very handy: LED color feedbacks.  
The default behaviour with Virtual Console buttons is: value = 0: LED off, value = 255: LED green  
This can be customized when selecting an input channel, by pressing the "Custom feedback" button.  
A new area is displayed, showing the possibility to enter a lower and an upper value. This is basically translated in which values QLC+ should send for buttons on/off states.  
Since the MIDI protocol works in a range of 0-127 values, and QLC+ works in the DMX range of 0-255, the following table points you directly to the values you should enter to obtain the desired color of an APC LED. Basically they are taken from APC manuals and doubled.

| Value | LED color |
| --- | --- |
| 0   | Off |
| 2   | Green |
| 4   | Green Blinking |
| 6   | Red |
| 8   | Red Blinking |
| 10  | Yellow |
| 12  | Yellow Blinking |
| 14-255 | Green |

It's interesting to notice that you don't necessarily need to keep 0 as lower value. For example with lower = 6 and upper = 2 the result will be: Function Off -> red LED, Function On -> green LED.

MIDI beat clock
---------------

Starting from version 4.5.0, QLC+ supports the [MIDI beat clock](https://en.wikipedia.org/wiki/MIDI_beat_clock)  
Not to be confused with the [MIDI timecode](https://en.wikipedia.org/wiki/MIDI_timecode), the MIDI beat clock is a useful signal to sync BPM-based devices such as a drum machine with your lights controlled by QLC+.  
Two special MIDI channels have been mapped in QLC+ to control your [Virtual Console](/virtual-console) widgets with a beat clock.  
Here's a brief explanation of the special channels:

* **Channel 530**: A signal is sent on this channel when a beat clock starts or stops.
* **Channel 531**: This signal is sent every BPM. QLC+ doesn't take any notice of measures (e.g. 3/4, 4/4, 7/8), so when setting up your MIDI clock you need to consider how QLC+ will handle it.

  
**Hint**: If your controller is set to work at high BPM (e.g. 180-200), you might find difficult to catch the start signal. One trick for doing this is to catch the stop signal. Example:  

1.  Enable the QLC+ Virtual Console widget auto-detection
2.  Hit play on your device generating the MIDI beat clock. QLC+ will detect channel 530 and will switch very quickly to 531
3.  Stop the playback on your MIDI beat clock device. QLC+ will detect channel 530 again.
4.  Disable the QLC+ Virtual Console widget auto-detection

In a similar way you can catch the beat signal as well. Just disable the auto-detection process before stopping the playback on your beat controller (invert steps 3 and 4).

MIDI initialization message
---------------------------

There might be cases where your MIDI device needs some commands to turn into a specific operating mode  
The MIDI protocol can handle this through SysEx. These are particular messages to instruct a MIDI device how to behave.  
QLC+ can use a XML template to achieve this that can be selected in the MIDI configuration panel.  
Here's an example of how a template looks like:  

&lt;!DOCTYPE MidiTemplate&gt;
&lt;MidiTemplate&gt;
 &lt;Creator&gt;
  &lt;Author&gt;Your name&lt;/Author&gt;
 &lt;/Creator&gt;
 &lt;Description&gt;A brief description of what the template does.&lt;/Description&gt;
 &lt;Name&gt;Template name to be displayed by QLC+&lt;/Name&gt;
 &lt;InitMessage&gt;F0 47 00 7B 60 00 04 41 09 00 05 F7&lt;/InitMessage&gt;
&lt;/MidiTemplate&gt;

You can create the ones you need and place them in your MidiTemplates folder.  
You are welcome to submit them in the QLC+ forum.

Channels map
-----------------

To handle a mix of various MIDI messages (Notes, PC, CC, etc..), QLC+ remaps them into a sequential order.  
Following, the channel numbers to be used in the [Input Profile editor](/input-output/input-profiles):

| Channel | MIDI message |
| --- | --- |
| 1   | Control Change 1 |
| ... | ... |
| 128 | Control Change 128 |
| 129 | NOTE ON/NOTE OFF 1 |
| ... | ... |
| 256 | NOTE ON/NOTE OFF 128 |
| 257 | NOTE AFTERTOUCH 1 |
| ... | ... |
| 384 | NOTE AFTERTOUCH 128 |
| 385 | Program Change 1 |
| ... | ... |
| 512 | Program Change 128 |
| 513 | Channel Aftertouch |
| 514 | Pitch Wheel |
| 530 | MIDI Beat Clock: Start/Continue |
| 531 | MIDI Beat Clock: Beat |
| 532 | MIDI Beat Clock: Stop |

In OMNI mode, add 4096 * Channel number