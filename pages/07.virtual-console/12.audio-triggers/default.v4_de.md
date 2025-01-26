---
title: 'Audio-Trigger'
date: '03:46 22-08-2023'
---

Ab QLC+ Version 4.4.0 können Sie mit dieser Funktionalität eine Audioeingangsquelle wie ein Mikrofon verwenden, um Ihren Lichtshows mehr Leben zu verleihen.  

Einführung
------------

Wenn Sie auf das Symbol ![](/basics/audioinput.png) klicken, wird Ihrer virtuellen Konsole ein Audio-Trigger-Widget hinzugefügt.  
Der Grafikbereich des Widgets zeigt die Live-Überwachung des aufgenommenen Audios und zeigt eine Reihe von Spektrumbalken und einen Lautstärkebalken an.  
Unten sehen Sie den von QLC+ analysierten Frequenzbereich  

Konfiguration
-------------

Wenn Sie im Designmodus auf das Widget doppelklicken, wird ein Bedienfeld mit einem vollständigen Satz an Optionen zum Optimieren der Funktionalität des Audio-Triggers angezeigt.  
Als erstes können Sie die Anzahl der Spektrumbalken konfigurieren, die Sie anzeigen möchten und die Sie während Ihrer Live-Show benötigen. Die akzeptierte Zahl liegt zwischen 5 und 32.  
Sobald die Anzahl der Balken festgelegt ist, können Sie jedem Balken eine Funktionalität zuweisen. Es gibt eine Liste mit den folgenden Optionen für die Lautstärke- und Spektrumbalken:  
  

|     |     |
| --- | --- |
| **Name** | Kann ein „Lautstärkebalken“ oder ein Spektrumbalken sein, der als #Zahl (Startfrequenz – Endfrequenz) angezeigt wird. Beispiel: #5 (1250Hz - 1562Hz) |
| **Typ** | Gibt die Art der Funktionalität an, die die Leiste steuert. Es kann sein:<br><br>![](/basics/uncheck.png) **Keine** – Keine Funktionalität zugewiesen<br>![](/basics/intensity.png) **DMX** – Steuert einzelne DMX-Kanäle<br>![](/basics/function.png) **Funktion** – Steuert eine QLC+-Funktion<br>![](/basics/virtualconsole.png) **VC Widget** – Steuert ein Virtuelles Konsolen-Widget (im Moment nur Schaltflächen, Schieberegler, Antippen von Kurzwahltasten und nächster Cue von Cue-Listen) |
| **Zuweisen** | Wenn ein Typ ausgewählt ist, wird eine Schaltfläche mit einem ![](/basics/attach.png)-Symbol angezeigt, mit der Sie die Leiste mit der gewünschten Funktionalität verbinden können. Je nachdem, welchen Typ Sie ausgewählt haben, werden durch Klicken auf diese Schaltfläche die Auswahldialoge für DMX-Kanäle, Funktionen oder virtuelle Konsolen-Widgets angezeigt. |
| **Info** | In dieser Spalte werden einige zusätzliche Informationen zur Verknüpfung zwischen Leiste und Funktionalität angezeigt.  <br>Je nach gewähltem Typ wird hier die Anzahl der DMX-Kanäle, der Funktionsname oder der ausgewählte VC-Widget-Name angezeigt |
| **Schwellenwert deaktivieren** | Wenn Sie eine Funktion oder eine VC-Widget-Schaltfläche auswählen, können Sie in dieser Spalte einen Deaktivierungsschwellenwert in Prozent festlegen. Wenn der Spektrum- oder Lautstärkebalken diesen Wert unterschreitet, wird die zugehörige Funktion/VC-Taste gestoppt/deaktiviert. |
| **Schwellenwert aktivieren** | Wenn Sie eine Funktion oder eine VC-Widget-Schaltfläche auswählen, können Sie in dieser Spalte einen Aktivierungsschwellenwert in Prozent festlegen. Wenn der Spektrum- oder Lautstärkebalken diesen Wert überschreitet, wird die zugehörige Funktion/VC-Taste gestartet/aktiviert. |
| **Divisor** | Bei Kurzwahlen und Cue-Listen werden dadurch die Taps durch die ausgewählte Zahl geteilt – nur jeder n-te Tap wird tatsächlich an die Kurzwahl gesendet. Mit anderen Worten: Das Tippen erfolgt nur bei jedem n-ten Schlag. Wenn Sie das Klopfen bei jedem Schlag wünschen, geben Sie 1 ein, für jeden zweiten Schlag geben Sie 2 ein. Einmal in einem 4/4-Takt geben Sie 4 ein. Einmal in 3 4/4-Takten geben Sie 12 ein. Das Maximum ist 64. |

### DMX-Kanäle

Sie können einen oder mehrere Kanäle der aktuell gepatchten Geräte auswählen. Diese Kanäle werden proportional zur Gesamtlautstärke oder zur Lautstärke in einem bestimmten Frequenzband eingestellt.

### Funktionen

Sie können eine oder mehrere Funktionen auswählen. Diese Funktionen werden gestartet, wenn die Lautstärke den Aktivierungsschwellenwert im jeweiligen Band überschreitet, und gestoppt, wenn sie unter den Deaktivierungsschwellenwert fällt.

### VC-Widgets

Sie können hier nur **EIN** Widget auswählen, entweder eine Schaltfläche, einen Schieberegler oder eine Kurzwahl. Je nach Typ:

* **Taste** wird gedrückt, wenn die Lautstärke den Aktivierungsschwellenwert überschreitet, und losgelassen, wenn die Lautstärke unter dem Deaktivierungsschwellenwert liegt (ähnlich wie bei Funktionen).
* **Schieberegler** wird proportional zur Lautstärke bewegt (ähnlich wie bei DMX-Kanälen). Für einen Schieberegler gelten die Schwellenwerte nicht.
* **Kurzwahl** wird angetippt.
* **Cue-Liste** „Nächster Cue“ wird gedrückt.

Bei **Kurzwahlen** und **Cue-Listen** erfolgt das Tippen/Knopfdrücken, wenn die Lautstärke den Aktivierungsschwellenwert überschreitet, und erfolgt erst wieder, wenn die Lautstärke unter den Deaktivierungsschwellenwert fällt. Dies bedeutet wahrscheinlich, dass Sie die Schwellenwerte etwas näher beieinander einstellen müssen als für Schaltflächen.