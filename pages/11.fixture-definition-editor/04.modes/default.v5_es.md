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

La sección **Modes** contiene todos los [modos](/basics/glossary-and-concepts#fixture-mode)
para los que se puede configurar el fixture. Cada modo es una disposición
ordenada de los canales definidos en la sección [Channels](../channels), que
corresponde al comportamiento del fixture en ese modo de funcionamiento.

En la parte superior de la sección hay una pequeña barra de herramientas:

| Botón | Función |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new mode** | Crea un nuevo modo y abre el [Mode Editor](#mode-editor) a la derecha. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected mode(s)** | Elimina el modo seleccionado. Eliminar un modo no borra ningún canal ni otros modos. |

Cada modo aparece como una fila que muestra su nombre. Hacer **doble clic**
en un modo para abrirlo en el Mode Editor.

## Mode Editor

El Mode Editor se abre en el panel de la **derecha**. Dispone de un campo
**Name** (el nombre de cada modo debe ser único) y de tres secciones:
**Channels**, **Emitters** y **Physical**.

### Channels

Aquí se colocan los canales del fixture en el orden exacto en que el fixture
los utiliza en este modo.

| Botón | Función |
|--------|--------------|
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Elimina los canales seleccionados de este modo. Los demás modos no se ven afectados. |
| <i class="fa fa-2x fa-certificate"></i> **Create a new emitter** | Agrupa los canales seleccionados en un nuevo [emitter](#emitters). |

Para **añadir** canales al modo, **arrastrarlos** desde la sección
[Channels](../channels) hasta esta lista (se muestra un área "Drop channels
here" cuando el modo está vacío). Arrastrar los canales dentro de la lista
para reordenarlos — su orden es fundamental para la definición del modo. La
columna **Acts on** junto a cada canal lo vincula a otro canal (por ejemplo,
un canal que controla la velocidad de un gobo rotativo).

### Emitters

Los emitters (llamados *heads* en versiones anteriores) permiten definir
múltiples fuentes luminosas dentro de un solo fixture, de modo que QLC+ pueda
tratar cada una individualmente — por ejemplo en los
[Fixture Groups](/basics/glossary-and-concepts#fixture-group) o en las vistas
2D/3D. Si un modo controla una sola fuente luminosa no es necesario definir
emitters.

Para crear un emitter, desde la sección **Channels** del modo: seleccionar
los canales pertenecientes a una sola fuente luminosa y luego utilizar
<i class="fa fa-certificate"></i> **Create a new emitter**. Cada emitter se
numera automáticamente (#1, #2, …) y muestra los canales que tiene
asignados.

| Botón | Función |
|--------|--------------|
| <i class="fa fa-minus" style="color:crimson"></i> **Remove the selected emitter(s)** | Elimina los emitters seleccionados. |

Incluir solo los canales específicos de cada fuente luminosa. Por ejemplo, si
tres cabezas tienen cada una su propio dimmer, incluir el canal dimmer en
cada emitter; si el fixture tiene un único dimmer para todas las cabezas,
omitirlo.

### Physical

Esta sección contiene las mismas propiedades que la sección global
[Physical](../physical). Elegir:

* **Use global settings** — el modo utiliza la información física global del
  fixture (opción predeterminada).
* **Override global settings** — el modo tiene sus propios valores físicos;
  los campos se vuelven editables para poder introducirlos.
