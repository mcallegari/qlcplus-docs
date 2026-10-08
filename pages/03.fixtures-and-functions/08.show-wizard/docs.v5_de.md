---
title: 'Show Wizard'
date: '12:00 07-10-2026'
taxonomy:
    category:
        - docs
---

Der **Show Wizard** erstellt für Sie eine vollständige, sofort abspielbare Show —
Fixture-Positionen, Paletten, Effekte und eine virtuelle Konsole — ausgehend von
wenigen grundlegenden Entscheidungen. Er soll Sie in wenigen Minuten von einem
leeren Projekt zu einem nutzbaren Rig bringen und Neueinsteigern ein
funktionierendes Beispiel zum Lernen geben.

Öffnen Sie ihn über die Schaltfläche
<i class="fa fa-hat-wizard fa-2x" style="color:yellow"></i> **Show Wizard** oben
im rechten Panel des Arbeitsbereichs
[Fixtures and Functions](/fixtures-and-functions). Er öffnet sich als
Vollbild-Overlay mit sechs Schritten; eine Schrittanzeige oben zeigt, wo Sie
sich befinden, und die Schaltflächen **← Back** / **Next →** unten bewegen Sie
zwischen den Schritten. Die Schaltfläche des letzten Schritts zeigt **Generate
✦** statt **Next →**.

Es wird nichts in Ihr Projekt geschrieben, bis Sie im letzten Schritt
**Generate** drücken, und das gesamte Ergebnis — Bühnenlayout, Funktionen und
virtuelle Konsole — wird in einem Zug erstellt und ist **mit Strg+Z vollständig
rückgängig zu machen**, genau wie jede andere Änderung. Das Schließen des
Wizards über die Schaltfläche **✕** verwirft zu jedem Zeitpunkt Ihre
Entscheidungen, ohne das Projekt zu verändern.

## Schritt 1 — Show Type

Der erste Schritt fragt, welche Art von Show Sie erstellen möchten. Ihre Wahl
legt sinnvolle Standardwerte für den Rest des Wizards fest — den
vorgeschlagenen Veranstaltungsort in Schritt 3 und die in Schritt 4
vorausgewählten Effekte —, aber jeder dieser Standardwerte kann danach noch
geändert werden.

| Show type | Typische Verwendung | Effekt-Schwerpunkt |
|-----------|--------------|-------------------|
| **Club Night** | Box / Club | Schnelle Chaser, Strobe-Hits, RGB-Chases, BPM-synchrone Effekte |
| **Concert / Live** | Rockbühne | Positions-Presets, Farbwaschen, Publikums-Blinder, Bewegungs-EFX |
| **Theatrical** | Theater | Szenenbasiert, langsame Überblendungen, warme Farben, Gobo-Muster, Positions-Presets |
| **Architectural** | Offener Raum | Sanfte Pixel-Chases, Farbübergänge, Ambient-Loops |
| **Custom** | Beliebig | Nichts ist vorausgewählt — wählen Sie in den nächsten Schritten alles selbst |

## Schritt 2 — Fixture Groups & Roles

Dieser Schritt organisiert Ihre Fixtures in **Gruppen** und weist jeder Gruppe
eine **Rolle** zu. Rollen bestimmen sowohl die automatische Bühnenplatzierung
in Schritt 3 als auch, welche Effekte in Schritt 4 für die Gruppe erzeugt
werden.

Der Schritt ist in drei Spalten aufgeteilt:

* **Fixture Browser** (links) — derselbe Browser, der auch anderswo in QLC+
  verwendet wird. Ziehen Sie ein Fixture von dort auf eine Gruppenbox in der
  mittleren Spalte, um es in einem Schritt zu patchen und dieser Gruppe
  hinzuzufügen.
* **Fixture Groups** (Mitte) — Ihre Gruppenboxen. Klicken Sie auf **+ Add
  group**, um eine leere, benannte Box zu erstellen (Standardname „Group N“),
  und ziehen Sie dann Fixtures darauf. Aktivieren Sie das Kontrollkästchen
  einer Gruppe, um sie in die automatische Platzierung und in die erzeugten
  Funktionen einzubeziehen. Gruppen, die bereits im Projekt existieren
  (außerhalb des Wizards erstellt), werden hier ebenfalls aufgelistet, sodass
  Sie vorhandene Rigs in die Effekt- und Virtual-Console-Erzeugung des Wizards
  einbeziehen können, ohne irgendetwas neu zu patchen.
* **Detected capabilities & roles** (rechts) — zeigt für jede **aktivierte**
  Gruppe die ihr zugewiesene Rolle und die von QLC+ anhand ihrer Fixtures
  erkannten Capabilities (Bewegung, Farbmischung, Gobo, Shutter, Dimmer).
  Rollen werden automatisch anhand dieser Capabilities vorgeschlagen, Sie
  können die Rolle jeder Gruppe aber von Hand ändern.

