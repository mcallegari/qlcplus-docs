---
title: 'Fixtures and Functions'
date: '14:33 23-06-2026'
taxonomy:
    category:
        - docs
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

Der Kontext **Fixtures and Functions** ist der wichtigste Bearbeitungsbereich der Version-5-Benutzeroberfläche.
Hier fügen Sie Ihre Fixtures hinzu und ordnen sie an, steuern ihre Kanäle, organisieren Paletten und Fixture Groups und erstellen und bearbeiten Funktionen wie Scenes, Chaser, EFX und Shows.

Der Arbeitsbereich ist in mehrere Bereiche unterteilt:
* **Linkes Panel** — Fixtures hinzufügen, Gruppen und Paletten verwalten und die
  Kanäle der ausgewählten Fixtures steuern.
* **Hauptansichtsbereich** — zeigt Ihre Fixtures auf eine von vier Arten an (Universe-Raster,
  DMX-Kanäle, 2D-Bühne oder 3D-Bühne).
* **Rechtes Panel** — Ihre Funktionen erstellen, bearbeiten und verwalten.
* **Unteres Panel** — öffnet kontextabhängige Editoren, wie z. B. die Scene-Kanalkonsole.

Das linke und rechte Panel sind standardmäßig eingeklappt. Klicken Sie auf eine ihrer Schaltflächen, um das Panel aufzuklappen; klicken Sie erneut auf die aktive Schaltfläche, um es zu schließen. Sie können auch die Innenkante eines Panels ziehen, um es breiter oder schmaler zu machen.

![Fixtures_and_functions](Fixtures_and_functions.png "Fixtures_and_functions")

---

## Die Hauptansicht

Die Mitte des Bildschirms zeigt Ihre Fixtures. Eine Symbolleiste oben ermöglicht es Ihnen,
zwischen vier verschiedenen Ansichten desselben Setups zu wechseln. Es wird jeweils nur eine Ansicht
angezeigt.

| Ansicht | Was sie zeigt |
|------|---------------|
| ![](../basics/uniview.svg?resize=48,48) **Universe View** | Ein Raster der DMX-Adressen für das ausgewählte Universum. Fixtures belegen die Kanäle, an die sie gepatcht sind. Sie können ein Fixture ziehen, um es an eine andere Adresse zu verschieben, sowie Fixtures ausschneiden und einfügen. |
| ![](../basics/dmxview.svg?resize=48,48) **DMX View** | Jedes Fixture wird als Streifen seiner Kanäle mit deren Live-Werten dargestellt. Klicken Sie auf einen Kanal, um einen Schieberegler oder ein Preset-Werkzeug zu öffnen und seinen Wert direkt zu ändern. |
| ![](../basics/2dview.svg?resize=48,48) **2D View** | Ein Draufsicht-Plan Ihrer Bühne, wobei jedes Fixture an seiner tatsächlichen Position dargestellt wird. Nützlich, um ein Rig von oben gesehen anzuordnen. |
| ![](../basics/3dview.svg?resize=48,48) **3D View** | Eine dreidimensionale Darstellung der Bühne, einschließlich Beams und Farben. (Wenn Ihr System kein 3D-Rendering unterstützt, wird stattdessen ein Hinweis angezeigt.) |

### Eine Ansicht auswählen und lösen

* **Linksklick** auf eine Ansichts-Schaltfläche in der Symbolleiste, um zu dieser Ansicht zu wechseln.
* **Rechtsklick** auf eine Ansichts-Schaltfläche, um diese Ansicht in ein eigenes, separates
  Fenster zu **lösen**. Dies ist praktisch bei Mehrmonitor-Setups — behalten Sie zum Beispiel den
  2D-Plan auf einem Bildschirm und das 3D-Rendering auf einem anderen. Die Schaltfläche verschwindet
  aus der Symbolleiste, solange ihre Ansicht gelöst ist; schließen Sie das gelöste Fenster, um sie
  zurückzuholen.

### Werkzeuge der Ansichts-Symbolleiste

Rechts neben den Ansichts-Schaltflächen finden Sie:

* **Universumsauswahl** — ein Dropdown-Menü zur Auswahl, welches Universum angezeigt wird. Wählen Sie ein
  einzelnes Universum aus, um sich darauf zu konzentrieren, wodurch andernorts gepatchte Fixtures ausgeblendet werden.
