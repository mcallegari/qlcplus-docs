---
title: 'Consola Virtual'
date: '14:21 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Capítol 7

# Consola Virtual

La **Consola Virtual** és la teva superfície de control personalitzada per
dirigir l'espectacle. Es construeix a partir de **ginys** — botons, controls
lliscants, pads XY, llistes de cues, rellotges i més — disposats en una o més
**pàgines**, organitzats exactament com vulguis per operar el teu equip en
directe. En resum: la resta de QLC+ és on *crees* les funcions; la Consola
Virtual és on les *reprodueixes*.

Té dos modes:

* **Mode Operate** (predeterminat) — en fer clic als ginys, aquests
  s'activen. Així és com s'utilitza la consola durant un espectacle.
* **Mode Edit** — hi afegeixes, mous, redimensiones i configures ginys.

## Estructura

* Una **barra d'eines** a la part superior mostra una pestanya per cada
  **pàgina**; fes clic a una pestanya per canviar de pàgina. A la dreta hi ha
  l'interruptor de ![](../basics/grid.svg?resize=24,24) **ajust a la
  graella** (ajusta els ginys a una graella) i els controls de **zoom**.
* L'**àrea de la pàgina** de sota és el llenç on resideixen els ginys.
* En mode Edit, un **plafó dret** conté les eines d'edició.

### Pàgines

La consola pot tenir diverses pàgines, cadascuna amb la seva pròpia
superfície de ginys — per exemple, una pàgina per cançó o per àrea de
l'escenari.

* **Fes clic** a una pestanya de pàgina per mostrar-la.
* **Fes clic amb el botó dret** a una pestanya de pàgina per **separar-la**
  en la seva pròpia finestra (útil per a una segona pantalla).
* Una pàgina pot estar **protegida amb PIN**; en canviar-hi es demanarà el
  PIN.

Consulta [VC Page](/virtual-console/page) per als paràmetres de la pàgina
(mida, PIN, afegir/eliminar pàgines).

## Plafó dret (eines d'edició)

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Afegeix un giny nou** | Obre la llista de ginys; arrossega un tipus de giny a la pàgina per crear-lo. |
| ![](../basics/edit.svg?resize=48,48) **Mode Edit** | Activa/desactiva el mode Edit (el botó mostra una vora vermella parpellejant mentre està actiu). Amb un giny seleccionat, mostra les propietats d'aquest giny. |
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Obre la llista de funcions perquè les puguis arrossegar sobre els ginys i vincular-les. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Elimina els ginys seleccionats** | Elimina els ginys seleccionats. |
| <i class="fa fa-copy fa-2x"></i> **Copia** | Copia els ginys seleccionats al porta-retalls. |
| <i class="fa fa-paste fa-2x"></i> **Enganxa** | Enganxa els ginys del porta-retalls a la pàgina. També pots arrossegar el botó d'enganxar sobre un marc de destinació per enganxar-hi a dins. |

## Treballar amb ginys

* **Arrossega** un tipus de giny des de la llista fins a la pàgina per
  afegir-lo. Alguns ginys (Matriu de Botons, Matriu de Controls Lliscants)
  primer demanen un nombre de files i columnes.
* En mode Edit, **fes clic** a un giny per seleccionar-lo (Ctrl+clic per
  seleccionar-ne diversos), **arrossega'l** per moure'l i utilitza les
  nanses per redimensionar-lo.
* **Vincula una funció** a un giny arrossegant-la des del Function Manager
  fins al giny.

## Propietats dels ginys

Quan un giny està seleccionat en mode Edit, el plafó dret mostra les seves
propietats, organitzades en pestanyes:

* **Settings** — les opcions pròpies del giny (documentades per a cada giny
  més avall).
* **Presets** — per als ginys que els admeten (Animation, XY Pad, Speed
  Dial).
* **External controls** — vincula controladors físics i dreceres de teclat
  al giny (vegeu [External controls](#external-controls)).

### Propietats bàsiques (tots els ginys)

Tots els ginys comparteixen una secció de **Basic properties**:

* **Label** — el títol del giny.
* **Background color** — el color de fons del giny.
* **Foreground color** — el color del seu text/gràfics.
* **Font** — el tipus de lletra utilitzat per a la seva etiqueta.
* **Background image** — una imatge opcional mostrada darrere del giny.
* **Z-Index** — l'ordre de superposició, perquè els ginys superposats es
  disposin de manera previsible.
* **Alignment** — quan hi ha diversos ginys seleccionats, alinea'ls a
  l'esquerra/dreta/dalt/baix.

### External controls

La pestanya **External controls** vincula entrades al giny perquè el puguis
operar des de maquinari extern. Pots vincular:

* una **entrada externa** (un fader, un botó o un encoder d'un perfil
  d'entrada MIDI/DMX/OSC/etc.), o bé
* una **drecera de teclat**.

Això permet controlar la Consola Virtual des d'una superfície de control
física o des del teclat en lloc del ratolí.

## Els ginys

| Giny | Finalitat |
|--------|---------|
| ![](../basics/button.svg?resize=48,48) [Button](/virtual-console/button) | Activa una funció (toggle, flash, blackout, …). |
| ![](../basics/buttonmatrix2.png?resize=48,48) [Button Matrix](/virtual-console/button-matrix) | Crea una graella de botons dins d'un marc. |
| ![](../basics/slider.svg?resize=48,48) [Slider](/virtual-console/slider) | Un fader per a nivells, submasters, el Grand Master o un atribut de funció. |
| ![](../basics/sliders.svg?resize=48,48) [Slider Matrix](/virtual-console/slider-matrix) | Crea una graella de controls lliscants dins d'un marc. |
| ![](../basics/knob.svg?resize=48,48) [Knob](/virtual-console/slider) | Una variant rotatòria de l'Slider. |
| ![](../basics/animation.svg?resize=48,48) [Animation](/virtual-console/animation) | Reprodueix i controla una RGB Matrix amb canvis de color/preset en directe. |
| ![](../basics/speed.svg?resize=48,48) [Speed Dial](/virtual-console/speed-dial) | Estableix i multiplica la temporització de les funcions. |
| ![](../basics/xypad.svg?resize=48,48) [XY Pad](/virtual-console/xy-pad) | Control pan/tilt de dos eixos per a fixtures mòbils. |
| ![](../basics/cuelist.svg?resize=48,48) [Cue List](/virtual-console/cue-list) | Reprodueix un chaser cue a cue, com una escaleta teatral. |
| ![](../basics/frame.svg?resize=48,48) [Frame](/virtual-console/frame) | Un contenidor que agrupa ginys. |
| ![](../basics/soloframe.svg?resize=48,48) [Solo Frame](/virtual-console/solo-frame) | Un contenidor que garanteix que només s'executi una de les seves funcions alhora. |
| ![](../basics/label.svg?resize=48,48) [Label](/virtual-console/label) | Una etiqueta de text estàtica per a títols i agrupacions. |
| ![](../basics/audiotriggers.svg?resize=48,48) [Audio Triggers](/virtual-console/audio-triggers) | Controla funcions/nivells a partir de l'anàlisi d'àudio en directe. |
| ![](../basics/clock.svg?resize=48,48) [Clock](/virtual-console/clock) | Un rellotge, cronòmetre o compte enrere que pot programar funcions. |
</content>
