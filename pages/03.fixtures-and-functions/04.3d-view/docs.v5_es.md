---
title: '3D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **3D View** renderiza el escenario en tres dimensiones, con fixtures,
haces, colores y humo atmosférico. Es la vista previa más realista del
show y resulta útil para visualizar ángulos de haz, posiciones y looks tal como
los vería el público.

Es una de las cuatro vistas disponibles en la barra de herramientas de la parte
superior del espacio de trabajo [Fixtures and Functions](/fixtures-and-functions).

> **Nota:** La 3D View requiere un sistema capaz de realizar el renderizado
> gráfico necesario. En los sistemas que no lo admiten, se muestra un aviso en
> lugar de la escena 3D.

## Moverse por la vista

* **Zoom** — use los botones de zoom de la barra de herramientas o la rueda del ratón.
* **Órbita / panorámica** — arrastre en la escena para mirar alrededor del escenario.

## Seleccionar y posicionar fixtures

* **Clic** en un fixture para seleccionarlo; **Ctrl+clic** para añadirlo a la selección.
* Los fixtures seleccionados se pueden posicionar y rotar con precisión desde el panel
  de ajustes (más abajo), o apuntar hacia un punto en el espacio con la herramienta **Pick a 3D point**
  del panel izquierdo (atajo **Ctrl+P**) — haga clic en la escena y los fixtures seleccionados
  apuntarán hacia ese punto.

## Ajustes de la vista

Haga clic en el botón de **ajustes** (el icono de "barras") de la barra de herramientas para abrir el panel
de ajustes 3D. Sus secciones se pueden expandir y contraer.

### Environment

* **Type** — el preset de escenario a renderizar (por ejemplo, escenario simple, caja, teatro).
* **Width / Height / Depth** — el tamaño del entorno del escenario, en metros o
  pies (la unidad sigue el ajuste de la vista 2D).

### Rendering

* **Quality** — calidad de renderizado: **Low**, **Medium**, **High** o **Ultra**.
  Ajustes más altos se ven mejor pero exigen más al hardware gráfico.
* **Ambient light** — brillo general de la escena cuando ningún fixture está encendido
  (0–100%).
* **Smoke amount** — cuánta neblina atmosférica hay en el aire (0–100%), lo que
  hace los haces más visibles.
* **Show FPS** — muestra un contador de fotogramas por segundo, útil para evaluar el rendimiento.

### Position / Rotation

Estas secciones aparecen cuando algo está seleccionado y permiten introducir valores
exactos de **X / Y / Z**:

* **Position** — la ubicación de los elementos seleccionados, en milímetros.
* **Rotation** — la orientación de los elementos seleccionados, en grados.

Cuando hay varios elementos seleccionados, las modificaciones se aplican de forma relativa a todo el grupo.

### Scale

Aparece cuando se selecciona un **elemento personalizado**. Establece la escala **X / Y / Z** como
porcentaje. El botón de **bloqueo** mantiene los tres ejes proporcionales, de modo que modificar
uno escala el elemento de forma uniforme.

### Custom items

Puede añadir sus propias mallas 3D a la escena (decorados, elementos escénicos, torres, etc.):

* **Add** (＋) — elige un archivo de malla (`.obj`, `.dae`, `.3ds`, `.stl`, `.blend`, …)
  para colocar en la escena.
* **Remove** (－) — elimina los elementos personalizados seleccionados.
* **Normalize** (icono de compresión) — restablece los elementos seleccionados a un tamaño estándar.
* La lista de abajo muestra todos los elementos personalizados; haga clic en uno para seleccionarlo (y editar su
  posición, rotación y escala arriba).
