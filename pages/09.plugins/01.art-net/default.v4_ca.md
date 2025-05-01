---
title: Art-Net
date: '05:06 22-08-2023'
---

Introducció
------------

QLC+ suporta el protocol [Art-Net](https://ca.wikipedia.org/wiki/Art-Net) a través d'un connector d'entrada/sortida que rep i transmet paquets a la xarxa.  
No es necessiten requisits addicionals, ja que QLC+ té una implementació nativa del protocol Art-Net que funciona en sistemes Linux, Windows i macOS.  
El connector Art-Net pot enviar i rebre paquets des de múltiples targetes de xarxa, adreces virtuals, el dispositiu de loopback (127.0.0.1) i múltiples universos per interfície de xarxa.  
Per defecte, els paquets Art-Net es transmeten com a UDP, utilitzant el port per defecte 6454 i l'adreça de difusió de l'interfície  seleccionada (p. ex. 192.168.0.255). Quan s'utilitzen els paquets de dispositius de loopback sempre es transmeten utilitzant l'adreça 127.0.0.1.  
Quan es transmeten múltiples universos a la mateixa interfície, els paquets s'enviaran per defecte amb un Univers Art-Net ID igual al número d'univers QLC+ menys 1.

Per exemple:  
QLC+ Univers 1 --- Art-Net Univers 0  
QLC+ Univers 2 --- Art-Net Univers 1  
...  
QLC+ Univers 8 -- -- Art-Net Univers 7

Aquesta elecció es deu a alguns fets:<x1></x1>
1- El primer univers vàlid d'Art-Net és 0 i no 1<x2></x2>
2- El primer univers acceptat pels dispositius comercials Art-Net-DMX com eDMX i ODE és 0, de manera que per tenir QLC+ funcionant fora de la caixa, el primer univers Art-Net ha de ser 0.

Si els paràmetres anteriors no compleixen els requisits de la vostra xarxa, llegiu el capítol següent.

Configuració
-------------

En fer clic al botó de configuració ![](/basics/configure.png), es mostrarà un petit diàleg que mostrarà 2 pestanyes: la configuració dels Universos i l'Arbre de Nodes.

**Configuració d'Universos**: després que un univers QLC+ estigui pedaçat amb una entrada o sortida d'Art-Net, es mostrarà una entrada en aquesta llista, permetent configurar manualment els paràmetres desitjats per ser utilitzats pel connector Art-Net.  
Les línies d'entrada no tenen paràmetres particulars, mentre que es pot configurar una línia de sortida amb els següents:

* **Adreça IP**: Aquesta és l'adreça IP de destinació a la qual el connector Art-Net transmetrà els paquets. Per defecte s'utilitza una adreça de difusió/broadcast (acabant amb .255) i establint-la en el rang 1-254, Art-Net transmetrà un univers QLC+ en mode unicast. Si la vostra xarxa Art-Net utilitza un concentrador simple, l'adreça IP de sortida és irrellevant, ja que broadcast o unicast no suposa cap diferència. No obstant això, si s'utilitza un commutador de xarxa, la unicast és fonamental per equilibrar la congestió de la xarxa, ja que cada port del commutador està associat a una IP de xarxa i rebrà només els paquets amb la seva IP de destinació.<x2></x2>
**Nota**: No establiu l'adreça IP de sortida amb la mateixa adreça IP del node transmissor (per exemple, l'ordinador on s'executa QLC+), ja que és incorrecta i pot provocar un bucle de xarxa. Si necessiteu comunicar-vos amb un node Art-Net que s'executa a la mateixa màquina on s'està executant QLC+, utilitzeu el dispositiu de loopback en el seu lloc (127.0.0.1).
* **Univers Art-Net**: Aquest és l'univers Art-Net que s'escriurà realment en cada paquet transmès. Si establiu aquest paràmetre, podeu utilitzar qualsevol univers QLC+ per a transmetre a l'univers Art-Net desitjat.
* **Mode de Transmissió**: Aquí podeu seleccionar si QLC+ ha de transmetre universos complets o parcials.  
    "Complet" significa que tots els 512 canals DMX d'un univers es transmeten a la velocitat del rellotge intern QLC+ (50Hz), produint una taxa de bits fixa d'uns 200kbps.<x3></x3>
    "Parcial", en canvi, significa que QLC+ transmetrà només el canal DMX realment utilitzat en un univers, a partir del canal 1. Per exemple, si eleveu el canal 3 d'un aparell amb l'adreça 50, el connector Art-Net transmetrà només 53 canals DMX, limitant així la taxa de bits de trasnmissió. Utilitzeu aquest paràmetre només si el node Art-Net receptor admet la transmissió parcial.

Els paràmetres que són diferents dels valors per defecte del connector, s'emmagatzemaran al vostre espai de treball QLC+, per augmentar la portabilitat d'un projecte a través de diferents plataformes, com ara diferents sistemes operatius o un PC i un Raspberry Pi.

**Arbre de Nodes**: Aquesta pestanya mostra els nodes Art-Net descoberts a la xarxa, agrupats per la interfície de xarxa.  
QLC+ sempre apareixerà en aquesta llista com a node participant a la xarxa.  
Els nodes Art-Net s'afegeixen a aquesta llista si són compatibles amb el missatge ArtPoll/ArtPollReply, en cas contrari no apareixeran. Això no vol dir que no puguis comunicar-te amb ells.

DMXKing eDMX i ENTTEC ODE
---------------------------

Si teniu un d'aquests dispositius, tots dos tenen eines de configuració que us poden ser útils quan treballeu amb QLC +. Amb ells podeu establir diversos paràmetres perquè coincideixin amb la millor configuració per a les dades d'entrada/sortida de/a QLC+.  
Per exemple, si voleu que l'univers QLC+ 3 emeti dades al primer port d'un eDMX, heu d'utilitzar l'eina següent per canviar l'adreça de l'univers del dispositiu a 2.

Aquí els enllaços per descarregar les eines:  
[DMXKing eDMX Eina de configuració](https://dmxking.com/downloads/eDMX_Configuration.zip)  
[Utilitat de gestió de nodes ENTTEC](https://www.enttec.com/?main_menu=Products&pn=79001)

Compatibilitat
-------------

QLC+ ha estat provat amb els següents programaris/dispositius Art-Net:

* [DMXKing eDMX1 TX](https://dmxking.com/artnetsacn/edmx1-max) \- 1 Dispositiu de sortida
* [DMXKing eDMX2 TX](https://dmxking.com/artnetsacn/edmx2-max) \- 2 Dispositiu de sortida
* [Enttec Open DMX Ethernet (ODE)](https://www.enttec.com/index.php?main_menu=Products&pn=70305) \- Dispositiu d'entrada/sortida
* [OLA - Open Lighting Architecture](https://wiki.openlighting.org/index.php/Open_Lighting_Architecture) \- Node de programari d'entrada/sortida
* [Art-Net Controller LITE](https://sites.google.com/site/artnetcontroller/) \- Controlador d'entrada per a Android
* [Art-Net Controller LITE](https://play.google.com/store/apps/details?id=com.chfsoft.artnet_dmx_Lite&noprocess) \- Controlador d'entrada per a Android
* [Modul8](https://www.garagecube.com/modul8/)
* [Jinx!](https://live-leds.de/) \- Control de Matrius LED
