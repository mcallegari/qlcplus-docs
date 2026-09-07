---
title: Kanäle
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 20%;
}
table th:nth-of-type(2) {
    width: 80%;
}
</style>

Der Bereich **Kanäle** enthält alle Kanäle, die das Fixture über alle seine
Modi hinweg versteht. Ihre Reihenfolge spielt hier keine Rolle — die Kanäle
werden innerhalb jedes Modus im Bereich [Modi](../modes) in eine bestimmte
Reihenfolge gebracht. Wichtig sind hier der **Name** jedes Kanals und seine
**Fähigkeiten** (seine DMX-Wertebereiche und deren Funktion).

Oben im Bereich befindet sich eine kleine Symbolleiste:

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Neuen Kanal hinzufügen** | Erstellt einen neuen Kanal und öffnet rechts den [Kanaleditor](#kanaleditor). |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewählte(n) Kanal/Kanäle entfernen** | Entfernt die ausgewählten Kanäle aus dem Fixture **und aus allen Modi**. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Kanalassistent** | Erstellt viele ähnliche Kanäle auf einmal (siehe [Fähigkeitsassistent](#fähigkeitsassistent)). |

Klicken Sie auf einen Kanal, um ihn auszuwählen; **doppelklicken** Sie ihn, um
ihn im Kanaleditor zu öffnen. Kanäle können aus dieser Liste in die
Kanalliste eines Modus im Bereich [Modi](../modes) **gezogen** werden.

## Kanaleditor

Der Kanaleditor öffnet sich im Panel auf der **rechten** Seite des Editors. Er
dient zum Bearbeiten eines einzelnen Kanals und der DMX-Wertebereiche jeder
**Fähigkeit** (eine Farbe, ein Gobo, eine Prismenrotation usw.). Die genauen
Kanäle und Wertebereiche entnehmen Sie dem Handbuch Ihres Fixtures (dessen
„DMX-Chart“).

|     |     |
| --- | --- |
| **Name** | Der Kanalname. Wenn Sie ein Kanal-**Preset** auswählen (ein Kanal mit einer einzigen Fähigkeit), wird automatisch ein Name vorgeschlagen, den Sie weiterhin anpassen können. |
| **Preset** | Ein Preset ist eine Abkürzung, die die Erstellung der Definition beschleunigt und der QLC+-Engine die Informationen liefert, die sie benötigt, um einen Kanal zu erkennen und korrekt zu behandeln. Zum Beispiel füllt die Auswahl eines Farb-Presets (Rot, Grün, Blau, …) oder eines Pan/Tilt-Presets alle benötigten Informationen mit einem einzigen Klick aus. Wenn ein Preset ausgewählt ist, wird der Rest des Editors inaktiv. Hat der Kanal mehrere DMX-Bereiche (Fähigkeiten), belassen Sie **Preset** auf „Custom“ und definieren Sie die Fähigkeiten selbst (unten). |
| **Typ** | Die Rolle des Kanals im Fixture. Die Wahl eines Typs legt implizit die Priorität des Kanals fest ([LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence) oder [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence)), daher ist es wichtig, den richtigen Typ zu wählen.<br><br>Die Intensitäts-/Farbtypen folgen der **HTP**-Regel: **Intensity, Red, Green, Blue, Cyan, Magenta, Yellow, White, Amber, UV, Lime und Indigo**.<br>Alle anderen Typen folgen der **LTP**-Regel: **Beam, Colour, Effect, Gobo, Maintenance, Nothing, Pan, Tilt, Prism, Shutter und Speed**.<br><br>**Intensity** wird für Dimmer-/Master-Dimmer-Kanäle verwendet.<br>**Primärfarben** (Red, Cyan, White, …) steuern einzelne Farbkanäle — verwechseln Sie diese nicht mit dem unten beschriebenen Typ „Colour“. Beachten Sie, dass der [Grand Master](/basics/glossary-and-concepts#grand-master) standardmäßig nur Intensity- und Primärfarbkanäle steuert, und das Farbwerkzeug nur verfügbar ist, wenn ein Fixture primäre RGBAWUV-/CMY-Farbkanäle bereitstellt.<br>Der Typ **Colour** steuert ein festes Farbrad oder vordefinierte Farbmakros — weisen Sie ihm *keine* einzelnen RGBAW-/CMY-Kanäle zu.<br>Der Typ **Gobo** steuert die Goboradposition oder -indizierung.<br>Der Typ **Speed** steuert etwas Geschwindigkeitsbezogenes (Gobo-Rotation, Regenbogengeschwindigkeit, …).<br>Der Typ **Prism** steuert ein Prisma.<br>Der Typ **Shutter** steuert einen Shutter, Strobe oder eine Iris.<br>Der Typ **Beam** steuert einen Strahlformer (z. B. einen Zoom).<br>Der Typ **Effect** steuert etwas, das in keine der anderen Gruppen passt.<br>Der Typ **Maintenance** steuert Funktionen wie Reset oder einen Kühlventilator.<br>Der Typ **Nothing** ist ein Kanal-Platzhalter.<br>Die Typen **Pan** und **Tilt** steuern die Pan-/Tilt-Bewegung (X/Y) von Moving Heads oder Lasern. |
| **Rolle** | Gilt für Kanalpaare, die 16-Bit-Werte bilden, üblicherweise **Pan** oder **Tilt** (manche neueren Fixtures unterstützen auch 16-Bit-Dimmer, RGB, Gobo oder Fokus).<br>Für 8-Bit-Werte (ein Kanal pro Funktion) weisen Sie das Steuerbyte **Coarse (MSB)** zu. Für 16-Bit-Werte (zwei Kanäle pro Funktion) weisen Sie dem groben Kanal **Coarse (MSB)** und dem feinen Kanal **Fine (LSB)** zu. Im Zweifelsfall verwenden Sie **Coarse (MSB)**. |
| **Standardwert** | Der DMX-Wert (0–255), auf den der Kanal beim Einschalten gesetzt wird. Zum Beispiel zentrieren manche Moving Heads ihr Pan/Tilt, was einem Anfangswert von 127 entspricht. |
| **Fähigkeiten** | Die Liste der DMX-Wertebereiche für den Kanal, jeweils mit einem **Von**-Wert, einem **Bis**-Wert und einer **Beschreibung**. Bietet ein Kanal nur eine Fähigkeit (z. B. Pan oder Dimmer), verwenden Sie stattdessen ein Kanal-Preset. Für umfangreichere Kanäle (Farben, Gobos) erstellen Sie für jeden Eintrag einen Bereich (z. B. 0–15 Weiß, 16–32 Blau …). Klicken Sie auf Von/Bis/Beschreibung einer Zeile, um sie zu bearbeiten; mit **Tab** wechseln Sie zwischen den Feldern und zur nächsten Zeile. Ein ⚠-Warnsymbol erscheint bei einer Zeile, deren Beschreibung leer ist oder deren Bereich sich mit einem anderen überschneidet. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> | **Löscht die ausgewählten Fähigkeiten** aus dem Kanal. |
| <i class="fa fa-2x fa-palette" style="color:yellow"></i> | **Automatische Farbzuweisung** — füllt bei einem Farbkanal automatisch die Standard-Farbfähigkeiten aus. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> | **Fähigkeitsassistent** — erstellt mehrere gleich große Fähigkeiten auf einmal (siehe unten). |

### Fähigkeits-Preset

Jeder Fähigkeit kann ein **Preset** zugewiesen werden, das der QLC+-Engine mehr
über diesen DMX-Wertebereich mitteilt. Je nach Preset-Typ erscheinen
zusätzliche Felder:

* **ColorMacro** — wählt eine einzelne Farbe aus (typischerweise bei Farbrädern
  verwendet).
* **ColorDoubleMacro** — wählt zwei Farben aus, um eine Zwischenposition eines
  Farbrads darzustellen.
* **GoboMacro** — wählt ein Gobo-Bild aus, das angezeigt wird, wenn dieser
  Bereich aktiv ist.
* **StrobeFrequency** — gibt eine genaue Stroboskopfrequenz in Hertz ein.
* **StrobeFreqRange** — gibt eine minimale und maximale Frequenz (in Hertz) für
  einen Stroboskopbereich ein.
* **Alias** — ein spezielles Preset, das angibt, dass beim Aktivsein dieses
  Bereichs ein Kanal ersetzt werden soll. Siehe den Bereich
  [Aliase](../aliases).

Ein **Vorschau**- oder **Wert(e)**-Feld neben dem Preset ermöglicht das
Festlegen der zugehörigen Farbe(n), des Gobo-Bilds oder der Frequenzwert(e).

## Fähigkeitsassistent

Der Fähigkeitsassistent erstellt schnell mehrere gleich große
Fähigkeitsbereiche. Dies betrifft üblicherweise feste Farben, Gobo-Indizes und
Makrokanäle.

|     |     |
| --- | --- |
| **Start** | Der Startwert für die neuen Fähigkeiten. Passen Sie ihn an, um bereits vorhandene Fähigkeiten am Anfang des Kanalwertebereichs zu überspringen. |
| **Breite** | Die Größe jedes Wertebereichs. |
| **Anzahl** | Die Anzahl der zu erstellenden Fähigkeiten. |
| **Name** | Der gemeinsame Name für jede Fähigkeit. Verwenden Sie eine Raute `#`, um zu markieren, wo eine Indexnummer eingefügt wird (z. B. erstellt „Gobo #“ Gobo 1, Gobo 2, Gobo 3 …). |
| **Beispiel** | Wird aktualisiert, während Sie die Parameter ändern, und zeigt eine Vorschau der zu erstellenden Fähigkeiten. |
