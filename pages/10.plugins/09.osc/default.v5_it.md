---
title: OSC
date: '05:18 22-08-2023'
---

Introduzione
------------

QLC+ supporta il [protocollo OSC](https://en.wikipedia.org/wiki/Open_Sound_Control) tramite un plugin di input/output che riceve e trasmette pacchetti sulla rete.  
Non sono necessari requisiti aggiuntivi, poiché QLC+ dispone di un'implementazione nativa del protocollo OSC che funziona su sistemi Linux, Windows e OSX.  
Il plugin OSC può inviare e ricevere pacchetti da più schede di rete, indirizzi virtuali, il dispositivo di loopback (127.0.0.1) e più universi per interfaccia di rete.  
Per impostazione predefinita, il plugin OSC rimarrà in ascolto su porte a partire da 7700, più l'universo QLC+ meno uno.  
L'output, invece, userà porte a partire da 9000, più l'universo QLC+ meno uno.  
  
Ad esempio:  
Universo QLC+ 1 --> porta di input OSC 7700, porta di output 9000  
Universo QLC+ 2 --> porta di input OSC 7701, porta di output 9001  
...  
Universo QLC+ 8 --> porta di input OSC 7707, porta di output 9007  
  

Configurazione
-------------

Facendo clic sul pulsante di configurazione ![](/basics/configure.png), verrà visualizzata una piccola finestra di dialogo che mostra il pannello Universes Configuration.  
  
Dopo che un universo QLC+ è stato collegato (patched) con un input o output OSC, verrà visualizzata una voce in questo elenco, che permette di configurare manualmente i parametri desiderati da usare per il plugin OSC.  
  
Per ogni input o output OSC possono essere impostati i seguenti parametri:

* **Porta di input:** Se la linea collegata è aperta per l'input, questo parametro definisce la porta su cui QLC+ rimarrà in ascolto per ricevere dati OSC dal vostro controller esterno.
* **Indirizzo di output:** Se la linea collegata è aperta per l'input, questo è l'indirizzo IP di destinazione usato per inviare il feedback al vostro controller esterno.  
    Se la linea collegata è aperta per l'output, questo è l'indirizzo IP di destinazione usato per inviare dati OSC sulla rete.  
    I pacchetti di output OSC vengono composti per ottenere un percorso OSC come il seguente: /universo QLC+ - 1/dmx/canale DMX - 1  
    Ad esempio il canale 12 dell'universo QLC+ 4 avrà il seguente percorso: /3/dmx/11  
    Tutti i valori trasmessi dal plugin OSC usano il tipo float.
* **Porta di output:** Se la linea collegata è aperta per l'input, questa è la porta di destinazione usata per inviare il feedback al vostro controller esterno.  
    Se la linea collegata è aperta per l'output, questa è la porta di destinazione usata per inviare dati OSC sulla rete.

**Nota:** Quando si collega (patching) una linea Input+Feedback, l'IP/porta di output da modificare sono quelli nella sezione 'Inputs'. Lasciate semplicemente la sezione 'Outputs' con i valori predefiniti.

Calcolatore di canale
-------------

Se non è possibile eseguire il rilevamento automatico tramite l'editor dei profili di input di un controller OSC, questo strumento potrebbe esservi d'aiuto.  
Potete inserire il **percorso OSC** e QLC+ calcolerà il numero di canale per voi. Si tratta sostanzialmente di un hash a 16 bit del percorso che QLC+ usa per rappresentare un input OSC.  
**Nota:** C'è uno scarto di 1 tra il calcolatore e ciò che vedete nell'Editor dei profili di input. Questo è normale poiché i canali in QLC+ iniziano da 1 e non da 0. Ciò che il calcolatore mostra è il numero di canale che dovete effettivamente scrivere in un profilo di input o nel vostro controller OSC personalizzato.

Controller
-----------

QLC+ è stato testato con i seguenti controller OSC:

* [Open Stage Control](https://openstagecontrol.ammd.net/)
* [TouchOSC](https://hexler.net/touchosc). Un profilo di input predefinito è pronto all'uso per i layout Mix16 e Automat5.
* [Pure Data](https://archive.flossmanuals.net/pure-data/network-data/osc.html)
