---
title: 'Fixture Group Manager'
date: '14:33 27-06-2026'
taxonomy:
    category:
        - docs
---

Le **Fixture Group Manager** liste tous les fixtures de votre projet,
organisés par univers, et vous permet de créer des **groupes de fixtures**,
d'inspecter et de renommer des éléments, et de modifier les propriétés des
fixtures et des canaux. Ouvrez-le avec le bouton **Fixture Groups** dans le
panneau gauche de l'espace de travail
[Fixtures and Functions](/fixtures-and-functions).

## L'arborescence

La zone principale est une arborescence. Au niveau supérieur se trouvent les
**univers** ; développez un univers pour voir les **fixtures** qui y sont
patchés, et développez un fixture pour voir ses **heads** et ses **canaux**.
Les **groupes de fixtures** que vous créez apparaissent également ici comme
des nœuds extensibles.

### Sélectionner des éléments

* **Cliquez** sur un élément pour le sélectionner (un univers, groupe,
  fixture, head ou canal). Sélectionner des fixtures ici les sélectionne
  également dans les vues.
* Maintenez **Ctrl** enfoncé pour sélectionner plusieurs éléments à la fois.
* **Double-cliquez** sur un nœud pour le développer ou le réduire.

### Constituer des groupes par glisser-déposer

Faites glisser des fixtures (ou des sélections entières) sur un nœud de
groupe pour les ajouter à ce groupe. Les groupes vous permettent de
sélectionner et de contrôler plusieurs fixtures ensemble dans tout le
programme.

## Boutons de la barre d'outils

* **＋ Add a new fixture group** — crée un nouveau groupe de fixtures vide.
* **－ Remove the selected items** — supprime les fixtures et/ou groupes de
  fixtures sélectionnés. (Retirer un fixture de l'intérieur d'un groupe le
  retire du groupe.)
* **Apply changes to fixtures of the same type** (icône de double
  vérification) — lors de la modification des propriétés de fixture/canal,
  applique également vos modifications à tous les autres fixtures du même
  type. Activer ou désactiver.
* **Search** (loupe) — ouvre une zone de recherche pour filtrer l'arborescence
  par nom de groupe, de fixture ou de canal.
* **Rename the selected items** — renomme l'élément sélectionné. Lorsque
  plusieurs éléments sont sélectionnés, vous pouvez tous les renommer en une
  seule fois avec une numérotation automatique.
* **Inspect the selected item** (icône info) — ouvre un résumé d'informations
  de l'élément sélectionné dans la vue principale (un résumé d'univers/groupe,
  ou un résumé de fixture). Désactiver pour revenir à la vue précédente.
* **Edit the selected item** (icône crayon) — entre en mode édition pour
  l'élément sélectionné :
  * Pour un **groupe de fixtures**, ouvre l'éditeur de groupe dans la vue
    principale.
  * Pour un **fixture** (ou un univers), ouvre l'éditeur de propriétés de
    canaux et élargit le panneau pour afficher les colonnes de propriétés.
* **Add/Remove a linked fixture** (icône de lien) — apparaît lors de
  l'édition d'un fixture ; ajoute ou retire une copie liée du fixture (un
  fixture qui partage la même adresse DMX).

## Propriétés des canaux

Lorsque vous modifiez un fixture, le panneau s'élargit et affiche une rangée
de colonnes pour chaque canal :

* **Name** — le nom du canal.
* **Mode** — le mode de fonctionnement du canal.
* **Flags** — les indicateurs spéciaux du canal.
* **Can fade** — si le canal est autorisé à effectuer des fondus entre les
  valeurs.
* **Behaviour** — comment se comporte le canal lorsque plusieurs fonctions le
  pilotent (précédence).
* **Modifier** — une courbe modificatrice de canal optionnelle.

Ces réglages permettent d'affiner la réponse de chaque canal. Avec **Apply to
fixtures of the same type** activé, les modifications se propagent à tous
les fixtures correspondants.
