---
title: 'Fixtures e Funzioni'
date: '14:33 23-06-2026'
taxonomy:
    category:
        - docs
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

Il contesto **Fixtures e Funzioni** è lo spazio di lavoro principale dell'interfaccia utente della versione 5.
È qui che si aggiungono e si dispongono i fixture, si controllano i loro canali, si organizzano palette e gruppi di fixture, e si creano e modificano le funzioni come Scene, Chaser, EFX e Show.

Lo spazio di lavoro è diviso in diverse aree:
* **Pannello sinistro** — aggiunge fixture, gestisce gruppi e palette, e controlla i
  canali dei fixture selezionati.
* **Area di visualizzazione principale** — mostra i fixture in uno dei quattro modi (griglia Universo,
  canali DMX, palco 2D o palco 3D).
* **Pannello destro** — crea, modifica e gestisce le funzioni.
* **Pannello inferiore** — apre editor contestuali, come la console
  dei canali della Scena.

I pannelli sinistro e destro sono chiusi per impostazione predefinita. Fare clic su uno dei loro pulsanti per far scorrere il pannello e aprirlo; fare clic di nuovo sul pulsante attivo per chiuderlo. È anche possibile trascinare il bordo interno di un pannello per renderlo più largo o più stretto.

![Fixtures_and_functions](Fixtures_and_functions.png "Fixtures_and_functions")

---

## La visualizzazione principale

Il centro dello schermo mostra i fixture. Una barra degli strumenti nella parte superiore permette di
scegliere tra quattro diverse visualizzazioni della stessa configurazione. Viene mostrata solo una visualizzazione
alla volta.

| Visualizzazione | Cosa mostra |
|------|---------------|
| ![](../basics/uniview.svg?resize=48,48) **Universe View** | Una griglia di indirizzi DMX per l'universo selezionato. I fixture occupano i canali a cui sono patchati. È possibile trascinare un fixture per spostarlo a un indirizzo diverso, e tagliare e incollare i fixture. |
| ![](../basics/dmxview.svg?resize=48,48) **DMX View** | Ogni fixture mostrato come una striscia dei suoi canali con i loro valori in tempo reale. Fare clic su un canale per aprire uno slider o uno strumento di preset e modificarne direttamente il valore. |
| ![](../basics/2dview.svg?resize=48,48) **2D View** | Una pianta dall'alto del palco, con ogni fixture disegnato nella sua posizione reale. Utile per disporre un impianto visto dall'alto. |
| ![](../basics/3dview.svg?resize=48,48) **3D View** | Una resa tridimensionale del palco, inclusi fasci di luce e colori. (Se il sistema non supporta il rendering 3D, viene mostrato un avviso al suo posto.) |

### Scegliere e staccare una visualizzazione

* **Clic sinistro** su un pulsante di visualizzazione nella barra degli strumenti per passare a quella visualizzazione.
* **Clic destro** su un pulsante di visualizzazione per **staccare** quella visualizzazione in una
  finestra separata. Ciò è utile su configurazioni multi-monitor — per esempio, per tenere la pianta 2D
  su uno schermo e il render 3D su un altro. Il pulsante scompare dalla
  barra degli strumenti mentre la sua visualizzazione è staccata; chiudere la finestra staccata per farla
  tornare.

### Strumenti della barra degli strumenti della visualizzazione

A destra dei pulsanti di visualizzazione si trovano:

* **Selettore dell'universo** — un menu a tendina per scegliere quale universo viene mostrato. Selezionare
  un singolo universo per concentrarsi su di esso, nascondendo i fixture patchati altrove.
* **Zoom indietro / Zoom avanti** — rende i fixture più piccoli o più grandi nella
  visualizzazione corrente.
* **Impostazioni visualizzazione** (il pulsante "barre") — mostra o nasconde il pannello delle impostazioni per
  la visualizzazione corrente. Questo pulsante appare solo per le visualizzazioni che hanno impostazioni proprie (le visualizzazioni DMX e 2D).

---

## Pannello sinistro — Fixture e canali

Il pannello sinistro raggruppa tre strumenti di gestione nella parte superiore, gli strumenti
di controllo dei canali al centro, e gli strumenti di selezione in basso.

### Gestione dei fixture

| Pulsante | Cosa fa |
|--------|--------------|
| ![](../basics/fixture.svg?resize=48,48) **Add Fixtures** | Apre il fixture browser. Cerca nella libreria dei fixture e trascina un fixture nella visualizzazione per patcharlo. (Disponibile solo quando la modifica dei fixture è consentita.) |
| ![](../basics/group.svg?resize=48,48) **Fixture Groups** | Crea e modifica gruppi di fixture, così è possibile selezionare e controllare più fixture insieme. |
| ![](../basics/palette.svg?resize=48,48) **Palettes** | Crea e gestisce le palette — valori salvati per colore, posizione, dimmer, ecc. — che è possibile riutilizzare nelle proprie funzioni. |

### Strumenti di controllo dei canali

Questi strumenti permettono di controllare direttamente i fixture **selezionati**. Ogni pulsante
diventa attivo solo quando almeno un fixture selezionato ha effettivamente quella capacità;
il piccolo numero su un pulsante indica a quanti dei fixture selezionati si applica. Fare clic su un pulsante per aprire il suo strumento accanto al pannello.

