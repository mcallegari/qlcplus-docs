---
title: 'Fixture Group Manager'
date: '14:33 27-06-2026'
taxonomy:
    category:
        - docs
---

El **Fixture Group Manager** enumera todos los fixtures del proyecto, organizados
por universo, y permite crear **grupos de fixtures**, inspeccionar y renombrar elementos,
y editar las propiedades de fixtures y canales. Ábralo con el botón
**Fixture Groups** del panel izquierdo del espacio de trabajo
[Fixtures and Functions](/fixtures-and-functions).

## El árbol

El área principal es un árbol. En el nivel superior están los **universos**; expanda un
universo para ver los **fixtures** patcheados en él, y expanda un fixture para ver sus
**heads** y **canales**. Los **grupos de fixtures** que cree también aparecen aquí como
nodos expandibles.

### Seleccionar elementos

* **Clic** en un elemento para seleccionarlo (un universo, grupo, fixture, head o canal).
  Seleccionar fixtures aquí también los selecciona en las vistas.
* Mantenga pulsado **Ctrl** para seleccionar varios elementos a la vez.
* **Doble clic** en un nodo para expandirlo o contraerlo.

### Crear grupos arrastrando

Arrastre fixtures (o selecciones completas) a un nodo de grupo para añadirlos a ese grupo.
Los grupos permiten seleccionar y controlar varios fixtures juntos en todo el
programa.

## Botones de la barra de herramientas

* **＋ Add a new fixture group** — crea un nuevo grupo de fixtures vacío.
* **－ Remove the selected items** — elimina los fixtures y/o grupos de fixtures
  seleccionados. (Eliminar un fixture desde dentro de un grupo lo elimina del
  grupo.)
* **Apply changes to fixtures of the same type** (icono de doble verificación) — al
  editar las propiedades de fixture/canal, hace que las modificaciones se apliquen también a cualquier otro
  fixture del mismo tipo. Activar o desactivar.
* **Search** (lupa) — abre un cuadro de búsqueda para filtrar el árbol por nombre de grupo,
  fixture o canal.
* **Rename the selected items** — renombra el elemento seleccionado. Cuando hay varios elementos
  seleccionados, se pueden renombrar todos a la vez con numeración automática.
* **Inspect the selected item** (icono de info) — abre un resumen informativo del elemento
  seleccionado en la vista principal (un resumen de universo/grupo, o un resumen
  de fixture). Desactivar para volver a la vista anterior.
* **Edit the selected item** (icono de lápiz) — entra en modo de edición para el elemento
  seleccionado:
  * Para un **grupo de fixtures**, abre el editor de grupo en la vista principal.
  * Para un **fixture** (o universo), abre el editor de propiedades de canal y
    amplía el panel para mostrar las columnas de propiedades.
* **Add/Remove a linked fixture** (icono de enlace) — aparece al editar un fixture;
  añade o elimina una copia vinculada del fixture (un fixture que comparte la misma
  dirección DMX).

## Propiedades de canal

Al editar un fixture, el panel se amplía y muestra una fila de columnas para cada
canal:

* **Name** — el nombre del canal.
* **Mode** — el modo de funcionamiento del canal.
* **Flags** — indicadores especiales del canal.
* **Can fade** — si al canal se le permite hacer fundidos entre valores.
* **Behaviour** — cómo se comporta el canal cuando varias funciones lo controlan
  (precedencia).
* **Modifier** — una curva modificadora de canal opcional.

Estos ajustes permiten afinar cómo responde cada canal. Con **Apply to
fixtures of the same type** activado, los cambios se propagan a todos los fixtures coincidentes.
