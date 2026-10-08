---
title: 'Editor Script'
date: '04:07 22-08-2023'
---

Uno **Script** è una funzione scritta come un piccolo programma **JavaScript**.
Consente di controllare fixture e altre funzioni tramite logica — avviando e
arrestando funzioni, impostando canali, attendendo, generando valori casuali,
eseguendo comandi di sistema e altro ancora. L'Editor Script si apre nel pannello
destro dell'area di lavoro [Fixtures and Functions](/fixtures-and-functions).

L'intero corpo dello script viene eseguito come contenuto di un'unica funzione
JavaScript, quindi è possibile usare il normale JavaScript — variabili,
`if`/`for`/`while`, funzioni, e gli oggetti standard `Math`, `String`, ecc. Ogni
interazione con QLC+ avviene tramite un oggetto globale chiamato **`Engine`**, i cui
metodi sono documentati nell'[Engine API](#engine-api) qui sotto.

## Barra degli strumenti

| Pulsante | Cosa fa |
|--------|--------------|
| **Nome** | Il nome dello script (barra superiore). |
| <i class="fa fa-chevron-left fa-2x"></i> **Indietro** | Torna all'editor precedente. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Aggiungi una chiamata di metodo alla posizione del cursore** | Apre un menu di comandi pronti da inserire alla posizione del cursore (vedere sotto). |
| ![](/basics/functions.svg?resize=48,48) **Mostra/nascondi l'albero delle funzioni** | Apre il Gestore Funzioni in un pannello laterale. **Doppio clic** o trascinamento di una funzione per inserirne l'ID nello script. |
| ![](/basics/fixture.svg?resize=48,48) **Mostra/nascondi l'albero dei fixture** | Apre il Gestore Gruppi Fixture in un pannello laterale. **Doppio clic** o trascinamento di un fixture per inserirne l'ID. |
| <i class="fa fa-spell-check fa-2x"></i> **Controlla la sintassi dello script** | Convalida lo script e segnala eventuali errori in un popup. |

## Scrivere lo script

L'area principale è un semplice editor di testo in cui digitare lo script, un comando
per riga. Le modifiche vengono salvate automaticamente poco dopo aver smesso di digitare.

Poiché i comandi fanno riferimento a funzioni e fixture tramite il loro **ID**, gli
alberi delle funzioni e dei fixture (e il trascinamento) sono il modo più semplice per
inserire gli ID corretti senza doverli cercare.

## Menu di inserimento metodo

Il pulsante <i class="fa fa-2x fa-plus" style="color:limegreen"></i> inserisce un
modello per un comando comune, pronto da completare:

| Voce | Cosa inserisce |
|-------|-----------------|
| <i class="fa fa-2x fa-play"></i> **Start function** | Avvia l'esecuzione di un'altra funzione. |
| <i class="fa fa-2x fa-stop"></i> **Stop function** | Arresta una funzione in esecuzione. |
| <i class="fa fa-2x fa-sliders" style="color:lime"></i> **Set fixture channel** | Imposta un valore di canale su un fixture. |
| <i class="fa fa-2x fa-hourglass-end" style="color:deepskyblue"></i> **Wait time** | Mette in pausa per un tempo determinato prima della riga successiva. |
| <i class="fa fa-2x fa-dice" style="color:coral"></i> **Random number** | Genera un valore casuale. |
| <i class="fa fa-2x fa-moon" style="color:darkslateblue"></i> **Blackout** | Attiva o disattiva il blackout. |
| <i class="fa fa-2x fa-terminal"></i> **System command** | Esegue un comando esterno. |
| <i class="fa fa-2x fa-folder-open" style="color:gold"></i> **File path** | Apre un selettore di file e inserisce il percorso del file selezionato (tra virgolette), per i comandi che richiedono un file. |

## Engine API

Ogni operazione di QLC+ è un metodo dell'oggetto globale **`Engine`**, chiamato come
`Engine.methodName(argomenti)`. Le funzioni e i fixture sono sempre indicati tramite il
loro **ID** numerico — usare gli alberi delle funzioni/fixture o il trascinamento per
inserire gli ID corretti.

I tempi possono essere indicati sia in **millisecondi** (un numero) sia come **stringa
di tempo QLC+** (ad es. `"2s"`, `"1m30s"`, `"2s.140"`), a seconda del metodo.

### Funzioni

