---
title: Peperoni
date: '05:19 22-08-2023'
media_order: zadig-peperoni-usb.png
---

Introducció
--------------

El connector de sortida de Peperoni admet dispositius de sortida USB-DMX produïts per [Peperoni Light](http://www.peperoni-light.de/products1.htm).

Requisits
--------------

### Linux

A totes les distribucions de Linux, heu d'instal·lar el libusb. Si instal·leu QLC+ amb l'Ubuntu Software Center o alguna altra eina d'instal·lació automàtica, aquesta biblioteca s'instal·larà automàticament.

### Mac OS X

No es necessita res especial per a Mac OS X. Tots els components necessaris ja estan dins del paquet d'aplicació Q Light Controller Plus perquè QLC+ utilitza la interfície USB nativa d'OS X.

### Windows

QLC+ es comunica amb els dispositius Peperoni mitjançant libusb, que s'inclou a l'instal·lador de QLC+, de manera que no cal cap DLL addicional. El dispositiu ha d'utilitzar el controlador **WinUSB**:

* Els dispositius amb firmware 0x1000 o més recent instal·len el controlador WinUSB automàticament quan es connecten.
* Els dispositius amb firmware més antic necessiten que el controlador WinUSB s'instal·li manualment amb [Zadig](https://zadig.akeo.ie): obriu Zadig, seleccioneu **Options > List All Devices**, trieu el dispositiu Peperoni, seleccioneu **WinUSB** i feu clic a **Install Driver**. Com a alternativa, actualitzeu el firmware del dispositiu.
* Per a l'X-Switch, seleccioneu **libusbK** en lloc de WinUSB a Zadig, ja que WinUSB no pot canviar la configuració USB del dispositiu.

![](zadig-peperoni-usb.png)
