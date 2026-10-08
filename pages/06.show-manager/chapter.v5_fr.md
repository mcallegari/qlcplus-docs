---
title: 'Show Manager'
date: '14:07 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Chapitre 5

# Show Manager 

Un **Show** est une timeline qui dispose d'autres fonctions (scenes, chasers,
audio, vidéo, …) sur des **tracks** en fonction du temps, afin qu'une
performance entière puisse être lue comme un tout. Modifier un Show est
différent des autres fonctions : cela ouvre son propre espace de travail en
plein écran, le **Show Manager**, au lieu de l'éditeur du panneau droit.

Vous y accédez en créant un Show depuis le menu **Add a new function**, ou en
double-cliquant sur un Show existant dans le Function Manager.

## La timeline

La zone principale est une **timeline** : le temps s'écoule de gauche à
droite, et chaque **track** horizontale contient les éléments de fonction qui
y sont placés. Un **curseur** mobile marque la position de lecture actuelle,
et un en-tête affiche des repères de temps (ou de battement).

* **Faites glisser** une fonction depuis le Function Manager du panneau
  droit sur une track pour l'ajouter au show à ce moment-là.
* **Cliquez** sur un élément pour le sélectionner ; activez la sélection
  multiple (panneau droit) pour en sélectionner plusieurs.
* **Faites glisser** les éléments le long d'une track pour changer leur
  moment de lecture, ou entre les tracks.
* **Double-cliquez** sur un élément pour ouvrir l'éditeur propre de la
  fonction sous-jacente.

## Barre d'outils

En haut :

| Bouton | Ce qu'il fait |
|--------|--------------|
| **Name** | Le nom du show. |
| ![](../basics/color.svg?resize=48,48) **Show items color** | Définit la couleur des éléments de timeline sélectionnés, pour coder votre show par couleur. |
| ![](../basics/lock.svg?resize=48,48) **Lock / Unlock** | Verrouille les éléments sélectionnés afin qu'ils ne puissent pas être déplacés ou redimensionnés accidentellement (l'icône bascule entre lock et unlock). |
| ![](../basics/grid.svg?resize=48,48) **Snap to grid** | Fait que les éléments s'accrochent à la grille temporelle lorsque vous les déplacez. |
| <i class="fa fa-arrows-left-right-to-line fa-2x"></i> **Stretch the original function** | Lorsqu'activé, redimensionner un élément étire la temporisation de la fonction sous-jacente pour s'adapter, plutôt que de simplement la rogner. |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i> **Remove the selected items** | Retire les éléments sélectionnés du show. (Les fonctions d'origine ne sont **pas** supprimées.) |
| <i class="fa fa-copy fa-2x"></i> **Copy** | Copie les éléments sélectionnés dans le presse-papiers. |
| <i class="fa fa-paste fa-2x"></i> **Paste** | Colle les éléments du presse-papiers à la position du curseur. |
| **Time display** | L'heure actuelle du curseur. |
| <i class="fa fa-play fa-2x"></i> **Play / Pause** | Lit ou met en pause/reprend le Show depuis la position du curseur. |
| <i class="fa fa-stop fa-2x"></i> **Stop / Rewind** | Arrête la lecture du Show (appuyez à nouveau pour revenir au début). |
| **Markers** | La division temporelle affichée dans l'en-tête : **Time**, ou des battements en **BPM 4/4**, **3/4** ou **2/4**. |
| <i class="fa fa-2x fa-magnifying-glass-minus"></i><i class="fa fa-2x fa-magnifying-glass-plus"></i> **Zoom** | Zoome sur la timeline en avant ou en arrière le long de l'axe du temps. |

## Tracks

Chaque track est une ligne de la timeline.

* Utilisez le contrôle <i class="fa fa-plus" style="color:limegreen"></i>
  **Create a new track** pour ajouter une track.
* Lorsqu'une track est sélectionnée, les flèches <i class="fa fa-angle-up"></i> /
  <i class="fa fa-angle-down"></i> **move track up / down** (en haut à gauche
  de la timeline) la réordonnent parmi les autres tracks.

## L'outil de temporisation

Le bouton <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>
**Timing** dans le panneau droit ouvre l'**outil de temporisation**, un
panneau permettant d'ajuster la position et la durée exactes des éléments
sur la timeline sans avoir à les faire glisser à la main. C'est le pendant
précis du glisser-déposer : parfait pour aligner des cues à l'image près, ou
pour décaler toute une sélection d'une quantité fixe.

Tout dans l'outil suit le réglage **Markers** du show : lorsque la timeline
est en mode **Time**, les valeurs sont affichées et saisies en temps (heures,
minutes, secondes, millisecondes) ; lorsqu'elle est dans l'un des modes
**BPM**, elles sont affichées et saisies en battements.

L'outil est divisé en trois sections.

### Alignment

Accroche les éléments sélectionnés au **curseur** de lecture :

* **Align start to cursor** — déplace chaque élément sélectionné pour qu'il
  *commence* à la position du curseur.
* **Align end to cursor** — étire ou rétrécit chaque élément sélectionné pour
  qu'il *se termine* à la position du curseur (en gardant son début où il
  est).

### Timings

Affiche le **Start time**, le **End time** et la **Duration** de l'élément
sélectionné. Cliquez sur l'une des trois valeurs pour révéler à sa place un
éditeur compact **h / m / s / ms** (ou battements), tapez la valeur exacte,
et l'élément se met à jour immédiatement :

* Avec un **seul élément** sélectionné, la valeur saisie est appliquée de
  manière **absolue** — l'élément est placé exactement là.
* Avec **plusieurs éléments** sélectionnés, les champs affichent *Multiple*
  et toute modification est appliquée de manière **relative** — le même
  décalage est ajouté à chaque élément sélectionné, ce qui permet de décaler
  tout un bloc, par exemple, de +2 secondes en une seule fois.

Les éléments verrouillés (voir le bouton lock de la barre d'outils) restent
inchangés.

### Cut/Insert

Ajoute ou retire une durée sur l'**ensemble du show** à la position du
curseur — vous pouvez ainsi créer de la place pour une nouvelle section, ou
combler un vide, et tout ce qui suit le curseur se décale en conséquence :

* **Length** — cliquez pour définir la durée à couper ou à insérer (dans le
  même éditeur h / m / s / ms ou battements).
* **Insert time** — repousse plus tard tout ce qui suit le curseur de
  *Length*, ouvrant un espace vide.
* **Cut time** — retire une durée de *Length* à partir du curseur, en
  avançant tout ce qui la suit.

## Panneau droit

Dans le Show Manager, le panneau droit est le
[Function Manager](/function-manager) habituel, vous pouvez donc faire
glisser n'importe quelle fonction sur la timeline. Il gagne également le
bouton <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>
**Timing** décrit ci-dessus.
