---
title: 'Hauptfenster'
taxonomy:
    category: docs
child_type: docs
media_order: 'main-window.png'
---

<style>
    #chapter p {
        text-align: left;
    }
</style>

### Kapitel 2

# Hauptfenster

Das QLC+-Hauptfenster besteht aus drei Hauptteilen:

1. Eine Menüleiste mit Schaltflächen für globale Funktionen
2. Aktive Panels, ausgewählt durch ihre jeweiligen Registerkarten
3. Registerkarten, die die Auswahl eines der QLC+-Panels ermöglichen

![](/main-window/main-window.png)

Die meisten Steuerelemente in der Software verfügen über Tooltips, die angezeigt werden, wenn Sie den Mauszeiger eine kurze Zeit darüber halten.

### Menüleiste (1)

Die Menüleiste oben im Arbeitsbereichsfenster enthält die folgenden Schaltflächen (von links nach rechts):

* * *

![](../basics/filenew.png) Neuer Arbeitsbereich (STRG+N)

![](../basics/fileopen.png) Öffnen Sie einen vorhandenen Arbeitsbereich (halten Sie die Taste länger gedrückt, um eine Liste der zuletzt verwendeten Dateien anzuzeigen) (STRG+O)

![](../basics/filesave.png) Aktuellen Arbeitsbereich speichern (STRG+S)

![](../basics/filesaveas.png) Speichern Sie den aktuellen Arbeitsbereich unter einem neuen Namen


* * *

![](../basics/monitor.png)[DMX Monitor](/main-window/dmx-monitor) (CTRL+M)

![](../basics/diptool.png)[DMX Address tool](/main-window/dmx-address-tool)

![](../basics/audioinput.png)[Audio triggers](/virtual-console/audio-triggers)


* * *

![](../basics/fullscreen.png) Vollbildmodus umschalten (STRG+F11)

![](../basics/help.png) Diese Dokumentation anzeigen (Umschalt+F1)

![](../basics/qlcplus.svg?resize=32,32) Informationen zu QLC+ anzeigen


* * *

![](../basics/add_dump.png)[DMX Dump](/main-window/dmx-dump) (STRG+D)

![](../basics/liveedit.png)[Live Edit](/main-window/live-edit): ermöglicht Ihnen das Ändern einer Funktion, während sich QLC+ im Betriebsmodus befindet

![](../basics/liveedit_vc.png) Live Edit Virtual Console: Ermöglicht Ihnen, die virtuelle Konsole zu ändern, während sich QLC+ im Betriebsmodus befindet. Klicken Sie zum Umschalten

![](../basics/panic.png) Alle Funktionen stoppen (STRG+Umschalt+ESC)

![](../basics/blackout.png) Blackout umschalten

![](../basics/operate.png) Zwischen Entwurfsmodus und Betriebsmodus wechseln (STRG+F12)

### Aktive Kanäle (2)

Hier passiert alles. Welches Panel aktiv ist, hängt davon ab, welche Registerkarte aktuell ausgewählt ist.

### Panel-Registerkarten (3)

Unten im Hauptfenster finden Sie auffällige Symbole zum Wechseln zwischen QLC+-Kontexten.
Durch Doppelklick auf eine Registerkarte kann **ein Kontext in einem separaten Fenster gelöst werden**. Um einen getrennten Kontext wieder anzuhängen, schließen Sie einfach das Fenster.
QLC+-Kontexte werden in der folgenden Reihenfolge angezeigt (von links nach rechts):

![](../basics/fixture.png) Sehen Sie sich den [Fixture Manager](/fixture-manager) an.

![](../basics/function.png) Sehen Sie sich den [Funktionsmanager](/function-manager) an.

![](../basics/show.png) Den [Show Manager](/show-manager) anzeigen

![](../basics/virtualconsole.png) Sehen Sie sich die [Virtuelle Konsole](/virtual-console) an.

![](../basics/slidermatrix.png) Sehen Sie sich den [Simple Desk](/simple-desk) an.

![](../basics/input_output.png) Sehen Sie sich den Konfigurationsmanager [Input/Output](/input-output) an.