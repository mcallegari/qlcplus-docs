---
title: 'Editor de Script'
date: '04:07 22-08-2023'
---

Un **Script** es una función escrita como un pequeño programa **JavaScript**. Permite controlar fixtures y otras funciones mediante lógica — iniciando y deteniendo funciones, definiendo canales, esperando, generando valores aleatorios, ejecutando comandos del sistema y más. El Editor de Script se abre en el panel derecho del área de trabajo [Fixtures and Functions](/fixtures-and-functions).

Todo el cuerpo del script se ejecuta como el contenido de una única función JavaScript, por lo que se puede usar JavaScript normal — variables, `if`/`for`/`while`, funciones, y los objetos estándar `Math`, `String`, etc. Toda interacción con QLC+ se realiza a través de un objeto global llamado **`Engine`**, cuyos métodos se documentan en el [Engine API](#engine-api) a continuación.

## Barra de herramientas

| Botón | Qué hace |
|--------|--------------|
| **Nombre** | El nombre del script (barra superior). |
| <i class="fa fa-chevron-left fa-2x"></i> **Atrás** | Vuelve al editor anterior. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Añadir una llamada de método en la posición del cursor** | Abre un menú de comandos listos para insertar en la posición del cursor (ver más abajo). |
| ![](/basics/functions.svg?resize=48,48) **Mostrar/ocultar el árbol de funciones** | Abre el Gestor de Funciones en un panel lateral. **Doble clic** o arrastre de una función para insertar su ID en el script. |
| ![](/basics/fixture.svg?resize=48,48) **Mostrar/ocultar el árbol de fixtures** | Abre el Gestor de Grupos de Fixtures en un panel lateral. **Doble clic** o arrastre de un fixture para insertar su ID. |
| <i class="fa fa-spell-check fa-2x"></i> **Comprobar la sintaxis del script** | Valida el script e informa de cualquier error en una ventana emergente. |

## Escribir el script

El área principal es un editor de texto plano donde se escribe el script, un comando por línea. Los cambios se guardan automáticamente poco después de dejar de escribir.

Dado que los comandos hacen referencia a funciones y fixtures mediante su **ID**, los árboles de funciones y fixtures (y el arrastrar y soltar) son la forma más sencilla de insertar los ID correctos sin tener que buscarlos.

## Menú de inserción de método

El botón <i class="fa fa-2x fa-plus" style="color:limegreen"></i> inserta una plantilla para un comando habitual, lista para completar:

| Entrada | Qué inserta |
|-------|-----------------|
| <i class="fa fa-2x fa-play"></i> **Start function** | Inicia la ejecución de otra función. |
| <i class="fa fa-2x fa-stop"></i> **Stop function** | Detiene una función en ejecución. |
| <i class="fa fa-2x fa-sliders" style="color:lime"></i> **Set fixture channel** | Establece un valor de canal en un fixture. |
| <i class="fa fa-2x fa-hourglass-end" style="color:deepskyblue"></i> **Wait time** | Pausa durante un tiempo determinado antes de la siguiente línea. |
| <i class="fa fa-2x fa-dice" style="color:coral"></i> **Random number** | Genera un valor aleatorio. |
| <i class="fa fa-2x fa-moon" style="color:darkslateblue"></i> **Blackout** | Activa o desactiva el blackout. |
| <i class="fa fa-2x fa-terminal"></i> **System command** | Ejecuta un comando externo. |
| <i class="fa fa-2x fa-folder-open" style="color:gold"></i> **File path** | Abre un selector de archivos e inserta la ruta del archivo seleccionado (entre comillas), para comandos que necesitan un archivo. |

## Engine API

Toda operación de QLC+ es un método del objeto global **`Engine`**, invocado como `Engine.methodName(argumentos)`. Las funciones y los fixtures siempre se indican mediante su **ID** numérico — use los árboles de funciones/fixtures o el arrastrar y soltar para insertar los ID correctos.

Los tiempos pueden indicarse tanto en **milisegundos** (un número) como en forma de **cadena de tiempo de QLC+** (por ejemplo, `"2s"`, `"1m30s"`, `"2s.140"`), según el método.

### Funciones

| Método | Descripción |
|--------|-------------|
| `Engine.startFunction(fID)` | Inicia la función con el ID indicado. Por defecto el script la controla y la detiene cuando el script finaliza (ver `stopOnExit`). Devuelve `true` si tiene éxito. |
| `Engine.stopFunction(fID)` | Detiene la función en ejecución con el ID indicado. Devuelve `true` si tiene éxito. |
| `Engine.isFunctionRunning(fID)` | Devuelve `true` si la función se está ejecutando actualmente, en caso contrario `false`. |
| `Engine.waitFunctionStart(fID)` | Pausa el script hasta que la función indicada se haya iniciado. |
| `Engine.waitFunctionStop(fID)` | Pausa el script hasta que la función indicada se haya detenido (finalizado). |
| `Engine.stopOnExit(value)` | Cuando es `true` (valor predeterminado), las funciones iniciadas por este script se detienen automáticamente al finalizar el script. Llame a `Engine.stopOnExit(false)` para dejar en ejecución las funciones iniciadas incluso después de que finalice el script. |

### Atributos de función

Los atributos son los valores ajustables de una función, como **Intensity** (índice `0`) y los atributos de velocidad de una función. Pueden direccionarse por índice o por nombre.

| Método | Descripción |
|--------|-------------|
| `Engine.getFunctionAttribute(fID, attributeIndex)` | Devuelve el valor actual del atributo en el índice indicado (Intensity es `0`), o `0` si no está disponible. |
| `Engine.setFunctionAttribute(fID, attributeIndex, value)` | Establece el atributo en el índice indicado a `value`. Devuelve `true` si tiene éxito. |
| `Engine.setFunctionAttribute(fID, attributeName, value)` | Establece el atributo con el nombre indicado (por ejemplo, `"Intensity"`) a `value`. Devuelve `true` si tiene éxito. |

### Fixtures y canales

| Método | Descripción |
|--------|-------------|
| `Engine.setFixture(fxID, channel, value)` | Establece `channel` (índice a partir de `0`, relativo al fixture) del fixture `fxID` al valor DMX `value` (0–255). Devuelve `true` si tiene éxito. |
| `Engine.setFixture(fxID, channel, value, time)` | Como arriba, pero con fundido hacia el valor a lo largo de `time` milisegundos. |
| `Engine.getChannelValue(universe, channel)` | Devuelve el valor DMX actual (0–255) de un canal **absoluto** en un universo. Nota: `universe` y `channel` aquí son el índice de universo y el índice de canal en base cero, **no** un canal relativo al fixture. |

### Temporización y flujo

| Método | Descripción |
|--------|-------------|
| `Engine.waitTime(ms)` | Pausa el script durante `ms` milisegundos antes de ejecutar la siguiente línea. |
| `Engine.waitTime(time)` | Pausa el script durante la cadena de tiempo de QLC+ indicada (por ejemplo, `"1s.500"`). |
| `Engine.random(min, max)` | Devuelve un número entero aleatorio entre `min` y `max` **milisegundos** (números). Útil combinado con `waitTime`. |
| `Engine.random(minTime, maxTime)` | Devuelve un número aleatorio de milisegundos entre dos cadenas de tiempo de QLC+ (por ejemplo, `Engine.random("1s", "5s")`). |

### Control global

| Método | Descripción |
|--------|-------------|
| `Engine.setBlackout(enable)` | Solicita el blackout cuando `enable` es `true`, lo libera cuando es `false`. Devuelve `true` si tiene éxito. |
| `Engine.setBPM(bpm)` | Establece las pulsaciones por minuto del generador de pulso interno. Devuelve `true` si tiene éxito. |
| `Engine.systemCommand(command)` | Ejecuta un programa externo desvinculado de QLC+. La primera palabra es el programa; el resto son argumentos. Encierre entre comillas simples un argumento que contenga espacios — por ejemplo, `Engine.systemCommand("aplay '/home/me/my file.wav'")`. (No disponible en iOS.) |

### Ejemplo

```javascript
// Realiza el fundido de entrada del primer canal (dimmer) del fixture 0 en 2 segundos
Engine.setFixture(0, 0, 255, 2000);
Engine.waitTime("2s");

// Inicia un chaser y lo deja en ejecución por su cuenta tras finalizar el script
Engine.stopOnExit(false);
Engine.startFunction(5);

// Espera un tiempo aleatorio, luego activa un blackout
Engine.waitTime(Engine.random("1s", "4s"));
Engine.setBlackout(true);
```

> **Nota sobre errores:** si el script no se puede analizar o genera una excepción,
> QLC+ indica el número de línea y el mensaje. Use **Comprobar la sintaxis del
> script** en la barra de herramientas para validar sin ejecutar.
