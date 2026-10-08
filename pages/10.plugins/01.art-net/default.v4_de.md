---
title: Art-Net
date: '05:06 22-08-2023'
---

Einführung
------------

QLC+ unterstützt das [Art-Net-Protokoll](https://en.wikipedia.org/wiki/Art-Net) über ein Eingabe-/Ausgabe-Plugin, das Pakete im Netzwerk empfängt und überträgt.  
Es sind keine zusätzlichen Anforderungen erforderlich, da QLC+ über eine native Implementierung des Art-Net-Protokolls verfügt, das auf Linux-, Windows- und macOS-Systemen funktioniert.  
Das Art-Net-Plugin kann Pakete von mehreren Netzwerkkarten, virtuellen Adressen, dem Loopback-Gerät (127.0.0.1) und mehreren Universen pro Netzwerkschnittstelle senden und empfangen.  
Standardmäßig werden Art-Net-Pakete als UDP übertragen, wobei der Standardport 6454 und die Broadcast-Adresse der ausgewählten Schnittstelle (z. B. 192.168.0.255) verwendet werden. Bei Verwendung des Loopback-Geräts werden Pakete immer über die Adresse 127.0.0.1 übertragen.  
Bei der Übertragung mehrerer Universen über dieselbe Schnittstelle werden die Pakete standardmäßig mit einer Art-Net-Universum-ID gesendet, die der QLC+-Universumsnummer minus 1 entspricht.  

Zum Beispiel:  
QLC+ Universum 1 -> Art-Net Universum 0  
QLC+ Universum 2 -> Art-Net Universum 1  
...  
QLC+ Universum 8 -> Art-Net Universum 7  

Diese Wahl ist auf einige Fakten zurückzuführen:  
1- Das erste gültige Art-Net-Universum ist 0 und nicht 1  
2- Das erste von kommerziellen Art-Net-DMX-Geräten wie eDMX und ODE akzeptierte Universum ist 0. Damit QLC+ sofort funktioniert, muss das erste Art-Net-Universum 0 sein.  

Sollten die oben genannten Einstellungen nicht den Anforderungen Ihres Netzwerks entsprechen, lesen Sie bitte das folgende Kapitel.

Konfiguration
-------------

Wenn Sie auf die Konfigurationsschaltfläche ![](/basics/configure.png) klicken, wird ein kleiner Dialog mit zwei Registerkarten angezeigt: die Universe-Konfiguration und der Knotenbaum.  

**Universenkonfiguration**: Nachdem ein QLC+-Universum mit einem Art-Net-Ein- oder -Ausgang gepatcht wurde, wird in dieser Liste ein Eintrag angezeigt, der es ermöglicht, die gewünschten Parameter, die vom Art-Net-Plugin verwendet werden sollen, manuell zu konfigurieren.  
Eingabezeilen haben keine besonderen Parameter, während eine Ausgabezeile wie folgt konfiguriert werden kann:  

* **IP-Adresse**: Dies ist die Ziel-IP-Adresse, an die das Art-Net-Plugin Pakete überträgt. Standardmäßig wird eine Broadcast-Adresse verwendet (die also mit .255 endet). Wenn Sie diese im Bereich von 1 bis 254 festlegen, überträgt Art-Net ein QLC+-Universum im Unicast-Modus. Wenn Ihr Art-Net-Netzwerk einen einfachen Hub verwendet, ist die ausgegebene IP-Adresse irrelevant, da Broadcast oder Unicast keinen Unterschied machen. Wenn Sie jedoch einen Netzwerk-Switch verwenden, ist Unicast von grundlegender Bedeutung, um die Netzwerküberlastung auszugleichen, da jeder Port des Switches einer Netzwerk-IP zugeordnet ist und nur die Pakete mit seiner Ziel-IP empfängt.  
    **Hinweis**: Stellen Sie die Ausgangs-IP-Adresse nicht auf dieselbe IP-Adresse Ihres sendenden Knotens (z. B. des PCs, auf dem QLC+ läuft) ein, da dies einfach falsch ist und eine Netzwerkschleife verursachen kann. Wenn Sie mit einem Art-Net-Knoten kommunizieren müssen, der auf demselben Computer läuft, auf dem QLC+ läuft, verwenden Sie stattdessen das Loopback-Gerät (127.0.0.1).
* **Art-Net-Universum**: Dies ist das Art-Net-Universum, das tatsächlich in jedes übertragene Paket geschrieben wird. Durch Einstellen dieses Parameters können Sie jedes QLC+-Universum zur Übertragung an das gewünschte Art-Net-Universum verwenden.
* **Übertragungsmodus**: Hier können Sie auswählen, ob QLC+ vollständige oder teilweise Universen übertragen soll.  
    _Standard_ bedeutet, dass DMX-Universen nur übertragen werden, wenn sich mindestens ein DMX-Kanal ändert oder alle 2 Sekunden, um die Werte des Empfängers zu aktualisieren.  
    _Vollständig_ bedeutet, dass alle 512 DMX-Kanäle eines Universums mit der Geschwindigkeit des internen QLC+-Takts (50 Hz) übertragen werden, was eine feste Bitrate von etwa 250 kbps ergibt.  
    _Teilweise_ bedeutet stattdessen, dass QLC+ nur den tatsächlich in einem Universum verwendeten DMX-Kanal überträgt, beginnend mit Kanal 1. Wenn Sie beispielsweise Kanal 3 eines Geräts mit der Adresse 50 erhöhen, überträgt das Art-Net-Plugin nur 53 DMX-Kanäle. Dadurch wird die Übertragungsbitrate begrenzt. Verwenden Sie diese Einstellung nur, wenn der empfangende Art-Net-Knoten eine teilweise Übertragung unterstützt.

Einstellungen, die von den Plugin-Standardeinstellungen abweichen, werden in Ihrem QLC+-Arbeitsbereich gespeichert, um die Portabilität eines Projekts über verschiedene Plattformen hinweg zu erhöhen, z. B. verschiedene Betriebssysteme oder einen PC und einen Raspberry Pi.  

**Knotenbaum**: Auf dieser Registerkarte werden die im Netzwerk erkannten Art-Net-Knoten angezeigt, gruppiert nach Netzwerkschnittstelle.
QLC+ wird in dieser Liste immer als am Netzwerk teilnehmender Knoten angezeigt.  
Art-Net-Knoten werden dieser Liste hinzugefügt, wenn sie die ArtPoll/ArtPollReply-Nachricht unterstützen, andernfalls werden sie nicht angezeigt. Das bedeutet nicht, dass Sie nicht mit ihnen kommunizieren können.

DMXKing eDMX und ENTTEC ODE
---------------------------

Wenn Sie eines dieser Geräte besitzen, verfügen beide über Konfigurationstools, die bei der Arbeit mit QLC+ nützlich sein können. Mit ihnen können Sie mehrere Parameter einstellen, um die beste Konfiguration für die Eingabe/Ausgabe von Daten von/an QLC+ zu finden.  
Wenn Sie beispielsweise möchten, dass das QLC+-Universum 3 Daten auf dem ersten Port eines eDMX ausgibt, müssen Sie das folgende Tool verwenden, um die Adresse des Geräteuniversums in 2 zu ändern.  

Hier die Links zum Herunterladen der Tools:  
[DMXKing eDMX-Konfigurationstool](https://dmxking.com/downloads/eDMX_Configuration.zip)  
[ENTTEC-Knotenverwaltungsdienstprogramm](https://www.enttec.com/?main_menu=Products&pn=79001)

Kompatibilität
-------------

Kompatible Art-Net-Geräte sind auf der [Kompatibilitäts](https://qlcplus.org/discover/compatibility) Seite der QLC+ Website aufgeführt.
