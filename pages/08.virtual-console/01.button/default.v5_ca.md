---
title: Button
date: '14:26 21-08-2023'
---

Un **Button** és el giny més senzill de la [Virtual Console](/virtual-console):
prem-lo per activar una funció. És el component bàsic de la majoria de
consoles — un botó per cada escena, chase o efecte que vulguis disparar.

Adjunta una funció arrossegant-la des del Function Manager fins al botó, o
des de la configuració del botó.

## Settings

* **Attached Function** — la funció que controla aquest botó. Utilitza
  **Detach the current function** per eliminar-la.

* **Pressure behaviour** — què fa prémer el botó:
  * **Toggle Function on/off** — inicia la funció a la primera pulsació,
    l'atura a la següent. El botó es manté encès mentre la funció s'executa.
  * **Flash Function (only for Scenes)** — executa l'escena només mentre es
    manté premut el botó, i després l'atura. Amb un temps de **Fade out**,
    l'aspecte de flaix s'esvaeix en deixar anar el botó.
  * **Toggle Blackout** — activa i desactiva el blackout de tot l'equipament.
  * **Stop all Functions** — atura totes les funcions en execució (un botó
    de pànic).
  * **Adjust Function intensity** — el botó estableix la intensitat d'una
    funció a un nivell fix en lloc d'iniciar-la o aturar-la.

* **Flash properties** (es mostren per al comportament Flash):
  * **Override priority / Force LTP** — fa que el flaix tingui prioritat
    sobre altres funcions que controlen els mateixos canals, de manera que
    l'aspecte de flaix guanyi mentre es manté premut.

## Tips

* Combina botons amb un [Solo Frame](../solo-frame) perquè en prémer un botó
  s'aturin automàticament els altres — ideal per a una fila d'aspectes
  mútuament excloents.
* Afegeix una **entrada externa** o una **drecera de teclat** (pestanya
  External controls) per disparar el botó des de maquinari o des del teclat.
