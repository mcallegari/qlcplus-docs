---
title: Peperoni
date: '05:19 22-08-2023'
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

Heu d'instal·lar els [controladors Peperoni USBDMX Windows](http://www.lighting-solutions.de/support/driver.html). Normalment venen en un CD juntament amb el dispositiu Peperoni que heu comprat.  
Si després d'instal·lar el controlador, QLC+ encara no detecta el vostre dispositiu Peperoni, copieu el fitxer usbdmx.dll que trobeu dins del paquet ZIP del controlador (carpeta i386) a la carpeta QLC+ principal.

* Descomprimiu el paquet del controlador a una carpeta del disc dur.
* Connecta el dispositiu peperoni a un port USB.
* Si esteu executant una versió de 32 bits de Windows, aneu a l'assistent "S'ha trobat maquinari nou" per cercar el controlador a **Windows/i386**.
* Si esteu executant una versió de 64 bits de Windows, aneu a l'assistent "S'ha trobat maquinari nou" per cercar el controlador sota **windows/ia64** o **windows/amd64**.