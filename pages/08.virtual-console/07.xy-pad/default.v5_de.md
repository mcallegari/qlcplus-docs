---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

Ein **XY Pad** ist eine Zweiachsen-Steuerung für **Pan und Tilt** — ziehen Sie
den Cursor über das Pad und die zugewiesenen bewegten Fixtures folgen. Es ist
die natürliche Art, Moving Heads und Scanner von Hand über die
[virtuelle Konsole](/virtual-console) zu positionieren.

Die horizontale Achse des Pads steuert **Pan**, die vertikale Achse steuert
**Tilt**. Der gesamte Bereich repräsentiert den kompletten Bewegungsumfang, den
Ihre Fixtures erreichen können: der linke Rand ist minimaler Pan, der rechte
Rand maximaler Pan, der obere Rand minimaler Tilt und der untere Rand
maximaler Tilt.

## Widget-Elemente

|     |     |
| --- | --- |
| **Bereichsregler** | Die zweigriffigen Schieberegler oben und links. Sie definieren das **Bereichsfenster**: den Teil des Pads, in dem sich der Cursor bewegen darf. |
| **Hauptbereich** | Der dunkle Bereich in der Mitte, der alle möglichen X/Y-Positionen repräsentiert. |
| **Bereichsfenster** | Das halbtransparente cyanfarbene Rechteck, das über dem Hauptbereich eingezeichnet wird und die mit den Bereichsreglern eingestellten Grenzen markiert. Es wird ausgeblendet, wenn die Bereichsregler den vollen Bereich abdecken. |
| **Cursor** | Der hervorgehobene runde Griff. Ziehen Sie ihn mit der Maus/per Touch, mit den Wertschiebereglern, oder bewegen Sie ihn von einem externen Controller aus. |
| **Fixture-Positionspunkte** | Die kleinen gelben Punkte, die zeigen, wo sich jeder gesteuerte Fixture-Kopf tatsächlich befindet, ausgelesen aus dem DMX-Ausgang. Sie zeigen Fixtures, die dem Cursor hinterherhinken (Pan-/Tilt-Geschwindigkeit, Überblendungen) oder die auf einen engeren Bereich begrenzt sind. |
| **Wertschieberegler** | Die eingriffigen Schieberegler unten und rechts. Sie legen die X- und Y-Position unabhängig voneinander fest, was für präzise Anpassungen einer einzelnen Achse praktisch ist. |
| **Voreinstellungen** | Die Reihe von Schaltflächen unter dem Pad, die nur angezeigt wird, wenn mindestens eine Voreinstellung hinzugefügt wurde. Eine aktive Voreinstellungs-Schaltfläche wird hervorgehoben. |

## Fixtures hinzufügen

Fixtures werden über die **Einstellungen** des Widgets im Abschnitt
**Fixtures** hinzugefügt:

* Klicken Sie auf die Schaltfläche <i class="fa fa-2x fa-plus" style="color:limegreen"></i>
  **Fixture/Kopf hinzufügen**, um das Fixture-Seitenpanel zu öffnen, und
  **ziehen** Sie dann Elemente auf den Ablagebereich darunter.
* Sie können ein **Universum**, eine **Fixture-Gruppe**, ein **Fixture** oder
  einen einzelnen **Kopf** ablegen. Universen, Gruppen und Fixtures werden zu
  ihren einzelnen Köpfen expandiert, und bereits in der Liste vorhandene Köpfe
  werden nicht doppelt hinzugefügt.
* Jede Zeile zeigt den **Namen** des Kopfes sowie seinen aktuellen
  **X-Achsen-Bereich** und **Y-Achsen-Bereich**, in den Einheiten des aktuellen
  Bereichsanzeigemodus. Eine umgekehrte Achse ist mit **(R)** markiert.
* Köpfe ohne Pan- oder Tilt-Kanal können hinzugefügt werden, erzeugen aber
  einfach keine Ausgabe — das Pad steuert nur die Pan-/Tilt-Kanäle, die es
  findet.

Wählen Sie Zeilen in der Liste aus (mit Strg/Umschalt für Mehrfachauswahl), um
mit den Schaltflächen <i class="fa fa-2x fa-pencil"></i> und
<i class="fa fa-2x fa-minus" style="color:crimson"></i> derselben Symbolleiste
darauf einzuwirken.

