---
title: Loopback
date: '05:14 22-08-2023'
---

Introduction
------------

Loopback plugin provides a way to control [Virtual Console](/virtual-console) widgets from Scenes and other [Functions](/basics/glossary-and-concepts#functions). Data that QLC+ sends to the Output port is looped back to the Input port, where it can be used for external control. Obviously, the Output port and Input port may be attached to different universes.

The plugin provides 4 independent lines.

This plugin is mostly for advanced users -- unlike other input/output plugins, this plugin doesn't control any real device.

Configuration
-------------

Loopback plugin doesn't have any configuration. Simply attach Input and Output to desired universes.

Examples
--------

### Buttons that set a (submaster or regular) slider to a predefined value

These buttons can have a fade time attached, these changes may be gradual.

Steps:

1.  Set one universe for Loopback output (U1), and set the slider's input universe to Loopback Input (U2). Let's say the sliders external control is set to channel 14.
2.  Add dimmer channel to U1 at address 14. In the channel modifiers dialog, set it to LTP (so that if the button goes off, the slider doesn't go to zero.
3.  Create scenes with desired slider values for channel 14 in the U1 universe. You may set fade times as well.
4.  Create buttons for the scenes.