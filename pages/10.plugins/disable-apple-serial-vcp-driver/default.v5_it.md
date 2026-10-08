---
title: 'Disabilitare il driver Apple Serial VCP'
date: '08:06 22-08-2023'
---

Considerati tutti i problemi sollevati dagli utenti di QLC+ riguardo a questo argomento, ecco un estratto della [FTDI Application Note 134](https://www.ftdichip.com/Support/Documents/AppNotes/AN_134_FTDI_Drivers_Installation_Guide_for_MAC_OSX.pdf) ufficiale

## Disabilitare il VCP fornito da Apple su OS X 10.9 e versioni successive

Un driver VCP per la maggior parte dei convertitori FTDI USB-seriale è fornito come parte del kernel in OS X 10.9 e versioni successive. OS X carica questo driver (AppleUSBFTDI.kext) quando viene collegato un dispositivo con identificatori standard di vendor e prodotto FTDI. Per usare il VCP proprio di FTDI, oppure per usare programmi D2XX, AppleUSBFTDI deve essere disabilitato, scaricato (unloaded) o bloccato, come segue.

### Disabilitare rinominando (solo OS X 10.9 e 10.10)

Nota: questo metodo funziona **solo su 10.9 Mavericks e 10.10 Yosemite.**  
  
Avviate una sessione terminale (Vai > Applicazioni > Utility > Terminale) e copiate/incollate il seguente testo nel prompt dei comandi:

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.kext AppleUSBFTDI.disabled
sudo touch /System/Library/Extensions
```

poi riavviate.  
Per riabilitare il VCP, rinominate AppleUSBFTDI.disabled di nuovo in AppleUSBFTDI.kext

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.disabled AppleUSBFTDI.kext
sudo touch /System/Library/Extensions
```

poi riavviate.

### Scaricare temporaneamente (tutte le versioni di OS X)

Nota: questo metodo funziona su tutte le versioni di OS X.  
  
È possibile scaricare il VCP di Apple per la sessione corrente, cioè fino al prossimo riavvio:

```
sudo kextunload -b com.apple.driver.AppleUSBFTDI
```

(Se un messaggio di avviso indica che il kext non può essere scaricato, riavviate e riprovate il comando sopra.) Per ricaricarlo:

```
sudo kextload -b com.apple.driver.AppleUSBFTDI
```

I comandi kextunload e kextload possono essere eseguiti in qualsiasi directory.

### Bloccare con D2xxHelper (OS X 10.9 e versioni successive)

Nota: questo è l'unico metodo non temporaneo che funziona su **10.11 El Capitan**.  
  
FTDI fornisce un'estensione del kernel firmata (D2xxHelper.kext) che non contiene alcun codice ma agisce per impedire a OS X di associare un chip FTDI (con identificatori standard di vendor e prodotto) a un driver VCP, sia esso di Apple o di FTDI. Questo lascia il dispositivo non rivendicato, e disponibile solo per programmi D2XX.  
1. Scollegate tutti i dispositivi FTDI.  
2. Scaricate ed eseguite il programma di installazione D2xxHelper da [https://ftdichip.com/drivers/d2xx-drivers/](https://ftdichip.com/drivers/d2xx-drivers/).  
3. Riavviate.  
4. Ricollegate i dispositivi FTDI.
