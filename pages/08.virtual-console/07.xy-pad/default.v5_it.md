---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

Un **XY Pad** è un controllo a due assi per **pan e tilt** — trascinando il
cursore sul pad, i fixture mobili collegati lo seguono. È il modo più
naturale per posizionare a mano teste mobili e scanner dalla
[Virtual Console](/virtual-console).

L'asse orizzontale del pad pilota il **pan** e l'asse verticale pilota il
**tilt**. L'intera area rappresenta il range completo di movimento
raggiungibile dai fixture: il bordo sinistro è il pan minimo, il bordo destro
il pan massimo, il bordo superiore il tilt minimo e il bordo inferiore il
tilt massimo.

## Elementi del widget

|     |     |
| --- | --- |
| **Range sliders** | Gli slider a due maniglie sul lato superiore e sinistro. Definiscono la **range window**: la porzione del pad in cui il cursore può muoversi. |
| **Main area** | L'area scura al centro, che rappresenta tutte le possibili posizioni X/Y. |
| **Range window** | Il rettangolo ciano semitrasparente disegnato sopra l'area principale, che segna i limiti impostati con i range slider. È nascosto quando i range slider coprono l'intero intervallo. |
| **Cursor** | La maniglia rotonda evidenziata. Si trascina con mouse/touch, con gli slider dei valori, oppure la si muove da un controller esterno. |
| **Fixture position dots** | I piccoli punti gialli che mostrano dove si trova realmente ciascuna testa controllata, letti dall'uscita DMX. Permettono di vedere i fixture che restano indietro rispetto al cursore (velocità pan/tilt, fade) oppure limitati a un range più stretto. |
| **Value sliders** | Gli slider a maniglia singola sul lato inferiore e destro. Impostano la posizione X e Y in modo indipendente, utile per regolazioni precise su un solo asse. |
| **Presets** | La fila di pulsanti sotto al pad, mostrata solo quando è stato aggiunto almeno un preset. Un pulsante preset attivo è evidenziato. |

## Aggiunta dei fixture

I fixture si aggiungono dalle **settings** del widget, nella sezione
**Fixtures**:

* Fare clic sul pulsante <i class="fa fa-2x fa-plus" style="color:limegreen"></i>
  **Add a fixture/head** per aprire il pannello laterale dei fixture, quindi
  **trascinare** gli elementi sull'area di rilascio sotto l'elenco.
* È possibile trascinare un **universe**, un **fixture group**, un
  **fixture** oppure una singola **head**. Universi, gruppi e fixture vengono
  espansi nelle rispettive teste singole, e le teste già presenti
  nell'elenco non vengono aggiunte due volte.
* Ogni riga mostra il **nome** della testa e il suo **X-Axis Range** e
  **Y-Axis Range** attuali, nelle unità della modalità Range Display Mode
  corrente. Un asse invertito è contrassegnato con **(R)**.
* È possibile aggiungere teste senza canale Pan o Tilt, ma semplicemente non
  producono alcuna uscita — il pad pilota solo i canali Pan/Tilt che trova.

Selezionare le righe nell'elenco (con Ctrl/Shift per la selezione multipla)
per agire su di esse con i pulsanti
<i class="fa fa-2x fa-pencil"></i> e
<i class="fa fa-2x fa-minus" style="color:crimson"></i> della stessa barra
degli strumenti.

## Limitare il movimento

Esistono due modi indipendenti per impedire ai fixture di puntare dove non
dovrebbero — verso il soffitto, verso il pubblico o fuori dal palco. Possono
essere usati insieme.

### 1. La range window (range slider)

I range slider superiore e sinistro limitano l'area in cui opera il pad. Un
rettangolo ciano semitrasparente segna la **range window** risultante
sull'area principale.

* Trascinando con il mouse, il cursore viene **vincolato** alla finestra: non
  ne uscirà anche trascinando all'esterno.
* Muovendo il pad da un **controller esterno**, il valore in ingresso viene
  invece **scalato** sulla finestra. L'intera corsa di un fader fisico si
  mappa sulla finestra ridotta, ottenendo maggiore sensibilità dove serve, e
  il feedback rimandato al controller viene scalato allo stesso modo.
* La range window è una proprietà del *pad*, non dei fixture: si applica
  contemporaneamente a tutte le teste controllate.

### 2. Range Pan/Tilt per singolo fixture

