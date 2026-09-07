---
title: 'RGB Matrix Editor'
date: '12:24 21-08-2023'
media_order: blending.png
---

Eine **RGB-Matrix** spielt animierte Muster, Text und Bilder auf einer als Raster angeordneten **Fixture-Gruppe** ab — LED-Panels, Pixelbalken, eine Wand aus PARs und so weiter. Der RGB-Matrix-Editor öffnet sich im rechten Bereich des Arbeitsbereichs [Fixtures and Functions](/fixtures-and-functions), mit einer Live-**Vorschau** der Animation direkt unter der Gruppenauswahl.

## Grundeinstellungen

| Einstellung | Bedeutung |
|---------|---------|
| **Name** | Der Name der Matrix (obere Leiste). |
| **Fixture Group** | Die Fixture-Gruppe, auf der die Matrix abgespielt wird. Das Layout der Gruppe (Zeilen × Spalten) bestimmt das Pixelraster — wählen Sie eine Gruppe aus, bevor etwas angezeigt wird. |
| **Pattern** | Der abzuspielende Animationsalgorithmus: **Text**, **Image**, oder eines der skriptbasierten Muster. Die Auswahl bestimmt, was im Bereich **Parameter** angezeigt wird. |
| ![](/basics/sequence.svg?resize=48,48) **Diese Matrix in eine Sequenz speichern** | Wandelt die laufende Matrix in eine Sequenz von Schritten um, sodass Sie sie wie einen Chaser feinabstimmen oder kürzen können. |
| **Blend mode** | Wie sich die Matrix mit anderer Ausgabe auf denselben Fixtures kombiniert. |
| **Color mode** | Welche Fixture-Fähigkeit von der Matrix gesteuert wird. |
| **Colors** | Die Farbe (oder Farben), die das Muster verwendet — siehe unten. |

### Blend mode

| Modus | Verhalten |
|------|-----------|
| **Default (HTP)** | Der höchste Wert gewinnt gegenüber anderen Funktionen auf denselben Kanälen. |
| **Mask** | Die Matrix wirkt als Maske über dem bereits Vorhandenen. |
| **Additive** | Die Farbe der Matrix wird zur vorhandenen Ausgabe addiert. |
| **Subtractive** | Die Farbe der Matrix wird von der vorhandenen Ausgabe subtrahiert. |

### Color mode

| Modus | Steuert |
|------|--------|
| **Default (RGB)** | Die RGB- (oder CMY-)Kanäle der Fixtures. |
| **White** | Den Weiß-Kanal. |
| **Amber** | Den Amber-Kanal. |
| **UV** | Den UV-Kanal. |
| **Dimmer** | Den Intensitätskanal. |
| **Shutter** | Den Shutter-Kanal. |

### Colors

Die Anzahl der angezeigten Farbfelder hängt vom ausgewählten Muster ab — jedes Muster legt fest, wie viele Farben es akzeptiert, von keiner bis zu fünf. Klicken Sie auf ein Farbfeld, um die Farbauswahl zu öffnen; die Schaltfläche <i class="fa fa-2x fa-xmark" style="color:darkred"></i> neben den Farben 2–5 setzt diese Farbe wieder auf „nicht festgelegt“.

## Parameter

Der Bereich **Parameter** ändert sich vollständig je nach ausgewähltem Muster und wird ausgeblendet, wenn das Muster nichts zu konfigurieren hat.

### Textmuster

| Einstellung | Bedeutung |
|---------|---------|
| **Text** | Die anzuzeigende Nachricht. |
| <i class="fa fa-2x fa-font" style="color:cyan"></i> **Font** | Öffnet eine Schriftartenauswahl für Familie, Größe und Stil. |
| **Animation** | Wie sich der Text bewegt: **Letters** (ein Buchstabe nach dem anderen), **Horizontal**- oder **Vertical**-Scrolling. |
| **Offset X** / **Y** | Verschiebt den Text auf dem Raster (−255 bis 255). |

### Bildmuster

| Einstellung | Bedeutung |
|---------|---------|
| **Image** | Die anzuzeigende Bilddatei. |
| <i class="fa fa-2x fa-image"></i> **Bild auswählen** | Öffnet eine Dateiauswahl. |
| **Animation** | **Static**, **Horizontal**, **Vertical**, oder **Animation** (spielt die Einzelbilder eines animierten GIFs ab). |
| **Offset X** / **Y** | Verschiebt das Bild auf dem Raster (−255 bis 255). |

### Skriptbasierte Muster

Skriptbasierte Muster erzeugen ihre eigenen Steuerelemente: Das Skript deklariert seine Eigenschaften, und QLC+ erzeugt für jede davon ein passendes Label sowie ein Kombinationsfeld, Zahlenfeld, Dezimalfeld oder Textfeld. Was Sie sehen, hängt daher vollständig vom gewählten Skript ab — zum Beispiel die Anzahl der Balken, die Größe einer Form, eine Richtung und so weiter.

## Geschwindigkeit

**Doppelklicken** Sie auf ein Zeitfeld, oder verwenden Sie die Schaltfläche <i class="fa fa-2x fa-clock"></i> daneben, um den Zeit-Editor zu öffnen.

| Einstellung | Bedeutung |
|---------|---------|
| **Steps fade in** | Einblendzeit für jeden Animationsschritt. |
| **Steps hold** | Wie lange jeder Schritt gehalten wird — dies bestimmt das Tempo der Animation. |
| **Steps fade out** | Ausblendzeit für jeden Schritt. |
| **Tempo type** | Ob die Zeiten in **Time** oder in **Beats** gemessen werden, synchronisiert mit dem globalen Tempo. |

## Reihenfolge und Richtung

### Ausführungsreihenfolge

| Symbol | Modus | Verhalten |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Wiederholt die Animation fortlaufend. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Spielt die Animation einmal ab und stoppt dann. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Spielt vorwärts, dann rückwärts, und wiederholt sich. |

### Richtung

| Symbol | Modus | Verhalten |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Spielt die Animationsschritte in normaler Reihenfolge ab. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Spielt die Animationsschritte in umgekehrter Reihenfolge ab. |
