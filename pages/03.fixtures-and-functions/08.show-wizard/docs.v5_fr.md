---
title: 'Show Wizard'
date: '12:00 07-10-2026'
taxonomy:
    category:
        - docs
---

Le **Show Wizard** construit pour vous un show complet et prêt à l'emploi —
positions des fixtures, palettes, effets et une Virtual Console — à partir
de quelques choix de haut niveau. Il est conçu pour vous faire passer d'un
projet vide à un rig utilisable en quelques minutes, et pour donner aux
nouveaux venus un exemple fonctionnel dont ils peuvent s'inspirer.

Ouvrez-le avec le bouton <i class="fa fa-hat-wizard fa-2x" style="color:yellow"></i>
**Show Wizard** en haut du panneau droit dans l'espace de travail
[Fixtures and Functions](/fixtures-and-functions). Il s'ouvre en overlay
plein écran avec six étapes ; un indicateur d'étapes en haut montre où vous
en êtes, et les boutons **← Back** / **Next →** en bas permettent de passer
d'une étape à l'autre. Le bouton de la dernière étape affiche **Generate ✦**
au lieu de **Next →**.

Rien n'est écrit dans votre projet avant que vous n'appuyiez sur
**Generate** à la dernière étape, et le résultat complet — disposition de la
scène, fonctions et Virtual Console — est créé en une seule fois et est
**entièrement annulable avec Ctrl+Z**, tout comme n'importe quelle autre
modification. Fermer l'assistant avec le bouton **✕** à tout moment annule
vos choix sans toucher au projet.

## Étape 1 — Show Type

La première étape demande quel type de show vous construisez. Votre choix
définit des valeurs par défaut pertinentes pour le reste de l'assistant — le
lieu suggéré à l'étape 3 et les effets présélectionnés à l'étape 4 — mais
chacune de ces valeurs par défaut peut encore être modifiée par la suite.

| Show type | Typical use | Effects emphasis |
|-----------|--------------|-------------------|
| **Club Night** | Box / club | Chasers rapides, hits de strobe, chases RGB, effets calés sur le BPM |
| **Concert / Live** | Scène rock | Préréglages de position, bains de couleur, aveuglants pour le public, EFX de mouvement |
| **Theatrical** | Théâtre | Basé sur des scènes, fondus lents, couleurs chaudes, motifs de gobo, préréglages de position |
| **Architectural** | Espace ouvert | Chases de pixels doux, dégradés de couleur, boucles ambiantes |
| **Custom** | Tout | Rien n'est présélectionné — choisissez tout vous-même aux étapes suivantes |

## Étape 2 — Fixture Groups & Roles

Cette étape organise vos fixtures en **groupes** et attribue à chaque groupe
un **rôle**. Les rôles pilotent à la fois le placement automatique sur
scène à l'étape 3 et les effets générés pour le groupe à l'étape 4.

L'étape est divisée en trois colonnes :

* **Fixture Browser** (gauche) — le même browser utilisé ailleurs dans
  QLC+. Faites glisser un fixture depuis celui-ci sur une case de groupe
  dans la colonne du milieu pour le patcher et l'ajouter à ce groupe en une
  seule action.
