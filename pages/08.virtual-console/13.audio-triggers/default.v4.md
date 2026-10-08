---
title: 'Audio Triggers'
date: '03:46 22-08-2023'
---

Starting from QLC+ version 4.4.0, this functionality allows you to use an audio input source such as a microphone, to add more life to your light shows.  

Introduction
------------

When clicking on the ![](/basics/audioinput.png) icon, an audio trigger widget will be added to your Virtual Console.  
The widget's graphics area shows live monitoring of the captured audio, displaying a number of spectrum bars and a volume bar.  
On the bottom you can see the range of frequencies analyzed by QLC+.  

Configuration
-------------

When double clicking on the widget in design mode, a panel is displayed showing a complete set of options to tune the audio trigger's functionality.  
The first thing you can configure is the number of spectrum bars that you want to display and that you will need during your live show. The number accepted is between 5 and 32.  
Once the number of bars has been decided, you can proceed to assign a functionality to each bar. There is a list showing the following options for the volume and spectrum bars:  
  

|     |     |
| --- | --- |
| **Name** | Can be "Volume Bar" or a spectrum bar shown as #number (start frequency - end frequency). Example: #5 (1250Hz - 1562Hz) |
| **Type** | Indicates the type of functionality the bar will control. It can be:<br><br>![](/basics/uncheck.png) **None** - No functionality assigned<br>![](/basics/intensity.png) **DMX** - Controls single DMX channels<br>![](/basics/function.png) **Function** - Controls a QLC+ function<br>![](/basics/virtualconsole.png) **VC Widget** - Controls a Virtual Console widget (at the moment only buttons, sliders, tapping of speed dials and next cue of cue lists) |
| **Assign** | When a type is selected, a button with a ![](/basics/attach.png) icon is displayed to allow you to connect the bar to the desired functionality. Depending on which type you chose, clicking on this button will display the DMX channels, Functions or Virtual Console widgets selection dialogues. |
| **Info** | This column displays some additional information about the bar--functionality association.  <br>Depending on the type you chose, you will find the number of DMX channels, the function name or the VC Widget name selected displayed here |
| **Disable threshold** | When selecting a Function or a VC Widget button, this column allows you to set a deactivation threshold percentage. When the spectrum or volume bar goes below this value, the associated function/VC button will be stopped/deactivated. |
| **Enable threshold** | When selecting a Function or a VC Widget button, this column allows you to set an activation threshold percentage. When the spectrum or volume bar goes above this value, the associated function/VC button will be started/activated. |
| **Divisor** | For speed dials and cue lists, this will divide the taps by the selected number - only every n-th tap will be actually sent to the speed dial. In other words, the tap happens only on every n-th beat. If you want the tap on every beat, enter 1, for every other beat enter 2. For once in a 4/4 measure, enter 4. For once in 3 4/4 measures, enter 12. Maximum is 64. |

### DMX channels

You can choose one or more channels of the currently patched fixtures. Those channels will be set proportionally to total volume, or volume in a particular frequency band.

### Functions

You can select one or more functions. Those functions are started when volume goes above the Enable threshold in respective band, and stopped when it goes below the Disable threshold.

### VC Widgets

You can select only **ONE** widget here, either a button, a slider or a speed dial. Depending on the type:

* **Button** is pressed when volume goes above Enable threshold, and released when the volume is below Disable threshold (similar to functions).
* **Slider** is moved in proportion to the volume (similar to DMX channels). For a slider the thresholds do not apply.
* **Speed dial** is tapped.
* **Cue List** "Next Cue" is pressed.

For **Speed dials** and **Cue Lists**, the tap/button press happens when the volume goes above the Enable threshold, and won't happen again until the volume falls below the Disable threshold. This probably means you will have to set the thresholds a little closer to each other than for buttons.