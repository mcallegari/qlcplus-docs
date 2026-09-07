---
title: 'Palette Manager'
date: '14:34 27-06-2026'
taxonomy:
    category:
        - docs
---

Le **Palette Manager** liste les **palettes** de votre projet et vous permet
de les créer, de les modifier et de les supprimer. Ouvrez-le avec le bouton
**Palettes** dans le panneau gauche de l'espace de travail
[Fixtures and Functions](/fixtures-and-functions).

Une palette est une valeur enregistrée et réutilisable d'un type particulier
— un niveau d'intensité, une couleur, une position pan/tilt, ou une position
3D — que vous pouvez appliquer aux fixtures et référencer depuis vos
fonctions. Modifier une palette la met à jour partout où elle est utilisée.

## La liste

La zone principale liste chaque palette, avec une icône pour son type et son
nom.

* **Cliquez** sur une palette pour la sélectionner ; **Ctrl+clic** pour en
  sélectionner plusieurs.
* **Faites glisser** une palette sur des fixtures ou d'autres cibles pour
  l'appliquer.
* **Double-cliquez** sur une palette pour ouvrir son outil de modification
  (voir ci-dessous).

## Filtrer par type

La barre d'outils en haut comporte un bouton bascule par type de palette.
Chacun affiche un **compteur** du nombre de palettes de ce type existantes,
et l'activer filtre la liste :

* **Intensity** — niveaux de dimmer.
* **Color** — couleurs (RGB / CMY / WAUV).
* **Position** — positions pan / tilt.
* **3D Position** — positions définies comme un point dans le plateau 3D.

Le bouton de **recherche** (loupe) ouvre une zone permettant de filtrer la
liste par nom de palette.

## Créer et modifier une palette

**Double-cliquez** sur une palette pour ouvrir l'outil correspondant
au-dessus de la liste, où vous pouvez ajuster sa valeur :

* Les palettes d'intensité ouvrent l'outil **Intensity**.
* Les palettes de couleur ouvrent l'outil **Color**.
* Les palettes de position ouvrent l'outil **Position**.
* Les palettes de zoom ouvrent l'outil **Beam**.
* Les palettes de position 3D ouvrent l'outil **3D Position**.

Ajustez la valeur dans l'outil et fermez-le pour enregistrer la modification
dans la palette.

## Supprimer des palettes

Sélectionnez une ou plusieurs palettes et cliquez sur le bouton
**－ Delete** (moins rouge). Une boîte de dialogue de confirmation liste les
palettes sur le point d'être supprimées ; confirmez pour les supprimer.
