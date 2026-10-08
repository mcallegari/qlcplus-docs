---
title: 'Universe View'
date: '13:53 27-06-2026'
published: true
taxonomy:
    category: docs
---

La **Universe View** affiche un seul univers DMX sous forme de grille de ses
512 canaux. C'est la plus technique des quatre vues et elle est utile pour
vérifier exactement quels canaux occupe chaque fixture, repérer les vides ou
les chevauchements, et réadresser les fixtures.

Elle fait partie des quatre vues disponibles depuis la barre d'outils en haut
de l'espace de travail [Fixtures and Functions](/fixtures-and-functions).
Utilisez le **sélecteur d'univers** dans cette barre d'outils pour choisir
quel univers vous regardez.

## La grille

La vue est une grille de cellules, une cellule par canal DMX (adresses
1–512). Chaque fixture occupe un bloc contigu de cellules correspondant à ses
canaux, étiqueté avec le nom du fixture. L'icône affichée dans chaque cellule
indique le type de ce canal (intensité, couleur, pan, tilt, etc.).

Survolez une cellule pour voir une infobulle décrivant le fixture et le canal
à cette adresse.

Le nom de l'univers actuellement affiché apparaît en haut à gauche.

## Sélectionner des fixtures

* **Cliquez** sur les cellules d'un fixture pour le sélectionner. Sélectionner
  un fixture remplace la sélection actuelle.
* Maintenez **Ctrl** enfoncé (ou activez **Toggle multiple selection** dans le
  panneau gauche) pour ajouter des fixtures à la sélection au lieu de la
  remplacer.

## Déplacer un fixture

Faites glisser un fixture sélectionné le long de la grille pour le déplacer
vers une adresse de départ différente. Pendant le glissement, les cellules
cibles sont mises en surbrillance pour montrer où le fixture atterrira :

* Si la nouvelle position est libre, le déplacement est autorisé.
* Si la nouvelle position chevaucherait un autre fixture, le déplacement est
  refusé et le fixture reste où il était.

## Couper et coller

Deux boutons en haut à droite de la vue permettent de dupliquer ou de
déplacer des fixtures :

* **Cut** (ciseaux) — copie les fixtures actuellement sélectionnés dans le
  presse-papiers.
* **Paste** (presse-papiers) — place les fixtures du presse-papiers à la
  première position libre disponible dans l'univers. S'il n'y a pas assez
  d'espace libre, une erreur s'affiche et rien n'est collé.

## Ajouter des fixtures

Vous pouvez également faire glisser un fixture depuis le navigateur **Add
Fixtures** (panneau gauche) directement sur la grille. Pendant le glissement,
la grille met en surbrillance les canaux que le fixture occuperait et indique
si l'adresse choisie est libre. Déposez-le sur un bloc libre pour le patcher
à cet endroit.
