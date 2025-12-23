---
title: 'Virtuelle Konsole'
date: '14:21 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Kapitel 7

# Virtuelle Konsole

Der Zweck der virtuellen Konsole besteht darin, als leere Leinwand zu fungieren, auf der der Benutzer ein Lichtpult-Layout seiner Wahl erstellen kann. Benutzer können verschiedene GUI-Elemente (Graphical User Interface), sogenannte Widgets, auf der Konsolenoberfläche platzieren:

* Tasten zum Starten und Stoppen von Funktionen
* Schieberegler zum Anpassen von Kanalwerten oder Funktionsintensität
* Geschwindigkeitsregler zum Anpassen der Funktionsgeschwindigkeit
* XY-Pads zum manuellen Bewegen intelligenter Lichtstrahlen
* Cue-Listen für Theateraufführungszwecke
* Frames zum Gruppieren verschiedener Widgets
* Solo-Frames, um jeweils nur eine Taste/Funktion aktiv zu halten
* Beschriftungen, die als statische Informationsbanner für andere Widgets dienen

Der oberste Teil der virtuellen Konsole ist einer Symbolleiste gewidmet, die schnellen Zugriff auf die häufigsten Aktionen bietet: Hinzufügen neuer Widgets, Kopieren in die/aus der Zwischenablage, Konfigurieren der Widgets und für den Notfall eine Panikschaltfläche zum Anhalten alle aktuell ausgeführten Funktionen.

Der Stil jedes Widgets der virtuellen Konsole kann (bis zu einem gewissen Grad) konfiguriert werden. Widgets können an eine beliebige Stelle verschoben und auf der Leinwand der virtuellen Konsole auf jede beliebige Größe angepasst werden. Siehe den Artikel über [Styling und Platzierung des Widgets der virtuellen Konsole](styling-and-placement).

### Symbolleisten-Steuerelemente

|     |     |
| --- | --- |
| ![](/basics/button.png) | Fügen Sie eine neue [Schaltfläche](button) zum aktuell ausgewählten Frame hinzu (STRG+UMSCHALT+B) |
| ![](/basics/buttonmatrix.png) | Fügen Sie dem aktuell ausgewählten Frame eine neue [Schaltflächenmatrix](button-matrix) hinzu, indem Sie den entsprechenden Dialog (STRG+UMSCHALT+M) verwenden |
| ![](/basics/slider.png) | Fügen Sie einen neuen [Schieberegler](slider) zum aktuell ausgewählten Rahmen hinzu (STRG+UMSCHALT+S) |
| ![](/basics/slidermatrix.png) | Fügen Sie dem aktuell ausgewählten Frame eine neue [Slider-Matrix](slider-matrix) hinzu (STRG+UMSCHALT+I) |
| ![](/basics/rgbmatrix.png) | Fügen Sie eine neue [Animation](animation) zum aktuell ausgewählten Frame hinzu (STRG+UMSCHALT+R) |
| ![](/basics/knob.png) | Fügen Sie einen neuen [Knopf](slider) zum aktuell ausgewählten Rahmen hinzu. Dies ist eine praktische Verknüpfung zum Hinzufügen eines Schieberegler-Widgets im Knopfstil (STRG+UMSCHALT+K) |
| ![](/basics/speed.png) | Fügen Sie eine neue [Kurzwahl](speed-dial) zum aktuell ausgewählten Frame hinzu (STRG+UMSCHALT+D) |
| ![](/basics/xypad.png) | Fügen Sie dem aktuell ausgewählten Frame ein neues [XY-Pad](xy-pad) hinzu (STRG+UMSCHALT+X) |
| ![](/basics/cuelist.png) | Fügen Sie eine neue [Cue-Liste](cue-list) zum aktuell ausgewählten Frame hinzu (STRG+UMSCHALT+C) |
| ![](/basics/frame.png) | Fügen Sie einen neuen [Frame](frame) zum aktuell ausgewählten Frame hinzu (STRG+UMSCHALT+F) |
| ![](/basics/soloframe.png) | Fügen Sie einen neuen [Solo-Frame](solo-frame) zum aktuell ausgewählten Frame hinzu (STRG+UMSCHALT+O) |
| ![](/basics/label.png) | Fügen Sie dem aktuell ausgewählten Frame ein neues [Label](label) hinzu (STRG+UMSCHALT+L) |
| ![](/basics/audioinput.png) | Fügen Sie dem aktuell ausgewählten Frame ein neues Widget [Audio-Trigger](audio-triggers) hinzu (STRG+UMSCHALT+A) |
| ![](/basics/clock.png) | Fügen Sie dem aktuell ausgewählten Frame ein neues Uhr-Widget hinzu (STRG+UMSCHALT+T). Dieses Widget kann für drei Zwecke verwendet werden: Systemuhr, Stoppuhr und Countdown.  <br>In den letzten beiden Fällen und wenn sich QLC+ im Betriebsmodus befindet, wird der Zähler durch Klicken mit der linken Maustaste angehalten, während durch Klicken mit der rechten Maustaste der Zähler auf den Anfangswert zurückgesetzt wird.  <br>Im Systemuhrmodus ist es möglich, den Start einer QLC+-Funktion während der Tageszeit zu planen. |
| ![](/basics/editcut.png) | Schneiden Sie die aktuell ausgewählten Widgets in die Zwischenablage aus. Beachten Sie, dass die Widgets nur verschwinden, wenn sie an der neuen Position eingefügt werden (STRG+X) |
| ![](/basics/editcopy.png) | Kopieren Sie die aktuell ausgewählten Widgets in die Zwischenablage (STRG+C) |
| ![](/basics/editpaste.png) | Widget(s) aus der Zwischenablage in den aktuell ausgewählten Frame einfügen (STRG+V) |
| ![](/basics/editdelete.png) | Zerstöre die aktuell ausgewählten Widgets vollständig. Wenn ein Frame ausgewählt wurde, wird alles darin zerstört, einschließlich anderer Frames (Löschen) |
| ![](/basics/edit.png) | Konfigurieren Sie das aktuell ausgewählte Widget mit einem eigenen Konfigurationsdialog (STRG+E) |
| ![](/basics/editclear.png) | Benennen Sie die aktuell ausgewählten Widgets um. |
| ![](/basics/up.png) | Bringen Sie das ausgewählte Widget in den Vordergrund (UMSCHALT+NACH OBEN) |
| ![](/basics/down.png) | Das ausgewählte Widget nach hinten senden (UMSCHALT+NACH UNTEN) |
| ![](/basics/color.png) | Ändern Sie die Hintergrundfarbe des ausgewählten Widgets (UMSCHALT+B) |
| ![](/basics/image.png) | Legen Sie ein Hintergrundbild für das ausgewählte Widget fest (UMSCHALT+I) |
| ![](/basics/fontcolor.png) | Ändern Sie die Schriftfarbe des ausgewählten Widgets. |
| ![](/basics/fonts.png) | Legen Sie die Schriftarteigenschaften des ausgewählten Widgets fest (UMSCHALT+O) |
| ![](/basics/configure.png) | Konfigurieren Sie die Eigenschaften der virtuellen Konsole, z. B. die Größe des Arbeitsbereichs, die Standardeigenschaften der Widgets und die Eigenschaften des Grand Master-Schiebereglers. |
| ![](/basics/panic.png) | Stoppen Sie alle aktuell ausgeführten Funktionen. |