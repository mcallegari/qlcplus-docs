---
title: 'Audio Triggers'
date: '03:46 22-08-2023'
---

Ein **Audio Triggers**-Widget hört auf Live-Audio (vom Audioeingang des
Computers) und nutzt dessen **Frequenzspektrum**, um Funktionen, DMX-Kanäle
oder andere Widgets zu steuern. So lassen Sie Lichter automatisch auf Musik
reagieren in der [virtuellen Konsole](/virtual-console).

Das eingehende Signal wird in eine Anzahl von **Frequenzbalken** (Bass bis
Höhen) aufgeteilt, und jedem Balken kann ein Ziel zugewiesen werden, das er
steuert, während die Musik läuft.

## Einstellungen

* **Aktivierungsschwelle** — der Pegel, den ein Balken erreichen muss, bevor
  sein Ziel ausgelöst wird.
* **Deaktivierungsschwelle** — der Pegel, unter den ein Balken zurückfallen
  muss, bevor sein Ziel freigegeben wird. (Die getrennten Schwellenwerte
  verhindern ein Flackern beim Ein- und Ausschalten.)

### Spektrumbalken

* **Anzahl der Balken** — in wie viele Frequenzbänder das Spektrum unterteilt
  wird. Mehr Balken ermöglichen eine feinere Steuerung über den
  Frequenzbereich.

### Zuweisung pro Balken

Für jeden Balken legen Sie Folgendes fest:

* **Name** — eine Bezeichnung für den Balken.
* **Typ** — was der Balken steuert:
  * **Keine** — nicht verwendet.
  * **DMX** — steuert einen DMX-Kanalpegel.
  * **Funktion** — startet/stoppt eine Funktion. **Legen Sie hier eine
    Funktion ab**, um sie zuzuweisen.
  * **Widget** — steuert ein anderes VC-Widget. **Legen Sie hier ein
    VC-Widget ab**, um es zuzuweisen.
* **Information** — zeigt die aktuelle Zuweisung an.

## Tipps

* Weisen Sie die **Bass**-Balken Intensitäts- oder Stroboskop-Funktionen zu
  und die **Höhen**-Balken Farbwechseln, für einen klassischen
  musikreaktiven Look.
* Stimmen Sie die **Aktivierungs-/Deaktivierungsschwellen** auf den Track ab,
  damit Effekte auf Beats auslösen, ohne zu flattern.
