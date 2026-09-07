---
title: 'Input Profiles'
date: '04:57 22-08-2023'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

## Qu'est-ce qu'un profil d'entrée ?

Un **profil d'entrée** associe les signaux provenant d'un périphérique de
contrôle externe (un contrôleur MIDI, une application OSC, un pupitre DMX, un
joystick, …) à des canaux que QLC+ est capable de comprendre, ce qui permet de
contrôler le spectacle avec le matériel de son choix sans connaître le
protocole sous-jacent. Une fois qu'un profil est assigné à un univers, ses
canaux peuvent être liés à des widgets de la Virtual Console, à des groupes de
canaux et bien plus.

## Sélectionner un profil d'entrée

QLC+ est livré avec de nombreux profils déjà prêts. Pour en assigner un :

1. Ouvrir le contexte ![](/basics/inputoutput.svg?resize=24,24) **Inputs/Outputs**.
2. Sélectionner l'univers sur lequel le périphérique est patché.
3. Ouvrir la liste des **profils d'entrée** depuis le panneau de gauche (le
   bouton **P**).
4. Trouver le profil de son périphérique et le sélectionner. Il s'attache à
   la patch d'entrée de l'univers.

## Créer / modifier un profil

Si votre périphérique ne figure pas dans la liste, vous pouvez créer le
vôtre. Depuis la liste des profils d'entrée, utiliser le bouton
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> pour créer un
nouveau profil, ou en sélectionner un existant et le modifier. Dans les deux
cas, l'**Input Profile Editor** s'ouvre ; la procédure est identique à partir
de là.

## Input Profile Editor

L'éditeur est organisé en onglets, avec une barre d'outils commune pour
ajouter, supprimer et enregistrer les éléments :

| Bouton | Fonction |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Ajouter** | Ajoute un nouveau canal / une nouvelle couleur / un nouveau canal MIDI, selon l'onglet actif. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Supprimer** | Supprime l'élément sélectionné. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard** | (Onglet Input Mapping) Active/désactive l'assistant de détection automatique des canaux (voir plus bas). |
| ![](/basics/filesave.svg?resize=32,32) **Enregistrer ce profil** | Enregistre le profil. Si le fabricant/modèle sont vides, il sera demandé de les renseigner d'abord. |

### General

La zone **General** contient les informations d'identification du profil :

* **Manufacturer** — le fabricant du périphérique. S'il figure déjà dans la
  liste, utiliser exactement la même orthographe et la même casse.
* **Model** — le modèle du périphérique, y compris la version si pertinent
  (par ex. « APC Mini MK2 »).
* **Type** — le type de profil : **MIDI**, **OS2L**, **OSC**, **HID**, **DMX**
  ou **ENTTEC**. Les profils MIDI affichent des champs de message MIDI
  supplémentaires dans l'éditeur de canaux et exposent l'onglet **MIDI
  Channels** ainsi que les paramètres globaux MIDI.

Pour les profils MIDI, une option **MIDI Global Settings** est disponible :
*When MIDI notes are used, send a Note Off when value is 0*.

### Input Mapping

Cet onglet liste les canaux du profil (numéro de canal, nom et type). Il
existe deux façons d'ajouter des canaux.

**Manuelle** — utiliser le bouton
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add** pour saisir
manuellement les détails du canal. Pratique si l'on connaît les codes
MIDI/OSC de son périphérique.

**Automatique** — utiliser le
<i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Wizard**
pour détecter les canaux en actionnant les commandes de son périphérique.
QLC+ ajoute chaque commande dès qu'elle est actionnée. Un plugin d'entrée doit
être patché sur l'univers courant pour que cela fonctionne, et il faut
arrêter l'assistant avant de quitter la page.

> Il n'est pas possible d'ajouter le même canal plus d'une fois à un profil.

#### Propriétés du canal

Lors de l'ajout ou de la modification d'un canal, on définit :

* **Number** — le numéro du canal. QLC+ prenant en charge de nombreux
  plugins, ce numéro peut ne pas être intuitif ; ne le modifier que si l'on
  sait ce que l'on fait.
