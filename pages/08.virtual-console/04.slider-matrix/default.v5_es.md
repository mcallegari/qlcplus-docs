---
title: 'Slider Matrix'
date: '03:07 22-08-2023'
---

Una **Slider Matrix** es una manera rápida de crear todo un **banco de
sliders** de una sola vez, en lugar de añadirlos uno por uno. Pertenece a la
[Virtual Console](/virtual-console) y es ideal para distribuciones con un
canal por fader, grupos de submasters, o cualquier fila de faders que se
desee disponer juntos.

Una Slider Matrix no es un tipo de widget independiente: crea un
[Frame](../frame) (o un [Solo Frame](../solo-frame)) relleno con una
cuadrícula de [Sliders](../slider). Una vez creada, cada slider se configura
individualmente, y el frame que los contiene se comporta como cualquier
otro frame.

## Creación

Arrastrar **Slider Matrix** desde la lista de widgets a la página. Aparece
un cuadro de diálogo **Widget matrix setup**, en el que se configura:

* **Columns** — el número de sliders en horizontal (1–99).
* **Rows** — el número de sliders en vertical (1–99).
* **Width / Height** — el tamaño de cada slider individual, en píxeles (por
  defecto los sliders tienen una forma alta y estrecha).
* **Frame type** — si los sliders van dentro de un frame **Normal** o
  **Solo**:
  * **Normal** — los sliders son independientes (la opción habitual).
  * **Solo** — solo se reproduce la función de un slider a la vez (ver
    [Solo Frame](/virtual-console)).

Confirmar para crear el banco.

## Después de la creación

* Cada celda es un [Slider](../slider) normal — seleccionar uno en modo
  Edit para establecer su modo (Level, Submaster, etc.) y los canales o el
  atributo que controla.
* El banco reside en un [Frame](../frame), por lo que es posible mover,
  redimensionar, etiquetar y paginar todo el bloque en conjunto. Añadir un
  slider **Submaster** al frame para obtener un nivel master sobre todo el
  banco.

## Consejos

* Crear una fila de sliders **Level** para realizar una consola sencilla con
  un canal por fader.
* Mantener los sliders relacionados en un mismo frame y añadir un
  **Submaster** para gobernarlos todos desde un único fader.
