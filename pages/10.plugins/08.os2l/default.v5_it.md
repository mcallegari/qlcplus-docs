---
title: OS2L
date: '05:18 22-08-2023'
---

Introduzione
------------

Il plugin OS2L permette la comunicazione diretta tra QLC+ e un host compatibile con OS2L.  
Le specifiche OS2L si trovano su: [https://os2l.org](https://os2l.org/)  
Al momento l'unico host OS2L supportato è [Virtual DJ](https://www.virtualdj.com/).  
Il plugin OS2L di QLC+ funzionerà sia sullo stesso host (127.0.0.1) sia su un host diverso con un sistema operativo a vostra scelta (Windows, macOS, Linux)

Configurazione - Virtual DJ
--------------------------

Prima di tutto, dovete dire a VDJ dove inviare i messaggi OS2L.  
Aprite le impostazioni di VDJ, andate al pannello 'Options' e digitate 'os2l' nella casella di ricerca in alto.  
Modificate il campo 'os2lDirectIp' impostando l'IP:porta con cui VDJ può raggiungere QLC+. Ad esempio, '127.0.0.1:9996' dovrebbe funzionare se QLC+ è in esecuzione sullo stesso PC (Windows) di VDJ.  
Una volta fatto, riavviate VDJ.  
  
Ora andate su QLC+, abilitate il plugin OS2L su un qualsiasi universo. Se avete impostato una porta specifica in VDJ, aprite la finestra di configurazione OS2L e impostate lì la stessa porta.  
Una volta fatto, QLC+ inizierà a ricevere segnali da VDJ (l'icona del joystick lampeggerà accanto alla casella Universe)

Client personalizzati
--------------

Per supportare client personalizzati è necessario configurare un Profilo di Input che mappi i messaggi OS2L sui canali. Il plugin OS2L rimane in ascolto dei seguenti eventi: `beat`, `cmd` e `btn`.

Un messaggio `beat` cambierà il valore al canale 8342 a 255 se ricevuto. Esempio: `{"evt":"beat"}`.

Un messaggio `cmd` imposterà il canale indicato da `id` al valore indicato da `param`. Esempio: `{"evt": "cmd", "id": "1", "param": 255}`.

Un messaggio `btn` può essere mappato anch'esso. Il canale è controllato da un CRC del `name`. Il modo più semplice per individuare il canale è usare il mappatore automatico di input durante la configurazione del Profilo di Input. Il valore inviato al canale è 255 su `on` oppure 0 su `off`. Esempio: `{"evt":"btn","name":"Light Left 2","state":"on"}`.

