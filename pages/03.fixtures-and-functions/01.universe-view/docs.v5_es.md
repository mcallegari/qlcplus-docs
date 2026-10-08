---
title: 'Universe View'
date: '13:53 27-06-2026'
published: true
taxonomy:
    category: docs
---

La **Universe View** muestra un único universo DMX como una cuadrícula de sus 512
canales. Es la más técnica de las cuatro vistas y resulta útil para comprobar
exactamente qué canales ocupa cada fixture, detectar huecos o solapamientos,
y reasignar direcciones a los fixtures.

Es una de las cuatro vistas disponibles en la barra de herramientas de la parte
superior del espacio de trabajo [Fixtures and Functions](/fixtures-and-functions).
Utilice el **selector de universo** de esa barra de herramientas para elegir qué
universo está viendo.

## La cuadrícula

La vista es una cuadrícula de celdas, una celda por canal DMX (direcciones 1–512). Cada
fixture ocupa un bloque contiguo de celdas correspondiente a sus canales,
etiquetado con el nombre del fixture. El icono que se muestra en cada celda indica el tipo
de ese canal (intensidad, color, pan, tilt, etc.).

Pase el ratón por encima de una celda para ver un tooltip que describe el fixture y el canal en esa dirección.

El nombre del universo mostrado actualmente aparece en la parte superior izquierda.

## Seleccionar fixtures

* **Clic** en las celdas de un fixture para seleccionarlo. Seleccionar un fixture reemplaza la
  selección actual.
* Mantenga pulsado **Ctrl** (o active **Toggle multiple selection** en el panel izquierdo) para
  añadir fixtures a la selección en lugar de reemplazarla.

## Mover un fixture

Arrastre un fixture seleccionado a lo largo de la cuadrícula para moverlo a una dirección de
inicio diferente. Mientras arrastra, las celdas de destino se resaltan para mostrar dónde
aterrizará el fixture:

* Si la nueva posición está libre, se permite el movimiento.
* Si la nueva posición se solaparía con otro fixture, el movimiento se rechaza y
  el fixture permanece donde estaba.

## Cortar y pegar

Dos botones en la parte superior derecha de la vista permiten duplicar o reubicar fixtures:

* **Cut** (tijeras) — copia los fixtures actualmente seleccionados al portapapeles.
* **Paste** (portapapeles) — coloca los fixtures del portapapeles en la primera posición
  libre disponible del universo. Si no hay suficiente espacio libre, se muestra un error
  y no se pega nada.

## Añadir fixtures

También puede arrastrar un fixture desde el navegador **Add Fixtures** (panel izquierdo)
directamente a la cuadrícula. Durante el arrastre, la cuadrícula resalta los canales que el
fixture ocuparía y muestra si la dirección elegida está libre. Suéltelo sobre un bloque
libre para patchearlo allí.
