---
title: Installation
taxonomy:
    category:
        - docs
---

L'installation de QLC+ est plutôt simple.
Rendez-vous simplement sur la [page de téléchargement](https://www.qlcplus.org/download) et récupérez la version qui convient au système d'exploitation que vous utilisez.

## Windows

QLC+ sur Windows se présente sous la forme d'un package .exe auto-installable. Il vous suffit de double-cliquer sur le fichier et de suivre les instructions affichées.

Choisissez d'installer QLC+ à son emplacement standard (C:\QLC+) ou dans un autre dossier comme C:\Program Files.

Aucun privilège administrateur n'est requis pour installer QLC+, sauf si vous souhaitez associer les fichiers .qxw (fichiers de projet) et .qxf (fichiers de définition de fixture) à l'application correspondante.
Dans ce cas, faites un clic droit sur le fichier d'installation et exécutez-le en tant qu'administrateur.

**Remarque** : les versions 4.x.x et 5.x.x ne peuvent pas coexister dans le même dossier. Si vous installez les deux, pensez donc à les installer dans des dossiers séparés.

## macOS

QLC+ sur macOS se présente sous la forme d'une image DMG.

Il vous suffit de double-cliquer dessus pour lancer directement QLC+. Vous pouvez également le faire glisser vers le dossier Applications.

## Linux

Le package officiel de QLC+ pour Linux est fourni sous forme de package Debian (.deb).

Pour l'installer, exécutez la commande suivante depuis un terminal, dans le dossier où vous avez téléchargé le package :
```
sudo apt install ./qlcplus_x.y.z.deb
```
Les utilisateurs avancés familiers avec la gestion des dépendances peuvent envisager d'utiliser `sudo dpkg -i qlcplus_x.y.z.deb`.
