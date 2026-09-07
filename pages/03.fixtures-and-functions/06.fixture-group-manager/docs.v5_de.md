---
title: 'Fixture Group Manager'
date: '14:33 27-06-2026'
taxonomy:
    category:
        - docs
---

Der **Fixture Group Manager** listet alle Fixtures in Ihrem Projekt auf, gegliedert
nach Universum, und ermöglicht es Ihnen, **Fixture Groups** zu erstellen, Elemente zu prüfen und umzubenennen
sowie Fixture- und Kanaleigenschaften zu bearbeiten. Öffnen Sie ihn über die Schaltfläche
**Fixture Groups** im linken Panel des
[Fixtures and Functions](/fixtures-and-functions)-Arbeitsbereichs.

## Der Baum

Der Hauptbereich ist ein Baum. Auf der obersten Ebene befinden sich die **Universen**; erweitern Sie
ein Universum, um die daran gepatchten **Fixtures** zu sehen, und erweitern Sie ein Fixture, um seine
**Heads** und **Kanäle** zu sehen. Von Ihnen erstellte **Fixture Groups** erscheinen ebenfalls hier als
erweiterbare Knoten.

### Elemente auswählen

* **Klicken** Sie auf ein Element, um es auszuwählen (ein Universum, eine Gruppe, ein Fixture, ein Head oder ein Kanal).
  Das Auswählen von Fixtures wählt sie hier auch in den Ansichten aus.
* Halten Sie **Strg** gedrückt, um mehrere Elemente gleichzeitig auszuwählen.
* **Doppelklicken** Sie auf einen Knoten, um ihn zu erweitern oder einzuklappen.

### Gruppen durch Ziehen erstellen

Ziehen Sie Fixtures (oder ganze Auswahlen) auf einen Gruppenknoten, um sie dieser Gruppe hinzuzufügen.
Gruppen ermöglichen es Ihnen, mehrere Fixtures im gesamten Programm gemeinsam auszuwählen und zu steuern.

## Symbolleisten-Schaltflächen

* **＋ Eine neue Fixture Group hinzufügen** — erstellt eine neue, leere Fixture Group.
* **－ Die ausgewählten Elemente entfernen** — löscht die ausgewählten Fixtures und/oder
  Fixture Groups. (Das Entfernen eines Fixtures aus einer Gruppe entfernt es nur aus der
  Gruppe.)
* **Änderungen auf Fixtures desselben Typs anwenden** (Doppel-Häkchen-Symbol) — wenn Sie
  Fixture-/Kanaleigenschaften bearbeiten, werden Ihre Änderungen auch auf jedes andere Fixture desselben
  Typs angewendet. Ein-/ausschaltbar.
* **Suche** (Lupe) — öffnet ein Suchfeld, um den Baum nach Gruppen-, Fixture- oder Kanalnamen zu filtern.
* **Die ausgewählten Elemente umbenennen** — benennt das ausgewählte Element um. Wenn mehrere Elemente
  ausgewählt sind, können Sie sie alle auf einmal mit automatischer Nummerierung umbenennen.
* **Das ausgewählte Element prüfen** (Info-Symbol) — öffnet eine Informationsübersicht des
  ausgewählten Elements in der Hauptansicht (eine Universums-/Gruppenübersicht oder eine Fixture-
  Übersicht). Ausschalten, um zur vorherigen Ansicht zurückzukehren.
* **Das ausgewählte Element bearbeiten** (Stift-Symbol) — wechselt in den Bearbeitungsmodus für das
  ausgewählte Element:
  * Bei einer **Fixture Group** öffnet sich der Gruppeneditor in der Hauptansicht.
  * Bei einem **Fixture** (oder Universum) öffnet sich der Kanaleigenschaften-Editor und
    das Panel wird verbreitert, um die Eigenschaftsspalten anzuzeigen.
* **Ein verknüpftes Fixture hinzufügen/entfernen** (Link-Symbol) — erscheint während der Bearbeitung eines Fixtures;
  fügt eine verknüpfte Kopie des Fixtures hinzu oder entfernt sie (ein Fixture, das dieselbe
  DMX-Adresse teilt).

## Kanaleigenschaften

Wenn Sie ein Fixture bearbeiten, wird das Panel breiter und zeigt eine Spaltenreihe für jeden
Kanal:

* **Name** — der Kanalname.
* **Mode** — der Arbeitsmodus des Kanals.
* **Flags** — spezielle Kanal-Flags.
* **Can fade** — ob der Kanal zwischen Werten überblenden darf.
* **Behaviour** — wie sich der Kanal verhält, wenn mehrere Funktionen ihn steuern
  (Vorrang).
* **Modifier** — eine optionale Kanal-Modifikatorkurve.

Mit diesen Einstellungen können Sie feinabstimmen, wie jeder Kanal reagiert. Bei aktiviertem **Apply to
fixtures of the same type** werden Änderungen auf alle passenden Fixtures übertragen.
