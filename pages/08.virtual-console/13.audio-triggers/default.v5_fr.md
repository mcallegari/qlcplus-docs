---
title: 'Audio Triggers'
date: '03:46 22-08-2023'
---

Un widget **Audio Triggers** écoute l'audio en direct (depuis l'entrée audio
de l'ordinateur) et utilise son **spectre de fréquences** pour piloter des
fonctions, des canaux DMX ou d'autres widgets. C'est ainsi que vous faites
réagir les lumières automatiquement à la musique dans la
[Virtual Console](/virtual-console).

Le son entrant est divisé en un certain nombre de **barres de fréquence**
(des graves aux aigus), et chaque barre peut se voir assigner une cible
qu'elle contrôle pendant que la musique joue.

## Settings

* **Activation threshold** — le niveau qu'une barre doit atteindre avant que
  sa cible soit déclenchée.
* **Deactivation threshold** — le niveau en dessous duquel une barre doit
  redescendre avant que sa cible soit relâchée. (Avoir deux seuils séparés
  évite les scintillements d'activation et de désactivation.)

### Spectrum Bars

* **Number of bars** — en combien de bandes de fréquence le spectre est
  divisé. Plus de barres offrent un contrôle plus fin sur toute la plage de
  fréquences.

### Assignation par barre

Pour chaque barre, vous réglez :

* **Name** — une étiquette pour la barre.
* **Type** — ce que la barre contrôle :
  * **None** — non utilisée.
  * **DMX** — pilote le niveau d'un canal DMX.
  * **Function** — démarre/arrête une fonction. Utilisez **Drop a Function
    here** pour l'assigner.
  * **Widget** — pilote un autre widget de la VC. Utilisez **Drop a VC
    Widget here** pour l'assigner.
* **Information** — affiche l'assignation actuelle.

## Tips

* Assignez les barres des **graves** à des fonctions d'intensité ou de
  strobe et les barres des **aigus** aux changements de couleur pour un look
  classique réactif à la musique.
* Ajustez les **seuils d'activation/désactivation** en fonction du morceau,
  de sorte que les effets se déclenchent sur les beats sans scintiller.