### Roles

| Role | Icon | Bedeutung |
|------|------|---------|
| **Key Light** | 💡 | Front-/Top-Wash, die Hauptbeleuchtung |
| **Fill Light** | 🔦 | Zusätzlicher Wash aus einem anderen Winkel |
| **Back Light** | 🔙 | Rückwärtiges Backlight / Up-Lighter |
| **Side Light** | 📐 | Boom oder seitliches Licht (Theaterflügel) |
| **Effect** | ✨ | Luftiges Effekt-Fixture, Beams in der Luft |
| **Strip / Bar** | ▬ | LED-Leiste oder Batten, die quer über das Rig läuft |
| **Blinder** | 💥 | Publikums-Blinder / Strobe |
| **Hazer** | 💨 | Hazer oder Nebelmaschine |
| **Floor** | ⬆ | Boden-Up-Lighter |

> Eine Gruppe, deren Fixtures **bereits gepatcht und anderswo im Projekt
> positioniert** sind (d. h. sie liefert keine *neuen* Fixtures), lässt den
> Wizard Schritt 3 vollständig überspringen — siehe unten.

## Schritt 3 — Venue & Stage

Dieser Schritt wählt einen **Bühnentyp** und eine **Bühnengröße** aus und
zeigt dann, wie Ihre aktivierten Gruppen darauf positioniert werden. Er wird
**automatisch übersprungen**, wenn keine der aktivierten Gruppen ein Fixture
enthält, das der Wizard noch platzieren muss — zum Beispiel, wenn Sie nur eine
vorhandene Gruppe aktiviert haben, die bereits in der
[3D View](/fixtures-and-functions/3d-view) positioniert ist. Die
Schrittanzeige graut den übersprungenen Schritt aus, statt ihn auszublenden,
sodass Sie immer sehen, wo er gewesen wäre.

* **Venue type** — eine von vier Bühnenformen. Jede listet auf, für welche
  Show-Typen sie sich am besten eignet:

  | Stage | Beschreibung | Geeignet für |
  |-------|-------------|----------|
  | **Open Space** | Schlichter Boden, keine szenischen Elemente. Gut für temporäre Rigs und allgemeine Veranstaltungen. | Architectural, Custom |
  | **Box / Club** | Vier Wände und eine Decke, Traverse entlang des Umfangs. | Club Night |
  | **Rock Stage** | Erhöhte Bühne, Fronttraverse und vertikale Säulen. | Concert / Live |
  | **Theatre** | Portalbogen, Front-of-House-Bars, seitliche Booms. | Theatrical |

* **Stage size (metres)** — **Width**, **Height** und **Depth**, vorausgefüllt
  mit einer anhand Ihrer Fixture-Anzahl vorgeschlagenen Größe. Passen Sie die
  Felder an, falls Ihr tatsächlicher Veranstaltungsort abweicht; dies ist
  dieselbe Umgebungsgröße, die von den Einstellungen **Width / Height / Depth**
  der [3D View](/fixtures-and-functions/3d-view) verwendet wird, sodass eine
  Änderung hier auch dort wirksam wird.
* **Automatic fixture placement** (rechte Seite) — listet für jede aktivierte
  Gruppe auf, wo ihre Fixtures montiert werden und wie viele Fixtures das
  sind, zum Beispiel *Key Light → Front truss, high — aimed at stage centre
  ~45°*. Die Platzierung folgt gängigen Rigging-Konventionen für die jeweilige
  Rolle — Fronttraversen für Key Light, rückwärtige Traversen für Backlight,
  abwechselnde Seitenbooms für Side Light, eine durchgehende Batten für Strips
  usw. —, und die Köpfe werden gleichmäßig über die verfügbaren Positionen
  verteilt. Es ist keine manuelle 3D-Platzierung nötig, Sie können einzelne
  Fixtures aber jederzeit später in der 3D View feinjustieren.

## Schritt 4 — Effects

Dieser Schritt wählt aus, welche **Funktionen** der Wizard erzeugt — gruppiert
in Familien, mit einer laufenden Zählung, wie viele ausgewählt sind. Effekte,
die eine Capability benötigen, die keines Ihrer Fixtures besitzt (zum Beispiel
Bewegungseffekte auf einem Rig aus reinen Dimmern), werden **ausgegraut**
dargestellt und können nicht aktiviert werden. Klicken Sie auf **All / None**
im Kopf einer Familie, um alle verfügbaren Effekte dieser Familie auf einmal
auszuwählen oder abzuwählen.

