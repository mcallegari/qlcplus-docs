---
title: 'Video Editor'
date: '04:33 22-08-2023'
---

L'editor de vídeo, com el seu nom indica, s'utilitza per editar les funcions ![](/basics/video.png) [Video](/basics/glossary-and-concepts#video).

Controls
--------

|     |     |
| --- | --- |
| ![](/basics/player_play.png) | Inicia/atura la reproducció de vídeo. Si el fitxer no existeix o s'ha introduït un URL no vàlid, aquest botó no tindrà cap efecte |
| **Nom del Vídeo** | Canvia el nom de la funció Vídeo. Per defecte, es defineix amb el nom del fitxer, fins que es canvia manualment. |
| **Nom del Fitxer** | Si el fitxer adjunt és local, mostra la ruta absoluta del fitxer de vídeo. Es pot canviar un fitxer d'origen local fent clic al botó "..." del costat dret.  <br>També és possible transmetre un vídeo des de la xarxa. Només cal que feu clic al ![](/basics/global.png) botó i introduïu un URL HTTP vàlid. |
| **Durada** | Mostra la durada del fitxer de vídeo a la manera típica QLC+. Per exemple: 04m14s.22. |
| **Resolució** | Mostra la resolució en píxels detectats al fitxer de vídeo adjunt.  <br>**Nota**: ja que QLC+ es basa en les [biblioteques Qt](https://www.qt.io/) per reproduir fonts de vídeo, hi ha un problema conegut pel qual les Qt no són capaces de detectar la mida (i còdecs) dels vídeos al Windows i Mac OSX.  <br>Bàsicament es mostrarà una mida de «0x0». La reproducció de vídeo a pantalla completa serà correcta.  <br>En fallar la detecció, s'estableix internament una mida predeterminada de 640x480 píxels per permetre que funcioni el mode de finestra.  <br>Esperem que l'equip de les Qt ho solucioni en el futur. |
| **Còdec de Vídeo** | Mostra el còdec utilitzat per comprimir el flux de vídeo al fitxer de vídeo adjunt. |
| **Còdec d'Àudio** | Mostra el còdec utilitzat per comprimir el flux d'àudio al fitxer de vídeo adjunt. |
| **Pantalla** | Permet seleccionar la pantalla de sortida on s'ha de reproduir el vídeo. Normalment, això mostrarà només una opció, llevat que hi hagi diverses sortides de vídeo (monitors, projectors) connectades al sistema |
| **Sortida de Vídeo** | Permet triar com s'ha de mostrar el vídeo adjunt. Les opcions possibles són<br><br>**Finestrat**: una finestra amb la mida original del vídeo es mostrarà a la pantalla de sortida seleccionada.<br>**Pantalla completa**: El vídeo utilitzarà tota la mida de la pantalla, sense mostrar cap decoració de la finestra (barra de títol, etc) |
| **Mode de Reproducció** | Permet triar com s'ha de reproduir el vídeo adjunt. Les opcions possibles són<br><br>**Una sola presa**: El vídeo es reproduirà només una vegada<br>**Loop**: La reproducció de vídeo es reiniciarà des del principi en arribar al final. El mode de bucle continuarà indefinidament fins que s'aturi la funció Vídeo. |