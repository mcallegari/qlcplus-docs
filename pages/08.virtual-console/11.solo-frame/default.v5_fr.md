---
title: 'Solo Frame'
date: '03:43 22-08-2023'
---

Un **Solo Frame** est un [Frame](../frame) spécial dans la
[Virtual Console](/virtual-console) avec une règle supplémentaire : une
seule fonction en son sein peut jouer à la fois. Démarrer une fonction
arrête automatiquement toute autre fonction en cours d'exécution depuis un
widget du même frame.

Cela fait du Solo Frame le conteneur naturel pour tout groupe de looks qui
doivent être mutuellement exclusifs — une rangée de boutons de couleur, une
banque d'« états » de scène, ou une palette où sélectionner un nouveau look
remplace le précédent. Sans cela, il faudrait arrêter manuellement l'ancien
look avant de démarrer le nouveau.

Un Solo Frame est le même widget qu'un [Frame](../frame) et partage tous ses
réglages ; il ajoute simplement le comportement solo et la section
**Solo Frame Options**.

## Comment fonctionne le comportement solo

* Lorsqu'un widget à l'intérieur du frame **démarre une fonction**, toute
  autre fonction démarrée par des widgets du même frame est **arrêtée**.
* Cela s'applique aux widgets directement contenus dans le frame (par
  exemple ses [Buttons](../button)), offrant un sélecteur un-à-la-fois
  propre.
* Cela n'affecte que les fonctions démarrées *depuis l'intérieur de ce
  frame* — les fonctions s'exécutant ailleurs sur la console ne sont pas
  concernées.

## Settings

Un Solo Frame possède tous les [réglages du Frame](../frame#settings) —
Header, Pages, Shortcuts — plus :

### Solo Frame Options

* **Exclude monitored functions** — empêche que les fonctions simplement
  *surveillées* soient arrêtées par la règle solo. Utilisez ceci lorsqu'un
  widget du frame surveille/reflète l'état d'une fonction plutôt que de la
  jouer activement, afin que la surveillance ne soit pas interrompue à
  chaque pression d'un autre bouton.

## Créer un Solo Frame

* Faites glisser **Solo Frame** depuis la liste des widgets sur la page,
  **ou**
* Lors de la création d'une [Button Matrix](../button-matrix) ou d'une
  [Slider Matrix](../slider-matrix), choisissez **Solo** comme type de
  frame pour envelopper toute la grille dans un Solo Frame.

## Tips

* Placez une palette de boutons de couleur ou de scène dans un Solo Frame
  pour qu'en appuyer un annule toujours le précédent — sans besoin d'une
  étape « stop ».
* Combinez avec **Pages** (depuis les réglages du Frame) pour construire un
  sélecteur paginé, un-à-la-fois, qui se comporte en mode solo sur chaque
  page.
