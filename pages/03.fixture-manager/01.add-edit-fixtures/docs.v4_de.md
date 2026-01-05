---
title: 'Geräte hinzufügen und editieren'
taxonomy:
    category:
        - docs
---

Der selbe Vorgang (mit minimalen Unterschieden) wird sowohl zum Hinzufügen neuer, als auch zum Bearbeiten der Eigenschaften bestehender [Fixtures](/basics/glossary-and-concepts#fixtures) verwendet.

**NOTIZ:** Wenn Sie ein vorhandenes Gerät bearbeiten, können Sie jederzeit einen völlig anderen Gerätetyp auswählen, um den vorherigen zu ersetzen. Wenn ihre Kanäle jedoch nicht genau übereinstimmen, sind alle [Szene](/basics/glossary-and-concepts#szene)-Funktionen verfügbar. Das, was Sie vielleicht erstellt haben, wird höchstwahrscheinlich Dinge tun, die Sie nicht wollen. Wenn die Kanalanzahl nicht übereinstimmt, kann es außerdem zu Geräten mit überlappenden Kanälen kommen, was ebenfalls zu unerwünschtem Verhalten führt. [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix), [EFX](/basics/glossary-and-concepts#efx), [Chaser](/basics/glossary-and-concepts#chaser) und [Sammlung](/basics/glossary-and-concepts#sammlung)-Funktionen bleiben davon unberührt, da sie nicht direkt bestimmte Kanäle ansprechen sondern dynamischer sind.

### Controls

|     |     |
| --- | --- |
| **Liste der Leuchtenmodelle** | Zeigt Ihnen eine Liste der verfügbaren Fixture-Definitionen und ihrer allgemeinen Typen. Wenn Sie Ihre bevorzugte Fixture-Definition nicht in der Liste sehen, können Sie mit dem dazugehörigen benutzerfreundlichen **QLC+ Fixture Editor** selbst eine erstellen. Da es sich bei QLC+ um völlig kostenlose Software handelt, sollten Sie erwägen die Definitionsdateien mit der Community im [QLC+-Forum](https://www.qlcplus.org/forum/viewforum.php?f=3) zu teilen. |
| **Geräteeigenschaften** | **Name:** Der benutzerfreundliche Name, den Sie dem Gerät zuweisen möchten<br>**Modus:** Der [Modus](/basics/glossary-and-concepts#fixture-mode) den Sie für das Gerät konfiguriert haben<br>**Universum:** Das DMX-Universum, mit dem die neu hinzugefügten Geräte verbunden sind<br>**Adresse:** Die Adresse des (ersten) Geräts das Sie hinzufügen. Wenn Sie mehrere Geräte hinzufügen, wird jedem aufeinanderfolgenden Gerät unmittelbar nach den Kanälen des vorherigen Geräts eine Adresse zugewiesen, es sei denn, die Adresslücke (siehe unten) ist ungleich Null.<br>**Kanäle:** Wenn Sie ** ausgewählt haben Generisches** Dimmergerät, in diesem Feld können Sie seine Kanalanzahl definieren. Andernfalls ist dieses Feld schreibgeschützt und zeigt lediglich an, wie viele Kanäle das aktuell ausgewählte Gerät in seinem aktuell ausgewählten Modus benötigt.<br>**Kanalliste:** Dieses Feld zeigt eine detailliertere Liste der einzelnen Kanäle für das aktuell ausgewählte Gerät an Gerät und dessen Modus. Bei **generischen** Dimmern bleibt dieses Feld leer, da alle Dimmerkanäle als Dummy-**Intensitätskanäle** behandelt werden. |
| **Mehrere Geräte** | Sie können auch mehr als ein Gerät gleichzeitig hinzufügen, wenn Ihr Setup aus mehreren Geräten derselben Marke und desselben Modells besteht. Diese Funktionen sind deaktiviert, wenn Sie ein vorhandenes Gerät bearbeiten.<br><br>* Anzahl: Anzahl der neu zu erstellenden Geräte. Jedes neu hinzugefügte Gerät enthält auch eine Nummer nach seinem zugewiesenen Namen, wenn mehr als ein Gerät gleichzeitig hinzugefügt wird.<br>* Adresslücke: Lassen Sie so viele leere Kanäle zwischen jedem neuen Gerät |