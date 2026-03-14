---
title: Installation
taxonomy:
    category:
        - docs
---

Die Installation von QLC+ ist sehr einfach.
Gehen Sie einfach zur [Download-Seite](https://www.qlcplus.org/download) und laden Sie sich die Version, die kompatibel mit Ihrem System ist.

## Windows

QLC+ wird in Windows als selbstinstallierendes .exe-Paket heruntergeladen. Klicken sie doppelt auf die Datei und führen Sie den Installationsprozess durch.

Wählen Sie aus, ob QLC+ am Standardspeicherort (C:\QLC+) oder in einem anderen Ordner wie C:\Programme installiert werden soll.

Für die Installation von QLC+ sind keine Administratorrechte erforderlich, es sei denn, Sie möchten .qxw (Projektdateien) und .qxf (Gerätedefinitionsdateien) mit der entsprechenden Anwendung verknüpfen.
Klicken Sie in diesem Fall mit der rechten Maustaste auf die Installationsdatei und führen Sie sie als Administrator aus.

## macOS

QLC+ für macOS wird als DMG-Datei zur Verfügung gestellt.

Machen Sie einen Doppelklick und starten Sie QLC+ direkt. Andernfalls können Sie es per Drag & Drop in den Anwendungsordner ziehen.

## Linux

Das offizielle QLC+-Paket für Linux wird als Debian-Paket (.deb) zur Verfügung gestellt.

Um es zu installieren, führen Sie bitte folgenden Befehl im Terminal und dem Ordner aus, in dem Sie das Paket heruntergeladen haben:
```
sudo apt install ./qlcplus_x.y.z.deb
```
Fortgeschrittene Benutzer, die sich mit Paket-Abhängigkeiten auskennen, können auch den Befehl `sudo dpkg -i qlcplus_x.y.z.deb` verwenden.
