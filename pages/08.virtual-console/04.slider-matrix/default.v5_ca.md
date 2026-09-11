---
title: 'Slider Matrix'
date: '03:07 22-08-2023'
---

Una **Slider Matrix** és una manera ràpida de crear tot un **banc de
sliders** d'un sol cop, en lloc d'afegir-los un per un. Pertany a la
[Virtual Console](/virtual-console) i és ideal per a disposicions amb un
canal per fader, grups de submasters, o qualsevol fila de faders que vulguis
disposar junts.

Una Slider Matrix no és un tipus de giny independent: crea un
[Frame](../frame) (o un [Solo Frame](../solo-frame)) ple amb una graella de
[Sliders](../slider). Un cop creada, cada slider es configura
individualment, i el frame que l'envolta es comporta com qualsevol altre
frame.

## Crear-ne una

Arrossega **Slider Matrix** des de la llista de ginys fins a la pàgina.
Apareix un diàleg de **Widget matrix setup**, on estableixes:

* **Columns** — el nombre de sliders en horitzontal (1–99).
* **Rows** — el nombre de sliders en vertical (1–99).
* **Width / Height** — la mida de cada slider individual, en píxels (els
  sliders tenen per defecte una forma alta i estreta).
* **Frame type** — si els sliders van dins d'un frame **Normal** o **Solo**:
  * **Normal** — els sliders són independents (l'opció habitual).
  * **Solo** — només es reprodueix la funció d'un slider a la vegada (vegeu
    [Solo Frame](/virtual-console)).

Confirma per crear el banc.

## Després de la creació

* Cada cel·la és un [Slider](../slider) normal — selecciona'n un en mode
  edició per establir el seu mode (Level, Submaster, etc.) i els canals o
  l'atribut que controla.
* El banc viu dins d'un [Frame](../frame), de manera que pots moure,
  redimensionar, etiquetar i paginar tot el bloc alhora. Afegeix un slider
  **Submaster** al frame per posar un nivell master sobre tot el banc.

## Tips

* Crea una fila de sliders **Level** per fer una taula senzilla amb un canal
  per fader.
* Mantén els sliders relacionats en un mateix frame i afegeix-hi un
  **Submaster** per governar-los tots des d'un únic fader.
