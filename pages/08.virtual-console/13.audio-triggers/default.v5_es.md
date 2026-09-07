---
title: 'Audio Triggers'
date: '03:46 22-08-2023'
---

Un widget **Audio Triggers** escucha el audio en vivo (desde la entrada de
audio del ordenador) y usa su **espectro de frecuencias** para pilotar
funciones, canales DMX u otros widgets. Es la forma de hacer que las luces
reaccionen automáticamente a la música en la
[Virtual Console](/virtual-console).

El sonido de entrada se divide en un número de **barras de frecuencia** (de
graves a agudos), y a cada barra se le puede asignar un objetivo que
controla mientras suena la música.

## Settings

* **Activation threshold** — el nivel que una barra debe alcanzar antes de
  que se active su objetivo.
* **Deactivation threshold** — el nivel por debajo del cual debe volver a
  caer una barra antes de que se libere su objetivo. (Tener los dos
  umbrales separados evita parpadeos de encendido y apagado.)

### Spectrum Bars

* **Number of bars** — en cuántas bandas de frecuencia se divide el
  espectro. Más barras ofrecen un control más fino a lo largo del rango de
  frecuencias.

### Asignación por barra

Para cada barra se establece:

* **Name** — una etiqueta para la barra.
* **Type** — qué controla la barra:
  * **None** — sin usar.
  * **DMX** — pilota el nivel de un canal DMX.
  * **Function** — inicia/detiene una función. Usar **Drop a Function here**
    para asignarla.
  * **Widget** — pilota otro widget de la VC. Usar **Drop a VC Widget here**
    para asignarlo.
* **Information** — muestra la asignación actual.

## Consejos

* Asignar las barras de **graves** a funciones de intensidad o estroboscopio
  y las barras de **agudos** a cambios de color para un look clásico
  reactivo a la música.
* Ajustar los **umbrales de activación/desactivación** al tema, de modo que
  los efectos se disparen en los golpes de ritmo sin parpadear.
