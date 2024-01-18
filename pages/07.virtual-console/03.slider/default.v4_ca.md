---
title: Control Lliscant - Slider 
date: '03:02 22-08-2023'
---

Els controls lliscants s'utilitzen per a dos propòsits diferents: [Fixture](/basics/glossary-and-concepts#fixtures) ajust del nivell del canal i [Funció](/basics/glossary-and-concepts#funcions) reproducció i ajust de la intensitat. Qualsevol control lliscant pot operar en qualsevol d'aquests modes i cada mode té les seves pròpies opcions de configuració.

### Configuració

Els controls lliscants es poden configurar amb el botó de propietats ![](/basics/edit.png) que es troba a la barra d'eines o fent doble clic al mateix control lliscant.

### Configuració - Pestanya General

La pestanya General conté totes les propietats del control lliscant que es comparteixen entre els dos modes del control lliscant.

|     |     |
| --- | --- |
| **Nom del control lliscant** | Canvia el nom del control lliscant. |
| **Aparença del giny** | Un control lliscant es pot mostrar com un fader vertical ![](/basics/slider.png) o com una perilla/knob ![](/basics/knob.png). L'aparença es pot canviar sobre la marxa. |
| **Estil de visualització del Valor** | **Actual**: Mostra els valors reals DMX (0-255)<br>**Percentatge**: Mostra els valors percentuals (0-100%) |
| **Moviment del control lliscant/slider** | **Normal**: Els valors augmenten cap a la part superior i disminueixen cap a la part inferior del control lliscant.<br>**Invertit**: Capgira el control lliscant cap avall de manera que els valors augmentin cap a la part inferior i disminueixin cap a la part superior. |
| **Captura amb el valor d'entrada del controlador extern** | Quan està activada, aquesta característica ajudarà a controlar el control lliscant amb controladors externs que no admeten feedbackretroalimentació  o que no tenen faders motoritzats.  <br>Per exemple, quan es controlen uns quants controls lliscants en diferents pàgines d'un marc amb un sol fader d'un controlador extern, és molt fàcil tenir posicions "fora de sincronització" quan es canvia de pàgina.  <br>Quan aquesta opció està activada, un fader extern del controlador hauria d'introduir un cert llindar abans que el cursor del control lliscant comenci a moure's, per garantir un estat de sincronització i evitar salts del control lliscant no desitjats. |
| **Entrada Externa** | Podeu adjuntar un canal d'entrada extern des d'un dispositiu d'entrada (com un tauler lliscador) als controls lliscants de manera que no sempre hàgiu d'utilitzar el ratolí o la pantalla tàctil per a moure els controls lliscants.<br><br>**Univers d'entrada**: L'univers d'entrada des del qual voleu obtenir dades d'entrada per al control lliscant.<br>**Canal d'entrada**: El canal d'entrada individual dins de l'univers d'entrada seleccionat que voleu utilitzar per a controlar el control lliscant.<br>**Detecta automàticament**: Quan s'activa, podeu moure/premeu un botó/controlador/knob al vostre maquinari d'entrada extern i s'assignarà automàticament al control lliscant. L'última combinació es mostra als quadres de text quan QLC+ rep dades d'entrada. Si no veieu res en els quadres, la connexió d'entrada pot tenir un problema que primer heu de solucionar.<br>**Trieu...**: Mostra el diàleg [Selecciona el Canal d'Entrada](../seleccio-canal-entrada) que podeu utilitzar per a seleccionar un canal d'entrada manualment. |

### Configuració - Pestanya Nivell

Si el control lliscant no està actualment en mode Nivell, tot el que veieu és un botó que us diu que feu clic per canviar el control lliscant al mode Nivell. Després de fer-hi clic, es mostraran les propietats del mode Nivell.

|     |     |
| --- | --- |
| **Rang de Valors** | **Límit baix**: Estableix el valor DMX més baix que pot establir el control lliscant.<br>**Límit alt**: Estableix el valor DMX més alt que pot establir el control lliscant.t<br>**Des de la capacitat**: Podeu limitar l'interval del valor del nivell del control lliscant a un cert rang de capacitat dins del canal d'un fixture. Quan teniu seleccionat qualsevol interval de valors del canal de la llista de fixture (per exemple _"Dimmer Control 006 - 128"_) i feu clic en aquest botó, el límit baix i alt **** d'aquest control lliscant es pren automàticament d'aquesta capacitat i s'estableix a 6 i 128, respectivament. |
| **Llista de Fixtures** | Podeu seleccionar canals individuals d'aquesta llista que conté tots els canals de tots els vostres fixtures. Els canals als quals hàgiu col·locat la marca de verificació al costat seran controlats per aquest control lliscant. |
| **Tot** | En fer clic en aquest botó se seleccionaran TOTS els canals de TOTS els fixtures. |
| **Cap** | En fer clic en aquest botó s'esborraran TOTES les seleccions de canals de TOTS els fixtures. |
| **Inverteix** | Inverteix la selecció actual. Si teniu els canals 1, 3 i 5 seleccionats de tots els fixtures, clicant aquest botó es desseleccionaran els canals 1, 3 i 5 i en el seu lloc se seleccionaran els canals 2, 4 i 6 d'aquests fixtures. |
| **Per grup...** | Si voleu controlar un grup de canals específic des de TOTS els fixtures, podeu fer clic en aquest botó i seleccionar el grup de canals a controlar. En acceptar el diàleg se seleccionaran tots els canals que pertanyen al grup de canals seleccionat de TOTS els fixtures. Això és especialment útil si voleu tenir un control comú sobre, per exemple, tots els canals _d'intensitat_ dels vostres escàners. |
| **Click & Go** | Click & Go és una tecnologia QLC+ que permet accedir ràpidament a funcionalitats fixtures d'una manera completament visual. Quan Click & Go està activat, apareixerà un botó a la part inferior del control lliscant i amb només 2 clics arribaràs al resultat desitjat.  <br>Els modes suportats són:<br><br>**Cap**: Click & Go inhabilitat. No es mostrarà cap botó.<x5></x5>**Color**: Selecció d'un sol color. Es mostrarà un degradat del color controlat pel control lliscant, el qual us permetrà saltar visualment al color desitjat.<br>**RGB**: selecció del color RGB. Es mostrarà un selector de color RGB, que us permetrà triar qualsevol color del negre al blanc. 16 colors predefinits es mostren al costat esquerre per a més comoditat. En seleccionar un color, el valor del control lliscant es col·locarà a mig camí (128). En moure'l cap avall s'esvairà cap al negre, mentre que en moure'l cap amunt s'esvairà cap al blanc.<br>**Gobo/Effect**: selecció Gobo/Macro. Es mostrarà una vista de quadrícula de les macros definides del fixture i podreu triar una macro des del seu color, el seu gobo o el seu nom. Quan el ratolí està sobre una cel·la de macro, apareixerà una barra blava, que us permetrà triar un valor intermedi dins de la mateixa macro. Això és útil per a funcionalitats com la velocitat de gir de Gobo. |
| **Monitora els canals seleccionats i actualitza el nivell del control lliscant** | **(EXPERIMENTAL)** Si habiliteu aquesta opció, el control lliscant observarà els canvis dels canals DMX i si assumeixen tot el mateix nivell, el control lliscant s'actualitzarà en conseqüència per a una retroalimentació visual immediata.  <br>En activar aquesta opció, es mostrarà un botó de reinici i una barra de nivell addicional a la disposició del control lliscant.  <br>Si interactueu amb el control lliscant mentre està monitoritzant alguns canals DMX, canviarà a un estat de substitució, similar al que passa a Simple Desk. El fons del botó de reinici es tornarà vermell, indicant que la sobreescriptura està en el seu lloc, i la barra de nivell del costat dret continuarà indicant el nivell de seguiment.  <br>En prémer el botó de reinici des d'un estat de sobreescriptura, el control lliscant tornarà al nivell de monitorització actual.  <br>És possible associar i controlar externament el botó de reinici de substitució. |

### Configuració - Pestanya de Reproducció

Si el control lliscant no està actualment en mode Reproducció, tot el que veieu és un botó que us diu que feu clic per canviar al mode Reproducció. Després de fer-hi clic, es mostraran les propietats del mode de Reproducció.

Quan el control lliscant està en mode de reproducció, el control lliscant actua com un botó combinat i un control lliscant. Podeu iniciar una funció I controlar simultàniament la intensitat de la funció amb el control lliscant. Quan el control lliscant és a zero, la funció s'atura però qualsevol valor per sobre de zero iniciarà la funció (tret que ja s'hagi iniciat) i simultàniament ajustarà la intensitat de la funció (si és aplicable).

