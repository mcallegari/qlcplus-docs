---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

El XY Pad és un giny de consola virtual dedicat al posicionament de fixtures.  
Pot gestionar els canals de moviment DMX típics (**panoràmica** i **inclinació**) dels aparells d'il·luminació intel·ligents, és a dir, escàners i capçals mòbils.  
El pad és una zona redimensionable, envoltada de diversos controls per cobrir les necessitats que puguis tenir durant un espectacle en directe.  
Es mostra de la següent manera:

![](xypad.png)

### Elements del Giny

|     |     |
| --- | --- |
| **(1) Controls lliscants d'interval** | Aquests controls lliscants limiten l'àrea de treball. (7) |
| **(2) Nom del Pad X/Y** | El nom es pot canviar a les propietats, vegeu més avall. |
| **(3) Coordenades DMX** | Aquesta part mostra les coordenades DMX actuals en format (Pan course.Pan fine : Tilt course.Tilt fine). |
| **(4) Angle horitzontal i vertical** | Si els fixtures controlats tenen un rang d'inclinació i panoràmica adequat omplert en les seves definicions, i l'interval és el mateix per a tots els fixtures, llavors aquest text mostrarà l'angle calculat a partir de les coordenades DMX.  <br>0° està al mig del rang (valor DMX 127,127). Per exemple, si l'interval de la panoràmica per a un fixture és 540., l'angle mostrat serà entre -270. i 270..  <br>Nota: això pot no funcionar correctament, quan un fixture té un interval d'eix limitat a la configuració, o un eix invertit. |
| **(5) Controls lliscants de Valor** | Aquests controls lliscants es poden utilitzar per a canviar el valor dels eixos X/Y. |
| **(6) Manipulador** | El punt blau és el manipulador. Podeu moure'l amb el ratolí, amb el teclat o amb un controlador extern. |
| **(7) Zona de Treball** | Aquest és l'àmbit que limita les possibles posicions. Pot ser igual o una porció de (8) |
| **(8) Àrea Principal** | Aquesta és l'àrea que representa totes les possibles posicions X/Y. |
| **(9) Predefinits** | Aquesta és l'àrea que mostra els botons de preselecció, si estan disponibles. |

### Limitar l'àrea de treball

El XY Pad és bàsicament un mapa de tot el rang de graus que poden gestionar els canals de panoràmica i inclinació dels teus fixtures.  
Aquesta és una imatge que representa com l'àrea principal normalment representa els graus:

![](xypad2.png)

No obstant això, hi ha casos en què es vol limitar els graus que pot assolir un cap en moviment o un escàner.  
Per exemple, els fixtures amb un rang de 540° Pan, s'han de limitar a treballar només en un rang de cara a l'audiència, o potser vulguis evitar que els caps mòbils muntats al revés en una armadura apuntin al sostre o fora de l'escenari.  
Amb el XY Pad, hi ha 2 maneres d'aconseguir-ho:

**1\. Finestra de treball**

Amb els controls lliscants de rang superior i esquerre **(1)**, és possible limitar l'àrea on funcionarà el XY Pad.  
En reduir l'interval d'aquests controls lliscants, es ressaltarà una àrea verda semi transparent **(7)** a la part superior de l'àrea principal, per a marcar els límits X/Y on haurien d'operar els accessoris.  
Tingueu en compte que quan utilitzeu un ratolí a la interfície d'usuari, el moviment de les nanses es limitarà a la finestra de treball, fins i tot si arrossegueu el cursor fora d'ella, mentre que quan utilitzeu un controlador extern, tots els valors s'escalaran a la finestra, de manera que podreu utilitzar tot el rang d'un fader físic, tenint així més sensibilitat quan establiu una posició.

**2\. Rang de fixture individual**

És possible establir un interval específic per a cada fixture en el diàleg de propietats (vegeu el paràgraf **Configuració**). Amb aquest mètode, s'utilitza tota l'àrea principal **(8)** i s'escala cada rang especificat de cada fixture.  
Això és molt útil quan es vol utilitzar un pad XY amb fixtures mixtes, amb diferents rangs de graus.

Per exemple, pots fer que una panoràmica de 540° graus es mogui exactament com una panoràmica de 360°.

Un altre exemple: fixar l'eix X (Pan) mínim al 20% (valor DMX 51), màxim al 80% (valor DMX 204). Quan la nansa es troba a la vora esquerra (valor 0), la sortida real de DMX és 51. De la mateixa manera, la nansa a la vora dreta donarà 204 (=80%). Per als valors entremig, la sortida DMX s'escala proporcionalment.

És possible tenir els dos límits habilitats (utilitzant els controls lliscants de rang i els límits per fixtures).

### Usos del Pad XY

El Pad XY permet 3 usos completament diferents, però tots orientats al posicionament. Depèn de tu decidir el millor ús d'ells en funció de les teves necessitats. També és possible que vulgueu considerar l'ús de múltiples XY Pads amb diferents propòsits.

