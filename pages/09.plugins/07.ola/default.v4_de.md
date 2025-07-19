---
title: OLA
date: '05:17 22-08-2023'
---

Einführung
------------

Das OLA-Plugin ermöglicht die direkte Kommunikation zwischen QLC+ und dem [OLA-Framework](https://wiki.openlighting.org/index.php/Open_Lighting_Architecture) auf demselben Computer.

Anforderungen
------------

Für das OLA-Plugin muss OLA auf dem System installiert sein.
Da OLA nicht unter Windows läuft, können nur Linux- und macOS-Benutzer von diesem Plugin profitieren.
Informationen zum Herunterladen und Installieren von OLA finden Sie [hier](https://wiki.openlighting.org/index.php/Download_%26_Install_OLA).
QLC+ benötigt den Betrieb des OLA-Servers, um mit dem OLA-Framework kommunizieren zu können. Dies kann entweder manuell durch Starten von „olad“ von einem Terminal aus oder im Konfigurationsfenster durch Ankreuzen von „Standalone OLA Daemon ausführen“ erfolgen.

Konfiguration
-------------

Wenn Sie die Konfigurationsschaltfläche über einer OLA-Ausgabezeile drücken, erscheint ein kleines Popup-Fenster mit den grundlegenden Informationen darüber, wie QLC+-Ausgaben OLA-Universen zugeordnet werden.
Unten können Sie über eine Schaltfläche mit dem Häkchen den Start des OLA-Servers erzwingen.

OLA-Setup
---------

Wenn Sie sichergestellt haben, dass in QLC+ alles funktioniert, und überprüft haben, wie die Universen zugeordnet sind, können Sie OLA so einrichten, dass das von QLC+ empfangene Signal an ein DMX-Gerät ausgegeben wird, entweder über USB oder über das Netzwerk.
Hier ist eine [Einführung in die OLA-Nutzung](https://wiki.openlighting.org/index.php/Using_OLA).
Grundsätzlich müssen Sie einen Webbrowser öffnen und eine Verbindung zu [http://localhost:9090](http://localhost:9090) oder [http://127.0.0.1:9090](http://127.0.0.1) herstellen. 9090) und fügen Sie ein Universum hinzu, dem die gleiche Nummer in QLC+ zugeordnet ist, und wählen Sie die gewünschte Ausgabezeile aus.