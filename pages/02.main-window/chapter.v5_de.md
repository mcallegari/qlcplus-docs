---
title: 'Hauptfenster'
taxonomy:
    category: docs
child_type: docs
media_order: 'main-window-v5.png,main-window.png'
---

<style>
    #chapter p {
        text-align: left;
    }
</style>

### Kapitel 2

# Hauptfenster

Das QLC+-Hauptfenster besteht aus vier Hauptteilen:

1.  Einer oberen Leiste mit den globalen Tastenkombinationen
2.  Einer Kontext-Untermenüleiste mit Steuerelementen für den ausgewählten Kontext
3.  Dem Haupt-Kontextbereich, der ein Vorschau- oder Bedienfeld sein kann
4.  Seitenpanels, um ohne Platzverschwendung auf die aktuelle Ansicht einzuwirken

![](/main-window/main-window-v5.png)

Die meisten Steuerelemente in der Software verfügen über Tooltips, die angezeigt werden, wenn Sie den Mauszeiger eine kurze Zeit darüber halten.

### Obere Leiste (1)

Die obere Hauptleiste enthält die folgenden Verknüpfungen (von links nach rechts):

* * *
#### ![](../basics/qlcplus.svg?resize=48,48) Menü für globale Aktionen

Dieses Menü ist von jedem QLC+-Kontext aus zugänglich und bietet eine Abkürzung zu den wichtigsten Projektoperationen.  
Die Menüeinträge sind hier aufgeführt:

![](../basics/filenew.svg) Ein neues, leeres Projekt erstellen (STRG+N)  
![](../basics/fileopen.svg?resize=48,48) Ein vorhandenes Projekt öffnen (zeigt beim Überfahren eine Liste der zuletzt verwendeten Dateien an) (STRG+O)  
![](../basics/filesave.svg?resize=48,48) Das aktuelle Projekt speichern (STRG+S)  
![](../basics/filesaveas.svg?resize=48,48) Das aktuelle Projekt unter einem neuen Namen speichern  
![](../basics/import.svg?resize=48,48) Fixtures und Funktionen aus einem vorhandenen Projekt importieren  

![](../basics/undo.svg) Die letzte Operation rückgängig machen  
![](../basics/redo.svg) Die zuletzt rückgängig gemachte Operation wiederholen  

![](../basics/network.svg) Client- und Server-Netzwerkeinstellungen konfigurieren (nativ oder Web Interface)  
![](../basics/diptool.svg) Das DIP-Schalter-Berechnungswerkzeug öffnen  
![](../basics/configure.svg) Das UI-Einstellungsfenster öffnen, um Farben, Skalierung usw. anzupassen  
<i class="fa fa-maximize fa-2x"></i> Vollbildmodus umschalten (STRG+F11)  
<i class="fa fa-earth-europe fa-2x"></i> Die UI-Sprache wechseln (erfordert möglicherweise einen Neustart der Anwendung)  
<i class="fa fa-circle-info fa-2x"></i> Informationen zu QLC+ anzeigen  

* * *

#### Schaltflächen zum Kontextwechsel

Durch Drücken dieser Schaltflächen können Sie von einem Kontext zum anderen wechseln.  
Kontexte können bei der Entwurfsphase, den Live-Operationen oder der Eingabe-/Ausgabekonfiguration helfen.  
Kontexte können durch Rechtsklick auf ihre Schaltfläche vom Hauptfenster gelöst werden.  

![](../basics/editor.svg?resize=48,48) [Fixtures and Functions](/fixtures-and-functions) anzeigen  
![](../basics/virtualconsole.svg?resize=48,48) Die [Virtual Console](/virtual-console) anzeigen  
![](../basics/simpledesk.svg?resize=48,48) Den [Simple Desk](/simple-desk) anzeigen  
![](../basics/showmanager.svg?resize=48,48) Den [Show Manager](/show-manager) anzeigen  
![](../basics/inputoutput.svg?resize=48,48) Den [Input/Output](/input-output)-Konfigurationsmanager anzeigen

#### Globale Hilfsfunktionen

Die obere Leiste des Hauptfensters enthält weitere Hilfsfunktionen auf der rechten Seite des Bildschirms.

![](../basics/dmxdump.svg?resize=48,48) Das [DMX Dump](dmx-dump)-Popup öffnen, um schnell Szenen zu erstellen  
<i class="fa fa-wave-square fa-2x"></i>    BPM-Steuerung: zeigt die aktuelle BPM-Zahl an und öffnet das [BPM Control](/bpm-system)-Popup  
![](../basics/stopall.svg?resize=48,48) Die Anzahl der laufenden Funktionen anzeigen und ermöglichen, sie alle auf einmal zu stoppen  


### Kontext-Untersteuerungsleiste (2)

Dies ist eine weitere Menüleiste, die sich je nach Kontext ändert (oder gar nicht vorhanden ist), in der Sie entweder den Kontext-Vorschaumodus auswählen oder eine Symbolleiste mit verschiedenen Steuerelementen finden können.  

* Fixtures And Functions zeigt Vorschaumodus- und Universumsauswahl  
* Virtual Console zeigt eine Seitenauswahl  
* Simple Desk zeigt eine Universumsauswahl und Reset  
* Show Manager zeigt Editor- und Wiedergabesteuerungen  
* Input/Output Manager hat keine Untersteuerungsleiste

### Hauptarbeitsbereich (3)

Hier passiert alles. Welches Panel aktiv ist, hängt davon ab, welcher Kontext gerade ausgewählt ist.

### Seitenpanels (4)

Seitenpanels wurden in Version 5 eingeführt, um Platz zu sparen und schnelle Werkzeuge zur Verbesserung der Projektbearbeitung bereitzustellen.  
In diesen Panels finden Sie Werkzeuge wie:
* Fixture Browser
* Editoren für Fixtures, Funktionen, Paletten oder Widgets
* Liste der Eingabe-/Ausgabe-Plugins, Eingabeprofile oder Virtual-Console-Widgets
