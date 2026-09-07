---
title: 'Virtual Console'
date: '14:21 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Capitolo 7

# Virtual Console

La **Virtual Console** è la superficie di controllo personalizzata per gestire lo
spettacolo. Si costruisce a partire da **widget** — pulsanti, slider, XY pad,
cue list, orologi e altro — disposti su una o più **pagine**, organizzati
esattamente come si desidera per operare dal vivo l'impianto. In breve: nel
resto di QLC+ si *creano* le funzioni; nella Virtual Console le si *esegue*.

Ha due modalità:

* **Modalità Operate** (predefinita) — cliccando sui widget questi vengono
  attivati. È il modo in cui la console viene usata durante uno spettacolo.
* **Modalità Edit** — si aggiungono, spostano, ridimensionano e configurano i
  widget.

## Struttura

* Una **barra degli strumenti** in alto mostra una scheda per ogni **pagina**;
  fare clic su una scheda per passare a quella pagina. A destra si trovano
  l'interruttore ![](../basics/grid.svg?resize=24,24) di **snap** (allinea i
  widget a una griglia) e i controlli di **zoom**.
* L'**area della pagina** sottostante è la superficie su cui risiedono i widget.
* In modalità Edit, un **pannello a destra** contiene gli strumenti di
  modifica.

### Pagine

La console può avere più pagine, ciascuna con la propria superficie di widget —
ad esempio una pagina per ogni brano, o per ogni area del palco.

* **Clic** su una scheda pagina per mostrarla.
* **Clic destro** su una scheda pagina per **staccarla** in una finestra
  separata (utile per un secondo schermo).
* Una pagina può essere **protetta da PIN**; passando a essa viene richiesto il
  PIN.

Vedere [VC Page](/virtual-console/page) per le impostazioni della pagina
(dimensioni, PIN, aggiunta/rimozione di pagine).

## Pannello a destra (strumenti di modifica)

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Aggiungi un nuovo widget** | Apre l'elenco dei widget; trascinare un tipo di widget sulla pagina per crearlo. |
| ![](../basics/edit.svg?resize=48,48) **Modalità Edit** | Attiva/disattiva la modalità Edit (il pulsante mostra un bordo rosso lampeggiante quando attiva). Con un widget selezionato mostra le proprietà di quel widget. |
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Apre l'elenco delle funzioni per poterle trascinare sui widget e collegarle. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Rimuovi i widget selezionati** | Elimina i widget selezionati. |
| <i class="fa fa-copy fa-2x"></i> **Copia** | Copia i widget selezionati negli appunti. |
| <i class="fa fa-paste fa-2x"></i> **Incolla** | Incolla i widget dagli appunti sulla pagina. È anche possibile trascinare il pulsante incolla su un frame di destinazione per incollare al suo interno. |

## Lavorare con i widget

* **Trascinare** un tipo di widget dall'elenco sulla pagina per aggiungerlo.
  Alcuni widget (Button Matrix, Slider Matrix) richiedono prima un numero di
  righe e colonne.
* In modalità Edit, **fare clic** su un widget per selezionarlo (Ctrl+clic per
  selezionarne più di uno), **trascinare** per spostarlo e usare le maniglie
  per ridimensionarlo.
* **Collegare una funzione** a un widget trascinandola dal Function Manager sul
  widget.

## Proprietà dei widget

Quando un widget è selezionato in modalità Edit, il pannello a destra ne mostra
le proprietà, organizzate in schede:

* **Settings** — le opzioni specifiche del widget (documentate per ciascun
  widget più sotto).
* **Presets** — per i widget che li supportano (Animation, XY Pad, Speed
  Dial).
* **External controls** — associa controller fisici e scorciatoie da tastiera
  al widget (vedere [External controls](#external-controls)).

### Proprietà di base (tutti i widget)

Ogni widget condivide una sezione **Basic properties**:

* **Label** — la didascalia del widget.
* **Background color** — il colore di sfondo del widget.
* **Foreground color** — il colore del testo/della grafica.
* **Font** — il carattere usato per l'etichetta.
* **Background image** — un'immagine facoltativa mostrata dietro al widget.
* **Z-Index** — l'ordine di sovrapposizione, così i widget sovrapposti si
  dispongono in modo prevedibile.
* **Alignment** — quando sono selezionati più widget, allinearli a
  sinistra/destra/in alto/in basso.

### External controls

La scheda **External controls** associa gli ingressi al widget in modo da
poterlo azionare da hardware esterno. È possibile associare:

* un **ingresso esterno** (un fader, un pulsante o un encoder da un profilo di
  ingresso MIDI/DMX/OSC/ecc.), oppure
* una **scorciatoia da tastiera**.

In questo modo la Virtual Console può essere pilotata da una superficie di
controllo fisica o dalla tastiera anziché dal mouse.

## I widget

| Widget | Scopo |
|--------|---------|
| ![](../basics/button.svg?resize=48,48) [Button](/virtual-console/button) | Attiva una funzione (toggle, flash, blackout, …). |
| ![](../basics/buttonmatrix2.png?resize=48,48) [Button Matrix](/virtual-console/button-matrix) | Crea una griglia di pulsanti all'interno di un frame. |
| ![](../basics/slider.svg?resize=48,48) [Slider](/virtual-console/slider) | Un fader per livelli, submaster, il Grand Master o un attributo di funzione. |
| ![](../basics/sliders.svg?resize=48,48) [Slider Matrix](/virtual-console/slider-matrix) | Crea una griglia di slider all'interno di un frame. |
| ![](../basics/knob.svg?resize=48,48) [Knob](/virtual-console/slider) | Una variante rotativa dello Slider. |
| ![](../basics/animation.svg?resize=48,48) [Animation](/virtual-console/animation) | Riproduce e controlla una RGB Matrix con cambi di colore/preset dal vivo. |
| ![](../basics/speed.svg?resize=48,48) [Speed Dial](/virtual-console/speed-dial) | Imposta e moltiplica i tempi delle funzioni. |
| ![](../basics/xypad.svg?resize=48,48) [XY Pad](/virtual-console/xy-pad) | Controllo pan/tilt a due assi per i fixture mobili. |
| ![](../basics/cuelist.svg?resize=48,48) [Cue List](/virtual-console/cue-list) | Riproduce un chaser cue per cue, come una scaletta teatrale. |
| ![](../basics/frame.svg?resize=48,48) [Frame](/virtual-console/frame) | Un contenitore che raggruppa i widget. |
| ![](../basics/soloframe.svg?resize=48,48) [Solo Frame](/virtual-console/solo-frame) | Un contenitore che garantisce che al massimo una delle sue funzioni sia in esecuzione alla volta. |
| ![](../basics/label.svg?resize=48,48) [Label](/virtual-console/label) | Un'etichetta di testo statica per titoli e raggruppamenti. |
| ![](../basics/audiotriggers.svg?resize=48,48) [Audio Triggers](/virtual-console/audio-triggers) | Pilota funzioni/livelli a partire dall'analisi audio dal vivo. |
| ![](../basics/clock.svg?resize=48,48) [Clock](/virtual-console/clock) | Un orologio, cronometro o timer che può programmare l'esecuzione di funzioni. |
