---
title: 'DMX View'
date: '13:59 27-06-2026'
taxonomy:
    category:
        - docs
---

La **DMX View** mostra i fixture come un elenco scorrevole di pannelli, uno per
fixture, ciascuno con i propri canali individuali e i loro **valori in tempo reale**. È
la visualizzazione migliore per verificare cosa sta emettendo attualmente ogni canale e per
impostare manualmente un singolo canale.

È una delle quattro visualizzazioni disponibili dalla barra degli strumenti nella parte superiore dello
spazio di lavoro [Fixtures and Functions](/fixtures-and-functions). Usare il **selettore
dell'universo** in quella barra degli strumenti per limitare la visualizzazione a un solo universo.

## I pannelli dei fixture

Ogni fixture è disegnato come un piccolo pannello che elenca i suoi canali. Per ogni canale
è possibile vedere il suo valore DMX corrente (0–255), aggiornato in tempo reale man mano che l'uscita cambia —
sia che venga pilotata dal controllo manuale, da una funzione in esecuzione, o da un ingresso esterno.

I pannelli scorrono per riempire la larghezza disponibile e vanno a capo su nuove righe secondo necessità.
Usare le barre di scorrimento (o i pulsanti di **zoom** nella barra degli strumenti) se si hanno molti
fixture.

## Modificare il valore di un canale

Fare clic su un canale per aprire uno strumento di controllo per esso. A seconda del tipo di canale
si tratta di uno slider o di un selettore di preset, che permette di impostare direttamente il valore
di quel singolo canale. Il nuovo valore viene inviato immediatamente all'uscita.

Questo è un modo rapido per testare un singolo canale, o per correggere leggermente un valore senza
aprire gli strumenti di capacità completi nel pannello sinistro.

## Impostazioni della visualizzazione

Fare clic sul pulsante **impostazioni** (l'icona "barre") nella barra degli strumenti per aprire il pannello
delle impostazioni della DMX View a destra. Contiene una sezione **Channels** che
controlla come viene etichettato ciascun canale nei pannelli dei fixture:

* **Show addresses** — quando attivo, ogni canale mostra il numero del proprio indirizzo DMX
  sopra il valore. Disattivarlo per una visualizzazione più compatta che mostra solo i
  valori dei canali.
* **Relative addresses** — sceglie come vengono numerati quegli indirizzi (significativo solo
  quando **Show addresses** è attivo):
  * **Off** — i canali mostrano il loro indirizzo DMX **assoluto** nell'universo. Per
    un fixture patchato all'indirizzo 10, i suoi canali sono etichettati 11, 12, 13, …
    (l'indirizzo di partenza del fixture più l'offset del canale).
  * **On** — i canali mostrano il loro indirizzo **relativo al fixture**, sempre
    a partire da 1. I canali dello stesso fixture sono etichettati 1, 2, 3, …
    indipendentemente da dove è patchato.

  Usare gli indirizzi assoluti quando è necessario far corrispondere quanto riportato dalla console o da un
  foglio di patch; usare gli indirizzi relativi quando interessa la posizione di un canale
  all'interno del fixture stesso.

## Selezionare i fixture

La selezione dei fixture qui funziona insieme al resto dello spazio di lavoro: un fixture
selezionato nella DMX View è selezionato anche nelle altre visualizzazioni e negli strumenti
dei canali del pannello sinistro, così è possibile combinare la modifica diretta dei canali con
i controlli di capacità di livello superiore.
