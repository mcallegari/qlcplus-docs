---
title: Activadors d'Àudio
date: '03:46 22-08-2023'
---

A partir de la versió 4.4.0 de QLC+, aquesta funcionalitat us permet utilitzar una font d'entrada d'àudio, com ara un micròfon, per donar més vida als teus espectacles de llums.

Introducció
------------

En fer clic a la icona ![](/basics/audioinput.png), s'afegirà un giny d'activador d'àudio a la vostra consola virtual.  
L'àrea de gràfics del giny mostra el seguiment en directe de l'àudio capturat, mostrant un nombre de barres d'espectre i una barra de volum.  
A la part inferior es pot veure el rang de freqüències analitzades per QLC+

Configuració
-------------

En fer doble clic al giny en mode de disseny, es mostra un plafó que mostra un conjunt complet d'opcions per afinar la funcionalitat de l'activador d'àudio.  
El primer que pots configurar és el nombre de barres d'espectre que vols mostrar i que necessitaràs durant el teu directe. El nombre acceptat és d'entre 5 i 32.  
Un cop decidit el nombre de barres, podeu procedir a assignar una funcionalitat a cada barra. Hi ha una llista que mostra les opcions següents per a les barres de volum i espectre:


|     |     |
| --- | --- |
| **Nom** | Pot ser "Barra de Volum" o una barra d'espectre mostrada com a #nombre (freqüència inicial - freqüència final). Exemple: #5 (1250Hz - 1562Hz) |
| **Tipus** | Indica el tipus de funcionalitat que controlarà la barra. Pot ser:<br><br>![](/basics/uncheck.png) **Cap** - Sense funcionalitat assignada<br>![](/basics/intensity.png) **DMX** - Controla canals DMX individuals<br>![](/basics/function.png) **Funció** - Controla una funció QLC+<br>![](/basics/virtualconsole.png) **Giny VC** - Controla un giny de Consola Virtual (de moment només botons, lliscadors, tocs de selectors de velocitat i següent cue de llistes de cues) |
| **Assigna** | Quan se selecciona un tipus, es mostra un botó amb una icona ![](/basics/attach.png) per a permetre connectar la barra a la funcionalitat desitjada. Depenent del tipus que trieu, en fer clic en aquest botó es mostraran els diàlegs de selecció de canals DMX, Funcions o ginys de la consola virtual. |
| **Informació** | Aquesta columna mostra informació addicional sobre l'associació barra-funcionalitat.  <br>Depenent del tipus que trieu, trobareu aquí el nombre de canals DMX, el nom de la funció o el nom del Giny VC seleccionat |
| **Llindar Desactiva** | En seleccionar una Funció o un Botó de la Consola Virtual, aquesta columna permet establir un percentatge de llindar de desactivació. Quan la barra d'espectre o volum es trobi per sota d'aquest valor, el botó de funció/VC associada s'aturarà/desactivarà. |
| **Llindar Activa** | En seleccionar una Funció o un Botó de la Consola Virtual, aquesta columna permet establir un percentatge del llindar d'activació. Quan la barra d'espectre o volum va per sobre d'aquest valor, s'iniciarà/activarà la funció/Botó VC associada. |
| **Divisor** | Per als selectors de velocitat i les llistes de cues, això dividirà les tocs pel nombre seleccionat - només cada toc n-èsim s'enviarà realment al selector de velocitat. En altres paraules, el toc només es produeix cada enèsima pulsació. Si voleu tocar cada toc, introduïu 1, per a cada altre batec introduïu 2. Per una vegada en un compàs 4/4, introduïu 4. Per una vegada en 3 compassos 4/4, introduïu 12. El màxim és de 64. |

### Canals DMX

Podeu triar un o més canals dels fixtures pedaçats actualment. Aquests canals s'establiran proporcionalment al volum total, o volum en una banda de freqüència particular.

### Funcions

Podeu seleccionar una o més funcions. Aquestes funcions s'inicien quan el volum va per sobre del llindar Activa en la banda respectiva, i s'aturen quan va per sota del llindar Inhabilita.

### Ginys VC

Aquí només pots seleccionar **UN** giny, ja sigui un botó, un control lliscant o un selector de velocitat. Depenent del tipus:

* El **Botó** es prem quan el volum supera el llindar Habilita i s'allibera quan el volum està per sota del llindar Deshabilita (similar a les funcions).
* **Slider** es mou en proporció al volum (similar als canals DMX). Per a un control lliscant els llindars no s'apliquen.
* **Selector Velocitat** s'ha tocat.
* **Llista de Cues** es prem "Següent Cue".

Per a **Selectors de Velocitat** i **Llistes de Cues**, la premuda de toc/botó passa quan el volum va per sobre del llindar d'Activació, i no tornarà a passar fins que el volum caigui per sota del llindar Desactivació. Això probablement significa que haureu d'establir els llindars una mica més a prop l'un de l'altre que per als botons.
