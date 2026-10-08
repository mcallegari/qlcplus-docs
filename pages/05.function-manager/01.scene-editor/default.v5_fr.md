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

## Contrôler les canaux depuis un contrôleur externe

Lorsque l'Éditeur de Scène est ouvert, sa barre d'outils du panneau inférieur
comporte des boutons supplémentaires permettant de piloter directement les
canaux de la scène depuis un contrôleur **MIDI**, **OSC**, **DMX** ou **HID**
(joystick) patché — pratique pour régler les valeurs à la main plutôt que de
faire glisser des sliders à l'écran.

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-sliders fa-2x"></i> **Control the channels with an external controller** | Active/désactive le contrôle externe. Lorsqu'il est activé, les faders/boutons du contrôleur sont mappés 1:1 sur les canaux de la scène, dans l'ordre où ils apparaissent dans la console, et la **Virtual Console cesse de recevoir les entrées** de ce contrôleur jusqu'à ce que vous désactiviez cette option ou fermiez l'éditeur. |
| ![](/basics/position.svg?resize=48,48) **Toggle Pan & Tilt mode** | Affiché uniquement lorsque le contrôle externe est activé. Change le mappage de sorte que les quatre premiers faders/boutons du contrôleur pilotent à la place **pan, pan fine, tilt et tilt fine** d'un seul fixture — pratique pour positionner une lyre avec de vrais faders plutôt qu'un [XY Pad](/virtual-console/xy-pad). |
| <i class="fa fa-angle-left fa-2x"></i> / <i class="fa fa-angle-right fa-2x"></i> **Shift the faders mapping backward / forward** | Fait défiler le mappage par pages lorsqu'il y a plus de choses à contrôler que le contrôleur n'a de faders. En mode normal, une page correspond à un bloc de canaux de la taille du nombre de faders du contrôleur ; en mode Pan & Tilt, une page correspond à un seul fixture. |

Le canal actuellement piloté par un contrôleur est mis en surbrillance dans
la console, afin que vous puissiez voir d'un coup d'œil ce que fait chaque
fader physique. Si l'un des univers patchés dispose d'un joystick (plugin
HID), ses axes sont détectés et rendus disponibles pour le mappage
également.

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
