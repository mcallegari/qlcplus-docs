---
title: 'Cue List'
date: '03:34 22-08-2023'
---

Una **Cue List** reproduce un [Chaser](/function-manager/chaser-editor) una
cue (step) a la vez, en orden — exactamente como una escaleta teatral. Es el
widget ideal para gestionar un espectáculo guionizado en el que se avanza
entre los distintos looks con un botón **GO**. La
[Virtual Console](/virtual-console).

Para asociar un chaser, arrastrarlo sobre el widget o usar los ajustes; cada
step del chaser se convierte en una cue de la lista.

## Settings

* **Attached Chaser** — el chaser reproducido por la cue list. Usar
  **Detach the current chaser** para eliminarlo.

### Buttons behavior

Configura los botones de reproducción del widget:

* **Play/Stop layout** — qué botones de transporte se muestran:
  * **Play/Pause + Stop**
  * **Play/Stop + Pause**
* **Next/Previous (when chaser is not running)** — qué hacen los botones
  next/previous cuando aún no hay nada en reproducción:
  * **Run from first/last cue** — inicia la reproducción desde la
    primera/última cue.
  * **Run from next/previous cue** — inicia desde la cue
    siguiente/anterior.
  * **Select next/previous cue** — solo desplaza la selección sin iniciar la
    reproducción.
  * **Do nothing**.

### Side fader

Un fader opcional junto a la cue list:

* **Mode**:
  * **None** — sin fader lateral.
  * **Crossfade** — el fader ejecuta manualmente el crossfade entre la cue
    actual y la siguiente, para transiciones manuales de estilo teatral.
  * **Steps** — el fader recorre los steps de la cue list.

## Consejos

* Usar el fader lateral **Crossfade** cuando se quieran gestionar las
  transiciones manualmente sobre un GO, como en una consola teatral.
* Asociar **Next** (GO) a un atajo de teclado o a un pedal mediante la
  pestaña External controls para un funcionamiento con las manos libres.
