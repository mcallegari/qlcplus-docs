---
title: 'Eingangsprofile'
date: '04:57 22-08-2023'
---

## Was ist ein Eingabeprofil?

Ein Eingabeprofil ist eine Konfiguration, die Eingabesignale von einem externen Steuergerät (z. B. einem MIDI-Controller, DMX-Controller oder anderer Eingabehardware) bestimmten Funktionen innerhalb von QLC+ zuordnet. Dadurch können Benutzer verschiedene Aspekte ihrer Lichtshow über ihre bevorzugte Hardwareschnittstelle steuern, ohne das zugrunde liegende Kommunikationsprotokoll kennen zu müssen.

## Wählen Sie ein Eingabeprofil aus

QLC+ ist mit vielen Eingabeprofilen ausgestattet, die Sie sofort verwenden können. Wenn Ihr Gerät bereits unterstützt wird, können Sie das Profil aktivieren, indem Sie:
 1. Auswahl der Registerkarte „Eingänge/Ausgänge“ ![](/basics/input_output.png).
 2. Wählen Sie im linken Teil des Bildschirms das gewünschte Universum aus
 3. Klicken Sie auf die Registerkarte „Profil“ neben der Registerkarte „Zuordnung“ oben rechts auf dem Bildschirm.
 4. Suchen Sie das Eingabeprofil und klicken Sie auf das zugehörige Häkchen, um es auszuwählen.


## Ein Profil hinzufügen/bearbeiten

Wenn das Gerät, das Sie verwenden möchten, nicht in der Liste der mitgelieferten Eingabeprofile enthalten ist, können Sie selbst eines erstellen.

**Klicken Sie auf die Schaltfläche ![](/basics/edit_add.png) Neues Eingabeprofil erstellen, um mit der Erstellung einer Profildefinition für Ihr Eingabeprofil zu beginnen. Alternativ können Sie jedes vorhandene Profil bearbeiten, indem Sie das entsprechende Element auswählen und auf die Bearbeitungsschaltfläche ![](/basics/edit.png) klicken. Die Vorgehensweise ist von nun an in beiden Fällen genau gleich.**

## Eingabeprofil-Editor

### Allgemein
Auf der Registerkarte „Allgemein“ können Sie allgemeine Informationen zum Gerät eingeben (wie der ausdrucksstarke Name lautet).

#### Hersteller
Wenn Ihr Hersteller bereits aufgeführt ist, verwenden Sie dieselbe Schreibweise und Großschreibung.
#### Modell
Modellnamen können den vollständigen Namen und die Version des Controllers enthalten. Z.B. APC Mini MK2
#### Typ
**Geben Sie zunächst den Hersteller und das Modell des Profils in diese Felder ein und wählen Sie den Profiltyp aus.**

**Typ** ist einer von:
 - MIDI – für MIDI-Profile, normalerweise verwendet mit [MIDI-Plugin](/plugins/midi)
 - OSC – für OSC-Profile, verwendet mit [OSC-Plugin](/plugins/osc)
 - HID – für HID-Profile, verwendet mit [HID-Plugin](/plugins/hid)
 - DMX – generische DMX-Profile
 - ENTTEC – ENTTEC Wing-Profile, verwendet mit dem Enttec Wing-Plugin

Bisher besteht der einzige Unterschied darin, dass MIDI-Profile MIDI-Nachrichtenparameter im Kanaleditor anzeigen.

**Klicken Sie nun auf die Registerkarte „Eingabezuordnung“, um die Kanäle des Profils zu bearbeiten.** Sie haben zwei Möglichkeiten zum Hinzufügen von Kanaldefinitionen: Manuell und Automatisch:

#### Manueller Modus
Wenn Sie sich mit MIDI-Codes gut auskennen oder die Plugins und ihre Funktionsweise gut kennen, können Sie die Parameter auch manuell eingeben.

![](/basics/edit_add.png) Klicken Sie auf die Schaltfläche „Hinzufügen“, um individuelle Kanalinformationen für jeden Kanal manuell einzugeben.
![](/basics/edit_remove.png) Klicken Sie hier, um einen vorhandenen Kanal zu entfernen

#### Automatikmodus
In den meisten Fällen ist es besser, die Tasten auf Ihrem Controller zu drücken, um sie automatisch zu erkennen und zuzuweisen.

![](/basics/wizard.png) Klicken Sie auf die Schaltfläche „Automatischer Assistent“, um eine automatische Kanalerkennung zu versuchen. Weitere Anweisungen erhalten Sie von QLC+. Damit diese Funktion funktioniert, muss dem aktuellen Universum ein [Eingabe-Plugin](/input-output) zugewiesen sein. Außerdem müssen Sie zunächst den Assistenten stoppen, um von dieser Dialogseite weg navigieren zu können.

