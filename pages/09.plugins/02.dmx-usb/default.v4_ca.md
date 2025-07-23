---
title: 'DMX USB'
date: '05:08 22-08-2023'
---

Introducció
------------

El connector USB DMX admet una varietat de dispositius USB a DMX basats en FTDI.

Els dispositius USB DMX compatibles es poden trobar a la nostra pàgina de [compatibilitat](https://www.qlcplus.org/discover/compatibility).

Configuració
-------------

Els dispositius USB DMX s'han de detectar automàticament des de QLC+ i mostrar-se a la llista de panells d'entrada/sortida.  
Si per alguna raó la detecció automàtica falla, podeu "forçar" el tipus de l'adaptador USB DMX manualment.  
Feu clic al nom del dispositiu i obriu el diàleg de configuració fent clic a la icona ![](/basics/configure.png) a la part inferior dreta del plafó.  
Veureu una llista de dispositius USB DMX actualment connectats al vostre ordinador. Cadascuna té un menú desplegable on podeu forçar el tipus de dispositiu.  
Aquest és el significat de cada un:

* **Open TX**: Enttec USB DMX Open (i clons) en mode de sortida
* **Open RX**: mode de recepció de dispositius FTDI genèrics
* **Pro RX/TX**: Enttec USB DMX Pro o la majoria dels dispositius DMXKing
* **Pro Mk2**: Enttec USB DMX Pro Mk2 - 2 sortides DMX, 1 entrada DMX, 1 entrada MIDI i 1 sortida MIDI estan disponibles
* **Ultra Pro**: DMXKing ultraDMX Pro amb 2 sortides i 1 entrada
* **DMX4ALL**: DMX4ALL USB-DMX STAGE-PROFI MK2
* **Vince Tx**: Vince DMX512 USB en mode de sortida

**Nota per als usuaris d'OSX:** Si el vostre adaptador es detecta però no produeix cap sortida, probablement trobareu la solució a la pàgina [Preguntes i respostes](/basics/questions-and-answers) (Pregunta 3)3).  
**Nota 1**: Els dispositius Eurolite USB-DMX512 Pro s'han de forçar al mode "Pro RX/TX" per funcionar correctament.  
**Nota 2**: Al Windows, els clons DMX oberts d'Enttec podrien parpellejar a 44Hz. Podeu intentar disminuir la freqüència de sortida fins que es resolgui el problema.

Requisits
------------

### Linux

A totes les distribucions de Linux, heu d'instal·lar libftdi. Si instal·leu QLC+ amb l'Ubuntu Software Center o alguna altra eina d'instal·lació automàtica, aquesta biblioteca s'instal·larà automàticament.  
En alguns casos, si el dispositiu no emet res, pot ser útil afegir el vostre usuari al grup "dialout" amb l'ordre següent:
```
sudo adduser el\_teu\_nom\_usuari dialout
```

### macOS

A l'Apple macOS, no necessites cap controlador, ja que QLC+ utilitza la interfície USB nativa del macOS. La instal·lació dels controladors D2XX no hauria de causar danys, però **NO INSTAL·LEU ELS CONTROLADORS VCP (Virtual COM Port),** ja que definitivament interferiran amb QLC +. Si heu instal·lat prèviament els controladors VCP, consulteu les [guies d'instal·lació FTDI](https://ftdichip.com/document/installation-guides/) sobre com desinstal·lar-los.

**Problemes d'OSX Mavericks (o posterior):** consulteu [Preguntes i respostes #3](/basics/questions-and-answers)

### Windows

A Microsoft Windows, el connector necessita els [últims controladors D2XX de FTDI](https://ftdichip.com/drivers/d2xx-drivers/). Normalment, quan un dispositiu FTDI està connectat per primera vegada, Windows us baixarà automàticament els controladors D2XX, de manera que no cal cap acció.
Si això no passa, consulteu les [guies d'instal·lació FTDI](https://ftdichip.com/document/installation-guides/) per saber com instal·lar els controladors.
**NO INSTAL·LEU controladors VCP (Port Virtual COM)**, ja que probablement interferiran amb la interfície D2XX.

Modes compatibles amb ENTTEC DMX USB Pro
----------------------------------

Seguir una quadrícula que mostri els modes IO suportats per QLC+ per a dispositius com DMX USB Pro i Pro Mk2.  
Si un mode no està llistat aquí, vol dir que no està suportat per QLC+ o el propi dispositiu a causa de les limitacions del maquinari, per tant, no els informeu com a problemes al fòrum QLC+.


|     |     |     |     |     |     |     |     |     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
|     | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 |
| ENTRADA DMX1 | o |     |     | o |     |     | o |     |     | o |     |     | o |     |
| SORTIDA DMX1 |     | o |     |     | o |     |     | o |     |     | o |     |     | o |
| SORTIDA DMX2 (1) |     |     | o | o | o |     |     |     |     |     |     |     |     |     |
| ENTRADA MIDI (2) |     |     |     |     |     | o | o | o |     |     |     | o | o | o |
| SORTIDA MIDI (2) |     |     |     |     |     |     |     |     | o | o | o | o | o | o |


(1) DMX2 OUT només està disponible en DMX USB Mk2 Pro  
(2) MIDI IN i MIDI OUT estan disponibles només en DMX USB Mk2 Pro amb un cable de ruptura de 5 vies. Els senyals MIDI OUT s'envien de l'1 al 512 com es descriu en el [mapa de canals del connector MIDI](../midi#mapa-de-canals) dels canals del connector MIDI 

Ajustament
------

**Nota: L'ajustament manual no s'hauria de realitzar mai excepte en alguns casos molt particulars. Utilitzeu-lo sota el vostre propi risc!**  
És possible canviar la mida del marc DMX per als dispositius Enttec Open (i similars) amb una clau de configuració oculta a cada plataforma. La clau indica a QLC+ quants canals s'han de transmetre en cada marc DMX, de manera que per a un univers DMX (per defecte 512).  
Consulteu la secció [Ajustament de paràmetres manuals](/advanced/parameters-tuning#2-número-de-canals-dmx-usb-enttec-open) DMX USB Enttec Open.
