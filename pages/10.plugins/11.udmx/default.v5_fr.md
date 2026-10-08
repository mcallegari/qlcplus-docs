---
title: uDMX
date: '05:20 22-08-2023'
---

Introduction
------------

Le plugin de sortie uDMX prend en charge l'interface USB-DMX [Anyma uDMX](https://www.anyma.ch/research/udmx/) sur Linux et macOS.

Prérequis
------------

### Linux

Sur toutes les distributions Linux, vous devez installer libusb. Si vous installez QLC+ avec le Ubuntu Software Center ou un autre outil d'installation automatique, cette bibliothèque sera installée automatiquement pour vous.

### macOS

Sur Apple macOS, vous n'avez besoin d'aucun driver puisque QLC+ utilise l'interface USB native de macOS.

### Windows

Ce périphérique n'est pas encore pris en charge sous Windows.

Réglage fin
------

Il est possible de modifier la fréquence de trame DMX pour tous les périphériques uDMX grâce à une clé de réglage cachée sur chaque plateforme. Cette clé indique à QLC+ combien de fois chaque trame DMX (512 canaux) doit être envoyée à l'univers par seconde. Une valeur de « 30 » signifie 30 fois par seconde (30Hz). Veuillez vous référer à la section uDMX des [Réglages manuels des paramètres](/advanced/parameters-tuning#3-udmx-frequency)
