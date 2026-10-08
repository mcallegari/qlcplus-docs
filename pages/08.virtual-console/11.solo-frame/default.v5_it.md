---
title: 'Solo Frame'
date: '03:43 22-08-2023'
---

Uno **Solo Frame** è un [Frame](../frame) speciale nella
[Virtual Console](/virtual-console) con una regola aggiuntiva: al suo
interno può essere in esecuzione **una sola** funzione alla volta. Avviare
una funzione ferma automaticamente qualsiasi altra funzione in esecuzione da
un widget dello stesso frame.

Questo rende lo Solo Frame il contenitore naturale per qualsiasi gruppo di
look che devono essere mutuamente esclusivi — una fila di pulsanti colore,
un banco di "stati" di scena, oppure una palette in cui selezionare un nuovo
look sostituisce quello precedente. Senza di esso occorrerebbe fermare
manualmente il look precedente prima di avviare quello nuovo.

Uno Solo Frame è lo stesso widget di un [Frame](../frame) e ne condivide
tutte le impostazioni; aggiunge semplicemente il comportamento solo e la
sezione **Solo Frame Options**.

## Come funziona il comportamento solo

* Quando un widget all'interno del frame **avvia una funzione**, ogni altra
  funzione avviata da widget dello stesso frame viene **fermata**.
* Questo vale per i widget contenuti direttamente nel frame (ad esempio i
  suoi [Button](../button)), offrendo un selettore pulito uno-alla-volta.
* Interessa solo le funzioni avviate *dall'interno di questo frame* — le
  funzioni in esecuzione altrove sulla console non vengono toccate.

## Settings

Uno Solo Frame ha tutte le [impostazioni del Frame](../frame#settings) —
Header, Pages, Shortcuts — più:

### Solo Frame Options

* **Exclude monitored functions** — evita che le funzioni solo *monitorate*
  vengano fermate dalla regola solo. Usare questa opzione quando un widget
  del frame sta monitorando/riflettendo lo stato di una funzione anziché
  eseguirla attivamente, così il monitoraggio non viene interrotto ogni
  volta che si preme un altro pulsante.

## Creazione

* Trascinare **Solo Frame** dall'elenco dei widget sulla pagina, **oppure**
* Quando si crea una [Button Matrix](../button-matrix) o una
  [Slider Matrix](../slider-matrix), scegliere **Solo** come tipo di frame
  per racchiudere l'intera griglia in uno Solo Frame.

## Suggerimenti

* Inserire una palette di pulsanti colore o scena in uno Solo Frame così che
  premerne uno annulli sempre il precedente — senza bisogno di un passaggio
  di "stop".
* Combinare con **Pages** (dalle impostazioni del Frame) per costruire un
  selettore paginato, uno-alla-volta, che si comporta in modalità solo su
  ogni pagina.
