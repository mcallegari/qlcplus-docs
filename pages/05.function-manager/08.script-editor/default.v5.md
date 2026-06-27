---
title: 'Script Editor'
date: '04:07 22-08-2023'
---

A **Script** is a function written as a small program. It lets you control
fixtures and other functions with logic — starting and stopping functions,
setting channels, waiting, generating random values, running system commands and
more. The Script Editor opens in the right panel of the
[Fixtures and Functions](FixturesAndFunctions.md) workspace.

## Toolbar

* **Name** — the script's name (top bar).
* **Back** (arrow) — returns to the previous editor.
* **Add a method call at cursor position** (＋) — opens a menu of ready-made
  commands to insert at the cursor (see below).
* **Show/hide functions tree** (functions icon) — opens the Function Manager in
  a side panel. **Double-click** or drag a function to insert its ID into the
  script.
* **Show/hide fixture tree** (fixture icon) — opens the Fixture Group Manager in
  a side panel. **Double-click** or drag a fixture to insert its ID.
* **Check the script syntax** (spell-check icon) — validates the script and
  reports any errors in a popup.

## Writing the script

The main area is a plain text editor where you type the script, one command per
line. Changes are saved automatically a moment after you stop typing.

Because commands refer to functions and fixtures by their **ID**, the function
and fixture trees (and drag-and-drop) are the easy way to insert the correct IDs
without looking them up.

## Insert-method menu

The **＋** button inserts a template for a common command, ready for you to fill
in:

* **Start function** — begin running another function.
* **Stop function** — stop a running function.
* **Set fixture channel** — set a channel value on a fixture.
* **Wait time** — pause for a given time before the next line.
* **Random number** — produce a random value.
* **Blackout** — turn the blackout on or off.
* **System command** — run an external command.
* **File path** — opens a file chooser and inserts the selected file's path
  (quoted), for commands that need a file.
