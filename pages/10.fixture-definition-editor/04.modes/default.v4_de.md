---
title: Modi
date: '07:07 22-08-2023'
---

Die Registerkarte „Modi“ enthält alle [Modi](/basics/glossary-and-concepts#fixture-mode), für die das Gerät konfiguriert werden kann.

![](../fixture_editor_modes.png)

|     |     |
| --- | --- |
| **Modusliste** | Zeigt alle Modi für das aktuell bearbeitete Gerät an. Jedes Moduselement kann geöffnet werden, um den Satz und die Reihenfolge der Kanäle in diesem Modus anzuzeigen.<br>**Name**: Der Name des Modus (jeder Name muss eindeutig sein)<br>**Kanäle**: Anzahl der Kanäle in jedem Modus<br>**Köpfe**: Die Anzahl der Lichtquellen, die jeder Modus unterstützt |
| ![](/basics/edit_add.png) | Erstellen Sie mit dem [Mode Editor](#modus-editor) einen neuen Modus für das Gerät. |
| ![](/basics/edit_remove.png) | Entfernen Sie den aktuell ausgewählten Modus vom Gerät. Durch das Entfernen eines Modus werden keine Kanäle oder andere Modi zerstört. |
| ![](/basics/edit.png) | Bearbeiten Sie den aktuell ausgewählten Modus mit dem [Modus-Editor](#modus-editor). |
| ![](/basics/editcopy.png) | Erstellen Sie eine Kopie des aktuell ausgewählten Modus für dasselbe Gerät. Da Modi eng an die Kanäle eines bestimmten Geräts gekoppelt sind, können Modi nicht zwischen Geräten kopiert werden. |
| ![](/basics/check.png) | Alle Moduselemente öffnen oder schließen. |

## Modus-Editor


Der Modus-Editor wird zum Erstellen und Bearbeiten von [Modi](/basics/glossary-and-concepts#fixture-mode) verwendet, indem Sätze von **Kanälen** in einer bestimmten Reihenfolge (wie vom Hersteller des Geräts definiert) ausgewählt werden. Jedes Editorfenster ist in drei Registerkarten unterteilt: Kanäle, Köpfe und Physikalisch.

## Registerkarte „Kanäle“.


Auf der Registerkarte „Kanäle“ können Sie die Kanäle des Geräts in einer Reihenfolge anordnen, die eine tatsächliche Darstellung der DMX-Kanäle ergibt, die das Gerät versteht, wenn es in diesem bestimmten Modus konfiguriert wurde.

![](../fixture_editor_mode_channels.png)

|     |     |
| --- | --- |
| **Modusname** | Der Name des Modus (muss für jeden Modus eindeutig sein). |
| **Senderliste** | Zeigt alle im aktuellen Modus vorhandenen Kanäle in der richtigen Reihenfolge an.  <br>Die Spalte „Acts on“ wird verwendet, um einen Kanal an einen anderen zu binden. Zum Beispiel ein Kanal, der die Geschwindigkeit eines rotierenden Gobos steuert. |
| ![](/basics/edit_add.png) | Fügen Sie dem Modus Kanäle aus der Kanalsammlung des Geräts hinzu. Sie können Kanäle auf der Registerkarte **Kanäle** des [Fixture Definition Editor](/fixture-definition-editor/channels) erstellen/bearbeiten.  <br>Wenn Sie auf diese Schaltfläche klicken, wird ein neues Fenster mit zwei Listen angezeigt:<br><br>Die Liste auf der **linken** Seite zeigt die Kanäle, die diesem Modus noch nicht hinzugefügt wurden. Wenn Sie einen neuen Modus erstellen, zeigt diese Liste alle Kanäle an, die Sie auf der Registerkarte „Kanäle“ des Fixture-Editors erstellt haben.<br>Die Liste auf der **rechten** Seite zeigt die Kanäle, die den Modus definieren, den Sie bearbeiten. Wenn Sie einen neuen Modus erstellen, ist diese Liste leer.  <br>    Bitte beachten Sie, dass die Reihenfolge der Kanäle in dieser Liste von grundlegender Bedeutung für die Definition des Fixture-Modus ist.<br><br>Um Elemente von einer Liste in eine andere zu verschieben, verwenden Sie entweder die zentralen Schaltflächen oder ziehen Sie sie einfach per Drag & Drop.  <br>Wenn Sie fertig sind, drücken Sie OK, um die Kanalliste des Modus zu aktualisieren. |
| ![](/basics/edit_remove.png) | Entfernen Sie die ausgewählten Kanäle aus dem Modus. Die Kanalauswahl in anderen Modi bleibt unberührt. |
| ![](/basics/up.png) | Erhöht den ausgewählten Kanal um eine Position nach oben. |
| ![](/basics/down.png) | Senken Sie den ausgewählten Kanal um eine Position nach unten. |

## Registerkarte „Köpfe“.

Auf der Registerkarte „Köpfe“ können Sie mehrere [Köpfe](/basics/glossary-and-concepts#head) für ein einzelnes Gerät definieren, sodass QLC+ weiß, jeden von ihnen in bestimmten Situationen (z. B. [Gerätegruppen](/basics/glossary-and-concepts#fixture-gruppierung) einzeln zu behandeln. Grundlagen/Glossar-und-Konzepte#Fixture-Group)). Wenn ein Gerät nur einen Kopf enthält, wenn es für die Verwendung des aktuell bearbeiteten Modus konfiguriert ist (d. h. alle Kanäle des Modus steuern jeweils einen Kopf), besteht keine Notwendigkeit, den Kopf zu definieren. Wenn das Gerät jedoch über mehrere Köpfe verfügt, die Sie steuern möchten, müssen Sie hier jeden Kopf definieren.

Köpfe haben keine Namen, da sie als einfache „Untergeräte“ innerhalb eines Geräts betrachtet werden können. Stattdessen erhalten sie automatisch Indexnummern. Die Reihenfolge der Köpfe sollte so genau wie möglich der Konfiguration der physischen Vorrichtung entsprechen. Wenn die Köpfe in der realen Welt also 1, 2, 3, 4 sind, definieren Sie sie nicht als 4, 2, 1, 3 oder etwas ähnlich Ärgerliches.

![](../fixture_editor_mode_heads.png)

|     |     |
| --- | --- |
| **Kopfliste** | Zeigt die Liste der Köpfe an, die derzeit für das Gerät definiert sind. |
| ![](/basics/edit_add.png) | Fügen Sie der Vorrichtung einen neuen Kopf hinzu, indem Sie den [Kopf-Editor](#head-editor) verwenden. |
| ![](/basics/edit_remove.png) | Entfernen Sie den ausgewählten Kopf von der Vorrichtung. |
| ![](/basics/edit.png) | Bearbeiten Sie den ausgewählten Kopf mit dem [Kopf-Editor](#head-editor). |
| ![](/basics/up.png) | Heben Sie den ausgewählten Kopf um eins nach oben. Damit können Sie die Reihenfolge der Köpfe innerhalb des Geräts ändern. |
| ![](/basics/down.png) | Senken Sie den ausgewählten Kopf um eins nach unten. Damit können Sie die Reihenfolge der Köpfe innerhalb des Geräts ändern. |

### Head Editor

Der Head-Editor wird zum Erstellen und Bearbeiten von [Heads](/basics/glossary-and-concepts#head) verwendet, indem Sätze von **Kanälen** ausgewählt werden, die einem einzelnen Head zugeordnet sind (wie vom Hersteller des Geräts definiert).

Das Bearbeiten eines Kopfes ist sehr einfach: Setzen Sie ein Häkchen bei jedem Kanal, der NUR von dem Kopf verwendet wird, den Sie gerade bearbeiten. Beachten Sie, dass Sie die für einen Kopf spezifischen Kanäle überprüfen sollten und nichts weiter. Wenn beispielsweise drei Köpfe mit jeweils einer eigenen Dimmersteuerung vorhanden sind, sollten Sie auch den Dimmerkanal einbeziehen. Wenn das Gerät stattdessen über einen einzigen Dimmerkanal verfügt, um die Intensität aller Köpfe zusammen zu steuern, dann schließen Sie ihn nicht in die Kopfdefinition ein.

![](../fixture_editor_mode_edit_head.png)

|     |     |
| --- | --- |
| **Kanalliste** | Zeigt die Liste aller im aktuellen Modus verfügbaren Fixture-Kanäle an. Kanäle, die einem anderen Kopf zugewiesen wurden, sind deaktiviert und können nicht ausgewählt werden, da jeder Kanal jeweils nur zu einem Kopf gehören kann. |

## Registerkarte „Physisch“.

Diese Registerkarte ist identisch mit der _globalen_ [physischen Registerkarte](/fixture-definition-editor/physical), die sich in den Hauptfenstern des Fixture-Editors befindet.  
Der einzige Unterschied besteht darin, dass Sie hier auswählen können, ob der Modus, den Sie bearbeiten, dieselben oder unterschiedliche physische Informationen enthält.
Lassen Sie im ersten Fall einfach die Option **„Globale Einstellungen verwenden“** aktiviert. Wenn der Modus unterschiedliche Eigenschaften verfügbar macht, aktivieren Sie die Option **Globale Einstellungen überschreiben** und geben Sie alle erforderlichen Informationen ein.