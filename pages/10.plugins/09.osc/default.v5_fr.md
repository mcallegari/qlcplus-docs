---
title: OSC
date: '05:18 22-08-2023'
---

Introduction
------------

QLC+ prend en charge le [protocole OSC](https://en.wikipedia.org/wiki/Open_Sound_Control) via un plugin d'input/output qui reçoit et transmet des paquets sur le réseau.  
Aucune exigence supplémentaire n'est nécessaire, puisque QLC+ dispose d'une implémentation native du protocole OSC qui fonctionne sur les systèmes Linux, Windows et OSX.  
Le plugin OSC peut envoyer et recevoir des paquets depuis plusieurs cartes réseau, adresses virtuelles, le périphérique loopback (127.0.0.1) et plusieurs univers par interface réseau.  
Par défaut, le plugin OSC écoutera sur des ports commençant à 7700, plus l'univers QLC+ moins un.  
L'output, quant à elle, utilisera des ports commençant à 9000, plus l'univers QLC+ moins un.  
  
Par exemple :  
Univers QLC+ 1 --> port d'input OSC 7700, port d'output 9000  
Univers QLC+ 2 --> port d'input OSC 7701, port d'output 9001  
...  
Univers QLC+ 8 --> port d'input OSC 7707, port d'output 9007  
  

Configuration
-------------

En cliquant sur le bouton de configuration ![](/basics/configure.png), une petite boîte de dialogue s'affichera, montrant le panneau de Configuration des Univers.  
  
Une fois qu'un univers QLC+ est patché avec une input ou une output OSC, une entrée s'affichera dans cette liste, permettant de configurer manuellement les paramètres souhaités à utiliser par le plugin OSC.  
  
Pour chaque input ou output OSC, les paramètres suivants peuvent être définis :

* **Port d'input :** Si la ligne patchée est ouverte pour l'input, ce paramètre définit le port sur lequel QLC+ écoutera afin de recevoir les données OSC de votre contrôleur externe.
* **Adresse de sortie :** Si la ligne patchée est ouverte pour l'input, il s'agit de l'adresse IP de destination utilisée pour envoyer le feedback à votre contrôleur externe.  
    Si la ligne patchée est ouverte pour l'output, il s'agit de l'adresse IP de destination utilisée pour envoyer les données OSC sur le réseau.  
    Les paquets de sortie OSC sont composés pour obtenir un chemin OSC de la forme suivante : /univers QLC+ - 1/dmx/canal DMX - 1  
    Par exemple, le canal 12 de l'univers QLC+ 4 aura le chemin suivant : /3/dmx/11  
    Toutes les valeurs transmises par le plugin OSC utilisent le type float.
* **Port de sortie :** Si la ligne patchée est ouverte pour l'input, il s'agit du port de destination utilisé pour envoyer le feedback à votre contrôleur externe.  
    Si la ligne patchée est ouverte pour l'output, il s'agit du port de destination utilisé pour envoyer les données OSC sur le réseau.

**Remarque :** Lors du patch d'une ligne Input+Feedback, l'IP/port de sortie à modifier sont ceux de la section « Inputs ». Laissez simplement la section « Outputs » par défaut.

Calculateur de canaux
-------------

S'il n'est pas possible d'effectuer une détection automatique via l'éditeur de profil d'input d'un contrôleur OSC, cet outil peut vous aider.  
Vous pouvez saisir le **chemin OSC** et QLC+ calculera le numéro de canal pour vous. Il s'agit essentiellement d'un hash 16 bits du chemin que QLC+ utilise pour représenter une input OSC.  
**Remarque :** Il existe un décalage de 1 entre le calculateur et ce que vous voyez dans l'éditeur de Profil d'Input. C'est normal, car les canaux dans QLC+ commencent à 1 et non à 0. Ce que montre le calculateur est le numéro de canal que vous devez réellement écrire dans un profil d'input ou dans votre contrôleur OSC personnalisé.

Contrôleurs
-----------

QLC+ a été testé avec les contrôleurs OSC suivants :

* [Open Stage Control](https://openstagecontrol.ammd.net/)
* [TouchOSC](https://hexler.net/touchosc). Un profil d'input prédéfini est prêt à l'emploi pour les dispositions Mix16 et Automat5.
* [Pure Data](https://archive.flossmanuals.net/pure-data/network-data/osc.html)