####  Eigenschaften

Wenn Sie einen Kanal hinzufügen ![](/basics/edit_add.png) oder bearbeiten ![](/basics/edit.png), wird ein kleines Fenster angezeigt, in dem Sie aufgefordert werden, einige Parameter auszufüllen oder zu ändern:

* **Nummer**: Die Kanalnummer. Da QLC+ eine Vielzahl von Eingabe-Plugins unterstützt, ist die Kanalnummer möglicherweise nicht intuitiv. Bearbeiten Sie sie daher nur, wenn Sie wissen, was Sie tun.
* **Name**: Der Kanalname. Dies ist eine beliebige Zeichenfolge, die den Zweck eines Kanals angibt.
* **Typ**: Der Kanaltyp. Dies kann sein: ![](/basics/slider.png) Slider, ![](/basics/knob.png) Knob, ![](/basics/button.png) Button oder ![](/basics/knob.png) Encoder
    Andere Typen: ![](/basics/back.png) Vorherige Seite, ![](/basics/forward.png) Nächste Seite, ![](/basics/star.png) Set Page werden zur Steuerung mehrseitiger Frames verwendet .

Für MIDI-Profile enthält der Dialog zusätzliche Felder:

* Kanal
* Nachricht
* Param
* Notiz

Hier können Sie die Kanalspezifikation (die in die Kanalnummer übersetzt wird) auf intuitivere Weise eingeben.


**Beachten Sie, dass Sie denselben Kanal nicht mehrmals zu einem Profil hinzufügen können.**


#### ![](/basics/slider.png) Bewegungseigenschaften der Schieberegler

Wenn Ihr Eingabeprofil Schiebereglerkanäle enthält, werden beim Klicken darauf einige zusätzliche Eigenschaften unten im Hauptfenster des Eingabeprofil-Editors angezeigt. Damit können Sie festlegen, wie sich von einem Schieberegler empfangene Werte in QLC+ verhalten sollen.

Es gibt zwei Verhaltensweisen: Absolut und Relativ.

**Absolut** ist die Standardeinstellung und weist QLC+ grundsätzlich an, die Schiebereglerwerte genau so zu verwenden, wie sie von einem externen Controller empfangen werden.

**Relativ** ist ein erweitertes Verhalten, das nützlich ist, wenn ein HID-Joystick mit einem QLC+ [XY-Pad-Widget](/virtual-console/xy-pad) oder einem [Slider-Widget](/virtual-console/slider) verwendet wird. Von einem externen Controller empfangene Werte werden als relative Bewegung ausgehend von der aktuellen Position eines Widgets der virtuellen Konsole behandelt.
Machen wir ein Beispiel. Angenommen, Sie haben ein XY-Pad in Ihrer virtuellen Konsole, das eine Gruppe beweglicher Köpfe steuert und überwacht. Während Ihrer Show werden Sie eine Reihe von Szenen sehen, in denen die Köpfe geschwenkt und geneigt werden. Irgendwann möchten Sie die Position der Köpfe geringfügig um einige Grad anpassen. Hier setzt die Relativbewegung ein. Wenn Sie Ihren Joystick (oder externen Schieberegler) bewegen, passt QLC+ die Köpfe von ihren aktuellen Positionen aus an. Die Richtung hängt direkt von Ihrem externen Controller ab. Die relative Bewegung stoppt, wenn der externe Controller zu seinem Ursprung zurückkehrt. Joysticks haben dafür eine Feder.
Darüber hinaus können Sie mit der Einstellung „Input Profile Editor Relative“ einen **Empfindlichkeit**-Parameter festlegen, der QLC+ über die Stärke Ihrer externen Controller-Bewegungen informiert. Je höher dieser Wert ist, desto langsamer erfolgen die Bewegungen. Je niedriger, desto schneller.


#### ![](/basics/knob.png) Encoder-Eigenschaften

Ein Encoder ist ein endloser Drehregler und kann nur als relativer Regler behandelt werden. Grundsätzlich kann der Encoder an jeder Position starten und wenn er im oder gegen den Uhrzeigersinn gedreht wird, erzeugt er positive oder negative Offsets innerhalb von QLC+. Wenn ein Eingabeprofilkanal auf den Encoder-Typ eingestellt ist, ist es möglich, einen **Empfindlichkeitswert** anzugeben, der nichts anderes ist als der relative Offset, der zum aktuellen QLC+-Kanalwert addiert oder davon subtrahiert wird.


