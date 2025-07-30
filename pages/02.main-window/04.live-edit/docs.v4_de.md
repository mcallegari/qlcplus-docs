---
title: 'Live Editierung'
taxonomy:
    category:
        - docs
---

Ab Version 4.5.0 bietet QLC+ eine Funktionalität, die die Anpassung Ihrer [Funktionen](/basics/glossary-and-concepts#funktionen) im [Betriebsmodus](/basics/glossary-and-concepts#modi) ermöglicht.
Das Live Edit-Symbol ![](/basics/liveedit.png) befindet sich in der oberen Leiste von QLC+ neben dem [DMX Dump](/main-window/dmx-dump)-Symbol ![](/basics/add_dump.png) und Es wird erst aktiviert, wenn der Benutzer in den Betriebsmodus gewechselt hat.
Wenn Sie auf das Live-Edit-Symbol klicken, wird ein Bereich [Funktionsauswahl](/function-manager/function-selection) angezeigt, in dem Sie die Funktion auswählen können, die Sie anpassen möchten.
Wenn Sie OK drücken, wird der richtige Editor zum Bearbeiten dieser Funktion angezeigt.
Derzeit werden folgende Funktionen für die Live-Bearbeitung unterstützt:

* ![](/basics/scene.png) [Szene](/basics/glossary-and-concepts#szene) öffnet einen [Szeneneditor](/function-manager/scene-editor)
    Beachten Sie, dass sich der Editor standardmäßig im „Blind-Modus“ befindet, wenn Sie eine Szene bearbeiten, die gerade nicht läuft, falls Sie die Änderungen erst wirksam machen möchten, wenn die Szene das nächste Mal ausgewählt wird. Für eine aktuell laufende Szene wird der Editor standardmäßig im Live-Modus geöffnet.
* ![](/basics/chaser.png) [Chaser](/basics/glossary-and-concepts#chaser) öffnet einen [Chaser-Editor](/function-manager/chaser-editor)
* ![](/basics/efx.png) [EFX](/basics/glossary-and-concepts#efx) öffnet einen [EFX-Editor](/function-manager/efx-editor)
* ![](/basics/rgbmatrix.png) [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix) öffnet einen [RGB-Matrix-Editor](/function-manager/rgb-matrix-editor)

    Die in der [Funktionsauswahl](/function-manager/function-selection) aufgeführten Funktionstypen können mithilfe der Filter-Kontrollkästchen am unteren Rand des Bedienfelds ausgewählt werden.
    Oben im Bedienfeld gibt es eine Option, um nur die aktuell ausgeführten Funktionen aufzulisten.

    Beachten Sie, dass, wenn während einer Live-Bearbeitung eine andere Funktion ausgeführt wird, HTP-Kanäle in der anderen Funktion möglicherweise verhindern, dass einige Anpassungen auf der Bühne sichtbar sind.