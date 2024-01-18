---
title: Selector de Velocitat
date: '03:18 22-08-2023'
media_order: speeddial.png
---

Els Selectors de Velocitat estan dissenyats per ajustar la velocitat d'un conjunt de funcions des de la consola virtual, igual que els controls lliscants en mode bus en les versions anteriors de QLC+. Mentre que el concepte de bus es basava en l'assignació de funcions i un control lliscant al mateix bus, el mètode del Selector de Valocitat és més senzill i directa: L'usuari selecciona directament un conjunt de funcions les propietats de velocitat de les quals es controlen amb el selector, eliminant així la necessitat de busos al mig.


El giny es mostra de la següent manera:

![](speeddial.png)

### Elements del Giny

|     |     |
| --- | --- |
| **(1) Botons de control de temps** | Els botons més i menys incrementen o disminueixen en un el camp de temps actualment enfocat de **(4)**. Per defecte, el camp enfocat és mil·lisegons |
| **(2) Selector** | El selector es pot girar manualment indefinidament per ajustar el camp de temps enfocat actualment **(4)**. Per defecte, el camp enfocat és mil·lisegons |
| **(3) Botó Toc** | El botó de toc estableix el valor de temps del  selector de velocitat a l'interval entre les accions de prémer/deixar anar el botó. Com més ràpid es prem, menor serà el valor del temps |
| **(4) Camps de Temps** | Els 4 camps de temps mostren el valor de temps actual del Selector de Velocitat i es poden ajustar individualment introduint un número amb un teclat, o utilitzant els botons de control de temps **(1)**, el selector **(2)**, el botó de toc **(3)** o els predefinits **(11)**. |
| **(5) Botó Divisor** | Divideix el factor de temps actual per 2 i l'aplica al temps del selector de velocitat actual.  <br>Un factor inferior a 1x es convertirà en una fracció com 1/2x, 1/4x, etc |
| **(6) Factor de Temps** | Mostra el factor actual multiplicat per el temps que es mostra actualment a **(4)**.  <br>Un factor inferior a 1x és un divisor. Exemple: temps  8 8s.28, factor , 1/4x, resultat , 02s.07 |
| **(7) Botó Multiplicador** | Multiplica el factor de temps actual per 2 i l'aplica al temps del selector de velocitat actual. |
| **(8) Botó de Reinici** | Restableix el factor de temps actual a 1x i l'aplica al temps del selector de velocitat actual. |
| **(9) Temps Factoritzat** | Mostra el resultat del temps del selector de velocitat multiplicat pel factor de temps actual **(6)** |
| **(10) Botó Aplica** | Aplica el temps del selector de velocitat actual a les funcions associades. Això és útil quan hi ha múltiples Selectors de Velocitat en una consola virtual |
| **(11) Botons de Preselecció** | Aquesta àrea mostra els valors predefinits de temps, si estan presents, afegits per l'usuari |

### Operació

El selector de velocitat en si sembla i funciona igual que els selectors de velocitat en diversos editors de funcions: Hi ha un selector gran **(2)** al mig que augmenta el temps quan es gira en sentit horari i el disminueix quan es gira en sentit antihorari. Els botons més ![](/basics/edit_add.png) i menys ![](/basics/edit_remove.png) **(1)** són una forma alternativa d'ajustar la velocitat.

El valor **temps actual** **(4)** es mostra en quatre parts. Quan es fa clic en qualsevol d'aquests camps, el selector/dial i els botons més/menys augmentaran/disminuiran aquesta unitat de temps. La roda del ratolí també es pot utilitzar en lloc dels botons de marcatge i els camps també accepten valors introduïts al teclat numèric.

* **h**: Hores
* **m**: Minuts
* **s**: Segons
* **.xx**: Centisegons (100 de segon)

El botó de  **toc** **(3)** es pot utilitzar per fer coincidir el temps amb un temps de ritme. El temps transcorregut entre clics es mesura i aquest temps s'estableix per a les funcions controlades, igual que si el selector/dial s'hagués ajustat a aquest temps en particular.

Per a cuelists/chasers i matrius RGB, el botó de prémer avança la funció al següent pas/posició quan es selecciona la velocitat per a ajustar la durada. El tempo marcat ha de ser més de 1/4 de la durada original.

