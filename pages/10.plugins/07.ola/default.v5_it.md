---
title: OLA
date: '05:17 22-08-2023'
---

Introduzione
------------

Il plugin OLA permette la comunicazione diretta tra QLC+ e il [framework OLA](https://wiki.openlighting.org/index.php/Open_Lighting_Architecture) sulla stessa macchina.

Requisiti
------------

Il plugin OLA richiede che OLA sia installato nel sistema.  
Poiché OLA non funziona su Windows, solo gli utenti Linux e macOS possono beneficiare di questo plugin.  
Le informazioni su come scaricare e installare OLA si trovano [qui](https://wiki.openlighting.org/index.php/Download_%26_Install_OLA).  
QLC+ ha bisogno che il server OLA sia in esecuzione per poter comunicare con il framework OLA. Questo può essere fatto sia manualmente avviando "olad" da un terminale, sia nel pannello di configurazione selezionando "Run standalone OLA daemon".

Configurazione
-------------

Premendo il pulsante di configurazione su una linea di output OLA, apparirà una piccola finestra popup che mostra le informazioni di base su come gli output di QLC+ sono mappati rispetto agli universi OLA.  
In basso, un pulsante di spunta vi permetterà di forzare l'avvio del server OLA.

Configurazione di OLA
---------

Quando vi siete assicurati che tutto funzioni in QLC+ e avete verificato come sono mappati gli universi, potete configurare OLA per inviare in output il segnale ricevuto da QLC+ verso un dispositivo DMX, sia USB che via rete.  
Ecco una [introduzione all'uso di OLA](https://wiki.openlighting.org/index.php/Using_OLA).  
Sostanzialmente dovete aprire un browser web, connettervi a [http://localhost:9090](http://localhost:9090) o [http://127.0.0.1:9090](http://127.0.0.1:9090) e aggiungere un universo che abbia lo stesso numero mappato in QLC+ e selezionare la linea di output desiderata.
