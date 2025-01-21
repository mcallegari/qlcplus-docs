---
title: 'Questions and Answers'
date: '08:32 21-08-2023'
media_order: dmx-usb-settings.png
---

Auf dieser Seite finden Sie die häufigsten Fragen, die Ihnen beim Einstieg in QLC+ in den Sinn kommen könnten.  
Hier finden Sie entweder direkt die Antwort oder Hilfe, die Ihnen den richtigen Weg weist.
 

#### Frage #1: QLC+ findet mein USB Dongle nicht.

**A:** QLC+ unterstützt sehr viele Arten von USB-DMX adaptern. Stelle bitte zuerst fest, dass die Verbindung richtig besteht. Im Regelfall wird die Aktivität des Adapters auch 
über eine Status LED signalisiert.

Wenn Sie Windows benutzen und der Adapter von Peperoni oder Vellemann ist, lesen Sie bitte die Anleitung auf deren Hilfeseiten wie die Adapter einzurichten sind.
Bei Lizenzroblemen benötigen beide separate DLL Dateien um ordnungsgemäß zu arbeiten.
Bitte überprüfen Sie [Peperoni output plugin](/plugins/peperoni) oder [Velleman output plugin](/plugins/velleman)

Wenn Sie Linux benutzen, stellen sie sicher, dass die Distribution Ihren Adapter richtig erkennt wenn dieser eingesteckt ist. Normalerweise sollte das `dmesg` Kommando etwas anzeigen.

#### Frage #2: Ich habe mehrere [Schaltflächen](/virtual-console/button) in meiner virtuellen Konsole. Ich brauche eine Möglichkeit, die aktuell aktive Schaltfläche zu deaktivieren, wenn ich eine andere aktiviere. Wie mache ich das?

**A:** Platzieren Sie Ihre Tasten einfach in einem [Solo Frame](/virtual-console/solo-frame). Nun sollte das Problem gelöst sein.

#### Frage #3: Ich habe gerade meinen Mac auf Mavericks (oder höher) aktualisiert und mein USB-DMX-Adapter überträgt keine Daten.

**A:** Das Problem liegt in einem Apple-Treiber namens AppleUSBFTDI, der die Kontrolle über jedes FTDI-basierte Gerät übernimmt.

Es gibt mehrere Möglichkeiten das Problem zu lösen, aber im Grunde ist das Ergebnis dasselbe: Der Apple-Treiber muss deaktiviert werden.

Bitte schauen Sie auf der entsprechenden Seite nach um zu erfahren wie Sie [den Apple FTDI-Treiber deaktivieren](/plugins/disable-apple-serial-vcp-driver)

Andernfalls können Sie das [ENTTEC FTDI Driver Control Tool] herunterladen (https://www.dmxis.com/release/FtdiDriverControl.zip).
Versuchen Sie den Apple-Treiber damit zu aktivieren/deaktivieren.

**Notiz 1: Dies kann das Verhalten anderer USB-Geräte beeinträchtigen. Tun Sie es also nur, wenn Sie wissen was Sie tun!**

**Notiz 2: Jedes Mal, wenn Mac OS ein Update erhält, müssen Sie diesen Vorgang erneut durchführen!**

**Notiz 3: Wenn Sie den Apple-Treiber deaktivieren/aktivieren, müssen Sie höchstwahrscheinlich Ihren Mac neu starten**

#### Frage #4: Wo ist der QLC+ Benutzerordner in meinem System zu finden?

**A:** Im Benutzerordner befinden sich Benutzergeräte, Eingabeprofile, RGB-Skripte und MIDI-Vorlagen.

Es ändert sich je nach Betriebssystem:

* **Linux**: Es handelt sich um einen versteckten Ordner in Ihrem Benutzer-Home-Verzeichnis: `$HOME/.qlcplus`
* **Windows**: Es handelt sich um einen Ordner in Ihrem Benutzerverzeichnis (z. B. <Benutzername>): `C:\\Users\\<Username>\\QLC+`
* **Mac OS**: Es befindet sich in Ihrem Benutzerverzeichnis „Bibliothek“: `$HOME/Library/Application\\ Support/QLC+`

Sie können jeden dieser Ordner von einem Terminal aus mit dem Befehl „cd“ erreichen. Zum Beispiel:

`cd $HOME/Library/Application\\ Support/QLC+`

Bitte beachten Sie, dass im Benutzerordner gefundene Geräte und Eingabeprofile Vorrang haben
die gleichen Dateien im QLC+-Systemordner. 

Sie können auch benutzerdefinierte [Fixture-Definitionen] (/basics/glossary-and-concepts#fixtures) und speichern
[Eingabeprofile](/input-output/input-profiles) im selben Ordner wie Ihr Projekt, findet QLC+
sie, wenn Sie das Projekt öffnen.

#### Frage #5: Where is the QLC+ system folder located in my system?

**A:** The system folder is where QLC+ resources (fixtures, input profiles, RGB scripts, etc) are installed
and it changes depending on your operating system:

* **Linux**: it's a fixed folder named `/usr/share/qlcplus`
* **Windows**: it is the folder where you actually installed QLC+. By default: `C:\\QLC+`
* **Mac OS**: it is a folder inside the QLC+ bundle (.app file). It is possible to browse
  the QLC+.app bundle contents simply with Finder. Just right click on the file and select
  "Show Package Contents".<br>Otherwise, the system folder can be reached with a terminal
  but it depends on where you installed QLC+. For example if you dragged QLC+ into
  Applications it will be: `/Applications/QLC+.app/Contents/Resources`

#### Question #6: QLC+ cannot play some videos on Windows

**A:** QLC+ relies on the Qt libraries which relies on the DirectShow filters installed in the system.

Unfortunately the basic codecs supported by Windows are quite poor, so you need to install some extra
codecs package like K-Lite, [available here](https://www.codecguide.com/download_kl.htm).

#### Question #7: I have a 4k display and everything in the QLC+ interface is extremely small

**A:** You need to add an option to the QLC+ command line to tell the Qt libraries to autoscale
the interface on a High DPI display. Examples:

* **Linux (from terminal)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 qlcplus`
* **Windows shortcut**: `C:\\Windows\\System32\\cmd.exe /c "SET QT_AUTO_SCREEN_SCALE_FACTOR=1 && START /D ^"C:\\QLC+^" qlcplus.exe"`
* **Mac OS (from terminal)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 QLC+.app\\Contents\\MacOS\\qlcplus`

In case, see the [command line parameters page](/advanced/command-line-parameters) for further information.

#### Question #8: My lights flicker. What can I do?

**A:** Sometimes an unbuffered USB DMX adapter or a noisy DMX line can cause some fixtures to
flicker unexpectedly. QLC+ allows you to adjust the output frequency rate to mitigate the undesired effect.
Please consider that a good DMX refresh rate should be around 44Hz.<br>Here's an example showing an
Open DMX clone settings panel. You can access it by double-clicking on the output line or by selecting
an output line and by clicking on the ![](/basics/configure.png) icon.

![dmx-usb-settings](dmx-usb-settings.png "dmx-usb-settings")

