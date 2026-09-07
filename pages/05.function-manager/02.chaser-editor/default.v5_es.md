---
title: 'Editor de Chaser'
date: '12:08 21-08-2023'
---

Un **Chaser** reproduce una lista de funciones (normalmente escenas) una tras otra, cada una durante un tiempo definido. Es la forma principal de construir secuencias de aspectos — chases de color, efectos basados en pasos, cadenas de cues, etc. El Editor de Chaser se abre en el panel derecho del área de trabajo [Fixtures and Functions](/fixtures-and-functions).

## Barra de herramientas

| Botón | Qué hace |
|--------|--------------|
| **Nombre** | El nombre del chaser (barra superior). |
| <i class="fa fa-chevron-left fa-2x"></i> **Atrás** | Vuelve al editor anterior. |
| <i class="fa fa-2x fa-circle-left" style="color:cyan"></i> **Vista previa del paso anterior** | Cuando la vista previa está en ejecución, retrocede por los pasos del chaser para poder comprobar cada aspecto en la salida. |
| <i class="fa fa-2x fa-circle-right" style="color:cyan"></i> **Vista previa del paso siguiente** | Cuando la vista previa está en ejecución, avanza por los pasos del chaser. |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Añadir un nuevo paso** | Abre el Gestor de Funciones en un panel lateral. **Doble clic** o arrastre de funciones desde allí para añadirlas como pasos. |
| <i class="fa fa-2x fa-clone"></i> **Duplicar el/los paso(s) seleccionado(s)** | Copia los pasos seleccionados, insertando las copias en la lista. |
| <i class="fa fa-2x fa-shuffle" style="color:gold"></i> **Orden aleatorio de los pasos seleccionados** | Mezcla el orden de los pasos seleccionados. |
| <i class="fa fa-2x fa-stopwatch" style="color:lightskyblue"></i> **Definir automáticamente la duración de los pasos** | Divide la duración total del chaser de forma uniforme entre los pasos seleccionados. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Eliminar los pasos seleccionados** | Elimina los pasos seleccionados (pide confirmación). |
| <i class="fa fa-2x fa-print"></i> **Imprimir los pasos del Chaser** | Imprime la lista de pasos del chaser. |

Los botones de vista previa aparecen solo mientras la vista previa está activa. Los botones de edición se deshabilitan mientras la vista previa está en ejecución, y los botones de duplicar/duración automática/eliminar requieren que al menos un paso esté seleccionado.

## La lista de pasos

Cada fila es un paso del chaser:

| Columna | Significado |
|--------|---------|
| **#** | El número del paso, en el orden de reproducción. |
| **Función** | La función que reproduce este paso. |
| **Fade In** | El tiempo que tarda el paso en el fundido de entrada. |
| **Hold** | El tiempo que el paso permanece al máximo antes del fundido de salida. |
| **Fade Out** | El tiempo que tarda el paso en el fundido de salida. |
| **Duración** | El tiempo total del paso (fade in + hold). |
| **Nota** | Un comentario de texto libre para el paso. |

Interacciones:

| Acción | Resultado |
|--------|--------|
| **Clic** | Selecciona un paso. |
| **Ctrl+clic** / **Shift+clic** | Añade a la selección / selecciona un rango. |
| **Arrastrar** un paso | Lo reordena; una línea muestra dónde se soltará. |
| **Arrastrar** desde el Gestor de Funciones | Añade funciones como pasos en la posición de soltado. |
| **Doble clic** en el nombre de la función | Abre el editor propio de esa función. |
| **Doble clic** en un campo de tiempo | Edita el tiempo de ese paso en línea. |
| **Doble clic** en la nota | Edita la nota del paso en línea (**Intro** confirma, **Esc** cancela). |

Los campos de tiempo que no son **Per Step** (ver más abajo) no se pueden editar en la lista.

## Propiedades de ejecución

La sección **Propiedades de ejecución**, plegable, controla cómo se reproduce el chaser.

### Orden de ejecución

| Icono | Modo | Comportamiento |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repite desde el primer paso indefinidamente. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Reproduce una sola vez y se detiene. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Reproduce hacia adelante, luego hacia atrás, y repite. |
| <i class="fa fa-2x fa-shuffle"></i> | **Random** | Reproduce los pasos en orden aleatorio. |

### Dirección

| Icono | Modo | Comportamiento |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Comienza en el primer paso y avanza hacia abajo en la lista. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Comienza en el último paso y avanza hacia arriba en la lista. |

### Tempo

| Icono | Modo | Comportamiento |
|------|------|-----------|
| **T** | **Time** | Los tiempos de los pasos se expresan en minutos/segundos/milisegundos. |
| **B** | **Beats** | Los tiempos de los pasos se expresan en beats, sincronizados con el tempo global. |

### Fade In / Fade Out / Duración

Estos tres ajustes deciden de dónde obtiene cada paso su temporización.

| Icono | Modo | Comportamiento |
|------|------|-----------|
| **D** | **Default** | Cada paso usa el tiempo de fundido de su propia función. (Solo Fade In / Fade Out.) |
| **C** | **Common** | Un único valor, introducido una sola vez, es compartido por todos los pasos. |
| **S** | **Per Step** | Cada paso mantiene su propio valor, editable directamente en la lista de pasos. |
