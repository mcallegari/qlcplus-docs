---
title: 'RGB Script API'
date: '03:56 22-08-2023'
---

Users can write their own RGB scripts to produce custom graphics projection with the [RGB Matrix](/basics/glossary-and-concepts#rgb-matrix) function. The scripts' operation principle is to produce a number of RGB maps that each represent one step in the graphics animation. The principle is basically the same as in movies: the audience observes a moving picture, which in reality is only a sequentially-played stream of static images that produce an illusion of movement.

The scripts themselves are written in [ECMAScript](https://en.wikipedia.org/wiki/ECMAScript), which is also known as [JavaScript](https://en.wikipedia.org/wiki/JavaScript). Note that the language is [case-sensitive](https://en.wikipedia.org/wiki/Case_sensitivity) and as a de-facto standard follows [camel case rules](https://en.wikipedia.org/wiki/Naming_convention_%28programming%29#JavaScript), so make sure you write everything correctly and pay special attention to the required API features.

Script files should be named after the script's name and must have a **.js** extension. Depending on platform, the files should be placed either in the QLC+ system script directory or, preferably, the user script directory:

* **Linux user dir:** ~/.qlcplus/rgbscripts/
* **Linux system dir:** /usr/share/qlcplus/rgbscripts/

* **OSX user dir:** ~/Library/Application Support/QLC+/RGBScripts
* **OSX system dir:** /Applications/QLC+.app/Contents/Resources/RGBScripts

* **Windows user dir:** %HOMEPATH%\\QLC+\\RGBScripts
* **Windows system dir:** C:\\QLC+\\RGBScripts

RGB Script API
==============

Foundation
----------

The scripts must be self-executing, i.e. when they are evaluated, the script itself is put inside an anonymous function that executes itself and returns an object that contains the required API functions:

```javascript
(
    function() { // Anonymous function starts here
        var algo = new Object;
        return algo; // Return the script object
    } // Anonymous function ends here
)() // Anonymous function is executed here upon evaluation
```

Properties
----------

However, a script with nothing more than an empty object does nothing, no matter how self-executing it might be. You must also declare some **properties** for the returned object so that QLC+ knows how to use the script and to show it to the user (you). So, you need to declare the following properties for the returned script object:

* **apiVersion:** The API version that the script follows. Currently, the accepted values are '1' or '2'.  
    apiVersion 1 allows simple scripting and easier coding, while apiVersion 2 offers advanced features [described below](#apiv2).  
    Any other value will cause the script to be treated as invalid.
* **name:** The name of your script. This name appears in the pattern selection box in the [RGB Matrix Editor](../rgb-matrix-editor)
* **author:** The name of the person who has written the script. **You.**
* **acceptColors (optional):** Informs QLC+ if the script can accept a start color, an end color or none.  
    'acceptColors = 0' means no colors are accepted/needed. It means that the script will autonomously generate the colors information for the matrix pixels.  
    'acceptColors = 1' means only the start color is needed by the script.  
    'acceptColors = 2' means both start and end colors will be accepted by the script.  
    If 'acceptColors' is not provided, QLC+ will default to value '2'.

With this in mind we add declarations for these three properties to the script:

```javascript
(
    function() {
        var algo = new Object;
        algo.apiVersion = 2; // Can be '1' or '2'
        algo.name = "My cool RGB script";
        algo.author = "Your name";
        algo.acceptColors = 2; // Can be '0', '1' or '2'
        return algo;
    }
)()
```

Functions
---------

Now we are getting to the actual business of producing data for the [RGB Matrix](/basics/glossary-and-concepts#rgb-matrix). The current API version uses two functions to achieve this:

* rgbMapStepCount(width, height)
* rgbMap(width, height, rgb, step)

No assumptions on the calling order or argument immutability should be made, i.e. do not cache the values from either function and assume that they are valid until the end of the world. The parameters might change at any point (usually when the user changes the matrix size, color or direction) thus invalidating any cached values.

### rgbMapStepCount(width, height)

When QLC+ calls this function, it wants to know the number of different RGB maps returned by the rgbMap() function, when the RGB matrix size is **width** times **height** pixels. It must always return the same result when called with the same **width** and **height** parameters again and the result must not change over time.

**Parameters:**

* **width:** The width of the grid
* **height:** The height of the grid
* **Return value:** Number of steps produced by rgbMap() with the given width and height parameters

So, now we add this support function to the script:

```javascript
(
    function() {
        var algo = new Object;
        algo.apiVersion = 1;
        algo.name = "My cool RGB script";
        algo.author = "Your name";

        algo.rgbMapStepCount = function(width, height) {
            ...
            return number_of_steps_when_width_is_oranges_and_height_is_jabberwocky;
        }

        return algo;
    }
)()
```

### rgbMap(width, height, rgb, step)

This function is the actual brains of the script. It produces two-dimensional arrays whose size MUST be **height** times **width**. I.e. the array returned from this function must contain **height** items and each of these items must be an array that contains **width** items that must be 32bit integers, representing an RGB color as understood by [QRgb](https://doc.qt.io/qt-5/qcolor.html#QRgb-typedef) without alpha channel (0x00RRGGBB). The **rgb** parameter is an integer-representation of the color selected by user in the [RGB Matrix Editor](../rgb-matrix-editor). The **step** parameter tells the step number requested by the RGB Matrix function and is guaranteed to be within (0, rgbMapStepCount(w, h) - 1).

**Parameters:**

* **width:** The width of the grid
* **height:** The height of the grid
* **rgb:** The color selected by user
* **step:** Current step number to produce (between 0 and rgbMapStepCount(w, h) - 1)
* **Return value:** An array containing \[height\] arrays each containing \[width\] integers

Just like the previous function, we also add this other one to the script. Now we have a full and ready template for any RGB script for your indulgence.

```javascript
(
    function() {
        var algo = new Object;
        algo.apiVersion = 1;
        algo.name = "My cool RGB script";
        algo.author = "Your name";

        algo.rgbMapStepCount = function(width, height) {
            ...
            return number_of_steps_when_width_is_oranges_and_height_is_jabberwocky;
        }

        algo.rgbMap = function(width, height, rgb, step) {
            ...
            return a_2d_array_of_arrays;
        }

        return algo;
    }
)()
```

API version 2
-------------

RGB Script API version 2 introduces the concept of **Properties**. With properties, a Script can interact with the QLC+ engine by exchanging parameters, thus extending the possibilities of a RGB Script.  
Examples of such properties can be the animation orientation, the number of objects to be rendered, etc..  
  
Adding properties to your script is fairly easy, but requires a specific syntax explained in this paragraph.  
Let's make an example:

    algo.orientation = 0;
    algo.properties = new Array();
    algo.properties.push("name:orientation|type:list|display:Orientation|values:Horizontal,Vertical|write:setOrientation|read:getOrientation");

The three lines above specifies the following:

1.  The script has an internal property represented by the variable 'orientation'
2.  Create the properties array. This is needed just once
3.  Push (add) the property description into the properties array. This is what the QLC+ engine will actually read to exchange data with the script

The third line is indeeed the most interesting and the syntax of the string stored in the properties array must be followed to avoid errors during the script loading.  
Attributes must be in the form '**name:value**' and each attribute must be separated from the others by a pipe '**|**' character.  
Following a table of the accepted attributes and the meaning of their values.  

|     |     |
| --- | --- |
| **Attribute name** | **Attribute value** |
| **name** | The name used by QLC+ to uniquely identify a property. The same name must not be used twice in a script. It is a good practice to use the same name of the 'algo' variable that actually stores the property. |
| **type** | This is a fundamental attribute to allow QLC+ to correctly handle a property. The 'type' attribute must be placed before the 'values' attribute.  <br>Accepted values are:  <br><br>* **list**: defines a list of strings that will be displayed by the QLC+ RGB Matrix Editor<br>* **range**: defined a range of integer values that this property can handle<br>* **integer**: an integer value that QLC+ can exchange with the script<br>* **string**: a string that QLC+ can exchange with the script<br><br>The type attribute implicitely defines also how the QLC+ RGB Matrix editor will display the property. For example a 'list' is displayed like a drop down box, a 'range' and an 'integer' are displayed as a spin box, a 'string' is displayed as an editable text box. |
| **display** | An string that QLC+ will display in the RGB Matrix editor for the user. It is a good practice to use a meaningful and human readable string to allow users to immediately understand what a property does |
| **values** | This attribute can be applied only when type is 'list' or 'range'. It defines the possible values that the property can assume. A 'list' type will look like 'one,two,three' while a 'range' type will look like '2,10'.  <br>Values must be separated by a comma ',' character. A 'range' type cannot have more than two values. |
| **write** | Defines the name of the Script function that QLC+ should call to write the property value.  <br>In this function the Script's writer should implement all the necessary actions to apply the property change.  <br>The write method of the example above is the following:  <br><br>    algo.setOrientation = **function**(_orientation) {<br>	if (_orientation == "Vertical")<br>	  algo.orientation = 1;<br>	else<br>	  algo.orientation = 0;<br>    } |
| **read** | Defines the name of the Script function that QLC+ should call to read the property value.  <br>The read method of the example above is the following:  <br><br>    algo.getOrientation = **function**() {<br>        if (algo.orientation == 1)<br>	  return "Vertical";<br>	else<br>	  return "Horizontal";<br>    } |

Development Tool
----------------

There is a development tool available in the QLC+ source repository that makes it easier to debug and test your custom scripts with a web browser. To use the tool, you must download the following two files to a directory on your hard disk, open the **devtool.html** file with your browser and follow its instructions:

* [devtool.html](https://raw.githubusercontent.com/mcallegari/qlcplus/master/resources/rgbscripts/devtool.html)
* [devtool.js](https://raw.githubusercontent.com/mcallegari/qlcplus/master/resources/rgbscripts/devtool/devtool.js)

(Right-click and "Copy Link Location" works probably best)

Example Script: Full Columns
----------------------------

```javascript
 /*
      Q Light Controller Plus
      fullcolumns.js

      Copyright (c) Heikki Junnila

      Licensed under the Apache License, Version 2.0 (the "License");
      you may not use this file except in compliance with the License.
      You may obtain a copy of the License at

          https://www.apache.org/licenses/LICENSE-2.0.txt

      Unless required by applicable law or agreed to in writing, software
      distributed under the License is distributed on an "AS IS" BASIS,
      WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
      See the License for the specific language governing permissions and
      limitations under the License.
    */

    (
    
    /\*\*
     \* This algorithm produces fully-lit columns, meaning all pixels on a single
     \* column are lit together.
     */
    function()
    {
        var algo = new Object;
        algo.apiVersion = 1;
        algo.name = "Full Columns";
        algo.author = "Heikki Junnila";

        /\*\*
         \* The actual "algorithm" for this RGB script. Produces a map of
         \* size($width, $height) each time it is called.
         \*
         \* @param step The step number that is requested (0 to (algo.rgbMapStepCount - 1))
         \* @param rgb Tells the color requested by user in the UI.
         \* @return A two-dimensional array\[height\]\[width\].
         */
        algo.rgbMap = function(width, height, rgb, step)
        {
            var map = new Array(height);
            for (var y = 0; y < height; y++)
            {
                map\[y\] = new Array();
                for (var x = 0; x < width; x++)
                {
                    if (x == step)
                        map\[y\]\[x\] = rgb;
                    else
                        map\[y\]\[x\] = 0;
                }
            }

            return map;
        }

        /\*\*
         \* Tells RGB Matrix how many steps this algorithm produces with size($width, $height)
         \*
         \* @param width The width of the map
         \* @param height The height of the map
         \* @return Number of steps required for a map of size($width, $height)
         */
        algo.rgbMapStepCount = function(width, height)
        {
            // Each column is lit completely at a time, so because there are $width
            // columns in the map, the number of steps must be $width to light all
            // columns per round.
            return width;
        }

        return algo;
    }
    )()
```