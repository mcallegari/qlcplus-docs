---
title: 'Bolcat DMX'
taxonomy:
    category:
        - docs
---

La funcionalitat Bolcat DMX permet desar els valors DMX actuals que s'envien als universos de sortida en un moment determinat. Bàsicament, pren una "instantània" dels canals DMX i els guarda per a un ús posterior.  
El Bolcat DMX pot desar valors a una [Escena](/basics/glossary-and-concepts#escena) nova o sobreescriure els valors d'una Escena existent. L'escena "bolcada" també es pot afegir a un  [Chaser](/basics/glossary-and-concepts#chaser) existent, a un  [botó](/virtual-console/button) de la Consola Virtual o a un [control lliscant](/virtual-console/slider)

Tingueu en compte que:

* Els Canals/Chasers seleccionats es recordaran quan tornis a obrir aquesta finestra
* Els valors DMX desats es prenen abans del Gran Mestre

En obrir la finestra Bolcat DMX, apareixeran les següents opcions:

| | |
| - | - |
| **Nom de la Escena** | Defineix el nom de l'escena que es crearà. Si no s'especifica cap nom, s'establirà un nom per defecte com ara «Nova escena des de viu» i una identificació numèrica, permetent un ús ràpid d'aquesta funcionalitat. |
| ![](/basics/scene.png) **Seleccioneu una escena existent** | En fer clic en aquest botó, es mostrarà una finestra de selecció de funció, que permet seleccionar una escena existent per sobreescriure amb els valors DMX actuals.<br><br>***Nota:*** sobreescriure una escena no requereix confirmació i pot ser una operació potencialment perillosa si selecciones l'escena incorrecta per error. Per tant, aneu amb compte quan utilitzeu aquesta funcionalitat.<br><br>Quan se selecciona una escena, la finestra Bolcat DMX establirà automàticament dues coses per a vosaltres:<br>* L'opció "Bolca els canals seleccionats" es comprovarà<br>* L'arbre de Fixtures s'actualitzarà, i només se seleccionaran els canals habilitats als canals de l'Escena. Si necessiteu sobreescriure diferents canals, seleccioneu-los/desseleccioneu-los manualment abans de confirmar l'operació<br>
| **Bolca tots els canals** | Si aquesta opció està seleccionada, QLC+ bolcarà tots els canals de tots els universos i tots els fixtures. Per informar l'usuari sobre què farà aquesta opció, es mostrarà un informe en forma d'Universos, Fixtures, Canals. |
| **Bolca els canals seleccionats** | Si selecciones aquesta opció, s'activarà el tauler següent, que et permetrà triar exactament quins canals vols desar en una escena. Estan organitzades en un arbre per Universos i Fixtures. |
| **Afegir a** | Aquesta secció us ofereix un ús immediat de la vostra escena en un giny de Consola virtual existent.<br>Les opcions són:<br><br>**Chaser**: la llista conté tots els chasers presents quan s'obre la finestra Bolcat DMX. Cada Chaser té una casella de selecció que, si està marcada, dirà a QLC+ que afegeixi l'escena recentment creada als chasers seleccionats.<br>Aquesta característica és molt útil quan s'utilitza una [Llista Cue](/virtual-console/cue-list) al panell de [Consola Virtual](/virtual-console), perquè l'escena recentment creada apareixerà a la llista Cue per al seu ús immediat durant una actuació en directe.<br>**Botó**: La llista conté tots els botons presents actualment a l'espai de la consola virtual.<br>Quan se selecciona, els botons es configuraran per activar/desactivar l'escena que acaba de capturar. Veureu l'etiqueta del botó que canvia a "Escena de directe ..." i un número progressiu per identificar-la.<br>***Nota:*** Qualsevol funció anterior associada als botons seleccionats es sobreescriurà!<br>**Control lliscant**: la llista conté tots els controls lliscants que hi ha actualment a l'espai de la Consola virtual.<br>Igual que amb els botons, tots els lliscadors seleccionats es configuraran per controlar l'escena que s'acaba de capturar.<br>***Nota 1***: Un control lliscant ha d'estar en **mode de reproducció** per funcionar com a controlador d'intensitat per a una escena.<br>***Nota 2***: Qualsevol funció anterior associada amb els lliscadors seleccionats es sobreescriurà!|
| **Bolca només valors no nuls** | Aquesta opció dirà a QLC+ que desi només els canals amb valors que són **i no** iguals a zero.<br>Si sabeu el que esteu fent, això podria estalviar espai de projecte i evitar que els canals entrin en conflicte amb altres ginys de la consola virtual. |
