---
title: Peperoni
date: '05:19 22-08-2023'
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

Vous devez installer les [drivers Windows Peperoni USBDMX](http://www.lighting-solutions.de/support/driver.html). Ces drivers sont généralement fournis sur un CD avec le périphérique Peperoni que vous avez acheté.  
Si après avoir installé le driver, QLC+ ne détecte toujours pas votre périphérique Peperoni, copiez le fichier usbdmx.dll que vous trouverez dans le package ZIP du driver (dossier i386) vers le dossier principal de QLC+.

* Décompressez le package du driver dans un dossier de votre disque dur.
* Branchez le périphérique peperoni sur un port USB.
* Si vous utilisez une version 32 bits de Windows, pointez l'assistant « Nouveau matériel détecté » vers le driver situé sous **windows/i386**.
* Si vous utilisez une version 64 bits de Windows, pointez l'assistant « Nouveau matériel détecté » vers le driver situé sous **windows/ia64** ou **windows/amd64**.
