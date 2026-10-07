---
title: 'Show Wizard'
date: '12:00 07-10-2026'
taxonomy:
    category:
        - docs
---

Lo **Show Wizard** costruisce per voi uno show completo e pronto all'uso —
posizioni dei fixture, palette, effetti e una Virtual Console — a partire da
poche scelte di alto livello. Serve a portarvi da un progetto vuoto a un
impianto utilizzabile in pochi minuti, e a dare ai nuovi utenti un esempio
funzionante da cui imparare.

Aprirlo con il pulsante <i class="fa fa-hat-wizard fa-2x" style="color:yellow"></i>
**Show Wizard** nella parte superiore del pannello destro nello spazio di
lavoro [Fixtures and Functions](/fixtures-and-functions). Si apre come una
sovrapposizione a schermo intero con sei passaggi; un indicatore di avanzamento
nella parte superiore mostra a che punto siete, e i pulsanti **← Back** /
**Next →** in basso permettono di spostarsi tra i passaggi. Il pulsante
dell'ultimo passaggio riporta **Generate ✦** invece di **Next →**.

Non viene scritto nulla nel progetto finché non si preme **Generate**
sull'ultimo passaggio, e l'intero risultato — disposizione del palco, funzioni
e Virtual Console — viene creato in un'unica operazione ed è **completamente
annullabile con Ctrl+Z**, esattamente come qualsiasi altra modifica. Chiudere
lo wizard con il pulsante **✕** in qualsiasi momento scarta le scelte fatte
senza toccare il progetto.

## Passaggio 1 — Show Type

Il primo passaggio chiede che tipo di show si sta costruendo. La scelta
imposta valori predefiniti sensati per il resto dello wizard — la sede
suggerita al passaggio 3 e gli effetti preselezionati al passaggio 4 — ma
ognuno di questi valori predefiniti può comunque essere modificato in seguito.

| Show type | Uso tipico | Enfasi sugli effetti |
|-----------|--------------|-------------------|
| **Club Night** | Discoteca / club | Chaser veloci, colpi di strobo, chase RGB, effetti sincronizzati sul BPM |
| **Concert / Live** | Palco rock | Preset di posizione, lavaggi di colore, abbagliatori per il pubblico, EFX di movimento |
| **Theatrical** | Teatro | Basato su scene, dissolvenze lente, colori caldi, pattern gobo, preset di posizione |
| **Architectural** | Spazio aperto | Chase pixel delicati, miscele di colore, loop ambientali |
| **Custom** | Qualsiasi | Nulla è preselezionato — scegliere tutto autonomamente nei passaggi successivi |

## Passaggio 2 — Fixture Groups & Roles

Questo passaggio organizza i fixture in **gruppi** e assegna a ciascun gruppo
un **ruolo**. I ruoli guidano sia il posizionamento automatico sul palco al
passaggio 3, sia quali effetti vengono generati per il gruppo al passaggio 4.

Il passaggio è suddiviso in tre colonne:

* **Fixture Browser** (sinistra) — lo stesso browser usato altrove in QLC+.
  Trascinare un fixture da esso su un riquadro gruppo nella colonna centrale
  per patcharlo e aggiungerlo a quel gruppo in un'unica azione.
