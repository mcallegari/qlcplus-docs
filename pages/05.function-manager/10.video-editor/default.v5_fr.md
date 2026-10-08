---
title: 'Éditeur Vidéo'
date: '04:33 22-08-2023'
---

Une fonction **Video** joue un fichier vidéo (ou une image fixe, ou un flux
réseau) sur un écran. Elle permet à QLC+ de piloter la projection et le
contenu à l'écran en parallèle de l'éclairage. L'éditeur Video s'ouvre dans
le panneau droit de l'espace de travail
[Fixtures and Functions](/fixtures-and-functions) ; lorsque vous créez une
fonction vidéo, il vous est d'abord demandé de choisir le fichier.

## Properties

* **Name** — le nom de la fonction (barre supérieure).
* **File name** — le fichier vidéo ou image à jouer. Utilisez le bouton
  **...** pour choisir un fichier, ou le bouton **globe** pour saisir une
  **URL** pour un flux réseau.
* **Duration**, **Resolution**, **Video Codec**, **Audio Codec** — détails en
  lecture seule du média sélectionné.
* **Playback mode** — **Single shot** (lecture unique) ou **Looped**
  (répétition).
* **Output screen** — l'écran/moniteur connecté sur lequel la vidéo est
  affichée.
* **Output mode** — **Windowed** (fenêtré) ou **Fullscreen** (plein écran).
* **Geometry** — **Original** (utilise la taille propre du média) ou
  **Custom**. Avec Custom sélectionné, vous pouvez régler :
  * **Position** — la position **X** / **Y** de la fenêtre vidéo.
  * **Size** — la largeur **W** et la hauteur **H** de la fenêtre vidéo.
* **Rotation** — fait pivoter la vidéo autour des axes **X**, **Y** et **Z**
  (en degrés).
* **Layer** — l'ordre d'empilement (1–100) lorsque plusieurs vidéos sont
  lues sur le même écran ; les calques plus élevés apparaissent au-dessus.