* **Zoom out / Zoom in** — lässt die Fixtures in der aktuellen Ansicht kleiner oder größer
  erscheinen.
* **View settings** (die „Balken“-Schaltfläche) — zeigt oder verbirgt das Einstellungsfenster für
  die aktuelle Ansicht. Diese Schaltfläche erscheint nur bei Ansichten, die eigene
  Einstellungen haben (die DMX- und die 2D-Ansicht).

---

## Linkes Panel — Fixtures und Kanäle

Das linke Panel gruppiert oben drei Verwaltungswerkzeuge, in der Mitte die
Kanalsteuerungswerkzeuge und unten die Auswahlwerkzeuge.

### Fixtures verwalten

| Schaltfläche | Was sie tut |
|--------|--------------|
| ![](../basics/fixture.svg?resize=48,48) **Add Fixtures** | Öffnet den Fixture Browser. Durchsuchen Sie die Fixture-Bibliothek und ziehen Sie ein Fixture in die Ansicht, um es zu patchen. (Nur verfügbar, wenn die Fixture-Bearbeitung erlaubt ist.) |
| ![](../basics/group.svg?resize=48,48) **Fixture Groups** | Erstellen und bearbeiten Sie Gruppen von Fixtures, sodass Sie mehrere Fixtures gemeinsam auswählen und steuern können. |
| ![](../basics/palette.svg?resize=48,48) **Palettes** | Erstellen und verwalten Sie Paletten — gespeicherte Werte für Farbe, Position, Dimmer usw. —, die Sie in Ihren Funktionen wiederverwenden können. |

### Kanalsteuerungswerkzeuge

Diese Werkzeuge ermöglichen es Ihnen, die **ausgewählten** Fixtures direkt zu steuern. Jede Schaltfläche wird
erst aktiv, wenn mindestens ein ausgewähltes Fixture diese Capability tatsächlich besitzt;
die kleine Zahl an einer Schaltfläche zeigt an, auf wie viele der ausgewählten Fixtures sie zutrifft.
Klicken Sie auf eine Schaltfläche, um ihr Werkzeug neben dem Panel zu öffnen.

| Werkzeug | Was es steuert |
|------|------------------|
| ![](../basics/intensity.svg?resize=48,48) **Intensity** | Der Dimmer/die Master-Intensität der ausgewählten Fixtures. |
| ![](../basics/shutter.svg?resize=48,48) **Shutter** | Shutter- und Strobe-Presets (Open, Closed, Strobe, Pulse, …). |
| ![](../basics/position.svg?resize=48,48) **Position** | Pan und Tilt — Moving Heads und Scanner ausrichten. |
| ![](../basics/color.svg?resize=48,48) **Color** | Die Farbe der Fixtures, durch Mischen von RGB (und Weiß/Amber/UV, sofern verfügbar). |
| ![](../basics/colorwheel.svg?resize=48,48) **Color Wheel** | Wählt eine Farbe vom festen Farbrad des Fixtures aus. |
| ![](../basics/gobo.svg?resize=48,48) **Gobos** | Wählt ein Gobo vom Goborad des Fixtures aus. |
| ![](../basics/beam.svg?resize=48,48) **Beam** | Beam-Eigenschaften wie Zoom und Fokus. |

### Auswahlwerkzeuge (unterer Teil des Panels)

| Schaltfläche | Was sie tut |
|--------|--------------|
| <i class="fa fa-bolt fa-2x"></i> **Highlight** | Hebt die aktuell ausgewählten Fixtures vorübergehend hervor, sodass Sie sehen können, welche das sind. Die Zahl zeigt an, wie viele Fixtures ausgewählt sind. |
| <i class="fa fa-crosshairs fa-2x"></i> **Pick a 3D point** | (nur 3D View) Ermöglicht es Ihnen, auf einen Punkt auf der 3D-Bühne zu klicken, um die ausgewählten Fixtures darauf auszurichten. Tastenkombination: **Strg+P**. |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple selection** | Wenn aktiviert, fügt das Klicken auf Fixtures diese der Auswahl hinzu, anstatt sie zu ersetzen, sodass Sie eine Auswahl aus mehreren Fixtures aufbauen können. |
| ![](../basics/selectall.svg?resize=48,48) **Select / Deselect all** | Wählt jedes Fixture aus oder hebt die Auswahl auf, wenn bereits alles ausgewählt ist. Tastenkombination: **Strg+A**. |

