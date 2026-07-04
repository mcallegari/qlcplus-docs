---
title: 'Fixture Definition Editor'
date: '12:00 04-07-2026'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Chapter 10

# Fixture Definition Editor

The **Fixture Definition Editor** is used to create and modify [fixture
definitions](/basics/glossary-and-concepts#fixtures) — the files that tell QLC+
how to control each of your lights.<br>
In the version 5 UI the editor is built into QLC+ itself rather than being a
separate application: you open it from the **Fixture Browser** (the **Add
Fixtures** panel), using the <i class="fa fa-plus" style="color:limegreen"></i>
**Create a new fixture definition** button, or the
![](../basics/edit.svg?resize=24,24) **Edit** button to modify the selected
one.<br>
When creating a new fixture definition, please validate it with the [online
fixture validator](https://www.qlcplus.org/fixture_validator.php). It will help
you make a correct definition.

## Saving your fixture definitions

To use your fixture definitions in QLC+, they must be saved where QLC+ expects to
find them. The editor saves into your personal **user fixtures folder**:

* Linux: a hidden folder in your home directory — `$HOME/.qlcplus/Fixtures`
* Windows: a folder in your user directory — `C:\Users\{Username}\QLC+\Fixtures`
* macOS: in your user Library — `$HOME/Library/Application Support/QLC+/Fixtures`

If you edit a **bundled** (system) definition, the editor automatically saves a
copy into your user folder that overrides the bundled one, so the original is
never touched.

**Important: you SHOULD NOT save custom fixtures into the QLC+ *system* fixtures
folder. When QLC+ is uninstalled, everything in that folder is deleted, and it
can cause conflicts between the system and your own definitions.**

## Main toolbar

The top toolbar of the editor holds the file actions. Every definition you open
gets its own **tab** on the row below, so you can work on several at once.

| Button | What it does |
|--------|--------------|
| <i class="fa fa-chevron-left"></i> **Back to QLC+** | Closes the editor and returns to QLC+ (prompting you to save any unsaved changes first). |
| ![](../basics/filenew.png) **New definition** | Creates a new, empty fixture definition in a new tab. |
| ![](../basics/fileopen.png) **Open definition** | Opens an existing `.qxf` fixture definition in a new tab. |
| ![](../basics/filesave.png) **Save definition** | Saves the definition in the active tab. |
| ![](../basics/filesaveas.png) **Save definition as…** | Saves the active definition under a new name. |

## The editor

Unlike the standalone version 4 editor (which used separate tabs and windows),
the version 5 editor shows the whole definition as a single scrolling panel of
collapsible **sections** on the left, with a shared **editor panel** on the right
that opens when you add or edit a channel or a mode.

The sections appear in the logical order you should follow when building a new
definition, from top to bottom:

[**General**](general)<br>
[**Physical**](physical)<br>
[**Channels**](channels)<br>
[**Modes**](modes)<br>
[**Aliases**](aliases)<br>
