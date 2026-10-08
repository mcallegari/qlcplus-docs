---
title: Art-Net
date: '05:06 22-08-2023'
---

Introduzione
------------

QLC+ supporta il [protocollo Art-Net](https://en.wikipedia.org/wiki/Art-Net) tramite un plugin di input/output che riceve e trasmette pacchetti sulla rete.  
Non sono necessari requisiti aggiuntivi, poiché QLC+ dispone di un'implementazione nativa del protocollo Art-Net che funziona su sistemi Linux, Windows e macOS.  
Il plugin Art-Net può inviare e ricevere pacchetti da più schede di rete, indirizzi virtuali, il dispositivo di loopback (127.0.0.1) e più universi per interfaccia di rete.  
Per impostazione predefinita, i pacchetti Art-Net vengono trasmessi come UDP, utilizzando la porta predefinita 6454 e l'indirizzo di broadcast dell'interfaccia selezionata (es. 192.168.0.255). Quando si utilizza il dispositivo di loopback, i pacchetti vengono sempre trasmessi utilizzando l'indirizzo 127.0.0.1.  
Quando si trasmettono più universi sulla stessa interfaccia, i pacchetti verranno inviati per impostazione predefinita con un Art-Net Universe ID pari al numero dell'universo QLC+ meno 1.  
  
Ad esempio:  
Universo QLC+ 1 --> Universo Art-Net 0  
Universo QLC+ 2 --> Universo Art-Net 1  
...  
Universo QLC+ 8 --> Universo Art-Net 7  
  
Questa scelta è dovuta ad alcuni fatti:  
1- Il primo universo Art-Net valido è 0 e non 1  
2- Il primo universo accettato dai dispositivi Art-Net-DMX commerciali come eDMX e ODE è 0, quindi affinché QLC+ funzioni immediatamente, il primo universo Art-Net deve essere 0.  
  
Se le impostazioni sopra indicate non soddisfano i requisiti della vostra rete, leggete il capitolo seguente.

Configurazione
-------------

Facendo clic sul pulsante di configurazione ![](/basics/configure.png), verrà visualizzata una piccola finestra di dialogo con 2 schede: Configurazione Universi e Albero dei Nodi.  
  
**Configurazione Universi**: dopo che un universo QLC+ è stato collegato (patched) con un input o output Art-Net, verrà visualizzata una voce in questo elenco, che permette di configurare manualmente i parametri desiderati da usare per il plugin Art-Net.  
Le linee di input non hanno parametri particolari, mentre una linea di output può essere configurata con quanto segue:  

* **Indirizzo IP**: Questo è l'indirizzo IP di destinazione a cui il plugin Art-Net trasmetterà i pacchetti. Per impostazione predefinita viene usato un indirizzo di broadcast (quindi che termina con .255) e impostando questo valore nell'intervallo 1-254, Art-Net trasmetterà un universo QLC+ in modalità unicast. Se la vostra rete Art-Net utilizza un semplice hub, l'indirizzo IP di output è irrilevante, poiché broadcast o unicast non fanno alcuna differenza. Tuttavia, se utilizzate uno switch di rete, l'unicast è fondamentale per bilanciare la congestione della rete, poiché ogni porta dello switch è associata a un IP di rete e riceverà solo i pacchetti con il suo IP di destinazione.  
    **Nota**: Non impostate l'indirizzo IP di output con lo stesso indirizzo IP del vostro nodo trasmittente (es. il PC su cui è in esecuzione QLC+) poiché è semplicemente sbagliato e può causare un loop di rete. Se avete bisogno di comunicare con un nodo Art-Net in esecuzione sulla stessa macchina su cui gira QLC+, usate invece il dispositivo di loopback (127.0.0.1).
* **Universo Art-Net**: Questo è l'universo Art-Net che verrà effettivamente scritto in ogni pacchetto trasmesso. Impostando questo parametro, potete usare qualsiasi universo QLC+ per trasmettere all'universo Art-Net desiderato.
* **Modalità di trasmissione**: Qui potete selezionare se QLC+ deve trasmettere universi completi o parziali.  
    _Standard_ significa che gli universi DMX vengono trasmessi solo quando almeno un canale DMX cambia oppure ogni 2 secondi per aggiornare i valori del ricevitore.  
    _Full_ significa che tutti i 512 canali DMX di un universo vengono trasmessi alla velocità del clock interno di QLC+ (50Hz), producendo un bitrate fisso di circa 250kbps.  
    _Partial_, invece, significa che QLC+ trasmetterà solo il canale DMX effettivamente utilizzato in un universo, a partire dal canale 1. Ad esempio, se alzate il canale 3 di un fixture con indirizzo 50, il plugin Art-Net trasmetterà solo 53 canali DMX, limitando così il bitrate di trasmissione. Usate questa impostazione solo se il nodo Art-Net ricevente supporta la trasmissione parziale.

Le impostazioni diverse da quelle predefinite del plugin verranno salvate nel vostro workspace QLC+, per aumentare la portabilità di un progetto tra piattaforme diverse, come diversi sistemi operativi o un PC e un Raspberry Pi.  
  
**Albero dei Nodi**: Questa scheda mostra i nodi Art-Net rilevati sulla rete, raggruppati per interfaccia di rete.  
QLC+ apparirà sempre in questo elenco come un nodo partecipante alla rete.  
I nodi Art-Net vengono aggiunti a questo elenco se supportano il messaggio ArtPoll/ArtPollReply, altrimenti non appariranno. Questo non significa che non sarete in grado di comunicare con essi.

DMXKing eDMX e ENTTEC ODE
---------------------------

Se possedete uno di questi dispositivi, entrambi dispongono di strumenti di configurazione che potrebbero tornare utili quando si lavora con QLC+. Con essi potete impostare diversi parametri per adattare al meglio la configurazione per l'input/output dei dati da/verso QLC+.  
Ad esempio, se volete che l'universo 3 di QLC+ produca dati sulla prima porta di un eDMX, dovete usare lo strumento qui sotto per cambiare l'indirizzo dell'universo del dispositivo a 2.  
  
Ecco i link per scaricare gli strumenti:  
[DMXKing eDMX Configuration tool](https://dmxking.com/downloads/eDMX_Configuration.zip)  
[ENTTEC Node Management Utility](https://www.enttec.com/?main_menu=Products&pn=79001)  

Compatibilità
-------------

I dispositivi Art-Net compatibili sono elencati nella pagina [compatibilità](https://www.qlcplus.org/discover/compatibility) del sito web di QLC+.
