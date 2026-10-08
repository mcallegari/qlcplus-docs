---
title: 'Editor de Escenes'
---

Una **Escena** és la funció més bàsica: un aspecte fix format per valors de canal per
a un o més fixtures. L'Editor d'Escenes s'obre al panell dret de l'espai de treball
[Fixtures i Funcions](/fixtures-and-functions) quan crees o
edites una escena.

Una escena es construeix a partir de **components** — els fixtures, els grups de fixtures i les paletes
que controla. Estableixes els valors reals dels canals per a aquests components utilitzant
les vistes i les eines de canal del panell esquerre; l'editor mateix gestiona
quins components pertanyen a l'escena i com s'esvaeix.

## Barra d'eines

* **Nom** — el nom de l'escena (el camp de text a la barra superior). Edita'l lliurement.
* **Enrere** (fletxa) — torna a l'editor anterior o al Gestor de Funcions.
* **Afegeix un fixture/grup** (icona de fixture amb ＋) — obre el Gestor de Grups de
  Fixtures en un panell lateral; arrossega-hi fixtures o grups des d'allà cap a l'escena.
* **Afegeix una paleta** (icona de paleta amb ＋) — obre el Gestor de Paletes en un panell
  lateral; arrossega paletes a l'escena per controlar-ne els valors des d'una paleta.
* **Elimina els elements seleccionats** (－) — elimina els components seleccionats de
  l'escena, després de confirmació.

## La llista de components

L'àrea principal mostra cada component (fixture, grup o paleta) de l'escena.

* **Fes clic** en un component per seleccionar-lo; en seleccionar un fixture també se selecciona
  a les vistes perquè puguis editar els seus valors de canal.
* **Ctrl+clic** per seleccionar-ne diversos.
* També pots **arrossegar** fixtures, grups o paletes directament sobre la llista per
  afegir-los.

## Establir valors

Per definir l'aspecte, selecciona els fixtures de l'escena i ajusta els seus canals utilitzant
les **eines de capacitat de canal** del panell esquerre (Intensitat, Color, Posició,
etc.) o la **Vista DMX**. Els valors s'emmagatzemen a l'escena a mesura que els canvies.

## Controlar els canals des d'un controlador extern

Mentre l'Editor d'Escenes està obert, la barra d'eines del seu panell inferior
té botons addicionals per controlar directament els canals de l'escena des d'un
controlador **MIDI**, **OSC**, **DMX** o **HID** (joystick) connectat — útil
per introduir valors a mà en lloc d'arrossegar controls lliscants a la pantalla.

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-sliders fa-2x"></i> **Controla els canals amb un controlador extern** | Commuta el control extern. Mentre està activat, els faders/knobs del controlador es mapegen 1:1 sobre els canals de l'escena, en l'ordre en què apareixen a la consola, i la **Virtual Console deixa de rebre entrada** d'aquell controlador fins que ho desactivis o tanquis l'editor. |
| ![](/basics/position.svg?resize=48,48) **Commuta el mode Pan & Tilt** | Només es mostra mentre el control extern està activat. Canvia el mapatge perquè els primers quatre faders/knobs del controlador controlin en canvi **pan, pan fine, tilt i tilt fine** d'un sol fixture — útil per posicionar un cap mòbil amb faders reals en lloc d'un [XY Pad](/virtual-console/xy-pad). |
| <i class="fa fa-angle-left fa-2x"></i> / <i class="fa fa-angle-right fa-2x"></i> **Desplaça el mapatge de faders enrere / endavant** | Pagina el mapatge quan hi ha més coses a controlar que faders té el controlador. En mode normal, una pàgina és un bloc de canals de la mida del nombre de faders del controlador; en mode Pan & Tilt, una pàgina és un sol fixture. |

El canal controlat actualment per un controlador es ressalta a la consola, de
manera que pots veure d'un cop d'ull què fa cada fader físic. Si un dels
universos connectats té un joystick (connector HID), els seus eixos es
detecten i també es posen a disposició del mapatge.

## Velocitat

La secció plegable **Velocitat** estableix com s'esvaeix l'escena quan s'activa:

* **Fade in** — el temps que triga l'escena a pujar en esvaïment fins als seus valors.
* **Fade out** — el temps que triga a esvair-se de nou quan s'atura.

Fes doble clic en un camp de temps, o utilitza el botó de rellotge del costat, per introduir
un valor a l'editor de temps.

> Quan una escena forma part d'una **Seqüència**, s'edita a través de la pestanya
> *Fixtures* de l'Editor de Seqüències en lloc de per si sola. Vegeu
> [Sequence Editor](../sequence-editor).
