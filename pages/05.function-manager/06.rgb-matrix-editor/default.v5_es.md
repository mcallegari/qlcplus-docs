---
title: 'Editor de Matriz RGB'
date: '12:24 21-08-2023'
media_order: blending.png
---

Una **Matriz RGB** reproduce patrones animados, texto e imágenes sobre un **grupo de fixtures** dispuesto como una cuadrícula — paneles LED, barras de píxeles, una pared de PARs, etc. El Editor de Matriz RGB se abre en el panel derecho del área de trabajo [Fixtures and Functions](/fixtures-and-functions), con una **vista previa** en vivo de la animación justo debajo del selector de grupo.

## Ajustes básicos

| Ajuste | Significado |
|---------|---------|
| **Name** | El nombre de la matriz (barra superior). |
| **Fixture Group** | El grupo de fixtures sobre el que se reproduce la matriz. La disposición del grupo (filas × columnas) define la cuadrícula de píxeles — elija un grupo antes de que se muestre algo. |
| **Pattern** | El algoritmo de animación a reproducir: **Text**, **Image**, o uno de los patrones basados en script. La selección determina lo que aparece en la sección **Parámetros**. |
| ![](/basics/sequence.svg?resize=48,48) **Guardar esta matriz en una secuencia** | Convierte la matriz en ejecución en una secuencia de pasos, para poder ajustarla o recortarla como un chaser. |
| **Blend mode** | Cómo se combina la matriz con otras salidas en los mismos fixtures. |
| **Color mode** | Qué capacidad del fixture controla la matriz. |
| **Colors** | El color (o colores) que usa el patrón — ver más abajo. |

### Blend mode

| Modo | Comportamiento |
|------|-----------|
| **Default (HTP)** | El valor más alto prevalece frente a otras funciones en los mismos canales. |
| **Mask** | La matriz actúa como una máscara sobre lo que ya está presente. |
| **Additive** | El color de la matriz se suma a la salida existente. |
| **Subtractive** | El color de la matriz se resta de la salida existente. |

### Color mode

| Modo | Controla |
|------|--------|
| **Default (RGB)** | Los canales RGB (o CMY) de los fixtures. |
| **White** | El canal de blanco. |
| **Amber** | El canal de ámbar. |
| **UV** | El canal UV. |
| **Dimmer** | El canal de intensidad. |
| **Shutter** | El canal de obturador. |

### Colors

El número de muestras de color mostradas depende del patrón seleccionado — cada patrón declara cuántos colores acepta, desde ninguno hasta cinco. Haga clic en una muestra para abrir el selector de color; el botón <i class="fa fa-2x fa-xmark" style="color:darkred"></i> situado junto a los colores 2–5 restablece ese color al estado sin definir.

## Parámetros

La sección **Parámetros** cambia por completo según el patrón seleccionado, y se oculta cuando el patrón no tiene nada que configurar.

### Patrones de texto

| Ajuste | Significado |
|---------|---------|
| **Text** | El mensaje a mostrar. |
| <i class="fa fa-2x fa-font" style="color:cyan"></i> **Font** | Abre un selector de fuente para la familia, el tamaño y el estilo. |
| **Animation** | Cómo se mueve el texto: **Letters** (una letra a la vez), desplazamiento **Horizontal** o **Vertical**. |
| **Offset X** / **Y** | Desplaza el texto en la cuadrícula (de −255 a 255). |

### Patrones de imagen

| Ajuste | Significado |
|---------|---------|
| **Image** | El archivo de imagen a mostrar. |
| <i class="fa fa-2x fa-image"></i> **Seleccionar una imagen** | Abre un selector de archivos. |
| **Animation** | **Static**, **Horizontal**, **Vertical**, o **Animation** (reproduce los fotogramas de un GIF animado). |
| **Offset X** / **Y** | Desplaza la imagen en la cuadrícula (de −255 a 255). |

### Patrones basados en script

Los patrones basados en script construyen sus propios controles: el script declara sus propiedades y QLC+ genera una etiqueta correspondiente más un cuadro combinado, un campo numérico, un campo decimal o un campo de texto para cada una de ellas. Lo que se ve depende, por tanto, enteramente del script elegido — por ejemplo, el número de barras, el tamaño de una forma, una dirección, etc.

## Velocidad

Haga **doble clic** en un campo de tiempo, o use el botón <i class="fa fa-2x fa-clock"></i> situado junto a él, para abrir el editor de tiempo.

| Ajuste | Significado |
|---------|---------|
| **Steps fade in** | Tiempo de fundido de entrada de cada paso de la animación. |
| **Steps hold** | Cuánto tiempo se mantiene cada paso — esto es lo que determina el ritmo de la animación. |
| **Steps fade out** | Tiempo de fundido de salida de cada paso. |
| **Tempo type** | Si los tiempos se miden en **Time** o en **Beats**, sincronizados con el tempo global. |

## Orden y dirección

### Orden de ejecución

| Icono | Modo | Comportamiento |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repite la animación indefinidamente. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Reproduce la animación una sola vez y se detiene. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Reproduce hacia adelante, luego hacia atrás, y repite. |

### Dirección

| Icono | Modo | Comportamiento |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Reproduce los pasos de la animación en orden normal. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Reproduce los pasos de la animación en orden inverso. |
