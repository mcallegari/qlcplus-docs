---
title: 'Fenêtre principale'
taxonomy:
    category: docs
child_type: docs
media_order: 'main-window-v5.png,main-window.png'
---

<style>
    #chapter p {
        text-align: left;
    }
</style>

### Chapitre 2

# Fenêtre principale

La fenêtre principale de QLC+ se compose de quatre parties principales :

1.  Une barre supérieure avec les raccourcis globaux
2.  Une barre de sous-menu contextuel contenant les contrôles pour le contexte sélectionné
3.  La zone de contexte principale, qui peut être un panneau de prévisualisation ou opératif
4.  Des panneaux latéraux pour agir sur la vue actuelle sans gaspiller d'espace

![](/main-window/main-window-v5.png)

La plupart des contrôles du logiciel disposent d'infobulles, qui apparaissent après avoir maintenu le curseur de la souris sur eux pendant un court instant.

### Barre supérieure (1)

La barre supérieure principale contient les raccourcis suivants (de gauche à droite) :

* * *
#### ![](../basics/qlcplus.svg?resize=48,48) Menu des actions globales

Ce menu est accessible depuis n'importe quel contexte de QLC+ et constitue un raccourci vers les principales opérations de projet.  
Les éléments du menu sont listés ici :

![](../basics/filenew.svg) Crée un nouveau projet vierge (CTRL+N)  
![](../basics/fileopen.svg?resize=48,48) Ouvre un projet existant (au survol, affiche une liste des fichiers récents) (CTRL+O)  
![](../basics/filesave.svg?resize=48,48) Enregistre le projet actuel (CTRL+S)  
![](../basics/filesaveas.svg?resize=48,48) Enregistre le projet actuel sous un nouveau nom  
![](../basics/import.svg?resize=48,48) Importe des Fixtures et Fonctions depuis un projet existant  

![](../basics/undo.svg) Annule la dernière opération  
![](../basics/redo.svg) Rétablit la dernière opération annulée  

![](../basics/network.svg) Configure les paramètres réseau client et serveur (natif ou interface web)  
![](../basics/diptool.svg) Ouvre l'outil de calcul des interrupteurs DIP  
![](../basics/configure.svg) Ouvre le panneau de paramètres de l'interface pour ajuster les couleurs, la mise à l'échelle, etc.  
<i class="fa fa-maximize fa-2x"></i> Bascule le mode plein écran (CTRL+F11)  
<i class="fa fa-earth-europe fa-2x"></i> Change la langue de l'interface (peut nécessiter un redémarrage de l'application)  
<i class="fa fa-circle-info fa-2x"></i> Affiche des informations sur QLC+  

* * *

#### Boutons de changement de contexte

En appuyant sur ces boutons, vous pouvez passer d'un contexte à l'autre.  
Les contextes peuvent aider lors de la phase de conception, des opérations en direct ou de la configuration input/output.  
Les contextes peuvent être détachés de la fenêtre principale par un clic droit sur leur bouton.  

![](../basics/editor.svg?resize=48,48) Affiche [Fixtures et Fonctions](/fixtures-and-functions)  
![](../basics/virtualconsole.svg?resize=48,48) Affiche la [Virtual Console](/virtual-console)  
![](../basics/simpledesk.svg?resize=48,48) Affiche le [Simple Desk](/simple-desk)  
![](../basics/showmanager.svg?resize=48,48) Affiche le [Show Manager](/show-manager)  
![](../basics/inputoutput.svg?resize=48,48) Affiche le gestionnaire de configuration [Input/Output](/input-output)

#### Aides globales

La barre supérieure de la fenêtre principale comprend d'autres aides sur le côté droit de l'écran.

![](../basics/dmxdump.svg?resize=48,48) Ouvre la fenêtre [DMX Dump](dmx-dump) pour créer rapidement des Scenes  
<i class="fa fa-wave-square fa-2x"></i>    Contrôle BPM : affiche le nombre de BPM actuel et ouvre la fenêtre [BPM Control](/bpm-system)  
![](../basics/stopall.svg?resize=48,48) Affiche le nombre de fonctions en cours d'exécution et permet de toutes les arrêter en une seule fois  


### Barre de sous-contrôle du contexte (2)

Il s'agit d'une autre barre de menu qui change selon le contexte (ou n'est pas présente du tout), où vous pouvez soit sélectionner le mode de prévisualisation du contexte, soit trouver une barre d'outils avec divers contrôles.  

* Fixtures And Functions affiche le mode de prévisualisation et les sélecteurs d'univers 
* Virtual Console affiche un sélecteur de page
* Simple Desk affiche un sélecteur d'univers et une réinitialisation
* Show Manager affiche les contrôles de l'éditeur et de lecture
* Input/Output Manager n'a pas de barre de sous-contrôle

### Zone de travail principale (3)

Tout se passe ici. Le panneau actif dépend du contexte actuellement sélectionné.

### Panneaux latéraux (4)

Les panneaux latéraux ont été introduits dans la version 5 pour économiser de l'espace et fournir des outils rapides afin d'améliorer l'édition du projet.  
Dans ces panneaux, vous pouvez trouver des outils tels que :
* Fixture browser
* Éditeurs de Fixtures, Fonctions, Palettes ou Widgets
* Liste des plugins Input/Output, des profils d'input ou des widgets de la Virtual Console
