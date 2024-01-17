---
title: 'Editor de Escenes'
---

L'editor d'escenes, com el seu nom indica, s'utilitza per editar les funcions de ![](/basics/scene.png) [Escena](/basics/glossary-and-concepts#escena). L'editor es divideix en pestanyes; amb la primera, pestanya **General**, controleu la llista de fixtures i [grups de canals](/basics/glossary-and-concepts#grups-de-canals) que participen en l'edició d'escena, juntament amb el nom de l'escena.  
Totes les pestanyes posteriors s'utilitzen per controlar els valors individuals del canal per a cada fixture i, si n'hi ha, els valors dels grups de canals.

Controls Generals de les Pestanyes
--------------------

A la part esquerra de la pantalla es mostren els botons per controlar els fixtures utilitzats a l'escena.

|     |     |
| --- | --- |
| **Nom de l'Escena** | Canvia el nom de l'escena. |
| ![](/basics/edit_add.png) | Afegeix un  [Fixture](/basics/glossary-and-concepts#fixtures) existent a l'escena. |
| ![](/basics/edit_remove.png) | Suprimiu de l'escena els [Fixture(s)](/basics/glossary-and-concepts#fixtures) seleccionats. |
| ![](/basics/check.png) | Activa tots els canals dels fixtures seleccionats. |
| ![](/basics/uncheck.png) | Desactiva tots els canals dels fixtures seleccionats. |

A la part dreta de la pantalla, es mostren els botons per controlar els [grups de canals](/basics/glossary-and-concepts#grups-de-canals) utilitzats a l'escena

|     |     |
| --- | --- |
| ![](/basics/check.png) | Activa tots els grups de canals seleccionats. |
| ![](/basics/uncheck.png) | Desactiva tots els grups de canals seleccionats. |


**Consell:** És útil saber que quan un grup de canals està marcat/desmarcat, els fixtures controlats pel grup s'afegiran automàticament al panell esquerre. Els canals controlats pel grup també s'habilitaran/inhabilitaran automàticament en cada fixture.

Pestanyes de Grups de Canals
-------------------

Aquesta pestanya només es mostrarà si se seleccionen un o més grups de canals a la pestanya General.  
Cada grup de canals es mostrarà amb un botó d'accés ràpid de macros ([Feu clic i aneu](/basics/glossary-and-concepts#click-and-go) si s'admet), una etiqueta amb el valor del grup, un fader i el nom del grup.

Pestanyes de Fixtures
------------

Cada fixture es representa amb la seva pròpia pestanya que conté controls lliscants per a cadascun dels canals del fixture. Cada canal es pot activar o desactivar amb una casella de selecció a la part superior de la unitat de canal. El valor de cada canal es pot establir escrivint el valor al quadre d'edició a la part superior del control lliscant o movent el control lliscant. Els canals que proporcionen múltiples funcions com ara gobos, colors, etc. també tenen un botó a sobre del control lliscant del canal - aquest botó es pot utilitzar per seleccionar directament una funció o capacitat específica proporcionada per aquest canal.  
**Consell**: La drecera de teclat per moure entre els quadres d'edició de valors dels canals és '**Tab**' per moure a la dreta i '**Maj + Tab**' per moure a l'esquerra.

### Estat del canal habilitat/inhabilitat

Si no s'ha habilitat un canal, l'escena no tocarà mai el valor d'aquest canal en particular.

Si s'ha habilitat un canal, l'escena canviarà el valor d'aquest canal al valor que es defineix a l'escena. Això és útil, per exemple, quan desitgeu controlar només el canal dimmer d'un fixture d'escàner -no voldríeu que l'escena toqui els canals panoràmica, inclinació, color o gobo de l'escàner quan només voleu esvair-lo o esvair-lo amb el canal dimmer.

### Controls

|     |     |
| --- | --- |
| ![](/basics/check.png) | Activa tots els canals des del fixture actual. En el mode de tots els canals, seleccioneu canals per a tots els fixtures. |
| ![](/basics/uncheck.png) | Desactiva tots els canals del fixture actual. En el mode de tots els canals, desactiveu els canals per a tots els fixtures. |
| ![](/basics/back.png) | Va a la pestanya anterior a la vista. Si la primera pestanya està seleccionada, aquesta anirà a l'última pestanya a la vista. Drecera de teclat: '**ALT+Esquerra**' |
| ![](/basics/forward.png) | Aneu a la pestanya següent a la vista. Si se selecciona l'última pestanya, aquesta anirà a la primera pestanya de la vista. Drecera de teclat: '**ALT+Dreta**' |
| ![](/basics/editcopy.png) | La funcionalitat Copia té 2 modes: <br><br>**Copia els valors** (i estats habilitats/inhabilitats) de tots els canals del fixture actual al porta-retalls.<br>**Copia només els canals seleccionats** (feu clic a la tecla CTRL, fons groc) al porta-retalls. |
| ![](/basics/editpaste.png) | Enganxa els valors des del porta-retalls al fixture actual. Si no s'ha seleccionat cap canal durant la «còpia», llavors tots els estats habilitats/inhabilitats s'enganxaran juntament amb els valors del canal. |
| ![](/basics/editcopyall.png) | La funcionalitat «Copia tot» té 2 modes:<br><br>**Copia tots els valors** (i estats habilitats/inhabilitats) de tots els canals que participen a l'escena.<br>**Copia només els canals seleccionats** (feu clic a la tecla CTRL, fons groc) a tots els altres fixtures que participen a l'escena. |
| ![](/basics/color.png) | Llança una eina de color per a seleccionar un color específic i establir aquest color al fixture actual; Aquesta característica només està habilitada per als fixtures que són capaços de barrejar el color CMY/RGB. |
| ![](/basics/xypad.png) | Llança una eina de posició (similar a [XYPad](/virtual-console/pad-xy) a la consola virtual) per seleccionar una posició de capçal/mirall per al fixture actual; Aquesta característica només està habilitada per als fixtures que tenen canals panoràmica o inclinació. Tots els caps del fixture actual es canviaran al mateix valor. |
| ![](/basics/speed.png) | Mostra/Oculta el giny selector de velocitat, utilitzat per ajustar els paràmetres de l'escena, com ara Fade In i Fade Out |
| ![](/basics/tabview.png) | Canvia entre «visualització de la pestanya» i «visualització de tots els canals». El primer mode mostrarà una pestanya per a cada fixture, mentre que el segon mostrarà una sola pestanya per a tots els fixtures |
| ![](/basics/blind.png) | Commuta el mode cec per al fixture seleccionat. |
| ![](/basics/record.png) | Clona l'escena actual i afegeix un nou pas al Chaser seleccionat de la llista desplegable al costat d'aquest botó |
