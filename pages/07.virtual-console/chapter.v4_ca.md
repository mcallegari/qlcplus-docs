---
title: Consola Virtual
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

L'objectiu de la Consola Virtual és actuar com un llenç en blanc sobre el qual l'usuari pot crear un disseny de taula d'il·luminació de la seva elecció. Els usuaris poden col·locar diversos elements de la interfície gràfica d'usuari, anomenats ginys, a la superfície de la consola:

* Botons per a iniciar i aturar funcions
* Controls Lliscants per ajustar els valors del canals o la intensitat de les funcions
* Selectors de Velocitat per ajustar les velocitats de les funcions
* Pads XY per moure manualment feixos de llum intel·ligents
* Llistes Cue amb finalitats teatrals
* Marcs per a agrupar diversos ginys junts
* Marcs de Solo per mantenir només un botó/funció actiu alhora
* Etiquetes per actuar com a bàners d'informació estàtica per a altres ginys

La part superior de la Consola Virtual està dedicada a una barra d'eines que proporciona un accés ràpid a les accions més habituals: afegir ginys nous, copiar-los al/des del porta-retalls, configurar els ginys i, en cas d'emergències, un botó de pànic per aturar totes les funcions actualment en execució.

Cada estil de Giny de la Consola Virtual es pot configurar (fins a cert punt). Els Ginys es poden moure a qualsevol lloc i redimensionar a qualsevol mida en el llenç de la consola virtual. Consulta l'article sobre l'[Estil i Col·locació dels Ginys de la Consola Virtual](styling-and-placement).

### Controls de la Barra d'Eines

|     |     |
| --- | --- |
| ![](/basics/button.png) | Afegeix un [Botó](button) nou al marc seleccionat actualment (CTRL+MAJ+B) |
| ![](/basics/buttonmatrix.png) | Afegeix una nova [Matriu de Botons](button-matrix) al marc seleccionat actualment, utilitzant el diàleg dedicat (CTRL+MAJ+M) |
| ![](/basics/slider.png) | Afegeix un nou [Slider/Control Lliscant](slider) al marc seleccionat (CTRL+MAJ+S) |
| ![](/basics/slidermatrix.png) | Afegeix una nova [Matriu de Sliders/Controls Lliscants](slider-matrix) al marc seleccionat actualment (CTRL+MAJ+I) |
| ![](/basics/rgbmatrix.png) | Afegeix una nova [Animació](animation) al marc seleccionat (CTRL+MAJ+R) |
| ![](/basics/knob.png) | Afegeix una nova [Perilla/Knob](slider) al marc seleccionat. Aquesta és una drecera convenient per a afegir un giny de control lliscant utilitzant l'estil de perilla/knob (CTRL+MAJ+K) |
| ![](/basics/speed.png) | Afegeix un nou [Selector de Velocitat](speed-dial) al marc seleccionat (CTRL+MAJ+D) |
| ![](/basics/xypad.png) | Afegeix un nou [Pad XY](xy-pad) al marc seleccionat (CTRL+MAJ+X) |
| ![](/basics/cuelist.png) | Afegeix una nova [Llista de Cues](cue-list) al marc seleccionat (CTRL+MAJ+C) |
| ![](/basics/frame.png) | Afegeix un nou [Marc](frame) al marc seleccionat (CTRL+MAJ+F) |
| ![](/basics/soloframe.png) | Afegeix un nou [Marc de Solo](solo-frame) al marc seleccionat (CTRL+MAJ+O) |
| ![](/basics/label.png) | Afegeix una [Etiqueta](label) nova al marc seleccionat actualment (CTRL+MAJ+L) |
| ![](/basics/audioinput.png) | Afegeix un nou [Giny Activador d'Àudio](audio-tiggers) al marc seleccionat (CTRL+MAJ+A) |
| ![](/basics/clock.png) | Afegeix un Giny de Rellotge nou al marc seleccionat (CTRL+MAJ+T). Aquest giny es pot utilitzar per a 3 propòsits: Rellotge del Sistema, Cronòmetre i Compte Enrere.  <br>En els dos últims casos i quan QLC+ estigui en mode d'operació, fer clic amb el botó esquerre del ratolí farà pausa al comptador, mentre que fer clic amb el botó dret del ratolí reiniciarà el comptador al valor inicial.  <br>Quan està en mode rellotge del sistema, és possible programar quan iniciar una funció QLC+ durant l'hora del dia. |
| ![](/basics/editcut.png) | Retalla els ginys seleccionats al porta-retalls. Tingueu en compte que els ginys només desapareixeran quan s'enganxin a la nova ubicació (CTRL+X) |
| ![](/basics/editcopy.png) | Copia els ginys seleccionats al porta-retalls (CTRL+C) |
| ![](/basics/editpaste.png) | Enganxa els ginys del porta-retalls al marc seleccionat (CTRL+V) |
| ![](/basics/editdelete.png) | Destrueix completament el/s giny/s seleccionat/s. Si s'ha seleccionat un marc, això destruirà tot el que hi ha dins, inclosos altres marcs (Suprimir) |
| ![](/basics/edit.png) | Configura el giny seleccionat utilitzant el seu propi diàleg de configuració (CTRL+E) |
| ![](/basics/editclear.png) | Canvia el nom del/s giny/s seleccionat/s. |
| ![](/basics/up.png) | Porta el giny seleccionat al davant (MAJ+UP) |
| ![](/basics/down.png) | Envia el giny seleccionat cap enrere (MAJ+AVALL) |
| ![](/basics/color.png) | Canvia el color de fons del giny seleccionat (MAJ+B) |
| ![](/basics/image.png) | Estableix una imatge de fons per al giny seleccionat (MAJ+I) |
| ![](/basics/fontcolor.png) | Canvia el color del tipus de lletra del giny seleccionat. |
| ![](/basics/fonts.png) | Estableix les propietats del tipus de lletra del giny seleccionat (MAJ+O) |
| ![](/basics/configure.png) | Configureu les propietats de la Consola Virtual, com ara la mida de l'espai de treball, les propietats predeterminades dels ginys i les propietats del control lliscant del Grand Master. |
| ![](/basics/panic.png) | Atura totes les funcions en execució. |
