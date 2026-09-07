---
title: '3D View'
date: '14:01 27-06-2026'
taxonomy:
    category: docs
---

La **3D View** effectue le rendu de votre scène en trois dimensions, avec
fixtures, faisceaux, couleurs et fumée atmosphérique. C'est l'aperçu le plus
réaliste de votre show et elle est utile pour visualiser les angles de
faisceaux, les positions et les looks tels que les verrait le public.

Elle fait partie des quatre vues disponibles depuis la barre d'outils en haut
de l'espace de travail [Fixtures and Functions](/fixtures-and-functions).

> **Remarque :** La 3D View nécessite un système capable d'effectuer le rendu
> graphique nécessaire. Sur les systèmes qui ne le prennent pas en charge, un
> avis s'affiche à la place de la scène 3D.

## Se déplacer dans la vue

* **Zoom** — utilisez les boutons de zoom dans la barre d'outils ou la
  molette de la souris.
* **Orbite / panoramique** — faites glisser dans la scène pour regarder
  autour de la scène.

## Sélectionner et positionner les fixtures

* **Cliquez** sur un fixture pour le sélectionner ; **Ctrl+clic** pour
  l'ajouter à la sélection.
* Les fixtures sélectionnés peuvent être positionnés et pivotés avec
  précision depuis le panneau de paramètres (ci-dessous), ou orientés vers un
  point dans l'espace avec l'outil **Pick a 3D point** dans le panneau gauche
  (raccourci **Ctrl+P**) — cliquez dans la scène et les fixtures sélectionnés
  pointeront vers cet endroit.

## Paramètres de la vue

Cliquez sur le bouton **paramètres** (l'icône « barres ») dans la barre
d'outils pour ouvrir le panneau de paramètres 3D. Ses sections peuvent être
développées et réduites.

### Environment

* **Type** — le preset de scène à rendre (par ex. scène simple, boîte,
  théâtre).
* **Width / Height / Depth** — la taille de l'environnement de scène, en
  mètres ou en pieds (l'unité suit le réglage de la vue 2D).

### Rendering

* **Quality** — qualité du rendu : **Low**, **Medium**, **High** ou **Ultra**.
  Des réglages plus élevés donnent un meilleur rendu mais sollicitent
  davantage votre matériel graphique.
* **Ambient light** — luminosité globale de la scène lorsqu'aucun fixture
  n'est allumé (0–100%).
* **Smoke amount** — la quantité de brume atmosphérique dans l'air (0–100%),
  ce qui rend les faisceaux plus visibles.
* **Show FPS** — affiche un compteur de fréquence d'images, utile pour juger
  des performances.

### Position / Rotation

Ces sections apparaissent lorsque quelque chose est sélectionné et
permettent de saisir des valeurs **X / Y / Z** exactes :

* **Position** — l'emplacement des éléments sélectionnés, en millimètres.
* **Rotation** — l'orientation des éléments sélectionnés, en degrés.

Lorsque plusieurs éléments sont sélectionnés, les modifications sont
appliquées relativement à l'ensemble du groupe.

### Scale

Apparaît lorsqu'un **élément personnalisé** est sélectionné. Définit
l'échelle **X / Y / Z** en pourcentage. Le bouton de **verrouillage** maintient
les trois axes proportionnels, de sorte que modifier l'un d'eux redimensionne
l'élément de manière uniforme.

### Custom items

Vous pouvez ajouter vos propres maillages 3D à la scène (décor, éléments de
décoration, structures, etc.) :

* **Add** (＋) — choisit un fichier de maillage (`.obj`, `.dae`, `.3ds`,
  `.stl`, `.blend`, …) à placer dans la scène.
* **Remove** (－) — supprime les éléments personnalisés sélectionnés.
* **Normalize** (icône de compression) — ramène les éléments sélectionnés à
  une taille standard.
* La liste ci-dessous affiche tous les éléments personnalisés ; cliquez sur
  l'un d'eux pour le sélectionner (et modifier sa position, rotation et
  échelle ci-dessus).
