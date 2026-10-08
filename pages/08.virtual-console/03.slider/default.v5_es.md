---
title: Slider
date: '03:02 22-08-2023'
---

Un **Slider** es un fader en la [Virtual Console](/virtual-console). Según
cómo esté configurado, puede controlar el nivel de un conjunto de canales,
comportarse como un submaster, pilotar el Grand Master, o bien regular un
atributo de una función. El widget **Knob** es el mismo control dibujado
como perilla giratoria en lugar de como fader.

## Settings

### Display Style

* **DMX Value / Percentage** — si el valor mostrado por el slider muestra el
  DMX en bruto (0–255) o un porcentaje.
* **Normal / Inverted** — la dirección del slider (arriba = máximo, o bien
  arriba = mínimo).

### Slider Mode

El modo determina qué controla realmente el slider:

* **Level** — controla el nivel de un conjunto elegido de **channels** (el
  modo más común). Ver *Level mode* más abajo.
* **Adjust** — regula un **atributo** de una función asociada (por ejemplo su
  intensidad o un atributo personalizado).
* **Submaster** — el slider actúa como submaster, escalando el nivel de los
  widgets contenidos en su frame.
* **Grand Master** — el slider controla el Grand Master (el nivel master
  global).

### Function Control (modo Adjust)

* **Attribute** — qué atributo de la función regula el slider.
* **Detach the current function** — elimina la función asociada.

### Level mode

* **Channels** — los canales pilotados por el slider. Usar **Add/Remove
  channels** para elegir los canales de los fixtures.
* **Show flash button** — añade al slider un botón de flash momentáneo que
  lo lleva al máximo mientras se mantiene pulsado.
* **Click & Go button** — añade junto al slider un selector rápido de
  color/preset:
  * **None**, **RGB/CMY** (selector de color) o **Gobo/Effect/Macro**
    (selector de presets).
* **Monitor channel levels** — el slider sigue (monitoriza) el nivel de
  salida real de sus canales.
* **Values range** — **Upper limit** y **Lower limit** limitan el intervalo
  dentro del cual se mueve el slider.

### Grand Master mode

* **Grand Master mode** — **Reduce values** (escala proporcionalmente) o
  **Limit values** (limita).
* Se aplica solo a los **Intensity channels** o a **All channels**.

### External input

* **Catch up with the external controller input value** — cuando está
  asociado a un fader físico, el slider solo empieza a moverse cuando el
  fader hardware supera el valor actual, evitando saltos bruscos
  ("pickup"/"soft takeover").

## Consejos

* Usar el modo **Level** con un botón Click & Go para crear un único fader
  que regule tanto la intensidad como el color de un grupo de fixtures.
* Usar el modo **Submaster** en un frame de botones/sliders para añadir un
  nivel master sobre toda esa sección de la consola.
