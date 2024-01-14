---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Capítol 5

# Gestor de Shows

El Gestor de Shows s'ha introduït a QLC+ a partir de la versió 4.0.0, després del fork o bifurcació del codi original de QLC el 5 de novembre de 2012.

Aquesta funció està destinada a donar als usuaris la possibilitat de configurar un espectacle en funció del temps d'una manera amigable i completament gràfica.  
La interfície gràfica mostra una vista multipista, típica dels seqüenciadors d'àudio o programaris d'edició de vídeo, i amb ella els usuaris poden col·locar les [Funcions](/basics/glossary-and-concepts#functions) QLC+ en el lloc i el temps desitjats a la vista.  
Show Manager ofereix molta flexibilitat durant la creació d'un [Show](/basics/glossary-and-concepts#show) gràcies al seu enfocament visual. Un cop entesos els elements bàsics, és molt fàcil crear, moure o editar les funcions existents i millorar un Show afegint-hi noves pistes.

Casos típics d'ús dels Shows són aquells concerts on una banda toca cançons seguint un metrònom i l'espectacle de llum sempre ha de ser el mateix, seguint la música.  
Un altre cas són els espectacles d'entreteniment visual, on ballarins o cantants segueixen alguna música i les llums creen l'atmosfera en el moment adequat.

El Gestor de Shows impulsa els usuaris a fer un gran ús de la funció Seqüència. Aquesta és l'explicació de la diferència entre un Chaser i una Seqüència.

Seqüències vs Chasers
--------------------

Encara que les funcions [Sequence](/basics/glossary-and-concepts#sequence) i [Chaser](/basics/glossary-and-concepts#chaser) tinguin algun punt en comú, no són el mateix.  
Si encara no ho has fet, et convidem a tornar a llegir les seves definicions a la pàgina [Conceptes bàsics i glossari](/basics/glossary-and-concepts) d'aquesta documentació.  
Les principals diferències són:

**Pasos**: Els passos d'un Chaser poden representar qualsevol funció QLC+, mentre que els passos d'una seqüència representen valors diferents del la mateixa [Escena](/basics/glossary-and-concepts#scene).  
    En altres paraules, un Chaser és una funció independent, mentre que una Seqüència només pot existir a sobre d'una Escena.
La raó d'això és, com s'ha esmentat abans, l'enfocament visual del Show Manager. Si una pista d'un Show és la representació gràfica d'una escena, llavors és més intuïtiu pensar que cada seqüència creada en aquesta pista és una funció que controla els valors d'aquesta escena.

**Ordre**: Els chasers es poden reproduir en qualsevol ordre (Endavant, Endarrera, Ping-Pong, Aleatori) mentre que al Gestor de Show, les seqüències sempre es reprodueixen des del principi fins al final (Endavant). De nou, això està relacionat amb l'aspecte visual del Gestor de Shows, on la reproducció té una direcció natural de temps cap endavant.  
    D'altra banda, les Seqüències creades amb el Gestor de funcions poden tenir les mateixes propietats d'ordre dels Chasers.

**Edició**: L'enfocament d'edició entre Seqüències i Chaser també és diferent.  
    Normalment el flux de treball d'un Chaser és: creeu una funció i afegiu-la al Chaser com a pas.  
    El flux de treball d'una Seqüència és: creeu una escena, creeu una Seqüència a sobre, afegiu-hi passos.  
    L'enfocament de Seqüència pot ser molt eficaç quan dissenyes un espectacle de llums si pots predeterminar quins accessoris utilitzaràs. Un altre avantatge important de l'edició de Seqüències és que quan creeu un nou pas, els valors del pas anterior es copien en el nou. Per tant, l'usuari només ha d'ajustar les diferències entre ells.  
    Si creareu 500 passos i tots són diferents, llavors les Seqüències i els Chasers trigaran gairebé el mateix temps a ser creats.

**Sincronització**: un altre avantatge important d'utilitzar Seqüències en un Show és que un Show es pot estendre fàcilment (o reduir) mentre que amb un Chaser tindreu dificultats per a sincronitzar les noves funcions amb les existents.  
    Un exemple. Diguem que el teu projecte controla 50 fixtures que són una barreja de caps mòbils, PARs i escàners. En algun moment compreu un parell de làsers i voleu que s'activin en escenes existents en moments precisos. El Gestor de Shows et permet fer-ho en pocs minuts! Només cal afegir els 2 nous fixtures al projecte, afegir una pista als Shows afectats pel canvi i crear unes Seqüències per controlar els làsers.  
    La funcionalitat de represa del Gestor de Shows també us estalviarà molt temps en provar els canvis nous.  
    Amb Chasers probablement hauries de fer front a [Col·leccions](/basics/glossary-and-concepts#collection) complexes i revisar els temps d'uns quants passos abans de trobar la combinació adequada.

Mostra els controls de la barra d'eines del Gestor de Shows
-----------------------------

|     |     |     |
| --- | --- | --- |
| ![](/basics/show.png) | CTRL+H | Creeu un nou [Show](/basics/glossary-and-concepts#show). Un Show es representa com un espai de treball multipista on es poden afegir pistes, seqüències i elements d'àudio |
| **Llista de Shows** |     | Aquesta llista desplegable llista els Shows creats actualment. En fer clic en un Show es mostrarà. |
| ![](/basics/edit_add.png) | CTRL+N | Creeu una pista nova o afegiu funcions existents al Show. En fer clic en aquest botó es mostra una finestra, la qual permet realitzar les següents operacions:<br><br>**Crea una pista nova**: Això crea una pista buida nova que servirà com a contenidor per a les seqüències i les funcions d'àudio.<br>**Importa una escena existent**: Això crearà una pista nova i una seqüència de 10 segons amb un sol pas que representarà l'escena seleccionada.<br>**Importa una seqüència existent**: aquesta operació escaneja les pistes existents i si troba una pista ja vinculada a l'escena lligada de la seqüència, després afegeix la seqüència a aquesta pista a la posició del cursor.  <br> Si no es troba cap pista compatible, es crearà una pista nova i estarà vinculada a l'escena lligada de la seqüència.<br>**Importa un  [Chaser existent](/basics/glossary-and-concepts#chaser)**: afegeix una funció de Chaser a la posició del cursor a la pista seleccionada. Si no hi ha cap pista disponible, en crearà una de nova.<br>**Importa un [Àudio](/basics/glossary-and-concepts#audio) existent**: afegeix una funció d'àudio a la posició del cursor a la pista seleccionada. Si no hi ha cap pista disponible, en crearà una de nova.<br>**Importa un [EFX](/basics/glossary-and-concepts#efx) existent**: afegeix una funció EFX a la posició del cursor a la pista seleccionada. Si no hi ha cap pista disponible, en crearà una de nova.<br>**Importa una matriu RGB existent [](/basics/glossary-and-concepts#rgb-matrix)**: afegeix una funció Matriu RGB a la posició del cursor a la pista seleccionada. Si no hi ha cap pista disponible, en crearà una de nova.<br><br>Un Show pot tenir un nombre pràcticament infinit de pistes. |
| ![](/basics/sequence.png) | CTRL+E | Creeu un element nou [Seqüència](/basics/glossary-and-concepts#sequence) i enllaceu-lo a la pista seleccionada. |
| ![](/basics/audio.png) | CTRL+A | Crea un element d'[Àudio](/basics/glossary-and-concepts#audio) nou. Un element d'àudio simplement representa un fitxer d'àudio. Es poden afegir elements d'àudio a qualsevol pista, però si voleu crear una pista separada per a ells, simplement creeu una pista nova.  <br>**Nota:** És possible mostrar la previsualització de la forma d'ona d'un element d'àudio simplement fent clic dret i seleccionant els canals que voleu mostrar (mono, canal esquerre, canal dret, estèreo) <br>**Avís:** Tot i que QLC+ us ho permet, no és possible reproduir dos fitxers d'àudio simultàniament. Especialment al Windows, és possible que experimenteu fallades no desitjades. |
| ![](/basics/editcopy.png) | CTRL+C | Copia l'element seleccionat al porta-retalls del QLC+ |
| ![](/basics/editpaste.png) | CTRL+V | Enganxa el contingut del porta-retalls del QLC+ a la posició del cursor. En realitzar aquesta operació es realitzen dues comprovacions:<br><br>**Superposició**: comprova si l'element que enganxareu es superposa amb un element existent a la pista seleccionada<br>**Validesa**: Si esteu enganxant una seqüència, QLC+ verificarà que el contingut de la seqüència sigui compatible amb la pista seleccionada actualment |
| ![](/basics/editdelete.png) | Suprimeix | Suprimeix l'element seleccionat. Això pot ser una seqüència, un element d'àudio o una pista. Tingueu en compte que suprimir una pista també suprimirà totes les seves seqüències/àudios fills.  <br>**Nota: El Gestor de Shows només realitzarà una "eliminació visual" de les funcions. Per eliminar-los permanentment, utilitzeu el [Gestor de Funcions](/function-manager)** |
| ![](/basics/color.png) | CTRL+R | Assigna un color personalitzat a l'element seleccionat |
| ![](/basics/lock.png) | CTRL+K | Bloqueja o desbloqueja l'element seleccionat. Un cop bloquejat un element, ja no es pot arrossegar a la línia de temps |
| ![](/basics/speed.png) | CTRL+T | Obriu una finestra on podreu ajustar el temps d'inici i la durada total de l'element seleccionat. El comportament d'aquest últim dependrà de l'element seleccionat.  <br>En ítems d'àudio i vídeo no fa res.  <br>A Seqüències i Chasers estirarà tots els temps dels passos per adaptar-los a la durada desitjada.  <br>A les EFX i Matrius RGB es mostraran algunes opcions addicionals, que permeten estirar la funció original o fer un bucle de la funció fins que s'assoleixi la durada desitjada. |
| ![](/basics/grid.png) | CTRL+G | Activa/desactiva la funcionalitat "Ajusta a la quadrícula". La vista s'omplirà amb barres verticals corresponents als marcadors de capçalera (temps o BPM) <br>Ajustar a la quadrícula corregirà els elements arrossegant-los a la barra de referència més propera |
| **00:00:00.000** |     | Aquest camp mostra la posició del temps del cursor tant si s'atura o s'activa la reproducció |
| ![](/basics/player_play.png)![](/basics/player_pause.png) | Espai | Inicia l'actual Show la reproducció des de la posició del cursor, o fes-hi una pausa i deixa les llums enceses. |
| ![](/basics/player_stop.png) | CTRL+Espai | Atura la reproducció del Show actual. En fer clic una vegada s'aturarà el cursor a la posició actual per a reprendre'l més tard. En fer clic dues vegades es restaurarà el cursor a 0 segons.  <br>**Consell:** En reprendre un espectacle amb pistes d'àudio, tingueu en compte que la precisió de l'àudio depèn dels formats de fitxer que utilitzeu. Per exemple, el resum d'arxius MP3 no és especialment precís, mentre que el resum d'arxius Wave sí. |
| **Marcadors de Temps** |     | Aquest menú desplegable us permet triar la divisió de temps desitjada a mostrar per al vostre Show.  <br>Això pot ser 'Temps'. 'BPM 4/4', 'BPM 3/4' or 'BPM 2/2' |
| **BPMs** |     | Quan se selecciona un mode de divisió de temps de BPM, aquest camp us permet decidir el BPM adequat per a establir-lo al Show. Això oscil·la entre 20 i 240.  <br>Això pot ser molt útil quan es tracta de música electrònica o programes sincronitzats amb BPM |

Només 4 passos
------------

El Gestor de Shows s'ha configurat per a ser utilitzat de manera ràpida i senzilla. Bàsicament, amb només 4 passos es pot crear un [Show](/basics/glossary-and-concepts#show):

#### 1. Afegeix un Show nou ![](/basics/show.png)

En primer lloc, heu d'afegir un nou Show a la vista. Això crea una vista multipista buida sense pistes i sense elements, a punt per omplir.  
Apareixerà una finestra emergent que demanarà un nom per a assignar-lo al Show. Posteriorment es pot canviar el nom amb el [Gestor de Funcions](/function-manager), mitjançant el panell [Editor de Shows](/function-manager/show-editor).

#### 2. Afegeix una pista ![](/basics/edit_add.png)

Quan afegiu una pista, una finestra emergent us demanarà que seleccioneu una funció existent o que en creeu una de nova amb un nom predeterminat.  
En acabar, es crearà una pista nova. Totes les seqüències creades en aquesta pista actuaran només en l'escena associada, no afectant cap de les altres pistes.  
Una pista de nova creació s'establirà automàticament com a activa. Una pista activa té una llum verda al costat esquerre.  
Es pot establir una pista en els estats de ![](../images/track-mute.png) silenci i ![](../images/track-solo.png) solo. L'estat silenci exclourà la pista de la reproducció, mentre que l'estat solo silenciarà totes les altres pistes del Show.  
En fer clic dret sobre una pista, és possible moure-la cap amunt ![](/basics/up.png) o cap avall ![](/basics/down.png) per a l'ordenació lògica.  
Un cop seleccionada, una pista mostrarà el seu [Editor d'Escenes](/function-manager/scene-editor) a la part inferior de la pantalla.

#### 3. Afegeix algunes [Funcions](/basics/glossary-and-concepts#function)

Quan s'ha activat una pista, podeu afegir ràpidament una funció ![](/basics/sequence.png) [Seqüència](/basics/glossary-and-concepts#sequence) o una funció d'![](/basics/audio.png) [Àudio](/basics/glossary-and-concepts#audio) prement els botons de la barra d'eines.  
Altrament, fent clic al botó ![](/basics/edit_add.png), és possible importar funcions QLC+ existents i afegir-les a la línia de temps del Show.  
Es col·locarà un element nou a la posició del cursor, però sempre és possible moure'l al temps desitjat simplement arrossegant-lo al llarg de la línia de temps.  
Un element no es pot moure a una altra pista, ja que està lligat a la pista on s'ha creat originalment.  
Un element es pot copiar ![](/basics/editcopy.png), enganxar ![](/basics/editpaste.png) o suprimir ![](/basics/editdelete.png) amb les icones de la barra d'eines. L'element enganxat es col·locarà a la posició actual del cursor.  
El color de fons de l'element es pot canviar amb la icona de la barra d'eines ![](/basics/color.png). El color assignat es desarà al fitxer del projecte.  
Un cop seleccionat, un element mostrarà el seu Editor de Funcions específic a la part dreta de la pantalla. En fer clic dret a un element es mostrarà un menú contextual, mostrant les següents opcions:

* **Previsualització**: Aquesta opció només està disponible en elements d'àudio. Mostrarà la previsualització de la forma d'ona per als canals dret, esquerre o estèreo quan estigui disponible
* **Alinea al cursor**: Aquesta opció mourà l'element seleccionat a la posició del cursor
* ![](/basics/lock.png)**Bloqueja/Desbloqueja**: Un cop bloquejat un element, ja no es pot arrossegar a la línia de temps

Seguiu el pas 4 per entendre com omplir una Seqüència

#### 4. Editeu les Funcions

Un cop s'hagi creat un element, ara és el moment d'editar-lo.  
**Tingueu en compte** que la diferència entre un Chaser i una Seqüència és que una Seqüència està lligada a la pista (per tant, a l'escena) on s'ha creat. Per tant, en afegir un pas, QLC+ no demanarà seleccionar una funció en particular, sinó que sempre utilitzarà els canals de la mateixa Escena.  
Quan editeu una funció, veureu que l'element canvia a la vista multipista, donant una retroalimentació immediata per alinear-se a altres elements o punts particulars en el temps.  
Els temps d'entrada (Fade In) i sortida(Fade Out) de l'esvaïment es mostraran com a línies diagonals sobre els elements a la vista multipista, mentre que els diferents passos/pistes es dividiran per línies verticals.


Per augmentar la complexitat de l'espectacle, es poden afegir més funcions. Només has de repetir els passos anteriors en funció de les teves necessitats.

I finalment... reproduir! ![](/basics/player_play.png)
---------------------------------------------

Quan finalment s'ha creat un espectacle complet, només es pot reproduir fent clic a la icona de Reproduir.  
La reproducció sempre comença des de la posició actual del cursor. La posició del cursor es pot canviar fent clic a la línia de temps.