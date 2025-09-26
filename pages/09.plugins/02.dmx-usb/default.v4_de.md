---
title: 'DMX USB'
date: '05:08 22-08-2023'
---

Einführung
------------

Das DMX USB-Plugin unterstützt eine Vielzahl von FTDI-basierten USB-zu-DMX-Geräten.

Unterstützte USB-DMX-Geräte finden Sie auf unserer Seite [Kompatibilität](https://www.qlcplus.org/discover/compatibility).

Konfiguration
-------------

DMX-USB-Geräte sollten automatisch von QLC+ erkannt und in der Liste der Eingabe-/Ausgabefelder angezeigt werden.
Sollte die automatische Erkennung aus irgendeinem Grund fehlschlagen, können Sie den Typ Ihres DMX-USB-Adapters manuell „erzwingen“.
Klicken Sie auf den Namen Ihres Geräts und öffnen Sie den Konfigurationsdialog, indem Sie unten rechts im Bedienfeld auf das Symbol ![](/basics/configure.png) klicken.
Sie sehen eine Liste der derzeit an Ihren Computer angeschlossenen DMX-USB-Geräte. Jedes verfügt über ein Dropdown-Menü, in dem Sie den Gerätetyp erzwingen können.
Hier ist die Bedeutung jedes einzelnen:

* **Open TX**: Enttec USB DMX Open (und Klone) im Ausgabemodus
* **Open RX**: Empfangsmodus für generische FTDI-Geräte
* **Pro RX/TX**: Enttec USB DMX Pro oder die meisten DMXKing-Geräte
* **Pro Mk2**: Enttec USB DMX Pro Mk2 – 2 DMX-Ausgänge, 1 DMX-Eingang, 1 MIDI IN und 1 MIDI OUT-Ports sind verfügbar
* **Ultra Pro**: DMXKing ultraDMX Pro mit 2 Ausgängen und 1 Eingang
* **DMX4ALL**: DMX4ALL USB-DMX STAGE-PROFI MK2
* **Vince Tx**: Vince DMX512 USB im Ausgabemodus

**Hinweis für OSX-Benutzer:** Wenn Ihr Adapter erkannt wird, aber keine Ausgabe erzeugt, finden Sie die Lösung höchstwahrscheinlich auf der Seite [Fragen und Antworten](/basics/questions-and-answers) (Frage #3).
**Hinweis 1**: Eurolite USB-DMX512 Pro-Geräte müssen in den „Pro RX/TX“-Modus versetzt werden, um ordnungsgemäß zu funktionieren.
**Hinweis 2**: Unter Windows flackern offene DMX-Klone von Enttec möglicherweise mit 44 Hz. Sie können versuchen, die Ausgangsfrequenz zu verringern, bis das Problem behoben ist.

Anforderungen
------------

### Linux

Auf allen Linux-Distributionen müssen Sie libftdi installieren. Wenn Sie QLC+ mit dem Ubuntu Software Center oder einem anderen automatischen Installationstool installieren, wird diese Bibliothek automatisch für Sie installiert.
In manchen Fällen, wenn das Gerät nichts ausgibt, kann es sinnvoll sein, Ihren Benutzer mit dem folgenden Befehl zur Gruppe „dialout“ hinzuzufügen:
```
sudo adduser your\_user\_name dialout
```

### macOS

Unter Apple macOS benötigen Sie überhaupt keine Treiber, da QLC+ die native USB-Schnittstelle von macOS verwendet. Die Installation der D2XX-Treiber sollte keinen Schaden anrichten, aber **INSTALLIEREN SIE KEINE VCP-Treiber (Virtual COM Port)**, da diese definitiv QLC+ beeinträchtigen. Wenn Sie die VCP-Treiber zuvor installiert haben, lesen Sie in den [FTDI-Installationshandbüchern](https://ftdichip.com/document/installation-guides/) nach, wie Sie sie deinstallieren.  

**Probleme mit OSX Mavericks (oder höher)**: Bitte überprüfen Sie [Fragen und Antworten Nr. 3](/basics/questions-and-answers)

### Windows

Unter Microsoft Windows benötigt das Plugin die [neuesten D2XX-Treiber von FTDI](https://ftdichip.com/drivers/d2xx-drivers/). Wenn ein FTDI-Gerät zum ersten Mal angeschlossen wird, lädt Windows normalerweise automatisch die D2XX-Treiber herunter, sodass überhaupt keine Aktion erforderlich ist.  
Sollte dies nicht der Fall sein, konsultieren Sie bitte die [FTDI-Installationshandbücher](https://ftdichip.com/document/installation-guides/), um zu erfahren, wie Sie die Treiber installieren.  
**INSTALLIEREN SIE KEINE VCP-Treiber (Virtual COM Port)**, da diese wahrscheinlich die D2XX-Schnittstelle beeinträchtigen.

Von ENTTEC DMX USB Pro unterstützte Modi
----------------------------------

Es folgt ein Raster, das die von QLC+ unterstützten E/A-Modi für Geräte wie DMX USB Pro und Pro Mk2 zeigt.
Wenn ein Modus hier nicht aufgeführt ist, bedeutet dies, dass er aufgrund von Hardwareeinschränkungen nicht von QLC+ oder dem Gerät selbst unterstützt wird. Melden Sie diese daher bitte nicht als Probleme im QLC+-Forum.


|               |     |     |     |     |     |     |     |     |     |     |     |     |     |     |
| ---           | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
|               | 1   | 2   | 3   | 4   | 5   | 6   | 7   | 8   | 9   | 10  | 11  | 12  | 13  | 14  |
| DMX1 IN       | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |     |
| DMX1 OUT      |     | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |
| DMX2 OUT (1)  |     |     | o   | o   | o   |     |     |     |     |     |     |     |     |     |
| MIDI IN (2)   |     |     |     |     |     | o   | o   | o   |     |     |     | o   | o   | o   |
| MIDI OUT (2)  |     |     |     |     |     |     |     |     | o   | o   | o   | o   | o   | o   |


(1) DMX2 OUT ist nur auf DMX USB Mk2 Pro verfügbar
(2) MIDI IN und MIDI OUT sind nur beim DMX USB Mk2 Pro mit einem 5-Wege-Breakout-Kabel verfügbar. MIDI OUT-Signale werden von 1 bis 512 gesendet, wie in der [MIDI-Plugin-Kanalzuordnung](../midi#kanalzuordnung) beschrieben.

Abstimmung
------

**Hinweis: Eine manuelle Abstimmung sollte niemals durchgeführt werden, außer in einigen ganz besonderen Fällen. Die Nutzung erfolgt auf eigene Gefahr!**
Es ist möglich, die DMX-Framegröße für Enttec Open (und ähnliche) Geräte mit einer versteckten Einstellungstaste auf jeder Plattform zu ändern. Der Schlüssel teilt QLC+ mit, wie viele Kanäle in jedem DMX-Frame übertragen werden sollen, also für ein DMX-Universum (standardmäßig 512).
Bitte beachten Sie den Abschnitt [Manuelle Parametereinstellung](/advanced/parameters-tuning#2-dmx-usb-enttec-open-kanalanzahl) DMX USB Enttec Open.