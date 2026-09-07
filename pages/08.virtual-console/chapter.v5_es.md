---
title: 'Virtual Console'
date: '14:21 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapter 7

# Virtual Console

La **Virtual Console** es la superficie de control personalizada para
gestionar el espectáculo. Se construye a partir de **widgets** — botones,
sliders, XY pads, cue lists, relojes y más — dispuestos en una o más
**páginas**, organizados exactamente como se desee para operar en vivo el
equipo. En resumen: en el resto de QLC+ se *crean* las funciones; en la
Virtual Console se *ejecutan*.

Tiene dos modos:

* **Modo Operate** (predeterminado) — al hacer clic en los widgets estos se
  activan. Así es como se usa la consola durante un espectáculo.
* **Modo Edit** — se añaden, mueven, redimensionan y configuran los
  widgets.

## Layout

* Una **barra de herramientas** en la parte superior muestra una pestaña por
  cada **página**; hacer clic en una pestaña para cambiar de página. A la
  derecha se encuentran el interruptor
  ![](../basics/grid.svg?resize=24,24) de **snap** (ajusta los widgets a una
  cuadrícula) y los controles de **zoom**.
* El **área de la página** de abajo es el lienzo donde residen los widgets.
* En modo Edit, un **panel derecho** contiene las herramientas de edición.

### Pages

La consola puede tener varias páginas, cada una con su propia superficie de
widgets — por ejemplo una página por canción, o por área del escenario.

* **Clic** en una pestaña de página para mostrarla.
* **Clic derecho** en una pestaña de página para **desacoplarla** en su
  propia ventana (útil para una segunda pantalla).
* Una página puede estar **protegida con PIN**; al cambiar a ella se pide
  entonces el PIN.

Ver [VC Page](/virtual-console/page) para los ajustes de página (tamaño,
PIN, añadir/eliminar páginas).

## Right panel (edit tools)

| Button | What it does |
|--------|--------------|
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Add a new widget** | Abre la lista de widgets; arrastrar un tipo de widget a la página para crearlo. |
| ![](../basics/edit.svg?resize=48,48) **Edit mode** | Activa/desactiva el modo Edit (el botón muestra un borde rojo parpadeante mientras está activo). Con un widget seleccionado, muestra las propiedades de ese widget. |
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Abre la lista de funciones para poder arrastrarlas sobre los widgets y asociarlas. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected widgets** | Elimina los widgets seleccionados. |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Copia los widgets seleccionados al portapapeles. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Pega los widgets del portapapeles en la página. También se puede arrastrar el botón de pegar sobre un frame de destino para pegar dentro de él. |

## Working with widgets

* **Arrastrar** un tipo de widget desde la lista a la página para añadirlo.
  Algunos widgets (Button Matrix, Slider Matrix) piden primero un número de
  filas y columnas.
* En modo Edit, **hacer clic** en un widget para seleccionarlo (Ctrl+clic
  para seleccionar varios), **arrastrar** para moverlo y usar las asas para
  redimensionarlo.
* **Asociar una función** a un widget arrastrándola desde el Function
  Manager sobre el widget.

## Widget properties

Cuando un widget está seleccionado en modo Edit, el panel derecho muestra
sus propiedades, organizadas en pestañas:

* **Settings** — las opciones propias del widget (documentadas para cada
  widget más abajo).
* **Presets** — para los widgets que las admiten (Animation, XY Pad, Speed
  Dial).
* **External controls** — asocia controladores físicos y atajos de teclado
  al widget (ver [External controls](#external-controls)).

### Basic properties (all widgets)

Cada widget comparte una sección **Basic properties**:

* **Label** — el título del widget.
* **Background color** — el color de fondo del widget.
* **Foreground color** — el color de su texto/gráficos.
* **Font** — el tipo de letra usado para su etiqueta.
* **Background image** — una imagen opcional mostrada detrás del widget.
* **Z-Index** — el orden de superposición, de modo que los widgets
  superpuestos se organicen de forma predecible.
* **Alignment** — cuando hay varios widgets seleccionados, alinearlos a la
  izquierda/derecha/arriba/abajo.

### External controls

La pestaña **External controls** asocia entradas al widget para poder
operarlo desde hardware externo. Se puede asociar:

* una **entrada externa** (un fader, un botón o un encoder de un perfil de
  entrada MIDI/DMX/OSC/etc.), o bien
* un **atajo de teclado**.

Esto permite pilotar la Virtual Console desde una superficie de control
física o desde el teclado en lugar del ratón.

## The widgets

| Widget | Purpose |
|--------|---------|
| ![](../basics/button.svg?resize=48,48) [Button](/virtual-console/button) | Activa una función (toggle, flash, blackout, …). |
| ![](../basics/buttonmatrix2.png?resize=48,48) [Button Matrix](/virtual-console/button-matrix) | Crea una cuadrícula de botones dentro de un frame. |
| ![](../basics/slider.svg?resize=48,48) [Slider](/virtual-console/slider) | Un fader para niveles, submasters, el Grand Master o un atributo de función. |
| ![](../basics/sliders.svg?resize=48,48) [Slider Matrix](/virtual-console/slider-matrix) | Crea una cuadrícula de sliders dentro de un frame. |
| ![](../basics/knob.svg?resize=48,48) [Knob](/virtual-console/slider) | Una variante rotativa del Slider. |
| ![](../basics/animation.svg?resize=48,48) [Animation](/virtual-console/animation) | Reproduce y controla una RGB Matrix con cambios de color/preset en vivo. |
| ![](../basics/speed.svg?resize=48,48) [Speed Dial](/virtual-console/speed-dial) | Establece y multiplica los tiempos de las funciones. |
| ![](../basics/xypad.svg?resize=48,48) [XY Pad](/virtual-console/xy-pad) | Control de pan/tilt de dos ejes para fixtures móviles. |
| ![](../basics/cuelist.svg?resize=48,48) [Cue List](/virtual-console/cue-list) | Reproduce un chaser cue por cue, como una escaleta teatral. |
| ![](../basics/frame.svg?resize=48,48) [Frame](/virtual-console/frame) | Un contenedor que agrupa widgets. |
| ![](../basics/soloframe.svg?resize=48,48) [Solo Frame](/virtual-console/solo-frame) | Un contenedor que garantiza que como máximo una de sus funciones se ejecute a la vez. |
| ![](../basics/label.svg?resize=48,48) [Label](/virtual-console/label) | Una etiqueta de texto estática para titular y agrupar. |
| ![](../basics/audiotriggers.svg?resize=48,48) [Audio Triggers](/virtual-console/audio-triggers) | Pilota funciones/niveles a partir del análisis de audio en vivo. |
| ![](../basics/clock.svg?resize=48,48) [Clock](/virtual-console/clock) | Un reloj, cronómetro o cuenta atrás que puede programar funciones. |
