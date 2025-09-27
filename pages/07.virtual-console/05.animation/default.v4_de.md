---
title: Animationen
date: '03:09 22-08-2023'
---

Ein Animations-Widget ist ein vollständiges Werkzeug zum Arbeiten mit den [RGB-Matrizen](/basics/glossary-and-concepts#rgb-matrix) Ihres Projekts.  
Es zeigt mehrere grafische Elemente an, um eine Matrix während Live-Shows vollständig zu steuern.  
Am wichtigsten ist, dass Sie damit eine Reihe sogenannter „benutzerdefinierter Steuerelemente“ definieren können, um Voreinstellungen, Farben und Eigenschaften schnell abzurufen und sofort auf eine laufende Matrix anzuwenden.

Einführung
------------

Wenn Sie auf das Symbol ![](/basics/animation.png) klicken, wird Ihrer virtuellen Konsole ein Animations-Widget hinzugefügt.  
Standardmäßig zeigt das Widget vier Elemente an:

* Ganz links ein Schieberegler zur Steuerung der Wiedergabe und der Intensität einer RGB-Matrix.  
    Die Schiebereglerbewegung kann einer externen Controller-Eingangsleitung zugeordnet werden.  
    Es verhält sich im Wiedergabemodus genau wie ein [Virtual Console Slider](../slider).
* Oben rechts zwei [Click & Go](/basics/glossary-and-concepts#click-and-go)-Schaltflächen zum Festlegen der Start- und Endfarbe der Matrix. Wenn Sie im [Betriebsmodus](/basics/glossary-and-concepts#modi) darauf klicken, wird ein Farbauswahlmenü angezeigt.
* Unterhalb der beiden Schaltflächen befindet sich ein Dropdown-Menü zur Auswahl der gewünschten Matrix-Animation oder Voreinstellung.

Der Platz unter dem Animationsmenü ist für benutzerdefinierte Steuerelemente reserviert. Sie können im Widget-Konfigurationsfenster definiert werden und werden jeweils als einzelne Schaltfläche angezeigt.  
Jedes benutzerdefinierte Steuerelement kann einer Tastenkombination oder einer externen Controller-Eingabezeile zugeordnet werden.

Konfiguration
-------------

Ein Animations-Widget kann mit der Schaltfläche „Eigenschaften“ ![](/basics/edit.png) in der Symbolleiste der virtuellen Konsole oder durch Doppelklicken auf das Widget selbst konfiguriert werden.

### Allgemeine Seite

|     |     |
| --- | --- |
| **Widget-Name** | Legen Sie den benutzerfreundlichen Namen des Widgets fest, der über den beiden Click & Go-Schaltflächen angezeigt wird |
| **Matrixfunktion** | Zeigt Ihnen den Namen der Funktion [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix), die derzeit dem Widget zugewiesen ist.<br><br>![](/basics/attach.png) Hängen Sie eine RGB-Matrixfunktion an das Widget an <br>![](/basics/detach.png) Trennen Sie die aktuelle Funktion vom Widget |
| **Farb- und Voreinstellungsänderungen sofort anwenden** | Wählen Sie aus, ob die Änderungen an der Matrix sofort oder bei der nächsten Matrix-Schleife angewendet werden müssen |
| **Externe Eingabe** | Sie können einen externen Eingabekanal von einem Eingabegerät (z. B. einem Slider-Board) an den Widget-Slider anschließen, sodass Sie nicht immer die Maus oder den Touchscreen verwenden müssen, um die Matrix-Wiedergabe oder -Intensität zu steuern.<br><br> **Eingabeuniversum**: Das Eingabeuniversum, aus dem Sie Eingabedaten für den Schieberegler erhalten möchten.<br>**Eingangskanal**: Der einzelne Eingangskanal innerhalb des ausgewählten Eingangsuniversums, den Sie zur Steuerung des Schiebereglers verwenden möchten.<br>**Automatische Erkennung**: Wenn umgeschaltet, können Sie einfach eine Taste/einen Schieberegler/bewegen/drücken. Knopf auf Ihrer externen Eingabehardware und er wird automatisch dem Schieberegler zugewiesen. Die neueste Kombination wird in den Textfeldern angezeigt, wenn QLC+ Eingabedaten empfängt. Wenn in den Feldern nichts angezeigt wird, liegt möglicherweise ein Problem mit Ihrer Eingangsverbindung vor, das Sie zuerst beheben müssen.<br>**Wählen...**: Zeigt die Option [Eingangskanal auswählen](../select-input-channel)-Dialogfeld, mit dem Sie einen Eingangskanal manuell auswählen können. |

### Seite „Benutzerdefinierte Steuerelemente“

Ein benutzerdefiniertes Steuerelement ist eine „Verknüpfung“ zu einer Funktionalität einer RGB-Matrix.  
Grundsätzlich können Sie während der Designphase einer Show alle Optionen steuern, die normalerweise im [RGB-Matrix-Editor](/function-manager/rgb-matrix-editor) verwendet werden. Die einzige Option, die Sie nicht steuern können, ist die Fixture-Gruppe, die von einer RGB-Matrixfunktion verwendet wird.  
Auf dieser Konfigurationsseite kann der Benutzer je nach Bedarf während einer Live-Aufführung eine beliebige Anzahl benutzerdefinierter Steuerelemente definieren.  
Jedes benutzerdefinierte Steuerelement wird als Schaltfläche im Layout des Animations-Widgets dargestellt und kann entweder mit der Maus angeklickt oder auf einem Touchscreen gedrückt oder einer Tastenkombination oder einer externen Controller-Eingabezeile zugeordnet werden.

|     |     |
| --- | --- |
| **![](/basics/color.png) Startfarbe hinzufügen** | Fügen Sie ein Matrix-Startfarbsteuerelement hinzu. Wenn Sie auf diese Schaltfläche klicken, wird ein Farbauswahltool angezeigt.  <br>Die im Layout des Widgets angezeigte Schaltfläche hat eine Hintergrundfarbe, die die ausgewählte Schaltfläche darstellt, und den Buchstaben **S**. |
| **![](/basics/color.png) Endfarbe hinzufügen** | Fügen Sie eine Matrix-Endfarbsteuerung hinzu. Wenn Sie auf diese Schaltfläche klicken, wird ein Farbauswahltool angezeigt.  <br>Die im Layout des Widgets angezeigte Schaltfläche hat eine Hintergrundfarbe, die die ausgewählte Schaltfläche darstellt, und den Buchstaben **E**. |
| **![](/basics/fileclose.png) Endfarben-Reset hinzufügen** | Fügen Sie ein Matrix-Endfarben-Reset-Steuerelement hinzu.  <br>Die im Layout des Widgets angezeigte Schaltfläche hat eine graue Hintergrundfarbe und wenn sie gedrückt wird, wird die aktuelle Endfarbe der Matrix zurückgesetzt (falls zuvor festgelegt) |
| **![](/basics/script.png) Voreinstellung hinzufügen** | Fügen Sie ein voreingestelltes Matrix-Steuerelement hinzu. Wenn Sie auf diese Schaltfläche klicken, wird ein Dialog zur Auswahl der Voreinstellungen angezeigt.  <br>Die im Layout des Widgets angezeigte Schaltfläche hat eine graue Hintergrundfarbe und eine Beschriftung, die dem Namen der Voreinstellung entspricht. |
| **![](/basics/fonts.png) Text hinzufügen** | Fügen Sie ein Matrix-Textanimationssteuerelement hinzu. Wenn Sie auf diese Schaltfläche klicken, wird ein Dialog angezeigt, in dem Sie den gewünschten Text eingeben müssen, der in der Matrix animiert werden soll.  <br>Die im Layout des Widgets angezeigte Schaltfläche hat eine graue Hintergrundfarbe und eine Beschriftung, die dem ausgewählten Text entspricht. |
| **![](/basics/edit_remove.png) Entfernen** | Entfernen Sie das aktuell ausgewählte Steuerelement aus der Steuerelementliste. |