| Strumento | Cosa controlla |
|------|------------------|
| ![](../basics/intensity.svg?resize=48,48) **Intensity** | L'intensità dimmer / master dei fixture selezionati. |
| ![](../basics/shutter.svg?resize=48,48) **Shutter** | Preset di shutter e strobo (aperto, chiuso, strobo, pulse, …). |
| ![](../basics/position.svg?resize=48,48) **Position** | Pan e tilt — puntamento di moving head e scanner. |
| ![](../basics/color.svg?resize=48,48) **Color** | Il colore dei fixture, mescolando RGB (e bianco / ambra / UV dove disponibili). |
| ![](../basics/colorwheel.svg?resize=48,48) **Color Wheel** | Seleziona un colore dalla ruota colori fissa del fixture. |
| ![](../basics/gobo.svg?resize=48,48) **Gobos** | Seleziona un gobo dalla ruota gobo del fixture. |
| ![](../basics/beam.svg?resize=48,48) **Beam** | Proprietà del fascio come zoom e focus. |

### Strumenti di selezione (in fondo al pannello)

| Pulsante | Cosa fa |
|--------|--------------|
| <i class="fa fa-bolt fa-2x"></i> **Highlight** | Evidenzia temporaneamente i fixture attualmente selezionati in modo da poter vedere quali sono. Il numero mostra quanti fixture sono selezionati. |
| <i class="fa fa-crosshairs fa-2x"></i> **Pick a 3D point** | (Solo visualizzazione 3D) Permette di fare clic su un punto nel palco 3D per puntare verso di esso i fixture selezionati. Scorciatoia: **Ctrl+P**. |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple selection** | Quando attivo, facendo clic sui fixture questi vengono aggiunti alla selezione invece di sostituirla, così è possibile costruire una selezione di più fixture. |
| ![](../basics/selectall.svg?resize=48,48) **Select / Deselect all** | Seleziona tutti i fixture, oppure svuota la selezione se tutto è già selezionato. Scorciatoia: **Ctrl+A**. |

---

## Pannello destro — funzioni

Il pannello destro è dove si lavora con le **funzioni** — Scene, Chaser,
Sequence, EFX, RGB Matrix, Collection, Script, Audio, Video e Show.

| Pulsante | Cosa fa |
|--------|--------------|
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Apre l'elenco di tutte le funzioni, organizzate in cartelle. Selezionare una funzione qui per modificarla. |
| <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>**Timing Settings** | (Solo [Show Manager](/show-manager)) Regola le impostazioni di temporizzazione dello show. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i>**Add a new function** | Apre un menu per creare una nuova funzione. Selezionare il tipo e il suo editor si apre automaticamente. (Disponibile solo quando la modifica delle funzioni è consentita.) |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i>**Delete** | Elimina le funzioni e le cartelle selezionate, dopo aver chiesto conferma. |
| ![](../basics/rename.svg?resize=48,48) **Rename** | Rinomina l'elemento selezionato. Quando sono selezionati più elementi, è possibile rinominarli tutti insieme con numerazione automatica. |
| <i class="fa fa-clone fa-2x"></i>**Clone** | Crea una copia di ogni funzione selezionata. |
| <i class="fa fa-sitemap fa-2x"></i>**Show function usage** | Mostra dove viene utilizzata la funzione selezionata — quali altre funzioni, widget del virtual console, ecc. la referenziano. |
| ![](../basics/autostart.svg?resize=48,48) **Autostart** | Contrassegna la funzione selezionata per l'avvio automatico al caricamento del progetto (o rimuove tale contrassegno). |
| <i class="fa fa-play fa-2x"></i>**Function Preview** | Esegue dal vivo la funzione selezionata per poterla visualizzare in anteprima. Fare clic di nuovo per interromperla. |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple selection** | (Solo [Show Manager](/show-manager)) Permette di selezionare più elementi contemporaneamente. |
| <i class="fa fa-xmark fa-2x"></i>**Reset dump channels** | Cancella i canali attualmente catturati per il dump in una scena. Scorciatoia: **Ctrl+R**. |

### Creare una funzione

Quando si sceglie un tipo dal menu **Add a new function**:

* Le funzioni **Audio** e **Video** chiedono prima di scegliere il file o i file multimediali. Se
  si seleziona un solo file, il suo editor si apre immediatamente; se se ne selezionano
  diversi, viene creata una funzione per ciascuno e si apre il Function Manager in modo che sia
  possibile esaminarle.
* Uno **Show** commuta l'applicazione allo spazio di lavoro **Show Manager**.
* Ogni altro tipo crea la funzione e apre il suo editor nel pannello destro,
  pronto per essere modificato.

---

## Pannello inferiore

Il pannello inferiore è nascosto finché non è necessario. Scorre verso l'alto dal fondo
dello schermo per ospitare editor che lavorano insieme alla visualizzazione principale — più spesso la
**console dei canali della Scena**, dove si impostano i valori dei canali per una scena.

| Pulsante | Cosa fa |
|----------|-------------------|
| <i class="fa fa-chevron-up fa-2x"></i> **Expand / Collapse** | apre il pannello alla sua altezza massima o lo richiude in una sottile striscia. È anche possibile trascinare il bordo superiore del pannello su o giù per impostare l'altezza desiderata |
| <i class="fa fa-copy fa-2x"></i> **Copy to fixtures of the same type** | (Solo console della Scena) copia i valori dei canali selezionati su ogni altro fixture dello stesso tipo, così non è necessario impostarli uno per uno |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple channel selection** | (Solo console della Scena) permette di selezionare più canali contemporaneamente |

Mentre il pannello inferiore è aperto, condivide lo schermo con le visualizzazioni sopra di esso,
che si riducono per fargli spazio.
