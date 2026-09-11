---
title: 'Editor EFX'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

Un **EFX** (efecte) mou els fixtures al llarg d'una trajectòria matemàtica — cercles, vuits, línies i altres formes — de manera automàtica. És la manera més ràpida de crear efectes de moviment pan/tilt (i també efectes de dimmer o RGB) en molts fixtures alhora. L'Editor EFX s'obre al panell dret de l'espai de treball [Fixtures and Functions](/fixtures-and-functions).

## Vista prèvia

Una gran **vista prèvia** a la part superior mostra la trajectòria i la posició de cada fixture en temps real mentre canvieu la configuració.

| Acció | Resultat |
|--------|--------|
| **Clic** a la vista prèvia | Alterna entre la vista plana (2D) i la vista esfèrica. |
| **Arrossegar** a la vista esfèrica | Gira l'esfera horitzontalment, perquè pugueu mirar la trajectòria des d'un altre angle. |

## Fixtures

La secció **Fixtures** llista els fixtures (o capçals) que participen en l'efecte.

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-2x fa-arrow-down-wide-short"></i> **Definir un offset a tots els fixtures** | Obre una finestra emergent per repartir els fixtures al voltant de la trajectòria d'una sola vegada (vegeu més avall). |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegir un fixture/capçal** | Obre el Gestor de Grups de Fixtures en un panell lateral. Arrossegueu universos, grups, fixtures o capçals individuals a l'àrea de deixar anar de sota la llista. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Eliminar el(s) capçal(s) de fixture seleccionat(s)** | Elimina els capçals seleccionats de l'efecte (demana confirmació). |

### Finestra emergent d'offset

| Configuració | Significat |
|---------|---------|
| **Offset** | El valor de l'offset en graus (0–360). |
| **Increasing** | Dona a cada fixture un offset progressivament més gran, de manera que persegueixen al voltant de la forma en lloc de moure's junts. |
| **Randomize** | Dona a cada fixture un offset aleatori. |

**Increasing** i **Randomize** són mútuament excloents. Si no en marqueu cap, s'aplica el mateix offset a tots els fixtures.

### La llista de fixtures

| Columna | Significat |
|--------|---------|
| **#** | L'índex del capçal a l'efecte — és l'ordre que utilitzen els ordres de fixture **Serial** i **Asymmetric**. |
| **Fixture** | El nom del fixture o del capçal. |
| **Mode** | Què controla l'efecte per a aquest capçal: **Position** (pan/tilt), **Dimmer**, o **RGB**. |
| **Reverse** | Fa que aquest capçal recorri la trajectòria en direcció oposada. |
| **Start offset** | On de la trajectòria comença aquest capçal, en graus (0–359). |

Feu clic en una fila per seleccionar-la; **Ctrl+clic** o **Shift+clic** per seleccionar-ne diverses abans d'eliminar-les.

## Pattern

La secció **Pattern** defineix la forma i com se situa a l'espai.

| Configuració | Significat |
|---------|---------|
| **Pattern** | La forma base: **Circle**, **Eight**, **Line**, **Line2**, **Diamond**, **Square**, **SquareChoppy**, **SquareTrue**, **Leaf** o **Lissajous**. |
| **Relative movement** | Executa l'efecte en relació amb la posició actual de cada fixture en lloc de fer-ho des d'un centre absolut. Amaga els camps d'offset X/Y. |
| **Width** | Mida horitzontal de la forma (0–127). |
| **Height** | Mida vertical de la forma (0–127). |
| **X offset** | Desplaça el centre de la forma horitzontalment (0–255). Només en mode absolut. |
| **Y offset** | Desplaça el centre de la forma verticalment (0–255). Només en mode absolut. |
| **Rotation** | Gira tota la forma (0–359°). |
| **Start offset** | Desplaça el punt de la forma on comença la trajectòria (0–360°). |
| **Enable dimmer control** | Permet que l'EFX també controli la intensitat dels fixtures. Desactivat per defecte, cas en què l'EFX només anima el pan/tilt. |

### Paràmetres Lissajous

Aquests quatre camps només apareixen quan seleccioneu el pattern **Lissajous**; defineixen les matemàtiques que produeixen les figures més complexes.

| Configuració | Significat |
|---------|---------|
| **X frequency** | Nombre d'oscil·lacions horitzontals per cicle (0–32). |
| **Y frequency** | Nombre d'oscil·lacions verticals per cicle (0–32). |
| **X phase** | Desfasament horitzontal (0–360°). |
| **Y phase** | Desfasament vertical (0–360°). |

Canviar la relació entre la freqüència X i la Y és el que transforma la figura d'un simple cercle en els clàssics nusos de Lissajous.

## Speed

La secció **Speed** estableix la temporització de l'efecte. Feu **doble clic** en un camp de temps, o utilitzeu el botó <i class="fa fa-2x fa-clock"></i> que hi ha al costat, per obrir l'editor de temps.

| Configuració | Significat |
|---------|---------|
| **Fade in** | Temps per esvair l'efecte en entrar quan s'inicia. |
| **Loop** | La durada d'un cicle complet al voltant de la trajectòria. |
| **Fade out** | Temps per esvair-se en sortir quan s'atura. |

## Ordre i direcció

### Run Order

| Icona | Mode | Comportament |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repeteix la trajectòria per sempre. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Executa un cicle complet i s'atura. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Recorre la trajectòria cap endavant, després cap enrere, i repeteix. |

### Direction

| Icona | Mode | Comportament |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Recorre la trajectòria en la direcció normal. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Recorre la trajectòria en direcció oposada. |

### Fixture Order

| Icona | Mode | Comportament |
|------|------|-----------|
| **P** | **Parallel** | Tots els fixtures recorren la trajectòria junts (el seu **Start offset** continua repartint-los). |
| **S** | **Serial** | Els fixtures es reparteixen uniformement al voltant de la trajectòria, un darrere l'altre, en l'ordre de la llista. |
| **A** | **Asymmetric** | Els fixtures es reparteixen com a Serial, però cada fixture alternatiu s'executa en direcció oposada. |