| Family | Effects | Benötigt |
|--------|---------|-------|
| 🎨 **Color** | Color Palette, Color Rainbow, Split Color, Gobo Palette | Farbmischungs- und/oder Gobo-Kanäle |
| 💡 **Intensity** | Shutter Effects, Blinder Hit, Strobe Chase, Heartbeat | Einen Shutter-/Strobe-Kanal oder einen Dimmer |
| 🎯 **Movement** | Position Presets, Fly Out, Fly In, Circle Chase, Figure Eight, Audience Sweep | Pan/Tilt-Fixtures |
| ▦ **Matrix** | Pixel Chase, Wave, Fireworks, Plasma, Marquee | Ein Dimmer- oder farbmischendes Fixture (Moving Heads eingeschlossen — Matrix-Effekte laufen über die Intensität, wenn keine Farbmischung verfügbar ist) |
| 🎬 **Show Cues** | Ambient Loop | Mindestens ein **statisches** (nicht bewegtes), farbmischendes Fixture |

Jeder Show-Typ wählt beim Betreten dieses Schritts eine sinnvolle Teilmenge
vor (zum Beispiel aktiviert Club Night Color Rainbow, Blinder Hit, Strobe
Chase, Circle Chase und Pixel Chase; Theatrical aktiviert Color Palette,
Position Presets, Gobo Palette und Ambient Loop), Sie können aber unabhängig
vom in Schritt 1 gewählten Show-Typ frei Effekte hinzufügen oder entfernen.
**Custom** beginnt ohne jede Auswahl.

## Schritt 5 — Controller

Dieser **optionale** Schritt bindet einen gepatchten MIDI-, OSC- oder
DMX-Eingabe-Controller an die virtuelle Konsole, die der Wizard gleich
erstellt. Überspringen Sie ihn nach Belieben — Sie können Steuerelemente
später jederzeit von Hand mit **Auto Detect** auf einem beliebigen
Virtual-Console-Widget zuordnen.

* **Connected controllers** (links) — jedes Universum, das aktuell einen
  Eingangspatch hat (nicht nur eine Plugin-Zeile, die *gepatcht werden
  könnte*). Klicken Sie auf einen Eintrag, um ihn für die Zuordnung
  auszuwählen; klicken Sie erneut darauf, um ihn abzuwählen. Jeder Eintrag
  zeigt das Plugin, die Universumsnummer und einige Capability-Pills: den
  Namen des gepatchten **Eingangsprofils** (oder *No input profile*, wenn
  stattdessen generisches/lineares Mapping verwendet wird), wie viele
  **Buttons** und **Faders** der Wizard gefunden hat, ob das Profil über
  **Farb-LEDs** verfügt, und ob auf diesem Universum bereits **Feedback**
  aktiviert ist. Ist noch nichts gepatcht, führt Sie hier eine Schaltfläche
  direkt zum Panel **Input/Output**, um eines zu patchen, und dann zurück zum
  Wizard.
* **Mapping options** (rechts, aktiviert sobald ein Controller ausgewählt
  ist):

  | Option | Wirkung |
  |--------|--------|
  | **Auto-map Virtual Console controls** | Bindet die erzeugten Buttons, Fader und XY-Pads an die Kanäle des Controllers: Controller-Buttons steuern VC-Buttons, Fader/Encoder steuern Intensitätsregler und Pan/Tilt. |
  | **Send feedback to the controller** | Patcht die Ausgangsleitung des Controllers, sodass dessen LEDs aufleuchten und dessen motorisierte Fader sich entsprechend dem Zustand der virtuellen Konsole bewegen. |
  | **Match LED colours to button colours** | Beleuchtet bei einem Controller, dessen Eingangsprofil über eine Farbtabelle verfügt, das Pad jedes Farb-Buttons in der am besten passenden Farbe. Wird bei Controllern ohne Farb-LEDs ignoriert. |

  Unterhalb der Optionen gibt eine Box **Estimated usage** eine Live-Vorschau
  dessen, was die Zuordnung belegen wird, z. B. *„18 of 24 buttons, 3 of 9
  faders“*, aktualisiert, sobald Sie den Controller oder die Optionen ändern.

QLC+ erkennt gängige **Pad-Grid**-Controller (wie APC-mini- oder
Launchpad-Layouts) anhand ihres Eingangsprofils und ordnet Steuerelemente so
zu, dass dieselbe Art von Steuerelement immer an derselben Stelle im Grid
landet, unabhängig davon, welche Virtual-Console-Seite gerade angezeigt wird:
Seitenwechsel-Buttons, Farbfelder, Effekt-Trigger und Show-Cue-Buttons
erhalten jeweils ihr eigenes Zeilenband. Controller ohne erkanntes Grid
erhalten trotzdem eine brauchbare Zuordnung — Buttons werden der Reihe nach
vergeben, und Fader werden den vom Wizard erstellten Reglern zugeordnet.

