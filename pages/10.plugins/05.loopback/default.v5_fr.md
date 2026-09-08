---
title: Loopback
date: '05:14 22-08-2023'
---

Introduction
------------

Le plugin Loopback fournit un moyen de contrôler des widgets de [Virtual Console](/virtual-console) depuis des Scenes et d'autres [Fonctions](/basics/glossary-and-concepts#functions). Les données que QLC+ envoie vers le port Output sont rebouclées vers le port Input, où elles peuvent être utilisées pour un contrôle externe. Bien entendu, le port Output et le port Input peuvent être rattachés à des univers différents.

Le plugin fournit 4 lignes indépendantes.

Ce plugin s'adresse principalement aux utilisateurs avancés -- contrairement aux autres plugins d'input/output, ce plugin ne contrôle aucun périphérique réel.

Configuration
-------------

Le plugin Loopback ne dispose d'aucune configuration. Il suffit d'attacher l'Input et l'Output aux univers souhaités.

Exemples
--------

### Boutons qui règlent un slider (submaster ou normal) à une valeur prédéfinie

Ces boutons peuvent avoir un temps de fondu associé ; ces changements peuvent donc être progressifs.

Étapes :

1.  Réglez un univers pour l'output Loopback (U1), et réglez l'univers d'input du slider sur l'Input Loopback (U2). Disons que le contrôle externe des sliders est réglé sur le canal 14.
2.  Ajoutez un canal dimmer à U1 à l'adresse 14. Dans la boîte de dialogue des modificateurs de canal, réglez-le sur LTP (afin que si le bouton s'éteint, le slider ne passe pas à zéro).
3.  Créez des scenes avec les valeurs de slider souhaitées pour le canal 14 dans l'univers U1. Vous pouvez également définir des temps de fondu.
4.  Créez des boutons pour les scenes.
