---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

**DMX Dump** erfasst die Werte, die Sie derzeit ausgeben, und speichert sie
in einer **Szene**. Es ist der schnellste Weg, eine Szene zu erstellen: Stellen Sie
mit den Kanal-Werkzeugen, der DMX-Ansicht oder dem Simple Desk von Hand ein Bild ein
und „dumpen“ Sie dieses Bild dann in eine Funktion, die Sie später abrufen können.

## Funktionsweise

Während Sie Kanalwerte manuell ändern, merkt sich QLC+ jeden Kanal, den Sie
berührt haben — dies sind die **Dump-Werte**. Sie sind die Kandidaten, die beim
Dumpen in eine Szene geschrieben werden.

Die **DMX-Dump**-Schaltfläche befindet sich in der oberen Symbolleiste der Anwendung (ein kleines
„Dump“-Symbol). Eine rote **Blase** an der Schaltfläche zeigt an, wie viele Kanäle
derzeit erfasst sind. Wenn die Blase `0` anzeigt, wurde noch nichts berührt und
es gibt nichts zu dumpen.

Sie können die erfassten Werte jederzeit löschen, ohne zu dumpen, indem Sie **Dump-Kanäle
zurücksetzen** im rechten Bedienfeld verwenden (Tastenkombination **Strg+R**). Die erfassten Werte werden
in bestimmten Situationen auch automatisch zurückgesetzt, etwa beim Starten eines neuen Projekts.

> Die Dump-Schaltfläche funktioniert nur, wenn die Funktionsbearbeitung erlaubt ist.

## Einen Dump starten

Es gibt zwei Möglichkeiten, den Dump-Dialog zu öffnen:

* **Klicken** Sie auf die DMX-Dump-Schaltfläche in der Symbolleiste.
* **Ziehen** Sie die DMX-Dump-Schaltfläche auf eine Funktion im Function Manager. Dadurch
  wird diese Funktion als vorhandene Szene zum Dumpen vorausgewählt (siehe unten).

## Der Dialog „DMX Channel Dump“

Der Dialog besteht aus zwei Abschnitten.

### Zielszene

Wählen Sie aus, wohin die erfassten Werte geschrieben werden:

* **In eine neue Szene dumpen** — erstellt eine neue Szene. Im Textfeld wird ein
  Standardname (*New Scene N*) vorgeschlagen; ändern Sie ihn nach Belieben.
* **In eine vorhandene Szene dumpen** — fügt die erfassten Werte einer bereits
  vorhandenen Szene hinzu. Das Ziel ist die derzeit im Function Manager ausgewählte
  Szene; ist keine ausgewählt, zeigt diese Option *(None selected)* an. (Wenn Sie die Dump-Schaltfläche
  auf eine Funktion ziehen, wird diese Option automatisch ausgewählt.)

### Zu dumpende Kanäle

Wählen Sie aus, welche der erfassten Kanäle geschrieben werden:

* **Alle verfügbaren Kanäle dumpen** — dumpt jeden Kanal über alle
  Universen und Fixtures hinweg, nicht nur die, die Sie berührt haben. Der Dialog zeigt an, wie
  viele Universen und Fixtures dies betrifft.
  * **Nur Werte ungleich Null dumpen** — (verfügbar zusammen mit der obigen Option) überspringt
    Kanäle, die auf Null stehen, sodass die Szene nur Kanäle enthält, die
    tatsächlich etwas bewirken.
* **Kanäle der ausgewählten Fixtures dumpen** — dumpt nur die Kanäle der
  aktuell ausgewählten Fixtures. Diese Option ist verfügbar, wenn die
  ausgewählten Fixtures Kanäle haben, die berührt wurden.

#### Erkannte Kanaltypen

Wenn Sie die Kanäle der ausgewählten Fixtures dumpen, listet der Dialog die **Kanaltypen**
auf, die darunter gefunden wurden — zum Beispiel Intensity, RGB/CMY/WAUV, Colour
macros, Gobo, Pan, Tilt, Speed, Shutter/Strobe, Prism, Beam, Effect und
Maintenance. Jeder Typ hat ein Kontrollkästchen, sodass Sie ihn ein- oder ausschließen können. Aktivieren Sie nur
die Kanalarten, die Sie in der Szene haben möchten — dumpen Sie zum Beispiel die Farben, aber
lassen Sie die Intensität weg.

## Abschließen

Bestätigen Sie den Dialog, um die Szene mit den von Ihnen gewählten Kanälen zu erstellen oder zu aktualisieren. Die
neue (oder aktualisierte) Szene erscheint dann im Function Manager, bereit zum Bearbeiten,
Vorschauen und Auslösen wie jede andere Funktion.
