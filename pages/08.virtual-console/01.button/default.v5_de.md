---
title: Button
date: '14:26 21-08-2023'
---

Eine **Schaltfläche** ist das einfachste Widget der [virtuellen Konsole](/virtual-console):
drücken Sie sie, um eine Funktion auszulösen. Sie ist der Grundbaustein der meisten
Konsolen — eine Schaltfläche pro Szene, Chaser oder Effekt, den Sie auslösen möchten.

Weisen Sie eine Funktion zu, indem Sie sie aus dem Funktionsmanager auf die
Schaltfläche ziehen, oder über die Einstellungen der Schaltfläche.

## Einstellungen

* **Zugewiesene Funktion** — die Funktion, die diese Schaltfläche steuert. Mit
  **Aktuelle Funktion trennen** wird die Zuweisung entfernt.

* **Verhalten bei Tastendruck** — was das Drücken der Schaltfläche bewirkt:
  * **Funktion ein-/ausschalten** — startet die Funktion beim ersten Drücken und
    stoppt sie beim nächsten. Die Schaltfläche bleibt beleuchtet, solange die
    Funktion läuft.
  * **Funktion flashen (nur für Szenen)** — spielt die Szene nur ab, solange die
    Schaltfläche gedrückt gehalten wird, und stoppt sie danach. Mit einer
    **Ausblendzeit** verblasst der geflashte Look beim Loslassen.
  * **Blackout umschalten** — schaltet den Blackout für das gesamte Rig ein und
    aus.
  * **Alle Funktionen stoppen** — stoppt jede laufende Funktion (eine
    Panik-Schaltfläche).
  * **Funktionsintensität anpassen** — die Schaltfläche setzt die Intensität
    einer Funktion auf einen festen Wert, anstatt sie zu starten/stoppen.

* **Flash-Eigenschaften** (angezeigt beim Verhalten „Flashen“):
  * **Priorität überschreiben / LTP erzwingen** — sorgt dafür, dass der Flash
    Vorrang vor anderen Funktionen hat, die dieselben Kanäle steuern, sodass der
    geflashte Look gewinnt, solange die Schaltfläche gedrückt ist.

## Tipps

* Kombinieren Sie Schaltflächen mit einem [Solo Frame](../solo-frame), sodass
  das Drücken einer Schaltfläche automatisch die anderen stoppt — ideal für eine
  Reihe sich gegenseitig ausschließender Looks.
* Fügen Sie eine **externe Eingabe** oder **Tastenkombination** (Registerkarte
  „Externe Steuerungen“) hinzu, um die Schaltfläche über Hardware oder die
  Tastatur auszulösen.
