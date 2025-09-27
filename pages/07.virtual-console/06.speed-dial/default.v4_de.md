---
title: 'Geschwindigkeitsanpassung'
date: '03:18 22-08-2023'
media_order: speeddial.png
---

Kurzwahlräder sind dazu gedacht, die Geschwindigkeit einer Reihe von Funktionen über die virtuelle Konsole anzupassen, ähnlich wie Busmodus-Schieberegler in den vorherigen Versionen von QLC+. Während das Buskonzept auf der Zuweisung von Funktionen und einem Schieberegler zum selben Bus beruhte, ist die Methode des Kurzwahlrads einfacher und unkomplizierter: Der Benutzer wählt direkt eine Reihe von Funktionen aus, deren Geschwindigkeitseigenschaften mit dem Drehrad gesteuert werden, wodurch die Notwendigkeit entfällt Busse in der Mitte.


Das Widget wird wie folgt angezeigt:

![](speeddial.png)

### Widget-Elemente

|     |     |
| --- | --- |
| **(1) Zeitsteuerungstasten** | Die Plus- und Minus-Schaltflächen erhöhen oder verringern das aktuell fokussierte Zeitfeld von **(4)** um eins. Standardmäßig ist das fokussierte Feld Millisekunden |
| **(2) Wählen** | Der Drehknopf kann manuell unbegrenzt gedreht werden, um das aktuell fokussierte Zeitfeld von **(4)** anzupassen. Standardmäßig ist das fokussierte Feld Millisekunden |
| **(3) Tippen Sie auf die Schaltfläche** | Durch Tippen auf die Schaltfläche wird der Kurzwahlzeitwert auf das Intervall zwischen den Aktionen zum Drücken/Loslassen der Taste eingestellt. Je schneller gedrückt wird, desto niedriger ist der Zeitwert |
| **(4) Zeitfelder** | Die 4 Zeitfelder zeigen den aktuellen Zeitwert der Kurzwahl an und können individuell angepasst werden, indem Sie entweder eine Zahl über eine Tastatur eingeben oder die Zeitsteuerungstasten **(1)**, den Drehknopf **(2)**, die Tap-Taste **(3)** oder Voreinstellungen **(11)** verwenden. |
| **(5) Trennschaltfläche** | Teilen Sie den aktuellen Zeitfaktor durch 2 und wenden Sie ihn auf die aktuelle Kurzwahlzeit an.  <br>Ein Faktor kleiner als 1x wird zu einem Bruch wie 1/2x, 1/4x usw. |
| **(6) Zeitfaktor** | Zeigt den aktuellen Faktor multipliziert mit der aktuell in **(4)** angezeigten Zeit an.  <br>Ein Faktor kleiner als 1x ist ein Teiler. Beispiel: Zeit = 8s.28, Faktor = 1/4x, Ergebnis = 02s.07 |
| **(7) Multiplikator-Schaltfläche** | Multiplizieren Sie den aktuellen Zeitfaktor mit 2 und wenden Sie ihn auf die aktuelle Kurzwahlzeit an. |
| **(8) Reset-Taste** | Setzen Sie den aktuellen Zeitfaktor auf 1x zurück und wenden Sie ihn auf die aktuelle Kurzwahlzeit an. |
| **(9) Faktorisierte Zeit** | Zeigt das Ergebnis der Kurzwahlzeit multipliziert mit dem aktuellen Zeitfaktor **(6)**  an. |
| **(10) Schaltfläche „Übernehmen“** | Wendet die aktuelle Kurzwahlzeit auf die zugehörigen Funktionen an. Dies ist nützlich, wenn in einer virtuellen Konsole mehrere Kurzwahlräder vorhanden sind |
| **(11) Voreinstellungstasten** | In diesem Bereich werden die vom Benutzer hinzugefügten Zeitvoreinstellungen angezeigt, sofern vorhanden |

### Betrieb

Das Schnellwahlrad selbst sieht genauso aus und funktioniert genauso wie die Schnellwahlräder in verschiedenen Funktionseditoren: In der Mitte befindet sich ein **großes Rad (2)**, das die Zeit verlängert, wenn es im Uhrzeigersinn gedreht wird, und verkürzt, wenn es gegen den Uhrzeigersinn gedreht wird. Die Schaltflächen „Plus“ ![](/basics/edit_add.png) und „Minus“ ![](/basics/edit_remove.png) **(1)** sind eine alternative Möglichkeit, die Geschwindigkeit anzupassen.

Der **aktuelle Zeitwert** **(4)** wird in vier Teilen angezeigt. Wenn Sie auf eines dieser Felder klicken, erhöhen/verringern das Wählrad und die Plus-/Minus-Tasten diese Zeiteinheit. Anstelle des Drehrads/der Tasten kann auch das Mausrad verwendet werden und die Felder akzeptieren auch Werte, die über den Ziffernblock eingegeben werden.

* **h**: Stunden
* **m**: Minuten
* **s**: Sekunden
* **.xx**: Centisekunden (Hundertstelsekunden)

Mit der **Tippen**-Taste **(3)** kann die Zeit an einen Beat angepasst werden. Die zwischen den Klicks verstrichene Zeit wird gemessen und diese Zeit für die gesteuerten Funktionen eingestellt, so als ob der Drehknopf auf diese bestimmte Zeit eingestellt worden wäre.

