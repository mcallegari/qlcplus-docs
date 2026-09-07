---
title: '2D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **2D View** affiche vos fixtures disposés sur un plan plat de la scène.
Chaque fixture est dessiné à sa position réelle et, lorsque les fixtures
émettent de la lumière, vous voyez leur couleur et leur faisceau depuis le
point de vue choisi. C'est la vue principale pour disposer un rig dans
l'espace et pour concevoir des looks visuellement.

Elle fait partie des quatre vues disponibles depuis la barre d'outils en haut
de l'espace de travail [Fixtures and Functions](/fixtures-and-functions).

## Se déplacer dans la vue

* **Zoom** — utilisez les boutons de zoom dans la barre d'outils, ou la
  **molette de la souris** au-dessus de la vue, pour zoomer et dézoomer.
* **Défilement** — lorsque le plan est plus grand que la fenêtre, utilisez les
  barres de défilement pour vous déplacer.
* Une **image de fond personnalisée** (voir paramètres) peut être placée
  derrière la grille, par exemple un plan du lieu.

## Sélectionner des fixtures

* **Cliquez** sur un fixture pour le sélectionner (remplaçant la sélection
  actuelle).
* **Cliquez sur une zone vide et faites glisser** pour dessiner un rectangle
  de sélection ; chaque fixture à l'intérieur est sélectionné. Le rectangle
  fonctionne dans n'importe quelle direction de glissement.
* Maintenez **Ctrl** enfoncé en cliquant ou en faisant un rubber-band pour
  ajouter à la sélection actuelle.
* **Cliquez sur une zone vide** sans glisser pour effacer la sélection.

## Déplacer des fixtures

Faites glisser un fixture sélectionné (ou un groupe de fixtures sélectionnés)
pour le repositionner sur la scène. La position est stockée en unités du
monde réel (mètres ou pieds), afin que les vues 2D et 3D restent cohérentes.

Vous pouvez également faire glisser un fixture depuis le navigateur **Add
Fixtures** (panneau gauche) directement sur le plan.

## Paramètres de la vue

Cliquez sur le bouton **paramètres** (l'icône « barres ») dans la barre
d'outils pour ouvrir le panneau de paramètres 2D à droite. Il contient :

### Environment

* **Width / Height / Depth** — la taille de l'environnement de scène, en
  mètres ou en pieds.
* **Grid units** — bascule entre **Meters** et **Feet**. Les dimensions
  existantes sont converties automatiquement lors du changement.
* **Point of view** — choisit comment la scène est vue : vue **Top**,
  **Front**, **Right side** ou **Left side**. Cela change sur quel plan les
  fixtures sont disposés.

### Custom Background

* **Set a custom background** (bouton image) — choisit un fichier image à
  afficher derrière la grille.
* Le chemin de l'image actuelle est affiché à côté.
* **Reset background** (✕) — supprime l'image de fond.

### Selected fixtures

Cette section apparaît lorsqu'un ou plusieurs fixtures sont sélectionnés :

* **Gel color** — pour les fixtures dimmer/génériques, cliquez sur l'échantillon
  de couleur pour choisir une couleur de gélatine appliquée au faisceau du
  fixture.
* **Fixed zoom** — définit un angle de faisceau fixe (en degrés) pour les
  fixtures qui n'ont pas de canal zoom.
* **Rotation** — fait pivoter les fixtures sélectionnés sur le point de vue
  actuel.
* **Alignment** — aligne les fixtures sélectionnés à **gauche** ou en **haut**.
* **Distribution** — distribue les fixtures sélectionnés de manière
  **égale** dans le sens horizontal ou vertical (utile pour uniformiser
  l'espacement le long d'une rangée ou d'une colonne).
