---
title: 'Befehlszeilenparameter'
date: '08:19 22-08-2023'
---

QLC+ unterstützt eine Reihe von Befehlszeilenparametern, um einige Funktionalitäten beim Start zu automatisieren/erweitern.  
Die Verwendung von Befehlszeilenparametern kann je nach verwendetem Betriebssystem schwierig sein:

**Linux**: Öffnen Sie einfach ein Terminal und geben Sie „qlcplus“ gefolgt von den benötigten Parametern ein<br>
**Windows**: Erstellen Sie eine Verknüpfung von qlcplus.exe (normalerweise unter C:\\QLC+) auf Ihrem Desktop. Klicken Sie mit der rechten Maustaste auf die Verknüpfung und wählen Sie „Eigenschaften“. Im Feld „Ziel“ sehen Sie etwas wie „C:\\QLC+\\qlcplus.exe“. Dort können Sie Befehlszeilenparameter hinzufügen. Wenn Sie fertig sind, klicken Sie auf OK.<br>
Um zum Beispiel die deutsche Sprache beim Start zu erzwingen, ändern Sie Ihre Shortcut-Befehlszeile wie folgt:

![](../command-line.png)

**OSX**: Dies ist der schwierigste Fall, da QLC+ unter OSX in einem DMG-Paket gebündelt ist. Sie müssen ein Terminal öffnen und wie folgt in die QLC+ DMG „cd“ eingeben: „cd QLC+.app\\Contents\\MacOS“<br>
Wenn Sie fertig sind, geben Sie „qlcplus“ gefolgt von den benötigten Parametern ein

  

|     |
| --- |
| **-c oder --closebutton**<br><br>**Beschreibung:** Definieren Sie eine Position für eine Schaltfläche zum Schließen in der virtuellen Konsole. Mit der Schaltfläche kann QLC+ geschlossen werden. Hat nur eine Auswirkung im Kioskmodus (siehe -k) und ist am nützlichsten im Vollbildmodus ohne Fenstermanager.<br><br>**Parameter:** x,y,w,h<br><br> **Beispiele:** <br>Erstellen Sie eine Schaltfläche bei (x400, y500), deren Größe (w70, h50) ist: <br>qlcplus -c 400,500,70,50 <br>qlcplus --closebutton 400,500,70,50 |

