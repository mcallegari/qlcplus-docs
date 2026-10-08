---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

QLC+ include un web server integrato che espone alcune delle sue funzionalità
a un normale browser web. Questo è molto comodo per eseguire QLC+ su un
dispositivo privo di display (un sistema **headless**), sia per lavorare in
autonomia sia per controllarlo da remoto tramite un telefono, un tablet o un
altro computer.

## Abilitare l'interfaccia web

L'interfaccia web **non** è abilitata per impostazione predefinita. Avviare
QLC+ con l'opzione `-w` (o `--web`) per attivarla. Opzioni della riga di
comando correlate:

| Opzione | Scopo |
|--------|---------|
| `-w`, `--web` | Abilita l'accesso web remoto. |
| `-wp`, `--web-port <port>` | Utilizza una porta specifica (il valore predefinito è **9999**). |
| `-wa`, `--web-auth` | Abilita l'accesso web con autenticazione utente. |
| `-a`, `--web-auth-file <file>` | File in cui memorizzare le credenziali di autenticazione di base. |

Vedere la pagina [parametri della riga di comando](../command-line-parameters)
per sapere come passare queste opzioni.

## Accedere all'interfaccia web

Da qualsiasi browser moderno (su qualsiasi dispositivo nella stessa rete)
connettersi a:

**http://\[indirizzo IP\]:9999**

dove *\[indirizzo IP\]* è l'indirizzo della macchina su cui è in esecuzione
QLC+ — ad esempio `http://192.168.0.100:9999`. Il browser deve supportare i
[WebSocket](https://caniuse.com/mdn-api_websocket), che QLC+ utilizza per
comunicare con la pagina in tempo reale.

L'interfaccia web dispone di tre pagine:

* **Virtual Console**
* **Simple Desk**
* **Configuration**

È inoltre possibile creare pagine web personalizzate che comunicano con QLC+
attraverso la sua [Web API](web-api).

## Pagina Virtual Console

Questa è la pagina predefinita. Rispecchia la **Virtual Console** di QLC+: se
è caricato un progetto, mostra i widget creati (pulsanti, slider, cue list,
frame, orologi, XY pad, speed dial, animazioni, audio trigger, etichette), e
azionarli nel browser pilota QLC+ dal vivo. Se non è caricato alcun progetto,
la pagina è vuota.

* **Load project** (in alto a sinistra) — scegliere un file di progetto dal
  dispositivo con cui si sta navigando; viene trasferito e caricato da QLC+.
* **Configuration** — apre la pagina di configurazione.

Il layout e lo stato dei widget vengono inviati al browser come JSON, e gli
aggiornamenti (una funzione in esecuzione, un fader spostato, un cambio di
cue) vengono ritrasmessi dal vivo tramite il WebSocket, così la vista web
rimane sincronizzata con QLC+.

## Pagina Simple Desk

Una versione semplificata del [Simple Desk](/simple-desk) desktop. Mostra un
universo DMX suddiviso in pagine di 32 canali.

* Utilizzare le **frecce sinistra/destra** per spostarsi tra le pagine dei
  canali.
* Utilizzare il **menu a tendina** in alto a destra per scegliere quale
  universo viene mostrato.
* Utilizzare il pulsante **reset** (✕ grigia) per azzerare l'intero universo.

### DMX Keypad

Il pulsante **DMX Keypad** apre un tastierino tradizionale per impostare molti
canali con un solo comando. La sintassi dei comandi corrisponde a quella del
[tastierino Simple Desk](/simple-desk) desktop:

| Tasto | Descrizione |
|-----|-------------|
| **AT** | Imposta un valore per un canale o un intervallo. Esempio: **13 AT 148**. |
| **THRU** | Seleziona un intervallo di canali. Esempio: **3 THRU 15 AT 133**. |
| **FULL** | Imposta il valore massimo (255). Esempio: **1 THRU 10 FULL**. |
| **ZERO** | Imposta il valore minimo (0). Esempio: **4 ZERO**. |
| **BY** | Imposta un passo all'interno di un intervallo. Esempio: **1 THRU 10 BY 2 AT 100** (canali 1, 3, 5, 7, 9). |
| **+%** | Aumenta i valori correnti di una percentuale. Esempio: **1 THRU 10 BY 2 +% 20**. |
| **-%** | Diminuisce i valori correnti di una percentuale. Esempio: **1 THRU 10 BY 2 -% 20**. |

Da tenere presente:

* Un comando viene inviato solo quando si preme **ENTER**.
* Gli indirizzi DMX sono contigui tra gli universi — l'Universo 1 va da 1 a
  512, l'Universo 2 da 513 a 1024, e così via.
* È anche possibile digitare i comandi direttamente nella casella di testo in
  alto una volta conosciuta la sintassi.

## Pagina Configuration

Permette di impostare la configurazione di QLC+ da remoto, in diverse aree:

* **Universes configuration** — imposta gli input, gli output, il feedback, i
  profili e il passthrough per ciascun universo (equivalente al pannello
  [Input/Output](/input-output) desktop). Poiché un progetto memorizza già la
  propria mappatura I/O, solitamente è sufficiente verificarla qui anziché
  riconfigurarla.
* **Audio configuration** — scegliere i dispositivi di riproduzione e di
  input audio.
* **User loaded fixtures** — caricare da remoto una definizione di fixture
  personalizzata su QLC+ con **Load fixture**. Dopo aver aggiunto fixture
  personalizzate, ricaricare il progetto o riavviare QLC+ sul dispositivo di
  destinazione.
* **Authorized users** — disponibile solo quando QLC+ viene avviato con `-wa`
  / `--web-auth`. Abilita l'autenticazione HTTP di base (senza HTTPS/certificati).
  Quando la si abilita per la prima volta è necessario aggiungere almeno un
  amministratore, altrimenti non viene mai richiesta alcuna password. Livelli
  di accesso:
  * **Everything** — amministratori; accesso completo, inclusa la gestione
    degli utenti.
  * **Virtual Console and Simple Desk** — possono visualizzare queste due
    pagine, ma non la pagina Configuration.
  * **Only Virtual Console** — può visualizzare solo la pagina Virtual
    Console.

  Un amministratore può aggiungere utenti (Username + Password →
  **Add user**), eliminare utenti e modificare il livello di accesso o la
  password di un utente (**Change**).

Utilizzare il pulsante **Back** (in alto a sinistra) per tornare alla pagina
principale.

## Pagina System

Sulle piattaforme supportate (tipicamente dispositivi Linux headless come un
Raspberry Pi) è disponibile un'area **system** per configurare la rete e
l'hotspot del dispositivo, scegliere il progetto di **autostart**, e
**riavviare** o **spegnere** il dispositivo da remoto.
