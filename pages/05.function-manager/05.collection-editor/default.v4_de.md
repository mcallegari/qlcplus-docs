---
title: 'Sammlungseditor'
date: '12:21 21-08-2023'
---

Der Sammlungseditor wird, wie der Name schon sagt, zum Bearbeiten von ![](/basics/collection.png) [Sammlung](/basics/glossary-and-concepts#sammlung)-Funktionen verwendet.  
Sammlungen sind in einem Workflow, in dem Sie QLC+-Funktionen für bestimmte Bereiche Ihrer Show erstellen, sehr hilfreich. Sie können beispielsweise eine Reihe von Szenen erstellen, um nur Farben zu steuern, einige andere Szenen, um nur Positionen zu steuern und so weiter. Anschließend können Sie eine Reihe von Chasern und EFX für Automatisierungen erstellen.  
Wenn Sie alle Grundelemente Ihrer Show erstellt haben, können Sie mithilfe von Sammlungen eine Art „Abkürzung“ für zusammengesetzte Szenen erstellen. Zum Beispiel eine Farbszene + eine Positionsszene.

**Hinweis:** Sammlungen haben keine Geschwindigkeitseinstellung; Jede Funktion, die Sie in eine Sammlung aufnehmen, folgt ihren eigenen Geschwindigkeitseinstellungen.

**Wichtig**: Die Reihenfolge der Funktionen in einer Sammlung ist von grundlegender Bedeutung, wenn es um die HTP/LTP-Nutzung oder relative Werte geht. QLC+ startet intern die Funktionen einer Sammlung vom ersten bis zum letzten. Wenn sie also dieselben Kanäle verwenden, sollten Sie dies im Hinterkopf behalten, da es sonst zu unerwünschten Effekten kommen kann.  
Beispielsweise muss eine Szene, die Pan/Tilt-Kanäle + einen EFX im relativen Modus einstellt, eine genaue Reihenfolge haben: die Szene an der ersten Position und der EFX an der zweiten Position.

### Steuerelemente

|     |     |
| --- | --- |
| **Sammlungsname** | Ändern Sie den Namen der Sammlung. |
| ![](/basics/edit_add.png) | Fügen Sie der Sammlung eine vorhandene [Funktion](/basics/glossary-and-concepts#funktionen) hinzu, indem Sie das Dialogfeld [Funktion auswählen](../function-selection) verwenden. Die Reihenfolge der Funktionen hat keine Bedeutung. |
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählten Funktionen aus der Sammlung. |