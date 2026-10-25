---
title: uDMX
date: '05:20 22-08-2023'
media_order: zadig_udmx_windows.png
---

Introducció
------------

El connector de sortida uDMX admet la interfície [Anyma uDMX](https://www.anyma.ch/research/udmx/) USB-DMX a Linux, macOS i Windows.

Requisits
------------

### Linux

A totes les distribucions de Linux, heu d'instal·lar el libusb. Si instal·leu QLC+ amb l'Ubuntu Software Center o alguna altra eina d'instal·lació automàtica, aquesta biblioteca s'instal·larà automàticament.

### macOS

A l'Apple macOS, no necessites cap controlador, ja que QLC+ utilitza la interfície USB nativa del macOS.

### Windows

QLC+ es comunica amb els dispositius uDMX mitjançant libusb, que s'inclou a l'instal·lador de QLC+, de manera que no cal cap DLL addicional. El dispositiu ha d'utilitzar el controlador **WinUSB**, que es pot instal·lar amb [Zadig](https://zadig.akeo.ie): obriu Zadig, seleccioneu **Options > List All Devices**, trieu el dispositiu uDMX, seleccioneu **WinUSB** i feu clic a **Install Driver**.

![](zadig_udmx_windows.png)

Ajustaments
------

És possible canviar la freqüència de marc DMX per a tots els dispositius uDMX amb una clau de configuració oculta a cada plataforma. La clau indica a QLC+ quantes vegades s'hauria d'enviar cada marc DMX (512 canals) a l'univers per segon. Un valor de "30" significa 30 vegades per segon (30Hz). Consulteu la secció [Ajustament de paràmetres manuals](/advanced/parameters-tuning#3-freqüència-udmx) uDMX
