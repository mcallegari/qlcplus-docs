---
title: 'Monitor DMX'
taxonomy:
    category:
        - docs
process:
    markdown: true
    twig: true
media_order: pan-tilt.png
---

El monitor DMX és una eina útil per fer un seguiment dels valors que s'estan enviant als universos de sortida. Només es mostra la informació relacionada amb els fixtures requerits. Les opcions de visualització del monitor no tenen cap efecte sobre l'adreçament del fixture real, després de tot, és només un **monitor**.  
El monitor DMX té dos modes de visualització: **vista DMX** i **vista 2D**.

Vista DMX
--------

La vista DMX mostra tots els fixtures del projecte, representant cada canal amb números i icones. Bàsicament representa cada canal en 3 files:

* La icona del grup de canals
* El número de canal
* El valor del canal

### Controls de la barra d'eines

| | |
| - | - |
| **Vista 2D** | Fent clic en aquest botó, és possible canviar al mode de vista 2D. |
| ![](/basics/fonts.png) | Canvia el tipus de lletra del monitor. Per evitar que els números parpellegin i saltin, heu de triar un tipus de lletra proporcional (p. ex. d'amplada fixa); per exemple, Mònaco, Andale o Courier. La propietat font és global, el que significa que no es desarà en el vostre projecte actual, però s'emmagatzemarà en la configuració principal de QLC+. |
| **Canals DMX** | Mostra els números de canal dels accessoris com a canals DMX absoluts; els números de canal van de l'1 al 512 a mesura que s'assignen a cada accessori. |
| **Canals relatius** | Mostra els números de canal dels accessoris en relació amb els accessoris, és a dir, els números de canal de cada accessori sempre comencen a partir de l'1. |
| **Valors DMX** | Mostra els valors del canal com a valors DMX absoluts (0-255). |
| **Percentatge de valors** | Mostra els valors del canal com a percentatges de 255 (0-100%). |
| **Universe** | Selecciona quin univers voleu monitoritzar. La primera entrada sempre és "Tots els universos" |

Vista 2D
-------

La vista 2D del monitor és una altra manera de representar els fixtures del vostre projecte que, en lloc de números, utilitza una previsualització gràfica intentant representar el màxim possible el resultat real d'un dispositiu emissor de llum.

Actualment, el monitor reflecteix:

* Dimmer mestre
* R/G/B
* C/M/Y
* Rodes de color, si contenen valor de color RGB. Els valors de dos colors no són compatibles
* Obturador, que està obert, tret que el nom de la capacitat contingui "close" o "blackout" (exemple: "Shutter Close")

En el mode de visualització 2D és possible seleccionar quins accessoris mostrar i la seva posició en una quadrícula que representa les dimensions d'un escenari real.  
La graella vol reproduir la vista frontal d'un escenari, però pots utilitzar-lo com a espai genèric com vulguis.  
Els elements gràfics es poden moure manualment arrossegant-los per la graella o, quan es fa clic, es poden configurar amb el panell Editor de fixtures del monitor que es mostrarà a la part dreta de la finestra.

### Controls de la barra d'eines

| | |
| - | - |
| **Vista DMX** | En fer clic en aquest botó, és possible canviar al mode de visualització DMX. |
| **Dimensions de la graella** | Estableix l'amplada i l'alçada de la graella de visualització 2D canviant els valors que es mostren a les dues caixes giratòries |
| **Unitats de graella** | Estableix les unitats de mesura de la graella de visualització 2D seleccionant la desitjada del menú desplegable. Les opcions possibles són metres i peus. |
| ![](/basics/edit_add.png) | Afegeix un fixture a la graella de visualització 2D. En fer clic en aquesta icona, es mostrarà el diàleg de selecció del fixture. Els fixtures que ja s'hagin afegit a la vista es mostraran en gris, ja que no és possible afegir el mateix accessori dues vegades |
| ![](/basics/edit_remove.png) | Elimina un element fix de la graella de visualització 2D. Si fas clic a aquesta icona, s'eliminarà el fixture seleccionat actualment. Un fixture es ressaltarà en groc quan se seleccioni. | 
| ![](/basics/image.png) | Obre el diàleg de selecció de la imatge de fons del monitor.<br>Aquí és possible triar entre 3 modes possibles:<br><br>**Sense fons**: la vista Monitor 2D no tindrà cap imatge de fons<br>**Fons comú**: la vista Monitor 2D mostrarà la imatge de fons escollida<br>**Llista de fons personalitzada**: en aquest mode és possible seleccionar una imatge de fons per a una funció QLC+ específica.<br>Fes clic als ![](/basics/edit_remove.png) botons ![](/basics/edit_add.png) i per afegir/eliminar funcions i la seva imatge de fons associada al monitor. Quan una funció d'aquesta llista s'iniciï, la imatge de fons de la vista 2D del monitor canviarà en conseqüència. |
| ![](/basics/label.png) | Mostra/oculta els noms dels fixtures sota la seva representació gràfica |

### Editor d'elements del Fixture

Quan es fa clic a un fixture, es ressaltarà en groc i l'editor d'elements del Monitor del Fixture es mostrarà al costat dret de la finestra.  
A continuació, els possibles paràmetres que es poden afinar:

| | |
| - | - |
| **Posició horitzontal** | Estableix la posició a l'eix X de la graella utilitzant les unitats de mesura de la graella |
| **Posició vertical** | Estableix la posició a l'eix de la graella Y utilitzant les unitats de mesura de la graella |
| **Rotació** | Estableix l'angle de rotació de l'element gràfic que representa el fixture seleccionat |
| **Gel de color** | Estableix el gel de color que s'aplicarà al fixture seleccionat actualment. Això és útil per a dimmers genèrics amb una bombeta tradicional, no emetent cap color per si mateix. Aquesta funció no té cap efecte sobre els fixtures LED RGB. |
| ![](/basics/fileclose.png) | Restableix un gel de color configurat prèviament |

### Visualització panoràmica/inclinació

La visualització de PANORÀMICA/INCLINACIÓ es mostra esquemàticament utilitzant anells/arcs de colors al voltant del fixture. L'arc **P**orpre mostra l'angle  de la **P**ANORÀMICA, i l'arc **T**urquesa mostra l'angle de la **I**NCLINACIÓ. Els punts grisos mostren els rangs de PANORÀMICA/INCLINACIÓ. Zero (mig de l'interval) és a la part inferior.

A la imatge següent, el rang de PANORÀMICA és de 660 graus i el rang d'inclinació és de 300 graus. La paella està a l'extrem en sentit contrari a les agulles del rellotge (-330 graus) i la inclinació és de -150 graus.

![](pan-tilt.png)
