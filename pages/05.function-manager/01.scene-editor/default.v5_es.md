---
title: 'Editor de Escena'
---

Una **Escena** es la función más básica: un aspecto fijo formado por los valores de
los canales de uno o más fixtures. El Editor de Escena se abre en el panel derecho
del área de trabajo [Fixtures and Functions](/fixtures-and-functions) cuando se crea
o se edita una escena.

Una escena se construye a partir de **componentes** — los fixtures, los grupos de
fixtures y las paletas que controla. Los valores reales de los canales para estos
componentes se establecen utilizando las vistas y las herramientas de canales del
panel izquierdo; el propio editor gestiona qué componentes pertenecen a la escena y
cómo esta realiza el fundido.

## Barra de herramientas

* **Nombre** — el nombre de la escena (el campo de texto en la barra superior). Editable libremente.
* **Atrás** (flecha) — vuelve al editor anterior o al Gestor de Funciones.
* **Añadir un fixture/grupo** (icono de fixture con ＋) — abre el Gestor de Grupos de
  Fixtures en un panel lateral; arrastre fixtures o grupos desde allí hacia la escena.
* **Añadir una paleta** (icono de paleta con ＋) — abre el Gestor de Paletas en un panel
  lateral; arrastre paletas a la escena para controlar sus valores desde una paleta.
* **Eliminar los elementos seleccionados** (－) — elimina los componentes seleccionados
  de la escena, previa confirmación.

## La lista de componentes

El área principal muestra cada componente (fixture, grupo o paleta) presente en la escena.

* **Haga clic** en un componente para seleccionarlo; al seleccionar un fixture también
  se selecciona en las vistas, de modo que se pueden editar sus valores de canal.
* **Ctrl+clic** para seleccionar varios.
* También se pueden **arrastrar** fixtures, grupos o paletas directamente sobre la
  lista para añadirlos.

## Establecer valores

Para definir el aspecto, seleccione los fixtures de la escena y ajuste sus canales
usando las **herramientas de capacidades de canal** del panel izquierdo (Intensidad,
Color, Posición, etc.) o la **Vista DMX**. Los valores se almacenan en la escena a
medida que se van modificando.

## Velocidad

La sección **Velocidad**, plegable, define cómo se desvanece la escena al activarse:

* **Fade in** — el tiempo que tarda la escena en subir en fundido hasta sus valores.
* **Fade out** — el tiempo que tarda en desvanecerse al detenerse.

Haga doble clic en un campo de tiempo, o use el botón de reloj situado junto a él,
para introducir un valor en el editor de tiempo.

> Cuando una escena forma parte de una **Secuencia**, se edita a través de la pestaña
> *Fixtures* del Editor de Secuencia en lugar de individualmente. Consulte
> [Sequence Editor](../sequence-editor).
