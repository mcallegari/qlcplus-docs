---
title: 'Script Editor'
date: '04:07 22-08-2023'
---

# Script Editor

A **Script** is a function written as a small **JavaScript** program. It lets you
control fixtures and other functions with logic — starting and stopping
functions, setting channels, waiting, generating random values, running system
commands and more. The Script Editor opens in the right panel of the
[Fixtures and Functions](FixturesAndFunctions.md) workspace.

The whole script body runs as the contents of a single JavaScript function, so
you can use ordinary JavaScript — variables, `if`/`for`/`while`, functions, and
the standard `Math`, `String`, etc. objects. All interaction with QLC+ goes
through a global object called **`Engine`**, whose methods are documented in the
[Engine API](#engine-api) below.

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

## Engine API

Every QLC+ operation is a method on the global **`Engine`** object, called as
`Engine.methodName(arguments)`. Functions and fixtures are always referred to by
their numeric **ID** — use the function/fixture trees or drag-and-drop to insert
the correct IDs.

Times can be given either in **milliseconds** (a number) or as a **QLC+ time
string** (e.g. `"2s"`, `"1m30s"`, `"2s.140"`), depending on the method.

### Functions

| Method | Description |
|--------|-------------|
| `Engine.startFunction(fID)` | Starts the function with the given ID. By default the script keeps track of it and stops it when the script ends (see `stopOnExit`). Returns `true` on success. |
| `Engine.stopFunction(fID)` | Stops the running function with the given ID. Returns `true` on success. |
| `Engine.isFunctionRunning(fID)` | Returns `true` if the function is currently running, otherwise `false`. |
| `Engine.waitFunctionStart(fID)` | Pauses the script until the given function has started. |
| `Engine.waitFunctionStop(fID)` | Pauses the script until the given function has stopped (finished). |
| `Engine.stopOnExit(value)` | When `true` (the default), functions started by this script are stopped automatically when the script ends. Call `Engine.stopOnExit(false)` to leave started functions running after the script finishes. |

### Function attributes

Attributes are a function's adjustable values, such as **Intensity** (index `0`)
and a function's speed attributes. They can be addressed by index or by name.

| Method | Description |
|--------|-------------|
| `Engine.getFunctionAttribute(fID, attributeIndex)` | Returns the current value of the attribute at the given index (Intensity is `0`), or `0` if not available. |
| `Engine.setFunctionAttribute(fID, attributeIndex, value)` | Sets the attribute at the given index to `value`. Returns `true` on success. |
| `Engine.setFunctionAttribute(fID, attributeName, value)` | Sets the attribute with the given name (e.g. `"Intensity"`) to `value`. Returns `true` on success. |

### Fixtures and channels

| Method | Description |
|--------|-------------|
| `Engine.setFixture(fxID, channel, value)` | Sets `channel` (index starting at `0`, relative to the fixture) of fixture `fxID` to the DMX `value` (0–255). Returns `true` on success. |
| `Engine.setFixture(fxID, channel, value, time)` | As above, but fades to the value over `time` milliseconds. |
| `Engine.getChannelValue(universe, channel)` | Returns the current DMX value (0–255) of an **absolute** channel in a universe. Note: `universe` and `channel` here are zero-based universe index and channel index, **not** a fixture-relative channel. |

### Timing and flow

| Method | Description |
|--------|-------------|
| `Engine.waitTime(ms)` | Pauses the script for `ms` milliseconds before running the next line. |
| `Engine.waitTime(time)` | Pauses the script for the given QLC+ time string (e.g. `"1s.500"`). |
| `Engine.random(min, max)` | Returns a random integer between `min` and `max` **milliseconds** (numbers). Handy combined with `waitTime`. |
| `Engine.random(minTime, maxTime)` | Returns a random number of milliseconds between two QLC+ time strings (e.g. `Engine.random("1s", "5s")`). |

### Global control

| Method | Description |
|--------|-------------|
| `Engine.setBlackout(enable)` | Requests blackout when `enable` is `true`, releases it when `false`. Returns `true` on success. |
| `Engine.setBPM(bpm)` | Sets the beats-per-minute of the internal beat generator. Returns `true` on success. |
| `Engine.systemCommand(command)` | Runs an external program detached from QLC+. The first word is the program; the rest are arguments. Wrap an argument that contains spaces in single quotes — for example `Engine.systemCommand("aplay '/home/me/my file.wav'")`. (Not available on iOS.) |

### Example

```javascript
// Fade fixture 0's first channel (dimmer) up over 2 seconds
Engine.setFixture(0, 0, 255, 2000);
Engine.waitTime("2s");

// Start a chaser and let it run on its own after the script ends
Engine.stopOnExit(false);
Engine.startFunction(5);

// Wait a random time, then trigger a blackout
Engine.waitTime(Engine.random("1s", "4s"));
Engine.setBlackout(true);
```

> **Note on errors:** if the script can't be parsed or throws an exception, QLC+
> reports the line number and message. Use **Check the script syntax** in the
> toolbar to validate without running.
