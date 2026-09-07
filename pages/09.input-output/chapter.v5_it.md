---
title: 'Input Output'
date: '04:54 22-08-2023'
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
### Capitolo 8

# Input/Output

Il contesto **Input/Output** è il luogo in cui si collegano gli **universi**
interni di QLC+ al mondo reale — i plugin e i dispositivi che inviano il segnale
DMX verso le luci e i controller che inviano input in ingresso. Per impostazione
predefinita QLC+ fornisce diversi universi, che possono essere aggiunti o
rimossi secondo necessità.

La mappatura di input/output viene salvata all'interno del progetto corrente,
quindi è possibile spostare un progetto su un altro computer o sistema
operativo senza doverlo riconfigurare. Se non è caricato alcun progetto, QLC+
mantiene la mappatura come configurazione di "fallback".

Per aprire il contesto, utilizzare la scheda ![](/basics/inputoutput.svg?resize=24,24)
**Input/Output** nella parte inferiore della schermata principale di QLC+.

## Struttura

Il contesto è un diagramma di patch con un pannello su ciascun lato:

* **Pannello sinistro** — gli strumenti per il lato **input** dell'universo
  selezionato (plugin di input, profili di input e configurazione plugin/audio).
* **Centro** — una riga di blocchi, uno per **universo** (più un blocco audio in
  alto). Le patch di input si collegano a sinistra di ciascun blocco, quelle di
  output a destra, disegnate come **collegamenti** (wire).
* **Pannello destro** — gli strumenti per il lato **output**, oltre a blackout e
  ai pulsanti per aggiungere/rimuovere universi.

Fare clic su un blocco universo per selezionarlo; i pannelli laterali agiranno
quindi su quell'universo.

## Il blocco universo

Ogni universo è disegnato come un blocco centrale con i propri collegamenti:

* **Nome** — fare doppio clic sul blocco per rinominare l'universo con un nome
  significativo ("Palco sinistro", "Teste mobili", …).
* <i class="fa fa-arrow-right-long"></i> **Passthrough** — il piccolo pulsante a
  freccia attiva/disattiva il passthrough per l'universo (vedere [più sotto](#passthrough-delluniverso)).
* **F — Feedback** — quando è presente una patch di input, il pulsante **F**
  abilita/disabilita la linea di feedback verso il controller.

## Patching

Il patching si effettua tramite **trascinamento** (drag and drop):

* Aprire l'elenco dei plugin di **input** o **output** dal pannello laterale
  (il pulsante ![](/basics/inputoutput.svg?resize=24,24)), quindi **trascinare
  una riga del plugin** sul lato sinistro (input) o destro (output) di un
  blocco universo. Viene disegnato un collegamento per mostrare la connessione.
* Ogni universo può avere **un solo input** ma **più output** (trascinare
  altre righe di plugin sul lato destro per aggiungerli).
* Per **rimuovere** una patch, trascinare il relativo blocco lontano
  dall'universo e rilasciarlo nel cestino <i class="fa fa-trash-can"></i> che
  appare nella parte inferiore dello schermo.

Se un plugin richiede una configurazione prima che le sue righe appaiano,
utilizzare il pulsante ![](/basics/configure.svg?resize=24,24) **configurazione
plugin** nel pannello laterale (viene mostrato solo quando il plugin supporta
impostazioni manuali).

## Aggiungere / rimuovere universi

Il pannello destro contiene i pulsanti di gestione degli universi:

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Aggiungi un nuovo universo** | Aggiunge un nuovo universo, denominato "Universe X" dove X è un numero progressivo (che è anche il suo ID). |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Rimuovi l'universo selezionato** | Rimuove l'ultimo universo. **Prestare attenzione — questa operazione può influire sui fixture patchati e non può essere annullata.** |

## Blackout

Il pannello destro dispone inoltre di un interruttore blackout
(<i class="fa fa-eye"></i> / <i class="fa fa-eye-slash"></i>) che forza a zero
**tutte le patch di output** — uno spegnimento istantaneo di tutto l'impianto.
Attivarlo di nuovo per ripristinare l'output.

## Passthrough dell'universo

Quando il passthrough è abilitato, un universo si limita a inoltrare tutto ciò
che riceve sulla propria linea di **input** verso la propria linea di
**output**. Questo è utile per:

* **Conversione di protocollo** — ad esempio mappare in modo trasparente una
  rete Art-Net verso un adattatore DMX USB o MIDI.
* **Monitoraggio di dati esterni** — patchare fixture e osservare i dati in
  ingresso nel monitor DMX.
* **Unione con un banco esterno** — consentire a un banco luci esterno di
  controllare alcuni canali mentre QLC+ controlla luci intelligenti sullo
  stesso universo.
* **Configurazioni con Raspberry Pi** — programmare su un PC, quindi passare la
  riproduzione a un Pi che rimane collegato ai dispositivi.

I dati di passthrough non sono influenzati dal Grand Master o dai modificatori
di canale. Vengono uniti in modalità HTP con l'output di QLC+ nei punti in cui
sono patchati dei fixture (non vengono utilizzate le impostazioni di canale
LTP/HTP). Il blackout **influisce** invece sui dati di passthrough.

## Audio

Il blocco nella parte superiore dell'elenco rappresenta i dispositivi di input
e output **audio**. Selezionarlo, quindi utilizzare i pulsanti
![](/basics/audiocard.svg?resize=24,24) nei pannelli laterali per scegliere la
sorgente di input audio e il dispositivo di output, e il pulsante
![](/basics/configure.svg?resize=24,24) per aprire la configurazione audio.

## Input e feedback

Quando una linea di input viene patchata, viene abilitata immediatamente, così
è possibile testarla: muovere un fader o una manopola sul proprio controller e,
se funziona correttamente, si vedrà l'attività di input su quell'universo.

Se il proprio controller dispone di un canale di ritorno, QLC+ può inviargli un
**feedback** visivo/meccanico (ad esempio per illuminare i pulsanti o
motorizzare i fader su un Behringer BCF2000). Abilitarlo con il pulsante **F**
sul blocco universo. Il feedback è attualmente supportato via MIDI, OSC e
loopback.

Per ottenere il massimo da un controller esterno, configurare un **profilo di
input** — vedere [Profili di Input](input-profiles).
