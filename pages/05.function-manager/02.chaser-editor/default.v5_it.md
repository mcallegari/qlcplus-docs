---
title: 'Editor Chaser'
date: '12:08 21-08-2023'
---

Un **Chaser** riproduce un elenco di funzioni (solitamente scene) una dopo l'altra,
ciascuna per un tempo definito. È il modo principale per costruire sequenze di aspetti —
chase di colore, effetti basati su step, catene di cue e così via. L'Editor Chaser si
apre nel pannello destro dell'area di lavoro [Fixtures and Functions](/fixtures-and-functions).

## Barra degli strumenti

| Pulsante | Cosa fa |
|--------|--------------|
| **Nome** | Il nome del chaser (barra superiore). |
| <i class="fa fa-chevron-left fa-2x"></i> **Indietro** | Torna all'editor precedente. |
| <i class="fa fa-2x fa-circle-left" style="color:cyan"></i> **Anteprima dello step precedente** | Quando l'anteprima è in esecuzione, scorre indietro tra gli step del chaser per poter verificare ogni aspetto sull'uscita. |
| <i class="fa fa-2x fa-circle-right" style="color:cyan"></i> **Anteprima dello step successivo** | Quando l'anteprima è in esecuzione, scorre in avanti tra gli step del chaser. |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Aggiungi un nuovo step** | Apre il Gestore Funzioni in un pannello laterale. **Doppio clic** o trascinamento delle funzioni da lì per aggiungerle come step. |
| <i class="fa fa-2x fa-clone"></i> **Duplica gli step selezionati** | Copia gli step selezionati, inserendo le copie nell'elenco. |
| <i class="fa fa-2x fa-shuffle" style="color:gold"></i> **Ordina in modo casuale gli step selezionati** | Mescola l'ordine degli step selezionati. |
| <i class="fa fa-2x fa-stopwatch" style="color:lightskyblue"></i> **Imposta automaticamente la durata degli step** | Suddivide la durata totale del chaser in modo uniforme tra gli step selezionati. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Rimuovi gli step selezionati** | Elimina gli step selezionati (richiede conferma). |
| <i class="fa fa-2x fa-print"></i> **Stampa gli step del Chaser** | Stampa l'elenco degli step del chaser. |

I pulsanti di anteprima compaiono solo mentre l'anteprima è attiva. I pulsanti di
modifica sono disabilitati mentre l'anteprima è in esecuzione, e i pulsanti di
duplicazione/durata automatica/rimozione richiedono che almeno uno step sia selezionato.

## L'elenco degli step

Ogni riga è uno step del chaser:

| Colonna | Significato |
|--------|---------|
| **#** | Il numero dello step, nell'ordine di riproduzione. |
| **Funzione** | La funzione riprodotta da questo step. |
| **Fade In** | Il tempo impiegato dallo step per la dissolvenza in entrata. |
| **Hold** | Il tempo in cui lo step rimane al massimo prima della dissolvenza in uscita. |
| **Fade Out** | Il tempo impiegato dallo step per la dissolvenza in uscita. |
| **Durata** | Il tempo totale dello step (fade in + hold). |
| **Nota** | Un commento in testo libero per lo step. |

Interazioni:

| Azione | Risultato |
|--------|--------|
| **Clic** | Seleziona uno step. |
| **Ctrl+clic** / **Shift+clic** | Aggiunge alla selezione / seleziona un intervallo. |
| **Trascinamento** di uno step | Lo riordina; una linea mostra dove verrà rilasciato. |
| **Trascinamento** dal Gestore Funzioni | Aggiunge funzioni come step nella posizione di rilascio. |
| **Doppio clic** sul nome della funzione | Apre l'editor proprio di quella funzione. |
| **Doppio clic** su un campo del tempo | Modifica il tempo di quello step in linea. |
| **Doppio clic** sulla nota | Modifica la nota dello step in linea (**Invio** conferma, **Esc** annulla). |

I campi del tempo che non sono **Per Step** (vedere sotto) non sono modificabili
nell'elenco.

## Proprietà di esecuzione

La sezione **Proprietà di esecuzione**, comprimibile, controlla come viene riprodotto
il chaser.

### Ordine di esecuzione

| Icona | Modalità | Comportamento |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Ripete dal primo step all'infinito. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Riproduce una sola volta, poi si arresta. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Riproduce in avanti, poi all'indietro, e ripete. |
| <i class="fa fa-2x fa-shuffle"></i> | **Random** | Riproduce gli step in ordine casuale. |

### Direzione

| Icona | Modalità | Comportamento |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Inizia dal primo step e scorre verso il basso nell'elenco. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Inizia dall'ultimo step e scorre verso l'alto nell'elenco. |

### Tempo

| Icona | Modalità | Comportamento |
|------|------|-----------|
| **T** | **Time** | I tempi degli step sono espressi in minuti/secondi/millisecondi. |
| **B** | **Beats** | I tempi degli step sono espressi in beat, sincronizzati con il tempo globale. |

### Fade In / Fade Out / Durata

Queste tre impostazioni decidono da dove ogni step ottiene la propria temporizzazione.

| Icona | Modalità | Comportamento |
|------|------|-----------|
| **D** | **Default** | Ogni step usa il tempo di dissolvenza della propria funzione. (Solo Fade In / Fade Out.) |
| **C** | **Common** | Un unico valore, inserito una sola volta, è condiviso da tutti gli step. |
| **S** | **Per Step** | Ogni step mantiene il proprio valore, modificabile direttamente nell'elenco degli step. |
