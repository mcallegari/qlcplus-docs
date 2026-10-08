---
title: 'Simple Desk'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapitre 6

# Simple Desk

Le **Simple Desk** est une surface de contrôle DMX manuelle. Il offre un fader
et une case de valeur pour chaque canal d'un univers, ainsi qu'un **keypad**
pour saisir des commandes de type console — permettant de contrôler
l'installation à la main, exactement comme un pupitre d'éclairage
traditionnel. Il est idéal pour un contrôle manuel rapide, le busking et les
tests.

Il s'ouvre depuis la barre d'outils principale (l'icône Simple Desk). Ce qui
est réglé ici peut être capturé dans une Scene avec
[DMX Dump](/main-window/dmx-dump).

## Layout

Le Simple Desk est divisé en deux zones, séparées par un diviseur déplaçable :

* **En haut** — les faders de canaux pour l'univers sélectionné.
* **En bas** — la **Fixture List**, l'**historique des commandes**, et le
  **keypad**.

## Faders de canaux

La zone supérieure affiche une colonne par canal DMX de l'univers courant,
chacune avec :

* Une **icône de canal** — cliquer dessus ouvre un outil dédié pour ce type
  de canal (slider ou sélecteur de preset). Appuyer sur **Échap** pour le
  fermer.
* Un **fader** — glisser pour définir la valeur du canal.
* Une **case de valeur** — saisir une valeur exacte. Elle affiche la valeur
  DMX (0–255) ou en pourcentage (0–100%) selon le mode d'affichage.
* L'**adresse DMX** du canal.
* Un bouton de **réinitialisation** (✕) — ramène le canal à son état normal
  (non forcé).

Les canaux modifiés manuellement sont **forcés** (overridden) et affichés en
**rouge**. Les autres canaux sont teintés pour montrer à quel fixture ils
appartiennent (teintes alternées pour les fixtures voisines).

### Barre d'outils

Au-dessus des faders :

* **Universe** — choisit quel univers est contrôlé par les faders.
* **Reset the whole universe** (✕) — efface tous les forçages dans l'univers
  courant.
* **DMX / %** — bascule les cases de valeur entre les valeurs DMX brutes
  (0–255) et les pourcentages (0–100%).

## Fixture List

La liste en bas à gauche affiche les fixtures patchés sur l'univers courant
avec leur plage d'adresses. Cliquer sur un fixture fait défiler la vue des
faders jusqu'à son premier canal, ce qui facilite la recherche des canaux
d'un fixture dans un univers entier.

## Keypad et historique des commandes

La zone en bas à droite est un **keypad** numérique pour saisir des
commandes, accompagné d'un **historique des commandes**. Chaque commande
exécutée est ajoutée à l'historique ; **double-cliquer** sur une entrée de
l'historique la recharge dans le keypad afin de pouvoir la réexécuter ou la
modifier.

Saisir une commande avec le keypad à l'écran (ou le clavier) et appuyer sur
**ENTRÉE** pour l'exécuter. **CLR** efface la commande en cours.

## Syntaxe des commandes du keypad

Les commandes du keypad adressent un ou plusieurs canaux et définissent
leurs valeurs, dans le style d'une console d'éclairage classique. Les canaux
sont adressés par leur **adresse DMX** au sein de l'univers courant (base 1).

### Mots-clés et opérateurs

| Token | Signification |
|-------|---------|
| `AT` | Définit le(s) canal(aux) adressé(s) à une valeur : `1 AT 200`. |
| `THRU` | Une plage — de canaux (`1 THRU 10`) ou, après `AT`, de valeurs pour un fondu sur la plage. |
| `BY` | Un pas lors de l'adressage d'une plage : `1 THRU 20 BY 2` sélectionne un canal sur deux. |
| `FULL` | Raccourci pour la valeur maximale (255 / 100%). |
| `ZERO` | Raccourci pour la valeur 0. |
| `+` | Ajoute aux valeurs actuelles des canaux : `1 + 20`. |
| `-` | Soustrait des valeurs actuelles des canaux : `1 - 20`. |
| `+%` | Augmente les valeurs actuelles d'un pourcentage : `1 +% 10`. |
| `-%` | Diminue les valeurs actuelles d'un pourcentage : `1 -% 10`. |

Le keypad affiche `+`/`-` ou `+%`/`-%` selon le mode d'affichage courant.

### Formes de base

| Commande | Effet |
|---------|--------|
| `5` | Sélectionne le canal 5 (et en fait la sélection de travail). |
| `5 AT 128` | Définit le canal 5 à la valeur 128. |
| `5 FULL` | Définit le canal 5 au maximum (255). |
| `5 ZERO` | Définit le canal 5 à 0. |

### Plages

| Commande | Effet |
|---------|--------|
| `1 THRU 10 AT 255` | Définit les canaux 1 à 10 tous à 255. |
| `1 THRU 10 BY 2 AT 128` | Définit un canal sur deux de 1 à 10 (1, 3, 5, 7, 9) à 128. |
| `1 THRU 10 AT 0 THRU 255` | Répartit les valeurs uniformément sur la plage — un fondu de 0 sur le canal 1 jusqu'à 255 sur le canal 10. |

### Modifications relatives

| Commande | Effet |
|---------|--------|
| `1 THRU 10 + 20` | Ajoute 20 à la valeur actuelle de chaque canal 1–10 (limité à 255). |
| `1 THRU 10 - 20` | Soustrait 20 de chacun (limité à 0). |
| `1 +% 10` | Augmente de 10% la valeur actuelle du canal 1. |
| `1 -% 10` | Diminue de 10% la valeur actuelle du canal 1. |

### Répétition sur la dernière sélection

Si l'on saisit une commande **sans spécifier de canaux** (par exemple
simplement `AT 100`, `FULL`, ou `ZERO`), elle s'applique aux **mêmes canaux
que la commande précédente**. Cela permet de sélectionner un ensemble de
canaux une seule fois puis de continuer à les ajuster :

```
1 THRU 8 AT 255   ← sélectionne les canaux 1–8 et les met au maximum
ZERO              ← les mêmes canaux 1–8 passent à 0
AT 128            ← les mêmes canaux 1–8 passent à 128
```

> Les valeurs sont toujours en DMX (0–255) dans les commandes. Une plage de
> valeurs `THRU` et le pas `BY` permettent de construire des fondus et des
> motifs en une seule ligne, exactement comme sur une console matérielle.
