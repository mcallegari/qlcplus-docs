---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

**DMX Dump** capture les valeurs que vous êtes actuellement en train de sortir
et les enregistre dans une **Scene**. C'est le moyen le plus rapide de
construire une scène : définissez un look à la main à l'aide des outils de
canal, de la vue DMX ou du Simple Desk, puis « déchargez » ce look dans une
fonction que vous pourrez rappeler plus tard.

## Comment ça fonctionne

Au fur et à mesure que vous modifiez manuellement les valeurs des canaux,
QLC+ garde une trace de chaque canal que vous avez touché — ce sont les
**valeurs de dump**. Ce sont les candidats qui seront écrits dans une scène
lors du dump.

Le bouton **DMX Dump** se trouve dans la barre d'outils supérieure de
l'application (une petite icône « dump »). Une **bulle** rouge sur le bouton
indique combien de canaux sont actuellement capturés. Lorsque la bulle
affiche `0`, rien n'a encore été touché et il n'y a rien à décharger.

Vous pouvez effacer les valeurs capturées à tout moment sans effectuer de dump
en utilisant **Reset dump channels** dans le panneau de droite (raccourci
**Ctrl+R**). Les valeurs capturées sont également réinitialisées
automatiquement dans certaines situations, comme le démarrage d'un nouveau
projet.

> Le bouton de dump ne fonctionne que lorsque l'édition des fonctions est autorisée.

## Démarrer un dump

Il existe deux façons d'ouvrir la boîte de dialogue de dump :

* **Cliquer** sur le bouton DMX Dump dans la barre d'outils.
* **Glisser** le bouton DMX Dump sur une fonction dans le Function Manager.
  Cela présélectionne cette fonction comme scène existante dans laquelle
  effectuer le dump (voir ci-dessous).

## La boîte de dialogue DMX Channel Dump

La boîte de dialogue comporte deux sections.

### Target Scene

Choisissez où vont les valeurs capturées :

* **Dump to a new Scene** — crée une nouvelle scène. Un nom par défaut
  (*New Scene N*) est suggéré dans la zone de texte ; modifiez-le à votre
  convenance.
* **Dump to existing Scene** — ajoute les valeurs capturées à une scène que
  vous possédez déjà. La cible est la scène actuellement sélectionnée dans le
  Function Manager ; si aucune n'est sélectionnée, cette option affiche
  *(None selected)*. (Glisser le bouton de dump sur une fonction sélectionne
  automatiquement cette option.)

### Channels to dump

Choisissez lesquels des canaux capturés sont écrits :

* **Dump all the available channels** — décharge tous les canaux de tous les
  univers et fixtures, pas seulement ceux que vous avez touchés. La boîte de
  dialogue indique combien d'univers et de fixtures cela concerne.
  * **Dump only non-zero values** — (disponible avec l'option ci-dessus)
    ignore les canaux qui sont à zéro, de sorte que la scène ne contienne que
    les canaux qui font réellement quelque chose.
* **Dump the selected fixture channels** — décharge uniquement les canaux des
  fixtures actuellement sélectionnés. Cette option est disponible lorsque les
  fixtures sélectionnés ont des canaux qui ont été touchés.

#### Detected channel types

Lorsque vous déchargez les canaux des fixtures sélectionnés, la boîte de
dialogue liste les **types de canal** trouvés parmi eux — par exemple
Intensity, RGB/CMY/WAUV, Colour macros, Gobo, Pan, Tilt, Speed,
Shutter/Strobe, Prism, Beam, Effect et Maintenance. Chaque type dispose d'une
case à cocher permettant de l'inclure ou de l'exclure. Ne cochez que les
types de canal que vous souhaitez inclure dans la scène — par exemple,
décharger les couleurs mais laisser l'intensité de côté.

## Terminer

Confirmez la boîte de dialogue pour créer ou mettre à jour la scène avec les
canaux choisis. La nouvelle scène (ou celle mise à jour) apparaît alors dans
le Function Manager, prête à être modifiée, prévisualisée et déclenchée comme
n'importe quelle autre fonction.
