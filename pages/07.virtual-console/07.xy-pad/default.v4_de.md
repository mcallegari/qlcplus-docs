---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

XY Pad ist ein virtuelles Konsolen-Widget zur Positionierung von Vorrichtungen.  
Es kann die typischen DMX-Bewegungskanäle (**Pan** und **Tilt**) intelligenter Beleuchtungsgeräte, nämlich Scanner und Moving Heads, verarbeiten.  
Das Pad ist ein in der Größe veränderbarer Bereich, der von mehreren Bedienelementen umgeben ist, um die Anforderungen zu erfüllen, die Sie möglicherweise während einer Live-Show haben.  
Es wird wie folgt angezeigt:

![](xypad.png)

### Widget-Elemente

|     |     |
| --- | --- |
| **(1) Bereichsregler** | Diese Schieberegler begrenzen den Arbeitsbereich. (7) |
| **(2) XY-Pad-Name** | Der Name kann in den Eigenschaften geändert werden, siehe unten. |
| **(3) DMX-Koordinaten** | In diesem Teil werden die aktuellen DMX-Koordinaten im Format angezeigt (Pan-Kurs.Pan-Fein: Tilt-Kurs.Tilt-Fein). |
| **(4) Horizontaler und vertikaler Winkel** | Wenn in den Definitionen der gesteuerten Geräte der richtige Schwenk- und Neigungsbereich eingetragen ist und der Bereich für alle Geräte gleich ist, zeigt dieser Text den aus DMX-Koordinaten berechneten Winkel an.  <br>0 Grad liegt in der Mitte des Bereichs (DMX-Wert 127,127). Wenn der Schwenkbereich für ein Gerät beispielsweise 540 Grad beträgt, liegt der angezeigte Winkel zwischen -270 und 270 Grad.  <br>Hinweis: Dies funktioniert möglicherweise nicht richtig, wenn ein Gerät einen begrenzten Achsenbereich in der Konfiguration oder eine umgekehrte Achse hat. |
| **(5) Wertschieberegler** | Mit diesen Schiebereglern können Sie den Wert der X/Y-Achsen ändern. |
| **(6) Griff** | Der blaue Punkt ist der Griff. Sie können es entweder mit der Maus, mit der Tastatur oder einem externen Controller bewegen. |
| **(7) Arbeitsbereich** | Dies ist der Bereich, der die möglichen Positionen einschränkt. Es kann gleich oder ein Teil von (8) | sein
| **(8) Hauptbereich** | Dies ist der Bereich, der alle möglichen X/Y-Positionen repräsentiert. |
| **(9) Voreinstellungen** | In diesem Bereich werden die voreingestellten Schaltflächen angezeigt, sofern verfügbar. |

### Begrenzung des Arbeitsbereichs

Das XY-Pad ist im Grunde eine Karte des gesamten Gradbereichs, den die Schwenk- und Neigungskanäle Ihrer Geräte verwalten können.  
Hier ist ein Bild, das zeigt, wie der Hauptbereich normalerweise Grade darstellt:

![](xypad2.png)  

Es gibt jedoch Fälle, in denen Sie den Grad begrenzen möchten, den ein beweglicher Kopf oder ein Scanner erreichen kann.  
Beispielsweise sollten Geräte mit einem Schwenkbereich von 540 Grad darauf beschränkt sein, nur in einem Bereich zu arbeiten, der dem Publikum zugewandt ist, oder Sie möchten möglicherweise vermeiden, dass bewegte Köpfe, die verkehrt herum an einer Traverse montiert sind, zur Decke oder außerhalb der Bühne zeigen.  
Mit dem XY-Pad gibt es zwei Möglichkeiten, dies zu erreichen:

**1\. Arbeitsfenster**

Mit den Schiebereglern für den oberen und linken Bereich **(1)** ist es möglich, den Bereich einzuschränken, in dem das XY-Pad funktioniert.  
Wenn Sie den Bereich dieser Schieberegler reduzieren, wird ein halbtransparenter grüner Bereich **(7)** über dem Hauptbereich hervorgehoben, um die X/Y-Grenzen zu markieren, an denen Ihre Geräte arbeiten sollen.  
Beachten Sie, dass bei Verwendung einer Maus auf der Benutzeroberfläche die Bewegung der Griffe auf das Arbeitsfenster beschränkt ist, auch wenn Sie den Cursor außerhalb davon ziehen, während bei Verwendung eines externen Controllers alle Werte auf das Fenster skaliert werden. Dadurch können Sie den gesamten Bereich eines physischen Faders nutzen und haben so eine höhere Empfindlichkeit beim Einstellen einer Position.

**2\. Individuelles Leuchtenprogramm**

