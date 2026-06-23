---
title: Knöpfe
date: '14:26 21-08-2023'
---

Ein Knopf ist eines der einfachsten und leistungsstärksten Widgets in QLC+; Damit können Sie Ihre Funktionen starten, stoppen und flashen.

### Konfiguration

Schaltflächen können mit der Schaltfläche „Eigenschaften“ ![](/basics/edit.png) in der Symbolleiste oder durch Doppelklicken auf die Schaltfläche selbst konfiguriert werden.

|     |     |
| --- | --- |
| **Schaltflächenbeschriftung** | Legen Sie den benutzerfreundlichen Namen der Schaltfläche fest. Der Name wird auf der Schaltfläche in der virtuellen Konsole angezeigt.<br>**HINWEIS:** Wenn Sie über das Menü **Bearbeiten -> Symbol -> Auswählen** ein Symbol für eine Schaltfläche festlegen, überschreibt das Symbol diese Beschriftung. |
| **Funktion** | Zeigt Ihnen den Namen der [Funktion](/basics/glossary-and-concepts#funktionen), die derzeit der Schaltfläche zugewiesen ist.<br><br>![](/basics/attach.png) Fügen Sie eine Funktion an an die Schaltfläche <br>![](/basics/detach.png) Trennen Sie die aktuelle Funktion von der Schaltfläche |
| **Externe Eingabe** | Sie können einen externen Eingabekanal von einem Eingabegerät (z. B. einem Slider-Board) an Schaltflächen anschließen, sodass Sie nicht immer die Maus, den Touchscreen oder die Tastatur verwenden müssen, um auf die Schaltflächen zuzugreifen.<br><br>**Eingabe Universum**: Das Eingabeuniversum, für das Sie Eingabedaten für die Schaltfläche bereitstellen möchten.<br>**Eingangskanal**: Der einzelne Eingangskanal innerhalb des ausgewählten Eingabeuniversums, den Sie zur Steuerung der Taste verwenden möchten.<br>**Automatische Erkennung**: Wenn umgeschaltet, können Sie einfach eine Taste auf Ihrem drücken externe Eingabehardware und wird automatisch der Taste zugewiesen. Die neueste Kombination wird in den Textfeldern angezeigt, wenn QLC+ Eingabedaten empfängt. Wenn in den Feldern nichts angezeigt wird, liegt möglicherweise ein Problem mit Ihrer Eingangsverbindung vor, das Sie zuerst beheben müssen.<br>**Wählen...**: Zeigt die Option [Eingangskanal auswählen](../select-input-channel)-Dialogfeld, mit dem Sie einen Eingangskanal manuell auswählen können. |
| **Tastenkombination** | Sie können der Schaltfläche eine Tastaturtaste (oder Tastenkombination) hinzufügen, die dann so wirkt, als ob Sie direkt mit der Maus auf die Schaltfläche geklickt hätten.<br><br>![](/basics/key_bindings.png) Fügen Sie eine Tastaturtaste hinzu (oder Tastenkombination) zur Schaltfläche <br>![](/basics/fileclose.png) Trennen Sie die aktuelle Tastenkombination von der Schaltfläche |
| **Bei Tastendruck...** | **Funktion ein-/ausschalten**: Wenn Sie auf die Schaltfläche klicken, wird die angehängte Funktion gestartet. Wenn Sie ein zweites Mal auf die Schaltfläche klicken, wird die Funktion gestoppt, sofern sie nicht bereits von selbst gestoppt wurde.<br>**Flash-Funktion**: Sie können die angehängte [Szene](/basics/glossary-and-concepts#szene) „flashen“, wenn Sie die Taste gedrückt halten. Wenn der Schaltfläche ein anderer Funktionstyp zugeordnet ist, passiert nichts, wenn Sie darauf klicken.<br>**Blackout umschalten**: Wenn Sie auf die Schaltfläche klicken, schaltet QLC+ den [Blackout-Modus](/basics/glossary-and-concepts#blackout) um<br>**Alle Funktionen stoppen**: Wenn Sie auf die Schaltfläche klicken, werden alle Funktionen, die in QLC+ ausgeführt werden, sofort gestoppt. Es ist möglich, eine Ausblendzeit festzulegen, die darauf wartet, dass alle Intensitätskanäle einen Nullpegel erreichen |
| **Funktionsintensität anpassen** | Wenn diese Funktion aktiviert ist, passt sie die Intensität der zugewiesenen Funktion unmittelbar vor der Wiedergabe an, wenn die Taste gedrückt wird. |

### Schaltflächenzustände

Eine Schaltfläche kann einen von drei Zuständen haben; Dies sind „Aus“, „Ein“ und „Überwachung“. Der Zustand kann durch einen Mausklick, durch den eingestellten externen Eingang oder durch die Verwendung der eingestellten Tastenkombination geändert werden.

| Status       | Schaltflächendarstellung | Zustandsbeschreibung                                                   |
|--------------|--------------------------|--------------- --------------------------------------------------------|
|  Aus         | Keine Grenze             | Die mit der Schaltfläche verknüpfte Funktion wird nicht ausgeführt.    |
|  Auf         | Grüner Rand              | Die Schaltfläche wurde aktiviert und führt die Funktion aus.           |
| Überwachung* | Oranger Rand             | Die Funktion wird ausgeführt (aber durch ein anderes Widget aktiviert) |

*Hinweis: Eine Schaltfläche im Überwachungsmodus sendet derzeit kein Feedback an einen zugehörigen Controller/Feedback-Universum.

Wenn Sie eine Schaltfläche drücken, während sie sich im „Überwachungs“-Zustand befindet, wird die Kontrolle über die laufende Funktion übernommen und der Schaltflächenrand wird grün. Durch erneutes Drücken wird die angehängte Funktion gestoppt.