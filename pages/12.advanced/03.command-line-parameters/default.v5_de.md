---
title: 'Kommandozeilenparameter'
date: '08:19 22-08-2023'
---

QLC+ unterstützt eine Reihe von Kommandozeilenparametern, um beim Start
einige Funktionen zu automatisieren/erweitern.
Die Verwendung von Kommandozeilenparametern kann je nach verwendetem
Betriebssystem unterschiedlich schwierig sein:

**Linux**: Öffnen Sie einfach ein Terminal und geben Sie `qlcplus-qml` gefolgt
von den benötigten Parametern ein<br>
**Windows**: Erstellen Sie eine Verknüpfung von qlcplus-qml.exe (normalerweise
unter C:\\QLC+) auf Ihrem Desktop. Klicken Sie mit der rechten Maustaste auf
die Verknüpfung und wählen Sie „Eigenschaften“. Im Feld „Ziel“ sehen Sie etwas
wie `C:\\QLC+\\qlcplus-qml.exe`. Dort können Sie Kommandozeilenparameter
hinzufügen. Klicken Sie anschließend auf OK.<br>
Um zum Beispiel die deutsche Sprache beim Start zu erzwingen, ändern Sie Ihre
Verknüpfungs-Befehlszeile wie folgt:

![](../command-line-v5.png)

**OSX**: Dies ist der schwierigste Fall, da QLC+ unter OSX in einem
DMG-Paket gebündelt ist. Sie müssen ein Terminal öffnen und mit „cd“ in das
QLC+-DMG wechseln:<br>`cd QLC+.app\\Contents\\MacOS`<br>
Geben Sie anschließend `./qlcplus-qml` gefolgt von den benötigten Parametern
ein.

|     |
| --- |
| **-o oder --open**<br><br>**Beschreibung:** Öffnet die angegebene Arbeitsbereichsdatei<br><br>**Parameter:** Dateiname<br><br>**Beispiele:**  <br>sample.qxw öffnen:  <br>qlcplus-qml -o sample.qxw  <br>qlcplus-qml --open sample.qxw |

|     |
| --- |
| **-9 oder --openlast**<br><br>**Beschreibung:** Öffnet die Projektdatei der letzten Sitzung<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Die zuletzt geöffnete Datei öffnen:  <br>qlcplus-qml -9  <br>qlcplus-qml --openlast |

|     |
| --- |
| **-f oder --fullscreen**<br><br>**Beschreibung:** Startet die Anwendung im Vollbildmodus<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Den Fenstermanager anweisen, QLC+ den gesamten Bildschirmbereich zuzuweisen:  <br>qlcplus-qml -f  <br>qlcplus-qml --fullscreen |

|     |
| --- |
| **-h oder --help**<br><br>**Beschreibung:** Zeigt die Kommandozeilenhilfe an (nur unter Linux und macOS)<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Kommandozeilenhilfe anzeigen:  <br>qlcplus-qml -h  <br>qlcplus-qml --help |

|     |
| --- |
| **-3 oder --no3d**<br><br>**Beschreibung:** Deaktiviert den 3D-Vorschau-Unterkontext<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>3D-Vorschau deaktivieren:  <br>qlcplus-qml -3  <br>qlcplus-qml --no3d |

|     |
| --- |
| **-k oder --kiosk**<br><br>**Beschreibung:** Aktiviert den Kiosk-Modus (nur die [virtuelle Konsole](/virtual-console) ist sichtbar)<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Die Anwendung im Kiosk-Modus starten:  <br>qlcplus -k  <br>qlcplus --kiosk |

|     |
| --- |
| **-l oder --locale**<br><br>**Beschreibung:** Verwendet die angegebene Sprache für die Übersetzung<br><br>**Parameter:** Sprachcode (derzeit unterstützt: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Beispiele:**  <br>Finnische Sprache verwenden:  <br>qlcplus-qml -l fi_FI  <br>qlcplus-qml --locale fi_FI |

|     |
| --- |
| **-m oder --nowm**<br><br>**Beschreibung:** Informiert die Anwendung darüber, dass das System keinen Fenstermanager bereitstellt. QLC+ fügt daher einige zusätzliche Steuerelemente zum Schließen der Fenster hinzu.<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>QLC+ ohne Fenstermanager starten:  <br>qlcplus-qml -m  <br>qlcplus-qml --nowm |

|     |
| --- |
| **-v oder --version**<br><br>**Beschreibung:** Zeigt die aktuelle Versionsnummer der Anwendung an<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>qlcplus-qml -v  <br>qlcplus-qml --version |

|     |
| --- |
| **-w oder --web**<br><br>**Beschreibung:** Aktiviert den Remote-Webzugriff auf Port 9999<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>qlcplus-qml -w  <br>qlcplus-qml --web |

|     |
| --- |
| **-wp oder --web-port**<br><br>**Beschreibung:** Verwendet einen bestimmten Port für den Webzugriff<br><br>**Parameter:** Portnummer<br><br>**Beispiele:**  <br>qlcplus-qml -wp 12345  <br>qlcplus-qml --web-port 12345 |

|     |
| --- |
| **-wa oder --web-auth**<br><br>**Beschreibung:** Aktiviert den Remote-Webzugriff mit Benutzerauthentifizierung<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>qlcplus-qml -wa  <br>qlcplus-qml --web-auth |

|     |
| --- |
| **-a oder --web-auth-file**<br><br>**Beschreibung:** Gibt eine Datei an, in der die Basisauthentifizierungs-Anmeldedaten für den Webzugriff gespeichert werden<br><br>**Parameter:** Dateiname<br><br>**Beispiele:**  <br>qlcplus-qml -wa qlcplus_password  <br>qlcplus-qml --web-auth-file qlcplus_password |

|     |
| --- |
| **-d oder --debug**<br><br>**Beschreibung:** Aktiviert den Debug-Modus. Beachten Sie, dass Debug-Meldungen nicht in veröffentlichten Binärdateien enthalten sind.<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Debug-Modus aktivieren:  <br>qlcplus-qml -d  <br>qlcplus-qml --debug  <br>  |

|     |
| --- |
| **-g oder --log**<br><br>**Beschreibung:** Protokolliert Debug-Meldungen in einer Datei (`$HOME/QLC+.log`)<br><br>**Parameter:** Keine<br><br>**Beispiele:**  <br>Debug-Meldungen aktivieren und im Protokoll speichern  <br>qlcplus -d -g  <br>qlcplus --debug --log |