* **1- Posicionament Absolut**: aquest és l'ús bàsic i només requereix especificar quins fixtures voleu controlar (afegits a través de la finestra de configuració) i finalment el seu rang específic d'operació.  
    Com es descriu anteriorment, tot el que heu de fer és configurar els fixtures una vegada i començar a moure'ls amb el vostre controlador preferit.  
    També és possible definir alguns preajustos de posició, de manera que es mostraran diversos botons a **(9)** per recuperar ràpidament una posició absoluta.  
    Si s'activa un Grup Fixture predefinit, el XY Pad controlarà les posicions absolutes només dels Fixtures definits al predefinit. (vegeu la pestanya Predefinits per a més informació)

* **2- EFX**: A la finestra Configuració (pestanya Presets), és possible afegir alguns presets per recuperar les funcions ![](/basics/efx.png) [EFX](/basics/glossary-and-concepts#efx) existents. En activar un valor predefinit EFX, la vista prèvia animada dels moviments de fixtures es mostrarà així:  
![](xypad-efx.png)  
    Si no s'ha definit cap finestra de treball, es mostrarà l'EFX exactament com es previsualitza a l'editor [EFX](../function-manager/efx-editor). Altrament, l'EFX s'escalarà per a ajustar-se a la finestra de treball definida.  
    Si una finestra de treball està activa, es compartirà entre l'ús #1 i l'ús #2.

* **3- Relatiu a una Escena**: A la finestra de Configuració (pestanya Presets), també és possible afegir alguns presets per recuperar les funcions d'![](/basics/scene.png) [Escena](/basics/glossary-and-concepts#scene) existents  
    El Pad XY detectarà quins canals de panoràmica/inclinació hi ha a l'escena i els configurarà.  
    El manipulador del Pad **(6)** es col·locarà automàticament al centre de l'àrea principal **(8)**. En moure la nansa, es produiran valors relatius des del centre del Pad, que s'afegiran/substrauran als valors DMX de l'escena en execució.  
    En moure cap amunt s'afegirà un desplaçament negatiu als canals d'inclinació i en baixar s'afegirà un desplaçament positiu.  
    En moure a l'esquerra s'afegirà un desplaçament negatiu als canals Panoràmica i en moure a la dreta s'afegirà un desplaçament positiu.  
    Quan s'activa una predefinició d'Escena, hi ha una finestra de treball activada, s'ocultarà, ja que no hi ha valors absoluts implicats en aquest ús. Quan tornis a l'ús #1 o #2, es restablirà la finestra de treball.  
    Tingueu en compte que quan s'activa una predefinició d'Escena, s'iniciarà tota l'Escena, amb colors i tot. En aquest cas es suggereix crear escenes només amb els canals Pan/Tilt habilitats, no per implicar un XY Pad en altres assumptes.

### Control del Teclat

És possible controlar la posició del cap amb les fletxes del teclat. Cada pulsació de tecla augmenta/disminueix el valor aproximat en 1. Amb la tecla Maj premuda, el canal fi es canvia per 1. Amb Ctrl, el pas és 10 en lloc d'1.

|     |     |     |
| --- | --- | --- |
| **Tecles de Fletxa** | Gruixut | Pas=1 |
| **Majúscules + Tecles de fletxa** | Fi | Pas=1 |
| **Ctrl + tecles de fletxa** | Gruixut | pas=10 |
| **Maj + Ctrl + Tecles de fletxa** | Fi | pas=10 |

### Configuració

Els Pads XY es poden configurar amb el botó de propietats ![](/basics/edit.png) que es troba a la barra d'eines o fent doble clic al propi Pad XY.

**1\. Pestanya General**

Aquí podeu establir el comportament bàsic del Pad XY, així com els controls d'entrada externs.  
**Consell:** Quan assigneu un pad XY des de Touch OSC, haureu de fer clic al botó de detecció automàtica "Eixos d'ajustament / Vertical", en cas contrari els eixos X i Y s'intercanviaran.

|     |     |
| --- | --- |
| **Nom del Pad XY** | Estableix el nom del Pad XY. El nom **(2)** es mostra a la cantonada superior esquerra del giny a la Consola Virtual. |
| **Moviment del control lliscant de l'eix Y** | El comportament del control lliscant vertical (el control de l'eix Y) es pot establir a **Normal** o **Invertit**.  <br>En el primer cas s'arribarà al valor màxim a la part inferior del coixinet, mentre que en el segon cas s'arribarà a la part superior. |
| **Eix Panoràmic/ Horitzontal** | Permet seleccionar una entrada externa per a controlar el control lliscant horitzontal que es mostra a la part inferior del giny. En activar un valor predefinit EFX, aquesta entrada controlarà la posició X de la finestra de treball, per tant la posició X de l'EFX. |
| **Inclinació / Eix vertical** | Permet seleccionar una entrada externa per controlar el control lliscant vertical que es mostra al costat dret del giny. En activar un valor predefinit EFX, aquesta entrada controlarà la posició Y de la finestra de treball, per tant  la posició Y de l'EFX. |
| **Amplada** | Permet seleccionar una entrada externa per a controlar l'amplada de la finestra de treball. Això no té cap efecte en l'ús #1 i #3 |
| **Alçada** | Permet seleccionar una entrada externa per a controlar l'alçada de la finestra de treball. Això no té cap efecte en l'ús #1 i #3 |


