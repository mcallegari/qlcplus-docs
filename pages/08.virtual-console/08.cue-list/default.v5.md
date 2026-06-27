---
title: 'Cue List'
date: '03:34 22-08-2023'
---

# VC Cue List

A **Cue List** plays a [Chaser](ChaserEditor.md) one cue (step) at a time, in
order — exactly like a theatrical cue stack. It's the go-to widget for running a
scripted show where you advance through looks with a **GO** button. The
[Virtual Console](VirtualConsole.md).

Attach a chaser by dragging it onto the widget or from the settings; each chaser
step becomes a cue in the list.

## Settings

* **Attached Chaser** — the chaser the cue list plays. Use **Detach the current
  chaser** to clear it.

### Buttons behavior

Configures the playback buttons on the widget:

* **Play/Stop layout** — which transport buttons are shown:
  * **Play/Pause + Stop**
  * **Play/Stop + Pause**
* **Next/Previous (when chaser is not running)** — what the next/previous buttons
  do when nothing is playing yet:
  * **Run from first/last cue** — start playback from the first/last cue.
  * **Run from next/previous cue** — start from the next/previous cue.
  * **Select next/previous cue** — just move the selection without starting.
  * **Do nothing**.

### Side fader

An optional fader alongside the cue list:

* **Mode**:
  * **None** — no side fader.
  * **Crossfade** — the fader manually crossfades between the current and next
    cue, for hands-on, theatrical fades.
  * **Steps** — the fader scrubs through the cue list's steps.

## Tips

* Use the **Crossfade** side fader when you want to take fades manually on a GO,
  as on a theatre console.
* Bind **Next** (GO) to a keyboard shortcut or footswitch via the External
  controls tab for hands-free operation.
