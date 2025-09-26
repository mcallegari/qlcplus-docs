---
title: 'Szeneneditor'
---

Der Szeneneditor wird, wie der Name schon sagt zum Bearbeiten von ![](/basics/scene.png) [Szene](/basics/glossary-and-concepts#szene)-Funktionen verwendet. Der Editor ist in Registerkarten unterteilt; Mit der ersten Registerkarte **Allgemein** steuern Sie die Liste der Geräte und [Kanalgruppen](/basics/glossary-and-concepts#kanalgruppen), die an der Szenenbearbeitung teilnehmen, zusammen mit dem Szenennamen.  
Alle nachfolgenden Registerkarten werden verwendet, um die einzelnen Kanalwerte für jedes Gerät und, falls welche definiert sind, die Werte der Kanalgruppen zu steuern.

Allgemeine Tab-Steuerelemente
--------------------

Im linken Teil des Bildschirms werden die Schaltflächen zur Steuerung der in der Szene verwendeten Geräte angezeigt.  

|     |     |
| --- | --- |
| **Szenenname** | Ändern Sie den Namen der Szene. |
| ![](/basics/edit_add.png) | Fügen Sie der Szene ein vorhandenes [Fixture](/basics/glossary-and-concepts#fixtures) hinzu. |
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählten [Fixture(s)](/basics/glossary-and-concepts#fixtures) aus der Szene. |
| ![](/basics/check.png) | Aktivieren Sie alle Kanäle der ausgewählten Geräte. |
| ![](/basics/uncheck.png) | Deaktivieren Sie alle Kanäle der ausgewählten Geräte. |

Im rechten Teil des Bildschirms werden die Schaltflächen zur Steuerung der in der Szene verwendeten [Kanalgruppen](/basics/glossary-and-concepts#kanalgruppen) angezeigt

|     |     |
| --- | --- |
| ![](/basics/check.png) | Aktivieren Sie alle ausgewählten Kanalgruppen. |
| ![](/basics/uncheck.png) | Deaktivieren Sie alle ausgewählten Kanalgruppen. |


**Hinweis:** Es ist nützlich zu wissen, dass beim Aktivieren/Deaktivieren einer Kanalgruppe die von der Gruppe gesteuerten Geräte automatisch zum linken Bereich hinzugefügt werden. Die von der Gruppe gesteuerten Kanäle werden bei jedem Gerät automatisch aktiviert/deaktiviert.

Registerkarten für Kanalgruppen
-------------------

Diese Registerkarte wird nur angezeigt, wenn in der Registerkarte „Allgemein“ eine oder mehrere Kanalgruppen ausgewählt sind.  
Jede Kanalgruppe wird mit einer Schnellzugriffstaste für Makros ([Click And Go](/basics/glossary-and-concepts#click-and-go) falls unterstützt), einer Beschriftung mit dem Gruppenwert, einem Fader und dem Namen der Gruppe angezeigt.

Fixture-Registerkarten
------------

Jedes Gerät wird durch eine eigene Registerkarte dargestellt, die Schieberegler für jeden Kanal des Geräts enthält. Jeder Kanal kann mit einem Kontrollkästchen oben in der Kanaleinheit aktiviert oder deaktiviert werden. Der Wert jedes Kanals kann entweder durch Eingabe des Werts in das Bearbeitungsfeld oben auf dem Schieberegler oder durch Bewegen des Schiebereglers festgelegt werden. Kanäle, die mehrere Funktionen wie Gobos, Farben usw. bereitstellen, verfügen außerdem über eine Schaltfläche über dem Kanalschieberegler. Mit dieser Schaltfläche können Sie direkt eine bestimmte Funktion oder Fähigkeit auswählen, die von diesem Kanal bereitgestellt wird.  
**Hinweis**: Die Tastenkombination zum Wechseln zwischen den Bearbeitungsfeldern für Kanalwerte lautet „**Tabulatortaste**“, um nach rechts zu wechseln, und „**Umschalttaste + Tabulatortaste**“, um nach links zu wechseln.

### Status des Kanals aktiviert/deaktiviert

Wenn ein Kanal nicht aktiviert wurde, berührt die Szene nie den Wert dieses bestimmten Kanals.

Wenn ein Kanal aktiviert wurde, ändert die Szene den Wert dieses Kanals auf den in der Szene definierten Wert. Dies ist beispielsweise nützlich, wenn Sie nur den Dimmerkanal eines Scannergeräts steuern möchten. Sie möchten nicht, dass die Szene die Schwenk-, Neigungs-, Farb- oder Gobokanäle des Scanners berührt, wenn Sie nur ein- oder ausblenden möchten mit dem Dimmerkanal.

### Kontrollen

|     |     |
| --- | --- |
| ![](/basics/check.png) | Aktivieren Sie alle Kanäle des aktuellen Geräts. Wählen Sie im Modus „Alle Kanäle“ Kanäle für alle Geräte aus. |
| ![](/basics/uncheck.png) | Deaktivieren Sie alle Kanäle des aktuellen Geräts. Deaktivieren Sie im Modus „Alle Kanäle“ die Kanäle für alle Geräte. |
| ![](/basics/back.png) | Gehen Sie zur vorherigen Registerkarte in der Ansicht. Wenn die erste Registerkarte ausgewählt ist, gelangen Sie zur letzten Registerkarte in der Ansicht. Tastaturkürzel: '**ALT+Links**' |
| ![](/basics/forward.png) | Gehen Sie zur nächsten Registerkarte in der Ansicht. Wenn die letzte Registerkarte ausgewählt ist, gelangen Sie zur ersten Registerkarte in der Ansicht. Tastaturkürzel: „**ALT+Rechts**“ |
| ![](/basics/editcopy.png) | Die Kopierfunktion hat zwei Modi: <br><br>**Kopieren Sie die Werte** (und aktivierten/deaktivierten Zustände) aller Kanäle im aktuellen Gerät in die Zwischenablage.<br>**Kopieren Sie nur die ausgewählten Kanäle** (Strg-geklickt, gelber Hintergrund) Werte in die Zwischenablage. |
| ![](/basics/editpaste.png) | Fügen Sie die Werte aus der Zwischenablage in das aktuelle Gerät ein. Wenn beim „Kopieren“ keine Kanäle ausgewählt wurden, werden alle aktivierten/deaktivierten Zustände zusammen mit den Kanalwerten eingefügt. |
| ![](/basics/editcopyall.png) | Die Funktion „Alle kopieren“ verfügt über zwei Modi:<br><br>**Alle Werte** (und aktivierten/deaktivierten Zustände) aller Kanäle auf alle anderen an der Szene beteiligten Geräte kopieren.<br>**Nur kopieren Die Werte der ausgewählten Kanäle** (Strg-geklickt, gelber Hintergrund) werden an alle anderen Geräte übertragen, die an der Szene beteiligt sind. |
| ![](/basics/color.png) | Starten Sie ein Farbtool, um eine bestimmte Farbe auszuwählen und diese Farbe auf das aktuelle Gerät festzulegen. Diese Funktion ist nur für Geräte aktiviert, die eine CMY/RGB-Farbmischung unterstützen. |
| ![](/basics/xypad.png) | Starten Sie ein Positionstool (ähnlich wie [XYPad](/virtual-console/xy-pad) in der virtuellen Konsole), um eine Kopf-/Spiegelposition für das aktuelle Gerät auszuwählen. Diese Funktion ist nur für Geräte aktiviert, die entweder über Schwenk- oder Neigungskanäle verfügen. Alle Köpfe des aktuellen Geräts werden auf denselben Wert geändert. |
| ![](/basics/speed.png) | Ein-/Ausblenden des Kurzwahl-Widgets, das zum Anpassen der Szenenparameter wie Einblenden und Ausblenden verwendet wird |
| ![](/basics/tabview.png) | Wechseln Sie zwischen „Tab-Ansicht“ und „Alle Kanäle anzeigen“. Im ersten Modus wird eine Registerkarte für jedes Gerät angezeigt, während im zweiten Modus eine einzelne Registerkarte für alle Geräte angezeigt wird |
| ![](/basics/blind.png) | Schalten Sie den Blindmodus für das ausgewählte Gerät um. |
| ![](/basics/record.png) | Klonen Sie die aktuelle Szene und fügen Sie dem in der Dropdown-Liste neben dieser Schaltfläche ausgewählten Chaser einen neuen Schritt hinzu |