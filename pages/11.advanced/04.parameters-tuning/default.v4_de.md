---
title: 'Parameteroptimierung'
date: '11:41 22-08-2023'
---

In diesem Abschnitt wird erläutert, wie Sie einige QLC+-Parameter, die über die Benutzeroberfläche nicht verfügbar sind, manuell abrufen und anpassen können.  
Denken Sie daran, dass es einen guten Grund dafür gibt, wenn Sie sie nicht über die Benutzeroberfläche ändern können.

> **Warnung: Bearbeiten Sie die Konfigurationsdateien NICHT manuell, es sei denn, Sie wissen, was Sie tun. Jede falsch platzierte Änderung kann zu Programmabstürzen oder unangenehmer Instabilität führen.**


## QLC+-Konfigurationsspeicherort
<hr>

Linux
-----

Die Konfigurationsdateien befinden sich im $HOME-Verzeichnis Ihres Benutzers im Ordner .config/qlcplus.  
Hier ist der Schnellbefehl, um von einem Terminal aus darauf zuzugreifen:  
`cd $HOME/.config/qlcplus`  
Sie finden sowohl QLC+- als auch Fixture-Editor-Konfigurationsdateien.

Windows
-------

Konfigurationsparameter werden in der Windows-Registrierung gespeichert.  
Um darauf zuzugreifen, führen Sie das Tool „regedit“ aus und suchen Sie nach dem Schlüssel mit dem Namen „qlcplus“.  
Der Schlüssel, in dem die Benutzerkonfiguration gespeichert wird, liegt unter `Computer\HKEY_CURRENT_USER\Software\qlcplus\`.

macOS
-------

Konfigurationsdateien befinden sich im $HOME-Verzeichnis Ihres Benutzers im Ordner „Library/Preferences“, der von macOS standardmäßig ausgeblendet ist.  
Hier ist der Schnellbefehl, um von einem Terminal aus darauf zuzugreifen:  
`cd $HOME/Library/Preferences`  
Die QLC+-Konfigurationsdatei heißt `net.sf.Q Light Controller Plus.plist`, während die Konfigurationsdatei des Fixture-Editors `net.sf.Fixture Definition Editor.plist` heißt.  

**Bitte beachten Sie, dass die Einstellungen zwischengespeichert werden!**  
Grundsätzlich lädt macOS beim Booten alle Plist-Dateien im Speicher, und wenn Sie sie manuell ändern, werden die Änderungen ignoriert. Schlimmer noch: Die Dateien werden regelmäßig aktualisiert, sodass Ihre Änderungen überschrieben werden.  
Die Lösung besteht darin, nach dem Ändern einer .plist-Datei ein Terminal zu öffnen und Folgendes einzugeben:  
`killall -u IhrBenutzername cfprefsd`  
Dabei ist `IhrBenutzername` der Name des Benutzers, den Sie für den Zugriff auf Ihren Mac verwenden. Der Befehl zwingt macOS dazu, die Einstellungen einschließlich Ihrer Änderungen neu zu laden.

## Konfiguration zurücksetzen
<hr>

Manchmal kann es notwendig sein, die QLC+-Konfiguration zurückzusetzen und QLC+ in den Zustand „Werkseinstellungen“ zu versetzen.  
Suchen Sie dazu die Konfiguration wie im ersten Absatz beschrieben und gehen Sie dann wie folgt vor:

* Unter Linux und OSX verwenden Sie den Befehl `rm 'dateiname'`, um die Konfigurationsdatei zu löschen.
* Unter Windows löschen Sie den gesamten „qlcplus“-Schlüssel mit „regedit“.

## Parametersyntax
<hr>

Aufgrund der Qt-Unterschiede auf verschiedenen Plattformen werden Parameter je nach Betriebssystem auf unterschiedliche Weise gespeichert.

Linux
-----

Parameter werden in einer Nur-Text-Datei gespeichert, die Sie mit einem Nur-Text-Editor wie gedit, kwrite, kate, nano, vim oder ähnlichem ändern können. Sie stellen sich wie folgt dar:

    [Kategorie]
    Name=Wert

Windows
-------

Parameter werden in der Windows-Registrierung gespeichert und können mit dem in jeder Windows-Version enthaltenen Tool regedit geändert werden. Sie stellen sich wie folgt dar:

    „Kategorie“ wird als Ordner angezeigt
    „Parameter“ ist in „Kategorie“ enthalten und wird als Schlüssel dargestellt. Höchstwahrscheinlich sind alle QLC+-Tasten vom Typ Integer.
    „Wert“ ist der tatsächliche Wert von „Parameter“

Mac OSX
-------

Parameter werden in einer Nur-Text-Datei gespeichert, die Sie mit einem Nur-Text-Editor wie [TextWrangler](https://www.barebones.com/products/textwrangler/) oder ähnlichem ändern können. Sie stellen sich wie folgt dar:

    <key>category.name</key>
    <string>Wert</string>
    oder
    <integer>42</integer>

## Parameterliste
<hr>

Höchstwahrscheinlich werden Sie die folgenden Parameter in einer Standard-QLC+-Konfiguration nicht finden. Um sie wirksam zu machen, müssen Sie sie am Ende Ihrer Konfigurationsdatei **hinzufügen**.

### 1. Einfache Oberfläche

**Kategorie:** `simpledesk`<br>
**Name:** `channelsperpage`<br>
**Typ:** Ganzzahl<br>
**Beschreibung:** Legen Sie die Anzahl der pro Seite angezeigten DMX-Kanal-Schieberegler fest<br>
**Standard:** 32<br>
<br>
**Kategorie:** `simpledesk`<br>
**Name:** `playbacksperpage`<br>
**Typ:** Ganzzahl<br>
**Beschreibung:** Legen Sie die Anzahl der pro Seite angezeigten Wiedergabeschieberegler fest<br>
**Standard:** 15<br>

### 2. DMX USB Enttec Open Kanalanzahl

**Kategorie:** `enttecdmxusbopen`<br>
**Name:** `channels`<br>
**Typ:** Ganzzahl<br>
**Beschreibung:** Legen Sie die maximale Anzahl der DMX-Kanäle fest, die von Enttec Open-Geräten (und ähnlichen Geräten) übertragen werden.<br>
In einigen Fällen könnten dadurch Flackerprobleme behoben werden. Versuchen Sie es zum Beispiel mit 256.<br>
**Standard:** 512<br>

### 3. uDMX-Frequenz

**Kategorie:** `udmx`<br>
**Name:** `frequency`<br>
**Typ:** Ganzzahl<br>
**Beschreibung:** Stellen Sie die DMX-Frame-Frequenz in Hertz für uDMX-Geräte ein<br>
**Standard:** 30<br>

### 4. uDMX-Kanalnummer

**Kategorie:** `udmx`<br>
**Name:** `channels`<br>
**Typ:** Ganzzahl<br>
**Beschreibung:** Legen Sie die maximale Anzahl der von uDMX-Geräten übertragenen DMX-Kanäle fest.<br>
In einigen Fällen könnten dadurch Flackerprobleme behoben werden. Versuchen Sie es beispielsweise mit 128.<br>
**Standard:** 512<br>

### 5. Master-Timer-Frequenz

**Kategorie:** `mastertimer`<br>
**Name:** `frequency`<br>
**Typ:** Ganzzahl<br>
**Beschreibung:** Stellen Sie die QLC+-Core-Timer-Frequenz in Hertz ein<br>
**Standard:** 50<br>