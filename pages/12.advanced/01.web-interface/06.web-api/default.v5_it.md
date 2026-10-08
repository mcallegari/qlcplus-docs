---
title: 'Web API'
date: '03:38 12-07-2026'
---

La [Web Interface](../../web-interface) di QLC+ è pilotata da una piccola
**API** che è possibile utilizzare dalle proprie pagine web o script per
leggere lo stato di QLC+ e controllarlo da remoto. Questa pagina documenta
l'API utilizzata dall'accesso web della versione 5 (QML).

L'API è composta da due parti:

* alcuni **endpoint HTTP** che servono pagine e dati, e
* un canale **WebSocket** che trasporta comandi e aggiornamenti in tempo
  reale.

La maggior parte del controllo avviene tramite il WebSocket.

## Connessione

Innanzitutto abilitare l'interfaccia web avviando QLC+ con `-w` (vedere la
pagina [Web Interface](../../web-interface)). Quindi aprire un WebSocket
verso:

```
ws://[IP address]:9999/qlcplusWS
```

I messaggi sono testo semplice. Un messaggio è un elenco di **campi separati
dal carattere pipe `|`**; il primo campo è il nome del comando. Le risposte da
QLC+ arrivano sullo stesso socket nello stesso formato separato da pipe. QLC+
**invia** anche messaggi non richiesti quando qualcosa cambia (una funzione si
avvia, un fader si muove, una cue avanza), quindi un client dovrebbe
semplicemente restare in ascolto e reagire.

> **Nota sugli ID:** le funzioni e i widget sono referenziati tramite il loro
> **ID** numerico. Gli universi e i canali nell'API sono **basati su 1**
> (Universo 1, canale 1 …).

## Endpoint HTTP

| Operazione | Endpoint | Scopo |
|----|------|---------|
| GET | / | La pagina web della Virtual Console. |
| GET | /vc.json | Il layout corrente della Virtual Console e lo stato dei widget come JSON. |
| GET | /simpleDesk | La pagina web del Simple Desk. |
| GET | /config | La pagina di configurazione. |
| GET | /system | La pagina di sistema (rete/hotspot/autostart, dove supportata). |
| POST | /loadProject | Carica e apre un file di progetto (`.qxw`). |
| POST | /loadFixture | Carica e apre una definizione di fixture personalizzata. |

## API WebSocket — query QLC+API

I comandi di interrogazione e controllo vengono inviati come
`QLC+API|<command>|<args…>`. QLC+ risponde con `QLC+API|<command>|<result…>`.

| Comando | Descrizione |
|---------|-------------|
| `QLC+API|isProjectLoaded` | Risponde `true` / `false`. |
| `QLC+API|getFunctionsNumber` | Il numero di funzioni nel progetto. |
| `QLC+API|getFunctionsList` | Un elenco piatto di coppie `id|name|` per ogni funzione. |
| `QLC+API|getFunctionType|<fID>` | Il tipo della funzione come stringa (Scene, Chaser, …). |
| `QLC+API|getFunctionStatus|<fID>` | `Running` o `Stopped`. |
| `QLC+API|setFunctionStatus|<fID>|<status>` | Avvia (`1`) o arresta (`0`) la funzione. |
| `QLC+API|getWidgetsNumber` | Il numero di widget della Virtual Console. |
| `QLC+API|getWidgetsList` | Un elenco piatto di coppie `id|caption|` per ogni widget. |
| `QLC+API|getWidgetType|<wID>` | Il tipo del widget come stringa (Button, Slider, …). |
| `QLC+API|getWidgetFunction|<wID>` | La funzione collegata al widget (id, tipo, nome). |
| `QLC+API|getWidgetStatus|<wID>` | Il valore/stato corrente del widget (vedere sotto). |
| `QLC+API|getChannelsValues|<universe>|<startAddress>|[count]` | I valori DMX di `count` canali a partire da `startAddress` nell'`universe`. |
| `QLC+API|sdResetChannel|<channel>` | Ripristina un canale del Simple Desk; risponde con i valori dei canali aggiornati. |
| `QLC+API|sdResetUniverse|<universe>` | Ripristina un intero universo; risponde con i valori dei canali aggiornati. |

`getWidgetStatus` restituisce un valore che dipende dal tipo di widget — ad
esempio un pulsante risponde `255` (attivo), `127` (in monitoraggio) o `0`
(inattivo); uno slider risponde con il suo valore numerico; una cue list
risponde `PLAY|<index>` o `STOP`; un'animazione risponde con il proprio
livello del fader.

