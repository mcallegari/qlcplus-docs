---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

Un **XY Pad** est un contrôle à deux axes pour le **pan et le tilt** — faites
glisser le curseur sur le pad et les fixtures mobiles associés le suivent.
C'est le moyen naturel de positionner à la main des lyres et des scanners
depuis la [Virtual Console](/virtual-console).

L'axe horizontal du pad pilote le **pan** et l'axe vertical pilote le
**tilt**. L'ensemble de la zone représente la plage complète de mouvement
que vos fixtures peuvent atteindre : le bord gauche est le pan minimum, le
bord droit le pan maximum, le bord supérieur le tilt minimum et le bord
inférieur le tilt maximum.

## Widget elements

|     |     |
| --- | --- |
| **Range sliders** | Les sliders à deux poignées sur les côtés supérieur et gauche. Ils définissent la **range window** : la portion du pad dans laquelle le curseur est autorisé à se déplacer. |
| **Main area** | La zone sombre au centre, représentant toutes les positions X/Y possibles. |
| **Range window** | Le rectangle cyan semi-transparent dessiné par-dessus la zone principale, marquant les limites définies par les range sliders. Il est masqué lorsque les range sliders couvrent toute la plage. |
| **Cursor** | La poignée ronde mise en surbrillance. Faites-la glisser avec la souris/le tactile, avec les sliders de valeur, ou déplacez-la depuis un contrôleur externe. |
| **Fixture position dots** | Les petits points jaunes montrant où se trouve réellement chaque head de fixture contrôlé, lus depuis la sortie DMX. Ils permettent de voir les fixtures qui accusent un retard par rapport au curseur (vitesse pan/tilt, fondus) ou qui sont limités à une plage plus étroite. |
| **Value sliders** | Les sliders à poignée unique sur les côtés inférieur et droit. Ils définissent la position X et Y indépendamment, ce qui est pratique pour des ajustements précis sur un seul axe. |
| **Presets** | La rangée de boutons sous le pad, affichée uniquement lorsqu'au moins un preset a été ajouté. Un bouton de preset actif est mis en surbrillance. |

## Ajouter des fixtures

Les fixtures sont ajoutés depuis les **settings** du widget, dans la section
**Fixtures** :

* Cliquez sur le bouton <i class="fa fa-2x fa-plus" style="color:limegreen"></i>
  **Add a fixture/head** pour ouvrir le panneau latéral des fixtures, puis
  **faites glisser** des éléments sur la zone de dépôt sous la liste.
* Vous pouvez déposer un **universe**, un **fixture group**, un **fixture**
  ou un seul **head**. Les univers, groupes et fixtures sont développés en
  leurs heads individuels, et les heads déjà présents dans la liste ne sont
  pas ajoutés deux fois.
* Chaque ligne affiche le **nom** du head et ses **X-Axis Range** et
  **Y-Axis Range** actuels, dans les unités du mode Range Display Mode
  actuel. Un axe inversé est marqué par **(R)**.
* Des heads sans canal Pan ou Tilt peuvent être ajoutés, mais ils ne
  produisent tout simplement aucune sortie — le pad ne pilote que les canaux
  Pan/Tilt qu'il trouve.

Sélectionnez des lignes dans la liste (avec Ctrl/Shift pour la sélection
multiple) pour agir dessus avec les boutons
<i class="fa fa-2x fa-pencil"></i> et
<i class="fa fa-2x fa-minus" style="color:crimson"></i> de la même barre
d'outils.

## Limiter le mouvement

Il existe deux façons indépendantes d'empêcher vos fixtures de pointer là où
ils ne le devraient pas — vers le plafond, vers le public, ou hors de la
scène. Elles peuvent être utilisées ensemble.

### 1. La range window (range sliders)

Les range sliders supérieur et gauche limitent la zone dans laquelle le pad
fonctionne. Un rectangle cyan semi-transparent marque la **range window**
résultante sur la zone principale.

* Lors d'un glissement à la souris, le curseur est **bloqué** dans la
  fenêtre : il n'en sortira pas même si vous glissez à l'extérieur.
* Lors du déplacement du pad depuis un **contrôleur externe**, la valeur
  entrante est **mise à l'échelle** de la fenêtre à la place. La course
  complète d'un fader physique se mappe sur la fenêtre réduite, ce qui donne
  plus de sensibilité là où c'est important, et le feedback renvoyé au
  contrôleur est mis à l'échelle de la même manière.
