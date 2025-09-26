---
title: 'DMX Monitor'
taxonomy:
    category:
        - docs
process:
    markdown: true
    twig: true
media_order: pan-tilt.png
---

Der DMX-Monitor ist ein nützliches Tool zum Verfolgen der Werte, die an die Ausgabeuniversen gesendet werden. Es werden nur die Informationen zu den benötigten Vorrichtungen angezeigt. Die Anzeigeoptionen des Monitors haben keinen Einfluss auf die eigentliche Geräteadressierung, schließlich handelt es sich nur um einen **Monitor**.  
Der DMX-Monitor verfügt über zwei Anzeigemodi: **DMX-Ansicht** und **2D-Ansicht**.

DMX-Ansicht
--------

Die DMX-Ansicht zeigt alle Geräte des Projekts und spiegelt jeden Kanal mit Zahlen und Symbolen dar. Es stellt grundsätzlich jeden Kanal in 3 Zeilen dar:

* Das Kanalgruppensymbol
* Die Kanalnummer
* Der Kanalwert

### Symbolleisten-Steuerelemente

| | |
| - | - |
| **2D-Ansicht**| Durch Klicken auf diese Schaltfläche kann in den 2D-Ansichtsmodus gewechselt werden. |
| ![](/basics/fonts.png) | Ändern Sie die Monitorschriftart. Um zu verhindern, dass die Zahlen flackern und springen, sollten Sie eine proportionale Schriftart (d. h. feste Breite) wählen; z.B. Monaco, Andale oder Courier. Die Schriftarteigenschaft ist global, das heißt sie wird nicht in Ihrem aktuellen Projekt, sondern in der QLC+ Hauptkonfiguration gespeichert. |
| **DMX-Kanäle** | Anzeige der Kanalnummern der Geräte als absolute DMX-Kanäle; Die Kanalnummern reichen von 1 bis 512, da sie jedem Gerät zugewiesen sind. |
| **Relative Kanäle** | Zeigt die Kanalnummern der Geräte relativ zu den Geräten an, d. h. die Kanalnummern jedes Geräts beginnen immer bei 1. |
| **DMX-Werte** | Kanalwerte als absolute DMX-Werte (0-255) anzeigen. |
| **Prozentwerte** | Kanalwerte als Prozentsätze von 255 (0-100 %) anzeigen. |
| **Universum** | Wählen Sie aus, welches Universum überwacht werden soll. Der erste Eintrag ist immer „Alle Universen“ |

2D-Ansicht
-------

Die 2D Monitoransicht ist eine weitere Möglichkeit, die Leuchten Ihres Projekts darzustellen. Wobei anstelle von Zahlen eine grafische Vorschau verwendet wird, die versucht das tatsächliche Ergebnis eines lichtemittierenden Geräts so gut wie möglich darzustellen.

Derzeit zeigt der Monitor Folgendes an:

* Master-Dimmer
* R/G/B
* C/M/Y
* Farbräder, wenn sie RGB-Farbwerte enthalten. Zweifarbige Werte werden nicht unterstützt
* Shutter, der geöffnet ist, es sei denn, der Funktionsname enthält „close“ oder „blackout“ (Beispiel: „Shutter Close“)

Im 2D-Ansichtsmodus können Sie auswählen, welche Geräte angezeigt werden sollen, sowie deren Position in einem Raster, das die Abmessungen einer realen Bühne darstellt.  
Das Raster möchte die Vorderansicht einer Bühne reproduzieren, Sie können es jedoch nach Belieben als generischen Raum verwenden.  
Grafische Elemente können manuell verschoben werden, indem Sie sie über das Raster ziehen. Wenn Sie darauf klicken, können Sie sie mit dem Bedienfeld „Monitor Fixture Editor“ konfigurieren, das auf der rechten Seite des Fensters angezeigt wird.

### Symbolleisten-Steuerelemente