## Bewegung einschränken

Es gibt zwei unabhängige Möglichkeiten, um zu verhindern, dass Ihre Fixtures
dahin zeigen, wo sie es nicht sollten — zur Decke, ins Publikum oder von der
Bühne herunter. Sie können zusammen verwendet werden.

### 1. Das Bereichsfenster (Bereichsregler)

Die oberen und linken **Bereichsregler** begrenzen den Bereich, in dem das Pad
arbeitet. Ein halbtransparentes cyanfarbenes Rechteck markiert das daraus
resultierende **Bereichsfenster** über dem Hauptbereich.

* Beim Ziehen mit der Maus wird der Cursor auf das Fenster **begrenzt**: er
  verlässt es nicht, auch wenn Sie außerhalb ziehen.
* Beim Bewegen des Pads von einem **externen Controller** aus wird der
  eingehende Wert stattdessen auf das Fenster **skaliert**. Der volle Weg
  eines physischen Faders wird auf das verkleinerte Fenster abgebildet, sodass
  Sie dort, wo es wichtig ist, mehr Feinfühligkeit erhalten, und das an den
  Controller zurückgesendete Feedback wird auf die gleiche Weise skaliert.
* Das Bereichsfenster ist eine Eigenschaft des *Pads*, nicht der Fixtures: es
  gilt für alle gesteuerten Köpfe gleichzeitig.

### 2. Pan-/Tilt-Bereich pro Fixture

Wählen Sie einen oder mehrere Köpfe in der **Fixtures**-Liste aus und klicken
Sie auf die Schaltfläche <i class="fa fa-2x fa-pencil"></i> **Pan-/Tilt-Bereich
der ausgewählten Fixture-Köpfe festlegen**. Ein Dialog lässt Sie sowohl für
**Pan** als auch für **Tilt** Folgendes festlegen:

|     |     |
| --- | --- |
| **Minimum** | Anfang des nutzbaren Bereichs für diesen Kopf. |
| **Maximum** | Ende des nutzbaren Bereichs für diesen Kopf. |
| **Umkehren** | Kehrt die Richtung dieser Achse für diesen Kopf um. |

Der gesamte Hauptbereich wird immer genutzt, und der Bereich jedes Kopfes wird
**darauf skaliert**. Das ist es, was ein gemischtes Rig konsistent verhalten
lässt: ein Fixture mit 540° Pan-Bereich kann so eingestellt werden, dass es
sich genau wie eines mit 360° bewegt, sodass alle Köpfe auf dieselbe Stelle
zeigen, wenn sich der Cursor an derselben Position befindet.

Wenn Sie zum Beispiel das Pan-Minimum auf 20 % und das Maximum auf 80 %
setzen, gibt der Cursor am linken Rand 20 % (DMX 51) aus, am rechten Rand
80 % (DMX 204), und alles dazwischen wird proportional skaliert.

> Die Werte in diesem Dialog werden in den Einheiten des aktuellen
> **Bereichsanzeigemodus** (siehe unten) ausgedrückt: Grad, Prozentsatz oder
> DMX. Wenn mehrere Köpfe ausgewählt sind, zeigt der Dialog den Bereich des
> zuerst ausgewählten Kopfes, und im Grad-Modus ist der maximal zulässige Wert
> der kleinste Bereich innerhalb der Auswahl, sodass die eingegebenen Werte für
> jeden ausgewählten Kopf gültig sind. Ein Klick auf OK wendet denselben
> Bereich auf alle an.

## Einstellungen

### Anzeigeeigenschaften

* **Invertierte Y-Achse** — kehrt die vertikale Achse um, sodass der maximale
  Tilt-Wert oben am Pad statt unten erreicht wird. Nützlich für Fixtures, die
  kopfüber an einer Traverse montiert sind.

### Bereichsanzeigemodus

Legt die Einheiten fest, die bei der Anzeige und Bearbeitung der
Pan-/Tilt-Bereiche der Fixtures verwendet werden:

* **Grad** — die physischen Winkel aus der Fixture-Definition. Nur sinnvoll
  für Fixtures, deren Definition einen Pan-/Tilt-Bereich angibt.
