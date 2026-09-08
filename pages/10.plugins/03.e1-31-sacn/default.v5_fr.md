---
title: 'E1.31 (s.ACN)'
date: '05:11 22-08-2023'
media_order: e131_configuration.png
---

Introduction
------------

QLC+ prend en charge le [protocole E1.31](https://wiki.openlighting.org/index.php/E1.31) (également connu sous le nom de s.ACN) via un plugin d'input/output qui reçoit et transmet des paquets sur le réseau.  
Aucune exigence supplémentaire n'est nécessaire, puisque QLC+ dispose d'une implémentation native du protocole E1.31 qui fonctionne sur les systèmes Linux, Windows et OSX.  
Le plugin E1.31 peut envoyer et recevoir des paquets depuis plusieurs cartes réseau, adresses virtuelles, le périphérique loopback (127.0.0.1) et plusieurs univers par interface réseau.  
Par défaut, les paquets E1.31 seront envoyés en UDP sur des adresses multicast comme 239.255.0.x, où « x » est le numéro d'univers sélectionné dans QLC+. Le port utilisé est 5568.  
Lors de l'utilisation du périphérique loopback, les paquets sont toujours transmis en utilisant l'adresse 127.0.0.1.  
Lors de la transmission de plusieurs univers sur la même interface, les paquets seront envoyés par défaut avec un ID d'univers E1.31 égal à l'univers QLC+.  
  
Par exemple :  
Univers QLC+ 1 --> Univers E1.31 1 sur 239.255.0.1  
Univers QLC+ 2 --> Univers E1.31 2 sur 239.255.0.2  
...  
Univers QLC+ 8 --> Univers E1.31 8 sur 239.255.0.8  
  
Si les réglages ci-dessus ne correspondent pas aux exigences de votre réseau, veuillez lire le chapitre suivant.

Configuration
-------------

En cliquant sur le bouton de configuration ![](/basics/configure.png), une petite boîte de dialogue s'affichera, montrant le panneau de Configuration des Univers.  
  
Une fois qu'un univers QLC+ est patché avec une input ou une output E1.31, une entrée s'affichera dans cette liste, permettant de configurer manuellement les paramètres souhaités à utiliser par le plugin E1.31.  
Les lignes d'input peuvent être configurées avec les paramètres suivants :  

|     |     |
| --- | --- |
| **Multicast** | Cette case à cocher vous permet de choisir entre une input multicast et une input unicast.  <br>Lorsqu'elle est cochée, cet univers recevra les paquets du groupe multicast choisi sur cette interface.  <br>Lorsqu'elle est décochée, cet univers ne recevra que des paquets unicast sur cette adresse IP.  <br>Sélectionner l'input Unicast permettra de choisir un port d'input différent. |
| **Adresse IP** | Il s'agit de l'adresse IP d'input que le plugin E1.31 écoutera sur l'interface sélectionnée, pour cet univers QLC+.  <br>Lorsque l'input est réglée sur multicast, vous pouvez sélectionner l'IP multicast de 239.255.0.1 à 239.255.0.255.  <br>Lorsque l'input est réglée sur unicast, l'adresse IP est verrouillée sur l'adresse IP de l'interface sélectionnée. |
| **Port** | Il s'agit du port d'input que le plugin E1.31 écoutera pour cet univers QLC+.  <br>Lorsque l'input est réglée sur multicast, le port est verrouillé sur le port multicast E1.31 par défaut : 5568  <br>Lorsque l'input est réglée sur unicast, vous pouvez sélectionner le port de votre choix. |
| **Univers E1.31** | Il s'agit de l'univers E1.31 d'input que le plugin acceptera pour cet univers QLC+.  <br>Cela permet de faire correspondre n'importe quel univers E1.31 à n'importe quel univers QLC+. |

  
Exemple de configuration d'input :

![](e131_configuration.png)

Dans cet exemple, lors de la réception de paquets E1.31 sur l'adresse 127.0.0.1 et le port 8000, les paquets fonctionnant sur l'univers E1.31 4 affecteront l'univers QLC+ 1.  
Nous transmettons également l'univers QLC+ 2 sur l'adresse multicast 239.255.0.2, univers E1.31 1, et l'univers QLC+ 3 sur l'adresse unicast 13.0.0.175 port 7000, univers E1.31 2.  
  
Les lignes d'output peuvent être configurées avec les paramètres suivants :  

|     |     |
| --- | --- |
| **Multicast** | Cette case à cocher vous permet de choisir entre une output multicast et une output unicast.  <br>Lorsqu'elle est cochée, cet univers enverra des paquets au groupe multicast choisi sur cette interface.  <br>Lorsqu'elle est décochée, cet univers enverra des paquets unicast à l'adresse IP unicast choisie.  <br>Sélectionner l'output Unicast vous permettra également de choisir le port sortant. |
| **Adresse IP** | Il s'agit de l'adresse IP de destination vers laquelle le plugin E1.31 transmettra les paquets.  <br>Par défaut, une adresse multicast est utilisée comme décrit ci-dessus.  <br>Lorsque l'output est réglée sur multicast, vous pouvez définir ce paramètre dans la plage 1-255.  <br>Cela permet d'envoyer des paquets vers la plage multicast 239.255.0.1 à 239.255.0.255.  <br>Lorsque l'output est réglée sur unicast, vous pouvez sélectionner n'importe quelle adresse IP arbitraire.  <br>Lors du patch d'un univers QLC+ vers le périphérique loopback (127.0.0.1), les paquets unicast seront toujours transmis vers 127.0.0.1. |
| **Port** | Il s'agit du port que cibleront les paquets sortants.  <br>Le port E1.31 multicast est toujours 5568.  <br>Lorsque l'output est réglée sur unicast, vous pouvez sélectionner le port de votre choix. |
| **Univers E1.31** | Il s'agit de l'univers E1.31 qui sera effectivement inscrit dans chaque paquet transmis.  <br>En définissant ce paramètre, vous pouvez utiliser n'importe quel univers QLC+ pour transmettre vers l'univers E1.31 souhaité. |
| **Mode de transmission** | Ici, vous pouvez sélectionner si QLC+ doit transmettre des univers complets ou partiels.  <br>« Full » signifie que les 512 canaux DMX d'un univers sont transmis à la vitesse de l'horloge interne de QLC+ (50Hz), produisant un débit fixe d'environ 200kbps.  <br>« Partial », en revanche, signifie que QLC+ ne transmettra que les canaux DMX réellement utilisés dans un univers, en partant du canal 1. Par exemple, si vous montez le canal 3 d'un fixture ayant l'adresse 50, le plugin E1.31 ne transmettra que 53 canaux DMX, limitant ainsi le débit de transmission.  <br>N'utilisez ce réglage que si le nœud E1.31 récepteur prend en charge la transmission partielle. |
| **Priorité** | Priorité de la source E1.31.  <br>**0** est la priorité minimale, **200** est la priorité maximale, **100** est la priorité par défaut.  <br>Lorsqu'un récepteur E1.31 reçoit des données pour un univers particulier provenant de plusieurs sources, il utilise les données de la source ayant la priorité la plus élevée.  <br>Cela permet différents schémas de basculement (failover). Notez que QLC+ ne prend pas encore en compte la priorité en input. |

  
Les réglages qui diffèrent des valeurs par défaut du plugin seront stockés dans votre espace de travail QLC+, afin d'augmenter la portabilité d'un projet entre différentes plateformes, comme différents systèmes d'exploitation ou un PC et un Raspberry Pi.

Compatibilité
-------------

QLC+ a été testé avec les logiciels et appareils E1.31 suivants :

* [DMXKing eDMX2 TX](https://web.archive.org/web/20160103204133/https://dmxking.com/artnetsacn/edmx2-tx-rdm) \- Appareil de sortie