| | |
| - | - |
| **DMX-Ansicht** | Durch Klicken auf diese Schaltfläche kann in den DMX-Ansichtsmodus gewechselt werden. |
| **Rasterabmessungen** | Legen Sie die Breite und Höhe des 2D-Ansichtsrasters fest, indem Sie die in den beiden Drehfeldern angezeigten Werte ändern |
| **Gittereinheiten** | Legen Sie die Maßeinheiten für das 2D-Ansichtsraster fest, indem Sie die gewünschte Einheit aus dem Dropdown-Menü auswählen. Mögliche Optionen sind Meter und Fuß. |
| ![](/basics/edit_add.png) | Fügen Sie dem 2D-Ansichtsraster eine Vorrichtung hinzu. Wenn Sie auf dieses Symbol klicken, wird der Geräteauswahldialog angezeigt. Bereits zur Ansicht hinzugefügte Geräte werden deaktiviert, da es nicht möglich ist dasselbe Gerät zweimal hinzuzufügen |
| ![](/basics/edit_remove.png) | Entfernen Sie eine Vorrichtung aus dem 2D-Ansichtsraster. Durch Klicken auf dieses Symbol wird das aktuell ausgewählte Gerät entfernt. Ein ausgewähltes Gerät wird gelb hervorgehoben. |
| ![](/basics/image.png) | Öffnen Sie den Dialog zur Auswahl des Monitor-Hintergrundbilds.<br>Hier können Sie zwischen drei möglichen Modi wählen:<br><br>**Kein Hintergrund**: Die Monitor-2D-Ansicht hat kein Hintergrundbild<br>**Gemeinsamer Hintergrund**: In der Monitor-2D-Ansicht wird das ausgewählte Hintergrundbild angezeigt<br>**Benutzerdefinierte Hintergrundliste**: In diesem Modus ist es möglich, ein Hintergrundbild für eine bestimmte QLC+-Funktion auszuwählen.<br>Klicken Sie einfach auf Die ![](/basics/edit_add.png) und ![](/basics/edit_remove.png) Schaltflächen zum Hinzufügen/Entfernen von Funktionen und dem zugehörigen Hintergrundbild zum Monitor. Wenn eine Funktion in dieser Liste gestartet wird, ändert sich das Hintergrundbild der Monitor-2D-Ansicht entsprechend. |
| ![](/basics/label.png) | Namen von Fixtures unter ihrer grafischen Darstellung ein-/ausblenden |

### Fixture Item Editor

Wenn auf ein Gerät geklickt wird, wird es gelb hervorgehoben und der Monitor Fixture Item Editor wird auf der rechten Seite des Fensters angezeigt.  
Im Folgenden sind die möglichen Parameter aufgeführt, die angepasst werden können:

| | |
| - | - |
| **Horizontale Position** | Legen Sie die Position auf der X-Achse des Rasters mithilfe der Rastermaßeinheiten fest |
| **Vertikale Position** | Legen Sie die Position auf der Y-Achse des Rasters mithilfe der Rastermaßeinheiten fest |
| **Rotation** | Legen Sie den Drehwinkel des grafischen Elements fest, das das ausgewählte Gerät darstellt |
| **Farbgel** | Legen Sie das Farbgel fest, das auf das aktuell ausgewählte Fixture-Element angewendet werden soll. Dies ist nützlich für generische Dimmer mit einer herkömmlichen Glühbirne, die selbst keine Farbe abgeben. Diese Funktion hat keine Auswirkung auf RGB-LED-Leuchten. |
| ![](/basics/fileclose.png) | Zurücksetzen eines zuvor eingestellten Farbgels |

### Pan/Tilt Anzeige

PAN/TILT Die Anzeige erfolgt schematisch durch farbige Ringe/Bögen um das Gerät herum. **P**urpurfarbener Bogen zeigt **P**AN-Winkel und **T**türkiser Bogen zeigt **T**ILT-Winkel. Graue Punkte zeigen die Schwenk-/Neigebereiche an. Null (Mitte des Bereichs) liegt unten.

Im folgenden Bild beträgt der Schwenkbereich 660 Grad und der Neigungsbereich 300 Grad. Die Schwenkung erfolgt gegen den Uhrzeigersinn (-330 Grad) und die Neigung erfolgt bei -150 Grad.

![](pan-tilt.png)