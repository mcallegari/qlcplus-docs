---
title: 'Disable Apple Serial VCP Driver'
date: '08:06 22-08-2023'
---

Tenint en compte totes les qüestions que han plantejat els usuaris de QLC+ al voltant d'aquest tema, aquí hi ha un extracte de l'aplicació oficial [FTDI Nota 134](https://www.ftdichip.com/Support/Documents/AppNotes/AN_134_FTDI_Drivers_Installation_Guide_for_MAC_OSX.pdf)

Desactivar el VCP proporcionat per Apple a OS X 10.9 i posteriors
=======================================================

Un controlador VCP per a la majoria de convertidors FTDI USB a sèrie es proporciona com a part del nucli en OS X 10.9 i posteriors. L'OS X carrega aquest controlador (AppleUSBFTDI.kext) quan es connecta un dispositiu amb el proveïdor FTDI estàndard i els identificadors de producte. Per utilitzar el VCP propi de FTDI, o per utilitzar programes D2XX, l'AppleUSBFTDI ha d'estar desactivat, descarregat o bloquejat, de la manera següent.

Desactiva mitjançant el canvi de nom (només OS X 10.9 i 10.10)
----------------------------------------------

Nota: aquest mètode funciona **només en 10.9 Mavericks i 10.10 Yosemite.**

Inicieu una sessió de terminal (Anar > Aplicacions > Utilitats > Terminal) i copieu/enganxeu el text següent a l'indicador d'ordres:

```
cd /Sistema/Biblioteca/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.kext AppleUSBFTDI.disabled
sudo touch /Sistema/Biblioteca/Extensions
```

després reinicieu.  
Per tornar a activar VCP, reanomena AppleUSBFTDI.disabled de nou a AppleUSBFTDI.kext

```
cd /Sistema/Biblioteca/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.desactivat AppleUSBFTDI.kext
sudo touch /Sistema/Biblioteca/Extensions
```

després reinicieu.

Descarrega temporalment (totes les versions de l'OS X)
-----------------------------------------

Nota: aquest mètode funciona en totes les versions de l'OS X.

És possible descarregar el VCP d'Apple per a la sessió actual, és a dir, fins al següent reinici:

```
sudo kextunload -b com.apple.driver.AppleUSBFTDI
```

(Si un missatge d'avís indica que el kext no es pot descarregar, reinicieu i torneu a provar l'ordre anterior.) Per recarregar:

```
sudo kextload -b com.apple.driver.AppleUSBFTDI
```

Les ordres kextunload i kextload es poden executar en qualsevol directori.

Bloc amb D2xxHelper (OS X 10.9 i posteriors)
-------------------------------------------

Nota: aquest és l'únic mètode no temporal que funciona en el **10.11 El Capitan**.

FTDI proporciona una extensió del nucli signada (D2xxHelper.kext) que no conté cap codi però actua per evitar que OS X coincideixi amb un xip FTDI (amb el proveïdor estàndard i els identificadors de producte) amb un controlador VCP, ja sigui d'Apple o de FTDI. Això deixa el dispositiu sense reclamar, i només disponible per als programes D2XX.  
1\. Desconnecta tots els dispositius FTDI.  
2\. Baixeu i executeu l'instal·lador D2xxHelper des de [https://www.ftdichip.com/Drivers/D2XX.htm](https://www.ftdichip.com/Drivers/D2XX.htm)  
3\. Reinicia.
  4\. Reconnecta els dispositius FTDI.