---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

Standardmäßig enthält QLC+ einen nativen Webserver, um einige der Softwarefunktionen in herkömmlichen Webbrowsern verfügbar zu machen.  
Dies ist sehr praktisch, wenn Sie QLC+ auf einem Gerät ohne Display (Headless-System) ausführen müssen, um entweder eigenständig zu arbeiten oder um es fernzusteuern.  
Die Weboberfläche ist standardmäßig nicht aktiviert, kann aber einfach durch Ausführen von QLC+ mit der Option „-w“ oder „--web“ aktiviert werden. Weitere Informationen dazu finden Sie auf der Seite [Befehlszeilenparameter](../command-line-parameters) dieser Dokumentation.

Auf die Weboberfläche kann über jeden modernen Webbrowser zugegriffen werden, der auf jedem Gerät läuft, beispielsweise einem Computer, einem Tablet oder einem Smartphone. Ihr Browser muss die Web-Sockets-Technologie unterstützen, um mit QLC+ kommunizieren zu können. Es wird empfohlen, Google Chrome zu verwenden.  
Es ist auch möglich, benutzerdefinierte Webseiten zu entwerfen und über die Web-API auf QLC+-Funktionen zuzugreifen, bei denen es sich im Wesentlichen um auf eine bestimmte Weise formatierte Zeichenfolgen handelt, die über einen Websocket an QLC+ gesendet werden.  
Eine Testseite mit den verfügbaren APIs finden Sie [hier](https://www.qlcplus.org/Test_Web_API.html).

Um auf die QLC+-Weboberfläche zuzugreifen, stellen Sie einfach eine Verbindung zu dieser Adresse her:  
**http://\[IP-Adresse\]:9999**  

Dabei ist \[IP-Adresse\] die IP-Adresse des Geräts, auf das Sie über das Internet zugreifen möchten. Beispiel: http://192.168.0.100:9999  
Die Weboberfläche besteht aus drei Seiten:

* Virtuelle Konsole
* Einfacher Schreibtisch
* Konfiguration

Seite „Virtuelle Konsole“.
--------------------

Diese Seite wird standardmäßig beim Zugriff auf die Webschnittstellenadresse angezeigt und stellt die virtuelle QLC+-Konsole dar.  
Wenn ein Projekt geladen ist, werden auf dieser Seite die zuvor mit QLC+ erstellten Widgets angezeigt, andernfalls wird nur eine leere Seite angezeigt.  
Es ist möglich, ein Projekt mit der Schaltfläche **Projekt laden** in der oberen linken Ecke der Seite zu laden. Es erscheint ein Fenster, in dem Sie eine Datei von dem Gerät auswählen können, mit dem Sie das Gerät steuern, auf dem QLC+ ausgeführt wird.  
Die Projektdatei wird über das Web übertragen und von QLC+ geladen.  
Um auf die QLC+-Konfigurationsseite zuzugreifen, klicken Sie einfach auf die Schaltfläche **Konfiguration**.

Einfache Schreibtischseite
----------------

Diese Seite ist eine vereinfachte Version des Simple Desk, den Sie in der QLC+-Desktopversion finden. Es zeigt DMX-Universen nach Seiten unterteilt an, wobei jede Seite 32 Kanäle anzeigt. Sie können mit den Pfeiltasten nach links/rechts zwischen den Seiten wechseln und mit dem Dropdown-Menü oben rechts auf der Seite das aktuell angezeigte Universum auswählen.  
Es ist auch möglich, ein Universum auf einmal zurückzusetzen, indem Sie die Reset-Taste (graues X) drücken.  

### DMX-Tastatur

Wenn Sie in der oberen Leiste von Simple Desk auf die Schaltfläche „DMX-Tastatur“ klicken, können Sie zu einer neuen Seite springen, auf der eine herkömmliche DMX-Tastatur angezeigt wird.  
Das Tastenfeld ist nützlich, um eine Reihe von Kanalwerten mit einem einzigen Befehl festzulegen. Nachfolgend finden Sie eine Tabelle mit Erläuterungen zu den Tastenbefehlen, die Sie auf der rechten Seite des Pads finden.  


|     |     |
| --- | --- |
| **Schlüssel** | **Beschreibung** |
| AT | legt einen Wert für einen angegebenen DMX-Kanal oder eine Gruppe von Kanälen (Bereich) fest.  <br>Beispiel: **13 AT 148** (setzt Kanal 13 auf den Wert 148) |
| THRU | wählt einen Bereich von DMX-Kanälen aus <br>Beispiel: **3 THRU 15 AT 133** (stellt die Kanäle 3 bis 15 auf den Wert 133 ein) |
| FULL | setzt den Maximalwert (255) auf die ausgewählten DMX-Kanäle oder Kanalgruppen <br>Beispiel: **18 FULL** (stellt Kanal 18 auf 255) <br>**1 THRU 10 FULL** (stellt Kanäle 1 auf 10 bis 255) |
| ZERO | Setzt den Minimalwert (0) auf die ausgewählten DMX-Kanäle oder Kanalgruppen <br>Beispiel: **4 ZERO** (setzt Kanal 4 auf 0) |
| BY | legt eine Kanallücke innerhalb eines Bereichs fest <br>Beispiel: **1 THRU 10 BY 2 AT 100** (setzt die Kanäle 1, 3, 5, 7 und 9 auf den Wert 100) |
| +% | erhöht die aktuellen Werte der Kanäle um einen bestimmten Prozentsatz <br>Beispiel: **1 THRU 10 BY 2 +% 20** (erhöht die aktuellen Werte der Kanäle 1, 3, 5, 7 und 9 um 20 %) |
| -% | reduziert die aktuellen Werte der Kanäle um einen bestimmten Prozentsatz <br>Beispiel: **1 THRU 10 BY 2 -% 20** (reduziert die aktuellen Werte der Kanäle 1, 3, 5, 7 und 9 um 20 %) |


Bitte beachten Sie Folgendes:

* Jeder Befehl wird nur an QLC+ gesendet, wenn die ENTER-Taste gedrückt wird
* DMX-Adressen sind zwischen den Universen zusammenhängend, also reicht Universum 1 von 1 bis 512, Universum 2 von 513 bis 1024 und so weiter
* Sie können Befehle manuell in das obere Textfeld schreiben, sobald Sie die Syntax der Tastaturbefehle kennen

Konfigurationsseite
-------------------

Auf dieser Seite können Sie die QLC+-Konfiguration aus der Ferne festlegen, die in vier Bereiche unterteilt ist:

* **Universenkonfiguration**: Ermöglicht das Festlegen der Eingänge, Ausgänge, Rückmeldungen, Profile und des Passthrough-Modus für jedes QLC+-Universum. Dies ist im Grunde die gleiche Funktionalität wie das QLC+-Eingabe-/Ausgabefeld.  
    Da ein QLC+-Projekt auch die I/O-Informationen enthält, müssen Sie es auf dieser Seite höchstwahrscheinlich nicht manuell konfigurieren, sondern einfach überprüfen, ob alles korrekt ist.  

* **Audiokonfiguration**: Ermöglicht die Auswahl der Audiogeräte, die für die Audiowiedergabe oder Audioeingabe verwendet werden.  

* **Vom Benutzer geladene Geräte**: Ermöglicht das Remote-Laden eines benutzerdefinierten Geräts auf QLC+.  
    Wenn Sie auf die Schaltfläche **Gerät laden** klicken, wird ein Fenster angezeigt, in dem Sie eine Datei von dem Gerät auswählen können, mit dem Sie das Gerät steuern, auf dem QLC+ ausgeführt wird.  
    Die Fixture-Datei wird über das Internet übertragen und von QLC+ geladen.  
    Beim Hinzufügen neuer benutzerdefinierter Geräte wird empfohlen, ein Projekt neu zu laden oder QLC+ auf dem Zielgerät neu zu starten.  

* **Autorisierte Benutzer**: Dieser Abschnitt ist nur verfügbar, wenn QLC+ mit der Option „-wa“ oder „--web-auth“ gestartet wird. Es ermöglicht eine grundlegende HTTP-Authentifizierung (kein HTTPS oder Zertifikate erforderlich).  
    Wenn Sie diese Funktion zum ersten Mal aktivieren, müssen Sie mindestens einen Administrator hinzufügen, andernfalls werden Sie beim Zugriff auf die Weboberfläche nicht nach einem Passwort gefragt.  
    Benutzer können die folgenden Zugriffsebenen haben:

    * **Alles**: Dies ist die Zugriffsebene für Administratoren. Sie können auf alle Funktionen der Weboberfläche zugreifen und weitere authentifizierte Benutzer hinzufügen
    * **Virtuelle Konsole und Simple Desk**: Ein Benutzer mit dieser Zugriffsebene kann die Seite „Virtuelle Konsole“ und „Simple Desk“ anzeigen, aber nicht auf die Konfigurationsseite zugreifen
    * **Nur virtuelle Konsole**: Ein Benutzer mit dieser Zugriffsebene kann nur die Seite „Virtuelle Konsole“ anzeigen, aber nicht auf den Simple Desk und die Konfigurationsseite zugreifen

    Ein Administrator kann:
    * Fügen Sie weitere Benutzer hinzu, indem Sie die Felder Benutzername und Passwort ausfüllen und dann auf die Schaltfläche „Benutzer hinzufügen“ klicken
    * Löschen Sie einen bestehenden Benutzer, indem Sie auf die Schaltfläche „Benutzer löschen“ klicken
    * Ändern Sie die Zugriffsebene oder das Passwort eines bestehenden Benutzers und klicken Sie dann auf die Schaltfläche „Ändern“.

Sobald die Konfiguration festgelegt wurde, können Sie zur Hauptseite der Webschnittstelle zurückkehren, indem Sie auf die Schaltfläche **Zurück** klicken, die sich in der oberen linken Ecke der Seite befindet.

Bekannte Einschränkungen
-----------------

Bei der QLC+-Webschnittstelle handelt es sich noch um eine Funktion, die noch in der Entwicklung ist, und sie weist einige bekannte Einschränkungen auf, die Sie beachten sollten, wenn Sie beabsichtigen, sie zu verwenden.

* Kurzwahl- und XY-Pad-Widgets werden noch nicht unterstützt
* Die Click & Go-Schaltfläche von Sliders wird noch nicht unterstützt