---
title: Animació
date: '03:09 22-08-2023'
---

Un giny d'Animació és una eina completa per funcionar amb les [Matrius RGB](/basics/glossary-and-concepts#matriu-rgb) del vostre projecte.  
Mostra diversos elements gràfics per controlar completament una matriu durant els espectacles en directe.  
El més important és que permet definir una sèrie d'anomenats "controls personalitzats" per recordar ràpidament els predefinits, colors i propietats i aplicar-los immediatament a una matriu en execució.

Introducció
------------

En fer clic a la icona ![](/basics/animation.png), s'afegirà un giny d'animació a la vostra consola virtual.  
Per defecte, el giny mostrarà 4 elements:

* Al costat esquerre, un control lliscant per controlar la reproducció i la intensitat d'una Matriu RGB.  
    El moviment del lliscador/slider es pot associar a una línia d'entrada del controlador extern.  
    Es comporta exactament com un [Slider de la Consola Virtual](../slider) en mode de reproducció.
* A la part superior dreta, dos botons [Click & Go](/basics/glossary-and-concepts#click-and-go) per establir el color d'inici i final de la matriu. En fer clic en ells durant el [Mode d'Operació](/basics/glossary-and-concepts#modes), es mostrarà un menú selector de colors.
* A sota dels dos botons, un menú desplegable per a seleccionar l'animació de Matriu desitjada o preestablerta.

L'espai que hi ha a sota del menú d'animació, està reservat per als Controls Personalitzats. Es poden definir a la finestra de configuració del giny i cadascun d'ells es mostrarà com un sol botó.  
Cada control personalitzat es pot associar a una combinació de tecles o a una línia d'entrada de controlador extern.

Configuració
-------------

Es pot configurar un giny d'animació amb el botó de propietats ![](/basics/edit.png) que es troba a la barra d'eines de la consola virtual o fent doble clic al giny mateix.

### Pàgina General

|     |     |
| --- | --- |
| **Nom del Giny** | Defineix el nom amigable del giny, que es mostra a sobre dels dos botons Click & Go |
| **Funció Matriu** | Mostra el nom de la Funció  [Matriu RGB](/basics/glossary-and-concepts#matriu-rgb) que està assignada al giny.<br><br>![](/basics/attach.png) Assigna una funció Matriu RGB al giny <br>![](/basics/detach.png) Desacobla la funció actual del giny |
| **Aplica canvis de color i predefinits immediatament** | Seleccioneu si els canvis a la Matriu s'han d'aplicar immediatament o al següent bucle de la Matriu |
| **Entrada Externa** | Podeu adjuntar un canal d'entrada extern des d'un dispositiu d'entrada (com un tauler lliscador) al control lliscant del giny de manera que no sempre hàgiu d'utilitzar el ratolí o la pantalla tàctil per controlar la reproducció o la intensitat de la matriu.<br><br>**Univers d'entrada**: L'univers d'entrada des del qual voleu obtenir dades d'entrada per al control lliscant.<br>**Canal d'entrada**: El canal d'entrada individual dins de l'univers d'entrada seleccionat que voleu utilitzar per controlar el control.<br>**Detecta automàticament**: Quan s'activa, podeu moure/premeu un botó/controlador/knob al vostre maquinari d'entrada extern i s'assignarà automàticament al control lliscant. L'última combinació es mostra als quadres de text quan QLC+ rep dades d'entrada. Si no veieu res en els quadres, la connexió d'entrada pot tenir un problema que primer heu de solucionar.<br>**Trieu...**: Mostra el diàleg [Seleccioneu el Canal d'Entrada](../select-input-channel) que podeu utilitzar per a seleccionar un canal d'entrada manualment. |

### Pàgina de Controls Personalitzats

Un control personalitzat és una "drecera" a una funcionalitat d'una Matriu RGB.  
Bàsicament podeu controlar totes les opcions que s'utilitzen normalment a l'[Editor de Matrius RGB](/function-manager/rgb-matrix-editor) durant la fase de disseny d'un espectacle. L'única opció que no podeu controlar és el grup Fixture que utilitza una funció Matrix RGB.  
En aquesta pàgina de configuració l'usuari pot definir qualsevol nombre de controls personalitzats en funció de les necessitats durant una actuació en directe.  
Cada control personalitzat es representa com un botó a la disposició del giny d'animació i es pot fer clic amb el ratolí o prémer en una pantalla tàctil, o associar-se a una combinació de tecles o a una línia d'entrada de controlador extern.

|     |     |
| --- | --- |
| **![](/basics/color.png) Afegeix un color d'inici** | Afegeix un control de color d'inici de Matriu. En fer clic en aquest botó, es mostrarà una eina de selecció de color.  <br>El botó que es mostra a la disposició del giny tindrà un color de fons que representarà el seleccionat i la lletra **S**. |
| **![](/basics/color.png) Afegeix un color final** | Afegeix un control de color final a la Matriu. En fer clic en aquest botó, es mostrarà una eina de selecció de color.  <br>El botó que es mostra a la disposició del giny tindrà un color de fons que representarà el seleccionat i la lletra **E**. |
| **![](/basics/fileclose.png) Afegeix el reinici del color final** | Afegeix un control de restabliment de color final de la Matriu.  <br>El botó que es mostra a la disposició del giny tindrà un color de fons gris i quan es prem, es restablirà el color final de la matriu actual (si s'ha establert prèviament) |
| **![](/basics/script.png) Afegeix un predefinit** | Afegeix un control preestablert a la Matriu. En fer clic en aquest botó, es mostrarà un diàleg per a la selecció predefinida.  <br>El botó que es mostra a la disposició del giny tindrà un color de fons gris i una etiqueta corresponent al nom del predefinit. |
| **![](/basics/fonts.png) Afegeix text** | Afegeix un control d'animació de text a la  Matriu. En fer clic en aquest botó, es mostrarà un diàleg que requerirà introduir el text desitjat per a ser animat a la Matriu.  <br>El botó que es mostra a la disposició del giny tindrà un color de fons gris i una etiqueta corresponent al text triat. |
| **![](/basics/edit_remove.png) Elimina** | Elimina el control seleccionat de la llista de controls. | f |
