---
title: 'DMX USB'
date: '05:08 22-08-2023'
---

Introduzione
------------

Il plugin DMX USB supporta una varietà di dispositivi USB-to-DMX basati su FTDI. 

I dispositivi DMX USB supportati si trovano nella nostra pagina [compatibilità](https://www.qlcplus.org/discover/compatibility).

Configurazione
-------------

I dispositivi DMX USB dovrebbero essere rilevati automaticamente da QLC+ e visualizzati nell'elenco dei pannelli di input/output.  
Se per qualche motivo il rilevamento automatico fallisce, potete "forzare" manualmente il tipo del vostro adattatore DMX USB.  
Fate clic sul nome del vostro dispositivo e aprite la finestra di configurazione facendo clic sull'icona ![](/basics/configure.png) nella parte in basso a destra del pannello.  
Vedrete un elenco di dispositivi DMX USB attualmente collegati al vostro computer. Ognuno ha un menu a tendina in cui potete forzare il tipo di dispositivo.  
Ecco il significato di ciascuno:

* **Open TX**: Enttec USB DMX Open (e cloni) in modalità output
* **Open RX**: Dispositivi FTDI generici in modalità ricezione
* **Pro RX/TX**: Enttec USB DMX Pro o la maggior parte dei dispositivi DMXKing
* **Pro Mk2**: Enttec USB DMX Pro Mk2 - sono disponibili 2 output DMX, 1 input DMX, 1 porta MIDI IN e 1 porta MIDI OUT
* **Ultra Pro**: DMXKing ultraDMX Pro con 2 output e 1 input
* **DMX4ALL**: DMX4ALL USB-DMX STAGE-PROFI MK2
* **Vince Tx**: Vince DMX512 USB in modalità output

**Nota per gli utenti OSX:** Se il vostro adattatore viene rilevato ma non produce alcun output, molto probabilmente troverete la soluzione nella pagina [Domande e risposte](/basics/questions-and-answers) (Domanda #3).  
**Nota 1**: I dispositivi Eurolite USB-DMX512 Pro devono essere forzati alla modalità "Pro RX/TX" per funzionare correttamente.  
**Nota 2**: Su Windows, i cloni Enttec open DMX potrebbero sfarfallare a 44Hz. Potete provare a diminuire la frequenza di output finché il problema non viene risolto.

Requisiti
------------

### Linux

Su tutte le distribuzioni Linux, dovete installare libftdi. Se installate QLC+ con l'Ubuntu Software Center o un altro strumento di installazione automatica, questa libreria verrà installata automaticamente per voi.  
In alcuni casi, se il dispositivo non produce alcun output, potrebbe essere utile aggiungere il vostro utente al gruppo "dialout" con il seguente comando:  
```
sudo adduser your\_user\_name dialout
```

### macOS

Su Apple macOS, non avete bisogno di alcun driver poiché QLC+ utilizza l'interfaccia USB nativa di macOS. L'installazione dei driver D2XX non dovrebbe causare alcun danno, ma **NON INSTALLATE i driver VCP (Virtual COM Port)** poiché interferiranno sicuramente con QLC+. Se avete precedentemente installato i driver VCP, consultate le [guide di installazione FTDI](https://ftdichip.com/document/installation-guides/) su come disinstallarli.  
  
**Problemi con OSX Mavericks (o versioni successive)**: consultate [Domande e risposte #3](/basics/questions-and-answers)

### Windows

Su Microsoft Windows, il plugin necessita degli [ultimi driver D2XX di FTDI](https://ftdichip.com/drivers/d2xx-drivers/). Normalmente, quando un dispositivo FTDI viene collegato per la prima volta, Windows scaricherà automaticamente i driver D2XX per voi, quindi non è necessaria alcuna azione.  
Se ciò non accade, consultate le [guide di installazione FTDI](https://ftdichip.com/document/installation-guides/) per sapere come installare i driver.  
**NON INSTALLATE i driver VCP (Virtual COM Port)** poiché probabilmente interferiranno con l'interfaccia D2XX.

Modalità supportate da ENTTEC DMX USB Pro
----------------------------------

Di seguito una tabella che mostra le modalità IO supportate da QLC+ per dispositivi come DMX USB Pro e Pro Mk2.  
Se una modalità non è elencata qui, significa che non è supportata da QLC+ o dal dispositivo stesso a causa di limitazioni hardware, quindi vi preghiamo di non segnalarle come problemi nel forum di QLC+.  
  

|     |     |     |     |     |     |     |     |     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
|     | 1   | 2   | 3   | 4   | 5   | 6   | 7   | 8   | 9   | 10  | 11  | 12  | 13  | 14  |
| DMX1 IN | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |     |
| DMX1 OUT |     | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |
| DMX2 OUT (1) |     |     | o   | o   | o   |     |     |     |     |     |     |     |     |     |
| MIDI IN (2) |     |     |     |     |     | o   | o   | o   |     |     |     | o   | o   | o   |
| MIDI OUT (2) |     |     |     |     |     |     |     |     | o   | o   | o   | o   | o   | o   |

  
(1) DMX2 OUT è disponibile solo su DMX USB Mk2 Pro  
(2) MIDI IN e MIDI OUT sono disponibili solo su DMX USB Mk2 Pro con un cavo breakout a 5 vie. I segnali MIDI OUT vengono inviati da 1 a 512 come descritto nella [mappa dei canali del plugin MIDI](../midi#mappa-dei-canali)  

Tuning
------

**Nota: la regolazione manuale non dovrebbe mai essere eseguita, tranne in alcuni casi molto particolari. Usatela a vostro rischio!**  
È possibile modificare la dimensione del frame DMX per i dispositivi Enttec Open (e simili) con una chiave di impostazione nascosta su ciascuna piattaforma. La chiave indica a QLC+ quanti canali devono essere trasmessi in ogni frame DMX, quindi per un universo DMX (512 per impostazione predefinita).  
Fate riferimento alla sezione DMX USB Enttec Open della pagina [Regolazione manuale dei parametri](/advanced/parameters-tuning#2-dmx-usb-enttec-open-channels-number).
