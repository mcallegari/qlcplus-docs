---
title: 'DMX View'
date: '13:59 27-06-2026'
taxonomy:
    category:
        - docs
---

Die **DMX View** zeigt Ihre Fixtures als fließende Liste von Panels, eines pro
Fixture, jedes mit seinen einzelnen Kanälen und deren **Live-Werten**. Sie
ist die beste Ansicht, um zu prüfen, was jeder Kanal gerade ausgibt, und um
einen einzelnen Kanal von Hand einzustellen.

Sie ist eine der vier Ansichten, die über die Symbolleiste oben im
[Fixtures and Functions](/fixtures-and-functions)-Arbeitsbereich verfügbar sind. Verwenden Sie die
**Universumsauswahl** in dieser Symbolleiste, um die Ansicht auf ein Universum zu beschränken.

## Die Fixture-Panels

Jedes Fixture wird als kleines Panel dargestellt, das seine Kanäle auflistet. Für jeden Kanal
sehen Sie seinen aktuellen DMX-Wert (0–255), der live aktualisiert wird, sobald sich die Ausgabe ändert —
egal ob durch Ihre manuelle Steuerung, eine laufende Funktion oder eine externe Eingabe.

Die Panels füllen die verfügbare Breite und brechen bei Bedarf in neue Zeilen um.
Verwenden Sie die Bildlaufleisten (oder die **Zoom**-Schaltflächen in der Symbolleiste), wenn Sie viele
Fixtures haben.

## Einen Kanalwert ändern

Klicken Sie auf einen Kanal, um ein Steuerwerkzeug dafür zu öffnen. Je nach Kanaltyp
ist dies ein Schieberegler oder eine Preset-Auswahl, mit der Sie den Wert dieses einzelnen Kanals
direkt einstellen können. Der neue Wert wird sofort an die Ausgabe gesendet.

Dies ist eine schnelle Möglichkeit, einen einzelnen Kanal zu testen oder einen Wert leicht anzupassen, ohne
die vollständigen Capability-Werkzeuge im linken Panel zu öffnen.

## Ansichtseinstellungen

Klicken Sie auf die Schaltfläche **Settings** (das „Balken“-Symbol) in der Symbolleiste, um das Einstellungsfenster der DMX
View rechts zu öffnen. Es enthält einen Abschnitt **Channels**, der steuert,
wie jeder Kanal in den Fixture-Panels beschriftet wird:

* **Show addresses** — wenn aktiviert, zeigt jeder Kanal seine DMX-Adressnummer
  über dem Wert an. Deaktivieren Sie dies für eine kompaktere Darstellung, die nur die
  Kanalwerte zeigt.
* **Relative addresses** — legt fest, wie diese Adressen nummeriert werden (nur
  relevant, wenn **Show addresses** aktiviert ist):
  * **Aus** — Kanäle zeigen ihre **absolute** DMX-Adresse im Universum an. Bei
    einem an Adresse 10 gepatchten Fixture werden seine Kanäle mit 11, 12, 13, …
    beschriftet (die Startadresse des Fixtures plus der Kanal-Offset).
  * **Ein** — Kanäle zeigen ihre Adresse **relativ zum Fixture** an, immer
    beginnend bei 1. Die Kanäle desselben Fixtures werden mit 1, 2, 3, …
    beschriftet, unabhängig davon, wo es gepatcht ist.

  Verwenden Sie absolute Adressen, wenn Sie mit dem übereinstimmen müssen, was das Pult oder ein
  Patch-Plan angibt; verwenden Sie relative Adressen, wenn es Ihnen auf die Position eines Kanals
  innerhalb des Fixtures selbst ankommt.

## Fixtures auswählen

Das Auswählen von Fixtures funktioniert hier zusammen mit dem Rest des Arbeitsbereichs: Ein in der
DMX View ausgewähltes Fixture ist auch in den anderen Ansichten und in den Kanal-Werkzeugen des
linken Panels ausgewählt, sodass Sie direktes Kanal-Editing mit den
übergeordneten Capability-Steuerelementen kombinieren können.
