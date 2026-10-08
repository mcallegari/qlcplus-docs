---
title: Frame
date: '03:39 22-08-2023'
---

Un **Frame** est un conteneur dans la [Virtual Console](/virtual-console)
qui regroupe d'autres widgets. Utilisez-le pour organiser la console en
sections, pour déplacer et afficher/masquer tout un groupe à la fois, et
pour ajouter des sous-zones multi-pages.

> Pour un frame dans lequel une seule fonction joue à la fois, voir
> [Solo Frame](../solo-frame). Un Solo Frame partage tous les réglages
> ci-dessous et ajoute la règle solo.

## Settings

### Header

* **Show header** — affiche la barre d'en-tête du frame (avec son
  étiquette).
* **Show enable button** — ajoute dans l'en-tête un bouton bascule qui
  active/désactive tous les widgets à l'intérieur du frame en une seule
  fois.

### Pages

Un frame peut héberger plusieurs **pages** propres, transformant un frame
en sous-console paginée :

* **Enable pages** — active la pagination pour le frame.
* **Circular pages scrolling** — revient à la première page depuis la
  dernière.
* **Pages number** — combien de pages a le frame.
* **Clone first page widgets** — copie les widgets de la première page sur
  chaque page, de sorte qu'une disposition commune (par ex. des faders
  master partagés) apparaisse sur toutes les pages.

### Shortcuts

* **Shortcut name** — nomme les raccourcis de page utilisés pour naviguer
  entre les pages du frame.

## Tips

* Déposez des widgets sur un frame pour en faire ses enfants ; déplacer le
  frame les déplace tous.
* Utilisez un [Solo Frame](../solo-frame) pour tout groupe où deux looks ne
  doivent pas être actifs ensemble.
* Combinez **Enable pages** avec **Clone first page widgets** pour créer une
  section paginée qui garde ses contrôles master visibles sur chaque page.
