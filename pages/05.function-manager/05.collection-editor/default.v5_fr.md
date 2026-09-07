---
title: 'Éditeur de Collection'
date: '12:21 21-08-2023'
---

Une **Collection** exécute plusieurs fonctions **en même temps**. Là où un
chaser joue ses membres l'un après l'autre, une collection les déclenche tous
ensemble — utile pour regrouper des aspects et des effets qui doivent toujours
démarrer comme un seul. L'Éditeur de Collection s'ouvre dans le panneau droit de
l'espace de travail [Fixtures and Functions](/fixtures-and-functions).

## Barre d'outils

| Bouton | Ce qu'il fait |
|--------|--------------|
| **Name** | Le nom de la collection (barre supérieure). |
| <i class="fa fa-chevron-left fa-2x"></i> **Back** | Retourne à l'éditeur précédent. |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a function** | Ouvre le Gestionnaire de Fonctions dans un panneau latéral. Glissez des fonctions depuis celui-ci vers la liste. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected function** | Supprime les membres sélectionnés (demande une confirmation). |

## La liste des fonctions

La zone principale liste les fonctions qui appartiennent à la collection.

| Action | Résultat |
|--------|--------|
| **Clic** | Sélectionne une fonction. |
| **Ctrl+clic** / **Shift+clic** | Ajoute à la sélection / sélectionne une plage. |
| **Glisser** depuis le Gestionnaire de Fonctions | Ajoute les fonctions glissées à la position de dépôt. |
| **Glisser** au sein de la liste | Déplace une fonction vers une autre position. |
| **Double-clic** | Ouvre l'éditeur propre à cette fonction. |

L'ordre de la liste n'est qu'une commodité pour la lecture et l'organisation de
la collection — il n'affecte pas la lecture, puisque chaque membre démarre au
même instant.

Lorsque la collection est déclenchée, toutes les fonctions de cette liste
démarrent simultanément, et la collection reste active jusqu'à ce qu'elles
soient toutes terminées.
