---
title: Schieberegler
date: '03:02 22-08-2023'
---

Ein **Schieberegler** ist ein Fader in der [virtuellen Konsole](/virtual-console).
Je nach Konfiguration kann er den Pegel einer Reihe von Kanälen steuern, als
Submaster fungieren, den Grand Master ansteuern oder ein Attribut einer Funktion
anpassen. Das Widget **Knopf** ist dieselbe Steuerung, nur als Drehregler statt
als Fader dargestellt.

## Einstellungen

### Anzeigestil

* **DMX-Wert / Prozentsatz** — ob die Anzeige des Schiebereglers den rohen
  DMX-Wert (0–255) oder einen Prozentsatz anzeigt.
* **Normal / Invertiert** — die Richtung des Schiebereglers (oben = Maximum
  oder oben = Minimum).

### Schieberegler-Modus

Der Modus bestimmt, was der Schieberegler tatsächlich steuert:

* **Pegel** — steuert den Pegel einer ausgewählten Gruppe von **Kanälen** (der
  gebräuchlichste Modus). Siehe *Pegel-Modus* unten.
* **Anpassen** — passt ein **Attribut** einer zugewiesenen Funktion an (zum
  Beispiel deren Intensität oder ein benutzerdefiniertes Attribut).
* **Submaster** — der Schieberegler fungiert als Submaster und skaliert den
  Pegel der Widgets innerhalb seines Frames.
* **Grand Master** — der Schieberegler steuert den Grand Master (den globalen
  Gesamtpegel).

### Funktionssteuerung (Anpassen-Modus)

* **Attribut** — welches Funktionsattribut der Schieberegler anpasst.
* **Aktuelle Funktion trennen** — entfernt die zugewiesene Funktion.

### Pegel-Modus

* **Kanäle** — die Kanäle, die der Schieberegler steuert. Mit **Kanäle
  hinzufügen/entfernen** wählen Sie Fixture-Kanäle aus.
* **Flash-Taste anzeigen** — fügt dem Schieberegler eine kurzzeitige
  Flash-Taste hinzu, die ihn bei Betätigung auf voll setzt.
* **Click & Go-Taste** — fügt neben dem Schieberegler einen schnellen
  Farb-/Voreinstellungswähler hinzu:
  * **Keine**, **RGB/CMY** (Farbwähler) oder **Gobo/Effekt/Makro**
    (Voreinstellungswähler).
* **Kanalpegel überwachen** — der Schieberegler folgt (überwacht) dem
  tatsächlichen Ausgabepegel seiner Kanäle.
* **Wertebereich** — **Obere Grenze** und **Untere Grenze** begrenzen den
  Bereich, in dem sich der Schieberegler bewegt.

### Grand-Master-Modus

* **Grand-Master-Modus** — **Werte reduzieren** (proportional skalieren) oder
  **Werte begrenzen** (kappen).
* Gilt nur für **Intensitätskanäle** oder für **Alle Kanäle**.

### Externe Eingabe

* **Eingabewert des externen Controllers aufholen** — wenn der Schieberegler an
  einen physischen Fader gebunden ist, beginnt er sich erst zu bewegen, sobald
  der Hardware-Fader den aktuellen Wert erreicht hat. So werden Sprünge
  vermieden ("Pickup"/"Soft Takeover").

## Tipps

* Verwenden Sie den **Pegel**-Modus mit einer Click & Go-Taste, um mit einem
  einzigen Fader gleichzeitig zu dimmen und eine Gruppe von Fixtures einzufärben.
* Verwenden Sie den **Submaster**-Modus in einem Frame mit Schaltflächen/Schiebereglern,
  um einen Gesamtpegel über diesen ganzen Bereich der Konsole zu legen.
