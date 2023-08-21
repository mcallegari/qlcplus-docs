---
title: 'Add RGB Panel'
date: '11:11 21-08-2023'
---

On the market you can easily find LED strips that you can wire as you prefer to create a RGB Panel (or matrix). This dialog allows you to quickly create and setup a RGB Panel. It is a dedicated dialog to help you with the most annoying process of creating fixtures manually depending on the desiderd layout.  
Please note that once the panel is created, the only way to modify the layout is manually.

Panel creation
--------------

When clicking OK on this dialog two things will happen:  

* QLC+ will create a fixture for each row of the panel. They can be considered like if the panel is composed by individual RGB bars.
* QLC+ will create a fixture group representing the panel with heads already in the right displacement

Once a RGB panel is created, it is straight forward to go to the [Function Manager](functionmanager.html), create a new [RGB Matrix](concept.html#RGBMatrix) and start using the panel very quickly.  
  
Let's have a look at every option in this panel:

|     |     |
| --- | --- |
|| **Panel Properties** |
| **Name** | An arbitrary string that can be used to name the RGB panel |
| **Universe** | The universe where the RGB Panel is going to start. If the panel requires a number of channels that don't fit in a single universe, it will span across multiple universes, starting from the one selected with this option. |
| **Address** | The DMX start address where the RGB Panel has to be mapped |
| **Size** |     |
| **Columns** | The RGB Panel number of columns (or the number of pixels per row) |
| **Rows** | The RGB Panel number of rows (or the number of pixels per column) |
| **Physical** |     |
| **Width** | The physical width in millimeters of the RGB Panel |
| **Height** | The physical height in millimeters of the RGB Panel |
| **Orientation** |     |
| **Top-Left** | The first pixel will be located on the top-left corner of the panel |
| **Top-Right** | The first pixel will be located on the top-right corner of the panel |
| **Bottom-Left** | The first pixel will be located on the bottom-left corner of the panel |
| **Bottom-Right** | The first pixel will be located on the bottom-right corner of the panel |
| **Displacement** |     |
| **Snake** | The panel displacement follows a "snake" logic. It means the next pixel of the end of a row is on the same column of the next row. Then the other pixels follow in the opposite direction. |
| **Zig-Zag** | The panel displacement follows a "zig-zag" logic. It means the next pixel of the end of a row is on the first column of the next row. |
| **Direction** |     |
| **Horizontal** | Pixel addresses are incremented horizontally. |
| **Vertical** | Pixel addresses are incremented vertically. |