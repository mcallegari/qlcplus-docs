---
title: Peperoni
date: '05:19 22-08-2023'
media_order: zadig-peperoni-usb.png
---

Introduction
--------------

Le plugin de sortie Peperoni prend en charge les périphériques de sortie USB-DMX produits par [Peperoni Light](http://www.peperoni-light.de/products1.htm).

Prérequis
--------------

### Linux

Sur toutes les distributions Linux, vous devez installer libusb. Si vous installez QLC+ avec le Ubuntu Software Center ou un autre outil d'installation automatique, cette bibliothèque sera installée automatiquement pour vous.

### Mac OS X

Rien de particulier n'est nécessaire pour Mac OS X. Tous les composants requis sont déjà inclus dans le bundle de l'application Q Light Controller Plus, car QLC+ utilise l'interface USB native d'OS X.

### Windows

QLC+ communique avec les périphériques Peperoni via libusb, qui est inclus dans l'installeur de QLC+ : aucune DLL supplémentaire n'est donc nécessaire. Le périphérique doit utiliser le driver **WinUSB** :

* Les périphériques avec un firmware 0x1000 ou plus récent installent automatiquement le driver WinUSB lorsqu'ils sont branchés.
* Les périphériques avec un firmware plus ancien nécessitent l'installation manuelle du driver WinUSB avec [Zadig](https://zadig.akeo.ie) : ouvrez Zadig, sélectionnez **Options > List All Devices**, choisissez le périphérique Peperoni, sélectionnez **WinUSB** et cliquez sur **Install Driver**. Vous pouvez aussi mettre à jour le firmware du périphérique.
* Pour le X-Switch, sélectionnez **libusbK** au lieu de WinUSB dans Zadig, car WinUSB ne peut pas modifier la configuration USB du périphérique.

![](zadig-peperoni-usb.png)
