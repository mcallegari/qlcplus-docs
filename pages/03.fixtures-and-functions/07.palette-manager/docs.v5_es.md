---
title: 'Palette Manager'
date: '14:34 27-06-2026'
taxonomy:
    category:
        - docs
---

El **Palette Manager** enumera las **palettes** del proyecto y permite
crearlas, editarlas y eliminarlas. Ábralo con el botón **Palettes** del panel
izquierdo del espacio de trabajo [Fixtures and Functions](/fixtures-and-functions).

Una palette es un valor guardado y reutilizable de un tipo particular — un nivel de intensidad,
un color, una posición pan/tilt, o una posición 3D — que se puede aplicar a los fixtures
y referenciar desde las funciones. Modificar una palette la actualiza en todos los sitios donde se
utiliza.

## La lista

El área principal enumera todas las palettes, cada una con un icono de su tipo y su nombre.

* **Clic** en una palette para seleccionarla; **Ctrl+clic** para seleccionar varias.
* **Arrastrar** una palette sobre fixtures u otros destinos para aplicarla.
* **Doble clic** en una palette para abrir su herramienta de edición (véase más abajo).

## Filtrar por tipo

La barra de herramientas de la parte superior tiene un botón de activación por cada tipo de palette. Cada uno muestra un
**recuento** de cuántas palettes de ese tipo existen, y activarlo filtra la
lista:

* **Intensity** — niveles de dimmer.
* **Color** — colores (RGB / CMY / WAUV).
* **Position** — posiciones pan / tilt.
* **3D Position** — posiciones definidas como un punto en el escenario 3D.

El botón de **búsqueda** (lupa) abre un cuadro para filtrar la lista por nombre de
palette.

## Crear y editar una palette

**Doble clic** en una palette para abrir la herramienta correspondiente sobre la lista, donde es
posible ajustar su valor:

* Las palettes de intensidad abren la herramienta **Intensity**.
* Las palettes de color abren la herramienta **Color**.
* Las palettes de posición abren la herramienta **Position**.
* Las palettes de zoom abren la herramienta **Beam**.
* Las palettes de posición 3D abren la herramienta **3D Position**.

Ajuste el valor en la herramienta y ciérrela para guardar el cambio en la palette.

## Eliminar palettes

Seleccione una o más palettes y haga clic en el botón **－ Delete** (menos rojo). Un
cuadro de diálogo de confirmación enumera las palettes que están a punto de eliminarse; confirme para eliminarlas.
