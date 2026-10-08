---
title: Art-Net
date: '05:06 22-08-2023'
---

Introduction
------------

QLC+ prend en charge le [protocole Art-Net](https://en.wikipedia.org/wiki/Art-Net) via un plugin d'input/output qui reçoit et transmet des paquets sur le réseau.  
Aucune exigence supplémentaire n'est nécessaire, puisque QLC+ dispose d'une implémentation native du protocole Art-Net qui fonctionne sur les systèmes Linux, Windows et macOS.  
Le plugin Art-Net peut envoyer et recevoir des paquets depuis plusieurs cartes réseau, adresses virtuelles, le périphérique loopback (127.0.0.1) et plusieurs univers par interface réseau.  
Par défaut, les paquets Art-Net sont transmis en UDP, en utilisant le port par défaut 6454 et l'adresse de broadcast de l'interface sélectionnée (par ex. 192.168.0.255). Lors de l'utilisation du périphérique loopback, les paquets sont toujours transmis en utilisant l'adresse 127.0.0.1.  
Lors de la transmission de plusieurs univers sur la même interface, les paquets seront envoyés par défaut avec un ID d'univers Art-Net égal au numéro d'univers QLC+ moins 1.  
  
Par exemple :  
Univers QLC+ 1 --> Univers Art-Net 0  
Univers QLC+ 2 --> Univers Art-Net 1  
...  
Univers QLC+ 8 --> Univers Art-Net 7  
  
Ce choix est dû à certains faits :  
1- Le premier univers Art-Net valide est 0 et non 1  
2- Le premier univers accepté par les appareils Art-Net-DMX commerciaux comme eDMX et ODE est 0. Ainsi, pour que QLC+ fonctionne d'emblée, le premier univers Art-Net doit être 0.  
  
Si les réglages ci-dessus ne correspondent pas aux exigences de votre réseau, veuillez lire le chapitre suivant.

Configuration
-------------

En cliquant sur le bouton de configuration ![](/basics/configure.png), une petite boîte de dialogue s'affichera, montrant 2 onglets : la Configuration des Univers et l'Arbre des Nœuds.  
  
**Configuration des Univers** : une fois qu'un univers QLC+ est patché avec une input ou une output Art-Net, une entrée s'affichera dans cette liste, permettant de configurer manuellement les paramètres souhaités à utiliser par le plugin Art-Net.  
Les lignes d'input n'ont pas de paramètres particuliers, tandis qu'une ligne d'output peut être configurée avec les éléments suivants :  

* **Adresse IP** : Il s'agit de l'adresse IP de destination vers laquelle le plugin Art-Net transmettra les paquets. Par défaut, une adresse de broadcast est utilisée (se terminant donc par .255), et en définissant celle-ci dans la plage 1-254, Art-Net transmettra un univers QLC+ en mode unicast. Si votre réseau Art-Net utilise un simple hub, l'adresse IP de sortie n'a pas d'importance, car le broadcast ou l'unicast ne fait aucune différence. Cependant, si vous utilisez un switch réseau, l'unicast est fondamental pour équilibrer la congestion du réseau, car chaque port du switch est associé à une IP réseau et ne recevra que les paquets ayant cette IP de destination.  
    **Remarque** : Ne définissez pas l'adresse IP de sortie avec la même adresse IP que votre nœud émetteur (par ex. le PC sur lequel QLC+ fonctionne), car c'est tout simplement incorrect et peut provoquer une boucle réseau. Si vous devez communiquer avec un nœud Art-Net fonctionnant sur la même machine que QLC+, utilisez plutôt le périphérique loopback (127.0.0.1).
* **Univers Art-Net** : Il s'agit de l'univers Art-Net qui sera effectivement inscrit dans chaque paquet transmis. En définissant ce paramètre, vous pouvez utiliser n'importe quel univers QLC+ pour transmettre vers l'univers Art-Net souhaité.
* **Mode de transmission** : Ici, vous pouvez sélectionner si QLC+ doit transmettre des univers complets ou partiels.  
    _Standard_ signifie que les univers DMX ne sont transmis que lorsqu'au moins un canal DMX change, ou toutes les 2 secondes pour rafraîchir les valeurs du récepteur.  
    _Full_ signifie que les 512 canaux DMX d'un univers sont transmis à la vitesse de l'horloge interne de QLC+ (50Hz), produisant un débit fixe d'environ 250kbps.  
    _Partial_, en revanche, signifie que QLC+ ne transmettra que les canaux DMX réellement utilisés dans un univers, en partant du canal 1. Par exemple, si vous montez le canal 3 d'un fixture ayant l'adresse 50, le plugin Art-Net ne transmettra que 53 canaux DMX, limitant ainsi le débit de transmission. N'utilisez ce réglage que si le nœud Art-Net récepteur prend en charge la transmission partielle.

Les réglages qui diffèrent des valeurs par défaut du plugin seront stockés dans votre espace de travail QLC+, afin d'augmenter la portabilité d'un projet entre différentes plateformes, comme différents systèmes d'exploitation ou un PC et un Raspberry Pi.  
  
**Arbre des Nœuds** : Cet onglet affiche les nœuds Art-Net découverts sur le réseau, regroupés par interface réseau.  
QLC+ apparaîtra toujours dans cette liste en tant que nœud participant au réseau.  
Les nœuds Art-Net sont ajoutés à cette liste s'ils prennent en charge le message ArtPoll/ArtPollReply, sinon ils n'apparaîtront pas. Cela ne signifie pas que vous ne pourrez pas communiquer avec eux.

DMXKing eDMX et ENTTEC ODE
---------------------------

Si vous possédez l'un de ces appareils, ils disposent tous deux d'outils de configuration qui peuvent s'avérer utiles lorsque vous travaillez avec QLC+. Avec eux, vous pouvez définir plusieurs paramètres pour obtenir la meilleure configuration afin d'échanger des données en input/output avec QLC+.  
Par exemple, si vous souhaitez que l'univers QLC+ 3 produise des données sur le premier port d'un eDMX, vous devez utiliser l'outil ci-dessous pour changer l'adresse d'univers de l'appareil en 2.  
  
Voici les liens pour télécharger les outils :  
[Outil de configuration DMXKing eDMX](https://dmxking.com/downloads/eDMX_Configuration.zip)  
[ENTTEC Node Management Utility](https://www.enttec.com/?main_menu=Products&pn=79001)  

Compatibilité
-------------

Les appareils Art-Net compatibles sont répertoriés sur la page de [compatibilité](https://www.qlcplus.org/discover/compatibility) du site web de QLC+.
