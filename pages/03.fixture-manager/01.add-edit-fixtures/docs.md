---
title: 'Add/Edit Fixtures'
taxonomy:
    category:
        - docs
---

The same dialog (with slight differences) is used for both adding new and editing the properties of existing [Fixtures](/basics/glossary-and-concepts#fixtures).

**NOTE:** When editing an existing fixture, you can always choose a completely different fixture type to replace the previous one, but if their channels don't match each other exactly, any [Scene](/basics/glossary-and-concepts#scene) functions you may have created, will very probably do things that you don't want. Also, if the channel counts don't match, you might end up having fixtures with overlapping channels, which results also to unwanted behaviour. [RGB Matrix](/basics/glossary-and-concepts#rgbmatrix), [EFX](/basics/glossary-and-concepts#efx), [Chaser](/basics/glossary-and-concepts#chaser) and [Collection](/basics/glossary-and-concepts#collection) functions remain unaffected since they don't directly address specific channels, but are more dynamic in nature.

### Controls

|     |     |
| --- | --- |
| **Fixture Model list** | Shows you a list of available fixture definitions and their general types. If you don't see your favourite fixture definition on the list, you can create one yourself with the accompanying, easy to use **QLC+ Fixture Editor**. Since QLC+ is completely free software, please consider sharing the definition files with the community at [https://www.qlcplus.org/forum/viewforum.php?f=3](https://www.qlcplus.org/forum/viewforum.php?f=3) |
| **Fixture Properties** | **Name:** The friendly name you wish to assign to the fixture<br>**Mode:** The [mode](/basics/glossary-and-concepts#fixturemode) you have configured to the fixture<br>**Universe:** The DMX universe where the newly-added fixture(s) are connected to<br>**Address:** The address of the (first) fixture you are adding. If you are adding multiple fixtures, each consecutive fixture will be assigned an address immediately after the previous fixture's channels, unless address gap (see below) is non-zero.<br>**Channels:** If you have selected the **Generic** dimmer device, you can define its channel count to this field. Otherwise this field is read-only and it just tells you how many channels the currently selected fixture needs in its currently selected mode.<br>**Channel list:** This field displays a more detailed list of individual channels for the currently selected fixture and its mode. For **Generic** dimmers, this field remains empty since all dimmer channels are treated as dummy **intensity** channels. |
| **Multiple Fixtures** | You can also add more than one fixture at the same time if your setup consists of multiple fixtures that are of the same make & model. These features are disabled when you are editing an existing fixture.<br><br>* Amount: Number of new fixtures to create. Each newly-added fixture includes also a number after its assigned name when adding more than one fixture at a time.<br>* Address gap: Leave this many empty channels between each new fixture |