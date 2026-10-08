---
title: 'Eingangsprofile'
date: '04:57 22-08-2023'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

## Was ist ein Eingangsprofil?

Ein **Eingangsprofil** ordnet die Signale eines externen Steuergeräts (ein
MIDI-Controller, eine OSC-App, ein DMX-Pult, ein Joystick, …) Kanälen zu, die QLC+
versteht, sodass Sie Ihre Show mit Ihrer bevorzugten Hardware steuern können, ohne
das zugrunde liegende Protokoll zu kennen. Sobald ein Profil einem Universum
zugewiesen ist, können seine Kanäle mit Widgets der virtuellen Konsole,
Kanalgruppen und mehr verknüpft werden.

## Ein Eingangsprofil auswählen

QLC+ wird mit vielen fertigen Profilen ausgeliefert. So weisen Sie eines zu:

1. Öffnen Sie den Kontext ![](/basics/inputoutput.svg?resize=24,24)
   **Eingänge/Ausgänge**.
2. Wählen Sie das Universum aus, an dem das Gerät gepatcht ist.
3. Öffnen Sie die Liste der **Eingangsprofile** im linken Bereich (die
   **P**-Schaltfläche).
4. Suchen Sie das Profil Ihres Geräts und wählen Sie es aus. Es wird an den
   Eingangspatch des Universums angehängt.

## Ein Profil erstellen / bearbeiten

Wenn Ihr Gerät nicht in der Liste enthalten ist, können Sie ein eigenes Profil
erstellen. Verwenden Sie in der Liste der Eingangsprofile die Schaltfläche
<i class="fa fa-2x fa-plus" style="color:limegreen"></i>, um ein neues Profil zu
erstellen, oder wählen Sie ein vorhandenes aus und bearbeiten Sie es. In beiden
Fällen öffnet sich der **Eingangsprofil-Editor**; das weitere Vorgehen ist
identisch.

## Eingangsprofil-Editor

Der Editor ist in Registerkarten gegliedert, mit einer gemeinsamen Symbolleiste
zum Hinzufügen, Entfernen und Speichern von Einträgen:

| Schaltfläche | Funktion |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Hinzufügen** | Fügt je nach aktueller Registerkarte einen neuen Kanal / eine neue Farbe / einen neuen MIDI-Kanal hinzu. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Entfernen** | Entfernt das ausgewählte Element. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Assistent** | (Registerkarte Eingabezuordnung) Schaltet den automatischen Kanalerkennungs-Assistenten um (siehe unten). |
| ![](/basics/filesave.svg?resize=32,32) **Dieses Profil speichern** | Speichert das Profil. Sind Hersteller/Modell leer, werden Sie zuerst zur Eingabe aufgefordert. |

### Allgemein

Der Bereich **Allgemein** enthält die Kennung des Profils:

* **Hersteller** — der Gerätehersteller. Ist er bereits in der Liste vorhanden,
  verwenden Sie dieselbe Schreibweise und Groß-/Kleinschreibung.
* **Modell** — das Gerätemodell, einschließlich der Version, falls relevant
  (z. B. „APC Mini MK2“).
* **Typ** — der Profiltyp: **MIDI**, **OS2L**, **OSC**, **HID**, **DMX** oder
  **ENTTEC**. MIDI-Profile zeigen zusätzliche MIDI-Nachrichtenfelder im
  Kanaleditor an und blenden die Registerkarte **MIDI-Kanäle** sowie die globalen
  MIDI-Einstellungen ein.

Für MIDI-Profile steht eine Option **Globale MIDI-Einstellungen** zur Verfügung:
*Wenn MIDI-Noten verwendet werden, ein Note-Off senden, wenn der Wert 0 ist*.

### Eingabezuordnung

Diese Registerkarte listet die Kanäle des Profils auf (Kanalnummer, Name und Typ).
Es gibt zwei Möglichkeiten, Kanäle hinzuzufügen.

**Manuell** — verwenden Sie die Schaltfläche
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Hinzufügen**, um
Kanaldetails von Hand einzugeben. Praktisch, wenn Sie die MIDI-/OSC-Codes Ihres
Geräts kennen.

**Automatisch** — verwenden Sie den
<i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Assistenten**,
um Kanäle durch Betätigen der Bedienelemente Ihres Geräts zu erkennen. QLC+ fügt
jedes Bedienelement hinzu, sobald Sie es berühren. Damit dies funktioniert, muss
dem aktuellen Universum ein Eingangs-Plugin gepatcht sein, und Sie müssen den
Assistenten stoppen, bevor Sie die Seite verlassen.

> Sie können denselben Kanal nicht mehr als einmal zu einem Profil hinzufügen.

#### Kanaleigenschaften

Beim Hinzufügen oder Bearbeiten eines Kanals legen Sie fest:

