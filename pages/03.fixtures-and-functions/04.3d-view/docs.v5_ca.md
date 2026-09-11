---
title: '3D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **3D View** representa el teu escenari en tres dimensions, amb fixtures,
feixos, colors i fum atmosfèric inclosos. És la previsualització més realista del teu
espectacle i és útil per visualitzar angles de feix, posicions i looks tal com els
veuria el públic.

És una de les quatre vistes disponibles a la barra d'eines de la part superior de
l'espai de treball [Fixtures and Functions](/fixtures-and-functions).

> **Nota:** La 3D View requereix un sistema capaç de fer el renderitzat gràfic
> necessari. En sistemes que no ho admeten, es mostra un avís en lloc de l'
> escena 3D.

## Moure's per l'escena

* **Zoom** — utilitza els botons de zoom de la barra d'eines o la roda del ratolí.
* **Orbitar / desplaçar-se** — arrossega dins de l'escena per mirar al voltant de l'escenari.

## Seleccionar i posicionar fixtures

* **Fes clic** a un fixture per seleccionar-lo; **Ctrl+clic** per afegir-lo a la selecció.
* Els fixtures seleccionats es poden posicionar i girar amb precisió des del panell de
  configuració (a sota), o apuntar-los a un punt de l'espai amb l'eina **Pick a 3D point**
  al panell esquerre (drecera **Ctrl+P**) — fes clic a l'escena i els fixtures
  seleccionats apuntaran cap a aquell punt.

## Configuració de la vista

Fes clic al botó de **configuració** (la icona de "barres") a la barra d'eines per obrir el panell
de configuració 3D. Les seves seccions es poden expandir i col·lapsar.

### Environment

* **Type** — el preset d'escenari a renderitzar (p. ex. escenari senzill, caixa, teatre).
* **Width / Height / Depth** — la mida de l'entorn de l'escenari, en metres o
  peus (la unitat segueix la configuració de la vista 2D).

### Rendering

* **Quality** — qualitat de renderitzat: **Low**, **Medium**, **High** o **Ultra**.
  Configuracions més altes es veuen millor però exigeixen més al teu maquinari gràfic.
* **Ambient light** — brillantor general de l'escena quan cap fixture està encès
  (0–100%).
* **Smoke amount** — quanta boira atmosfèrica hi ha a l'aire (0–100%), la qual cosa
  fa que els feixos siguin més visibles.
* **Show FPS** — mostra un comptador de fotogrames per segon, útil per avaluar el rendiment.

### Position / Rotation

Aquestes seccions apareixen quan hi ha alguna cosa seleccionada i et permeten introduir valors
exactes de **X / Y / Z**:

* **Position** — la ubicació dels elements seleccionats, en mil·límetres.
* **Rotation** — l'orientació dels elements seleccionats, en graus.

Quan hi ha diversos elements seleccionats, les edicions s'apliquen en relació amb tot el grup.

### Scale

Apareix quan hi ha seleccionat un **element personalitzat**. Estableix l'escala **X / Y / Z** com a
percentatge. El botó de **bloqueig** manté els tres eixos proporcionals, de manera que canviar-ne
un escala l'element de manera uniforme.

### Elements personalitzats

Pots afegir les teves pròpies malles 3D a l'escena (decorats, elements d'escenografia, trusses, etc.):

* **Add** (＋) — tria un fitxer de malla (`.obj`, `.dae`, `.3ds`, `.stl`, `.blend`, …)
  per col·locar-lo a l'escena.
* **Remove** (－) — elimina els elements personalitzats seleccionats.
* **Normalize** (icona de compressió) — restableix els elements seleccionats a una mida estàndard.
* La llista de sota mostra tots els elements personalitzats; fes clic a un per seleccionar-lo
  (i editar la seva posició, rotació i escala a sobre).
