---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Kapitel 5

# Show Manager 

Eine **Show** ist eine Timeline, die andere Funktionen (Szenen, Chaser, Audio,
Video, …) auf **Tracks** entlang der Zeit anordnet, sodass eine ganze
Performance als eine Einheit abgespielt werden kann. Das Bearbeiten einer Show
unterscheidet sich von den anderen Funktionen: Es öffnet sich ein eigener
Vollbild-Arbeitsbereich, der **Show Manager**, anstelle des Editors im rechten
Bereich.

Sie gelangen dorthin, indem Sie über das Menü **Add a new function** eine Show
erstellen oder im Funktionsmanager auf eine vorhandene Show doppelklicken.

## Die Timeline

Der Hauptbereich ist eine **Timeline**: Die Zeit verläuft von links nach
rechts, und jeder horizontale **Track** enthält die darauf platzierten
Funktionselemente. Ein sich bewegender **Cursor** markiert die aktuelle
Wiedergabeposition, und eine Kopfzeile zeigt Zeit- (oder Takt-)Markierungen.

* **Ziehen** Sie eine Funktion aus dem Funktionsmanager im rechten Bereich auf
  einen Track, um sie zu diesem Zeitpunkt zur Show hinzuzufügen.
* **Klicken** Sie auf ein Element, um es auszuwählen; aktivieren Sie die
  Mehrfachauswahl (rechter Bereich), um mehrere auszuwählen.
* **Ziehen** Sie Elemente entlang eines Tracks, um deren Wiedergabezeitpunkt zu
  ändern, oder zwischen Tracks.
* **Doppelklicken** Sie auf ein Element, um den eigenen Editor der
  zugrundeliegenden Funktion zu öffnen.

## Symbolleiste

Am oberen Rand:

| Schaltfläche | Was sie bewirkt |
|--------|--------------|
| **Name** | Der Name der Show. |
| ![](../basics/color.svg?resize=48,48) **Show items color** | Legt die Farbe der ausgewählten Timeline-Elemente fest, um Ihrer Show eine Farbcodierung zu geben. |
| ![](../basics/lock.svg?resize=48,48) **Lock / Unlock** | Sperrt die ausgewählten Elemente, damit sie nicht versehentlich verschoben oder in der Größe geändert werden können (das Symbol wechselt zwischen Lock und Unlock). |
| ![](../basics/grid.svg?resize=48,48) **Snap to grid** | Lässt Elemente beim Verschieben am Zeitraster einrasten. |
| <i class="fa fa-arrows-left-right-to-line fa-2x"></i> **Stretch the original function** | Wenn aktiviert, streckt das Ändern der Größe eines Elements das Timing der zugrundeliegenden Funktion passend, statt sie nur zuzuschneiden. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected items** | Entfernt die ausgewählten Elemente aus der Show. (Die ursprünglichen Funktionen werden **nicht** gelöscht.) |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Kopiert die ausgewählten Elemente in die Zwischenablage. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Fügt Elemente aus der Zwischenablage an der Cursorposition ein. |
| **Time display** | Die aktuelle Cursorzeit. |
| <i class="fa fa-play fa-2x"></i> **Play / Pause** | Spielt die Show ab der Cursorposition ab oder pausiert/setzt sie fort. |
| <i class="fa fa-stop fa-2x"></i> **Stop / Rewind** | Stoppt die Show-Wiedergabe (erneut drücken, um zum Anfang zurückzuspulen). |
| **Markers** | Die in der Kopfzeile angezeigte Zeiteinteilung: **Time**, oder Takte in **BPM 4/4**, **3/4** oder **2/4**. |
| <i class="fa fa-2x fa-magnifying-glass-minus"></i><i class="fa fa-2x fa-magnifying-glass-plus"></i> **Zoom** | Vergrößert oder verkleinert die Timeline entlang der Zeitachse. |

## Tracks

Jeder Track ist eine Zeile der Timeline.

* Verwenden Sie das Steuerelement <i class="fa fa-plus" style="color:limegreen"></i>
  **Create a new track**, um einen Track hinzuzufügen.
* Wenn ein Track ausgewählt ist, ordnen die Pfeile <i class="fa fa-angle-up"></i> /
  <i class="fa fa-angle-down"></i> **move track up / down** (oben links in der
  Timeline) ihn unter den anderen Tracks neu ein.

## Das Timing-Werkzeug

Die Schaltfläche <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>
**Timing** im rechten Bereich öffnet das **Timing-Werkzeug**, ein Bedienfeld
zum Anpassen der genauen Position und Länge der Elemente auf der Timeline,
ohne sie von Hand ziehen zu müssen. Es ist das präzise Gegenstück zum Ziehen
von Elementen: perfekt, um Cues bildgenau auszurichten oder eine ganze
Auswahl um einen festen Betrag zu verschieben.

Alles in diesem Werkzeug folgt der **Markers**-Einstellung der Show: Wenn
sich die Timeline im **Time**-Modus befindet, werden Werte als Zeit
(Stunden, Minuten, Sekunden, Millisekunden) angezeigt und eingegeben; in
einem der **BPM**-Modi werden sie als Takte angezeigt und eingegeben.

Das Werkzeug ist in drei Bereiche unterteilt.

### Alignment

Rastet die ausgewählten Elemente am Wiedergabe-**Cursor** ein:

* **Align start to cursor** — verschiebt jedes ausgewählte Element so, dass
  es an der Cursorposition *beginnt*.
* **Align end to cursor** — streckt oder staucht jedes ausgewählte Element
  so, dass es an der Cursorposition *endet* (sein Anfang bleibt dabei
  unverändert).

### Timings

Zeigt **Start time**, **End time** und **Duration** des ausgewählten
Elements an. Klicken Sie auf einen der drei Werte, um an seiner Stelle einen
kompakten **h / m / s / ms**-Editor (oder Takte) einzublenden, geben Sie den
genauen Wert ein, und das Element wird sofort aktualisiert:

* Bei einem **einzelnen ausgewählten Element** wird der eingegebene Wert
  **absolut** angewendet — das Element wird genau dort platziert.
* Bei **mehreren ausgewählten Elementen** zeigen die Felder *Multiple*, und
  jede Änderung wird **relativ** angewendet — derselbe Versatz wird zu jedem
  ausgewählten Element addiert, sodass Sie einen ganzen Block auf einmal
  beispielsweise um +2 Sekunden verschieben können.

Gesperrte Elemente (siehe die Lock-Schaltfläche der Symbolleiste) bleiben
unverändert.

### Cut/Insert

Fügt an der Cursorposition eine Zeitspanne über die **gesamte Show** hinzu
oder entfernt sie — so können Sie Platz für einen neuen Abschnitt schaffen
oder eine Lücke schließen, wobei sich alles nach dem Cursor entsprechend
verschiebt:

* **Length** — klicken, um festzulegen, wie viel Zeit ausgeschnitten oder
  eingefügt werden soll (im selben h / m / s / ms- oder Takte-Editor).
* **Insert time** — verschiebt alles nach dem Cursor um *Length* nach
  hinten und öffnet dabei eine leere Lücke.
* **Cut time** — entfernt eine Spanne von *Length* ab dem Cursor und zieht
  alles danach nach vorne.

## Rechter Bereich

Im Show Manager ist der rechte Bereich der gewohnte
[Funktionsmanager](/function-manager), sodass Sie jede Funktion auf die
Timeline ziehen können. Er erhält außerdem die Schaltfläche
<i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i> **Timing**, die
oben beschrieben wurde.
