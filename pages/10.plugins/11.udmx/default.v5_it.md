---
title: uDMX
date: '05:20 22-08-2023'
media_order: zadig_udmx_windows.png
---

Introduzione
------------

Il plugin di output uDMX supporta l'interfaccia USB-DMX [Anyma uDMX](https://www.anyma.ch/research/udmx/) su Linux, macOS e Windows.

Requisiti
------------

### Linux

Su tutte le distribuzioni Linux, dovete installare libusb. Se installate QLC+ con l'Ubuntu Software Center o un altro strumento di installazione automatica, questa libreria verrà installata automaticamente per voi.

### macOS

Su Apple macOS, non avete bisogno di alcun driver poiché QLC+ utilizza l'interfaccia USB nativa di macOS.

### Windows

QLC+ comunica con i dispositivi uDMX tramite libusb, che è inclusa nell'installer di QLC+, quindi non è necessaria alcuna DLL aggiuntiva. Il dispositivo deve utilizzare il driver **WinUSB**, che può essere installato con [Zadig](https://zadig.akeo.ie): aprite Zadig, selezionate **Options > List All Devices**, scegliete il dispositivo uDMX, selezionate **WinUSB** e cliccate **Install Driver**.

![](zadig_udmx_windows.png)

Tuning
------

È possibile modificare la frequenza del frame DMX per tutti i dispositivi uDMX con una chiave di impostazione nascosta su ciascuna piattaforma. La chiave indica a QLC+ quante volte ogni frame DMX (512 canali) deve essere inviato all'universo al secondo. Un valore di "30" significa 30 volte al secondo (30Hz). Fate riferimento alla sezione uDMX della pagina [Regolazione manuale dei parametri](/advanced/parameters-tuning#3-udmx-frequency)
