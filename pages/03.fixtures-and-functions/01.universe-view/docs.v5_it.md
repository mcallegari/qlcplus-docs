---
title: 'Universe View'
date: '13:53 27-06-2026'
published: true
taxonomy:
    category: docs
---

La **Universe View** mostra un singolo universo DMX come una griglia dei suoi 512
canali. È la più tecnica delle quattro visualizzazioni ed è utile per verificare
esattamente quali canali occupa ciascun fixture, individuare vuoti o sovrapposizioni,
e riassegnare gli indirizzi ai fixture.

È una delle quattro visualizzazioni disponibili dalla barra degli strumenti nella parte superiore dello
spazio di lavoro [Fixtures and Functions](/fixtures-and-functions). Usare il **selettore
dell'universo** in quella barra degli strumenti per scegliere quale universo si sta visualizzando.

## La griglia

La visualizzazione è una griglia di celle, una cella per canale DMX (indirizzi 1–512). Ogni
fixture occupa un blocco contiguo di celle corrispondente ai suoi canali,
etichettato con il nome del fixture. L'icona mostrata in ciascuna cella indica il tipo
di quel canale (intensità, colore, pan, tilt, e così via).

Passare il mouse su una cella per vedere un tooltip che descrive il fixture e il canale a quell'indirizzo.

Il nome dell'universo attualmente mostrato è visualizzato in alto a sinistra.

## Selezionare i fixture

* **Clic** sulle celle di un fixture per selezionarlo. Selezionare un fixture sostituisce la
  selezione corrente.
* Tenere premuto **Ctrl** (oppure attivare **Toggle multiple selection** nel pannello sinistro) per
  aggiungere fixture alla selezione invece di sostituirla.

## Spostare un fixture

Trascinare un fixture selezionato lungo la griglia per spostarlo a un indirizzo di partenza
diverso. Durante il trascinamento, le celle di destinazione vengono evidenziate per mostrare dove
atterrerà il fixture:

* Se la nuova posizione è libera, lo spostamento è consentito.
* Se la nuova posizione si sovrapporrebbe a un altro fixture, lo spostamento viene rifiutato e
  il fixture rimane dov'era.

## Taglia e incolla

Due pulsanti in alto a destra della visualizzazione permettono di duplicare o riposizionare i fixture:

* **Cut** (forbici) — copia i fixture attualmente selezionati negli appunti.
* **Paste** (appunti) — colloca i fixture degli appunti nella prima posizione libera
  disponibile nell'universo. Se non c'è spazio libero sufficiente, viene mostrato un errore
  e nulla viene incollato.

## Aggiungere fixture

È anche possibile trascinare un fixture dal browser **Add Fixtures** (pannello sinistro)
direttamente sulla griglia. Durante il trascinamento, la griglia evidenzia i canali che il
fixture occuperebbe e mostra se l'indirizzo scelto è libero. Rilasciarlo su un blocco
libero per patcharlo lì.