* La range window est une propriété du *pad*, pas des fixtures : elle
  s'applique à tous les heads contrôlés à la fois.

### 2. Plage Pan/Tilt par fixture

Sélectionnez un ou plusieurs heads dans la liste **Fixtures** et cliquez sur
le bouton <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the
selected fixture head(s)**. Une boîte de dialogue permet de régler, à la
fois pour **Pan** et **Tilt** :

|     |     |
| --- | --- |
| **Minimum** | Début de la plage utilisable pour ce head. |
| **Maximum** | Fin de la plage utilisable pour ce head. |
| **Reverse** | Inverse la direction de cet axe pour ce head. |

L'ensemble de la zone principale est toujours utilisé, et la plage de chaque
head est **mise à l'échelle dessus**. C'est ce qui rend cohérent le
comportement d'un rig mixte : un fixture avec un pan à 540° peut être amené
à se déplacer exactement comme un fixture à 360°, de sorte que tous les
heads pointent au même endroit lorsque le curseur est au même endroit.

Par exemple, régler le minimum de Pan à 20% et le maximum à 80% signifie que
le curseur au bord gauche produit 20% (DMX 51), au bord droit 80% (DMX 204),
et tout ce qui se trouve entre les deux est mis à l'échelle
proportionnellement.

> Les valeurs de cette boîte de dialogue sont exprimées dans les unités du
> **Range Display Mode** actuel (voir ci-dessous) : degrés, pourcentage ou
> DMX. Lorsque plusieurs heads sont sélectionnés, la boîte de dialogue
> affiche la plage du premier head sélectionné, et — en mode Degrees — la
> valeur maximale autorisée est la plus petite plage parmi la sélection, de
> sorte que les valeurs saisies soient valides pour chaque head sélectionné.
> Appuyer sur OK applique la même plage à tous.

## Settings

### Display Properties

* **Inverted Y-Axis** — inverse l'axe vertical, de sorte que la valeur
  maximale de tilt soit atteinte en haut du pad au lieu du bas. Utile pour
  les fixtures montés à l'envers sur un pont.

### Range Display Mode

Sélectionne les unités utilisées pour afficher et modifier les plages
Pan/Tilt des fixtures :

* **Degrees** — les angles physiques tirés de la définition du fixture.
  Pertinent uniquement pour les fixtures dont la définition déclare une
  plage pan/tilt.
* **Percentage** — 0–100% de la course complète du fixture.
* **DMX** — valeurs DMX brutes, 0–255.

Changer le mode ne modifie pas les plages enregistrées, seulement la façon
dont elles sont affichées et saisies.

### Fixtures

La liste des heads contrôlés par le pad, avec sa barre d'outils :

|     |     |
| --- | --- |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a fixture/head** | Ouvre le panneau latéral des fixtures et la zone de dépôt pour ajouter des univers, groupes, fixtures ou heads individuels. |
| <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the selected fixture head(s)** | Ouvre la boîte de dialogue de plage Pan/Tilt pour le(s) head(s) sélectionné(s). Voir *Plage Pan/Tilt par fixture* ci-dessus. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected fixture head(s)** | Retire le(s) head(s) sélectionné(s) du pad. |

## Presets

Les presets sont affichés comme des boutons sous le pad et donnent un accès
en un tap à des positions, des effets et des sous-ensembles de fixtures. Ils
sont gérés dans l'onglet **Presets** des paramètres du widget.