* **Fixture Groups** (milieu) — vos cases de groupe. Cliquez sur **+ Add
  group** pour créer une case vide et nommée (nom par défaut « Group N »),
  puis faites-y glisser des fixtures. Cochez la case d'un groupe pour
  l'inclure dans le placement automatique et dans les fonctions générées.
  Les groupes qui existent déjà dans le projet (créés en dehors de
  l'assistant) sont également listés ici, afin que vous puissiez intégrer
  des rigs existants dans les effets et la génération de Virtual Console de
  l'assistant sans avoir à les re-patcher.
* **Detected capabilities & roles** (droite) — pour chaque groupe **coché**,
  affiche le rôle qui lui est attribué et les capacités que QLC+ a
  détectées sur ses fixtures (mouvement, mélange de couleurs, gobo, shutter,
  dimmer). Les rôles sont suggérés automatiquement à partir de ces
  capacités, mais vous pouvez modifier à la main le rôle de n'importe quel
  groupe.

### Roles

| Role | Icon | Meaning |
|------|------|---------|
| **Key Light** | 💡 | Bain frontal/zénithal, l'éclairage principal |
| **Fill Light** | 🔦 | Bain d'appoint sous un angle différent |
| **Back Light** | 🔙 | Contre-jour arrière / up-lighter |
| **Side Light** | 📐 | Lumière de boom ou latérale (pendrillons de théâtre) |
| **Effect** | ✨ | Fixture d'effet aérien, faisceaux en l'air |
| **Strip / Bar** | ▬ | Barre à LED ou batten traversant le rig |
| **Blinder** | 💥 | Aveuglant pour le public / strobe |
| **Hazer** | 💨 | Hazer ou machine à fumée |
| **Floor** | ⬆ | Up-lighter de sol |

> Un groupe dont les fixtures sont **déjà patchés et positionnés** ailleurs
> dans le projet (c'est-à-dire qu'il n'apporte aucun *nouveau* fixture)
> permet à l'assistant de sauter entièrement l'étape 3 — voir ci-dessous.

## Étape 3 — Venue & Stage

Cette étape choisit un **type de scène** et une **taille de scène**, puis
montre comment vos groupes cochés seront positionnés dessus. Elle est
**sautée automatiquement** lorsqu'aucun des groupes cochés ne contient de
fixture que l'assistant doit encore placer — par exemple, si vous n'avez
coché qu'un groupe existant déjà positionné dans la
[3D View](/fixtures-and-functions/3d-view). L'indicateur d'étapes grise
l'étape sautée au lieu de la masquer, afin que vous voyiez toujours où elle
se serait trouvée.

* **Venue type** — l'une des quatre formes de scène. Chacune liste les
  types de show auxquels elle convient le mieux :

  | Stage | Description | Best for |
  |-------|-------------|----------|
  | **Open Space** | Plancher nu, sans éléments scéniques. Convient aux rigs temporaires et aux événements polyvalents. | Architectural, Custom |
  | **Box / Club** | Quatre murs et un plafond, truss sur tout le périmètre. | Club Night |
  | **Rock Stage** | Scène surélevée, truss frontal et colonnes verticales. | Concert / Live |
  | **Theatre** | Cadre de scène (proscenium), herses de face, boomers latéraux. | Theatrical |

* **Stage size (metres)** — **Width**, **Height** et **Depth**, préremplis
  avec une taille suggérée en fonction du nombre de vos fixtures. Ajustez
  les champs si votre lieu réel diffère ; il s'agit de la même taille
  d'environnement que celle utilisée par les réglages **Width / Height /
  Depth** de la [3D View](/fixtures-and-functions/3d-view), donc la modifier
  ici la modifie également là-bas.
* **Automatic fixture placement** (côté droit) — liste, pour chaque groupe
  coché, où ses fixtures seront riggés et combien de fixtures cela
  représente, par exemple *Key Light → Front truss, high — aimed at stage
  centre ~45°*. Le placement suit les conventions de rigging courantes pour
  le rôle — trusses frontales pour le key light, trusses arrière pour le
  backlight, boomers latéraux alternés pour le side light, un batten pleine
  largeur pour les strips, etc. — et les têtes sont réparties uniformément
  entre les positions disponibles. Aucun placement 3D manuel n'est
  nécessaire, bien que vous puissiez toujours affiner individuellement
  chaque fixture par la suite dans la 3D View.

## Étape 4 — Effects

Cette étape sélectionne quelles **fonctions** l'assistant va générer —
regroupées par familles, avec un compte courant du nombre d'effets
sélectionnés. Les effets qui nécessitent une capacité qu'aucun de vos
fixtures ne possède (par exemple des effets de mouvement sur un rig de
simples dimmers) sont affichés **grisés** et ne peuvent pas être activés.
Cliquez sur **All / None** dans l'en-tête d'une famille pour sélectionner ou
effacer en une fois tous les effets disponibles de cette famille.

| Family | Effects | Needs |
|--------|---------|-------|
| 🎨 **Color** | Color Palette, Color Rainbow, Split Color, Gobo Palette | Mélange de couleurs et/ou canaux de gobo |
| 💡 **Intensity** | Shutter Effects, Blinder Hit, Strobe Chase, Heartbeat | Un canal shutter/strobe, ou un dimmer |
| 🎯 **Movement** | Position Presets, Fly Out, Fly In, Circle Chase, Figure Eight, Audience Sweep | Fixtures Pan/Tilt |
| ▦ **Matrix** | Pixel Chase, Wave, Fireworks, Plasma, Marquee | Un fixture à dimmer ou à mélange de couleurs (les lyres sont incluses — les effets de matrice fonctionnent sur l'intensité lorsqu'aucun mélange de couleurs n'est disponible) |
| 🎬 **Show Cues** | Ambient Loop | Au moins un fixture à mélange de couleurs **statique** (non mobile) |

Chaque show type présélectionne un sous-ensemble pertinent à l'entrée dans
cette étape (par exemple, Club Night active Color Rainbow, Blinder Hit,
Strobe Chase, Circle Chase et Pixel Chase ; Theatrical active Color
Palette, Position Presets, Gobo Palette et Ambient Loop), mais vous pouvez
librement ajouter ou retirer des effets indépendamment du show type choisi à
l'étape 1. **Custom** démarre sans rien de sélectionné.

## Étape 5 — Controller

Cette étape **optionnelle** lie un contrôleur d'input MIDI, OSC ou DMX
patché à la Virtual Console que l'assistant est sur le point de construire.
Vous pouvez la passer librement — vous pourrez toujours mapper des contrôles
à la main plus tard avec **Auto Detect** sur n'importe quel widget de
Virtual Console.

* **Connected controllers** (gauche) — chaque univers disposant actuellement
  d'un patch d'input (pas seulement une ligne de plugin qui *pourrait* être
  patchée). Cliquez sur une entrée pour la sélectionner pour le mappage ;
  cliquez à nouveau dessus pour la désélectionner. Chaque entrée affiche le
  plugin, le numéro d'univers, et quelques pastilles de capacité : le nom du
  **profil d'input** patché (ou *No input profile* lorsqu'un mappage
  générique/linéaire sera utilisé à la place), combien de **boutons** et de
  **faders** l'assistant a trouvés, si le profil possède des **LEDs
  couleur**, et si le **feedback** est déjà activé sur cet univers. Si rien
  n'est encore patché, un bouton ici vous amène directement au panneau
  **Input/Output** pour en patcher un, puis vous ramène à l'assistant.
* **Mapping options** (droite, activées une fois un contrôleur sélectionné) :

  | Option | Effect |
  |--------|--------|
  | **Auto-map Virtual Console controls** | Lie les boutons, faders et pads XY générés aux canaux du contrôleur : les boutons du contrôleur pilotent les boutons de la VC, les faders/encodeurs pilotent les sliders d'intensité et le pan/tilt. |
  | **Send feedback to the controller** | Patche la ligne d'output du contrôleur afin que ses LEDs s'allument et que ses faders motorisés se déplacent pour correspondre à l'état de la Virtual Console. |
  | **Match LED colours to button colours** | Sur un contrôleur dont le profil d'input possède une table de couleurs, allume le pad de chaque bouton de couleur dans la couleur correspondante la plus proche. Ignoré sur les contrôleurs sans LEDs couleur. |

  Sous les options, une case **Estimated usage** donne un aperçu en direct
  de ce que le mappage va consommer, par ex. *« 18 of 24 buttons, 3 of 9
  faders »*, mise à jour à chaque changement du contrôleur ou des options.

QLC+ reconnaît les contrôleurs courants de type **grille de pads** (tels que
les layouts APC mini ou Launchpad) à partir de leur profil d'input et mappe
les contrôles de sorte que le même type de contrôle se retrouve toujours au
même endroit sur la grille quelle que soit la page de Virtual Console
affichée : les boutons de changement de page, les échantillons de couleur,
les déclencheurs d'effets et les boutons de show-cue ont chacun leur propre
bande de rangées. Les contrôleurs sans grille reconnue obtiennent tout de
même un mappage utilisable — les boutons sont distribués dans l'ordre et les
faders sont mappés sur les sliders que l'assistant crée.

## Étape 6 — Summary

La dernière étape passe en revue ce qui sera créé, en deux colonnes :

* **What will be created** (gauche) — une carte par section : **Stage**
  (combien de groupes ont été positionnés, et sur quel type de scène — ou
  une note indiquant que la disposition existante a été laissée intacte
  lorsque l'étape 3 a été sautée), **Functions** (combien d'effets ont été
  sélectionnés), **Virtual Console** (une page principale plus une page de
  frame par groupe), et **Controller** (le résumé du mappage de l'étape 5,
  ou *« No external controller mapped »*). En dessous, chaque effet
  sélectionné est listé sous forme de petite étiquette.
* **Virtual Console layout preview** (droite) — une maquette schématique de
  la frame multipage que l'assistant va construire : une page **All
  Groups** plus une page par groupe coché, chacune avec son propre slider
  d'intensité, ses boutons de couleur, son pad XY (pour les groupes avec
  mouvement) et ses boutons d'effets, ainsi qu'une rangée de boutons de
  show-cue (Ambient, Blinder) partagée sur toutes les pages. Cliquez sur les
  onglets de page dans la maquette pour prévisualiser une autre page avant
  de générer.

Appuyez sur **Generate ✦** pour tout construire. Un bref indicateur
**« Generating… »** apparaît dans le pied de page ; l'assistant se ferme
alors automatiquement et votre nouveau show est prêt dans l'espace de
travail principal.

## Ce qui est créé

* **Stage** — lorsque l'étape 3 n'a pas été sautée, les fixtures de chaque
  groupe coché sont patchés (s'ils ne le sont pas déjà) et positionnés dans
  la [3D View](/fixtures-and-functions/3d-view) selon leur rôle et le type
  de scène choisi.
* **Fixture Groups** — chaque groupe coché devient (ou reste) un véritable
  [Fixture Group](/fixtures-and-functions/fixture-group-manager), y compris
  un groupe synthétique **All Groups** regroupant les fixtures de tous les
  groupes cochés, utilisé par la page principale de la Virtual Console.
* **Functions** — pour chaque groupe et pour l'agrégat All Groups,
  l'assistant crée les palettes (couleur, dimmer, shutter) et les scenes
  nécessaires pour piloter chaque effet sélectionné, classées dans des
  dossiers de l'arbre des fonctions par groupe. Les effets de mouvement sont
  construits à partir d'une scene **Position** de base plus un
  [EFX](/function-manager/efx-editor) (ou un **Chaser** pour les effets basés
  sur des étapes tels que Strobe Chase), afin qu'ils partent toujours d'une
  visée définie. Les effets de matrice utilisent une
  [RGB Matrix](/function-manager/rgb-matrix-editor) avec un script intégré,
  en se rabattant sur une simple animation d'intensité pour les fixtures
  sans mélange de couleurs.
* **Virtual Console** — une seule **Frame** multipage faisant office de
  disposition principale : la page 0 est **All Groups**, suivie d'une page
  par groupe coché, avec des sliders d'intensité, des boutons de
  couleur/gobo, des boutons de mouvement/effet et, pour les groupes avec
  mouvement, un [XY Pad](/virtual-console/xy-pad). Le changement de page
  utilise des dimmers à un canal cachés, patchés sur un univers libre via le
  plugin [Loopback](/plugins/loopback) — vous n'avez pas besoin de
  configurer cela vous-même.
* **External controller mapping** — lorsqu'un contrôleur a été sélectionné à
  l'étape 5, les widgets générés lui sont liés en suivant les options de
  mappage que vous avez choisies, avec feedback et correspondance des
  couleurs appliqués là où ils sont activés.

> Relancer l'assistant ne fusionne pas avec ce qu'il a généré précédemment
> et ne le modifie pas — chaque exécution ajoute un nouvel ensemble de
> groupes, de fonctions et une nouvelle frame de Virtual Console. Supprimez
> d'abord les précédents (ou annulez simplement) si vous souhaitez
> recommencer à zéro.
