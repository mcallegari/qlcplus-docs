---
title: 'Fixture Group Manager'
date: '14:33 27-06-2026'
taxonomy:
    category:
        - docs
---

Il **Fixture Group Manager** elenca tutti i fixture del progetto, organizzati
per universo, e permette di creare **gruppi di fixture**, ispezionare e rinominare gli elementi,
e modificare le proprietà dei fixture e dei canali. Aprirlo con il pulsante
**Fixture Groups** nel pannello sinistro dello spazio di lavoro
[Fixtures and Functions](/fixtures-and-functions).

## L'albero

L'area principale è un albero. Al livello superiore ci sono gli **universi**; espandere un
universo per vedere i **fixture** patchati su di esso, ed espandere un fixture per vedere le sue
**teste** e i suoi **canali**. Anche i **gruppi di fixture** creati appaiono qui come
nodi espandibili.

### Selezionare gli elementi

* **Clic** su un elemento per selezionarlo (un universo, gruppo, fixture, testa o canale).
  Selezionare qui i fixture li seleziona anche nelle visualizzazioni.
* Tenere premuto **Ctrl** per selezionare più elementi alla volta.
* **Doppio clic** su un nodo per espanderlo o comprimerlo.

### Costruire gruppi trascinando

Trascinare fixture (o intere selezioni) su un nodo gruppo per aggiungerli a quel gruppo.
I gruppi permettono di selezionare e controllare più fixture insieme in tutto il
programma.

## Pulsanti della barra degli strumenti

* **＋ Add a new fixture group** — crea un nuovo gruppo di fixture vuoto.
* **－ Remove the selected items** — elimina i fixture e/o i gruppi di fixture
  selezionati. (Rimuovere un fixture dall'interno di un gruppo lo rimuove dal
  gruppo.)
* **Apply changes to fixtures of the same type** (icona di doppio controllo) — quando si
  modificano le proprietà di fixture/canale, applica le modifiche anche a ogni altro
  fixture dello stesso tipo. Attiva o disattiva.
* **Search** (lente) — apre una casella di ricerca per filtrare l'albero per nome di gruppo,
  fixture o canale.
* **Rename the selected items** — rinomina l'elemento selezionato. Quando sono selezionati
  più elementi, è possibile rinominarli tutti insieme con numerazione automatica.
* **Inspect the selected item** (icona info) — apre un riepilogo informativo dell'elemento
  selezionato nella visualizzazione principale (un riepilogo di universo/gruppo, o un riepilogo
  di fixture). Disattivare per tornare alla visualizzazione precedente.
* **Edit the selected item** (icona matita) — entra in modalità di modifica per l'elemento
  selezionato:
  * Per un **gruppo di fixture**, apre l'editor del gruppo nella visualizzazione principale.
  * Per un **fixture** (o universo), apre l'editor delle proprietà dei canali e
    allarga il pannello per mostrare le colonne delle proprietà.
* **Add/Remove a linked fixture** (icona collegamento) — appare durante la modifica di un fixture;
  aggiunge o rimuove una copia collegata del fixture (un fixture che condivide lo stesso
  indirizzo DMX).

## Proprietà dei canali

Quando si modifica un fixture, il pannello si allarga e mostra una riga di colonne per ogni
canale:

* **Name** — il nome del canale.
* **Mode** — la modalità operativa del canale.
* **Flags** — flag speciali del canale.
* **Can fade** — se al canale è consentito effettuare dissolvenze tra i valori.
* **Behaviour** — come si comporta il canale quando più funzioni lo pilotano
  (precedenza).
* **Modifier** — una curva modificatrice del canale opzionale.

Queste impostazioni permettono di ottimizzare come risponde ciascun canale. Con **Apply to
fixtures of the same type** attivo, le modifiche si propagano a tutti i fixture corrispondenti.