|     |     |
| --- | --- |
| ![](/basics/position.svg?resize=48,48) **Position Preset** | Enregistre la position XY actuelle du curseur comme preset. Le nom par défaut correspond aux coordonnées X/Y au moment de la création. |
| ![](/basics/functions.svg?resize=48,48) **Scene/EFX Function Preset** | Ouvre le panneau latéral du Function Manager ; déposez des fonctions ![](/basics/scene.svg?resize=48,48) [Scene](/basics/glossary-and-concepts#scene) ou ![](/basics/efx.svg?resize=48,48) [EFX](/basics/glossary-and-concepts#efx) sur la zone de dépôt pour les transformer en presets. Le nom par défaut est le nom de la fonction. Les scenes sans aucun canal Pan ou Tilt sont rejetées. |
| ![](/basics/group.svg?resize=48,48) **Fixture Group Preset** | Ouvre le panneau latéral des fixtures ; déposez des univers, groupes, fixtures ou heads pour créer un preset de groupe de fixtures. Seuls les heads déjà contrôlés par le pad sont conservés. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove selected preset** | Supprime le preset sélectionné. |
| <i class="fa fa-2x fa-arrow-up"></i> / <i class="fa fa-2x fa-arrow-down"></i> **Move selected preset up / down** | Réordonne le preset sélectionné, ce qui correspond aussi à l'ordre des boutons sous le pad. |
| **Preset name** | Renomme le preset sélectionné. Le nom est ce qui apparaît sur le bouton. |

### Types de presets et comportement

Un **seul preset à la fois** peut être actif. Activer un preset désactive
automatiquement le précédent.

* ![](/basics/position.svg?resize=48,48) **Position** — cliquer sur le
  bouton déplace le curseur vers la position enregistrée. Le pad continue
  ensuite à fonctionner normalement, ce qui permet d'ajuster la position à
  la main à partir de là.
* ![](/basics/efx.svg?resize=48,48) **EFX** — démarre la fonction
  [EFX](/function-manager/efx-editor). Cliquez à nouveau sur le bouton (ou
  activez un autre preset) pour l'arrêter. Pendant que l'EFX s'exécute, les
  points de position des fixtures montrent les fixtures se déplaçant le
  long du motif.
* ![](/basics/scene.svg?resize=48,48) **Scene** — démarre la fonction
  [Scene](/function-manager/scene-editor), qui définit ses propres valeurs
  Pan/Tilt. Cliquez à nouveau pour l'arrêter.
  > Notez que c'est l'**intégralité** de la Scene qui est démarrée, couleurs,
  > dimmers et tout le reste inclus. Il est préférable de créer des Scenes
  > dédiées ne contenant que des canaux Pan et Tilt pour les utiliser comme
  > presets d'XY Pad.
* ![](/basics/group.svg?resize=48,48) **Fixture Group** — restreint le pad à
  un **sous-ensemble** des heads qu'il contrôle : pendant qu'il est actif,
  seuls ces heads suivent le curseur, les autres maintiennent leur position.
  Cliquez à nouveau pour lever la restriction et contrôler à nouveau tous
  les heads. La liste indique combien de heads le preset contient.

## External input

Comme tout widget de la Virtual Console, l'XY Pad peut être piloté par MIDI,
OSC, DMX-in ou toute autre entrée prise en charge. Les contrôles suivants
peuvent être assignés dans la configuration d'entrée du widget :

|     |     |
| --- | --- |
| **Pan / Horizontal axis** | Position horizontale (pan) grossière. Mise à l'échelle de la range window lorsqu'une est définie. |
| **Pan fine** | Position horizontale fine (LSB), pour les fixtures avec pan 16 bits. |
| **Tilt / Vertical axis** | Position verticale (tilt) grossière. Mise à l'échelle de la range window lorsqu'une est définie. |
| **Tilt fine** | Position verticale fine (LSB), pour les fixtures avec tilt 16 bits. |
| **Width** | Réservé pour la largeur de la range window. |
| **Height** | Réservé pour la hauteur de la range window. |
| **Preset: &lt;name&gt;** | Une entrée est créée pour chaque preset. Envoyer une valeur maximale (pression d'un bouton) active ou bascule ce preset, exactement comme cliquer sur son bouton. |

Chaque fois que la position change pour une raison *autre* qu'une entrée
externe — un glissement à la souris, un rappel de preset, un annuler — le
pad envoie un **feedback** avec la position actuelle. Les faders
absolus/motorisés suivent le curseur, et les encodeurs voient leur valeur
interne réensemencée afin de continuer à fonctionner relativement à la
position réelle. Le feedback n'est pas renvoyé pendant que le contrôleur
lui-même déplace le pad, de sorte qu'aucune boucle de feedback ne se crée.

## Tips

* Réglez des **plages X/Y** par fixture afin qu'un rig mixte de lyres pointe
  toutes au même endroit lorsque le curseur du pad est centré.
* Utilisez la **range window** pour maintenir un XY Pad en toute sécurité à
  l'intérieur de la zone de scène, tout en gagnant en résolution de fader
  sur un contrôleur externe.
* Enregistrez les positions courantes comme **position presets** pour un
  rappel instantané pendant un show, et réordonnez-les pour que les plus
  utilisées viennent en premier.
* Ajoutez des **fixture group presets** à un seul pad plutôt que d'en
  construire plusieurs : un tap sélectionne sur quels heads vous visez.
* Observez les **fixture position dots** pour vérifier que chaque head a
  réellement atteint la position — les heads encore en chemin, ou avec une
  plage plus étroite, sont immédiatement visibles.
