---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

**DMX Dump** captures the values you are currently outputting and saves them
into a **Scene**. It's the fastest way to build a scene: set a look by hand
using the channel tools, the DMX view or the Simple Desk, then "dump" that look
into a function you can recall later.

## How it works

As you change channel values manually, QLC+ keeps track of every channel you
have touched — these are the **dump values**. They are the candidates that will
be written into a scene when you dump.

The **DMX Dump** button lives in the top toolbar of the application (a small
"dump" icon). A red **bubble** on the button shows how many channels are
currently captured. When the bubble shows `0`, nothing has been touched yet and
there is nothing to dump.

You can clear the captured values at any time without dumping using **Reset dump
channels** in the right panel (shortcut **Ctrl+R**). The captured values are
also reset automatically in certain situations, such as starting a new project.

> The dump button only works when function editing is allowed.

## Starting a dump

There are two ways to open the dump dialog:

* **Click** the DMX Dump button in the toolbar.
* **Drag** the DMX Dump button onto a function in the Function Manager. This
  pre-selects that function as an existing scene to dump into (see below).

## The DMX Channel Dump dialog

The dialog has two sections.

### Target Scene

Choose where the captured values go:

* **Dump to a new Scene** — creates a new scene. A default name (*New Scene N*)
  is suggested in the text box; change it to whatever you like.
* **Dump to existing Scene** — adds the captured values to a scene you already
  have. The target is the scene currently selected in the Function Manager; if
  none is selected, this option shows *(None selected)*. (Dragging the dump
  button onto a function selects this option automatically.)

### Channels to dump

Choose which of the captured channels are written:

* **Dump all the available channels** — dumps every channel across all
  universes and fixtures, not just the ones you touched. The dialog shows how
  many universes and fixtures this covers.
  * **Dump only non-zero values** — (available with the option above) skips
    channels that are at zero, so the scene only contains channels that are
    actually doing something.
* **Dump the selected fixture channels** — dumps only the channels of the
  fixtures you currently have selected. This option is available when the
  selected fixtures have channels that have been touched.

#### Detected channel types

When you dump the selected fixtures' channels, the dialog lists the **types of
channel** it found among them — for example Intensity, RGB/CMY/WAUV, Colour
macros, Gobo, Pan, Tilt, Speed, Shutter/Strobe, Prism, Beam, Effect and
Maintenance. Each type has a checkbox so you can include or exclude it. Tick only
the kinds of channel you want in the scene — for instance, dump the colours but
leave intensity out.

## Finishing

Confirm the dialog to create or update the scene with your chosen channels. The
new (or updated) scene then appears in the Function Manager, ready to be edited,
previewed and triggered like any other function.