Selezionare una o più teste nell'elenco **Fixtures** e fare clic sul
pulsante <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the
selected fixture head(s)**. Una finestra di dialogo permette di impostare,
sia per **Pan** che per **Tilt**:

|     |     |
| --- | --- |
| **Minimum** | Inizio del range utilizzabile per quella testa. |
| **Maximum** | Fine del range utilizzabile per quella testa. |
| **Reverse** | Inverte la direzione di quell'asse per quella testa. |

L'intera area principale viene sempre utilizzata, e il range di ciascuna
testa viene **scalato su di essa**. Questo è ciò che rende coerente il
comportamento di un impianto misto: un fixture con pan a 540° può essere
fatto muovere esattamente come uno a 360°, così tutte le teste puntano nello
stesso punto quando il cursore si trova nella stessa posizione.

Ad esempio, impostando il minimo di Pan al 20% e il massimo all'80%, il
cursore sul bordo sinistro produce in uscita il 20% (DMX 51), sul bordo
destro l'80% (DMX 204), e tutti i valori intermedi vengono scalati in modo
proporzionale.

> I valori in questa finestra di dialogo sono espressi nelle unità della
> modalità **Range Display Mode** corrente (vedere sotto): gradi, percentuale
> o DMX. Quando sono selezionate più teste, la finestra di dialogo mostra il
> range della prima testa selezionata e — in modalità Degrees — il valore
> massimo consentito è il range più piccolo tra quelli selezionati, in modo
> che i valori inseriti siano validi per ogni testa selezionata. Premendo OK
> lo stesso range viene applicato a tutte.

## Settings

### Display Properties

* **Inverted Y-Axis** — inverte l'asse verticale, così il valore massimo di
  tilt viene raggiunto nella parte superiore del pad anziché in quella
  inferiore. Utile per fixture montati capovolti su un traliccio.

### Range Display Mode

Sceglie le unità usate per visualizzare e modificare i range Pan/Tilt dei
fixture:

* **Degrees** — gli angoli fisici ricavati dalla definizione del fixture.
  Significativo solo per i fixture la cui definizione dichiara un range
  pan/tilt.
* **Percentage** — 0–100% della corsa completa del fixture.
* **DMX** — valori DMX grezzi, 0–255.

Cambiare la modalità non modifica i range memorizzati, ma solo il modo in
cui vengono mostrati e inseriti.

### Fixtures

L'elenco delle teste controllate dal pad, con la relativa barra degli
strumenti:

|     |     |
| --- | --- |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a fixture/head** | Apre il pannello laterale dei fixture e l'area di rilascio per aggiungere universi, gruppi, fixture o singole teste. |
| <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the selected fixture head(s)** | Apre la finestra di dialogo del range Pan/Tilt per le teste selezionate. Vedere *Range Pan/Tilt per singolo fixture* più sopra. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected fixture head(s)** | Rimuove le teste selezionate dal pad. |

## Presets

I preset sono mostrati come pulsanti sotto al pad e danno accesso con un
tocco a posizioni, effetti e sottoinsiemi di fixture. Si gestiscono nella
scheda **Presets** delle impostazioni del widget.

