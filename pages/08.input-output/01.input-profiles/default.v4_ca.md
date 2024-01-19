---
title: Perfils d'Entrada
date: '04:57 22-08-2023'
---

Aquest document explica com associar els perfils d'entrada als universos d'entrada i com editar aquests perfils. Primer heu de llegir la pàgina de [mapatge d'entrada/sortida](/input-output) perquè pugueu accedir al gestor d'entrada/sortida i saber com editar els universos d'entrada.

Gestor de Perfils d'Entrada
---------------------

Per accedir al Gestor d'Entrada/Sortida, només heu de fer clic a la pestanya amb la icona ![](/basics/input_output.png) col·locada a la part inferior de la pantalla principal de QLC+.  
Seleccioneu l'univers desitjat a la part esquerra de la pantalla i feu clic a la pestanya Perfil situada al costat de la pestanya Mapeig a la part superior dreta de la pantalla.

Assignació de Perfil
------------------

Veureu una llista de les definicions de perfil d'entrada disponibles, amb una marca de selecció a Cap. Això significa que l'univers actual encara no té assignat un perfil. Per a assignar un perfil a l'univers, simplement col·loqueu una marca de selecció en un dels perfils disponibles fent clic a la casella de selecció buida. Només es pot assignar un perfil a un univers alhora, de manera que la marca de selecció es mourà de la seva posició anterior a l'element que acabeu de seleccionar.

Afegeix/Edita un Perfil
------------------

És probable que el vostre perfil d'entrada no estigui a la llista i n'heu de crear un pel vostre compte.

**Feu clic al botó ![](/basics/edit_add.png) crea un perfil d'entrada nou per començar a fer una definició de perfil per al vostre perfil d'entrada. Alternativament, podeu editar qualsevol perfil existent seleccionant l'element apropiat i fent clic al botó d'edició ![](/basics/edit.png). El procediment és exactament el mateix en ambdós casos a partir d'ara.**

Editor del Perfil d'Entrada
--------------------

S'obre un diàleg amb els camps d'entrada per al fabricant, el model i el tipus.

**Primer introduïu el fabricant del perfil i el model a aquests camps i seleccioneu el tipus de perfil.**

**Tipus** és un de:

* MIDI - per als perfils MIDI, normalment s'utilitza amb el [connector MIDI](/plugins/midi)
* OSC - per als perfils OSC, s'utilitza amb el [connector OSC](/plugins/osc)
* HID - per als perfils HID, s'utilitza amb el [connector HID](/plugins/hid)
* DMX - Perfils genèrics DMX
* ENTTEC - Perfils d'ala ENTTEC, utilitzats amb el connector Enttec Wing

Fins ara, l'única diferència és que els perfils MIDI mostren paràmetres de missatge MIDI a l'editor de canals.

**Ara feu clic a la pestanya Canals per editar els canals del perfil.** Teniu dues opcions per afegir definicions de canal: Manual i Automàtic:

* * *

### Mode Manual

![](/basics/edit_add.png) Feu clic al botó d'afegir per introduir informació individual del canal a mà per a cada canal.  
![](/basics/edit_remove.png) Feu clic per eliminar un canal existent

### Mode Automàtic

![](/basics/wizard.png) Feu clic al botó de l'assistent automàtic per a intentar la detecció automàtica del canal. Rebràs més instruccions de QLC+. Heu de tenir un [connector d'entrada](/input-output) assignat a l'univers actual perquè aquesta característica funcioni. A més, primer heu d'aturar l'assistent per a poder navegar fora d'aquesta pàgina de diàleg.

* * *

### Propietats del Canal

Quan afegiu ![](/basics/edit_add.png) o editeu ![](/basics/edit.png) un canal, es mostrarà una petita finestra, demanant-vos que ompliu o canvieu alguns paràmetres:

* **Número**: El número del canal. Atès que QLC+ admet una àmplia varietat de connectors d'entrada, el número de canal pot no ser intuïtiu, de manera que només editeu això si sabeu el que esteu fent.
* **Nom**: El nom del canal. Aquesta és una cadena arbitrària per indicar el propòsit d'un canal.
* **Tipus**: El tipus de canal. Això pot ser: ![](/basics/slider.png) Slider, ![](/basics/knob.png) Knob, ![](/basics/button.png) Button o ![](/basics/knob.png) Encoder  
    Altres tipus: ![](/basics/back.png) Previous Page, ![](/basics/forward.png) Next Page, ![](/basics/star.png) Set Page s'utilitzen per controlar marcs multipàgina.

Per als perfils MIDI, el diàleg conté camps addicionals:

* Canal
* Missatge
* Paràmetre
* Nota

on podeu introduir l'especificació del canal (que es tradueix al número del canal) d'una manera més intuïtiva.


**Tingueu en compte que no podeu afegir el mateix canal diverses vegades a un perfil.**

* * *

### ![](/basics/slider.png) Propietats del moviment dels controls lliscants/Sliders

