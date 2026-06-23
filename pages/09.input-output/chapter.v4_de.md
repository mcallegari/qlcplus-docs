---
title: 'Eingang und Ausgang'
date: '04:54 22-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Kapitel 8

# Eingabe/Ausgabe

Standardmäßig bietet QLC+ 4 Universen, Sie können diese jedoch nach Bedarf hinzufügen/entfernen.  
Die Eingabe-/Ausgabezuordnung wird im aktuell geladenen Projekt gespeichert. Dadurch können Sie Ihr Projekt auf einen anderen Computer/Betriebssystem portieren, ohne es jedes Mal neu konfigurieren zu müssen.  
Wenn kein Projekt geladen ist, behält QLC+ die I/O-Zuordnung als „Fallback“-Konfiguration bei.

Eingabe-/Ausgabemanager
--------------------

Um auf den Eingabe-/Ausgabe-Manager zuzugreifen, klicken Sie einfach auf die Registerkarte mit dem Symbol ![](/basics/input_output.png) am unteren Rand des QLC+-Hauptbildschirms.  
Der Bildschirm ist folgendermaßen aufgebaut:  

* Auf der linken Seite befindet sich die Liste der internen Universen, die QLC+ verwalten kann
* Auf der rechten Seite befindet sich die Liste der Geräte und ihrer zugeordneten Eingänge, Ausgänge und Rückkopplungsleitungen, die QLC+ erkannt hat
* Unten rechts befindet sich ein Bereich mit kurzen Informationen zum aktuell ausgewählten Gerät

Jedes Gerät verfügt über ein Kontrollkästchen, wenn eine Eingangs-, Ausgangs- oder Rückmeldeleitung verfügbar ist.  
Jedes QLC+-Universum kann einen einzelnen Eingang, einen einzelnen Ausgang und eine einzelne Feedback-Leitung abbilden.  

Einige Plugins müssen möglicherweise konfiguriert werden, bevor sie verwendet werden können, sodass Sie zunächst möglicherweise nicht alle Ein-/Ausgaben sehen können. Die Konfigurationsschaltfläche befindet sich neben dem Informationsfeld und ist aktiviert, wenn das Plugin manuelle Einstellungen zulässt.  
Das Schaltflächensymbol ist: ![](/basics/configure.png)

Universen hinzufügen/entfernen
-------------------------

QLC+ unterstützt eine beliebige Anzahl von Universen, abhängig vom CPU-Limit des Geräts, das sie steuert.  
Auf der linken Seite des Input/Output Managers befindet sich eine Symbolleiste, in der Sie Universen hinzufügen/entfernen, benennen und konfigurieren können.

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Fügen Sie ein neues Universum hinzu. Das Universum wird einen Namen wie „Universum X“ haben, wobei X eine von QLC+ zugewiesene fortlaufende Nummer (und auch die Universums-ID) ist. |
| ![](/basics/edit_remove.png) | Entfernen Sie das aktuell ausgewählte Universum.  <br>**Bitte seien Sie bei diesem Vorgang vorsichtig, da er Ihr Projekt gefährden kann und nicht rückgängig gemacht werden kann.** <br>Wenn Sie ein Universum löschen, wenn es derzeit gepatcht ist oder einige Geräte darauf zugeordnet sind, wird eine Popup-Meldung angezeigt Bitte um Bestätigung, ob der Vorgang abgeschlossen oder abgebrochen werden soll. |
| **Universumsname** | Eine beliebige Zeichenfolge, die Sie festlegen können, um die Bedeutung eines Universums schnell zu identifizieren |
| **Passthrough** | Siehe [unten](#universum-passthrough) |

Patchen
--------

Um die Eingabe-/Ausgabezeile eines Plugins auf das ausgewählte Universum zu patchen, müssen Sie ein Häkchen in der Eingabe-/Ausgabezeile dieses bestimmten Plugins setzen. Sie können einem Universum jeweils nur eine Zeile zuweisen. Wenn Sie also eine andere Zeile markieren, verschiebt sich das Häkchen von seiner vorherigen Position zu der gerade markierten Position.  
Wenn Sie bei einem Plugin keine Zeile sehen, bedeutet das, dass Sie kein Gerät haben, das QLC+ versteht, und Ihnen die einzige (nicht auswählbare) Wahl bleibt: Keine.

Wenn eine Eingabe-/Ausgabezeile aktiviert wird, ändern sich die entsprechenden Universumsinformationen auf der linken Seite des Bildschirms und der neue Konfigurationssatz wird angezeigt.  
Die Plugin-Informationen unten rechts auf dem Bildschirm ändern sich ebenfalls und geben Ihnen den neuen Status der Plugin-Zeile an.

Universum-Passthrough
--------------------

Wenn Passthrough aktiviert ist, leitet das Universum einfach das, was es in seiner Eingabezeile empfängt, an seine Ausgabezeile weiter. Dies ist aus mehreren Gründen nützlich:

* **Protokollkonverter**: wenn Sie QLC+ als „Protokoll“-Konverter verwenden möchten. Mit dieser Funktion können Sie beispielsweise ein ArtNet-Netzwerk transparent einem DMX-USB-Adapter oder sogar MIDI zuordnen.
* **Externe Daten überwachen**: Patchen Sie Geräte und beobachten Sie die Daten im DMX-Monitor
* **Daten von externem Controller zusammenführen**: Lassen Sie das externe Lichtpult einige der Kanäle unabhängig steuern und QLC+ intelligente Lichter im selben Universum steuern.
* **Raspberry Pi**: Leiten Sie Daten von QLC+ auf den PC weiter, während Sie Szenen programmieren; wenn der Arbeitsbereich übertragen wird, wird Raspberry zum Hauptcontroller; Die Geräte sind immer mit dem Raspberry Pi verbunden

Passthrough-Daten werden von QLC+-Grandmaster- oder Kanalmodifikatoren nicht beeinflusst. Es wird im HTP-Stil mit der QLC+-Ausgabe zusammengeführt, wenn auf diesem Kanal Geräte gepatcht sind (Hinweis: Es werden keine LTP/HTP-Kanaleinstellungen verwendet). Blackout wirkt sich auf Passthrough-Daten aus.

Input und Feedback
-------------------

Wenn eine Plugin-Eingangszeile überprüft wird, wird sie sofort aktiviert, sodass Sie einen einfachen Test durchführen können, um noch einmal zu überprüfen, ob Ihre Hardware ordnungsgemäß mit QLC+ funktioniert.  
Bewegen Sie einfach einen Fader/Regler an Ihrem externen Gerät, und wenn alles gut funktioniert, wird auf der linken Seite des Bildschirms neben dem entsprechenden Universum ein ![](/basics/input.png)-Symbol angezeigt.

Wenn Ihr Eingabegerät einen Rückkanal unterstützt, kann QLC+ eine visuelle/mechanische Rückmeldung an ihn senden. Geräte wie Behringer BCF2000 unterstützen diese Funktion.  
Derzeit wird Feedback nur über MIDI, OSC und Loopback unterstützt.

Um zu erfahren, wie Sie Ihr externes Eingabegerät für die optimale Verwendung mit QLC+ einrichten, lesen Sie bitte weiter mit der [Anleitung für Eingabeprofile](input-profiles).