|     |     |
| --- | --- |
| ![](/basics/position.svg?resize=48,48) **Position Preset** | Memorizza la posizione XY attuale del cursore come preset. Il nome predefinito sono le coordinate X/Y al momento della creazione. |
| ![](/basics/functions.svg?resize=48,48) **Scene/EFX Function Preset** | Apre il pannello laterale del Function Manager; trascinare funzioni ![](/basics/scene.svg?resize=48,48) [Scene](/basics/glossary-and-concepts#scene) o ![](/basics/efx.svg?resize=48,48) [EFX](/basics/glossary-and-concepts#efx) sull'area di rilascio per trasformarle in preset. Il nome predefinito è il nome della funzione. Le scene senza alcun canale Pan o Tilt vengono rifiutate. |
| ![](/basics/group.svg?resize=48,48) **Fixture Group Preset** | Apre il pannello laterale dei fixture; trascinare universi, gruppi, fixture o teste per creare un preset di gruppo fixture. Vengono mantenute solo le teste già controllate dal pad. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove selected preset** | Elimina il preset selezionato. |
| <i class="fa fa-2x fa-arrow-up"></i> / <i class="fa fa-2x fa-arrow-down"></i> **Move selected preset up / down** | Riordina il preset selezionato, che è anche l'ordine dei pulsanti sotto al pad. |
| **Preset name** | Rinomina il preset selezionato. Il nome è ciò che appare sul pulsante. |

### Tipi di preset e comportamento

Può essere attivo **un solo preset alla volta**. Attivare un preset
disattiva automaticamente quello precedente.

* ![](/basics/position.svg?resize=48,48) **Position** — cliccando il
  pulsante il cursore si sposta nella posizione memorizzata. Il pad continua
  a funzionare normalmente in seguito, così è possibile correggere la
  posizione a mano da lì.
* ![](/basics/efx.svg?resize=48,48) **EFX** — avvia la funzione
  [EFX](/function-manager/efx-editor). Cliccare di nuovo il pulsante (oppure
  attivare un altro preset) per fermarla. Mentre l'EFX è in esecuzione, i
  punti di posizione dei fixture mostrano i fixture che si muovono lungo il
  pattern.
* ![](/basics/scene.svg?resize=48,48) **Scene** — avvia la funzione
  [Scene](/function-manager/scene-editor), che imposta i propri valori
  Pan/Tilt. Cliccare di nuovo per fermarla.
  > Notare che viene avviata l'**intera** Scene, colori, dimmer e tutto il
  > resto incluso. È preferibile creare Scene dedicate contenenti solo
  > canali Pan e Tilt da usare come preset dell'XY Pad.
* ![](/basics/group.svg?resize=48,48) **Fixture Group** — limita il pad a un
  **sottoinsieme** delle teste che controlla: mentre è attivo, solo quelle
  teste seguono il cursore, le altre mantengono la loro posizione. Cliccare
  di nuovo per rilasciare la restrizione e tornare a controllare tutte le
  teste. L'elenco mostra quante teste contiene il preset.

## External input

Come ogni widget della Virtual Console, l'XY Pad può essere pilotato da
MIDI, OSC, DMX-in o qualsiasi altro ingresso supportato. Nella
configurazione degli ingressi del widget è possibile assegnare i seguenti
controlli:

|     |     |
| --- | --- |
| **Pan / Horizontal axis** | Posizione orizzontale (pan) a grana grossa. Scalata sulla range window quando ne è impostata una. |
| **Pan fine** | Posizione orizzontale fine (LSB), per fixture con pan a 16 bit. |
| **Tilt / Vertical axis** | Posizione verticale (tilt) a grana grossa. Scalata sulla range window quando ne è impostata una. |
| **Tilt fine** | Posizione verticale fine (LSB), per fixture con tilt a 16 bit. |
| **Width** | Riservato per la larghezza della range window. |
| **Height** | Riservato per l'altezza della range window. |
| **Preset: &lt;name&gt;** | Viene creata una voce per ciascun preset. Inviare un valore massimo (pressione di un pulsante) attiva o commuta quel preset, esattamente come cliccarne il pulsante. |

Ogni volta che la posizione cambia per un motivo *diverso* da un ingresso
esterno — un trascinamento col mouse, il richiamo di un preset, un annulla —
il pad invia un **feedback** con la posizione attuale. I fader
assoluti/motorizzati seguono il cursore, e gli encoder ricevono il proprio
valore interno riseminato in modo da continuare a funzionare in modo
relativo alla posizione reale. Il feedback non viene rimandato mentre è il
controller stesso a muovere il pad, così non si crea alcun loop di
feedback.

## Suggerimenti

* Impostare i **range X/Y** per singolo fixture in modo che un impianto
  misto di teste mobili punti tutto nello stesso punto quando il cursore del
  pad è centrato.
* Usare la **range window** per mantenere l'XY Pad in sicurezza entro l'area
  del palco, guadagnando allo stesso tempo risoluzione del fader su un
  controller esterno.
* Salvare le posizioni comuni come **position preset** per un richiamo
  istantaneo durante lo spettacolo, e riordinarle mettendo per prime quelle
  usate più spesso.
* Aggiungere **fixture group preset** a un unico pad invece di costruirne
  diversi: un tocco seleziona su quali teste si sta puntando.
* Osservare i **fixture position dots** per verificare che ogni testa abbia
  effettivamente raggiunto la posizione — le teste ancora in movimento, o
  con un range più stretto, sono immediatamente visibili.
