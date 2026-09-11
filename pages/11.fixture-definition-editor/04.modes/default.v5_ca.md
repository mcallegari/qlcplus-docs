---
title: Modes
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

La secció **Modes** conté tots els [modes](/basics/glossary-and-concepts#fixture-mode)
als quals es pot configurar el fixture. Cada mode és una disposició ordenada dels
canals que heu definit a la secció [Canals](../channels), que correspon a com es
comporta el fixture en aquell mode de funcionament.

A la part superior de la secció hi ha una petita barra d'eines:

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix un mode nou** | Crea un mode nou i obre l'[Editor de Modes](#editor-de-modes) a la dreta. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Elimina el(s) mode(s) seleccionat(s)** | Elimina el mode seleccionat. Eliminar un mode no suprimeix cap canal ni cap altre mode. |

Cada mode apareix com una fila que mostra el seu nom. Feu **doble clic** en un
mode per obrir-lo a l'Editor de Modes.

## Editor de Modes

L'Editor de Modes s'obre al panell de la **dreta**. Té un camp **Nom**
(el nom de cada mode ha de ser únic) i tres seccions: **Canals**, **Emissors**
i **Física**.

### Canals

Aquí col·loqueu els canals del fixture en l'ordre exacte en què el fixture els
utilitza en aquest mode.

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Elimina els canals seleccionats** | Elimina els canals seleccionats d'aquest mode. Els altres modes queden intactes. |
| <i class="fa fa-2x fa-certificate"></i> **Crea un emissor nou** | Agrupa els canals seleccionats en un nou [emissor](#emissors). |

Per **afegir** canals al mode, **arrossegueu-los** des de la secció
[Canals](../channels) a aquesta llista (es mostra una àrea "Drop channels here"
quan el mode és buit). Arrossegueu els canals dins de la llista per reordenar-los —
el seu ordre és fonamental per a la definició del mode. La columna **Actua sobre**
al costat de cada canal el vincula a un altre canal (per exemple, un canal que
controla la velocitat d'un gobo giratori).

### Emissors

Els emissors (anomenats *caps* en versions anteriors) us permeten definir
múltiples fonts de llum dins d'un únic fixture, de manera que QLC+ pugui tractar
cadascuna individualment — per exemple als [Grups de Fixtures](/basics/glossary-and-concepts#fixture-group)
o a les vistes 2D/3D. Si un mode controla una sola font de llum no cal definir
emissors.

Creeu un emissor des de la secció **Canals** del mode: seleccioneu els canals que
pertanyen a una única font de llum i després utilitzeu <i class="fa fa-certificate"></i>
**Crea un emissor nou**. Cada emissor es numera automàticament (#1, #2, …) i
mostra la llista dels canals que té assignats.

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-minus" style="color:crimson"></i> **Elimina el(s) emissor(s) seleccionat(s)** | Suprimeix els emissors seleccionats. |

Incloeu només els canals específics de cada font de llum. Per exemple, si tres
capçals tenen cadascun el seu propi dimmer, incloeu el canal de dimmer a cada
emissor; si el fixture té un únic dimmer per a tots els capçals, deixeu-lo fora.

### Física

Aquesta secció conté les mateixes propietats que la secció global
[Física](../physical). Trieu:

* **Utilitza la configuració global** — el mode utilitza la informació física
  global del fixture (l'opció per defecte).
* **Sobreescriu la configuració global** — el mode té els seus propis valors
  físics; els camps esdevenen editables perquè els pugueu introduir.
