---
title: 'RGB Matrix Editor'
date: '12:24 21-08-2023'
media_order: blending.png
---

An **RGB Matrix** plays animated patterns, text and images across a **fixture group** laid out as a grid — LED panels, pixel bars, a wall of PARs, and so on. The RGB Matrix Editor opens in the right panel of the [Fixtures and Functions](/fixtures-and-functions) workspace, with a live **preview** of the animation right below the group selector.

## Basic settings

| Setting | Meaning |
|---------|---------|
| **Name** | The matrix's name (top bar). |
| **Fixture Group** | The group of fixtures the matrix plays on. The group's layout (rows × columns) defines the pixel grid — choose a group before anything is shown. |
| **Pattern** | The animation algorithm to play: **Text**, **Image**, or one of the script-based patterns. The selection decides what appears in the **Parameters** section. |
| ![](/basics/sequence.svg?resize=48,48) **Save this matrix to a sequence** | Renders the running matrix into a sequence of steps, so you can fine-tune or trim it as a chaser. |
| **Blend mode** | How the matrix combines with other output on the same fixtures. |
| **Color mode** | Which fixture capability the matrix drives. |
| **Colors** | The colour (or colours) the pattern uses — see below. |

### Blend mode

| Mode | Behaviour |
|------|-----------|
| **Default (HTP)** | Highest value wins against other functions on the same channels. |
| **Mask** | The matrix acts as a mask over what is already there. |
| **Additive** | The matrix's colour is added to the existing output. |
| **Subtractive** | The matrix's colour is subtracted from the existing output. |

### Color mode

| Mode | Drives |
|------|--------|
| **Default (RGB)** | The fixtures' RGB (or CMY) channels. |
| **White** | The white channel. |
| **Amber** | The amber channel. |
| **UV** | The UV channel. |
| **Dimmer** | The intensity channel. |
| **Shutter** | The shutter channel. |

### Colors

The number of colour swatches shown depends on the selected pattern — a pattern declares how many colours it accepts, from none up to five. Click a swatch to open the colour picker; the <i class="fa fa-2x fa-xmark" style="color:darkred"></i> button next to colours 2–5 resets that colour to unset.

## Parameters

The **Parameters** section changes completely with the selected pattern, and is hidden when the pattern has nothing to configure.

### Text patterns

| Setting | Meaning |
|---------|---------|
| **Text** | The message to display. |
| <i class="fa fa-2x fa-font" style="color:lightcyan"></i> **Font** | Opens a font chooser for the family, size and style. |
| **Animation** | How the text moves: **Letters** (one at a time), **Horizontal** or **Vertical** scrolling. |
| **Offset X** / **Y** | Shifts the text on the grid (−255 to 255). |

### Image patterns

| Setting | Meaning |
|---------|---------|
| **Image** | The image file to display. |
| <i class="fa fa-2x fa-image"></i> **Select an image** | Opens a file chooser. |
| **Animation** | **Static**, **Horizontal**, **Vertical**, or **Animation** (play an animated GIF's frames). |
| **Offset X** / **Y** | Shifts the image on the grid (−255 to 255). |

### Script patterns

Script-based patterns build their own controls: the script declares its properties and QLC+ generates a matching label plus a combo box, number field, decimal field or text field for each one. What you see therefore depends entirely on the chosen script — for example the number of bars, the size of a shape, a direction, and so on.

## Speed

**Double-click** a time field, or use the <i class="fa fa-2x fa-clock"></i> button next to it, to open the time editor.

| Setting | Meaning |
|---------|---------|
| **Steps fade in** | Fade time into each animation step. |
| **Steps hold** | How long each step is held — this is what sets the animation's pace. |
| **Steps fade out** | Fade time out of each step. |
| **Tempo type** | Whether times are measured in **Time** or in **Beats**, synced to the global tempo. |

## Order and direction

### Run Order

| Icon | Mode | Behaviour |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repeats the animation forever. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Plays the animation once, then stops. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Plays forwards, then backwards, and repeats. |

### Direction

| Icon | Mode | Behaviour |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Plays the animation steps in normal order. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Plays the animation steps in reverse order. |
