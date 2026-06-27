---
title: 'RGB Panel hinzufügen'
date: '11:11 21-08-2023'
---

Auf dem Markt finden Sie leicht LED-Streifen, die Sie nach Belieben verdrahten können, um ein RGB-Panel (oder eine Matrix) zu erstellen. In diesem Dialogfeld können Sie schnell ein RGB-Panel erstellen und einrichten. Es handelt sich um einen speziellen Dialog, der Sie bei dem umfangreichen Prozess der manuellen Erstellung von Vorrichtungen je nach gewünschtem Layout unterstützt.  
Bitte beachten Sie, dass das Layout nach der Erstellung des Panels nur noch manuell geändert werden kann.

## Panel Erstellung

Wenn Sie in diesem Dialogfeld auf „OK“ klicken passieren zwei Dinge:  

* QLC+ erstellt eine Vorrichtung für jede Reihe des Panels. Sie können so betrachtet werden, als ob das Panel aus einzelnen RGB-Balken zusammengesetzt wäre.
* QLC+ erstellt eine Gerätegruppe, die das Panel mit den Köpfen darstellt, die sich bereits in der richtigen Verschiebung befinden

Sobald ein RGB-Panel erstellt ist, können Sie ganz einfach zum [Funktionsmanager](/function-manager) gehen, eine neue [RGB-Matrix](/basics/glossary-and-concepts#rgb-matrix) erstellen und sehr schnell mit der Benutzung beginnen.  

Schauen wir uns alle Optionen in diesem Bereich an:

#### Panel Einstellungen
|     |     |
| --- | --- |
| **Name** | Eine beliebige Zeichenfolge, die zur Benennung des RGB-Panels verwendet werden kann |
| **Universe** | Das Universum, in dem das RGB-Panel beginnen wird. Wenn das Panel eine Reihe von Kanälen benötigt, die nicht in ein einzelnes Universum passen, erstreckt es sich über mehrere Universen, beginnend mit dem mit dieser Option ausgewählten. |
| **Address** | Die DMX-Startadresse, der das RGB-Panel zugeordnet werden muss |

#### Größe
|     |     |
| --- | --- |
| **Spalten** | Die Anzahl der Spalten des RGB-Panels (oder die Anzahl der Pixel pro Zeile) |
| **Zeilen** | Die Anzahl der Zeilen des RGB-Panels (oder die Anzahl der Pixel pro Spalte) |

#### Physische Eigenschaften
|     |     |
| --- | --- |
| **Breite** | Die physische Breite des RGB-Panels in Millimetern |
| **Höhe** | Die physische Höhe des RGB-Panels in Millimetern |

#### Orientatierung
|     |     |
| --- | --- |
| **Oben-Links** | Das erste Pixel befindet sich in der oberen linken Ecke des Panels |
| **Oben rechts** | Das erste Pixel befindet sich in der oberen rechten Ecke des Panels |
| **Unten-Links** | Das erste Pixel befindet sich in der unteren linken Ecke des Panels |
| **Unten rechts** | Das erste Pixel befindet sich in der unteren rechten Ecke des Panels |

#### Verschiebung
|     |     |
| --- | --- |
| **Schlange** | Die Panelverschiebung folgt einer „Schlangenlogik“. Dies bedeutet, dass sich das nächste Pixel am Ende einer Zeile in derselben Spalte der nächsten Zeile befindet. Dann folgen die anderen Pixel in die entgegengesetzte Richtung. |
| **Zickzack** | Die Panelverschiebung folgt einer „Zick-Zack“-Logik. Das bedeutet, dass sich das nächste Pixel am Ende einer Zeile in der ersten Spalte der nächsten Zeile befindet. |

#### Richtung
|     |     |
| --- | --- |
| **Horizontal** | Pixeladressen werden horizontal erhöht. |
| **Vertikal** | Pixeladressen werden vertikal erhöht. |