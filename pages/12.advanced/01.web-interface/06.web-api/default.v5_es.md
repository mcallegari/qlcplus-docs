---
title: 'Web API'
date: '03:38 12-07-2026'
---

La [Web Interface](../../web-interface) de QLC+ está gestionada por una
pequeña **API** que se puede utilizar desde páginas web o scripts propios
para leer el estado de QLC+ y controlarlo de forma remota. Esta página
documenta la API utilizada por el acceso web de la versión 5 (QML).

La API consta de dos partes:

* algunos **endpoints HTTP** que sirven páginas y datos, y
* un canal **WebSocket** que transporta comandos y actualizaciones en tiempo
  real.

La mayor parte del control se realiza a través del WebSocket.

## Conexión

Primero, habilitar la interfaz web iniciando QLC+ con `-w` (ver la página
[Web Interface](../../web-interface)). Luego abrir un WebSocket hacia:

```
ws://[IP address]:9999/qlcplusWS
```

Los mensajes son texto plano. Un mensaje es una lista de **campos separados
por el carácter pipe `|`**; el primer campo es el nombre del comando. Las
respuestas de QLC+ llegan por el mismo socket en el mismo formato separado
por pipes. QLC+ también **envía** mensajes no solicitados cuando algo cambia
(una función se inicia, un fader se mueve, una cue avanza), por lo que un
cliente debería simplemente escuchar y reaccionar.

> **Nota sobre los ID:** las funciones y los widgets se referencian mediante
> su **ID** numérico. Los universos y canales en la API están **basados en
> 1** (Universo 1, canal 1 …).

## Endpoints HTTP

| Operación | Endpoint | Propósito |
|----|------|---------|
| GET | / | La página web de la Virtual Console. |
| GET | /vc.json | El diseño actual de la Virtual Console y el estado de los widgets como JSON. |
| GET | /simpleDesk | La página web del Simple Desk. |
| GET | /config | La página de configuración. |
| GET | /system | La página de sistema (red/hotspot/autostart, donde esté disponible). |
| POST | /loadProject | Carga y abre un archivo de proyecto (`.qxw`). |
| POST | /loadFixture | Carga y abre una definición de fixture personalizada. |

## API WebSocket — consultas QLC+API

Los comandos de consulta y control se envían como
`QLC+API|<command>|<args…>`. QLC+ responde con
`QLC+API|<command>|<result…>`.

| Comando | Descripción |
|---------|-------------|
| `QLC+API|isProjectLoaded` | Responde `true` / `false`. |
| `QLC+API|getFunctionsNumber` | El número de funciones en el proyecto. |
| `QLC+API|getFunctionsList` | Una lista plana de pares `id|name|` para cada función. |
| `QLC+API|getFunctionType|<fID>` | El tipo de la función como cadena de texto (Scene, Chaser, …). |
| `QLC+API|getFunctionStatus|<fID>` | `Running` o `Stopped`. |
| `QLC+API|setFunctionStatus|<fID>|<status>` | Inicia (`1`) o detiene (`0`) la función. |
| `QLC+API|getWidgetsNumber` | El número de widgets de la Virtual Console. |
| `QLC+API|getWidgetsList` | Una lista plana de pares `id|caption|` para cada widget. |
| `QLC+API|getWidgetType|<wID>` | El tipo del widget como cadena de texto (Button, Slider, …). |
| `QLC+API|getWidgetFunction|<wID>` | La función asociada al widget (id, tipo, nombre). |
| `QLC+API|getWidgetStatus|<wID>` | El valor/estado actual del widget (ver más abajo). |
| `QLC+API|getChannelsValues|<universe>|<startAddress>|[count]` | Los valores DMX de `count` canales a partir de `startAddress` en `universe`. |
| `QLC+API|sdResetChannel|<channel>` | Restablece un canal del Simple Desk; responde con los valores de canal actualizados. |
| `QLC+API|sdResetUniverse|<universe>` | Restablece un universo completo; responde con los valores de canal actualizados. |

`getWidgetStatus` devuelve un valor que depende del tipo de widget — por
ejemplo, un botón responde `255` (activo), `127` (en monitorización) o `0`
(inactivo); un slider responde con su valor numérico; una cue list responde
`PLAY|<index>` o `STOP`; una animación responde con su nivel de fader.

## API WebSocket — control de widgets

