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
### Chapter 5

# Show Manager 

Un **Show** es una línea de tiempo que organiza otras funciones (escenas,
chasers, audio, video, …) en **tracks** a lo largo del tiempo, de modo que
toda una actuación pueda reproducirse como una sola unidad. Editar un Show es
diferente de las demás funciones: se abre su propia área de trabajo a
pantalla completa, el **Show Manager**, en lugar del editor del panel derecho.

Se accede a él creando un Show desde el menú **Add a new function**, o
haciendo doble clic en un Show existente en el Function Manager.

## La línea de tiempo

El área principal es una **línea de tiempo**: el tiempo transcurre de
izquierda a derecha, y cada **track** horizontal contiene los elementos de
función colocados en ella. Un **cursor** en movimiento marca la posición de
reproducción actual, y un encabezado muestra los marcadores de tiempo (o de
compás).

* **Arrastre** una función desde el Function Manager del panel derecho hasta
  un track para añadirla al show en ese momento.
* **Haga clic** en un elemento para seleccionarlo; active la selección
  múltiple (panel derecho) para seleccionar varios.
* **Arrastre** los elementos a lo largo de un track para cambiar cuándo se
  reproducen, o entre tracks.
* **Doble clic** en un elemento para abrir el editor propio de la función
  subyacente.

## Barra de herramientas

En la parte superior:

| Botón | Qué hace |
|--------|--------------|
| **Name** | El nombre del show. |
| ![](../basics/color.svg?resize=48,48) **Show items color** | Define el color de los elementos de la línea de tiempo seleccionados, para codificar por color su show. |
| ![](../basics/lock.svg?resize=48,48) **Lock / Unlock** | Bloquea los elementos seleccionados para que no puedan moverse ni redimensionarse accidentalmente (el icono alterna entre lock y unlock). |
| ![](../basics/grid.svg?resize=48,48) **Snap to grid** | Hace que los elementos se ajusten a la cuadrícula temporal al moverlos. |
| <i class="fa fa-arrows-left-right-to-line fa-2x"></i> **Stretch the original function** | Cuando está habilitado, redimensionar un elemento estira la temporización de la función subyacente para ajustarla, en lugar de simplemente recortarla. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected items** | Elimina los elementos seleccionados del show. (Las funciones originales **no** se eliminan.) |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Copia los elementos seleccionados al portapapeles. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Pega los elementos del portapapeles en la posición del cursor. |
| **Time display** | La hora actual del cursor. |
| <i class="fa fa-play fa-2x"></i> **Play / Pause** | Reproduce, o pausa/reanuda, el Show desde la posición del cursor. |
| <i class="fa fa-stop fa-2x"></i> **Stop / Rewind** | Detiene la reproducción del Show (pulse de nuevo para rebobinar al inicio). |
| **Markers** | La subdivisión temporal mostrada en el encabezado: **Time**, o compases a **BPM 4/4**, **3/4** o **2/4**. |
| <i class="fa fa-2x fa-magnifying-glass-minus"></i><i class="fa fa-2x fa-magnifying-glass-plus"></i> **Zoom** | Amplía o reduce la línea de tiempo a lo largo del eje temporal. |

## Tracks

Cada track es una fila de la línea de tiempo.

* Use el control <i class="fa fa-plus" style="color:limegreen"></i>
  **Create a new track** para añadir un track.
* Cuando un track está seleccionado, las flechas <i class="fa fa-angle-up"></i> /
  <i class="fa fa-angle-down"></i> **move track up / down** (en la parte
  superior izquierda de la línea de tiempo) lo reordenan entre los demás tracks.

## La herramienta de temporización

El botón <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>
**Timing** del panel derecho abre la **herramienta de temporización**, un
panel para ajustar la posición y la duración exactas de los elementos en la
línea de tiempo sin necesidad de arrastrarlos manualmente. Es la contraparte
precisa de arrastrar los elementos: perfecta para alinear cues al fotograma,
o para desplazar toda una selección en una cantidad fija.

Todo en la herramienta sigue el ajuste **Markers** del show: cuando la línea
de tiempo está en modo **Time**, los valores se muestran e introducen como
tiempo (horas, minutos, segundos, milisegundos); cuando está en uno de los
modos **BPM**, se muestran e introducen como compases.

La herramienta se divide en tres secciones.

### Alignment

Ajusta los elementos seleccionados al **cursor** de reproducción:

* **Align start to cursor** — mueve cada elemento seleccionado de modo que
  *comience* en la posición del cursor.
* **Align end to cursor** — estira o encoge cada elemento seleccionado de
  modo que *termine* en la posición del cursor (manteniendo su inicio donde
  está).

### Timings

Muestra **Start time**, **End time** y **Duration** del elemento
seleccionado. Haga clic en cualquiera de los tres para revelar en su lugar un
editor compacto de **h / m / s / ms** (o compases), escriba el valor exacto,
y el elemento se actualiza de inmediato:

* Con un **único elemento** seleccionado, el valor escrito se aplica de
  forma **absoluta** — el elemento se coloca exactamente ahí.
* Con **varios elementos** seleccionados, los campos muestran *Multiple* y
  cualquier cambio se aplica de forma **relativa** — el mismo desplazamiento
  se añade a cada elemento seleccionado, de modo que se puede desplazar todo
  un bloque, por ejemplo, +2 segundos de una sola vez.

Los elementos bloqueados (ver el botón lock de la barra de herramientas) no
se modifican.

### Cut/Insert

Añade o elimina un intervalo de tiempo en **todo el show** en la posición del
cursor — así se puede hacer espacio para una nueva sección, o cerrar un
hueco, y todo lo que sigue al cursor se desplaza en consecuencia:

* **Length** — haga clic para definir cuánto tiempo cortar o insertar (en el
  mismo editor h / m / s / ms o compases).
* **Insert time** — desplaza todo lo que sigue al cursor más tarde en
  *Length*, abriendo un hueco vacío.
* **Cut time** — elimina un intervalo de *Length* a partir del cursor,
  adelantando todo lo que le sigue.

## Panel derecho

Mientras se está en el Show Manager, el panel derecho es el habitual
[Function Manager](/function-manager), de modo que se puede arrastrar
cualquier función a la línea de tiempo. También adquiere el botón
<i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i> **Timing**
descrito anteriormente.
