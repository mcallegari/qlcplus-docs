---
title: 'Web API'
date: '03:38 12-07-2026'
---

Die QLC+ [Web Interface](../../web-interface) wird von einer kleinen **API**
gesteuert, die Sie von Ihren eigenen Webseiten oder Skripten aus verwenden
können, um den Zustand von QLC+ auszulesen und es fernzusteuern. Diese Seite
dokumentiert die API, die vom Web-Zugriff der Version 5 (QML) verwendet wird.

Die API besteht aus zwei Teilen:

* ein paar **HTTP-Endpunkten**, die Seiten und Daten bereitstellen, und
* einem **WebSocket**-Kanal, der Live-Befehle und Aktualisierungen überträgt.

Die meiste Steuerung erfolgt über den WebSocket.

## Verbindung herstellen

Aktivieren Sie zunächst die Weboberfläche, indem Sie QLC+ mit `-w` starten
(siehe die Seite [Web Interface](../../web-interface)). Öffnen Sie dann einen
WebSocket zu:

```
ws://[IP address]:9999/qlcplusWS
```

Nachrichten sind reiner Text. Eine Nachricht ist eine Liste von **Feldern,
getrennt durch das Pipe-Zeichen `|`**; das erste Feld ist der Befehlsname.
Antworten von QLC+ treffen über denselben Socket im selben, durch Pipes
getrennten Format ein. QLC+ **sendet** außerdem unaufgefordert Nachrichten,
wenn sich etwas ändert (eine Funktion startet, ein Fader bewegt sich, eine
Cue rückt vor), sodass ein Client einfach zuhören und reagieren kann.

> **Hinweis zu IDs:** Funktionen und Widgets werden über ihre numerische
> **ID** referenziert. Universen und Kanäle sind in der API **1-basiert**
> (Universum 1, Kanal 1 …).

## HTTP-Endpunkte

| Operation | Endpunkt | Zweck |
|----|------|---------|
| GET | / | Die Virtuelle-Konsole-Webseite. |
| GET | /vc.json | Das aktuelle Layout und der Widget-Zustand der virtuellen Konsole als JSON. |
| GET | /simpleDesk | Die Simple-Desk-Webseite. |
| GET | /config | Die Konfigurationsseite. |
| GET | /system | Die Systemseite (Netzwerk/Hotspot/Autostart, sofern unterstützt). |
| POST | /loadProject | Lädt eine Projektdatei (`.qxw`) hoch und lädt sie. |
| POST | /loadFixture | Lädt eine benutzerdefinierte Fixture-Definition hoch und lädt sie. |

## WebSocket-API — QLC+API-Abfragen

Abfrage- und Steuerbefehle werden als `QLC+API|<command>|<args…>` gesendet.
QLC+ antwortet mit `QLC+API|<command>|<result…>`.

| Befehl | Beschreibung |
|---------|-------------|
| `QLC+API|isProjectLoaded` | Antwortet mit `true` / `false`. |
| `QLC+API|getFunctionsNumber` | Die Anzahl der Funktionen im Projekt. |
| `QLC+API|getFunctionsList` | Eine flache Liste von `id|name|`-Paaren für jede Funktion. |
| `QLC+API|getFunctionType|<fID>` | Der Typ der Funktion als Zeichenkette (Scene, Chaser, …). |
| `QLC+API|getFunctionStatus|<fID>` | `Running` oder `Stopped`. |
| `QLC+API|setFunctionStatus|<fID>|<status>` | Startet (`1`) oder stoppt (`0`) die Funktion. |
| `QLC+API|getWidgetsNumber` | Die Anzahl der Widgets der virtuellen Konsole. |
| `QLC+API|getWidgetsList` | Eine flache Liste von `id|caption|`-Paaren für jedes Widget. |
| `QLC+API|getWidgetType|<wID>` | Der Typ des Widgets als Zeichenkette (Button, Slider, …). |
| `QLC+API|getWidgetFunction|<wID>` | Die dem Widget zugeordnete Funktion (id, Typ, Name). |
| `QLC+API|getWidgetStatus|<wID>` | Der aktuelle Wert/Zustand des Widgets (siehe unten). |
| `QLC+API|getChannelsValues|<universe>|<startAddress>|[count]` | Die DMX-Werte von `count` Kanälen ab `startAddress` in `universe`. |
| `QLC+API|sdResetChannel|<channel>` | Setzt einen Simple-Desk-Kanal zurück; antwortet mit den aktualisierten Kanalwerten. |
| `QLC+API|sdResetUniverse|<universe>` | Setzt ein ganzes Universum zurück; antwortet mit den aktualisierten Kanalwerten. |

