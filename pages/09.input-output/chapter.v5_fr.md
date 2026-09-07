---
title: 'Input Output'
date: '04:54 22-08-2023'
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
### Chapitre 8

# Input/Output

Le contexte **Input/Output** est l'endroit où vous connectez les **univers**
internes de QLC+ au monde réel — les plugins et dispositifs qui envoient le
DMX vers vos lumières, et les contrôleurs qui envoient des données en
entrée. Par défaut, QLC+ fournit plusieurs univers, que vous pouvez ajouter
ou supprimer selon vos besoins.

Le mappage input/output est enregistré dans le projet en cours, vous pouvez
donc déplacer un projet vers un autre ordinateur ou système d'exploitation
sans avoir à le reconfigurer. Si aucun projet n'est chargé, QLC+ conserve le
mappage comme configuration de « repli ».

Ouvrez le contexte depuis l'onglet ![](/basics/inputoutput.svg?resize=24,24)
**Inputs/Outputs** en bas de l'écran principal de QLC+.

## Disposition

Le contexte est un schéma de patch avec un panneau de chaque côté :

* **Panneau gauche** — les outils pour le côté **input** de l'univers
  sélectionné (plugins d'input, profils d'input, et configuration
  plugin/audio).
* **Centre** — une rangée de blocs, un par **univers** (plus un bloc audio
  en haut). Les patchs d'input se raccordent à gauche de chaque bloc, ceux
  d'output à droite, dessinés comme des **fils** de connexion.
* **Panneau droit** — les outils pour le côté **output**, plus le blackout
  et les boutons d'ajout/suppression d'univers.

Cliquez sur un bloc d'univers pour le sélectionner ; les panneaux latéraux
agissent alors sur cet univers.

## Le bloc d'univers

Chaque univers est dessiné comme un bloc central avec ses fils :

* **Nom** — double-cliquez sur le bloc pour renommer l'univers avec quelque
  chose de significatif (« Cour », « Lyres », …).
* <i class="fa fa-arrow-right-long"></i> **Passthrough** — le petit bouton
  flèche active/désactive le passthrough pour l'univers (voir
  [ci-dessous](#passthrough-de-lunivers)).
* **F — Feedback** — lorsqu'un patch d'input est présent, le bouton **F**
  active/désactive la ligne de feedback vers le contrôleur.

## Patching

Le patching se fait par **glisser-déposer** :

* Ouvrez la liste des plugins d'**input** ou d'**output** depuis le panneau
  latéral (le bouton ![](/basics/inputoutput.svg?resize=24,24)), puis
  **faites glisser une ligne de plugin** sur le côté gauche (input) ou droit
  (output) d'un bloc d'univers. Un fil est dessiné pour montrer la
  connexion.
* Chaque univers peut avoir **une seule ligne d'input** mais **plusieurs
  lignes d'output** (déposez d'autres lignes de plugin à droite pour les
  ajouter).
* Pour **retirer** un patch, faites glisser son bloc de patch loin de
  l'univers et déposez-le sur la corbeille
  <i class="fa fa-trash-can"></i> qui apparaît en bas de l'écran.

Si un plugin nécessite une configuration avant que ses lignes n'apparaissent,
utilisez le bouton ![](/basics/configure.svg?resize=24,24) **configuration
du plugin** dans le panneau latéral (il n'est affiché que lorsque le plugin
prend en charge des réglages manuels).

## Ajouter / supprimer des univers

Le panneau droit contient les boutons de gestion des univers :

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new universe** | Ajoute un nouvel univers, nommé « Universe X » où X est un numéro progressif (également son ID). |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected universe** | Supprime le dernier univers. **Attention — cela peut affecter les fixtures qui y sont patchés et ne peut pas être annulé.** |

## Blackout

Le panneau droit dispose également d'un interrupteur blackout
(<i class="fa fa-eye"></i> / <i class="fa fa-eye-slash"></i>) qui force
**tous les patchs d'output** à zéro — une extinction instantanée de tout le
rig. Basculez-le à nouveau pour rétablir la sortie.

## Passthrough de l'univers

Lorsque le passthrough est activé, un univers se contente de transmettre ce
qu'il reçoit sur sa ligne d'**input** vers sa ligne d'**output**. Ceci est
utile pour :

* **La conversion de protocole** — par exemple mapper de manière
  transparente un réseau Art-Net vers un adaptateur DMX USB ou MIDI.
* **La surveillance de données externes** — patcher des fixtures et observer
  les données entrantes dans le moniteur DMX.
* **La fusion avec une console externe** — laisser une console d'éclairage
  externe contrôler certains canaux pendant que QLC+ contrôle des lumières
  intelligentes sur le même univers.
* **Les configurations Raspberry Pi** — programmer sur un PC, puis confier
  la lecture à un Pi qui reste câblé aux appareils.

Les données de passthrough ne sont pas affectées par le Grand Master ou les
modificateurs de canal. Elles sont fusionnées en HTP avec la sortie de QLC+
aux endroits où des fixtures sont patchés (les réglages de canal LTP/HTP ne
sont pas utilisés). Le blackout **affecte** en revanche les données de
passthrough.

## Audio

Le bloc en haut de la liste représente les dispositifs d'input et d'output
**audio**. Sélectionnez-le, puis utilisez les boutons
![](/basics/audiocard.svg?resize=24,24) dans les panneaux latéraux pour
choisir la source d'input audio et le dispositif d'output, et le bouton
![](/basics/configure.svg?resize=24,24) pour ouvrir la configuration audio.

## Input et feedback

Lorsqu'une ligne d'input est patchée, elle est activée immédiatement, vous
pouvez donc la tester : déplacez un fader ou un bouton sur votre contrôleur
et, s'il fonctionne, vous verrez une activité d'input sur cet univers.

Si votre contrôleur dispose d'un canal de retour, QLC+ peut lui envoyer un
**feedback** visuel/mécanique (par exemple pour allumer des boutons ou
motoriser des faders sur une Behringer BCF2000). Activez-le avec le bouton
**F** sur le bloc d'univers. Le feedback est actuellement pris en charge via
MIDI, OSC et loopback.

Pour tirer le meilleur parti d'un contrôleur externe, configurez un
**profil d'input** — voir [Profils d'Input](input-profiles).
