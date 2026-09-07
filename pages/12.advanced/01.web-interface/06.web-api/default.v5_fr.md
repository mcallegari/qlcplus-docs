---
title: 'Web API'
date: '03:38 12-07-2026'
---

La [Web Interface](../../web-interface) de QLC+ est pilotée par une petite
**API** que vous pouvez utiliser depuis vos propres pages web ou scripts
pour lire l'état de QLC+ et le contrôler à distance. Cette page documente
l'API utilisée par l'accès web de la version 5 (QML).

L'API comporte deux parties :

* quelques **endpoints HTTP** qui servent des pages et des données, et
* un canal **WebSocket** qui transporte des commandes et des mises à jour en
  direct.

La majeure partie du contrôle se fait via le WebSocket.

## Connexion

Activez d'abord l'interface web en démarrant QLC+ avec `-w` (voir la page
[Web Interface](../../web-interface)). Ouvrez ensuite un WebSocket vers :

```
ws://[IP address]:9999/qlcplusWS
```

Les messages sont en texte brut. Un message est une liste de **champs
séparés par le caractère pipe `|`** ; le premier champ est le nom de la
commande. Les réponses de QLC+ arrivent sur le même socket dans le même
format séparé par des pipes. QLC+ **envoie** également des messages non
sollicités lorsque quelque chose change (une fonction démarre, un fader se
déplace, une cue avance), un client doit donc simplement rester à l'écoute
et réagir.

> **Remarque sur les ID :** les fonctions et les widgets sont référencés par
> leur **ID** numérique. Les univers et les canaux dans l'API sont
> **basés sur 1** (Univers 1, canal 1 …).

## Endpoints HTTP