* **Prozentsatz** — 0–100 % der vollen Bewegungsweite des Fixtures.
* **DMX** — rohe DMX-Werte, 0–255.

Das Ändern des Modus ändert nicht die gespeicherten Bereiche, sondern nur die
Art ihrer Anzeige und Eingabe.

### Fixtures

Die Liste der vom Pad gesteuerten Köpfe mit ihrer Symbolleiste:

|     |     |
| --- | --- |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Fixture/Kopf hinzufügen** | Öffnet das Fixture-Seitenpanel und den Ablagebereich, um Universen, Gruppen, Fixtures oder einzelne Köpfe hinzuzufügen. |
| <i class="fa fa-2x fa-pencil"></i> **Pan-/Tilt-Bereich der ausgewählten Fixture-Köpfe festlegen** | Öffnet den Pan-/Tilt-Bereichsdialog für den/die ausgewählten Kopf/Köpfe. Siehe *Pan-/Tilt-Bereich pro Fixture* oben. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewählte Fixture-Köpfe entfernen** | Entfernt den/die ausgewählten Kopf/Köpfe vom Pad. |

## Voreinstellungen

Voreinstellungen werden als Schaltflächen unter dem Pad angezeigt und
ermöglichen den Zugriff auf Positionen, Effekte und Fixture-Untergruppen mit
einem Tastendruck. Sie werden auf der Registerkarte **Voreinstellungen** der
Widget-Einstellungen verwaltet.

