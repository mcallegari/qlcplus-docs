---
title: 'Web API'
date: '03:38 12-07-2026'
---

The QLC+ [Web Interface](../../web-interface) is driven by a small **API** that you
can use from your own web pages or scripts to read QLC+'s state and control it
remotely. This page documents the API used by the version 5 (QML) web access.

The API has two parts:

* a few **HTTP endpoints** that serve pages and data, and
* a **WebSocket** channel that carries live commands and updates.

Most control happens over the WebSocket.

## Connecting

First enable the web interface by starting QLC+ with `-w` (see the
[Web Interface](../../web-interface) page). Then open a WebSocket to:

```
ws://[IP address]:9999/qlcplusWS
```

Messages are plain text. A message is a list of **fields separated by the pipe
character `|`**; the first field is the command name. Replies from QLC+ arrive on
the same socket in the same pipe-separated format. QLC+ also **pushes** unsolicited
messages when something changes (a function starts, a fader moves, a cue
advances), so a client should simply listen and react.

> **Note on IDs:** functions and widgets are referenced by their numeric **ID**.
> Universes and channels in the API are **1-based** (Universe 1, channel 1 …).

## HTTP endpoints

| Operation | Endpoint | Purpose |
|----|------|---------|
| GET | / | The Virtual Console web page. |
| GET | /vc.json | The current Virtual Console layout and widget state as JSON. |
| GET | /simpleDesk | The Simple Desk web page. |
| GET | /config | The configuration page. |
| GET | /system | The system page (network/hotspot/autostart, where supported). |
| POST | /loadProject | Upload and load a project (`.qxw`) file. |
| POST | /loadFixture | Upload and load a custom fixture definition. |

## WebSocket API — QLC+API queries

Query and control commands are sent as `QLC+API|<command>|<args…>`. QLC+ replies
with `QLC+API|<command>|<result…>`.

| Command | Description |
|---------|-------------|
| `QLC+API|isProjectLoaded` | Replies `true` / `false`. |
| `QLC+API|getFunctionsNumber` | The number of functions in the project. |
| `QLC+API|getFunctionsList` | A flat list of `id|name|` pairs for every function. |
| `QLC+API|getFunctionType|<fID>` | The function's type as a string (Scene, Chaser, …). |
| `QLC+API|getFunctionStatus|<fID>` | `Running` or `Stopped`. |
| `QLC+API|setFunctionStatus|<fID>|<status>` | Start (`1`) or stop (`0`) the function. |
| `QLC+API|getWidgetsNumber` | The number of Virtual Console widgets. |
| `QLC+API|getWidgetsList` | A flat list of `id|caption|` pairs for every widget. |
| `QLC+API|getWidgetType|<wID>` | The widget's type as a string (Button, Slider, …). |
| `QLC+API|getWidgetFunction|<wID>` | The function attached to the widget (id, type, name). |
| `QLC+API|getWidgetStatus|<wID>` | The widget's current value/state (see below). |
| `QLC+API|getChannelsValues|<universe>|<startAddress>|[count]` | The DMX values of `count` channels from `startAddress` in `universe`. |
| `QLC+API|sdResetChannel|<channel>` | Reset a Simple Desk channel; replies with refreshed channel values. |
| `QLC+API|sdResetUniverse|<universe>` | Reset a whole universe; replies with refreshed channel values. |

`getWidgetStatus` returns a value that depends on the widget type — for example a
button replies `255` (active), `127` (monitoring) or `0` (inactive); a slider
replies its numeric value; a cue list replies `PLAY|<index>` or `STOP`; an
animation replies its fader level.

## WebSocket API — controlling widgets

To operate a widget, send its **numeric ID** as the first field, followed by the
value or a sub-command. The exact form depends on the widget type.

### Simple widgets

| Message | Effect |
|---------|--------|
| `<wID>|<value>` | **Button**: press (value `> 0`) or release. **Slider**: set its value. |
| `<wID>|SLIDER_OVERRIDE|<0/1>` | Slider: enable/disable override mode. |
| `<wID>|CNG_PRESET|<value>` | Slider: apply a Click & Go preset value. |
| `<wID>|CNG_COLORS|<primary>|<secondary>` | Slider: set Click & Go colours (e.g. `#ff0000`). |

### Cue List

| Message | Effect |
|---------|--------|
| `<wID>|PLAY` | Play. |
| `<wID>|STOP` | Stop. |
| `<wID>|PREV` | Previous cue. |
| `<wID>|NEXT` | Next cue (GO). |
| `<wID>|STEP|<index>` | Jump to a specific step. |
| `<wID>|CUE_SIDECHANGE|<level>` | Move the side fader. |

### Frame / Solo Frame

| Message | Effect |
|---------|--------|
| `<wID>|NEXT_PG` / `<wID>|PREV_PG` | Next / previous page. |
| `<wID>|PAGE|<n>` | Go to page *n*. |
| `<wID>|FRAME_DISABLE|<0/1>` | Enable/disable the frame. |
| `<wID>|COLLAPSE|<0/1>` | Collapse/expand the frame. |

### Animation (RGB Matrix)

| Message | Effect |
|---------|--------|
| `<wID>|MATRIX_SLIDER|<value>` | Set the intensity fader. |
| `<wID>|MATRIX_COLOR_1..5|<color>` | Set colours 1–5 (e.g. `#00ff00`). |
| `<wID>|MATRIX_COMBO|<index>` | Select the algorithm/preset. |

### XY Pad

| Message | Effect |
|---------|--------|
| `<wID>|XYPAD|<x>|<y>` | Set the pad position. |
| `<wID>|XYPAD_RANGE_H|<min>|<max>` | Set the horizontal range. |
| `<wID>|XYPAD_RANGE_V|<min>|<max>` | Set the vertical range. |
| `<wID>|XYPAD_PRESET|<presetID>` | Apply a preset. |

### Speed Dial

| Message | Effect |
|---------|--------|
| `<wID>|SPEED_UP` / `<wID>|SPEED_DOWN` | Nudge the time up/down. |
| `<wID>|SPEED_TIME|<ms>` | Set the time directly. |
| `<wID>|SPEED_FACTOR|<factor>` | Set the multiplier factor. |
| `<wID>|SPEED_APPLY` | Apply. |

### Audio Triggers

| Message | Effect |
|---------|--------|
| `<wID>|<0/1>` | Enable/disable capture. |
| `<wID>|AUDIO_VOLUME|<0-100>` | Set the input volume. |

### Clock

| Message | Effect |
|---------|--------|
| `<wID>|CLOCK_PLAY|<0/1>` | Start/stop (for stopwatch/countdown). |
| `<wID>|CLOCK_RESET` | Reset. |

## WebSocket API — Simple Desk and global

| Message | Effect |
|---------|--------|
| `CH|<absoluteAddress>|<value>` | Set an absolute DMX channel (addresses run continuously across universes) to a value 0–255. |
| `VC_PAGE|<n>` | Switch the Virtual Console to page *n*. |
| `GM_VALUE|<value>` | Set the Grand Master. QLC+ also pushes `GM_VALUE|<value>|<display>` when it changes. |
| `POLL` | A keep-alive; QLC+ ignores it. |

## Notes and limitations

* All access is subject to the **authentication level** of the connected user
  when QLC+ is started with `-wa`: channel and widget control require at least
  Simple Desk / Virtual Console rights, and configuration commands require
  administrator rights.
* This API is a work in progress and may change between releases.