* **Fixture Groups** (centro) — i riquadri dei gruppi. Fare clic su **+ Add
  group** per creare un riquadro vuoto e nominato (nome predefinito "Group
  N"), quindi trascinarvi sopra i fixture. Selezionare la casella di un gruppo
  per includerlo nel posizionamento automatico e nelle funzioni generate. Qui
  vengono elencati anche i gruppi già esistenti nel progetto (creati al di
  fuori dello wizard), così è possibile portare impianti già esistenti nella
  generazione di effetti e Virtual Console dello wizard senza dover
  ripatchare nulla.
* **Detected capabilities & roles** (destra) — per ogni gruppo **selezionato**,
  mostra il ruolo assegnatogli e le capacità rilevate da QLC+ nei suoi fixture
  (movimento, miscelazione colore, gobo, shutter, dimmer). I ruoli vengono
  suggeriti automaticamente da queste capacità, ma è possibile cambiare
  manualmente il ruolo di qualsiasi gruppo.

### Roles

| Role | Icona | Significato |
|------|------|---------|
| **Key Light** | 💡 | Lavaggio frontale/dall'alto, l'illuminazione principale |
| **Fill Light** | 🔦 | Lavaggio supplementare da un'angolazione diversa |
| **Back Light** | 🔙 | Controluce posteriore / luce dal basso verso l'alto |
| **Side Light** | 📐 | Boom o luce laterale (quinte teatrali) |
| **Effect** | ✨ | Fixture per effetti aerei, fasci a mezz'aria |
| **Strip / Bar** | ▬ | Striscia LED o batten che corre lungo l'impianto |
| **Blinder** | 💥 | Abbagliatore per il pubblico / strobo |
| **Hazer** | 💨 | Macchina del fumo leggero o della nebbia |
| **Floor** | ⬆ | Luce da terra rivolta verso l'alto |

> Un gruppo i cui fixture sono **già patchati e posizionati** altrove nel
> progetto (cioè non contribuisce con *nuovi* fixture) permette allo wizard di
> saltare interamente il Passaggio 3 — vedere sotto.

## Passaggio 3 — Venue & Stage

Questo passaggio sceglie un **tipo di sede** e una **dimensione del palco**,
quindi mostra come i gruppi selezionati verranno posizionati su di esso. Viene
**saltato automaticamente** quando nessuno dei gruppi selezionati contiene un
fixture che lo wizard debba ancora posizionare — per esempio, se è stato
selezionato solo un gruppo esistente già posizionato nella
[3D View](/fixtures-and-functions/3d-view). L'indicatore di avanzamento mostra
in grigio il passaggio saltato invece di nasconderlo, così si vede sempre dove
si sarebbe trovato.

* **Venue type** — una tra quattro forme di palco. Ciascuna elenca i tipi di
  show a cui si adatta meglio:

  | Stage | Descrizione | Più adatto per |
  |-------|-------------|----------|
  | **Open Space** | Pavimento semplice, nessun elemento scenico. Adatto per impianti temporanei ed eventi generici. | Architectural, Custom |
  | **Box / Club** | Quattro pareti e un soffitto, truss lungo il perimetro. | Club Night |
  | **Rock Stage** | Palco rialzato, truss frontale e colonne verticali. | Concert / Live |
  | **Theatre** | Arco scenico, barre di proscenio, boom laterali. | Theatrical |

* **Stage size (metres)** — **Width**, **Height** e **Depth**, precompilate
  con una dimensione suggerita in base al numero di fixture. Modificare i
  campi se la sede reale è diversa; è la stessa dimensione dell'ambiente
  usata dalle impostazioni **Width / Height / Depth** della
  [3D View](/fixtures-and-functions/3d-view), quindi modificarla qui la
  modifica anche lì.
* **Automatic fixture placement** (lato destro) — elenca, per ogni gruppo
  selezionato, dove i suoi fixture verranno rigged e quanti fixture sono, per
  esempio *Key Light → Front truss, high — aimed at stage centre ~45°*. Il
  posizionamento segue le convenzioni di rigging più comuni per il ruolo —
  truss frontali per la key light, truss posteriori per il controluce, boom
  laterali alternati per la side light, un batten a tutta larghezza per le
  strip, e così via — e le teste vengono distribuite uniformemente tra le
  posizioni disponibili. Non è necessario alcun posizionamento 3D manuale,
  anche se è sempre possibile regolare singolarmente i fixture in seguito
  nella 3D View.

## Passaggio 4 — Effects

Questo passaggio seleziona quali **funzioni** lo wizard genererà —
raggruppate in famiglie, con un conteggio aggiornato di quante ne sono state
selezionate. Gli effetti che richiedono una capacità che nessuno dei fixture
possiede (per esempio effetti di movimento su un impianto di soli dimmer
semplici) vengono mostrati **in grigio** e non possono essere abilitati. Fare
clic su **All / None** nell'intestazione di una famiglia per selezionare o
azzerare tutti gli effetti disponibili di quella famiglia in una volta sola.

| Family | Effects | Needs |
|--------|---------|-------|
| 🎨 **Color** | Color Palette, Color Rainbow, Split Color, Gobo Palette | Canali di miscelazione colore e/o gobo |
| 💡 **Intensity** | Shutter Effects, Blinder Hit, Strobe Chase, Heartbeat | Un canale shutter/strobo, oppure un dimmer |
| 🎯 **Movement** | Position Presets, Fly Out, Fly In, Circle Chase, Figure Eight, Audience Sweep | Fixture con Pan/Tilt |
| ▦ **Matrix** | Pixel Chase, Wave, Fireworks, Plasma, Marquee | Un fixture dimmer o con miscelazione colore (inclusi i moving — gli effetti matrix girano sull'intensità quando non è disponibile la miscelazione colore) |
| 🎬 **Show Cues** | Ambient Loop | Almeno un fixture con miscelazione colore **statico** (non in movimento) |

Ogni show type preseleziona un sottoinsieme sensato all'ingresso in questo
passaggio (per esempio, Club Night attiva Color Rainbow, Blinder Hit, Strobe
Chase, Circle Chase e Pixel Chase; Theatrical attiva Color Palette, Position
Presets, Gobo Palette e Ambient Loop), ma è possibile aggiungere o rimuovere
liberamente effetti indipendentemente dallo show type scelto al passaggio 1.
**Custom** parte senza nulla selezionato.

## Passaggio 5 — Controller

Questo passaggio **opzionale** collega un controller di input MIDI, OSC o DMX
patchato alla Virtual Console che lo wizard sta per costruire. Saltarlo
liberamente — è sempre possibile mappare i controlli a mano in seguito con
**Auto Detect** su qualsiasi widget della Virtual Console.

* **Connected controllers** (sinistra) — ogni universo che ha attualmente una
  patch di input (non solo una riga plugin che *potrebbe* essere patchata).
  Fare clic su una voce per selezionarla per la mappatura; fare di nuovo clic
  per deselezionarla. Ogni voce mostra il plugin, il numero di universo e
  alcune etichette informative: il nome del **profilo di input** patchato (o
  *No input profile* quando verrà usata una mappatura generica/lineare),
  quanti **pulsanti** e **fader** lo wizard ha trovato, se il profilo dispone
  di **colour LEDs**, e se il **feedback** è già abilitato su quell'universo.
  Se non è ancora patchato nulla, un pulsante qui porta direttamente al
  pannello **Input/Output** per patcharne uno, per poi tornare allo wizard.
* **Mapping options** (destra, abilitate una volta selezionato un
  controller):

  | Option | Effetto |
  |--------|--------|
  | **Auto-map Virtual Console controls** | Collega i pulsanti, i fader e gli XY pad generati ai canali del controller: i pulsanti del controller pilotano i pulsanti della Virtual Console, i fader/encoder pilotano gli slider di intensità e pan/tilt. |
  | **Send feedback to the controller** | Patcha la linea di output del controller in modo che i suoi LED si accendano e i suoi fader motorizzati si muovano per rispecchiare lo stato della Virtual Console. |
  | **Match LED colours to button colours** | Su un controller il cui profilo di input ha una tabella colori, illumina il pad di ciascun pulsante colore con il colore più vicino corrispondente. Ignorata sui controller senza colour LEDs. |

  Sotto le opzioni, un riquadro **Estimated usage** fornisce un'anteprima dal
  vivo di quanto verrà usato dalla mappatura, ad es. *"18 of 24 buttons, 3 of
  9 faders"*, aggiornata man mano che si cambia il controller o le opzioni.

QLC+ riconosce i comuni controller **pad-grid** (come i layout APC mini o
Launchpad) dal loro profilo di input e mappa i controlli in modo che lo stesso
tipo di controllo finisca sempre nello stesso punto della griglia
indipendentemente da quale pagina della Virtual Console è mostrata: i
pulsanti di cambio pagina, i campioni di colore, i trigger degli effetti e i
pulsanti show-cue ottengono ciascuno la propria banda di righe. I controller
senza una griglia riconosciuta ottengono comunque una mappatura utilizzabile —
i pulsanti vengono assegnati in ordine e i fader vengono mappati sugli slider
creati dallo wizard.

## Passaggio 6 — Summary

L'ultimo passaggio riepiloga ciò che verrà creato, in due colonne:

* **What will be created** (sinistra) — una scheda per sezione: **Stage**
  (quanti gruppi sono stati posizionati, e su quale tipo di palco — oppure
  una nota che indica che la disposizione esistente è stata lasciata
  intoccata quando il passaggio 3 è stato saltato), **Functions** (quanti
  effetti sono stati selezionati), **Virtual Console** (una pagina principale
  più una pagina frame per gruppo) e **Controller** (il riepilogo della
  mappatura dal passaggio 5, oppure *"No external controller mapped"*). Sotto
  di essa, ogni effetto selezionato è elencato come una piccola etichetta.
* **Virtual Console layout preview** (destra) — una rappresentazione
  schematica del frame multipagina che lo wizard costruirà: una pagina **All
  Groups** più una pagina per ogni gruppo selezionato, ciascuna con il
  proprio slider di intensità, pulsanti colore, XY pad (per i gruppi con
  movimento) e pulsanti effetto, più una riga di pulsanti show-cue (Ambient,
  Blinder) condivisa su ogni pagina. Fare clic sulle schede pagina nella
  rappresentazione per vedere in anteprima una pagina diversa prima di
  generare.

Premere **Generate ✦** per costruire tutto. Un breve indicatore
**"Generating…"** compare nel piè di pagina; lo wizard si chiude quindi da
solo automaticamente e il nuovo show è pronto nello spazio di lavoro
principale.

## Cosa viene creato

* **Stage** — quando il passaggio 3 non è stato saltato, i fixture di ogni
  gruppo selezionato vengono patchati (se non lo sono già) e posizionati
  nella [3D View](/fixtures-and-functions/3d-view) in base al loro ruolo e al
  tipo di palco scelto.
* **Fixture Groups** — ogni gruppo selezionato diventa (o rimane) un vero
  [Fixture Group](/fixtures-and-functions/fixture-group-manager), incluso un
  gruppo sintetico **All Groups** che comprende i fixture di tutti i gruppi
  selezionati, usato dalla pagina principale della Virtual Console.
* **Functions** — per ogni gruppo e per l'aggregato All Groups, lo wizard
  crea le palette (colore, dimmer, shutter) e le scene necessarie a pilotare
  ciascun effetto selezionato, archiviate in cartelle dell'albero funzioni
  per gruppo. Gli effetti di movimento vengono costruiti a partire da una
  scena **Position** di base più un [EFX](/function-manager/efx-editor) (o un
  **Chaser** per gli effetti a passi come Strobe Chase), così partono sempre
  da una mira definita. Gli effetti matrix usano una
  [RGB Matrix](/function-manager/rgb-matrix-editor) con uno script integrato,
  ricadendo su una semplice animazione dell'intensità sui fixture privi di
  miscelazione colore.
* **Virtual Console** — un singolo **Frame** multipagina che funge da
  disposizione principale: la pagina 0 è **All Groups**, seguita da una
  pagina per ogni gruppo selezionato, con slider di intensità, pulsanti
  colore/gobo, pulsanti movimento/effetto e, per i gruppi con movimento, un
  [XY Pad](/virtual-console/xy-pad). Il cambio pagina utilizza dimmer a un
  canale nascosti, patchati su un universo libero tramite il plugin
  [Loopback](/plugins/loopback) — non è necessario configurarlo manualmente.
* **External controller mapping** — quando al passaggio 5 era stato
  selezionato un controller, i widget generati vengono collegati ad esso
  seguendo le opzioni di mappatura scelte, con feedback e abbinamento colori
  applicati dove abilitati.

> Rieseguire lo wizard non unisce né modifica nulla di quanto generato in
> precedenza — ogni esecuzione aggiunge un nuovo insieme di gruppi, funzioni e
> un nuovo frame di Virtual Console. Eliminare prima quelli precedenti (o
> semplicemente annullare) se si desidera ricominciare da capo.
