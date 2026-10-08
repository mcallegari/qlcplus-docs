---
title: 'Slider Matrix'
date: '03:07 22-08-2023'
---

Une **Slider Matrix** est un moyen rapide de créer d'un seul coup tout un
**banc de sliders**, plutôt que de les ajouter un par un. Elle appartient à la
[Virtual Console](/virtual-console) et est idéale pour les configurations à
un canal par fader, les groupes de submasters, ou toute rangée de faders que
l'on souhaite disposer ensemble.

Une Slider Matrix n'est pas un type de widget distinct : elle crée un
[Frame](../frame) (ou un [Solo Frame](../solo-frame)) rempli d'une grille de
[Sliders](../slider). Une fois créée, chaque slider se configure
individuellement, et le frame qui les entoure se comporte comme n'importe
quel autre frame.

## Création

Glisser **Slider Matrix** depuis la liste des widgets sur la page. Une boîte
de dialogue **Widget matrix setup** apparaît, dans laquelle on définit :

* **Columns** — le nombre de sliders en largeur (1–99).
* **Rows** — le nombre de sliders en hauteur (1–99).
* **Width / Height** — la taille de chaque slider individuel, en pixels (les
  sliders ont par défaut une forme haute et étroite).
* **Frame type** — si les sliders vont à l'intérieur d'un frame **Normal**
  ou **Solo** :
  * **Normal** — les sliders sont indépendants (le choix habituel).
  * **Solo** — une seule fonction de slider est jouée à la fois (voir
    [Solo Frame](/virtual-console)).

Confirmer pour créer le banc.

## Après la création

* Chaque cellule est un [Slider](../slider) ordinaire — en sélectionner un en
  mode Edit pour définir son mode (Level, Submaster, etc.) et les canaux ou
  l'attribut qu'il contrôle.
* Le banc réside dans un [Frame](../frame), il est donc possible de déplacer,
  redimensionner, étiqueter et paginer tout le bloc ensemble. Ajouter un
  slider **Submaster** au frame pour placer un niveau master sur l'ensemble
  du banc.

## Astuces

* Créer une rangée de sliders **Level** pour réaliser un pupitre simple avec
  un canal par fader.
* Regrouper les sliders liés dans un même frame et ajouter un **Submaster**
  pour tous les piloter depuis un seul fader.
