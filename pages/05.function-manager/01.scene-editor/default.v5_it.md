---
title: 'Editor Scena'
---

Una **Scena** è la funzione più basilare: un'impostazione fissa composta dai valori dei
canali per uno o più fixture. L'Editor Scena si apre nel pannello destro dell'area di
lavoro [Fixtures and Functions](/fixtures-and-functions) quando si crea o si modifica
una scena.

Una scena è costruita a partire da **componenti** — i fixture, i gruppi di fixture e le
palette che controlla. I valori effettivi dei canali per questi componenti si impostano
utilizzando le viste e gli strumenti dei canali nel pannello sinistro; l'editor stesso
gestisce quali componenti appartengono alla scena e come questa esegue la dissolvenza.

## Barra degli strumenti

* **Nome** — il nome della scena (il campo di testo nella barra superiore). Modificabile liberamente.
* **Indietro** (freccia) — torna all'editor precedente o al Gestore Funzioni.
* **Aggiungi un fixture/gruppo** (icona fixture con ＋) — apre il Gestore Gruppi Fixture
  in un pannello laterale; trascinare fixture o gruppi da lì nella scena.
* **Aggiungi una palette** (icona palette con ＋) — apre il Gestore Palette in un pannello
  laterale; trascinare le palette nella scena per pilotarne i valori da una palette.
* **Rimuovi gli elementi selezionati** (－) — rimuove i componenti selezionati dalla
  scena, previa conferma.

## L'elenco dei componenti

L'area principale elenca ogni componente (fixture, gruppo o palette) presente nella scena.

* **Fare clic** su un componente per selezionarlo; selezionando un fixture lo si seleziona
  anche nelle viste, così da poterne modificare i valori dei canali.
* **Ctrl+clic** per selezionarne diversi.
* È anche possibile **trascinare** fixture, gruppi o palette direttamente nell'elenco per
  aggiungerli.

## Impostazione dei valori

Per impostare l'aspetto, selezionare i fixture della scena e regolarne i canali usando gli
**strumenti delle capacità dei canali** nel pannello sinistro (Intensità, Colore, Posizione,
ecc.) oppure la **Vista DMX**. I valori vengono memorizzati nella scena man mano che vengono modificati.

## Velocità

La sezione **Velocità**, comprimibile, imposta come la scena esegue la dissolvenza quando
viene attivata:

* **Fade in** — il tempo impiegato dalla scena per salire in dissolvenza fino ai suoi valori.
* **Fade out** — il tempo impiegato per tornare in dissolvenza quando viene arrestata.

Fare doppio clic su un campo del tempo, oppure usare il pulsante a orologio accanto ad
esso, per inserire un valore nell'editor del tempo.

> Quando una scena fa parte di una **Sequenza**, viene modificata tramite la scheda
> *Fixture* dell'Editor Sequenza anziché singolarmente. Vedere
> [Sequence Editor](../sequence-editor).