`getWidgetStatus` liefert einen Wert, der vom Widget-Typ abhängt — zum
Beispiel antwortet ein Button mit `255` (aktiv), `127` (Monitoring) oder `0`
(inaktiv); ein Slider antwortet mit seinem numerischen Wert; eine Cue-Liste
antwortet mit `PLAY|<index>` oder `STOP`; eine Animation antwortet mit ihrem
Fader-Pegel.

## WebSocket-API — Widgets steuern

Um ein Widget zu bedienen, senden Sie seine **numerische ID** als erstes
Feld, gefolgt vom Wert oder einem Unterbefehl. Die genaue Form hängt vom
Widget-Typ ab.

### Einfache Widgets

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|<value>` | **Button**: drücken (Wert `> 0`) oder loslassen. **Slider**: Wert setzen. |
| `<wID>|SLIDER_OVERRIDE|<0/1>` | Slider: Override-Modus aktivieren/deaktivieren. |
| `<wID>|CNG_PRESET|<value>` | Slider: einen Click-&-Go-Preset-Wert anwenden. |
| `<wID>|CNG_COLORS|<primary>|<secondary>` | Slider: Click-&-Go-Farben festlegen (z. B. `#ff0000`). |

### Cue List

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|PLAY` | Wiedergabe starten. |
| `<wID>|STOP` | Stopp. |
| `<wID>|PREV` | Vorherige Cue. |
| `<wID>|NEXT` | Nächste Cue (GO). |
| `<wID>|STEP|<index>` | Zu einem bestimmten Schritt springen. |
| `<wID>|CUE_SIDECHANGE|<level>` | Den Seiten-Fader bewegen. |

### Frame / Solo Frame

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|NEXT_PG` / `<wID>|PREV_PG` | Nächste / vorherige Seite. |
| `<wID>|PAGE|<n>` | Zu Seite *n* wechseln. |
| `<wID>|FRAME_DISABLE|<0/1>` | Frame aktivieren/deaktivieren. |
| `<wID>|COLLAPSE|<0/1>` | Frame einklappen/ausklappen. |

### Animation (RGB Matrix)

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|MATRIX_SLIDER|<value>` | Den Intensitäts-Fader setzen. |
| `<wID>|MATRIX_COLOR_1..5|<color>` | Farben 1–5 setzen (z. B. `#00ff00`). |
| `<wID>|MATRIX_COMBO|<index>` | Den Algorithmus/das Preset auswählen. |

### XY Pad

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|XYPAD|<x>|<y>` | Die Pad-Position setzen. |
| `<wID>|XYPAD_RANGE_H|<min>|<max>` | Den horizontalen Bereich festlegen. |
| `<wID>|XYPAD_RANGE_V|<min>|<max>` | Den vertikalen Bereich festlegen. |
| `<wID>|XYPAD_PRESET|<presetID>` | Ein Preset anwenden. |

### Speed Dial

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|SPEED_UP` / `<wID>|SPEED_DOWN` | Die Zeit hoch-/runterstellen. |
| `<wID>|SPEED_TIME|<ms>` | Die Zeit direkt festlegen. |
| `<wID>|SPEED_FACTOR|<factor>` | Den Multiplikationsfaktor festlegen. |
| `<wID>|SPEED_APPLY` | Anwenden. |

### Audio Triggers

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|<0/1>` | Erfassung aktivieren/deaktivieren. |
| `<wID>|AUDIO_VOLUME|<0-100>` | Die Eingangslautstärke festlegen. |

### Clock

| Nachricht | Wirkung |
|---------|--------|
| `<wID>|CLOCK_PLAY|<0/1>` | Start/Stopp (für Stoppuhr/Countdown). |
| `<wID>|CLOCK_RESET` | Zurücksetzen. |

## WebSocket-API — Simple Desk und global

| Nachricht | Wirkung |
|---------|--------|
| `CH|<absoluteAddress>|<value>` | Setzt einen absoluten DMX-Kanal (Adressen laufen universumsübergreifend fortlaufend) auf einen Wert 0–255. |
| `VC_PAGE|<n>` | Wechselt die virtuelle Konsole zu Seite *n*. |
| `GM_VALUE|<value>` | Setzt den Grand Master. QLC+ sendet außerdem `GM_VALUE|<value>|<display>`, wenn er sich ändert. |
| `POLL` | Ein Keep-Alive; QLC+ ignoriert ihn. |

## Hinweise und Einschränkungen

* Jeder Zugriff unterliegt der **Authentifizierungsebene** des verbundenen
  Benutzers, wenn QLC+ mit `-wa` gestartet wurde: Kanal- und Widget-Steuerung
  erfordern mindestens Simple-Desk-/Virtuelle-Konsole-Rechte, und
  Konfigurationsbefehle erfordern Administratorrechte.
* Diese API befindet sich in aktiver Entwicklung und kann sich zwischen
  Versionen ändern.
