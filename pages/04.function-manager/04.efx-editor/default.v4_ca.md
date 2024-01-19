---
title: 'Editor EFX'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

L'editor EFX, com el seu nom indica, s'utilitza per editar funcions ![](/basics/efx.png) [EFX](/basics/glossary-and-concepts#efx). La vista es divideix en dues pestanyes:

* La pestanya **General** és per a seleccionar [Fixtures](/basics/glossary-and-concepts#fixtures), velocitat i ordre de fixture.
* La pestanya **Moviment** és per a seleccionar detalls sobre com els fixtures han de moure els seus feixos de llum.

### Controls Generals de les Pestanyes

![](efx-general.png)

|     |     |
| --- | --- |
| ![](/basics/speed.png) | Ajustar la configuració de velocitat d'EFX:<br><br> **Fade In** esvaiment d'entrada d'EFX a la mida objectiu<br> **Fade Out:** Actualment no s'utilitza<br> **Durada:** La durada d'una ronda completa utilitzant el patró seleccionat |
| ![](/basics/player_play.png) | Activa la sortida i executa l'EFX per provar com es veu |
| **Nom del EFX** | Canvia el nom de l'EFX. |
| **Llista de Fixtures** | **Pas**: Mostra l'ordre en què els fixtures inicien el seu moviment en ordre sèrie/asimètric<br> **Fixture**: El nom de cada fixture que s'ha afegit al<br> **Mode** Els canals que l'EFX ha de controlar. Poden ser **Posició**, **Dimmer** o **RGB** <br>*Nota*: en seleccionar RGB, és possible que vulgueu habilitar el "Color de Fons" descrit a sota.<br> **Invers**: Quan està marcada, el fixture inverteix el seu moviment al contrari dels fixtures no invertits. La direcció «normal» s'estableix per la direcció a la pàgina «Moviment».<br>**Desplaçament Inicial**: Valor en graus, on en el camí del moviment aquest fixture hauria de començar |
| ![](/basics/edit_add.png) | Afegeix un  [Fixture](/basics/glossary-and-concepts#fixtures) a l'EFX, després de la posició seleccionada. Com que l'EFX s'utilitza per moure el cap o el mirall d'un fixture intel·ligent, només es poden afegir a un EFX fixtures amb capacitat de **panoràmica i inclinació** (8 bits o 16 bits). |
| ![](/basics/edit_remove.png) | Elimina els fixtures seleccionats de l'EFX. |
| ![](/basics/up.png) | Apuja el fixture seleccionat cap amunt (anterior) en ordre de sèrie. |
| ![](/basics/down.png) | Abaixa el fixture seleccionat cap avall (més tard) en ordre de sèrie. |
| **Ordre del Fixture** | Canvieu l'ordre dels fixtures de l'EFX, vegeu més avall. |

### Controls de la Pestanya Moviment

![](efx-movement.png)

|     |     |
| --- | --- |
| **Àrea del Patró** | Mostra una projecció 2D del moviment de capçal/mirall dels fixtures. Cada vegada que canvieu un paràmetre, un punt petit per a cada fixture recorre el camí complet en la seva direcció seleccionada des del seu desplaçament inicial.<br><br>La velocitat del moviment reflecteix els paràmetres de velocitat seleccionats. |
| **Direcció** | Direcció per defecte dels fixtures (es pot alterar individualment per a cada fixture mitjançant la casella de selecció a la **Invers** columna)<br><br>**Endavant**: Els fixtures es mouen cap endavant al llarg del camí del patró<br>**Enrere**: Els fixtures es mouen cap enrere al llarg del camí del patró |
| **Ordre d'Execució** | **Bucle**: recorre els passos una i altra vegada.** Tret únic**<br>: recorre els passos una vegada i atura't.<br>**Ping Pong**: Recorre pels passos una i altra vegada, invertint la direcció en ambdós extrems. |
| **Patró** | Seleccioneu l'algorisme del patró de moviment.<br><br>**Cercle**<br>**Vui**<br>**Línia**: va d'un extrem a l'altre i cap enrere; més ràpid al mig, més lent als extrems<br>**Line2**: va en una sola direcció; la velocitat és sempre la mateixa<br>**Diamant**<br>**Quadrat**<br>**Quadrat Picat**<br>**Fulla**<br>**Lissajous** |
| **Paràmetres** | **Amplada**: Tria l'amplada de panoràmica (0-255)<br>**Alçada**: Tria l'alçada d'inclinació (0-255) **Desplaçament X**<br>: Mou el punt central horitzontal (panoràmica) del patró (0-255) **Desplaçament Y**<br>: Mou el punt central vertical (inclinació) del patró (0-255)<br>**Rotació**: Gira el patró al llarg del seu eix (0-360 graus)<br>**Desplaçament inicial**: On al llarg del camí hauria de començar el moviment (0-360 graus) **Freqüència X**<br>: Canvia la freqüència X (horitzontal) del patró de Lissajous** (0-32) **Freqüència Y**<br>: Canvia la freqüència Y (vertical) del patró de Lissajous (0-32) **Fase X**<br>: Canvia la fase X (horitzontal) del patró de Lissajous (0-360 graus) **Fase Y**<br>: Canvia la fase Y (vertical) del patró de Lissajous (0-360 graus) |
| **Color de Fons** | Quan està habilitat, el fons de vista prèvia EFX mostrarà una paleta RGB, per a mostrar el que fa EFX en controlar els canals RGB |
| **Relatiu** | Veure més avall. |

### Ordre dels Fixtures

Els fixtures que participen en una funció EFX es poden establir per a seguir l'algorisme en cert ordre:

* **Paral·lel:** tots els fixtures segueixen el mateix patró de forma sincronitzada
* **Sèriel:** els fixtures comencen a seguir el patró un darrere l'altre, amb un petit retard entre cadascun d'ells.
* **Asimètric:** tots els fixtures comencen a moure's simultàniament, però amb un desplaçament similar al del mode sèrie.

### Direcció

La direcció de les funcions EFX es pot invertir per a tots els fixtures a la vegada o per fixture. La funció també es pot establir per fer un bucle infinit, un bucle infinit de ping-pong (la direcció s'inverteix després de cada pas) o pot córrer només una vegada, en un mode d'una sola captura, després del qual acaba per si mateix. Si la funció està configurada per fer un bucle infinit, s'ha d'aturar manualment.

### Mode Relatiu

La posició EFX és absoluta per defecte, en altres paraules, l'EFX seleccionat controlarà exclusivament la posició X/Y dels caps especificats. Quan la casella de selecció Mode relatiu està activada, la posició EFX actua com una capa sobre qualsevol posició que ja s'hagi establert (per exemple, per una escena o fins i tot un altre EFX). En altres paraules, l'EFX és relatiu a la posició actual del fixture.

En mode absolut. El EFX es pot configurar per a executar-se a una posició específica del cap (e. g. fes un cercle al centre de l'escenari, a l'esquerra, etc.)

En mode relatiu, el centre de la finestra de vista prèvia (desplaçament x=127, desplaçament y=127) s'aplicarà a la posició actual del capçal.

És útil per reduir el nombre de predefinicions d'EFX: diguem que volem tenir 3 tipus d'EFX (serra de panoràmica, serra d'inclinació, cercle) a 4 llocs (per exemple, 4 cantonades del escenari). En mode absolut això vol dir 3x4 = 12 predefinits. Si volem canviar alguna cosa, hem d'editar moltes funcions. Probablement necessitem també un botó VC per a cadascun. En mode relatiu, creem un valor predefinit EFX per a cada tipus EFX (serra panoràmmica, serra inclinació, cercle), i establim el desplaçament a neutre (x=127, y=127). A continuació, creem escenes amb canals de Panoràmica i Inclinació per a cada posició. Ara només tenim 3+4 predefinicions (i 3+4 botons VC, preferiblement en 2 marcs individuals).

**Consells i Trucs**

En mode relatiu, també és possible esvair entre posicions (estableix temps d'esvaïment en escenes) mentre l'EFX s'està executant.

Utilitzant XYPad i mode relatiu, és possible moure EFX a qualsevol lloc durant l'espectacle.
