---
title: Peperoni
date: '05:19 22-08-2023'
media_order: zadig-peperoni-usb.png
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

QLC+ kommuniziert mit Peperoni-Geräten über libusb, das im QLC+-Installationsprogramm enthalten ist, daher wird keine zusätzliche DLL benötigt. Das Gerät muss den **WinUSB**-Treiber verwenden:

* Geräte mit Firmware 0x1000 oder neuer installieren den WinUSB-Treiber automatisch beim Anschließen.
* Bei Geräten mit älterer Firmware muss der WinUSB-Treiber manuell mit [Zadig](https://zadig.akeo.ie) installiert werden: Öffnen Sie Zadig, wählen Sie **Options > List All Devices**, wählen Sie das Peperoni-Gerät aus, wählen Sie **WinUSB** und klicken Sie auf **Install Driver**. Alternativ können Sie die Firmware des Geräts aktualisieren.
* Wählen Sie für den X-Switch in Zadig **libusbK** statt WinUSB, da WinUSB die USB-Konfiguration des Geräts nicht ändern kann.

![](zadig-peperoni-usb.png)
