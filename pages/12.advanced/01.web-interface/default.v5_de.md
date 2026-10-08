---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

QLC+ enthält einen eingebauten Webserver, der einige seiner Funktionen für
einen gewöhnlichen Webbrowser bereitstellt. Das ist sehr praktisch, um QLC+
auf einem Gerät ohne Bildschirm (ein **Headless**-System) auszuführen, sei es
im Standalone-Betrieb oder um es per Fernsteuerung von einem Smartphone,
Tablet oder einem anderen Computer aus zu bedienen.

## Die Weboberfläche aktivieren

Die Weboberfläche ist standardmäßig **nicht** aktiviert. Starten Sie QLC+ mit
der Option `-w` (oder `--web`), um sie zu aktivieren. Zugehörige
Kommandozeilenoptionen:

| Option | Zweck |
|--------|---------|
| `-w`, `--web` | Aktiviert den Remote-Webzugriff. |
| `-wp`, `--web-port <port>` | Verwendet einen bestimmten Port (Standard ist **9999**). |
| `-wa`, `--web-auth` | Aktiviert den Webzugriff mit Benutzerauthentifizierung. |
| `-a`, `--web-auth-file <file>` | Datei, in der die Basisauthentifizierungs-Anmeldedaten gespeichert werden. |

Wie Sie diese Optionen übergeben, erfahren Sie auf der Seite
[Kommandozeilenparameter](../command-line-parameters).

## Zugriff auf die Weboberfläche

Verbinden Sie sich von jedem modernen Browser (auf jedem Gerät im selben
Netzwerk) mit:

**http://\[IP-Adresse\]:9999**

