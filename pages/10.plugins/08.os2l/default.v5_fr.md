---
title: OS2L
date: '05:18 22-08-2023'
---

Introduction
------------

Le plugin OS2L permet une communication directe entre QLC+ et un hôte compatible OS2L.  
Les spécifications OS2L se trouvent à l'adresse : [https://os2l.org](https://os2l.org/)  
Pour le moment, le seul hôte OS2L pris en charge est [Virtual DJ](https://www.virtualdj.com/).  
Le plugin OS2L de QLC+ fonctionnera soit sur le même hôte (127.0.0.1), soit sur un hôte différent avec le système d'exploitation de votre choix (Windows, macOS, Linux)

Configuration - Virtual DJ
--------------------------

Tout d'abord, vous devez indiquer à VDJ où envoyer les messages OS2L.  
Ouvrez les réglages de VDJ, allez dans le panneau « Options » et tapez « os2l » dans la barre de recherche en haut.  
Modifiez le champ « os2lDirectIp » en définissant l'IP:port où VDJ peut joindre QLC+. Par exemple, « 127.0.0.1:9996 » devrait fonctionner si QLC+ tourne sur le même PC (Windows) que VDJ.  
Une fois cela fait, redémarrez VDJ.  
  
Allez maintenant dans QLC+, activez le plugin OS2L sur n'importe quel univers. Si vous avez défini un port spécifique dans VDJ, ouvrez la boîte de dialogue de configuration OS2L et définissez-y le même port.  
Une fois cela fait, QLC+ commencera à recevoir des signaux de VDJ (l'icône de joystick clignotera à côté de la case Univers)

Clients personnalisés
--------------

Pour prendre en charge des clients personnalisés, un Profil d'Input doit être configuré pour mapper les messages OS2L vers des canaux. Le plugin OS2L écoute les événements suivants : `beat`, `cmd` et `btn`.

Un message `beat` changera la valeur du canal 8342 à 255 s'il est reçu. Exemple : `{"evt":"beat"}`.

Un message `cmd` réglera le canal donné par `id` à la valeur donnée par `param`. Exemple : `{"evt": "cmd", "id": "1", "param": 255}`.

Un message `btn` peut également être mappé. Le canal est contrôlé par un CRC du `name`. Le moyen le plus simple de trouver le canal est d'utiliser le mappeur d'input automatique lors de la configuration du Profil d'Input. La valeur envoyée au canal est soit 255 pour `on`, soit 0 pour `off`. Exemple : `{"evt":"btn","name":"Light Left 2","state":"on"}`.
