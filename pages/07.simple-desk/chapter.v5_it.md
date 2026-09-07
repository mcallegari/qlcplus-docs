---
title: 'Simple Desk'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Capitolo 6

# Simple Desk

Il **Simple Desk** è una superficie di controllo DMX manuale. Offre un fader e
una casella di valore per ogni canale di un universo, oltre a un **keypad**
per inserire comandi in stile console — permettendo di controllare l'impianto
manualmente, proprio come un banco luci tradizionale. È ideale per il
controllo pratico rapido, il busking e i test.

Si apre dalla barra degli strumenti principale (l'icona Simple Desk). Ciò che
viene impostato qui può essere catturato in una Scene con
[DMX Dump](/main-window/dmx-dump).

## Layout

Il Simple Desk è diviso in due aree, con un divisore trascinabile tra di esse:

* **In alto** — i fader dei canali per l'universo selezionato.
* **In basso** — la **Fixture List**, la **cronologia dei comandi**, e il
  **keypad**.

## Fader dei canali

L'area superiore mostra una colonna per ogni canale DMX dell'universo
corrente, ciascuna con:

* Un'**icona del canale** — cliccarla apre uno strumento dedicato per quel
  tipo di canale (slider o selettore di preset). Premere **Esc** per
  chiuderlo.
* Un **fader** — trascinare per impostare il valore del canale.
* Una **casella di valore** — digitare un valore esatto. Mostra il valore DMX
  (0–255) o percentuale (0–100%) a seconda della modalità di visualizzazione.
* L'**indirizzo DMX** del canale.
* Un pulsante di **reset** (✕) — riporta il canale al suo stato normale (non
  sovrascritto).

I canali modificati manualmente sono **sovrascritti** (overridden) e mostrati
in **rosso**. Gli altri canali sono colorati per mostrare a quale fixture
appartengono (tonalità alternate per i fixture vicini).

### Barra degli strumenti

Sopra i fader:

* **Universe** — sceglie quale universo controllano i fader.
* **Reset the whole universe** (✕) — cancella tutte le sovrascritture
  nell'universo corrente.
* **DMX / %** — alterna le caselle di valore tra valori DMX grezzi (0–255) e
  percentuali (0–100%).

## Fixture List

L'elenco in basso a sinistra mostra i fixture patchati sull'universo corrente
con il loro intervallo di indirizzi. Fare clic su un fixture per scorrere la
vista dei fader fino al suo primo canale, rendendo facile trovare i canali di
un fixture in un universo pieno.

## Keypad e cronologia dei comandi

L'area in basso a destra è un **keypad** numerico per inserire i comandi,
affiancato da una **cronologia dei comandi**. Ogni comando eseguito viene
aggiunto alla cronologia; **fare doppio clic** su una voce della cronologia
per ricaricarla nel keypad, così da poterla rieseguire o modificare.

Digitare un comando con il keypad a schermo (o con la tastiera) e premere
**INVIO** per eseguirlo. **CLR** cancella il comando corrente.

## Sintassi dei comandi del keypad

I comandi del keypad indirizzano uno o più canali e ne impostano i valori,
nello stile di una console luci classica. I canali vengono indirizzati
tramite il loro **indirizzo DMX** all'interno dell'universo corrente (a base
1).

### Parole chiave e operatori

| Token | Significato |
|-------|---------|
| `AT` | Imposta il/i canale/i indirizzato/i a un valore: `1 AT 200`. |
| `THRU` | Un intervallo — di canali (`1 THRU 10`) oppure, dopo `AT`, di valori per una dissolvenza lungo l'intervallo. |
| `BY` | Un passo quando si indirizza un intervallo: `1 THRU 20 BY 2` seleziona un canale ogni due. |
| `FULL` | Scorciatoia per il valore massimo (255 / 100%). |
| `ZERO` | Scorciatoia per il valore 0. |
| `+` | Aggiunge ai valori correnti dei canali: `1 + 20`. |
| `-` | Sottrae dai valori correnti dei canali: `1 - 20`. |
| `+%` | Aumenta i valori correnti di una percentuale: `1 +% 10`. |
| `-%` | Diminuisce i valori correnti di una percentuale: `1 -% 10`. |

Il keypad mostra `+`/`-` oppure `+%`/`-%` a seconda della modalità di
visualizzazione corrente.

### Forme di base

| Comando | Effetto |
|---------|--------|
| `5` | Seleziona il canale 5 (e lo rende la selezione di lavoro). |
| `5 AT 128` | Imposta il canale 5 al valore 128. |
| `5 FULL` | Imposta il canale 5 al massimo (255). |
| `5 ZERO` | Imposta il canale 5 a 0. |

### Intervalli

| Comando | Effetto |
|---------|--------|
| `1 THRU 10 AT 255` | Imposta i canali da 1 a 10 tutti a 255. |
| `1 THRU 10 BY 2 AT 128` | Imposta ogni secondo canale da 1 a 10 (1, 3, 5, 7, 9) a 128. |
| `1 THRU 10 AT 0 THRU 255` | Distribuisce i valori uniformemente lungo l'intervallo — una dissolvenza da 0 sul canale 1 fino a 255 sul canale 10. |

### Modifiche relative

| Comando | Effetto |
|---------|--------|
| `1 THRU 10 + 20` | Aggiunge 20 al valore corrente di ciascun canale 1–10 (limitato a 255). |
| `1 THRU 10 - 20` | Sottrae 20 da ciascuno (limitato a 0). |
| `1 +% 10` | Aumenta il valore corrente del canale 1 del 10%. |
| `1 -% 10` | Diminuisce il valore corrente del canale 1 del 10%. |

### Ripetizione sull'ultima selezione

Se si inserisce un comando **senza specificare i canali** (ad esempio solo
`AT 100`, `FULL`, oppure `ZERO`), esso viene applicato agli **stessi canali
del comando precedente**. Questo permette di selezionare un insieme di canali
una sola volta e poi continuare a regolarli:

```
1 THRU 8 AT 255   ← seleziona i canali 1–8 e li imposta al massimo
ZERO              ← gli stessi canali 1–8 vanno a 0
AT 128            ← gli stessi canali 1–8 vanno a 128
```

> I valori sono sempre in DMX (0–255) nei comandi. Un intervallo di valori
> `THRU` e il passo `BY` permettono di costruire dissolvenze e pattern in
> un'unica riga, esattamente come su una console hardware.
