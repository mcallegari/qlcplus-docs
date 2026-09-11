---
title: 'Editor d'Escenes'
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

## Velocitat

La secció plegable **Velocitat** estableix com s'esvaeix l'escena quan s'activa:

* **Fade in** — el temps que triga l'escena a pujar en esvaïment fins als seus valors.
* **Fade out** — el temps que triga a esvair-se de nou quan s'atura.

Fes doble clic en un camp de temps, o utilitza el botó de rellotge del costat, per introduir
un valor a l'editor de temps.

> Quan una escena forma part d'una **Seqüència**, s'edita a través de la pestanya
> *Fixtures* de l'Editor de Seqüències en lloc de per si sola. Vegeu
> [Sequence Editor](../sequence-editor).
