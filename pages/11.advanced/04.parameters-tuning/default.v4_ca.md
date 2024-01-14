---
title: 'Parameters Tuning'
date: '11:41 22-08-2023'
---

En aquesta secció s'explica com accedir i ajustar manualment alguns paràmetres QLC+ que no estan disponibles des de la interfície d'usuari.  
Tingues en compte que si no pots canviar-los des de la interfície d'usuari, vol dir que hi ha una bona raó per això.

> **Avís: NO editeu manualment els fitxers de configuració a menys que sapigueu el que esteu fent. Qualsevol canvi fora de lloc pot provocar fallades del programa o una inestabilitat incòmoda.**


## Ubicació de la configuració QLC+
<hr>

Linux
-----

Els fitxers de configuració es troben al directori $HOME de l'usuari, a la carpeta .config/qlcplus.  
Aquesta és l'ordre ràpida per accedir-hi des d'un terminal:  
`cd $HOME/.config/qlcplus`  
Trobareu tant fitxers de configuració de QLC+ com de l'Editor de Fixtures.

Windows
-------

Els paràmetres de configuració s'emmagatzemen al registre de Windows.  
Per accedir-hi, executeu l'eina «regedit» i cerqueu la clau anomenada «qlcplus».  
La clau on s'emmagatzema la configuració de l'usuari s'anomena
`Computer\HKEY_CURRENT_USER\Software\qlcplus\`

macOS
-------

Els fitxers de configuració es troben al directori $HOME de l'usuari, a la carpeta Library/Preferences, que per defecte està oculta pel macOS.  
Aquesta és l'ordre ràpida per accedir-hi des d'un terminal:  
`cd $HOME/Library/Preferences`  
El fitxer de configuració QLC+ s'anomena `net.sf.Q Light Controller Plus.plist` mentre que el fitxer de configuració de l'editor Fixture s'anomena `net.sf.Editor.plist`.

**Tingueu en compte que les preferències estan a la memòria cau!**  
Bàsicament el macOS carrega tots els fitxers de llista a la memòria a l'arrencada, i si els canvieu manualment, ignorarà els canvis. Encara pitjor, periòdicament refresca els fitxers, de manera que sobreescriu els canvis.  
La solució és, després de canviar un fitxer .plist, obrir un terminal i escriure això:  
`killall -u yourusername cfprefsd`  
On `el teu nom d'usuari` és el nom de l'usuari que fas servir per accedir al Mac. L'ordre obliga el macOS a tornar a carregar les preferències, inclosos els canvis.

## Restableix la Configuració
<hr>

De vegades pot ser necessari reiniciar la configuració de QLC+ i portar QLC+ a un estat de "Predeterminats de Fàbrica».  
Per fer-ho, localitzeu la configuració tal com s'explica al primer paràgraf, i després feu el següent:

* A Linux i OSX utilitzeu l'ordre `rm 'filename'` per a suprimir el fitxer de configuració
* Al Windows suprimeix tota la CLAU 'qlcplus' usant regedit

## Sintaxi dels Paràmetres
<hr>

A causa de les diferències de les Qt en diferents plataformes, els paràmetres s'emmagatzemen de diferents maneres depenent del vostre sistema operatiu.

Linux
-----

Els paràmetres s'emmagatzemen en un fitxer de text pla que podeu modificar amb un editor de text pla com gedit, kwrite, kate, nano, vim o similar. Es presenten de la següent manera:

    [categoria]
    nom=valor

Windows
-------

Els paràmetres s'emmagatzemen al registre de Windows i es poden modificar amb l'eina de regedit inclosa a cada versió de Windows. Es presenten de la següent manera:

    "categoria" es mostra com una carpeta
    El paràmetre està contingut a la categoria i es representa com una clau. És més probable que totes les claus QLC+ siguin de tipus enter.
    "valor" és el valor real de "paràmetre"

Mac OSX
-------

Els paràmetres s'emmagatzemen en un fitxer de text pla que podeu modificar amb un editor de text pla com [TextWrangler](https://www.barebones.com/products/textwrangler/) o similar. Es presenten de la següent manera:

    <key>category.name</key>
    <string>valor</string>
    o
    <integer>42</integer>

## Llista de Paràmetres
<hr>

El més probable és que no trobeu els següents paràmetres en una configuració QLC+ estàndard. Per fer-los efectius, has d'**afegir**-los al final del fitxer de configuració.

### 1. Taula Simple

**Category:** `simpledesk`<br>
**Name:** `channelsperpage`<br>
**Type:** enter<br>
**Description:** Estableix el nombre de controls lliscants del canal DMX mostrats per pàgina<br>
**Default:** 32<br>
<br>
**Category:** `simpledesk`<br>
**Name:** `playbacksperpage`<br>
**Type:** enter<br>
**Description:** estableix el nombre de controls lliscants de reproducció mostrats per pàgina<br>
**Default:** 15<br>

### 2. Número de canals DMX USB Enttec Open

**Category:** `enttecdmxusbopen`<br>
**Name:** `channels`<br>
**Type:** enter<br>
**Description:** Estableix el nombre màxim de canals DMX transmesos per dispositius Enttec Open (i similars).<br>
En alguns casos això podria resoldre problemes de parpelleig. Per exemple, podeu provar-ho amb 256.<br>
**Default:** 512<br>

### 3. Freqüència uDMX

**Category:** `udmx`<br>
**Name:** `frequency`<br>
**Type:** enter<br>
**Description:** Estableix la freqüència del marc DMX a Hertz per als dispositius uDMX<br>
**Default:** 30<br>

### 4. Número de canals uDMX

**Category:** `udmx`<br>
**Name:** `channels`<br>
**Type:** enter<br>
**Description:** Estableix el nombre màxim de canals DMX transmesos per dispositius uDMX.<br>
En alguns casos això podria resoldre problemes de parpelleig. Per exemple, podeu provar amb 128.<br>
**Per defecte:** 512<br>

### 5. Freqüència del Temporitzador Mestre

**Category:** `mastertimer`<br>
**Name:** `frequency`<br>
**Type:** enter<br>
**Description:** Estableix la freqüència del temporitzador del nucli QLC+ a Hertz<br>
**Default:** 50<br>
