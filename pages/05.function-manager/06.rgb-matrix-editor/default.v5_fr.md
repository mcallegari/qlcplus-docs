---
title: 'Éditeur de Matrice RGB'
date: '12:24 21-08-2023'
media_order: blending.png
---

Une **RGB Matrix** joue des motifs animés, du texte et des images sur un
**groupe de fixtures** disposé en grille — panneaux LED, barres à pixels, un
mur de PAR, etc. L'éditeur de Matrice RGB s'ouvre dans le panneau droit de
l'espace de travail [Fixtures and Functions](/fixtures-and-functions), avec
un **aperçu** en direct de l'animation juste en dessous du sélecteur de
groupe.

## Réglages de base

| Réglage | Signification |
|---------|---------|
| **Name** | Le nom de la matrice (barre supérieure). |
| **Fixture Group** | Le groupe de fixtures sur lequel la matrice joue. La disposition du groupe (lignes × colonnes) définit la grille de pixels — choisissez un groupe avant que quoi que ce soit ne s'affiche. |
| **Pattern** | L'algorithme d'animation à jouer : **Text**, **Image**, ou l'un des motifs basés sur script. La sélection détermine ce qui apparaît dans la section **Parameters**. |
| ![](/basics/sequence.svg?resize=48,48) **Save this matrix to a sequence** | Transforme la matrice en cours d'exécution en une séquence d'étapes, afin de pouvoir l'affiner ou la découper comme un chaser. |
| **Blend mode** | Comment la matrice se combine avec les autres sorties sur les mêmes fixtures. |
| **Color mode** | Quelle capacité du fixture est pilotée par la matrice. |
| **Colors** | La couleur (ou les couleurs) utilisée(s) par le motif — voir ci-dessous. |

### Blend mode

| Mode | Comportement |
|------|-----------|
| **Default (HTP)** | La valeur la plus élevée l'emporte sur les autres fonctions sur les mêmes canaux. |
| **Mask** | La matrice agit comme un masque sur ce qui est déjà présent. |
| **Additive** | La couleur de la matrice est ajoutée à la sortie existante. |
| **Subtractive** | La couleur de la matrice est soustraite de la sortie existante. |

### Color mode

| Mode | Pilote |
|------|--------|
| **Default (RGB)** | Les canaux RGB (ou CMY) des fixtures. |
| **White** | Le canal blanc. |
| **Amber** | Le canal ambre. |
| **UV** | Le canal UV. |
| **Dimmer** | Le canal d'intensité. |
| **Shutter** | Le canal d'obturateur. |

### Colors

Le nombre d'échantillons de couleur affichés dépend du motif sélectionné —
chaque motif déclare combien de couleurs il accepte, d'aucune jusqu'à cinq.
Cliquez sur un échantillon pour ouvrir le sélecteur de couleur ; le bouton
<i class="fa fa-2x fa-xmark" style="color:darkred"></i> à côté des couleurs
2 à 5 réinitialise cette couleur à l'état non défini.

## Parameters

La section **Parameters** change complètement selon le motif sélectionné, et
est masquée lorsque le motif n'a rien à configurer.

### Motifs de texte

| Réglage | Signification |
|---------|---------|
| **Text** | Le message à afficher. |
| <i class="fa fa-2x fa-font" style="color:cyan"></i> **Font** | Ouvre un sélecteur de police pour la famille, la taille et le style. |
| **Animation** | Comment le texte se déplace : **Letters** (une lettre à la fois), défilement **Horizontal** ou **Vertical**. |
| **Offset X** / **Y** | Décale le texte sur la grille (de −255 à 255). |

### Motifs d'image

| Réglage | Signification |
|---------|---------|
| **Image** | Le fichier image à afficher. |
| <i class="fa fa-2x fa-image"></i> **Select an image** | Ouvre un sélecteur de fichier. |
| **Animation** | **Static**, **Horizontal**, **Vertical**, ou **Animation** (joue les images d'un GIF animé). |
| **Offset X** / **Y** | Décale l'image sur la grille (de −255 à 255). |

### Motifs basés sur script

Les motifs basés sur script construisent leurs propres contrôles : le script
déclare ses propriétés et QLC+ génère une étiquette correspondante ainsi
qu'une liste déroulante, un champ numérique, un champ décimal ou un champ de
texte pour chacune d'elles. Ce que vous voyez dépend donc entièrement du
script choisi — par exemple le nombre de barres, la taille d'une forme, une
direction, etc.

## Speed

**Double-cliquez** sur un champ de temps, ou utilisez le bouton
<i class="fa fa-2x fa-clock"></i> situé à côté, pour ouvrir l'éditeur de
temps.

| Réglage | Signification |
|---------|---------|
| **Steps fade in** | Temps de fondu d'entrée de chaque étape de l'animation. |
| **Steps hold** | Combien de temps chaque étape est maintenue — c'est ce qui définit le rythme de l'animation. |
| **Steps fade out** | Temps de fondu de sortie de chaque étape. |
| **Tempo type** | Si les temps sont mesurés en **Time** ou en **Beats**, synchronisés avec le tempo global. |

## Ordre et direction

### Run Order

| Icône | Mode | Comportement |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Répète l'animation indéfiniment. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Joue l'animation une seule fois, puis s'arrête. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Joue en avant, puis en arrière, et répète. |

### Direction

| Icône | Mode | Comportement |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Joue les étapes de l'animation dans l'ordre normal. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Joue les étapes de l'animation dans l'ordre inverse. |
