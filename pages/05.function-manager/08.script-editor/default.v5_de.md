---
title: 'Skript-Editor'
date: '04:07 22-08-2023'
---

Ein **Skript** ist eine Funktion, die als kleines **JavaScript**-Programm geschrieben wird. Es ermöglicht Ihnen, Fixtures und andere Funktionen mit Logik zu steuern — Funktionen starten und stoppen, Kanäle setzen, warten, Zufallswerte erzeugen, Systembefehle ausführen und mehr. Der Skript-Editor öffnet sich im rechten Bereich des Arbeitsbereichs [Fixtures and Functions](/fixtures-and-functions).

Der gesamte Skriptkörper wird als Inhalt einer einzelnen JavaScript-Funktion ausgeführt, sodass Sie gewöhnliches JavaScript verwenden können — Variablen, `if`/`for`/`while`, Funktionen sowie die Standardobjekte `Math`, `String` usw. Jede Interaktion mit QLC+ erfolgt über ein globales Objekt namens **`Engine`**, dessen Methoden weiter unten in der [Engine API](#engine-api) dokumentiert sind.

## Symbolleiste

| Schaltfläche | Was sie bewirkt |
|--------|--------------|
| **Name** | Der Name des Skripts (obere Leiste). |
| <i class="fa fa-chevron-left fa-2x"></i> **Zurück** | Kehrt zum vorherigen Editor zurück. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Methodenaufruf an der Cursorposition einfügen** | Öffnet ein Menü mit fertigen Befehlen, die an der Cursorposition eingefügt werden können (siehe unten). |
| ![](/basics/functions.svg?resize=48,48) **Funktionsbaum ein-/ausblenden** | Öffnet den Funktionsmanager in einem Seitenbereich. **Doppelklicken** Sie eine Funktion oder ziehen Sie sie, um ihre ID in das Skript einzufügen. |
| ![](/basics/fixture.svg?resize=48,48) **Fixture-Baum ein-/ausblenden** | Öffnet den Fixture-Gruppen-Manager in einem Seitenbereich. **Doppelklicken** Sie ein Fixture oder ziehen Sie es, um dessen ID einzufügen. |
| <i class="fa fa-spell-check fa-2x"></i> **Skriptsyntax prüfen** | Validiert das Skript und meldet etwaige Fehler in einem Popup. |

## Das Skript schreiben

Der Hauptbereich ist ein einfacher Texteditor, in dem Sie das Skript eingeben, ein Befehl pro Zeile. Änderungen werden automatisch kurz nach dem Aufhören der Eingabe gespeichert.

Da Befehle Funktionen und Fixtures über ihre **ID** referenzieren, sind der Funktions- und der Fixture-Baum (und Drag-and-Drop) der einfachste Weg, die richtigen IDs einzufügen, ohne sie nachschlagen zu müssen.

## Menü zum Einfügen von Methoden

Die Schaltfläche <i class="fa fa-2x fa-plus" style="color:limegreen"></i> fügt eine Vorlage für einen gängigen Befehl ein, die Sie ausfüllen können:

| Eintrag | Was eingefügt wird |
|-------|-----------------|
| <i class="fa fa-2x fa-play"></i> **Start function** | Startet die Ausführung einer anderen Funktion. |
| <i class="fa fa-2x fa-stop"></i> **Stop function** | Stoppt eine laufende Funktion. |
| <i class="fa fa-2x fa-sliders" style="color:lime"></i> **Set fixture channel** | Setzt einen Kanalwert auf einem Fixture. |
| <i class="fa fa-2x fa-hourglass-end" style="color:deepskyblue"></i> **Wait time** | Pausiert für eine bestimmte Zeit, bevor die nächste Zeile ausgeführt wird. |
| <i class="fa fa-2x fa-dice" style="color:coral"></i> **Random number** | Erzeugt einen Zufallswert. |
| <i class="fa fa-2x fa-moon" style="color:darkslateblue"></i> **Blackout** | Schaltet den Blackout ein oder aus. |
| <i class="fa fa-2x fa-terminal"></i> **System command** | Führt einen externen Befehl aus. |
| <i class="fa fa-2x fa-folder-open" style="color:gold"></i> **File path** | Öffnet eine Dateiauswahl und fügt den Pfad der ausgewählten Datei (in Anführungszeichen) ein, für Befehle, die eine Datei benötigen. |

## Engine API

Jede QLC+-Operation ist eine Methode des globalen **`Engine`**-Objekts, aufgerufen als `Engine.methodName(argumente)`. Funktionen und Fixtures werden immer über ihre numerische **ID** referenziert — verwenden Sie den Funktions-/Fixture-Baum oder Drag-and-Drop, um die richtigen IDs einzufügen.

Zeiten können entweder in **Millisekunden** (eine Zahl) oder als **QLC+-Zeitstring** (z. B. `"2s"`, `"1m30s"`, `"2s.140"`) angegeben werden, je nach Methode.

### Funktionen

| Methode | Beschreibung |
|--------|-------------|
| `Engine.startFunction(fID)` | Startet die Funktion mit der angegebenen ID. Standardmäßig verfolgt das Skript diese und stoppt sie, wenn das Skript endet (siehe `stopOnExit`). Gibt bei Erfolg `true` zurück. |
| `Engine.stopFunction(fID)` | Stoppt die laufende Funktion mit der angegebenen ID. Gibt bei Erfolg `true` zurück. |
| `Engine.isFunctionRunning(fID)` | Gibt `true` zurück, wenn die Funktion gerade läuft, andernfalls `false`. |
| `Engine.waitFunctionStart(fID)` | Pausiert das Skript, bis die angegebene Funktion gestartet wurde. |
| `Engine.waitFunctionStop(fID)` | Pausiert das Skript, bis die angegebene Funktion gestoppt (beendet) wurde. |
| `Engine.stopOnExit(value)` | Wenn `true` (Standard), werden von diesem Skript gestartete Funktionen automatisch gestoppt, wenn das Skript endet. Rufen Sie `Engine.stopOnExit(false)` auf, um gestartete Funktionen nach Skriptende weiterlaufen zu lassen. |

### Funktionsattribute

Attribute sind die einstellbaren Werte einer Funktion, etwa **Intensity** (Index `0`) und die Geschwindigkeitsattribute einer Funktion. Sie können über Index oder Namen angesprochen werden.

| Methode | Beschreibung |
|--------|-------------|
| `Engine.getFunctionAttribute(fID, attributeIndex)` | Gibt den aktuellen Wert des Attributs am angegebenen Index zurück (Intensity ist `0`), oder `0`, falls nicht verfügbar. |
| `Engine.setFunctionAttribute(fID, attributeIndex, value)` | Setzt das Attribut am angegebenen Index auf `value`. Gibt bei Erfolg `true` zurück. |
| `Engine.setFunctionAttribute(fID, attributeName, value)` | Setzt das Attribut mit dem angegebenen Namen (z. B. `"Intensity"`) auf `value`. Gibt bei Erfolg `true` zurück. |

### Fixtures und Kanäle

| Methode | Beschreibung |
|--------|-------------|
| `Engine.setFixture(fxID, channel, value)` | Setzt `channel` (Index beginnend bei `0`, relativ zum Fixture) des Fixtures `fxID` auf den DMX-`value` (0–255). Gibt bei Erfolg `true` zurück. |
| `Engine.setFixture(fxID, channel, value, time)` | Wie oben, blendet aber über `time` Millisekunden zum Wert über. |
| `Engine.getChannelValue(universe, channel)` | Gibt den aktuellen DMX-Wert (0–255) eines **absoluten** Kanals in einem Universum zurück. Hinweis: `universe` und `channel` sind hier ein bei null beginnender Universums- bzw. Kanalindex, **kein** fixture-relativer Kanal. |

### Zeitsteuerung und Ablauf

| Methode | Beschreibung |
|--------|-------------|
| `Engine.waitTime(ms)` | Pausiert das Skript für `ms` Millisekunden, bevor die nächste Zeile ausgeführt wird. |
| `Engine.waitTime(time)` | Pausiert das Skript für den angegebenen QLC+-Zeitstring (z. B. `"1s.500"`). |
| `Engine.random(min, max)` | Gibt eine zufällige Ganzzahl zwischen `min` und `max` **Millisekunden** (Zahlen) zurück. Praktisch in Kombination mit `waitTime`. |
| `Engine.random(minTime, maxTime)` | Gibt eine zufällige Anzahl von Millisekunden zwischen zwei QLC+-Zeitstrings zurück (z. B. `Engine.random("1s", "5s")`). |

### Globale Steuerung

| Methode | Beschreibung |
|--------|-------------|
| `Engine.setBlackout(enable)` | Fordert Blackout an, wenn `enable` `true` ist, hebt ihn auf, wenn `false`. Gibt bei Erfolg `true` zurück. |
| `Engine.setBPM(bpm)` | Legt die Schläge pro Minute des internen Beat-Generators fest. Gibt bei Erfolg `true` zurück. |
| `Engine.systemCommand(command)` | Führt ein externes, von QLC+ losgelöstes Programm aus. Das erste Wort ist das Programm, der Rest sind Argumente. Schließen Sie ein Argument mit Leerzeichen in einfache Anführungszeichen ein — zum Beispiel `Engine.systemCommand("aplay '/home/me/my file.wav'")`. (Unter iOS nicht verfügbar.) |

### Beispiel

```javascript
// Blendet den ersten Kanal (Dimmer) von Fixture 0 über 2 Sekunden ein
Engine.setFixture(0, 0, 255, 2000);
Engine.waitTime("2s");

// Startet einen Chaser und lässt ihn nach Skriptende eigenständig weiterlaufen
Engine.stopOnExit(false);
Engine.startFunction(5);

// Wartet eine zufällige Zeit und löst dann einen Blackout aus
Engine.waitTime(Engine.random("1s", "4s"));
Engine.setBlackout(true);
```

> **Hinweis zu Fehlern:** Wenn das Skript nicht analysiert werden kann oder eine Ausnahme auslöst, meldet QLC+ die Zeilennummer und die Meldung. Verwenden Sie **Skriptsyntax prüfen** in der Symbolleiste, um ohne Ausführung zu validieren.
