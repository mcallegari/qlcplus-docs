---
title: uDMX
date: '05:20 22-08-2023'
media_order: zadig_udmx_windows.png
---

Einführung
------------

Das uDMX-Ausgabe-Plugin unterstützt die USB-DMX-Schnittstelle [Anyma uDMX](https://www.anyma.ch/research/udmx/) unter Linux, macOS und Windows.

Anforderungen
------------

### Linux

Auf allen Linux-Distributionen müssen Sie libusb installieren. Wenn Sie QLC+ mit dem Ubuntu Software Center oder einem anderen automatischen Installationstool installieren, wird diese Bibliothek automatisch für Sie installiert.

### macOS

Unter Apple macOS benötigen Sie überhaupt keine Treiber, da QLC+ die native USB-Schnittstelle von macOS verwendet.

### Windows

QLC+ kommuniziert mit uDMX-Geräten über libusb, das im QLC+-Installationsprogramm enthalten ist, daher wird keine zusätzliche DLL benötigt. Das Gerät muss den **WinUSB**-Treiber verwenden, der mit [Zadig](https://zadig.akeo.ie) installiert werden kann: Öffnen Sie Zadig, wählen Sie **Options > List All Devices**, wählen Sie das uDMX-Gerät aus, wählen Sie **WinUSB** und klicken Sie auf **Install Driver**.

![](zadig_udmx_windows.png)

Abstimmung
------

Es ist möglich, die DMX-Frame-Frequenz für alle uDMX-Geräte mit einer versteckten Einstellungstaste auf jeder Plattform zu ändern. Der Schlüssel teilt QLC+ mit, wie oft jeder DMX-Frame (512 Kanäle) pro Sekunde an das Universum gesendet werden soll. Ein Wert von „30“ bedeutet 30 Mal pro Sekunde (30 Hz). Weitere Informationen finden Sie im uDMX-Abschnitt [Manuelle Parameteroptimierung](/advanced/parameters-tuning#3-udmx-frequenz).
