---
title: 'Input Output'
date: '04:54 22-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Capítulo 8

# Input/Output

El contexto **Input/Output** es el lugar donde se conectan los **universos**
internos de QLC+ con el mundo real — los plugins y dispositivos que envían la
señal DMX hacia las luces, y los controladores que envían input de entrada.
Por defecto QLC+ proporciona varios universos, que se pueden añadir o eliminar
según sea necesario.

El mapeo de input/output se guarda dentro del proyecto actual, por lo que es
posible trasladar un proyecto a otro ordenador o sistema operativo sin
necesidad de reconfigurarlo. Si no hay ningún proyecto cargado, QLC+ mantiene
el mapeo como configuración de "fallback".

Para abrir el contexto, utilizar la pestaña
![](/basics/inputoutput.svg?resize=24,24) **Inputs/Outputs** en la parte
inferior de la pantalla principal de QLC+.

## Estructura

El contexto es un diagrama de patch con un panel a cada lado:

* **Panel izquierdo** — las herramientas para el lado **input** del universo
  seleccionado (plugins de input, perfiles de input y configuración de
  plugin/audio).
* **Centro** — una fila de bloques, uno por **universo** (más un bloque de
  audio en la parte superior). Las patches de input se conectan a la
  izquierda de cada bloque, las de output a la derecha, dibujadas como
  **conexiones** (wires).
* **Panel derecho** — las herramientas para el lado **output**, además del
  blackout y los botones para añadir/eliminar universos.

Hacer clic en un bloque de universo para seleccionarlo; los paneles laterales
actuarán entonces sobre ese universo.

## El bloque de universo

Cada universo se representa como un bloque central con sus conexiones:

* **Name** — hacer doble clic en el bloque para renombrar el universo con un
  nombre significativo ("Escenario izquierdo", "Cabezas móviles", …).
* <i class="fa fa-arrow-right-long"></i> **Passthrough** — el pequeño botón de
  flecha activa/desactiva el passthrough del universo (ver [más abajo](#passthrough-del-universo)).
* **F — Feedback** — cuando hay presente una patch de input, el botón **F**
  activa/desactiva la línea de feedback hacia el controlador.

## Patching

El patching se realiza mediante **arrastrar y soltar**:

* Abrir la lista de plugins de **input** u **output** desde el panel lateral
  (el botón ![](/basics/inputoutput.svg?resize=24,24)), y luego **arrastrar
  una línea de plugin** hacia el lado izquierdo (input) o derecho (output) de
  un bloque de universo. Se dibuja una conexión para mostrar el enlace.
* Cada universo puede tener **un solo input** pero **varios outputs**
  (arrastrar más líneas de plugin al lado derecho para añadirlos).
* Para **eliminar** una patch, arrastrar su bloque lejos del universo y
  soltarlo en la papelera <i class="fa fa-trash-can"></i> que aparece en la
  parte inferior de la pantalla.

Si un plugin necesita configuración antes de que aparezcan sus líneas,
utilizar el botón ![](/basics/configure.svg?resize=24,24) **configuración de
plugin** en el panel lateral (se muestra solo cuando el plugin admite ajustes
manuales).

## Añadir / eliminar universos

El panel derecho contiene los botones de gestión de universos:

| Botón | Función |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new universe** | Añade un nuevo universo, denominado "Universe X" donde X es un número progresivo (que es también su ID). |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected universe** | Elimina el último universo. **Prestar atención — esta operación puede afectar a los fixtures patcheados en él y no se puede deshacer.** |

## Blackout

El panel derecho dispone también de un interruptor de blackout
(<i class="fa fa-eye"></i> / <i class="fa fa-eye-slash"></i>) que fuerza a
cero **todas las patches de output** — un apagado instantáneo de todo el
equipo. Activarlo de nuevo para restaurar el output.

## Passthrough del universo

Cuando el passthrough está habilitado, un universo simplemente reenvía todo
lo que recibe en su línea de **input** hacia su línea de **output**. Esto es
útil para:

* **Conversión de protocolo** — por ejemplo, mapear de forma transparente una
  red Art-Net hacia un adaptador DMX USB o MIDI.
* **Monitorización de datos externos** — patchear fixtures y observar los
  datos entrantes en el monitor DMX.
* **Combinar con una mesa externa** — permitir que una mesa de iluminación
  externa controle algunos canales mientras QLC+ controla luces inteligentes
  en el mismo universo.
* **Configuraciones con Raspberry Pi** — programar en un PC y luego pasar la
  reproducción a una Pi que permanece conectada a los dispositivos.

Los datos de passthrough no se ven afectados por el Grand Master ni por los
modificadores de canal. Se combinan en modo HTP con el output de QLC+ en los
puntos donde hay fixtures patcheados (no se utilizan los ajustes de canal
LTP/HTP). El blackout **sí afecta** a los datos de passthrough.

## Audio

El bloque en la parte superior de la lista representa los dispositivos de
input y output de **audio**. Seleccionarlo y luego utilizar los botones
![](/basics/audiocard.svg?resize=24,24) en los paneles laterales para elegir
la fuente de input de audio y el dispositivo de output, y el botón
![](/basics/configure.svg?resize=24,24) para abrir la configuración de
audio.

## Input y feedback

Cuando se patchea una línea de input, se habilita de inmediato, por lo que se
puede probar: mover un fader o una perilla en el propio controlador y, si
funciona correctamente, se verá actividad de input en ese universo.

Si el controlador dispone de un canal de retorno, QLC+ puede enviarle
**feedback** visual/mecánico (por ejemplo, para encender los botones o
motorizar los faders en un Behringer BCF2000). Habilitarlo con el botón **F**
en el bloque de universo. El feedback actualmente es compatible mediante
MIDI, OSC y loopback.

Para obtener el máximo provecho de un controlador externo, configurar un
**perfil de input** — ver [Input Profiles](input-profiles).
