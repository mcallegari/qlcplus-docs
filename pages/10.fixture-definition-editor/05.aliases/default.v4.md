---
title: Aliases
date: '07:10 22-08-2023'
---

In this tab it is possible to define the rules of replacement triggered by capabilities set as "Alias" preset.  
Let's make an example. A fixture has channel 5 named "Effects" which controls the behavior of channel 6. Channel 5 has 2 capabilities: "Speed on channel 6" and "Sound sensitivity on channel 6". The latter have been set to the "Alias" preset. By default, when DMX value of channel 5 is 0, channel 6 acts as speed control. When DMX value of channel 5 enters the "sound sensitivity" capability, channel 6 becomes a sound sensitivity adjustment.  
To cope with this case, you need to define 2 channels: "Speed" and "Sound sensitivity". In the fixture mode add only "Speed", since it will the default behavior when DMX value of channel 5 is equal to 0.  
Then you need to define just one alias: the one that will replace the default channel "Speed" with "Sound sensitivity". QLC+ will then know what to do when the DMX value of channel 5 enters or exits the alias.

![](../fixtureeditor_aliases.png)

|     |     |
| --- | --- |
| **Alias** | Shows the list of all capabilities of all channels set as "Alias" preset. The string is in the form \[Channel name\] - \[Capability name\] \[DMX value range\] |
| **In mode** | Select the mode where the alias must have effect |
| **replace** | Select the mode channel to be replaced when the alias is triggered |
| **with** | Select the channel that will substitute the "replace" channel when the alias is triggered |
| ![](/basics/edit_add.png) | Add the triplet _In mode_ X, _replace_ Y _with_ Z to the known aliases list |
| ![](/basics/edit_remove.png) | Remove the selected alias from the aliases list |