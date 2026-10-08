---
title: Animation
date: '03:09 22-08-2023'
---

Un giny d'**Animation** reprodueix i controla una funció
[RGB Matrix](/function-manager/rgb-matrix-editor), permetent-te canviar els
seus **colors** i commutar el seu **predefinit de patró** en directe. És la
interfície de rendiment per als efectes de píxels/LED a la
[Virtual Console](/virtual-console).

Adjunta una funció RGB Matrix arrossegant-la sobre el giny o des de la
configuració.

## Settings

* **Attached Function** — la RGB Matrix que controla aquest giny. Utilitza
  **Detach the current function** per eliminar-la.
* **Apply color and preset changes immediately** — quan està activat, els
  canvis de color o de predefinit tenen efecte immediat; quan està
  desactivat, s'apliquen la següent vegada que s'iniciï la funció.

### Appearance

Tria quins controls mostra el giny:

* **Level Fader** — un fader per a la intensitat de la matriu.
* **Label** — l'etiqueta de text del giny.
* **Color 1–5 Buttons** — botons de color que estableixen en directe els
  colors de la matriu (quants són útils depèn del patró).
* **Preset List** — una llista per commutar sobre la marxa el
  patró/algorisme de la matriu.

## Presets

El giny Animation té una pestanya **Presets** on construeixes la llista de
predefinits seleccionables:

* **Add a fixed-color preset** per a un espai de color escollit.
* **Add R/G/B knobs** per a un espai de color (mescla de color en directe).
* **Add a script algorithm preset** (tria un dels algorismes de la matriu).
* **Add a Text preset** utilitzant el text que introdueixis.
* Reordena els predefinits amb **move up / move down**, o **remove** per
  eliminar-los.

## Tips

* Crea una **Preset List** amb els teus aspectes preferits per a una matriu
  perquè un operador pugui canviar entre ells amb un sol toc.
* Activa **Apply changes immediately** per a un control del color pràctic i
  improvisat.
