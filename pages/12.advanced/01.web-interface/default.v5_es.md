---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

QLC+ incluye un servidor web integrado que expone algunas de sus
funcionalidades a un navegador web normal. Esto resulta muy útil para
ejecutar QLC+ en un dispositivo sin pantalla (un sistema **headless**), ya
sea para trabajar de forma autónoma o para controlarlo de forma remota desde
un teléfono, una tablet u otro ordenador.

## Habilitar la interfaz web

La interfaz web **no** está habilitada por defecto. Iniciar QLC+ con la
opción `-w` (o `--web`) para activarla. Opciones de línea de comandos
relacionadas:

| Opción | Propósito |
|--------|---------|
| `-w`, `--web` | Habilita el acceso web remoto. |
| `-wp`, `--web-port <port>` | Utiliza un puerto específico (el valor predeterminado es **9999**). |
| `-wa`, `--web-auth` | Habilita el acceso web con autenticación de usuario. |
| `-a`, `--web-auth-file <file>` | Archivo en el que almacenar las credenciales de autenticación básica. |

Ver la página [parámetros de línea de comandos](../command-line-parameters)
para saber cómo pasar estas opciones.

## Acceder a la interfaz web

Desde cualquier navegador moderno (en cualquier dispositivo de la misma red)
conectarse a:

**http://\[dirección IP\]:9999**

donde *\[dirección IP\]* es la dirección de la máquina que ejecuta QLC+ —
por ejemplo, `http://192.168.0.100:9999`. El navegador debe admitir
[WebSockets](https://caniuse.com/mdn-api_websocket), que QLC+ utiliza para
comunicarse con la página en tiempo real.

La interfaz web dispone de tres páginas:

* **Virtual Console**
* **Simple Desk**
* **Configuration**

También es posible crear páginas web propias que se comuniquen con QLC+ a
través de su [Web API](web-api).

## Página Virtual Console

Esta es la página predeterminada. Refleja la **Virtual Console** de QLC+: si
hay un proyecto cargado, muestra los widgets creados (botones, sliders, cue
lists, frames, relojes, XY pads, speed dials, animaciones, audio triggers,
etiquetas), y accionarlos en el navegador controla QLC+ en directo. Si no hay
ningún proyecto cargado, la página está vacía.

* **Load project** (arriba a la izquierda) — elegir un archivo de proyecto
  desde el dispositivo con el que se está navegando; se transfiere y es
  cargado por QLC+.
* **Configuration** — abre la página de configuración.

El diseño y el estado de los widgets se envían al navegador como JSON, y las
actualizaciones (una función en ejecución, un fader movido, un cambio de
cue) se retransmiten en directo a través del WebSocket, de modo que la vista
web permanece sincronizada con QLC+.

## Página Simple Desk

Una versión simplificada del [Simple Desk](/simple-desk) de escritorio.
Muestra un universo DMX dividido en páginas de 32 canales.

* Utilizar las **flechas izquierda/derecha** para desplazarse entre páginas
  de canales.
* Utilizar el **menú desplegable** arriba a la derecha para elegir qué
  universo se muestra.
* Utilizar el botón **reset** (✕ gris) para restablecer todo el universo.

### DMX Keypad

El botón **DMX Keypad** abre un teclado tradicional para establecer muchos
canales con un solo comando. La sintaxis de los comandos coincide con la del
[teclado Simple Desk](/simple-desk) de escritorio:

| Tecla | Descripción |
|-----|-------------|
| **AT** | Establece un valor para un canal o rango. Ejemplo: **13 AT 148**. |
| **THRU** | Selecciona un rango de canales. Ejemplo: **3 THRU 15 AT 133**. |
| **FULL** | Establece el valor máximo (255). Ejemplo: **1 THRU 10 FULL**. |
| **ZERO** | Establece el valor mínimo (0). Ejemplo: **4 ZERO**. |
| **BY** | Establece un paso dentro de un rango. Ejemplo: **1 THRU 10 BY 2 AT 100** (canales 1, 3, 5, 7, 9). |
| **+%** | Aumenta los valores actuales en un porcentaje. Ejemplo: **1 THRU 10 BY 2 +% 20**. |
| **-%** | Disminuye los valores actuales en un porcentaje. Ejemplo: **1 THRU 10 BY 2 -% 20**. |

Tener en cuenta:

* Un comando se envía solo al pulsar **ENTER**.
* Las direcciones DMX son contiguas entre universos — el Universo 1 va de 1 a
  512, el Universo 2 de 513 a 1024, y así sucesivamente.
* También es posible escribir los comandos directamente en el cuadro de
  texto superior una vez conocida la sintaxis.

## Página Configuration

Permite establecer la configuración de QLC+ de forma remota, en varias
áreas:

* **Universes configuration** — establece los inputs, outputs, feedback,
  perfiles y passthrough de cada universo (equivalente al panel
  [Input/Output](/input-output) de escritorio). Dado que un proyecto ya
  almacena su propio mapeo de I/O, normalmente basta con comprobarlo aquí en
  lugar de reconfigurarlo.
* **Audio configuration** — elegir los dispositivos de reproducción y de
  entrada de audio.
* **User loaded fixtures** — cargar de forma remota una definición de
  fixture personalizada en QLC+ con **Load fixture**. Después de añadir
  fixtures personalizados, recargar el proyecto o reiniciar QLC+ en el
  dispositivo de destino.
* **Authorized users** — disponible solo cuando QLC+ se inicia con `-wa` /
  `--web-auth`. Habilita la autenticación HTTP básica (sin HTTPS/certificados).
  Al habilitarla por primera vez es necesario añadir al menos un
  administrador, de lo contrario nunca se solicitará ninguna contraseña.
  Niveles de acceso:
  * **Everything** — administradores; acceso completo, incluida la gestión
    de usuarios.
  * **Virtual Console and Simple Desk** — pueden ver estas dos páginas, pero
    no la página Configuration.
  * **Only Virtual Console** — puede ver solo la página Virtual Console.

  Un administrador puede añadir usuarios (Username + Password →
  **Add user**), eliminar usuarios y cambiar el nivel de acceso o la
  contraseña de un usuario (**Change**).

Utilizar el botón **Back** (arriba a la izquierda) para volver a la página
principal.

## Página System

En las plataformas compatibles (normalmente dispositivos Linux headless
como una Raspberry Pi) hay disponible un área **system** para configurar la
red y el hotspot del dispositivo, elegir el proyecto de **autostart**, y
**reiniciar** o **apagar** el dispositivo de forma remota.