Si el vostre perfil d'entrada inclou canals de control lliscant/sliders, quan feu clic sobre ells notareu algunes propietats addicionals que es mostren a la part inferior de la finestra principal de l'editor de perfils d'entrada. Amb aquests, podeu definir com han d'actuar els valors rebuts d'un control lliscant dins de QLC+.

Hi ha dos comportaments: Absolut i Relatiu.

**Absolute** és la configuració predeterminada i bàsicament diu a QLC+ que utilitzi els valors del control lliscant exactament com es reben d'un controlador extern.

**Relative** és un comportament més avançat que resulta útil quan s'utilitza un Joystick HID amb un giny QLC+ [Pad XY](/virtual-console/xy-pad) o un [Giny Slider](/virtual-console/slider). Els valors rebuts d'un controlador extern es tracten com a moviment relatiu a partir de la posició actual d'un giny de Consola Virtual.  
Posem un exemple. Suposem que tens un Pad XY a la teva Consola Virtual, controlant i monitoritzant un grup de caps mòbils. Durant el teu espectacle tindràs una sèrie d'escenes movent la panoràmica i la inclinació del capçal. En algun moment es vol ajustar lleugerament la posició dels caps de només uns pocs graus. Aquí és quan entra en joc el moviment relatiu. Quan moveu el vostre joystick (o control lliscant extern) QLC+ ajustarà els caps de les seves posicions actuals. La direcció dependrà directament del vostre controlador extern. El moviment relatiu s'aturarà quan el controlador extern torni al seu origen. Els joysticks tenen una molla per a això.  
A més, la configuració relativa de l'editor de perfils d'entrada us permet establir un paràmetre de **sensibilitat** que indicarà a QLC+ la força dels moviments del controlador extern. Com més alt sigui aquest valor, més lent es produiran els moviments. Com més baix, més ràpid.

* * *

### ![](/basics/knob.png) Propietats del Codificador

Un codificador és un control rotatiu infinit i només es pot tractar com un control relatiu. Bàsicament el codificador pot començar en qualsevol posició i quan es gira en sentit horari o antihorari generarà desplaçaments positius o negatius dins de QLC+. Quan s'estableix un canal de Perfil d'Entrada al tipus Codificador, és possible especificar un valor **de sensibilitat**, que no és més que el desplaçament relatiu que s'afegirà o restarà del valor actual del canal QLC+.

* * *

### ![](/basics/button.png) Propietats del Botó

És possible canviar el comportament dels botons individuals a partir d'un perfil d'entrada, i les propietats següents s'utilitzaran globalment en QLC+.

**Genera una Prem/Allibera extra quan s'alterna**: aquesta és una opció bastant específica utilitzada per exemple quan es tracta de TouchOSC o Behringer BCF2000.  
Els esdeveniments d'alternança QLC+ s'activen quan es rep una seqüència alta+baixa. Això vol dir que QLC+ espera un valor no zero (típicament 255) seguit d'un valor zero per commutar, per exemple, un botó.  
Dispositius com BCF2000 o programaris com TouchOSC, en canvi, només envien un valor no zero en activar un botó, i un valor zero en desactivar-lo.  
Quan es marca aquesta opció, QLC+ generarà els esdeveniments "absents" per estandarditzar la manera en què funciona algun controlador. Així, per exemple, el BCF2000 semblarà enviar 255+0 quan es prem un botó, i un altre 255+0 quan es torna a prémer.

**Retroalimentació personalitzada**: amb els quadres "Valor Inferior" i "Valor Superior", és possible forçar l'enviament de valors personalitzats quan el botó seleccionat envia un valor no nul i zero.  
Per exemple, amb aquesta opció és possible establir globalment com s'han de acolorir els LED dels dispositius APC de l'Akai quan s'activen/desactiven.  
Tingueu en compte que aquesta opció és global a QLC+, però pot ser anul·lada si és necessari per un giny específic de la consola virtual, a través de la seva pàgina de configuració.

* * *

Torna al plafó de definicions del perfil d'entrada
-------------------------------------------

Quan hàgiu acabat amb el mapeig de canals, feu clic al botó D'acord per acceptar canvis i desar el perfil d'entrada. Si no heu introduït un fabricant/model per al perfil, se us demanarà que els introduïu abans de continuar.  
Ara hauríeu de veure el perfil que acabeu de definir a la llista de perfils d'entrada disponibles. Recordes com assignar-ho a l'univers actual? Desplaceu-vos a l'assignació de perfil si no ho heu fet.

Per eliminar els perfils d'entrada existents, feu clic al botó ![](/basics/edit_remove.png) Elimina. Tingueu en compte que alguns perfils són els anomenats perfils del sistema i no es poden eliminar a menys que siguis l'administrador.

Això és tot!  
Ara pots començar a utilitzar el teu perfil preferit. Quan assigneu un canal d'entrada a un element QLC+ (com ara lliscadors de la consola virtual, grups de canals, etc.), veureu que s'utilitzarà el mapeig del perfil d'entrada.
