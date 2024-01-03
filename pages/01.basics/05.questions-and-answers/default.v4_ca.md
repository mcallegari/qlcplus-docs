---
title: 'Questions and Answers'
date: '08:32 21-08-2023'
media_order: dmx-usb-settings.png
---

<style>
    table td:nth-child(1) {
       background-color: #dff0d7;
    }
</style>
En aquesta pàgina trobaràs les preguntes més freqüents que et poden venir al cap a l'hora de començar amb QLC+.  
Aquí pots trobar la resposta directament o trobar ajuda per orientar-te en la direcció correcta.

| | |
| - | - | - |
| **1** | **Q:** | **QLC+ no pot detectar el meu dispositiu USB** |
| | **A:** | QLC+ és compatible amb una àmplia varietat de dispositius USB. En primer lloc, hauríeu de comprovar si la connexió física és correcta. Normalment, un LED del dispositiu ha d'indicar si està encès i funciona correctament.<br><br>Si utilitzeu Windows i el vostre dispositiu està fabricat per Peperoni o Velleman, llegiu la informació sobre com fer que funcionin en aquestes pàgines d'ajuda. Per a problemes de llicència, tots dos necessiten un fitxer DLL addicional per funcionar. Comproveu el connector de sortida [Peperoni](/plugins/peperoni) o el [connector de sortida de Velleman](/plugins/velleman)Si utilitzeu Linux, comproveu si la vostra distribució ha detectat el dispositiu quan està connectat<x9></x9><x10></x10>. Bàsicament, l'ordre `dmesg` us hauria de dir alguna cosa. |

<hr>

| | |
| - | - | - |
| **2** | **P:** | **Tinc diversos [botons](/virtual-console/button) a la meva Consola Virtual.** Necessito una manera de desactivar el botó actualment actiu quan n'habilito un altre. Com ho faig? |
| | **R:** | Simplement col·loqueu els botons dins d'un [marc Solo](/virtual-console/solo-frame). Fa exactament això. |

<hr>

| | |
| - | - | - |
| **3** | **P:** | **Acabo d'actualitzar el meu Mac a Mavericks (o posterior) i el meu adaptador DMX USB no transmet cap dada.** |
| | **R:** | El problema està en un controlador d'Apple anomenat AppleUSBFTDI, que pren el control de tots els dispositius basats en FTDI detectats al sistema.<x5></x5>Hi ha algunes maneres de resoldre el problema, però bàsicament el resultat és el mateix: el controlador d'Apple ha d'estar desactivat.<x6></x6><x7></x7>Consulteu la pàgina dedicada per entendre com desactivar el controlador FTDI d'Apple En cas contrari, podeu descarregar [l'eina ENTTEC FTDI Driver Control](https://www.dmxis.com/release/FtdiDriverControl.zip) i intentar activar/[desactivar el controlador](/plugins/disable-apple-serial-vcp-driver)<x9></x9>d'Apple amb ella.<x11></x11><x12></x12>**Nota 1: això pot comprometre el comportament d'altres dispositius USB, així que fes-ho només si saps el que estàs fent!**<x14></x14>**Nota 2: cada vegada que Mac OS rep una actualització, heu de tornar a realitzar aquest procediment.**<x16></x16>**Nota 3: El més probable és que, quan desactiveu / activeu el controlador d'Apple, hàgiu de reiniciar el vostre Mac** |

<hr>

| | |
| - | - | - |
| **4** | **P:** | **On es troba la carpeta d'usuari QLC+ al meu sistema?** |
| | **R:** | La carpeta d'usuari és on van els accessoris d'usuari, els perfils d'entrada, els scripts RGB i les plantilles MIDI.<x5></x5>Canvia en funció del vostre sistema operatiu:**Linux**: és una carpeta oculta al directori d'inici de l'usuari: $HOME/.`qlcplus`<x9></x9>**Windows**: és una carpeta del vostre directori d'usuari (per exemple, MyUser): C:\\Users\\MyUser\\QLC+**Mac OS**: es troba al vostre usuari `Directori de biblioteques`:<x6></x6> `$HOME/Biblioteca/Aplicació\\ Suport/QLC+`<x16></x16>``<x12></x12>Podeu arribar a qualsevol d'aquestes carpetes des d'un terminal amb l'ordre `cd`. Per exemple:<x18></x18><x19></x19>`cd $HOME/Biblioteca/Aplicació\\ Suport/`QLC+ Tingueu en compte que els fixtures i els perfils d'entrada que es troben a la carpeta d'usuari tindran prioritat sobre els mateixos fitxers de la carpeta del sistema QLC+<x21></x21><x22></x22>. <br> També podeu desar [definicions de Fixture](/basics/glossary-and-concepts#fixtures) i [Perfils d'entrada](/input-output/input-profiles) a la mateixa carpeta que el vostre projecte, QLC+ els trobarà quan obriu aquest projecte. |

