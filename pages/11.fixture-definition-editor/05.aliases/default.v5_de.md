---
title: Aliase
date: '12:00 04-07-2026'
---

Der Bereich **Aliase** definiert Regeln zum Ersetzen eines Kanals durch einen
anderen, ausgelöst durch Fähigkeiten, die auf das **Alias**-Preset gesetzt
sind (siehe [Kanäle](../channels)).

Ein Alias lässt einen Kanal seine Bedeutung abhängig vom Wert eines anderen
Kanals ändern. Zum Beispiel hat ein Fixture Kanal 5 mit dem Namen „Effects“,
der das Verhalten von Kanal 6 steuert. Kanal 5 hat zwei Fähigkeiten:
„Speed on channel 6“ und „Sound sensitivity on channel 6“, wobei Letztere auf
das **Alias**-Preset gesetzt ist. Standardmäßig (Kanal 5 auf 0) fungiert
Kanal 6 als Geschwindigkeitsregler; wenn Kanal 5 in den Bereich „Sound
sensitivity“ wechselt, wird Kanal 6 zu einer Einstellung für die
Tonempfindlichkeit.

Um dies zu handhaben, definieren Sie zwei Kanäle — „Speed“ und „Sound
sensitivity“ — und fügen dem Modus nur „Speed“ hinzu (das Standardverhalten).
Anschließend definieren Sie einen einzigen Alias, der „Speed“ durch „Sound
sensitivity“ ersetzt. QLC+ weiß dann, was zu tun ist, wenn der DMX-Wert von
Kanal 5 den Alias-Bereich betritt oder verlässt.

Ein Alias wird durch drei Teile beschrieben:

* **In mode** — der Modus, in dem der Alias wirksam wird.
* **replace** — der Moduskanal, der ersetzt werden soll, wenn der Alias
  ausgelöst wird.
* **with** — der Kanal, der ihn ersetzt, wenn der Alias ausgelöst wird.

> **Hinweis:** Der Bereich Aliase ist im Fixture-Editor der Version 5 noch
> nicht verfügbar. Fixture-Definitionen, die bereits Aliase enthalten,
> funktionieren weiterhin, aber vorerst müssen Aliase mit dem Editor der
> Version 4 hinzugefügt werden. Diese Seite wird aktualisiert, sobald die
> Alias-Bearbeitung in der Version-5-Oberfläche verfügbar ist.
