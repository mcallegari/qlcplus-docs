---
title: 'Cue List'
date: '03:34 22-08-2023'
---

Une **Cue List** joue un [Chaser](/function-manager/chaser-editor) une cue
(step) à la fois, dans l'ordre — exactement comme une conduite théâtrale.
C'est le widget de référence pour mener un show scripté où vous avancez
d'un look à l'autre avec un bouton **GO**. La
[Virtual Console](/virtual-console).

Attachez un chaser en le faisant glisser sur le widget ou depuis les
paramètres ; chaque step du chaser devient une cue dans la liste.

## Settings

* **Attached Chaser** — le chaser joué par la cue list. Utilisez **Detach
  the current chaser** pour le retirer.

### Buttons behavior

Configure les boutons de lecture du widget :

* **Play/Stop layout** — quels boutons de transport sont affichés :
  * **Play/Pause + Stop**
  * **Play/Stop + Pause**
* **Next/Previous (when chaser is not running)** — ce que font les boutons
  next/previous lorsque rien n'est encore en cours de lecture :
  * **Run from first/last cue** — démarre la lecture depuis la
    première/dernière cue.
  * **Run from next/previous cue** — démarre depuis la cue
    suivante/précédente.
  * **Select next/previous cue** — déplace simplement la sélection sans
    démarrer la lecture.
  * **Do nothing**.

### Side fader

Un fader optionnel à côté de la cue list :

* **Mode** :
  * **None** — aucun fader latéral.
  * **Crossfade** — le fader effectue manuellement le fondu enchaîné entre
    la cue actuelle et la suivante, pour des fondus manuels de style
    théâtral.
  * **Steps** — le fader parcourt les steps de la cue list.

## Tips

* Utilisez le fader latéral **Crossfade** lorsque vous voulez réaliser les
  fondus manuellement sur un GO, comme sur une console de théâtre.
* Associez **Next** (GO) à un raccourci clavier ou à une pédale via l'onglet
  External controls pour un fonctionnement mains libres.
