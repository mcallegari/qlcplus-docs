---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

Mit der DMX-Dump-Funktion können Sie die aktuellen DMX-Werte speichern, die zu einem bestimmten Zeitpunkt an die Ausgabeuniversen gesendet werden. Grundsätzlich wird ein „Schnappschuss“ der DMX-Kanäle erstellt und für eine spätere Verwendung gespeichert.
DMX Dump kann Werte in einer neuen [Szene](/basics/glossary-and-concepts#szene) speichern oder die Werte einer vorhandenen Szene überschreiben. Die „gedumpte“ Szene kann auch zu einem vorhandenen [Chaser](/basics/glossary-and-concepts#chaser), einer [Schaltfläche](/virtual-console/button) oder einem [Schieberegler](/virtual-console/slider) einer virtuellen Konsole hinzugefügt werden)

Bitte beachten Sie Folgendes:

* Ausgewählte Kanäle/Chaser werden beim erneuten Öffnen dieses Fensters gespeichert
* Die gespeicherten DMX-Werte werden vor dem Grand Master übernommen

Beim Öffnen des DMX-Dump-Fensters werden die folgenden Optionen angezeigt:

| | |
| - | - |
| **Szenenname** | Definiert den Namen der Szene, die erstellt wird. Wenn kein Name angegeben wird, werden ein Standardname wie „Neue Szene aus Live“ und eine numerische Identifikation festgelegt, was eine schnelle Nutzung dieser Funktionalität ermöglicht. |
| ![](/basics/scene.png) **Wählen Sie eine vorhandene Szene aus** | Durch Klicken auf diese Schaltfläche wird ein Funktionsauswahlfenster angezeigt, in dem Sie eine vorhandene Szene auswählen können, die mit den aktuellen DMX-Werten überschrieben werden soll.<br><br>***Hinweis:*** Beim Überschreiben einer Szene wird nicht gefragt zur Bestätigung und kann ein potenziell gefährlicher Vorgang sein, wenn Sie versehentlich die falsche Szene auswählen. Seien Sie also vorsichtig, wenn Sie diese Funktion verwenden.<br><br>Wenn eine Szene ausgewählt ist, stellt das DMX-Dump-Fenster automatisch zwei Dinge für Sie ein:<br>* Die Option „Ausgewählte Kanäle ausgeben“ wird aktiviert<br>* Der Gerätebaum wird aktualisiert und nur die in den Szenenkanälen aktivierten Kanäle werden ausgewählt. Wenn Sie verschiedene Kanäle überschreiben müssen, wählen Sie diese einfach manuell aus/ab, bevor Sie den Vorgang bestätigen<br>
| **Alle Kanäle löschen** | Wenn diese Option ausgewählt ist, speichert QLC+ alle Kanäle aller Universen und Geräte. Um den Benutzer darüber zu informieren, was diese Option bewirkt, wird ein Bericht in der Form (Universen, Fixtures, Kanäle) angezeigt. |
| **Ausgewählte Kanäle löschen** | Wenn diese Option ausgewählt ist, wird das folgende Bedienfeld aktiviert, sodass Sie genau auswählen können, welche Kanäle Sie in einer Szene speichern möchten. Sie sind in einer Baumstruktur nach Universen und Fixtures organisiert. |
| **Hinzufügen zu** | In diesem Abschnitt können Sie Ihre Szene sofort in einem vorhandenen Widget einer virtuellen Konsole verwenden.<br>Optionen sind:<br><br>**Chaser**: Die Liste enthält alle vorhandenen Chaser, wenn das DMX-Dump-Fenster geöffnet wird. Jeder Chaser verfügt über ein Kontrollkästchen, das, wenn es aktiviert ist, QLC+ anweist, die neu erstellte Szene zu den ausgewählten Chasern hinzuzufügen.<br>Diese Funktion ist sehr nützlich, wenn Sie [Cue-Listen](/virtual-console/cue-list) in verwenden [Virtual Console](/virtual-console)-Panel, da die neu erstellte Szene in der Cue-Liste zur sofortigen Verwendung während einer Live-Aufführung angezeigt wird.<br>**Button**: Die Liste enthält alle derzeit in Ihrem vorhandenen Buttons Virtuell Konsolenbereich.<br>Wenn diese Option ausgewählt ist, werden die Schaltflächen so eingestellt, dass sie die gerade aufgenommene Szene aktivieren/deaktivieren. Sie werden sehen, wie sich die Beschriftung der Schaltfläche in „Szene aus Live …“ ändert und eine Fortschrittsnummer zur Identifizierung angezeigt wird.<br>***Hinweis:*** Alle vorherigen Funktionen, die den ausgewählten Schaltflächen zugeordnet sind, werden überschrieben!<br> **Schieberegler**: Die Liste enthält alle Schieberegler, die derzeit in Ihrem virtuellen Konsolenbereich vorhanden sind.<br>Wie bei den Schaltflächen werden alle ausgewählten Schieberegler so eingestellt, dass sie die gerade aufgenommene Szene steuern.<br>***Hinweis 1* **: Ein Schieberegler muss sich im **Wiedergabemodus** befinden, um als Intensitätsregler zu funktionieren für eine Szene.<br>***Hinweis 2***: Alle vorherigen Funktionen, die den ausgewählten Schiebereglern zugeordnet sind, werden überschrieben! |
| **Nur Werte ungleich Null ausgeben** | Diese Option weist QLC+ an, nur die Kanäle mit Werten zu speichern, die **nicht** gleich Null sind.<br>Wenn Sie wissen, was Sie tun, könnte dies Projektraum sparen und Kanalkonflikte mit anderen Widgets der virtuellen Konsole vermeiden. |