* **Name** — une étiquette arbitraire décrivant l'objet de la commande.
* **Type** — le type de commande :
  ![](/basics/slider.svg?resize=24,24) **Slider**,
  ![](/basics/knob.svg?resize=24,24) **Knob**,
  ![](/basics/button.svg?resize=24,24) **Button** ou
  ![](/basics/knob.svg?resize=24,24) **Encoder**. Trois types spéciaux —
  ![](/basics/back.svg?resize=24,24) **Previous Page**,
  ![](/basics/forward.svg?resize=24,24) **Next Page** et
  ![](/basics/star.svg?resize=24,24) **Page Set** — sont utilisés pour
  contrôler les frames multi-pages.

Pour les profils **MIDI**, l'éditeur ajoute les champs **Channel**,
**Message**, **Param** et **Note**, qui permettent de saisir la spécification
MIDI de façon plus intuitive (ces valeurs se traduisent en numéro de canal).

#### ![](/basics/slider.svg?resize=24,24) Mouvement du slider

Sélectionner un canal **Slider** révèle son comportement de mouvement :

* **Absolute** (par défaut) — QLC+ utilise la valeur reçue exactement telle
  qu'elle a été envoyée.
* **Relative** — la valeur est traitée comme un mouvement à partir de la
  position actuelle du widget, utile avec un joystick HID pilotant un widget
  [XY Pad](/virtual-console/xy-pad) ou [Slider](/virtual-console/slider). Une
  valeur de **Sensitivity** définit l'intensité du mouvement — plus elle est
  élevée, plus le mouvement est lent ; plus elle est basse, plus il est
  rapide.

#### ![](/basics/knob.svg?resize=24,24) Encoder

Un encodeur est une commande rotative sans fin, toujours relative : le
tourner génère des décalages positifs ou négatifs dans QLC+. Une valeur de
**Sensitivity** définit l'amplitude du décalage ajouté ou soustrait par pas.

#### ![](/basics/button.svg?resize=24,24) Button

Les boutons exposent un comportement global supplémentaire :

* **Generate an extra Press/Release when toggled** — pour les périphériques
  (par ex. Behringer BCF2000) ou logiciels (par ex. TouchOSC) qui n'envoient
  qu'une seule valeur à la pression. QLC+ synthétise le relâchement
  « manquant » afin que les toggles se comportent de manière cohérente.
* **Custom Feedback** — avec **Lower value** et **Upper value**, on force
  l'envoi de valeurs personnalisées en retour lorsque le bouton est
  éteint/allumé, par exemple pour définir la couleur de la LED sur les
  périphériques AKAI APC. Ce réglage est global, mais un widget spécifique de
  la Virtual Console peut le remplacer.

### Colors

Certains contrôleurs peuvent afficher des couleurs sur leurs boutons. Cet
onglet permet de définir un ensemble de couleurs de feedback afin qu'elles
puissent être choisies facilement lors de la modification du feedback des
widgets de la Virtual Console. Utiliser
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add** pour ajouter
une entrée avec :

* **Value** — la valeur que QLC+ doit envoyer au contrôleur pour produire la
  couleur.
* **Color** — la couleur affichée pour cette valeur (un sélecteur de
  couleur).
* **Label** — un nom pour la couleur (par ex. « Blue »).

### MIDI Channels

Pour les périphériques MIDI qui utilisent des canaux MIDI différents selon
les modes de feedback/affichage (par exemple l'AKAI APC Mini MK2), cet onglet
permet d'ajouter les canaux MIDI concernés avec un nom descriptif, via
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add**.

## Enregistrement

Une fois terminé, enregistrer le profil avec le bouton
![](/basics/filesave.svg?resize=24,24) **Save** (il sera demandé de saisir le
fabricant/modèle s'ils manquent). Le nouveau profil apparaît alors dans la
liste des profils d'entrée, prêt à être assigné à un univers comme décrit
ci-dessus.

Notez que certains profils fournis sont des **profils système** et ne
peuvent pas être supprimés à moins de disposer des droits d'administrateur.
