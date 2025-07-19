---
title: Kanäle
date: '05:33 22-08-2023'
---

Die Registerkarte „Kanäle“ enthält alle möglichen Kanäle, die das Gerät in allen seinen Modi versteht. Die Kanalreihenfolge spielt in dieser Registerkarte überhaupt keine Rolle. Stattdessen werden die Kanäle in jedem Modus auf der Registerkarte **Modus** in einer bestimmten Reihenfolge angeordnet. Auf der Registerkarte **Kanal** sind nur die Kanalnamen und ihre **Fähigkeiten** (d. h. Wertebereiche und ihr Zweck) von Bedeutung.

![](../fixture_editor_channels.png)

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Fügen Sie mit dem [Kanal-Editor](#kanaleditor) | einen neuen Kanal zum Gerät hinzu
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählten Kanäle aus dem Gerät **und aus allen Modi** |
| ![](/basics/edit.png) | Bearbeiten Sie den aktuell ausgewählten Kanal mit dem [Kanaleditor](#kanaleditor) |
| ![](/basics/editcopy.png) | Kopieren Sie den aktuell ausgewählten Kanal in die Zwischenablage. Kanäle in der Zwischenablage können auch in andere Fixture-Definitionsfenster | eingefügt werden
| ![](/basics/editpaste.png) | Fügen Sie einen Kanal aus der Zwischenablage in die Gerätedefinition ein. Kanäle in der Zwischenablage können auch in andere Fixture-Definitionsfenster | eingefügt werden
| ![](/basics/check.png) | Erweitern oder reduzieren Sie alle Kanalknoten in der Kanalliste |

### Kanaleditor

Der Kanaleditor wird zum Bearbeiten einzelner Kanäle und der DMX-Wertebereiche jeder Funktion (eine grüne Farbe, ein bestimmtes Gobo, Prismendrehung usw.) verwendet, die ein Gerätekanal bietet. Eine detaillierte Liste der Kanäle und DMX-Werte des Geräts finden Sie im Handbuch Ihres Geräts.

Hier sind ein paar Screenshots, die die möglichen Szenarien zeigen, die beim Bearbeiten eines Fixture-Kanals auftreten können.

**Feige. 1**

![](../fixture_editor_channel_preset.png)

**Feige. 2**

![](../fixture_editor_channel_shutter.png)

**Feige. 3**

![](../fixture_editor_channel_color.png)

**Feige. 4**

![](../fixture_editor_channel_gobo.png)

Nachfolgend die Beschreibung der Einstellungen, die im Kanaleditor angezeigt werden. Der Verweis auf die obigen Abbildungen dient dazu, Sie auf einen visuellen Kontext hinzuweisen.

|     |     |
| --- | --- |
| **Name** | Der Kanalname. Bei der Auswahl einer Kanalvoreinstellung (Einkanalkanal) wird automatisch ein Kanalname vorgeschlagen, mit der Möglichkeit, ihn anzupassen. |
| **Voreinstellung** | Eine Voreinstellung ist eine Art Verknüpfung, um die Definitionserstellung zu beschleunigen. Außerdem stellt es der QLC+-Engine nützliche Informationen zur Erkennung und ordnungsgemäßen Behandlung eines DMX-Kanals zur Verfügung.  <br>Es kommt häufig vor, dass ein Gerät über einige RGB- oder CMY-Kanäle verfügt. Eine LED-Leiste könnte Dutzende davon haben. Wenn Sie also eine Farbvoreinstellung auswählen, werden alle notwendigen Informationen, die QLC+ benötigt, mit einem einzigen Mausklick ausgefüllt. (Siehe Abb. 1) <br>Häufig findet man auch einen Kanal zur Steuerung der Schwenk-/Neigegeschwindigkeit. Zu diesem Zweck stehen einige Voreinstellungen zur Verfügung, die auch anzeigen, ob die Geschwindigkeit von langsam nach schnell oder von schnell nach langsam wechselt. Wählen Sie einfach die Voreinstellung aus, die besser zu der von Ihnen erstellten Definition passt.  <br>Wenn eine Voreinstellung ausgewählt wird, wird der gesamte Rest des Editors inaktiv. Wenn ein Kanal über mehrere DMX-Bereiche (Fähigkeiten) verfügt, belassen Sie einfach „Preset“ auf „Custom“ und fahren Sie mit dieser Lektüre fort. |
| **Typ** | Dies zeigte den Typ des Kanals an (seine Rolle im Fixture). Durch die Auswahl eines Typs wird implizit auch die Kanalpriorität definiert ([LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence) oder [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence)). Daher ist es sehr wichtig, hier den richtigen Typ auszuwählen, um unerwünschtes Verhalten innerhalb von QLC+ zu vermeiden.  <br>Alle Intensitäts-/Farbkanaltypen unterliegen der **HTP**-Regel: **Intensität, Rot, Grün, Blau, Cyan, Magenta, Gelb, Weiß, Bernstein, UV, Limette und Indigo**.  <br>Alle anderen Typen unterliegen der **LTP**-Regel: **Beam, Farbe, Effekt, Gobo, Wartung, Nothing, Pan, Tilt, Prisma, Shutter und Speed**.  <br><br>**Intensität** wird für Dimmer-/Master-Dimmerkanäle verwendet.  <br> <br>**Primärfarben** (Rot, Cyan, Weiß usw.) werden zur Steuerung einzelner Farbkanäle verwendet. Bitte verwechseln Sie diese Typen nicht mit dem Typ „Farbe“ (siehe unten). <br> Beachten Sie, dass der [Hauptregler](/basics/glossary-and-concepts#masterregler) standardmäßig nur Intensitäts- und Primärfarbkanäle steuert. Beachten Sie auch, dass das Farbwerkzeug im [Szenen-Editor](/function-manager/scene-editor) nur verfügbar ist, wenn ein Gerät dies bereitstellt**Primäre Farbkanäle** für RGBAWUV/CMY.<br>Der Typ **Farbe** wird zur Steuerung eines festen Farbkreises oder vordefinierter Farbmakros verwendet. Weisen Sie dem Farbtyp nicht einzelne RGBAW/CMY-Farbkanäle zu, sondern verwenden Sie stattdessen die **Primärfarbtypen** wie oben beschrieben<br>Der **Gobo**-Typ wird zur Steuerung der Goboradposition oder -indizierung verwendet.<br >Der Typ **Speed** wird verwendet, um etwas zu steuern, das mit der Geschwindigkeit zusammenhängt (Gobo-Rotation, Regenbogengeschwindigkeit, Tracking-Geschwindigkeit).<br>Der Typ **Prism** wird verwendet, um ein Prisma zu steuern.<br>Der ** Der Typ Verschluss** wird zur Steuerung eines Verschlusses verwendet, z Strobe oder eine Iris.<br>Der **Beam**-Typ wird verwendet, um einen Strahlformer (z. B. eine Zoomfunktion) zu steuern.<br>Der **Effect**-Typ wird verwendet, um etwas zu steuern, das nicht ganz funktioniert passen in eine der anderen Gruppen.<br>Der Typ **Wartung** wird verwendet, um Funktionen wie das Zurücksetzen oder einen Kühlventilator oder etwas Ähnliches zu steuern.<br>Der Typ **Nichts** wird als Kanalabstandshalter verwendet oder ein Platzhalter. Einige Kanäle dieses Typs könnten durch die Alias-Funktion ersetzt werden.<br>Die Typen **Pan** und **Tilt** werden zur Steuerung der Schwenk-/Neigefunktionen (oder X/Y-Funktionen) von beweglichen Köpfen oder Lasern verwendet. |
| **Standardwert** | Geben Sie den DMX-Wert (0 bis 255) an, auf den ein Kanal beim Einschalten eingestellt wird. Beispielsweise positionieren einige Moving Heads ihre Schwenk-/Neigemotoren auf halber Höhe, was bedeutet, dass der anfängliche DMX-Kanalwert 127 beträgt. |
| **Rolle** | Anwendbar auf Kanalpaare, die 16-Bit-Werte erzeugen, normalerweise **Pan**- oder **Tilt**-Gruppen, aber einige neuere Geräte unterstützen 16-Bit-Dimmer oder sogar RGB-, Gobo- oder Fokuskanäle.  <br>Für 8-Bit-Werte (z. B. wenn das Gerät nur 8-Bit-Bewegungen unterstützt, nur ein Kanal für jede Bewegung), weisen Sie dem Kanal das Steuerbyte **Coarse (MSB)** zu. Wenn das Gerät jedoch 16 Bit unterstützt (zwei Kanäle für jede Funktion), sollten Sie das Byte **Coarse (MSB)** den Kanälen zuweisen, die den Grobwert bereitstellen, und das Byte **Fine (LSB)** den Kanälen die eine Feineinstellung der Werte ermöglichen. Wenn Sie sich nicht sicher sind, verwenden Sie **Grobes MSB**. |
| **Fähigkeiten** | Zeigt die Liste der DMX-Wertebereiche für den aktuell bearbeiteten Kanal an. Wenn ein Kanal nur eine Funktion bietet (z. B. Schwenken oder Dimmern), sollten Sie eine Kanalvoreinstellung verwenden (siehe oben). Für komplexere Funktionen wie Farben oder Gobos sollten Sie Funktionsbereiche für jede Farbe erstellen (z. B. 0–15 Weiß, 16–32 Blau...).  <br>Spezifische Bereiche für jeden Kanal finden Sie im Produkthandbuch unter der Bezeichnung „DMX-Chart“.  <br>Die Eingabe von DMX-Bereichen ist ziemlich einfach. Der Eingabebereich ist als Tabellenkalkulation organisiert, in der Bereichswerte und Beschreibungen fortlaufend eingegeben werden können, indem einfach die TAB-Taste gedrückt wird. |
| **Voreinstellung** | Jede Funktion kann mit einem sogenannten „Preset“ erweitert werden, das der QLC+-Engine weitere nützliche Informationen über einen Bereich von DMX-Werten mitteilt.  <br>Wenn die Funktion beispielsweise „Shutter Open“ lautet, ist eine Voreinstellung namens „ShutterOpen“ verfügbar, sodass QLC+ genau weiß, wie der Bereich zu behandeln ist.  <br>Je nach Voreinstellungstyp können eine oder mehrere zusätzliche Informationen eingegeben werden:<br><br>**ColorMacro**: ermöglicht die Auswahl einer einzelnen Farbe, die normalerweise in Farbrädern verwendet wird<br>**ColorDoubleMacro**: ermöglicht die Auswahl von zwei Farben zur Darstellung einer Zwischenposition eines Farbkreises (Abb. 3)<br>**GoboMakro**: ermöglicht die Auswahl eines Gobo-Bildes, das beim Eintritt in den Leistungsbereich verwendet werden soll (Abb. 4)<br> **StrobeFrequency**: ermöglicht Geben Sie eine genaue Frequenz (in Hertz) für eine Strobe-Funktion ein.<br>**StrobeFreqRange**: Ermöglicht die Eingabe von 2 Werten (Minimum und Maximum), um den Frequenzbereich (in Hertz) darzustellen, um einen Strobe-Effekt zu simulieren (Abb. 2). )<br>**Alias**: Dies ist eine spezielle Funktionsvoreinstellung, die angibt, dass in diesem Bereich ein Alias ​​ausgelöst werden soll. Ein Alias ​​ist ein Ersatz für einen Kanal. Weitere Informationen zum Definieren von Aliasen finden Sie im Abschnitt [Registerkarte „Aliase“](../aliases).
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählten Funktionen aus dem Kanal. |
| ![](/basics/wizard.png) | Erstellen Sie schnell neue Funktionen mit dem Funktionsassistenten. |

### Funktionsassistent

Der Capability Wizard ist ein praktisches Tool zum Erstellen mehrerer gleich großer Fähigkeitswertbereiche. Normalerweise betrifft dies feste Farben, Gobo-Indizes und verschiedene Makrokanäle.

![](../fixture_editor_channel_wizard.png)

|     |     |
| --- | --- |
| **Start** | Der Ausgangswert für neue Fähigkeiten. Manchmal gibt es am Anfang des Wertebereichs des Kanals andere Funktionen, die Sie überspringen können, indem Sie diesen Wert anpassen. |
| **Breite** | Die Größe jedes Wertebereichs. |
| **Betrag** | Anzahl der zu erstellenden Funktionen. |
| **Name** | Der allgemeine Name für jede Funktion. Sie können das Rautezeichen # verwenden, um eine Stelle für eine Indexnummer zu kennzeichnen (z. B. „Gobo #“ erstellt Gobo 1, Gobo 2, Gobo 3...) |
| **Beispiel** | Jedes Mal, wenn Sie einen Parameter im Assistenten ändern, wird diese Liste aktualisiert, um Ihnen ein Beispiel dafür zu zeigen, welche Arten von Funktionen erstellt werden, sobald Sie auf „OK“ klicken. |