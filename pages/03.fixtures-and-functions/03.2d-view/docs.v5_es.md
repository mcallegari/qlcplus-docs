---
title: '2D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **2D View** muestra los fixtures dispuestos en un plano plano del escenario. Cada
fixture se dibuja en su posición real y, cuando los fixtures emiten luz, se ven
su color y su haz desde el punto de vista elegido. Es la vista principal para
disponer un montaje espacialmente y para diseñar looks visualmente.

Es una de las cuatro vistas disponibles en la barra de herramientas de la parte
superior del espacio de trabajo [Fixtures and Functions](/fixtures-and-functions).

## Moverse por la vista

* **Zoom** — use los botones de zoom de la barra de herramientas, o la **rueda del ratón** sobre
  la vista, para acercar o alejar.
* **Desplazamiento** — cuando el plano es más grande que la ventana, use las barras de desplazamiento para
  desplazarse.
* Se puede colocar una **imagen de fondo personalizada** (véase ajustes) detrás de la cuadrícula,
  por ejemplo un plano del recinto.

## Seleccionar fixtures

* **Clic** en un fixture para seleccionarlo (reemplazando la selección actual).
* **Clic en un área vacía y arrastrar** para dibujar un rectángulo de selección; todos los fixtures
  que estén dentro se seleccionan. El rectángulo funciona en cualquier dirección de arrastre.
* Mantenga pulsado **Ctrl** mientras hace clic o dibuja el rectángulo para añadir a la selección
  actual.
* **Clic en un área vacía** sin arrastrar para vaciar la selección.

## Mover fixtures

Arrastre un fixture seleccionado (o un grupo de fixtures seleccionados) para reposicionarlo
en el escenario. La posición se almacena en unidades del mundo real (metros o pies), de modo que
las vistas 2D y 3D permanezcan coherentes.

También puede arrastrar un fixture desde el navegador **Add Fixtures** (panel izquierdo)
directamente al plano.

## Ajustes de la vista

Haga clic en el botón de **ajustes** (el icono de "barras") de la barra de herramientas para abrir el panel
de ajustes 2D a la derecha. Contiene:

### Environment

* **Width / Height / Depth** — el tamaño del entorno del escenario, en metros o
  pies.
* **Grid units** — cambia entre **Meters** y **Feet**. Los tamaños existentes se
  convierten automáticamente al cambiar de unidad.
* **Point of view** — elige cómo se ve el escenario: vista **Top**, **Front**, **Right
  side** o **Left side**. Esto cambia sobre qué plano se disponen los fixtures.

### Custom Background

* **Set a custom background** (botón de imagen) — elige un archivo de imagen para mostrar detrás de
  la cuadrícula.
* La ruta de la imagen actual se muestra junto a ella.
* **Reset background** (✕) — elimina la imagen de fondo.

### Selected fixtures

Esta sección aparece cuando hay uno o más fixtures seleccionados:

* **Gel color** — para fixtures dimmer/genéricos, haga clic en la muestra de color para elegir
  un color de gel aplicado al haz del fixture.
* **Fixed zoom** — establece un ángulo de haz fijo (en grados) para fixtures que no
  tienen canal de zoom.
* **Rotation** — rota los fixtures seleccionados en el punto de vista actual.
* **Alignment** — alinea los fixtures seleccionados a la **izquierda** o arriba.
* **Distribution** — distribuye los fixtures seleccionados de forma **equitativa** en dirección
  horizontal o vertical (útil para uniformar el espaciado a lo largo de una
  fila o columna).
