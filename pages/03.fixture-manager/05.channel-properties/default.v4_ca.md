---
title: 'Channel Properties'
date: '11:32 21-08-2023'
media_order: channelmodifier.png
---

Aquesta finestra mostra un arbre amb elements anidats en una estructura d'Universos/Fixtures/Canals.  
A la part dreta del canal de cada fixture es mostren les opcions disponibles que es poden configurar per modificar el comportament de cada canal individual.

Propietats dels Canals
-------------------

|     |     |
| --- | --- |
| **Pot esvair-se** | Determina si s'inclou o s'exclou un canal en les transicions d'esvaïment de QLC+.  <br>Per defecte tots els canals es veuen afectats pels temps d'entrada i sortida de l'esvaïment de les funcions de QLC+.  <br>Quan aquesta propietat no està marcada, un canal no s'esvairà, el que significa que una transició d'esvaïment de 20 a 200, establirà el canal immediatament a 200.  <br>Això és útil, per exemple, per als canals de Panoràmica/Inclinació dels capçals mòbils, on voleu que els motors evitin l'esvaïment, però aneu immediatament al valor final. |
| **Comportament** | Força el comportament del canal segons les regles [HTP](/basics/glossary-and-concepts#htp) i [LTP](/basics/glossary-and-concepts#ltp). En canviar el comportament d'un canal, la llista desplegable ressaltarà en vermell, mostrant evidències que els canals han estat modificats.  <br>**Nota: Utilitzeu aquesta funcionalitat només si sabeu el que esteu fent i enteneu completament com funciona l'HTP i l'LTP** |
| **Modificador** | Els modificadors de canals són una eina potent per modificar el comportament d'un canal actuant al final del càlcul del valor DMX, just abans de la modificació [Grand Master](/basics/glossary-and-concepts#grand-master).  <br>Per defecte tots els canals seguiran una regla lineal, el que significa que el valor original DMX serà igual al valor DMX de sortida. (0-0, 1-1, ... , 255-255) <br>En fer clic en aquest botó, es mostrarà el panell Editor Modificador de Canal (descrit a sota). |


Quan es tracta de molts fixtures del mateix tipus, és possible que vulgueu marcar la casella de selecció «Aplica els canvis als fixtures del mateix tipus».  
Això vol dir que canviar una propietat de canal afectarà tots els canals del mateix tipus i fixture de la llista.  
Això us pot estalviar força temps a l'hora de configurar els vostres projectes per primera vegada.

Editor de Modificadors de Canals
-----------------------

L'editor modificadors de canal es presenta així:

![](channelmodifier.png)

A la part dreta de la finestra, es mostra una llista de les plantilles modificadores disponibles.  
En fer clic en una plantilla de la llista, es mostrarà la previsualització de la corba a la part esquerra de la finestra.  
Una corba modificadora està composta per un nombre de línies que representen com s'ha de modificar un canal DMX quan canvia el seu valor.  
Cada línia comença i acaba amb un anomenat "manipulador". Un modificador pot tenir un nombre virtualment infinit de manipuladors, però sempre ha d'haver-hi un manipulador en el valor DMX 0 i un manipulador en el valor DMX 255 per cobrir tot l'interval de valors DMX.  
Bàsicament, la coordenada X de la vista prèvia representa el valor DMX original i la coordenada Y representa el valor DMX modificat.  
Quan feu clic en un manipulador, això es torna més clar, ja que els camps per sobre de la vista prèvia de la corba s'omplen amb els valors esmentats.  
Els controladors es poden moure simplement amb el ratolí arrossegant-los o canviant manualment els valors dels valors DMX originals o modificats.

Per a crear una plantilla nova, seleccioneu una plantilla existent, doneu-li un nom nou i afegiu/eliminar els controladors segons sigui necessari amb els botons ![](/basics/edit_add.png) i ![](/basics/edit_remove.png).  
En acabar, només heu de fer clic al botó ![](/basics/filesave.png) i la vostra plantilla es desarà a la carpeta de plantilles d'usuari. Consulteu la pàgina [Preguntes i respostes](/basics/questions-and-answers) per localitzar aquesta carpeta.

Plantilles de Modificadors de Canal
--------------------------

QLC+ ofereix algunes plantilles que poden cobrir els casos més comuns.

|     |     |
| --- | --- |
| **Sempre complet** | Fixeu ("aparcar") el valor del canal al 100% (255), independentment d'altres mecanismes QLC+ (excepte l'apagada i el pas de l'univers). Útil per exemple per als canals dimmer. |
| **Sempre la Meitat** | Fixeu ("aparcar") el valor del canal al 50% (127). Útil per mantenir els canals Pan/Tilt en una posició neutra. |
| **Sempre Apagat** | Fixeu ("aparcar") el valor del canal a 0% (0). Útil per desactivar fixtures incorrectes. |
| **Exponencial Profund** |     |
| **Exponencial Mitjà** |     |
| **Exponencial poc Profund** |     |
| **Exponencial simple** |     |
| **Invertit** | Inverteix un canal de Panoràmica/Inclinació on un producte no tingui aquesta funció per defecte de fàbrica. |
| **Lineal** | Corba per defecte, igual que quan no s'estableix cap modificador. |
| **Logarítmic Profund** | Aquesta plantilla pot millorar les transicions d'esvaïment dels fixtures basats en LED, intentant retornar-los a un efecte més lineal |
| **Logarítmic Mitjà** |
| **Logarítmic poc Profund** |
| **Preescalfament 5%** | Pot allargar la vida útil de la làmpada mantenint-la com a mínim del 5% |
| **Llindar** | Converteix el canal dimmer a commutar el canal (desactivat per sota de 128, ple a sobre) |