| Metodo | Descrizione |
|--------|-------------|
| `Engine.startFunction(fID)` | Avvia la funzione con l'ID indicato. Per impostazione predefinita lo script ne tiene traccia e la arresta quando lo script termina (vedere `stopOnExit`). Restituisce `true` in caso di successo. |
| `Engine.stopFunction(fID)` | Arresta la funzione in esecuzione con l'ID indicato. Restituisce `true` in caso di successo. |
| `Engine.isFunctionRunning(fID)` | Restituisce `true` se la funzione è attualmente in esecuzione, altrimenti `false`. |
| `Engine.waitFunctionStart(fID)` | Mette in pausa lo script finché la funzione indicata non è stata avviata. |
| `Engine.waitFunctionStop(fID)` | Mette in pausa lo script finché la funzione indicata non si è arrestata (terminata). |
| `Engine.stopOnExit(value)` | Quando è `true` (valore predefinito), le funzioni avviate da questo script vengono arrestate automaticamente al termine dello script. Chiamare `Engine.stopOnExit(false)` per lasciare in esecuzione le funzioni avviate anche dopo la fine dello script. |

### Attributi delle funzioni

Gli attributi sono i valori regolabili di una funzione, come **Intensity** (indice `0`)
e gli attributi di velocità di una funzione. Possono essere indirizzati tramite indice
o tramite nome.

| Metodo | Descrizione |
|--------|-------------|
| `Engine.getFunctionAttribute(fID, attributeIndex)` | Restituisce il valore attuale dell'attributo all'indice indicato (Intensity è `0`), oppure `0` se non disponibile. |
| `Engine.setFunctionAttribute(fID, attributeIndex, value)` | Imposta l'attributo all'indice indicato su `value`. Restituisce `true` in caso di successo. |
| `Engine.setFunctionAttribute(fID, attributeName, value)` | Imposta l'attributo con il nome indicato (ad es. `"Intensity"`) su `value`. Restituisce `true` in caso di successo. |

### Fixture e canali

| Metodo | Descrizione |
|--------|-------------|
| `Engine.setFixture(fxID, channel, value)` | Imposta `channel` (indice a partire da `0`, relativo al fixture) del fixture `fxID` sul valore DMX `value` (0–255). Restituisce `true` in caso di successo. |
| `Engine.setFixture(fxID, channel, value, time)` | Come sopra, ma con dissolvenza verso il valore nell'arco di `time` millisecondi. |
| `Engine.getChannelValue(universe, channel)` | Restituisce il valore DMX attuale (0–255) di un canale **assoluto** in un universo. Nota: `universe` e `channel` qui sono indice di universo e indice di canale a base zero, **non** un canale relativo al fixture. |

### Temporizzazione e flusso

| Metodo | Descrizione |
|--------|-------------|
| `Engine.waitTime(ms)` | Mette in pausa lo script per `ms` millisecondi prima di eseguire la riga successiva. |
| `Engine.waitTime(time)` | Mette in pausa lo script per la stringa di tempo QLC+ indicata (ad es. `"1s.500"`). |
| `Engine.random(min, max)` | Restituisce un numero intero casuale compreso tra `min` e `max` **millisecondi** (numeri). Utile in combinazione con `waitTime`. |
| `Engine.random(minTime, maxTime)` | Restituisce un numero casuale di millisecondi compreso tra due stringhe di tempo QLC+ (ad es. `Engine.random("1s", "5s")`). |

### Controllo globale

| Metodo | Descrizione |
|--------|-------------|
| `Engine.setBlackout(enable)` | Richiede il blackout quando `enable` è `true`, lo rilascia quando è `false`. Restituisce `true` in caso di successo. |
| `Engine.setBPM(bpm)` | Imposta i battiti al minuto del generatore di battito interno. Restituisce `true` in caso di successo. |
| `Engine.systemCommand(command)` | Esegue un programma esterno separato da QLC+. La prima parola è il programma; il resto sono argomenti. Racchiudere tra virgolette singole un argomento contenente spazi — ad esempio `Engine.systemCommand("aplay '/home/me/my file.wav'")`. (Non disponibile su iOS.) |

### Esempio

```javascript
// Esegue la dissolvenza in entrata del primo canale (dimmer) del fixture 0 in 2 secondi
Engine.setFixture(0, 0, 255, 2000);
Engine.waitTime("2s");

// Avvia un chaser e lo lascia in esecuzione autonoma dopo la fine dello script
Engine.stopOnExit(false);
Engine.startFunction(5);

// Attende un tempo casuale, poi attiva un blackout
Engine.waitTime(Engine.random("1s", "4s"));
Engine.setBlackout(true);
```

> **Nota sugli errori:** se lo script non può essere analizzato o genera un'eccezione,
> QLC+ segnala il numero di riga e il messaggio. Usare **Controlla la sintassi dello
> script** nella barra degli strumenti per convalidare senza eseguire.
