---
title: 'Editor EFX'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

Un **EFX** (effetto) muove i fixture lungo un percorso matematico — cerchi, otto, linee
e altre forme — in modo automatico. È il modo più rapido per creare effetti di
movimento pan/tilt (oltre a effetti di dimmer o RGB) su molti fixture contemporaneamente.
L'Editor EFX si apre nel pannello destro dell'area di lavoro [Fixtures and Functions](/fixtures-and-functions).

## Anteprima

Una grande **anteprima** in alto mostra il percorso e la posizione di ogni fixture in
tempo reale mentre si modificano le impostazioni.

| Azione | Risultato |
|--------|--------|
| **Clic** sull'anteprima | Alterna tra la vista piatta (2D) e la vista sferica. |
| **Trascinamento** nella vista sferica | Ruota la sfera orizzontalmente, per poter osservare il percorso da un'altra angolazione. |

## Fixture

La sezione **Fixture** elenca i fixture (o le teste) che partecipano all'effetto.

| Pulsante | Cosa fa |
|--------|--------------|
| <i class="fa fa-2x fa-arrow-down-wide-short"></i> **Imposta un offset su tutti i fixture** | Apre un popup per distribuire i fixture lungo il percorso in un'unica operazione (vedere sotto). |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Aggiungi un fixture/testa** | Apre il Gestore Gruppi Fixture in un pannello laterale. Trascinare universi, gruppi, fixture o singole teste nell'area di rilascio sotto l'elenco. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Rimuovi la/le testa/e fixture selezionata/e** | Rimuove le teste selezionate dall'effetto (richiede conferma). |

### Popup offset

| Impostazione | Significato |
|---------|---------|
| **Offset** | Il valore dell'offset in gradi (0–360). |
| **Increasing** | Assegna a ogni fixture un offset progressivamente maggiore, in modo che si inseguano lungo la forma anziché muoversi insieme. |
| **Randomize** | Assegna a ogni fixture un offset casuale. |

**Increasing** e **Randomize** si escludono a vicenda. Se nessuno dei due è selezionato,
lo stesso offset viene applicato a tutti i fixture.

### L'elenco dei fixture

| Colonna | Significato |
|--------|---------|
| **#** | L'indice della testa nell'effetto — è l'ordine usato dagli ordini fixture **Serial** e **Asymmetric**. |
| **Fixture** | Il nome del fixture o della testa. |
| **Mode** | Cosa pilota l'effetto per quella testa: **Position** (pan/tilt), **Dimmer**, oppure **RGB**. |
| **Reverse** | Fa percorrere a quella testa il percorso in direzione opposta. |
| **Start offset** | Il punto del percorso in cui quella testa inizia, in gradi (0–359). |

Fare clic su una riga per selezionarla; **Ctrl+clic** o **Shift+clic** per selezionarne
diverse prima di rimuoverle.

## Pattern

La sezione **Pattern** definisce la forma e come questa si colloca nello spazio.

| Impostazione | Significato |
|---------|---------|
| **Pattern** | La forma di base: **Circle**, **Eight**, **Line**, **Line2**, **Diamond**, **Square**, **SquareChoppy**, **SquareTrue**, **Leaf** oppure **Lissajous**. |
| **Relative movement** | Esegue l'effetto relativamente alla posizione attuale di ogni fixture anziché da un centro assoluto. Nasconde i campi di offset X/Y. |
| **Width** | Dimensione orizzontale della forma (0–127). |
| **Height** | Dimensione verticale della forma (0–127). |
| **X offset** | Sposta il centro della forma orizzontalmente (0–255). Solo modalità assoluta. |
| **Y offset** | Sposta il centro della forma verticalmente (0–255). Solo modalità assoluta. |
| **Rotation** | Ruota l'intera forma (0–359°). |
| **Start offset** | Sposta il punto della forma in cui inizia il percorso (0–360°). |
| **Enable dimmer control** | Consente all'EFX di pilotare anche l'intensità dei fixture. Disattivato per impostazione predefinita, nel qual caso l'EFX anima solo pan/tilt. |

### Parametri Lissajous

Questi quattro campi compaiono solo quando è selezionato il pattern **Lissajous**;
definiscono la matematica che produce le figure più complesse.

| Impostazione | Significato |
|---------|---------|
| **X frequency** | Numero di oscillazioni orizzontali per ciclo (0–32). |
| **Y frequency** | Numero di oscillazioni verticali per ciclo (0–32). |
| **X phase** | Sfasamento orizzontale (0–360°). |
| **Y phase** | Sfasamento verticale (0–360°). |

Modificare il rapporto tra la frequenza X e quella Y è ciò che trasforma la figura da
un semplice cerchio nei classici nodi di Lissajous.

## Velocità

La sezione **Velocità** imposta la temporizzazione dell'effetto. **Doppio clic** su un
campo del tempo, oppure usare il pulsante <i class="fa fa-2x fa-clock"></i> accanto ad
esso, per aprire l'editor del tempo.

| Impostazione | Significato |
|---------|---------|
| **Fade in** | Tempo per la dissolvenza in entrata dell'effetto all'avvio. |
| **Loop** | La durata di un ciclo completo lungo il percorso. |
| **Fade out** | Tempo per la dissolvenza in uscita all'arresto. |

## Ordine e direzione

### Ordine di esecuzione

| Icona | Modalità | Comportamento |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Ripete il percorso all'infinito. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Esegue un ciclo completo, poi si arresta. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Esegue il percorso in avanti, poi all'indietro, e ripete. |

### Direzione

| Icona | Modalità | Comportamento |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Percorre il percorso nella direzione normale. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Percorre il percorso in direzione opposta. |

### Ordine dei fixture

| Icona | Modalità | Comportamento |
|------|------|-----------|
| **P** | **Parallel** | Tutti i fixture percorrono il percorso insieme (il loro **Start offset** continua comunque a distribuirli). |
| **S** | **Serial** | I fixture sono distribuiti uniformemente lungo il percorso, uno dopo l'altro, nell'ordine dell'elenco. |
| **A** | **Asymmetric** | I fixture sono distribuiti come in Serial, ma ogni fixture alternato viene eseguito nella direzione opposta. |
