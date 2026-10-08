---
title: 'Solo Frame'
date: '03:43 22-08-2023'
---

Un **Solo Frame** es un [Frame](../frame) especial en la
[Virtual Console](/virtual-console) con una regla adicional: en su interior
puede estar en ejecución **una sola** función a la vez. Iniciar una función
detiene automáticamente cualquier otra función en ejecución desde un widget
del mismo frame.

Esto convierte al Solo Frame en el contenedor natural para cualquier grupo
de looks que deban ser mutuamente excluyentes — una fila de botones de
color, un banco de "estados" de escena, o una paleta en la que seleccionar
un nuevo look sustituye al anterior. Sin él habría que detener manualmente
el look anterior antes de iniciar el nuevo.

Un Solo Frame es el mismo widget que un [Frame](../frame) y comparte todos
sus ajustes; simplemente añade el comportamiento solo y la sección
**Solo Frame Options**.

## How the solo behaviour works

* Cuando un widget dentro del frame **inicia una función**, cualquier otra
  función iniciada por widgets del mismo frame se **detiene**.
* Esto se aplica a los widgets contenidos directamente en el frame (por
  ejemplo sus [Buttons](../button)), ofreciendo un selector limpio de
  uno-a-la-vez.
* Solo afecta a las funciones iniciadas *desde dentro de este frame* — las
  funciones en ejecución en otro lugar de la consola no se ven afectadas.

## Settings

Un Solo Frame tiene todos los [ajustes de Frame](../frame#settings) —
Header, Pages, Shortcuts — más:

### Solo Frame Options

* **Exclude monitored functions** — evita que las funciones que solo están
  siendo *monitorizadas* sean detenidas por la regla solo. Usar esta opción
  cuando un widget del frame está monitorizando/reflejando el estado de una
  función en lugar de reproducirla activamente, de modo que la
  monitorización no se interrumpa cada vez que se pulsa otro botón.

## Creating one

* Arrastrar **Solo Frame** desde la lista de widgets a la página, **o bien**
* Al crear una [Button Matrix](../button-matrix) o una
  [Slider Matrix](../slider-matrix), elegir **Solo** como tipo de frame para
  envolver toda la cuadrícula en un Solo Frame.

## Consejos

* Colocar una paleta de botones de color o escena en un Solo Frame para que
  al pulsar uno se anule siempre el anterior — sin necesidad de un paso de
  "stop".
* Combinar con **Pages** (desde los ajustes del Frame) para construir un
  selector paginado, uno-a-la-vez, que siga comportándose en modo solo en
  cada página.
