---
title: Frame
date: '03:39 22-08-2023'
---

Un **Frame** es un contenedor en la [Virtual Console](/virtual-console) que
agrupa otros widgets. Se usa para organizar la consola en secciones, para
mover y mostrar/ocultar todo un grupo a la vez, y para añadir subáreas
multipágina.

> Para un frame en el que solo se reproduce una función a la vez, ver
> [Solo Frame](../solo-frame). Un Solo Frame comparte todos los ajustes
> siguientes y añade la regla solo.

## Settings

### Header

* **Show header** — muestra la barra de encabezado del frame (con su
  etiqueta).
* **Show enable button** — añade en el encabezado un interruptor que
  habilita/deshabilita todos los widgets contenidos en el frame de una sola
  vez.

### Pages

Un frame puede alojar varias **páginas** propias, convirtiendo el frame en
una subconsola paginada:

* **Enable pages** — activa la paginación para el frame.
* **Circular pages scrolling** — desde la última página se vuelve a la
  primera.
* **Pages number** — cuántas páginas tiene el frame.
* **Clone first page widgets** — copia los widgets de la primera página en
  cada página, de modo que un diseño común (por ejemplo faders master
  compartidos) aparezca en todas las páginas.

### Shortcuts

* **Shortcut name** — asigna un nombre a los atajos de página usados para
  pasar entre las páginas del frame.

## Consejos

* Soltar widgets sobre un frame para convertirlos en sus hijos; al mover el
  frame se mueven todos juntos.
* Usar un [Solo Frame](../solo-frame) para cualquier grupo en el que dos
  looks no deban estar activos a la vez.
* Combinar **Enable pages** con **Clone first page widgets** para construir
  una sección paginada que mantenga visibles sus controles master en cada
  página.
