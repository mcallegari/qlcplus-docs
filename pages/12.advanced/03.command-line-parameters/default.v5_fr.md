---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ prend en charge un certain nombre de paramètres de ligne de commande
pour automatiser/étendre certaines fonctionnalités au démarrage.  
L'utilisation des paramètres de ligne de commande peut s'avérer délicate
selon le système d'exploitation utilisé :

**Linux** : il suffit d'ouvrir un terminal et de taper `qlcplus5` suivi
des paramètres dont vous avez besoin<br>
**Windows** : créez un raccourci vers qlcplus5.exe (généralement situé
dans C:\\QLC+) sur votre bureau. Faites un clic droit sur le raccourci et
sélectionnez « Propriétés ». Dans le champ « Cible », vous verrez quelque
chose comme `C:\\QLC+\\qlcplus5.exe`. Vous pouvez y ajouter des
paramètres de ligne de commande. Une fois terminé, cliquez sur OK.<br>
Par exemple, pour forcer la langue allemande au démarrage, modifiez la ligne
de commande de votre raccourci comme ceci :

![](../command-line-v5.png)

**OSX** : c'est le cas le plus difficile puisque QLC+ sur OSX est fourni
dans un paquet DMG. Vous devez ouvrir un terminal et faire "cd" dans le DMG
de QLC+ comme ceci :<br>`cd QLC+.app\\Contents\\MacOS`<br>
Une fois cela fait, tapez `./qlcplus5` suivi des paramètres dont vous
avez besoin.

|     |
| --- |
| **-o ou --open**<br><br>**Description :** Ouvre le fichier de workspace indiqué<br><br>**Paramètres :** Nom du fichier<br><br>**Exemples :**  <br>Ouvrir sample.qxw :  <br>qlcplus5 -o sample.qxw  <br>qlcplus5 --open sample.qxw |

|     |
| --- |
| **-9 ou --openlast**<br><br>**Description :** Ouvre le fichier de projet de la dernière session<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Ouvrir le dernier fichier ouvert :  <br>qlcplus5 -9  <br>qlcplus5 --openlast |

|     |
| --- |
| **-f ou --fullscreen**<br><br>**Description :** Démarre l'application en mode plein écran<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Demander au gestionnaire de fenêtres de donner tout l'espace de l'écran à QLC+ :  <br>qlcplus5 -f  <br>qlcplus5 --fullscreen |

|     |
| --- |
| **-h ou --help**<br><br>**Description :** Affiche l'aide de la ligne de commande (uniquement sur Linux et macOS)<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Afficher l'aide de la ligne de commande :  <br>qlcplus5 -h  <br>qlcplus5 --help |

|     |
| --- |
| **-3 ou --no3d**<br><br>**Description :** Désactive le sous-contexte d'aperçu 3d<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Désactiver l'aperçu 3d :  <br>qlcplus5 -3  <br>qlcplus5 --no3d |

|     |
| --- |
| **-k ou --kiosk**<br><br>**Description :** Active le mode kiosque (seule la [console virtuelle](/virtual-console) est visible)<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Démarrer l'application en mode kiosque :  <br>qlcplus5 -k  <br>qlcplus5 --kiosk |

|     |
| --- |
| **-l ou --locale**<br><br>**Description :** Utilise la langue indiquée pour la traduction<br><br>**Paramètres :** Code de langue (actuellement pris en charge : ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Exemples :**  <br>Utiliser la langue finnoise :  <br>qlcplus5 -l fi_FI  <br>qlcplus5 --locale fi_FI |

|     |
| --- |
| **-m ou --nowm**<br><br>**Description :** Informe l'application que le système ne fournit pas de gestionnaire de fenêtres. QLC+ ajoutera donc quelques contrôles supplémentaires pour fermer les fenêtres.<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Démarrer QLC+ sans gestionnaire de fenêtres :  <br>qlcplus5 -m  <br>qlcplus5 --nowm |

|     |
| --- |
| **-v ou --version**<br><br>**Description :** Affiche le numéro de version actuel de l'application<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>qlcplus5 -v  <br>qlcplus5 --version |

|     |
| --- |
| **-w ou --web**<br><br>**Description :** Active l'accès web distant sur le port 9999<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>qlcplus5 -w  <br>qlcplus5 --web |

|     |
| --- |
| **-wp ou --web-port**<br><br>**Description :** Utilise un port spécifique pour l'accès web<br><br>**Paramètres :** Numéro de port<br><br>**Exemples :**  <br>qlcplus5 -wp 12345  <br>qlcplus5 --web-port 12345 |

|     |
| --- |
| **-wa ou --web-auth**<br><br>**Description :** Active l'accès web distant avec authentification des utilisateurs<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>qlcplus5 -wa  <br>qlcplus5 --web-auth |

|     |
| --- |
| **-a ou --web-auth-file**<br><br>**Description :** Spécifie un fichier dans lequel stocker les identifiants d'authentification de base pour l'accès web<br><br>**Paramètres :** Nom du fichier<br><br>**Exemples :**  <br>qlcplus5 -wa qlcplus_password  <br>qlcplus5 --web-auth-file qlcplus_password |

|     |
| --- |
| **-d ou --debug**<br><br>**Description :** Active le mode debug. Notez que les messages de debug ne sont pas inclus dans les binaires publiés.<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Activer le mode debug :  <br>qlcplus5 -d  <br>qlcplus5 --debug  <br>  |

|     |
| --- |
| **-g ou --log**<br><br>**Description :** Enregistre les messages de debug dans un fichier (`$HOME/QLC+.log`)<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Activer les messages de debug et les enregistrer dans le journal  <br>qlcplus5 -d -g  <br>qlcplus5 --debug --log |