<hr>

| | |
| - | - | - |
| **5** | **P:**  | **On es troba la carpeta del sistema QLC+ al meu sistema?**  |
| |**R:** | . La carpeta del sistema és on s'instal·len els recursos QLC+ (fixtures, perfils d'entrada, scripts RGB, etc) i canvia depenent del vostre sistema operatiu:<br>**Linux**: és una carpeta fixa anomenada `/usr/share/qlcplus`<br>**Windows**: és la carpeta on heu instal·lat realment QLC+. Per defecte: `C:\\QLC+`<br>**Mac OS**: és una carpeta dins del paquet QLC+ (fitxer.app). És possible navegar pel contingut del paquet QLC+.app simplement amb el Finder. Simplement feu clic dret sobre el fitxer i seleccioneu «Mostra el contingut del paquet».<br>En cas contrari, es pot arribar a la carpeta del sistema amb un terminal però depèn d'on heu instal·lat QLC+.<br>Per exemple si heu arrossegat QLC+ a les aplicacions serà: `/Applications/QLC+.app/Contents/Resources` s

<hr>

| | |
| - | - | - |
| **6** | **P:**  | **QLC+ no pot reproduir alguns vídeos al Windows** |
| | **R:** | QLC+ es basa en les biblioteques Qt que es basen en els filtres DirectShow instal·lats en el sistema.<br>Malauradament els còdecs bàsics suportats per Windows són bastant pobres, per la qual cosa heu d'instal·lar algun paquet de còdecs addicionals com K-Lite, [disponible aquí](https://www.codecguide.com/download_kl.htm). |

<hr>

| | |
| - | - | - |
| **7** | **P:** | **Tinc una pantalla de 4k i tot en la interfície QLC+ és extremadament petit** |
| |  **R:** | Heu d'afegir una opció a la línia d'ordres de QLC+ per a indicar a les biblioteques de les Qt que a escala automàtica la interfície en una pantalla de PPP alt. Exemples:<br><br>**Linux (des de terminal)**: `QT.AUTO.SCREEN.SCALE.FACTOR11 qlcplus`<br>**drecera de Windows**: `C:\\Windows\\System32\\cmd.exe /c "SET QT.AUTO.SCREEN.SCALE.FACTOR11 && START /D ."C:\\QLC+." qlcplus.exe"<br>0 <br>1 `QT.AUTO.SCREEN.SCALE.1 QLC+.app\\Contents\\MacOS\\qlcplus<br><br>](/advanced/command-line-parameters)19 Per a més informació. |

<hr>

| | |
| - | - | - |
| **8** | **P:** | **Les meves llums parpellegen. Què puc fer?** |
| | **R:** | De vegades un adaptador USB DMX sense memòria intermèdia o una línia DMX sorollosa pot fer que alguns fixtures parpellegin inesperadament. QLC+ permet ajustar la freqüència de sortida per mitigar l'efecte no desitjat. Considereu que una bona freqüència d'actualització DMX hauria de ser al voltant de 44Hz.<br>Aquí hi ha un exemple que mostra un plafó de configuració del clon Open DMX. Podeu accedir-hi fent doble clic a la línia de sortida o seleccionant una línia de sortida i fent clic a la  ![](/basics/configure.png)icona.<br><br> ![dmx-usb-settings](dmx-usb-settings.png "dmx-usb-settings") |
