---
title: OS2L
date: '05:18 22-08-2023'
---

Introducció
------------

El connector OS2L permet la comunicació directa entre QLC+ i un amfitrió compatible amb OS2L.  
Les especificacions d'OS2L es poden trobar a: [https://os2l.org](https://os2l.org/).  
De moment, l'únic amfitrió OS2L compatible és [Virtual DJ](https://www.virtualdj.com/).  
El connector QLC+ OS2L funcionarà en el mateix amfitrió (127.0.0.1) o en un amfitrió diferent amb un sistema operatiu de la vostra elecció (Windows, macOS, Linux)

Configuració - DJ virtual
--------------------------

En primer lloc, has d'indicar a VDJ on enviar els missatges OS2L.  
Obriu la configuració del VDJ, aneu al tauler "Opcions" i escriviu "os2l" al quadre de cerca superior.  
Modifiqueu el camp 'os2lDirectIp' configurant el port IP: on VDJ pot arribar a QLC+. Per exemple, '127.0.0.1:9996' hauria de funcionar si QLC+ s'executa en el mateix PC (Windows) de VDJ.  
Un cop fet, reinicia el VDJ.

Ara aneu a QLC+, habiliteu el connector OS2L en qualsevol univers. Si heu establert un port específic en VDJ, obriu el diàleg de configuració d'OS2L i establiu-hi el mateix port.  
Un cop fet, QLC+ començarà a rebre senyals de VDJ (la icona del joystick parpellejarà al costat de la caixa Universe)

Clients personalitzats
--------------

Per tal de donar suport als clients personalitzats, s'ha de configurar un perfil d'entrada que mapegi el missatge OS2L als canals. El connector OS2L escolta els següents esdeveniments: `beat`, `cmd` i `btn`.

Un missatge `beat` canviarà el valor al canal 8342 a 255 si es rep. Exemple: `{"evt":"beat"}`.

Un missatge `cmd` fixarà el canal donat per `id` al valor donat per `param`. Exemple: `{"evt": "cmd", "id": "1", "param": 255}`.

També es pot assignar un missatge `btn`. El canal està controlat per un CRC del `nom`. La manera més fàcil de calcular el canal és utilitzar el mapejador d'entrada automàtic a l'hora de configurar el perfil d'entrada. El valor enviat al canal és 255 `activat` o 0 `desactivat`. Exemple: `{"evt":"btn","name":"Light Left 2","state":"on"}`.