| Opération | Endpoint | Objectif |
|----|------|---------|
| GET | / | La page web de la Virtual Console. |
| GET | /vc.json | La disposition actuelle de la Virtual Console et l'état des widgets en JSON. |
| GET | /simpleDesk | La page web du Simple Desk. |
| GET | /config | La page de configuration. |
| GET | /system | La page système (réseau/point d'accès/autostart, si prise en charge). |
| POST | /loadProject | Téléverse et charge un fichier de projet (`.qxw`). |
| POST | /loadFixture | Téléverse et charge une définition de fixture personnalisée. |

## API WebSocket — requêtes QLC+API

Les commandes de requête et de contrôle sont envoyées sous la forme
`QLC+API|<command>|<args…>`. QLC+ répond avec
`QLC+API|<command>|<result…>`.

| Commande | Description |
|---------|-------------|
| `QLC+API|isProjectLoaded` | Répond `true` / `false`. |
| `QLC+API|getFunctionsNumber` | Le nombre de fonctions dans le projet. |
| `QLC+API|getFunctionsList` | Une liste plate de paires `id|name|` pour chaque fonction. |
| `QLC+API|getFunctionType|<fID>` | Le type de la fonction sous forme de chaîne (Scene, Chaser, …). |
| `QLC+API|getFunctionStatus|<fID>` | `Running` ou `Stopped`. |
| `QLC+API|setFunctionStatus|<fID>|<status>` | Démarre (`1`) ou arrête (`0`) la fonction. |
| `QLC+API|getWidgetsNumber` | Le nombre de widgets de la Virtual Console. |
| `QLC+API|getWidgetsList` | Une liste plate de paires `id|caption|` pour chaque widget. |
| `QLC+API|getWidgetType|<wID>` | Le type du widget sous forme de chaîne (Button, Slider, …). |
| `QLC+API|getWidgetFunction|<wID>` | La fonction attachée au widget (id, type, nom). |
| `QLC+API|getWidgetStatus|<wID>` | La valeur/l'état actuel du widget (voir ci-dessous). |
| `QLC+API|getChannelsValues|<universe>|<startAddress>|[count]` | Les valeurs DMX de `count` canaux à partir de `startAddress` dans `universe`. |
| `QLC+API|sdResetChannel|<channel>` | Réinitialise un canal du Simple Desk ; répond avec les valeurs de canal actualisées. |
| `QLC+API|sdResetUniverse|<universe>` | Réinitialise tout un univers ; répond avec les valeurs de canal actualisées. |

`getWidgetStatus` retourne une valeur qui dépend du type de widget — par
exemple un bouton répond `255` (actif), `127` (en surveillance) ou `0`
(inactif) ; un slider répond avec sa valeur numérique ; une cue list répond
`PLAY|<index>` ou `STOP` ; une animation répond avec son niveau de fader.

## API WebSocket — contrôler les widgets

Pour actionner un widget, envoyez son **ID numérique** comme premier champ,
suivi de la valeur ou d'une sous-commande. La forme exacte dépend du type de
widget.

### Widgets simples

| Message | Effet |
|---------|--------|
| `<wID>|<value>` | **Button** : pression (valeur `> 0`) ou relâchement. **Slider** : définit sa valeur. |
| `<wID>|SLIDER_OVERRIDE|<0/1>` | Slider : active/désactive le mode override. |
| `<wID>|CNG_PRESET|<value>` | Slider : applique une valeur de preset Click & Go. |
| `<wID>|CNG_COLORS|<primary>|<secondary>` | Slider : définit les couleurs Click & Go (par ex. `#ff0000`). |

### Cue List

| Message | Effet |
|---------|--------|
| `<wID>|PLAY` | Lecture. |
| `<wID>|STOP` | Arrêt. |
| `<wID>|PREV` | Cue précédente. |
| `<wID>|NEXT` | Cue suivante (GO). |
| `<wID>|STEP|<index>` | Saute vers un step spécifique. |
| `<wID>|CUE_SIDECHANGE|<level>` | Déplace le fader latéral. |

### Frame / Solo Frame

| Message | Effet |
|---------|--------|
| `<wID>|NEXT_PG` / `<wID>|PREV_PG` | Page suivante / précédente. |
| `<wID>|PAGE|<n>` | Va à la page *n*. |
| `<wID>|FRAME_DISABLE|<0/1>` | Active/désactive le frame. |
| `<wID>|COLLAPSE|<0/1>` | Replie/déplie le frame. |

### Animation (RGB Matrix)

| Message | Effet |
|---------|--------|
| `<wID>|MATRIX_SLIDER|<value>` | Définit le fader d'intensité. |
| `<wID>|MATRIX_COLOR_1..5|<color>` | Définit les couleurs 1–5 (par ex. `#00ff00`). |
| `<wID>|MATRIX_COMBO|<index>` | Sélectionne l'algorithme/preset. |

### XY Pad

| Message | Effet |
|---------|--------|
| `<wID>|XYPAD|<x>|<y>` | Définit la position du pad. |
| `<wID>|XYPAD_RANGE_H|<min>|<max>` | Définit la plage horizontale. |
| `<wID>|XYPAD_RANGE_V|<min>|<max>` | Définit la plage verticale. |
| `<wID>|XYPAD_PRESET|<presetID>` | Applique un preset. |

### Speed Dial

| Message | Effet |
|---------|--------|
| `<wID>|SPEED_UP` / `<wID>|SPEED_DOWN` | Ajuste le temps vers le haut/bas. |
| `<wID>|SPEED_TIME|<ms>` | Définit le temps directement. |
| `<wID>|SPEED_FACTOR|<factor>` | Définit le facteur multiplicateur. |
| `<wID>|SPEED_APPLY` | Applique. |

### Audio Triggers

| Message | Effet |
|---------|--------|
| `<wID>|<0/1>` | Active/désactive la capture. |
| `<wID>|AUDIO_VOLUME|<0-100>` | Définit le volume d'entrée. |

### Clock

| Message | Effet |
|---------|--------|
| `<wID>|CLOCK_PLAY|<0/1>` | Démarre/arrête (pour chronomètre/compte à rebours). |
| `<wID>|CLOCK_RESET` | Réinitialise. |

## API WebSocket — Simple Desk et global

| Message | Effet |
|---------|--------|
| `CH|<absoluteAddress>|<value>` | Définit un canal DMX absolu (les adresses sont continues entre les univers) sur une valeur 0–255. |
| `VC_PAGE|<n>` | Fait basculer la Virtual Console vers la page *n*. |
| `GM_VALUE|<value>` | Définit le Grand Master. QLC+ envoie aussi `GM_VALUE|<value>|<display>` lorsqu'il change. |
| `POLL` | Un keep-alive ; QLC+ l'ignore. |

## Remarques et limitations

* Tous les accès sont soumis au **niveau d'authentification** de
  l'utilisateur connecté lorsque QLC+ est démarré avec `-wa` : le contrôle
  des canaux et des widgets nécessite au moins les droits Simple Desk /
  Virtual Console, et les commandes de configuration nécessitent des droits
  d'administrateur.
* Cette API est en cours de développement et peut changer d'une version à
  l'autre.
