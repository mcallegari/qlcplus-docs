---
title: 'Input Profiles'
date: '04:57 22-08-2023'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

## Che cos'è un profilo di input?

Un **profilo di input** mappa i segnali provenienti da un dispositivo di
controllo esterno (un controller MIDI, un'app OSC, un banco DMX, un joystick,
…) su canali che QLC+ è in grado di comprendere, permettendo di controllare lo
show con l'hardware preferito senza conoscere il protocollo di comunicazione
sottostante. Una volta assegnato un profilo a un universo, i suoi canali
possono essere collegati a widget della Virtual Console, gruppi di canali e
altro ancora.

## Selezionare un profilo di input

QLC+ include molti profili già pronti. Per assegnarne uno:

1. Aprire il contesto ![](/basics/inputoutput.svg?resize=24,24) **Input/Output**.
2. Selezionare l'universo su cui è patchato il dispositivo.
3. Aprire l'elenco dei **profili di input** dal pannello sinistro (il pulsante
   **P**).
4. Trovare il profilo del proprio dispositivo e selezionarlo. Viene collegato
   alla patch di input dell'universo.

## Creare / modificare un profilo

Se il proprio dispositivo non è presente nell'elenco, è possibile crearne uno
personalizzato. Dall'elenco dei profili di input, utilizzare il pulsante
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> per creare un nuovo
profilo, oppure selezionarne uno esistente e modificarlo. In entrambi i casi si
apre l'**Editor dei profili di input**; da qui in poi la procedura è identica.

## Editor dei profili di input

L'editor è organizzato in schede, con una barra degli strumenti comune per
aggiungere, rimuovere e salvare gli elementi:

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Aggiungi** | Aggiunge un nuovo canale / colore / canale MIDI, a seconda della scheda corrente. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Rimuovi** | Rimuove l'elemento selezionato. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard** | (Scheda Mappatura di input) Attiva/disattiva la procedura guidata di rilevamento automatico dei canali (vedere sotto). |
| ![](/basics/filesave.svg?resize=32,32) **Salva questo profilo** | Salva il profilo. Se produttore/modello sono vuoti, verrà chiesto di compilarli prima. |

### Generale

L'area **Generale** contiene i dati identificativi del profilo:

* **Produttore** — il produttore del dispositivo. Se è già presente
  nell'elenco, utilizzare la stessa grafia e maiuscole/minuscole.
* **Modello** — il modello del dispositivo, inclusa la versione se rilevante
  (ad es. "APC Mini MK2").
* **Tipo** — il tipo di profilo: **MIDI**, **OS2L**, **OSC**, **HID**, **DMX** o
  **ENTTEC**. I profili MIDI mostrano campi aggiuntivi per i messaggi MIDI
  nell'editor dei canali ed espongono la scheda **Canali MIDI** e le
  impostazioni globali MIDI.

Per i profili MIDI è disponibile un'opzione **Impostazioni globali MIDI**:
*Quando vengono utilizzate note MIDI, invia un Note Off quando il valore è 0*.

### Mappatura di input

Questa scheda elenca i canali del profilo (numero di canale, nome e tipo). Ci
sono due modi per aggiungere canali.

**Manuale** — utilizzare il pulsante
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Aggiungi** per
inserire manualmente i dettagli del canale. Utile se si conoscono i codici
MIDI/OSC del proprio dispositivo.

**Automatico** — utilizzare il
<i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard**
per rilevare i canali azionando i controlli sul proprio dispositivo. QLC+
aggiunge ogni controllo non appena viene toccato. Perché questo funzioni, un
plugin di input deve essere patchato sull'universo corrente, ed è necessario
arrestare il wizard prima di lasciare la pagina.

> Non è possibile aggiungere lo stesso canale più di una volta a un profilo.

#### Proprietà del canale

Quando si aggiunge o modifica un canale si impostano:

* **Numero** — il numero del canale. Poiché QLC+ supporta molti plugin, questo
  potrebbe non essere intuitivo, quindi modificarlo solo se si sa cosa si sta
  facendo.
