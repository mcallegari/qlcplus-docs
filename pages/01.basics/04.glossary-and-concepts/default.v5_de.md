---
title: 'Glossar und Konzepte'
date: '07:32 21-08-2023'
---

Q Light Controller Plus (kurz QLC+) soll Beleuchtungsgeräte steuern, die bei verschiedenen Aufführungen wie Live-Konzerten und Theatern usw. verwendet werden. Die Hauptabsicht besteht darin, dass QLC+ in der Lage sein wird, herkömmliche Lichtpulte zu übertreffen, ohne dass ein mehr als 500-seitiges Handbuch erforderlich ist, dank einer intuitiven und flexiblen Benutzeroberfläche.

Diese Seite wurde in alphabetischer Reihenfolge geordnet, um die Suche nach einem bestimmten Thema zu erleichtern.

### ![](../audio.svg) Audio

Eine Audio-[Funktion](#funktionen) ist ein Objekt, das eine auf einer Festplatte gespeicherte Audiodatei darstellt.  
QLC+ unterstützt die gängigsten Audioformate wie Wave, MP3, M4A, Ogg und Flac. Es unterstützt Mono- oder Stereokanäle und verschiedene Abtastraten wie 44,1 kHz, 48 kHz usw.  
Audiofunktionen können mithilfe des Bedienfelds [Show Manager](/show-manager) zum gewünschten Zeitpunkt im [Chaser](#chaser) oder in einer [Show](#show) platziert werden.  
Wie die meisten QLC+-Funktionen unterstützt Audio Ein- und Ausblendzeiten.

### ![](../blackout.svg) Blackout

Blackout ist eine spezielle QLC+-Funktion, mit der alle [HTP](#htp-highest-takes-precedence)-Kanäle in allen Universen auf Null gesetzt werden. Dies führt dazu, dass die Lichtausgabe aller Fixtures gestoppt wird. Die Kanäle bleiben auf Null, unabhängig von aktuell ausgeführten Funktionen oder manuell zugewiesenen Werten (z. B. über den [Simple Desk](/simple-desk)). Wenn der Blackout ausgeschaltet wird, werden alle Kanäle wieder durch Funktionen oder ihren manuell eingestellten Wert gesteuert.

### Capabilities

Einige Kanäle in intelligenten Fixtures bieten viele Arten von Funktionen, oder _Capabilities_, wie das Einschalten der Lampe, wenn der Kanalwert \[240-255\] beträgt, das Einstellen einer roten Farbe auf einem Farbrad, wenn der Wert genau \[15\] ist, oder einfach die Steuerung der Dimmerintensität des Fixtures mit Werten \[0-255\]. Jede dieser einzelnen Funktionen wird als Capability bezeichnet, und jede von ihnen hat diese drei Eigenschaften:

*   Minimalwert: Der minimale Kanalwert, der eine Capability bereitstellt.
*   Maximalwert: Der maximale Kanalwert, der eine Capability bereitstellt.
*   Name: Der Anzeigename einer Capability
*   Preset: Eine vordefinierte Funktionalität, die es QLC+ ermöglicht, genau zu erkennen, wie ein Kanalwert zu behandeln und zu simulieren ist

### ![](../chaser.svg) Chaser

Eine Chaser-[Funktion](#funktionen) besteht aus mehreren Szenen, die nacheinander ausgeführt werden, wenn die Chaser-Funktion gestartet wird. Die nächste Funktion wird erst ausgeführt, nachdem die vorherige beendet wurde. In einen Chaser können beliebig viele [Funktionen](#funktionen) eingefügt werden.

Die Richtung der Chaser-Funktion kann umgekehrt oder die Szenenauswahl zufällig erfolgen. Die Chaser-Funktion kann auch so eingestellt werden, dass sie eine Endlosschleife durchführt, eine unendliche Ping-Pong-Schleife (die Richtung wird nach jedem Durchlauf umgekehrt), oder sie kann nur einmal im Single-Shot-Modus durchlaufen und sich danach von selbst beenden. Wenn die Funktion auf eine Endlosschleife eingestellt ist, muss sie manuell gestoppt werden.

Jeder Chaser hat seine eigenen Geschwindigkeitseinstellungen:

*   **Fade In:** Die Einblendgeschwindigkeit eines Schritts
*   **Hold:** Die Haltezeit eines Schritts
*   **Fade Out:** Die Ausblendgeschwindigkeit eines Schritts
*   **Duration:** Die Dauer eines Schritts

Kopien von Chaser-Funktionen können mit dem [Function Manager](/function-manager) erstellt werden. Die Szenen innerhalb eines Chasers werden beim Kopieren eines Chasers nicht dupliziert. Lediglich die Reihenfolge und die Richtung werden in den neuen Chaser übernommen.

### Click And Go

Click And Go ist eine Technologie, die es dem Benutzer ermöglicht, auf vollständig visuelle Weise und mit nur wenigen Klicks schnell auf Makros und Farben zuzugreifen. Dies kann zu effizienteren Live-Shows und mehr Freiheit bei der einfachen Auswahl des gewünschten Ergebnisses führen.  
Bisher sind drei Arten von Widgets verfügbar:

*   Einzelfarbe (gilt für die Intensitätskanäle Rot, Grün, Blau, Cyan, Gelb, Magenta, Amber und Weiß)
*   RGB-Farbwähler. Steuert die Werte für ausgewählte RGB-Kanäle mit einem einzigen Klick
*   Gobo-/Makroauswahl. Zugriff auf und Anzeige eines in der Fixture-Definition definierten Gobos/Makros

Eine Übersicht mit Screenshots finden Sie [hier](https://www.qlcplus.org/old/clickandgo.html)

### ![](../collection.svg) Collection

Eine Collection-[Funktion](#funktionen) kapselt mehrere Funktionen, die gleichzeitig ausgeführt werden, wenn die Collection-Funktion ausgeführt wird. In eine Collection können beliebig viele Funktionen eingefügt werden, aber jede Funktion kann nur einmal eingefügt werden, und eine Collection kann kein direktes Mitglied von sich selbst sein.

Für Collections gibt es keine Geschwindigkeitseinstellungen. Die Geschwindigkeit jeder Mitgliedsfunktion wird individuell mit ihren eigenen Editoren eingestellt.

Kopien von Collection-Funktionen können mit dem [Function Manager](/function-manager) erstellt werden. Die in einer Collection enthaltenen Funktionen werden nicht dupliziert; es wird nur die Liste der Funktionen kopiert.

### DMX

[DMX](https://de.wikipedia.org/wiki/DMX_(Lichttechnik)) ist die Abkürzung für Digital MultipleX. Es definiert im Wesentlichen eine ganze Reihe von Eigenschaften, Protokollen, Verkabelungen usw. Im Fall von Beleuchtungssoftware definiert es die maximale Anzahl von Kanälen (512) pro Universum und den Wertebereich jedes Kanals (0-255).

QLC+ unterstützt unbegrenzte Universen (es gibt anfangs 4, aber bei Bedarf können weitere hinzugefügt werden). Sie müssen nicht zwangsläufig an DMX-Hardware angeschlossen werden. Die eigentliche Hardware-Abstraktion (ob analog 0-10 V, DMX oder eine andere Methode) wird durch [Ausgabe-Plugins](#eingabe-ausgabe-plugins) erreicht.

### ![](../efx.svg) EFX

Eine EFX-[Funktion](#funktionen) wird hauptsächlich zur Automatisierung beweglicher Lichter (z. B. Scanner und Moving Heads) verwendet, kann jedoch auch RGB- oder Dimmerwerte von nicht beweglichen Lichtern automatisieren. Der EFX kann komplexe mathematische Pfade auf einer X-Y-Ebene erstellen, die in DMX-Werte für die Pan- und Tilt-Kanäle oder RGB- oder Dimmerkanäle des Fixtures umgewandelt werden.

### ![](../fixture.svg) Fixtures

Ein Fixture ist im Wesentlichen ein Beleuchtungsgerät. Es kann sich zum Beispiel um einen Moving Head, einen Scanner, einen Laser usw. handeln. Der Einfachheit halber können jedoch einzelne PAR-Kannen (und dergleichen), die normalerweise über einen Dimmerkanal pro Kanne gesteuert werden, zu einer Gruppe zusammengefasst werden, um ein einziges Fixture zu bilden.

Mit dem Fixture Definition Editor können Benutzer gemeinsam genutzte Fixture-Informationen bearbeiten, die in einer Fixture-Bibliothek gespeichert sind, die die folgenden Eigenschaften für jedes Fixture enthält:

*   Hersteller (z. B. ClayPaky)
*   Modell (z. B. MAC250)
*   Typ (Color Changer, Scanner, Moving Head, Smoke, Haze, Fan...)
*   Physikalische Eigenschaften (Lampentyp, Abstrahlwinkel, Abmessungen...)
*   Kanäle:
    *   Kanalgruppe (Intensity, Pan, Tilt, Gobo, Color, Speed usw.)
    *   8-Bit- und 16-Bit-Kanalbindungen für Pan- und Tilt-Gruppen
    *   Optionale Primärfarbe für Intensitätskanäle (RGB/CMY)
    *   Wertebereiche für Kanalfunktionen (z. B. 0-5: Lampe an, 6-15: Strobe usw.)

Diese Fixture-Definitionen können dann verwendet werden, um tatsächliche Fixtures in der Q Light Controller Plus-Anwendung zu erstellen, die über zusätzliche, vom Benutzer definierte Eigenschaften verfügen:

*   DMX-Universum
*   DMX-Adresse
*   Name

Es können mehrere Instanzen eines Fixtures erstellt werden (z. B. müssen Benutzer mehrere Instanzen eines MAC250 verwenden können). Jedes Fixture kann benannt werden, der Name wird jedoch intern von QLC+ nicht zur Identifizierung einzelner Fixture-Instanzen verwendet. Das Gleiche gilt für die DMX-Adresse. Dennoch wird den Benutzern empfohlen, ihre Fixtures systematisch zu benennen, um sie bei Bedarf leichter identifizieren zu können.

Generische Dimmergeräte benötigen keine eigenen Fixture-Definitionen, da normalerweise mehrere Dimmer in einen gemeinsamen Adressraum gepatcht werden, wobei ein oder mehrere Dimmer-Racks verwendet werden. Benutzer können Instanzen dieser generischen Dimmereinheiten erstellen, indem sie einfach die Anzahl der Kanäle definieren, die jede von ihnen haben soll.

### ![](../group.svg) Fixture Group

Eine Fixture Group ist, wie der Name schon sagt, eine Gruppe von [Fixtures](#fixtures). Sie definiert außerdem (auf einer eher grundlegenden Ebene) die tatsächliche physische Anordnung dieser Fixtures in der realen Welt. Dieses Wissen kann beispielsweise in der RGB Matrix genutzt werden, um eine Wand aus RGB-mischbaren Lichtern zu erzeugen, die als einzelne Pixel in einem grafischen Muster oder Lauftext fungieren können.

### Fixture Mode

Viele Hersteller entwerfen ihre intelligenten Leuchten so, dass sie so konfiguriert werden können, dass sie verschiedene Kanalsätze verstehen. Beispielsweise könnte ein Scanner zwei Konfigurationsoptionen haben: eine für nur 8-Bit-Bewegungskanäle (1x Pan, 1x Tilt) und eine andere für 16-Bit-Bewegungskanäle (2x Pan, 2x Tilt). Anstatt für jede Variation eine komplett neue Fixture-Definition zu erstellen, wurden sie in den Fixture-Definitionen von QLC+ zu Fixture-Modes gebündelt. Andere Pulte oder Formate nennen dies „Personality“.

### ![](../functions2.svg) Funktionen

Die Anzahl der Funktionen ist praktisch unbegrenzt. Funktionen werden verwendet, um die Einstellung von Werten für DMX-Kanäle zu automatisieren. Jeder Funktionstyp hat seine eigene Art, Lichter zu automatisieren.

Die Funktionstypen sind:

*   [Scene](#scene)
*   [Chaser](#chaser)
*   [Sequence](#sequence)
*   [EFX](#efx)
*   [RGB Matrix](#rgb-matrix)
*   [Collection](#collection)
*   [Show](#show)
*   [Audio](#audio)
*   [Video](#video)

Jede Funktion kann benannt werden, und obwohl der Name nicht zur eindeutigen Identifizierung einzelner Funktionen verwendet wird, werden Benutzer aufgefordert, ihre Funktionen auf systematische und prägnante Weise zu benennen, um die Identifizierung jeder einzelnen Funktion zu erleichtern. Zu Ihrer eigenen Bequemlichkeit.

Jede Funktion hat ihre eigenen Geschwindigkeitseinstellungen:

*   **Fade In:** Die Zeit, die benötigt wird, um HTP-Kanäle (in Scenes auch LTP-Kanäle) auf ihren Zielwert zu blenden
*   **Fade Out:** Die Zeit, die zum Zurückblenden von HTP-/Intensitätskanälen auf Null benötigt wird
*   **Duration:** Die Dauer des aktuellen Schritts (gilt nicht für Scenes)

### Grand Master

Der Grand Master wird als letzter Master-Schieberegler verwendet, bevor die Werte an die tatsächliche physische DMX-Hardware gesendet werden. Normalerweise wirkt sich der Grand Master nur auf **Intensity**-Kanäle aus, kann aber auch so geändert werden, dass er die Werte **aller** Kanäle beeinflusst.

Der Grand Master verfügt außerdem über zwei **Value Modes**, die steuern, _wie_ der Grand Master die Kanalwerte beeinflusst:

*   Reduce: Die Werte der betroffenen Kanäle werden um einen Prozentsatz reduziert, der mit dem Grand-Master-Schieberegler eingestellt wird. Wenn der Grand Master beispielsweise auf 50 % eingestellt ist, werden alle betroffenen Kanäle auf 50 % ihrer **aktuellen** Werte reduziert.
*   Limit: Betroffene Kanäle können keine größeren Werte annehmen als den mit dem Grand-Master-Schieberegler eingestellten Wert. Wenn Sie beispielsweise den Grand Master auf 127 setzen, werden die Maximalwerte aller betroffenen Kanäle auf genau 127 begrenzt.

### Head

Ein Head stellt ein einzelnes Lichtausgabegerät in einem Fixture dar. Normalerweise enthält ein einzelnes Fixture genau eine Ausgabe, wie die Linse, die Lampe oder einen Satz LEDs. Es gibt jedoch eine wachsende Anzahl von Fixtures auf dem Markt, die zwar als einzelnes Fixture behandelt werden, aber über mehrere Lichtausgabegeräte, d. h. Heads, verfügen.

Beispielsweise könnten Sie über eine RGB-LED-Leiste verfügen, die auf einem einzigen Gehäuse montiert ist und somit als einzelnes Fixture mit einem DMX-Eingang und einem DMX-Ausgang erscheint. Tatsächlich besteht sie jedoch aus vier separaten RGB-LED-„Fixtures“. Diese separaten Fixtures werden in QLC+ als Heads behandelt; sie teilen sich einige Eigenschaften mit ihren Geschwister-Heads, sie können einzeln gesteuert werden, verfügen aber möglicherweise auch über eine Master-Intensitätssteuerung, die die Lichtausgabe aller Heads zusammen steuert.

Jeder Head gehört zu einem [Fixture Mode](#fixture-mode), da ein Fixture in einem Modus möglicherweise genügend Kanäle bereitstellt, um jeden seiner Heads einzeln zu steuern, während in einem anderen Modus möglicherweise nur eine Handvoll Kanäle zur gleichzeitigen Steuerung aller Heads bereitgestellt werden.

### HTP (Highest Takes Precedence)

HTP ist eine Regel, die entscheidet, welcher Pegel von einem Kanal an ein DMX-Universum gesendet wird, wenn der Kanal von mehr als einer [Funktion](#funktionen) oder einem Virtual-Console-Widget gesteuert wird. Im Allgemeinen befolgen Intensitätskanäle die HTP-Regel. Dazu gehören generische Intensitätskanäle, die zur Steuerung der _Lichtintensität_ mit Dimmern verwendet werden, sowie Kanäle zur Steuerung der Intensität einer Farbe, typischerweise in einem LED-Fixture.

Die HTP-Regel ist einfach: Der höchste Pegel (näher an 100 %), der derzeit an einen Kanal gesendet wird, ist derjenige, der an das DMX-Universum gesendet wird.

Nehmen wir an, Sie haben zwei Schieberegler, die denselben Intensitätskanal steuern. Zuerst stellen Sie Schieberegler 1 auf 50 % ein und bewegen dann Schieberegler 2 von 0 % auf 75 %. Solange Schieberegler 2 unter 50 % liegt, passiert nichts, aber nach Überschreiten der von Schieberegler 1 eingestellten 50 %-Marke steigt die Lichtintensität auf bis zu 75 %. Wenn Sie Schieberegler 2 erneut in Richtung 0 % ziehen, verringert sich die Lichtintensität, bis sie die von Schieberegler 1 eingestellten 50 % erreicht, und bleibt bei 50 %, bis Schieberegler 1 nach unten gezogen wird.

Eine Überblendung zwischen 2 [Scenes](#scene) ersetzt die HTP-Pegel in der ersten Scene durch die HTP-Pegel der zweiten. Die neuen HTP-Pegel werden wie oben mit HTP-Pegeln anderer Funktionen und Virtual-Console-Widgets kombiniert. Siehe auch [LTP](#ltp-latest-takes-precedence).

### ![](../inputoutput.svg) Eingabe-/Ausgabe-Plugins

QLC+ unterstützt eine Vielzahl von Plugins zum Senden und Empfangen von Daten von/zur Außenwelt.  
Ein Plugin kann eine Schnittstelle zu physischen Geräten (z. B. DMX-Adaptern oder MIDI-Controllern) oder zu einem Netzwerkprotokoll (z. B. [Art-Net](/plugins/art-net), [OSC](/plugins/osc) oder [E1.31](/plugins/e1-31-sacn)) sein.  
Plugins unterstützen Eingabe-, Ausgabe- oder Feedbackfunktionen, abhängig vom Gerät oder Protokoll, das sie steuern.

Die primären Eingabemethoden für QLC+ sind natürlich Tastatur und Maus. Benutzer können Tastaturtasten den Tasten der Virtual Console zuweisen, Schieberegler ziehen und so ziemlich alles mit einer Maus erledigen.

Mit Plugins ist es jedoch möglich, zusätzliche Eingabegeräte an den Computer anzuschließen, um das eher umständliche und langsame Benutzererlebnis zu verbessern, das mit einer gewöhnlichen Maus und Tastatur erzielt wird. Plugins, die eine Input Line unterstützen, bieten die Möglichkeit, externe Geräte dazu zu bringen, Eingabedaten für verschiedene QLC+-Elemente zu erzeugen.

Eine Input Line ist eine von einer Hardware oder einem Netzwerk bereitgestellte Verbindung, auf die über ein Eingabe-Plugin zugegriffen wird. Dabei kann es sich beispielsweise um einen MIDI-IN-Anschluss im Computer (oder Peripheriegerät) des Benutzers handeln, an den Benutzer MIDI-fähige Eingabegeräte wie Slider-Boards usw. anschließen können.

Eine Output Line ist eine von einer Hardware oder einem Netzwerk bereitgestellte Verbindung, auf die über ein Ausgabe-Plugin zugegriffen wird. Mit anderen Worten handelt es sich um ein echtes DMX-Universum, das jedoch als Output bezeichnet wurde, um es von den internen Universen von QLC+ zu unterscheiden. Sie können sie sich als einzelne XLR-Ausgangsanschlüsse in Ihrer DMX-Hardware vorstellen.

### Input profiles

Input Profiles können als eine Art „Cousins“ der [Fixtures](#fixtures) betrachtet werden; sie enthalten Informationen zu bestimmten Geräten, die Eingabedaten erzeugen. Ein Eingabegerät kann zum Beispiel ein Slider-Board wie das Behringer BCF-2000, KORG nanoKONTROL, ein Enttec Playback Wing usw. sein.

### LTP (Latest Takes Precedence)

LTP ist eine Regel, die entscheidet, welcher Pegel von einem Kanal an ein DMX-Universum gesendet wird, wenn der Kanal von mehr als einer [Funktion](#funktionen) oder einem Virtual-Console-Widget gesteuert wird. Im Allgemeinen wird sie für Kanäle verwendet, die anderen Gruppen als der **Intensity**-Gruppe zugewiesen wurden, wie z. B. Pan, Tilt, Gobo, Strobe-Geschwindigkeit und andere _intelligente Fixture-Parameter_.

Die LTP-Regel ist einfach: Der neueste Pegel, der von einer Funktion oder einem Widget der Virtual Console festgelegt wurde, wird an das DMX-Universum gesendet.

Während einer Überblendung zwischen [Scenes](#scene) werden die LTP-Pegel häufig geändert. Dies muss mit einiger Vorsicht gehandhabt werden, da einige LTP-Pegel sofort auf einen neuen Pegel springen müssen, beispielsweise beim Wechsel von einem Gobo zu einem anderen. LTP-Gruppen wie Pan und Tilt müssen jedoch möglicherweise während einer Überblendung schrittweise von einem Pegel zum anderen wechseln. Durch die Kombination von Scenes in einer [Collection](#collection) können unterschiedliche Timings erreicht werden. Siehe auch [HTP](#htp-highest-takes-precedence).

### ![](../palette.svg) Palette

Eine Palette ist eine Entität in QLC+, die ein Fixture-Merkmal darstellt. Eine Palette kann zum Beispiel eine Farbe, eine Position, ein Zoomwinkel und so weiter sein.
Paletten können in [Scenes](#scene) verwendet werden, um ein Merkmal unabhängig von den durch die Scene gesteuerten Fixtures zu abstrahieren.

### ![](../rgbmatrix.svg) RGB Matrix

Eine RGB-Matrix-[Funktion](#funktionen) kann verwendet werden, um einfache Grafiken und Text auf eine Matrix (ein Gitter oder eine Wand) aus RGB- und/oder monochromen Fixture-[Heads](#head) zu übertragen. Die RGB-Matrix-Funktion wurde so konzipiert, dass sie mit [Scripts](#rgb-script) erweiterbar ist, die von Benutzern geschrieben werden können.

Jede RGB Matrix hat ihre eigenen Geschwindigkeitseinstellungen:

*   **Fade In:** Zeit zum Einblenden jedes Pixels
*   **Fade Out:** Zeit zum Ausblenden jedes Pixels
*   **Duration:** Die Dauer des aktuellen Schritts/Frames

### ![](../rgbmatrix.svg) RGB Script

Ein RGB Script ist ein in [ECMAScript](https://de.wikipedia.org/wiki/ECMAScript) (auch als JavaScript bekannt) geschriebenes Programm, das die notwendigen Bilddaten für [RGB-Matrix](#rgb-matrix)-Funktionen erzeugt. Weitere Informationen finden Sie auf der Seite [RGB Script API](/function-manager/rgb-script-api).

### ![](../scene.svg) Scene

Eine Scene-[Funktion](#funktionen) umfasst die Werte ausgewählter Kanäle, die in einer oder mehreren Fixture-Instanzen enthalten sind. Wenn eine Scene gestartet wird, hängt die Zeit, die ihre Kanäle benötigen, um ihre Zielwerte zu erreichen, von den Geschwindigkeitseinstellungen der Scene ab:

Jede Funktion hat ihre eigenen Geschwindigkeitseinstellungen:

*   **Fade In:** Die Zeit, die zum Einblenden aller Kanäle auf ihre Zielwerte benötigt wird, unabhängig davon, welchen Wert sie hatten
*   **Fade Out:** Die Zeit, die zum Zurückblenden der HTP-/Intensitätskanäle auf Null benötigt wird. Beachten Sie, dass NUR [HTP](#htp-highest-takes-precedence)-Kanäle von dieser Einstellung betroffen sind.

Kopien von Scene-Funktionen können mit dem [Function Manager](/function-manager) erstellt werden. Der gesamte Inhalt der Scene wird in das Duplikat kopiert.

### ![](../sequence.svg) Sequence

Eine Sequence verfügt über einen Teil der Funktionalität eines [Chasers](#chaser).  
Sie entspricht einem Chaser, bei dem jeder Schritt eine einzelne [Scene](#scene) ist und jede dieser Scenes denselben Kanalsatz steuert. Eine Sequence ist an eine bestimmte Scene gebunden, was bedeutet, dass alle Schritte der Sequence nur die aktivierten Kanäle dieser Scene steuern können.  
Beim Erstellen neuer Schritte in einer Sequence wird kein Popup zur Funktionsauswahl angezeigt, da ein Sequence-Schritt im Gegensatz zu einem Chaser-Schritt keine anderen Funktionen enthalten kann.  
Wenn eine Sequence erstellt wird, erscheint im [Function Manager](/function-manager) ein spezielles Sequence-Symbol als untergeordnetes Element der Scene, an die sie gebunden ist.  
Um den Unterschied zwischen einer Sequence und einem Chaser zu verstehen, lesen Sie bitte den zweiten Absatz der Dokumentation zum [Show Manager](/show-manager).

### ![](../script.svg) Script

Die [Funktion](#funktionen) Script basiert auf einer einfachen, aber leistungsstarken Skriptsprache, um QLC+-Funktionen in sequenzieller Reihenfolge zu automatisieren. Ein Script kann mit dem [Script Editor](/function-manager/script-editor) geändert werden.

### ![](../show.svg) Show

Eine Show ist eine erweiterte [Funktion](#funktionen), die die meisten QLC+-Funktionen kapselt, um eine zeitgesteuerte Lichtshow zu erstellen. Eine Show kann nur mit dem [Show Manager](/show-manager) erstellt und mit dem [Show Editor](/function-manager/show-editor) überprüft und umbenannt werden.

### ![](../video2.svg) Video

Eine Video-[Funktion](#funktionen) ist ein Objekt, das eine auf einer Festplatte oder einer Netzwerk-URL gespeicherte Videodatei darstellt.  
Die unterstützten Videoformate hängen von Ihrem Betriebssystem ab. Beispielsweise ist Mac OSX auf MOV/MP4-Dateien beschränkt und nicht viel mehr.  
Videofunktionen können mithilfe des Bedienfelds [Show Manager](/show-manager) zum gewünschten Zeitpunkt im [Chaser](#chaser) oder in einer [Show](#show) platziert werden.
