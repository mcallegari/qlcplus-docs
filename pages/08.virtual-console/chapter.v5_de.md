---
title: 'Virtuelle Konsole'
date: '14:21 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Kapitel 7

# Virtuelle Konsole

Die **virtuelle Konsole** ist Ihre individuelle Bedienoberfläche zum Fahren der
Show. Sie bauen sie aus **Widgets** auf — Schaltflächen, Schieberegler,
XY-Pads, Cue-Listen, Uhren und mehr — angeordnet auf einer oder mehreren
**Seiten**, genau so, wie Sie Ihr Rig live bedienen möchten. Kurz gesagt: Im
Rest von QLC+ *erstellen* Sie Funktionen; in der virtuellen Konsole *spielen*
Sie sie.

Sie hat zwei Modi:

* **Betriebsmodus** (Standard) — ein Klick auf Widgets löst sie aus. So wird
  die Konsole während einer Show bedient.
* **Bearbeitungsmodus** — Sie fügen Widgets hinzu, verschieben, verändern die
  Größe und konfigurieren sie.

## Layout

* Eine **Symbolleiste** oben zeigt einen Reiter pro **Seite**; klicken Sie auf
  einen Reiter, um die Seite zu wechseln. Rechts daneben befinden sich ein
  Schalter ![](../basics/grid.svg?resize=24,24) für das **Einrasten**
  (Widgets an einem Raster ausrichten) und **Zoom**-Steuerelemente.
* Der **Seitenbereich** darunter ist die Leinwand, auf der die Widgets liegen.
* Im Bearbeitungsmodus enthält ein **rechtes Panel** die Bearbeitungswerkzeuge.

### Seiten

Die Konsole kann mehrere Seiten haben, jede ihre eigene Fläche mit Widgets —
zum Beispiel eine Seite pro Song oder pro Bühnenbereich.

* **Klicken** Sie auf einen Seitenreiter, um diese Seite anzuzeigen.
* **Rechtsklicken** Sie auf einen Seitenreiter, um sie in ein eigenes Fenster
  **abzutrennen** (praktisch für einen zweiten Bildschirm).
* Eine Seite kann **PIN-geschützt** sein; beim Wechsel zu ihr wird dann nach
  der PIN gefragt.

Einstellungen für Seiten (Größe, PIN, Hinzufügen/Entfernen von Seiten) finden
Sie unter [VC-Seite](/virtual-console/page).

## Rechtes Panel (Bearbeitungswerkzeuge)

| Schaltfläche | Was sie bewirkt |
|--------|--------------|
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Neues Widget hinzufügen** | Öffnet die Widget-Liste; ziehen Sie einen Widget-Typ auf die Seite, um ihn zu erstellen. |
| ![](../basics/edit.svg?resize=48,48) **Bearbeitungsmodus** | Schaltet den Bearbeitungsmodus um (die Schaltfläche zeigt einen blinkenden roten Rand, solange er aktiv ist). Bei ausgewähltem Widget zeigt sie dessen Eigenschaften. |
| ![](../basics/functions.svg?resize=48,48) **Funktionsmanager** | Öffnet die Funktionsliste, sodass Sie Funktionen per Drag & Drop auf Widgets ziehen können, um sie zuzuweisen. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Ausgewählte Widgets entfernen** | Löscht die ausgewählten Widgets. |
| <i class="fa fa-copy fa-2x"></i> **Kopieren** | Kopiert die ausgewählten Widgets in die Zwischenablage. |
| <i class="fa fa-paste fa-2x"></i> **Einfügen** | Fügt die Widgets aus der Zwischenablage auf die Seite ein. Sie können die Einfügen-Schaltfläche auch auf einen Ziel-Frame ziehen, um sie darin einzufügen. |

## Mit Widgets arbeiten

* **Ziehen** Sie einen Widget-Typ aus der Liste auf die Seite, um ihn
  hinzuzufügen. Manche Widgets (Button Matrix, Slider Matrix) fragen zuerst
  nach einer Anzahl von Zeilen und Spalten.
* Im Bearbeitungsmodus **klicken** Sie auf ein Widget, um es auszuwählen
  (Strg-Klick für mehrere), **ziehen** Sie es zum Verschieben, und verwenden
  Sie die Griffe, um die Größe zu ändern.
* **Weisen Sie eine Funktion** einem Widget zu, indem Sie sie aus dem
  Funktionsmanager auf das Widget ziehen.

## Widget-Eigenschaften