* **Nome** — un'etichetta arbitraria che descrive lo scopo del controllo.
* **Tipo** — il tipo di controllo:
  ![](/basics/slider.svg?resize=24,24) **Slider**,
  ![](/basics/knob.svg?resize=24,24) **Knob**,
  ![](/basics/button.svg?resize=24,24) **Button** oppure
  ![](/basics/knob.svg?resize=24,24) **Encoder**. Tre tipi speciali —
  ![](/basics/back.svg?resize=24,24) **Previous Page**,
  ![](/basics/forward.svg?resize=24,24) **Next Page** e
  ![](/basics/star.svg?resize=24,24) **Page Set** — vengono utilizzati per
  controllare i frame multi-pagina.

Per i profili **MIDI** l'editor aggiunge i campi **Channel**, **Message**,
**Param** e **Note**, che permettono di inserire la specifica MIDI in modo più
intuitivo (questi valori vengono tradotti nel numero di canale).

#### ![](/basics/slider.svg?resize=24,24) Movimento dello slider

Selezionando un canale **Slider** viene mostrato il relativo comportamento di
movimento:

* **Assoluto** (predefinito) — QLC+ utilizza il valore ricevuto esattamente
  come inviato.
* **Relativo** — il valore viene trattato come un movimento a partire dalla
  posizione corrente del widget, utile con un joystick HID che pilota un
  widget [XY Pad](/virtual-console/xy-pad) o [Slider](/virtual-console/slider).
  Un valore di **Sensibilità** stabilisce quanto è marcato il movimento — più
  alto è più lento, più basso è più veloce.

#### ![](/basics/knob.svg?resize=24,24) Encoder

Un encoder è un controllo rotativo continuo, sempre relativo: ruotandolo genera
offset positivi o negativi in QLC+. Un valore di **Sensibilità** stabilisce
l'entità dell'offset aggiunto o sottratto per ogni passo.

#### ![](/basics/button.svg?resize=24,24) Button

I pulsanti espongono un comportamento globale aggiuntivo:

* **Genera una pressione/rilascio extra al toggle** — per dispositivi (ad es.
  Behringer BCF2000) o software (ad es. TouchOSC) che inviano un solo valore
  alla pressione. QLC+ sintetizza il rilascio "mancante" in modo che i toggle
  si comportino in modo coerente.
* **Feedback personalizzato** — con **Lower value** e **Upper value** si
  forzano valori personalizzati da inviare quando il pulsante è spento/acceso,
  ad esempio per impostare il colore del LED sui dispositivi AKAI APC. Questa
  impostazione è globale, ma un widget specifico della Virtual Console può
  sovrascriverla.

### Colori

Alcuni controller possono mostrare colori sui propri pulsanti. Questa scheda
permette di definire un insieme di colori di feedback in modo che possano
essere scelti facilmente durante la modifica del feedback dei widget della
Virtual Console. Utilizzare
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Aggiungi** per
aggiungere una voce con:

* **Value** — il valore che QLC+ deve inviare al controller per produrre il
  colore.
* **Color** — il colore mostrato a quel valore (un selettore colore).
* **Label** — un nome per il colore (ad es. "Blu").

### Canali MIDI

Per i dispositivi MIDI che utilizzano canali MIDI diversi per diverse modalità
di feedback/visualizzazione (ad esempio l'AKAI APC Mini MK2), questa scheda
permette di aggiungere i canali MIDI rilevanti con un nome descrittivo,
tramite <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Aggiungi**.

## Salvataggio

Al termine, salvare il profilo con il pulsante
![](/basics/filesave.svg?resize=24,24) **Salva** (verrà chiesto di inserire
produttore/modello se mancanti). Il nuovo profilo compare quindi nell'elenco
dei profili di input, pronto per essere assegnato a un universo come descritto
sopra.

Notare che alcuni profili inclusi sono **profili di sistema** e non possono
essere rimossi a meno di non disporre di diritti di amministratore.
