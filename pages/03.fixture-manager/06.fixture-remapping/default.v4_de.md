---
title: 'Fixture Neuzuordnung'
date: '11:36 21-08-2023'
media_order: fixture_remap.png
---

Ab Version 4.4.1 bietet QLC+ eine Funktion namens Fixtures Remapping.  
Wenn Sie Live-Shows an verschiedenen Veranstaltungsorten durchführen, können Sie möglicherweise erst in letzter Minute herausfinden, welche [Geräte](/basics/glossary-and-concepts#fixtures) dort installiert sind. Nun, die Neuzuordnung von Vorrichtungen hilft Ihnen, Ihre vorhandenen Projekte in dieser und vielen anderen Situationen zu nutzen, beispielsweise wenn Sie eine fehlerhafte Vorrichtung ersetzen müssen oder wenn Sie gemietete Ausrüstung zusätzlich zu Ihrer eigenen verwenden möchten.  
Sie können beispielsweise ein Projekt mit nur einem PAR, einem Moving Head und einem Scanner einrichten. Wenn Sie den Veranstaltungsort erreichen, an dem die Show stattfinden wird, können Sie Ihre Geräte den dort vorgefundenen Geräten zuordnen, zum Beispiel 50 PARs, 30 Moving Heads und 15 Scanner.  
Mit QLC+ dauert dieser Vorgang nur wenige Minuten!  
  
Mit der Neuzuordnung von Geräten können Sie 1-zu-1- oder 1-zu-viele-Neuzuweisungen ganzer Geräte oder einzelner Kanäle durchführen. QLC+ wird so weit wie möglich versuchen, die ursprünglich im Projekt verwendeten Kanäle neuen Kanälen derselben Kategorie neu zuzuordnen.  
Wenn Sie den Neuzuordnungsvorgang bestätigen, wird automatisch ein neues Projekt gespeichert, um Ihr ursprüngliches Projekt beizubehalten.  
Alle Geräte, Szenen, EFX, virtuellen Konsolen-Widgets und Audio-Trigger, die im Originalprojekt gefunden wurden, werden neu zugeordnet, sodass sie auf der neuen Geräteliste funktionieren.  
  

Neuzuordnungsfenster
----------------

Lassen Sie uns nun erklären, wie Sie das Fixture-Remapping-Fenster verwenden, beginnend mit einem Screenshot eines vollständigen Beispiels:  
  
![](fixture_remap.png)  
  
Und jetzt finden Sie hier eine detaillierte Erklärung jedes Elements des Neuzuordnungsfensters.

|     |     |
| --- | --- |
| **Quellenausstattung** | Auf der linken Seite des Fensters befindet sich eine Baumstruktur, die die in Ihrem Projekt verwendeten Universen, Geräte und Kanäle darstellt. Diese Liste kann in diesem Fenster nicht geändert werden. |
| **Neu zugeordnete Geräte** | Auf der rechten Seite des Fensters befindet sich ein Baum, der die Universen, Geräte und Kanäle darstellt, denen Sie Ihre Quellgeräte neu zuordnen möchten. |
| ![](/basics/edit_add.png) | Fügen Sie ein oder mehrere Geräte zur Liste der neu zugeordneten Geräte hinzu. Wenn Sie auf diese Schaltfläche klicken, wird das Fenster [Geräte hinzufügen/bearbeiten] (/gerätemanager/add-edit-geräte) geöffnet. Bitte beachten Sie, dass ein einmal hinzugefügtes Gerät nicht mehr geändert werden kann. Wenn Sie also einen bestimmten Namen oder eine bestimmte Anzahl benötigen, denken Sie daran, dies zu tun, bevor Sie das neue Gerät hinzufügen. |
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählte [Fixture](/basics/glossary-and-concepts#fixtures) aus der neu zugeordneten Fixtures-Liste. |
| ![](/basics/remap.png) | Dies ist wahrscheinlich die wichtigste Schaltfläche im Fenster. Damit können Sie die Verbindung zwischen einem Quellgerät und einem neu zugeordneten Gerät bestimmen. Die Verbindungen können entweder zwischen einzelnen Kanälen oder an ganzen Geräten durchgeführt werden.  <br>Im ersten Fall müssen Sie den Quellkanal aus der Quell-Geräteliste und einen Zielkanal aus der neu zugeordneten Geräteliste auswählen.  <br>Im zweiten Fall müssen Sie ein Gerät aus der Quell-Geräteliste und ein Zielgerät aus der neu zugeordneten Geräteliste auswählen.  <br>Eine falsche Auswahl führt dazu, dass eine Fehlermeldung angezeigt wird. Sie können beispielsweise einen Kanal nicht einem Gerät zuordnen und umgekehrt.  <br>Wenn die Verbindung gültig ist, wird sie als Linie im weißen Bereich zwischen der Quellliste und der neu zugeordneten Liste dargestellt. |
| ![](/basics/fileclose.png) | Entfernen Sie eine zuvor erstellte Neuzuordnungsverbindung. Eine falsche Auswahl führt zu einem Fehler-Popup. |
| **Gerätenamen neu zuordnen** | Wenn dies aktiviert ist, wird bei einer neuen Neuzuordnungsverbindung zwischen Geräten auch der Ziel-Gerätename auf den gleichen Namen wie der Quell-Gerätename festgelegt. |
| **Zielprojektname** | Der absolute Pfad und Name des neu zugeordneten Projekts. Der Einfachheit halber übernimmt QLC+ automatisch den ursprünglichen Projektnamen und fügt am Ende „(remapped)“ hinzu.|