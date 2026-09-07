---
title: '3D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **3D View** rende il palco in tre dimensioni, completo di fixture,
fasci di luce, colori e fumo atmosferico. È l'anteprima più realistica dello
show ed è utile per visualizzare angoli dei fasci, posizioni e look come li
vedrebbe il pubblico.

È una delle quattro visualizzazioni disponibili dalla barra degli strumenti nella parte superiore dello
spazio di lavoro [Fixtures and Functions](/fixtures-and-functions).

> **Nota:** La 3D View richiede un sistema in grado di eseguire il rendering
> grafico necessario. Sui sistemi che non lo supportano, viene mostrato un avviso al
> posto della scena 3D.

## Muoversi nella visualizzazione

* **Zoom** — usare i pulsanti di zoom nella barra degli strumenti o la rotellina del mouse.
* **Orbita / panoramica** — trascinare nella scena per guardarsi intorno sul palco.

## Selezionare e posizionare i fixture

* **Clic** su un fixture per selezionarlo; **Ctrl+clic** per aggiungerlo alla selezione.
* I fixture selezionati possono essere posizionati e ruotati con precisione dal pannello
  delle impostazioni (sotto), oppure puntati verso un punto nello spazio con lo strumento **Pick a 3D point**
  nel pannello sinistro (scorciatoia **Ctrl+P**) — fare clic nella scena e i fixture selezionati
  punteranno verso quel punto.

## Impostazioni della visualizzazione

Fare clic sul pulsante **impostazioni** (l'icona "barre") nella barra degli strumenti per aprire il pannello
delle impostazioni 3D. Le sue sezioni possono essere espanse e ridotte.

### Environment

* **Type** — il preset di palco da renderizzare (es. palco semplice, box, teatro).
* **Width / Height / Depth** — le dimensioni dell'ambiente del palco, in metri o
  piedi (l'unità segue l'impostazione della vista 2D).

### Rendering

* **Quality** — qualità del rendering: **Low**, **Medium**, **High** o **Ultra**.
  Impostazioni più alte hanno un aspetto migliore ma richiedono di più all'hardware grafico.
* **Ambient light** — luminosità generale della scena quando nessun fixture è acceso
  (0–100%).
* **Smoke amount** — quanta foschia atmosferica c'è nell'aria (0–100%), che
  rende i fasci più visibili.
* **Show FPS** — mostra un contatore del frame rate, utile per valutare le prestazioni.

### Position / Rotation

Queste sezioni appaiono quando qualcosa è selezionato e permettono di inserire valori
esatti **X / Y / Z**:

* **Position** — la posizione degli elementi selezionati, in millimetri.
* **Rotation** — l'orientamento degli elementi selezionati, in gradi.

Quando sono selezionati più elementi, le modifiche vengono applicate relativamente all'intero gruppo.

### Scale

Appare quando è selezionato un **elemento personalizzato**. Imposta la scala **X / Y / Z** come
percentuale. Il pulsante di **blocco** mantiene i tre assi proporzionali, così modificarne
uno ridimensiona l'elemento in modo uniforme.

### Custom items

È possibile aggiungere alla scena le proprie mesh 3D personalizzate (decorazioni, elementi scenici, tralicci, ecc.):

* **Add** (＋) — sceglie un file mesh (`.obj`, `.dae`, `.3ds`, `.stl`, `.blend`, …)
  da collocare nella scena.
* **Remove** (－) — elimina gli elementi personalizzati selezionati.
* **Normalize** (icona di compressione) — riporta gli elementi selezionati a una dimensione standard.
* L'elenco sottostante mostra tutti gli elementi personalizzati; fare clic su uno per selezionarlo (e modificarne
  posizione, rotazione e scala sopra).
