---
title: 'Simple Desk'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapter 6

# Simple Desk

El **Simple Desk** es una superficie de control DMX manual. Ofrece un fader y
una casilla de valor para cada canal de un universo, además de un **keypad**
para introducir comandos al estilo de consola — permitiendo controlar el
equipo a mano, igual que en una mesa de iluminación tradicional. Es ideal
para el control práctico rápido, el busking y las pruebas.

Se abre desde la barra de herramientas principal (el icono de Simple Desk).
Lo que se configura aquí puede capturarse en una Escena con
[DMX Dump](/main-window/dmx-dump).

## Diseño

El Simple Desk está dividido en dos áreas, con un divisor arrastrable entre
ellas:

* **Arriba** — los faders de los canales del universo seleccionado.
* **Abajo** — la **Fixture List**, el **historial de comandos**, y el
  **keypad**.

## Faders de canal

El área superior muestra una columna por cada canal DMX del universo actual,
cada una con:

* Un **icono de canal** — al hacer clic se abre una herramienta dedicada
  para ese tipo de canal (deslizador o selector de preajustes). Pulse
  **Esc** para cerrarla.
* Un **fader** — arrastre para establecer el valor del canal.
* Una **casilla de valor** — escriba un valor exacto. Muestra DMX (0–255) o
  porcentaje (0–100%) según el modo de visualización.
* La **dirección DMX** del canal.
* Un botón de **restablecer** (✕) — devuelve el canal a su estado normal (no
  sobrescrito).

Los canales que se han modificado manualmente están **sobrescritos** y se
muestran en **rojo**. Los demás canales se colorean para mostrar a qué
fixture pertenecen (tonos alternos para fixtures vecinos).

### Barra de herramientas

Encima de los faders:

* **Universe** — elige qué universo controlan los faders.
* **Reset the whole universe** (✕) — borra todas las sobrescrituras del
  universo actual.
* **DMX / %** — alterna las casillas de valor entre valores DMX en bruto
  (0–255) y porcentajes (0–100%).

## Fixture List

La lista inferior izquierda muestra los fixtures parcheados en el universo
actual con su rango de direcciones. Haga clic en un fixture para desplazar
la vista de faders hasta su primer canal, facilitando encontrar los canales
de un fixture en un universo completo.

## Keypad e historial de comandos

El área inferior derecha es un **keypad** numérico para introducir comandos,
junto con un **historial de comandos**. Cada comando ejecutado se añade al
historial; haga **doble clic** en una entrada del historial para volver a
cargarla en el keypad y poder reejecutarla o editarla.

Escriba un comando con el keypad en pantalla (o con el teclado) y pulse
**ENTER** para ejecutarlo. **CLR** borra el comando actual.

## Sintaxis de los comandos del keypad

Los comandos del keypad direccionan uno o más canales y establecen sus
valores, al estilo de una consola de iluminación clásica. Los canales se
direccionan mediante su **dirección DMX** dentro del universo actual (base 1).

### Palabras clave y operadores

| Token | Significado |
|-------|---------|
| `AT` | Establece el/los canal(es) direccionado(s) a un valor: `1 AT 200`. |
| `THRU` | Un rango — de canales (`1 THRU 10`) o, tras `AT`, de valores para un fundido a lo largo del rango. |
| `BY` | Un paso al direccionar un rango: `1 THRU 20 BY 2` selecciona un canal de cada dos. |
| `FULL` | Atajo para el valor máximo (255 / 100%). |
| `ZERO` | Atajo para el valor 0. |
| `+` | Suma a los valores actuales de los canales: `1 + 20`. |
| `-` | Resta de los valores actuales de los canales: `1 - 20`. |
| `+%` | Aumenta los valores actuales en un porcentaje: `1 +% 10`. |
| `-%` | Disminuye los valores actuales en un porcentaje: `1 -% 10`. |

El keypad muestra `+`/`-` o `+%`/`-%` según el modo de visualización actual.

### Formas básicas

| Comando | Efecto |
|---------|--------|
| `5` | Selecciona el canal 5 (y lo convierte en la selección de trabajo). |
| `5 AT 128` | Establece el canal 5 al valor 128. |
| `5 FULL` | Establece el canal 5 al máximo (255). |
| `5 ZERO` | Establece el canal 5 a 0. |

### Rangos

| Comando | Efecto |
|---------|--------|
| `1 THRU 10 AT 255` | Establece los canales del 1 al 10, todos a 255. |
| `1 THRU 10 BY 2 AT 128` | Establece cada segundo canal del 1 al 10 (1, 3, 5, 7, 9) a 128. |
| `1 THRU 10 AT 0 THRU 255` | Distribuye los valores uniformemente a lo largo del rango — un fundido de 0 en el canal 1 hasta 255 en el canal 10. |

### Cambios relativos

| Comando | Efecto |
|---------|--------|
| `1 THRU 10 + 20` | Suma 20 al valor actual de cada canal 1–10 (limitado a 255). |
| `1 THRU 10 - 20` | Resta 20 de cada uno (limitado a 0). |
| `1 +% 10` | Aumenta el valor actual del canal 1 en un 10%. |
| `1 -% 10` | Disminuye el valor actual del canal 1 en un 10%. |

### Repetición sobre la última selección

Si se introduce un comando **sin especificar canales** (por ejemplo, solo
`AT 100`, `FULL`, o `ZERO`), se aplica a los **mismos canales que el comando
anterior**. Esto permite seleccionar un conjunto de canales una sola vez y
luego seguir ajustándolos:

```
1 THRU 8 AT 255   ← selecciona los canales 1–8 y los establece al máximo
ZERO              ← los mismos canales 1–8 pasan a 0
AT 128            ← los mismos canales 1–8 pasan a 128
```

> Los valores siempre son DMX (0–255) en los comandos. Un rango de valores
> `THRU` y el paso `BY` permiten construir fundidos y patrones en una sola
> línea, exactamente igual que en una consola de hardware.
