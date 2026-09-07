---
title: 'EFX-Editor'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

Ein **EFX** (Effekt) bewegt Fixtures automatisch entlang eines mathematischen Pfads — Kreise, Achten, Linien und andere Formen. Es ist die schnellste Methode, um Pan/Tilt-Bewegungseffekte (sowie Dimmer- oder RGB-Effekte) über viele Fixtures gleichzeitig zu erzeugen. Der EFX-Editor öffnet sich im rechten Bereich des Arbeitsbereichs [Fixtures and Functions](/fixtures-and-functions).

## Vorschau

Eine große **Vorschau** oben zeigt den Pfad und die Position jedes Fixtures in Echtzeit, während Sie die Einstellungen ändern.

| Aktion | Ergebnis |
|--------|--------|
| **Klick** auf die Vorschau | Wechselt zwischen der flachen (2D-) Ansicht und der Kugelansicht. |
| **Ziehen** in der Kugelansicht | Dreht die Kugel horizontal, damit Sie den Pfad aus einem anderen Winkel betrachten können. |

## Fixtures

Der Bereich **Fixtures** listet die Fixtures (oder Köpfe) auf, die am Effekt beteiligt sind.

| Schaltfläche | Was sie bewirkt |
|--------|--------------|
| <i class="fa fa-2x fa-arrow-down-wide-short"></i> **Versatz für alle Fixtures festlegen** | Öffnet ein Popup, um die Fixtures in einem Schritt entlang des Pfads zu verteilen (siehe unten). |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Fixture/Kopf hinzufügen** | Öffnet den Fixture-Gruppen-Manager in einem Seitenbereich. Ziehen Sie Universen, Gruppen, Fixtures oder einzelne Köpfe auf den Ablagebereich unterhalb der Liste. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewählte(n) Fixture-Kopf/Köpfe entfernen** | Entfernt die ausgewählten Köpfe aus dem Effekt (nach Bestätigung). |

### Versatz-Popup

| Einstellung | Bedeutung |
|---------|---------|
| **Offset** | Der Versatzwert in Grad (0–360). |
| **Increasing** | Gibt jedem Fixture einen zunehmend größeren Versatz, sodass sie sich entlang der Form gegenseitig jagen, statt sich gemeinsam zu bewegen. |
| **Randomize** | Gibt jedem Fixture einen zufälligen Versatz. |

**Increasing** und **Randomize** schließen sich gegenseitig aus. Ist keines von beiden aktiviert, wird auf jedes Fixture derselbe Versatz angewendet.

### Die Fixture-Liste

| Spalte | Bedeutung |
|--------|---------|
| **#** | Der Index des Kopfes im Effekt — dies ist die Reihenfolge, die von den Fixture-Reihenfolgen **Serial** und **Asymmetric** verwendet wird. |
| **Fixture** | Der Name des Fixtures oder Kopfes. |
| **Mode** | Was der Effekt für diesen Kopf steuert: **Position** (Pan/Tilt), **Dimmer** oder **RGB**. |
| **Reverse** | Lässt diesen Kopf den Pfad in die entgegengesetzte Richtung durchlaufen. |
| **Start offset** | Wo auf dem Pfad dieser Kopf beginnt, in Grad (0–359). |

Klicken Sie auf eine Zeile, um sie auszuwählen; **Strg+Klick** oder **Umschalt+Klick**, um vor dem Entfernen mehrere auszuwählen.

## Pattern

Der Bereich **Pattern** definiert die Form und wie sie sich im Raum positioniert.

| Einstellung | Bedeutung |
|---------|---------|
| **Pattern** | Die Grundform: **Circle**, **Eight**, **Line**, **Line2**, **Diamond**, **Square**, **SquareChoppy**, **SquareTrue**, **Leaf** oder **Lissajous**. |
| **Relative movement** | Führt den Effekt relativ zur aktuellen Position jedes Fixtures aus, statt von einem absoluten Mittelpunkt aus. Blendet die X/Y-Versatzfelder aus. |
| **Width** | Horizontale Größe der Form (0–127). |
| **Height** | Vertikale Größe der Form (0–127). |
| **X offset** | Verschiebt den Mittelpunkt der Form horizontal (0–255). Nur im Absolutmodus. |
| **Y offset** | Verschiebt den Mittelpunkt der Form vertikal (0–255). Nur im Absolutmodus. |
| **Rotation** | Dreht die gesamte Form (0–359°). |
| **Start offset** | Verschiebt den Punkt der Form, an dem der Pfad beginnt (0–360°). |
| **Enable dimmer control** | Lässt den EFX auch die Fixture-Intensität steuern. Standardmäßig deaktiviert; in diesem Fall animiert der EFX nur Pan/Tilt. |

### Lissajous-Parameter

Diese vier Felder erscheinen nur, wenn das Pattern **Lissajous** ausgewählt ist; sie bestimmen die Mathematik, die die komplexeren Figuren erzeugt.

| Einstellung | Bedeutung |
|---------|---------|
| **X frequency** | Anzahl der horizontalen Schwingungen pro Zyklus (0–32). |
| **Y frequency** | Anzahl der vertikalen Schwingungen pro Zyklus (0–32). |
| **X phase** | Horizontale Phasenverschiebung (0–360°). |
| **Y phase** | Vertikale Phasenverschiebung (0–360°). |

Das Ändern des Verhältnisses zwischen X- und Y-Frequenz verwandelt die Figur von einem einfachen Kreis in die klassischen Lissajous-Knoten.

## Geschwindigkeit

Der Bereich **Geschwindigkeit** legt die Zeitsteuerung des Effekts fest. **Doppelklicken** Sie auf ein Zeitfeld, oder verwenden Sie die Schaltfläche <i class="fa fa-2x fa-clock"></i> daneben, um den Zeit-Editor zu öffnen.

| Einstellung | Bedeutung |
|---------|---------|
| **Fade in** | Zeit, um den Effekt beim Start einzublenden. |
| **Loop** | Die Dauer eines vollständigen Zyklus entlang des Pfads. |
| **Fade out** | Zeit zum Ausblenden beim Stoppen. |

## Reihenfolge und Richtung

### Ausführungsreihenfolge

| Symbol | Modus | Verhalten |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Wiederholt den Pfad fortlaufend. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Läuft einen vollständigen Zyklus und stoppt dann. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Läuft den Pfad vorwärts, dann rückwärts, und wiederholt sich. |

### Richtung

| Symbol | Modus | Verhalten |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Durchläuft den Pfad in normaler Richtung. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Durchläuft den Pfad in entgegengesetzter Richtung. |

### Fixture-Reihenfolge

| Symbol | Modus | Verhalten |
|------|------|-----------|
| **P** | **Parallel** | Alle Fixtures durchlaufen den Pfad gemeinsam (ihr **Start offset** verteilt sie weiterhin). |
| **S** | **Serial** | Die Fixtures werden gleichmäßig entlang des Pfads verteilt, eines nach dem anderen, in Listenreihenfolge. |
| **A** | **Asymmetric** | Die Fixtures werden wie bei Serial verteilt, aber jedes zweite Fixture läuft in die entgegengesetzte Richtung. |
