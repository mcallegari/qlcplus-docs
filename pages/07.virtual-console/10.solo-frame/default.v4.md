---
title: 'Solo Frame'
date: '03:43 22-08-2023'
---

A Solo Frame is almost exactly the same kind of a container as a normal [Frame](../frame) in that can hold various widgets and other frames inside. However, the difference with Solo Frame is that it treats any [Buttons](../button) inside it differently by allowing only one button to be enabled at a time. For example, consider you have **Button A** and **Button B** inside a Solo Frame with **Button A** currently enabled. Next, you click button **Button B** which automatically results in **Button A** being released, leaving now only **Button B** enabled.

### Configuration

Solo Frames can be configured with the properties ![](/basics/edit.png) button found in the toolbar or by double clicking the solo frame itself.  
  
Other than the standard [styling & placement options](../styling-and-placement), Solo Frames have every [frame](../frame) additional options:  

* **Frame name**: Allow you to assign an arbitrary label to the Solo Frame. This will be displayed only when the "Show header" option is enabled (see below).
* **Accept child widgets**: Allows you to add widgets to the Solo Frame.
* **Allow resizing**: Allow the Solo Frame height and width to be changed.
* **Show header**: Display a useful header composed of a button and a label. The button allows you to expand/collapse the Solo Frame, which can save a lot of Virtual Console space. The label will display the name of the Frame.

And one other specific option:  

* **Mix sliders in playback mode**: When this option is enabled, the [sliders](../slider) in **playback** mode are allowed to be enabled at the same time. When moving a slider up, instead of instantly cancelling the other running sliders, it will fade them out at the same speed you are fading it up.