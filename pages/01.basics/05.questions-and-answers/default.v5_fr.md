---
title: 'Questions et réponses'
date: '08:32 21-08-2023'
media_order: dmx-usb-settings.png
---

Sur cette page, vous trouverez les questions courantes qui peuvent venir à l'esprit lorsqu'on débute avec QLC+.  
Vous pouvez soit trouver directement la réponse, soit obtenir de l'aide pour vous orienter dans la bonne direction.  

#### Question n°1 : QLC+ ne détecte pas mon périphérique USB

**R :** QLC+ prend en charge une grande variété de périphériques USB. Tout d'abord, vous devez vérifier que la 
connexion physique est correcte. Généralement, une LED sur votre appareil devrait indiquer s'il est sous tension et fonctionne correctement.

Si vous utilisez Windows et que votre appareil est fabriqué par Peperoni ou Velleman, veuillez lire les 
informations sur ces pages d'aide expliquant comment les faire fonctionner. Pour des raisons de licence, tous deux ont besoin
d'un fichier DLL supplémentaire pour fonctionner. Veuillez consulter [le plugin de sortie Peperoni](/plugins/peperoni) ou [le plugin de sortie Velleman](/plugins/velleman)

Si vous utilisez Linux, veuillez vérifier si votre distribution a détecté le périphérique lors du branchement. En général,
la commande `dmesg` devrait vous fournir des informations.

#### Question n°2 : J'ai plusieurs [boutons](/virtual-console/button) dans ma Virtual Console. J'ai besoin d'un moyen de désactiver le bouton actuellement actif lorsque j'en active un autre. Comment faire ?

**R :** Placez simplement vos boutons à l'intérieur d'un [Solo Frame](/virtual-console/solo-frame). C'est exactement ce qu'il fait.

#### Question n°3 : Je viens de mettre à jour mon Mac vers Mavericks (ou une version ultérieure) et mon adaptateur DMX USB ne transmet plus aucune donnée.

**R :** Le problème vient d'un driver Apple appelé AppleUSBFTDI, qui prend le contrôle de tout périphérique
basé sur FTDI détecté dans le système.

Il existe plusieurs façons de résoudre ce problème, mais le résultat est fondamentalement le même : le driver Apple doit être désactivé.

Veuillez consulter la page dédiée pour comprendre comment [désactiver le driver Apple FTDI](/plugins/disable-apple-serial-vcp-driver)

Sinon, vous pouvez télécharger l'outil [ENTTEC FTDI Driver Control](https://www.dmxis.com/release/FtdiDriverControl.zip)
et essayer d'activer/désactiver le driver Apple avec celui-ci.

**Remarque 1 : cela peut compromettre le comportement d'autres périphériques USB, alors ne le faites que si vous savez ce que vous faites !**

**Remarque 2 : à chaque fois que Mac OS reçoit une mise à jour, vous devez recommencer cette procédure !**

**Remarque 3 : il est fort probable que lorsque vous désactivez/activez le driver Apple, vous deviez redémarrer votre Mac**

#### Question n°4 : Où se trouve le dossier utilisateur de QLC+ sur mon système ?

**R :** Le dossier utilisateur est l'endroit où se trouvent les fixtures utilisateur, les profils d'input, les scripts RGB et les modèles MIDI.

Son emplacement varie selon votre système d'exploitation :

* **Linux** : c'est un dossier caché dans le répertoire personnel de votre utilisateur : `$HOME/.qlcplus`
* **Windows** : c'est un dossier dans votre répertoire utilisateur (par ex. <Username>) : `C:\\Users\\<Username>\\QLC+`
* **Mac OS** : il se trouve dans le répertoire `Library` de votre utilisateur : `$HOME/Library/Application\\ Support/QLC+`

Vous pouvez accéder à n'importe lequel de ces dossiers depuis un terminal avec la commande `cd`. Par exemple :

`cd $HOME/Library/Application\\ Support/QLC+`

Veuillez garder à l'esprit que les fixtures et profils d'input trouvés dans le dossier utilisateur seront prioritaires par rapport
aux mêmes fichiers présents dans le dossier système de QLC+. 

Vous pouvez également enregistrer des [définitions de fixtures](/basics/glossary-and-concepts#fixtures) personnalisées et des
[profils d'input](/input-output/input-profiles) dans le même dossier que votre projet ; QLC+ les trouvera
lorsque vous ouvrirez ce projet.

#### Question n°5 : Où se trouve le dossier système de QLC+ sur mon système ?

**R :** Le dossier système est l'endroit où les ressources de QLC+ (fixtures, profils d'input, scripts RGB, etc.) sont installées
et son emplacement varie selon votre système d'exploitation :

* **Linux** : c'est un dossier fixe nommé `/usr/share/qlcplus`
* **Windows** : c'est le dossier où vous avez réellement installé QLC+. Par défaut : `C:\\QLC+`
* **Mac OS** : c'est un dossier à l'intérieur du bundle QLC+ (fichier .app). Il est possible de parcourir
  le contenu du bundle QLC+.app simplement avec Finder. Faites simplement un clic droit sur le fichier et sélectionnez
  « Show Package Contents ».<br>Sinon, le dossier système peut être atteint via un terminal,
  mais cela dépend de l'endroit où vous avez installé QLC+. Par exemple, si vous avez glissé QLC+ dans
  Applications, ce sera : `/Applications/QLC+.app/Contents/Resources`

#### Question n°6 : QLC+ n'arrive pas à lire certaines vidéos sous Windows

**R :** QLC+ s'appuie sur les bibliothèques Qt, qui s'appuient elles-mêmes sur les filtres DirectShow installés sur le système.

Malheureusement, les codecs de base pris en charge par Windows sont assez pauvres, vous devez donc installer un pack de codecs
supplémentaire comme K-Lite, [disponible ici](https://www.codecguide.com/download_kl.htm).

#### Question n°7 : J'ai un écran 4k et tout dans l'interface de QLC+ est extrêmement petit

**R :** Vous devez ajouter une option à la ligne de commande de QLC+ pour indiquer aux bibliothèques Qt de mettre à l'échelle
automatiquement l'interface sur un écran haute résolution (High DPI). Exemples :

* **Linux (depuis un terminal)** : `QT_AUTO_SCREEN_SCALE_FACTOR=1 qlcplus`
* **Raccourci Windows** : `C:\\Windows\\System32\\cmd.exe /c "SET QT_AUTO_SCREEN_SCALE_FACTOR=1 && START /D ^"C:\\QLC+^" qlcplus.exe"`
* **Mac OS (depuis un terminal)** : `QT_AUTO_SCREEN_SCALE_FACTOR=1 QLC+.app\\Contents\\MacOS\\qlcplus`

Le cas échéant, consultez la page des [paramètres de ligne de commande](/advanced/command-line-parameters) pour plus d'informations.

#### Question n°8 : Mes lumières scintillent. Que puis-je faire ?

**R :** Il arrive qu'un adaptateur DMX USB non bufferisé ou une ligne DMX bruyante provoque un scintillement inattendu de certains
fixtures. QLC+ vous permet d'ajuster la fréquence de rafraîchissement de sortie pour atténuer cet effet indésirable.
Veuillez considérer qu'une bonne fréquence de rafraîchissement DMX devrait être d'environ 44Hz.<br>Voici un exemple montrant
le panneau de configuration d'un clone Open DMX. Vous pouvez y accéder en double-cliquant sur la ligne de sortie ou en sélectionnant
une ligne de sortie puis en cliquant sur l'icône ![](/basics/configure.png).

![dmx-usb-settings](dmx-usb-settings.png "dmx-usb-settings")
