---
title: 'Fixture Browser'
date: '14:32 27-06-2026'
taxonomy:
    category:
        - docs
---

Der **Fixture Browser** ist der Ort, an dem Sie neue Fixtures in Ihr Projekt patchen. Öffnen
Sie ihn über die Schaltfläche **Add Fixtures** oben im linken Panel des
[Fixtures and Functions](/fixtures-and-functions)-Arbeitsbereichs.

Er ermöglicht es Ihnen, eine Fixture-Definition in der Bibliothek zu finden, festzulegen, wie sie
gepatcht werden soll, und sie in eine der Ansichten zu ziehen.

## Ein Fixture finden

Es gibt zwei Möglichkeiten, ein Fixture zu finden:

* **Nach Hersteller durchsuchen** — der Browser öffnet sich mit einer Liste von Herstellern.
  Klicken Sie auf einen Hersteller, um dessen Modelle zu sehen, und klicken Sie dann auf ein Modell, um es auszuwählen. Verwenden Sie
  den Zurück-Pfeil (der Herstellername oben), um zur
  Herstellerliste zurückzukehren.
* **Suchen** — geben Sie mindestens drei Zeichen in das Suchfeld oben ein. Die
  Liste wechselt zu einem Suchergebnisbaum, gruppiert nach Hersteller, der Ihren
  Text mit Herstellern und Modellen abgleicht.

## Symbolleisten-Schaltflächen

Oben im Browser:

* **＋ Eine neue Fixture-Definition erstellen** — öffnet den Fixture Definition Editor, um
  ein völlig neues Fixture von Grund auf zu erstellen.
* **Die ausgewählte Fixture-Definition bearbeiten** — öffnet die Definition des ausgewählten
  Fixtures im Editor. Aktiviert, sobald ein Modell ausgewählt ist.
* **Fixtures remappen** (Shuffle-Symbol) — öffnet das Werkzeug **Fixture Remap**, mit dem
  der Patch und Inhalt eines vorhandenen Projekts auf eine andere Menge von
  Fixtures übertragen wird.

## Fixture-Eigenschaften

Wenn Sie ein Modell auswählen, erscheint unten im Browser ein Panel **Fixture properties**.
Legen Sie diese fest, bevor Sie das Fixture in eine Ansicht ziehen — sie bestimmen, wie
es benannt, wo es gepatcht und wie viele Kopien erstellt werden.

| Eigenschaft | Bedeutung |
|----------|---------|
| **Name** | Der Name, den das Fixture (oder die Fixtures) in Ihrem Projekt haben werden. Ein Standardname wird vorgeschlagen; bearbeiten Sie ihn nach Belieben. Wenn Sie mehr als eines auf einmal hinzufügen, werden sie automatisch nummeriert. |
| **Universe** | Das Universum, in das das Fixture gepatcht wird. Das Dropdown-Menü listet die von Ihnen definierten Universen auf. |
| **Address** | Die Start-DMX-Adresse (1–512) innerhalb dieses Universums. Der Browser schlägt die erste passende freie Adresse vor; sie wird neu berechnet, sobald Sie den Modus, die Menge oder die Anzahl der bereits gepatchten Fixtures ändern. |
| **Quantity** | Wie viele Kopien dieses Fixtures auf einmal hinzugefügt werden sollen (1–512). Die Kopien werden hintereinander ab der Startadresse angeordnet, getrennt durch den **Gap**. |
| **Channels** | Die Anzahl der vom Fixture verwendeten DMX-Kanäle. Dies wird automatisch durch den ausgewählten **Mode** festgelegt und ist bei Fixtures mit Modes schreibgeschützt. Bei einem generischen Fixture/Dimmer ohne Modes können Sie die Kanalzahl selbst festlegen (1–512). |
| **Gap** | Die Anzahl der leeren Kanäle, die zwischen aufeinanderfolgenden Kopien freigelassen werden sollen, wenn **Quantity** größer als eins ist (0–511). Verwenden Sie dies, um jedes Fixture auf einer runden Adresse zu halten oder Platz für spätere Erweiterungen zu reservieren. |
| **Mode** | Der Betriebsmodus des Fixtures (nur angezeigt bei Fixtures, die Modes definieren). Unterschiedliche Modes stellen unterschiedliche Kanalsätze bereit — z. B. ein Basismodus im Vergleich zu einem erweiterten Modus mit mehr Steuerungsmöglichkeiten. Die Auswahl eines Modes aktualisiert die **Channels**-Anzahl. |

