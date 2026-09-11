---
title: OSC
date: '05:18 22-08-2023'
---

Introducció
------------

QLC+ admet el [protocol OSC](https://en.wikipedia.org/wiki/Open_Sound_Control) a través d'un connector d'entrada/sortida que rep i transmet paquets a la xarxa.  
No es necessiten requisits addicionals, ja que QLC+ té una implementació nativa del protocol OSC que funciona en sistemes Linux, Windows i OSX.  
El connector OSC pot enviar i rebre paquets de múltiples targetes de xarxa, adreces virtuals, el dispositiu de loopback (127.0.0.1) i múltiples universos per interfície de xarxa.  
Per defecte, el connector OSC escoltarà en ports a partir de 7700, més l'univers QLC+ menys u.  
La sortida, en canvi, utilitzarà ports a partir de 9000, més l'univers QLC+ menys u.  
  
Per exemple:  
Univers QLC+ 1 --> port d'entrada OSC 7700, port de sortida 9000  
Univers QLC+ 2 --> port d'entrada OSC 7701, port de sortida 9001  
...  
Univers QLC+ 8 --> port d'entrada OSC 7707, port de sortida 9007  
  

Configuració
-------------

En fer clic al botó de configuració ![](/basics/configure.png), es mostrarà un petit diàleg amb el panell de Configuració d'Universos.  
  
Un cop un univers de QLC+ està pedaçat amb una entrada o sortida OSC, apareixerà una entrada en aquesta llista, que permet configurar manualment els paràmetres desitjats que utilitzarà el connector OSC.  
  
Per a cada entrada o sortida OSC es poden establir els paràmetres següents:

* **Port d'entrada:** Si la línia pedaçada està oberta per a l'entrada, aquest paràmetre defineix el port en què QLC+ escoltarà per rebre dades OSC del vostre controlador extern.
* **Adreça de sortida:** Si la línia pedaçada està oberta per a l'entrada, aquesta és l'adreça IP de destinació utilitzada per enviar retroalimentació al vostre controlador extern.  
    Si la línia pedaçada està oberta per a la sortida, aquesta és l'adreça IP de destinació utilitzada per enviar dades OSC a la xarxa.  
    Els paquets de sortida OSC es componen per obtenir un camí OSC com el següent: /univers QLC+ - 1/dmx/canal DMX - 1  
    Per exemple, el canal 12 de l'univers QLC+ 4 tindrà el camí següent: /3/dmx/11  
    Tots els valors transmesos pel connector OSC utilitzen el tipus float.
* **Port de sortida:** Si la línia pedaçada està oberta per a l'entrada, aquest és el port de destinació utilitzat per enviar retroalimentació al vostre controlador extern.  
    Si la línia pedaçada està oberta per a la sortida, aquest és el port de destinació utilitzat per enviar dades OSC a la xarxa.

**Nota:** En pedaçar una línia Input+Feedback, la IP/port de sortida que heu de canviar són els de la secció 'Inputs'. Deixeu simplement la secció 'Outputs' amb els valors predeterminats.

Calculadora de canals
-------------

Si no és possible fer la detecció automàtica mitjançant l'editor de perfils d'entrada d'un controlador OSC, aquesta eina us pot ajudar.  
Podeu introduir el **camí OSC** i QLC+ calcularà el número de canal per vosaltres. Bàsicament és un hash de 16 bits del camí que QLC+ utilitza per representar una entrada OSC.  
**Nota:** Hi ha un desfasament d'1 entre la calculadora i el que veieu a l'Editor de Perfils d'Entrada. Això és correcte, ja que els canals a QLC+ comencen des d'1 i no des de 0. El que mostra la calculadora és el número de canal que realment heu d'escriure en un perfil d'entrada o al vostre controlador OSC personalitzat.

Controladors
-----------

QLC+ s'ha provat amb els controladors OSC següents:

* [Open Stage Control](https://openstagecontrol.ammd.net/)
* [TouchOSC](https://hexler.net/touchosc). Hi ha un perfil d'entrada predefinit a punt per utilitzar-se amb les disposicions Mix16 i Automat5.
* [Pure Data](https://archive.flossmanuals.net/pure-data/network-data/osc.html)
</content>
