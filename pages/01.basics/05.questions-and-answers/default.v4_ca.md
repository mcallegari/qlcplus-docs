---
title: 'Preguntes i Respostes'
date: '08:32 21-08-2023'
media_order: dmx-usb-settings.png
---

En aquesta pàgina trobaràs les preguntes més freqüents que et poden venir al cap a l'hora de començar amb QLC+.  
Aquí pots trobar la resposta directament o trobar ajuda per orientar-te en la direcció correcta.

## P1: QLC+ no pot detectar el meu dispositiu USB

**R:** QLC+ és compatible amb una àmplia varietat de dispositius USB. En primer lloc, hauríeu de comprovar si la
connexió física és correcta. Normalment, un LED del dispositiu ha d'indicar si està encès i funciona correctament.

Si utilitzeu Windows i el vostre dispositiu està fabricat per Peperoni o Velleman, llegiu la informació sobre com
fer que funcionin en aquestes pàgines d'ajuda. Per a problemes de llicència, tots dos necessiten un fitxer DLL
addicional per funcionar. Comproveu el connector de sortida [Peperoni](/plugins/peperoni) o el
[connector de sortida de Velleman](/plugins/velleman)Si utilitzeu Linux, comproveu si la vostra distribució ha detectat
el dispositiu quan està connectat. Bàsicament, l'ordre `dmesg` us hauria de dir alguna cosa.

## P2: Tinc diversos [botons](/virtual-console/button) a la meva Consola Virtual. Necessito una manera de desactivar el botó actualment actiu quan n'habilito un altre. Com ho faig?

**R:** Simplement col·loqueu els botons dins d'un [marc Solo](/virtual-console/solo-frame). Fa exactament això.

## P3: Acabo d'actualitzar el meu Mac a Mavericks (o posterior) i el meu adaptador DMX USB no transmet cap dada.

**R:** El problema està en un controlador d'Apple anomenat AppleUSBFTDI, que pren el control de tots
els dispositius basats en FTDI detectats al sistema.Hi ha algunes maneres de resoldre el problema,
però bàsicament el resultat és el mateix: el controlador d'Apple ha d'estar desactivat. Consulteu
la pàgina dedicada per entendre com desactivar el controlador FTDI d'Apple En cas contrari, podeu
descarregar [l'eina ENTTEC FTDI Driver Control](https://www.dmxis.com/release/FtdiDriverControl.zip)
i intentar activar/[desactivar el controlador](/plugins/disable-apple-serial-vcp-driver)d'Apple amb ella.

**Nota 1: això pot comprometre el comportament d'altres dispositius USB, així que fes-ho només si saps el que estàs fent!**

**Nota 2: cada vegada que Mac OS rep una actualització, heu de tornar a realitzar aquest procediment.**

**Nota 3: El més probable és que, quan desactiveu / activeu el controlador d'Apple, hàgiu de reiniciar el vostre Mac**

## P4: On es troba la carpeta d'usuari QLC+ al meu sistema?

**R:** La carpeta d'usuari és on van els accessoris d'usuari, els perfils d'entrada, els scripts RGB
i les plantilles MIDI.Canvia en funció del vostre sistema operatiu:

* **Linux**: és una carpeta oculta al directori d'inici de l'usuari: $HOME/.`qlcplus`
* **Windows**: és una carpeta del vostre directori d'usuari (per exemple, MyUser): C:\\Users\\MyUser\\QLC+
* **Mac OS**: es troba al vostre usuari `Directori de biblioteques`: `$HOME/Biblioteca/Aplicació\\ Suport/QLC+`
  Podeu arribar a qualsevol d'aquestes carpetes des d'un terminal amb l'ordre `cd`. Per exemple:`cd $HOME/Biblioteca/Aplicació\\ Suport/`
  QLC+ Tingueu en compte que els fixtures i els perfils d'entrada que es troben a la carpeta d'usuari
  tindran prioritat sobre els mateixos fitxers de la carpeta del sistema QLC+. També podeu desar
  [definicions de Fixture](/basics/glossary-and-concepts#fixtures) i [Perfils d'entrada](/input-output/input-profiles)
  a la mateixa carpeta que el vostre projecte, QLC+ els trobarà quan obriu aquest projecte.

## P5: On es troba la carpeta del sistema QLC+ al meu sistema?

**R:** La carpeta del sistema és on s'instal·len els recursos QLC+ (fixtures, perfils d'entrada, scripts RGB, etc) i canvia depenent del vostre sistema operatiu:

* **Linux**: és una carpeta fixa anomenada `/usr/share/qlcplus`
* **Windows**: és la carpeta on heu instal·lat realment QLC+. Per defecte: `C:\\QLC+`
* **Mac OS**: és una carpeta dins del paquet QLC+ (fitxer.app). És possible navegar pel contingut del
  paquet QLC+.app simplement amb el Finder. Simplement feu clic dret sobre el fitxer i seleccioneu
  «Mostra el contingut del paquet».<br>En cas contrari, es pot arribar a la carpeta del sistema amb
  un terminal però depèn d'on heu instal·lat QLC+.<br>Per exemple si heu arrossegat QLC+ a les aplicacions
  serà: `/Applications/QLC+.app/Contents/Resources` s

## P6: QLC+ no pot reproduir alguns vídeos al Windows

**R:** QLC+ es basa en les biblioteques Qt que es basen en els filtres DirectShow instal·lats en el sistema.

Malauradament els còdecs bàsics suportats per Windows són bastant pobres, per la qual cosa heu d'instal·lar
algun paquet de còdecs addicionals com K-Lite, [disponible aquí](https://www.codecguide.com/download_kl.htm).

## P7: Tinc una pantalla de 4k i tot en la interfície QLC+ és extremadament petit

**R:** Heu d'afegir una opció a la línia d'ordres de QLC+ per a indicar a les biblioteques de
les Qt que a escala automàtica la interfície en una pantalla de PPP alt. Exemples:

* **Linux (des de terminal)**: `QT.AUTO.SCREEN.SCALE.FACTOR11 qlcplus`
* **drecera de Windows**: `C:\\Windows\\System32\\cmd.exe /c "SET QT.AUTO.SCREEN.SCALE.FACTOR11 && START /D ."C:\\QLC+." qlcplus.exe"`
* **Mac OS**: `QT.AUTO.SCREEN.SCALE.1 QLC+.app\\Contents\\MacOS\\qlcplus`
  [Per a més informació.](/advanced/command-line-parameters) 

## P8: Les meves llums parpellegen. Què puc fer?

**R:** De vegades un adaptador USB DMX sense memòria intermèdia o una línia DMX sorollosa pot
fer que alguns fixtures parpellegin inesperadament. QLC+ permet ajustar la freqüència de sortida
per mitigar l'efecte no desitjat. Considereu que una bona freqüència d'actualització DMX hauria de
ser al voltant de 44Hz.

Aquí hi ha un exemple que mostra un plafó de configuració del clon Open DMX. Podeu accedir-hi fent doble clic
a la línia de sortida o seleccionant una línia de sortida i fent clic a la  ![](/basics/configure.png)icona.

![dmx-usb-settings](dmx-usb-settings.png "dmx-usb-settings")
