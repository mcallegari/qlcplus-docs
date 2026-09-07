---
title: 'Éditeur de Scène'
---

Une **Scène** est la fonction la plus élémentaire : un aspect fixe composé des
valeurs de canaux pour un ou plusieurs fixtures. L'Éditeur de Scène s'ouvre dans
le panneau droit de l'espace de travail
[Fixtures and Functions](/fixtures-and-functions) lors de la création ou de la
modification d'une scène.

Une scène est construite à partir de **composants** — les fixtures, les groupes
de fixtures et les palettes qu'elle contrôle. Les valeurs réelles des canaux pour
ces composants se règlent à l'aide des vues et des outils de canaux dans le
panneau gauche ; l'éditeur lui-même gère quels composants appartiennent à la
scène et comment celle-ci effectue son fondu.

## Barre d'outils

* **Name** — le nom de la scène (le champ de texte dans la barre supérieure).
  Modifiable librement.
* **Back** (flèche) — retourne à l'éditeur précédent ou au Gestionnaire de
  Fonctions.
* **Add a fixture/group** (icône fixture avec ＋) — ouvre le Gestionnaire de
  Groupes de Fixtures dans un panneau latéral ; glissez des fixtures ou des
  groupes depuis celui-ci vers la scène.
* **Add a palette** (icône palette avec ＋) — ouvre le Gestionnaire de Palettes
  dans un panneau latéral ; glissez des palettes vers la scène pour piloter ses
  valeurs à partir d'une palette.
* **Remove the selected items** (－) — supprime les composants sélectionnés de
  la scène, après confirmation.

## La liste des composants

La zone principale liste chaque composant (fixture, groupe ou palette) présent
dans la scène.

* **Cliquez** sur un composant pour le sélectionner ; sélectionner un fixture le
  sélectionne également dans les vues, afin de pouvoir modifier ses valeurs de
  canaux.
* **Ctrl+clic** pour en sélectionner plusieurs.
* Il est également possible de **glisser** des fixtures, des groupes ou des
  palettes directement dans la liste pour les ajouter.

## Réglage des valeurs

Pour définir l'aspect, sélectionnez les fixtures de la scène et ajustez leurs
canaux à l'aide des **outils de capacités de canaux** dans le panneau gauche
(Intensité, Couleur, Position, etc.) ou de la **Vue DMX**. Les valeurs sont
enregistrées dans la scène au fur et à mesure de leur modification.

## Vitesse

La section **Vitesse**, repliable, définit comment la scène effectue son fondu
lorsqu'elle est déclenchée :

* **Fade in** — le temps mis par la scène pour monter en fondu jusqu'à ses
  valeurs.
* **Fade out** — le temps mis pour redescendre en fondu à l'arrêt.

Double-cliquez sur un champ de temps, ou utilisez le bouton horloge situé à côté,
pour saisir une valeur dans l'éditeur de temps.

> Lorsqu'une scène fait partie d'une **Séquence**, elle est modifiée via l'onglet
> *Fixtures* de l'Éditeur de Séquence plutôt qu'individuellement. Voir
> [Sequence Editor](../sequence-editor).
