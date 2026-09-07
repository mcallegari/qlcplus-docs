---
title: 'Simple Desk'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Kapitel 6

# Simple Desk

Das **Simple Desk** ist eine manuelle DMX-Steueroberfläche. Es bietet einen Fader und ein Wertefeld für jeden Kanal eines Universums sowie ein **Tastenfeld** zur Eingabe von Befehlen im Konsolenstil — sodass Sie Ihr Equipment von Hand steuern können, ganz wie an einem klassischen Lichtpult. Es eignet sich ideal für schnelle manuelle Eingriffe, Busking und Tests.

Öffnen Sie es über die Hauptsymbolleiste (das Simple-Desk-Symbol). Was Sie hier einstellen, kann mit [DMX Dump](/main-window/dmx-dump) in eine Szene übernommen werden.

## Layout

Das Simple Desk ist in zwei Bereiche unterteilt, mit einer verschiebbaren Trennlinie dazwischen:

* **Oben** — die Kanal-Fader für das ausgewählte Universum.
* **Unten** — die **Fixture List**, der **Befehlsverlauf** und das **Tastenfeld**.

## Kanal-Fader

Der obere Bereich zeigt eine Spalte für jeden DMX-Kanal des aktuellen Universums, jeweils mit:

* Einem **Kanalsymbol** — anklicken öffnet ein dediziertes Werkzeug für diesen Kanaltyp (Schieberegler oder Preset-Auswahl). **Esc** drücken, um es zu schließen.
* Einem **Fader** — ziehen, um den Kanalwert festzulegen.
* Einem **Wertefeld** — einen genauen Wert eingeben. Es zeigt DMX (0–255) oder Prozent (0–100 %), je nach Anzeigemodus.
* Der **DMX-Adresse** des Kanals.
* Einer **Reset**-Schaltfläche (✕) — setzt den Kanal auf seinen normalen (nicht überschriebenen) Zustand zurück.

Kanäle, die Sie manuell geändert haben, sind **überschrieben** und werden in **Rot** angezeigt. Andere Kanäle sind eingefärbt, um zu zeigen, zu welchem Fixture sie gehören (abwechselnde Farbtöne für benachbarte Fixtures).

### Symbolleiste

Über den Fadern:

* **Universe** — wählt aus, welches Universum die Fader steuern.
* **Reset the whole universe** (✕) — löscht alle Überschreibungen im aktuellen Universum.
* **DMX / %** — schaltet die Wertefelder zwischen rohen DMX-Werten (0–255) und Prozentwerten (0–100 %) um.

## Fixture List

Die Liste unten links zeigt die im aktuellen Universum gepatchten Fixtures mit ihrem Adressbereich. Klicken Sie auf ein Fixture, um die Fader-Ansicht zu dessen erstem Kanal zu scrollen — das erleichtert das Auffinden der Kanäle eines Fixtures in einem vollen Universum.

## Tastenfeld und Befehlsverlauf

Der Bereich unten rechts ist ein numerisches **Tastenfeld** zur Eingabe von Befehlen, daneben ein **Befehlsverlauf**. Jeder ausgeführte Befehl wird dem Verlauf hinzugefügt; **doppelklicken** Sie auf einen Verlaufseintrag, um ihn wieder in das Tastenfeld zu laden und erneut auszuführen oder zu bearbeiten.

Geben Sie einen Befehl über das Bildschirm-Tastenfeld (oder Ihre Tastatur) ein und drücken Sie **ENTER**, um ihn auszuführen. **CLR** löscht den aktuellen Befehl.

## Syntax der Tastenfeldbefehle

Tastenfeldbefehle adressieren einen oder mehrere Kanäle und legen deren Werte fest, im Stil einer klassischen Lichtkonsole. Kanäle werden über ihre **DMX-Adresse** innerhalb des aktuellen Universums adressiert (beginnend bei 1).

### Schlüsselwörter und Operatoren

| Token | Bedeutung |
|-------|---------|
| `AT` | Setzt den/die adressierten Kanal/Kanäle auf einen Wert: `1 AT 200`. |
| `THRU` | Ein Bereich — von Kanälen (`1 THRU 10`) oder, nach `AT`, von Werten für eine Überblendung über den Bereich. |
| `BY` | Eine Schrittweite bei der Adressierung eines Bereichs: `1 THRU 20 BY 2` wählt jeden zweiten Kanal aus. |
| `FULL` | Kurzform für den Maximalwert (255 / 100 %). |
| `ZERO` | Kurzform für den Wert 0. |
| `+` | Addiert zu den aktuellen Werten der Kanäle: `1 + 20`. |
| `-` | Subtrahiert von den aktuellen Werten der Kanäle: `1 - 20`. |
| `+%` | Erhöht die aktuellen Werte um einen Prozentsatz: `1 +% 10`. |
| `-%` | Verringert die aktuellen Werte um einen Prozentsatz: `1 -% 10`. |

Das Tastenfeld zeigt je nach aktuellem Anzeigemodus `+`/`-` oder `+%`/`-%`.

### Grundformen

| Befehl | Wirkung |
|---------|--------|
| `5` | Wählt Kanal 5 aus (und macht ihn zur Arbeitsauswahl). |
| `5 AT 128` | Setzt Kanal 5 auf den Wert 128. |
| `5 FULL` | Setzt Kanal 5 auf Vollwert (255). |
| `5 ZERO` | Setzt Kanal 5 auf 0. |

### Bereiche

| Befehl | Wirkung |
|---------|--------|
| `1 THRU 10 AT 255` | Setzt die Kanäle 1 bis 10 alle auf 255. |
| `1 THRU 10 BY 2 AT 128` | Setzt jeden zweiten Kanal von 1 bis 10 (1, 3, 5, 7, 9) auf 128. |
| `1 THRU 10 AT 0 THRU 255` | Verteilt die Werte gleichmäßig über den Bereich — eine Überblendung von 0 auf Kanal 1 bis 255 auf Kanal 10. |

### Relative Änderungen

| Befehl | Wirkung |
|---------|--------|
| `1 THRU 10 + 20` | Addiert 20 zum aktuellen Wert jedes Kanals 1–10 (begrenzt auf 255). |
| `1 THRU 10 - 20` | Subtrahiert 20 von jedem (begrenzt auf 0). |
| `1 +% 10` | Erhöht den aktuellen Wert von Kanal 1 um 10 %. |
| `1 -% 10` | Verringert den aktuellen Wert von Kanal 1 um 10 %. |

### Wiederholung auf der letzten Auswahl

Wenn Sie einen Befehl **ohne Angabe von Kanälen** eingeben (zum Beispiel nur `AT 100`, `FULL` oder `ZERO`), wird er auf **dieselben Kanäle wie der vorherige Befehl** angewendet. So können Sie eine Reihe von Kanälen einmal auswählen und dann weiter anpassen:

```
1 THRU 8 AT 255   ← wählt die Kanäle 1–8 aus und setzt sie auf Vollwert
ZERO              ← dieselben Kanäle 1–8 gehen auf 0
AT 128            ← dieselben Kanäle 1–8 gehen auf 128
```

> Werte in Befehlen sind immer DMX-Werte (0–255). Ein `THRU`-Wertebereich und die `BY`-Schrittweite ermöglichen es, Überblendungen und Muster in einer einzigen Zeile zu erstellen, genau wie an einer Hardware-Konsole.
