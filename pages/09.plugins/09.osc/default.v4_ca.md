---
title: OSC
date: '05:18 22-08-2023'
---

Introducció
------------

QLC+ suporta el protocol [OSC](https://ca.wikipedia.org/wiki/Open_Sound_Control) a través d'un connector d'entrada/sortida que rep i transmet paquets a la xarxa.  
No es necessiten requisits addicionals, ja que QLC+ té una implementació nativa del protocol OSC que funciona en sistemes Linux, Windows i OSX.  
El connector OSC pot enviar i rebre paquets de múltiples targetes de xarxa, adreces virtuals, el dispositiu de loopback (127.0.0.1) i múltiples universos per interfície de xarxa.  
De manera predeterminada, el connector OSC escoltarà els ports que comencen a partir de 7700, més l'univers QLC+ menys un.  
La sortida, en canvi, utilitzarà ports a partir de 9000, més l'univers QLC+ menys un.

Per exemple:  
QLC+ Univers 1 --, Port d'entrada OSC 7700, port de sortida 9000  
QLC+ Univers 2 --, Port d'entrada OSC 7701, port de sortida 9001  
...  
QLC+ Univers 8 --, Port d'entrada OSC 7707, port de sortida 9007


Configuració
-------------

En fer clic al botó de configuració ![](/basics/configure.png), es mostrarà un petit diàleg que mostrarà el panell de Configuració de l'Univers.

Després que un univers QLC+ sigui pedaçat amb una entrada o sortida OSC, es mostrarà una entrada en aquesta llista, permetent configurar manualment els paràmetres desitjats per ser utilitzats pel connector OSC.

Per a cada entrada o sortida OSC es poden establir els següents paràmetres:

* **Port d'Entrada:** Si la línia apedaçada s'obre per a l'entrada, aquests paràmetres defineixen el port al qual QLC+ escoltarà per tal de rebre dades OSC del vostre controlador extern.
* **Adreça de Sortida:** Si s'obre la línia pedaçada per a l'entrada, aquesta és l'adreça IP de destinació utilitzada per a enviar feedback al vostre controlador extern.  
    Si s'obre la línia apedaçada per a la sortida, aquesta és l'adreça IP de destinació utilitzada per a enviar dades OSC a la xarxa.  
    Els paquets de sortida OSC es componen per obtenir un camí OSC com el següent: /QLC+ univers - 1/dmx/DMX canal - 1  
    Per exemple, el canal 12 de l'univers QLC+ 4 tindrà el següent camí: /3/dmx/11  
    Tots els valors transmesos pel connector OSC utilitzen el tipus float.
* **Port de Sortida:** Si s'obre la línia apedaçada per a l'entrada, aquest és el port de destinació que s'utilitza per enviar feedback al vostre controlador extern.  
    Si s'obre la línia apedaçada per a la sortida, aquest és el port de destinació que s'utilitza per a enviar dades OSC a la xarxa.

**Nota:** En apedaçar una línia Input+Feedback, la IP/port de sortida que heu de canviar són les de la secció 'Inputs'. Simplement deixeu la secció 'Outputs' com a predeterminada.

Controladors
-----------

QLC+ s'ha provat amb els següents controladors OSC:

* [TouchOSC](https://hexler.net/software/touchosc). Un perfil d'entrada predefinit està a punt per utilitzar per a la disposició Mix16.