Wenn im Bearbeitungsmodus ein Widget ausgewählt ist, zeigt das rechte Panel
dessen Eigenschaften, gegliedert in Registerkarten:

* **Einstellungen** — die eigenen Optionen des Widgets (unten pro Widget
  dokumentiert).
* **Voreinstellungen** — für Widgets, die sie unterstützen (Animation, XY
  Pad, Speed Dial).
* **Externe Steuerungen** — physische Controller und Tastenkombinationen dem
  Widget zuordnen (siehe [Externe Steuerungen](#externe-steuerungen)).

### Grundeigenschaften (alle Widgets)

Jedes Widget teilt einen Abschnitt **Grundeigenschaften**:

* **Beschriftung** — die Bezeichnung des Widgets.
* **Hintergrundfarbe** — die Hintergrundfarbe des Widgets.
* **Vordergrundfarbe** — die Farbe seines Texts/seiner Grafiken.
* **Schriftart** — die für seine Beschriftung verwendete Schriftart.
* **Hintergrundbild** — ein optionales Bild hinter dem Widget.
* **Z-Index** — die Stapelreihenfolge, damit sich überlappende Widgets
  vorhersehbar schichten.
* **Ausrichtung** — wenn mehrere Widgets ausgewählt sind, richten Sie sie
  links / rechts / oben / unten aus.

### Externe Steuerungen

Die Registerkarte **Externe Steuerungen** ordnet dem Widget Eingaben zu,
sodass Sie es von Hardware aus bedienen können. Sie können Folgendes binden:

* eine **externe Eingabe** (ein Fader, eine Taste oder ein Encoder aus einem
  MIDI-/DMX-/OSC-/usw.-Eingabeprofil), oder
* eine **Tastenkombination**.

So kann die virtuelle Konsole von einer physischen Bedienoberfläche oder der
Tastatur statt der Maus gesteuert werden.

## Die Widgets

| Widget | Zweck |
|--------|---------|
| ![](../basics/button.svg?resize=48,48) [Button](/virtual-console/button) | Löst eine Funktion aus (umschalten, flashen, Blackout, …). |
| ![](../basics/buttonmatrix2.png?resize=48,48) [Button Matrix](/virtual-console/button-matrix) | Erstellt ein Raster von Schaltflächen innerhalb eines Frames. |
| ![](../basics/slider.svg?resize=48,48) [Slider](/virtual-console/slider) | Ein Fader für Pegel, Submaster, den Grand Master oder ein Funktionsattribut. |
| ![](../basics/sliders.svg?resize=48,48) [Slider Matrix](/virtual-console/slider-matrix) | Erstellt ein Raster von Schiebereglern innerhalb eines Frames. |
| ![](../basics/knob.svg?resize=48,48) [Knob](/virtual-console/slider) | Eine Drehregler-Variante des Sliders. |
| ![](../basics/animation.svg?resize=48,48) [Animation](/virtual-console/animation) | Spielt eine RGB-Matrix ab und steuert sie mit Live-Farb-/Voreinstellungsänderungen. |
| ![](../basics/speed.svg?resize=48,48) [Speed Dial](/virtual-console/speed-dial) | Stellt das Timing von Funktionen ein und multipliziert es. |
| ![](../basics/xypad.svg?resize=48,48) [XY Pad](/virtual-console/xy-pad) | Zweiachsen-Pan-/Tilt-Steuerung für bewegte Fixtures. |
| ![](../basics/cuelist.svg?resize=48,48) [Cue List](/virtual-console/cue-list) | Spielt einen Chaser Cue für Cue ab, wie ein theatralischer Cue-Stapel. |
| ![](../basics/frame.svg?resize=48,48) [Frame](/virtual-console/frame) | Ein Container, der Widgets gruppiert. |
| ![](../basics/soloframe.svg?resize=48,48) [Solo Frame](/virtual-console/solo-frame) | Ein Container, der sicherstellt, dass jeweils nur eine seiner Funktionen läuft. |
| ![](../basics/label.svg?resize=48,48) [Label](/virtual-console/label) | Eine statische Textbeschriftung zum Betiteln und Gruppieren. |
| ![](../basics/audiotriggers.svg?resize=48,48) [Audio Triggers](/virtual-console/audio-triggers) | Steuert Funktionen/Pegel anhand von Live-Audioanalyse. |
| ![](../basics/clock.svg?resize=48,48) [Clock](/virtual-console/clock) | Eine Uhr, Stoppuhr oder ein Countdown, der Funktionen zeitlich planen kann. |
