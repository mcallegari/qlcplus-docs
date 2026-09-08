---
title: MIDI
date: '05:15 22-08-2023'
---

Introduction
------------

Ce plugin fournit une prise en charge input/output pour le [protocole MIDI](https://en.wikipedia.org/wiki/MIDI) et donne à l'utilisateur la liberté de contrôler des paramètres typiques comme les canaux, les Notes, le Program Change et le Control Change.  
Le plugin MIDI peut être très puissant lorsqu'il est utilisé en combinaison avec des périphériques MIDI tels que des claviers, des contrôleurs MIDI (comme le Behringer BCF2000 ou le KORG nanoKONTROL) ou un séquenceur audio logiciel comme Cubase ou Ardour 3.  
L'utilisation peut varier du contrôle fader-à-fader (le cas du BCF2000) au déclenchement de séquences pour des spectacles synchronisés (concerts contrôlés par métronome à l'aide d'un séquenceur audio)

Configuration
-------------

Lorsque vous cliquez sur le bouton de configuration ![](/basics/configure.png), une fenêtre apparaît, montrant toutes les lignes d'input et d'output MIDI détectées.  
Chaque ligne dispose de trois options modifiables selon vos besoins :

* **Canal MIDI** : Il s'agit du canal sur lequel QLC+ recevra ou enverra des données via le système MIDI. Les canaux MIDI vont de 1 à 16. Le canal spécial « 1-16 » indiquera à QLC+ de recevoir ou d'envoyer des données sur n'importe quel canal MIDI.
* **Mode** : Il s'agit du mode MIDI que QLC+ utilisera pour envoyer des données via le système MIDI. Ce paramètre peut prendre trois valeurs possibles :
    * **Note velocity** : dans ce mode, QLC+ enverra les données en utilisant la vélocité des notes MIDI. Les notes MIDI vont de 21 (A0) à 108 (C8) et chaque note peut avoir une vélocité allant de 0 à 127, qui sera doublée dans QLC+ pour correspondre à la plage DMX (0-255).
    * **Control Change** : il s'agit de l'un des messages du protocole MIDI (comme le Program Change) fréquemment utilisé par les contrôleurs MIDI. Chaque appareil doit lister les messages CC pris en charge dans son manuel utilisateur, veuillez donc le consulter avant d'utiliser ce mode. La plage CC va de 0 à 127 et peut avoir des valeurs de 0 à 127, qui seront doublées dans QLC+ pour correspondre à la plage DMX (0-255).
    * **Program Change** : il s'agit de l'un des messages du protocole MIDI (comme le Control Change) fréquemment utilisé par les contrôleurs MIDI. Chaque appareil doit lister les messages PC pris en charge dans son manuel utilisateur, veuillez donc le consulter avant d'utiliser ce mode. La plage PC va de 0 à 127 et peut avoir des valeurs de 0 à 127, qui seront doublées dans QLC+ pour correspondre à la plage DMX (0-255).
* **Message d'initialisation** : Il s'agit d'une liste de préréglages (modèles) contenant le message d'initialisation que QLC+ enverra à l'ouverture d'un périphérique MIDI avant de l'utiliser. Une explication détaillée de cette fonctionnalité est fournie ci-dessous.

> [!IMPORTANT]
> **Remarque :** QLC+ respecte la norme MIDI, selon laquelle un message « Note On » avec une vélocité de `0` est interprété comme un « Note Off ». Si votre contrôleur ou votre logiciel envoie des messages Note On avec une vélocité de `0`, QLC+ ne déclenchera pas les boutons de la Virtual Console. Pour activer les contrôles, assurez-vous que les messages Note On utilisent une vélocité non nulle. Ce problème a été observé avec ProPresenter, et peut être résolu en définissant une vélocité non nulle.

Feedback
---------

Le plugin MIDI est l'un des plugins de QLC+ prenant en charge le feedback. Lorsque QLC+ détecte un périphérique MIDI avec une ligne d'output, il activera la case à cocher de feedback dans le [panneau Input/Output](/input-output). Veuillez noter que l'output et le feedback sont exclusifs, ils ne peuvent donc pas être utilisés simultanément.  
Si votre périphérique MIDI prend en charge un canal de retour, QLC+ peut lui envoyer un feedback visuel/mécanique. Des appareils comme le Behringer BCF2000 prennent en charge cette fonctionnalité. Ceci est très utile lors de spectacles en direct pour avoir une connaissance immédiate de l'état actuel des faders mappés dans QLC+.  
  
Une petite astuce réalisable avec QLC+ consiste à utiliser le feedback comme une ligne de sortie MIDI générique pour déclencher des contrôleurs/séquenceurs externes.  
Regardons quelques exemples :

* Input : **OSC** ---\> Output : **DMX USB** --\> Feedback : **MIDI**
* Input : **Enttec Wing** --\> Output : **ArtNet** --\> Feedback : **MIDI**

KORG nanoPAD Axe X
-------------------

Pour des raisons inconnues, les réglages d'usine par défaut du nanoPAD ne mappent pas l'axe X de la zone du pad. Pour le faire fonctionner pleinement avec QLC+, veuillez télécharger l'utilitaire KORG (Windows et macOS uniquement) depuis [ici](http://i.korg.com/SupportPage.aspx?productid=415) et régler l'axe X sur CC2 (Control Change n°2).

Feedback LED AKAI APC
----------------------

Lors de l'utilisation de l'un des contrôleurs AKAI APC, il existe une fonctionnalité qui peut s'avérer très pratique : le feedback de couleur LED.  
Le comportement par défaut avec les boutons de la Virtual Console est : valeur = 0 : LED éteinte, valeur = 255 : LED verte  
Cela peut être personnalisé lors de la sélection d'un canal d'input, en appuyant sur le bouton « Custom feedback ».  
Une nouvelle zone s'affiche, montrant la possibilité de saisir une valeur inférieure et une valeur supérieure. Ceci se traduit essentiellement par les valeurs que QLC+ doit envoyer pour les états on/off des boutons.  
Puisque le protocole MIDI fonctionne dans une plage de valeurs de 0 à 127, et que QLC+ fonctionne dans la plage DMX de 0 à 255, le tableau suivant vous indique directement les valeurs que vous devez saisir pour obtenir la couleur souhaitée d'une LED APC. Elles sont essentiellement tirées des manuels APC et doublées.

| Valeur | Couleur LED |
| --- | --- |
| 0   | Éteinte |
| 2   | Verte |
| 4   | Verte clignotante |
| 6   | Rouge |
| 8   | Rouge clignotante |
| 10  | Jaune |
| 12  | Jaune clignotante |
| 14-255 | Verte |

Il est intéressant de noter que vous n'êtes pas obligé de garder 0 comme valeur inférieure. Par exemple, avec inférieure = 6 et supérieure = 2, le résultat sera : Fonction Off -> LED rouge, Fonction On -> LED verte.

Horloge MIDI beat clock
---------------

À partir de la version 4.5.0, QLC+ prend en charge la [MIDI beat clock](https://en.wikipedia.org/wiki/MIDI_beat_clock)  
À ne pas confondre avec le [MIDI timecode](https://en.wikipedia.org/wiki/MIDI_timecode), la MIDI beat clock est un signal utile pour synchroniser des appareils basés sur le BPM, comme une boîte à rythmes, avec vos lumières contrôlées par QLC+.  
Deux canaux MIDI spéciaux ont été mappés dans QLC+ pour contrôler vos widgets de [Virtual Console](/virtual-console) avec une beat clock.  
Voici une brève explication des canaux spéciaux :

* **Canal 530** : Un signal est envoyé sur ce canal lorsqu'une beat clock démarre ou s'arrête.
* **Canal 531** : Ce signal est envoyé à chaque BPM. QLC+ ne tient pas compte des mesures (par ex. 3/4, 4/4, 7/8), vous devez donc réfléchir à la manière dont QLC+ le traitera lors de la configuration de votre horloge MIDI.

  
**Astuce** : Si votre contrôleur est réglé pour fonctionner à un BPM élevé (par ex. 180-200), vous pourriez avoir du mal à capter le signal de démarrage. Une astuce consiste à capter le signal d'arrêt à la place. Exemple :  

1.  Activez la détection automatique des widgets de la Virtual Console de QLC+
2.  Appuyez sur play sur votre appareil générant la MIDI beat clock. QLC+ détectera le canal 530 et basculera très rapidement vers 531
3.  Arrêtez la lecture sur votre appareil de MIDI beat clock. QLC+ détectera à nouveau le canal 530.
4.  Désactivez la détection automatique des widgets de la Virtual Console de QLC+

De la même manière, vous pouvez également capter le signal de battement. Il suffit de désactiver le processus de détection automatique avant d'arrêter la lecture sur votre contrôleur de beat (inversez les étapes 3 et 4).

Message d'initialisation MIDI
---------------------------

Il peut arriver que votre périphérique MIDI nécessite certaines commandes pour passer dans un mode de fonctionnement spécifique  
Le protocole MIDI peut gérer cela via SysEx. Il s'agit de messages particuliers permettant d'indiquer à un périphérique MIDI comment se comporter.  
QLC+ peut utiliser un modèle XML pour réaliser cela, sélectionnable dans le panneau de configuration MIDI.  
Voici un exemple à quoi ressemble un modèle :  

&lt;!DOCTYPE MidiTemplate&gt;
&lt;MidiTemplate&gt;
 &lt;Creator&gt;
  &lt;Author&gt;Your name&lt;/Author&gt;
 &lt;/Creator&gt;
 &lt;Description&gt;A brief description of what the template does.&lt;/Description&gt;
 &lt;Name&gt;Template name to be displayed by QLC+&lt;/Name&gt;
 &lt;InitMessage&gt;F0 47 00 7B 60 00 04 41 09 00 05 F7&lt;/InitMessage&gt;
&lt;/MidiTemplate&gt;

Vous pouvez créer ceux dont vous avez besoin et les placer dans votre dossier MidiTemplates.  
N'hésitez pas à les soumettre sur le forum de QLC+.

Carte des canaux
-----------------

Pour gérer un mélange de divers messages MIDI (Notes, PC, CC, etc.), QLC+ les remappe dans un ordre séquentiel.  
Voici les numéros de canaux à utiliser dans l'[éditeur de profil d'Input](/input-output/input-profiles) :

| Canal | Message MIDI |
| --- | --- |
| 1   | Control Change 1 |
| ... | ... |
| 128 | Control Change 128 |
| 129 | NOTE ON/NOTE OFF 1 |
| ... | ... |
| 256 | NOTE ON/NOTE OFF 128 |
| 257 | NOTE AFTERTOUCH 1 |
| ... | ... |
| 384 | NOTE AFTERTOUCH 128 |
| 385 | Program Change 1 |
| ... | ... |
| 512 | Program Change 128 |
| 513 | Channel Aftertouch |
| 514 | Pitch Wheel |
| 530 | MIDI Beat Clock : Start/Continue |
| 531 | MIDI Beat Clock : Beat |
| 532 | MIDI Beat Clock : Stop |

En mode OMNI, ajoutez 4096 * numéro de canal