---

## Rechtes Panel — Funktionen

Im rechten Panel arbeiten Sie mit **Funktionen** — Scenes, Chaser,
Sequences, EFX, RGB Matrices, Collections, Scripts, Audio, Video und Shows.

| Schaltfläche | Was sie tut |
|--------|--------------|
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Öffnet die Liste all Ihrer Funktionen, organisiert in Ordnern. Wählen Sie hier eine Funktion aus, um sie zu bearbeiten. |
| <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>**Timing Settings** | (nur [Show Manager](/show-manager)) Passt die Timing-Einstellungen für die Show an. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i>**Add a new function** | Öffnet ein Menü zum Erstellen einer neuen Funktion. Wählen Sie den Typ, und der zugehörige Editor öffnet sich automatisch. (Nur verfügbar, wenn die Funktionsbearbeitung erlaubt ist.) |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i>**Delete** | Löscht die ausgewählten Funktionen und Ordner, nachdem Sie um Bestätigung gebeten wurden. |
| ![](../basics/rename.svg?resize=48,48) **Rename** | Benennt das ausgewählte Element um. Wenn mehrere Elemente ausgewählt sind, können Sie sie alle auf einmal mit automatischer Nummerierung umbenennen. |
| <i class="fa fa-clone fa-2x"></i>**Clone** | Erstellt eine Kopie jeder ausgewählten Funktion. |
| <i class="fa fa-sitemap fa-2x"></i>**Show function usage** | Zeigt, wo die ausgewählte Funktion verwendet wird — welche anderen Funktionen, Virtual-Console-Widgets usw. sie referenzieren. |
| ![](../basics/autostart.svg?resize=48,48) **Autostart** | Markiert die ausgewählte Funktion so, dass sie beim Laden des Projekts automatisch startet (oder entfernt diese Markierung). |
| <i class="fa fa-play fa-2x"></i>**Function Preview** | Führt die ausgewählte Funktion live aus, damit Sie sie in der Vorschau sehen können. Erneut klicken, um zu stoppen. |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple selection** | (nur [Show Manager](/show-manager)) Ermöglicht es Ihnen, mehrere Elemente gleichzeitig auszuwählen. |
| <i class="fa fa-xmark fa-2x"></i>**Reset dump channels** | Löscht die derzeit für das Dumpen in eine Scene erfassten Kanäle. Tastenkombination: **Strg+R**. |

### Eine Funktion erstellen

Wenn Sie im Menü **Add a new function** einen Typ auswählen:

* **Audio**- und **Video**-Funktionen fragen zuerst nach den auszuwählenden Mediendateien. Wenn Sie
  eine einzelne Datei auswählen, öffnet sich sofort ihr Editor; wenn Sie
  mehrere auswählen, wird für jede eine Funktion erstellt, und der Function Manager öffnet sich, damit Sie
  sie überprüfen können.
* Eine **Show** wechselt die Anwendung in den Arbeitsbereich **Show Manager**.
* Jeder andere Typ erstellt die Funktion und öffnet ihren Editor im rechten Panel,
  bereit zur Bearbeitung.

---

## Unteres Panel

Das untere Panel ist verborgen, bis es benötigt wird. Es fährt vom unteren Bildschirmrand
nach oben, um Editoren aufzunehmen, die neben der Hauptansicht arbeiten — meistens die
**Scene-Kanalkonsole**, in der Sie Kanalwerte für eine Scene festlegen.

| Schaltfläche | Was sie tut |
|----------|-------------------|
| <i class="fa fa-chevron-up fa-2x"></i> **Expand / Collapse** | öffnet das Panel auf seine volle Höhe oder klappt es wieder zu einem schmalen Streifen zusammen. Sie können auch die Oberkante des Panels nach oben oder unten ziehen, um jede beliebige Höhe einzustellen |
| <i class="fa fa-copy fa-2x"></i> **Copy to fixtures of the same type** | (nur Scene-Konsole) kopiert die ausgewählten Kanalwerte auf jedes andere Fixture desselben Typs, sodass Sie sie nicht einzeln festlegen müssen |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple channel selection** | (nur Scene-Konsole) ermöglicht die Auswahl mehrerer Kanäle gleichzeitig |

Solange das untere Panel geöffnet ist, teilt es sich den Bildschirm mit den darüber liegenden Ansichten,
die sich verkleinern, um Platz zu schaffen.