**2\. Pestanya Fixtures**

Aquí podeu afegir/eliminar els fixtures que el Pad XY controlarà en l'ús #1.

|     |     |
| --- | --- |
| **Llista de Fixtures** | Mostra els accessoris que controla actualment el Pad XY.<br><br>**Fixture**: Els noms de cada fixture<br>**Eix X**: Mostra el rang de valors (i la inversió si és aplicable) de l'eix horitzontal (Pan) per a cada fixture<br>**Eix Y**: Mostra el rang de valors (i la inversió si és aplicable) de l'eix vertical (Inclinació) per a cada fixture |
| ![](/basics/edit_add.png) | Afegiu [Fixtures](/basics/glossary-and-concepts#fixture) per a ser controlat pel Pad XY, utilitzant el diàleg [Seleccioneu Fixture](/function-manager/fixture-selection).  <br>**NOTA**: Només es mostren els fixtures que tenen canals Panoràmica i Inclinació al diàleg. |
| ![](/basics/edit_remove.png) | Elimina els fixtures seleccionats de la llista de control del Pad XY. |
| ![](/basics/edit.png) | Edita el comportament del fixture seleccionat controlat pel Pad XY. |


**![](/basics/edit.png) 2.1 Configuració del moviment del fixture**

Podeu canviar l'extensió del moviment i el moviment inversos dels fixtures amb el diàleg de configuració del Fixture del Pad XY.

|     |     |
| --- | --- |
| **Eix X horitzontal** | **Mínim**: Estableix el límit mínim per al fixture<br>**Màxim**: Estableix el límit màxim per al fixture<br>**Invers**: Inverteix el moviment del fixture a l'eix horitzontal (panoràmica) |
| **Eix Y vertical** | **Mínim**: Estableix el límit mínim d'inclinació per al fixture<br>**Màxim**: Estableix el límit màxim d'inclinació per al fixture<br>**Invers**: Inverteix el moviment del fixture sobre l'eix vertical (inclinació) |


**3\. Pestanya de predefinits**

Aquí podeu afegir/eliminar predefinits al Pad XY. Cada predefinit es mostra com un botó a la part inferior del giny Pad XY. EFX i Escenas predefinides es poden alternar, per iniciar/aturar una funció, Grups de Fixtures predefinits es poden alternar per activar/desactivar un grup de Fixture, mentre que els predefinits de Posició es poden fer clic només una vegada

|     |     |
| --- | --- |
| **Llista de valors predefinits** | Mostra la llista dels predefinits afegits actualment al Pad XY |
| ![](/basics/xypad.png) Afegeix una posició | En fer clic en aquest botó, es crea una nova posició predefinida i s'afegeix al Pad XY. Per defecte el nom preestablert són les coordenades X/Y en el moment de la creació |
| ![](/basics/efx.png) Afegeix EFX | En fer clic en aquest botó, es mostrarà el diàleg [Selecciona la funció](/function-manager/fixture-selection), el qual us permetrà triar un EFX existent des de l'espai de treball.  <br>Quan s'acaba, es crea un nou predefinit EFX i s'afegeix al Pad XY. Per defecte el nom predefinit és el nom del EFX |
| ![](/basics/scene.png) Afegeix una escena | En fer clic en aquest botó, es mostrarà el diàleg [Selecciona la funció](../function-manager/function-selection), el qual us permetrà triar una escena existent des de l'espai de treball.  <br>Quan s'acaba, es crea un nou predefinit d'Escena i s'afegeix al Pad XY. Per defecte, el nom preestablert és el nom de l'Escena.  <br>Tingueu en compte que si l'escena seleccionada no té cap canal de panoràmica o inclinació, es mostrarà un error i no es crearà cap valor predefinit. |
| ![](/basics/group.png) Afegeix un Grup de Fixtures | En fer clic en aquest botó, es mostra el diàleg [Selecciona Fixture](/function-manager/fixture-selection), el qual permet crear un grup de Fixtures com a subgrup de les Fixtures que el Pad XY controla (definit a la pestanya Fixtures) <br>En fer clic en un grup de Fixtures predefinit en el mode Operació, el Pad XY només controlarà les posicions de Fixture del Grup de Fixtures activat.  <br>**Nota**: Un preajustament de Grup de Fixtures no té cap efecte sobre els preajustaments d'EFX i Escena. |
| ![](/basics/edit_remove.png) Elimina | Elimina el predefinit seleccionat |
| Nom del predefinit | Permet introduir un nom arbitrari per al predefinit seleccionat |
| Entrada externa | Permet seleccionar un control d'entrada extern per al predefinit seleccionat |
| Combinació de tecles | Permet seleccionar una combinació de teclat per al predefinit seleccionat actualment |