Un control lliscant en mode de reproducció ignorarà els temps d'entrada i sortida de la funció adjunta, de manera que les transicions d'esvaïment s'hauran de realitzar manualment.  
Si necessiteu automatitzacions d'esvaïment d'entrada/sortida juntament amb el control de la intensitat de la funció, llavors l'ús d'un botó de la consola virtual ![](/basics/button.png)[](../boto) en combinació amb un Slider en mode Submaster és el que esteu cercant.

|     |     |
| --- | --- |
| **Funció** | Mostra la funció que està assignada al control lliscant. |
| ![](/basics/attach.png) | Assigna una funció al control lliscant. |
| ![](/basics/detach.png) | Desmarca la funció assignada. |

### Configuració - Pestanya de Submestre/Submaster

Si el control lliscant no està actualment en mode Submestre, tot el que veieu és un botó que us diu que feu clic per canviar al mode Submestre. Després de fer-hi clic, el control lliscant s'establirà perquè funcioni com a submestre.

Quan un control lliscant s'estableix al mode Submestre, controlarà la intensitat de tots els altres ginys en el mateix marc (cal tenir en compte que l'àrea principal de la Consola Virtual també és un marc !)  
La intensitat d'un giny depèn del tipus de giny en si i de quina funcionalitat controla. Un submestre controlarà la intensitat de qualsevol funcionalitat de QLC+ "emissió de llum", ja sigui una funció o un sol canal.  
Per exemple, un submestre pot controlar la intensitat d'una funció adjuntada a un botó [](../boto) o els nivells de canal associats a un control lliscant en mode de nivell.  
Cada giny està controlat per un submestre fins i tot si la funcionalitat del giny encara no està activa. Per exemple, si un submestre s'estableix al 50%, un botó premut després iniciarà la seva funció associada amb el 50% d'intensitat.
