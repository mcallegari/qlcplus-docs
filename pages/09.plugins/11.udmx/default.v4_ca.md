---
title: uDMX
date: '05:20 22-08-2023'
---

Introducció
------------

El connector de sortida uDMX admet la interfície [Anyma uDMX](https://www.anyma.ch/research/udmx/) USB-DMX a Linux i macOS.

Requisits
------------

### Linux

A totes les distribucions de Linux, heu d'instal·lar el libusb. Si instal·leu QLC+ amb l'Ubuntu Software Center o alguna altra eina d'instal·lació automàtica, aquesta biblioteca s'instal·larà automàticament.

### macOS

A l'Apple macOS, no necessites cap controlador, ja que QLC+ utilitza la interfície USB nativa del macOS.

### Windows

Aquest dispositiu encara no està admès al Windows.

Afinació
------

És possible canviar la freqüència de marc DMX per a tots els dispositius uDMX amb una clau de configuració oculta a cada plataforma. La clau indica a QLC+ quantes vegades s'hauria d'enviar cada marc DMX (512 canals) a l'univers per segon. Un valor de "30" significa 30 vegades per segon (30Hz). Consulteu la secció [Afinació de paràmetres manuals](/advanced/parameters-tuning#3-udmx-frequency) uDMX