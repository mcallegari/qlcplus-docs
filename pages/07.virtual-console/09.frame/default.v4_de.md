---
title: Rahmen
date: '03:39 22-08-2023'
---

Ein Rahmen ist ein Container, der eine Vielzahl von Widgets, einschließlich anderer Rahmen, enthalten kann. Tatsächlich ist die gesamte virtuelle Konsole bereits Ihr unterster Rahmen. Wenn Sie außerdem einige [Stilattribute] (../styling-and-placement) auf einen Rahmen anwenden, erben alle seine untergeordneten Elemente (auf die keine eigenen, nicht standardmäßigen Stileinstellungen angewendet wurden) auch die Stileigenschaften ihrer übergeordneten Elemente.

## Konfiguration
<hr>

Rahmen können mit der Schaltfläche „Eigenschaften“ ![](/basics/edit.png) in der Symbolleiste oder durch Doppelklicken auf den Rahmen selbst konfiguriert werden.  
  
Abgesehen von den standardmäßigen [Styling- und Platzierungsoptionen] (../styling-and-placement) verfügen Rahmen über die folgenden zusätzlichen Optionen, die in zwei Registerkarten unterteilt sind:  

### Registerkarte „Darstellung“.

* **Frame-Name**: Ermöglicht Ihnen, dem Rahmen eine beliebige Bezeichnung zuzuweisen. Dies wird nur angezeigt, wenn die Option „Kopfzeile anzeigen“ aktiviert ist (siehe unten).
* **Untergeordnete Widgets akzeptieren**: Ermöglicht das Hinzufügen von Widgets zum Rahmen.
* **Größenänderung zulassen**: Ermöglicht die Änderung der Rahmenhöhe und -breite.
* **Header anzeigen**: Zeigt den Rahmen-Header an. Standardmäßig werden drei Elemente angezeigt: Eine Schaltfläche zum Erweitern/Reduzieren, der Rahmenname und eine Schaltfläche zum Aktivieren/Deaktivieren. Einige weitere optionale Steuerelemente werden angezeigt, wenn sich der Rahmen im Mehrseitenmodus befindet. Siehe nächsten Absatz.

### Registerkarte „Seiten“.

Virtuelle Konsolenrahmen können in mehrseitige Widgets umgewandelt werden, was nützlich ist, wenn es um viele Widgets oder Controller geht, die Seiten unterstützen.  
Die Mehrseitenfunktion ist standardmäßig deaktiviert, kann aber auf dieser Registerkarte aktiviert werden.  
Befolgen Sie die Optionen zum Konfigurieren dieser Funktionalität:

* **Aktivieren**: Dieses Kontrollkästchen aktiviert/deaktiviert die Mehrseitenfunktionalität. Wenn diese Option aktiviert ist, zeigen VC-Frames zusätzliche Steuerelemente in der Kopfzeile an (sofern die Kopfzeile ebenfalls aktiviert ist). Dies sind: Schaltfläche „Vorherige Seite“, Seitenname und Schaltfläche „Nächste Seite“.
* **Anzahl der Seiten**: Mit diesem Zähler ist es möglich, die Anzahl der Seiten zu bestimmen, die der Rahmen verarbeiten wird.
* **Widgets der ersten Seite klonen**: Wenn diese Option aktiviert ist, klont QLC+ die Widgets der ersten Seite des Frames in alle anderen neuen Seiten, die im Feld „Anzahl der Seiten“ definiert sind. Dies ist eine sehr nützliche Option, um die Zuordnung eines externen Controllers zu beschleunigen, bei dem alle Seiten über dieselben Widgets verfügen.
* **Externer Eingang – Vorherige Seite**: Hier können Sie ein externes Eingangssignal oder eine Tastaturkombination einstellen, die bewirkt, dass die vorherige Seite des Rahmens angezeigt wird.
* **Externer Eingang – Nächste Seite**: Hier können Sie ein externes Eingangssignal oder eine Tastaturkombination einstellen, die bewirkt, dass die vorherige Seite des Rahmens angezeigt wird.
* **Seitenverknüpfungen**: Im unteren Bereich der Registerkarte „Seiten“ können Sie jeder Seite einen benutzerdefinierten Namen, ein externes Eingangssignal oder eine Tastaturkombination zuweisen.  
    Auf diese Weise kann direkt auf eine Seite zugegriffen werden, ohne dass die Zwischenseiten durchlaufen werden müssen.
    

## Header-Steuerelemente
<hr>

Standardmäßig wird ein Frame mit einer Kopfzeile angezeigt. Im Folgenden finden Sie eine kurze Beschreibung der standardmäßigen und optionalen Steuerelemente, die entweder im Betriebs- oder Entwurfsmodus verwendet werden können.

* ![](/basics/expand.png) **Schaltfläche „Erweitern/Reduzieren“**: Wenn Sie darauf klicken, wird die Framegröße drastisch reduziert, um Platz auf Ihrer virtuellen Konsole zu sparen. Der reduzierte Zustand wird in Ihrem Projekt gespeichert.
* **Frame-Name**: eine Beschriftung, die den Frame-Namen anzeigt
* ![](/basics/check.png) **Schaltfläche „Aktivieren/Deaktivieren“**: Wenn Sie darauf klicken, wechselt der Frame in einen deaktivierten Zustand. Alle Widgets innerhalb des Frames reagieren nicht mehr auf Eingabesteuerelemente.  
    Dies ist beispielsweise nützlich, um dieselben Eingabesteuerelemente für Widgets verschiedener Frames zu verwenden. Wenn Sie beispielsweise die Taste „G“ an eine Schaltfläche in Frame A und auch an eine Schaltfläche in Frame B gebunden haben, können Sie jeweils einen Frame aktivieren, um Ihre Tastenbindung universell zu verwenden.
* ![](/basics/back.png) Seite ![](/basics/forward.png) **Mehrseitige Steuerelemente** (Optional): Wenn ein Frame im Mehrseitenmodus konfiguriert ist, werden einige zusätzliche Schaltflächen angezeigt In der Kopfzeile können Sie zwischen den Frame-Seiten wechseln und den Überblick über die aktuelle Seite behalten, auf der Sie sich befinden.