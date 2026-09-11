---
title: 'Main Window'
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

### Capítol 2

# Finestra Principal

La finestra principal de QLC+ consta de quatre parts principals:

1.  Una barra superior amb les dreceres globals
2.  Una barra de submenú contextual que conté controls per al context seleccionat
3.  L'àrea de context principal, que pot ser un panell de previsualització o operatiu
4.  Panells laterals per actuar sobre la vista actual sense malgastar espai

![](/main-window/main-window-v5.png)

La majoria dels controls del programari tenen tooltips, que apareixen en mantenir el cursor del ratolí sobre ells durant una estona.

### Barra superior (1)

La barra superior principal conté les dreceres següents (d'esquerra a dreta):

* * *
#### ![](../basics/qlcplus.svg?resize=48,48) Menú d'accions globals

Aquest menú és accessible des de qualsevol context de QLC+ i és una drecera a les principals operacions de projecte.  
Els elements del menú es llisten aquí:

![](../basics/filenew.svg) Crea un projecte nou en blanc (CTRL+N)  
![](../basics/fileopen.svg?resize=48,48) Obre un projecte existent (en passar-hi per sobre, mostra una llista de fitxers recents) (CTRL+O)  
![](../basics/filesave.svg?resize=48,48) Desa el projecte actual (CTRL+S)  
![](../basics/filesaveas.svg?resize=48,48) Desa el projecte actual amb un nom nou  
![](../basics/import.svg?resize=48,48) Importa Fixtures i Funcions d'un projecte existent  

![](../basics/undo.svg) Desfà l'última operació  
![](../basics/redo.svg) Refà l'última operació desfeta  

![](../basics/network.svg) Configura els paràmetres de xarxa de client i servidor (ja sigui nativa o interfície web)  
![](../basics/diptool.svg) Obre l'eina de càlcul de l'interruptor DIP  
![](../basics/configure.svg) Obre el panell de configuració de la interfície per ajustar colors, escalat, etc..  
<i class="fa fa-maximize fa-2x"></i> Activa/desactiva el mode de pantalla completa (CTRL+F11)  
<i class="fa fa-earth-europe fa-2x"></i> Canvia l'idioma de la interfície (pot requerir reiniciar l'aplicació)  
<i class="fa fa-circle-info fa-2x"></i> Mostra informació sobre QLC+  

* * *

#### Botons de canvi de context

En prémer aquests botons, pots canviar d'un context a un altre.  
Els contexts poden ajudar amb la fase de disseny, les operacions en directe o la configuració d'entrada/sortida.  
Els contexts es poden separar de la finestra principal fent clic amb el botó dret al seu botó.  

![](../basics/editor.svg?resize=48,48) Mostra [Fixtures and Functions](/fixtures-and-functions)  
![](../basics/virtualconsole.svg?resize=48,48) Mostra la [Virtual Console](/virtual-console)  
![](../basics/simpledesk.svg?resize=48,48) Mostra el [Simple Desk](/simple-desk)  
![](../basics/showmanager.svg?resize=48,48) Mostra el [Show Manager](/show-manager)  
![](../basics/inputoutput.svg?resize=48,48) Mostra el gestor de configuració d'[Input/Output](/input-output)

#### Ajudants globals

La barra superior de la finestra principal inclou més ajudants a la part dreta de la pantalla.

![](../basics/dmxdump.svg?resize=48,48) Obre la finestra emergent [DMX Dump](dmx-dump) per crear Scenes ràpidament  
<i class="fa fa-wave-square fa-2x"></i>    Control de BPM: mostra el número de BPM actual i obre la finestra emergent [BPM Control](/bpm-system)  
![](../basics/stopall.svg?resize=48,48) Mostra el nombre de funcions en execució i permet aturar-les totes alhora  


### Barra de subcontrol de context (2)

Aquesta és una altra barra de menú que canvia segons el context (o que no hi és present) on pots seleccionar el mode de previsualització del context o trobar una barra d'eines amb diversos controls.  

* Fixtures And Functions mostra el mode de previsualització i els selectors d'univers 
* Virtual Console mostra un selector de pàgina
* Simple Desk mostra un selector d'univers i el reinici
* Show Manager mostra controls d'editor i de reproducció
* Input/Output Manager no té barra de subcontrol

### Àrea de Treball Principal (3)

Aquí és on passa tot. El panell actiu depèn de quin context estigui seleccionat en cada moment.

### Panells Laterals (4)

Els panells laterals es van introduir a la versió 5 per estalviar espai i oferir eines ràpides que milloren l'edició del projecte.  
En aquests panells pots trobar eines com ara:
* Fixture browser
* Editors de Fixtures, Funcions, Palettes o Widgets
* Llista de connectors d'Input/Output, Perfils d'Entrada o Widgets de la Virtual Console
