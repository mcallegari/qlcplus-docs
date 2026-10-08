---
title: 'Szeneneditor'
---

Eine **Szene** ist die grundlegendste Funktion: ein fester Look aus Kanalwerten für
ein oder mehrere Fixtures. Der Szeneneditor öffnet sich im rechten Bereich des
Arbeitsbereichs [Fixtures and Functions](/fixtures-and-functions), wenn Sie eine
Szene erstellen oder bearbeiten.

Eine Szene wird aus **Komponenten** aufgebaut — den Fixtures, Fixture-Gruppen und
Paletten, die sie steuert. Die tatsächlichen Kanalwerte für diese Komponenten legen
Sie mithilfe der Ansichten und der Kanalwerkzeuge im linken Bereich fest; der Editor
selbst verwaltet, welche Komponenten zur Szene gehören und wie sie ein-/ausgeblendet
wird.

## Symbolleiste

* **Name** — der Name der Szene (das Textfeld in der oberen Leiste). Frei bearbeitbar.
* **Zurück** (Pfeil) — kehrt zum vorherigen Editor oder zum Funktionsmanager zurück.
* **Fixture/Gruppe hinzufügen** (Fixture-Symbol mit ＋) — öffnet den Fixture-Gruppen-Manager
  in einem Seitenbereich; ziehen Sie Fixtures oder Gruppen von dort in die Szene.
* **Palette hinzufügen** (Paletten-Symbol mit ＋) — öffnet den Paletten-Manager in einem
  Seitenbereich; ziehen Sie Paletten in die Szene, um deren Werte von einer Palette
  steuern zu lassen.
* **Ausgewählte Elemente entfernen** (－) — entfernt die ausgewählten Komponenten nach
  einer Bestätigung aus der Szene.

## Die Komponentenliste

Der Hauptbereich listet jede Komponente (Fixture, Gruppe oder Palette) in der Szene auf.

* **Klicken** Sie auf eine Komponente, um sie auszuwählen; das Auswählen eines Fixtures
  wählt es auch in den Ansichten aus, sodass Sie dessen Kanalwerte bearbeiten können.
* **Strg+Klick**, um mehrere auszuwählen.
* Sie können Fixtures, Gruppen oder Paletten auch direkt auf die Liste **ziehen**, um sie
  hinzuzufügen.

## Werte festlegen

Um den Look festzulegen, wählen Sie die Fixtures der Szene aus und passen Sie deren
Kanäle mit den **Kanalfähigkeits-Werkzeugen** im linken Bereich an (Intensität, Farbe,
Position usw.) oder verwenden Sie die **DMX-Ansicht**. Die Werte werden beim Ändern in
der Szene gespeichert.

## Kanäle von einem externen Controller steuern

Solange der Szeneneditor geöffnet ist, bietet die Symbolleiste seines unteren Bereichs
zusätzliche Schaltflächen, um die Kanäle der Szene direkt von einem gepatchten
**MIDI**-, **OSC**-, **DMX**- oder **HID**-Controller (Joystick) aus zu steuern — praktisch,
um Werte von Hand einzustellen, anstatt Schieberegler auf dem Bildschirm zu ziehen.

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-sliders fa-2x"></i> **Die Kanäle mit einem externen Controller steuern** | Schaltet die externe Steuerung um. Solange sie aktiviert ist, werden die Fader/Regler des Controllers 1:1 auf die Kanäle der Szene abgebildet, in der Reihenfolge, in der sie in der Konsole erscheinen, und die **virtuelle Konsole empfängt keine Eingaben mehr** von diesem Controller, bis Sie dies ausschalten oder den Editor schließen. |
| ![](/basics/position.svg?resize=48,48) **Pan-&-Tilt-Modus umschalten** | Wird nur angezeigt, solange die externe Steuerung aktiv ist. Schaltet die Zuordnung so um, dass die ersten vier Fader/Regler des Controllers stattdessen **Pan, Pan fein, Tilt und Tilt fein** eines einzelnen Fixtures steuern — praktisch, um einen Moving Head mit echten Fadern statt mit einem [XY Pad](/virtual-console/xy-pad) zu positionieren. |
| <i class="fa fa-angle-left fa-2x"></i> / <i class="fa fa-angle-right fa-2x"></i> **Die Fader-Zuordnung rückwärts / vorwärts verschieben** | Blättert durch die Zuordnung, wenn mehr zu steuern ist, als der Controller Fader bereitstellt. Im normalen Modus ist eine Seite ein Block von Kanälen in der Größe der Faderanzahl des Controllers; im Pan-&-Tilt-Modus ist eine Seite ein einzelnes Fixture. |

Der Kanal, der gerade von einem Controller gesteuert wird, wird in der Konsole
hervorgehoben, sodass Sie auf einen Blick sehen, was jeder physische Fader tut.
Verfügt eines der gepatchten Universen über einen Joystick (HID-Plugin), werden
dessen Achsen erkannt und stehen der Zuordnung ebenfalls zur Verfügung.

## Geschwindigkeit

Der einklappbare Bereich **Geschwindigkeit** legt fest, wie die Szene beim Auslösen
ein-/ausgeblendet wird:

* **Einblenden** — die Zeit, die die Szene braucht, um zu ihren Werten hochzublenden.
* **Ausblenden** — die Zeit, die sie braucht, um beim Stoppen wieder auszublenden.

Doppelklicken Sie auf ein Zeitfeld, oder verwenden Sie die Uhr-Schaltfläche daneben,
um im Zeit-Editor einen Wert einzugeben.

> Wenn eine Szene Teil einer **Sequenz** ist, wird sie über die Registerkarte *Fixtures*
> des Sequenz-Editors bearbeitet und nicht einzeln. Siehe
> [Sequence Editor](../sequence-editor).
