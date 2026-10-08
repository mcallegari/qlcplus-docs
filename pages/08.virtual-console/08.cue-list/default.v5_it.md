---
title: 'Cue List'
date: '03:34 22-08-2023'
---

Una **Cue List** riproduce un [Chaser](/function-manager/chaser-editor) una
cue (step) alla volta, in ordine — esattamente come una scaletta teatrale. È
il widget ideale per gestire uno spettacolo copionato in cui si avanza tra i
vari look con un pulsante **GO**. La [Virtual Console](/virtual-console).

Per collegare un chaser, trascinarlo sul widget oppure usare le
impostazioni; ogni step del chaser diventa una cue nell'elenco.

## Settings

* **Attached Chaser** — il chaser riprodotto dalla cue list. Usare **Detach
  the current chaser** per rimuoverlo.

### Buttons behavior

Configura i pulsanti di riproduzione del widget:

* **Play/Stop layout** — quali pulsanti di trasporto vengono mostrati:
  * **Play/Pause + Stop**
  * **Play/Stop + Pause**
* **Next/Previous (when chaser is not running)** — cosa fanno i pulsanti
  next/previous quando nulla è ancora in riproduzione:
  * **Run from first/last cue** — avvia la riproduzione dalla prima/ultima
    cue.
  * **Run from next/previous cue** — avvia dalla cue successiva/precedente.
  * **Select next/previous cue** — sposta solo la selezione senza avviare la
    riproduzione.
  * **Do nothing**.

### Side fader

Un fader opzionale accanto alla cue list:

* **Mode**:
  * **None** — nessun fader laterale.
  * **Crossfade** — il fader esegue manualmente il crossfade tra la cue
    attuale e quella successiva, per dissolvenze manuali in stile teatrale.
  * **Steps** — il fader scorre attraverso gli step della cue list.

## Suggerimenti

* Usare il fader laterale **Crossfade** quando si vogliono gestire le
  dissolvenze manualmente su un GO, come su una consolle teatrale.
* Associare **Next** (GO) a una scorciatoia da tastiera o a un pedale tramite
  la scheda External controls per un funzionamento a mani libere.
