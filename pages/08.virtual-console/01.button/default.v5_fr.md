---
title: Button
date: '14:26 21-08-2023'
---

Un **Button** est le widget le plus simple de la
[Virtual Console](/virtual-console) : appuyer dessus déclenche une fonction.
C'est l'élément de base de la plupart des consoles — un bouton par scène,
chase ou effet que l'on souhaite lancer.

Pour attacher une fonction, la glisser depuis le Function Manager sur le
bouton, ou utiliser les réglages du bouton.

## Settings

* **Attached Function** — la fonction contrôlée par ce bouton. Utiliser
  **Detach the current function** pour la retirer.

* **Pressure behaviour** — ce que fait l'appui sur le bouton :
  * **Toggle Function on/off** — démarre la fonction au premier appui, l'arrête
    au suivant. Le bouton reste allumé tant que la fonction est en cours
    d'exécution.
  * **Flash Function (only for Scenes)** — exécute la scène uniquement tant
    que le bouton est maintenu enfoncé, puis l'arrête. Avec un temps de
    **Fade out**, le look du flash s'estompe au relâchement.
  * **Toggle Blackout** — active et désactive le blackout de toute
    l'installation.
  * **Stop all Functions** — arrête toutes les fonctions en cours d'exécution
    (un bouton panique).
  * **Adjust Function intensity** — le bouton règle l'intensité d'une fonction
    à un niveau fixe plutôt que de la démarrer/l'arrêter.

* **Flash properties** (affichées pour le comportement Flash) :
  * **Override priority / Force LTP** — fait en sorte que le flash prenne le
    dessus sur les autres fonctions contrôlant les mêmes canaux, de sorte que
    le look du flash l'emporte tant qu'il est maintenu.

## Astuces

* Combiner des boutons avec un [Solo Frame](../solo-frame) afin qu'appuyer
  sur l'un d'eux arrête automatiquement les autres — idéal pour une rangée de
  looks mutuellement exclusifs.
* Ajouter une **entrée externe** ou un **raccourci clavier** (onglet External
  controls) pour déclencher le bouton depuis du matériel ou le clavier.
