---
title: 'Glossario e concetti'
date: '07:32 21-08-2023'
---

Q Light Controller Plus (QLC+ in breve) è pensato per controllare apparecchiature di illuminazione utilizzate in vari tipi di spettacoli, come concerti dal vivo e teatri, ecc. L'intento principale è che QLC+ sia in grado di superare i banchi luci commerciali senza la necessità di un manuale di 500 pagine, grazie a un'interfaccia utente intuitiva e flessibile.

Questa pagina è stata organizzata in ordine alfabetico per facilitare la ricerca di un argomento specifico.

### ![](../audio.svg) Audio

Una funzione [audio](#functions) è un oggetto che rappresenta un file audio salvato su disco.  
QLC+ supporta i formati audio più comuni come Wave, MP3, M4A, Ogg e Flac. Supporta canali mono o stereo e diverse frequenze di campionamento come 44,1KHz, 48KHz, ecc...  
Le funzioni Audio possono essere inserite in un [Chaser](#chaser) o in uno [Show](#show) nel momento desiderato, tramite il pannello [Show Manager](/show-manager).  
Come la maggior parte delle funzioni di QLC+, Audio supporta i tempi di fade in e fade out.

### ![](../blackout.svg) Blackout

Blackout è una funzione speciale di QLC+ usata per impostare a zero tutti i canali [HTP](#htp-highest-takes-precedence) in tutti gli universi. Questo avrà l'effetto di interrompere l'emissione luminosa da tutti i fixture. I canali rimarranno a zero, indipendentemente dalle funzioni attualmente in esecuzione o dai valori assegnati manualmente (ad esempio dal [Simple Desk](/simple-desk)). Quando il Blackout viene disattivato, tutti i canali torneranno a essere controllati dalle funzioni o dal valore impostato manualmente.

### Capabilities

Alcuni canali nei fixture intelligenti forniscono molti tipi di funzioni, o _capabilities_, come accendere la lampada quando il valore del canale è \[240-255\], impostare un colore rosso su una ruota colori quando il valore è esattamente \[15\], oppure semplicemente controllare l'intensità del dimmer del fixture con valori \[0-255\]. Ognuna di queste singole funzioni è chiamata capability e ciascuna di esse ha queste tre proprietà:

*   Valore minimo: Il valore minimo del canale che fornisce una capability.
*   Valore massimo: Il valore massimo del canale che fornisce una capability.
*   Nome: Il nome descrittivo di una capability
*   Preset: Una funzionalità predefinita che permette a QLC+ di riconoscere con precisione come trattare e simulare un valore di canale

### ![](../chaser.svg) Chaser

Una funzione [Chaser](#functions) è costituita da più scene eseguite in sequenza, una dopo l'altra, quando la funzione chaser viene avviata. La funzione successiva viene eseguita solo dopo che la precedente è terminata. È possibile inserire in un chaser un numero qualsiasi di [funzioni](#functions).

La direzione della funzione Chaser può essere invertita, oppure la selezione delle scene può essere randomizzata. La funzione Chaser può anche essere impostata per eseguire un ciclo infinito, un ciclo ping-pong infinito (la direzione si inverte dopo ogni passaggio), oppure può essere eseguita una sola volta, in modalità single-shot, dopo la quale termina da sola. Se la funzione è impostata per ripetersi all'infinito, deve essere fermata manualmente.

Ogni Chaser ha le proprie impostazioni di velocità:

*   **Fade In:** La velocità di dissolvenza in entrata di uno step
*   **Hold:** Il tempo di mantenimento di uno step
*   **Fade Out:** La velocità di dissolvenza in uscita di uno step
*   **Duration:** La durata di uno step

È possibile creare copie delle funzioni chaser con il [Function Manager](/function-manager). Le scene contenute in un chaser non vengono duplicate quando un chaser viene copiato. Solo l'ordine e la direzione vengono copiati nel nuovo chaser.

### Click And Go

Click And Go è una tecnologia che permette all'utente di accedere rapidamente a macro e colori in modo completamente visuale e con pochi clic. Questo può portare a spettacoli dal vivo più efficienti e a maggiore libertà nello scegliere facilmente il risultato desiderato.  
Al momento sono disponibili tre tipi di widget:

*   Colore singolo (si applica ai canali di intensità Rosso, Verde, Blu, Ciano, Giallo, Magenta, Ambra e Bianco)
*   Selettore colore RGB. Controlla i valori dei canali RGB selezionati con un singolo clic
*   Selettore Gobo/Macro. Accede e visualizza un Gobo/Macro definito nella definizione del fixture

Una panoramica con screenshot è disponibile [qui](https://www.qlcplus.org/old/clickandgo.html)

### ![](../collection.svg) Collection

Una funzione [Collection](#functions) racchiude più funzioni che vengono eseguite simultaneamente quando la funzione collection viene eseguita. È possibile inserire in una collection un numero qualsiasi di funzioni, ma ogni funzione può essere inserita una sola volta e una collection non può essere membro diretto di se stessa.

Le collection non hanno impostazioni di velocità. La velocità di ogni funzione membro viene impostata individualmente utilizzando i rispettivi editor.

È possibile creare copie delle funzioni collection con il [Function Manager](/function-manager). Le funzioni contenute in una collection non vengono duplicate; viene copiato solo l'elenco delle funzioni.

### DMX

[DMX](https://it.wikipedia.org/wiki/DMX512) è l'abbreviazione di Digital MultipleX. Definisce sostanzialmente un insieme di proprietà, protocollo, cablaggio ecc. Nel caso del software di illuminazione, definisce il numero massimo di canali (512) per universo e l'intervallo di valori di ciascun canale (0-255).

QLC+ supporta un numero illimitato di universi (ce ne sono 4 iniziali, ma se necessario se ne possono aggiungere altri). Non devono necessariamente essere collegati a hardware DMX. L'effettiva astrazione hardware (che sia analogica 0-10V, DMX o un altro metodo) viene realizzata tramite i [plugin di output](#input-output-plugins).

### ![](../efx.svg) EFX

Una funzione [EFX](#functions) viene utilizzata principalmente per automatizzare le luci mobili (ad es. scanner e teste mobili), ma può anche automatizzare i valori RGB o Dimmer di luci non mobili. L'EFX può creare percorsi matematici complessi su un piano X-Y che vengono convertiti in valori DMX per i canali pan e tilt, o RGB o Dimmer del fixture.

### ![](../fixture.svg) Fixture

Un fixture è essenzialmente un dispositivo di illuminazione. Può essere, ad esempio, una testa mobile, uno scanner, un laser ecc. Tuttavia, per semplicità, singoli PAR (e simili) che di solito sono controllati tramite un canale dimmer per unità possono essere raggruppati insieme per formare un unico fixture.

Con il Fixture Definition Editor, gli utenti possono modificare le informazioni condivise dei fixture salvate in una libreria di fixture che contiene le seguenti proprietà per ciascun fixture:

*   Produttore (es. ClayPaky)
*   Modello (es. MAC250)
*   Tipo (Color Changer, Scanner, Moving Head, Smoke, Haze, Fan...)
*   Proprietà fisiche (tipo di lampada, angolo del fascio, dimensioni...)
*   Canali:
    *   Gruppo di canale (Intensity, Pan, Tilt, Gobo, Color, Speed ecc.)
    *   Associazioni di canale a 8 bit e 16 bit per i gruppi pan e tilt
    *   Colore primario opzionale per i canali di intensità (RGB/CMY)
    *   Intervalli di valori per le funzionalità del canale (es. 0-5:Lamp on, 6-15:Strobe ecc.)

Queste definizioni di fixture possono poi essere utilizzate per creare i fixture effettivi nell'applicazione Q Light Controller Plus, che avranno proprietà aggiuntive definite dagli utenti:

*   Universo DMX
*   Indirizzo DMX
*   Nome

È possibile creare più istanze di un fixture (ad es. gli utenti devono poter avere più istanze di un MAC250 in uso). Ogni fixture può essere nominato, ma il nome non viene utilizzato internamente da QLC+ per identificare le singole istanze dei fixture. Lo stesso vale per l'indirizzo DMX. Ciononostante, gli utenti sono incoraggiati a nominare i propri fixture in modo sistematico per aiutare a identificare ciascuno di essi, se necessario.

I dispositivi dimmer generici non necessitano di una propria definizione di fixture, perché di solito più dimmer vengono collegati a uno spazio di indirizzi comune, impiegando uno o più rack dimmer. Gli utenti possono creare istanze di queste entità dimmer generiche semplicemente definendo il numero di canali che ciascuna di esse dovrebbe avere.

### ![](../group.svg) Fixture Group

Un fixture group è, come dice il nome, un gruppo di [fixture](#fixture). Definisce anche (a un livello piuttosto basilare) la disposizione fisica reale di questi fixture nel mondo reale. Questa conoscenza può essere utilizzata, ad esempio, nella RGB Matrix per produrre una parete di luci miscelabili RGB che possono agire come singoli pixel in un pattern grafico o in un testo scorrevole.

### Fixture Mode

Molti produttori progettano i propri apparecchi intelligenti in modo tale che possano essere configurati per comprendere diversi set di canali. Ad esempio, uno scanner potrebbe avere due opzioni di configurazione: una per soli canali di movimento a 8 bit (1x pan, 1x tilt) e un'altra per canali di movimento a 16 bit (2x pan, 2x tilt). Invece di creare una definizione di fixture completamente nuova per ciascuna variante, queste sono state raggruppate nelle definizioni dei fixture di QLC+ in fixture mode. Altri banchi o formati chiamano questo "personality".

### ![](../functions2.svg) Functions

Il numero di funzioni è praticamente illimitato. Le funzioni vengono utilizzate per automatizzare l'impostazione dei valori sui canali DMX. Ogni tipo di funzione ha il proprio modo di automatizzare le luci.

I tipi di funzione sono:

*   [Scene](#scene)
*   [Chaser](#chaser)
*   [Sequence](#sequence)
*   [EFX](#efx)
*   [RGB Matrix](#rgb-matrix)
*   [Collection](#collection)
*   [Show](#show)
*   [Audio](#audio)
*   [Video](#video)

Ogni funzione può essere nominata e, sebbene il nome non venga utilizzato per identificare in modo univoco le singole funzioni, gli utenti sono incoraggiati a nominare le proprie funzioni in modo sistematico e conciso per aiutare a identificare ciascuna di esse. Per la propria comodità.

Ogni funzione ha le proprie impostazioni di velocità:

*   **Fade In:** Il tempo utilizzato per portare in dissolvenza i canali HTP (nelle Scene anche LTP) al loro valore target
*   **Fade Out:** Il tempo utilizzato per riportare in dissolvenza i canali HTP/intensity a zero
*   **Duration:** La durata dello step corrente (non applicabile alle Scene)

### Grand Master

Il Grand Master viene utilizzato come slider master finale prima che i valori vengano scritti sull'hardware DMX fisico effettivo. Solitamente, il Grand Master influisce solo sui canali **Intensity**, ma può anche essere modificato per influire sui valori di **tutti** i canali.

Il Grand Master ha anche due **Value Mode** che controllano il modo in cui il Grand Master influisce sui valori dei canali:

*   Reduce: I valori dei canali interessati vengono ridotti di una percentuale impostata con lo slider del Grand Master. Ad esempio, un Grand Master al 50% farà sì che tutti i canali interessati vengano ridotti al 50% dei loro valori **attuali**.
*   Limit: I canali interessati non possono ottenere valori superiori a quello impostato con lo slider del Grand Master. Ad esempio, un Grand Master a 127 farà sì che i valori massimi di tutti i canali interessati vengano limitati esattamente a 127.

### Head

Un head rappresenta un singolo dispositivo di emissione luminosa in un fixture. Solitamente, un singolo fixture contiene esattamente un'uscita, come la lente, la lampada, o un set di LED. Esiste tuttavia un numero crescente di fixture sul mercato che, pur essendo trattati come un singolo fixture, hanno più dispositivi di emissione luminosa, cioè head.

Ad esempio, potreste avere un fixture a barra LED RGB assemblato su un unico chassis e che quindi appare come un singolo fixture con un ingresso DMX e un'uscita DMX. Tuttavia, è in realtà composto da quattro "fixture" LED RGB separati. Questi fixture separati sono trattati in QLC+ come head; condividono alcune proprietà con i loro head fratelli, possono essere controllati individualmente, ma potrebbero anche avere un controllo di intensità master che controlla l'emissione luminosa di tutti gli head insieme.

Ogni head appartiene a un [Fixture Mode](#fixture-mode) perché in una modalità, un fixture potrebbe fornire canali sufficienti per controllare individualmente ciascuno dei suoi head, mentre in un'altra modalità potrebbero essere forniti solo pochi canali per controllare tutti gli head simultaneamente.

### HTP (Highest Takes Precedence)

HTP è una regola che decide quale livello viene inviato a un universo DMX da un canale quando il canale è controllato da più di una [funzione](#functions) o widget della Virtual Console. Generalmente, i canali di intensità obbediscono alla regola HTP. Questo include i canali di intensità generici usati per controllare l'_intensità luminosa_ con i dimmer e anche i canali che controllano l'intensità di un colore, tipicamente in un fixture a LED.

La regola HTP è semplice: il livello più alto (più vicino al 100%) che viene attualmente inviato a un canale è quello che viene inviato all'universo DMX.

Supponiamo di avere due slider che controllano lo stesso canale di intensità. Prima impostate lo slider 1 al 50% e poi spostate lo slider 2 dallo 0% al 75%. Finché lo slider 2 è sotto il 50% non succede nulla, ma dopo aver superato il livello del 50% impostato dallo slider 1, l'intensità luminosa aumenta fino al 75%. Se trascinate di nuovo lo slider 2 verso lo 0%, l'intensità luminosa diminuisce finché non raggiunge il 50% impostato dallo slider 1 e rimane al 50% finché lo slider 1 non viene trascinato verso il basso.

Una dissolvenza incrociata tra 2 [Scene](#scene) sostituirà i livelli HTP nella prima scena con i livelli HTP della seconda. I nuovi livelli HTP verranno combinati con i livelli HTP di altre funzioni e widget della virtual console come sopra descritto. Vedi anche [LTP](#ltp-latest-takes-precedence).

### ![](../inputoutput.svg) Input/Output plugins

QLC+ supporta una varietà di plugin per inviare e ricevere dati da/verso il mondo esterno.  
Un plugin può essere un'interfaccia verso dispositivi fisici (come adattatori DMX o controller MIDI) o verso un protocollo di rete (come [Art-Net](/plugins/art-net), [OSC](/plugins/osc) o [E1.31](/plugins/e1-31-sacn)).  
I plugin supportano funzionalità di input, output o feedback a seconda del dispositivo o del protocollo che controllano.

I principali metodi di input per QLC+ sono naturalmente la tastiera e il mouse. Gli utenti possono assegnare tasti della tastiera ai pulsanti della virtual console e trascinare slider e fare praticamente tutto con un mouse.

Tuttavia, con i plugin è possibile collegare al proprio computer dispositivi di input aggiuntivi per alleviare l'esperienza utente piuttosto scomoda e lenta che si ottiene con un normale mouse e tastiera. I plugin che supportano una linea di input forniscono la capacità di far produrre a dispositivi esterni dati di input verso vari elementi di QLC+.

Una input line è una connessione fornita da un hardware o da una rete a cui si accede tramite un plugin di input. Può essere, ad esempio, un connettore MIDI IN nel computer dell'utente (o periferica) a cui gli utenti possono collegare dispositivi di input compatibili con MIDI come slider board ecc.

Una output line è una connessione fornita da un hardware o da una rete a cui si accede tramite un plugin di output. In altre parole, è un vero universo DMX, ma è stato chiamato output per distinguerlo dagli universi interni di QLC+. Potete pensarli come i singoli connettori di uscita XLR sul vostro hardware DMX.

### Input profiles

Gli input profile possono essere pensati come i "cugini" dei [fixture](#fixture); contengono informazioni su dispositivi specifici che producono dati di input. Un dispositivo di input può essere, ad esempio, una slider board come il Behringer BCF-2000, il KORG nanoKONTROL, un Enttec Playback Wing...

### LTP (Latest Takes Precedence)

LTP è una regola che decide quale livello viene inviato a un universo DMX da un canale quando il canale è controllato da più di una [funzione](#functions) o widget della Virtual Console. Generalmente, viene utilizzata per i canali che sono stati assegnati a gruppi diversi dal gruppo **Intensity**, come pan, tilt, gobo, velocità dello strobo e altri _parametri di fixture intelligenti_

La regola LTP è semplice: l'ultimo livello impostato da una funzione o da un widget della Virtual Console viene inviato all'universo DMX.

Durante una dissolvenza incrociata tra [Scene](#scene), i livelli LTP vengono spesso modificati. Questo deve essere gestito con una certa attenzione poiché alcuni livelli LTP devono saltare immediatamente a un nuovo livello, ad esempio quando si cambia da un gobo a un altro. I gruppi LTP come pan e tilt, tuttavia, potrebbero dover cambiare gradualmente da un livello all'altro durante una dissolvenza incrociata. È possibile ottenere tempistiche diverse combinando le scene in una [Collection](#collection). Vedi anche [HTP](#htp-highest-takes-precedence).

### ![](../palette.svg) Palette

Una Palette è un'entità in QLC+ che rappresenta una caratteristica di un fixture. Ad esempio una Palette può essere un colore, una posizione, un angolo di zoom e così via.
Le Palette possono essere usate nelle [Scene](#scene) per astrarre una caratteristica indipendentemente dai fixture controllati dalla Scene.

### ![](../rgbmatrix.svg) RGB Matrix

Una funzione [RGB Matrix](#functions) può essere usata per imporre grafica semplice e testo su una matrice (una griglia o una parete) di [head](#head) di fixture RGB e/o monocromatici. La funzione RGB Matrix è stata progettata per essere estendibile con [script](#rgb-script) che possono essere scritti dagli utenti.

Ogni RGB Matrix ha le proprie impostazioni di velocità:

*   **Fade In:** Tempo di dissolvenza in entrata di ogni pixel
*   **Fade Out:** Tempo di dissolvenza in uscita di ogni pixel
*   **Duration:** La durata dello step/frame corrente

### ![](../rgbmatrix.svg) RGB Script

Un RGB script è un programma scritto in [ECMAScript](https://it.wikipedia.org/wiki/ECMAScript) (noto anche come JavaScript) che produce i dati immagine necessari per le funzioni [RGB Matrix](#rgb-matrix). Per saperne di più consultate la pagina [RGB Script API](/function-manager/rgb-script-api).

### ![](../scene.svg) Scene

Una funzione [Scene](#functions) comprende i valori dei canali selezionati contenuti in una o più istanze di fixture. Quando una scena viene avviata, il tempo necessario ai suoi canali per raggiungere i valori target dipende dalle impostazioni di velocità della scena:

Ogni funzione ha le proprie impostazioni di velocità:

*   **Fade In:** Il tempo utilizzato per portare in dissolvenza tutti i canali ai loro valori target, da qualsiasi valore avessero
*   **Fade Out:** Il tempo utilizzato per riportare in dissolvenza i canali HTP/intensity a zero. Notare che SOLO i canali [HTP](#htp-highest-takes-precedence) sono interessati da questa impostazione.

È possibile creare copie delle funzioni scene con il [Function Manager](/function-manager). Tutto il contenuto della scena viene copiato nel duplicato.

### ![](../sequence.svg) Sequence

Una Sequence ha alcune delle funzionalità di un [Chaser](#chaser).  
Equivale a un Chaser in cui ogni step è una singola [Scene](#scene) e ognuna di queste Scene controlla lo stesso insieme di canali. Una Sequence è legata a una specifica Scene, il che significa che tutti gli step della Sequence possono controllare solo i canali abilitati di quella Scene.  
Quando si creano nuovi step in una Sequence, non apparirà alcun popup di selezione della funzione, poiché uno step di una Sequence non può includere altre funzioni, a differenza di uno step di un Chaser.  
Quando viene creata una Sequence, apparirà una speciale icona di sequenza nel [Function Manager](/function-manager) come elemento figlio della Scene a cui è legata.  
Per capire la differenza tra una Sequence e un Chaser, siete invitati a leggere il secondo paragrafo della documentazione dello [Show Manager](/show-manager).

### ![](../script.svg) Script

La funzione [Script](#functions) si basa su un linguaggio di scripting semplice ma potente per automatizzare le funzionalità di QLC+ in ordine sequenziale. Uno Script può essere modificato con lo [Script Editor](/function-manager/script-editor).

### ![](../show.svg) Show

Uno Show è una funzione [avanzata](#functions) che racchiude la maggior parte delle funzioni di QLC+ per creare uno spettacolo luminoso guidato dal tempo. Uno Show può essere creato solo con lo [Show Manager](/show-manager) e può essere ispezionato e rinominato con lo [Show Editor](/function-manager/show-editor).

### ![](../video2.svg) Video

Una funzione [video](#functions) è un oggetto che rappresenta un file video salvato su disco o su un URL di rete.  
I formati video supportati dipendono dal sistema operativo utilizzato. Ad esempio Mac OSX è limitato ai file MOV/MP4 e poco altro.  
Le funzioni Video possono essere inserite in un [Chaser](#chaser) o in uno [Show](#show) nel momento desiderato, tramite il pannello [Show Manager](/show-manager).
