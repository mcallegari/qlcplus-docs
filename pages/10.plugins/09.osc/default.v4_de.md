---
title: OSC
date: '05:18 22-08-2023'
---

Einführung
------------

QLC+ unterstützt das [OSC-Protokoll](https://de.wikipedia.org/wiki/Open_Sound_Control) über ein Eingabe-/Ausgabe-Plugin, das Pakete im Netzwerk empfängt und überträgt.  
Es sind keine zusätzlichen Anforderungen erforderlich, da QLC+ über eine native Implementierung des OSC-Protokolls verfügt, das auf Linux-, Windows- und OSX-Systemen funktioniert.  
Das OSC-Plugin kann Pakete von mehreren Netzwerkkarten, virtuellen Adressen, dem Loopback-Gerät (127.0.0.1) und mehreren Universen pro Netzwerkschnittstelle senden und empfangen.  
Standardmäßig überwacht das OSC-Plugin Ports ab 7700 plus dem QLC+-Universum minus eins.  
Die Ausgabe verwendet stattdessen Ports ab 9000 plus dem QLC+-Universum minus eins.  

Zum Beispiel:  
QLC+ Universe 1 -> OSC-Eingangsport 7700, Ausgangsport 9000  
QLC+ Universe 2 -> OSC-Eingangsport 7701, Ausgangsport 9001  
...  
QLC+ Universe 8 -> OSC-Eingangsport 7707, Ausgangsport 9007  


Konfiguration
-------------

Wenn Sie auf die Konfigurationsschaltfläche ![](/basics/configure.png) klicken, wird ein kleiner Dialog mit dem Bereich „Universenkonfiguration“ angezeigt.  

Nachdem ein QLC+-Universum mit einem OSC-Ein- oder -Ausgang gepatcht wurde, wird in dieser Liste ein Eintrag angezeigt, der es ermöglicht, die gewünschten Parameter, die vom OSC-Plugin verwendet werden sollen, manuell zu konfigurieren.  

Für jeden OSC-Ein- oder -Ausgang können folgende Parameter eingestellt werden:

* **Eingangsport:** Wenn die gepatchte Leitung zur Eingabe geöffnet ist, definiert dieser Parameter den Port, den QLC+ abhört, um OSC-Daten von Ihrem externen Controller zu empfangen.
* **Ausgabeadresse:** Wenn die gepatchte Leitung zur Eingabe geöffnet ist, ist dies die Ziel-IP-Adresse, die zum Senden von Rückmeldungen an Ihren externen Controller verwendet wird.  
    Wenn die gepatchte Leitung zur Ausgabe geöffnet ist, ist dies die Ziel-IP-Adresse, die zum Senden von OSC-Daten im Netzwerk verwendet wird.  
    OSC-Ausgabepakete werden zusammengesetzt, um einen OSC-Pfad wie den folgenden zu erhalten: /QLC+-Universum – 1/dmx/DMX-Kanal – 1  
    Kanal 12 des QLC+-Universums 4 hat beispielsweise den folgenden Pfad: /3/dmx/11  
    Alle vom OSC-Plugin übermittelten Werte verwenden den Typ float.
* **Ausgabeport:** Wenn die gepatchte Leitung für die Eingabe geöffnet ist, ist dies der Zielport, der zum Senden von Rückmeldungen an Ihren externen Controller verwendet wird.  
    Wenn die gepatchte Leitung zur Ausgabe geöffnet ist, ist dies der Zielport, der zum Senden von OSC-Daten im Netzwerk verwendet wird.

**Hinweis:** Beim Patchen einer Input+Feedback-Leitung müssen Sie die Ausgangs-IP/den Port ändern, die im Abschnitt „Eingänge“ aufgeführt sind. Behalten Sie einfach den Abschnitt „Ausgaben“ als Standard bei.

Kanalrechner
-------------

Wenn es keine Möglichkeit gibt, eine automatische Erkennung über den Eingabeprofil-Editor eines OSC-Controllers durchzuführen, könnte Ihnen dieses Tool helfen.  
Sie können den **OSC-Pfad** eingeben und QLC+ berechnet die Kanalnummer für Sie. Es handelt sich im Grunde um einen 16-Bit-Hash des Pfads, den QLC+ zur Darstellung einer OSC-Eingabe verwendet.  

**Hinweis:** Zwischen dem Rechner und dem, was Sie im Eingabeprofil-Editor sehen, besteht ein Versatz von 1. Dies ist in Ordnung, da Kanäle in QLC+ bei 1 und nicht bei 0 beginnen. Was der Rechner anzeigt, ist die Kanalnummer, die Sie tatsächlich in ein Eingabeprofil oder in Ihren benutzerdefinierten OSC-Controller schreiben müssen.

Controller
-----------

QLC+ wurde mit den folgenden OSC-Controllern getestet:

* [Open Stage Control](https://openstagecontrol.ammd.net/)
* [TouchOSC](https://hexler.net/touchosc). Für die Layouts Mix16 und Automat5 steht ein vordefiniertes Eingabeprofil zur Verfügung.
* [Pure Data](https://archive.flossmanuals.net/pure-data/network-data/osc.html)