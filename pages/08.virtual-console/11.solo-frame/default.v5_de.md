---
title: 'Solo Frame'
date: '03:43 22-08-2023'
---

Ein **Solo Frame** ist ein spezieller [Frame](../frame) in der
[virtuellen Konsole](/virtual-console) mit einer zusätzlichen Regel: Es kann
jeweils nur **eine** der darin enthaltenen Funktionen abgespielt werden. Das
Starten einer Funktion stoppt automatisch jede andere Funktion, die von einem
Widget im selben Frame gestartet wurde.

Das macht einen Solo Frame zum natürlichen Container für jede Gruppe von
Looks, die sich gegenseitig ausschließen sollen — eine Reihe von Farbtasten,
eine Bank von Szenen-„Zuständen“ oder eine Palette, bei der die Auswahl eines
neuen Looks den vorherigen ersetzt. Ohne ihn müssten Sie den alten Look
manuell stoppen, bevor Sie den neuen starten.

Ein Solo Frame ist dasselbe Widget wie ein [Frame](../frame) und teilt sich
alle dessen Einstellungen; er fügt lediglich das Solo-Verhalten und den
Abschnitt **Solo-Frame-Optionen** hinzu.

## Wie das Solo-Verhalten funktioniert

* Wenn ein Widget innerhalb des Frames eine **Funktion startet**, wird jede
  andere Funktion, die von Widgets im selben Frame gestartet wurde,
  **gestoppt**.
* Dies gilt für die direkt im Frame enthaltenen Widgets (zum Beispiel dessen
  [Schaltflächen](../button)) und ergibt so einen sauberen
  Ein-nach-dem-anderen-Selektor.
* Es betrifft nur Funktionen, die *innerhalb dieses Frames* gestartet wurden —
  Funktionen, die anderswo auf der Konsole laufen, werden nicht berührt.

## Einstellungen

Ein Solo Frame verfügt über alle [Frame-Einstellungen](../frame#einstellungen)
— Kopfzeile, Seiten, Verknüpfungen — sowie zusätzlich:

### Solo-Frame-Optionen

* **Überwachte Funktionen ausschließen** — verhindert, dass Funktionen, die
  nur *überwacht* werden, durch die Solo-Regel gestoppt werden. Verwenden Sie
  dies, wenn ein Widget im Frame den Zustand einer Funktion überwacht/widerspiegelt,
  anstatt sie aktiv abzuspielen, damit die Überwachung nicht jedes Mal
  unterbrochen wird, wenn eine andere Schaltfläche gedrückt wird.

## Erstellen

* Ziehen Sie **Solo Frame** aus der Widget-Liste auf die Seite, **oder**
* Wählen Sie beim Erstellen einer [Button Matrix](../button-matrix) oder
  [Slider Matrix](../slider-matrix) **Solo** als Frame-Typ, um das gesamte
  Raster in einen Solo Frame zu packen.

## Tipps

* Legen Sie eine Palette aus Farb- oder Szenen-Schaltflächen in einen Solo
  Frame, sodass das Drücken einer davon immer die vorherige aufhebt — kein
  „Stopp“-Schritt notwendig.
* Kombinieren Sie ihn mit **Seiten** (aus den Frame-Einstellungen), um einen
  seitenbasierten Ein-nach-dem-anderen-Selektor zu erstellen, der auf jeder
  Seite weiterhin solo funktioniert.