### Die Kanäle eines Modes prüfen

Neben dem Dropdown-Menü **Mode** befindet sich eine **Info**-Schaltfläche (ⓘ). Aktivieren Sie sie, um
alle Kanäle des ausgewählten Modes aufzulisten, jeweils mit Namen und Typsymbol, sodass
Sie bestätigen können, dass der Mode das tut, was Sie erwarten, bevor Sie patchen.

## Das Fixture patchen

Sobald die Eigenschaften festgelegt sind, **ziehen Sie das Fixture in eine Ansicht**, um es zu patchen:

* In der **Universe View** hebt das Raster die Kanäle hervor, die es belegen wird
  (ein Block pro Kopie, getrennt durch den Gap), und zeigt an, ob die Adresse
  frei ist.
* In der **2D / 3D View** lassen Sie es dort fallen, wo Sie es auf der Bühne positioniert haben möchten.

Wenn sich die gewählte Adresse mit einem vorhandenen Fixture überschneidet, wird der Fehler
**„Address overlapping“** angezeigt, und Sie sollten eine andere DMX-Adresse wählen.

## Generic RGB Panel

Die Auswahl des speziellen Modells **Generic RGB Panel** zeigt stattdessen ein eigenes Panel **RGB panel
properties** mit zusätzlichen Parametern zur Beschreibung einer Pixelmatrix. Eine Live-Vorschau
unten wird aktualisiert, sobald Sie diese ändern, und zeigt das Pixel-Layout, die Snake-/Zickzack-Verkabelung
und die Startecke.

Zusätzlich zu **Name**, **Universe** und **Address** (siehe oben) legen Sie fest:

| Eigenschaft | Bedeutung |
|----------|---------|
| **Components** | Die Farbreihenfolge jedes Pixels: **RGB**, **BGR**, **BRG**, **GBR**, **GRB**, **RBG** oder **RGBW**. Passen Sie dies daran an, wie die LEDs Ihres Panels verkabelt sind, damit die Farben korrekt ausgegeben werden. |
| **Size** | Die Panel-Auflösung in Pixeln, als **Spalten × Zeilen** (Breite bis 170, Höhe bis 999). Dies bestimmt, wie viele Zellen die Matrix hat. |
| **Physical** | Die reale Größe des Panels, als **Breite × Höhe** in Millimetern. Wird verwendet, um das Panel maßstabsgetreu in den 2D-/3D-Ansichten darzustellen. |
| **Start corner** | An welcher Ecke die Pixelkette beginnt: **Top-Left**, **Top-Right**, **Bottom-Left** oder **Bottom-Right**. In der Vorschau durch einen Punkt markiert. |
| **Displacement** | Wie die Verkabelung von Zeile zu Zeile (oder Spalte zu Spalte) verläuft: **Snake** (Richtung wechselt bei jeder Zeile) oder **Zig Zag** (jede Zeile verläuft in dieselbe Richtung). Dies muss zu Ihrem Panel passen, damit Effekte korrekt zugeordnet werden. |
| **Direction** | Ob die Pixel **Horizontally** (zeilenweise) oder **Vertically** (spaltenweise) verkettet sind. |

Da ein einzelnes Panel eine große Anzahl von Kanälen verwenden kann — möglicherweise
mehr als ein Universum —, kann sich das Panel über mehrere Universen erstrecken, beginnend bei
der gewählten Adresse.
