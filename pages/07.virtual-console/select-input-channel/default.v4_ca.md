---
title: 'Select Input Channel'
date: '03:50 22-08-2023'
---

Whenever an Input Channel needs to be selected, for example when manually attaching a channel from an [Input Plugin](/basics/glossary-and-concepts#input-output-plugins) to a [Virtual Console](/virtual-console) widget, the Select Input Channel dialog is used.

The dialog is very straightforward; there is a list of input universes and each universe that has an [Input Line](/basics/glossary-and-concepts#input-output-plugins) attached to it, displays the line's (or the attached device's) name after the universe number. Under each operational universe, there is a list of channels provided by that universe. You can choose from these channels or select one manually.

If you have an [Input Profile](/basics/glossary-and-concepts#input-profiles) attached to the universe, you see the individual channel names and numbers for the device. If there isn't a Profile attached to an input universe, you will need to type the channel number manually, by double-clicking the item that tells you to do that and then type in the channel number manually. See also the [tutorial on input profiles](howto-input-profiles)

**NOTE:** All [Virtual Console](/virtual-console) widgets that have been made _external-input-aware_, provide an option for automatically detecting the input channel as well, so that you don't need do this selection manually.