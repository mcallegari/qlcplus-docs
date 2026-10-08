---
title: 'Audio Triggers'
date: '03:46 22-08-2023'
---

Un widget **Audio Triggers** ascolta l'audio dal vivo (dall'ingresso audio
del computer) e ne usa lo **spettro di frequenza** per pilotare funzioni,
canali DMX o altri widget. È il modo per far reagire automaticamente le luci
alla musica nella [Virtual Console](/virtual-console).

Il suono in ingresso viene suddiviso in un certo numero di **barre di
frequenza** (dai bassi agli acuti), e a ciascuna barra può essere assegnato
un obiettivo che essa controlla mentre la musica suona.

## Settings

* **Activation threshold** — il livello che una barra deve raggiungere prima
  che il suo obiettivo venga attivato.
* **Deactivation threshold** — il livello sotto al quale una barra deve
  ridiscendere prima che il suo obiettivo venga rilasciato. (Avere due
  soglie separate evita sfarfallii di accensione e spegnimento.)

### Spectrum Bars

* **Number of bars** — in quante bande di frequenza è suddiviso lo spettro.
  Più barre offrono un controllo più fine lungo la gamma di frequenze.

### Assegnazione per barra

Per ciascuna barra si imposta:

* **Name** — un'etichetta per la barra.
* **Type** — cosa controlla la barra:
  * **None** — non utilizzata.
  * **DMX** — pilota il livello di un canale DMX.
  * **Function** — avvia/ferma una funzione. Usare **Drop a Function here**
    per assegnarla.
  * **Widget** — pilota un altro widget della VC. Usare **Drop a VC Widget
    here** per assegnarlo.
* **Information** — mostra l'assegnazione attuale.

## Suggerimenti

* Assegnare le barre dei **bassi** a funzioni di intensità o strobo e le
  barre degli **acuti** ai cambi di colore per un classico look reattivo
  alla musica.
* Regolare le **soglie di attivazione/disattivazione** in base al brano, in
  modo che gli effetti scattino sui beat senza sfarfallare.
