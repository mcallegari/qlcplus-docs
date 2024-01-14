---
title: Modes
date: '07:07 22-08-2023'
---

La pestanya modes conté tots els [modes](/basics/glossary-and-concepts#fixture-mode) al qual es pot configurar el fixture.

![](../fixtureeditor_modes.png)

|     |     |
| --- | --- |
| **Llista de Modes** | Mostra tots els modes del fixture editat actualment. Cada element de mode es pot obrir per mostrar el conjunt i l'ordre dels canals en aquest mode.<br>**Nom**: El nom del mode (cada nom ha de ser únic)<br>**Canals**: Nombre de canals en cada mode<br>**Caps**: El nombre de fonts de llum que admet cada mode |
| ![](/basics/edit_add.png) | Crea un nou mode per a l'aparell mitjançant l'[Editor de Modes](#mode-editor). |
| ![](/basics/edit_remove.png) | Suprimeix el mode seleccionat actualment del fixture. L'eliminació d'un mode no destrueix cap canal ni cap altre mode. |
| ![](/basics/edit.png) | Edita el mode seleccionat actualment mitjançant l'[Editor de Modes](#mode-editor). |
| ![](/basics/editcopy.png) | Crea una còpia del mode seleccionat actualment al mateix fixture. Atès que els modes estan estretament acoblats als canals d'un determinat fixture, els modes no es poden copiar entre fixtures. |
| ![](/basics/check.png) | Obre o tanca tots els elements del mode. |

Editor de Modes
===========

L'Editor de Modes s'utilitza per crear i editar [modes](/basics/glossary-and-concepts#fixture-mode) triant conjunts de **Canals** en cert ordre (tal com es defineix pel fabricant del fixture). Cada finestra de l'editor es divideix en tres pestanyes: Canals, Caps i Física.

Pestanya Canals
------------

A la pestanya Canals podeu posar els canals del fixture en un ordre que forma una representació real dels canals DMX que el fixture entén quan s'ha configurat en aquest mode en particular.

![](../fixtureeditor_mode_channels.png)

|     |     |
| --- | --- |
| **Nom del Mode** | El nom del mode (ha de ser únic per a cada mode). |
| **Llista de Canals** | Mostra tots els canals presents en el mode actual en el seu ordre adequat.  <br>La columna "Actua sobre" s'utilitza per enllaçar un canal a un altre. Per exemple, un canal que controla la velocitat d'un gobo giratori. |
| ![](/basics/edit_add.png) | Afegeix canals des de la col·lecció de canals del fixture al mode. Podeu crear/editar canals a la pestanya **Canals** de l'[Editor de Definicions de Fixtures](/fixture-definition-editor/channels).  <br>Quan feu clic en aquest botó es mostrarà una finestra nova, que mostrarà dues llistes:<br><br>La llista a la **esquerra** mostra els canals que encara no s'han afegit a aquest mode. Si esteu creant un mode nou, aquesta llista mostrarà tots els canals que heu creat a la pestanya de canals de l'editor de Fixtures<br>La llista a la dreta **** mostra els canals que defineixen el mode que esteu editant. Si esteu creant un nou mode, aquesta llista estarà buida.  <br> Tingueu en compte que l'ordre dels canals d'aquesta llista és fonamental per a la definició del mode del fixture.<br><br>Per a moure elements d'una llista a una altra utilitzeu els botons centrals o simplement arrossegueu-los i deixeu-los anar.  <br>Quan hàgiu acabat, premeu D'acord per actualitzar la llista de canals del mode. |
| ![](/basics/edit_remove.png) | Suprimeix els canals seleccionats del mode. Les seleccions de canals d'altres modes es deixen intactes. |
| ![](/basics/up.png) | Apuja el canal seleccionat una posició. |
| ![](/basics/down.png) | Abaixa el canal seleccionat una posició. |

Pestanya Caps
---------

A la pestanya Capçals podeu definir múltiples [capçals](/basics/glossary-and-concepts#head) per a un únic fix, de manera que QLC+ sàpiga tractar cadascun d'ells individualment en determinades situacions (com ara [Grups de Fixtures](/basics/glossary-and-concepts#fixture-group)). Si un fixture només conté un capçal quan està configurat per utilitzar el mode editat (és a dir, tots els canals del mode controlen un capçal alhora) no cal definir el capçal. No obstant això, si el dispositiu té múltiples capçals que voleu poder controlar, heu de definir aquí cada capçal.

Els caps no tenen noms, ja que es poden considerar com a simples "sub-fixtures" dins d'un fixture. En canvi, se'ls donen automàticament números d'índex. L'ordenació dels caps ha de seguir la configuració del fixture físic el més a prop possible. Així que, si els caps van 1, 2, 3, 4 en el món real, no els definiu com 4, 2, 1, 3 o alguna cosa igual de molesta.

![](../fixtureeditor_mode_heads.png)

|     |     |
| --- | --- |
| **Llista de Capçals** | Mostra la llista de capçals definits actualment per al fixture. |
| ![](/basics/edit_add.png) | Afegeix un nou capçal a l'aparell mitjançant l'[Editor de Capçals](#head-editor). |
| ![](/basics/edit_remove.png) | Elimina el capçal seleccionat del fixture. |
| ![](/basics/edit.png) | Edita el capçal seleccionat mitjançant l'[Editor de Capçals](#head-editor). |
| ![](/basics/up.png) | Apuja el capçal seleccionat cap amunt per un. Podeu utilitzar això per canviar l'ordre dels caps dins del fixture. |
| ![](/basics/down.png) | Abaixa el capçal seleccionat cap avall per un. Podeu utilitzar això per canviar l'ordre dels caps dins del fixture. |

### Editor de Capçals

L'Editor de Capçals s'utilitza per crear i editar [caps](/basics/glossary-and-concepts#head) triant conjunts de **Canals** que estan dedicats a un únic capçal (tal com defineix el fabricant del fixture).

Editar un capçal és molt senzill: col·loca una marca de control a cada canal que només l'utilitzi el capçal que estàs editant. Tingueu en compte que hauríeu de comprovar els canals específics d'un cap, i res més. Per exemple, si hi ha 3 caps cadascun amb un control dimmer dedicat, llavors també hauríeu d'incloure el canal dimmer. Si, en canvi, el fixture té un únic canal dimmer per controlar la intensitat de tots els caps junts, llavors no l'inclueixis en la definició del cap.

![](../fixtureeditor_mode_edit_head.png)

|     |     |
| --- | --- |
| **Llista de Canals** | Mostra la llista de tots els canals fixture disponibles en el mode actual. Els canals que s'han assignat a un altre capçal estan desactivats i no es poden seleccionar perquè cada canal només pot pertànyer a un cap alhora. |

Pestanya Física
------------

Aquesta pestanya és idèntica a la _global_ [pestanya física](/fixture-definition-editor/physical) trobada a les finestres principals de l'editor de Fixture.  
L'única diferència és que aquí podeu triar si el mode que esteu editant té la mateixa informació física o de diferents.  
En el primer cas, deixeu l'opció **"Utilitza la configuració global"** marcada. Si el mode exposa propietats diferents, aleshores marqueu l'opció **"Sobreescriure la configuració global"** i ompliu tota la informació requerida.