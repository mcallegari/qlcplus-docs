---
title: HID
date: '05:13 22-08-2023'
---

Einführung
------------

Das HID-Plugin unterstützt das [HID-System](https://de.wikipedia.org/wiki/Human_Interface_Device) unter Windows und Linux.
HID ist eine generische Methode zur Zuordnung von Eingabe-/Ausgabegeräten wie Joysticks, Touchpads, Tastaturen, Mäusen usw.
Das QLC+ HID-Plugin soll nur Joysticks und den FX5 USB DMX-Adapter unterstützen.

Anforderungen
------------

Für dieses Plugin sind keine besonderen Anforderungen erforderlich. Stellen Sie einfach sicher, dass Ihr Betriebssystem das Gerät, das Sie verwenden möchten, tatsächlich erkennt. Unter Linux benötigen Sie möglicherweise einige Kernelmodule (normalerweise von modernen Distributionen bereitgestellt) und unter Windows einen vom Gerätehersteller bereitgestellten Treiber.

Joysticks
---------

QLC+ versucht, die spezifischen Joystick-Funktionen, wie Achsen und Tasten, als einzelne Kanäle zu erkennen, die Ihren Widgets der virtuellen Konsole zugeordnet werden können.
Achsen und Tasten werden von QLC+ in sequentieller Reihenfolge zugeordnet. Wenn Ihr Joystick also beispielsweise 2 Achsen und 4 Tasten unterstützt, werden sie in den Eingabezuordnungsdialogen wie folgt angezeigt:

* Kanal 1: X-Achse
* Kanal 2: Y-Achse
* Kanal 3: Taste 1
* Kanal 4: Taste 2
* Kanal 5: Taste 3
* Kanal 6: Taste 4

Nodle USB-DMX-Schnittstelle
---------

Das Nodle USB DMX-Interface ist in zwei Versionen erhältlich: Für die selbstgebaute Kit-Version heißt es:
[Nodle U1](https://www.dmxcontrol-projects.org/de/projekte/nodle-u1-interface.html) und das vorgefertigte Modell heißt [Nodle R4S](https://www.dmxcontrol-projects.org/de/projekte/nodle-r4s-interface.html) (bereit zur Show).

Beide können wie gewohnt DMX-Daten ein- und ausgeben, aber auch DMX intern zusammenführen. Bei Aktivierung über die Konfiguration
Im Dialog führt das Gerät alle von QLC+ kommenden DMX-Daten (falls als Ausgabe ausgewählt) mit allen zusammen
DMX-Daten kommen vom Eingang des Geräts im HTP-Verfahren (Highest Takes Precedence).

Wenn festgelegt, bleibt der Fusionsmodus bestehen, auch wenn QLC+ geschlossen ist, solange das Gerät mit Strom versorgt wird.
Auf diese Weise ist das Gerät für eingehende DMX-Daten transparent und leitet diese einfach weiter.

Das Gerät puffert eingehende DMX-Daten. Wenn also die eingehende DMX-Verbindung unterbrochen wird, erfolgt die letzte
Der DMX-Frame wird wiederholt, bis weitere DMX-Daten eintreffen oder das Gerät zurückgesetzt wird.

Weitere Informationen oder Fehlerbehebung finden Sie im Produkthandbuch.

FX5 USB DMX
-----------

Obwohl nicht mehr verfügbar. Der FX5 USB-DMX-Adapter wird weiterhin sowohl für die Ausgabe als auch für die Eingabe unterstützt
DMX-Daten. Es bietet die gleichen Funktionen wie das Nodle USB DMX. Überprüfen Sie das Produkthandbuch auf den Anschluss und besondere Probleme.