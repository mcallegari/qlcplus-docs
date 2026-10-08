---
title: 'Slider Matrix'
date: '03:07 22-08-2023'
---

Eine **Slider Matrix** ist eine schnelle Möglichkeit, auf einmal eine ganze
**Bank von Schiebereglern** zu erstellen, anstatt sie einzeln hinzuzufügen. Sie
gehört zur [virtuellen Konsole](/virtual-console) und eignet sich ideal für
Layouts mit einem Kanal pro Fader, Gruppen von Submastern oder jede Reihe von
Fadern, die Sie zusammen anordnen möchten.

Eine Slider Matrix ist kein eigener Widget-Typ: Sie erstellt einen
[Frame](../frame) (oder [Solo Frame](../solo-frame)), der mit einem Raster aus
[Schiebereglern](../slider) gefüllt ist. Nach der Erstellung wird jeder
Schieberegler einzeln konfiguriert, und der umgebende Frame verhält sich wie
jeder andere Frame.

## Erstellen

Ziehen Sie **Slider Matrix** aus der Widget-Liste auf die Seite. Ein Dialog
**Widget-Matrix einrichten** erscheint, in dem Sie Folgendes festlegen:

* **Spalten** — die Anzahl der Schieberegler in der Breite (1–99).
* **Zeilen** — die Anzahl der Schieberegler in der Höhe (1–99).
* **Breite / Höhe** — die Größe jedes einzelnen Schiebereglers, in Pixeln
  (Schieberegler sind standardmäßig hoch und schmal).
* **Frame-Typ** — ob die Schieberegler in einem **normalen** Frame oder einem
  **Solo**-Frame liegen:
  * **Normal** — die Schieberegler sind unabhängig voneinander (die übliche
    Wahl).
  * **Solo** — es spielt jeweils nur die Funktion eines Schiebereglers (siehe
    [Solo Frame](/virtual-console)).

Bestätigen Sie, um die Bank zu erstellen.

## Nach der Erstellung

* Jede Zelle ist ein gewöhnlicher [Schieberegler](../slider) — wählen Sie im
  Bearbeitungsmodus einen aus, um seinen Modus (Pegel, Submaster usw.) sowie
  die Kanäle oder das Attribut festzulegen, das er steuert.
* Die Bank befindet sich in einem [Frame](../frame), sodass Sie den gesamten
  Block gemeinsam verschieben, in der Größe ändern, beschriften und auf
  Seiten verteilen können. Fügen Sie dem Frame einen **Submaster**-Schieberegler
  hinzu, um einen Gesamtpegel über die ganze Bank zu legen.

## Tipps

* Bauen Sie eine Reihe von **Pegel**-Schiebereglern, um ein einfaches Pult mit
  einem Kanal pro Fader zu erstellen.
* Halten Sie zusammengehörige Schieberegler in einem Frame und fügen Sie einen
  **Submaster** hinzu, um sie alle mit einem einzigen Fader zu fahren.
