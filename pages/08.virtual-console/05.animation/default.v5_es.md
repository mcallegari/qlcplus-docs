---
title: Animation
date: '03:09 22-08-2023'
---

Un widget **Animation** reproduce y controla una función
[RGB Matrix](/function-manager/rgb-matrix-editor), permitiendo cambiar sus
**colores** y su **preset de patrón** en vivo. Es el panel de control para
los efectos de píxeles/LED en la [Virtual Console](/virtual-console).

Para asociar una función RGB Matrix, arrastrarla sobre el widget o usar los
ajustes.

## Settings

* **Attached Function** — la RGB Matrix controlada por este widget. Usar
  **Detach the current function** para eliminarla.
* **Apply color and preset changes immediately** — si está activado, los
  cambios de color o preset tienen efecto inmediato; si está desactivado, se
  aplican en el siguiente inicio de la función.

### Appearance

Elegir qué controles muestra el widget:

* **Level Fader** — un fader para la intensidad de la matriz.
* **Label** — la etiqueta de texto del widget.
* **Color 1–5 Buttons** — botones de color que fijan en vivo los colores de
  la matriz (cuántos son útiles depende del patrón).
* **Preset List** — una lista para cambiar sobre la marcha el
  patrón/algoritmo de la matriz.

## Presets

El widget Animation tiene una pestaña **Presets** en la que se construye la
lista de presets seleccionables:

* **Add a fixed-color preset** para un slot de color elegido.
* **Add R/G/B knobs** para un slot de color (mezcla de color en vivo).
* **Add a script algorithm preset** (eligiendo uno de los algoritmos de la
  matriz).
* **Add a Text preset** usando un texto introducido por el usuario.
* Reordenar los presets con **move up / move down**, o **remove** para
  eliminarlos.

## Consejos

* Crear una **Preset List** con los looks favoritos de una matriz, para que
  un operador pueda pasar de uno a otro con un solo toque.
* Activar **Apply changes immediately** para un control del color
  improvisado y directo.
