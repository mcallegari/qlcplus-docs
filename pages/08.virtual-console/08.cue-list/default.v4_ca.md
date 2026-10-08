---
title: Llista de Cues
date: '03:34 22-08-2023'
---

Una Llista Cue proporciona una llista de [Funcions](/basics/glossary-and-concepts#funcions) que podeu passar amb una sola tecla de teclat. La Llista Cue està dissenyada per a representacions teatrals on l'operador d'il·luminació només ha de seguir el guió i commutar el següent punt a mesura que l'actuació continua.

La primera columna de la Llista Cue mostra el número de cue que va de l'1 a l'infinit i més enllà de[*](https://ca.wikipedia.org/wiki/Buzz_Lightyear). La segona columna mostra el nom de la [Funció](/basics/glossary-and-concepts#funcions) individual que s'ha assignat a aquesta cue en particular.

**Tingueu en compte** que només els [Chasers](/basics/glossary-and-concepts#chaser) es poden assignar a una llista de Cue, per la senzilla raó que el Chaser és l'única funció amb una durada. Com que qualsevol altra funció es pot afegir com a pas a un Chaser amb l'editor de Chaser [](/function-manager/chaser-editor), és senzill crear els Cues desitjats barrejant [Escenes](/basics/glossary-and-concepts#escena), [Col·leccions](/basics/glossary-and-concepts#colleccio), i així successivament...

### Configuració

Les llistes de cues es poden configurar amb el botó de propietats de l'objecte ![](/basics/edit.png) que es troba a la barra d'eines o fent doble clic al giny de la llista de cues.

|     |     |
| --- | --- |
| **Nom de Llista Cue** | Estableix el nom amigable de la Llista Cue. El nom apareix com el títol de la segona columna de la Llista Cue. |
| **Llista de Cue** | **Chaser**: Seleccioneu el [Chaser](/basics/glossary-and-concepts#chaser) per associar-lo amb la Llista Cue.  <br>![](/basics/attach.png) Associa un [Chaser](/basics/glossary-and-concepts#chaser) a la llista de Cue mitjançant el diàleg [Selecciona Funció](/function-manager/function-selection).  <br>![](/basics/detach.png) Separa el Chaser seleccionat de la Llista Cue.  <br>  <br>**Disposició dels botons de reproducció**: Seleccioneu com es pot controlar la reproducció amb els dos botons disponibles.  <br>  <br>**Comportament dels botons següent/anterior quan el chaser no està actiu**: Seleccioneu el comportament dels botons següent i anterior quan el Chaser no s'està executant. Bàsicament aquesta opció determina l'acció que s'ha de prendre quan s'inicia el Chaser per primera vegada o quan el Chaser s'atura a qualsevol punt de la llista.  <br>Les opcions possibles són:<br><br>**Executa el chaser des del primer/últim cue/pas (predeterminat)**: Aquest és el comportament predeterminat i executarà el Chaser amb el seu ordre d'execució original (Normal o Invers)<br>**Executa el chaser des del següent/previ cue<br>**Selecciona el següent/previ cue<br>0 : Això només realitza una selecció d'un cue, sense executar el Chaser <br>1**No facis res**: No es pren cap acció en aquest cas. Això és útil quan només es treballa amb el botó Reprodueix/Atura |
| **Reproducció** | Podeu seleccionar la tecla que voleu utilitzar per iniciar/aturar la cue seleccionada a la llista de Cues amb aquesta opció. La combinació de tecles es mostra en el camp de text; si el camp està buit, no hi ha cap combinació de tecles actualment adjuntada a la llista Cue. |
| **Següent Cue** | Podeu seleccionar la tecla que voleu utilitzar per passar a la següent cue a la llista de Cues amb aquesta opció. La combinació de tecles es mostra al camp de text; si el camp està buit, no hi ha cap combinació de tecles actualment adjuntada a la llista de Cues. |
| **Cue Prèvia** | Podeu seleccionar la tecla que voleu utilitzar per saltar a la cue anterior a la llista de cues amb aquesta opció. La combinació de tecles es mostra al camp de text; si el camp està buit, no hi ha cap combinació de tecles actualment adjuntada a la llista de Cues. |
| **Fader Lateral** | **Comportament**: Seleccioneu el comportament del fader lateral.<br><br>Si se selecciona **Crossfade/Esvaiment Creuat**, es mostrarà un fader a la part esquerra del plafó, implementant la funcionalitat crossfade/esvaiment creuat entre cues.<br>Si se selecciona **Steps**, es mostrarà un fader a la part esquerra del plafó, i el seu valor determinarà quina cue de la llista Cues s'executarà. |



### Mode de Operació

En canviar QLC+ a [Mode Operació](/basics/glossary-and-concepts#modes), la llista Cue es tornarà activa, permetent la selecció dels cues desitjats inclosos en el Chaser associat.

En prémer la tecla RETORN s'iniciarà el cue seleccionat.

Els següents elements es mostren a la part inferior del giny de la Llista de Cues:


|     |     |
| --- | --- |
| **Barra de progrés del Cue** | Una barra de progrés que mostra l'estat actual del cue en execució.  <br>Quan s'estableix una velocitat d'esvaïment/Fade In i no s'estableix a "predeterminat", la barra s'acolorirà en verd.  <br>Durant el temps de retenció, la barra es colorejarà de blau. El text que es mostra a la barra és el temps que queda perquè acabi el cue.  <br>Si la durada del cue és infinita (∞), la barra només mostrarà l'esvaïment/Fade In en curs en verd. |
| ![](/basics/slider.png) | En fer clic, aquest botó obrirà/tancarà un plafó lateral que mostrarà un fader per a controlar l'esvaïment creuat o la selecció de passos.  <br>(Vegeu el capítol següent per als detalls de l'esvaïment encreuat/Crossfade) |
| ![](/basics/player_play.png)  <br>![](/basics/player_pause.png)  <br>![](/basics/player_stop.png) | Hi ha 3 versions que indiquen que una llista Cue pot assumir: **executant**, **fent una pausa a** i **aturat a**.  <br>La disposició dels botons de control de reproducció es pot decidir en el diàleg de configuració, i les regles de reproducció aplicades sempre són les següents: <br>![](/basics/player_play.png) <br>Quan es fa clic des d'un estat aturat, la reproducció comença des de el cue actualment seleccionat. Si no se selecciona cap cue, la reproducció comença des de la primera cue d'acord amb l'ordre d'execució del Chaser associat.  <br>Un cop clicada, la icona del botó canvia en funció de la disposició dels botons escollits, que podria ser "pausa" o "atura".  <br>Quan es fa clic des d'un estat en pausa, la reproducció es reprendrà des d'on es va deixar.  <br>  <br>![](/basics/player_pause.png) <br>Quan feu clic, la reproducció dels cues actualment en execució s'atura, congelant tot el que s'estava executant a l'estat actual (els llums romandran encesos, els motors deixaran de moure, etc.).  <br>El fons del botó es convertirà en un blau clar, per indicar que en fer-hi clic de nou es reprendrà la reproducció de el cue des d'on es va deixar.  <br>**Nota:** És possible fer una pausa de les fases d'esvaïment d'entrada/Fade In i mantenir, però no un esvaïment de sortida/Fade Out.  <br>  <br>![](/basics/player_stop.png) <br>Quan feu clic, la cue actualment en execució s'aturarà i la selecció del cue romandrà a l'últim cue reproduït. Qualsevol estat en pausa es reiniciarà i s'aturaran els llums.  <br>Si la disposició dels botons és "Reprodueix/Pausa + Atura", prement aquest botó per segona vegada, es tornarà al cue seleccionat al primer cue del Chaser (o l'última si s'inverteix l'ordre d'execució) |
| ![](/basics/back.png) | Torna al punt anterior de la llista Cue, que després es reproduirà. Quan s'arribi a la part superior, el punt anterior serà l'últim punt de la Llista de Cues |
| ![](/basics/forward.png) | Aneu al següent punt de la llista Cue, que després es reproduirà. En arribar a la part inferior, la següent marca serà la primera de la Llista de Cues |



### Esvaïment creuat/Crossfade

El fader lateral es pot utilitzar per controlar manualment l'esvaïment creuat entre dues cues consecutives.

Els números a la part superior i inferior del fader mostren el "cue actual" i el "cue següent".  
L'etiqueta per el cue actual té una etiqueta blava. Això serà al 100% quan s'iniciï la reproducció de la llista Cue.  
L'etiqueta per a la següent cue té una etiqueta taronja i serà al 0% quan s'iniciï la reproducció de la llista de cues.

Quan la llista de Cue s'està executant, el fader d'esvaïment creuat controla la intensitat de les cues associades, anul·lant les seves velocitats d'entrada i sortida d'esvaïment i permetent així el control manual de la transició.

Després que el fader s'hagi mogut a l'extrem oposat del seu recorregut, es produeixen els següents canvis:

* L'etiqueta taronja de la següent cue canvia a blau. Això indica que l'antiga següent cue s'ha convertit en la nova cue actual.
* L'etiqueta blava actual del cue canvia a taronja i el nombre del cue augmenta en 2. Així que aquest fader ara controla el cue que ve després de l'antic següent cue.



### Consell

Quan s'afegeix un cue a un Chaser mitjançant l'[Editor de Chaser](/function-manager/chaser-editor), la durada predeterminada s'estableix en 0.  
Per evitar que els cues de la llista de cues es reprodueixin frenèticament sense cap resultat, estableix la durada dels cues, ja sigui fent doble clic al camp de durada o utilitzant el Giny Selector de Velocitat![](/basics/speed.png)  
Tingueu en compte que si necessiteu escenes que s'esvaeixin manualment amb el giny Llista de Cues, probablement vulgueu establir la durada de els cues a "infinit" (∞) mitjançant el [Giny Selector de Velocitat](../speed-dial). Això es pot activar a l'editor de Chasers fent clic al botó ![](/basics/speed.png).
