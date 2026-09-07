---
title: Modi
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

Der Bereich **Modi** enthält alle [Modi](/basics/glossary-and-concepts#fixture-mode),
für die das Fixture konfiguriert werden kann. Jeder Modus ist eine geordnete
Anordnung der im Bereich [Kanäle](../channels) definierten Kanäle, passend zum
Verhalten des Fixtures in diesem Betriebsmodus.

Oben im Bereich befindet sich eine kleine Symbolleiste:

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Neuen Modus hinzufügen** | Erstellt einen neuen Modus und öffnet rechts den [Moduseditor](#moduseditor). |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewählte(n) Modus/Modi entfernen** | Entfernt den ausgewählten Modus. Das Entfernen eines Modus löscht keine Kanäle oder anderen Modi. |

Jeder Modus wird als Zeile mit seinem Namen angezeigt. **Doppelklicken** Sie
auf einen Modus, um ihn im Moduseditor zu öffnen.

## Moduseditor

Der Moduseditor öffnet sich im Panel auf der **rechten** Seite. Er verfügt
über ein **Name**-Feld (der Name jedes Modus muss eindeutig sein) und drei
Bereiche: **Kanäle**, **Emitter** und **Physisch**.

### Kanäle

Hier platzieren Sie die Kanäle des Fixtures in genau der Reihenfolge, in der
das Fixture sie in diesem Modus verwendet.

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewählte(n) Kanal/Kanäle entfernen** | Entfernt die ausgewählten Kanäle aus diesem Modus. Andere Modi bleiben unverändert. |
| <i class="fa fa-2x fa-certificate"></i> **Neuen Emitter erstellen** | Fasst die ausgewählten Kanäle zu einem neuen [Emitter](#emitter) zusammen. |

Um Kanäle zum Modus **hinzuzufügen**, **ziehen** Sie sie aus dem Bereich
[Kanäle](../channels) in diese Liste (ein Bereich „Kanäle hier ablegen“ wird
angezeigt, solange der Modus leer ist). Ziehen Sie Kanäle innerhalb der Liste,
um sie neu anzuordnen — ihre Reihenfolge ist grundlegend für die
Modusdefinition. Die Spalte **Acts on** neben jedem Kanal verknüpft ihn mit
einem anderen Kanal (zum Beispiel einem Kanal, der die Geschwindigkeit eines
rotierenden Gobos steuert).

### Emitter

Emitter (in früheren Versionen *Heads* genannt) ermöglichen es Ihnen, mehrere
Lichtquellen innerhalb eines einzigen Fixtures zu definieren, sodass QLC+ jede
davon einzeln behandeln kann — zum Beispiel in
[Fixture-Gruppen](/basics/glossary-and-concepts#fixture-group) oder den
2D-/3D-Ansichten. Wenn ein Modus nur eine einzige Lichtquelle ansteuert, müssen
keine Emitter definiert werden.

Erstellen Sie einen Emitter im Bereich **Kanäle** des Modus: Wählen Sie die
Kanäle aus, die zu einer einzigen Lichtquelle gehören, und verwenden Sie dann
<i class="fa fa-certificate"></i> **Neuen Emitter erstellen**. Jeder Emitter
wird automatisch nummeriert (#1, #2, …) und listet die ihm zugewiesenen Kanäle
auf.

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-minus" style="color:crimson"></i> **Ausgewählte(n) Emitter entfernen** | Löscht die ausgewählten Emitter. |

Nehmen Sie nur die Kanäle auf, die für die jeweilige Lichtquelle spezifisch
sind. Wenn zum Beispiel drei Köpfe jeweils einen eigenen Dimmer haben, nehmen
Sie den Dimmerkanal in jeden Emitter auf; hat das Fixture einen einzigen
Dimmer für alle Köpfe, lassen Sie ihn weg.

### Physisch

Dieser Bereich enthält dieselben Eigenschaften wie der globale Bereich
[Physisch](../physical). Wählen Sie:

* **Globale Einstellungen verwenden** — der Modus verwendet die globalen
  physikalischen Informationen des Fixtures (Standard).
* **Globale Einstellungen überschreiben** — der Modus hat eigene physikalische
  Werte; die Felder werden bearbeitbar, sodass Sie sie eingeben können.
