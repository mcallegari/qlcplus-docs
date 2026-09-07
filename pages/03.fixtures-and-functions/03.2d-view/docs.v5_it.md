---
title: '2D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **2D View** mostra i fixture disposti su una pianta piatta del palco. Ogni
fixture è disegnato nella sua posizione reale e, quando i fixture emettono luce,
se ne vedono il colore e il fascio dal punto di vista scelto. È la visualizzazione principale per
disporre spazialmente un impianto e per progettare look visivamente.

È una delle quattro visualizzazioni disponibili dalla barra degli strumenti nella parte superiore dello
spazio di lavoro [Fixtures and Functions](/fixtures-and-functions).

## Muoversi nella visualizzazione

* **Zoom** — usare i pulsanti di zoom nella barra degli strumenti, o la **rotellina del mouse** sopra
  la visualizzazione, per ingrandire e rimpicciolire.
* **Scorrimento** — quando la pianta è più grande della finestra, usare le barre di scorrimento per
  spostarsi.
* Un'**immagine di sfondo personalizzata** (vedi impostazioni) può essere posizionata dietro la griglia,
  per esempio una pianta del locale.

## Selezionare i fixture

* **Clic** su un fixture per selezionarlo (sostituendo la selezione corrente).
* **Clic su un'area vuota e trascinamento** per disegnare un rettangolo di selezione; ogni fixture
  al suo interno viene selezionato. Il rettangolo funziona in qualsiasi direzione di trascinamento.
* Tenere premuto **Ctrl** durante il clic o il trascinamento per aggiungere alla selezione
  corrente.
* **Clic su un'area vuota** senza trascinare per svuotare la selezione.

## Spostare i fixture

Trascinare un fixture selezionato (o un gruppo di fixture selezionati) per riposizionarlo
sul palco. La posizione è memorizzata in unità del mondo reale (metri o piedi), in modo che
le visualizzazioni 2D e 3D rimangano coerenti.

È anche possibile trascinare un fixture dal browser **Add Fixtures** (pannello sinistro)
direttamente sulla pianta.

## Impostazioni della visualizzazione

Fare clic sul pulsante **impostazioni** (l'icona "barre") nella barra degli strumenti per aprire il pannello
delle impostazioni 2D a destra. Contiene:

### Environment

* **Width / Height / Depth** — le dimensioni dell'ambiente del palco, in metri o
  piedi.
* **Grid units** — passa tra **Meters** e **Feet**. Le dimensioni esistenti vengono
  convertite automaticamente quando si cambia unità.
* **Point of view** — sceglie come viene visto il palco: vista **Top**, **Front**, **Right
  side** o **Left side**. Questo cambia su quale piano sono disposti i fixture.

### Custom Background

* **Set a custom background** (pulsante immagine) — sceglie un file immagine da mostrare dietro
  la griglia.
* Il percorso dell'immagine corrente è mostrato accanto ad essa.
* **Reset background** (✕) — rimuove l'immagine di sfondo.

### Selected fixtures

Questa sezione appare quando uno o più fixture sono selezionati:

* **Gel color** — per i fixture dimmer/generici, fare clic sul campione di colore per scegliere
  un colore gel applicato al fascio del fixture.
* **Fixed zoom** — imposta un angolo del fascio fisso (in gradi) per i fixture che non
  hanno un canale zoom.
* **Rotation** — ruota i fixture selezionati sul punto di vista corrente.
* **Alignment** — allinea i fixture selezionati a **sinistra** o in **alto**.
* **Distribution** — distribuisce i fixture selezionati in modo **uniforme** in direzione
  orizzontale o verticale (utile per uniformare la spaziatura lungo una
  riga o una colonna).
