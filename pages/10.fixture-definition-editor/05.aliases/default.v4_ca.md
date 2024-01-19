---
title: Àlies
date: '07:10 22-08-2023'
---

En aquesta pestanya és possible definir les regles de substitució activades per capacitats establertes com a "Àlies" predefinits.  
Fem un exemple. Un fixture té el canal 5 anomenat "Efectes" que controla el comportament del canal 6. El canal 5 té 2 capacitats: "Speed on channel 6" i "Sound sensitivity on channel 6". Aquest últim s'ha establert al predefinit d'"Àlies". Per defecte, quan el valor DMX del canal 5 és 0, el canal 6 actua com a control de velocitat. Quan el valor DMX del canal 5 entra en la capacitat de "sensibilitat sonora", el canal 6 es converteix en un ajust de sensibilitat sonora.  
Per fer front a aquest cas, cal definir 2 canals: "Velocitat" i "Sensibilitat sonora". En el mode fixació afegir només “Velocitat”, ja que serà el comportament per defecte quan el valor DMX del canal 5 sigui igual a 0.  
Després cal definir només un àlies: el que substituirà el canal per defecte “Velocitat” per “Sensibilitat sonora”. QLC+ llavors sabrà què fer quan el valor DMX del canal 5 entri o surti de l'àlies.

![](../fixtureeditor_aliases.png)

|     |     |
| --- | --- |
| **Àlies** | Mostra la llista de totes les capacitats de tots els canals establerts com a «Àlies» predefinits. La cadena està en la forma \[Nom del canal\] - \[Nom de la capacitat\] \[Rang de valors DMX\] |
| **En mode** | Seleccioneu el mode on l'àlies ha de tenir efecte |
| **substitueix** | Seleccioneu el canal de mode a substituir quan s'activi l'àlies |
| **amb** | Seleccioneu el canal que substituirà el canal «substitueix» quan s'activi l'àlies |
| ![](/basics/edit_add.png) | Afegeix el triplet _En mode_ X, _substitueix_ Y _per_ Z a la llista d'àlies coneguts |
| ![](/basics/edit_remove.png) | Suprimeix l'àlies seleccionat de la llista d'àlies |
