---
title: MIDI
date: '05:15 22-08-2023'
---

Introduzione
------------

Questo plugin fornisce il supporto input/output per il [protocollo MIDI](https://en.wikipedia.org/wiki/MIDI) e dà all'utente la libertà di controllare parametri tipici come canali, Note, Program Change e Control Change.  
Il plugin MIDI può essere piuttosto potente se usato in combinazione con dispositivi MIDI come tastiere, controller MIDI (come Behringer BCF2000 o KORG nanoKONTROL) o un sequencer audio software come Cubase o Ardour 3.  
L'utilizzo può variare dal controllo fader-to-fader (il caso del BCF2000) al triggering di sequenze per spettacoli sincronizzati (spettacoli controllati da un metronomo tramite un sequencer audio)

Configurazione
-------------

Quando fate clic sul pulsante di configurazione ![](/basics/configure.png) apparirà una finestra che mostra tutte le linee di input e output MIDI rilevate.  
Ogni linea ha tre opzioni che possono essere modificate in base alle vostre esigenze:

* **Canale MIDI**: Questo è il canale su cui QLC+ riceverà o invierà dati tramite il sistema MIDI. I canali MIDI possono andare da 1 a 16. Il canale speciale "1-16" indicherà a QLC+ di ricevere o inviare dati su qualsiasi canale MIDI.
* **Modalità**: Questa è la modalità MIDI che QLC+ userà per inviare dati tramite il sistema MIDI. Questo parametro può assumere tre valori possibili:
    * **Note velocity**: in questa modalità, QLC+ invierà dati usando la velocity delle note MIDI. Le note MIDI possono andare da 21 (A0) a 108 (C8) e ogni nota può avere una velocity da 0 a 127, che verrà raddoppiata all'interno di QLC+ per adattarsi all'intervallo DMX (0-255).
    * **Control Change**: questo è uno dei messaggi del protocollo MIDI (come Program Change) usato di frequente dai controller MIDI. Ogni dispositivo dovrebbe elencare i messaggi CC supportati nel proprio manuale utente, quindi vi preghiamo di consultarlo prima di usare questa modalità. L'intervallo CC può andare da 0 a 127 e può avere valori da 0 a 127, che verranno raddoppiati all'interno di QLC+ per adattarsi all'intervallo DMX (0-255).
    * **Program Change**: questo è uno dei messaggi del protocollo MIDI (come Control Change) usato di frequente dai controller MIDI. Ogni dispositivo dovrebbe elencare i messaggi PC supportati nel proprio manuale utente, quindi vi preghiamo di consultarlo prima di usare questa modalità. L'intervallo PC può andare da 0 a 127 e può avere valori da 0 a 127, che verranno raddoppiati all'interno di QLC+ per adattarsi all'intervallo DMX (0-255).
* **Messaggio di inizializzazione**: Questo è un elenco di preset (template) contenenti il messaggio di inizializzazione che QLC+ invierà all'apertura di un dispositivo MIDI prima di usarlo. Una spiegazione dettagliata di questa funzionalità è riportata di seguito.

> [!IMPORTANT]
> **Nota:** QLC+ segue lo standard MIDI, secondo cui un messaggio "Note On" con velocity `0` viene interpretato come "Note Off". Se il vostro controller o software invia messaggi Note On con velocity `0`, QLC+ non attiverà i pulsanti della Virtual Console. Per attivare i controlli, assicuratevi che i messaggi Note On usino una velocity diversa da zero. Questo problema è stato osservato con ProPresenter, e può essere risolto impostando una velocity diversa da zero.

Feedback
---------

Il plugin MIDI è uno dei plugin di QLC+ che supporta il feedback. Quando QLC+ rileva un dispositivo MIDI con una linea di output, abiliterà la casella di spunta del feedback nel [pannello Input/Output](/input-output). Da notare che output e feedback sono esclusivi, quindi non possono essere usati entrambi contemporaneamente.  
Se il vostro dispositivo MIDI supporta un canale di ritorno, QLC+ può inviargli un feedback visivo/meccanico. Dispositivi come il Behringer BCF2000 supportano questa funzionalità. Questo è molto utile durante gli spettacoli dal vivo per avere conoscenza immediata dello stato attuale dei fader mappati in QLC+.  
  
Un piccolo trucco che si può ottenere con QLC+ è usare il feedback come una linea di output MIDI generica per attivare controller/sequencer esterni.  
Vediamo alcuni esempi:

* Input: **OSC** ---\> Output: **DMX USB** --\> Feedback: **MIDI**
* Input: **Enttec Wing** --\> Output: **ArtNet** --\> Feedback: **MIDI**

Asse X del KORG nanoPAD
-------------------

Per motivi sconosciuti, le impostazioni di fabbrica del nanoPAD non mappano l'asse X dell'area pad. Per farlo funzionare completamente con QLC+, scaricate l'utility KORG (solo Windows e macOS) da [qui](http://i.korg.com/SupportPage.aspx?productid=415) e impostate l'asse X su CC2 (Control Change #2).

Feedback LED AKAI APC
----------------------

Quando si usa uno dei controller AKAI APC, c'è una funzionalità che può essere molto utile: il feedback del colore dei LED.  
Il comportamento predefinito con i pulsanti della Virtual Console è: valore = 0: LED spento, valore = 255: LED verde  
Questo può essere personalizzato quando si seleziona un canale di input, premendo il pulsante "Custom feedback".  
Viene visualizzata una nuova area, che mostra la possibilità di inserire un valore inferiore e uno superiore. Questo si traduce sostanzialmente in quali valori QLC+ deve inviare per gli stati on/off dei pulsanti.  
Poiché il protocollo MIDI funziona in un intervallo di valori 0-127, e QLC+ funziona nell'intervallo DMX 0-255, la tabella seguente vi indica direttamente i valori da inserire per ottenere il colore desiderato di un LED APC. Sostanzialmente sono presi dai manuali APC e raddoppiati.

| Valore | Colore LED |
| --- | --- |
| 0   | Spento |
| 2   | Verde |
| 4   | Verde lampeggiante |
| 6   | Rosso |
| 8   | Rosso lampeggiante |
| 10  | Giallo |
| 12  | Giallo lampeggiante |
| 14-255 | Verde |

È interessante notare che non è necessario mantenere 0 come valore inferiore. Ad esempio con inferiore = 6 e superiore = 2 il risultato sarà: Funzione Off -> LED rosso, Funzione On -> LED verde.

MIDI beat clock
---------------

A partire dalla versione 4.5.0, QLC+ supporta il [MIDI beat clock](https://en.wikipedia.org/wiki/MIDI_beat_clock)  
Da non confondere con il [MIDI timecode](https://en.wikipedia.org/wiki/MIDI_timecode), il MIDI beat clock è un segnale utile per sincronizzare dispositivi basati su BPM come una drum machine con le vostre luci controllate da QLC+.  
Due canali MIDI speciali sono stati mappati in QLC+ per controllare i widget della vostra [Virtual Console](/virtual-console) con un beat clock.  
Ecco una breve spiegazione dei canali speciali:

* **Canale 530**: Un segnale viene inviato su questo canale quando un beat clock inizia o si ferma.
* **Canale 531**: Questo segnale viene inviato a ogni BPM. QLC+ non tiene conto delle misure (es. 3/4, 4/4, 7/8), quindi quando impostate il vostro MIDI clock dovete considerare come QLC+ lo gestirà.

  
**Suggerimento**: Se il vostro controller è impostato per funzionare a BPM elevati (es. 180-200), potreste trovare difficile catturare il segnale di start. Un trucco per farlo è catturare il segnale di stop. Esempio:  

1.  Abilitate il rilevamento automatico dei widget della Virtual Console di QLC+
2.  Premete play sul vostro dispositivo che genera il MIDI beat clock. QLC+ rileverà il canale 530 e passerà molto rapidamente al canale 531
3.  Fermate la riproduzione sul vostro dispositivo MIDI beat clock. QLC+ rileverà di nuovo il canale 530.
4.  Disabilitate il rilevamento automatico dei widget della Virtual Console di QLC+

In modo simile potete catturare anche il segnale di beat. Basta disabilitare il processo di rilevamento automatico prima di fermare la riproduzione sul vostro controller beat (invertite i passaggi 3 e 4).

Messaggio di inizializzazione MIDI
---------------------------

Ci possono essere casi in cui il vostro dispositivo MIDI necessita di alcuni comandi per entrare in una modalità operativa specifica  
Il protocollo MIDI può gestire questo tramite SysEx. Questi sono messaggi particolari per istruire un dispositivo MIDI su come comportarsi.  
QLC+ può usare un template XML per ottenere questo risultato, che può essere selezionato nel pannello di configurazione MIDI.  
Ecco un esempio di come appare un template:  

&lt;!DOCTYPE MidiTemplate&gt;
&lt;MidiTemplate&gt;
 &lt;Creator&gt;
  &lt;Author&gt;Your name&lt;/Author&gt;
 &lt;/Creator&gt;
 &lt;Description&gt;A brief description of what the template does.&lt;/Description&gt;
 &lt;Name&gt;Template name to be displayed by QLC+&lt;/Name&gt;
 &lt;InitMessage&gt;F0 47 00 7B 60 00 04 41 09 00 05 F7&lt;/InitMessage&gt;
&lt;/MidiTemplate&gt;

Potete creare quelli di cui avete bisogno e collocarli nella vostra cartella MidiTemplates.  
Siete invitati a proporli nel forum di QLC+.

Mappa dei canali
-----------------

Per gestire un insieme di vari messaggi MIDI (Note, PC, CC, ecc.), QLC+ li rimappa in ordine sequenziale.  
Di seguito, i numeri di canale da usare nell'[editor dei profili di input](/input-output/input-profiles):

| Canale | Messaggio MIDI |
| --- | --- |
| 1   | Control Change 1 |
| ... | ... |
| 128 | Control Change 128 |
| 129 | NOTE ON/NOTE OFF 1 |
| ... | ... |
| 256 | NOTE ON/NOTE OFF 128 |
| 257 | NOTE AFTERTOUCH 1 |
| ... | ... |
| 384 | NOTE AFTERTOUCH 128 |
| 385 | Program Change 1 |
| ... | ... |
| 512 | Program Change 128 |
| 513 | Channel Aftertouch |
| 514 | Pitch Wheel |
| 530 | MIDI Beat Clock: Start/Continue |
| 531 | MIDI Beat Clock: Beat |
| 532 | MIDI Beat Clock: Stop |

In modalità OMNI, aggiungete 4096 * numero di canale