|     |
| --- |
| **-d oder --debug**<br><br>**Beschreibung:** Aktivieren Sie den Debug-Modus und legen Sie optional den Ausgabepegel fest. Beachten Sie, dass seit 4.8.0 Meldungen für Level DEBUG (0) nicht in veröffentlichten Binärdateien enthalten sind.<br><br>**Parameter:** Level (siehe [QtMsgType](https://doc.qt.io/archives/qt-5.15/qtglobal.html#QtMsgType-enum))<br><br>**Beispiele:** <br>Debug-Modus aktivieren und Debug-Level auf 0 setzen: <br>qlcplus -d <br>qlcplus --debug <br> <br>Debug-Modus aktivieren und Debug-Level auf 3 setzen: <br>qlcplus -d 3 |

|     |
| --- |
| **-f oder --fullscreen**<br><br>**Beschreibung:** Starten Sie die Anwendung im Vollbildmodus<br><br>**Parameter:** Methode (entweder „normal“ oder „Größe ändern“ )<br><br>**Beispiele:** <br>Sagen Sie dem Fenstermanager, dass er QLC+ den gesamten Bildschirmbereich zuweisen soll: <br>qlcplus -f <br>qlcplus --fullscreen <br>qlcplus -f normal < br>qlcplus --fullscreen normal <br> <br>Ändern Sie die Größe von QLC+, um den gesamten Bildschirmbereich einzunehmen (nützlich in benutzerdefinierten X11-Sitzungen ohne Fenstermanager): <br>qlcplus -f resize <br>qlcplus --fullscreen resize |

|     |
| --- |
| **-g oder --log**<br><br>**Beschreibung:** Debug-Meldungen in einer Datei protokollieren (`$HOME/QLC+.log`)<br><br>**Parameter:** Keine<br><br>**Beispiele:** <br>Debug-Meldungen aktivieren und im Protokoll speichern <br>qlcplus -d 0 -g <br>qlcplus --debug 0 --log |

|     |
| --- |
| **-h oder --help**<br><br>**Beschreibung:** Befehlszeilenhilfe anzeigen (nur in Linux und OS X)<br><br>**Parameter:** Keine<br ><br>**Beispiele:** <br>Befehlszeilenhilfe anzeigen: <br>qlcplus -h <br>qlcplus --help |

|     |
| --- |
| **-k oder --kiosk**<br><br>**Beschreibung:** Kioskmodus aktivieren (nur [virtuelle Konsole](/virtual-console) ist sichtbar und die Anwendung ist im [Betriebsmodus] gesperrt. (/basics/glossary-and-concepts#modes))<br><br>**Parameter:** Keine<br><br>**Beispiele:** <br>Starten Sie die Anwendung im Kioskmodus: <br >qlcplus -k <br>qlcplus --kiosk |

|     |
| --- |
| **-l oder --locale**<br><br>**Beschreibung:** Verwenden Sie die angegebene Sprache für die Übersetzung<br><br>**Parameter:** Sprachcode (derzeit unterstützt: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Beispiele:** <br>Verwenden Sie die finnische Sprache: <br>qlcplus -l fi_FI <br>qlcplus --locale fi_FI |

|     |
| --- |
| **-m oder --nowm**<br><br>**Beschreibung:** Informieren Sie die Anwendung darüber, dass das System keinen Fenstermanager bereitstellt. QLC+ fügt daher einige zusätzliche Steuerelemente zum Schließen der Fenster hinzu.<br><br>**Parameter:** Keine<br><br>**Beispiele:** <br>Starten Sie QLC+ ohne Fenstermanager: <br> qlcplus -m <br>qlcplus --nowm |

|     |
| --- |
| **-n oder --nogui**<br><br>**Beschreibung:** Starten Sie die Anwendung mit ausgeblendeter GUI (nur Raspberry Pi)<br><br>**Parameter:** Keine<br><br >**Beispiele:** <br>Starten Sie QLC+ ohne sichtbare GUI: <br>qlcplus -n <br>qlcplus --nogui |

|     |
| --- |
| **-o oder --open**<br><br>**Beschreibung:** Öffnet die angegebene Arbeitsbereichsdatei<br><br>**Parameter:** Dateiname<br><br>**Beispiele :** <br>Öffnen Sie sample.qxw: <br>qlcplus -o sample.qxw <br>qlcplus --open sample.qxw |

|     |
| --- |
| **-p oder --operate**<br><br>**Beschreibung:** Starten Sie die Anwendung im Modus [Operate](/basics/glossary-and-concepts#modes).<br><br>* *Parameter:** Keine<br><br>**Beispiele:** <br>Starten Sie QLC+ im Betriebsmodus: <br>qlcplus -p <br>qlcplus --operate |

|     |
| --- |
| **-v oder --version**<br><br>**Beschreibung:** Zeigt die aktuelle Anwendungsversionsnummer an<br><br>**Parameter:** Keine<br><br>**Beispiele :** <br>qlcplus -v <br>qlcplus --version |

|     |
| --- |
| **-w oder --web**<br><br>**Beschreibung:** Remote-Webzugriff auf Port 9999 aktivieren<br><br>**Parameter:** Keine<br><br>** Beispiele:** <br>qlcplus -w <br>qlcplus --web |

|     |
| --- |
| **-wp oder --web-port**<br><br>**Beschreibung:** Einen bestimmten Port für den Webzugriff verwenden<br><br>**Parameter:** Portnummer<br><br >**Beispiele:** <br>qlcplus -wp 12345 <br>qlcplus --web-port 12345 |

|     |
| --- |
| **-wa oder --web-auth**<br><br>**Beschreibung:** Remote-Webzugriff mit Benutzerauthentifizierung aktivieren<br><br>**Parameter:** Keine<br><br> **Beispiele:** <br>qlcplus -wa <br>qlcplus --web-auth |

|     |
| --- |
| **-a oder --web-auth-file**<br><br>**Beschreibung:** Geben Sie eine Datei an, in der die Anmeldeinformationen für die Standardauthentifizierung für den Webzugriff gespeichert werden sollen<br><br>**Parameter:** Datei Name<br><br>**Beispiele:** <br>qlcplus -wa qlcplus_password <br>qlcplus --web-auth-file qlcplus_password |