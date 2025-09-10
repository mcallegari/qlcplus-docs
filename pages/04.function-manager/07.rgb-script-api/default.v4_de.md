---
title: 'RGB-Skript API'
date: '03:56 22-08-2023'
---

Benutzer können ihre eigenen RGB-Skripte schreiben, um mit der Funktion [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix) eine benutzerdefinierte Grafikprojektion zu erstellen. Das Funktionsprinzip der Skripte besteht darin, eine Reihe von RGB-Karten zu erstellen, die jeweils einen Schritt in der Grafikanimation darstellen. Das Prinzip ist im Grunde dasselbe wie in Filmen: Der Zuschauer sieht ein bewegtes Bild, das in Wirklichkeit nur ein nacheinander abgespielter Strom statischer Bilder ist, die eine Illusion von Bewegung erzeugen.

Die Skripte selbst sind in [ECMAScript](https://de.wikipedia.org/wiki/ECMAScript) geschrieben, das auch als [JavaScript](https://de.wikipedia.org/wiki/JavaScript) bekannt ist. Beachten Sie, dass die Sprache [Groß-/Kleinschreibung beachtet](https://de.wikipedia.org/wiki/Case_sensitivity) und standardmäßig den [Kamel-Groß-/Kleinschreibungsregeln](https://en.wikipedia.org/wiki/Naming_convention_%28programming%29#JavaScript) folgt, stellen Sie also sicher, dass Sie alles richtig schreiben und achten Sie besonders auf die erforderlichen API-Funktionen.

Skriptdateien sollten nach dem Namen des Skripts benannt werden und die Erweiterung **.js** haben. Abhängig von der Plattform sollten die Dateien entweder im QLC+-Systemskriptverzeichnis oder vorzugsweise im Benutzerskriptverzeichnis abgelegt werden:

* **Linux-Benutzerverzeichnis:** ~/.qlcplus/rgbscripts/
* **Linux-Systemverzeichnis:** /usr/share/qlcplus/rgbscripts/

* **OSX-Benutzerverzeichnis:** ~/Library/Application Support/QLC+/RGBScripts
* **OSX-Systemverzeichnis:** /Applications/QLC+.app/Contents/Resources/RGBScripts

* **Windows-Benutzerverzeichnis:** %HOMEPATH%\\QLC+\\RGBScripts
* **Windows-Systemverzeichnis:** C:\\QLC+\\RGBScripts

## RGB-Skriptsyntax

### Stiftung


Die Skripte müssen selbstausführend sein, d.h. wenn sie ausgewertet werden, wird das Skript selbst in eine anonyme Funktion eingefügt, die sich selbst ausführt und ein Objekt zurückgibt, das die erforderlichen API-Funktionen enthält:

```javascript
(
    function() { // Anonymous function starts here
        var algo = new Object;
        return algo; // Return the script object
    } // Anonymous function ends here
)() // Anonymous function is executed here upon evaluation
```

### Eigenschaften


Allerdings bewirkt ein Skript, das nichts weiter als ein leeres Objekt enthält, nichts, egal wie selbstausführend es auch sein mag. Sie müssen auch einige **Eigenschaften** für das zurückgegebene Objekt deklarieren, damit QLC+ weiß, wie das Skript verwendet wird und es dem Benutzer (Ihnen) angezeigt wird. Daher müssen Sie die folgenden Eigenschaften für das zurückgegebene Skriptobjekt deklarieren:

* **apiVersion:** Die API-Version, der das Skript folgt. Derzeit sind die akzeptierten Werte „1“ oder „2“.
    apiVersion 1 ermöglicht einfaches Scripting und einfacheres Codieren, während apiVersion 2 erweiterte Funktionen [unten beschrieben](#api-version-2) bietet.
    Jeder andere Wert führt dazu, dass das Skript als ungültig behandelt wird.
* **Name:** Der Name Ihres Skripts. Dieser Name erscheint im Musterauswahlfeld im [RGB-Matrix-Editor](../rgb-matrix-editor)
* **Autor:** Der Name der Person, die das Drehbuch geschrieben hat. **Du.**
* **acceptColors (optional):** Informiert QLC+, ob das Skript eine Startfarbe, eine Endfarbe oder keine akzeptieren kann.
    „acceptColors = 0“ bedeutet, dass keine Farben akzeptiert/benötigt werden. Das bedeutet, dass das Skript selbstständig die Farbinformationen für die Matrixpixel generiert.
    „acceptColors = 1“ bedeutet, dass das Skript nur die Startfarbe benötigt.
    „acceptColors = 2“ bedeutet, dass sowohl Start- als auch Endfarben vom Skript akzeptiert werden.
    Wenn „acceptColors“ nicht angegeben ist, verwendet QLC+ standardmäßig den Wert „2“.

Vor diesem Hintergrund fügen wir dem Skript Deklarationen für diese drei Eigenschaften hinzu:

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

### Funktionen

Jetzt kommen wir zum eigentlichen Geschäft der Datenerstellung für die [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix). Die aktuelle API-Version nutzt dazu zwei Funktionen:

* rgbMapStepCount(Breite, Höhe)
* rgbMap(Breite, Höhe, RGB, Schritt)

Es sollten keine Annahmen über die Aufrufreihenfolge oder die Unveränderlichkeit der Argumente gemacht werden, d. h. die Werte von keiner der Funktionen zwischenspeichern und davon ausgehen, dass sie bis zum Ende der Welt gültig sind. Die Parameter können sich jederzeit ändern (normalerweise, wenn der Benutzer die Matrixgröße, -farbe oder -richtung ändert), wodurch alle zwischengespeicherten Werte ungültig werden.

### rgbMapStepCount(Breite, Höhe)

Wenn QLC+ diese Funktion aufruft, möchte es die Anzahl der verschiedenen RGB-Karten wissen, die von der Funktion rgbMap() zurückgegeben werden, wenn die RGB-Matrixgröße **Breite** mal **Höhe** Pixel beträgt. Es muss immer das gleiche Ergebnis zurückgeben, wenn es erneut mit denselben Parametern **Breite** und **Höhe** aufgerufen wird, und das Ergebnis darf sich im Laufe der Zeit nicht ändern.

**Parameter:**

* **Breite:** Die Breite des Rasters
* **Höhe:** Die Höhe des Rasters
* **Rückgabewert:** Anzahl der Schritte, die von rgbMap() mit den angegebenen Breiten- und Höhenparametern erzeugt werden

Nun fügen wir dem Skript diese Unterstützungsfunktion hinzu:

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

### rgbMap(Breite, Höhe, rgb, step)
Diese Funktion ist das eigentliche Gehirn des Skripts. Es werden zweidimensionale Arrays erzeugt, deren Größe **Höhe** mal **Breite** sein MUSS. D.h. Das von dieser Funktion zurückgegebene Array muss **Höhe**-Elemente enthalten und jedes dieser Elemente muss ein Array sein, das **Breite**-Elemente enthält, die 32-Bit-Ganzzahlen sein müssen und eine RGB-Farbe im Sinne von [QRgb](https://doc.qt.io/archives/qt-5.15/qcolor.html#QRgb-typedef) ohne Alphakanal (0x00RRGGBB). Der Parameter **rgb** ist eine ganzzahlige Darstellung der vom Benutzer im [RGB-Matrix-Editor](../rgb-matrix-editor) ausgewählten Farbe. Der Parameter **step** gibt die von der RGB-Matrixfunktion angeforderte Schrittnummer an und liegt garantiert innerhalb von (0, rgbMapStepCount(w, h) – 1).

**Parameter:**

* **Breite:** Die Breite des Rasters
* **Höhe:** Die Höhe des Rasters
* **rgb:** Die vom Benutzer ausgewählte Farbe
* **Schritt:** Aktuelle zu erstellende Schrittnummer (zwischen 0 und rgbMapStepCount(w, h) - 1)
* **Rückgabewert:** Ein Array mit \[height\]-Arrays, die jeweils \[width\]-Ganzzahlen enthalten

Genau wie die vorherige Funktion fügen wir auch diese andere zum Skript hinzu. Jetzt haben wir eine vollständige und fertige Vorlage für jedes RGB-Skript zu Ihrem Vergnügen.
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

### API version 2

RGB Script API Version 2 führt das Konzept der **Eigenschaften** ein. Mit Eigenschaften kann ein Skript durch den Austausch von Parametern mit der QLC+-Engine interagieren und so die Möglichkeiten eines RGB-Skripts erweitern.
Beispiele für solche Eigenschaften können die Animationsausrichtung, die Anzahl der zu rendernden Objekte usw. sein.

Das Hinzufügen von Eigenschaften zu Ihrem Skript ist recht einfach, erfordert jedoch eine bestimmte Syntax, die in diesem Absatz erläutert wird.
Machen wir ein Beispiel:v

```javascript
algo.orientation = 0;
algo.properties = new Array();
algo.properties.push("name:orientation|type:list|display:Orientation|values:Horizontal,Vertical|write:setOrientation|read:getOrientation");
```

Die drei Zeilen oben geben Folgendes an:

1. Das Skript verfügt über eine interne Eigenschaft, die durch die Variable „orientation“ dargestellt wird.
2. Erstellen Sie das Eigenschaftenarray. Dies wird nur einmal benötigt
3. Fügen Sie die Eigenschaftsbeschreibung in das Eigenschaftenarray ein (fügen Sie sie hinzu). Dies ist, was die QLC+-Engine tatsächlich liest, um Daten mit dem Skript auszutauschen
Die dritte Zeile ist in der Tat die interessanteste und die Syntax der im Eigenschaften-Array gespeicherten Zeichenfolge muss befolgt werden, um Fehler beim Laden des Skripts zu vermeiden.
Attribute müssen das Format „**Name:Wert**“ haben und jedes Attribut muss durch ein Pipe-Zeichen „**|**“ von den anderen getrennt sein.
Nachfolgend eine Tabelle der akzeptierten Attribute und der Bedeutung ihrer Werte.

|     |     |
| --- | --- |
| **Attributname** | **Attributwert** |
| **Name** | Der von QLC+ verwendete Name zur eindeutigen Identifizierung einer Eigenschaft. Der gleiche Name darf in einem Skript nicht zweimal verwendet werden. Es empfiehlt sich, denselben Namen wie die Variable „algo“ zu verwenden, in der die Eigenschaft tatsächlich gespeichert ist. |
| **Typ** | Dies ist ein grundlegendes Attribut, damit QLC+ eine Eigenschaft korrekt verarbeiten kann. Das Attribut „type“ muss vor dem Attribut „values“ platziert werden.  <br>Akzeptierte Werte sind: <br><br>**list**: definiert eine Liste von Zeichenfolgen, die vom QLC+ RGB Matrix Editor angezeigt werden<br>**range**: definiert einen Bereich von ganzzahligen Werten, die Diese Eigenschaft kann verarbeiten<br>**float**: ein Float-Wert, den QLC+ mit dem Skript austauschen kann<br>**string**: ein String, den QLC+ mit dem Skript austauschen kann<br><br>Das Typattribut Definiert implizit auch, wie der QLC+ RGB-Matrix-Editor funktioniert zeigt die Eigenschaft an. Beispielsweise wird eine „Liste“ wie ein Dropdown-Feld angezeigt, ein „Bereich“ und eine „Ganzzahl“ werden als Drehfeld angezeigt, eine „Zeichenfolge“ wird als bearbeitbares Textfeld angezeigt. |
| **Anzeige** | Eine Zeichenfolge, die QLC+ dem Benutzer im RGB-Matrix-Editor anzeigt. Es empfiehlt sich, eine aussagekräftige und für Menschen lesbare Zeichenfolge zu verwenden, damit Benutzer sofort verstehen, was eine Eigenschaft bewirkt |
| **Werte** | Dieses Attribut kann nur angewendet werden, wenn der Typ „Liste“ oder „Bereich“ ist. Es definiert die möglichen Werte, die die Eigenschaft annehmen kann. Der Typ „Liste“ sieht wie „eins, zwei, drei“ aus, während der Typ „Bereich“ wie „2,10“ aussieht.  <br>Werte müssen durch ein Komma „,“ getrennt werden. Ein Bereichstyp kann nicht mehr als zwei Werte haben. |
| **schreiben** | Definiert den Namen der Skriptfunktion, die QLC+ aufrufen soll, um den Eigenschaftswert zu schreiben.  <br>In dieser Funktion sollte der Autor des Skripts alle notwendigen Aktionen implementieren, um die Eigenschaftsänderung anzuwenden.  <br>Die Schreibmethode des obigen Beispiels ist die folgende: <br><br> algo.setOrientation = **function**(_orientation) {<br> if (_orientation == "Vertical")<br> algo. Orientierung = 1;<br> else<br> algo.orientation = 0;<br> } |
| **lesen** | Definiert den Namen der Skriptfunktion, die QLC+ aufrufen soll, um den Eigenschaftswert zu lesen.  <br>Die Lesemethode des obigen Beispiels ist die folgende: <br><br> algo.getOrientation = **function**() {<br> if (algo.orientation == 1)<br> return "Vertical ";<br> else<br> return "Horizontal";<br> } |

### Entwicklungstool

Im QLC+-Quell-Repository steht ein Entwicklungstool zur Verfügung, welches das Debuggen und Testen Ihrer benutzerdefinierten Skripte mit einem Webbrowser erleichtert. Befolgen Sie die folgenden Anweisungen, um das Tool zu verwenden:

#### 1. Laden Sie den QLC+-Quellcode herunter

1. Besuchen Sie das QLC+-GitHub-Repository:  
   [https://github.com/mcallegari/qlcplus](https://github.com/mcallegari/qlcplus)
2. **Option A:** Als ZIP herunterladen  
   - Klicken Sie auf **Code → ZIP herunterladen**  
   - Entpacken Sie den Inhalt in einen Ordner auf Ihrem Computer
3. **Option B:** Das gesamte Repository mit Git klonen
   Wenn Sie mit Git vertraut sind, können Sie das Repository klonen, indem Sie folgenden Befehl ausführen:
   ```bash
   git clone https://github.com/mcallegari/qlcplus.git
   ```

#### 2. Das Entwicklungstool finden

Navigieren Sie im QLC+-Quellordner zu:
```
resources/rgbscripts/devtool.html
```

#### 3. Das Tool im Webbrowser öffnen

- Doppelklicken Sie auf `devtool.html` oder  
- Klicken Sie mit der rechten Maustaste auf → **Öffnen mit** → Ihrem bevorzugten Webbrowser

---

### Beispielskript: Vollständige Spalten

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


### API version 3

Version 3 der RGB-Skript-API führt den Zugriff auf **rawColors** ein und bietet Skripten die Möglichkeit, die im RGB-Matrix-Editor ausgewählten Farben direkt zu verwenden. Diese Verbesserung ermöglicht dynamischere und synchronisiertere Lichteffekte, insbesondere bei mehrfarbigen Animationen.

#### Schlüsselfunktionen
- **Zugriff auf ausgewählte Farben:** Skripte können jetzt genau die vom Benutzer im RGB-Matrix-Editor ausgewählten Farben abrufen, um eine präzise Synchronisierung mit Bühnenbeleuchtungs-Setups zu ermöglichen.
- **Erweiterte Mehrfarbenunterstützung:** Durch den Zugriff auf das gesamte Spektrum der vom Benutzer ausgewählten Farben können Skripte komplexere und abwechslungsreichere Animationen erstellen.

#### rawColors benutzen

Der Parameter „rawColors“ wird an die Funktion „rgbMap“ übergeben und enthält ein Array der vom Benutzer ausgewählten RGB-Werte. Dadurch können Skripte Animationen basierend auf Benutzereingaben dynamisch anpassen.

Ein Beispiel für die Verwendung der neuen API finden Sie inballs.js.