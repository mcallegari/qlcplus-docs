---
title: 'Chaser Editor'
date: '12:08 21-08-2023'
---

A **Chaser** plays a list of functions (usually scenes) one after another, each for a defined time. It's the main way to build sequences of looks — colour chases, step-based effects, cue stacks, and so on. The Chaser Editor opens in the right panel of the [Fixtures and Functions](/fixtures-and-functions) workspace.

## Toolbar

| Button | What it does |
|--------|--------------|
| **Name** | The chaser's name (top bar). |
| <i class="fa fa-chevron-left fa-2x"></i> **Back** | Returns to the previous editor. |
| <i class="fa fa-2x fa-circle-left" style="color:cyan"></i> **Preview the previous step** | When preview is running, steps backwards through the chaser so you can check each look on the output. |
| <i class="fa fa-2x fa-circle-right" style="color:cyan"></i> **Preview the next step** | When preview is running, steps forwards through the chaser. |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new step** | Opens the Function Manager in a side panel. **Double-click** or drag functions from it to append them as steps. |
| <i class="fa fa-2x fa-clone"></i> **Duplicate the selected step(s)** | Copies the selected steps, inserting the copies into the list. |
| <i class="fa fa-2x fa-shuffle" style="color:gold"></i> **Randomize the selected step(s) order** | Shuffles the order of the selected steps. |
| <i class="fa fa-2x fa-stopwatch" style="color:lightskyblue"></i> **Auto-set step durations** | Divides the chaser's total duration evenly across the selected steps. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected steps** | Deletes the selected steps (asks for confirmation). |
| <i class="fa fa-2x fa-print"></i> **Print the Chaser steps** | Prints the list of chaser steps. |

The preview buttons appear only while preview is enabled. The editing buttons are disabled while preview is running, and the duplicate/auto-duration/remove buttons need at least one step selected.

## The steps list

Each row is one step of the chaser:

| Column | Meaning |
|--------|---------|
| **#** | The step number, in playback order. |
| **Function** | The function this step plays. |
| **Fade In** | Time the step takes to fade in. |
| **Hold** | Time the step stays at full before fading out. |
| **Fade Out** | Time the step takes to fade out. |
| **Duration** | Total time of the step (fade in + hold). |
| **Note** | A free-text comment for the step. |

Interactions:

| Action | Result |
|--------|--------|
| **Click** | Selects a step. |
| **Ctrl+click** / **Shift+click** | Adds to the selection / selects a range. |
| **Drag** a step | Reorders it; a line shows where it will be dropped. |
| **Drag** from the Function Manager | Adds functions as steps at the drop position. |
| **Double-click** the function name | Opens that function's own editor. |
| **Double-click** a time field | Edits that step's time inline. |
| **Double-click** the note | Edits the step's note inline (**Enter** confirms, **Esc** cancels). |

Time fields that are not **Per Step** (see below) are not editable in the list.

## Run properties

The collapsible **Run properties** section controls how the chaser plays back.

### Run Order

| Icon | Mode | Behaviour |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repeats from the first step forever. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Plays through once, then stops. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Plays forwards, then backwards, and repeats. |
| <i class="fa fa-2x fa-shuffle"></i> | **Random** | Plays steps in random order. |

### Direction

| Icon | Mode | Behaviour |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Starts at the first step and moves down the list. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Starts at the last step and moves up the list. |

### Tempo

| Icon | Mode | Behaviour |
|------|------|-----------|
| **T** | **Time** | Step times are given in minutes/seconds/milliseconds. |
| **B** | **Beats** | Step times are given in beats, synced to the global tempo. |

### Fade In / Fade Out / Duration

These three settings decide where each step gets its timing from.

| Icon | Mode | Behaviour |
|------|------|-----------|
| **D** | **Default** | Each step uses the fade time of its own function. (Fade In / Fade Out only.) |
| **C** | **Common** | One value, entered once, is shared by every step. |
| **S** | **Per Step** | Each step keeps its own value, editable directly in the steps list. |
