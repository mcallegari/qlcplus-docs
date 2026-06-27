---
title: Button
date: '14:26 21-08-2023'
---

A **Button** is the simplest [Virtual Console](VirtualConsole.md) widget: press
it to trigger a function. It's the building block of most consoles — one button
per scene, chase or effect you want to fire.

Attach a function by dragging it from the Function Manager onto the button, or
from the button's settings.

## Settings

* **Attached Function** — the function this button controls. Use **Detach the
  current function** to clear it.

* **Pressure behaviour** — what pressing the button does:
  * **Toggle Function on/off** — start the function on the first press, stop it
    on the next. The button stays lit while the function runs.
  * **Flash Function (only for Scenes)** — run the scene only while the button is
    held down, then stop. With a **Fade out** time, the flashed look fades out
    on release.
  * **Toggle Blackout** — turns the whole-rig blackout on and off.
  * **Stop all Functions** — stops every running function (a panic button).
  * **Adjust Function intensity** — the button sets a function's intensity to a
    fixed level rather than starting/stopping it.

* **Flash properties** (shown for the Flash behaviour):
  * **Override priority / Force LTP** — make the flash take precedence over other
    functions controlling the same channels, so the flashed look wins while held.

## Tips

* Combine buttons with a [Solo Frame](VCFrame.md) so that pressing one button
  automatically stops the others — ideal for a row of mutually-exclusive looks.
* Add an **external input** or **keyboard shortcut** (External controls tab) to
  fire the button from hardware or the keyboard.
