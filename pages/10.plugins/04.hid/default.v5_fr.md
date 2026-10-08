---
title: HID
date: '05:13 22-08-2023'
---

Introduction
------------

Le plugin HID prend en charge le [système HID](https://en.wikipedia.org/wiki/Human_interface_device) sur Windows et Linux.  
HID est une méthode générique de mise en correspondance des périphériques d'input/output tels que joysticks, pavés tactiles, claviers, souris, etc.  
Le plugin HID de QLC+ vise à ne prendre en charge que les joysticks et l'adaptateur FX5 USB DMX.

Prérequis
------------

Aucune exigence particulière n'est nécessaire pour ce plugin. Assurez-vous simplement que votre système d'exploitation reconnaît bien le périphérique que vous allez utiliser. Sur Linux, vous pourriez avoir besoin de certains modules noyau (normalement fournis par les distributions modernes) et sur Windows, d'un driver fourni par le fabricant du périphérique.

Joysticks
---------

QLC+ tente de détecter les fonctionnalités spécifiques du joystick, comme les axes et les boutons, en tant que canaux individuels pouvant être mappés à vos widgets de Virtual Console.  
Les axes et les boutons sont mappés par QLC+ dans un ordre séquentiel. Ainsi, par exemple, si votre joystick prend en charge 2 axes et 4 boutons, ils apparaîtront dans les boîtes de dialogue de mapping d'input de cette manière :  

* canal 1 : Axe X
* canal 2 : Axe Y
* canal 3 : Bouton 1
* canal 4 : Bouton 2
* canal 5 : Bouton 3
* canal 6 : Bouton 4

Interface Nodle USB DMX
-----------------------

L'interface Nodle USB DMX est disponible en deux versions : pour la version en kit à monter soi-même, elle s'appelle
[Nodle U1](https://www.dmxcontrol-projects.org/en/projects/nodle-u1-interface.html), et pour la version préfabriquée, elle s'appelle [Nodle R4S](https://www.dmxcontrol-projects.org/en/projects/nodle-r4s-interface.html) (prête pour le spectacle).

Les deux peuvent recevoir et transmettre des données DMX normalement, mais peuvent également fusionner le DMX en interne. Lorsqu'elle est activée via la boîte de dialogue
de configuration, l'appareil fusionne toutes les données DMX provenant de QLC+ (si sélectionné comme output) avec toutes les
données DMX provenant de l'input de l'appareil, selon la méthode HTP (Highest Takes Precedence).

Si ce mode est activé, le mode de fusion persiste même lorsque QLC+ est fermé, tant que l'appareil est alimenté.
Ainsi, l'appareil est transparent aux données DMX entrantes et se contente de les retransmettre.

L'appareil met en mémoire tampon les données DMX entrantes. Ainsi, lorsque la connexion DMX entrante est interrompue, la dernière
trame DMX est répétée jusqu'à ce que de nouvelles données DMX arrivent ou que l'appareil soit réinitialisé.

Consultez le manuel du produit pour plus d'informations ou pour du dépannage.

FX5 USB DMX
-----------

Bien qu'il ne soit plus disponible, l'adaptateur FX5 USB DMX est toujours pris en charge, à la fois pour la sortie et l'entrée de
données DMX. Il offre les mêmes fonctionnalités que le Nodle USB DMX. Consultez le manuel du produit pour la connexion et les problèmes spécifiques.
