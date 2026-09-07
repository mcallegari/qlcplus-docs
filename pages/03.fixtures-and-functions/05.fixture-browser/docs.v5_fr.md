---
title: 'Fixture Browser'
date: '14:32 27-06-2026'
taxonomy:
    category:
        - docs
---

Le **Fixture Browser** est l'endroit où vous patchez de nouveaux fixtures
dans votre projet. Ouvrez-le avec le bouton **Add Fixtures** en haut du
panneau gauche dans l'espace de travail
[Fixtures and Functions](/fixtures-and-functions).

Il vous permet de trouver une définition de fixture dans la bibliothèque, de
définir comment il doit être patché, et de le faire glisser dans l'une des
vues.

## Trouver un fixture

Il existe deux façons de trouver un fixture :

* **Parcourir par fabricant** — le browser s'ouvre sur une liste de
  fabricants. Cliquez sur un fabricant pour voir ses modèles, puis cliquez
  sur un modèle pour le sélectionner. Utilisez la flèche retour (le nom du
  fabricant en haut) pour revenir à la liste des fabricants.
* **Recherche** — tapez au moins trois caractères dans la zone de recherche
  en haut. La liste bascule vers un arbre de résultats de recherche, groupés
  par fabricant, en comparant votre texte aux fabricants et modèles.

## Boutons de la barre d'outils

En haut du browser :

* **＋ Create a new fixture definition** — ouvre l'éditeur de définitions de
  fixtures pour créer un fixture entièrement nouveau à partir de zéro.
* **Edit the selected fixture definition** — ouvre la définition du fixture
  sélectionné dans l'éditeur. Activé une fois qu'un modèle est sélectionné.
* **Remap fixtures** (icône de mélange) — ouvre l'outil **Fixture Remap**,
  utilisé pour transférer le patch et le contenu d'un projet existant sur un
  ensemble différent de fixtures.

## Propriétés du fixture

Lorsque vous sélectionnez un modèle, un panneau **Fixture properties**
apparaît en bas du browser. Réglez ces propriétés avant de faire glisser le
fixture dans une vue — elles déterminent comment il est nommé, où il est
patché, et combien de copies sont créées.

| Propriété | Signification |
|----------|---------|
| **Name** | Le nom que le fixture (ou les fixtures) aura dans votre projet. Un nom par défaut est suggéré ; modifiez-le à votre convenance. Lorsque vous en ajoutez plusieurs à la fois, ils sont numérotés automatiquement. |
| **Universe** | L'univers auquel le fixture est patché. Le menu déroulant liste les univers que vous avez définis. |
| **Address** | L'adresse DMX de départ (1–512) au sein de cet univers. Le browser suggère la première adresse libre qui convient ; elle est recalculée chaque fois que vous changez le mode, la quantité ou le nombre de fixtures déjà patchés. |
| **Quantity** | Combien de copies de ce fixture ajouter en une seule fois (1–512). Les copies sont disposées bout à bout à partir de l'adresse de départ, séparées par le **Gap**. |
| **Channels** | Le nombre de canaux DMX utilisés par le fixture. Ceci est défini automatiquement par le **Mode** sélectionné et est en lecture seule pour les fixtures ayant des modes. Pour un fixture générique/dimmer sans modes, vous pouvez définir vous-même le nombre de canaux (1–512). |
| **Gap** | Le nombre de canaux vides à laisser entre les copies consécutives lorsque **Quantity** est supérieur à un (0–511). Utilisez-le pour garder chaque fixture sur une adresse ronde, ou pour réserver de l'espace pour une extension future. |
| **Mode** | Le mode de fonctionnement du fixture (affiché uniquement pour les fixtures qui définissent des modes). Différents modes exposent différents ensembles de canaux — par exemple un mode de base par rapport à un mode étendu avec plus de contrôles. Sélectionner un mode met à jour le compte de **Channels**. |

### Inspecter les canaux d'un mode

À côté du menu déroulant **Mode** se trouve un bouton **info** (ⓘ). Activez-le
pour lister tous les canaux du mode sélectionné, chacun avec son nom et une
icône de type, afin de pouvoir confirmer que le mode fait ce que vous
attendez avant de patcher.

## Patcher le fixture

Une fois les propriétés définies, **faites glisser le fixture dans une vue**
pour le patcher :

* Dans la **Universe View**, la grille met en surbrillance les canaux qu'il
  occupera (un bloc par copie, séparé par le gap) et indique si l'adresse est
  libre.
* Dans la **2D / 3D View**, déposez-le à l'endroit où vous voulez qu'il soit
  positionné sur la scène.

Si l'adresse choisie chevauche un fixture existant, une erreur
**« Address overlapping »** s'affiche et vous devez choisir une autre adresse
DMX.

## Generic RGB Panel

Sélectionner le modèle spécial **Generic RGB Panel** affiche à la place un
panneau dédié **RGB panel properties**, avec des paramètres supplémentaires
pour décrire une matrice de pixels. Un aperçu en direct en bas se met à jour
au fur et à mesure que vous les modifiez, montrant la disposition des
pixels, le câblage en serpentin/zig-zag et le coin de départ.

En plus de **Name**, **Universe** et **Address** (comme ci-dessus), vous
réglez :

| Propriété | Signification |
|----------|---------|
| **Components** | L'ordre des couleurs de chaque pixel : **RGB**, **BGR**, **BRG**, **GBR**, **GRB**, **RBG**, ou **RGBW**. Faites-le correspondre à la façon dont les LED de votre panneau sont câblées afin que les couleurs soient correctes. |
| **Size** | La résolution du panneau en pixels, en **colonnes × lignes** (largeur jusqu'à 170, hauteur jusqu'à 999). Cela détermine combien de cellules a la matrice. |
| **Physical** | La taille réelle du panneau, en **largeur × hauteur** en millimètres. Utilisée pour dessiner le panneau à l'échelle dans les vues 2D/3D. |
| **Start corner** | Le coin où commence la chaîne de pixels : **Top-Left**, **Top-Right**, **Bottom-Left** ou **Bottom-Right**. Marqué par un point dans l'aperçu. |
| **Displacement** | Comment le câblage se déroule d'une ligne à l'autre (ou d'une colonne à l'autre) : **Snake** (direction alternée à chaque ligne) ou **Zig Zag** (chaque ligne va dans la même direction). Cela doit correspondre à votre panneau pour que les effets soient correctement mappés. |
| **Direction** | Si les pixels sont enchaînés **Horizontally** (ligne par ligne) ou **Vertically** (colonne par colonne). |

Comme un seul panneau peut utiliser un grand nombre de canaux —
potentiellement plus d'un univers — le panneau peut s'étendre sur plusieurs
univers à partir de l'adresse choisie.
