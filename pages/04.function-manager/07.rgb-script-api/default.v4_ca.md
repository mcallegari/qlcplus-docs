---
title: 'API Scripts RGB'
date: '03:56 22-08-2023'
---

Els usuaris poden escriure els seus propis scripts RGB per produir una projecció gràfica personalitzada amb la funció [Matriu RGB](/basics/glossary-and-concepts#matriu-rgb). El principi d'operació dels scripts és produir un nombre de mapes RGB que cada un representa un pas en l'animació gràfica. El principi és bàsicament el mateix que en les pel·lícules: el públic observa una imatge en moviment, que en realitat només és un flux seqüencial d'imatges estàtiques que produeixen una il·lusió de moviment.

Els scripts estan escrits en [ECMAScript](https://en.wikipedia.org/wiki/ECMAScript), que també es coneix com [JavaScript](https://en.wikipedia.org/wiki/JavaScript). Tingueu en compte que llenguatge és [sensible a les majúscules i minúscules](https://en.wikipedia.org/wiki/Case_sensitivity) i com a estàndard de-facto segueix les [regles de cas de camell](https://en.wikipedia.org/wiki/Naming_convention_%28programming%29#JavaScript), assegureu-vos que ho escriviu tot correctament i presteu especial atenció a les característiques de l'API requerides.

Els fitxers d'script s'han de nomenar amb el nom de l'script i han de tenir una extensió **.js**. Depenent de la plataforma, els fitxers s'han de col·locar al directori d'scripts del sistema QLC+ o, preferiblement, al directori d'scripts de l'usuari:

* **Directori d'usuari de Linux:** ~/.qlcplus/rgbscripts/
* **Directori del sistema Linux:** /usr/share/qlcplus/rgbscripts/

* **Directori d'usuari OSX:**  ~/Library/Application Support/QLC+/RGBScripts
* **Directori del sistema OSX:** /Applications/QLC+.app/Contents/Resources/RGBScripts

* **Directori d'usuari de Windows:** %HOMEPATH%\\QLC+\\RGBScripts
* **Directori del sistema Windows:** C:\\QLC+\\RGBScripts

Sintaxi de l'Script RGB
==============

Fonaments
----------

Els scripts s'han d'autoexecutar, és a dir, quan s'avaluen, el propi script es posa dins d'una funció anònima que s'executa i retorna un objecte que conté les funcions API requerides:

```javascript
(
    function() { // La funció anònima comença aquí
        var algo = new Object;
        return algo; // Return the script object
    } // La funció anònima acaba aquí
)() // La funció anònima s'executa aquí en avaluar
```

Propietats
----------

No obstant això, un script amb res més que un objecte buit no fa res, per molt que s'autoexecuti. També heu de declarar **propietats** per a l'objecte retornat perquè QLC+ sàpiga com utilitzar l'script i mostrar-lo a l'usuari (vostè). Per tant, heu de declarar les propietats següents per a l'objecte script retornat:

* **apiVersion:** La versió de l'API que segueix l'script. Actualment, els valors acceptats són '1' o '2'.  
    apiVersion 1 permet un scripting senzill i una codificació més fàcil, mentre que apiVersion 2 ofereix funcions avançades que [es descriuen a continuació](#apiv2).  
    Qualsevol altre valor farà que l'script es tracti com a no vàlid.
* **name:** El nom del vostre script. Aquest nom apareix al quadre de selecció de patrons de l'editor de matrius RGB](../rgb-matrix-editor) [
* **author:** El nom de la persona que ha escrit el guió. **Tu.**
* **acceptColors (opcional):** Informa QLC+ si l'script pot acceptar un color inicial, un color final o cap.  
    "acceptColors = 0" significa que no s'accepten ni es necessiten colors. Significa que l'script generarà de manera autònoma la informació de colors per als píxels de la matriu.  
    'acceptColors = 1' vol dir que l'script només necessita el color inicial.  
    "acceptColors = 2" significa que el guió acceptarà els colors inicial i final.  
    Si no es proporciona "acceptColors", QLC+ tindrà per defecte el valor «2».

Amb això en ment afegim declaracions per a aquestes tres propietats a l'script:

```javascript
(
    function() {
        var algo = new Object;
        algo.apiVersion = 2; // Pot ser '1' o '2'
        algo.name = "El meu fantàstic script RGB";
        algo.author = "El teu nom";
        algo.acceptColors = 2; // Pot ser '0', '1' o '2'
        return algo;
    }
)()
```

Funcions
---------

Ara estem arribant al negoci real de produir dades per a la matriu RGB](/basics/glossary-and-concepts#rgb-matrix)[. La versió actual de l'API utilitza dues funcions per aconseguir-ho:

* rgbMapStepCount(amplada, alçada)
* rgbMap(amplada, alçada, rgb, pas)

No s'han de fer suposicions sobre l'ordre de crida o la immutabilitat de l'argument, és a dir, no s'han de guardar els valors de cap de les dues funcions i assumir que són vàlids fins a la fi del món. Els paràmetres poden canviar en qualsevol punt (normalment quan l'usuari canvia la mida, el color o la direcció de la matriu) invalidant així qualsevol valor de la memòria cau.

### rgbMapStepCount(amplada, alçada)

Quan QLC+ crida aquesta funció, vol saber el nombre de mapes RGB diferents retornats per la funció rgbMap(), quan la mida de la matriu RGB és **amplada** vegades **alçada** píxels. Sempre ha de retornar el mateix resultat quan es crida amb la mateixa amplada** i altura **** paràmetres de nou i el resultat no ha de canviar amb el temps.

**Paràmetres:**

* **amplada:** l'amplada de la graella
* **alçada:** L'alçada de la quadrícula
* **Valor de retorn:** Nombre de passos produïts per rgbMap() amb els paràmetres d'amplada i alçada indicats

Per tant, ara afegim aquesta funció de suport a l'script:

```javascript
(
    function() {
        var algo = new Object;
        algo.apiVersion = 1;
        algo.name = "El meu fantàstic script RGB";
        algo.author = "El teu nom";

        algo.rgbMapStepCount = function(amplada, alçada) {
            ...
            return number_of_steps_when_width_is_oranges_and_height_is_jabberwocky;
        }

        return algo;
    }
)()
```

### rgbMap(amplada, alçada, rgb, pas)

Aquesta funció és el cervell real de l'script. Produeix matrius bidimensionals la mida de les quals HA DE ser **alçada** vegades **amplada**. És a dir, la matriu retornada d'aquesta funció ha de contenir **alçada** elements i cadascun d'aquests elements ha de ser una matriu que contingui **amplada** elements que han de ser enters de 32 bits, representant un color RGB tal com s'entén per [QRgb](https://doc.qt.io/qt-5/qcolor.html#QRgb-typedef) sense canal alfa (0x00RRGGBB). El paràmetre **rgb** és una representació entera del color seleccionat per l'usuari a l'editor de matrius RGB](../rgb-matrix-editor). El paràmetre **pas** indica el nombre de passos sol·licitat per la funció Matrix RGB i es garanteix que està dins (0, rgbMapStepCount(w, h) - 1).

**Paràmetres:**

* **amplada:** l'amplada de la graella
* **alçada:** L'alçada de la quadrícula
* **rgb:** El color seleccionat per l'usuari
* **pas:** Número de pas actual a produir (entre 0 i rgbMapStepCount(w, h) - 1)
* **Retorna valor:** Una matriu que conté \[alçada\] matrius que contenen \[amplada\] enters

Igual que la funció anterior, també afegim aquesta altra a l'script. Ara tenim una plantilla completa i preparada per a qualsevol script RGB per a la vostra indulgència.

```javascript
(
    function() {
        var algo = new Object;
        algo.apiVersion = 1;
        algo.name = "El meu fantàstic script RGB";
        algo.author = "El teu nom";

        algo.rgbMapStepCount = function(amplada, alçada) {
            ...
            return number_of_steps_when_width_is_oranges_and_height_is_jabberwocky;
        }

        algo.rgbMap = function(amplada, alçada, rgb, pas) {
            ...
            return a_2d_array_of_arrays;
        }

        return algo;
    }
)()
```

Versió 2 de la API
-------------

RGB Script API versió 2 introdueix el concepte de **Propietats**. Amb les propietats, un Script pot interactuar amb el motor QLC+ intercanviant paràmetres, ampliant així les possibilitats d'un Script RGB.  
Exemples d'aquestes propietats poden ser l'orientació de l'animació, el nombre d'objectes a renderitzar, etc.

Afegir propietats a l'script és bastant fàcil, però requereix una sintaxi específica explicada en aquest paràgraf.  
Posem un exemple:

```javascript
algo.orientation = 0;
algo.properties = new Array();
algo.properties.push("name:orientation|type:list|display:Orientation|values:Horizontal,Vertical|write:setOrientation|read:getOrientation");
```

Les tres línies anteriors especifica les següents:

1. L'script té una propietat interna representada per la variable 'orientació'
2. Crea la matriu de propietats. Només cal fer-ho una vegada
3. Empeny (afegeix) la descripció de la propietat a la matriu de propietats. Això és el que el motor QLC+ llegirà realment per intercanviar dades amb l'script

La tercera línia és la més interessant i s'ha de seguir la sintaxi de la cadena emmagatzemada a la matriu de propietats per evitar errors durant la càrrega de l'script.  
Els atributs han de tenir la forma '**name:value**' i cada atribut ha d'estar separat dels altres per un caràcter pipe '**|**'.  
Seguint una taula dels atributs acceptats i el significat dels seus valors.

|     |     |
| --- | --- |
| **Nom de l'atribut** | **Valor de l'atribut** |
| **nom** | El nom utilitzat per QLC+ per identificar una propietat de manera única. El mateix nom no s'ha d'utilitzar dues vegades en un script. És una bona pràctica utilitzar el mateix nom de la variable 'algo' que realment emmagatzema la propietat. |
| **tipus** | Aquest és un atribut fonamental per a permetre que QLC+ manegi correctament una propietat. L'atribut «type» s'ha de col·locar abans de l'atribut «values».  Els valors<br> acceptats són:  <br><br>**list**: defineix una llista de cadenes que es mostraran a l'<br>**interval** de l'editor de matrius QLC+ RGB: defineix un interval de valors enters que aquesta propietat pot gestionar<br>**integer**: un valor enter que QLC+ pot intercanviar amb la<br>** cadena** d'script: una cadena que QLC+ pot intercanviar amb l'script<br><br>L'atribut type defineix implícitament també com l'editor de matrius QLC+ RGB mostrarà la propietat. Per exemple, una «llista» es mostra com una llista desplegable, un «interval» i un «enter» es mostren com un quadre de selecció, una «cadena» es mostra com un quadre de text editable. |
| **visualització** | Una cadena que QLC+ mostrarà a l'editor RGB Matrix per a l'usuari. És una bona pràctica utilitzar una cadena llegible per a permetre als usuaris entendre immediatament el que fa una propietat |
| **valors** | Aquest atribut només es pot aplicar quan el tipus és «list» o «range». Defineix els possibles valors que la propietat pot assumir. Un tipus de «llista» s'assemblarà a «un, dos, tres», mentre que un tipus de «interval» s'assemblarà a «2,10».  <br>Els valors han d'estar separats per un caràcter ',' coma. Un tipus «interval» no pot tenir més de dos valors. |
| **escriure** | Defines the name of the Script function that QLC+ should call to write the property value.  <br>En aquesta funció, l'escriptor de l'script ha d'implementar totes les accions necessàries per aplicar el canvi de propietat.  <br>El mètode d'escriptura de l'exemple anterior és el següent<br><br>: algo.setOrientation = **function**(_orientation) {	<br>if (_orientation == "Vertical")	  <br>algo.orientation = 1;	<br>else	  <br>algo.orientation = 0;<br>} |
| **llegeix** | Defineix el nom de la funció Script que QLC+ ha de cridar per a llegir el valor de la propietat.  <br>El mètode de lectura de l'exemple anterior és el següent<br><br>: algo.getOrientation = **function**() {<br>if (algo.orientation == 1)	  <br>return "Vertical";	<br>else	  <br>return "Horizontal";<br>} |

Eina de desenvolupament
----------------

Hi ha una eina de desenvolupament disponible al repositori de fonts QLC+ que facilita la depuració i prova dels vostres scripts personalitzats amb un navegador web. Per utilitzar l'eina, heu de descarregar els dos fitxers següents a un directori del disc dur, obrir el fitxer **devtool.html** amb el vostre navegador i seguir les seves instruccions:

* [devtool.html](https://raw.githubusercontent.com/mcallegari/qlcplus/master/resources/rgbscripts/devtool.html)
* [devtool.js](https://raw.githubusercontent.com/mcallegari/qlcplus/master/resources/rgbscripts/devtool/devtool.js)

(El clic dret i "Copia la ubicació de l'enllaç" probablement funcionen millor)

Script d'exemple: Columnes completes
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
     \* Aquest algorisme produeix columnes completament il·luminades, el que significa tots els píxels en un sol
     \* Les columnes estan il·luminades juntes.
     */
    function()
    {
        var algo = new Object;
        algo.apiVersion = 1;
        algo.name = "Columnes completes";
        algo.author  = "Heikki Junnila";

        /\*\*
         \* L'«algorisme» real per a aquest script RGB. Produeix un mapa de
         \* size($width, $height) cada vegada que es crida.
         \*
         \* @param step El número de pas que es sol·licita (0 to (algo.rgbMapStepCount - 1))
         \* @param rgb Indica el color sol·licitat per l'usuari a la interfície d'usuari.
         \* @return Una matriu bidimensional\[alçada\]\[amplada\].
         */
        algo.rgbMap = funció(amplada, alçada, rgb, pas)
        {
            var map = new Array(alçada);
            for (var y  = 0; y < alçada; y++)
            {
                map\[y\] = new Array();
                for (var x = 0; x < amplada; x++)
                {
                    if (x == pas)
                        map\[y\]\[x\] = rgb;
                    else
                        map\[y\]\[x\] = 0;
                }
            }

            return map;
        }

        /\*\*
         \* indica a la matriu RGB quants passos produeix aquest algorisme amb la mida($amplada, $alçada)
         \*
         \* @param width L'amplada del mapa
         \* @param height The height of the map
         \* @return Nombre de passos necessaris per fer un mapa de mida($amplada, $alçada)
         */
        algo.rgbMapStepCount = function(amplada, alçada)
        {
            // Cada columna s'il·lumina completament a la vegada, de manera que hi ha $width
            // columnes en el mapa, el nombre de passos ha de ser $width per a il·luminar-ho tot
            // columnes per ronda.
            return amplada;
        }

        return algo;
    }
    )()
```
