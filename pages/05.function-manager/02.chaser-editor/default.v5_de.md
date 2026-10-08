---
title: 'Chaser-Editor'
date: '12:08 21-08-2023'
---

Ein **Chaser** spielt eine Liste von Funktionen (meist Szenen) nacheinander ab, jede für eine festgelegte Zeit. Es ist die wichtigste Methode, um Abfolgen von Looks aufzubauen — Farbchases, schrittbasierte Effekte, Cue-Stacks und so weiter. Der Chaser-Editor öffnet sich im rechten Bereich des Arbeitsbereichs [Fixtures and Functions](/fixtures-and-functions).

## Symbolleiste

| Schaltfläche | Was sie bewirkt |
|--------|--------------|
| **Name** | Der Name des Chasers (obere Leiste). |
| <i class="fa fa-chevron-left fa-2x"></i> **Zurück** | Kehrt zum vorherigen Editor zurück. |
| <i class="fa fa-2x fa-circle-left" style="color:cyan"></i> **Vorherigen Schritt in der Vorschau anzeigen** | Wenn die Vorschau läuft, wird rückwärts durch den Chaser geschritten, damit Sie jeden Look am Ausgang prüfen können. |
| <i class="fa fa-2x fa-circle-right" style="color:cyan"></i> **Nächsten Schritt in der Vorschau anzeigen** | Wenn die Vorschau läuft, wird vorwärts durch den Chaser geschritten. |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Neuen Schritt hinzufügen** | Öffnet den Funktionsmanager in einem Seitenbereich. **Doppelklicken** Sie Funktionen oder ziehen Sie sie von dort, um sie als Schritte anzuhängen. |
| <i class="fa fa-2x fa-clone"></i> **Ausgewählte(n) Schritt(e) duplizieren** | Kopiert die ausgewählten Schritte und fügt die Kopien in die Liste ein. |
| <i class="fa fa-2x fa-shuffle" style="color:gold"></i> **Reihenfolge der ausgewählten Schritte zufällig mischen** | Mischt die Reihenfolge der ausgewählten Schritte. |
| <i class="fa fa-2x fa-stopwatch" style="color:lightskyblue"></i> **Schrittdauern automatisch festlegen** | Teilt die Gesamtdauer des Chasers gleichmäßig auf die ausgewählten Schritte auf. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Ausgewählte Schritte entfernen** | Löscht die ausgewählten Schritte (nach Bestätigung). |
| <i class="fa fa-2x fa-print"></i> **Chaser-Schritte drucken** | Druckt die Liste der Chaser-Schritte. |

Die Vorschau-Schaltflächen erscheinen nur, während die Vorschau aktiviert ist. Die Bearbeitungsschaltflächen sind deaktiviert, während die Vorschau läuft, und die Schaltflächen zum Duplizieren/Automatisieren der Dauer/Entfernen benötigen mindestens einen ausgewählten Schritt.

## Die Schrittliste

Jede Zeile ist ein Schritt des Chasers:

| Spalte | Bedeutung |
|--------|---------|
| **#** | Die Schrittnummer in der Wiedergabereihenfolge. |
| **Funktion** | Die Funktion, die dieser Schritt abspielt. |
| **Fade In** | Die Zeit, die der Schritt zum Einblenden benötigt. |
| **Hold** | Die Zeit, die der Schritt auf vollem Wert bleibt, bevor er ausgeblendet wird. |
| **Fade Out** | Die Zeit, die der Schritt zum Ausblenden benötigt. |
| **Dauer** | Die Gesamtzeit des Schritts (Fade In + Hold). |
| **Notiz** | Ein Freitextkommentar zum Schritt. |

Interaktionen:

| Aktion | Ergebnis |
|--------|--------|
| **Klick** | Wählt einen Schritt aus. |
| **Strg+Klick** / **Umschalt+Klick** | Erweitert die Auswahl / wählt einen Bereich aus. |
| Einen Schritt **ziehen** | Ordnet ihn neu an; eine Linie zeigt, wo er abgelegt wird. |
| **Ziehen** aus dem Funktionsmanager | Fügt Funktionen als Schritte an der Ablageposition hinzu. |
| **Doppelklick** auf den Funktionsnamen | Öffnet den eigenen Editor dieser Funktion. |
| **Doppelklick** auf ein Zeitfeld | Bearbeitet die Zeit dieses Schritts direkt in der Liste. |
| **Doppelklick** auf die Notiz | Bearbeitet die Notiz des Schritts direkt in der Liste (**Enter** bestätigt, **Esc** bricht ab). |

Zeitfelder, die nicht auf **Per Step** (siehe unten) eingestellt sind, sind in der Liste nicht bearbeitbar.

## Ausführungseigenschaften

Der einklappbare Bereich **Ausführungseigenschaften** steuert, wie der Chaser wiedergegeben wird.

### Ausführungsreihenfolge

| Symbol | Modus | Verhalten |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Wiederholt ab dem ersten Schritt fortlaufend. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Läuft einmal durch und stoppt dann. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Läuft vorwärts, dann rückwärts, und wiederholt sich. |
| <i class="fa fa-2x fa-shuffle"></i> | **Random** | Spielt die Schritte in zufälliger Reihenfolge ab. |

### Richtung

| Symbol | Modus | Verhalten |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Beginnt beim ersten Schritt und geht die Liste abwärts durch. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Beginnt beim letzten Schritt und geht die Liste aufwärts durch. |

### Tempo

| Symbol | Modus | Verhalten |
|------|------|-----------|
| **T** | **Time** | Schrittzeiten werden in Minuten/Sekunden/Millisekunden angegeben. |
| **B** | **Beats** | Schrittzeiten werden in Beats angegeben, synchronisiert mit dem globalen Tempo. |

### Fade In / Fade Out / Dauer

Diese drei Einstellungen bestimmen, woher jeder Schritt sein Timing bezieht.

| Symbol | Modus | Verhalten |
|------|------|-----------|
| **D** | **Default** | Jeder Schritt verwendet die Einblendzeit seiner eigenen Funktion. (Nur Fade In / Fade Out.) |
| **C** | **Common** | Ein einziger, einmal eingegebener Wert wird von jedem Schritt geteilt. |
| **S** | **Per Step** | Jeder Schritt behält seinen eigenen Wert, der direkt in der Schrittliste bearbeitet werden kann. |
