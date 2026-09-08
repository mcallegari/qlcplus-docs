---
title: uDMX
date: '05:20 22-08-2023'
---

Introduzione
------------

Il plugin di output uDMX supporta l'interfaccia USB-DMX [Anyma uDMX](https://www.anyma.ch/research/udmx/) su Linux e macOS.

Requisiti
------------

### Linux

Su tutte le distribuzioni Linux, dovete installare libusb. Se installate QLC+ con l'Ubuntu Software Center o un altro strumento di installazione automatica, questa libreria verrà installata automaticamente per voi.

### macOS

Su Apple macOS, non avete bisogno di alcun driver poiché QLC+ utilizza l'interfaccia USB nativa di macOS.

### Windows

Questo dispositivo non è ancora supportato su Windows.

Tuning
------

È possibile modificare la frequenza del frame DMX per tutti i dispositivi uDMX con una chiave di impostazione nascosta su ciascuna piattaforma. La chiave indica a QLC+ quante volte ogni frame DMX (512 canali) deve essere inviato all'universo al secondo. Un valore di "30" significa 30 volte al secondo (30Hz). Fate riferimento alla sezione uDMX della pagina [Regolazione manuale dei parametri](/advanced/parameters-tuning#3-udmx-frequency)
