---
title: 'Glossar und Konzepte'
date: '07:32 21-08-2023'
---

Q Light Controller Plus (QLC+) soll Beleuchtungsgeräte steuern, die bei verschiedenen Aufführungen wie Live-Konzerten und Theatern usw. verwendet werden. Die Hauptabsicht besteht darin, dass QLC+ in der Lage sein wird, herkömmliche Lichtpulte zu ersetzen, ohne dass ein mehr als 500-seitiges Handbuch erforderlich ist durch den Einsatz einer intuitiven und flexiblen Benutzeroberfläche.

Diese Seite wurde in alphabetischer Reihenfolge geordnet, um die Suche nach einem bestimmten Thema zu erleichtern.

### ![](../audio.png) Audio

Eine Audio [Funktion](#functions) ist ein Objekt, das eine auf einer Festplatte gespeicherte Audiodatei darstellt.  
QLC+ unterstützt die gängigsten Audioformate wie Wave, MP3, M4A, Ogg und Flac. Es unterstützt Mono- oder Stereokanäle und verschiedene Abtastraten wie 44,1 kHz, 48 kHz usw.  
Audiofunktionen können mithilfe des Bedienfelds [Show Manager] (/show-manager) zum gewünschten Zeitpunkt im [Chaser] (#chaser) oder in einer [Show] (#show) platziert werden.  
Wie die meisten QLC+ Funktionen unterstützt Audio Ein- und Ausblendzeiten.

### ![](../blackout.png) Blackout

Der Blackout ist eine spezielle QLC+ Funktion, mit der alle [HTP](#htp-highest-takes-precedence)-Kanäle in allen Universen auf Null gesetzt werden. Dadurch wird die Lichtquelle aller Leuchtmittel geschlossen. Die Kanäle bleiben auf Null, unabhängig von aktuell ausgeführten Funktionen oder manuell zugewiesenen Werten (z. B. über den [Simple Desk](/simple-desk)). Wenn der Blackout ausgeschaltet wird, werden alle Kanäle wieder durch Funktionen oder ihren manuell eingestellten Wert gesteuert.

### Fähigkeiten und Eigenschaften

Einige Kanäle in intelligenten Geräten bieten viele Arten von Funktionen oder Fähigkeiten, wie das Einschalten der Lampe, wenn der Kanalwert \[240-255\] beträgt. Das Einstellen einer roten Farbe mit einem Farbrad wenn der Wert genau \[15\] ist, oder einfach die Dimmerintensität des Geräts mit den Werten \[0-255\] steuern. Jede dieser einzelnen Funktionen wird als Fähigkeit bezeichnet und jede von ihnen hat diese drei Eigenschaften:

* Mindestwert: Der minimale Kanalwert, der eine Funktion bereitstellt.
* Maximalwert: Der maximale Kanalwert, der eine Funktion bereitstellt.
* Name: Der Anzeigename einer Funktion.

### Kanalgruppen

Kanalgruppen können im Bereich [Fixture Manager] (/Fixture-Manager) mithilfe des [Channel Groups Editor] (/Fixture-Manager/Channel-Groups-Editor) hinzugefügt und definiert werden.  
Kanalgruppen können einen benutzerdefinierten Namen haben und alle benutzerdefinierten Kanäle gruppieren, die aus einer vorhandenen Geräteliste ausgewählt werden.

### ![](../chaser.png) Chaser

Ein Chaser [Funktion](#functions) besteht aus mehreren Szenen, die nacheinander ausgeführt wird, wenn die Chaserfunktion gestartet wird. Die nächste Funktion wird erst ausgeführt, nachdem die vorherige beendet wurde. In einen Chaser können beliebig viele [Funktionen](#Funktionen) eingefügt werden.

Die Richtung der Chaser-Funktion kann umgekehrt oder die Szenenauswahl zufällig erfolgen. Die Chaserfunktion kann auch so eingestellt werden, dass sie eine Endlosschleife durchführt oder eine unendliche Ping-Pong-Schleife (die Richtung wird nach jedem Durchgang umgekehrt) oder sie kann nur einmal im Single-Shot-Modus durchlaufen und danach von selbst beendet werden. Wenn die Funktion auf eine Endlosschleife eingestellt ist, muss sie manuell gestoppt werden.

Jeder Chaser hat seine eigenen Geschwindigkeitseinstellungen:

* **Einblenden:** Die Einblendgeschwindigkeit eines Schritts
* **Halten:** Die Haltezeit eines Schritts
* **Ausblenden:** Die Ausblendgeschwindigkeit eines Schritts
* **Dauer:** Die Dauer eines Schritts

Kopien von Chaserfunktionen können mit dem [Funktionsmanager](/function-manager) erstellt werden. Die Szenen innerhalb eines Chasers werden beim Kopieren eines Chasers nicht dupliziert. Lediglich die Reihenfolge und die Richtung werden in die neue übernommen.

### Click And Go

Click And Go ist eine Technologie, die es dem Benutzer ermöglicht auf vollständig visuelle Weise und mit nur wenigen Klicks schnell auf Makros und Farben zuzugreifen. Dies kann zu effizienteren Live-Shows und mehr Freiheit bei der Auswahl des gewünschten Ergebnisses führen.  
Bisher sind drei Arten von Widgets verfügbar:

* Einzelne Farbe (gilt für die Intensitätskanäle Rot, Grün, Blau, Cyan, Gelb, Magenta, Amber und Weiß)
* RGB-Farbwähler Steuert die Werte für ausgewählte RGB-Kanäle mit einem einzigen Klick
* Gobo-/Makroauswahl Greifen Sie auf ein in der Fixture-Definition definiertes Gobo/Makro zu und zeigen Sie es an

Eine Übersicht mit Screenshots finden Sie [hier](https://qlcplus.org/old/clickandgo.html)

### ![](../collection.png) Kollektionen

Eine Sammlung [Funktion](#Funktionen) kapselt mehrere Funktionen, die gleichzeitig ausgeführt werden, wenn die Sammlungsfunktion ausgeführt wird. In eine Sammlung können beliebig viele Funktionen eingefügt werden, aber jede Funktion kann nur einmal eingefügt werden und eine Sammlung kann kein direktes Mitglied von sich selbst sein.

Für Sammlungen gibt es keine Geschwindigkeitseinstellungen. Die Geschwindigkeit jeder Mitgliedsfunktion wird individuell mit ihren eigenen Editoren eingestellt.

Kopien von Sammlungsfunktionen können mit dem [Funktionsmanager](/function-manager) erstellt werden. Die in einer Sammlung enthaltenen Funktionen werden nicht dupliziert. Es wird nur die Liste der Funktionen kopiert.

### DMX

[DMX](https://en.wikipedia.org/wiki/DMX512) ist die Abkürzung für Digital MultipleX. Es definiert im Wesentlichen eine ganze Reihe von Eigenschaften, Protokollen, Verkabelungen usw. Im Fall von Beleuchtungssoftware definiert es die maximale Anzahl von Kanälen (512 Kanäle) pro Universum und den Wertebereich jedes Kanals (0-255).

QLC+ unterstützt unbegrenzte Universen (es gibt zunächst 4, aber bei Bedarf können weitere hinzugefügt werden). Sie müssen nicht unbedingt an DMX-Hardware angeschlossen werden. Die eigentliche Hardware-Abstraktion (ob analog 0-10 V, DMX oder eine andere Methode) wird durch [Ausgabe-Plugins](#outputplugins) erreicht.

### ![](../efx.png) EFX

Eine EFX-[Funktion](#functions) wird hauptsächlich zur Automatisierung beweglicher Lichter (z. B. Scanner und Moving Heads) verwendet, kann jedoch auch RGB- oder Dimmerwerte von sich nicht bewegenden Lichtern automatisieren. Der EFX kann komplexe mathematische Pfade auf einer X-Y-Ebene erstellen, die in DMX-Werte für die Schwenk- und Neigungs- oder RGB- oder Dimmerkanäle des Geräts umgewandelt werden.

### ![](../fixture.png) Fixtures

Ein Fixture ist im Wesentlichen ein Beleuchtungsgerät. Es kann sich zum Beispiel um einen Moving Head, einen Scanner, einen Laser usw. handeln. Der Einfachheit halber können jedoch einzelne PAR-Kannen (und dergleichen), die normalerweise über einen Dimmerkanal pro Kanne gesteuert werden, zu einer Gruppe zusammengefasst werden.

Mit dem Fixture Definition Editor können Benutzer gemeinsam genutzte Fixture-Informationen bearbeiten, die in einer Fixture-Bibliothek gespeichert sind, die die folgenden Eigenschaften für jede Fixture enthält:

* Hersteller (z. B. ClayPaky)
* Modell (z. B. MAC250)
* Typ (Farbwechsler, Scanner, Moving Head, Smoke, Haze, Fan...)
* Physikalische Eigenschaften (Lampentyp, Abstrahlwinkel, Abmessungen...)
* Kanäle:
    * Kanalgruppe (Intensität, Pan, Tilt, Gobo, Farbe, Geschwindigkeit usw.)
    * 8-Bit- und 16-Bit-Kanalbindungen für Schwenk- und Neigungsgruppen
    * Optionale Primärfarbe für Intensitätskanäle (RGB/CMY)
    * Wertebereiche für Kanalfunktionen (z. B. 0-5: Lampe an, 6-15: Strobe usw.)

Diese Gerätedefinitionen können dann verwendet werden, um tatsächliche Geräte in der QLC+ Anwendung zu erstellen, die über zusätzliche vom Benutzer definierte Eigenschaften verfügen:

* DMX-Universen
* DMX-Adressen
*   Namen

Es können mehrere Instanzen eines Geräts erstellt werden (z. B. müssen Benutzer mehrere Instanzen eines MAC250 verwenden können). Jedes Gerät kann benannt werden, der Name wird jedoch intern von QLC+ nicht zur Identifizierung einzelner Geräteinstanzen verwendet. Das Gleiche gilt für die DMX-Adressen. Dennoch wird den Benutzern empfohlen, ihre Geräte systematisch zu benennen, um sie bei Bedarf leichter identifizieren zu können.

Generische Dimmergeräte benötigen keine eigenen Gerätedefinitionen, da normalerweise mehrere Dimmer in einen gemeinsamen Adressraum gepatcht werden und dabei ein oder mehrere Dimmer-Racks verwenden. Benutzer können Instanzen dieser generischen Dimmereinheiten erstellen, indem sie einfach die Anzahl der Kanäle definieren, die jeder von ihnen haben soll.

### ![](../group.png) Fixture Gruppierung

Eine Gerätegruppe ist, wie der Name schon sagt, eine Gruppe von [Geräten](#Geräte). Sie definieren auch (auf einer eher grundlegenden Ebene) die tatsächliche physische Anordnung dieser Geräte in der realen Welt. Dieses Wissen kann beispielsweise in der RGB-Matrix genutzt werden, um eine Wand aus RGB-mischbaren Lichtern zu erzeugen, die als einzelne Pixel in einem grafischen Muster oder Lauftext fungieren können.

### Fixture Mode

Viele Hersteller entwerfen ihre Lichteffekte so, dass sie so konfiguriert werden können, dass sie verschiedene Kanalsätze verstehen. Beispielsweise könnte ein Scanner zwei Konfigurationsoptionen haben: eine für nur 8-Bit-Bewegungskanäle (1x Schwenken, 1x Neigen) und eine andere für 16-Bit-Bewegungskanäle (2x Schwenken, 2x Neigen). Anstatt für jede Variation eine komplett neue Fixture-Definition zu erstellen, wurden sie in den Fixture-Definitionen von QLC+ in Fixture-Modi gebündelt.

### ![](../function.png) Funktionen

Die Anzahl der Funktionen ist faktisch unbegrenzt. Funktionen werden verwendet, um die Einstellung von Werten für DMX-Kanäle zu automatisieren. Jeder Funktionstyp hat seine eigene Art, Lichter zu automatisieren.

Die Funktionstypen sind:

*   [Scene](#scene)
*   [Chaser](#chaser)
*   [Sequence](#sequence)
*   [EFX](#efx)
*   [RGB Matrix](#rgbmatrix)
*   [Collection](#collection)
*   [Show](#show)
*   [Audio](#audio)
*   [Video](#video)

Jede Funktion kann benannt werden, und obwohl der Name nicht zur eindeutigen Identifizierung einzelner Funktionen verwendet wird, werden Benutzer aufgefordert, ihre Funktionen auf systematische und prägnante Weise zu benennen, um die Identifizierung jeder einzelnen Funktion zu erleichtern. Für Ihren eigenen Komfort.
Ab Version 3.3.0 verfügt jede Funktion über eigene Geschwindigkeitseinstellungen:

*   **Fade In:** Die Zeit, die benötigt wird, um HTP-Kanäle (in Szenen auch LTP-Kanäle) auf ihren Zielwert zu blenden
*   **Fade Out:** Die Zeit, die zum Zurückblenden von HTP/Intensitätskanälen auf Null benötigt wird
*   **Duration:** Die Dauer des aktuellen Schritts (gilt nicht für Szenen)

### Masterregler

Der Masterregler wird als letzter Master Schieberegler verwendet. Normalerweise wirkt sich der Masterregler nur auf **Intensitätskanäle** aus. Dieser wird benutzt um die Werte **aller** Kanäle zu beeinflussen.
Der Masterregler verfügt außerdem über zwei **Wertmodi**, die steuern wie der Masterregler die Kanalwerte beeinflusst:

* Reduzieren: Die Werte der betroffenen Kanäle werden um einen Prozentsatz reduziert, die mit dem Masterregler eingestellt wird. Wenn der Masterregler beispielsweise auf 50 % eingestellt ist, werden alle betroffenen Kanäle auf 50 % ihrer **aktuellen** Werte reduziert.
* Limit: Betroffene Kanäle können keine größeren Werte als den mit dem Masterregler eingestellten Wert erhalten. Wenn Sie beispielsweise „Masterregler“ auf 127 setzen, werden die Maximalwerte aller betroffenen Kanäle auf genau 127 begrenzt.

### Head

Ein Head stellt ein einzelnes Lichteffekt dar. Normalerweise enthält eine einzelne Leuchte genau einen Ausgang, z. B. die Linse, die Glühbirne oder einen Satz LEDs. Es gibt jedoch immer mehr Leuchten auf dem Markt, die zwar als einzelne Leuchte betitelt werden, aber über mehrere Lichtaustrittspunkte, d. h. Heads, verfügen.

Beispielsweise könnten Sie über eine RGB-LED-Leuchte verfügen, die auf einem einzelnen Körper montiert ist und als solche wie eine einzelne Leuchte mit einem DMX-Eingang und einem DMX-Ausgang erscheint. Tatsächlich besteht es jedoch aus vier separaten RGB-LED-Leuchtmitteln. Diese separaten Geräte werden in QLC+ als Köpfe behandelt;
Sie haben einige Eigenschaften mit ihren Geschwisterköpfen gemeinsam, sie können einzeln gesteuert werden, verfügen aber möglicherweise auch über eine Master-Intensitätssteuerung, die die Lichtleistung aller Heads zusammen steuert.

Jeder Head gehört zu einem [Gerätemodus] (#Gerätemodus), da ein Gerät in einem Modus möglicherweise genügend Kanäle zur Verfügung stellt, um jeden seiner Heads einzeln zu steuern, während in einem anderen Modus möglicherweise nur eine Handvoll Kanäle zur Steuerung aller Köpfe bereitgestellt werden Heads gleichzeitig.

### HTP (Highest Takes Precedence)

HTP ist eine Regel, die entscheidet an welche Ebene ein Kanal an ein DMX-Universum gesendet wird wenn der Kanal von mehr als einer [Funktion](#Funktionen) oder einem virtuellen Konsolen-Widget gesteuert wird. Im Allgemeinen hören Intensitätskanäle der HTP-Regel. Dazu gehören generische Intensitätskanäle, die zur Steuerung der Lichtintensität mit Dimmern verwendet werden, sowie Kanäle zur Steuerung der Intensität einer Farbe, typischerweise in einer LED-Leuchte.

Die HTP-Regel ist einfach: Der höchste Pegel (näher 100 %) der derzeit an einen Kanal gesendet wird, wird an das DMX-Universum gesendet.

Nehmen wir an, Sie haben zwei Schieberegler die denselben Intensitätskanal steuern. Zuerst stellen Sie den Schieberegler 1 auf 50 % ein und bewegen dann Schieberegler 2 von 0 % auf 75 %. Solange der Schieberegler 2 unter 50 % liegt passiert nichts, aber nach Überschreiten der mit Schieberegler 1 eingestellten 50 %-Marke steigt die Lichtintensität auf bis zu 75 %.
Wenn Sie den Schieberegler 2 erneut in Richtung 0 % ziehen, verringert sich die Lichtintensität bis sie die mit Schieberegler 1 eingestellten 50 % erreicht, und bleibt bei 50 %, bis Schieberegler 1 nach unten gezogen wird.

Eine Überblendung zwischen zwei [Szenen] (#scene) ersetzt die HTP-Pegel in der ersten Szene durch die HTP-Pegel der zweiten. Die neuen HTP-Ebenen werden wie oben mit HTP-Ebenen anderer Funktionen und virtuellen Konsolen-Widgets kombiniert. Siehe auch [LTP](#ltp).

### ![](../input_output.png) Eingänge/Ausgänge plugins

QLC+ unterstützt eine Vielzahl von Plugins zum Senden und Empfangen von Daten von/an die DMX Universen und Art-Net Controller.  
Ein Plugin kann eine Schnittstelle zu physischen Geräten (z. B. DMX-Adaptern oder MIDI-Controllern) oder zu einem Netzwerkprotokoll (z. B. [ArtNet](/plugins/art-net), [OSC](/plugins/osc) oder [E1 .31](/plugins/e1-31-sacn)).  
Plugins unterstützen Eingabe-, Ausgabe- oder Feedbackfunktionen abhängig vom Gerät oder Protokoll das sie steuern.  

Die primären Eingabemethoden für QLC+ sind natürlich die Tastatur und Maus. Benutzer können Tastaturtasten virtuellen Konsolentasten zuweisen, Schieberegler ziehen und so ziemlich alles mit einer Maus und Tastatur erledigen.

Allerdings ist es mit Plugins möglich zusätzliche Eingabegeräte an den Computer anzuschließen, um das eher umständliche und langsame Benutzererlebnis zu optimieren. Plugins die eine Eingabezeile unterstützen, bieten die Möglichkeit externe Geräte dazu zu bringen, Eingabedaten für verschiedene QLC+-Elemente zu erzeugen.

Eine input line ist eine von einer Hardware oder einem Netzwerk bereitgestellte Verbindung, auf die über ein Eingabe-Plugin zugegriffen wird. Dabei kann es sich beispielsweise um einen MIDI-IN-Anschluss im Computer (oder Peripheriegerät) des Benutzers handeln, an den Benutzer MIDI-fähige Eingabegeräte wie Slider-Boards usw. anschließen können.

Eine output line ist eine von einer Hardware oder einem Netzwerk bereitgestellte Verbindung, auf die über ein Ausgabe-Plugin zugegriffen wird. Mit anderen Worten handelt es sich um ein echtes DMX-Universum, das jedoch als output bezeichnet wurde, um es von den internen Universen von QLC+ zu trennen. Sie können sie sich als einzelne XLR-Ausgangsanschlüsse in Ihrer DMX-Hardware vorstellen.

### Eingangsprofile

Eingabeprofile können als eine Art ​​von [Fixtures'](#Fixtures) betrachtet werden. Sie enthalten Informationen zu bestimmten Geräten, die Eingabedaten erzeugen. Ein Eingabegerät kann zum Beispiel ein Slider-Board wie das Behringer BCF-2000, KORG nanoKONTROL, ein Enttec Playback Wing usw. sein.

### LTP (Latest Takes Precedence)

LTP ist eine Regel die entscheidet, an welche Ebene ein Kanal an ein DMX-Universum gesendet wird wenn der Kanal von mehr als einer [Funktion](#Funktionen) oder einem virtuellen Konsolen-Widget gesteuert wird. Im Allgemeinen wird es für Kanäle verwendet, die anderen Gruppen als der **Intensität**-Gruppe zugewiesen wurden, wie z. B. Schwenken, Neigen, Gobo, Strobe-Geschwindigkeit und andere intelligente Geräteparameter.

Die LTP-Regel ist einfach: Die neueste Ebene, die von einer Funktion oder einem Widget einer virtuellen Konsole festgelegt wurde, wird an das DMX-Universum gesendet.

Während einer Überblendung zwischen [Szenen](#scene) werden die LTP-Pegel häufig geändert. Dies muss mit einiger Vorsicht gehandhabt werden, da einige LTP-Ebenen sofort auf eine neue Ebene springen müssen, beispielsweise beim Wechsel von einem Gobo zu einem anderen. LTP-Gruppen wie Schwenken und Neigen müssen jedoch möglicherweise während einer Überblendung schrittweise von einer Ebene zur anderen wechseln. Durch die Kombination von Szenen in einer [Collection](#collection) können unterschiedliche Timings erreicht werden. Siehe auch [HTP](#htp).

### ![](../operate.png) Modi

Q Light Controller Plus basiert auf dem gemeinsamen Konzept welches zwei unterschiedliche Betriebsmodi hat, um versehentliche und möglicherweise schädliche Änderungen während des Betriebs zu verhindern:

* Der Entwurfsmodus dient dazu, das Verhalten des Programms zu bearbeiten. Erstellen und bearbeiten Sie [Funktionen](#functions) und [Fixtures](#fixtures) und passen Sie deren Funktionsweise an.
* Der Betriebsmodus dient dazu, die erstellten Funktionen auszuführen, die schließlich die Beleuchtungskörper des Benutzers steuern.

### ![](../rgbmatrix.png) RGB Matrix

Eine RGB-Matrix-[Funktion](#Funktionen) kann verwendet werden, um einfache Grafiken und Text auf eine Matrix (ein Gitter oder eine Wand) aus RGB- und/oder monochromen Heads-[Köpfen](#Kopf) zu gestalten. Die RGB-Matrixfunktion wurde so konzipiert, dass sie mit den [Skripten](#rgbscript) erweiterbar ist, die von Benutzern geschrieben werden können.

Jede RGB-Matrix hat ihre eigenen Geschwindigkeitseinstellungen:

* **Einblenden:** Zeit zum Einblenden jedes Pixels
* **Ausblenden:** Zeit zum Ausblenden jedes Pixels
* **Dauer:** Die Dauer des aktuellen Schritts/Frames

### ![](../rgbmatrix.png) RGB Skript

Ein RGB-Skript ist ein in [ECMAScript](https://en.wikipedia.org/wiki/ECMAScript) (auch als JavaScript bekannt) geschriebenes Programm, das die notwendigen Bilddaten für [RGB-Matrix](#rgb-matrix)-Funktionen erzeugt . Weitere Informationen finden Sie auf der Seite [RGB-Skript-API](/function-manager/rgb-script-api).

### ![](../scene.png) Szenen

Eine Szene [funktion](#functions) umfasst die Werte ausgewählter Kanäle, die in einer oder mehreren Fixture-Instanzen enthalten sind. Wenn eine Szene gestartet wird, hängt die Zeit die ihre Kanäle benötigen um ihre Zielwerte zu erreichen, von den Geschwindigkeitseinstellungen der Szene ab:

Jede Funktion hat ihre eigenen Geschwindigkeitseinstellungen:

* **Einblenden:** Die Zeit, die zum Einblenden aller Kanäle auf ihre Zielwerte benötigt wird, unabhängig davon welchen Wert sie hatten
* **Ausblenden:** Die Zeit, die zum Zurückblenden der HTP-/Intensitätskanäle auf Null benötigt wird. Beachten Sie, dass NUR [HTP](#htp)-Kanäle von dieser Einstellung betroffen sind.

Kopien von Szenenfunktionen können mit dem [Funktionsmanager](/function-manager) erstellt werden. Der gesamte Inhalt der Szene wird in das Duplikat kopiert.

### ![](../sequence.png) Sequenze

Eine Sequenz verfügt über einige der Funktionen eines [Chasers](#chaser).  
Es entspricht einem Chaser, bei dem jeder Schritt eine einzelne [Szene] (#scene) ist und jede dieser Szenen denselben Kanalsatz steuert. Eine Sequenz ist an eine bestimmte Szene gebunden, was bedeutet dass alle Schritte der Sequenz nur die aktivierten Kanäle dieser Szene steuern können.  
Beim Erstellen neuer Schritte in einer Sequenz wird kein Popup zur Funktionsauswahl angezeigt, da ein Sequenzschritt im Gegensatz zu einem Chaser-Schritt keine anderen Funktionen enthalten kann.  
Wenn eine Sequenz erstellt wird, erscheint im [Funktionsmanager] (/function-manager) ein spezielles Sequenzsymbol als untergeordnetes Element der Szene, an die es gebunden ist.  
Um den Unterschied zwischen einer Sequenz und einem Chaser zu verstehen, lesen Sie bitte den zweiten Absatz der Dokumentation zum [Show Manager] (/show-manager).


### ![](../script.png) Skript

Das Skript [function](#functions) basiert auf einer einfachen aber leistungsstarken Skriptsprache um QLC+-Funktionen in sequentieller Reihenfolge zu automatisieren. Ein Skript kann mit dem [Skript-Editor](/function-manager/script-editor) geändert werden.

### ![](../show.png) Show

Eine Show ist eine erweiterte [Funktion](#Funktionen), die die meisten QLC+-Funktionen kapselt um eine zeitgesteuerte Lichtshow zu erstellen. Eine Show kann nur mit dem [Show Manager] (/show-manager) erstellt und mit dem [Show Editor] (/function-manager/show-editor) überprüft und umbenannt werden.

### ![](../video.png) Video

Eine Video[funktion](#functions) ist ein Objekt, das eine auf einer Festplatte oder einer Netzwerk-URL gespeicherte Videodatei darstellt.  
Die unterstützten Videoformate hängen von Ihrem Betriebssystem ab. Beispielsweise ist Mac OSX auf MOV/MP4-Dateien beschränkt und nicht viel mehr.  
Videofunktionen können mithilfe des Bedienfelds [Show Manager] (/show-manager) zum gewünschten Zeitpunkt in [Chaser] (#chaser) oder in einer [Show] (#show) platziert werden.

