---
title: 'DMX View'
date: '13:59 27-06-2026'
taxonomy:
    category:
        - docs
---

La **DMX View** affiche vos fixtures sous forme d'une liste continue de
panneaux, un par fixture, chacun affichant ses canaux individuels et leurs
**valeurs en direct**. C'est la meilleure vue pour vérifier ce que chaque
canal émet actuellement et pour régler manuellement un seul canal.

Elle fait partie des quatre vues disponibles depuis la barre d'outils en haut
de l'espace de travail [Fixtures and Functions](/fixtures-and-functions).
Utilisez le **sélecteur d'univers** dans cette barre d'outils pour limiter la
vue à un seul univers.

## Les panneaux de fixtures

Chaque fixture est représenté sous forme d'un petit panneau listant ses
canaux. Pour chaque canal, vous pouvez voir sa valeur DMX actuelle (0–255),
mise à jour en direct à mesure que la sortie change — qu'elle soit pilotée
par votre contrôle manuel, une fonction en cours d'exécution, ou une entrée
externe.

Les panneaux s'organisent pour remplir la largeur disponible et passent à la
ligne selon les besoins. Utilisez les barres de défilement (ou les boutons de
**zoom** dans la barre d'outils) si vous avez beaucoup de fixtures.

## Modifier la valeur d'un canal

Cliquez sur un canal pour ouvrir un outil de contrôle pour celui-ci. Selon le
type de canal, il s'agit d'un slider ou d'un sélecteur de preset, permettant
de définir directement la valeur de ce canal unique. La nouvelle valeur est
envoyée immédiatement à la sortie.

C'est un moyen rapide de tester un canal individuel, ou d'ajuster une valeur
sans ouvrir les outils de capacité complets du panneau gauche.

## Paramètres de la vue

Cliquez sur le bouton **paramètres** (l'icône « barres ») dans la barre
d'outils pour ouvrir le panneau de paramètres de la DMX View à droite. Il
contient une section **Channels** qui contrôle la façon dont chaque canal est
étiqueté dans les panneaux de fixtures :

* **Show addresses** — lorsqu'activé, chaque canal affiche son numéro
  d'adresse DMX au-dessus de la valeur. Désactivez-le pour un affichage plus
  compact qui ne montre que les valeurs des canaux.
* **Relative addresses** — choisit comment ces adresses sont numérotées
  (pertinent uniquement lorsque **Show addresses** est activé) :
  * **Off** — les canaux affichent leur adresse DMX **absolue** dans
    l'univers. Pour un fixture patché à l'adresse 10, ses canaux sont
    étiquetés 11, 12, 13, … (l'adresse de départ du fixture plus le décalage
    du canal).
  * **On** — les canaux affichent leur adresse **relative au fixture**,
    toujours à partir de 1. Les canaux du même fixture sont étiquetés 1, 2,
    3, … quel que soit l'endroit où il est patché.

  Utilisez les adresses absolues lorsque vous devez faire correspondre ce que
  rapporte la console ou une feuille de patch ; utilisez les adresses
  relatives lorsque la position d'un canal au sein du fixture lui-même vous
  importe.

## Sélectionner des fixtures

La sélection des fixtures ici fonctionne conjointement avec le reste de
l'espace de travail : un fixture sélectionné dans la DMX View est également
sélectionné dans les autres vues et dans les outils de canaux du panneau
gauche, ce qui permet de combiner l'édition directe des canaux avec les
contrôles de capacité de niveau supérieur.
