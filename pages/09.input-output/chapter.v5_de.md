---
title: 'Eingang und Ausgang'
date: '04:54 22-08-2023'
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
### Kapitel 8

# Eingabe/Ausgabe

Der Kontext **Eingabe/Ausgabe** ist der Ort, an dem Sie die internen
**Universen** von QLC+ mit der realen Welt verbinden — den Plugins und Geräten,
die DMX an Ihre Lichter senden, und den Controllern, die Eingaben senden.
Standardmäßig stellt QLC+ mehrere Universen bereit, die Sie nach Bedarf
hinzufügen oder entfernen können.

Die Eingabe-/Ausgabezuordnung wird im aktuellen Projekt gespeichert, sodass Sie
ein Projekt auf einen anderen Computer oder ein anderes Betriebssystem
übertragen können, ohne es neu konfigurieren zu müssen. Ist kein Projekt
geladen, behält QLC+ die Zuordnung als „Fallback“-Konfiguration bei.

Öffnen Sie den Kontext über die Registerkarte
![](/basics/inputoutput.svg?resize=24,24) **Eingänge/Ausgänge** am unteren Rand
des QLC+-Hauptfensters.

## Layout

Der Kontext ist ein Patch-Diagramm mit einem Bereich auf jeder Seite:

* **Linker Bereich** — die Werkzeuge für die **Eingangsseite** des ausgewählten
  Universums (Eingangs-Plugins, Eingangsprofile sowie Plugin-/Audio-Konfiguration).
* **Mitte** — eine Reihe von Blöcken, einer pro **Universum** (plus ein
  Audio-Block oben). Eingangspatches werden links an jedem Block angehängt,
  Ausgangspatches rechts, dargestellt als verbindende **Leitungen**.
* **Rechter Bereich** — die Werkzeuge für die **Ausgangsseite**, sowie Blackout
  und die Schaltflächen zum Hinzufügen/Entfernen von Universen.

Klicken Sie auf einen Universum-Block, um ihn auszuwählen; die seitlichen
Bereiche wirken dann auf dieses Universum.

## Der Universum-Block

Jedes Universum wird als zentraler Block mit seinen Leitungen dargestellt:

* **Name** — doppelklicken Sie auf den Block, um das Universum in einen
  aussagekräftigen Namen umzubenennen („Bühne links“, „Moving Heads“, …).
* <i class="fa fa-arrow-right-long"></i> **Passthrough** — die kleine
  Pfeil-Schaltfläche schaltet das Passthrough für das Universum um (siehe
  [unten](#universum-passthrough)).
* **F — Feedback** — wenn ein Eingangspatch vorhanden ist, aktiviert/deaktiviert
  die Schaltfläche **F** die Feedback-Leitung zurück zum Controller.

## Patchen

Das Patchen erfolgt per **Drag-and-Drop**:

* Öffnen Sie die Liste der **Eingangs**- oder **Ausgangs**-Plugins im seitlichen
  Bereich (die Schaltfläche ![](/basics/inputoutput.svg?resize=24,24)), und
  **ziehen Sie eine Plugin-Zeile** auf die linke (Eingang) oder rechte (Ausgang)
  Seite eines Universum-Blocks. Eine Leitung wird gezeichnet, um die Verbindung
  darzustellen.
* Jedes Universum kann **eine Eingangsleitung**, aber **mehrere
  Ausgangsleitungen** haben (weitere Plugin-Zeilen rechts ablegen, um sie
  hinzuzufügen).
* Um einen Patch zu **entfernen**, ziehen Sie dessen Patch-Block vom Universum
  weg und legen Sie ihn auf dem
  <i class="fa fa-trash-can"></i>-Papierkorb ab, der am unteren Bildschirmrand
  erscheint.

Wenn ein Plugin vor dem Erscheinen seiner Zeilen konfiguriert werden muss,
verwenden Sie die Schaltfläche
![](/basics/configure.svg?resize=24,24) **Plugin-Konfiguration** im seitlichen
Bereich (sie wird nur angezeigt, wenn das Plugin manuelle Einstellungen
unterstützt).

## Universen hinzufügen / entfernen

Der rechte Bereich enthält die Schaltflächen zur Universumsverwaltung:

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Neues Universum hinzufügen** | Fügt ein neues Universum hinzu, benannt „Universum X“, wobei X eine fortlaufende Zahl (auch dessen ID) ist. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewähltes Universum entfernen** | Entfernt das letzte Universum. **Seien Sie vorsichtig — dies kann gepatchte Fixtures beeinträchtigen und kann nicht rückgängig gemacht werden.** |

## Blackout

Der rechte Bereich enthält außerdem einen Blackout-Schalter
(<i class="fa fa-eye"></i> / <i class="fa fa-eye-slash"></i>), der **alle
Ausgangspatches** auf null zwingt — ein sofortiges „Licht aus“ für das gesamte
Rig. Schalten Sie ihn erneut um, um die Ausgabe wiederherzustellen.

## Universum-Passthrough

Wenn Passthrough aktiviert ist, leitet ein Universum einfach das, was es auf
seiner **Eingangsleitung** empfängt, an seine **Ausgangsleitung** weiter. Dies
ist nützlich für:

* **Protokollumwandlung** — z. B. um ein Art-Net-Netzwerk transparent einem
  DMX-USB-Adapter oder MIDI zuzuordnen.
* **Überwachung externer Daten** — Fixtures patchen und eingehende Daten im
  DMX-Monitor beobachten.
* **Zusammenführen eines externen Pults** — ein externes Lichtpult einige
  Kanäle steuern lassen, während QLC+ intelligente Lichter im selben Universum
  steuert.
* **Raspberry-Pi-Setups** — auf einem PC programmieren und die Wiedergabe dann
  einem Pi übergeben, der fest mit den Geräten verbunden bleibt.

Passthrough-Daten werden vom Grand Master oder von Kanalmodifikatoren nicht
beeinflusst. Sie werden im HTP-Verfahren mit der QLC+-Ausgabe zusammengeführt,
wo Fixtures gepatcht sind (dabei werden keine LTP-/HTP-Kanaleinstellungen
verwendet). Blackout **wirkt sich** auf Passthrough-Daten aus.

## Audio

Der Block oben in der Liste steht für die **Audio**-Eingangs- und
-Ausgangsgeräte. Wählen Sie ihn aus und verwenden Sie dann die Schaltflächen
![](/basics/audiocard.svg?resize=24,24) in den seitlichen Bereichen, um die
Audioeingangsquelle und das Ausgabegerät auszuwählen, sowie die Schaltfläche
![](/basics/configure.svg?resize=24,24), um die Audiokonfiguration zu öffnen.

## Eingang und Feedback

Wenn eine Eingangsleitung gepatcht ist, wird sie sofort aktiviert, sodass Sie
sie testen können: Bewegen Sie einen Fader oder Regler an Ihrem Controller, und
wenn er funktioniert, sehen Sie Eingangsaktivität auf diesem Universum.

Wenn Ihr Controller über einen Rückkanal verfügt, kann QLC+ ihm visuelles/
mechanisches **Feedback** senden (zum Beispiel um Buttons zu beleuchten oder
Fader an einem Behringer BCF2000 zu motorisieren). Aktivieren Sie es mit der
Schaltfläche **F** am Universum-Block. Feedback wird derzeit über MIDI, OSC und
Loopback unterstützt.

Um das Beste aus einem externen Controller herauszuholen, richten Sie ein
**Eingangsprofil** ein — siehe [Eingangsprofile](input-profiles).
