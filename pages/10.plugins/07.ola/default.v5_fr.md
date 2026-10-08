---
title: OLA
date: '05:17 22-08-2023'
---

Introduction
------------

Le plugin OLA permet une communication directe entre QLC+ et le [framework OLA](https://wiki.openlighting.org/index.php/Open_Lighting_Architecture) sur la même machine.

Prérequis
------------

Le plugin OLA nécessite qu'OLA soit installé sur le système.  
Puisqu'OLA ne fonctionne pas sous Windows, seuls les utilisateurs de Linux et macOS peuvent bénéficier de ce plugin.  
Des informations sur la manière de télécharger et d'installer OLA se trouvent [ici](https://wiki.openlighting.org/index.php/Download_%26_Install_OLA).  
QLC+ a besoin que le serveur OLA soit en cours d'exécution pour pouvoir communiquer avec le framework OLA. Cela peut se faire soit manuellement en démarrant « olad » depuis un terminal, soit dans le panneau de configuration en cochant « Run standalone OLA daemon ».

Configuration
-------------

En appuyant sur le bouton de configuration au-dessus d'une ligne d'output OLA, une petite fenêtre popup apparaîtra montrant les informations de base sur la manière dont les outputs de QLC+ sont mappés par rapport aux univers OLA.  
En bas, un bouton à cocher vous permettra de forcer le démarrage du serveur OLA.

Configuration d'OLA
---------

Une fois que vous vous êtes assuré que tout fonctionne dans QLC+ et avez vérifié comment les univers sont mappés, vous pouvez configurer OLA pour envoyer le signal reçu de QLC+ vers un périphérique DMX, que ce soit en USB ou via le réseau.  
Voici une [introduction à l'utilisation d'OLA](https://wiki.openlighting.org/index.php/Using_OLA).  
Il vous suffit d'ouvrir un navigateur web, de vous connecter à [http://localhost:9090](http://localhost:9090) ou [http://127.0.0.1:9090](http://127.0.0.1:9090) et d'ajouter un univers portant le même numéro que celui mappé dans QLC+, puis de sélectionner la ligne de sortie souhaitée.
