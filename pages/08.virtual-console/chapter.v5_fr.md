---
title: 'Virtual Console'
date: '14:21 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapitre 7

# Virtual Console

La **Virtual Console** est votre surface de contrôle personnalisée pour gérer le
spectacle. Vous la construisez à partir de **widgets** — boutons, sliders, XY
pads, cue lists, horloges et bien plus — disposés sur une ou plusieurs
**pages**, organisés exactement comme vous le souhaitez pour piloter votre
installation en direct. En bref : dans le reste de QLC+ on *crée* les
fonctions ; dans la Virtual Console on les *exécute*.

Elle possède deux modes :

* **Mode Operate** (par défaut) — cliquer sur les widgets les déclenche. C'est
  ainsi que la console est utilisée pendant un spectacle.
* **Mode Edit** — vous ajoutez, déplacez, redimensionnez et configurez les
  widgets.

## Structure

* Une **barre d'outils** en haut affiche un onglet par **page** ; cliquer sur
  un onglet pour changer de page. À droite se trouvent l'interrupteur
  ![](../basics/grid.svg?resize=24,24) de **snap** (aligne les widgets sur une
  grille) et les contrôles de **zoom**.
* La **zone de page** ci-dessous est la surface sur laquelle résident les
  widgets.
* En mode Edit, un **panneau de droite** contient les outils d'édition.

### Pages

La console peut comporter plusieurs pages, chacune avec sa propre surface de
widgets — par exemple une page par morceau, ou par zone de la scène.

* **Cliquer** sur un onglet de page pour l'afficher.
* **Clic droit** sur un onglet de page pour la **détacher** dans sa propre
  fenêtre (pratique pour un second écran).
* Une page peut être **protégée par PIN** ; y basculer demande alors le PIN.

Voir [VC Page](/virtual-console/page) pour les paramètres de la page (taille,
PIN, ajout/suppression de pages).

## Panneau de droite (outils d'édition)

| Bouton | Fonction |
|--------|--------------|
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Ajouter un nouveau widget** | Ouvre la liste des widgets ; faire glisser un type de widget sur la page pour le créer. |
| ![](../basics/edit.svg?resize=48,48) **Mode Edit** | Active/désactive le mode Edit (le bouton affiche une bordure rouge clignotante lorsqu'il est actif). Avec un widget sélectionné, il affiche les propriétés de ce widget. |
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Ouvre la liste des fonctions afin de pouvoir les glisser sur les widgets pour les associer. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Supprimer les widgets sélectionnés** | Supprime les widgets sélectionnés. |
| <i class="fa fa-copy fa-2x"></i> **Copier** | Copie les widgets sélectionnés dans le presse-papiers. |
| <i class="fa fa-paste fa-2x"></i> **Coller** | Colle les widgets du presse-papiers sur la page. Il est également possible de faire glisser le bouton coller sur un frame cible pour coller à l'intérieur de celui-ci. |

## Travailler avec les widgets

* **Faire glisser** un type de widget depuis la liste sur la page pour
  l'ajouter. Certains widgets (Button Matrix, Slider Matrix) demandent
  d'abord un nombre de lignes et de colonnes.
* En mode Edit, **cliquer** sur un widget pour le sélectionner (Ctrl+clic
  pour en sélectionner plusieurs), **faire glisser** pour le déplacer et
  utiliser les poignées pour le redimensionner.
* **Associer une fonction** à un widget en la faisant glisser depuis le
  Function Manager sur le widget.

## Propriétés des widgets

Lorsqu'un widget est sélectionné en mode Edit, le panneau de droite affiche
ses propriétés, organisées en onglets :

* **Settings** — les options propres au widget (documentées pour chaque
  widget ci-dessous).
* **Presets** — pour les widgets qui les prennent en charge (Animation, XY
  Pad, Speed Dial).
* **External controls** — associe des contrôleurs physiques et des
  raccourcis clavier au widget (voir [External controls](#external-controls)).

### Propriétés de base (tous les widgets)

Chaque widget partage une section **Basic properties** :

* **Label** — la légende du widget.
* **Background color** — la couleur de fond du widget.
* **Foreground color** — la couleur de son texte/de ses graphiques.
* **Font** — la police utilisée pour son étiquette.
* **Background image** — une image facultative affichée derrière le widget.
* **Z-Index** — l'ordre d'empilement, afin que les widgets superposés se
  disposent de façon prévisible.
* **Alignment** — lorsque plusieurs widgets sont sélectionnés, les aligner à
  gauche/à droite/en haut/en bas.

### External controls

L'onglet **External controls** associe des entrées au widget afin de pouvoir
le piloter depuis du matériel externe. Il est possible d'associer :

* une **entrée externe** (un fader, un bouton ou un encodeur provenant d'un
  profil d'entrée MIDI/DMX/OSC/etc.), ou
* un **raccourci clavier**.

Cela permet de piloter la Virtual Console depuis une surface de contrôle
physique ou le clavier plutôt qu'avec la souris.

## Les widgets

| Widget | Objectif |
|--------|---------|
| ![](../basics/button.svg?resize=48,48) [Button](/virtual-console/button) | Déclenche une fonction (toggle, flash, blackout, …). |
| ![](../basics/buttonmatrix2.png?resize=48,48) [Button Matrix](/virtual-console/button-matrix) | Crée une grille de boutons à l'intérieur d'un frame. |
| ![](../basics/slider.svg?resize=48,48) [Slider](/virtual-console/slider) | Un fader pour les niveaux, les sous-groupes, le Grand Master ou un attribut de fonction. |
| ![](../basics/sliders.svg?resize=48,48) [Slider Matrix](/virtual-console/slider-matrix) | Crée une grille de sliders à l'intérieur d'un frame. |
| ![](../basics/knob.svg?resize=48,48) [Knob](/virtual-console/slider) | Une variante rotative du Slider. |
| ![](../basics/animation.svg?resize=48,48) [Animation](/virtual-console/animation) | Lit et contrôle une RGB Matrix avec des changements de couleur/preset en direct. |
| ![](../basics/speed.svg?resize=48,48) [Speed Dial](/virtual-console/speed-dial) | Définit et multiplie la temporisation des fonctions. |
| ![](../basics/xypad.svg?resize=48,48) [XY Pad](/virtual-console/xy-pad) | Contrôle pan/tilt à deux axes pour les fixtures mobiles. |
| ![](../basics/cuelist.svg?resize=48,48) [Cue List](/virtual-console/cue-list) | Lit un chaser cue par cue, comme une conduite théâtrale. |
| ![](../basics/frame.svg?resize=48,48) [Frame](/virtual-console/frame) | Un conteneur qui regroupe des widgets. |
| ![](../basics/soloframe.svg?resize=48,48) [Solo Frame](/virtual-console/solo-frame) | Un conteneur qui garantit qu'une seule de ses fonctions s'exécute à la fois. |
| ![](../basics/label.svg?resize=48,48) [Label](/virtual-console/label) | Une étiquette de texte statique pour les titres et les regroupements. |
| ![](../basics/audiotriggers.svg?resize=48,48) [Audio Triggers](/virtual-console/audio-triggers) | Pilote des fonctions/niveaux à partir de l'analyse audio en direct. |
| ![](../basics/clock.svg?resize=48,48) [Clock](/virtual-console/clock) | Une horloge, un chronomètre ou un compte à rebours pouvant programmer l'exécution de fonctions. |
