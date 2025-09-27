---
title: 'E1.31 (sACN)'
date: '05:11 22-08-2023'
media_order: e131_configuration.png
---

Introducció
------------

QLC+ suporta el protocol [E1.31](https://wiki.openlighting.org/index.php/E1.31) (també conegut com a sACN) a través d'un connector d'entrada/sortida que rep i transmet paquets a la xarxa.  
No es necessiten requisits addicionals, ja que QLC+ té una implementació nativa del protocol E1.31 que funciona en sistemes Linux, Windows i OSX.  
El connector E1.31 pot enviar i rebre paquets de múltiples targetes de xarxa, adreces virtuals, el dispositiu de bucle/loopback (127.0.0.1) i múltiples universos per interfície de xarxa.  
Per defecte, els paquets E1.31 s'enviaran com UDP en adreces multicast com 239.255.0.x, on "x" és el número d'univers seleccionat a QLC+. El port utilitzat és 5568.  
Quan s'utilitzen els paquets de dispositius de loopback sempre es transmeten utilitzant l'adreça 127.0.0.1.  
Quan es transmeten múltiples universos en la mateixa interfície, els paquets s'enviaran per defecte amb un ID d'Univers E1.31 igual a l'univers QLC+.

Per exemple:  
QLC+ Univers 1 -- on E1.31 Univers 1 sobre 239.255.0.1  
QLC+ Univers 2 -- -- E1.31 Univers 2 sobre 239.255.0.2  
...  
QLC+ Univers 8 -- -- E1.31 Univers 8 en 239.255.0.8

Si els paràmetres anteriors no compleixen els requisits de la vostra xarxa, llegiu el capítol següent.

Configuració
-------------

En fer clic al botó de configuració ![](/basics/configure.png), es mostrarà un petit diàleg que mostrarà el panell de Configuració de l'Univers.

Després que un univers QLC+ estigui apedaçat amb una entrada o sortida E1.31, es mostrarà una entrada en aquesta llista, permetent configurar manualment els paràmetres desitjats per ser utilitzats pel connector E1.31.  
Les línies d'entrada es poden configurar amb els paràmetres següents:

|     |     |
| --- | --- |
| **Multidifusió/Multicast** | Aquesta casella de selecció permet seleccionar entre entrada multicast i unicast.  <br>Quan està marcada, aquest univers rebrà paquets del grup de multidifusió/multicast escollit en aquesta interfície.  <br>Quan no estigui marcat, aquest univers només rebrà paquets unicast en aquesta adreça IP.  <x3></x3>Si seleccioneu l'entrada Unicast, podreu seleccionar un Port d'entrada diferent. |
| **Adreça IP** | Aquesta és l'adreça IP d'entrada que el connector E1.31 escoltarà a la interfície seleccionada, per a aquest univers QLC+.  <br>Quan l'entrada està configurada a multicast, podeu seleccionar la IP multicast de 239.255.0.1 a 239.255.0.255.  <br>Quan l'entrada està configurada a unicast, l'adreça IP està bloquejada a l'adreça IP de la interfície seleccionada. |
| **Port** | Aquest és el port d'entrada que escoltarà el connector E1.31 per a aquest univers QLC+.  <br>Quan l'entrada està configurada com a multicast, el port està bloquejat al port multicast E1.31 per defecte: 5568 <br>Quan l'entrada està configurada com unicast, podeu seleccionar qualsevol port que vulgueu. |
| **Univers E1.31** | Aquest és l'univers d'entrada E1.31 que el connector acceptarà per a aquest univers QLC+.  <br>Això permet mapejar qualsevol univers E1.31 a qualsevol univers QLC+. |


Exemple de configuració d'Entrada:

![](e131_configuration.png)

En aquest exemple, quan es reben paquets E1.31 a l'adreça 127.0.0.1 i al port 8000, els paquets que operen a l'univers E1.31 4 afectaran l'univers QLC+ 1.  
També estem transmetent l'univers QLC+ 2 a l'adreça multicast 239.255.0.2, univers E1.31 1 i univers QLC+ 3 a l'adreça unicast 13.0.0.175 port 7000, univers E1.31 2.

Les línies de sortida es poden configurar amb els paràmetres següents:

|     |     |
| --- | --- |
| **Multidifusió/Multicast** | Aquesta casella de selecció us permet seleccionar entre la sortida multidifusió/multicast i la sortida unicast.  <br>Quan està marcada, aquest univers enviarà paquets al grup de multidifusió/multicast escollit en aquesta interfície.  <br>Quan no està marcat, aquest univers enviarà paquets unicast a l'adreça IP unicast triada.  <x3></x3>Si seleccioneu la sortida Unicast, també podreu seleccionar el port de sortida. |
| **Adreça IP** | Aquesta és l'adreça IP de destinació a la qual el connector E1.31 transmetrà els paquets.  <br>Per defecte s'utilitza una adreça multidifusió/multicast com es descriu anteriorment.  <br>Quan la sortida s'estableix a multidifusió/multicast, podeu establir aquest paràmetre dins de l'interval 1-255.  <br>Això permet enviar paquets a l'interval multidifusió/multicast 239.255.0.1 a 239.255.0.255.  <br>Quan la sortida està establerta a unicast, podeu seleccionar qualsevol adreça IP arbitrària.  <x5></x5>Quan s'apedaça un univers QLC+ al dispositiu loopback (127.0.0.1), els paquets unicast es transmetran sempre a 127.0.0.1. |
| **Port** | Aquest és el port al qual es dirigiran els paquets sortints.  <br>El port Multicast E1.31 sempre és 5568.  <br>Quan la sortida està establerta a unicast, podeu seleccionar qualsevol port que vulgueu. |
| **Univers E1.31** | Aquest és l'univers E1.31 que s'escriurà realment en cada paquet transmès.  <br>En establir aquest paràmetre, podeu utilitzar qualsevol univers QLC+ per transmetre a l'univers E1.31 desitjat. |
| **Mode de Transmissió** | Aquí podeu seleccionar si QLC+ ha de transmetre universos complets o parcials.  <br>'Complet' significa que tots els 512 canals DMX d'un univers es transmeten a la velocitat del rellotge intern QLC+ (50Hz), produint una taxa de bits fixa d'uns 200kbps.  <br>'Parcial', en canvi, significa que QLC+ transmetrà només el canal DMX realment utilitzat en un univers, començant pel canal 1. Per exemple, si aixeques el canal 3 d'un fixture amb adreça 50, el connector E1.31 només transmetrà 53 canals DMX, limitant així la taxa de bits de la trasnmissió.  <br>Utilitzeu aquest paràmetre només si el node E1.31 receptor admet la transmissió parcial. |
| **Prioritat** | Prioritat d'origen E1.31.  <br>**0** és la prioritat mínima, **200** és el màxim, **100** és la prioritat predeterminada.  <br>Quan el receptor E1.31 obté dades d'un univers particular de múltiples fonts, utilitza dades d'origen amb la prioritat més alta.  <br>Això permet diversos esquemes de commutació per error. Tingueu en compte que QLC+ encara no reconeix la prioritat a l'entrada. |


Els paràmetres que són diferents dels valors per defecte del connector, s'emmagatzemaran al vostre espai de treball QLC+, per augmentar la portabilitat d'un projecte a través de diferents plataformes, com ara diferents sistemes operatius o un PC i un Raspberry Pi.

Compatibilitat
-------------

QLC+ ha estat provat amb els següents programaris/dispositius E1.31:

* [DMXKing eDMX2 TX](https://web.archive.org/web/20160103204133/https://dmxking.com/artnetsacn/edmx2-tx-rdm) \- Dispositiu de sortida