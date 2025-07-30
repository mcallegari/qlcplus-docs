---
title: 'Einzelrahmen'
date: '03:43 22-08-2023'
---

Ein Einzelrahmen ist fast genau die gleiche Art von Container wie ein normaler [Frame](../frame), da er verschiedene Widgets und andere Frames enthalten kann. Der Unterschied zu Einzelrahmen besteht jedoch darin, dass alle darin enthaltenen [Buttons](../button) anders behandelt werden, indem jeweils nur eine Schaltfläche aktiviert werden kann. Angenommen, Sie haben **Button A** und **Button B** in einem Einzelrahmen, wobei **Button A** derzeit aktiviert ist. Als nächstes klicken Sie auf die Schaltfläche **Taste B**, was automatisch dazu führt, dass **Taste A** losgelassen wird und jetzt nur noch **Taste B** aktiviert bleibt.

### Konfiguration

Einzelrahmen können mit der Schaltfläche „Eigenschaften“ ![](/basics/edit.png) in der Symbolleiste oder durch Doppelklicken auf den Solo-Frame selbst konfiguriert werden.

Abgesehen von den Standard-[Styling- und Platzierungsoptionen](../styling-and-placement) verfügen Einzelrahmen über alle [Frame](../frame)-Zusatzoptionen:

* **Frame-Name**: Ermöglicht Ihnen, dem Einzelrahmen eine beliebige Bezeichnung zuzuweisen. Dies wird nur angezeigt, wenn die Option „Kopfzeile anzeigen“ aktiviert ist (siehe unten).
* **Untergeordnete Widgets akzeptieren**: Ermöglicht das Hinzufügen von Widgets zum Einzelrahmen.
* **Größenänderung zulassen**: Ermöglicht die Änderung der Höhe und Breite des Einzelrahmen.
* **Kopfzeile anzeigen**: Zeigt eine nützliche Kopfzeile an, die aus einer Schaltfläche und einer Beschriftung besteht. Mit der Schaltfläche können Sie den Solo-Rahmen erweitern/reduzieren, wodurch viel Platz in der virtuellen Konsole gespart werden kann. Auf der Beschriftung wird der Name des Frames angezeigt.

Und noch eine spezielle Option:

* **Mix-Schieberegler im Wiedergabemodus**: Wenn diese Option aktiviert ist, dürfen die [Schieberegler](../slider) im **Wiedergabemodus** gleichzeitig aktiviert werden. Wenn Sie einen Schieberegler nach oben bewegen, werden die anderen laufenden Schieberegler nicht sofort abgebrochen, sondern mit der gleichen Geschwindigkeit ausgeblendet, mit der Sie ihn nach oben bewegen.