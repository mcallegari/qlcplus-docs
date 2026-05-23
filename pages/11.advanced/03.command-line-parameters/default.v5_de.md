---
title: 'Befehlszeilenparameter'
date: '08:19 22-08-2023'
---

QLC+ unterstützt eine Reihe von Befehlszeilenparametern, um bestimmte Funktionen beim Start zu automatisieren oder zu erweitern.  
Die Verwendung von Befehlszeilenparametern kann je nach verwendetem Betriebssystem etwas umständlich sein:

**Linux**: Öffnen Sie einfach ein Terminal und geben Sie `qlcplus-qml` gefolgt von den gewünschten Parametern ein<br>
**Windows**: Erstellen Sie eine Verknüpfung zu `qlcplus-qml.exe` (normalerweise unter `C:\\QLC+`) auf Ihrem Desktop. Klicken Sie mit der rechten Maustaste auf die Verknüpfung und wählen Sie „Eigenschaften“. Im Feld „Ziel“ sehen Sie etwa `C:\\QLC+\\qlcplus-qml.exe`. Dahinter können Sie die Befehlszeilenparameter hinzufügen. Klicken Sie anschließend auf „OK“.<br>
Um beispielsweise beim Start die deutsche Sprache zu erzwingen, ändern Sie die Befehlszeile Ihrer Verknüpfung wie folgt:

![](../command-line-v5.png)

**OSX**: Dies ist der anspruchsvollste Fall, da QLC+ unter OSX in einem DMG-Paket gebündelt ist. Sie müssen ein Terminal öffnen und mit „cd“ in das QLC+-DMG wechseln, etwa so:<br>`cd QLC+.app\\Contents\\MacOS`<br>
Wenn Sie fertig sind, geben Sie `./qlcplus-qml` ein, gefolgt von den benötigten Parametern.

|     |
| --- |
| **-o oder --open**<br><br>**Beschreibung:** Öffnet die angegebene Projektdatei<br><br>**Parameter:** Dateiname<br><br>**Beispiele:**  <br>Öffne sample.qxw:  <br>qlcplus-qml -o sample.qxw  <br>qlcplus-qml --open sample.qxw |

|     |
| --- |
| **-9 oder --openlast**<br><br>**Beschreibung:** Öffnet die Projektdatei aus der letzten Sitzung<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Öffnet die zuletzt geöffnete Datei:  <br>qlcplus-qml -9  <br>qlcplus-qml --openlast |

|     |
| --- |
| **-f oder --fullscreen**<br><br>**Beschreibung:** Startet die Anwendung im Vollbildmodus<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Weise den Fenstermanager an, den gesamten Bildschirm für QLC+ bereitzustellen:  <br>qlcplus-qml -f  <br>qlcplus-qml --fullscreen |

|     |
| --- |
| **-h oder --help**<br><br>**Beschreibung:** Zeigt die Befehlszeilenhilfe an (nur unter Linux und OS X)<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Zeige die Befehlszeilenhilfe an:  <br>qlcplus-qml -h  <br>qlcplus-qml --help |

|     |
| --- |
| **-3 oder --no3d**<br><br>**Beschreibung:** Deaktiviert den 3D-Vorschau-Subkontext<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Deaktiviert die 3D-Vorschau:  <br>qlcplus-qml -3  <br>qlcplus-qml --no3d |

|     |
| --- |
| **-k oder --kiosk**<br><br>**Beschreibung:** Aktiviert den Kiosk-Modus (nur die [virtuelle Konsole](/virtual-console) ist sichtbar)<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Starten Sie die Anwendung im Kiosk-Modus:  <br>qlcplus -k  <br>qlcplus --kiosk |

|     |
| --- |
| **-l oder --locale**<br><br>**Beschreibung:** Verwendet die angegebene Sprache für die Benutzeroberfläche<br><br>**Parameter:** Sprachcode (derzeit unterstützt: ca\_ES, de\_DE, en\_GB, es\_ES, fr\_FR, it\_IT, ja\_JP, nl\_NL, pl\_PL, ru\_RU, uk\_UA)<br><br>**Beispiele:**  <br>Französische Sprache verwenden:  <br>qlcplus-qml -l fr_FR  <br>qlcplus-qml --locale fr_FR |

|     |
| --- |
| **-m oder --nowm**<br><br>**Beschreibung:** Teilt der Anwendung mit, dass das System keinen Fenstermanager bereitstellt. QLC+ fügt daher einige zusätzliche Steuerelemente zum Schließen der Fenster hinzu.<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Starten Sie QLC+ ohne Fenstermanager:  <br>qlcplus-qml -m  <br>qlcplus-qml --nowm |

|     |
| --- |
| **-v oder --version**<br><br>**Beschreibung:** Zeigt die aktuelle Versionsnummer der Anwendung an<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>qlcplus-qml -v  <br>qlcplus-qml --version |

|     |
| --- |
| **-w oder --web**<br><br>**Beschreibung:** Aktiviert den Remote-Webzugriff auf Port `9999`<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>qlcplus-qml -w  <br>qlcplus-qml --web |

|     |
| --- |
| **-wp oder --web-port**<br><br>**Beschreibung:** Verwendet einen bestimmten Port für den Remote-Webzugriff<br><br>**Parameter:** Portnummer<br><br>**Beispiele:**  <br>qlcplus-qml -wp 12345  <br>qlcplus-qml --web-port 12345 |

|     |
| --- |
| **-wa oder --web-auth**<br><br>**Beschreibung:** Aktiviert die Benutzerauthentifizierung für den Remote-Webzugriff<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>qlcplus-qml -wa  <br>qlcplus-qml --web-auth |

|     |
| --- |
| **-a oder --web-auth-file**<br><br>**Beschreibung:** Spezifiziert die Datei, in der die Anmeldedaten für die Benutzerauthentifizierung beim Webzugriff gespeichert werden sollen<br><br>**Parameter:** Dateiname<br><br>**Beispiele:**  <br>qlcplus-qml -wa qlcplus_password  <br>qlcplus-qml --web-auth-file qlcplus_password |

|     |
| --- |
| **-d oder --debug**<br><br>**Beschreibung:** Aktiviert den Debug-Modus und legt optional die Ausgabestufe fest. Beachten Sie, dass Debug-Meldungen der Stufe DEBUG (0) in offiziell veröffentlichten QLC+-Binärdateien nicht enthalten sind.<br><br>**Parameter:** Stufe (siehe [QtMsgType](https://doc.qt.io/qt-6/qtlogging.html#QtMsgType-enum))<br><br>**Beispiele:**  <br>Debug-Modus aktivieren und Debug-Stufe auf 0 setzen:  <br>qlcplus-qml -d  <br>qlcplus-qml --debug  <br>  <br>Debug-Modus aktivieren und Debug-Stufe auf 3 setzen:  <br>qlcplus-qml -d 3 |

|     |
| --- |
| **-g oder --log**<br><br>**Beschreibung:** Debug-Meldungen in eine Datei protokollieren (`$HOME/QLC+.log`)<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Debug-Meldungen aktivieren und im Protokoll speichern  <br>qlcplus -d 0 -g  <br>qlcplus --debug 0 --log |
