---
title: 'Palette Manager'
date: '14:34 27-06-2026'
taxonomy:
    category:
        - docs
---

El **Palette Manager** llista les **palettes** del teu projecte i et permet
crear-les, editar-les i eliminar-les. Obre'l amb el botó **Palettes** al panell
esquerre de l'espai de treball [Fixtures and Functions](/fixtures-and-functions).

Una palette és un valor desat i reutilitzable d'un tipus concret — un nivell
d'intensitat, un color, una posició de pan/tilt, o una posició 3D — que pots aplicar
a fixtures i referenciar des de les teves funcions. Canviar una palette actualitza
tots els llocs on s'utilitza.

## La llista

L'àrea principal llista totes les palettes, cadascuna amb una icona per al seu tipus i el seu nom.

* **Fes clic** a una palette per seleccionar-la; **Ctrl+clic** per seleccionar-ne diverses.
* **Arrossega** una palette sobre fixtures o altres destinacions per aplicar-la.
* **Fes doble clic** a una palette per obrir la seva eina d'edició (vegeu més avall).

## Filtrar per tipus

La barra d'eines de dalt té un botó commutador per cada tipus de palette. Cadascun mostra un
**comptador** de quantes palettes d'aquell tipus existeixen, i activar-lo filtra la
llista:

* **Intensity** — nivells de dimmer.
* **Color** — colors (RGB / CMY / WAUV).
* **Position** — posicions de pan / tilt.
* **3D Position** — posicions definides com un punt a l'escenari 3D.

El botó de **cerca** (lupa) obre un quadre per filtrar la llista pel nom de la
palette.

## Crear i editar una palette

**Fes doble clic** a una palette per obrir l'eina corresponent sobre la llista, on
pots ajustar el seu valor:

* Les palettes d'Intensity obren l'eina **Intensity**.
* Les palettes de Color obren l'eina **Color**.
* Les palettes de Position obren l'eina **Position**.
* Les palettes de Zoom obren l'eina **Beam**.
* Les palettes de 3D Position obren l'eina **3D Position**.

Ajusta el valor a l'eina i tanca-la per desar el canvi a la palette.

## Eliminar palettes

Selecciona una o més palettes i fes clic al botó **－ Delete** (menys vermell). Un
diàleg de confirmació llista les palettes que s'eliminaran; confirma per suprimir-les.
