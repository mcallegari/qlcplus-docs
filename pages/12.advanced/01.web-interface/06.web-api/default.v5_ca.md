---
title: 'Web API'
date: '03:38 12-07-2026'
---

La [Interfície Web](../../web-interface) de QLC+ funciona amb una petita **API** que
podeu utilitzar des de les vostres pròpies pàgines web o scripts per llegir l'estat de
QLC+ i controlar-lo remotament. Aquesta pàgina documenta l'API utilitzada per l'accés
web de la versió 5 (QML).

L'API té dues parts:

* uns quants **endpoints HTTP** que serveixen pàgines i dades, i
* un canal **WebSocket** que transporta ordres i actualitzacions en directe.

La majoria del control es fa a través del WebSocket.

## Connexió

Primer habiliteu la interfície web iniciant QLC+ amb `-w` (vegeu la pàgina
[Interfície Web](../../web-interface)). Després obriu un WebSocket a:

```
ws://[IP address]:9999/qlcplusWS
```

Els missatges són text pla. Un missatge és una llista de **camps separats pel
caràcter de barra vertical `|`**; el primer camp és el nom de l'ordre. Les respostes
de QLC+ arriben pel mateix socket en el mateix format separat per barres verticals.
QLC+ també **envia** missatges no sol·licitats quan alguna cosa canvia (una funció
s'inicia, un fader es mou, una cue avança), de manera que un client simplement ha
d'escoltar i reaccionar.

> **Nota sobre els IDs:** les funcions i els ginys es referencien pel seu **ID**
> numèric. Els universos i canals a l'API són **basats en 1** (Univers 1, canal 1 …).

## Endpoints HTTP

| Operació | Endpoint | Propòsit |
|----|------|---------|
| GET | / | La pàgina web de la Consola Virtual. |
| GET | /vc.json | La disposició actual de la Consola Virtual i l'estat dels ginys en format JSON. |
| GET | /simpleDesk | La pàgina web de la Taula Simple. |
| GET | /config | La pàgina de configuració. |
| GET | /system | La pàgina del sistema (xarxa/punt d'accés/inici automàtic, on estigui suportat). |
| POST | /loadProject | Carrega i puja un fitxer de projecte (`.qxw`). |
| POST | /loadFixture | Carrega i puja una definició de fixture personalitzada. |

## API WebSocket — consultes QLC+API

Les ordres de consulta i control s'envien com `QLC+API|<command>|<args…>`. QLC+
respon amb `QLC+API|<command>|<result…>`.

| Ordre | Descripció |
|---------|-------------|
| `QLC+API|isProjectLoaded` | Respon `true` / `false`. |
| `QLC+API|getFunctionsNumber` | El nombre de funcions del projecte. |
| `QLC+API|getFunctionsList` | Una llista plana de parells `id|name|` per a cada funció. |
| `QLC+API|getFunctionType|<fID>` | El tipus de la funció com a cadena (Scene, Chaser, …). |
| `QLC+API|getFunctionStatus|<fID>` | `Running` o `Stopped`. |
| `QLC+API|setFunctionStatus|<fID>|<status>` | Inicia (`1`) o atura (`0`) la funció. |
| `QLC+API|getWidgetsNumber` | El nombre de ginys de la Consola Virtual. |
| `QLC+API|getWidgetsList` | Una llista plana de parells `id|caption|` per a cada giny. |
| `QLC+API|getWidgetType|<wID>` | El tipus del giny com a cadena (Button, Slider, …). |
| `QLC+API|getWidgetFunction|<wID>` | La funció associada al giny (id, tipus, nom). |
| `QLC+API|getWidgetStatus|<wID>` | El valor/estat actual del giny (vegeu a continuació). |
| `QLC+API|getChannelsValues|<universe>|<startAddress>|[count]` | Els valors DMX de `count` canals des de `startAddress` a `universe`. |
| `QLC+API|sdResetChannel|<channel>` | Reinicia un canal de la Taula Simple; respon amb els valors de canal actualitzats. |
| `QLC+API|sdResetUniverse|<universe>` | Reinicia un univers sencer; respon amb els valors de canal actualitzats. |

`getWidgetStatus` retorna un valor que depèn del tipus de giny — per exemple un
botó respon `255` (actiu), `127` (monitoratge) o `0` (inactiu); un control lliscant
respon el seu valor numèric; una llista de cues respon `PLAY|<index>` o `STOP`; una
animació respon el seu nivell de fader.

## API WebSocket — controlar ginys

Per operar un giny, envieu el seu **ID numèric** com a primer camp, seguit del
valor o d'una subordre. La forma exacta depèn del tipus de giny.

### Ginys simples

| Missatge | Efecte |
|---------|--------|
| `<wID>|<value>` | **Botó**: prem (valor `> 0`) o allibera. **Control lliscant**: estableix el seu valor. |
| `<wID>|SLIDER_OVERRIDE|<0/1>` | Control lliscant: habilita/deshabilita el mode de sobreescriptura. |
| `<wID>|CNG_PRESET|<value>` | Control lliscant: aplica un valor predefinit de Click & Go. |
| `<wID>|CNG_COLORS|<primary>|<secondary>` | Control lliscant: estableix els colors de Click & Go (p. ex. `#ff0000`). |

### Llista de Cues

| Missatge | Efecte |
|---------|--------|
| `<wID>|PLAY` | Reprodueix. |
| `<wID>|STOP` | Atura. |
| `<wID>|PREV` | Cue anterior. |
| `<wID>|NEXT` | Cue següent (GO). |
| `<wID>|STEP|<index>` | Salta a un pas específic. |
| `<wID>|CUE_SIDECHANGE|<level>` | Mou el fader lateral. |

### Marc / Marc Solo

| Missatge | Efecte |
|---------|--------|
| `<wID>|NEXT_PG` / `<wID>|PREV_PG` | Pàgina següent / anterior. |
| `<wID>|PAGE|<n>` | Ves a la pàgina *n*. |
| `<wID>|FRAME_DISABLE|<0/1>` | Habilita/deshabilita el marc. |
| `<wID>|COLLAPSE|<0/1>` | Col·lapsa/expandeix el marc. |

### Animació (Matriu RGB)

| Missatge | Efecte |
|---------|--------|
| `<wID>|MATRIX_SLIDER|<value>` | Estableix el fader d'intensitat. |
| `<wID>|MATRIX_COLOR_1..5|<color>` | Estableix els colors 1–5 (p. ex. `#00ff00`). |
| `<wID>|MATRIX_COMBO|<index>` | Selecciona l'algorisme/predefinit. |

### Pad XY

| Missatge | Efecte |
|---------|--------|
| `<wID>|XYPAD|<x>|<y>` | Estableix la posició del pad. |
| `<wID>|XYPAD_RANGE_H|<min>|<max>` | Estableix el rang horitzontal. |
| `<wID>|XYPAD_RANGE_V|<min>|<max>` | Estableix el rang vertical. |
| `<wID>|XYPAD_PRESET|<presetID>` | Aplica un predefinit. |

### Selector de Velocitat

| Missatge | Efecte |
|---------|--------|
| `<wID>|SPEED_UP` / `<wID>|SPEED_DOWN` | Ajusta el temps amunt/avall. |
| `<wID>|SPEED_TIME|<ms>` | Estableix el temps directament. |
| `<wID>|SPEED_FACTOR|<factor>` | Estableix el factor multiplicador. |
| `<wID>|SPEED_APPLY` | Aplica. |

### Activadors d'Àudio

| Missatge | Efecte |
|---------|--------|
| `<wID>|<0/1>` | Habilita/deshabilita la captura. |
| `<wID>|AUDIO_VOLUME|<0-100>` | Estableix el volum d'entrada. |

### Rellotge

| Missatge | Efecte |
|---------|--------|
| `<wID>|CLOCK_PLAY|<0/1>` | Inicia/atura (per a cronòmetre/compte enrere). |
| `<wID>|CLOCK_RESET` | Reinicia. |

## API WebSocket — Taula Simple i global

| Missatge | Efecte |
|---------|--------|
| `CH|<absoluteAddress>|<value>` | Estableix un canal DMX absolut (les adreces s'executen contínuament entre universos) a un valor 0–255. |
| `VC_PAGE|<n>` | Canvia la Consola Virtual a la pàgina *n*. |
| `GM_VALUE|<value>` | Estableix el Grand Master. QLC+ també envia `GM_VALUE|<value>|<display>` quan canvia. |
| `POLL` | Un keep-alive; QLC+ l'ignora. |

## Notes i limitacions

* Tot l'accés està subjecte al **nivell d'autenticació** de l'usuari connectat
  quan QLC+ s'inicia amb `-wa`: el control de canals i ginys requereix com a mínim
  drets de Taula Simple / Consola Virtual, i les ordres de configuració requereixen
  drets d'administrador.
* Aquesta API és un treball en curs i pot canviar entre versions.
