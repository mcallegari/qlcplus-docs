---
title: 'E1.31 (s.ACN)'
date: '05:11 22-08-2023'
media_order: e131_configuration.png
---

Introduzione
------------

QLC+ supporta il [protocollo E1.31](https://wiki.openlighting.org/index.php/E1.31) (noto anche come s.ACN) tramite un plugin di input/output che riceve e trasmette pacchetti sulla rete.  
Non sono necessari requisiti aggiuntivi, poiché QLC+ dispone di un'implementazione nativa del protocollo E1.31 che funziona su sistemi Linux, Windows e OSX.  
Il plugin E1.31 può inviare e ricevere pacchetti da più schede di rete, indirizzi virtuali, il dispositivo di loopback (127.0.0.1) e più universi per interfaccia di rete.  
Per impostazione predefinita, i pacchetti E1.31 verranno inviati come UDP su indirizzi multicast come 239.255.0.x, dove 'x' è il numero dell'universo selezionato in QLC+. La porta usata è la 5568.  
Quando si utilizza il dispositivo di loopback, i pacchetti vengono sempre trasmessi utilizzando l'indirizzo 127.0.0.1.  
Quando si trasmettono più universi sulla stessa interfaccia, i pacchetti verranno inviati per impostazione predefinita con un E1.31 Universe ID pari all'universo QLC+.  
  
Ad esempio:  
Universo QLC+ 1 --> Universo E1.31 1 su 239.255.0.1  
Universo QLC+ 2 --> Universo E1.31 2 su 239.255.0.2  
...  
Universo QLC+ 8 --> Universo E1.31 8 su 239.255.0.8  
  
Se le impostazioni sopra indicate non soddisfano i requisiti della vostra rete, leggete il capitolo seguente.

Configurazione
-------------

Facendo clic sul pulsante di configurazione ![](/basics/configure.png), verrà visualizzata una piccola finestra di dialogo che mostra il pannello Universes Configuration.  
  
Dopo che un universo QLC+ è stato collegato (patched) con un input o output E1.31, verrà visualizzata una voce in questo elenco, che permette di configurare manualmente i parametri desiderati da usare per il plugin E1.31.  
Le linee di input possono essere configurate con i seguenti parametri:  

|     |     |
| --- | --- |
| **Multicast** | Questa casella di spunta consente di scegliere tra input multicast e input unicast.  <br>Quando è selezionata, questo universo riceverà pacchetti dal gruppo multicast scelto su questa interfaccia.  <br>Quando non è selezionata, questo universo riceverà pacchetti unicast solo su questo indirizzo IP.  <br>Selezionando l'input Unicast sarà possibile selezionare una Porta di input diversa. |
| **Indirizzo IP** | Questo è l'indirizzo IP di input su cui il plugin E1.31 rimarrà in ascolto sull'interfaccia selezionata, per questo universo QLC+.  <br>Quando l'input è impostato su multicast, potete selezionare l'IP multicast da 239.255.0.1 a 239.255.0.255.  <br>Quando l'input è impostato su unicast, l'indirizzo IP è bloccato sull'indirizzo IP dell'interfaccia selezionata. |
| **Porta** | Questa è la porta di input su cui il plugin E1.31 rimarrà in ascolto per questo universo QLC+.  <br>Quando l'input è impostato su multicast, la porta è bloccata sulla porta multicast E1.31 predefinita: 5568  <br>Quando l'input è impostato su unicast, potete selezionare qualsiasi porta desideriate. |
| **Universo E1.31** | Questo è l'universo E1.31 di input che il plugin accetterà per questo universo QLC+.  <br>Questo permette di mappare qualsiasi universo E1.31 su qualsiasi universo QLC+. |

  
Esempio di configurazione dell'input:

![](e131_configuration.png)

In questo esempio, quando si ricevono pacchetti E1.31 all'indirizzo 127.0.0.1 e porta 8000, i pacchetti che operano sull'universo E1.31 4 influenzeranno l'universo QLC+ 1.  
Stiamo anche trasmettendo l'universo QLC+ 2 sull'indirizzo multicast 239.255.0.2, universo E1.31 1, e l'universo QLC+ 3 sull'indirizzo unicast 13.0.0.175 porta 7000, universo E1.31 2.  
  
Le linee di output possono essere configurate con i seguenti parametri:  

|     |     |
| --- | --- |
| **Multicast** | Questa casella di spunta consente di scegliere tra output multicast e output unicast.  <br>Quando è selezionata, questo universo invierà pacchetti al gruppo multicast scelto su questa interfaccia.  <br>Quando non è selezionata, questo universo invierà pacchetti unicast all'indirizzo IP unicast scelto.  <br>Selezionando l'output Unicast sarà anche possibile selezionare la porta in uscita. |
| **Indirizzo IP** | Questo è l'indirizzo IP di destinazione a cui il plugin E1.31 trasmetterà i pacchetti.  <br>Per impostazione predefinita viene usato un indirizzo multicast come descritto sopra.  <br>Quando l'output è impostato su multicast, potete impostare questo parametro nell'intervallo 1-255.  <br>Questo permette di inviare pacchetti all'intervallo multicast da 239.255.0.1 a 239.255.0.255.  <br>Quando l'output è impostato su unicast, potete selezionare qualsiasi indirizzo IP arbitrario.  <br>Quando si collega (patching) un universo QLC+ al dispositivo di loopback (127.0.0.1), i pacchetti unicast verranno sempre trasmessi a 127.0.0.1. |
| **Porta** | Questa è la porta a cui i pacchetti in uscita saranno destinati.  <br>La porta E1.31 multicast è sempre 5568.  <br>Quando l'output è impostato su unicast, potete selezionare qualsiasi porta desideriate. |
| **Universo E1.31** | Questo è l'universo E1.31 che verrà effettivamente scritto in ogni pacchetto trasmesso.  <br>Impostando questo parametro, potete usare qualsiasi universo QLC+ per trasmettere all'universo E1.31 desiderato. |
| **Modalità di trasmissione** | Qui potete selezionare se QLC+ deve trasmettere universi completi o parziali.  <br>'Full' significa che tutti i 512 canali DMX di un universo vengono trasmessi alla velocità del clock interno di QLC+ (50Hz), producendo un bitrate fisso di circa 200kbps.  <br>'Partial', invece, significa che QLC+ trasmetterà solo il canale DMX effettivamente utilizzato in un universo, a partire dal canale 1. Ad esempio, se alzate il canale 3 di un fixture con indirizzo 50, il plugin E1.31 trasmetterà solo 53 canali DMX, limitando così il bitrate di trasmissione.  <br>Usate questa impostazione solo se il nodo E1.31 ricevente supporta la trasmissione parziale. |
| **Priorità** | Priorità della sorgente E1.31.  <br>**0** è la priorità minima, **200** è la massima, **100** è la priorità predefinita.  <br>Quando un ricevitore E1.31 riceve dati per un particolare universo da più sorgenti, utilizza i dati della sorgente con la priorità più alta.  <br>Questo permette vari schemi di failover. Da notare che QLC+ non riconosce ancora la priorità in input. |

  
Le impostazioni diverse da quelle predefinite del plugin verranno salvate nel vostro workspace QLC+, per aumentare la portabilità di un progetto tra piattaforme diverse, come diversi sistemi operativi o un PC e un Raspberry Pi.

Compatibilità
-------------

QLC+ è stato testato con il seguente software e dispositivi E1.31:

* [DMXKing eDMX2 TX](https://web.archive.org/web/20160103204133/https://dmxking.com/artnetsacn/edmx2-tx-rdm) \- Dispositivo di output
