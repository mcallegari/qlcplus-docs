---
title: Button
date: '14:26 21-08-2023'
---

Un **Button** es el widget más simple de la [Virtual Console](/virtual-console):
pulsarlo activa una función. Es el elemento básico de la mayoría de las
consolas — un botón por cada escena, chase o efecto que se desea lanzar.

Para asociar una función, arrastrarla desde el Function Manager sobre el
botón, o bien usar los ajustes del botón.

## Settings

* **Attached Function** — la función controlada por este botón. Usar
  **Detach the current function** para eliminarla.

* **Pressure behaviour** — qué sucede al pulsar el botón:
  * **Toggle Function on/off** — inicia la función en la primera pulsación y
    la detiene en la siguiente. El botón permanece encendido mientras la
    función está en ejecución.
  * **Flash Function (only for Scenes)** — ejecuta la escena solo mientras el
    botón se mantiene pulsado, luego la detiene. Con un tiempo de **Fade
    out**, el efecto flash se desvanece al soltar el botón.
  * **Toggle Blackout** — activa y desactiva el blackout de todo el equipo.
  * **Stop all Functions** — detiene todas las funciones en ejecución (un
    botón de pánico).
  * **Adjust Function intensity** — el botón fija la intensidad de una
    función a un nivel determinado en lugar de iniciarla/detenerla.

* **Flash properties** (mostradas para el comportamiento Flash):
  * **Override priority / Force LTP** — hace que el flash prevalezca sobre
    las demás funciones que controlan los mismos canales, de modo que el
    efecto flash gana mientras se mantiene pulsado.

## Consejos

* Combinar los botones con un [Solo Frame](../solo-frame) para que al pulsar
  uno se detengan automáticamente los demás — ideal para una fila de looks
  mutuamente excluyentes.
* Añadir una **entrada externa** o un **atajo de teclado** (pestaña External
  controls) para activar el botón desde hardware o desde el teclado.
