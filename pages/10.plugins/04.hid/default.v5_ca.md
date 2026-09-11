---
title: HID
date: '05:13 22-08-2023'
---

Introducció
------------

El connector HID admet el [sistema HID](https://en.wikipedia.org/wiki/Human_interface_device) a Windows i Linux.  
HID és una forma genèrica de mapejar dispositius d'entrada/sortida com joysticks, ratolins tàctils, teclats, ratolins, etc.  
El connector HID de QLC+ té com a objectiu admetre només joysticks i l'adaptador FX5 USB DMX.

Requisits
------------

No es necessita cap requisit especial per a aquest connector. Assegureu-vos només que el vostre sistema operatiu reconegui efectivament el dispositiu que utilitzareu. A Linux és possible que necessiteu alguns mòduls del nucli (normalment proporcionats per les distribucions modernes) i a Windows un controlador proporcionat pel fabricant del dispositiu.

Joysticks
---------

QLC+ intenta detectar les funcionalitats específiques del joystick, com ara eixos i botons, com a canals individuals que es poden mapejar als ginys de la vostra Consola Virtual.  
Els eixos i botons són mapejats per QLC+ en ordre seqüencial, de manera que, per exemple, si el vostre joystick admet 2 eixos i 4 botons, apareixeran en els diàlegs de mapeig d'entrada així:  

* canal 1: Eix X
* canal 2: Eix Y
* canal 3: Botó 1
* canal 4: Botó 2
* canal 5: Botó 3
* canal 6: Botó 4

Interfície Nodle USB DMX
-----------------------

La interfície Nodle USB DMX està disponible en dues versions: la versió en kit per autoconstruir s'anomena
[Nodle U1](https://www.dmxcontrol-projects.org/en/projects/nodle-u1-interface.html) i la versió prefabricada s'anomena [Nodle R4S](https://www.dmxcontrol-projects.org/en/projects/nodle-r4s-interface.html) (ready for show).

Totes dues poden rebre i enviar dades DMX de manera normal, però també poden fusionar dades dmx internament. Quan s'activa mitjançant el diàleg
de configuració, el dispositiu fusiona qualsevol dada DMX que provingui de QLC+ (si se selecciona com a sortida) amb totes
les dades DMX que provenen de l'entrada del dispositiu de manera HTP (Highest Takes Precedence).

Si s'estableix, el mode de fusió persisteix fins i tot quan es tanca QLC+, sempre que el dispositiu estigui alimentat.
D'aquesta manera el dispositiu és transparent a les dades DMX entrants i simplement les reenvia.

El dispositiu emmagatzema en un buffer les dades DMX entrants. Així, quan la connexió DMX entrant s'interromp, l'últim
fotograma DMX es repeteix fins que arriben més dades DMX o el dispositiu es reinicia.

Consulteu el manual del producte per obtenir més informació o per a la resolució de problemes.

FX5 USB DMX
-----------

Tot i que ja no està disponible, l'adaptador FX5 USB DMX encara és compatible tant per a la sortida com per a l'entrada
de dades DMX. Ofereix les mateixes característiques que el Nodle USB DMX. Consulteu el manual del producte per a la connexió i els problemes peculiars.
</content>
