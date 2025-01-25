---
title: 'Fixture Manager'
taxonomy:
    category: docs
child_type: docs
---

### Kapitel 3

# Vorrichtungsmanager
Der Fixture-Manager ist das Herzstück der Fixture-orientierten Architektur von QLC+. Wie der Name schon sagt, können Sie Ihre Beleuchtungsgeräte über den Gerätemanager verwalten (hinzufügen, entfernen und bearbeiten). Auf der linken Seite des Managers befindet sich eine Liste, die alle Geräte im aktuellen Arbeitsbereich anzeigt. Wenn ein Gerät ausgewählt ist, werden auf der rechten Seite des Fensters die Details des ausgewählten Geräts angezeigt. Wenn eine [Fixture Group](/basics/glossary-and-concepts#fixture-group) ausgewählt ist, wird die rechte Seite des Fensters vom [Fixture Group Editor](fixture-group-editor) eingenommen.

### Kontrollen

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Fügen Sie neue [Geräte](/basics/glossary-and-concepts#fixtures)(s) zum Arbeitsbereich hinzu, indem Sie den Dialog [Gerät hinzufügen/bearbeiten](add-edit-fixtures) verwenden. |
| ![](/basics/rgbpanel.png) | Fügen Sie dem Arbeitsbereich mit dem Dialogfeld [RGB-Panel hinzufügen] (add-rgb-panel) ein RGB-Panel hinzu. |
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählten Geräte aus dem Arbeitsbereich. Dadurch werden auch die Geräte aus ALLEN Gruppen entfernt, denen sie zugewiesen wurden. |
| ![](/basics/configure.png) | Bearbeiten Sie die Eigenschaften des aktuell ausgewählten Geräts mit dem Dialogfeld [Gerät hinzufügen/bearbeiten] (add-edit- Fixtures). |
| ![](/basics/fade.png) | Öffnet das Fenster [Konfiguration der Kanaleigenschaften](channel-properties). |
| ![](/basics/group.png) | Weisen Sie die ausgewählten Geräte einer [Gerätegruppe] (/basics/glossary-and-concepts#fixture-group) zu, die in einem Popup-Menü angezeigt wird. Wenn Sie noch keine Gruppen definiert haben, können Sie über das Menü, das sich öffnet, wenn Sie auf diese Schaltfläche klicken, die Erstellung einer neuen Gruppe auswählen. |
| ![](/basics/ungroup.png) | Entfernen Sie die ausgewählten Geräte aus der Gruppe, in der sie sich gerade befinden. Beachten Sie, dass durch das Entfernen von Geräten aus einer Gruppe die Geräte NICHT vollständig zerstört werden. Außerdem hat das Entfernen aus einer Gruppe keine Auswirkungen auf die Mitgliedschaft der Geräte in anderen Gruppen. |
| ![](/basics/up.png) | Verschiebt die ausgewählte Kanalgruppe nach oben |
| ![](/basics/down.png) | Verschiebt die ausgewählte Kanalgruppe nach unten |
| ![](/basics/fileimport.png) | Importiert eine Fixture-List-Datei (.qxfl) in QLC+. Bitte beachten Sie, dass Konflikte mit Geräteadressen nicht behandelt werden. Es wird daher empfohlen, diese Funktionalität für ein leeres Projekt zu verwenden. |
| ![](/basics/fileexport.png) | Exportiert die Liste der derzeit in einem QLC+-Projekt verfügbaren Geräte in eine Datei mit der Erweiterung .qxfl. Diese Datei kann anschließend mit der Importfunktion verwendet werden. |
| ![](/basics/remap.png) | Öffnet das Fenster [Fixtures-Remapping] (Fixture-Remapping). |