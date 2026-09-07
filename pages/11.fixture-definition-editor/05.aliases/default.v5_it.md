---
title: Aliases
date: '12:00 04-07-2026'
---

La sezione **Aliases** definisce le regole per sostituire un canale con un
altro, attivate da capability impostate sul preset **Alias** (vedere
[Channels](../channels)).

Un alias permette a un canale di cambiare significato in base al valore di un
altro canale. Ad esempio, un fixture ha il canale 5 denominato "Effects" che
controlla il comportamento del canale 6. Il canale 5 ha due capability:
"Speed on channel 6" e "Sound sensitivity on channel 6", quest'ultima
impostata sul preset **Alias**. Per impostazione predefinita (canale 5 a 0) il
canale 6 funge da controllo di velocità; quando il canale 5 entra
nell'intervallo "sound sensitivity", il canale 6 diventa una regolazione della
sensibilità al suono.

Per gestire questo caso si definiscono due canali — "Speed" e "Sound
sensitivity" — e si aggiunge alla modalità solo "Speed" (il comportamento
predefinito). Si definisce poi un singolo alias che sostituisce "Speed" con
"Sound sensitivity". QLC+ sa quindi cosa fare quando il valore DMX del canale
5 entra o esce dall'intervallo dell'alias.

Un alias è descritto da tre parti:

* **In mode** — la modalità in cui l'alias ha effetto.
* **replace** — il canale della modalità da sostituire quando l'alias viene
  attivato.
* **with** — il canale che lo sostituisce quando l'alias viene attivato.

> **Nota:** la sezione Aliases non è ancora disponibile nell'editor dei
> fixture della versione 5. Le definizioni di fixture che già contengono
> alias continuano a funzionare, ma per il momento gli alias devono essere
> aggiunti utilizzando l'editor della versione 4. Questa pagina verrà
> aggiornata quando la modifica degli alias sarà disponibile nell'interfaccia
> della versione 5.
