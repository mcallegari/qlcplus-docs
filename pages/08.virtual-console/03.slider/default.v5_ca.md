---
title: Slider
date: '03:02 22-08-2023'
---

Un **Slider** és un fader a la [Virtual Console](/virtual-console). Segons
com estigui configurat, pot controlar el nivell d'un conjunt de canals,
actuar com a submaster, pilotar el Grand Master, o ajustar un atribut d'una
funció. El giny **Knob** és el mateix control dibuixat com un dial giratori
en lloc d'un fader.

## Settings

### Display Style

* **DMX Value / Percentage** — si la lectura del slider mostra el DMX en
  brut (0–255) o un percentatge.
* **Normal / Inverted** — la direcció del slider (dalt = màxim, o bé
  dalt = mínim).

### Slider Mode

El mode decideix què controla realment el slider:

* **Level** — controla el nivell d'un conjunt escollit de **channels** (el
  mode més habitual). Vegeu *Level mode* més avall.
* **Adjust** — ajusta un **atribut** d'una funció adjuntada (per exemple la
  seva intensitat o un atribut personalitzat).
* **Submaster** — el slider actua com a submaster, escalant el nivell dels
  ginys dins del seu frame.
* **Grand Master** — el slider controla el Grand Master (el nivell master
  global).

### Function Control (mode Adjust)

* **Attribute** — quin atribut de la funció ajusta el slider.
* **Detach the current function** — elimina la funció adjuntada.

### Level mode

* **Channels** — els canals que pilota el slider. Utilitza **Add/Remove
  channels** per triar els canals dels fixtures.
* **Show flash button** — afegeix al slider un botó de flaix momentani que
  el porta al màxim mentre es manté premut.
* **Click & Go button** — afegeix al costat del slider un selector ràpid de
  color/predefinit:
  * **None**, **RGB/CMY** (selector de color) o **Gobo/Effect/Macro**
    (selector de predefinits).
* **Monitor channel levels** — el slider segueix (monitora) el nivell de
  sortida real dels seus canals.
* **Values range** — **Upper limit** i **Lower limit** limiten el rang entre
  el qual es mou el slider.

### Grand Master mode

* **Grand Master mode** — **Reduce values** (escala proporcionalment) o
  **Limit values** (limita).
* S'aplica només als **Intensity channels** o a **All channels**.

### External input

* **Catch up with the external controller input value** — quan està
  vinculat a un fader físic, el slider només comença a moure's quan el fader
  de maquinari supera el valor actual, evitant salts sobtats
  ("pickup"/"soft takeover").

## Tips

* Utilitza el mode **Level** amb un botó Click & Go per crear un únic fader
  que tenyeixi i atenuï alhora un grup de fixtures.
* Utilitza el mode **Submaster** en un frame de botons/sliders per afegir un
  nivell master sobre tota aquella secció de la consola.