### La pestanya Configuració - Funcions

Els selectors de velocitat es poden configurar amb el botó de propietats ![](/basics/edit.png) que es troba a la barra d'eines o fent doble clic al marcatge de velocitat.

**Nom del Selector de Velocitat** Canvia el nom del Selector.** Taula de funcions**

Mostra la llista de funcions, els valors de velocitat de les quals s'estan controlant mitjançant el selector.

Per a cada valor de velocitat (esvaïment d'entrada, esvaïment de sortida, durada), és possible establir un multiplicador.

|     |     |
| --- | --- |
| **Factor d'Esvaïment d'Entrada/Fade In** | Selecciona un multiplicador per ajustar la [velocitat d'esvaïment d'entrada/Fade In](/basics/glossary-and-concepts#functions) de les funcions |
| **Factor d'esvaïment de sortida/Fade Out** | Selecciona un multiplicador per ajustar la [velocitat d'esvaïment de sortida/Fade Out](/basics/glossary-and-concepts#functions) de les funcions |
| **Factor de Durada (+toc)** | Selecciona un multiplicador per ajustar la [durada](/basics/glossary-and-concepts#functions) de les funcions |

Aquest multiplicador s'aplicarà al valor del selector abans d'ajustar el valor de la velocitat de les funcions.

Seleccioneu **(No enviat)** de manera que el valor de velocitat de les funcions no es veurà afectat per aquest selector.

![](/basics/edit_add.png)Afegeix les funcions a controlar pel selector.![](/basics/edit_remove.png)Elimina les funcions seleccionades de la llista de funcions controlades del selector.

### Configuració - Pestanya Entrada

L'entrada d'un controlador extern es pot configurar aquí

* **Valor absolut**: Seleccioneu un interval de temps absolut (i precisió) que controlarà un senyal extern
* **Toc**: Connecta un senyal o una combinació de tecles al botó Toc del Selector de Velocitat **(3)**
* **Aplica**: Connecta un senyal o una combinació de tecles al botó d'aplicació del selector **(10)**

un per al valor amb mínim i màxim i un altre per al botó de toc.

### Configuració - Pestanya Aparença

La visibilitat individual dels elements de disposició del giny es pot activar o desactivar aquí. D'aquesta manera és possible estalviar espai a la pantalla si alguns dels camps no són necessaris (per exemple, quan es controla per un controlador extern, no es necessita la gran esfera del selector).

|     |
| --- |
| **Mostra els botons més i menys** |
| **Mostra el selector central** |
| **Mostra el botó de toc** |
| **Mostra el camp d'hores** |
| **Mostra el camp de minuts** |
| **Mostra el camp de segons** |
| **Mostra el camp de mil·lisegons** |
| **Mostra els botons multiplicador i divisor** |
| **Mostra el botó d'aplicació** |

### Configuració - Pestanya de Multiplicador

Aquí és possible seleccionar si el factor multiplicador s'ha de restablir quan el selector **(2)** s'ajusta manualment i els controls externs individuals per al botó multiplicador **(5)**, el botó divisor **(7)** i el botó factor de reinici **(8)**

### Configuració - Pestanya Preajustos

Un valor predefinit és una manera de tenir un accés ràpid a un valor predifinit per a un selector de velocitat.  
Cada predefinit es representa com un botó en la disposició del giny de selector de velocitat, i es pot fer clic amb el ratolí o prémer en una pantalla tàctil, o associar-se a una combinació de tecles o a una línia d'entrada de controlador extern.  
A l'esquerra de la pestanya predefinit, hi ha la llista de predefinits. En seleccionar un predefinit d'aquesta llista, el botó de la dreta podrà editar les seves propietats.

|     |     |
| --- | --- |
| **![](/basics/edit_add.png) Afegeix un predefinit** | Afegeix un predefinit |
| **![](/basics/edit_remove.png) Elimina el predefinit** | Elimina el predefinit seleccionat |
| **![](/basics/editclear.png) Nom del predefinit** | Edita el nom del predefinit seleccionat. Per defecte, el nom és el temps del selector. |
| ![](/basics/speed.png)**Selector de Velocitat** | Edita el valor de temps del predefinit seleccionat |
