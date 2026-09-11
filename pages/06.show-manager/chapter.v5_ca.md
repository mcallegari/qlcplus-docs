---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Capítol 5

# Show Manager 

Un **Show** és una línia de temps que organitza altres funcions (escenes, chasers,
àudio, vídeo, …) en **tracks** al llarg del temps, de manera que tot un espectacle
es pugui reproduir com una sola unitat. Editar un Show és diferent de les altres
funcions: obre el seu propi espai de treball a pantalla completa, el
**Show Manager**, en lloc de l'editor del panell dret.

Hi entres creant un Show des del menú **Add a new function**, o fent doble clic en
un Show existent al Function Manager.

## La línia de temps

L'àrea principal és una **línia de temps**: el temps avança d'esquerra a dreta, i
cada **track** horitzontal conté els elements de funció col·locats en ella. Un
**cursor** en moviment marca la posició de reproducció actual, i una capçalera
mostra marcadors de temps (o de compàs).

* **Arrossega** una funció des del Function Manager del panell dret cap a un track
  per afegir-la al show en aquell moment.
* **Clica** un element per seleccionar-lo; activa la selecció múltiple (panell
  dret) per seleccionar-ne diversos.
* **Arrossega** els elements al llarg d'un track per canviar quan es reprodueixen,
  o entre tracks.
* **Doble clic** en un element per obrir l'editor propi de la funció subjacent.

## Barra d'eines

A la part superior:

| Botó | Què fa |
|--------|--------------|
| **Name** | El nom del show. |
| ![](../basics/color.svg?resize=48,48) **Show items color** | Estableix el color dels elements de la línia de temps seleccionats, per codificar el teu show per colors. |
| ![](../basics/lock.svg?resize=48,48) **Lock / Unlock** | Bloqueja els elements seleccionats perquè no es puguin moure ni redimensionar per accident (la icona alterna entre lock i unlock). |
| ![](../basics/grid.svg?resize=48,48) **Snap to grid** | Fa que els elements s'ajustin a la graella de temps quan els mous. |
| <i class="fa fa-arrows-left-right-to-line fa-2x"></i> **Stretch the original function** | Quan està activat, en redimensionar un element s'estira la temporització de la funció subjacent per ajustar-s'hi, en lloc de només retallar-la. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected items** | Elimina els elements seleccionats del show. (Les funcions originals **no** s'eliminen.) |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Copia els elements seleccionats al porta-retalls. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Enganxa els elements del porta-retalls a la posició del cursor. |
| **Time display** | El temps actual del cursor. |
| <i class="fa fa-play fa-2x"></i> **Play / Pause** | Reprodueix, o posa en pausa/reprèn, el Show des de la posició del cursor. |
| <i class="fa fa-stop fa-2x"></i> **Stop / Rewind** | Atura la reproducció del Show (prem de nou per rebobinar fins a l'inici). |
| **Markers** | La divisió de temps mostrada a la capçalera: **Time**, o compassos a **BPM 4/4**, **3/4** o **2/4**. |
| <i class="fa fa-2x fa-magnifying-glass-minus"></i><i class="fa fa-2x fa-magnifying-glass-plus"></i> **Zoom** | Amplia o redueix la línia de temps al llarg de l'eix del temps. |

## Tracks

Cada track és una fila de la línia de temps.

* Fes servir el control <i class="fa fa-plus" style="color:limegreen"></i>
  **Create a new track** per afegir un track.
* Quan un track està seleccionat, les fletxes <i class="fa fa-angle-up"></i> /
  <i class="fa fa-angle-down"></i> **move track up / down** (a la part superior
  esquerra de la línia de temps) el reordenen entre els altres tracks.

## L'eina de temporització

El botó <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i> **Timing**
del panell dret obre l'**eina de temporització**, un panell per ajustar la
posició i la durada exactes dels elements a la línia de temps sense haver-los
d'arrossegar a mà. És la contrapartida precisa d'arrossegar els elements: perfecta
per alinear cues al fotograma, o per desplaçar tota una selecció una quantitat
fixa.

Tot a l'eina segueix la configuració **Markers** del show: quan la línia de temps
està en mode **Time**, els valors es mostren i s'introdueixen com a temps (hores,
minuts, segons, mil·lisegons); quan està en un dels modes **BPM**, es mostren i
s'introdueixen com a compassos.

L'eina es divideix en tres seccions.

### Alignment

Ajusta els elements seleccionats al **cursor** de reproducció:

* **Align start to cursor** — mou cada element seleccionat perquè *comenci* a la
  posició del cursor.
* **Align end to cursor** — estira o encongeix cada element seleccionat perquè
  *acabi* a la posició del cursor (mantenint el seu inici on és).

### Timings

Mostra el **Start time**, **End time** i **Duration** de l'element seleccionat.
Clica qualsevol dels tres per revelar-hi, al seu lloc, un editor compacte
**h / m / s / ms** (o compassos), escriu el valor exacte, i l'element
s'actualitza immediatament:

* Amb un **sol element** seleccionat, el valor que escrius s'aplica de manera
  **absoluta** — l'element es col·loca exactament allà.
* Amb **diversos elements** seleccionats, els camps mostren *Multiple* i
  qualsevol canvi s'aplica de manera **relativa** — el mateix desplaçament
  s'afegeix a cada element seleccionat, de manera que pots desplaçar tot un bloc,
  per exemple, +2 segons alhora.

Els elements bloquejats (vegeu el botó de lock de la barra d'eines) es deixen
sense tocar.

### Cut/Insert

Afegeix o elimina un interval de temps a tot el **show** en la posició del
cursor — de manera que pots fer espai per a una nova secció, o tancar un buit, i
tot el que hi ha després del cursor es desplaça en conseqüència:

* **Length** — clica per establir quant temps tallar o inserir (al mateix editor
  h / m / s / ms o compassos).
* **Insert time** — empeny tot el que hi ha després del cursor més tard segons
  *Length*, obrint un buit.
* **Cut time** — elimina un interval de *Length* a partir del cursor, avançant
  tot el que hi ha després.

## Panell dret

Mentre ets al Show Manager, el panell dret és l'habitual
[Function Manager](/function-manager), de manera que pots arrossegar qualsevol
funció a la línia de temps. També guanya el botó
<i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i> **Timing** descrit
més amunt.