## Schritt 6 — Summary

Der letzte Schritt gibt in zwei Spalten einen Überblick über das, was erstellt
wird:

* **What will be created** (links) — eine Karte pro Abschnitt: **Stage** (wie
  viele Gruppen positioniert wurden und auf welchem Bühnentyp — oder ein
  Hinweis, dass das vorhandene Layout unverändert gelassen wurde, weil
  Schritt 3 übersprungen wurde), **Functions** (wie viele Effekte ausgewählt
  wurden), **Virtual Console** (eine Hauptseite plus eine Rahmenseite pro
  Gruppe) und **Controller** (die Zuordnungszusammenfassung aus Schritt 5,
  oder *„No external controller mapped“*). Darunter wird jeder ausgewählte
  Effekt als kleiner Tag aufgelistet.
* **Virtual Console layout preview** (rechts) — eine schematische
  Vorschau des mehrseitigen Rahmens, den der Wizard erstellen wird: eine Seite
  **All Groups** plus eine Seite pro aktivierter Gruppe, jede mit eigenem
  Intensitätsregler, Farb-Buttons, XY-Pad (für Gruppen mit Bewegung) und
  Effekt-Buttons, sowie eine Reihe von Show-Cue-Buttons (Ambient, Blinder),
  die auf jeder Seite geteilt werden. Klicken Sie in der Vorschau auf die
  Seiten-Tabs, um vor dem Erzeugen eine andere Seite anzusehen.

Drücken Sie **Generate ✦**, um alles zu erstellen. In der Fußzeile erscheint
kurz eine Anzeige **„Generating…“**; der Wizard schließt sich dann
automatisch, und Ihre neue Show steht im Hauptarbeitsbereich bereit.

## Was erstellt wird

* **Stage** — wenn Schritt 3 nicht übersprungen wurde, werden die Fixtures
  jeder aktivierten Gruppe gepatcht (falls noch nicht geschehen) und
  entsprechend ihrer Rolle und dem gewählten Bühnentyp in der
  [3D View](/fixtures-and-functions/3d-view) positioniert.
* **Fixture Groups** — jede aktivierte Gruppe wird (oder bleibt) eine echte
  [Fixture Group](/fixtures-and-functions/fixture-group-manager), einschließlich
  einer synthetischen Gruppe **All Groups**, die die Fixtures aller
  aktivierten Gruppen umfasst und von der Haupt-Virtual-Console-Seite
  verwendet wird.
* **Functions** — für jede Gruppe und für das All-Groups-Aggregat erstellt der
  Wizard die Paletten (Farbe, Dimmer, Shutter) und Szenen, die zum Antreiben
  jedes ausgewählten Effekts benötigt werden, abgelegt in
  Funktionsbaum-Ordnern pro Gruppe. Bewegungseffekte werden aus einer
  Basis-**Position**-Szene plus einem [EFX](/function-manager/efx-editor)
  aufgebaut (oder einem **Chaser** für schrittbasierte Effekte wie Strobe
  Chase), sodass sie immer von einer definierten Ausrichtung ausgehen.
  Matrix-Effekte verwenden eine [RGB Matrix](/function-manager/rgb-matrix-editor)
  mit einem eingebauten Skript, mit Rückfall auf reine Intensitätsanimation
  bei Fixtures ohne Farbmischung.
* **Virtual Console** — ein einzelner mehrseitiger **Frame** als
  Hauptlayout: Seite 0 ist **All Groups**, gefolgt von einer Seite pro
  aktivierter Gruppe, mit Intensitätsreglern, Farb-/Gobo-Buttons,
  Bewegungs-/Effekt-Buttons und, für Gruppen mit Bewegung, einem
  [XY Pad](/virtual-console/xy-pad). Der Seitenwechsel nutzt versteckte
  Einkanal-Dimmer, die über das [Loopback](/plugins/loopback)-Plugin auf
  einem freien Universum gepatcht sind — Sie müssen dies nicht selbst
  einrichten.
* **External controller mapping** — wenn in Schritt 5 ein Controller
  ausgewählt wurde, werden die erzeugten Widgets entsprechend den von Ihnen
  gewählten Mapping-Optionen an ihn gebunden, mit Feedback und
  Farbabgleich, sofern aktiviert.

> Ein erneutes Ausführen des Wizards führt keine Zusammenführung mit zuvor
> Erzeugtem durch oder verändert es — jeder Durchlauf fügt einen neuen Satz
> von Gruppen, Funktionen und einen neuen Virtual-Console-Frame hinzu.
> Löschen Sie die vorherigen zuerst (oder machen Sie sie einfach rückgängig),
> wenn Sie von vorne beginnen möchten.
