---
title: 'Deaktivieren Sie den seriellen VCP-Treiber von Apple'
date: '08:06 22-08-2023'
---

Unter Berücksichtigung aller von QLC+-Benutzern zu diesem Thema angesprochenen Probleme finden Sie hier einen Auszug aus der offiziellen [FTDI Application Note 134](https://www.ftdichip.com/Support/Documents/AppNotes/AN_134_FTDI_Drivers_Installation_Guide_for_MAC_OSX.pdf).

## Deaktivieren des von Apple bereitgestellten VCP unter OS X 10.9 und höher

Ein VCP-Treiber für die meisten FTDI-USB-zu-Seriell-Konverter wird als Teil des Kernels in OS X 10.9 und höher bereitgestellt. OS Um stattdessen FTDIs eigenes VCP zu verwenden oder D2XX-Programme zu verwenden, muss AppleUSBFTDI wie folgt deaktiviert, entladen oder blockiert werden.

### Deaktivieren durch Umbenennen (nur OS X 10.9 und 10.10)

Hinweis: Diese Methode funktioniert **nur auf 10.9 Mavericks und 10.10 Yosemite.**  
  
Starten Sie eine Terminalsitzung (Gehe zu > Anwendungen > Dienstprogramme > Terminal) und kopieren Sie den folgenden Text und fügen Sie ihn in die Eingabeaufforderung ein:

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.kext AppleUSBFTDI.disabled
sudo touch /System/Library/Extensions
```

dann neu starten.  
Um VCP wieder zu aktivieren, benennen Sie AppleUSBFTDI.disabled wieder in AppleUSBFTDI.kext um

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.disabled AppleUSBFTDI.kext
sudo touch /System/Library/Extensions
```

dann neu starten.

### Vorübergehend entladen (alle Versionen von OS X)

Hinweis: Diese Methode funktioniert auf allen Versionen von OS X.  
  
Es ist möglich, Apples VCP für die aktuelle Sitzung, also bis zum nächsten Neustart, zu entladen:

```
sudo kextunload -b com.apple.driver.AppleUSBFTDI
```

(Wenn eine Warnmeldung darauf hinweist, dass der Text nicht entladen werden kann, starten Sie ihn neu und wiederholen Sie den obigen Befehl.) So laden Sie ihn neu:

```
sudo kextload -b com.apple.driver.AppleUSBFTDI
```

Die Befehle kextunload und kextload können in jedem Verzeichnis ausgeführt werden.

### Blockieren mit D2xxHelper (OS X 10.9 und höher)

Hinweis: Dies ist die einzige nicht temporäre Methode, die unter **10.11 El Capitan** funktioniert.  
  
FTDI stellt eine signierte Kernel-Erweiterung (D2xxHelper.kext) bereit, die keinen Code enthält, aber verhindert, dass OS Dadurch bleibt das Gerät unbeansprucht und steht nur für D2XX-Programme zur Verfügung.  
1\. Trennen Sie alle FTDI-Geräte.  
2\. Laden Sie das D2xxHelper-Installationsprogramm von [https://www.ftdichip.com/Drivers/D2XX.htm](https://www.ftdichip.com/Drivers/D2XX.htm) herunter und führen Sie es aus.  
3\. Neustart.  
4\. Schließen Sie die FTDI-Geräte erneut an.