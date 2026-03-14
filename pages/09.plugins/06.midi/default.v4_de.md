---
title: MIDI
date: '05:15 22-08-2023'
---

Einführung
------------

Dieses Plugin bietet Ein-/Ausgabeunterstützung für das [MIDI-Protokoll](https://de.wikipedia.org/wiki/MIDI) und gibt dem Benutzer die Freiheit, typische Parameter wie Kanäle, Noten, Programmwechsel und Kontrollwechsel zu steuern.  
Das MIDI-Plugin kann sehr leistungsstark in Kombination mit MIDI-Geräten wie Keyboards, MIDI-Controllern (wie Behringer BCF2000 oder KORG nanoKONTROL) oder einem Software-Audiosequenzer wie Cubase oder Ardour 3 verwendet werden.  
Die Verwendung kann von Fader-zu-Fader-Steuerung (im BCF2000-Fall) bis hin zur Sequenzauslösung für synchronisierte Shows (metronomgesteuerte Gigs mit einem Audiosequenzer) variieren.

Konfiguration
-------------

Wenn Sie auf die Konfigurationsschaltfläche ![](/basics/configure.png) klicken, erscheint ein Fenster, das alle erkannten MIDI-Ein- und Ausgangsleitungen anzeigt.  
Jede Zeile verfügt über drei Optionen, die je nach Bedarf geändert werden können:

* **MIDI-Kanal**: Dies ist der Kanal, auf dem QLC+ Daten über das MIDI-System empfängt oder sendet. MIDI-Kanäle können von 1 bis 16 reichen. Der spezielle Kanal „1-16“ weist QLC+ an, Daten auf jedem MIDI-Kanal zu empfangen oder zu senden.
* **Modus**: Dies ist der MIDI-Modus, den QLC+ zum Senden von Daten über das MIDI-System verwendet. Dieser Parameter kann drei mögliche Werte annehmen:
    * **Notengeschwindigkeit**: In diesem Modus sendet QLC+ Daten mit der MIDI-Notengeschwindigkeit. MIDI-Noten können von 21 (A0) bis 108 (C8) reichen und jede Note kann eine Anschlagstärke von 0 bis 127 haben, die in QLC+ verdoppelt wird, um dem DMX-Bereich (0-255) zu entsprechen.
    * **Control Change**: Dies ist eine der MIDI-Protokollmeldungen (wie Program Change), die häufig von MIDI-Controllern verwendet werden. Jedes Gerät sollte die unterstützten CC-Meldungen in seinem Benutzerhandbuch auflisten. Bitte konsultieren Sie es daher, bevor Sie diesen Modus verwenden. Der CC-Bereich kann von 0 bis 127 reichen und Werte von 0 bis 127 haben, die in QLC+ verdoppelt werden, um dem DMX-Bereich (0-255) zu entsprechen.
* **Programmwechsel**: Dies ist eine der MIDI-Protokollmeldungen (wie Control Change), die häufig von MIDI-Controllern verwendet werden. Jedes Gerät sollte die unterstützten PC-Meldungen in seinem Benutzerhandbuch auflisten. Bitte lesen Sie dieses daher durch, bevor Sie diesen Modus verwenden. Der PC-Bereich kann von 0 bis 127 reichen und Werte von 0 bis 127 haben, die in QLC+ verdoppelt werden, um dem DMX-Bereich (0-255) zu entsprechen.
* **Initialisierungsnachricht**: Dies ist eine Liste von Presets (Vorlagen), die die Initialisierungsnachricht enthält, die QLC+ sendet, wenn ein MIDI-Gerät vor der Verwendung geöffnet wird. Eine ausführliche Erläuterung dieser Funktionalität finden Sie weiter unten.

> [!WICHTIG]
> **Hinweis:** QLC+ folgt dem MIDI-Standard, in dem eine „Note On“-Nachricht mit einer Anschlagstärke („velocity“) von `0` als „Note Off“ interpretiert wird. Wenn Ihr MIDI-Controller oder Ihre MIDI-Software „Note On“-Nachrichten mit einer Anschlagstärke von `0` sendet, aktiviert QLC+ keine Steuerelemente auf der virtuellen Konsole. Um die Steuerelemente zu aktivieren, stellen Sie sicher, dass „Note On“-Nachrichten eine Anschlagstärke ungleich Null verwenden. Dieses Problem wurde bei der Verwendung von „ProPresenter“ beobachtet und konnte durch Einstellen einer Anschlagstärke ungleich Null behoben werden.

Rückmeldung
---------

Das MIDI-Plugin ist eines der QLC+-Plugins, die Feedback unterstützen. Wenn QLC+ ein MIDI-Gerät mit einer Ausgangsleitung erkennt, aktiviert es das Feedback-Kontrollkästchen im [Eingabe-/Ausgabefeld](/input-output). Bitte beachten Sie, dass Ausgabe und Feedback exklusiv sind und daher nicht beide gleichzeitig verwendet werden können.  
Wenn Ihr MIDI-Gerät einen Rückkanal unterstützt, kann QLC+ ein visuelles/mechanisches Feedback an ihn senden. Geräte wie das Behringer BCF2000 unterstützen diese Funktion. Dies ist bei Live-Shows sehr nützlich, um sofort über den aktuellen Status der in QLC+ zugeordneten Fader informiert zu sein.  

Ein kleiner Trick, der mit QLC+ erreicht werden kann, besteht darin, Feedback als generische MIDI-Ausgangsleitung zum Triggern externer Controller/Sequenzer zu verwenden.  
Schauen wir uns einige Beispiele an:

* Eingang: **OSC** ---\> Ausgang: **DMX USB** --\> Feedback: **MIDI**
* Eingabe: **Enttec Wing** --\> Ausgabe: **ArtNet** --\> Feedback: **MIDI**

KORG nanoPAD X-Achse
-------------------

Aus unbekannten Gründen wird in den Werkseinstellungen des nanoPAD die X-Achse des Pad-Bereichs nicht abgebildet. Damit es vollständig mit QLC+ funktioniert, laden Sie bitte das KORG-Dienstprogramm (nur Windows und macOS) von [hier](http://i.korg.com/SupportPage.aspx?productid=415) herunter und stellen Sie die X-Achse auf CC2 ein (Kontrollwechsel Nr. 2).

AKAI APC LED-Feedback
----------------------

Bei der Verwendung eines der AKAI APC-Controller gibt es eine Funktion, die sehr praktisch sein kann: LED-Farbrückmeldung.  
Das Standardverhalten der Tasten der virtuellen Konsole ist: Wert = 0: LED aus, Wert = 255: LED grün.  
Dies kann bei der Auswahl eines Eingangskanals durch Drücken der Schaltfläche „Benutzerdefiniertes Feedback“ angepasst werden.  
Es erscheint ein neuer Bereich mit der Möglichkeit, einen unteren und einen oberen Wert einzugeben. Dabei handelt es sich grundsätzlich um die Werte, die QLC+ für den Ein-/Aus-Zustand der Tasten senden soll.  
Da das MIDI-Protokoll in einem Wertebereich von 0–127 arbeitet und QLC+ im DMX-Bereich von 0–255 arbeitet, zeigt Ihnen die folgende Tabelle direkt die Werte, die Sie eingeben sollten, um die gewünschte Farbe einer APC-LED zu erhalten. Im Wesentlichen sind sie den APC-Handbüchern entnommen und verdoppelt.

| Wert | LED-Farbe |
| --- | --- |
| 0 | Aus |
| 2 | Grün |
| 4 | Grün blinkend |
| 6 | Rot |
| 8 | Rot blinkend |
| 10 | Gelb |
| 12 | Gelbes Blinken |
| 14-255 | Grün |

Es ist interessant zu bemerken, dass Sie nicht unbedingt 0 als unteren Wert beibehalten müssen. Wenn zum Beispiel unten = 6 und oben = 2 ist, lautet das Ergebnis: Funktion aus -> rote LED, Funktion ein -> grüne LED.

MIDI-Beat-Clock
---------------

Ab Version 4.5.0 unterstützt QLC+ die [MIDI-Beat-Clock](https://en.wikipedia.org/wiki/MIDI_beat_clock).  
Nicht zu verwechseln mit dem [MIDI-Timecode](https://en.wikipedia.org/wiki/MIDI_timecode), die MIDI-Beat-Clock ist ein nützliches Signal, um BPM-basierte Geräte wie einen Drumcomputer mit Ihren von ihm gesteuerten Lichtern zu synchronisieren QLC+.  
In QLC+ wurden zwei spezielle MIDI-Kanäle zugeordnet, um Ihre [Virtual Console](/virtual-console)-Widgets mit einer Beat-Clock zu steuern.  
Hier eine kurze Erklärung der Sonderkanäle:

* **Kanal 530**: Auf diesem Kanal wird ein Signal gesendet, wenn eine Beat Clock startet oder stoppt.
* **Kanal 531**: Dieses Signal wird alle BPM gesendet. QLC+ berücksichtigt keine Takte (z. B. 3/4, 4/4, 7/8), daher müssen Sie beim Einrichten Ihrer MIDI-Clock berücksichtigen, wie QLC+ damit umgeht.


**Hinweis**: Wenn Ihr Controller auf hohe BPM (z. B. 180-200) eingestellt ist, fällt es Ihnen möglicherweise schwer, das Startsignal zu empfangen. Ein Trick hierfür besteht darin, das Stoppsignal abzufangen. Beispiel:  

1. Aktivieren Sie die automatische Erkennung des QLC+ Virtual Console-Widgets
2. Drücken Sie auf Ihrem Gerät die Wiedergabetaste, um die MIDI-Beat-Clock zu erzeugen. QLC+ erkennt Kanal 530 und schaltet sehr schnell auf 531 um
3. Stoppen Sie die Wiedergabe auf Ihrem MIDI-Beat-Clock-Gerät. QLC+ erkennt erneut Kanal 530.
4. Deaktivieren Sie die automatische Erkennung des QLC+ Virtual Console-Widgets

Auf ähnliche Weise können Sie auch das Beat-Signal erfassen. Deaktivieren Sie einfach den automatischen Erkennungsprozess, bevor Sie die Wiedergabe auf Ihrem Beat-Controller stoppen (invertieren Sie die Schritte 3 und 4).

MIDI-Initialisierungsnachricht
-------------

Es kann vorkommen, dass Ihr MIDI-Gerät einige Befehle benötigt, um in einen bestimmten Betriebsmodus zu wechseln.  
Das MIDI-Protokoll kann dies über SysEx bewältigen. Hierbei handelt es sich um bestimmte Nachrichten, die einem MIDI-Gerät Anweisungen zum Verhalten geben.  
QLC+ kann dazu eine XML-Vorlage verwenden, die im MIDI-Konfigurationspanel ausgewählt werden kann.  
Hier ist ein Beispiel dafür, wie eine Vorlage aussieht:  

&lt;!DOCTYPE MidiTemplate&gt;
&lt;MidiTemplate&gt;
 &lt;Creator&gt;
  &lt;Author&gt;Your name&lt;/Author&gt;
 &lt;/Creator&gt;
 &lt;Description&gt;A brief description of what the template does.&lt;/Description&gt;
 &lt;Name&gt;Template name to be displayed by QLC+&lt;/Name&gt;
 &lt;InitMessage&gt;F0 47 00 7B 60 00 04 41 09 00 05 F7&lt;/InitMessage&gt;
&lt;/MidiTemplate&gt;

Sie können die benötigten Vorlagen erstellen und in Ihrem MidiTemplates-Ordner ablegen.  
Sie können diese gerne im QLC+-Forum einreichen.

Kanalzuordnung
-----------------

Um eine Mischung aus verschiedenen MIDI-Nachrichten (Notes, PC, CC usw.) zu verarbeiten, ordnet QLC+ diese in eine sequentielle Reihenfolge um.  
Nachfolgend die Kanalnummern, die im [Eingabeprofil-Editor](/input-output/input-profiles) verwendet werden sollen:

| Kanal | MIDI-Nachricht |
| --- | --- |
| 1 | Kontrollwechsel 1 |
| ... | ... |
| 128 | Kontrollwechsel 128 |
| 129 | NOTE ON/NOTE OFF 1 |
| ... | ... |
| 256 | NOTE ON/NOTE OFF 128 |
| 257 | HINWEIS AFTERTOUCH 1 |
| ... | ... |
| 384 | HINWEIS AFTERTOUCH 128 |
| 385 | Programmänderung 1 |
| ... | ... |
| 512 | Programmänderung 128 |
| 513 | Kanal-Aftertouch |
| 514 | Pitchrad |
| 530 | MIDI Beat Clock: Start/Weiter |
| 531 | MIDI-Beat-Clock: Beat |
| 532 | MIDI-Beat-Clock: Stopp |

Fügen Sie im OMNI-Modus 4096 * Kanalnummer hinzu