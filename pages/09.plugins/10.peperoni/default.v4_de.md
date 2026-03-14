---
title: Peperoni
date: '05:19 22-08-2023'
---

Einführung
--------------

Das Peperoni Output-Plugin unterstützt USB-DMX-Ausgabegeräte von [Peperoni Light](http://www.peperoni-light.de/products1.htm).

Anforderungen
--------------

### Linux

Auf allen Linux-Distributionen müssen Sie libusb installieren. Wenn Sie QLC+ mit dem Ubuntu Software Center oder einem anderen automatischen Installationstool installieren, wird diese Bibliothek automatisch für Sie installiert.

### Mac OS X

Für Mac OS X ist nichts Besonderes erforderlich. Alle erforderlichen Komponenten sind bereits im Q Light Controller Plus-Anwendungspaket enthalten, da QLC+ die native USB-Schnittstelle von OS X verwendet.

### Windows

Sie müssen die [Peperoni USBDMX Windows-Treiber](http://www.lighting-solutions.de/support/driver.html) installieren. Normalerweise liegen diese zusammen mit dem Peperoni-Gerät, das Sie gekauft haben, auf einer CD bei.  
Wenn QLC+ Ihr Peperoni-Gerät nach der Installation des Treibers immer noch nicht erkennt, kopieren Sie die Datei usbdmx.dll, die Sie im Treiber-ZIP-Paket (Ordner i386) finden, in den Hauptordner von QLC+.

* Entpacken Sie das Treiberpaket in einen Ordner auf Ihrer Festplatte.
* Schließen Sie das Peperoni-Gerät an einen USB-Anschluss an.
* Wenn Sie eine 32-Bit-Version von Windows verwenden, rufen Sie den Assistenten „Neue Hardware gefunden“ auf, um unter **windows/i386** nach dem Treiber zu suchen.
* Wenn Sie eine 64-Bit-Version von Windows verwenden, rufen Sie den Assistenten „Neue Hardware gefunden“ auf, um unter **windows/ia64** oder **windows/amd64** nach dem Treiber zu suchen.