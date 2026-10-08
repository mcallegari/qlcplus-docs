---
title: 'Editor Matrice RGB'
date: '12:24 21-08-2023'
media_order: blending.png
---

Una **Matrice RGB** riproduce pattern animati, testo e immagini su un **gruppo di
fixture** disposto come una griglia — pannelli LED, barre a pixel, una parete di PAR,
e così via. L'Editor Matrice RGB si apre nel pannello destro dell'area di lavoro
[Fixtures and Functions](/fixtures-and-functions), con un'**anteprima** dal vivo
dell'animazione subito sotto il selettore del gruppo.

## Impostazioni di base

| Impostazione | Significato |
|---------|---------|
| **Name** | Il nome della matrice (barra superiore). |
| **Fixture Group** | Il gruppo di fixture su cui viene riprodotta la matrice. La disposizione del gruppo (righe × colonne) definisce la griglia di pixel — scegliere un gruppo prima che venga mostrato qualcosa. |
| **Pattern** | L'algoritmo di animazione da riprodurre: **Text**, **Image**, oppure uno dei pattern basati su script. La selezione determina cosa appare nella sezione **Parametri**. |
| ![](/basics/sequence.svg?resize=48,48) **Salva questa matrice in una sequenza** | Trasforma la matrice in esecuzione in una sequenza di step, così da poterla perfezionare o ritagliare come un chaser. |
| **Blend mode** | Come la matrice si combina con altre uscite sugli stessi fixture. |
| **Color mode** | Quale capacità del fixture viene pilotata dalla matrice. |
| **Colors** | Il colore (o i colori) usati dal pattern — vedere sotto. |

### Blend mode

| Modalità | Comportamento |
|------|-----------|
| **Default (HTP)** | Il valore più alto prevale rispetto ad altre funzioni sugli stessi canali. |
| **Mask** | La matrice agisce come una maschera su ciò che è già presente. |
| **Additive** | Il colore della matrice viene sommato all'uscita esistente. |
| **Subtractive** | Il colore della matrice viene sottratto dall'uscita esistente. |

### Color mode

| Modalità | Pilota |
|------|--------|
| **Default (RGB)** | I canali RGB (o CMY) dei fixture. |
| **White** | Il canale bianco. |
| **Amber** | Il canale ambra. |
| **UV** | Il canale UV. |
| **Dimmer** | Il canale di intensità. |
| **Shutter** | Il canale otturatore. |

### Colors

Il numero di campioni di colore mostrati dipende dal pattern selezionato — ogni pattern
dichiara quanti colori accetta, da nessuno fino a cinque. Fare clic su un campione per
aprire il selettore colore; il pulsante <i class="fa fa-2x fa-xmark" style="color:darkred"></i>
accanto ai colori 2–5 riporta quel colore allo stato non impostato.

## Parametri

La sezione **Parametri** cambia completamente in base al pattern selezionato, ed è
nascosta quando il pattern non ha nulla da configurare.

### Pattern di testo

| Impostazione | Significato |
|---------|---------|
| **Text** | Il messaggio da visualizzare. |
| <i class="fa fa-2x fa-font" style="color:cyan"></i> **Font** | Apre un selettore di font per famiglia, dimensione e stile. |
| **Animation** | Come si muove il testo: **Letters** (una lettera alla volta), scorrimento **Horizontal** oppure **Vertical**. |
| **Offset X** / **Y** | Sposta il testo sulla griglia (da −255 a 255). |

### Pattern di immagine

| Impostazione | Significato |
|---------|---------|
| **Image** | Il file immagine da visualizzare. |
| <i class="fa fa-2x fa-image"></i> **Seleziona un'immagine** | Apre un selettore di file. |
| **Animation** | **Static**, **Horizontal**, **Vertical**, oppure **Animation** (riproduce i fotogrammi di una GIF animata). |
| **Offset X** / **Y** | Sposta l'immagine sulla griglia (da −255 a 255). |

### Pattern basati su script

I pattern basati su script costruiscono i propri controlli: lo script dichiara le
proprie proprietà e QLC+ genera un'etichetta corrispondente più una casella combinata,
un campo numerico, un campo decimale o un campo di testo per ciascuna di esse. Ciò che
si vede dipende quindi interamente dallo script scelto — ad esempio il numero di barre,
la dimensione di una forma, una direzione, e così via.

## Velocità

**Doppio clic** su un campo del tempo, oppure usare il pulsante <i class="fa fa-2x fa-clock"></i>
accanto ad esso, per aprire l'editor del tempo.

| Impostazione | Significato |
|---------|---------|
| **Steps fade in** | Tempo di dissolvenza in entrata di ogni step dell'animazione. |
| **Steps hold** | Per quanto tempo viene mantenuto ogni step — è ciò che determina il ritmo dell'animazione. |
| **Steps fade out** | Tempo di dissolvenza in uscita di ogni step. |
| **Tempo type** | Se i tempi sono misurati in **Time** oppure in **Beats**, sincronizzati con il tempo globale. |

## Ordine e direzione

### Ordine di esecuzione

| Icona | Modalità | Comportamento |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Ripete l'animazione all'infinito. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Riproduce l'animazione una sola volta, poi si arresta. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Riproduce in avanti, poi all'indietro, e ripete. |

### Direzione

| Icona | Modalità | Comportamento |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Riproduce gli step dell'animazione in ordine normale. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Riproduce gli step dell'animazione in ordine inverso. |