Es ist möglich, im Eigenschaftendialog für jedes Gerät einen bestimmten Bereich festzulegen (siehe Abschnitt **Konfiguration**). Bei dieser Methode wird der gesamte Hauptbereich **(8)** genutzt und jeder angegebene Bereich jedes Geräts darauf skaliert.  
Dies ist sehr praktisch, wenn Sie ein XY-Pad mit gemischten Vorrichtungen und unterschiedlichen Gradbereichen verwenden möchten.  

Beispielsweise können Sie ein Gerät mit einer Schwenkbewegung von 540 Grad genau wie eines mit einer Schwenkbewegung von 360 Grad veranlassen.

Ein weiteres Beispiel: Stellen Sie die X-Achse (Pan) des Geräts mindestens auf 20 % (DMX-Wert 51) und maximal auf 80 % (DMX-Wert 204) ein. Wenn sich der Griff am linken Rand befindet (Wert 0), beträgt die tatsächliche DMX-Ausgabe 51. Ebenso gibt der Griff am rechten Rand 204 (=80 %) aus. Bei Werten dazwischen wird die DMX-Ausgabe proportional skaliert.

Es ist möglich, beide Grenzwerte zu aktivieren (mithilfe der Bereichsschieberegler und Grenzwerte pro Gerät).

### XY-Pad-Verwendungen

Das XY-Pad ermöglicht drei völlig unterschiedliche Verwendungsmöglichkeiten, die jedoch alle auf die Positionierung ausgerichtet sind. Es liegt an Ihnen, je nach Ihren Bedürfnissen zu entscheiden, wie Sie sie am besten nutzen. Möglicherweise möchten Sie auch die Verwendung mehrerer XY-Pads für unterschiedliche Zwecke in Betracht ziehen.  

* **1- Absolute Positionierung**: Dies ist die grundlegende Verwendung und erfordert lediglich die Angabe, welche Geräte Sie steuern möchten (hinzugefügt über das Konfigurationsfenster) und schließlich deren spezifischen Betriebsbereich.  
    Wie bereits beschrieben, müssen Sie lediglich Ihre Geräte einmal einrichten und mit dem Bewegen mit Ihrem bevorzugten Controller beginnen.  
    Es ist auch möglich, einige Positionsvoreinstellungen zu definieren, sodass in **(9)** eine Reihe von Schaltflächen angezeigt werden, um schnell eine absolute Position abzurufen.  
    Wenn eine Fixture-Gruppen-Voreinstellung aktiviert ist, steuert das XY-Pad nur die absoluten Positionen der in der Voreinstellung definierten Fixtures. (Weitere Informationen finden Sie auf der Registerkarte „Voreinstellungen“).
  
