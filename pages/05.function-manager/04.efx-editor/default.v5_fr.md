---
title: 'Éditeur EFX'
date: '12:13 21-08-2023'
media_order: 'efx-general.png,efx-movement.png'
---

Un **EFX** (effet) déplace les fixtures le long d'un tracé mathématique —
cercles, huit, lignes et autres formes — automatiquement. C'est le moyen le plus
rapide de créer des effets de mouvement pan/tilt (ainsi que des effets de dimmer
ou RGB) sur de nombreux fixtures à la fois. L'Éditeur EFX s'ouvre dans le panneau
droit de l'espace de travail [Fixtures and Functions](/fixtures-and-functions).

## Aperçu

Un grand **aperçu** en haut montre le tracé et la position de chaque fixture en
temps réel au fur et à mesure que les réglages sont modifiés.

| Action | Résultat |
|--------|--------|
| **Clic** sur l'aperçu | Bascule entre la vue plate (2D) et la vue sphérique. |
| **Glisser** dans la vue sphérique | Fait pivoter la sphère horizontalement, afin de pouvoir observer le tracé sous un autre angle. |

## Fixtures

La section **Fixtures** liste les fixtures (ou têtes) participant à l'effet.

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-2x fa-arrow-down-wide-short"></i> **Set an offset on all fixtures** | Ouvre une fenêtre pour répartir les fixtures autour du tracé en une seule opération (voir ci-dessous). |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a fixture/head** | Ouvre le Gestionnaire de Groupes de Fixtures dans un panneau latéral. Glissez des univers, groupes, fixtures ou têtes individuelles vers la zone de dépôt sous la liste. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected fixture head(s)** | Supprime les têtes sélectionnées de l'effet (demande une confirmation). |

### Fenêtre d'offset

| Réglage | Signification |
|---------|---------|
| **Offset** | La valeur de l'offset en degrés (0–360). |
| **Increasing** | Attribue à chaque fixture un offset progressivement plus grand, de sorte qu'ils se poursuivent le long de la forme au lieu de se déplacer ensemble. |
| **Randomize** | Attribue à chaque fixture un offset aléatoire. |

**Increasing** et **Randomize** s'excluent mutuellement. Si aucun des deux n'est
coché, le même offset est appliqué à tous les fixtures.

### La liste des fixtures

| Colonne | Signification |
|--------|---------|
| **#** | L'index de la tête dans l'effet — c'est l'ordre utilisé par les ordres de fixtures **Serial** et **Asymmetric**. |
| **Fixture** | Le nom du fixture ou de la tête. |
| **Mode** | Ce que l'effet pilote pour cette tête : **Position** (pan/tilt), **Dimmer**, ou **RGB**. |
| **Reverse** | Fait parcourir à cette tête le tracé dans le sens opposé. |
| **Start offset** | L'endroit du tracé où cette tête commence, en degrés (0–359). |

Cliquez sur une ligne pour la sélectionner ; **Ctrl+clic** ou **Shift+clic** pour
en sélectionner plusieurs avant de les supprimer.

## Pattern

La section **Pattern** définit la forme et la manière dont elle se place dans
l'espace.

| Réglage | Signification |
|---------|---------|
| **Pattern** | La forme de base : **Circle**, **Eight**, **Line**, **Line2**, **Diamond**, **Square**, **SquareChoppy**, **SquareTrue**, **Leaf** ou **Lissajous**. |
| **Relative movement** | Exécute l'effet par rapport à la position actuelle de chaque fixture plutôt qu'à partir d'un centre absolu. Masque les champs d'offset X/Y. |
| **Width** | Taille horizontale de la forme (0–127). |
| **Height** | Taille verticale de la forme (0–127). |
| **X offset** | Déplace le centre de la forme horizontalement (0–255). Mode absolu uniquement. |
| **Y offset** | Déplace le centre de la forme verticalement (0–255). Mode absolu uniquement. |
| **Rotation** | Fait pivoter la forme entière (0–359°). |
| **Start offset** | Décale l'endroit de la forme où commence le tracé (0–360°). |
| **Enable dimmer control** | Permet à l'EFX de piloter également l'intensité des fixtures. Désactivé par défaut, auquel cas l'EFX n'anime que le pan/tilt. |

### Paramètres Lissajous

Ces quatre champs n'apparaissent que lorsque le pattern **Lissajous** est
sélectionné ; ils définissent les mathématiques qui produisent les figures les
plus complexes.

| Réglage | Signification |
|---------|---------|
| **X frequency** | Nombre d'oscillations horizontales par cycle (0–32). |
| **Y frequency** | Nombre d'oscillations verticales par cycle (0–32). |
| **X phase** | Déphasage horizontal (0–360°). |
| **Y phase** | Déphasage vertical (0–360°). |

Modifier le rapport entre les fréquences X et Y est ce qui transforme la figure
d'un simple cercle en nœuds de Lissajous classiques.

## Vitesse

La section **Vitesse** définit la temporisation de l'effet. **Double-cliquez**
sur un champ de temps, ou utilisez le bouton <i class="fa fa-2x fa-clock"></i>
situé à côté, pour ouvrir l'éditeur de temps.

| Réglage | Signification |
|---------|---------|
| **Fade in** | Temps de fondu d'entrée de l'effet à son démarrage. |
| **Loop** | La durée d'un cycle complet le long du tracé. |
| **Fade out** | Temps de fondu de sortie à l'arrêt. |

## Ordre et direction

### Ordre d'exécution

| Icône | Mode | Comportement |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Répète le tracé indéfiniment. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Exécute un cycle complet, puis s'arrête. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Exécute le tracé en avant, puis en arrière, et recommence. |

### Direction

| Icône | Mode | Comportement |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Parcourt le tracé dans le sens normal. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Parcourt le tracé dans le sens opposé. |

### Ordre des fixtures

| Icône | Mode | Comportement |
|------|------|-----------|
| **P** | **Parallel** | Tous les fixtures parcourent le tracé ensemble (leur **Start offset** continue toutefois de les répartir). |
| **S** | **Serial** | Les fixtures sont répartis uniformément le long du tracé, l'un après l'autre, dans l'ordre de la liste. |
| **A** | **Asymmetric** | Les fixtures sont répartis comme en Serial, mais un fixture sur deux s'exécute dans le sens opposé. |
