---
title: Loopback
date: '05:14 22-08-2023'
---

Einführung
------------

Das Loopback-Plugin bietet eine Möglichkeit, Widgets der [Virtual Console](/virtual-console) aus Szenen und anderen [Funktionen](/basics/glossary-and-concepts#functions) zu steuern. Daten, die QLC+ an den Ausgangsport sendet, werden zum Eingangsport zurückgeschleift, wo sie zur externen Steuerung verwendet werden können. Offensichtlich können der Ausgabe-Port und der Eingabe-Port an unterschiedliche Universen angeschlossen sein.

Das Plugin stellt 4 unabhängige Zeilen zur Verfügung.

Dieses Plugin ist hauptsächlich für fortgeschrittene Benutzer gedacht – im Gegensatz zu anderen Eingabe-/Ausgabe-Plugins steuert dieses Plugin kein echtes Gerät.

Konfiguration
-------------

Das Loopback-Plugin hat keine Konfiguration. Hängen Sie Eingabe und Ausgabe einfach an die gewünschten Universen an.

Beispiele
--------

### Schaltflächen, die einen (Submaster- oder regulären) Schieberegler auf einen vordefinierten Wert setzen

Diese Schaltflächen können mit einer Fade-Zeit versehen sein. Diese Änderungen können schrittweise erfolgen.

Schritte:

1. Legen Sie ein Universum für den Loopback-Ausgang (U1) fest und stellen Sie das Eingabeuniversum des Schiebereglers auf Loopback-Eingang (U2) ein. Nehmen wir an, die externe Steuerung des Schiebereglers ist auf Kanal 14 eingestellt.
2. Fügen Sie den Dimmerkanal zu U1 an Adresse 14 hinzu. Stellen Sie ihn im Kanalmodifikatordialog auf LTP ein (damit der Schieberegler nicht auf Null geht, wenn die Schaltfläche erlischt).
3. Erstellen Sie Szenen mit den gewünschten Schiebereglerwerten für Kanal 14 im U1-Universum. Sie können auch Fade-Zeiten festlegen.
4. Erstellen Sie Schaltflächen für die Szenen