* **2- EFX**: Im Konfigurationsfenster (Registerkarte „Voreinstellungen“) ist es möglich, einige Voreinstellungen hinzuzufügen, um vorhandene ![](/basics/efx.png) [EFX](/basics/glossary-and- Konzepte#efx) Funktionen. Wenn Sie ein EFX-Preset aktivieren, wird die animierte Vorschau der Fixture-Bewegungen wie folgt angezeigt:  
    ![](xypad-efx.png)  
    Wenn kein Arbeitsfenster festgelegt ist, wird der EFX genau so angezeigt, wie er im [EFX-Editor](../function-manager/efx-editor) in der Vorschau angezeigt wird. Andernfalls wird der EFX so skaliert, dass er in das definierte Arbeitsfenster passt.  
    Wenn ein Arbeitsfenster aktiv ist, wird es zwischen Nutzung Nr. 1 und Nutzung Nr. 2 geteilt.
  
* **3- Relativ zu einer Szene**: Im Konfigurationsfenster (Registerkarte „Voreinstellungen“) ist es auch möglich, einige Voreinstellungen hinzuzufügen, um vorhandene ![](/basics/scene.png) [Szene](/basics/ abzurufen glossary-and-concepts#scene)-Funktionen  
    Das XY-Pad erkennt, welche Schwenk-/Neigekanäle in der Szene vorhanden sind, und stellt sie ein.  
    Der Pad-Griff **(6)** positioniert sich automatisch in der Mitte des Hauptbereichs **(8)**. Durch Bewegen des Griffs werden relative Werte aus der Mitte des Pads erzeugt, die zu den DMX-Werten der laufenden Szene addiert/subtrahiert werden.  
    Wenn Sie nach oben bewegen, wird ein negativer Offset zu den Neigungskanälen hinzugefügt, und wenn Sie nach unten gehen, wird ein positiver Offset hinzugefügt.  
    Durch Bewegen nach links wird ein negativer Offset zu den Pan-Kanälen hinzugefügt, durch Bewegen nach rechts wird ein positiver Offset hinzugefügt.  
    Wenn beim Aktivieren einer Szenenvoreinstellung ein Arbeitsfenster aktiv ist, wird es ausgeblendet, da es bei dieser Verwendung keine absoluten Werte gibt. Beim Zurückschalten auf Verwendung Nr. 1 oder Nr. 2 wird das Arbeitsfenster wiederhergestellt.  
    Bitte beachten Sie, dass bei Aktivierung einer Szenenvoreinstellung tatsächlich die gesamte Szene gestartet wird, mit Farben und allem. In diesem Fall wird empfohlen, Szenen nur mit aktivierten Schwenk-/Neigekanälen zu erstellen und kein XY-Pad für andere Zwecke zu verwenden.

### Tastatursteuerung

Die Kopfposition kann mit den Pfeiltasten auf der Tastatur gesteuert werden. Jeder Tastendruck erhöht/verringert den Grobwert um 1. Bei gedrückter Umschalttaste wird der Feinkanal um 1 geändert. Bei Strg beträgt der Schritt 10 statt 1.

|     |     |     |
| --- | --- | --- |
| **Pfeiltasten** | Grob | Schritt=1 |
| **Umschalt + Pfeiltasten** | Gut | Schritt=1 |
| **Strg + Pfeiltasten** | Grob | Schritt=10 |
| **Umschalt + Strg + Pfeiltasten** | Gut | Schritt=10 |

### Konfiguration

XY-Pads können mit der Schaltfläche „Eigenschaften“ ![](/basics/edit.png) in der Symbolleiste oder durch Doppelklick auf das XY-Pad selbst konfiguriert werden.

**1\. Registerkarte „Allgemein“**

Hier können Sie das grundlegende Verhalten des XY-Pads sowie die externen Eingabesteuerungen festlegen.  
**Hinweis:** Wenn Sie über Touch OSC ein XY-Pad zuweisen, müssen Sie auf die Schaltfläche „Neigung/vertikale Achse“ zur automatischen Erkennung klicken, andernfalls werden die X- und Y-Achsen vertauscht.

|     |     |
| --- | --- |
| **XY-Pad-Name** | Legen Sie den Namen des XY-Pads fest. Der Name **(2)** wird in der oberen linken Ecke des Widgets in der virtuellen Konsole angezeigt. |
| **Bewegung des Y-Achsen-Schiebers** | Das Verhalten des vertikalen Schiebereglers (der Y-Achsen-Steuerung) kann auf **Normal** oder **Invertiert** eingestellt werden.  <br>Im ersten Fall wird der Maximalwert am unteren Ende des Pads erreicht, im zweiten Fall am oberen Ende. |
| **Schwenk-/Horizontale Achse** | Ermöglicht die Auswahl eines externen Eingangs zur Steuerung des horizontalen Schiebereglers, der unten im Widget angezeigt wird. Beim Aktivieren einer EFX-Voreinstellung steuert dieser Eingang die X-Position des Arbeitsfensters, also die X-Position des EFX. |
| **Neigung/vertikale Achse** | Ermöglicht die Auswahl eines externen Eingangs zur Steuerung des vertikalen Schiebereglers, der auf der rechten Seite des Widgets angezeigt wird. Beim Aktivieren einer EFX-Voreinstellung steuert dieser Eingang die Y-Position des Arbeitsfensters, also die Y-Position des EFX. |
| **Breite** | Ermöglicht die Auswahl eines externen Eingangs zur Steuerung der Breite des Arbeitsfensters. Dies hat keine Auswirkung auf die Verwendung Nr. 1 und Nr. 3 |
| **Höhe** | Ermöglicht die Auswahl eines externen Eingangs zur Steuerung der Höhe des Arbeitsfensters. Dies hat keine Auswirkungen auf die Verwendung Nr. 1 und Nr. 3 |

  
**2\. Registerkarte „Fixtures“**

Hier können Sie die Geräte hinzufügen/entfernen, die das XY-Pad in Verwendung Nr. 1 steuern wird.

|     |     |
| --- | --- |
| **Spielplan** | Zeigt die Fixtures an, die aktuell vom XY-Pad gesteuert werden.<br><br>**Fixture**: Die Namen der einzelnen Fixtures<br>**X-Axis**: Zeigt den Wertebereich (und ggf. die Umkehrung) an. der horizontalen Achse (Pan) für jedes Gerät<br>**Y-Achse**: Zeigt den Wertebereich (und ggf. die Umkehrung) der vertikalen Achse (Tilt) für jedes Gerät | an
| ![](/basics/edit_add.png) | Fügen Sie [Fixtures] (/basics/glossary-and-concepts#fixture) hinzu, die vom XY-Pad gesteuert werden sollen, indem Sie den Dialog [Fixture auswählen] (/function-manager/fixture-selection) verwenden.  <br>**HINWEIS**: Im Dialog werden nur Geräte angezeigt, die über Pan- und Tilt-Kanäle verfügen. |
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählten Geräte aus der Kontrollliste des XY-Pads. |
| ![](/basics/edit.png) | Bearbeiten Sie das Verhalten des ausgewählten Geräts, gesteuert durch das XY-Pad. |

  
 **![](/basics/edit.png) 2.1 Konfiguration der Vorrichtungsbewegung**

Mit dem Dialogfeld „XY-Pad-Befestigungskonfiguration“ können Sie das Ausmaß der Bewegung ändern und die Bewegung der Vorrichtungen umkehren.

|     |     |
| --- | --- |
| **Horizontale X-Achse** | **Minimum**: Legen Sie die minimale Schwenkgrenze für das Gerät fest.<br>**Maximum**: Legen Sie die maximale Schwenkgrenze für das Gerät fest.<br>**Umkehren**: Kehren Sie die Bewegung des Geräts auf der horizontalen Achse (Schwenken) um |
| **Vertikale Y-Achse** | **Minimum**: Legen Sie die minimale Neigungsgrenze für das Gerät fest<br>**Maximum**: Legen Sie die maximale Neigungsgrenze für das Gerät fest<br>**Umkehren**: Kehrt die Bewegung des Geräts auf der vertikalen (Neigungs-)Achse um |

  
**3\. Registerkarte „Voreinstellungen“**

Hier können Sie Voreinstellungen zum XY-Pad hinzufügen/entfernen. Jede Voreinstellung wird als Schaltfläche im unteren Teil des XY-Pad-Widgets angezeigt. EFX- und Szenen-Presets können umgeschaltet werden, um eine Funktion zu starten/stoppen, Fixture-Gruppen-Presets können umgeschaltet werden, um eine Fixture-Gruppe zu aktivieren/deaktivieren, während Positions-Presets nur einmal angeklickt werden können

|     |     |
| --- | --- |
|**Voreinstellungsliste** | Zeigt die Liste der aktuell zum XY-Pad hinzugefügten Voreinstellungen | an
| ![](/basics/xypad.png) Position hinzufügen | Wenn Sie auf diese Schaltfläche klicken, wird eine neue Positionsvoreinstellung erstellt und dem XY-Pad hinzugefügt. Standardmäßig sind die voreingestellten Namen die X/Y-Koordinaten zum Zeitpunkt der Erstellung |
| ![](/basics/efx.png) EFX hinzufügen | Wenn Sie auf diese Schaltfläche klicken, wird das Dialogfeld [Funktion auswählen] (/function-manager/fixture-selection) angezeigt, in dem Sie einen vorhandenen EFX aus Ihrem Arbeitsbereich auswählen können.  <br>Wenn Sie fertig sind, wird eine neue EFX-Voreinstellung erstellt und dem XY-Pad hinzugefügt. Standardmäßig ist der voreingestellte Name der EFX-Name |
| ![](/basics/scene.png) Szene hinzufügen | Wenn Sie auf diese Schaltfläche klicken, wird das Dialogfeld [Funktion auswählen](../function-manager/function-selection) angezeigt, in dem Sie eine vorhandene Szene aus Ihrem Arbeitsbereich auswählen können.  <br>Wenn Sie fertig sind, wird eine neue Szenenvoreinstellung erstellt und dem XY-Pad hinzugefügt. Standardmäßig ist der voreingestellte Name der Szenenname.  <br>Beachten Sie, dass ein Fehler angezeigt und keine Voreinstellung erstellt wird, wenn die ausgewählte Szene keine Pan- oder Tilt-Kanäle hat. |
| ![](/basics/group.png) Gerätegruppe hinzufügen | Wenn Sie auf diese Schaltfläche klicken, wird das Dialogfeld [Gerät auswählen] (/function-manager/fixture-selection) angezeigt, in dem Sie eine Gruppe von Geräten als Untergruppe der Geräte erstellen können, die das XY-Pad steuert (definiert auf der Registerkarte „Geräte“) ) <br>Wenn Sie im Betriebsmodus auf eine Fixture-Gruppenvoreinstellung klicken, steuert das XY-Pad nur die Fixture-Positionen der aktivierten Fixture-Gruppe.  <br>**Hinweis**: Eine Fixture-Gruppen-Voreinstellung hat keine Auswirkung auf EFX- und Szenen-Voreinstellungen. |
| ![](/basics/edit_remove.png) Entfernen | Entfernt die aktuell ausgewählte Voreinstellung |
| Voreingestellter Name | Ermöglicht die Eingabe eines beliebigen Namens für die aktuell ausgewählte Voreinstellung |
| Externe Eingabe | Ermöglicht die Auswahl einer externen Eingabesteuerung für die aktuell ausgewählte Voreinstellung |
| Tastenkombination | Ermöglicht die Auswahl einer Tastaturkombination für die aktuell ausgewählte Voreinstellung |