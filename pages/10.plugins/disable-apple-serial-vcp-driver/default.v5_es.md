---
title: 'Desactivar el driver Apple Serial VCP'
date: '08:06 22-08-2023'
---

Considerando todos los problemas planteados por los usuarios de QLC+ en torno a este tema, aquí tiene un extracto de la [FTDI Application Note 134](https://www.ftdichip.com/Support/Documents/AppNotes/AN_134_FTDI_Drivers_Installation_Guide_for_MAC_OSX.pdf) oficial

## Desactivar el VCP proporcionado por Apple en OS X 10.9 y posteriores

Un driver VCP para la mayoría de los conversores FTDI USB a serie se proporciona como parte del kernel en OS X 10.9 y posteriores. OS X carga este driver (AppleUSBFTDI.kext) cuando se conecta un dispositivo con identificadores de fabricante y producto FTDI estándar. Para usar el propio VCP de FTDI en su lugar, o para usar programas D2XX, se debe desactivar, descargar o bloquear AppleUSBFTDI, de la siguiente manera.

### Desactivar renombrando (solo OS X 10.9 y 10.10)

Nota: este método funciona **solo en 10.9 Mavericks y 10.10 Yosemite.**  
  
Inicie una sesión de terminal (Go > Applications > Utilities > Terminal) y copie/pegue el siguiente texto en el prompt de comandos:

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.kext AppleUSBFTDI.disabled
sudo touch /System/Library/Extensions
```

luego reinicie.  
Para volver a activar el VCP, renombre AppleUSBFTDI.disabled de nuevo a AppleUSBFTDI.kext

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.disabled AppleUSBFTDI.kext
sudo touch /System/Library/Extensions
```

luego reinicie.

### Descargar temporalmente (todas las versiones de OS X)

Nota: este método funciona en todas las versiones de OS X.  
  
Es posible descargar el VCP de Apple para la sesión actual, es decir, hasta el próximo reinicio:

```
sudo kextunload -b com.apple.driver.AppleUSBFTDI
```

(Si un mensaje de advertencia indica que el kext no se puede descargar, reinicie y vuelva a intentar el comando anterior). Para recargarlo:

```
sudo kextload -b com.apple.driver.AppleUSBFTDI
```

Los comandos kextunload y kextload se pueden ejecutar en cualquier directorio.

### Bloquear con D2xxHelper (OS X 10.9 y posteriores)

Nota: este es el único método no temporal que funciona en **10.11 El Capitan**.  
  
FTDI proporciona una extensión de kernel firmada (D2xxHelper.kext) que no contiene código, pero actúa para evitar que OS X asocie un chip FTDI (con identificadores de fabricante y producto estándar) con un driver VCP, ya sea de Apple o de FTDI. Esto deja el dispositivo sin reclamar, y disponible solo para programas D2XX.  
1. Desconecte todos los dispositivos FTDI.  
2. Descargue y ejecute el instalador de D2xxHelper desde [https://ftdichip.com/drivers/d2xx-drivers/](https://ftdichip.com/drivers/d2xx-drivers/).  
3. Reinicie.  
4. Vuelva a conectar los dispositivos FTDI.
