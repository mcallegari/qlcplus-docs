---
title: HID
date: '05:13 22-08-2023'
---

Introducció
------------

El connector HID admet el  [sistema HID](https://en.wikipedia.org/wiki/Human_interface_device) a Windows i Linux.  
HID és una forma genèrica de mapejar dispositius d'entrada/sortida com joysticks/palanques de control, ratolí tàctil, teclats, ratolins, etc.  
El connector QLC+ HID té com a objectiu admetre només joysticks i l'adaptador FX5 USB DMX.

Requisits
------------

No es necessita cap requeriment especial per a aquest connector. Assegureu-vos que el vostre sistema operatiu està reconeixent el dispositiu que utilitzareu. A Linux és possible que necessiteu alguns mòduls del nucli (normalment proporcionats per distribucions modernes) i a Windows un controlador proporcionat pel fabricant del dispositiu.

Joysticks
---------

QLC+ intenta detectar les funcionalitats específiques de joystick, com ara eixos i botons, com a canals individuals que es poden mapejar als Ginys de la Consola Virtual.  
Els eixos i botons es mapegen per QLC+ en ordre seqüencial, de manera que, per exemple, si el joystick admet 2 eixos i 4 botons, apareixeran en els diàlegs de mapeig d'entrada com aquest:

* canal 1: Eix X
* canal 2: Eix Y
* canal 3: Botó 1
* canal 4: Botó 2
* canal 5: Botó 3
* canal 6: Botó 4

FX5 USB DMX
-----------

L'adaptador [FX5 USB DMX](https://fx5.de/) és compatible tant per a dades DMX de sortida com d'entrada. Consulta el manual del producte per a la connexió i els problemes peculiars.