|     |     |
| --- | --- |
| ![](/basics/position.svg?resize=48,48) **Positionsvoreinstellung** | Speichert die aktuelle Cursor-XY-Position als Voreinstellung. Der Standardname sind die X/Y-Koordinaten zum Zeitpunkt der Erstellung. |
| ![](/basics/functions.svg?resize=48,48) **Szenen-/EFX-Funktionsvoreinstellung** | Öffnet das Funktionsmanager-Seitenpanel; legen Sie ![](/basics/scene.svg?resize=48,48) [Szenen](/basics/glossary-and-concepts#scene)- oder ![](/basics/efx.svg?resize=48,48) [EFX](/basics/glossary-and-concepts#efx)-Funktionen auf den Ablagebereich ab, um sie in Voreinstellungen umzuwandeln. Der Standardname ist der Funktionsname. Szenen ohne Pan- oder Tilt-Kanal werden abgelehnt. |
| ![](/basics/group.svg?resize=48,48) **Fixture-Gruppen-Voreinstellung** | Öffnet das Fixture-Seitenpanel; legen Sie Universen, Gruppen, Fixtures oder Köpfe ab, um eine Fixture-Gruppen-Voreinstellung zu erstellen. Nur Köpfe, die bereits vom Pad gesteuert werden, werden übernommen. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewählte Voreinstellung entfernen** | Löscht die ausgewählte Voreinstellung. |
| <i class="fa fa-2x fa-arrow-up"></i> / <i class="fa fa-2x fa-arrow-down"></i> **Ausgewählte Voreinstellung nach oben / unten verschieben** | Ordnet die ausgewählte Voreinstellung neu, was auch die Reihenfolge der Schaltflächen unter dem Pad ist. |
| **Voreinstellungsname** | Benennt die ausgewählte Voreinstellung um. Der Name ist das, was auf der Schaltfläche erscheint. |

### Voreinstellungstypen und Verhalten

Es kann jeweils nur **eine Voreinstellung** aktiv sein. Das Aktivieren einer
Voreinstellung deaktiviert automatisch die vorherige.

* ![](/basics/position.svg?resize=48,48) **Position** — ein Klick auf die
  Schaltfläche bewegt den Cursor zur gespeicherten Position. Das Pad
  funktioniert danach normal weiter, sodass Sie die Position von dort aus von
  Hand nachjustieren können.
* ![](/basics/efx.svg?resize=48,48) **EFX** — startet die
  [EFX](/function-manager/efx-editor)-Funktion. Klicken Sie erneut auf die
  Schaltfläche (oder aktivieren Sie eine andere Voreinstellung), um sie zu
  stoppen. Während der EFX läuft, zeigen die Fixture-Positionspunkte, wie
  sich die Fixtures entlang des Musters bewegen.
* ![](/basics/scene.svg?resize=48,48) **Szene** — startet die
  [Szenen](/function-manager/scene-editor)-Funktion, die ihre eigenen
  Pan-/Tilt-Werte setzt. Erneut klicken, um sie zu stoppen.
  > Beachten Sie, dass die **gesamte** Szene gestartet wird, einschließlich
  > Farben, Dimmer und allem anderen. Es empfiehlt sich, dedizierte Szenen zu
  > erstellen, die nur Pan- und Tilt-Kanäle enthalten, um sie als
  > XY-Pad-Voreinstellungen zu verwenden.
* ![](/basics/group.svg?resize=48,48) **Fixture-Gruppe** — beschränkt das Pad
  auf eine **Untergruppe** der von ihm gesteuerten Köpfe: solange aktiv,
  folgen nur diese Köpfe dem Cursor, die anderen halten ihre Position. Erneut
  klicken, um die Beschränkung aufzuheben und wieder alle Köpfe zu steuern.
  Die Liste zeigt, wie viele Köpfe die Voreinstellung enthält.

## Externe Eingabe

Wie jedes Widget der virtuellen Konsole kann das XY Pad von MIDI, OSC,
DMX-Eingang oder jeder anderen unterstützten Eingabe gesteuert werden. Die
folgenden Steuerelemente können in der Eingabekonfiguration des Widgets
zugewiesen werden:

|     |     |
| --- | --- |
| **Pan / Horizontale Achse** | Grobe horizontale (Pan-)Position. Wird auf das Bereichsfenster skaliert, sofern eines eingestellt ist. |
| **Pan fein** | Feine (LSB) horizontale Position, für Fixtures mit 16-Bit-Pan. |
| **Tilt / Vertikale Achse** | Grobe vertikale (Tilt-)Position. Wird auf das Bereichsfenster skaliert, sofern eines eingestellt ist. |
| **Tilt fein** | Feine (LSB) vertikale Position, für Fixtures mit 16-Bit-Tilt. |
| **Breite** | Reserviert für die Breite des Bereichsfensters. |
| **Höhe** | Reserviert für die Höhe des Bereichsfensters. |
| **Voreinstellung: &lt;Name&gt;** | Für jede Voreinstellung wird ein Eintrag erstellt. Das Senden eines Maximalwerts (Tastendruck) aktiviert oder schaltet diese Voreinstellung um, genau wie ein Klick auf ihre Schaltfläche. |

Immer wenn sich die Position durch etwas *anderes* als eine externe Eingabe
ändert — ein Ziehen mit der Maus, ein Voreinstellungsabruf, ein Rückgängig —
sendet das Pad ein **Feedback** mit der aktuellen Position. Absolute/motorisierte
Fader folgen dem Cursor, und Encoder erhalten ihren internen Wert neu gesetzt,
sodass sie relativ zur tatsächlichen Position weiterarbeiten. Feedback wird
nicht zurückgesendet, während der Controller selbst das Pad bewegt, sodass
keine Feedback-Schleife entsteht.

## Tipps

* Legen Sie **X/Y-Bereiche pro Fixture** fest, damit ein gemischtes Rig aus
  Moving Heads alle auf dieselbe Stelle zeigen, wenn der Pad-Cursor zentriert
  ist.
* Verwenden Sie das **Bereichsfenster**, um ein XY Pad sicher innerhalb des
  Bühnenbereichs zu halten und gleichzeitig auf einem externen Controller
  Faderauflösung zu gewinnen.
* Speichern Sie häufig genutzte Positionen als **Positionsvoreinstellungen**
  für den sofortigen Abruf während einer Show, und ordnen Sie sie so an, dass
  die am häufigsten verwendeten zuerst kommen.
* Fügen Sie einem einzigen Pad **Fixture-Gruppen-Voreinstellungen** hinzu,
  anstatt mehrere Pads zu erstellen: ein Tastendruck wählt aus, welche Köpfe
  Sie ansteuern.
* Beobachten Sie die **Fixture-Positionspunkte**, um zu prüfen, ob jeder Kopf
  wirklich die Position erreicht hat — Köpfe, die noch unterwegs sind oder
  einen engeren Bereich haben, sind sofort sichtbar.
