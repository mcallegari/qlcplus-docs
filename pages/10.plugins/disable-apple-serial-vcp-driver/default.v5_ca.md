---
title: 'Desactiva el Controlador Apple Serial VCP'
date: '08:06 22-08-2023'
---

Tenint en compte totes les qüestions que han plantejat els usuaris de QLC+ al voltant d'aquest tema, aquí hi ha un extracte de la nota d'aplicació oficial [FTDI Application Note 134](https://www.ftdichip.com/Support/Documents/AppNotes/AN_134_FTDI_Drivers_Installation_Guide_for_MAC_OSX.pdf)

## Desactivar el VCP proporcionat per Apple a OS X 10.9 i posteriors

Un controlador VCP per a la majoria de convertidors FTDI USB a sèrie es proporciona com a part del nucli a OS X 10.9 i posteriors. OS X carrega aquest controlador (AppleUSBFTDI.kext) quan es connecta un dispositiu amb els identificadors estàndard de proveïdor i producte FTDI. Per utilitzar el VCP propi de FTDI, o per utilitzar programes D2XX, cal desactivar, descarregar o bloquejar AppleUSBFTDI, tal com s'indica a continuació.

### Desactivar canviant el nom (només OS X 10.9 i 10.10)

Nota: aquest mètode funciona **només a 10.9 Mavericks i 10.10 Yosemite.**  
  
Inicieu una sessió de terminal (Go > Applications > Utilities > Terminal) i copieu/enganxeu el text següent a la línia d'ordres:

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.kext AppleUSBFTDI.disabled
sudo touch /System/Library/Extensions
```

després reinicieu.  
Per tornar a activar el VCP, canvieu el nom d'AppleUSBFTDI.disabled de nou a AppleUSBFTDI.kext

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.disabled AppleUSBFTDI.kext
sudo touch /System/Library/Extensions
```

després reinicieu.

### Descarregar temporalment (totes les versions d'OS X)

Nota: aquest mètode funciona en totes les versions d'OS X.  
  
És possible descarregar el VCP d'Apple per a la sessió actual, és a dir, fins al següent reinici:

```
sudo kextunload -b com.apple.driver.AppleUSBFTDI
```

(Si apareix un missatge d'avís que indica que el kext no es pot descarregar, reinicieu i torneu a provar l'ordre anterior.) Per tornar a carregar-lo:

```
sudo kextload -b com.apple.driver.AppleUSBFTDI
```

Les ordres kextunload i kextload es poden executar des de qualsevol directori.

### Bloquejar amb D2xxHelper (OS X 10.9 i posteriors)

Nota: aquest és l'únic mètode no temporal que funciona a **10.11 El Capitan**.  
  
FTDI proporciona una extensió del nucli signada (D2xxHelper.kext) que no conté cap codi, però evita que OS X faci coincidir un xip FTDI (amb els identificadors estàndard de proveïdor i producte) amb un controlador VCP, ja sigui d'Apple o de FTDI. Això deixa el dispositiu sense reclamar, i disponible només per a programes D2XX.  
1. Desconnecteu tots els dispositius FTDI.  
2. Baixeu i executeu l'instal·lador D2xxHelper des de [https://ftdichip.com/drivers/d2xx-drivers/](https://ftdichip.com/drivers/d2xx-drivers/).  
3. Reinicieu.  
4. Torneu a connectar els dispositius FTDI.
</content>
