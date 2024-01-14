---
title: OS2L
date: '05:18 22-08-2023'
---

Introducció
------------

El connector OS2L permet la comunicació directa entre QLC+ i un amfitrió compatible amb OS2L.  
Les especificacions d'OS2L es poden trobar a: [http://os2l.org](http://os2l.org/)  
De moment, l'únic amfitrió OS2L compatible és [Virtual DJ](https://www.virtualdj.com/).  
El connector QLC+ OS2L funcionarà en el mateix amfitrió (127.0.0.1) o en un amfitrió diferent amb un sistema operatiu de la vostra elecció (Windows, macOS, Linux)

Configuració - Virtual DJ
--------------------------

En primer lloc, has d'indicar a VDJ on enviar missatges OS2L.  
Obriu la configuració del VDJ, aneu al tauler "Opcions" i escriviu "os2l" al quadre de cerca superior.  
Modifiqueu el camp 'os2lDirectIp' configurant el port IP: on VDJ pot arribar a QLC+. Per exemple, '127.0.0.1:9996' hauria de funcionar si QLC+ s'executa en el mateix PC (Windows) de VDJ.  
Un cop fet, reinicia el VDJ.

Ara aneu a QLC+, activeu el connector OS2L en qualsevol univers. Si heu establert un port específic a VDJ, obriu el diàleg de configuració OS2L i establiu el mateix port allà.  
Un cop fet, el QLC+ començarà a rebre senyals del VDJ (la icona del joystick parpellejarà al costat de la caixa de l'Univers)