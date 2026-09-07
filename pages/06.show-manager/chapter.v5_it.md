---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Capitolo 5

# Show Manager 

Uno **Show** è una timeline che dispone altre funzioni (scene, chaser, audio,
video, …) su delle **track** lungo il tempo, in modo che un'intera performance
possa essere riprodotta come un'unica entità. Modificare uno Show è diverso
dalle altre funzioni: si apre un'area di lavoro dedicata a schermo intero, lo
**Show Manager**, invece dell'editor nel pannello destro.

Vi si accede creando uno Show dal menu **Add a new function**, oppure facendo
doppio clic su uno Show esistente nel Function Manager.

## La timeline

L'area principale è una **timeline**: il tempo scorre da sinistra a destra, e
ogni **track** orizzontale contiene gli elementi funzione posizionati su di
essa. Un **cursore** mobile indica la posizione di riproduzione corrente, e
un'intestazione mostra gli indicatori di tempo (o di battuta).

* **Trascinare** una funzione dal Function Manager nel pannello destro su una
  track per aggiungerla allo show in quel momento.
* **Fare clic** su un elemento per selezionarlo; abilitare la selezione
  multipla (pannello destro) per selezionarne diversi.
* **Trascinare** gli elementi lungo una track per cambiarne il momento di
  riproduzione, o spostarli tra track diverse.
* **Fare doppio clic** su un elemento per aprire l'editor proprio della
  funzione sottostante.

## Barra degli strumenti

In alto:

| Pulsante | Cosa fa |
|--------|--------------|
| **Name** | Il nome dello show. |
| ![](../basics/color.svg?resize=48,48) **Show items color** | Imposta il colore degli elementi della timeline selezionati, per assegnare un codice colore allo show. |
| ![](../basics/lock.svg?resize=48,48) **Lock / Unlock** | Blocca gli elementi selezionati in modo che non possano essere spostati o ridimensionati accidentalmente (l'icona alterna tra lock e unlock). |
| ![](../basics/grid.svg?resize=48,48) **Snap to grid** | Fa sì che gli elementi si agganciano alla griglia temporale quando vengono spostati. |
| <i class="fa fa-arrows-left-right-to-line fa-2x"></i> **Stretch the original function** | Quando abilitato, il ridimensionamento di un elemento estende la temporizzazione della funzione sottostante per adattarla, anziché semplicemente ritagliarla. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected items** | Rimuove gli elementi selezionati dallo show. (Le funzioni originali **non** vengono eliminate.) |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Copia gli elementi selezionati negli appunti. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Incolla gli elementi dagli appunti nella posizione del cursore. |
| **Time display** | L'ora corrente del cursore. |
| <i class="fa fa-play fa-2x"></i> **Play / Pause** | Riproduce oppure mette in pausa/riprende lo Show dalla posizione del cursore. |
| <i class="fa fa-stop fa-2x"></i> **Stop / Rewind** | Ferma la riproduzione dello Show (premere di nuovo per riavvolgere all'inizio). |
| **Markers** | La suddivisione temporale mostrata nell'intestazione: **Time**, oppure battute a **BPM 4/4**, **3/4** o **2/4**. |
| <i class="fa fa-2x fa-magnifying-glass-minus"></i><i class="fa fa-2x fa-magnifying-glass-plus"></i> **Zoom** | Ingrandisce o riduce la timeline lungo l'asse del tempo. |

## Track

Ogni track è una riga della timeline.

* Usare il controllo <i class="fa fa-plus" style="color:limegreen"></i>
  **Create a new track** per aggiungere una track.
* Quando una track è selezionata, le frecce <i class="fa fa-angle-up"></i> /
  <i class="fa fa-angle-down"></i> **move track up / down** (in alto a
  sinistra della timeline) la riordinano tra le altre track.

## Lo strumento di temporizzazione

Il pulsante <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>
**Timing** nel pannello destro apre lo **strumento di temporizzazione**, un
pannello per regolare la posizione e la durata esatte degli elementi sulla
timeline senza doverli trascinare manualmente. È la controparte precisa del
trascinamento: perfetto per allineare i cue al fotogramma, o per spostare
un'intera selezione di una quantità fissa.

Tutto nello strumento segue l'impostazione **Markers** dello show: quando la
timeline è in modalità **Time**, i valori sono mostrati e inseriti come tempo
(ore, minuti, secondi, millisecondi); quando è in una delle modalità **BPM**,
sono mostrati e inseriti come battute.

Lo strumento è diviso in tre sezioni.

### Alignment

Aggancia gli elementi selezionati al **cursore** di riproduzione:

* **Align start to cursor** — sposta ogni elemento selezionato in modo che
  *inizi* alla posizione del cursore.
* **Align end to cursor** — allunga o accorcia ogni elemento selezionato in
  modo che *termini* alla posizione del cursore (mantenendo il proprio inizio
  dov'è).

### Timings

Mostra **Start time**, **End time** e **Duration** dell'elemento selezionato.
Fare clic su uno dei tre valori per rivelare al suo posto un editor compatto
**h / m / s / ms** (o battute), digitare il valore esatto, e l'elemento si
aggiorna immediatamente:

* Con un **singolo elemento** selezionato, il valore digitato viene applicato
  in modo **assoluto** — l'elemento viene posizionato esattamente lì.
* Con **più elementi** selezionati, i campi mostrano *Multiple* e qualsiasi
  modifica viene applicata in modo **relativo** — lo stesso offset viene
  aggiunto a ogni elemento selezionato, così è possibile spostare un intero
  blocco, ad esempio, di +2 secondi in una sola volta.

Gli elementi bloccati (vedi il pulsante lock della barra degli strumenti) non
vengono modificati.

### Cut/Insert

Aggiunge o rimuove un intervallo di tempo sull'**intero show** nella posizione
del cursore — così è possibile creare spazio per una nuova sezione, o chiudere
un vuoto, e tutto ciò che segue il cursore si sposta di conseguenza:

* **Length** — fare clic per impostare quanto tempo tagliare o inserire
  (nello stesso editor h / m / s / ms o battute).
* **Insert time** — sposta in avanti tutto ciò che segue il cursore di
  *Length*, aprendo uno spazio vuoto.
* **Cut time** — rimuove un intervallo di *Length* a partire dal cursore,
  anticipando tutto ciò che lo segue.

## Pannello destro

Nello Show Manager il pannello destro è il consueto
[Function Manager](/function-manager), quindi è possibile trascinare
qualsiasi funzione sulla timeline. Guadagna inoltre il pulsante
<i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i> **Timing**
descritto sopra.
