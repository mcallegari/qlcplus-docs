---
title: OS2L
date: '05:18 22-08-2023'
---

Einführung
------------

Das OS2L-Plugin ermöglicht die direkte Kommunikation zwischen QLC+ und einem OS2L-fähigen Host.  
OS2L-Spezifikationen finden Sie unter: [http://os2l.org](http://os2l.org/)  
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