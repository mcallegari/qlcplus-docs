---
title: 'Fixture-Definitionseditor'
date: '12:00 04-07-2026'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Kapitel 10

# Fixture-Definitionseditor

Der **Fixture-Definitionseditor** dient zum Erstellen und Bearbeiten von
[Fixture-Definitionen](/basics/glossary-and-concepts#fixtures) — den Dateien,
die QLC+ mitteilen, wie jedes Ihrer Lichter zu steuern ist.<br>
In der Version-5-Oberfläche ist der Editor in QLC+ selbst integriert, statt eine
eigenständige Anwendung zu sein: Sie öffnen ihn über den **Fixture-Browser**
(den Bereich **Fixtures hinzufügen**), mit der Schaltfläche
<i class="fa fa-plus" style="color:limegreen"></i> **Neue Fixture-Definition
erstellen**, oder mit der Schaltfläche
![](../basics/edit.svg?resize=24,24) **Bearbeiten**, um die ausgewählte
Definition zu ändern.<br>
Wenn Sie eine neue Fixture-Definition erstellen, validieren Sie sie bitte mit
dem [Online-Fixture-Validator](https://www.qlcplus.org/fixture_validator.php).
Er hilft Ihnen, eine korrekte Definition zu erstellen.

## Speichern Ihrer Fixture-Definitionen

Um Ihre Fixture-Definitionen in QLC+ zu verwenden, müssen sie dort gespeichert
werden, wo QLC+ sie erwartet. Der Editor speichert in Ihrem persönlichen
**Benutzer-Fixture-Ordner**:

* Linux: ein verstecktes Verzeichnis in Ihrem Home-Verzeichnis —
  `$HOME/.qlcplus/Fixtures`
* Windows: ein Ordner in Ihrem Benutzerverzeichnis —
  `C:\Users\{Username}\QLC+\Fixtures`
* macOS: in Ihrer Benutzer-Library —
  `$HOME/Library/Application Support/QLC+/Fixtures`

Wenn Sie eine **mitgelieferte** (System-)Definition bearbeiten, speichert der
Editor automatisch eine Kopie in Ihrem Benutzerordner, die die mitgelieferte
Definition überschreibt, sodass das Original nie verändert wird.

**Wichtig: Sie SOLLTEN benutzerdefinierte Fixtures NICHT im *System*-Fixture-
Ordner von QLC+ speichern. Wird QLC+ deinstalliert, wird alles in diesem Ordner
gelöscht, und es kann zu Konflikten zwischen den System- und Ihren eigenen
Definitionen kommen.**

## Hauptsymbolleiste

Die obere Symbolleiste des Editors enthält die Dateiaktionen. Jede von Ihnen
geöffnete Definition erhält in der Zeile darunter eine eigene
**Registerkarte**, sodass Sie an mehreren gleichzeitig arbeiten können.

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-chevron-left"></i> **Zurück zu QLC+** | Schließt den Editor und kehrt zu QLC+ zurück (fordert Sie zuerst auf, ungespeicherte Änderungen zu speichern). |
| ![](../basics/filenew.svg) **Neue Definition** | Erstellt eine neue, leere Fixture-Definition in einer neuen Registerkarte. |
| ![](../basics/fileopen.svg?resize=48,48) **Definition öffnen** | Öffnet eine vorhandene `.qxf`-Fixture-Definition in einer neuen Registerkarte. |
| ![](../basics/filesave.svg?resize=48,48) **Definition speichern** | Speichert die Definition in der aktiven Registerkarte. |
| ![](../basics/filesaveas.svg?resize=48,48) **Definition speichern unter…** | Speichert die aktive Definition unter einem neuen Namen. |

## Der Editor

Anders als der eigenständige Editor der Version 4 (der separate Reiter und
Fenster verwendete), zeigt der Editor der Version 5 die gesamte Definition als
ein einziges scrollbares Panel mit einklappbaren **Abschnitten** auf der linken
Seite, mit einem gemeinsamen **Editor-Panel** auf der rechten Seite, das sich
öffnet, wenn Sie einen Kanal oder einen Modus hinzufügen oder bearbeiten.

Die Abschnitte erscheinen in der logischen Reihenfolge, die Sie beim Erstellen
einer neuen Definition befolgen sollten, von oben nach unten:

[**Allgemein**](general)<br>
[**Physisch**](physical)<br>
[**Kanäle**](channels)<br>
[**Modi**](modes)<br>
[**Aliase**](aliases)<br>
