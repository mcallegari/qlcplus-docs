---
title: OLA
date: '05:17 22-08-2023'
---

Introducció
------------

El connector OLA permet la comunicació directa entre QLC+ i el marc [OLA](https://www.opendmx.net/index.php/Open_Lighting_Architecture) a la mateixa màquina.

Requisits
------------

El connector OLA requereix que l'OLA s'instal·li al sistema.  
Com que l'OLA no s'executa al Windows, només els usuaris de Linux i macOS poden beneficiar-se d'aquest connector.  
Podeu trobar informació sobre com baixar i instal·lar l'OLA [aquí](https://opendmx.net/index.php/Download_%26_Install_OLA).  
QLC+ necessita que el servidor OLA s'estigui executant per poder comunicar-se amb l'entorn de treball OLA. Això es pot fer manualment iniciant "olad" des d'un terminal o al panell de configuració marcant "Executa el dimoni ola independent".

Configuració
-------------

En prémer el botó de configuració sobre una línia de sortida OLA, apareixerà una petita finestra emergent que mostrarà la informació bàsica de com les sortides de QLC+ s'assignen contra els universos OLA.  
A la part inferior, un botó de selecció us permetrà forçar l'inici del servidor OLA.

Configuració OLA
---------

Quan us heu assegurat que tot està funcionant a QLC+ i heu comprovat com s'han mapejat els universos, podeu configurar OLA per a enviar el senyal rebut de QLC+ a un dispositiu DMX, ja sigui USB o a través de la xarxa.  
Aquí teniu una introducció [de l'ús de l'OLA](https://www.opendmx.net/index.php/Using_OLA).  
Bàsicament cal obrir un navegador web, connectar-se a [http://localhost:9090](http://localhost:9090) o [http://127.0.0.1:9090](http://127.0.0.1:9090) i afegir un univers que tingui el mateix nombre assignat a QLC+ i seleccionar la línia de sortida desitjada.