* **Nummer** — die Kanalnummer. Da QLC+ viele Plugins unterstützt, ist diese
  möglicherweise nicht intuitiv, ändern Sie sie also nur, wenn Sie wissen, was
  Sie tun.
* **Name** — eine beliebige Bezeichnung, die den Zweck des Bedienelements
  beschreibt.
* **Typ** — die Art des Bedienelements:
  ![](/basics/slider.svg?resize=24,24) **Slider**,
  ![](/basics/knob.svg?resize=24,24) **Knob**,
  ![](/basics/button.svg?resize=24,24) **Button** oder
  ![](/basics/knob.svg?resize=24,24) **Encoder**. Drei spezielle Typen —
  ![](/basics/back.svg?resize=24,24) **Vorherige Seite**,
  ![](/basics/forward.svg?resize=24,24) **Nächste Seite** und
  ![](/basics/star.svg?resize=24,24) **Seite festlegen** — werden zur Steuerung
  mehrseitiger Frames verwendet.

Für **MIDI**-Profile fügt der Editor die Felder **Kanal**, **Nachricht**,
**Param** und **Note** hinzu, mit denen Sie die MIDI-Spezifikation auf
intuitivere Weise eingeben können (diese werden in die Kanalnummer übersetzt).

#### ![](/basics/slider.svg?resize=24,24) Schieberegler-Bewegung

Die Auswahl eines **Slider**-Kanals zeigt dessen Bewegungsverhalten an:

* **Absolut** (Standard) — QLC+ verwendet den empfangenen Wert genau so, wie er
  gesendet wurde.
* **Relativ** — der Wert wird als Bewegung von der aktuellen Position des
  Widgets aus behandelt, nützlich bei einem HID-Joystick, der ein
  [XY-Pad](/virtual-console/xy-pad)- oder [Slider](/virtual-console/slider)-Widget
  steuert. Ein **Empfindlichkeit**-Wert legt fest, wie stark die Bewegung ist —
  höher bedeutet langsamer, niedriger bedeutet schneller.

#### ![](/basics/knob.svg?resize=24,24) Encoder

Ein Encoder ist ein endloses Drehelement, immer relativ: Das Drehen erzeugt
positive oder negative Offsets in QLC+. Ein **Empfindlichkeit**-Wert legt die
Größe des Offsets fest, der pro Schritt addiert oder subtrahiert wird.

#### ![](/basics/button.svg?resize=24,24) Button

Buttons bieten zusätzliches globales Verhalten:

* **Beim Umschalten ein zusätzliches Drücken/Loslassen erzeugen** — für Geräte
  (z. B. Behringer BCF2000) oder Software (z. B. TouchOSC), die beim Drücken
  nur einen einzelnen Wert senden. QLC+ erzeugt das „fehlende“ Loslassen, damit
  sich Umschalter konsistent verhalten.
* **Benutzerdefiniertes Feedback** — mit **Unterer Wert** und **Oberer Wert**
  erzwingen Sie, dass beim Aus-/Einschalten des Buttons bestimmte Werte
  zurückgesendet werden, zum Beispiel um die LED-Farbe bei AKAI-APC-Geräten
  festzulegen. Dies gilt global, kann aber von einem bestimmten Widget der
  virtuellen Konsole überschrieben werden.

### Farben

Manche Controller können Farben auf ihren Buttons anzeigen. Auf dieser
Registerkarte können Sie eine Reihe von Feedback-Farben definieren, damit sie
beim Bearbeiten des Widget-Feedbacks der virtuellen Konsole leicht ausgewählt
werden können. Verwenden Sie
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Hinzufügen**, um einen
Eintrag hinzuzufügen mit:

* **Wert** — der Wert, den QLC+ an den Controller senden muss, um die Farbe zu
  erzeugen.
* **Farbe** — die bei diesem Wert angezeigte Farbe (ein Farbwähler).
* **Bezeichnung** — ein Name für die Farbe (z. B. „Blau“).

### MIDI-Kanäle

Für MIDI-Geräte, die unterschiedliche MIDI-Kanäle für verschiedene
Feedback-/Anzeigemodi verwenden (zum Beispiel den AKAI APC Mini MK2), können Sie
auf dieser Registerkarte die entsprechenden MIDI-Kanäle mit einem beschreibenden
Namen über <i class="fa fa-2x fa-plus" style="color:limegreen"></i>
**Hinzufügen** hinzufügen.

## Speichern

Wenn Sie fertig sind, speichern Sie das Profil mit der Schaltfläche
![](/basics/filesave.svg?resize=24,24) **Speichern** (fehlen Hersteller/Modell,
werden Sie danach gefragt). Ihr neues Profil erscheint dann in der Liste der
Eingangsprofile und kann wie oben beschrieben einem Universum zugewiesen werden.

Beachten Sie, dass einige mitgelieferte Profile **Systemprofile** sind und nur
mit Administratorrechten entfernt werden können.
