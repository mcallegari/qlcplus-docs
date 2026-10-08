---
title: 'Editor de Matrius RGB'
date: '12:24 21-08-2023'
media_order: blending.png
---

Una **Matriu RGB** reprodueix patrons animats, text i imatges sobre un **grup de fixtures** disposat com una graella — panells LED, barres de píxels, una paret de PARs, etc. L'Editor de Matrius RGB s'obre al panell dret de l'espai de treball [Fixtures and Functions](/fixtures-and-functions), amb una **vista prèvia** en directe de l'animació just a sota del selector de grup.

## Configuració bàsica

| Configuració | Significat |
|---------|---------|
| **Name** | El nom de la matriu (barra superior). |
| **Fixture Group** | El grup de fixtures sobre el qual es reprodueix la matriu. La disposició del grup (files × columnes) defineix la graella de píxels — trieu un grup abans que es mostri res. |
| **Pattern** | L'algorisme d'animació a reproduir: **Text**, **Image**, o un dels patrons basats en script. La selecció decideix què apareix a la secció **Parameters**. |
| ![](/basics/sequence.svg?resize=48,48) **Desar aquesta matriu com a seqüència** | Converteix la matriu en execució en una seqüència de passos, perquè la pugueu ajustar o retallar com un chaser. |
| **Blend mode** | Com es combina la matriu amb altres sortides als mateixos fixtures. |
| **Color mode** | Quina capacitat del fixture controla la matriu. |
| **Colors** | El color (o colors) que utilitza el patró — vegeu més avall. |

### Blend mode

| Mode | Comportament |
|------|-----------|
| **Default (HTP)** | El valor més alt guanya davant d'altres funcions als mateixos canals. |
| **Mask** | La matriu actua com una màscara sobre el que ja hi ha. |
| **Additive** | El color de la matriu se suma a la sortida existent. |
| **Subtractive** | El color de la matriu es resta de la sortida existent. |

### Color mode

| Mode | Controla |
|------|--------|
| **Default (RGB)** | Els canals RGB (o CMY) dels fixtures. |
| **White** | El canal de blanc. |
| **Amber** | El canal d'ambre. |
| **UV** | El canal UV. |
| **Dimmer** | El canal d'intensitat. |
| **Shutter** | El canal d'obturador. |

### Colors

El nombre de mostres de color que es mostren depèn del patró seleccionat — cada patró declara quants colors accepta, des de cap fins a cinc. Feu clic en una mostra per obrir el selector de color; el botó <i class="fa fa-2x fa-xmark" style="color:darkred"></i> del costat dels colors 2–5 reinicia aquest color a l'estat sense definir.

## Parameters

La secció **Parameters** canvia completament segons el patró seleccionat, i queda amagada quan el patró no té res a configurar.

### Patrons de text

| Configuració | Significat |
|---------|---------|
| **Text** | El missatge a mostrar. |
| <i class="fa fa-2x fa-font" style="color:cyan"></i> **Font** | Obre un selector de tipus de lletra per a la família, la mida i l'estil. |
| **Animation** | Com es mou el text: **Letters** (una lletra alhora), desplaçament **Horizontal** o **Vertical**. |
| **Offset X** / **Y** | Desplaça el text a la graella (de −255 a 255). |

### Patrons d'imatge

| Configuració | Significat |
|---------|---------|
| **Image** | El fitxer d'imatge a mostrar. |
| <i class="fa fa-2x fa-image"></i> **Seleccionar una imatge** | Obre un selector de fitxers. |
| **Animation** | **Static**, **Horizontal**, **Vertical**, o **Animation** (reprodueix els fotogrames d'un GIF animat). |
| **Offset X** / **Y** | Desplaça la imatge a la graella (de −255 a 255). |

### Patrons de script

Els patrons basats en script construeixen els seus propis controls: l'script declara les seves propietats i QLC+ genera una etiqueta corresponent més un quadre combinat, un camp numèric, un camp decimal o un camp de text per a cadascuna. Per tant, el que veieu depèn totalment de l'script triat — per exemple, el nombre de barres, la mida d'una forma, una direcció, etc.

## Speed

Feu **doble clic** en un camp de temps, o utilitzeu el botó <i class="fa fa-2x fa-clock"></i> que hi ha al costat, per obrir l'editor de temps.

| Configuració | Significat |
|---------|---------|
| **Steps fade in** | Temps d'esvaïment d'entrada de cada pas de l'animació. |
| **Steps hold** | Quant de temps es manté cada pas — això és el que estableix el ritme de l'animació. |
| **Steps fade out** | Temps d'esvaïment de sortida de cada pas. |
| **Tempo type** | Si els temps es mesuren en **Time** o en **Beats**, sincronitzats amb el tempo global. |

## Ordre i direcció

### Run Order

| Icona | Mode | Comportament |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repeteix l'animació per sempre. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Reprodueix l'animació una vegada i s'atura. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Reprodueix cap endavant, després cap enrere, i repeteix. |

### Direction

| Icona | Mode | Comportament |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Reprodueix els passos de l'animació en ordre normal. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Reprodueix els passos de l'animació en ordre invers. |
