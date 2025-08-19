---
title: 'Video-Editor'
date: '04:33 22-08-2023'
---

Der Video-Editor wird, wie der Name schon sagt, zum Bearbeiten von ![](/basics/video.png) [Video](/basics/glossary-and-concepts#video)-Funktionen verwendet.

Steuerungen
--------

|     |     |
| --- | --- |
| ![](/basics/player_play.png) | Starten/Stoppen Sie die Videowiedergabe. Wenn die Datei nicht existiert oder eine ungültige URL eingegeben wurde, hat diese Schaltfläche keine Auswirkung |
| **Videoname** | Ändern Sie den Namen der Videofunktion. Standardmäßig ist dies mit dem Dateinamen festgelegt, bis dieser manuell geändert wird. |
| **Dateiname** | Wenn die angehängte Datei lokal ist, wird der absolute Pfad der Videodatei angezeigt. Eine lokale Quelldatei kann durch Klicken auf die Schaltfläche „…“ auf der rechten Seite geändert werden.  <br>Es ist auch möglich, ein Video aus dem Netzwerk zu streamen. Klicken Sie einfach auf die Schaltfläche ![](/basics/global.png) und geben Sie eine gültige HTTP-URL ein. |
| **Dauer** | Zeigt die Dauer der Videodatei auf die typische QLC+-Art an. Zum Beispiel: 04m14s.22. |
| **Auflösung** | Zeigt die in der angehängten Videodatei erkannte Auflösung in Pixel an.  <br>**Hinweis**: Da QLC+ zum Abspielen von Videoquellen auf die [Qt-Bibliotheken](https://www.qt.io/) angewiesen ist, gibt es ein bekanntes Problem, bei dem Qt die Größe nicht erkennen kann (und Codecs) von Videos unter Windows und Mac OSX.  <br>Grundsätzlich wird eine Größe von „0x0“ angezeigt. Die Vollbild-Videowiedergabe ist jedoch in Ordnung.  <br>Bei einem Erkennungsfehler wird intern eine Standardgröße von 640 x 480 Pixeln festgelegt, damit der Fenstermodus funktioniert.  <br>Hoffentlich wird dies in Zukunft vom Qt-Team behoben. |
| **Video-Codec** | Zeigt den Codec an, der zum Komprimieren des Videostreams in die angehängte Videodatei verwendet wird. |
| **Audio-Codec** | Zeigt den Codec an, der zum Komprimieren des Audiostreams in die angehängte Videodatei verwendet wird. |
| **Bildschirm** | Ermöglicht die Auswahl des Ausgabebildschirms, auf dem das Video wiedergegeben werden soll. Normalerweise wird nur eine Auswahl angezeigt, es sei denn, mehrere Videoausgänge (Monitore, Projektoren) sind an das System angeschlossen |
| **Videoausgabe** | Ermöglicht die Auswahl, wie das angehängte Video angezeigt werden soll. Mögliche Optionen sind<br><br>**Fenster**: Ein Fenster mit der Originalgröße des Videos wird auf dem ausgewählten Ausgabebildschirm angezeigt.<br>**Vollbild**: Das Video nutzt die gesamte Bildschirmgröße , ohne jegliche Fensterdekoration (Titelleiste usw.) anzuzeigen |
| **Wiedergabemodus** | Ermöglicht die Auswahl, wie das angehängte Video abgespielt werden soll. Mögliche Optionen sind<br><br>**Einzelaufnahme**: Das Video wird nur einmal abgespielt<br>**Loop**: Die Videowiedergabe wird am Ende erneut von Anfang an gestartet. Der Loop-Modus wird auf unbestimmte Zeit fortgesetzt, bis die Videofunktion gestoppt wird. |