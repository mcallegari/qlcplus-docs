---
title: 'Skript-Editor'
date: '04:07 22-08-2023'
---

Der Skripteditor wird, wie der Name schon sagt, zum Bearbeiten von ![](/basics/script.png) [Skript](/basics/glossary-and-concepts#skript)-Funktionen verwendet.  
Es besteht im Wesentlichen aus einem Texteditor, in dem der Benutzer ein Skript unter Verwendung einer Metasprache mit einer unten beschriebenen Syntax schreiben kann.  
Das Skript kann manuell geändert werden, wenn Sie die Syntax der Sprache vollständig verstehen. Andernfalls stehen ganz rechts im Editor einige Hilfsschaltflächen zur Verfügung, um die Erstellung/Bearbeitung des Skripts zu beschleunigen und zu erleichtern.  
Jede Zeile eines Skripts wird von QLC+ in sequentieller Reihenfolge ausgeführt.

### Kontrollen

|     |     |
| --- | --- |
| ![](/basics/player_play.png) | Aktivieren Sie die Ausgabe und führen Sie das Skript aus, um seine Ausführung zu testen |
| **Skriptname** | Ändern Sie den Namen des Skripts. |
| ![](/basics/edit_add.png) | Wenn Sie auf diese Schaltfläche klicken, wird ein Popup angezeigt, in dem Sie den Skriptausschnitt auswählen können, den Sie an der aktuellen Cursorposition im Editor einfügen möchten.<br><br>![](/basics/function.png) **Funktion starten**: Öffnet den Dialog [Funktionsauswahl](../function-selection), um eine zu startende Funktion auszuwählen.  <br> Durch diesen Vorgang wird am Ende der Codezeile automatisch ein Kommentar mit dem QLC+-Namen der ausgewählten Funktion hinzugefügt.<br>![](/basics/fileclose.png) **Funktion stoppen**: Öffnet das Dialogfeld [Funktionsauswahl](../function-selection), um eine Funktion auszuwählen, die gestoppt werden soll. Wenn zum Zeitpunkt der Ausführung dieser Codezeile die ausgewählte Funktion nicht ausgeführt wird, hat diese Anweisung keine Auswirkung.  <br> Durch diesen Vorgang wird am Ende der Codezeile automatisch ein Kommentar mit dem QLC+-Namen der ausgewählten Funktion hinzugefügt.<br>![](/basics/blackout.png) **Blackout**: Öffnet einen Dialog, der fragt, ob Blackout ein- oder ausgeschaltet werden soll.<br>![](/basics/fixture.png) **Gerät festlegen**: Öffnet den Auswahldialog für Fixture-Kanäle, in dem Sie die Kanäle auswählen können, die Sie mit dem Skript steuern möchten. Wenn mehrere Kanäle ausgewählt sind, fügt dieser Vorgang eine Codezeile für jeden ausgewählten Kanal hinzu. Standardmäßig ist der durch diesen Vorgang generierte DMX-Wert 0 und muss manuell mit dem Skripttexteditor geändert werden.  <br> Durch diesen Vorgang wird am Ende der Codezeile automatisch ein Kommentar mit dem QLC+-Namen der ausgewählten Geräte und Kanäle hinzugefügt.<br>![](/basics/player_play.png) **Systembefehl**: Öffnet einen Dateidialog zur Auswahl des auszuführenden externen Programms/Skripts. Bitte beachten Sie, dass die ausgewählte Datei ausführbar sein muss, um akzeptiert zu werden. Sobald eine Datei ausgewählt wurde, werden Sie in einem weiteren Dialog aufgefordert, die Programm-/Skriptargumente einzugeben. Wenn keine erforderlich sind, lassen Sie das Feld einfach leer.<br>![](/basics/speed.png)**Warten**: Öffnet einen Dialog, der die Wartezeit anfordert, bevor das Skript die nächste Anweisung ausführen kann<br>![](/basics/label.png) **Kommentar**: Öffnet einen Dialog, der den Text von anfordert Der Kommentar, der an der Cursorposition im Editor eingefügt werden soll.  <br> Ein Kommentar sieht im C-Sprachstil aus: Er beginnt mit „//“ und alles bis zum Ende der Zeile wird dann als Kommentar betrachtet<br>![](/basics/other.png) **Zufallszahl**: Öffnet ein Dialogfeld, in dem der Wertebereich abgefragt wird, in dem eine Randomisierung einer Zahl durchgeführt werden soll. Der resultierende Codeausschnitt wird an der aktuellen Cursorposition des Editors eingefügt.  <br> Dies kann nützlich sein, um DMX-Werte zu randomisieren, die über das Schlüsselwort setfixture festgelegt wurden. Siehe unten.<br>![](/basics/fileopen.png) **Dateipfad**: Öffnen Sie einen Dateidialog, um eine Datei auszuwählen. Der absolute Pfad und der Dateiname werden an der aktuellen Position des Editors eingefügt.  <br> Wenn ein Pfad Leerzeichen enthält, wird er in Anführungszeichen geschrieben |
| ![](/basics/editcut.png) | Schneiden Sie den aktuell ausgewählten Text im Editor aus, um ihn später einzufügen |
| ![](/basics/editcopy.png) | Kopieren Sie den aktuell ausgewählten Text im Editor zum späteren Einfügen |
| ![](/basics/editpaste.png) | Einen zuvor ausgeschnittenen oder kopierten Text an der Cursorposition im Editor einfügen |
| ![](/basics/undo.png) | Machen Sie den letzten am Editor ausgeführten Vorgang rückgängig |
| ![](/basics/check.png) | Überprüfen Sie die Skriptsyntax. Es wird eine Popup-Meldung angezeigt, die angibt, ob das Skript in Ordnung ist, oder die Zeilennummern, in denen Syntaxfehler gefunden wurden. |

### Sprachsyntax

Die QLC+ Script-Metasprache basiert auf einem **Schlüsselwort:Wert**-Modell mit einigen Einfügungen von C-Sprachsyntaxregeln.  
Jede Codezeile wird von der QLC+-Engine analysiert und überprüft, um das Vorhandensein von Syntaxfehlern zu erkennen.  
Hier ist eine Tabelle, die jedes von der Skript-Engine akzeptierte Schlüsselwort und seine Syntax beschreibt.

#### startfunction
**Typ**: Schlüsselwort<br>
**Beschreibung**: startet eine QLC+-Funktion mit der angegebenen ID<br>
**Syntax**: `startfunction:functionID`<br>
„functionID“ ist eine Ganzzahl der ID, die QLC+ einer Funktion zugewiesen hat.<br>
Da QLC+-Benutzern keine IDs angezeigt werden, ist es in diesem Fall praktisch, die Hilfsschaltfläche ganz rechts im Editor zu verwenden, die auch einen Kommentar mit dem Funktionsnamen hinzufügt. <br>
Irgendwann lernt ein Benutzer die ID einer Funktion und verwendet sie daher, um manuell mehr Code zum Skript hinzuzufügen.<br>
**Beispiel**:
```
startfunction:2 // Grüne Szene
```

#### stopfunction
**Typ**: Schlüsselwort<br>
**Beschreibung**: stoppt eine laufende QLC+-Funktion mit der angegebenen ID<br>
**Syntax**: `stopfunction:functionID`<br>
`functionID` ist eine Ganzzahl der ID, die QLC+ einer Funktion zugewiesen hat. Siehe _startfunction_-Beschreibung.<br>
**Example**:
```
stopfunction:0 // Grüne Szene
```

#### blackout
**Typ**: Schlüsselwort<br>
**Beschreibung**: schaltet den Blackout an oder aus<br>
**Syntax**: `blackout:on|off`<br>
`functionID` ist eine Ganzzahl der ID, die QLC+ einer Funktion zugewiesen hat. Siehe _startfunction_-Beschreibung.<br>
**Beispiele**:
```
blackout:an
blackout:aus
```
#### systemcommand
**Typ**: Schlüsselwort<br>
**Beschreibung**: führt ein Programm oder ein Skript im angegebenen absoluten Pfad mit den (optionalen) bereitgestellten Argumenten aus<br>
**Syntax**: `systemcommand:programPath arg:arg1 arg:arg2 ... arg:argN`<br>
`programPath` ist der absolute Pfad eines ausführbaren Programms oder Skripts. Zum Beispiel `/usr/bin/vlc` or `C:\\Tools\\myTool.exe`<br>
Wenn der Pfad zu einer ausführbaren Datei Leerzeichen enthält, muss er in Anführungszeichen geschrieben werden.<br>
`_arg1 ... argN` sind die Argumente, die beim Ausführen von _programPath_ verwendet werden sollen. Wenn keine Argumente benötigt werden, sind die Schlüsselwörter `arg:` nicht erforderlich.<br>
Wenn ein Argument Leerzeichen enthält, muss es in Anführungszeichen geschrieben werden.<br>
**Beispiele**:
```
systemcommand:/usr/bin/vlc arg:-f arg:/home/user/video.mp4 // spielt mein Video mit VLC im Vollbildmodus ab
systemcommand:"C:\\Program Files\\Tools\\My Tool.exe" arg:"D:\\My Files\\My file.txt"
```

#### setfixture
**Typ**: Schlüsselwort<br>
**Beschreibung**: setzt einen QLC+ Fixture-Kanal auf den angegebenen DMX-Wert.<br>
**Syntax**: `setfixture:fixtureID ch:channelIndex val:DMXValue`<br>
`fixtureID` ist eine Ganzzahl der ID, die QLC+ einer Funktion zugewiesen hat.<br>
Da QLC+-Benutzern keine IDs angezeigt werden, ist es in diesem Fall praktisch, die Hilfsschaltfläche ganz rechts im Editor zu verwenden, die auch einen Kommentar mit dem Geräte- und Kanalnamen hinzufügt.<br>
Schließlich erfährt ein Benutzer die ID eines Geräts und den Index eines Kanals und kann diese daher verwenden, um manuell mehr Code zum Skript hinzuzufügen.<br>
`channelIndex` ist eine Ganzzahl, die die Kanalnummer des Geräts darstellt. Die Kanalindizes beginnen hier bei 0.<br>
`DMXValue` ist der tatsächliche DMX-Wert, der auf den angegebenen Gerätekanal eingestellt werden soll. Der Wert liegt zwischen 0 und 255.<br>
**Beispiel**:
```
setfixture:0 ch:1 val:135 // Generisches RGB, Rot. Setzt den roten Kanal eines generischen RGB-Geräts auf den DMX-Wert 135
```

#### wait
**Typ**: Schlüsselwort<br>
**Beschreibung**: wartet die angegebene Zeit ab, bevor die nächste Codezeile ausgeführt wird.<br>Beachten Sie, dass eine Wartezeit auch zufällig festgelegt werden kann, indem Sie der unten beschriebenen _zufälligen_-Syntax folgen.<br>
**Syntax**: `wait:time`<br>
`time` kann entweder eine ganze Zahl von Millisekunden oder eine Zeichenfolge sein, die die Wartezeit im QLC+-Stil darstellt: \*\*h\*\*m\*\*s.\*\*  <br>
**Beispiele**:
```
wait:1800 //wartet für 1 Sekunde und 800 Millisekunden
wait:03s.20 // Wartet für 3 Sekunden and 200 Millisekunden
```

#### waitfunctionstart
**Typ**: Schlüsselwort<br>
**Beschreibung**: warten, bis eine bestimmte Funktion ausgeführt wird.<br>Dieser Befehl benötigt ein Argument, nämlich die ID der Funktion, auf die gewartet werden soll. Sobald die angegebene Funktion ausgeführt wird oder wenn sie bereits ausgeführt wird, wird das Skript ab der nächsten Zeile weiter ausgeführt.<br>
**Syntax**: `waitfunctionstart:functionID`<br>
`functionID` ist eine Ganzzahl der ID, die QLC+ einer Funktion zugewiesen hat. Siehe _startfunction_-Beschreibung.<br>
**Beispiele**:
```
waitfunctionstart:2 // Warten Sie, bis die grüne Szene beginnt
```

#### waitfunctionstop
**Typ**: Schlüsselwort<br>
**Beschreibung**: warten, bis eine bestimmte Funktion nicht mehr ausgeführt wird.<br>Dieser Befehl benötigt ein Argument, nämlich die ID der Funktion, auf die gewartet werden soll. Sobald die angegebene Funktion nicht mehr ausgeführt wird oder wenn sie nicht bereits ausgeführt wird, wird das Skript ab der nächsten Zeile weiter ausgeführt.<br>
**Syntax**: `waitfunctionstart:functionID`<br>
`functionID` ist eine Ganzzahl der ID, die QLC+ einer Funktion zugewiesen hat. Siehe _startfunction_-Beschreibung.<br>
**Beispiele**:
```
waitfunctionstop:0 // Warten Sie, bis die blaue Szene aufhört
```

#### Kommentare
**Typ**: Hilfsmakro<br>
**Beschreibung**: Kommentare können an beliebiger Stelle im Skriptcode eingefügt werden und haben keinen Einfluss auf die Ausführung des Skripts. Sie werden normalerweise verwendet, um einer Codezeile eine Bedeutung zu geben.<br>
QLC+-Skriptkommentare folgen der `C`-Sprachregel für die Syntax „//“. Grundsätzlich wird alles, was nach „//“ bis zum Ende der Codezeile geschrieben wird, als Kommentar betrachtet.<br>
Achten Sie daher besonders darauf, nach einem „//“ keinen sinnvollen Code zu schreiben und zu erwarten, dass dieser ausgeführt wird, da dies nicht der Fall ist.<br>
Kommentare können am Ende einer Skriptzeile hinzugefügt werden oder eine ganze Zeile einnehmen, beispielsweise um einen gesamten Codeblock zu beschreiben.

#### random
**Typ**: Hilfsmakro<br>
**Beschreibung**: generiert eine zufällige Ganzzahl zwischen den angegebenen Minimal- und Maximalwerten<br>
**Syntax**: `random(min,max)`<br>
`min` ist der Minimalwert, den die Randomisierung erreichen kann. Es kann entweder eine Ganzzahl oder eine Zeitzeichenfolge sein.<br>
`max` ist der Maximalwert, den die Randomisierung erreichen kann. Es kann entweder eine Ganzzahl oder eine Zeitzeichenfolge sein.<br>
**Beispiele**:
```
wait:random(02s.00,05s.00) // Waits a random time between 2 and 5 seconds
// set channel 3 of fixture with ID:1 to a random DMX value between 20 and 235
setfixture:1 ch:2 val:random(20,235)
```

#### stoponexit
**Typ**: Schlüsselwort<br>
**Beschreibung**: controls whether functions started during the script should be stopped at the end.<br>
**Syntax**: `stoponexit:[true|false]`<br>
`true`: Alle danach gestarteten Funktionen werden gestoppt, wenn das Skript beendet ist (Standardverhalten).<br>
`false`: Alle danach gestarteten Funktionen werden nach Abschluss des Skripts weiter ausgeführt.<br>
**Beispiele**:<br>
In diesem Skriptbeispiel werden die Funktionen 1 und 3 am Ende gestoppt, die Funktionen 2 und 4 werden jedoch weiter ausgeführt.
```
startfunction:1 // Standardverhalten: Funktion 1 wird gestoppt

stoponexit:false
startfunction:2 // Funktion 2 läuft weiter

stoponexit:true
startfunction:3 // Funktion 3 wird gestoppt

stoponexit:false
startfunction:4 // Funktion 4 läuft weiter
```