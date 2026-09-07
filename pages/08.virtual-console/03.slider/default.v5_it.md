---
title: Slider
date: '03:02 22-08-2023'
---

Uno **Slider** è un fader nella [Virtual Console](/virtual-console). A seconda
di come è configurato può controllare il livello di un insieme di canali,
comportarsi come un submaster, pilotare il Grand Master, oppure regolare un
attributo di una funzione. Il widget **Knob** è lo stesso controllo disegnato
come manopola rotativa anziché come fader.

## Settings

### Display Style

* **DMX Value / Percentage** — se il valore visualizzato dallo slider mostra
  il DMX grezzo (0–255) o una percentuale.
* **Normal / Inverted** — la direzione dello slider (in alto = massimo, oppure
  in alto = minimo).

### Slider Mode

La modalità determina cosa controlla effettivamente lo slider:

* **Level** — controlla il livello di un insieme scelto di **channels** (la
  modalità più comune). Vedere *Level mode* più sotto.
* **Adjust** — regola un **attributo** di una funzione collegata (ad esempio
  la sua intensità o un attributo personalizzato).
* **Submaster** — lo slider funge da submaster, scalando il livello dei
  widget contenuti nel suo frame.
* **Grand Master** — lo slider controlla il Grand Master (il livello master
  globale).

### Function Control (modalità Adjust)

* **Attribute** — quale attributo della funzione viene regolato dallo slider.
* **Detach the current function** — rimuove la funzione collegata.

### Level mode

* **Channels** — i canali pilotati dallo slider. Usare **Add/Remove
  channels** per scegliere i canali dei fixture.
* **Show flash button** — aggiunge allo slider un pulsante di flash
  momentaneo che lo porta al massimo mentre è premuto.
* **Click & Go button** — aggiunge accanto allo slider un selettore rapido di
  colore/preset:
  * **None**, **RGB/CMY** (selettore colore) oppure **Gobo/Effect/Macro**
    (selettore preset).
* **Monitor channel levels** — lo slider segue (monitora) il livello di
  uscita effettivo dei suoi canali.
* **Values range** — **Upper limit** e **Lower limit** limitano l'intervallo
  entro cui si muove lo slider.

### Grand Master mode

* **Grand Master mode** — **Reduce values** (scala proporzionalmente) oppure
  **Limit values** (limita).
* Si applica solo ai **Intensity channels** oppure a **All channels**.

### External input

* **Catch up with the external controller input value** — quando associato a
  un fader fisico, lo slider inizia a muoversi solo quando il fader hardware
  supera il valore attuale, evitando salti bruschi ("pickup"/"soft
  takeover").

## Suggerimenti

* Usare la modalità **Level** con un pulsante Click & Go per creare un unico
  fader che regola sia l'intensità sia il colore di un gruppo di fixture.
* Usare la modalità **Submaster** in un frame di pulsanti/slider per
  aggiungere un livello master su un'intera sezione della console.
