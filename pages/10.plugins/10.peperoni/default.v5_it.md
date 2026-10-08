---
title: Peperoni
date: '05:19 22-08-2023'
---

Introduzione
--------------

Il plugin di output Peperoni supporta i dispositivi di output USB-DMX prodotti da [Peperoni Light](http://www.peperoni-light.de/products1.htm).

Requisiti
--------------

### Linux

Su tutte le distribuzioni Linux, dovete installare libusb. Se installate QLC+ con l'Ubuntu Software Center o un altro strumento di installazione automatica, questa libreria verrà installata automaticamente per voi.

### Mac OS X

Non è necessario nulla di speciale per Mac OS X. Tutti i componenti richiesti sono già inclusi nel pacchetto dell'applicazione Q Light Controller Plus poiché QLC+ utilizza l'interfaccia USB nativa di OS X.

### Windows

Dovete installare i [driver Windows Peperoni USBDMX](http://www.lighting-solutions.de/support/driver.html). Solitamente questi vengono forniti su un CD insieme al dispositivo Peperoni che avete acquistato.  
Se dopo aver installato il driver, QLC+ non rileva ancora il vostro dispositivo Peperoni, copiate il file usbdmx.dll che trovate all'interno del pacchetto ZIP del driver (cartella i386) nella cartella principale di QLC+.

* Decomprimete il pacchetto del driver in una cartella sul vostro disco fisso.
* Collegate il dispositivo peperoni a una porta USB.
* Se state usando una versione a 32 bit di Windows, indirizzate la procedura guidata "Trovato nuovo hardware" a cercare il driver sotto **windows/i386**.
* Se state usando una versione a 64 bit di Windows, indirizzate la procedura guidata "Trovato nuovo hardware" a cercare il driver sotto **windows/ia64** o **windows/amd64**.
