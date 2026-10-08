---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

**DMX Dump** cattura i valori attualmente in output e li salva
in una **Scene**. È il modo più rapido per costruire una scena: impostare un
look manualmente usando gli strumenti dei canali, la vista DMX o il Simple Desk,
per poi "scaricare" quel look in una funzione richiamabile in seguito.

## Come funziona

Man mano che si modificano i valori dei canali manualmente, QLC+ tiene traccia
di ogni canale toccato — questi sono i **valori di dump**. Sono i candidati che
verranno scritti in una scena al momento del dump.

Il pulsante **DMX Dump** si trova nella barra degli strumenti superiore
dell'applicazione (una piccola icona "dump"). Una **bolla** rossa sul pulsante
mostra quanti canali sono attualmente catturati. Quando la bolla mostra `0`,
non è stato ancora toccato nulla e non c'è nulla da scaricare.

È possibile cancellare i valori catturati in qualsiasi momento senza eseguire il
dump usando **Reset dump channels** nel pannello destro (scorciatoia **Ctrl+R**).
I valori catturati vengono anche azzerati automaticamente in determinate
situazioni, come l'avvio di un nuovo progetto.

> Il pulsante di dump funziona solo quando la modifica delle funzioni è consentita.

## Avviare un dump

Ci sono due modi per aprire la finestra di dialogo del dump:

* **Fare clic** sul pulsante DMX Dump nella barra degli strumenti.
* **Trascinare** il pulsante DMX Dump su una funzione nel Function Manager.
  Questo preseleziona quella funzione come scena esistente in cui eseguire il
  dump (vedi sotto).

## La finestra di dialogo DMX Channel Dump

La finestra di dialogo ha due sezioni.

### Target Scene

Scegliere dove vanno i valori catturati:

* **Dump to a new Scene** — crea una nuova scena. Nella casella di testo viene
  suggerito un nome predefinito (*New Scene N*); è possibile modificarlo a
  piacere.
* **Dump to existing Scene** — aggiunge i valori catturati a una scena già
  esistente. La destinazione è la scena attualmente selezionata nel Function
  Manager; se nessuna è selezionata, questa opzione mostra *(None selected)*.
  (Trascinando il pulsante di dump su una funzione questa opzione viene
  selezionata automaticamente.)

### Channels to dump

Scegliere quali dei canali catturati vengono scritti:

* **Dump all the available channels** — esegue il dump di ogni canale in
  tutti gli universi e fixture, non solo quelli toccati. La finestra di
  dialogo mostra quanti universi e fixture sono coinvolti.
  * **Dump only non-zero values** — (disponibile con l'opzione sopra) salta i
    canali che sono a zero, in modo che la scena contenga solo i canali che
    stanno effettivamente facendo qualcosa.
* **Dump the selected fixture channels** — esegue il dump solo dei canali dei
  fixture attualmente selezionati. Questa opzione è disponibile quando i
  fixture selezionati hanno canali che sono stati toccati.

#### Detected channel types

Quando si esegue il dump dei canali dei fixture selezionati, la finestra di
dialogo elenca i **tipi di canale** trovati tra questi — ad esempio Intensity,
RGB/CMY/WAUV, Colour macros, Gobo, Pan, Tilt, Speed, Shutter/Strobe, Prism,
Beam, Effect e Maintenance. Ogni tipo ha una casella di spunta per includerlo o
escluderlo. Selezionare solo i tipi di canale che si desidera includere nella
scena — ad esempio, includere i colori ma escludere l'intensità.

## Concludere

Confermare la finestra di dialogo per creare o aggiornare la scena con i
canali scelti. La nuova scena (o quella aggiornata) appare quindi nel Function
Manager, pronta per essere modificata, visualizzata in anteprima e attivata
come qualsiasi altra funzione.
