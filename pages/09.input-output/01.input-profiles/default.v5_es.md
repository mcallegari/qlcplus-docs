---
title: 'Input Profiles'
date: '04:57 22-08-2023'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

## ¿Qué es un perfil de input?

Un **perfil de input** mapea las señales provenientes de un dispositivo de
control externo (un controlador MIDI, una app OSC, una mesa DMX, un joystick,
…) a canales que QLC+ es capaz de comprender, permitiendo controlar el show
con el hardware preferido sin conocer el protocolo subyacente. Una vez
asignado un perfil a un universo, sus canales pueden vincularse a widgets de
la Virtual Console, grupos de canales y más.

## Seleccionar un perfil de input

QLC+ incluye muchos perfiles ya preparados. Para asignar uno:

1. Abrir el contexto ![](/basics/inputoutput.svg?resize=24,24) **Inputs/Outputs**.
2. Seleccionar el universo en el que está patcheado el dispositivo.
3. Abrir la lista de **perfiles de input** desde el panel izquierdo (el botón
   **P**).
4. Encontrar el perfil del dispositivo y seleccionarlo. Se vincula a la patch
   de input del universo.

## Crear / editar un perfil

Si el dispositivo no está en la lista, se puede crear uno propio. Desde la
lista de perfiles de input, utilizar el botón
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> para crear un nuevo
perfil, o seleccionar uno existente y editarlo. En ambos casos se abre el
**Input Profile Editor**; a partir de aquí el procedimiento es el mismo.

## Input Profile Editor

El editor está organizado en pestañas, con una barra de herramientas común
para añadir, eliminar y guardar elementos:

| Botón | Función |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add** | Añade un nuevo canal / color / canal MIDI, según la pestaña actual. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove** | Elimina el elemento seleccionado. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard** | (Pestaña Input Mapping) Activa/desactiva el asistente de detección automática de canales (ver más abajo). |
| ![](/basics/filesave.svg?resize=32,32) **Save this profile** | Guarda el perfil. Si el fabricante/modelo están vacíos, se pedirá completarlos antes. |

### General

El área **General** contiene los datos identificativos del perfil:

* **Manufacturer** — el fabricante del dispositivo. Si ya está presente en la
  lista, utilizar la misma grafía y mayúsculas/minúsculas.
* **Model** — el modelo del dispositivo, incluyendo la versión si es relevante
  (por ejemplo, "APC Mini MK2").
* **Type** — el tipo de perfil: **MIDI**, **OS2L**, **OSC**, **HID**, **DMX** o
  **ENTTEC**. Los perfiles MIDI muestran campos adicionales de mensajes MIDI
  en el editor de canales y exponen la pestaña **MIDI Channels** y los ajustes
  globales MIDI.

Para los perfiles MIDI está disponible una opción **MIDI Global Settings**:
*When MIDI notes are used, send a Note Off when value is 0*.

### Input Mapping

Esta pestaña muestra los canales del perfil (número de canal, nombre y tipo).
Hay dos formas de añadir canales.

**Manual** — utilizar el botón
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add** para
introducir manualmente los detalles del canal. Útil si se conocen los códigos
MIDI/OSC del propio dispositivo.

**Automático** — utilizar el
<i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard**
para detectar canales accionando los controles del dispositivo. QLC+ añade
cada control en cuanto se toca. Para que esto funcione, un plugin de input
debe estar patcheado en el universo actual, y es necesario detener el wizard
antes de abandonar la página.

> No es posible añadir el mismo canal más de una vez a un perfil.

#### Propiedades del canal

Al añadir o editar un canal se configuran:

* **Number** — el número del canal. Dado que QLC+ admite muchos plugins, esto
  puede no ser intuitivo, así que modificarlo solo si se sabe lo que se está
  haciendo.
* **Name** — una etiqueta arbitraria que describe el propósito del control.
* **Type** — el tipo de control:
  ![](/basics/slider.svg?resize=24,24) **Slider**,
  ![](/basics/knob.svg?resize=24,24) **Knob**,
  ![](/basics/button.svg?resize=24,24) **Button** o
  ![](/basics/knob.svg?resize=24,24) **Encoder**. Tres tipos especiales —
  ![](/basics/back.svg?resize=24,24) **Previous Page**,
  ![](/basics/forward.svg?resize=24,24) **Next Page** y
  ![](/basics/star.svg?resize=24,24) **Page Set** — se utilizan para
  controlar frames multipágina.

Para los perfiles **MIDI** el editor añade los campos **Channel**,
**Message**, **Param** y **Note**, que permiten introducir la especificación
MIDI de forma más intuitiva (estos valores se traducen en el número de
canal).

#### ![](/basics/slider.svg?resize=24,24) Movimiento del slider

Al seleccionar un canal **Slider** se muestra su comportamiento de
movimiento:

* **Absolute** (predeterminado) — QLC+ utiliza el valor recibido exactamente
  como se envía.
* **Relative** — el valor se trata como un movimiento a partir de la posición
  actual del widget, útil con un joystick HID que pilota un widget
  [XY Pad](/virtual-console/xy-pad) o [Slider](/virtual-console/slider). Un
  valor de **Sensitivity** establece la intensidad del movimiento — más alto
  es más lento, más bajo es más rápido.

#### ![](/basics/knob.svg?resize=24,24) Encoder

Un encoder es un control rotativo continuo, siempre relativo: al girarlo
genera desplazamientos positivos o negativos en QLC+. Un valor de
**Sensitivity** establece la magnitud del desplazamiento añadido o restado
por cada paso.

#### ![](/basics/button.svg?resize=24,24) Button

Los botones exponen un comportamiento global adicional:

* **Generate an extra Press/Release when toggled** — para dispositivos (por
  ejemplo, Behringer BCF2000) o software (por ejemplo, TouchOSC) que envían
  un solo valor al pulsar. QLC+ sintetiza el "release" faltante para que los
  toggles se comporten de manera coherente.
* **Custom Feedback** — con **Lower value** y **Upper value** se fuerzan
  valores personalizados que se envían al estar el botón apagado/encendido,
  por ejemplo para establecer el color del LED en dispositivos AKAI APC. Este
  ajuste es global, pero un widget específico de la Virtual Console puede
  sobrescribirlo.

### Colors

Algunos controladores pueden mostrar colores en sus botones. Esta pestaña
permite definir un conjunto de colores de feedback para poder elegirlos
fácilmente al editar el feedback de los widgets de la Virtual Console.
Utilizar <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add** para
añadir una entrada con:

* **Value** — el valor que QLC+ debe enviar al controlador para producir el
  color.
* **Color** — el color mostrado para ese valor (un selector de color).
* **Label** — un nombre para el color (por ejemplo, "Blue").

### MIDI Channels

Para dispositivos MIDI que utilizan diferentes canales MIDI según los modos
de feedback/visualización (por ejemplo, el AKAI APC Mini MK2), esta pestaña
permite añadir los canales MIDI correspondientes con un nombre descriptivo,
mediante <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add**.

## Guardar

Al terminar, guardar el perfil con el botón
![](/basics/filesave.svg?resize=24,24) **Save** (se pedirá indicar el
fabricante/modelo si faltan). El nuevo perfil aparecerá entonces en la lista
de perfiles de input, listo para asignarse a un universo como se describe
más arriba.

Tener en cuenta que algunos perfiles incluidos son **perfiles de sistema** y
no se pueden eliminar a menos que se disponga de derechos de administrador.
