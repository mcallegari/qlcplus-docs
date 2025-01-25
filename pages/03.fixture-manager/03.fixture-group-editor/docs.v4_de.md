---
title: 'Fixture Gruppeneditor'
taxonomy:
    category:
        - docs
---

Der Fixture-Gruppen-Editor wird verwendet, wenn Sie eine [Fixture-Gruppe] (/basics/glossary-and-concepts#fixture-group) im [Fixture-Manager] (/fixture-manager) auswählen. Mit diesem Editor kann die physische Anordnung der [Geräte](/basics/glossary-and-concepts#fixtures) und ihrer [Köpfe](/basics/glossary-and-concepts#head) beschrieben werden, die der Gruppe zugewiesen sind .

### Einstellungen

Jede Fixture-Gruppe hat einen Namen (zur Vereinfachung) und die Fixture-Konfiguration in einem unbegrenzten \[X,Y\]-Raster. Sie können die Größe des Rasters sowie die Platzierung einzelner Leuchtenköpfe im Raster anpassen.

|     |     |
| --- | --- |
| **Name der Gerätegruppe** | Ändern Sie den Namen der Gruppe. |
| ![](/basics/forward.png) | Fügen Sie Leuchtenköpfe ausgehend von der aktuell ausgewählten Zelle hinzu und füllen Sie jede nachfolgende Spalte in derselben Zeile mit den ausgewählten Leuchtenköpfen. |
| ![](/basics/back.png) | Fügen Sie Leuchtenköpfe ausgehend von der aktuell ausgewählten Zelle hinzu und füllen Sie dabei jede vorhergehende Spalte in derselben Zeile mit den ausgewählten Leuchtenköpfen. |
| ![](/basics/up.png) | Fügen Sie Leuchtenköpfe ausgehend von der aktuell ausgewählten Zelle hinzu und füllen Sie dabei jede vorherige Zeile in derselben Spalte mit den ausgewählten Leuchtenköpfen.  |
| ![](/basics/down.png) | Fügen Sie Leuchtenköpfe ausgehend von der aktuell ausgewählten Zelle hinzu und füllen Sie jede nachfolgende Zeile in derselben Spalte mit den ausgewählten Leuchtenköpfen. |
| ![](/basics/edit_remove.png) | Entfernen Sie den ausgewählten Leuchtenkopf aus dem Raster (und der Gruppe). |
| **Befestigungsraster** | Das Geräteraster zeigt die aktuelle Geräte-/Kopfanordnung in der ausgewählten Gruppe an. Sie können die Plätze zwischen zwei Köpfen wechseln sowie Leerzeichen auffüllen oder Leerräume zwischen Köpfen erstellen, indem Sie einfach die Köpfe im Raster übereinander ziehen.<br><br>Bei der Verwendung von Fixture-Gruppen in RGB-Matrizen wird jede Zelle in Das Raster stellt ein farbiges (oder monochromes) Pixel in einer von der RGB-Matrix gerenderten Grafikszene dar.<br><br>Jede Zelle wird mit einem Infotext angezeigt, der die folgenden Informationen enthält:<br><br>* Der Name von das Gerät sowie ein Symbol<br>* **H:** stellt die Kopfnummer dar<br>* **A:** stellt die Adresse des Geräts dar<br>* **U:** stellt das Universum des Geräts dar |
| **Breite** | Passt die Rasterbreite an (Anzahl der Spalten auf der X-Achse). |
| **Höhe** | Passt die Rasterhöhe an (Anzahl der Zeilen auf der Y-Achse). |
