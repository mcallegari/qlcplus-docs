---
title: 'Einfache Arbeitsoberfläche'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #kapitel p {
        text-align: left;
    }
</style>
### Kapitel 6

# Einfache Arbeitsoberfläche

Das einfache Pult emuliert eine typische Lichtkonsole, die ein vollständiges 512-Kanal-DMX-Universum mit mehreren Cue-Stacks steuern kann, die mit Wiedergabe-Schiebereglern bedient werden.  
Der einfache Schreibtisch ist in zwei Hauptbereiche unterteilt: **Kanäle** (oberer Bereich) und **Hinweise** (unterer Bereich).  
Der Kanalbereich spiegelt genau den aktuellen Status jedes DMX-Kanals jedes Universums wider. Wenn Kanäle gesteuert werden, ohne dass ein Projekt geladen ist, können Benutzer sie vollständig manuell steuern.  
Wenn ein Projekt geladen ist, überschreibt das Verschieben eines Simple-Desk-Kanals alle anderen QLC+-Funktionen, die versuchen, diesen Kanal zu steuern. Eine visuelle Anzeige färbt den Hintergrund des Kanals rot und informiert den Benutzer darüber, dass Simple Desk nun die vollständige Kontrolle darüber hat.  
Dies ist in einigen Live-Umständen sehr nützlich, in denen eine laufende Funktion eine manuelle Anpassung erfordert.  
Um Simple Desk von übergeordneten Kanälen zu „deaktivieren“, klicken Sie einfach auf die Schaltfläche „Zurücksetzen“. Durch das Zurücksetzen von Kanälen werden diese entweder auf Null oder auf den zuvor durch eine Funktion festgelegten Wert zurückgesetzt.  

Cues arbeitet getrennt von anderen QLC+-Komponenten. Beispielsweise sind Hinweise innerhalb des Hinweisstapels im [Funktionsmanager](/function-manager) nicht sichtbar und [Szenen](/basics/glossary-and-concepts#szene) sind im Hinweisstapel nicht sichtbar.

Kontrollen – Universum
-------------------

Die Universumsbox enthält die Schieberegler, mit denen einzelne DMX-Kanäle im ersten DMX-Universum gesteuert werden. Da 512 Slider nicht gleichzeitig gut auf den Bildschirm passen, wurden sie in Seiten unterteilt. Standardmäßig enthält jede Seite 32 Schieberegler, die jedoch [abgestimmt](#feinabstimmung) werden können.

|     |     |
| --- | --- |
| ![](/basics/tabview.png) | Schalten Sie den Ansichtsmodus von allen Kanälen auf Fixture-Kanäle um. Bitte beachten Sie, dass der zweite Modus ein leeres Ergebnis erzeugt, wenn keine Fixtures definiert wurden |
| ![](/basics/back.png) | Zur vorherigen DMX-Seite springen. |
| **Universum-Seitenbox** | Zeigt die aktuelle DMX-Seite an. Sie können zu einer Seite springen, indem Sie die Seitenzahl direkt in dieses Feld eingeben oder das Mausrad verwenden, um schnell zwischen den Seiten zu springen. |
| ![](/basics/forward.png) | Springen Sie zur nächsten DMX-Seite. |
| ![](/basics/fileclose.png) | Setzen Sie alle DMX-Schieberegler auf Null oder den zuvor durch eine Funktion festgelegten Wert zurück. |
| **GM** | Der [Masterregler](/basics/glossary-and-concepts#masterregler) |

Steuerelemente – Wiedergabe
-------------------

Das Wiedergabefeld enthält eine Reihe von Wiedergabeschiebereglern, von denen jeder einen Cue-Stack enthalten kann. Die Playbacks können zum „Wiedergeben“ des Inhalts ihrer Cue-Stapel verwendet werden und sie können auch zum Anpassen der Gesamtintensität des Cues verwendet werden.

|     |     |
| --- | --- |
| ![](/basics/check.png) | Wählen Sie die aktuell aktive Wiedergabe aus, deren Cue-Stack auf der rechten Seite des Bildschirms angezeigt wird. |
| **Wiedergabeschieberegler** | Passen Sie die Intensität des Cue-Stapels der Wiedergabe an. Wenn der Schieberegler ganz auf Null gezogen wird, wird der Cue-Stapel angehalten. Jeder Wert über Null startet die Wiedergabe des Cue-Stacks der Playbacks. |
| ![](/basics/flash.png) | Flashen Sie den ersten Cue der Wiedergabe. |

Steuerelemente – Cue-Stapel
--------------------

Das Cue-Stack-Feld zeigt den Inhalt der aktuell ausgewählten Wiedergabe.

|     |     |
| --- | --- |
| ![](/basics/back.png) | Springen Sie zum vorherigen Cue (oder starten Sie die Wiedergabe beim letzten Cue im Cue-Stapel mit voller Intensität). |
| ![](/basics/player_stop.png) | Stoppen Sie den aktuell aktiven Cue-Stapel. |
| ![](/basics/forward.png) | Springen Sie zum nächsten Cue (oder starten Sie die Wiedergabe beim ersten Cue im Cue-Stapel mit voller Intensität). |
| ![](/basics/edit.png) | Wechseln Sie in den/vom Cue-Bearbeitungsmodus. Wenn diese Schaltfläche gedrückt wird, können Sie den Inhalt einzelner Cues bearbeiten; Der Inhalt des aktuell aktiven Cues wird auf den DMX-Schiebereglern angezeigt.<br><br>Die Geschwindigkeit des Einblendens, des Ausblendens und die Dauer sowie der Name einzelner Cues können mit den Geschwindigkeitsreglern angepasst werden, die in einem separaten Tool angezeigt werden Fenster. Sie können auch mehrere Cues auswählen, um deren Geschwindigkeit gleichzeitig anzupassen. Die DMX-Schieberegler sind dann jedoch deaktiviert, um zu verhindern, dass Sie versehentlich alle Cue-Inhalte mit denselben Werten überschreiben. |
| ![](/basics/record.png) | Zeichnen Sie einen neuen Cue auf und übernehmen Sie dessen Inhalt aus den aktuellen DMX-Schiebereglerwerten. |
| **Cue-Stapel** | Dieses Feld zeigt den Inhalt des Cue-Stapels der aktuell ausgewählten Wiedergabe zusammen mit der Indexnummer (1, 2, 3...), der Einblendgeschwindigkeit, der Ausblendgeschwindigkeit, der Dauer und einem optionalen Namen für jeden Cue an.<br><br>Sie können die Cue-Reihenfolge ändern, indem Sie die Cues übereinander ziehen, entweder einzeln oder mehrere Cues gleichzeitig. |

[](#feinabstimmung)

Feinabstimmung
------

Weitere Informationen finden Sie im Abschnitt [Manuelle Parameteroptimierung](/advanced/parameters-tuning#1-einfache-oberfläche) Simple Desk