---
title: 'Slider Matrix'
date: '03:07 22-08-2023'
---

Una **Slider Matrix** è un modo rapido per creare un intero **banco di
slider** in un'unica operazione, invece di aggiungerli uno alla volta.
Appartiene alla [Virtual Console](/virtual-console) ed è ideale per layout con
un canale per fader, gruppi di submaster o qualsiasi fila di fader che si
vuole disporre insieme.

Una Slider Matrix non è un tipo di widget separato: crea un
[Frame](../frame) (o uno [Solo Frame](../solo-frame)) riempito con una
griglia di [Slider](../slider). Una volta creata, ogni slider viene
configurato individualmente e il frame che li contiene si comporta come
qualsiasi altro frame.

## Creazione

Trascinare **Slider Matrix** dall'elenco dei widget sulla pagina. Appare una
finestra di dialogo **Widget matrix setup**, in cui impostare:

* **Columns** — il numero di slider in orizzontale (1–99).
* **Rows** — il numero di slider in verticale (1–99).
* **Width / Height** — la dimensione di ogni singolo slider, in pixel (per
  impostazione predefinita gli slider hanno una forma stretta e alta).
* **Frame type** — se gli slider vanno all'interno di un frame **Normal**
  oppure **Solo**:
  * **Normal** — gli slider sono indipendenti (la scelta abituale).
  * **Solo** — solo la funzione di uno slider viene riprodotta alla volta
    (vedere [Solo Frame](/virtual-console)).

Confermare per creare il banco.

## Dopo la creazione

* Ogni cella è uno [Slider](../slider) normale — selezionarne uno in
  modalità Edit per impostarne la modalità (Level, Submaster, ecc.) e i
  canali o l'attributo che controlla.
* Il banco risiede in un [Frame](../frame), quindi è possibile spostare,
  ridimensionare, etichettare e impaginare l'intero blocco insieme.
  Aggiungere uno slider **Submaster** al frame per ottenere un livello
  master sull'intero banco.

## Suggerimenti

* Creare una fila di slider **Level** per realizzare una semplice consolle
  con un canale per fader.
* Mantenere gli slider correlati in un unico frame e aggiungere un
  **Submaster** per governarli tutti da un unico fader.
