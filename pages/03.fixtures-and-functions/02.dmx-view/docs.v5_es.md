---
title: 'DMX View'
date: '13:59 27-06-2026'
taxonomy:
    category:
        - docs
---

La **DMX View** muestra los fixtures como una lista fluida de paneles, uno por
fixture, cada uno con sus canales individuales y sus **valores en tiempo real**. Es
la mejor vista para comprobar qué está emitiendo actualmente cada canal y para
ajustar manualmente un único canal.

Es una de las cuatro vistas disponibles en la barra de herramientas de la parte
superior del espacio de trabajo [Fixtures and Functions](/fixtures-and-functions).
Utilice el **selector de universo** de esa barra de herramientas para limitar la vista a un solo universo.

## Los paneles de fixtures

Cada fixture se dibuja como un pequeño panel que enumera sus canales. Para cada canal
puede ver su valor DMX actual (0–255), actualizado en tiempo real a medida que cambia la salida —
ya sea impulsado por su control manual, una función en ejecución o una entrada externa.

Los paneles fluyen para llenar el ancho disponible y saltan a nuevas filas según sea necesario.
Utilice las barras de desplazamiento (o los botones de **zoom** de la barra de herramientas) si tiene muchos
fixtures.

## Cambiar el valor de un canal

Haga clic en un canal para abrir una herramienta de control para él. Según el tipo de canal,
se trata de un slider o de un selector de presets, que permite establecer directamente el valor
de ese único canal. El nuevo valor se envía a la salida inmediatamente.

Esta es una forma rápida de probar un canal individual, o de ajustar ligeramente un valor sin
abrir las herramientas de capacidad completas del panel izquierdo.

## Ajustes de la vista

Haga clic en el botón de **ajustes** (el icono de "barras") de la barra de herramientas para abrir el panel
de ajustes de la DMX View a la derecha. Contiene una sección **Channels** que
controla cómo se etiqueta cada canal en los paneles de fixtures:

* **Show addresses** — cuando está activado, cada canal muestra el número de su dirección DMX
  encima del valor. Desactívelo para una visualización más compacta que muestre solo los
  valores de los canales.
* **Relative addresses** — elige cómo se numeran esas direcciones (solo tiene sentido
  cuando **Show addresses** está activado):
  * **Off** — los canales muestran su dirección DMX **absoluta** en el universo. Para
    un fixture patcheado en la dirección 10, sus canales se etiquetan 11, 12, 13, …
    (la dirección de inicio del fixture más el desplazamiento del canal).
  * **On** — los canales muestran su dirección **relativa al fixture**, siempre
    comenzando en 1. Los canales del mismo fixture se etiquetan 1, 2, 3, …
    independientemente de dónde esté patcheado.

  Utilice direcciones absolutas cuando necesite que coincidan con lo que reporta la consola o una
  hoja de patch; utilice direcciones relativas cuando le interese la posición de un canal
  dentro del propio fixture.

## Seleccionar fixtures

La selección de fixtures aquí funciona junto con el resto del espacio de trabajo: un fixture
seleccionado en la DMX View también queda seleccionado en las demás vistas y en las herramientas
de canales del panel izquierdo, de modo que se puede combinar la edición directa de canales con
los controles de capacidad de nivel superior.
