---
title: 'Funktionsassistent'
date: '11:55 21-08-2023'
taxonomy:
    category: docs
---

### Kapitel 4

# Funktionsmanager

Mit dem Funktionsmanager können Sie alle Funktionen verwalten, die die eigentliche Arbeit zur Automatisierung Ihrer Beleuchtung erledigen. Sie können neue Funktionen erstellen, bestehende entfernen und bearbeiten sowie Kopien davon erstellen. Die Steuerelemente befinden sich im oberen Teil des Fensters. Im unteren Teil werden alle Ihre Funktionen sowie der Funktionseditor für die aktuell ausgewählte Funktion (falls vorhanden) angezeigt.

Jeder Funktionstyp ist in einer eigenen Kategorie zu finden: Szene für Szenen, EFX für EFX usw. Wenn eine neue Funktion erstellt oder eine vorhandene ausgewählt wird, wird der entsprechende Editor ausgewählt und auf der rechten Seite des Funktionsmanagerfensters angezeigt. Im Editorbereich vorgenommene Änderungen werden sofort in den Funktionen selbst gespeichert und es sind keine zusätzlichen OK-Klicks erforderlich.

Steuerungen
--------

|     |     |
| --- | --- |
| ![](/basics/scene.png) | Erstellen Sie eine neue [Szene](/basics/glossary-and-concepts#szene) und bearbeiten Sie sie mit dem [Szenen-Editor](scene-editor). (Tastenkürzel: STRG+1) |
| ![](/basics/chaser.png) | Erstellen Sie einen neuen [Chaser](/basics/glossary-and-concepts#chaser) und bearbeiten Sie ihn mit dem [Chaser-Editor](chaser-editor). (Tastenkürzel: STRG+2) |
| ![](/basics/sequence.png) | Erstellen Sie eine neue [Sequenz](/basics/glossary-and-concepts#sequenz) und bearbeiten Sie sie mit dem [Chaser-Editor](chaser-editor). (Tastenkürzel: STRG+3) |
| ![](/basics/efx.png) | Erstellen Sie ein neues [EFX](/basics/glossary-and-concepts#efx) und bearbeiten Sie es mit dem [EFX-Editor](efx-editor). (Tastenkürzel: STRG+4) |
| ![](/basics/collection.png) | Erstellen Sie eine neue [Sammlung](/basics/glossary-and-concepts#sammlung) und bearbeiten Sie sie mit dem [Sammlungseditor](collection-editor). (Tastenkürzel: STRG+5) |
| ![](/basics/rgbmatrix.png) | Erstellen Sie eine neue [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix) und bearbeiten Sie sie mit dem [RGB-Matrix-Editor](rgb-matrix-editor). (Tastenkürzel: STRG+6) |
| ![](/basics/script.png) | Erstellen Sie ein neues [Skript](/basics/glossary-and-concepts#skript) und bearbeiten Sie es mit dem [Skripteditor](/function-manager/script-editor). (Tastenkürzel: STRG+7) |
| ![](/basics/audio.png) | Erstellen Sie eine neue Funktion [Audio](/basics/glossary-and-concepts#audio), die in [Chasern](/basics/glossary-and-concepts#chaser) oder [Shows](/basics/glossary-and-concepts#show) verwendet werden soll. (Tastenkürzel: STRG+8) |
| ![](/basics/video.png) | Erstellen Sie eine neue Funktion [Video](/basics/glossary-and-concepts#video) zur Verwendung in [Chasern](/basics/glossary-and-concepts#chaser) oder [Shows](/basics/glossary-and-concepts#show). (Tastenkürzel: STRG+9) |
| ![](/basics/folder.png) | Erstellen Sie einen neuen Ordner in der ausgewählten Kategorie. (Tastenkürzel: STRG+L) Ein Ordner kann durch Doppelklick umbenannt werden.  <br>Wenn ein Ordner ausgewählt wird, wird ihm eine neu erstellte Funktion hinzugefügt. Um vorhandene Funktionen in einen Ordner zu verschieben, wählen Sie sie einfach aus und ziehen Sie sie hinein. Auf die gleiche Weise können sie auch außerhalb eines Ordners verschoben werden, indem man sie auf ein Kategorieelement zieht.  <br>Beim Löschen eines Ordners werden auch alle darin enthaltenen Funktionen und Unterordner gelöscht.  <br>**Hinweis:** Leere Ordner werden nicht in Ihrem Projekt gespeichert. |
| ![](/basics/autostart.png) | Öffnen Sie den Funktionsauswahldialog, um eine Startfunktion auszuwählen. Die ausgewählte Funktion wird jedes Mal gestartet, wenn QLC+ in den Betriebsmodus wechselt. Dies ist sehr nützlich, wenn QLC+ im Kioskmodus ausgeführt wird (also [-k- oder -p-Flags](/advanced/command-line-parameters) verwendet). <br>Ein spezieller Eintrag mit dem Namen „&lt;Keine Funktion&gt;“ ist vorhanden, um eine zuvor festgelegte Startup-Funktion zu entfernen. |
| ![](/basics/wizard.png) | Starten Sie den [Funktionsassistenten](function-wizard). (Tastenkürzel: STRG+W) |
| ![](/basics/editcopy.png) | Erstellen Sie eine Kopie jeder der ausgewählten Funktionen. **Hinweis**: Durch das Klonen einer Sequenz wird auch die daran gebundene Szene geklont. |
| ![](/basics/editdelete.png) | Entfernen Sie die ausgewählte(n) Funktion(en) dauerhaft. |