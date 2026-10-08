---
title: '3D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

Die **3D View** stellt Ihre Bühne dreidimensional dar, komplett mit Fixtures,
Beams, Farben und atmosphärischem Nebel. Sie ist die realistischste Vorschau Ihrer
Show und nützlich, um Beam-Winkel, Positionen und Looks so zu visualisieren, wie sie ein
Publikum sehen würde.

Sie ist eine der vier Ansichten, die über die Symbolleiste oben im
[Fixtures and Functions](/fixtures-and-functions)-Arbeitsbereich verfügbar sind.

> **Hinweis:** Die 3D View erfordert ein System, das die notwendige Grafik-
> darstellung unterstützt. Auf Systemen, die dies nicht unterstützen, wird anstelle der
> 3D-Szene ein Hinweis angezeigt.

## Navigation

* **Zoom** — verwenden Sie die Zoom-Schaltflächen in der Symbolleiste oder das Mausrad.
* **Orbit / Schwenken** — ziehen Sie in der Szene, um sich auf der Bühne umzusehen.

## Fixtures auswählen und positionieren

* **Klicken** Sie auf ein Fixture, um es auszuwählen; **Strg+Klick**, um es zur Auswahl hinzuzufügen.
* Ausgewählte Fixtures können im Einstellungsfenster (unten) präzise positioniert und gedreht,
  oder mit dem Werkzeug **Pick a 3D point** im linken Panel auf einen Punkt im Raum
  ausgerichtet werden (Tastenkombination **Strg+P**) — klicken Sie in die Szene, und die ausgewählten
  Fixtures richten sich auf diese Stelle aus.

## Ansichtseinstellungen

Klicken Sie auf die Schaltfläche **Settings** (das „Balken“-Symbol) in der Symbolleiste, um das 3D-
Einstellungsfenster zu öffnen. Seine Abschnitte können ein- und ausgeklappt werden.

### Environment

* **Type** — die zu rendernde Bühnenvorlage (z. B. einfache Bühne, Box, Theater).
* **Width / Height / Depth** — die Größe der Bühnenumgebung, in Metern oder
  Fuß (die Einheit folgt der Einstellung der 2D View).

### Rendering

* **Quality** — Renderqualität: **Low**, **Medium**, **High** oder **Ultra**.
  Höhere Einstellungen sehen besser aus, beanspruchen aber mehr von Ihrer Grafikhardware.
* **Ambient light** — Gesamthelligkeit der Szene, wenn keine Fixtures leuchten
  (0–100 %).
* **Smoke amount** — wie viel atmosphärischer Nebel in der Luft liegt (0–100 %), wodurch
  Beams besser sichtbar werden.
* **Show FPS** — zeigt einen Bildwiederholraten-Zähler an, nützlich zur Beurteilung der Leistung.

### Position / Rotation

Diese Abschnitte erscheinen, wenn etwas ausgewählt ist, und ermöglichen die Eingabe genauer
**X / Y / Z**-Werte:

* **Position** — der Standort der ausgewählten Elemente, in Millimetern.
* **Rotation** — die Ausrichtung der ausgewählten Elemente, in Grad.

Wenn mehrere Elemente ausgewählt sind, werden Änderungen relativ zur gesamten Gruppe angewendet.

### Scale

Erscheint, wenn ein **benutzerdefiniertes Element** ausgewählt ist. Legt die **X / Y / Z**-Skalierung als
Prozentsatz fest. Die **Lock**-Schaltfläche hält die drei Achsen proportional, sodass eine Änderung
das Element gleichmäßig skaliert.

### Custom items

Sie können Ihre eigenen 3D-Meshes zur Szene hinzufügen (Dekor, Bühnenbildteile, Traversen usw.):

* **Add** (＋) — wählen Sie eine Mesh-Datei (`.obj`, `.dae`, `.3ds`, `.stl`, `.blend`, …)
  aus, die in der Szene platziert werden soll.
* **Remove** (－) — löscht die ausgewählten benutzerdefinierten Elemente.
* **Normalize** (Komprimieren-Symbol) — setzt die ausgewählten Elemente auf eine Standardgröße zurück.
* Die Liste darunter zeigt alle benutzerdefinierten Elemente; klicken Sie auf eines, um es auszuwählen (und
  seine Position, Rotation und Skalierung oben zu bearbeiten).
