---
title: 'Showmanager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Kapitel 5

# Showmanager

Diese Funktion soll Benutzern die Möglichkeit geben, eine zeitgesteuerte Show auf benutzerfreundliche und vollständig grafische Weise einzurichten.  
Die grafische Benutzeroberfläche zeigt eine Mehrspuransicht, wie sie für Audiosequenzer oder Videobearbeitungssoftware typisch ist, und mit ihr können Benutzer QLC+-[Funktionen](/basics/glossary-and-concepts#funktionen) an der gewünschten Stelle und zum gewünschten Zeitpunkt in der Ansicht platzieren.  
Show Manager bietet dank seines visuell orientierten Ansatzes viel Flexibilität bei der Erstellung einer [Show](/basics/glossary-and-concepts#show). Sobald Sie die Grundelemente verstanden haben, ist es sehr einfach, die vorhandenen Funktionen zu erstellen, zu verschieben oder zu bearbeiten und eine Show durch das Hinzufügen neuer Tracks zu verbessern.  

Typische Anwendungsfälle für Shows sind Auftritte, bei denen eine Band Lieder nach einem Metronom spielt und die Lichtshow immer die gleiche sein muss, die der Musik folgt.  
Ein weiterer Fall sind visuelle Unterhaltungsshows, bei denen Tänzer oder Sänger der Musik folgen und Lichter zum richtigen Zeitpunkt für Atmosphäre sorgen.  

Der Show Manager regt Benutzer dazu an, die Sequenzfunktion intensiv zu nutzen. Hier ist die Erklärung des Unterschieds zwischen einem Chaser und einer Sequenz.  

Sequenzen vs. Chaser
--------------------

Auch wenn die Funktionen [Sequenz](/basics/glossary-and-concepts#sequenz) und [Chaser](/basics/glossary-and-concepts#chaser) einige Gemeinsamkeiten haben, sind sie nicht dasselbe.  
Falls noch nicht geschehen, können Sie die Definitionen noch einmal auf der Seite [Grundlegende Konzepte und Glossar](/basics/glossary-and-concepts) dieser Dokumentation lesen.  
Die Hauptunterschiede sind:

**Schritte**: Die Schritte eines Chasers können jede QLC+-Funktion darstellen, während die Schritte einer Sequenz verschiedene Werte derselben [Szene](/basics/glossary-and-concepts#szene) darstellen.  
    Mit anderen Worten: Ein Chaser ist eine unabhängige Funktion, während eine Sequenz nur über einer Szene existieren kann.
    Der Grund dafür ist, wie bereits erwähnt, der visuelle Ansatz des Showmanagers. Wenn eine Spur einer Show die grafische Darstellung einer Szene ist, ist es intuitiver anzunehmen, dass jede auf dieser Spur erstellte Sequenz eine Funktion ist, die die Werte dieser Szene steuert.

**Reihenfolge**: Chaser können in beliebiger Reihenfolge wiedergegeben werden (Vorwärts, Rückwärts, Ping-Pong, Zufall), während im Show Manager Sequenzen immer vom Anfang bis zum Ende (Vorwärts) wiedergegeben werden. Dies hängt wiederum mit dem visuellen Aspekt des Show Managers zusammen, bei dem die Wiedergabe eine natürliche Zeitvorwärtsrichtung hat.  
    Andererseits können mit dem Funktionsmanager erstellte Sequenzen die gleichen Reihenfolgeeigenschaften wie Chaser haben.

**Bearbeiten**: Auch der Bearbeitungsansatz zwischen Sequenzen und Chaser ist unterschiedlich.  
    Normalerweise sieht der Arbeitsablauf eines Chasers so aus: Erstellen Sie eine Funktion und fügen Sie sie dann als Schritt zum Chaser hinzu.  
    Der Arbeitsablauf einer Sequenz ist: Erstellen Sie eine Szene, erstellen Sie eine Sequenz darüber und fügen Sie Schritte hinzu.  
    Der Sequenz-Ansatz kann bei der Gestaltung einer Lichtshow sehr effektiv sein, wenn Sie wissen, welche Leuchten Sie verwenden werden. Ein weiterer großer Vorteil der Sequenzbearbeitung besteht darin, dass beim Erstellen eines neuen Schritts die Werte des vorherigen Schritts in den neuen kopiert werden. Der Benutzer muss also lediglich die Unterschiede zwischen ihnen anpassen.  
    Wenn Sie 500 Schritte erstellen und diese alle unterschiedlich sind, dauert die Erstellung von Sequenzen und Chasern fast gleich lange.  

**Synchronisierung**: Ein weiterer großer Vorteil der Verwendung von Sequenzen in einer Show besteht darin, dass eine Show leicht erweitert (oder reduziert) werden kann, während es Ihnen bei einem Chaser schwerfällt, die neuen Funktionen mit den vorhandenen zu synchronisieren.  
    Ein Beispiel. Nehmen wir an, Ihr Projekt steuert 50 Geräte, die eine Mischung aus Moving Heads, PARs und Scannern sind. Irgendwann kauft man ein paar Laser und möchte, dass sie zu bestimmten Zeitpunkten in vorhandenen Szenen aktiv werden. Mit dem Show Manager können Sie das in wenigen Minuten erledigen! Sie müssen lediglich die beiden neuen Geräte zum Projekt hinzufügen, eine Spur zu den von der Änderung betroffenen Shows hinzufügen und einige Sequenzen zur Steuerung der Laser erstellen.  
    Mit der Lebenslauffunktion des Show Managers sparen Sie außerdem viel Zeit beim Testen der neuen Änderungen.  
    Bei Chasern müssten Sie sich wahrscheinlich mit komplexen [Sammlungen](/basics/glossary-and-concepts#sammlung) befassen und die Zeitabläufe einiger Schritte überprüfen, bevor Sie die richtige Kombination finden.

Manager-Symbolleisten-Steuerelemente anzeigen
-----------------------------

|     |     |     |
| --- | --- | --- |
| ![](/basics/show.png) | STRG+H | Erstellen Sie eine neue [Show](/basics/glossary-and-concepts#show). Eine Show wird als mehrspuriger Arbeitsbereich dargestellt, in dem Spuren, Sequenzen und Audioelemente hinzugefügt werden können |
| **Zeigt Liste** |     | In diesem Dropdown-Feld werden die aktuell erstellten Shows aufgelistet. Durch Klicken auf eine Show wird diese angezeigt. |
| ![](/basics/edit_add.png) | STRG+N | Erstellen Sie einen neuen Track oder fügen Sie vorhandene Funktionen zur Show hinzu. Wenn Sie auf diese Schaltfläche klicken, wird ein Fenster angezeigt, in dem Sie die folgenden Vorgänge ausführen können:<br><br>**Eine neue Spur erstellen**: Dadurch wird eine neue leere Spur erstellt, die als Container für Sequenzen und Audiofunktionen dient .<br>**Vorhandene Szene importieren**: Dadurch wird ein neuer Track und eine 10-Sekunden-Sequenz mit einem einzigen Schritt erstellt, der die ausgewählte Szene darstellt.<br>**Vorhandene Sequenz importieren**: Dieser Vorgang scannt die vorhandene verfolgt und ob ein bereits gebundener Titel gefunden wird Klicken Sie auf die gebundene Szene der Sequenz und fügen Sie dann die Sequenz dieser Spur an der Cursorposition hinzu.  <br> Wenn kein kompatibler Track gefunden wird, wird ein neuer Track erstellt und an die gebundene Szene der Sequenz gebunden.<br>**Importieren eines vorhandenen [Chasers](/basics/glossary-and-concepts#chaser)**: Fügen Sie an der Cursorposition auf der ausgewählten Spur eine Chaser-Funktion hinzu. Wenn kein Track verfügbar ist, wird ein neuer erstellt.<br>**Importieren eines vorhandenen [Audio](/basics/glossary-and-concepts#audio)**: Fügen Sie eine Audiofunktion an der Cursorposition auf der ausgewählten Spur hinzu. Wenn kein Track verfügbar ist, wird ein neuer erstellt.<br>**Importieren eines vorhandenen [EFX](/basics/glossary-and-concepts#efx)**: Fügen Sie eine EFX-Funktion an der Cursorposition auf dem ausgewählten hinzu Schiene. Wenn keine Spur verfügbar ist, wird eine neue erstellt.<br>**Importieren einer vorhandenen [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix)**: Fügen Sie am Cursor eine RGB-Matrixfunktion hinzu Position auf dem ausgewählten Titel. Wenn kein Track verfügbar ist, wird ein neuer erstellt.<br><br>Eine Show kann praktisch unendlich viele Tracks haben. |
| ![](/basics/sequence.png) | STRG+E | Erstellen Sie ein neues [Sequenz](/basics/glossary-and-concepts#sequenz)-Element und binden Sie es an die ausgewählte Spur. |
| ![](/basics/audio.png) | STRG+A | Erstellen Sie ein neues [Audio](/basics/glossary-and-concepts#audio)-Element. Ein Audioelement stellt einfach eine Audiodatei dar. Audioelemente können zu jeder Spur hinzugefügt werden. Wenn Sie jedoch eine separate Spur dafür erstellen möchten, erstellen Sie einfach eine neue Spur.  <br>**Hinweis:** Es ist möglich, die Wellenformvorschau eines Audioelements anzuzeigen, indem Sie einfach mit der rechten Maustaste darauf klicken und die Kanäle auswählen, die Sie anzeigen möchten (Mono, linker Kanal, rechter Kanal, Stereo).  <br>**Warnung:** Auch wenn QLC+ dies ermöglicht, ist es nicht möglich, zwei Audiodateien gleichzeitig abzuspielen. Insbesondere unter Windows kann es zu unerwünschten Abstürzen kommen. |
| ![](/basics/editcopy.png) | STRG+C | Kopieren Sie das aktuell ausgewählte Element in die QLC+-Zwischenablage |
| ![](/basics/editpaste.png) | STRG+V | Fügen Sie den Inhalt der QLC+-Zwischenablage an der Cursorposition ein. Bei der Ausführung dieses Vorgangs werden zwei Prüfungen durchgeführt:<br><br>**Überlappung**: Prüft, ob sich das Element, das Sie einfügen möchten, mit einem vorhandenen Element in der ausgewählten Spur überschneidet.<br>**Gültigkeit**: Wenn Sie eine Sequenz einfügen, überprüft QLC+, ob der Inhalt der Sequenz mit der aktuell ausgewählten Spur kompatibel ist |
| ![](/basics/editdelete.png) | Entf | Löschen Sie das aktuell ausgewählte Element. Dies kann eine Sequenz, ein Audioelement oder ein Track sein. Beachten Sie, dass beim Löschen eines Tracks auch alle seine Sequenzen/Audio-Untertitel gelöscht werden.  <br>**Hinweis: Show Manager führt nur eine „visuelle Entfernung“ von Funktionen durch. Um sie dauerhaft zu löschen, verwenden Sie bitte den [Funktionsmanager](/function-manager)** |
| ![](/basics/color.png) | STRG+L | Dem ausgewählten Element eine benutzerdefinierte Farbe zuweisen |
| ![](/basics/lock.png) | STRG+K | Sperren oder entsperren Sie das ausgewählte Element. Sobald ein Element gesperrt ist, kann es nicht mehr auf der Timeline gezogen werden |
| ![](/basics/speed.png) | STRG+T | Öffnen Sie ein Fenster, in dem Sie die Startzeit und Gesamtdauer des ausgewählten Elements anpassen können. Das Verhalten des letzteren hängt vom ausgewählten Element ab.  <br>Bei Audio- und Videoelementen passiert nichts.  <br>Bei Sequenzen und Chasern werden alle Schrittzeiten gestreckt, um sie an die gewünschte Dauer anzupassen.  <br>Auf EFX- und RGB-Matrizen werden einige zusätzliche Optionen angezeigt, die es ermöglichen, die ursprüngliche Funktion zu strecken oder die Funktion zu wiederholen, bis die gewünschte Dauer erreicht ist. |
| ![](/basics/grid.png) | STRG+G | Aktivieren/deaktivieren Sie die Funktion „Am Raster ausrichten“. Die Ansicht wird mit vertikalen Balken gefüllt, die den Kopfmarkierungen (Zeit oder BPM) entsprechen. <br>Durch das Einrasten am Raster werden Ihre Elemente korrigiert, indem Sie sie zur nächstgelegenen Referenzleiste ziehen |
| **00:00:00.000** |     | In diesem Feld wird die Zeitposition des Cursors angezeigt, sowohl wenn die Wiedergabe gestoppt als auch aktiviert ist |
| ![](/basics/player_play.png)![](/basics/player_pause.png) | Leertaste | Starten Sie die Wiedergabe der aktuellen Show ab der Cursorposition oder halten Sie sie an und lassen Sie die Lichter an. |
| ![](/basics/player_stop.png) | STRG+Leertaste | Stoppen Sie die aktuelle Show-Wiedergabe. Durch einmaliges Klicken stoppt der Cursor an der aktuellen Position und kann später fortgesetzt werden. Durch zweimaliges Klicken wird der Cursor auf 0 Sekunden zurückgesetzt.  <br>**Hinweis:** Wenn Sie eine Show mit Audiospuren fortsetzen, beachten Sie bitte, dass die Audiogenauigkeit von den von Ihnen verwendeten Dateiformaten abhängt. Beispielsweise ist der Lebenslauf von MP3-Dateien nicht besonders genau, wohingegen der Lebenslauf von Wave-Dateien nicht besonders genau ist. |
| **Zeitmarkierungen** |     | In diesem Dropdown-Menü können Sie die gewünschte Zeiteinteilung auswählen, die für Ihre Show angezeigt werden soll.  <br>Dies kann entweder „Zeit“, „BPM 4/4“, „BPM 3/4“ oder „BPM 2/2“ sein. |
| **BPMs** |     | Wenn ein BPM-Zeitteilungsmodus ausgewählt ist, können Sie in diesem Feld den geeigneten BPM festlegen, der für Ihre Show eingestellt werden soll. Dieser Bereich liegt zwischen 20 und 240. <br>Dies kann sehr nützlich sein, wenn Sie mit elektronischer Musik oder BPM-synchronisierten Shows arbeiten |

Nur 4 Schritte
------------

Der Show Manager ist so eingerichtet, dass er schnell und einfach verwendet werden kann. Grundsätzlich kann mit nur 4 Schritten eine komplette [Show](/basics/glossary-and-concepts#show) erstellt werden:

#### 1. Eine neue Show hinzufügen ![](/basics/show.png)

Zunächst müssen Sie der Ansicht eine neue Show hinzufügen. Dadurch wird eine leere Multitrack-Ansicht ohne Tracks und ohne Elemente erstellt, die zum Füllen bereit ist.  
Es erscheint ein Popup, in dem Sie nach dem Namen gefragt werden, den Sie der Show zuweisen möchten. Es ist möglich, den Namen nachträglich mit dem [Funktionsmanager](/function-manager) über das Bedienfeld [Show Editor](/function-manager/show-editor) zu ändern.

#### 2. Einen Titel hinzufügen ![](/basics/edit_add.png)

Wenn Sie einen Track hinzufügen, werden Sie in einem Popup aufgefordert, eine vorhandene Funktion auszuwählen oder eine neue mit einem Standardnamen zu erstellen.  
Wenn Sie fertig sind, wird ein neuer Track erstellt. Alle auf dieser Spur erstellten Sequenzen wirken sich nur auf die zugehörige Szene aus und haben keinen Einfluss auf die anderen Spuren.  
Ein neu erstellter Track wird automatisch als aktiv gesetzt. Eine aktive Spur hat auf der linken Seite ein grünes Licht.  
Eine Spur kann auf ![](track-mute.png) Stummschaltung und ![](track-solo.png) Solo-Zustand eingestellt werden. Im Stummschaltungszustand wird die Spur von der Wiedergabe ausgeschlossen, während im Solo-Zustand alle anderen Spuren der Show stummgeschaltet werden.  
Wenn Sie mit der rechten Maustaste auf einen Titel klicken, können Sie ihn nach oben ![](/basics/up.png) oder nach unten ![](/basics/down.png) verschieben, um eine logische Reihenfolge zu erreichen.  
Sobald eine Spur ausgewählt ist, wird ihr [Szeneneditor](/function-manager/scene-editor) unten auf dem Bildschirm angezeigt.

#### 3. Fügen Sie einige [Funktionen](/basics/glossary-and-concepts#funktionen) hinzu

Wenn ein Titel aktiviert wurde, können Sie schnell eine ![](/basics/sequence.png) [Sequenz](/basics/glossary-and-concepts#sequenz) oder eine ![](/basics/audio.png) [Audio](/basics/glossary-and-concepts#audio)-Funktion hinzufügen, indem Sie auf die Symbolleistenschaltflächen klicken.  
Andernfalls ist es durch Klicken auf die Schaltfläche ![](/basics/edit_add.png) möglich, vorhandene QLC+-Funktionen zu importieren und zur Show-Timeline hinzuzufügen.  
Ein neues Element wird an der Cursorposition platziert, es ist jedoch jederzeit möglich, es an die gewünschte Zeit zu verschieben, indem Sie es einfach entlang der Zeitleiste ziehen.  
Ein Element kann nicht in eine andere Spur verschoben werden, da es an die Spur gebunden ist, in der es ursprünglich erstellt wurde.  
Mit den Symbolleistensymbolen kann ein Element kopiert ![](/basics/editcopy.png), eingefügt ![](/basics/editpaste.png) oder gelöscht ![](/basics/editdelete.png) werden. Das eingefügte Element wird an der aktuellen Cursorposition platziert.  
Die Hintergrundfarbe des Elements kann mit dem Symbolleistensymbol ![](/basics/color.png) geändert werden. Die zugewiesene Farbe wird in Ihrer Projektdatei gespeichert.  
Sobald ein Element ausgewählt ist, wird auf der rechten Seite des Bildschirms sein spezifischer Funktionseditor angezeigt. Wenn Sie mit der rechten Maustaste auf ein Element klicken, wird ein Kontextmenü mit den folgenden Optionen angezeigt:

* **Vorschau**: Diese Option ist nur für Audioelemente verfügbar. Es wird die Wellenformvorschau für den rechten, linken oder Stereokanal angezeigt, sofern verfügbar
* **Am Cursor ausrichten**: Diese Option verschiebt das ausgewählte Element an die Cursorposition
* ![](/basics/lock.png)**Sperren/Entsperren**: Sobald ein Element gesperrt ist, kann es nicht mehr auf der Timeline gezogen werden

Befolgen Sie Schritt 4, um zu verstehen, wie eine Sequenz gefüllt wird.  

#### 4. Bearbeiten Sie Ihre Funktionen

Sobald ein Element erstellt wurde, ist es nun an der Zeit, es zu bearbeiten.  
**Bitte beachten Sie**, dass der Unterschied zwischen einem Chaser und einer Sequenz darin besteht, dass eine Sequenz an die Spur (also die Szene) gebunden ist, in der sie erstellt wurde. Wenn Sie also einen Schritt hinzufügen, fordert QLC+ nicht zur Auswahl einer bestimmten Funktion auf, sondern verwendet immer die Kanäle derselben Szene.  
Wenn Sie eine Funktion bearbeiten, sehen Sie, wie sich das Element in der Multitrack-Ansicht ändert, und geben eine sofortige Rückmeldung zur Ausrichtung auf andere Elemente oder bestimmte Zeitpunkte.  
Ein- und Ausblendzeiten werden als diagonale Linien über den Elementen in der Multitrack-Ansicht angezeigt, während verschiedene Schritte/Loops durch vertikale Linien unterteilt werden.  


Um die Komplexität der Show zu erhöhen, können weitere Funktionen hinzugefügt werden. Wiederholen Sie einfach die oben genannten Schritte je nach Bedarf.  

Und schließlich...spielen! ![](/basics/player_play.png)
---------------------------------------------

Wenn schließlich eine komplette Show erstellt wurde, kann diese einfach durch Klicken auf das Play-Symbol abgespielt werden.  
Die Wiedergabe beginnt immer an der aktuellen Cursorposition. Die Cursorposition kann durch Klicken auf die Zeitleiste geändert werden.