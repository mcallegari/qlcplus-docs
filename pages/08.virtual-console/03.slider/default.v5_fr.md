---
title: Slider
date: '03:02 22-08-2023'
---

Un **Slider** est un fader dans la [Virtual Console](/virtual-console). Selon
sa configuration, il peut contrôler le niveau d'un ensemble de canaux, se
comporter comme un submaster, piloter le Grand Master, ou régler un attribut
d'une fonction. Le widget **Knob** est le même contrôle dessiné sous forme de
molette rotative plutôt que de fader.

## Settings

### Display Style

* **DMX Value / Percentage** — si l'affichage du slider montre la valeur DMX
  brute (0–255) ou un pourcentage.
* **Normal / Inverted** — la direction du slider (en haut = maximum, ou en
  haut = minimum).

### Slider Mode

Le mode détermine ce que contrôle réellement le slider :

* **Level** — contrôle le niveau d'un ensemble choisi de **channels** (le
  mode le plus courant). Voir *Level mode* ci-dessous.
* **Adjust** — règle un **attribut** d'une fonction attachée (par exemple son
  intensité ou un attribut personnalisé).
* **Submaster** — le slider agit comme un submaster, mettant à l'échelle le
  niveau des widgets contenus dans son frame.
* **Grand Master** — le slider contrôle le Grand Master (le niveau master
  global).

### Function Control (mode Adjust)

* **Attribute** — quel attribut de la fonction est réglé par le slider.
* **Detach the current function** — retire la fonction attachée.

### Level mode

* **Channels** — les canaux pilotés par le slider. Utiliser **Add/Remove
  channels** pour choisir les canaux des fixtures.
* **Show flash button** — ajoute au slider un bouton de flash momentané qui
  le fait passer au maximum tant qu'il est enfoncé.
* **Click & Go button** — ajoute à côté du slider un sélecteur rapide de
  couleur/preset :
  * **None**, **RGB/CMY** (sélecteur de couleur) ou **Gobo/Effect/Macro**
    (sélecteur de preset).
* **Monitor channel levels** — le slider suit (surveille) le niveau de sortie
  réel de ses canaux.
* **Values range** — **Upper limit** et **Lower limit** limitent la plage
  entre laquelle se déplace le slider.

### Grand Master mode

* **Grand Master mode** — **Reduce values** (mise à l'échelle
  proportionnelle) ou **Limit values** (plafonnement).
* S'applique uniquement aux **Intensity channels** ou à **All channels**.

### External input

* **Catch up with the external controller input value** — lorsqu'il est
  associé à un fader physique, le slider ne commence à bouger qu'une fois
  que le fader matériel dépasse la valeur actuelle, ce qui évite les sauts
  brusques ("pickup"/"soft takeover").

## Astuces

* Utiliser le mode **Level** avec un bouton Click & Go pour créer un seul
  fader qui règle à la fois l'intensité et la couleur d'un groupe de
  fixtures.
* Utiliser le mode **Submaster** dans un frame de boutons/sliders pour
  ajouter un niveau master sur toute cette section de la console.
