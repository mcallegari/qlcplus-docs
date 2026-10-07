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

## Controllare i canali da un controller esterno

Mentre l'Editor Scena è aperto, la barra degli strumenti del suo pannello inferiore ha
pulsanti aggiuntivi per pilotare i canali della scena direttamente da un controller
**MIDI**, **OSC**, **DMX** o **HID** (joystick) patchato — comodo per impostare i valori a
mano invece di trascinare gli slider sullo schermo.

| Pulsante | Cosa fa |
|--------|--------------|
| <i class="fa fa-sliders fa-2x"></i> **Control the channels with an external controller** | Attiva/disattiva il controllo esterno. Quando è abilitato, i fader/manopole del controller vengono mappati 1:1 sui canali della scena, nell'ordine in cui compaiono nella console, e la **Virtual Console smette di ricevere input** da quel controller finché non si disattiva questa opzione o non si chiude l'editor. |
| ![](/basics/position.svg?resize=48,48) **Toggle Pan & Tilt mode** | Mostrato solo mentre il controllo esterno è attivo. Cambia la mappatura in modo che i primi quattro fader/manopole del controller pilotino invece **pan, pan fine, tilt e tilt fine** di un singolo fixture — comodo per posizionare una testa mobile con fader reali anziché con un [XY Pad](/virtual-console/xy-pad). |
| <i class="fa fa-angle-left fa-2x"></i> / <i class="fa fa-angle-right fa-2x"></i> **Shift the faders mapping backward / forward** | Scorre la mappatura per pagine quando c'è più da controllare di quanti fader abbia il controller. In modalità normale, una pagina è un blocco di canali della dimensione del numero di fader del controller; in modalità Pan & Tilt, una pagina è un singolo fixture. |

Il canale attualmente pilotato da un controller viene evidenziato nella console, così
è possibile vedere a colpo d'occhio cosa sta facendo ciascun fader fisico. Se uno degli
universi patchati ha un joystick (plugin HID), i suoi assi vengono rilevati e resi
disponibili anche per la mappatura.

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
