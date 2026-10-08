---
title: 'Fixture Browser'
date: '14:32 27-06-2026'
taxonomy:
    category:
        - docs
---

Il **Fixture Browser** è dove si patchano nuovi fixture nel progetto. Aprirlo con il
pulsante **Add Fixtures** nella parte superiore del pannello sinistro nello spazio di lavoro
[Fixtures and Functions](/fixtures-and-functions).

Permette di trovare una definizione di fixture nella libreria, impostare come deve essere
patchato, e trascinarlo in una delle visualizzazioni.

## Trovare un fixture

Ci sono due modi per trovare un fixture:

* **Sfoglia per produttore** — il browser si apre su un elenco di produttori.
  Fare clic su un produttore per vedere i suoi modelli, quindi fare clic su un modello per selezionarlo. Usare
  la freccia indietro (il nome del produttore in alto) per tornare all'elenco dei
  produttori.
* **Cerca** — digitare almeno tre caratteri nella casella di ricerca in alto. L'elenco
  passa a un albero dei risultati di ricerca, raggruppati per produttore, confrontando il
  testo con produttori e modelli.

## Pulsanti della barra degli strumenti

Nella parte superiore del browser:

* **＋ Create a new fixture definition** — apre l'editor delle definizioni di fixture per
  costruire un fixture completamente nuovo da zero.
* **Edit the selected fixture definition** — apre la definizione del fixture selezionato
  nell'editor. Abilitato una volta selezionato un modello.
* **Remap fixtures** (icona a forma di mescolamento) — apre lo strumento **Fixture Remap**, usato per
  trasferire la patch e i contenuti di un progetto esistente su un diverso insieme di
  fixture.

## Proprietà del fixture

Quando si seleziona un modello, appare un pannello **Fixture properties** in fondo al
browser. Impostare questi valori prima di trascinare il fixture in una visualizzazione — determinano come
viene nominato, dove è patchato, e quante copie vengono create.

| Proprietà | Significato |
|----------|---------|
| **Name** | Il nome che il fixture (o i fixture) avrà nel progetto. Viene suggerito un nome predefinito; modificarlo a piacere. Quando se ne aggiunge più di uno alla volta, vengono numerati automaticamente. |
| **Universe** | L'universo a cui è patchato il fixture. Il menu a tendina elenca gli universi definiti. |
| **Address** | L'indirizzo DMX di partenza (1–512) all'interno di quell'universo. Il browser suggerisce il primo indirizzo libero che si adatta; viene ricalcolato ogni volta che si cambia la modalità, la quantità o il numero di fixture già patchati. |
| **Quantity** | Quante copie di questo fixture aggiungere in una sola volta (1–512). Le copie sono disposte una dopo l'altra a partire dall'indirizzo iniziale, separate dal **Gap**. |
| **Channels** | Il numero di canali DMX usati dal fixture. È impostato automaticamente dalla **Mode** selezionata ed è di sola lettura per i fixture che hanno modalità. Per un fixture generico/dimmer senza modalità, è possibile impostare autonomamente il numero di canali (1–512). |
| **Gap** | Il numero di canali vuoti da lasciare tra copie consecutive quando **Quantity** è maggiore di uno (0–511). Usarlo per mantenere ogni fixture su un indirizzo tondo, o per riservare spazio per espansioni future. |
| **Mode** | La modalità operativa del fixture (mostrata solo per i fixture che definiscono modalità). Modalità diverse espongono set di canali diversi — per esempio una modalità base rispetto a una modalità estesa con più controlli. Selezionare una modalità aggiorna il conteggio di **Channels**. |

### Ispezionare i canali di una modalità

Accanto al menu a tendina **Mode** c'è un pulsante **info** (ⓘ). Attivarlo per elencare
tutti i canali della modalità selezionata, ciascuno con il proprio nome e un'icona del tipo, in modo
da poter confermare che la modalità fa ciò che ci si aspetta prima di patchare.

## Patchare il fixture

Una volta impostate le proprietà, **trascinare il fixture in una visualizzazione** per patcharlo:

* Nella **Universe View**, la griglia evidenzia i canali che occuperà
  (un blocco per copia, separato dal gap) e mostra se l'indirizzo è
  libero.
* Nella **2D / 3D View**, rilasciarlo dove lo si vuole posizionato sul palco.

Se l'indirizzo scelto si sovrappone a un fixture esistente, viene mostrato un errore
**"Address overlapping"** ed è necessario scegliere un altro indirizzo DMX.

## Generic RGB Panel

Selezionando il modello speciale **Generic RGB Panel** viene mostrato invece un pannello dedicato
**RGB panel properties**, con parametri aggiuntivi per descrivere una matrice di
pixel. Un'anteprima dal vivo in fondo si aggiorna man mano che li si modifica, mostrando la
disposizione dei pixel, il cablaggio a serpentina/zig-zag e l'angolo di partenza.

Oltre a **Name**, **Universe** e **Address** (come sopra), si imposta:

| Proprietà | Significato |
|----------|---------|
| **Components** | L'ordine dei colori di ciascun pixel: **RGB**, **BGR**, **BRG**, **GBR**, **GRB**, **RBG**, o **RGBW**. Farlo corrispondere a come sono cablati i LED del pannello in modo che i colori risultino corretti. |
| **Size** | La risoluzione del pannello in pixel, come **colonne × righe** (larghezza fino a 170, altezza fino a 999). Questo determina quante celle ha la matrice. |
| **Physical** | Le dimensioni reali del pannello, come **larghezza × altezza** in millimetri. Usate per disegnare il pannello in scala nelle visualizzazioni 2D/3D. |
| **Start corner** | Da quale angolo inizia la catena di pixel: **Top-Left**, **Top-Right**, **Bottom-Left** o **Bottom-Right**. Contrassegnato da un punto nell'anteprima. |
| **Displacement** | Come procede il cablaggio da riga a riga (o da colonna a colonna): **Snake** (direzione alternata a ogni riga) o **Zig Zag** (ogni riga procede nella stessa direzione). Deve corrispondere al pannello affinché gli effetti vengano mappati correttamente. |
| **Direction** | Se i pixel sono incatenati **Horizontally** (riga per riga) o **Vertically** (colonna per colonna). |

Poiché un singolo pannello può usare un numero elevato di canali — potenzialmente più
di un universo — il pannello può estendersi su più universi a partire dall'indirizzo scelto.
