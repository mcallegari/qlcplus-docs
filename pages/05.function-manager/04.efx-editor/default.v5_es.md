---
title: 'Editor EFX'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

Un **EFX** (efecto) mueve los fixtures a lo largo de una trayectoria matemática — círculos, ochos, líneas y otras formas — de manera automática. Es la forma más rápida de crear efectos de movimiento pan/tilt (además de efectos de dimmer o RGB) en muchos fixtures a la vez. El Editor EFX se abre en el panel derecho del área de trabajo [Fixtures and Functions](/fixtures-and-functions).

## Vista previa

Una gran **vista previa** en la parte superior muestra la trayectoria y la posición de cada fixture en tiempo real mientras se modifican los ajustes.

| Acción | Resultado |
|--------|--------|
| **Clic** en la vista previa | Alterna entre la vista plana (2D) y la vista esférica. |
| **Arrastrar** en la vista esférica | Rota la esfera horizontalmente, para poder observar la trayectoria desde otro ángulo. |

## Fixtures

La sección **Fixtures** enumera los fixtures (o cabezas) que participan en el efecto.

| Botón | Qué hace |
|--------|--------------|
| <i class="fa fa-2x fa-arrow-down-wide-short"></i> **Definir un offset en todos los fixtures** | Abre una ventana emergente para distribuir los fixtures a lo largo de la trayectoria en una sola operación (ver más abajo). |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Añadir un fixture/cabeza** | Abre el Gestor de Grupos de Fixtures en un panel lateral. Arrastre universos, grupos, fixtures o cabezas individuales al área de soltado debajo de la lista. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Eliminar la(s) cabeza(s) de fixture seleccionada(s)** | Elimina las cabezas seleccionadas del efecto (pide confirmación). |

### Ventana emergente de offset

| Ajuste | Significado |
|---------|---------|
| **Offset** | El valor del offset en grados (0–360). |
| **Increasing** | Asigna a cada fixture un offset progresivamente mayor, de modo que se persigan a lo largo de la forma en lugar de moverse juntos. |
| **Randomize** | Asigna a cada fixture un offset aleatorio. |

**Increasing** y **Randomize** son mutuamente excluyentes. Si ninguno está marcado, se aplica el mismo offset a todos los fixtures.

### La lista de fixtures

| Columna | Significado |
|--------|---------|
| **#** | El índice de la cabeza en el efecto — es el orden usado por los órdenes de fixture **Serial** y **Asymmetric**. |
| **Fixture** | El nombre del fixture o de la cabeza. |
| **Mode** | Lo que controla el efecto para esa cabeza: **Position** (pan/tilt), **Dimmer**, o **RGB**. |
| **Reverse** | Hace que esa cabeza recorra la trayectoria en dirección opuesta. |
| **Start offset** | El punto de la trayectoria donde esa cabeza comienza, en grados (0–359). |

Haga clic en una fila para seleccionarla; **Ctrl+clic** o **Shift+clic** para seleccionar varias antes de eliminarlas.

## Pattern

La sección **Pattern** define la forma y cómo se sitúa en el espacio.

| Ajuste | Significado |
|---------|---------|
| **Pattern** | La forma base: **Circle**, **Eight**, **Line**, **Line2**, **Diamond**, **Square**, **SquareChoppy**, **SquareTrue**, **Leaf** o **Lissajous**. |
| **Relative movement** | Ejecuta el efecto en relación con la posición actual de cada fixture en lugar de desde un centro absoluto. Oculta los campos de offset X/Y. |
| **Width** | Tamaño horizontal de la forma (0–127). |
| **Height** | Tamaño vertical de la forma (0–127). |
| **X offset** | Desplaza el centro de la forma horizontalmente (0–255). Solo en modo absoluto. |
| **Y offset** | Desplaza el centro de la forma verticalmente (0–255). Solo en modo absoluto. |
| **Rotation** | Rota toda la forma (0–359°). |
| **Start offset** | Desplaza el punto de la forma donde comienza la trayectoria (0–360°). |
| **Enable dimmer control** | Permite que el EFX controle también la intensidad de los fixtures. Desactivado de forma predeterminada, en cuyo caso el EFX anima solo pan/tilt. |

### Parámetros Lissajous

Estos cuatro campos aparecen solo cuando está seleccionado el pattern **Lissajous**; definen las matemáticas que producen las figuras más complejas.

| Ajuste | Significado |
|---------|---------|
| **X frequency** | Número de oscilaciones horizontales por ciclo (0–32). |
| **Y frequency** | Número de oscilaciones verticales por ciclo (0–32). |
| **X phase** | Desfase horizontal (0–360°). |
| **Y phase** | Desfase vertical (0–360°). |

Modificar la relación entre la frecuencia X e Y es lo que transforma la figura de un simple círculo en los clásicos nudos de Lissajous.

## Velocidad

La sección **Velocidad** define la temporización del efecto. Haga **doble clic** en un campo de tiempo, o use el botón <i class="fa fa-2x fa-clock"></i> situado junto a él, para abrir el editor de tiempo.

| Ajuste | Significado |
|---------|---------|
| **Fade in** | Tiempo para el fundido de entrada del efecto al iniciarse. |
| **Loop** | La duración de un ciclo completo a lo largo de la trayectoria. |
| **Fade out** | Tiempo para el fundido de salida al detenerse. |

## Orden y dirección

### Orden de ejecución

| Icono | Modo | Comportamiento |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repite la trayectoria indefinidamente. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Ejecuta un ciclo completo y se detiene. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Ejecuta la trayectoria hacia adelante, luego hacia atrás, y repite. |

### Dirección

| Icono | Modo | Comportamiento |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Recorre la trayectoria en la dirección normal. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Recorre la trayectoria en dirección opuesta. |

### Orden de los fixtures

| Icono | Modo | Comportamiento |
|------|------|-----------|
| **P** | **Parallel** | Todos los fixtures recorren la trayectoria juntos (su **Start offset** los sigue distribuyendo). |
| **S** | **Serial** | Los fixtures se distribuyen uniformemente a lo largo de la trayectoria, uno tras otro, en el orden de la lista. |
| **A** | **Asymmetric** | Los fixtures se distribuyen como en Serial, pero cada fixture alterno se ejecuta en la dirección opuesta. |
