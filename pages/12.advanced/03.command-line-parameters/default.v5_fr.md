---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ prend en charge un certain nombre de paramètres de ligne de commande
pour automatiser/étendre certaines fonctionnalités au démarrage.  
L'utilisation des paramètres de ligne de commande peut s'avérer délicate
selon le système d'exploitation utilisé :

**Linux** : il suffit d'ouvrir un terminal et de taper `qlcplus-qml` suivi
des paramètres dont vous avez besoin<br>
**Windows** : créez un raccourci vers qlcplus-qml.exe (généralement situé
dans C:\\QLC+) sur votre bureau. Faites un clic droit sur le raccourci et
sélectionnez « Propriétés ». Dans le champ « Cible », vous verrez quelque
chose comme `C:\\QLC+\\qlcplus-qml.exe`. Vous pouvez y ajouter des
paramètres de ligne de commande. Une fois terminé, cliquez sur OK.<br>
Par exemple, pour forcer la langue allemande au démarrage, modifiez la ligne
de commande de votre raccourci comme ceci :

![](../command-line-v5.png)

**OSX** : c'est le cas le plus difficile puisque QLC+ sur OSX est fourni
dans un paquet DMG. Vous devez ouvrir un terminal et faire "cd" dans le DMG
de QLC+ comme ceci :<br>`cd QLC+.app\\Contents\\MacOS`<br>
Une fois cela fait, tapez `./qlcplus-qml` suivi des paramètres dont vous
avez besoin.

|     |
| --- |
| **-o ou --open**<br><br>**Description :** Ouvre le fichier de workspace indiqué<br><br>**Paramètres :** Nom du fichier<br><br>**Exemples :**  <br>Ouvrir sample.qxw :  <br>qlcplus-qml -o sample.qxw  <br>qlcplus-qml --open sample.qxw |

|     |
| --- |
| **-9 ou --openlast**<br><br>**Description :** Ouvre le fichier de projet de la dernière session<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Ouvrir le dernier fichier ouvert :  <br>qlcplus-qml -9  <br>qlcplus-qml --openlast |

|     |
| --- |
| **-f ou --fullscreen**<br><br>**Description :** Démarre l'application en mode plein écran<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Demander au gestionnaire de fenêtres de donner tout l'espace de l'écran à QLC+ :  <br>qlcplus-qml -f  <br>qlcplus-qml --fullscreen |

|     |
| --- |
| **-h ou --help**<br><br>**Description :** Affiche l'aide de la ligne de commande (uniquement sur Linux et macOS)<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Afficher l'aide de la ligne de commande :  <br>qlcplus-qml -h  <br>qlcplus-qml --help |

|     |
| --- |
| **-3 ou --no3d**<br><br>**Description :** Désactive le sous-contexte d'aperçu 3d<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Désactiver l'aperçu 3d :  <br>qlcplus-qml -3  <br>qlcplus-qml --no3d |

|     |
| --- |
| **-k ou --kiosk**<br><br>**Description :** Active le mode kiosque (seule la [console virtuelle](/virtual-console) est visible)<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Démarrer l'application en mode kiosque :  <br>qlcplus -k  <br>qlcplus --kiosk |

|     |
| --- |
| **-l ou --locale**<br><br>**Description :** Utilise la langue indiquée pour la traduction<br><br>**Paramètres :** Code de langue (actuellement pris en charge : ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Exemples :**  <br>Utiliser la langue finnoise :  <br>qlcplus-qml -l fi_FI  <br>qlcplus-qml --locale fi_FI |

|     |
| --- |
| **-m ou --nowm**<br><br>**Description :** Informe l'application que le système ne fournit pas de gestionnaire de fenêtres. QLC+ ajoutera donc quelques contrôles supplémentaires pour fermer les fenêtres.<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Démarrer QLC+ sans gestionnaire de fenêtres :  <br>qlcplus-qml -m  <br>qlcplus-qml --nowm |

|     |
| --- |
| **-v ou --version**<br><br>**Description :** Affiche le numéro de version actuel de l'application<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>qlcplus-qml -v  <br>qlcplus-qml --version |

|     |
| --- |
| **-w ou --web**<br><br>**Description :** Active l'accès web distant sur le port 9999<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>qlcplus-qml -w  <br>qlcplus-qml --web |

|     |
| --- |
| **-wp ou --web-port**<br><br>**Description :** Utilise un port spécifique pour l'accès web<br><br>**Paramètres :** Numéro de port<br><br>**Exemples :**  <br>qlcplus-qml -wp 12345  <br>qlcplus-qml --web-port 12345 |

|     |
| --- |
| **-wa ou --web-auth**<br><br>**Description :** Active l'accès web distant avec authentification des utilisateurs<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>qlcplus-qml -wa  <br>qlcplus-qml --web-auth |

|     |
| --- |
| **-a ou --web-auth-file**<br><br>**Description :** Spécifie un fichier dans lequel stocker les identifiants d'authentification de base pour l'accès web<br><br>**Paramètres :** Nom du fichier<br><br>**Exemples :**  <br>qlcplus-qml -wa qlcplus_password  <br>qlcplus-qml --web-auth-file qlcplus_password |

|     |
| --- |
| **-d ou --debug**<br><br>**Description :** Active le mode debug. Notez que les messages de debug ne sont pas inclus dans les binaires publiés.<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Activer le mode debug :  <br>qlcplus-qml -d  <br>qlcplus-qml --debug  <br>  |

|     |
| --- |
| **-g ou --log**<br><br>**Description :** Enregistre les messages de debug dans un fichier (`$HOME/QLC+.log`)<br><br>**Paramètres :** Aucun<br><br>**Exemples :**  <br>Activer les messages de debug et les enregistrer dans le journal  <br>qlcplus -d -g  <br>qlcplus --debug --log |
