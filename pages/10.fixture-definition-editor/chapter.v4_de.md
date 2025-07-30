---
title: 'Fixture-Definitionseditor'
date: '05:24 22-08-2023'
taxonomy:
    category: docs
media_order: 'fixture_editor_physical.png,fixture_editor_aliases.png,fixture_editor_channel_color.png,fixture_editor_channel_gobo.png,fixture_editor_channel_preset.png,fixture_editor_channel_shutter.png,fixture_editor_channel_wizard.png,fixture_editor_channels.png,fixture_editor_general.png,fixture_editor_mode_channels.png,fixture_editor_mode_edit_head.png,fixture_editor_mode_heads.png'
---

### Kapitel 10

# Fixture-Definitionseditor

Der Fixture Definition Editor ist eine separate Anwendung, die zusammen mit QLC+ zum Erstellen und Ändern von [Fixture-Definitionen](/basics/glossary-and-concepts#fixtures) gebündelt wird.<br>
Wenn Sie für jedes Ihrer Lichter eine Gerätedefinition haben, weiß QLC+, wie es diese steuern kann.<br>
Bitte validieren Sie neu erstellte Gerätedefinitionen mit dem [Online-Gerätedefinitionsvalidator](https://www.qlcplus.org/fixture_validator.php), um sicherzustellen, dass Sie eine korrekte Definition erstellen.<br>

## Speichern Ihrer Fixture-Definitionen

Um Ihre Fixture-Definitionen in QLC+ zu verwenden, müssen Sie sie an einem Ort speichern, an dem QLC+ sie erwartet. Es gibt zwei Orte, an denen Sie Ihre Fixture-Definitionen speichern können:
1. Im selben Ordner wie Ihr QLC+-Arbeitsbereich (praktisch, wenn Sie Ihren Arbeitsbereich jemand anderem geben möchten)
2. Im Benutzer-Fixtures-Ordner an folgenden Orten:
    * Linux: Es handelt sich um einen versteckten Ordner in Ihrem Benutzer-Home-Verzeichnis: „$HOME/.qlcplus/Fixtures“.
    * Windows: Es ist ein Ordner in Ihrem Benutzerverzeichnis: `C:\\Benutzer\\<Benutzername>\\QLC+\\Fixtures`.
    * Mac OS: Es befindet sich in Ihrem Benutzerbibliotheksverzeichnis: „$HOME/Library/Application\\ Support/QLC+/Fixtures“.
	
**Wichtiger Hinweis: Sie sollten Ihre benutzerdefinierten Geräte NICHT im Geräteordner des QLC+-Systems speichern oder kopieren. Dies liegt daran, dass bei der Deinstallation von QLC+ alle Geräte in diesem Ordner gelöscht werden. Es kann auch zu unbeabsichtigten Konflikten zwischen dem System und Ihren eigenen Gerätedefinitionen kommen.**

## Hauptsymbolleiste
Das Hauptfenster im Fixture-Editor ist lediglich ein leerer Arbeitsbereich, der die eigentlichen Editorfenster enthält, die zum Bearbeiten von Fixture-Definitionen verwendet werden. Folgende Optionen stehen Ihnen zur Verfügung:

|     |     |
| --- | --- |
| ![](/basics/filenew.png) | Erstellen Sie eine neue Vorrichtungsdefinition. Öffnet ein leeres Fixture-Editor-Fenster. |
| ![](/basics/fileopen.png) | Öffnen Sie eine vorhandene Vorrichtungsdefinition. Öffnet die Fixture-Definition in einem Fixture-Editor-Fenster. |
| ![](/basics/filesave.png) | Speichern Sie die Fixture-Definition im aktuell aktiven Fixture-Editor-Fenster. |
| ![](/basics/filesaveas.png) | Speichern Sie die Fixture-Definition unter einem bestimmten Namen im aktuell aktiven Fixture-Editor-Fenster. |

## Fixture-Editor

Die Fixture-Editor-Fenster enthalten alles, was zum Bearbeiten jeweils einer Fixture-Definition erforderlich ist. Die Fenster sind in fünf Registerkarten unterteilt:
[**Allgemein**](general)<br>
[**Physisch**](physical)<br>
[**Kanäle**](channels)<br>
[**Modi**](modes)<br>
[**Aliase**](aliases)<br>
Die Registerkarten sind in einer logischen Reihenfolge angeordnet, die beim Erstellen einer neuen Gerätedefinition von links nach rechts eingehalten werden sollte.