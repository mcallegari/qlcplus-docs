---
title: Aliases
date: '12:00 04-07-2026'
---

The **Aliases** section defines rules for replacing one channel with another,
triggered by capabilities set to the **Alias** preset (see
[Channels](../channels)).

An alias lets a channel change its meaning depending on the value of another
channel. For example, a fixture has channel 5 named "Effects" that controls the
behaviour of channel 6. Channel 5 has two capabilities: "Speed on channel 6" and
"Sound sensitivity on channel 6", the latter set to the **Alias** preset. By
default (channel 5 at 0) channel 6 acts as a speed control; when channel 5 enters
the "sound sensitivity" range, channel 6 becomes a sound-sensitivity adjustment.

To handle this you define two channels — "Speed" and "Sound sensitivity" — and
add only "Speed" to the mode (the default behaviour). Then you define a single
alias that replaces "Speed" with "Sound sensitivity". QLC+ then knows what to do
as the DMX value of channel 5 enters or leaves the alias range.

An alias is described by three parts:

* **In mode** — the mode where the alias takes effect.
* **replace** — the mode channel to be replaced when the alias is triggered.
* **with** — the channel that substitutes it when the alias is triggered.

> **Note:** the Aliases section is not yet available in the version 5 fixture
> editor. Fixture definitions that already contain aliases keep working, but for
> now aliases must be added using the version 4 editor. This page will be updated
> when alias editing is available in the version 5 UI.