## API WebSocket — controllo dei widget

Per azionare un widget, inviare il suo **ID numerico** come primo campo,
seguito dal valore o da un sotto-comando. La forma esatta dipende dal tipo di
widget.

### Widget semplici

| Messaggio | Effetto |
|---------|--------|
| `<wID>|<value>` | **Button**: pressione (valore `> 0`) o rilascio. **Slider**: imposta il suo valore. |
| `<wID>|SLIDER_OVERRIDE|<0/1>` | Slider: abilita/disabilita la modalità override. |
| `<wID>|CNG_PRESET|<value>` | Slider: applica un valore preset Click & Go. |
| `<wID>|CNG_COLORS|<primary>|<secondary>` | Slider: imposta i colori Click & Go (ad es. `#ff0000`). |

### Cue List

| Messaggio | Effetto |
|---------|--------|
| `<wID>|PLAY` | Riproduzione. |
| `<wID>|STOP` | Arresto. |
| `<wID>|PREV` | Cue precedente. |
| `<wID>|NEXT` | Cue successiva (GO). |
| `<wID>|STEP|<index>` | Salta a uno step specifico. |
| `<wID>|CUE_SIDECHANGE|<level>` | Sposta il fader laterale. |

### Frame / Solo Frame

| Messaggio | Effetto |
|---------|--------|
| `<wID>|NEXT_PG` / `<wID>|PREV_PG` | Pagina successiva / precedente. |
| `<wID>|PAGE|<n>` | Vai alla pagina *n*. |
| `<wID>|FRAME_DISABLE|<0/1>` | Abilita/disabilita il frame. |
| `<wID>|COLLAPSE|<0/1>` | Comprimi/espandi il frame. |

### Animation (RGB Matrix)

| Messaggio | Effetto |
|---------|--------|
| `<wID>|MATRIX_SLIDER|<value>` | Imposta il fader di intensità. |
| `<wID>|MATRIX_COLOR_1..5|<color>` | Imposta i colori 1–5 (ad es. `#00ff00`). |
| `<wID>|MATRIX_COMBO|<index>` | Seleziona l'algoritmo/preset. |

### XY Pad

| Messaggio | Effetto |
|---------|--------|
| `<wID>|XYPAD|<x>|<y>` | Imposta la posizione del pad. |
| `<wID>|XYPAD_RANGE_H|<min>|<max>` | Imposta l'intervallo orizzontale. |
| `<wID>|XYPAD_RANGE_V|<min>|<max>` | Imposta l'intervallo verticale. |
| `<wID>|XYPAD_PRESET|<presetID>` | Applica un preset. |

### Speed Dial

| Messaggio | Effetto |
|---------|--------|
| `<wID>|SPEED_UP` / `<wID>|SPEED_DOWN` | Regola il tempo verso l'alto/basso. |
| `<wID>|SPEED_TIME|<ms>` | Imposta il tempo direttamente. |
| `<wID>|SPEED_FACTOR|<factor>` | Imposta il fattore moltiplicatore. |
| `<wID>|SPEED_APPLY` | Applica. |

### Audio Triggers

| Messaggio | Effetto |
|---------|--------|
| `<wID>|<0/1>` | Abilita/disabilita l'acquisizione. |
| `<wID>|AUDIO_VOLUME|<0-100>` | Imposta il volume di input. |

### Clock

| Messaggio | Effetto |
|---------|--------|
| `<wID>|CLOCK_PLAY|<0/1>` | Avvia/arresta (per cronometro/conto alla rovescia). |
| `<wID>|CLOCK_RESET` | Ripristina. |

## API WebSocket — Simple Desk e globali

| Messaggio | Effetto |
|---------|--------|
| `CH|<absoluteAddress>|<value>` | Imposta un canale DMX assoluto (gli indirizzi sono continui tra gli universi) su un valore 0–255. |
| `VC_PAGE|<n>` | Passa la Virtual Console alla pagina *n*. |
| `GM_VALUE|<value>` | Imposta il Grand Master. QLC+ invia anche `GM_VALUE|<value>|<display>` quando cambia. |
| `POLL` | Un keep-alive; QLC+ lo ignora. |

## Note e limitazioni

* Tutti gli accessi sono soggetti al **livello di autenticazione** dell'utente
  connesso quando QLC+ viene avviato con `-wa`: il controllo di canali e
  widget richiede almeno i diritti Simple Desk / Virtual Console, e i comandi
  di configurazione richiedono diritti di amministratore.
* Questa API è in fase di sviluppo e potrebbe cambiare tra le versioni.
