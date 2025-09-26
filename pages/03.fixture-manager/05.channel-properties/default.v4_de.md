---
title: 'Kanaleigenschaften'
date: '11:32 21-08-2023'
media_order: channel_modifier.png
---

Dieses Fenster zeigt einen Baum mit Elementen an, die in einer Universes/Fixtures/Channels-Struktur verschachtelt sind.  
Auf der rechten Seite des Kanals jedes Geräts werden die verfügbaren Optionen angezeigt, mit denen das Verhalten jedes einzelnen Kanals geändert werden kann.  

Channels properties
-------------------

|     |     |
| --- | --- |
| **Kann verblassen** | Bestimmen Sie, ob ein Kanal in die QLC+-Fade-Übergänge einbezogen oder ausgeschlossen wird.  <br>Standardmäßig sind alle Kanäle von den Ein- und Ausblendzeiten der QLC+-Funktionen betroffen.  <br>Wenn diese Eigenschaft deaktiviert ist, wird ein Kanal nicht ausgeblendet, was bedeutet, dass ein Fade-Übergang von 20 auf 200 den Kanal sofort auf 200 setzt. <br>Dies ist beispielsweise für Pan/Tilt-Kanäle von Moving Heads nützlich. Dabei sollen die Motoren ein Fading vermeiden, aber sofort zum Endwert wechseln. |
| **Verhalten** | Erzwingen Sie das Kanalverhalten gemäß den Regeln [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence) und [LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence). Wenn Sie das Verhalten eines Kanals ändern, wird die Liste rot hervorgehoben und zeigt damit an, dass der Kanal geändert wurde.  <br>**Hinweis: Verwenden Sie diese Funktionalität nur, wenn Sie wissen, was Sie tun und vollständig verstehen, wie HTP und LTP funktionieren** |
| **Modifikator** | Kanalmodifikatoren sind ein leistungsstarkes Werkzeug, um das Verhalten eines Kanals zu ändern, indem sie am Ende der DMX-Wertberechnung wirken, direkt vor der [Grand Master](/basics/glossary-and-concepts#masterregler)-Änderung.  <br>Standardmäßig folgen alle Kanäle einer linearen Regel, was bedeutet, dass der ursprüngliche DMX-Wert dem ausgegebenen DMX-Wert entspricht. (0-0, 1-1, ... , 255-255) <br>Wenn Sie auf diese Schaltfläche klicken, wird das Bedienfeld „Kanalmodifikator-Editor“ (unten beschrieben) angezeigt. |


Wenn Sie mit vielen Geräten desselben Typs arbeiten, sollten Sie das Kontrollkästchen „Änderungen auf Geräte desselben Typs anwenden“ aktivieren.
Das bedeutet, dass sich die Änderung einer Kanaleigenschaft auf alle Kanäle desselben Typs und derselben Vorrichtung in der Liste auswirkt.
Dadurch können Sie beim ersten Einrichten Ihrer Projekte viel Zeit sparen.

Kanalmodifikator-Editor
-----------------------

TDer Kanalmodifikator-Editor wird wie folgt dargestellt:

![](channel_modifier.png)

Auf der rechten Seite des Fensters wird eine Liste der verfügbaren Modifikatorvorlagen angezeigt.  
Durch Klicken auf eine Vorlage in der Liste wird die Kurvenvorschau auf der linken Seite des Fensters angezeigt.  
Eine Modifikatorkurve besteht aus einer Reihe von Linien, die darstellen, wie ein DMX-Kanal geändert werden soll, wenn sich sein Wert ändert.  
Jede Zeile beginnt und endet mit einem sogenannten „Handler“. Ein Modifikator kann praktisch unendlich viele Handler haben, aber es muss immer einen Handler für den DMX-Wert 0 und einen Handler für den DMX-Wert 255 geben, um den gesamten DMX-Wertebereich abzudecken.  
Grundsätzlich repräsentiert die X-Koordinate der Vorschau den ursprünglichen DMX-Wert und die Y-Koordinate den geänderten DMX-Wert.  
Beim Klicken auf einen Handler wird dies deutlicher, da die Felder oberhalb der Kurvenvorschau mit den genannten Werten gefüllt werden.  
Handler können einfach mit der Maus verschoben werden, indem man sie herumzieht oder indem man die Werte der ursprünglichen oder geänderten DMX-Werte manuell ändert.  

Um eine neue Vorlage zu erstellen, wählen Sie einfach eine vorhandene Vorlage aus, geben Sie ihr einen neuen Namen und fügen Sie mit den Schaltflächen ![](/basics/edit_add.png) und ![](/basics/edit_remove.png) nach Bedarf Handler hinzu bzw. entfernen Sie sie.  
Wenn Sie fertig sind, klicken Sie einfach auf die Schaltfläche ![](/basics/filesave.png) und Ihre Vorlage wird in Ihrem Benutzervorlagenordner gespeichert. Bitte sehen Sie sich die Seite „Fragen und Antworten“ (/basics/questions-and-answers) an, um diesen Ordner zu finden.

Kanalmodifikator-Vorlagen
--------------------------

QLC+ stellt einige Vorlagen bereit, die die häufigsten Fälle abdecken könnten.

|     |     |
| --- | --- |
| **Immer voll** | Fixieren („parken“) Sie den Kanalwert auf 100 % (255), unabhängig von anderen QLC+-Mechanismen (außer Blackout und Universe Passthrough). Nützlich z.B. Dimmerkanäle. |
| **Immer halb** | Fixieren („parken“) Sie den Kanalwert auf 50 % (127). Nützlich, um die Pan/Tilt-Kanäle in einer neutralen Position zu halten. |
| **Immer aus** | Fixieren („parken“) Sie den Kanalwert auf 0 % (0). Nützlich zum Deaktivieren falscher Geräte. |
| **Exponentielle Tiefe** |     |
| **Exponentielles Medium** |     |
| **Exponentiell flach** |     |
| **Exponentiell einfach** |     |
| **Invertiert** | Kehren Sie einen Schwenk-/Neigekanal um, wenn ein Produkt standardmäßig nicht über diese Funktion verfügt. |
| **Linear** | Standardkurve, genauso wie wenn kein Modifikator festgelegt ist. |
| **Logarithmische Tiefe** | Diese Vorlage kann die Fade-Übergänge von LED-basierten Leuchten verbessern und versucht, ihnen wieder einen lineareren Effekt zu verleihen |
| **Logarithmisches Medium** |
| **Logarithmisch flach** |
| **5 % vorheizen** | Kann die Lebensdauer der Lampe verlängern, indem sie bei mindestens 5 % gehalten wird |
| **Schwellenwert** | Wandelt Dimmerkanal in Schaltkanal um (aus unter 128, voll drüber) |