#### ![](/basics/button.png) Schaltflächeneigenschaften

Es ist möglich, das Verhalten einzelner Schaltflächen über ein Eingabeprofil zu ändern, und die folgenden Eigenschaften werden global in QLC+ verwendet.

**Beim Umschalten ein zusätzliches Drücken/Loslassen erzeugen**: Dies ist eine ganz spezielle Option, die beispielsweise beim Umgang mit TouchOSC oder dem Behringer BCF2000 verwendet wird.
QLC+-Umschaltereignisse werden ausgelöst, wenn eine High+Low-Sequenz empfangen wird. Das bedeutet, dass QLC+ einen Wert ungleich Null (normalerweise 255) erwartet, gefolgt von einem Nullwert, um beispielsweise eine Schaltfläche umzuschalten.
Geräte wie BCF2000 oder Software wie TouchOSC senden stattdessen beim Aktivieren einer Schaltfläche nur einen Wert ungleich Null und beim Deaktivieren einen Nullwert.
Wenn diese Option aktiviert ist, generiert QLC+ die „fehlenden“ Ereignisse, um die Funktionsweise einiger Controller zu standardisieren. So sieht es beispielsweise so aus, als würde der BCF2000 beim Drücken einer Taste 255+0 senden und beim erneuten Drücken weitere 255+0.

**Benutzerdefiniertes Feedback**: Mit den Feldern „Unterer Wert“ und „Oberer Wert“ ist es möglich, das Senden benutzerdefinierter Werte zu erzwingen, wenn die ausgewählte Schaltfläche einen Wert ungleich Null und einen Wert von Null sendet.
Mit dieser Option ist es beispielsweise möglich, global festzulegen, wie die LEDs von AKAI APC-Geräten gefärbt werden sollen, wenn sie aktiviert/deaktiviert werden.
Beachten Sie, dass diese Option in QLC+ global ist, aber bei Bedarf von einem bestimmten Widget der virtuellen Konsole über dessen Konfigurationsseite überschrieben werden kann.

### Farben
Bei einigen Controllern können Farben festgelegt werden, wenn die Schaltfläche aktiviert ist. Eingabeprofile ermöglichen die Definition einer Reihe von Farben, damit diese beim Bearbeiten des Widget-Feedbacks der virtuellen Konsole einfacher ausgewählt werden können.
![](/basics/edit_add.png) Klicken Sie auf die Schaltfläche „Hinzufügen“, um einen Feedbackwert und die entsprechende Farbe hinzuzufügen.
#### Feedback-Wert
Dies ist der Wert, den QLC+ an den Controller senden muss, um die Farbe zu erzeugen.

#### Farbauswahl
Wählen Sie die Farbe aus, die die Schaltfläche haben soll, wenn sie den angegebenen Wert erreicht

#### Farbetikett
Ein Name für die erstellte Farbe. Z.B. „Blau“

### MIDI-Kanäle
Einige Controller ermöglichen die Zuordnung verschiedener Kanäle zu unterschiedlichen Anzeigemodi für Feedbackfarben. Der AKAI APC Mini MK2 ermöglicht beispielsweise die folgenden Kanäle/Modi:

![](/input-output/input-profile-midi-channels.png)

# Zurück zum Eingabeprofil-Definitionsfenster

Wenn Sie mit der Kanalzuordnung fertig sind, klicken Sie auf die Schaltfläche „OK“, um die Änderungen zu übernehmen und das Eingabeprofil zu speichern. Wenn Sie für das Profil keinen Hersteller/kein Modell eingegeben haben, werden Sie zur Eingabe aufgefordert, bevor Sie fortfahren können.
Jetzt sollten Sie das Profil, das Sie gerade definiert haben, in der Liste der verfügbaren Eingabeprofile sehen. Erinnern Sie sich, wie man es dem aktuellen Universum zuordnet? Scrollen Sie nach oben zu Profilzuordnung, wenn Sie dies nicht tun.

Um vorhandene Eingabeprofile zu entfernen, klicken Sie auf die Schaltfläche ![](/basics/edit_remove.png) zum Entfernen. Beachten Sie, dass einige Profile sogenannte Systemprofile sind und nicht entfernt werden können, es sei denn, Sie sind der Administrator.

Das ist alles!
Jetzt können Sie Ihr bevorzugtes Profil verwenden. Wenn Sie einem QLC+-Element (wie Schiebereglern der virtuellen Konsole, Kanalgruppen usw.) einen Eingangskanal zuweisen, werden Sie sehen, dass Ihre Eingangsprofilzuordnung verwendet wird.