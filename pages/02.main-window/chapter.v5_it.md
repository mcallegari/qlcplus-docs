---
title: 'Finestra principale'
taxonomy:
    category: docs
child_type: docs
media_order: 'main-window-v5.png,main-window.png'
---

<style>
    #chapter p {
        text-align: left;
    }
</style>

### Capitolo 2

# Finestra principale

La finestra principale di QLC+ è composta da quattro parti principali:

1.  Una barra superiore con le scorciatoie globali
2.  Una barra di sotto-menu contestuale contenente i controlli per il contesto selezionato
3.  L'area di contesto principale, che può essere un pannello di anteprima o operativo
4.  Pannelli laterali per agire sulla vista corrente senza sprecare spazio

![](/main-window/main-window-v5.png)

La maggior parte dei controlli del software dispone di tooltip, che compaiono tenendo il cursore del mouse sopra di essi per un breve periodo.

### Barra superiore (1)

La barra superiore principale contiene le seguenti scorciatoie (da sinistra a destra):

* * *
#### ![](../basics/qlcplus.svg?resize=48,48) Menu delle azioni globali

Questo menu è accessibile da qualsiasi contesto di QLC+ ed è una scorciatoia alle principali operazioni di progetto.  
Le voci del menu sono elencate qui:

![](../basics/filenew.svg) Crea un nuovo progetto vuoto (CTRL+N)  
![](../basics/fileopen.svg?resize=48,48) Apre un progetto esistente (al passaggio del mouse, mostra un elenco dei file recenti) (CTRL+O)  
![](../basics/filesave.svg?resize=48,48) Salva il progetto corrente (CTRL+S)  
![](../basics/filesaveas.svg?resize=48,48) Salva il progetto corrente con un nuovo nome  
![](../basics/import.svg?resize=48,48) Importa Fixture e Funzioni da un progetto esistente  

![](../basics/undo.svg) Annulla l'ultima operazione  
![](../basics/redo.svg) Ripristina l'ultima operazione annullata  

![](../basics/network.svg) Configura le impostazioni di rete client e server (sia native che web interface)  
![](../basics/diptool.svg) Apre lo strumento di calcolo del DIP switch  
![](../basics/configure.svg) Apre il pannello delle impostazioni dell'interfaccia per regolare colori, scala, ecc..  
<i class="fa fa-maximize fa-2x"></i> Attiva/disattiva la modalità schermo intero (CTRL+F11)  
<i class="fa fa-earth-europe fa-2x"></i> Cambia la lingua dell'interfaccia (potrebbe richiedere un riavvio dell'applicazione)  
<i class="fa fa-circle-info fa-2x"></i> Visualizza informazioni su QLC+  

* * *

#### Pulsanti di cambio contesto

Premendo questi pulsanti, è possibile passare da un contesto all'altro.  
I contesti possono aiutare nella fase di progettazione, nelle operazioni dal vivo o nella configurazione input/output.  
I contesti possono essere staccati dalla finestra principale facendo clic con il pulsante destro del mouse sul relativo pulsante.  

![](../basics/editor.svg?resize=48,48) Visualizza [Fixture e Funzioni](/fixtures-and-functions)  
![](../basics/virtualconsole.svg?resize=48,48) Visualizza la [Virtual Console](/virtual-console)  
![](../basics/simpledesk.svg?resize=48,48) Visualizza il [Simple Desk](/simple-desk)  
![](../basics/showmanager.svg?resize=48,48) Visualizza lo [Show Manager](/show-manager)  
![](../basics/inputoutput.svg?resize=48,48) Visualizza il gestore di configurazione [Input/Output](/input-output)

#### Helper globali

La barra superiore della finestra principale include ulteriori helper sul lato destro dello schermo.

![](../basics/dmxdump.svg?resize=48,48) Apre il popup [DMX Dump](dmx-dump) per creare rapidamente delle Scene  
<i class="fa fa-wave-square fa-2x"></i>    Controllo BPM: mostra il numero di BPM corrente e apre il popup [BPM Control](/bpm-system)  
![](../basics/stopall.svg?resize=48,48) Mostra il numero di funzioni in esecuzione e permette di fermarle tutte contemporaneamente  


### Barra di sotto-controllo del contesto (2)

Questa è un'altra barra dei menu che cambia in base al contesto (o non è presente affatto), dove è possibile selezionare la modalità di anteprima del contesto oppure trovare una barra degli strumenti con vari controlli.  

* Fixtures And Functions mostra la modalità di anteprima e i selettori di universo
* Virtual Console mostra un selettore di pagina
* Simple Desk mostra un selettore di universo e il reset
* Show Manager mostra i controlli dell'editor e della riproduzione
* Input/Output Manager non ha una barra di sotto-controllo

### Area di lavoro principale (3)

Tutto avviene qui. Il pannello attivo dipende da quale contesto è attualmente selezionato.

### Pannelli laterali (4)

I pannelli laterali sono stati introdotti nella versione 5 per risparmiare spazio e fornire strumenti rapidi per migliorare l'editing del progetto.  
In questi pannelli è possibile trovare strumenti come:
* Fixture browser
* Editor di Fixture, Funzioni, Palette o Widget
* Elenco di plugin Input/Output, profili di input o widget della Virtual Console
