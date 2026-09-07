---
title: Channels
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 20%;
}
table th:nth-of-type(2) {
    width: 80%;
}
</style>

La sezione **Channels** contiene tutti i canali che il fixture comprende in
tutte le sue modalità. L'ordine in cui compaiono qui non ha importanza — i
canali vengono disposti in un ordine specifico all'interno di ciascuna
modalità, nella sezione [Modes](../modes). Ciò che conta qui è il **nome** di
ciascun canale e le sue **capabilities** (i suoi intervalli di valori DMX e
cosa fanno).

Una piccola barra degli strumenti si trova nella parte superiore della
sezione:

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new channel** | Crea un nuovo canale e apre il [Channel Editor](#channel-editor) sulla destra. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Rimuove i canali selezionati dal fixture **e da tutte le modalità**. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Channel wizard** | Crea molti canali simili in una sola volta (vedere [Capability wizard](#capability-wizard)). |

Fare clic su un canale per selezionarlo; fare **doppio clic** per aprirlo nel
Channel Editor. I canali possono essere **trascinati** da questo elenco
nell'elenco dei canali di una modalità, nella sezione [Modes](../modes).

## Channel Editor

Il Channel Editor si apre nel pannello sulla **destra** dell'editor. Viene
utilizzato per modificare un singolo canale e gli intervalli di valori DMX di
ciascuna **capability** (un colore, un gobo, la rotazione di un prisma, e così
via). Fare riferimento al manuale del proprio fixture (la sua "tabella DMX")
per i canali e gli intervalli di valori esatti.

|     |     |
| --- | --- |
| **Name** | Il nome del canale. Quando si sceglie un **Preset** per il canale (un canale con una sola capability), viene suggerito automaticamente un nome, che può comunque essere personalizzato. |
| **Preset** | Un preset è una scorciatoia che velocizza la creazione della definizione e fornisce al motore di QLC+ le informazioni necessarie per riconoscere e trattare correttamente un canale. Ad esempio, scegliere un preset di colore (Red, Green, Blue, …) o un preset Pan/Tilt compila tutte le informazioni richieste con un solo clic. Quando è selezionato un preset, il resto dell'editor diventa inattivo. Se il canale ha più intervalli DMX (capability), lasciare **Preset** su "Custom" e definire autonomamente le capability (sotto). |
| **Type** | Il ruolo del canale nel fixture. Scegliere un tipo imposta implicitamente la precedenza del canale ([LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence) o [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence)), quindi è importante scegliere il tipo corretto.<br><br>I tipi di intensità/colore seguono la regola **HTP**: **Intensity, Red, Green, Blue, Cyan, Magenta, Yellow, White, Amber, UV, Lime e Indigo**.<br>Tutti gli altri tipi seguono la regola **LTP**: **Beam, Colour, Effect, Gobo, Maintenance, Nothing, Pan, Tilt, Prism, Shutter e Speed**.<br><br>**Intensity** viene utilizzato per i canali dimmer / master dimmer.<br>I **colori primari** (Red, Cyan, White, …) controllano i canali di colore singolo — da non confondere con il tipo "Colour" descritto sotto. Notare che il [Grand Master](/basics/glossary-and-concepts#grand-master) controlla per impostazione predefinita solo i canali Intensity e i canali di colore primario, e lo strumento Colore è disponibile solo quando un fixture fornisce canali di colore primario RGBAWUV/CMY.<br>Il tipo **Colour** controlla una ruota colore fissa o macro colore predefinite — *non* assegnargli singoli canali RGBAW/CMY.<br>Il tipo **Gobo** controlla la posizione o l'indicizzazione della ruota gobo.<br>Il tipo **Speed** controlla qualcosa legato alla velocità (rotazione del gobo, velocità dell'arcobaleno, …).<br>Il tipo **Prism** controlla un prisma.<br>Il tipo **Shutter** controlla un otturatore, uno strobo o un iris.<br>Il tipo **Beam** controlla un modellatore di fascio (come uno zoom).<br>Il tipo **Effect** controlla qualcosa che non rientra negli altri gruppi.<br>Il tipo **Maintenance** controlla funzioni come il reset o una ventola di raffreddamento.<br>Il tipo **Nothing** è un canale segnaposto o riempitivo.<br>I tipi **Pan** e **Tilt** controllano il movimento Pan/Tilt (X/Y) delle teste mobili o dei laser. |
| **Role** | Applicabile alle coppie di canali che formano valori a 16 bit, solitamente **Pan** o **Tilt** (alcuni fixture più recenti supportano anche dimmer, RGB, gobo o focus a 16 bit).<br>Per i valori a 8 bit (un canale per funzione) assegnare il byte di controllo **Coarse (MSB)**. Per i valori a 16 bit (due canali per funzione) assegnare **Coarse (MSB)** al canale grossolano e **Fine (LSB)** al canale fine. In caso di dubbio, utilizzare **Coarse (MSB)**. |
| **Default value** | Il valore DMX (0–255) a cui il canale viene impostato all'accensione. Ad esempio, alcune teste mobili centrano il proprio Pan/Tilt, il che significa un valore iniziale di 127. |
| **Capabilities** | L'elenco degli intervalli di valori DMX per il canale, ciascuno con un valore **From**, un valore **To** e una **Description**. Se un canale fornisce una sola capability (ad es. pan o dimmer) utilizzare invece un preset di canale. Per canali più complessi (colori, gobo) creare un intervallo per ciascuna voce (ad es. 0–15 bianco, 16–32 blu …). Fare clic su From / To / Description di una riga per modificarla; premere **Tab** per spostarsi tra i campi e continuare sulla riga successiva. Un'icona di avviso ⚠ appare su una riga la cui descrizione è vuota o il cui intervallo si sovrappone a un altro. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> | **Elimina le capability selezionate** dal canale. |
| <i class="fa fa-2x fa-palette" style="color:yellow"></i> | **Assegnazione automatica del colore** — per un canale colore, compila automaticamente le capability di colore standard. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> | **Capability wizard** — crea più capability della stessa dimensione in una sola volta (vedere sotto). |

### Capability preset

A ciascuna capability può essere assegnato un **preset**, che fornisce al
motore di QLC+ maggiori informazioni su quell'intervallo di valori DMX. A
seconda del tipo di preset, appaiono campi aggiuntivi:

* **ColorMacro** — scegliere un singolo colore (tipicamente usato sulle ruote
  colore).
* **ColorDoubleMacro** — scegliere due colori per rappresentare una posizione
  intermedia della ruota colore.
* **GoboMacro** — scegliere un'immagine gobo da mostrare quando questo
  intervallo è attivo.
* **StrobeFrequency** — inserire una frequenza di strobo precisa, in Hertz.
* **StrobeFreqRange** — inserire una frequenza minima e massima (in Hertz) per
  un intervallo di strobo.
* **Alias** — un preset speciale che indica che, quando questo intervallo è
  attivo, un canale deve essere sostituito. Vedere la sezione [Aliases](../aliases).

Una casella **Preview** o **Value(s)** accanto al preset permette di impostare
i colori associati, l'immagine del gobo o i valori di frequenza.

## Capability wizard

Il Capability Wizard crea rapidamente più intervalli di capability della
stessa dimensione. Questo si applica generalmente a colori fissi, indici gobo
e canali macro.

|     |     |
| --- | --- |
| **Start** | Il valore iniziale per le nuove capability. Modificarlo per saltare eventuali capability già esistenti all'inizio dell'intervallo del canale. |
| **Width** | La dimensione di ciascun intervallo di valori. |
| **Amount** | Il numero di capability da creare. |
| **Name** | Il nome comune per ciascuna capability. Utilizzare un cancelletto `#` per indicare dove va inserito un numero indice (ad es. "Gobo #" crea Gobo 1, Gobo 2, Gobo 3 …). |
| **Sample** | Si aggiorna man mano che si modificano i parametri, mostrando in anteprima le capability che verranno create. |
