---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

QLC+ includes a built-in web server that exposes some of its features to an
ordinary web browser. This is very handy for running QLC+ on a device without a
display (a **headless** system), whether to work standalone or to remote-control
it from a phone, tablet or another computer.

## Enabling the web interface

The web interface is **not** enabled by default. Start QLC+ with the `-w` (or
`--web`) option to turn it on. Related command-line options:

| Option | Purpose |
|--------|---------|
| `-w`, `--web` | Enable remote web access. |
| `-wp`, `--web-port <port>` | Use a specific port (the default is **9999**). |
| `-wa`, `--web-auth` | Enable web access with user authentication. |
| `-a`, `--web-auth-file <file>` | File in which to store the basic-auth credentials. |

See the [command line parameters](../command-line-parameters) page for how to
pass these options.

## Accessing the web interface

From any modern browser (on any device on the same network) connect to:

**http://\[IP address\]:9999**

where *\[IP address\]* is the address of the machine running QLC+ — for example
`http://192.168.0.100:9999`. The browser must support **WebSockets**, which QLC+
uses to talk to the page in real time.

The web interface has three pages:

* **Virtual Console**
* **Simple Desk**
* **Configuration**

You can also build your own web pages that talk to QLC+ through its
[Web API](../web-api).

## Virtual Console page

This is the default page. It mirrors the QLC+ **Virtual Console**: if a project
is loaded it shows the widgets you created (buttons, sliders, cue lists, frames,
clocks, XY pads, speed dials, animations, audio triggers, labels), and operating
them in the browser drives QLC+ live. If no project is loaded the page is empty.

* **Load project** (top-left) — pick a project file from the device you're
  browsing with; it is transferred to and loaded by QLC+.
* **Configuration** — opens the configuration page.

The layout and state of the widgets are sent to the browser as JSON, and updates
(a running function, a moved fader, a cue change) are pushed back live over the
WebSocket, so the web view stays in sync with QLC+.

## Simple Desk page

A simplified version of the desktop [Simple Desk](/simple-desk). It shows a DMX
universe split into pages of 32 channels.

* Use the **left/right arrows** to move between pages of channels.
* Use the **drop-down** at the top right to choose which universe is shown.
* Use the **reset** button (grey ✕) to reset the whole universe.

### DMX Keypad

The **DMX Keypad** button opens a traditional keypad for setting many channels
with a single command. The command syntax matches the desktop
[Simple Desk keypad](/simple-desk):

| Key | Description |
|-----|-------------|
| **AT** | Set a value for a channel or range. Example: **13 AT 148**. |
| **THRU** | Select a range of channels. Example: **3 THRU 15 AT 133**. |
| **FULL** | Set the maximum value (255). Example: **1 THRU 10 FULL**. |
| **ZERO** | Set the minimum value (0). Example: **4 ZERO**. |
| **BY** | Set a step within a range. Example: **1 THRU 10 BY 2 AT 100** (channels 1, 3, 5, 7, 9). |
| **+%** | Increase current values by a percentage. Example: **1 THRU 10 BY 2 +% 20**. |
| **-%** | Decrease current values by a percentage. Example: **1 THRU 10 BY 2 -% 20**. |

Keep in mind:

* A command is sent only when you press **ENTER**.
* DMX addresses are contiguous across universes — Universe 1 is 1–512, Universe 2
  is 513–1024, and so on.
* You can also type commands directly into the top text box once you know the
  syntax.

## Configuration page

Lets you set the QLC+ configuration remotely, in several areas:

* **Universes configuration** — set the inputs, outputs, feedback, profiles and
  passthrough for each universe (the same as the desktop
  [Input/Output](/input-output) panel). Because a project already stores its I/O
  mapping, you usually only need to check it here rather than reconfigure.
* **Audio configuration** — choose the audio playback and input devices.
* **User loaded fixtures** — remotely upload a custom fixture definition to QLC+
  with **Load fixture**. After adding custom fixtures, reload the project or
  restart QLC+ on the target device.
* **Authorized users** — available only when QLC+ is started with `-wa` /
  `--web-auth`. It enables basic HTTP authentication (no HTTPS/certificates).
  When enabling it for the first time you must add at least one administrator,
  otherwise no password is ever requested. Access levels:
  * **Everything** — administrators; full access, including managing users.
  * **Virtual Console and Simple Desk** — can view those two pages, but not the
    Configuration page.
  * **Only Virtual Console** — can view only the Virtual Console page.

  An administrator can add users (Username + Password → **Add user**), delete
  users, and change a user's access level or password (**Change**).

Use the **Back** button (top-left) to return to the main page.

## System page

On supported platforms (typically headless Linux devices such as a Raspberry Pi)
a **system** area is available to configure the device's network and hotspot,
choose the **autostart** project, and **reboot** or **shut down** the device
remotely.
