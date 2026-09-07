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