Para accionar un widget, enviar su **ID numérico** como primer campo,
seguido del valor o de un subcomando. La forma exacta depende del tipo de
widget.

### Widgets simples

| Mensaje | Efecto |
|---------|--------|
| `<wID>|<value>` | **Button**: pulsación (valor `> 0`) o liberación. **Slider**: establece su valor. |
| `<wID>|SLIDER_OVERRIDE|<0/1>` | Slider: habilita/deshabilita el modo override. |
| `<wID>|CNG_PRESET|<value>` | Slider: aplica un valor preset de Click & Go. |
| `<wID>|CNG_COLORS|<primary>|<secondary>` | Slider: establece los colores Click & Go (por ejemplo, `#ff0000`). |

### Cue List

| Mensaje | Efecto |
|---------|--------|
| `<wID>|PLAY` | Reproducir. |
| `<wID>|STOP` | Detener. |
| `<wID>|PREV` | Cue anterior. |
| `<wID>|NEXT` | Cue siguiente (GO). |
| `<wID>|STEP|<index>` | Salta a un paso específico. |
| `<wID>|CUE_SIDECHANGE|<level>` | Mueve el fader lateral. |

### Frame / Solo Frame

| Mensaje | Efecto |
|---------|--------|
| `<wID>|NEXT_PG` / `<wID>|PREV_PG` | Página siguiente / anterior. |
| `<wID>|PAGE|<n>` | Va a la página *n*. |
| `<wID>|FRAME_DISABLE|<0/1>` | Habilita/deshabilita el frame. |
| `<wID>|COLLAPSE|<0/1>` | Contrae/expande el frame. |

### Animation (RGB Matrix)

| Mensaje | Efecto |
|---------|--------|
| `<wID>|MATRIX_SLIDER|<value>` | Establece el fader de intensidad. |
| `<wID>|MATRIX_COLOR_1..5|<color>` | Establece los colores 1–5 (por ejemplo, `#00ff00`). |
| `<wID>|MATRIX_COMBO|<index>` | Selecciona el algoritmo/preset. |

### XY Pad

| Mensaje | Efecto |
|---------|--------|
| `<wID>|XYPAD|<x>|<y>` | Establece la posición del pad. |
| `<wID>|XYPAD_RANGE_H|<min>|<max>` | Establece el rango horizontal. |
| `<wID>|XYPAD_RANGE_V|<min>|<max>` | Establece el rango vertical. |
| `<wID>|XYPAD_PRESET|<presetID>` | Aplica un preset. |

### Speed Dial

| Mensaje | Efecto |
|---------|--------|
| `<wID>|SPEED_UP` / `<wID>|SPEED_DOWN` | Ajusta el tiempo hacia arriba/abajo. |
| `<wID>|SPEED_TIME|<ms>` | Establece el tiempo directamente. |
| `<wID>|SPEED_FACTOR|<factor>` | Establece el factor multiplicador. |
| `<wID>|SPEED_APPLY` | Aplica. |

### Audio Triggers

| Mensaje | Efecto |
|---------|--------|
| `<wID>|<0/1>` | Habilita/deshabilita la captura. |
| `<wID>|AUDIO_VOLUME|<0-100>` | Establece el volumen de entrada. |

### Clock

| Mensaje | Efecto |
|---------|--------|
| `<wID>|CLOCK_PLAY|<0/1>` | Inicia/detiene (para cronómetro/cuenta atrás). |
| `<wID>|CLOCK_RESET` | Restablece. |

## API WebSocket — Simple Desk y globales

| Mensaje | Efecto |
|---------|--------|
| `CH|<absoluteAddress>|<value>` | Establece un canal DMX absoluto (las direcciones son continuas entre universos) a un valor 0–255. |
| `VC_PAGE|<n>` | Cambia la Virtual Console a la página *n*. |
| `GM_VALUE|<value>` | Establece el Grand Master. QLC+ también envía `GM_VALUE|<value>|<display>` cuando cambia. |
| `POLL` | Un keep-alive; QLC+ lo ignora. |

## Notas y limitaciones

* Todo el acceso está sujeto al **nivel de autenticación** del usuario
  conectado cuando QLC+ se inicia con `-wa`: el control de canales y widgets
  requiere al menos permisos de Simple Desk / Virtual Console, y los
  comandos de configuración requieren permisos de administrador.
* Esta API está en desarrollo y puede cambiar entre versiones.
