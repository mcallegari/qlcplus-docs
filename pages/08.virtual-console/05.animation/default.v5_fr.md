---
title: Animation
date: '03:09 22-08-2023'
---

Un widget **Animation** joue et contrôle une fonction
[RGB Matrix](/function-manager/rgb-matrix-editor), permettant de changer ses
**couleurs** et de changer son **preset de pattern** en direct. C'est le
panneau de contrôle en direct pour les effets pixel/LED dans la
[Virtual Console](/virtual-console).

Pour attacher une fonction RGB Matrix, la glisser sur le widget ou utiliser
les réglages.

## Settings

* **Attached Function** — la RGB Matrix contrôlée par ce widget. Utiliser
  **Detach the current function** pour la retirer.
* **Apply color and preset changes immediately** — si activé, les changements
  de couleur ou de preset prennent effet instantanément ; si désactivé, ils
  s'appliquent au prochain démarrage de la fonction.

### Appearance

Choisir quels contrôles le widget affiche :

* **Level Fader** — un fader pour l'intensité de la matrice.
* **Label** — l'étiquette de texte du widget.
* **Color 1–5 Buttons** — des boutons de couleur qui définissent en direct les
  couleurs de la matrice (le nombre utile dépend du pattern).
* **Preset List** — une liste pour changer à la volée le pattern/algorithme de
  la matrice.

## Presets

Le widget Animation possède un onglet **Presets** où l'on construit la liste
des presets sélectionnables :

* **Add a fixed-color preset** pour un emplacement de couleur choisi.
* **Add R/G/B knobs** pour un emplacement de couleur (mélange de couleurs en
  direct).
* **Add a script algorithm preset** (choisir l'un des algorithmes de la
  matrice).
* **Add a Text preset** en utilisant un texte saisi par l'utilisateur.
* Réordonner les presets avec **move up / move down**, ou les **remove**
  pour les supprimer.

## Astuces

* Créer une **Preset List** avec les looks préférés pour une matrice, afin
  qu'un opérateur puisse passer de l'un à l'autre en un seul geste.
* Activer **Apply changes immediately** pour un contrôle des couleurs
  improvisé et direct.
