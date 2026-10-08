---
title: '2D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **2D View** mostra els teus fixtures disposats en un pla pla de l'escenari. Cada
fixture es dibuixa a la seva posició real i, quan els fixtures emeten llum, veus
el seu color i feix des del punt de vista triat. És la vista principal per
disposar un rig espacialment i per dissenyar looks visualment.

És una de les quatre vistes disponibles a la barra d'eines de la part superior de
l'espai de treball [Fixtures and Functions](/fixtures-and-functions).

## Moure's pel plànol

* **Zoom** — utilitza els botons de zoom de la barra d'eines, o la **roda del ratolí**
  sobre la vista, per acostar-te i allunyar-te.
* **Desplaçament** — quan el plànol és més gran que la finestra, utilitza les barres de
  desplaçament per moure't.
* Es pot col·locar una **imatge de fons personalitzada** (vegeu la configuració) darrere de la graella,
  per exemple un plànol del recinte.

## Seleccionar fixtures

* **Fes clic** a un fixture per seleccionar-lo (substituint la selecció actual).
* **Fes clic a una àrea buida i arrossega** per dibuixar un rectangle de selecció; tots els fixtures
  que hi hagi a dins queden seleccionats. El rectangle funciona en qualsevol direcció d'arrossegament.
* Mantén premuda la tecla **Ctrl** mentre fas clic o arrossegues per afegir a la selecció
  actual.
* **Fes clic a una àrea buida** sense arrossegar per netejar la selecció.

## Moure fixtures

Arrossega un fixture seleccionat (o un grup de fixtures seleccionats) per reposicionar-lo a
l'escenari. La posició es desa en unitats del món real (metres o peus), de manera que
les vistes 2D i 3D es mantenen coherents.

També pots arrossegar un fixture des del navegador **Add Fixtures** (panell esquerre)
directament al plànol.

## Configuració de la vista

Fes clic al botó de **configuració** (la icona de "barres") a la barra d'eines per obrir el panell
de configuració 2D a la dreta. Conté:

### Environment

* **Width / Height / Depth** — la mida de l'entorn de l'escenari, en metres o
  peus.
* **Grid units** — canvia entre **Meters** i **Feet**. Les mides existents es
  converteixen automàticament en canviar.
* **Point of view** — tria com es veu l'escenari: vista **Top**, **Front**, **Right
  side** o **Left side**. Això canvia sobre quin pla es disposen els fixtures.

### Custom Background

* **Set a custom background** (botó d'imatge) — tria un fitxer d'imatge per mostrar-lo darrere
  de la graella.
* El camí de la imatge actual es mostra al seu costat.
* **Reset background** (✕) — elimina la imatge de fons.

### Selected fixtures

Aquesta secció apareix quan hi ha un o més fixtures seleccionats:

* **Gel color** — per a fixtures dimmer/genèrics, fes clic a la mostra de color per triar
  un color de gel aplicat al feix del fixture.
* **Fixed zoom** — estableix un angle de feix fix (en graus) per als fixtures que no
  tenen canal de zoom.
* **Rotation** — gira els fixtures seleccionats sobre el punt de vista actual.
* **Alignment** — alinea els fixtures seleccionats a **left** (esquerra) o a **top** (dalt).
* **Distribution** — distribueix els fixtures seleccionats **de manera equitativa** en la
  direcció horitzontal o vertical (útil per igualar l'espaiat al llarg d'una
  fila o columna).
