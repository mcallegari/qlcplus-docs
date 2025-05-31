---
title: OS2L
date: '05:18 22-08-2023'
---

Einführung
------------

Das OS2L-Plugin ermöglicht die direkte Kommunikation zwischen QLC+ und einem OS2L-fähigen Host.  
OS2L-Spezifikationen finden Sie unter: [https://os2l.org](https://os2l.org/)
Derzeit ist der einzige unterstützte OS2L-Host [Virtual DJ](https://www.virtualdj.com/).  
Das QLC+ OS2L-Plugin funktioniert entweder auf demselben Host (127.0.0.1) oder auf einem anderen Host mit einem Betriebssystem Ihrer Wahl (Windows, macOS, Linux).

Konfiguration – Virtueller DJ
--------------------------

Zuallererst müssen Sie VDJ mitteilen, wohin OS2L-Nachrichten gesendet werden sollen.  
Öffnen Sie die VDJ-Einstellungen, gehen Sie zum Bereich „Optionen“ und geben Sie „os2l“ in das obere Suchfeld ein.  
Ändern Sie das Feld „os2lDirectIp“, indem Sie den IP-Port festlegen, über den VDJ QLC+ erreichen kann. Beispielsweise sollte „127.0.0.1:9996“ funktionieren, wenn QLC+ auf demselben (Windows-)PC von VDJ läuft.  
Wenn Sie fertig sind, starten Sie VDJ neu.  
  
Gehen Sie nun zu QLC+ und aktivieren Sie das OS2L-Plugin in einem beliebigen Universum. Wenn Sie in VDJ einen bestimmten Port festgelegt haben, öffnen Sie den OS2L-Konfigurationsdialog und stellen Sie dort denselben Port ein.  
Sobald dies erledigt ist, beginnt QLC+, Signale von VDJ zu empfangen (das Joystick-Symbol blinkt neben dem Universe-Feld).

Client-Konfiguration
--------------

Um andere Clients zu unterstützen, muss ein Eingabeprofil erstellt werden, welches OS2L Nachrichten den Kanälen zuweist. Das OS2L Plugin hört auf folgende Events: `beat`, `cmd` und `btn`.

Eine `beat` Nachricht ändert den Wert des Kanals 8342 auf 255. Beispiel: `{"evt":"beat"}`.

Eine `cmd` Nachricht addressiert den Kanal mit der Nummer gegebn durch `id` und setzt den Wert gegeben durch `param`. Beispiel: `{"evt": "cmd", "id": "1", "param": 255}`.

Eine `btn` Nachricht kann auch Konfiguriert werden. Die Kanalnummer wird vom CRC des `name` Parameters abgeleitet. Der einfachste Weg um die Kanalnummer herauszufinden, ist durch den Automatikmodus im Eingabeprofil. Der Wert, der auf den Kanal gelegt wird, ist entweder 255 bei einem `state` von `on` bzw. 0 bei `off`. Beispiel: `{"evt":"btn","name":"Light Left 2","state":"on"}`.

