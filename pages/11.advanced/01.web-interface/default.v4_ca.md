---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

Per defecte, QLC+ inclou un servidor web natiu per exposar en els navegadors web tradicionals algunes de les característiques del programari.  
És molt útil quan cal executar QLC+ en un dispositiu sense pantalla (sistema sense cap) ja sigui per treballar de forma independent o per al control remot.  
La interfície web no està habilitada per defecte, però es pot activar fàcilment executant QLC+ amb l'opció "-w" o "--web". Consulteu la pàgina [paràmetres de línia d'ordres](../command-line-parameters) d'aquesta documentació per aprendre com fer-ho.

Es pot accedir a la interfície web des de qualsevol navegador web modern que s'executi en qualsevol dispositiu, com ara un ordinador, una tauleta o un telèfon intel·ligent. El vostre navegador ha de suportar la tecnologia de sòcols web per comunicar-se amb QLC+, i es recomana utilitzar Google Chrome.  
També és possible dissenyar pàgines web personalitzades i accedir a les funcionalitats de QLC+ a través de l'API web que són bàsicament cadenes formatades de manera específica i enviades a QLC+ a través de websocket.  
Podeu trobar una pàgina de prova amb les API disponibles [aquí](https://www.qlcplus.org/Test_Web_API.html).

Per accedir a la interfície web QLC+ simplement connecteu-vos a aquesta adreça:  
**http://\[adreça IP\]:9999**

On \[adreça IP\] és l'adreça IP del dispositiu al qual voleu accedir via web. Per exemple: http://192.168.0.100:9999  
La interfície web consta de tres pàgines:

* Consola Virtual
* Taula Simple
* Configuració

Pàgina de la Consola Virtual
--------------------

Aquesta pàgina es mostra per defecte en accedir a l'adreça de la interfície web i representa la consola virtual QLC+.  
Si es carrega un projecte, aquesta pàgina mostrarà els ginys creats prèviament amb QLC+, en cas contrari només mostrarà una pàgina buida.  
És possible carregar un projecte amb el botó **Carrega el projecte** col·locat a la cantonada superior esquerra de la pàgina. Apareixerà una finestra que us permetrà triar un fitxer del dispositiu que esteu utilitzant per controlar el dispositiu on s'està executant QLC+.  
El fitxer del projecte es transferirà via web i el carregarà QLC+.  
Per accedir a la pàgina de configuració de QLC+, simplement feu clic al botó **Configuració**.

Pàgina Taula Simple
----------------

Aquesta pàgina és una versió simplificada de la Taula Simple que podeu trobar a la versió d'escriptori de QLC+. Mostra universos DMX dividits per pàgines, on cada pàgina mostra 32 canals. Podeu canviar entre pàgines amb els botons de fletxa esquerra/dreta i seleccionar l'univers mostrat actual amb el menú desplegable a la part superior dreta de la pàgina.  
També és possible restablir un univers alhora prement el botó de reinici (gris X)

### Teclat DMX

Quan feu clic al botó "Teclat DMX" a la barra superior de Taula Simple, podeu saltar a una nova pàgina on es mostra un Teclat DMX tradicional.  
El teclat numèric és útil per establir un lot de valors de canal amb una sola ordre. A continuació una taula on s'expliquen les ordres clau que trobareu al costat dret del bloc.


|     |     |
| --- | --- |
| **Clau** | **Descripció** |
| AT | estableix un valor per a un canal DMX especificat o un grup de canals (interval).  <br>Exemple: **13 AT 148** (estableix el canal 13 al valor 148) |
| THRU | selecciona un rang de canals DMX <br>Exemple: **3 THRU 15 AT 133** (estableix els canals 3 a 15 al valor 133) |
| FULL | estableix el valor màxim (255) als canals DMX seleccionats o al grup de canals <br>Exemple: **18 FULL** (estableix el canal 18 a 255) <br>**1 THRU 10 FULL** (estableix els canals 1 a 10 a 255) |
| ZERO | estableix el valor mínim (0) als canals DMX seleccionats o al grup de canals <br>Exemple: **4 ZERO** (estableix el canal 4 a 0) |
| BY | estableix un espai entre els canals dins d'un interval <br>Exemple: **1 THRU 10 BY 2 AT 100** (estableix els canals 1, 3, 5, 7 i 9 al valor 100) |
| +% | augmenta en un percentatge donat els valors actuals dels canals <br>Exemple: **1 THRU 10 BY 2 +% 20** (augmenta en un 20% els valors actuals dels canals 1, 3, 5, 7 i 9) |
| -% | redueix en un percentatge donat els valors actuals dels canals <br>Exemple: **1 THRU 10 BY 2 -% 20** (redueix en un 20% els valors actuals dels canals 1, 3, 5, 7 i 9) |


Tingueu en compte que:

* Cada ordre s'envia a QLC+ només quan es prem el botó RETORN
* Les adreces DMX són contigües entre universos, de manera que l'Univers 1 varia d'1 a 512, l'Univers 2 de 513 a 1024 i així successivament
* Podeu escriure ordres manualment al quadre de text superior una vegada apreneu la sintaxi de les ordres del teclat

Pàgina de Configuració
------------------

Aquesta pàgina permet definir remotament la configuració de QLC+, dividida en quatre àrees:

* **Configuració d'Universos**: Permet establir les entrades, sortides, retroalimentació, perfils i mode de pas per a cada univers QLC+. Aquesta és bàsicament la mateixa funcionalitat del panell d'entrada/sortida de QLC+.  
    Atès que un projecte QLC+ conté també la informació d'E/S, el més probable és que no hàgiu de configurar-la manualment en aquesta pàgina, però podeu comprovar si tot és correcte.

* **Configuració d'Àudio**: Permet seleccionar els dispositius d'àudio utilitzats per a la reproducció d'àudio o l'entrada d'àudio.

* **Fixtures carregats per l'usuari**: Permet carregar remotament un fixture personalitzat a QLC+.  
    Quan feu clic al botó **Carrega el fixture**, es mostrarà una finestra que us permetrà triar un fitxer del dispositiu que esteu utilitzant per a controlar el dispositiu on s'està executant QLC+.  
    El fitxer fixture es transferirà via web i es carregarà a QLC+.  
    Quan s'afegeixen nous fixtures personalitzats, es recomana recarregar un projecte o bé reiniciar QLC+ al dispositiu de destinació.

* **Usuaris Autoritzats**: Aquesta secció només està disponible quan s'inicia QLC+ amb l'opció "-wa" o "--web-auth". Activa l'autenticació HTTP bàsica (no hi ha HTTPS ni certificats implicats).  
    En activar aquesta característica per primera vegada, heu d'afegir almenys un administrador, en cas contrari no se us demanarà cap contrasenya en accedir a la interfície web.  
    Els usuaris poden tenir els nivells d'accés següents:

    * **Tot**: Aquest és el nivell d'accés per als administradors. Poden accedir a totes les funcionalitats de la interfície web i afegir més usuaris autenticats
    * **Consola Virtual i Taula Simple**: un usuari amb aquest nivell d'accés pot veure la pàgina de Consola Virtual i Taula Simple, però no pot accedir a la pàgina de Configuració
    * **Només la Consola Virtual**: un usuari amb aquest nivell d'accés només pot veure la pàgina de la consola virtual, però no pot accedir a la Taula Simple i a la Pàgina de Configuració

    Un administrador pot:
    * Afegeix més usuaris omplint els camps Nom d'usuari i Contrasenya i després fent clic al botó "Afegeix usuari"
    * Suprimeix un usuari existent fent clic al botó "Suprimir usuari"
    * Canviar el nivell d'accés o la contrasenya d'un usuari existent i després fer clic al botó "Canviar"

Una vegada establerta la configuració, és possible tornar a la pàgina principal de la interfície web fent clic al botó **Enrere**, situat a la cantonada superior esquerra de la pàgina.

Limitacions Conegudes
-----------------

La interfície web QLC+ és encara una funcionalitat de treball en curs i té algunes limitacions conegudes de les quals hauríeu de ser conscients si teniu intenció d'utilitzar-la.

* Encara no s'admeten els ginys Selector de Velocitat, Pad XY i Animacions
* Els lliscadors amb aparença de pom o perilla encara no són compatibles
* El botó Click & Go dels controls lliscants encara no està admès
* Encara no s'ha implementat l'estat d'habilitació del marc
* Els controls lliscants d'esvaïment creuat de la Llista de Cues encara no estan suportats
* Encara no s'admet la disposició «Reprodueix/Atura + Pausa» de la Llista Cue
* Encara no es gestiona l'edició en directe de les notes de la Llista de Cues
* El Gran Mestre de la Consola Virtual encara no es gestiona