---
title: 'DMX USB'
date: '05:08 22-08-2023'
---

Introduction
------------

Le plugin DMX USB prend en charge une variété de périphériques USB-DMX basés sur FTDI.

Les périphériques DMX USB pris en charge se trouvent sur notre page de [compatibilité](https://www.qlcplus.org/discover/compatibility).

Configuration
-------------

Les périphériques DMX USB devraient être automatiquement détectés par QLC+ et affichés dans la liste des panneaux d'input/output.  
Si pour une raison ou une autre la détection automatique échoue, vous pouvez « forcer » manuellement le type de votre adaptateur DMX USB.  
Cliquez sur le nom de votre périphérique et ouvrez la boîte de dialogue de configuration en cliquant sur l'icône ![](/basics/configure.png) en bas à droite du panneau.  
Vous verrez une liste des périphériques DMX USB actuellement connectés à votre ordinateur. Chacun dispose d'un menu déroulant où vous pouvez forcer le type de périphérique.  
Voici la signification de chacun d'eux :

* **Open TX** : Enttec USB DMX Open (et clones) en mode output
* **Open RX** : Périphériques FTDI génériques en mode réception
* **Pro RX/TX** : Enttec USB DMX Pro ou la plupart des périphériques DMXKing
* **Pro Mk2** : Enttec USB DMX Pro Mk2 - 2 sorties DMX, 1 entrée DMX, 1 port MIDI IN et 1 port MIDI OUT sont disponibles
* **Ultra Pro** : DMXKing ultraDMX Pro avec 2 sorties et 1 entrée
* **DMX4ALL** : DMX4ALL USB-DMX STAGE-PROFI MK2
* **Vince Tx** : Vince DMX512 USB en mode output

**Remarque pour les utilisateurs OSX :** Si votre adaptateur est détecté mais ne produit aucune sortie, vous trouverez très probablement la solution sur la page [Questions et Réponses](/basics/questions-and-answers) (Question n°3).  
**Remarque 1** : Les périphériques Eurolite USB-DMX512 Pro doivent être forcés en mode « Pro RX/TX » pour fonctionner correctement.  
**Remarque 2** : Sous Windows, les clones Enttec open DMX peuvent scintiller à 44Hz. Vous pouvez essayer de diminuer la fréquence de sortie jusqu'à ce que le problème soit résolu.

Prérequis
------------

### Linux

Sur toutes les distributions Linux, vous devez installer libftdi. Si vous installez QLC+ avec le Ubuntu Software Center ou un autre outil d'installation automatique, cette bibliothèque sera installée automatiquement pour vous.  
Dans certains cas, si le périphérique ne produit aucune sortie, il peut être utile d'ajouter votre utilisateur au groupe « dialout » avec la commande suivante :  
```
sudo adduser your\_user\_name dialout
```

### macOS

Sur Apple macOS, vous n'avez besoin d'aucun driver puisque QLC+ utilise l'interface USB native de macOS. Installer les drivers D2XX ne devrait causer aucun problème, mais **N'INSTALLEZ PAS les drivers VCP (Virtual COM Port)** car ils interféreront très certainement avec QLC+. Si vous avez précédemment installé les drivers VCP, consultez les [guides d'installation FTDI](https://ftdichip.com/document/installation-guides/) pour savoir comment les désinstaller.  
  
**Problèmes avec OSX Mavericks (ou versions ultérieures)** : veuillez consulter [Questions & réponses n°3](/basics/questions-and-answers)

### Windows

Sous Microsoft Windows, le plugin nécessite les [derniers drivers D2XX de FTDI](https://ftdichip.com/drivers/d2xx-drivers/). Normalement, lorsqu'un périphérique FTDI est branché pour la première fois, Windows téléchargera automatiquement les drivers D2XX pour vous, donc aucune action n'est nécessaire.  
Si ce n'est pas le cas, veuillez consulter les [guides d'installation FTDI](https://ftdichip.com/document/installation-guides/) pour savoir comment installer les drivers.  
**N'INSTALLEZ PAS les drivers VCP (Virtual COM Port)** car ils interféreront probablement avec l'interface D2XX.

Modes pris en charge par l'ENTTEC DMX USB Pro
----------------------------------

Voici une grille montrant les modes IO pris en charge par QLC+ pour des périphériques comme le DMX USB Pro et le Pro Mk2.  
Si un mode n'est pas listé ici, cela signifie qu'il n'est pas pris en charge par QLC+ ou par le périphérique lui-même en raison de limitations matérielles, veuillez donc ne pas les signaler comme des problèmes sur le forum de QLC+.  
  

|     |     |     |     |     |     |     |     |     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
|     | 1   | 2   | 3   | 4   | 5   | 6   | 7   | 8   | 9   | 10  | 11  | 12  | 13  | 14  |
| DMX1 IN | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |     |
| DMX1 OUT |     | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |
| DMX2 OUT (1) |     |     | o   | o   | o   |     |     |     |     |     |     |     |     |     |
| MIDI IN (2) |     |     |     |     |     | o   | o   | o   |     |     |     | o   | o   | o   |
| MIDI OUT (2) |     |     |     |     |     |     |     |     | o   | o   | o   | o   | o   | o   |

  
(1) DMX2 OUT est disponible uniquement sur le DMX USB Mk2 Pro  
(2) MIDI IN et MIDI OUT sont disponibles uniquement sur le DMX USB Mk2 Pro avec un câble de breakout à 5 voies. Les signaux MIDI OUT sont envoyés de 1 à 512 comme décrit dans la [carte des canaux du plugin MIDI](../midi#channels-map)  

Réglage fin
------

**Remarque : le réglage manuel ne devrait jamais être effectué, sauf dans certains cas très particuliers. Utilisez-le à vos risques et périls !**  
Il est possible de modifier la taille de trame DMX pour les périphériques Enttec Open (et similaires) grâce à une clé de réglage cachée sur chaque plateforme. Cette clé indique à QLC+ combien de canaux doivent être transmis dans chaque trame DMX, donc pour un univers DMX (512 par défaut).  
Veuillez vous référer à la section DMX USB Enttec Open des [Réglages manuels des paramètres](/advanced/parameters-tuning#2-dmx-usb-enttec-open-channels-number).