wobei *\[IP-Adresse\]* die Adresse des Geräts ist, auf dem QLC+ läuft — zum
Beispiel `http://192.168.0.100:9999`. Der Browser muss
[WebSockets](https://caniuse.com/mdn-api_websocket) unterstützen, die QLC+
verwendet, um in Echtzeit mit der Seite zu kommunizieren.

Die Weboberfläche besteht aus drei Seiten:

* **Virtuelle Konsole**
* **Simple Desk**
* **Konfiguration**

Sie können außerdem eigene Webseiten erstellen, die über die [Web-API](web-api)
mit QLC+ kommunizieren.

## Seite „Virtuelle Konsole“

Dies ist die Standardseite. Sie spiegelt die QLC+-**Virtuelle Konsole**
wider: Ist ein Projekt geladen, zeigt sie die von Ihnen erstellten Widgets
(Buttons, Slider, Cue-Listen, Frames, Uhren, XY-Pads, Speed Dials,
Animationen, Audio-Trigger, Labels), und ihre Bedienung im Browser steuert
QLC+ live. Ist kein Projekt geladen, ist die Seite leer.

* **Projekt laden** (oben links) — wählt eine Projektdatei vom Gerät, mit dem
  Sie gerade browsen; sie wird an QLC+ übertragen und dort geladen.
* **Konfiguration** — öffnet die Konfigurationsseite.

Layout und Zustand der Widgets werden dem Browser als JSON gesendet, und
Aktualisierungen (eine laufende Funktion, ein bewegter Fader, ein
Cue-Wechsel) werden live über den WebSocket zurückgesendet, sodass die
Web-Ansicht mit QLC+ synchron bleibt.

## Seite „Simple Desk“

Eine vereinfachte Version des Desktop-[Simple Desk](/simple-desk). Sie zeigt
ein DMX-Universum, aufgeteilt in Seiten zu je 32 Kanälen.

* Verwenden Sie die **Pfeile links/rechts**, um zwischen Kanalseiten zu
  wechseln.
* Verwenden Sie das **Dropdown-Menü** oben rechts, um das angezeigte Universum
  auszuwählen.
* Verwenden Sie die **Reset**-Schaltfläche (graues ✕), um das gesamte
  Universum zurückzusetzen.

### DMX-Tastenfeld

Die Schaltfläche **DMX-Tastenfeld** öffnet ein herkömmliches Tastenfeld, mit
dem Sie viele Kanäle mit einem einzigen Befehl einstellen können. Die
Befehlssyntax entspricht dem Desktop-
[Simple-Desk-Tastenfeld](/simple-desk):

| Taste | Beschreibung |
|-----|-------------|
| **AT** | Legt einen Wert für einen Kanal oder Bereich fest. Beispiel: **13 AT 148**. |
| **THRU** | Wählt einen Bereich von Kanälen aus. Beispiel: **3 THRU 15 AT 133**. |
| **FULL** | Setzt den Maximalwert (255). Beispiel: **1 THRU 10 FULL**. |
| **ZERO** | Setzt den Minimalwert (0). Beispiel: **4 ZERO**. |
| **BY** | Legt einen Schritt innerhalb eines Bereichs fest. Beispiel: **1 THRU 10 BY 2 AT 100** (Kanäle 1, 3, 5, 7, 9). |
| **+%** | Erhöht die aktuellen Werte um einen Prozentsatz. Beispiel: **1 THRU 10 BY 2 +% 20**. |
| **-%** | Verringert die aktuellen Werte um einen Prozentsatz. Beispiel: **1 THRU 10 BY 2 -% 20**. |

Beachten Sie:

* Ein Befehl wird erst gesendet, wenn Sie **ENTER** drücken.
* DMX-Adressen sind universumsübergreifend fortlaufend — Universum 1 ist
  1–512, Universum 2 ist 513–1024 usw.
* Sie können Befehle auch direkt in das obere Textfeld eingeben, sobald Sie
  die Syntax kennen.

## Konfigurationsseite

Ermöglicht die Remote-Konfiguration von QLC+ in mehreren Bereichen:

* **Universenkonfiguration** — legt Eingänge, Ausgänge, Feedback, Profile und
  Passthrough für jedes Universum fest (dasselbe wie das Desktop-Panel
  [Eingabe/Ausgabe](/input-output)). Da ein Projekt seine I/O-Zuordnung
  bereits speichert, müssen Sie sie hier meist nur überprüfen statt neu zu
  konfigurieren.
* **Audiokonfiguration** — wählt die Audiowiedergabe- und -eingabegeräte aus.
* **Vom Benutzer geladene Fixtures** — lädt per Fernzugriff eine
  benutzerdefinierte Fixture-Definition auf QLC+ hoch mit **Fixture laden**.
  Nach dem Hinzufügen benutzerdefinierter Fixtures laden Sie das Projekt neu
  oder starten Sie QLC+ auf dem Zielgerät neu.
* **Autorisierte Benutzer** — nur verfügbar, wenn QLC+ mit `-wa` /
  `--web-auth` gestartet wurde. Aktiviert eine einfache
  HTTP-Authentifizierung (kein HTTPS/keine Zertifikate). Wenn Sie diese
  Funktion zum ersten Mal aktivieren, müssen Sie mindestens einen
  Administrator hinzufügen, andernfalls wird nie ein Passwort abgefragt.
  Zugriffsebenen:
  * **Alles** — Administratoren; voller Zugriff, einschließlich der
    Benutzerverwaltung.
  * **Virtuelle Konsole und Simple Desk** — kann diese beiden Seiten
    anzeigen, jedoch nicht die Konfigurationsseite.
  * **Nur virtuelle Konsole** — kann nur die Seite „Virtuelle Konsole“
    anzeigen.

  Ein Administrator kann Benutzer hinzufügen (Benutzername + Passwort →
  **Benutzer hinzufügen**), Benutzer löschen und die Zugriffsebene oder das
  Passwort eines Benutzers ändern (**Ändern**).

Verwenden Sie die Schaltfläche **Zurück** (oben links), um zur Hauptseite
zurückzukehren.

## Systemseite

Auf unterstützten Plattformen (typischerweise Headless-Linux-Geräte wie ein
Raspberry Pi) steht ein **System**-Bereich zur Verfügung, um das Netzwerk und
den Hotspot des Geräts zu konfigurieren, das **Autostart**-Projekt
auszuwählen sowie das Gerät per Fernzugriff **neu zu starten** oder
**herunterzufahren**.