Bei einer Cueliste, einem Chaser oder einer RGB-Matrix bewegt die Tipptaste die Funktion zum nächsten Schritt/zur nächsten Position, wenn der Schnellwahlknopf zum Anpassen der Dauer eingestellt ist. Das getippte Tempo muss mehr als 1/4 der ursprünglichen Dauer betragen.

### Konfiguration – Registerkarte „Funktionen“

Kurzwahlen können mit der Schaltfläche „Eigenschaften“ ![](/basics/edit.png) in der Symbolleiste oder durch Doppelklicken auf die Kurzwahl selbst konfiguriert werden.

**Name der Kurzwahl**Ändern Sie den Namen der Wähltaste.**Funktionstabelle**

Zeigt die Liste der Funktionen an, deren Geschwindigkeitswert(e) über den Drehknopf gesteuert werden.

Für jeden Geschwindigkeitswert (Einblenden, Ausblenden, Dauer) kann ein Multiplikator eingestellt werden.

|     |     |
| --- | --- |
| **Einblendfaktor** | Wählen Sie einen Multiplikator aus, um die [Einblendgeschwindigkeit](/basics/glossary-and-concepts#funktionen) der Funktionen anzupassen |
| **Fade-Out-Faktor** | Wählen Sie einen Multiplikator aus, um die [Ausblendgeschwindigkeit](/basics/glossary-and-concepts#funktionen) der Funktionen anzupassen |
| **Dauerfaktor (+Tap)** | Wählen Sie einen Multiplikator aus, um die [Dauer](/basics/glossary-and-concepts#funktionen) der Funktionen anzupassen |

Dieser Multiplikator wird auf den Kurzwahlwert angewendet, bevor der Geschwindigkeitswert der Funktionen angepasst wird.

Wählen Sie **(Nicht gesendet)**, damit der Geschwindigkeitswert der Funktionen durch diese Kurzwahl nicht beeinflusst wird.

![](/basics/edit_add.png)Funktion(en) hinzufügen, die über die Kurzwahl gesteuert werden sollen.![](/basics/edit_remove.png)Entfernen Sie die ausgewählten Funktionen aus der Liste der gesteuerten Funktionen der Kurzwahl.

### Konfiguration – Registerkarte „Eingabe“

Hier kann der Eingang von einem externen Controller konfiguriert werden

* **Absoluter Wert**: Wählen Sie einen absoluten Zeitbereich (und eine Genauigkeit), den ein externes Signal steuert
* **Tippen**: Verbinden Sie ein Signal oder eine Tastenkombination mit der Kurzwahl-Tap-Taste **(3)**
* **Anwenden**: Verbinden Sie ein Signal oder eine Tastenkombination mit der Kurzwahl-Anwenden-Taste **(10)**

eine für den Wert mit Minimum und Maximum und eine für die Tipptaste.

### Konfiguration – Registerkarte „Erscheinungsbild“

Hier kann die individuelle Sichtbarkeit der Layoutelemente des Widgets ein- oder ausgeschaltet werden. Auf diese Weise ist es möglich, etwas Platz auf dem Bildschirm einzusparen, wenn einige Felder nicht benötigt werden (z. B. wenn sie von einem externen Controller gesteuert werden, wird das große Einstellrad nicht benötigt).

|     |
| --- |
| **Zeigt die Plus- und Minus-Schaltflächen an** |
| **Zeige das zentrale Zifferblatt** |
| **Den Tipp-Button anzeigen** |
| **Zeige das Stundenfeld** |
| **Das Minutenfeld anzeigen** |
| **Sekundenfeld anzeigen** |
| **Millisekundenfeld anzeigen** |
| **Multiplikator- und Teilerschaltflächen anzeigen** |
| **Schaltfläche „Anwenden“ anzeigen** |

### Konfiguration – Registerkarte „Multiplikator“

Hier kann ausgewählt werden, ob der Multiplikationsfaktor zurückgesetzt werden soll, wenn der Drehknopf **(2)** manuell eingestellt wird und einzelne externe Bedienelemente für die Multiplikationstaste **(5)**, die Teilertaste **(7) ** und die Schaltfläche zum Zurücksetzen des Faktors **(8)**

### Konfiguration – Registerkarte „Voreinstellungen“

Eine Voreinstellung ist eine Möglichkeit, schnell auf einen vordefinierten Wert für eine Kurzwahl zuzugreifen.  
Jede Voreinstellung wird im Kurzwahl-Widget-Layout als Schaltfläche dargestellt und kann entweder mit der Maus angeklickt oder auf einem Touchscreen gedrückt oder einer Tastenkombination oder einer externen Controller-Eingabezeile zugeordnet werden.  
Links auf der Registerkarte „Voreinstellungen“ befindet sich die Liste der Voreinstellungen. Wenn Sie in dieser Liste eine Voreinstellung auswählen, können Sie über die Schaltfläche rechts deren Eigenschaften bearbeiten.

|     |     |
| --- | --- |
| **![](/basics/edit_add.png) Voreinstellung hinzufügen** | Eine Voreinstellung hinzufügen |
| **![](/basics/edit_remove.png) Voreinstellung entfernen** | Ausgewählte Voreinstellung entfernen |
| **![](/basics/editclear.png) Voreinstellungsname** | Bearbeiten Sie den Namen der ausgewählten Voreinstellung. Standardmäßig ist der Name die Wählzeit. |
| ![](/basics/speed.png)**Kurzwahl** | Bearbeiten Sie den Zeitwert der ausgewählten Voreinstellung |