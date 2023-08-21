---
title: 'Fixture Group Editor'
taxonomy:
    category:
        - docs
---

The Fixture Group Editor is used when you select a [Fixture Group](/basics/glossary-and-concepts#fixture-group) in the [Fixture Manager](fixture-manager). This editor can be used to describe the physical arrangement of the [fixtures](/basics/glossary-and-concepts#fixtures) and their [heads](/basics/glossary-and-concepts#head) that are assigned to the group.

### Controls

Each Fixture Group has a name (for your convenience) and the fixture configuration in an unlimited \[X,Y\] grid. You can adjust the size of the grid as well as the placement of individual fixture heads on the grid.

|     |     |
| --- | --- |
| **Fixture Group Name** | Change the name of the group. |
| ![](/basics/forward.png) | Add fixture heads to the currently selected row, filling each subsequent column on that row with the selected fixture heads. You can select individual fixture heads or complete fixtures to be added on the selected row. |
| ![](/basics/down.png) | Add fixture heads to the currently selected column, filling each subsequent row on that column with the selected fixture heads. You can select individual fixture heads or complete fixtures to be added on the selected column. |
| ![](/basics/edit_remove.png) | Remove the selected fixture head from the grid (and the group). |
| **Fixture grid** | The fixture grid displays the current fixture/head arrangement in the selected group. You can switch places between two heads as well as fill up spaces or create empty spaces between heads simply by dragging the heads on top of each other in the grid.<br><br>When using fixture groups in RGB Matrices, each cell in the grid represents one colored (or monochrome) pixel in a graphic scene rendered by the RGB Matrix.<br><br>Each cell is displayed with an info text that contains the following information:<br><br>* The name of the fixture as well as an icon<br>* **H:** represents the head number<br>* **A:** represents the fixture's address<br>* **U:** represents the fixture's universe |
| **Width** | Adjusts the grid width (number of columns on the X-axis). |
| **Height** | Adjusts the grid height (number of rows on the Y-axis). |