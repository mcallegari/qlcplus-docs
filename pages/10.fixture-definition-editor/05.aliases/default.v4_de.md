---
title: Alias
date: '07:10 22-08-2023'
---

Auf dieser Registerkarte ist es möglich, die Ersetzungsregeln zu definieren, die durch als „Alias“ voreingestellte Funktionen ausgelöst werden.
Machen wir ein Beispiel. Ein Gerät verfügt über Kanal 5 mit der Bezeichnung „Effekte“, der das Verhalten von Kanal 6 steuert. Kanal 5 verfügt über zwei Funktionen: „Geschwindigkeit auf Kanal 6“ und „Tonempfindlichkeit auf Kanal 6“. Letztere sind auf die Voreinstellung „Alias“ eingestellt. Wenn der DMX-Wert von Kanal 5 standardmäßig 0 ist, fungiert Kanal 6 als Geschwindigkeitssteuerung. Wenn der DMX-Wert von Kanal 5 in die Funktion „Tonempfindlichkeit“ wechselt, wird Kanal 6 zur Einstellung der Tonempfindlichkeit.
Um diesen Fall zu bewältigen, müssen Sie zwei Kanäle definieren: „Geschwindigkeit“ und „Schallempfindlichkeit“. Fügen Sie im Fixture-Modus nur „Speed“ hinzu, da dies das Standardverhalten ist, wenn der DMX-Wert von Kanal 5 gleich 0 ist.
Dann müssen Sie nur noch einen Alias ​​definieren: den, der den Standardkanal „Geschwindigkeit“ durch „Tonempfindlichkeit“ ersetzt. QLC+ weiß dann, was zu tun ist, wenn der DMX-Wert von Kanal 5 den Alias ​​betritt oder verlässt.

![](../fixture_editor_aliases.png)

|     |     |
| --- | --- |
| **Alias** | Zeigt die Liste aller Funktionen aller als „Alias“ voreingestellten Kanäle an. Die Zeichenfolge hat die Form \[Kanalname\] - \[Funktionsname\] \[DMX-Wertebereich\] |
| **Im Modus** | Wählen Sie den Modus aus, in dem der Alias ​​wirksam sein muss |
| **ersetzen** | Wählen Sie den Moduskanal aus, der ersetzt werden soll, wenn der Alias ​​ausgelöst wird |
| **mit** | Wählen Sie den Kanal aus, der den „Ersetzen“-Kanal ersetzen soll, wenn der Alias ​​ausgelöst wird |
| ![](/basics/edit_add.png) | Fügen Sie das Triplett _Im Modus_ X, _ersetzen_ Y _mit_ Z zur Liste der bekannten Aliase hinzu |
| ![](/basics/edit_remove.png) | Entfernen Sie den ausgewählten Alias ​​aus der Aliasliste |