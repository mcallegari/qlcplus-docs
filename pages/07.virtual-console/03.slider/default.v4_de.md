---
title: Schieberegler
date: '03:02 22-08-2023'
---

Schieberegler werden für drei verschiedene Zwecke verwendet:
* [Fixture](/basics/glossary-and-concepts#fixtures) Einstellung des Kanalpegels
* [Funktion](/basics/glossary-and-concepts#funktionen) Wiedergabe und Intensitätsanpassung
* Submaster-Funktionalität<br>

Jeder Schieberegler kann in jedem dieser Modi betrieben werden und jeder Modus verfügt über eigene Konfigurationsoptionen.

### Konfiguration

Schieberegler können mit der Schaltfläche „Eigenschaften“ ![](/basics/edit.png) in der Symbolleiste oder durch Doppelklicken auf den Schieberegler selbst konfiguriert werden.

### Konfiguration – Registerkarte „Allgemein“.

Die Registerkarte „Allgemein“ enthält alle Eigenschaften des Schiebereglers, die von den beiden Modi des Schiebereglers gemeinsam genutzt werden.

|     |     |
| --- | --- |
| **Slider-Name** | Ändern Sie den Namen des Schiebereglers. |
| **Widget-Erscheinungsbild** | Ein Schieberegler kann als vertikaler Fader ![](/basics/slider.png) oder als Knopf ![](/basics/knob.png) angezeigt werden. Das Erscheinungsbild kann im Handumdrehen geändert werden. |
| **Wertanzeigestil** | **Aktuell**: Aktuelle DMX-Werte (0-255) anzeigen<br>**Prozentsatz**: Prozentwerte anzeigen (0-100%) |
| **Schieberbewegung** | **Normal**: Die Werte nehmen nach oben hin zu und nach unten hin ab.<br>**Invertiert**: Drehen Sie den Schieberegler um, sodass die Werte nach unten hin ansteigen und nach oben abnehmen. |
| **Aufholen des Eingangswerts des externen Controllers** | Wenn diese Funktion aktiviert ist, hilft sie bei der Steuerung des Schiebereglers mit externen Controllern, die kein Feedback unterstützen oder keine motorisierten Fader haben.  <br>Wenn Sie beispielsweise einige Schieberegler auf verschiedenen Seiten eines Frames mit einem einzelnen Fader eines externen Controllers steuern, kann es beim Seitenwechsel sehr leicht zu „nicht synchronen“ Positionen kommen.  <br>Wenn diese Option aktiviert ist, sollte ein externer Controller-Fader einen bestimmten Schwellenwert erreichen, bevor sich der Schieberegler-Cursor zu bewegen beginnt, um einen Synchronisierungsstatus zu gewährleisten und unerwünschte Schieberegler-Sprünge zu vermeiden. |
| **Externe Eingabe** | Sie können einen externen Eingabekanal von einem Eingabegerät (z. B. einem Slider-Board) an Slider anschließen, sodass Sie zum Bewegen von Slidern nicht immer die Maus oder den Touchscreen verwenden müssen.<br><br>**Eingabeuniversum** : Das Eingabeuniversum, aus dem Sie Eingabedaten für den Schieberegler erhalten möchten.<br>**Eingabekanal**: Der einzelne Eingabekanal innerhalb des ausgewählten Eingabeuniversums, den Sie zur Steuerung des Schiebereglers verwenden möchten.<br>** Automatische Erkennung**: Wenn diese Option aktiviert ist, können Sie sie einfach bewegen/drücken eine Taste/einen Schieberegler/einen Knopf auf Ihrer externen Eingabehardware und diese wird automatisch dem Schieberegler zugewiesen. Die neueste Kombination wird in den Textfeldern angezeigt, wenn QLC+ Eingabedaten empfängt. Wenn in den Feldern nichts angezeigt wird, liegt möglicherweise ein Problem mit Ihrer Eingangsverbindung vor, das Sie zuerst beheben müssen.<br>**Wählen...**: Zeigt die Option [Eingangskanal auswählen](../select-input-channel)-Dialogfeld, mit dem Sie einen Eingangskanal manuell auswählen können. |

### Konfiguration – Registerkarte „Ebene“.

Wenn sich der Schieberegler derzeit nicht im Level-Modus befindet, sehen Sie lediglich eine Schaltfläche, die Sie auffordert, darauf zu klicken, um den Schieberegler in den Level-Modus zu schalten. Nachdem Sie darauf geklickt haben, werden die Eigenschaften des Level-Modus angezeigt.

|     |     |
| --- | --- |
| **Wertebereich** | **Untere Grenze**: Stellen Sie den niedrigsten DMX-Wert ein, der mit dem Schieberegler eingestellt werden kann.<br>**Obere Grenze**: Stellen Sie den höchsten DMX-Wert ein, der mit dem Schieberegler eingestellt werden kann.t<br>**Von Fähigkeit**: Sie können den Pegelwertbereich des Schiebereglers auf einen bestimmten Fähigkeitsbereich innerhalb des Kanals eines Geräts beschränken. Wenn Sie einen beliebigen Kanalwertbereich aus der Fixture-Liste ausgewählt haben (zum Beispiel _„Dimmer Control 006 - 128“_) und auf diese Schaltfläche klicken, werden die **untere und obere Grenze** dieses Schiebereglers automatisch von dieser Funktion übernommen und sind auf 6 bzw. 128 eingestellt. |
| **Spielplan** | Sie können einzelne Kanäle aus dieser Liste auswählen, die alle Kanäle aller Ihrer Geräte enthält. Die Kanäle, neben denen Sie ein Häkchen gesetzt haben, werden über diesen Schieberegler gesteuert. |
| **Alle** | Durch Klicken auf diese Schaltfläche werden ALLE Kanäle von ALLEN Geräten ausgewählt. |
| **Keine** | Durch Klicken auf diese Schaltfläche werden ALLE Kanalauswahlen ALLER Geräte gelöscht. |
| **Invertieren** | Kehrt die aktuelle Auswahl um. Wenn Sie die Kanäle 1, 3 und 5 von allen Geräten ausgewählt haben, werden durch Klicken auf diese Schaltfläche die Kanäle 1, 3 und 5 gelöscht und stattdessen die Kanäle 2, 4 und 6 von diesen Geräten ausgewählt. |
| **Nach Gruppe...** | Wenn Sie eine bestimmte Kanalgruppe von ALLEN Geräten aus steuern möchten, können Sie auf diese Schaltfläche klicken und die zu steuernde Kanalgruppe auswählen. Wenn Sie den Dialog akzeptieren, werden ALLE Kanäle aus ALLEN Geräten ausgewählt, die zur ausgewählten Kanalgruppe gehören. Dies ist besonders nützlich, wenn Sie beispielsweise eine gemeinsame Kontrolle über alle Intensitätskanäle Ihrer Scanner haben möchten. |
| **Click & Go** | Click & Go ist eine QLC+-Technologie, die Ihnen den schnellen und vollständig visuellen Zugriff auf Gerätefunktionen ermöglicht. Wenn Click & Go aktiviert ist, erscheint unten im Slider eine Schaltfläche und mit nur 2 Klicks gelangen Sie zum gewünschten Ergebnis.  <br>Die unterstützten Modi sind:<br><br>**Keine**: Click & Go deaktiviert. Es wird keine Schaltfläche angezeigt.<br>**Farbe**: Einzelne Farbauswahl. Es wird ein über den Schieberegler gesteuerter Farbverlauf angezeigt, der es Ihnen ermöglicht, visuell zur gewünschten Farbe zu springen.<br>**RGB**: RGB-Farbauswahl. Es wird ein RGB-Farbwähler angezeigt, mit dem Sie eine beliebige Farbe von Schwarz bis Weiß auswählen können. Zur Vereinfachung werden auf der linken Seite 16 voreingestellte Farben angezeigt. Bei der Auswahl einer Farbe wird der Schiebereglerwert auf halber Höhe (128) platziert. Wenn Sie ihn nach unten bewegen, wird er in Richtung Schwarz ausgeblendet, während er nach oben bewegt wird, wird er in Richtung Weiß ausgeblendet.<br>**Gobo/Effekt**: Gobo-/Makroauswahl. Eine Rasteransicht der vom Gerät definierten Makros wird angezeigt und Sie können ein Makro anhand seiner Farbe, seines Gobos oder seines Namens auswählen. Wenn sich die Maus über einer Makrozelle befindet, erscheint ein blauer Balken, der es Ihnen ermöglicht, einen Zwischenwert innerhalb desselben Makros auszuwählen. Dies ist nützlich für Funktionen wie die Gobo-Rotationsgeschwindigkeit. |
| **Überwachen Sie die ausgewählten Kanäle und aktualisieren Sie die Schiebereglerstufe** | **(EXPERIMENTELL)** Wenn diese Option aktiviert ist, beobachtet der Schieberegler die Änderungen der DMX-Kanäle und wenn sie alle den gleichen Pegel annehmen, wird der Schieberegler entsprechend aktualisiert, um eine sofortige visuelle Rückmeldung zu erhalten.  <br>Bei Aktivierung dieser Option werden im Slider-Layout ein Reset-Button und eine zusätzliche Levelleiste angezeigt.  <br>Wenn Sie mit dem Schieberegler interagieren, während er einige DMX-Kanäle überwacht, wechselt er in einen Override-Zustand, ähnlich wie in Simple Desk. Der Hintergrund der Reset-Schaltfläche wird rot, was darauf hinweist, dass die Überbrückung erfolgt ist, und die Pegelleiste auf der rechten Seite zeigt weiterhin die Überwachungsstufe an.  <br>Wenn Sie die Reset-Taste aus einem Override-Zustand drücken, kehrt der Schieberegler zur aktuellen Überwachungsstufe zurück.  <br>Es ist möglich, der Override-Reset-Taste eine externe Steuerung zuzuordnen. |

### Konfiguration – Registerkarte „Wiedergabe“.

Wenn sich der Schieberegler derzeit nicht im Wiedergabemodus befindet, sehen Sie lediglich eine Schaltfläche, die Sie auffordert, darauf zu klicken, um in den Wiedergabemodus zu wechseln. Nachdem Sie darauf geklickt haben, werden die Eigenschaften des Wiedergabemodus angezeigt.  

Wenn sich der Schieberegler im Wiedergabemodus befindet, verhält er sich wie eine Kombination aus Schaltfläche und Schieberegler. Mit dem Schieberegler können Sie eine Funktion starten UND gleichzeitig die Intensität der Funktion steuern. Wenn der Schieberegler auf Null steht, wird die Funktion gestoppt, aber jeder Wert über Null startet die Funktion (sofern sie nicht bereits gestartet wurde) und passt gleichzeitig die Intensität der Funktion an (falls zutreffend).

Ein Schieberegler im Wiedergabemodus ignoriert die Ein- und Ausblendzeiten der angehängten Funktion, sodass Überblendungen manuell durchgeführt werden müssen.  
Wenn Sie Ein-/Ausblendautomatisierungen zusammen mit der Steuerung der Funktionsintensität benötigen, ist die Verwendung eines ![](/basics/button.png)[Virtual Console Button](../button) in Kombination mit einem Slider in Der Submaster-Modus ist genau das, wonach Sie suchen.

|     |     |
| --- | --- |
| **Funktion** | Zeigt die Funktion an, die derzeit mit dem Schieberegler verbunden ist. |
| ![](/basics/attach.png) | Hängen Sie eine Funktion an den Schieberegler an. |
| ![](/basics/detach.png) | Trennen Sie die aktuell angehängte Funktion. |
| **Flash-Taste** | Zeigt eine zusätzliche Schaltfläche ![](/basics/flash.png) unter dem Schiebecursor an. Wenn Sie darauf drücken, blinkt die angehängte Funktion (jegliche Art davon) |

### Konfiguration – Submaster-Registerkarte

Wenn sich der Schieberegler derzeit nicht im Submaster-Modus befindet, sehen Sie lediglich eine Schaltfläche, die Sie auffordert, darauf zu klicken, um in den Submaster-Modus zu wechseln. Nachdem Sie darauf geklickt haben, wird der Schieberegler so eingestellt, dass er als Submaster fungiert.

Wenn ein Schieberegler auf den Submaster-Modus eingestellt ist, steuert er die Intensität jedes anderen Widgets im selben Frame (bitte beachten Sie, dass der Hauptbereich der virtuellen Konsole ebenfalls ein Frame ist!)  
Die Intensität eines Widgets hängt von der Art des Widgets selbst und der damit gesteuerten Funktionalität ab. Ein Submaster steuert die Intensität jeder „lichtemittierenden“ QLC+-Funktionalität, entweder einer Funktion oder einzelner Kanalebenen.  
Beispielsweise kann ein Submaster die Intensität einer Funktion steuern, die einer [Schaltfläche](../button) zugeordnet ist, oder die Kanalpegel, die einem Schieberegler im Pegelmodus zugeordnet sind.  
Jedes Widget wird von einem Submaster gesteuert, auch wenn die Funktionalität des Widgets noch nicht aktiv ist. Wenn beispielsweise ein Submaster auf 50 % eingestellt ist, startet ein anschließender Tastendruck die zugehörige Funktion mit 50 % Intensität.