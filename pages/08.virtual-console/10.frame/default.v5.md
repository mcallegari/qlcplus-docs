---
title: Frame
date: '03:39 22-08-2023'
---

A **Frame** is a container in the [Virtual Console](VirtualConsole.md) that
groups other widgets together. Use it to organise the console into sections, to
move and show/hide a whole group at once, and to add multi-page sub-areas.

> For a frame in which only one function plays at a time, see
> [Solo Frame](VCSoloFrame.md). A Solo Frame shares all the settings below and
> adds the solo rule.

## Settings

### Header

* **Show header** — shows the frame's header bar (with its label).
* **Show enable button** — adds a toggle in the header that enables/disables all
  the widgets inside the frame at once.

### Pages

A frame can host several **pages** of its own, turning one frame into a paged
sub-console:

* **Enable pages** — turns on paging for the frame.
* **Circular pages scrolling** — wraps around from the last page back to the
  first.
* **Pages number** — how many pages the frame has.
* **Clone first page widgets** — copies the first page's widgets onto every page,
  so a common layout (e.g. shared master faders) appears on all pages.

### Shortcuts

* **Shortcut name** — names the page shortcuts used to jump between the frame's
  pages.

## Tips

* Drop widgets onto a frame to make them children of it; moving the frame moves
  them all.
* Use a [Solo Frame](VCSoloFrame.md) for any group where two looks shouldn't run
  together.
* Combine **Enable pages** with **Clone first page widgets** to build a paged
  section that keeps its master controls visible on every page.
