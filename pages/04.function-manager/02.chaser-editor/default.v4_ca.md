---
title: 'Editor de Chasers'
date: '12:08 21-08-2023'
---

L'editor de chaser, com el seu nom indica, s'utilitza per editar ![](/basics/chaser.png) [funcions Chaser](/basics/glossary-and-concepts#chaser).  
Un Chaser es compon de passos i cada pas està representat per

* Un nombre progressiu
* El nom de la funció relacionada
* Temps de Fade In/Esvaiment d'entrada
* Temps d'espera
* Temps de Fade Out/Esvaiment de sortida
* Temps total de durada del pas
* Un camp de nota en cas que necessiteu escriure alguna cosa per a recordar el que fa el pas

Els passos de temps i el camp de nota es poden modificar fent doble clic sobre seu. Per defecte els temps es prenen en segons (per exemple 135 significa 2m15s), llevat que utilitzeu la mateixa sintaxi que utilitza QLC+ (per exemple 1m12s.80)

### Controls

|     |     |
| --- | --- |
| **Nom del Chaser** | Canvia el nom del chaser. |
| ![](/basics/speed.png) | Mostra/Oculta el giny de Selector de Velocitat, utilitzat per a facilitar l'afinació dels paràmetres del Chaser com l'esvaïment d'entrada (Fade In), l'esvaïment de sortida (Fade Out) i la espera |
| ![](/basics/player_play.png) | Inicia l'execució del Chaser per provar la reproducció començant des del pas seleccionat |
| ![](/basics/player_stop.png) | Atura una reproducció iniciada prèviament |
| ![](/basics/back.png) | Quan la reproducció estigui activa, ves al pas anterior al Chaser |
| ![](/basics/forward.png) | Quan la reproducció estigui activa, ves al pas següent al Chaser |
| ![](/basics/editcopy.png) | Copia els passos seleccionats al porta-retalls. |
| ![](/basics/editpaste.png) | Enganxa els passos copiats prèviament des del porta-retalls a la posició seleccionada. Si no n'hi ha cap, els passos s'afegiran al final de la llista |
| ![](/basics/editcut.png) | Suprimeix els passos seleccionats de la llista i copia'ls al porta-retalls. |
| ![](/basics/edit_add.png) | Afegeix una [Funció](/basics/glossary-and-concepts#funcions) existent al chaser mitjançant el diàleg [Selecciona Funció](../function-selection). La funció s'insereix després del pas seleccionat. |
| ![](/basics/edit_remove.png) | Elimina el pas seleccionat del chaser. |
| ![](/basics/up.png) | Mou el pas seleccionat per sobre/abans del pas anterior. |
| ![](/basics/down.png) | Mou el pas seleccionat per sota/després del següent pas. |
| ![](/basics/random.png) | Reordena (barrega) les escenes seleccionades aleatòriament. Les principals diferències amb "Ordre d'execució: aleatori" són que l'ordre de les escenes barrejades és estàtic, predictible, es pot modificar manualment i no afecta necessàriament a totes les escenes. |
| **Ordre d'Execució** | **Bucle**: recorre els passos una i altra vegada.<br>**Tret únic**: recorre els passos una vegada i atura't.<br>**Ping Pong**: Corre pels passos una i altra vegada, invertint la direcció en ambdós extrems.<br>**Aleatori**: recorre els passos una i altra vegada en ordre aleatori. |
| **Direcció** | **Endavant**: recorre els passos de principi a fi; 1, 2, 3...<br>**Endarrere**: recorre els passos de fi a principi; ...3, 2, 1 |
| **Velocitat de Fade In** | **Comú**: aplica la mateixa velocitat per a tots els passos d'aquest caçador<br>**Per pas**: aplica una velocitat definida per l'usuari per a cada pas d'aquest caçador<br>**Per defecte**: aplica la velocitat predeterminada per a cada pas (0 segons). |
| **Velocitat Fade Out** | **Comú**: aplica la mateixa velocitat per a tots els passos d'aquest caçador<br>**Per pas**: aplica una velocitat definida per l'usuari per a cada pas d'aquest caçador<br>**Per defecte**: aplica la velocitat predeterminada per a cada pas (0 segons). |
| **Durada del pas** | **Comú**: aplica la mateixa durada per a tots els passos d'aquest caçador<br>**Per pas**: aplica una durada definida per l'usuari per a cada pas d'aquest caçador |
