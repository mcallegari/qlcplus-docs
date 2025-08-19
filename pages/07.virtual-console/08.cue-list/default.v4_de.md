---
title: 'Cue-Liste'
date: '03:34 22-08-2023'
---

Eine Cue-Liste stellt eine Liste von [Funktionen](/basics/glossary-and-concepts#funktionen) bereit, die Sie mit einer einzigen Tastaturtaste durchlaufen können. Die Cue-Liste ist für Theateraufführungen konzipiert, bei denen der Beleuchter nur dem Skript folgen und im Verlauf der Aufführung den nächsten Cue umschalten muss.

In der ersten Spalte der Cue-Liste wird die Cue-Nummer angezeigt, die von 1 bis unendlich und darüber hinaus reicht[*](https://en.wikipedia.org/wiki/Buzz_Lightyear). Die zweite Spalte zeigt den einzelnen [Funktions](/basics/glossary-and-concepts#funktionen)-Namen, der diesem bestimmten Cue zugewiesen wurde.

**Bitte beachten Sie**, dass einer Cue-Liste nur [Chaser](/basics/glossary-and-concepts#chaser) zugewiesen werden können, und zwar aus dem einfachen Grund, dass der Chaser die einzige Funktion mit einer Dauer ist. Da mit dem [Chaser-Editor](/function-manager/chaser-editor) jede andere Funktion als Schritt zu einem Chaser hinzugefügt werden kann, ist es einfach, die gewünschten Cues durch Mischen von [Szenen](/basics/glossary-and-concepts#szene) zu erstellen, [Sammlungen](/basics/glossary-and-concepts#sammlung) und so weiter ...

### Konfiguration

Cue-Listen können mit der Objekteigenschaften-Schaltfläche ![](/basics/edit.png) in der Symbolleiste oder durch Doppelklick auf das Cue-List-Widget konfiguriert werden.

|     |     |
| --- | --- |
| **Name der Cue-Liste** | Legen Sie den benutzerfreundlichen Namen der Cue-Liste fest. Der Name erscheint als Titel der zweiten Spalte der Cue-Liste. |
| **Cue-Liste** | **Chaser**: Wählen Sie den [Chaser](/basics/glossary-and-concepts#chaser) aus, der der Cue-Liste zugeordnet werden soll.  <br>![](/basics/attach.png) Verknüpfen Sie einen [Chaser](/basics/glossary-and-concepts#chaser) mit der Cue-Liste mithilfe der Funktion [Funktion auswählen](/function-manager/function-selection) Dialog.  <br>![](/basics/detach.png) Trennen Sie den ausgewählten Chaser von der Cue-Liste.  <br> <br>**Layout der Wiedergabetasten**: Wählen Sie aus, wie die Wiedergabe mit den beiden verfügbaren Tasten gesteuert werden kann.  <br> <br>**Verhalten der Schaltflächen „Weiter/Zurück“, wenn der Chaser nicht aktiv ist**: Wählen Sie das Verhalten der Schaltflächen „Weiter“ und „Zurück“, wenn der Chaser nicht läuft. Grundsätzlich bestimmt diese Option die Aktion, die ausgeführt werden soll, wenn der Chaser zum ersten Mal gestartet wird oder wenn der Chaser bei einem beliebigen Cue in der Liste gestoppt wird.  <br>Die möglichen Optionen sind:<br><br>**Chaser ab dem ersten/letzten Cue ausführen (Standard)**: Dies ist das Standardverhalten und der Chaser wird in seiner ursprünglichen Reihenfolge (Normal oder umgekehrt) ausgeführt. <br>**Chaser ab nächstem/vorherigem Cue ausführen**: Starten Sie den Chaser ab dem Cue, an dem er unterbrochen wurde<br>**Nächsten/vorherigen Cue auswählen**: Dies führt nur eine Auswahl eines Cues durch, ohne den Chaser auszuführen<br>**Nichts tun**: In diesem Fall wird keine Aktion ausgeführt. Dies ist nützlich, wenn Sie nur mit der Play/Stop-Taste arbeiten. |
| **Wiedergabe** | Mit dieser Option können Sie die Taste auswählen, mit der Sie den ausgewählten Cue in der Cue-Liste starten/stoppen möchten. Die Tastenkombination wird im Textfeld angezeigt; Wenn das Feld leer ist, ist der Cue-Liste derzeit keine Tastenkombination zugeordnet. |
| **Nächster Hinweis** | Mit dieser Option können Sie die Taste auswählen, mit der Sie zum nächsten Cue in der Cue-Liste springen möchten. Die Tastenkombination wird im Textfeld angezeigt; Wenn das Feld leer ist, ist der Cue-Liste derzeit keine Tastenkombination zugeordnet. |
| **Vorheriger Hinweis** | Mit dieser Option können Sie die Taste auswählen, mit der Sie zum vorherigen Cue in der Cue-Liste springen möchten. Die Tastenkombination wird im Textfeld angezeigt; Wenn das Feld leer ist, ist der Cue-Liste derzeit keine Tastenkombination zugeordnet. |
| **Seitenfader** | **Verhalten**: Wählen Sie das Verhalten des Seitenfaders aus.<br><br>Wenn **Crossfade** ausgewählt ist, wird auf der linken Seite des Bedienfelds ein Fader angezeigt, der die Crossfade-Funktionalität zwischen Cues implementiert.<br>Wenn **Schritte** ausgewählt ist, wird auf der linken Seite des Bedienfelds ein Fader angezeigt, dessen Wert bestimmt, welcher Cue der Cue-Liste ausgeführt werden soll. |



### Betriebsmodus

Wenn Sie QLC+ in den [Betriebsmodus](/basics/glossary-and-concepts#modi) schalten, wird die Cue-Liste aktiv und ermöglicht die Auswahl der gewünschten Cues, die im zugehörigen Chaser enthalten sind.

Durch Drücken der ENTER-Taste wird der ausgewählte Cue gestartet.

Die folgenden Elemente werden unten im Cue-List-Widget angezeigt:


|     |     |
| --- | --- |
| **Cue-Fortschrittsbalken** | Ein Fortschrittsbalken, der den aktuellen laufenden Cue-Status anzeigt.  <br>Wenn eine Einblendgeschwindigkeit eingestellt ist und nicht auf „Standard“ eingestellt ist, wird der Balken grün gefärbt.  <br>Während der Haltezeit wird der Balken blau gefärbt. Der in der Leiste angezeigte Text gibt die verbleibende Zeit bis zum Ende des Cues an.  <br>Wenn die Cue-Dauer auf unendlich (∞) eingestellt ist, zeigt die Leiste nur die laufende Überblendung in Grün an. |
| ![](/basics/slider.png) | Wenn Sie auf diese Schaltfläche klicken, wird ein Seitenbereich geöffnet/geschlossen, in dem ein Fader zur Steuerung der Überblendung oder Schrittauswahl angezeigt wird.  <br>(Details zum Crossfade finden Sie im nächsten Kapitel) |
| ![](/basics/player_play.png) <br>![](/basics/player_pause.png) <br>![](/basics/player_stop.png) | Es gibt drei Wiedergabezustände, die eine Cue-Liste annehmen können: **running**, **paused** und **stopped**.  <br>Das Layout der Wiedergabesteuerungsschaltflächen kann im Konfigurationsdialog festgelegt werden, und die angewendeten Wiedergaberegeln sind immer wie folgt: <br>![](/basics/player_play.png) <br>Beim Klicken aus einem gestoppten Zustand Im Status beginnt die Wiedergabe ab dem aktuell ausgewählten Cue. Wenn kein Cue ausgewählt ist, beginnt die Wiedergabe ab dem ersten Cue entsprechend der zugehörigen Chaser-Laufreihenfolge.  <br>Nach dem Klicken ändert sich das Schaltflächensymbol je nach gewähltem Schaltflächenlayout, das „Pause“ oder „Stopp“ sein kann.  <br>Wenn Sie im angehaltenen Zustand darauf klicken, wird die Wiedergabe an der Stelle fortgesetzt, an der sie unterbrochen wurde.  <br> <br>![](/basics/player_pause.png) <br>Wenn Sie darauf klicken, wird die Wiedergabe der aktuell laufenden Cues angehalten, wodurch alles, was gerade ausgeführt wurde, im aktuellen Zustand eingefroren wird (Lichter bleiben an, Motoren bleiben eingeschaltet). aufhören, sich zu bewegen usw.).  <br>Der Hintergrund der Schaltfläche wird hellblau, um anzuzeigen, dass durch erneutes Klicken die Cue-Wiedergabe an der Stelle fortgesetzt wird, an der sie verlassen wurde.  <br>**Hinweis:** Es ist möglich, Einblend- und Haltephasen anzuhalten, jedoch kein Ausblenden.  <br> <br>![](/basics/player_stop.png) <br>Wenn Sie darauf klicken, wird der aktuell laufende Cue gestoppt und die Cue-Auswahl bleibt beim zuletzt gespielten Cue. Jeder pausierte Zustand wird zurückgesetzt und die Lichter werden ausgeschaltet.  <br>Wenn das Tastenlayout „Play/Pause + Stop“ lautet, wird durch das zweite Drücken dieser Taste der ausgewählte Cue zum ersten Cue des Chasers zurückgebracht (oder zum letzten, wenn die Reihenfolge umgekehrt ist) |
| ![](/basics/back.png) | Gehen Sie zurück zum vorherigen Cue in der Cue-Liste, der dann reproduziert wird. Wenn die Spitze erreicht ist, ist der vorherige Cue der letzte Cue der Cue-Liste |
| ![](/basics/forward.png) | Gehen Sie zum nächsten Cue in der Cue-Liste, der dann wiedergegeben wird. Wenn Sie unten angekommen sind, ist der nächste Cue der erste der Cue-Liste |



### Überblendung

Mit dem Seitenfader kann die Überblendung zwischen zwei aufeinanderfolgenden Cues manuell gesteuert werden.

Die Zahlen oben und unten am Fader zeigen den „aktuellen Cue“ und den „nächsten Cue“ an.
Die Beschriftung des aktuellen Cues ist blau. Dieser liegt bei 100 %, wenn die Wiedergabe der Cue-Liste gestartet wird.
Die Beschriftung für den nächsten Cue ist orangefarben und steht bei 0 %, wenn die Wiedergabe der Cue-Liste gestartet wird.

Wenn die Cue-Liste ausgeführt wird, steuert der Crossfade-Fader die Intensität der zugehörigen Cues, indem er deren Ein- und Ausblendgeschwindigkeiten außer Kraft setzt und so eine manuelle Steuerung des Übergangs ermöglicht.

Nachdem der Fader an das entgegengesetzte Ende seines Weges bewegt wurde, finden folgende Änderungen statt:

* Die orangefarbene Beschriftung des nächsten Cues wechselt zu Blau. Dies zeigt an, dass der alte nächste Cue zum neuen aktuellen Cue geworden ist.
* Die blaue Beschriftung des aktuellen Cues wechselt zu Orange und die Nummer des Cues wird um 2 erhöht. Dieser Fader steuert nun den Cue, der nach dem alten nächsten Cue kommt.



### Hinweis

Wenn ein Cue mithilfe des [Chaser-Editors](/function-manager/chaser-editor) zu einem Chaser hinzugefügt wird, wird die Standarddauer auf 0 gesetzt.
Um zu vermeiden, dass die Cues in der Cue-Liste hektisch und ohne Ergebnis wiederholt werden, legen Sie die Dauer Ihrer Cues fest, indem Sie entweder auf das Dauerfeld doppelklicken oder das Kurzwahl-Widget verwenden![](/basics/speed.png)
Beachten Sie, dass Sie, wenn Sie Szenen benötigen, die Sie manuell mit dem Cue-List-Widget überblenden möchten, die Dauer der Cues wahrscheinlich mit dem [Speed ​​Dial-Widget](../speed-dial) auf „unendlich“ (∞) einstellen möchten). Dies kann im Chaser-Editor durch Klicken auf die Schaltfläche ![](/basics/speed.png) aktiviert werden.