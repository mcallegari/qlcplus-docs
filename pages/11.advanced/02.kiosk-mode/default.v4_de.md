---
title: 'Kiosk Modus'
date: '08:17 22-08-2023'
---

QLC+ verfügt über einen speziellen Modus, wenn Ihre Beleuchtung von unerfahrenen Personen bedient werden muss oder Sie einfach nur unerwünschte Veränderungen verhindern möchten. Es wird Kioskmodus genannt. In diesem Modus wird nur die virtuelle Konsole angezeigt, daher ist keine Bearbeitung möglich.

Wenn Sie QLC+ im Kioskmodus starten möchten, führen Sie Folgendes aus:

„qlcplus -k -f -o workspace.qxw -p -c 500,10,32,32“.

* **-k** aktiviert den Kioskmodus
* **-f** versetzt QLC+ in den Vollbildmodus
* **-o workspace.qxw** öffnet den angegebenen Arbeitsbereich
* **-p** startet den Betriebsmodus
* **-c 500,10,32,32** erstellt eine Schließen-Schaltfläche mit einer Größe von 32 x 32 Pixeln, 500 Pixel von links und 10 Pixel von oben.

Sie können natürlich Ihre eigene Arbeitsbereichsdatei für **-o** und Größe/Position für **-c** angeben.

Bei Bedarf können Sie jeden Parameter weglassen. Lassen Sie beispielsweise **-c 500,10,32,32** weg, wenn Sie keine Schaltfläche zum Schließen wünschen, und lassen Sie **-f** weg, wenn Sie dies nicht möchten. Ich möchte keinen Vollbildmodus.

Alle Befehlszeilenparameter werden [hier](../command-line-parameters) beschrieben.