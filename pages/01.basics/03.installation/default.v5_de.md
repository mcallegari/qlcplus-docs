---
title: Installation
taxonomy:
    category:
        - docs
---

QLC+ zu installieren ist unkompliziert.
Die Version für ihr Betriebssystem kann einfach von der [Downloadseite](https://www.qlcplus.org/download) herruntergeladen und installiert werden.

## Windows

QLC+ für Windows ist als selbstinstallierendes .exe-Datei verfügbar. Doppelklicke auf die Datei und folge den angezeigten Anweisungen.

Wähle, ob QLC+ am Standardspeicherort (C:\QLC+) oder in einem anderen Ordner wie zum Beispiel C:\Programme installiert werden soll.

Für die Installation sind keine Administratorrechte erforderlich, es sei denn, du möchtest .qxw-Dateien (Projektdateien) und .qxf-Dateien (Fixture-Definitionsdateien) mit der jeweiligen Anwendung verknüpfen. In diesem Fall klicke mit der rechten Maustaste auf die Installationsdatei und führe sie als Administrator aus.

**Note** Version 4.x.x und Version 5.x.x können nicht im selben Ordner arbeiten. Wenn du beide installieren willst, installiere sie bitte in getrennten Ordnern.

## macOS

QLC+ für macOS ist als DMG-Datei verfügbar.

Doppelklicke darauf und starte QLC+ direkt. Alternativ kannst du es per Drag-and-Drop in den Anwendungsordner ziehen.

## Linux

Das offizielle QLC+-Paket für Linux wird als Debian-Paket (.deb) bereitgestellt.

Zur Installation führe folgenden Befehl im Terminal aus dem Ordner aus, in den du das Paket heruntergeladen hast:
```
sudo apt install ./qlcplus_x.y.z.deb
```
Fortgeschrittene Benutzer können alternativ `sudo dpkg -i qlcplus_x.y.z.deb` benutzen.