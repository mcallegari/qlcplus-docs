---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

**DMX Dump** captura els valors que estàs enviant actualment a la sortida i els desa
en una **Scene**. És la manera més ràpida de construir una escena: defineix un look
a mà utilitzant les eines de canal, la DMX view o el Simple Desk, i després "bolca"
aquest look en una funció que podràs recuperar més endavant.

## Com funciona

A mesura que canvies els valors dels canals manualment, QLC+ fa un seguiment de tots
els canals que has tocat — aquests són els **valors de bolcat**. Són els candidats que
s'escriuran en una escena quan facis el bolcat.

El botó **DMX Dump** es troba a la barra d'eines superior de l'aplicació (una petita
icona de "bolcat"). Una **bombolla** vermella al botó mostra quants canals hi ha
capturats actualment. Quan la bombolla mostra `0`, encara no s'ha tocat res i no hi
ha res a bolcar.

Pots esborrar els valors capturats en qualsevol moment sense fer el bolcat utilitzant
**Reset dump channels** al panell dret (drecera **Ctrl+R**). Els valors capturats
també es reinicien automàticament en certes situacions, com en iniciar un nou projecte.

> El botó de bolcat només funciona quan es permet l'edició de funcions.

## Iniciar un bolcat

Hi ha dues maneres d'obrir el diàleg de bolcat:

* **Fes clic** al botó DMX Dump de la barra d'eines.
* **Arrossega** el botó DMX Dump sobre una funció al Function Manager. Això
  preselecciona aquesta funció com a escena existent per bolcar-hi (vegeu més avall).

## El diàleg DMX Channel Dump

El diàleg té dues seccions.

### Target Scene

Tria on van els valors capturats:

* **Dump to a new Scene** — crea una nova escena. Es suggereix un nom per defecte
  (*New Scene N*) al quadre de text; canvia'l pel que vulguis.
* **Dump to existing Scene** — afegeix els valors capturats a una escena que ja
  tinguis. La destinació és l'escena actualment seleccionada al Function Manager; si
  no n'hi ha cap de seleccionada, aquesta opció mostra *(None selected)*. (Si arrossegues
  el botó de bolcat sobre una funció, aquesta opció se selecciona automàticament.)

### Channels to dump

Tria quins dels canals capturats s'escriuen:

* **Dump all the available channels** — bolca tots els canals de tots els universos i
  fixtures, no només els que has tocat. El diàleg mostra quants universos i fixtures
  inclou això.
  * **Dump only non-zero values** — (disponible amb l'opció anterior) omet els canals
    que estan a zero, de manera que l'escena només contingui els canals que realment
    fan alguna cosa.
* **Dump the selected fixture channels** — bolca només els canals dels fixtures que
  tens seleccionats actualment. Aquesta opció està disponible quan els fixtures
  seleccionats tenen canals que s'han tocat.

#### Detected channel types

Quan bolques els canals dels fixtures seleccionats, el diàleg llista els **tipus de
canal** que ha trobat entre ells — per exemple Intensity, RGB/CMY/WAUV, Colour
macros, Gobo, Pan, Tilt, Speed, Shutter/Strobe, Prism, Beam, Effect i Maintenance.
Cada tipus té una casella de selecció perquè el puguis incloure o excloure. Marca
només els tipus de canal que vulguis a l'escena — per exemple, bolca els colors però
deixa fora la intensitat.

## Finalitzar

Confirma el diàleg per crear o actualitzar l'escena amb els canals triats. La
nova escena (o l'actualitzada) apareix llavors al Function Manager, a punt per ser
editada, previsualitzada i activada com qualsevol altra funció.
