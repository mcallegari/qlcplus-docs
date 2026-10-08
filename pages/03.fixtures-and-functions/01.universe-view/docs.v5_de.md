---
title: 'Universe View'
date: '13:53 27-06-2026'
published: true
taxonomy:
    category: docs
---

Die **Universe View** zeigt ein einzelnes DMX-Universum als Raster seiner 512
Kanäle an. Es ist die technischste der vier Ansichten und nützlich, um genau zu
prüfen, welche Kanäle jedes Fixture belegt, Lücken oder Überschneidungen zu
erkennen und Fixtures neu zu adressieren.

Sie ist eine der vier Ansichten, die über die Symbolleiste oben im
[Fixtures and Functions](/fixtures-and-functions)-Arbeitsbereich verfügbar sind. Verwenden Sie die
**Universumsauswahl** in dieser Symbolleiste, um festzulegen, welches Universum angezeigt wird.

## Das Raster

Die Ansicht ist ein Raster aus Zellen, eine Zelle pro DMX-Kanal (Adressen 1–512). Jedes
Fixture belegt einen zusammenhängenden Block von Zellen entsprechend seinen Kanälen,
beschriftet mit dem Fixture-Namen. Das in jeder Zelle angezeigte Symbol gibt den
Typ dieses Kanals an (Intensity, Color, Pan, Tilt usw.).

Fahren Sie mit der Maus über eine Zelle, um einen Tooltip mit einer Beschreibung des Fixtures und des Kanals an dieser
Adresse anzuzeigen.

Der Name des aktuell angezeigten Universums wird oben links angezeigt.

## Fixtures auswählen

* **Klicken** Sie auf die Zellen eines Fixtures, um es auszuwählen. Das Auswählen eines Fixtures ersetzt
  die aktuelle Auswahl.
* Halten Sie **Strg** gedrückt (oder aktivieren Sie **Toggle multiple selection** im linken Panel), um
  Fixtures zur Auswahl hinzuzufügen, anstatt sie zu ersetzen.

## Ein Fixture verschieben

Ziehen Sie ein ausgewähltes Fixture entlang des Rasters, um es an eine andere Startadresse zu
verschieben. Während Sie ziehen, werden die Zielzellen hervorgehoben, um zu zeigen, wo
das Fixture landen wird:

* Wenn die neue Position frei ist, wird die Verschiebung zugelassen.
* Wenn die neue Position ein anderes Fixture überschneiden würde, wird die Verschiebung abgelehnt und
  das Fixture bleibt an seiner ursprünglichen Position.

## Ausschneiden und Einfügen

Zwei Schaltflächen oben rechts in der Ansicht ermöglichen es Ihnen, Fixtures zu duplizieren oder zu verschieben:

* **Ausschneiden** (Schere) — kopiert die aktuell ausgewählten Fixtures in die Zwischenablage.
* **Einfügen** (Zwischenablage) — platziert die Fixtures aus der Zwischenablage an der ersten verfügbaren
  freien Position im Universum. Ist nicht genug freier Platz vorhanden, wird ein Fehler
  angezeigt und nichts wird eingefügt.

## Fixtures hinzufügen

Sie können auch ein Fixture aus dem **Add Fixtures**-Browser (linkes Panel)
direkt auf das Raster ziehen. Während des Ziehens hebt das Raster die Kanäle hervor, die das
Fixture belegen würde, und zeigt an, ob die gewählte Adresse frei ist. Lassen Sie es über einem
freien Block los, um es dort zu patchen.
