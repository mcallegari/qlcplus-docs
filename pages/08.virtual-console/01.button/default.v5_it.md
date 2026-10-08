---
title: Button
date: '14:26 21-08-2023'
---

Un **Button** è il widget più semplice della [Virtual Console](/virtual-console): premerlo
per attivare una funzione. È l'elemento di base della maggior parte delle
console — un pulsante per ogni scena, chase o effetto che si vuole lanciare.

Per collegare una funzione, trascinarla dal Function Manager sul pulsante,
oppure usare le impostazioni del pulsante.

## Settings

* **Attached Function** — la funzione controllata da questo pulsante. Usare
  **Detach the current function** per rimuoverla.

* **Pressure behaviour** — cosa succede premendo il pulsante:
  * **Toggle Function on/off** — avvia la funzione alla prima pressione, la
    ferma alla successiva. Il pulsante resta acceso finché la funzione è in
    esecuzione.
  * **Flash Function (only for Scenes)** — esegue la scena solo finché il
    pulsante è tenuto premuto, poi la ferma. Con un tempo di **Fade out**,
    l'effetto flash sfuma al rilascio.
  * **Toggle Blackout** — attiva e disattiva il blackout dell'intero
    impianto.
  * **Stop all Functions** — ferma tutte le funzioni in esecuzione (un
    pulsante di panico).
  * **Adjust Function intensity** — il pulsante imposta l'intensità di una
    funzione a un livello fisso anziché avviarla/fermarla.

* **Flash properties** (mostrate per il comportamento Flash):
  * **Override priority / Force LTP** — fa in modo che il flash prevalga
    sulle altre funzioni che controllano gli stessi canali, così l'effetto
    flash vince finché è tenuto premuto.

## Suggerimenti

* Combinare i pulsanti con uno [Solo Frame](../solo-frame) in modo che
  premendone uno si fermino automaticamente gli altri — ideale per una fila
  di look mutuamente esclusivi.
* Aggiungere un **ingresso esterno** o una **scorciatoia da tastiera** (scheda
  External controls) per attivare il pulsante da hardware o da tastiera.
