---
title: Button
date: '14:26 21-08-2023'
---

A Button is one of the simplest and most powerful widgets in QLC+; with it, you can start, stop and flash your Functions.

### Configuration

Buttons can be configured with the properties ![](/basics/edit.png) button found in the toolbar or by double clicking the button itself.

|     |     |
| --- | --- |
| **Button label** | Set the friendly name of the button. The name appears on the button in Virtual Console.<br>**NOTE:** If you set an icon to a button with the **Edit -> Icon -> Choose** menu, the icon will override this label. |
| **Function** | Shows you the name of the [Function](/basics/glossary-and-concepts#functions) that is currently assigned to the button.<br><br>![](/basics/attach.png) Attach a Function to the button  <br>![](/basics/detach.png) Detach the current Function from the button |
| **External input** | You can attach an external input channel from an input device (like a slider board) to buttons so that you don't always have to use the mouse, touch screen or keyboard to access the buttons.<br><br>**Input universe**: The input universe that you wish to provide input data to the button.<br>**Input channel**: The individual input channel within the selected input universe that you wish to use for controlling the button.<br>**Auto Detect**: When toggled, you can just press a button on your external input hardware and it will be automatically assigned to the button. The latest combination is shown in the text boxes when QLC+ receives input data. If you don't see anything in the boxes, your input connection might have a problem that you need to fix first.<br>**Choose...**: Shows the [Select Input Channel](../select-input-channel) dialog that you can use to select an input channel manually. |
| **Key combination** | You can attach a keyboard key (or key combination) to the button, which then acts as if you clicked the button directly with your mouse.<br><br>![](/basics/key_bindings.png) Attach a keyboard key (or key combination) to the button  <br>![](/basics/fileclose.png) Detach the current key combination from the button |
| **On button press...** | **Toggle Function on/off**: When you click the button, the attached Function is started. When you click the button a second time, the Function is stopped, unless it has already stopped by itself.<br>**Flash Function**: You can "flash" the attached [Scene](/basics/glossary-and-concepts#scene) when you keep the button pressed. If another type of Function is attached to the button, nothing happens when you click it.<br>**Toggle Blackout**: When you click the button, QLC+ will toggle the [blackout mode](/basics/glossary-and-concepts#blackout)<br>**Stop All Functions**: When you click the button, all the Functions that are running in QLC+ will be stopped immediately. It is possible to specify a fade out time to wait for all the intensity channels to reach a zero level |
| **Adjust Function intensity** | If checked, this feature will adjust the intensity of the assigned Function just before playing it when the button is pressed. |

### Button States

A button can be in one of 3 states; these are Off, On and Monitoring. The state can be changed by clicking with your mouse, by the set external input or by using the set key combination.

| State | Button Appearance | State Description |
|-------------|-------------------|------------------------------------------------------------|
| Off | No Border | The function associated with the button is not running. |
| On | Green Border | The button has been activated and is running the function. |
| Monitoring* | Orange Border | The function is running (but activated by another widget) |

*Note: a button in monitoring mode does not currently send any feedback to an associated controller/feedback universe.

Pressing a Button while it is in the "monitoring" state will take control of the running Function and the Button border will turn to green. Another press and the attached Function will be stopped.