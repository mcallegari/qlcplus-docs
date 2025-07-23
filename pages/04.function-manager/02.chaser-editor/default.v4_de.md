---
title: 'Chaser-Editor'
date: '12:08 21-08-2023'
---

Der Chaser-Editor wird, wie der Name schon sagt, zum Bearbeiten von ![](/basics/chaser.png) [Chaser](/basics/glossary-and-concepts#chaser)-Funktionen verwendet.
Ein Chaser besteht aus Schritten und jeder Schritt wird durch dargestellt

* Eine progressive Zahl
* Der zugehörige Funktionsname
* Mit der Zeit einblenden
* Haltezeit
* Ausblendzeit
* Gesamtdauer des Schritts
* Ein Notizfeld für den Fall, dass Sie etwas schreiben müssen, um sich daran zu erinnern, was der Schritt bewirkt

Die Timing-Schritte und das Notizfeld können durch Doppelklicken geändert werden. Standardmäßig werden die Zeiten in Sekunden angegeben (z. B. 135 bedeutet 2 Min. 15 Sek.), es sei denn, Sie verwenden dieselbe Syntax, die QLC+ verwendet (z. B. 1 Min. 12 Sek. 80).

### Steuerelemente

|     |     |
| --- | --- |
| **Name des Verfolgers** | Ändern Sie den Namen des Chasers. |
| ![](/basics/speed.png) | Ein-/Ausblenden des Kurzwahl-Widgets, das zur einfacheren Abstimmung der Chaser-Parameter wie Einblenden, Ausblenden und Halten verwendet wird |
| ![](/basics/player_play.png) | Starten Sie den Chaser, um die Wiedergabe ab dem ausgewählten Schritt zu testen |
| ![](/basics/player_stop.png) | Stoppen Sie eine zuvor gestartete Wiedergabe |
| ![](/basics/back.png) | Wenn die Wiedergabe aktiv ist, gehen Sie im Chaser zum vorherigen Schritt |
| ![](/basics/forward.png) | Wenn die Wiedergabe aktiv ist, fahren Sie mit dem nächsten Schritt im Chaser fort |
| ![](/basics/editcopy.png) | Kopieren Sie die ausgewählten Schritte in die Zwischenablage. |
| ![](/basics/editpaste.png) | Fügen Sie die zuvor aus der Zwischenablage kopierten Schritte an der aktuell ausgewählten Position ein. Wenn keine vorhanden sind, werden die Schritte am Ende der Liste angehängt |
| ![](/basics/editcut.png) | Entfernen Sie die ausgewählten Schritte aus der Liste und kopieren Sie sie in die Zwischenablage. |
| ![](/basics/edit_add.png) | Fügen Sie dem Chaser eine vorhandene [Funktion](/basics/glossary-and-concepts#funktionen) hinzu, indem Sie das Dialogfeld [Funktion auswählen](../function-selection) verwenden. Die Funktion wird nach dem aktuell ausgewählten Schritt eingefügt. |
| ![](/basics/edit_remove.png) | Entfernen Sie den ausgewählten Schritt aus dem Chaser. |
| ![](/basics/up.png) | Verschiebt den ausgewählten Schritt über/vor den vorherigen Schritt. |
| ![](/basics/down.png) | Verschieben Sie den ausgewählten Schritt unter/hinter den nächsten Schritt. |
| ![](/basics/random.png) | Ordnen Sie die ausgewählten Szenen zufällig neu an (mischen Sie sie). Die Hauptunterschiede zu „Run Order: Random“ bestehen darin, dass die Reihenfolge der gemischten Szenen statisch und vorhersehbar ist, manuell geändert werden kann und sich nicht unbedingt auf alle Szenen auswirkt. |
| **Reihenfolge ausführen** | * Loop: Immer wieder durch die Stufen laufen.<br>* Single Shot: Einmal durch die Stufen laufen und dann anhalten.<br>* Ping Pong: Immer wieder durch die Stufen laufen, dabei die Richtung an beiden Enden umkehren. <br>* Zufällig: Führen Sie die Schritte in zufälliger Reihenfolge immer wieder durch. |
| **Richtung** | * Vorwärts: Führen Sie die Schritte von Anfang bis Ende durch. 1, 2, 3...<br>* Rückwärts: Führen Sie die Schritte vom Ende bis zum Anfang durch. ...3, 2, 1 |
| **Einblendgeschwindigkeit** | * Gemeinsam: Wenden Sie die gleiche Geschwindigkeit für alle Schritte in diesem Chaser an<br>* Pro Schritt: Wenden Sie eine benutzerdefinierte Geschwindigkeit für jeden Schritt in diesem Chaser an<br>* Standard: Wenden Sie die Standardgeschwindigkeit für jeden Schritt an (0 Sekunden). |
| **Ausblendgeschwindigkeit** | * Gemeinsam: Wenden Sie die gleiche Geschwindigkeit für alle Schritte in diesem Chaser an<br>* Pro Schritt: Wenden Sie eine benutzerdefinierte Geschwindigkeit für jeden Schritt in diesem Chaser an<br>* Standard: Wenden Sie die Standardgeschwindigkeit für jeden Schritt an (0 Sekunden). |
| **Schrittdauer** | * Gemeinsam: Wenden Sie für alle Schritte in diesem Chaser die gleiche Dauer an<br>* Pro Schritt: Wenden Sie für jeden Schritt in diesem Chaser eine benutzerdefinierte Dauer an |