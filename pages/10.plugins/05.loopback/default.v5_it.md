---
title: Loopback
date: '05:14 22-08-2023'
---

Introduzione
------------

Il plugin Loopback fornisce un modo per controllare i widget della [Virtual Console](/virtual-console) da Scene e altre [Funzioni](/basics/glossary-and-concepts#functions). I dati che QLC+ invia alla porta di Output vengono rimandati in loop alla porta di Input, dove possono essere usati per un controllo esterno. Ovviamente, la porta di Output e la porta di Input possono essere collegate a universi diversi.

Il plugin fornisce 4 linee indipendenti.

Questo plugin è rivolto principalmente agli utenti avanzati -- a differenza di altri plugin di input/output, questo plugin non controlla alcun dispositivo reale.

Configurazione
-------------

Il plugin Loopback non ha alcuna configurazione. Basta collegare Input e Output agli universi desiderati.

Esempi
--------

### Pulsanti che impostano uno slider (submaster o normale) su un valore predefinito

Questi pulsanti possono avere un tempo di dissolvenza associato, in modo che questi cambiamenti possano essere graduali.

Passaggi:

1.  Impostate un universo per l'output Loopback (U1), e impostate l'universo di input dello slider su Loopback Input (U2). Supponiamo che il controllo esterno degli slider sia impostato sul canale 14.
2.  Aggiungete un canale dimmer a U1 all'indirizzo 14. Nella finestra dei modificatori di canale, impostatelo su LTP (in modo che se il pulsante si spegne, lo slider non vada a zero).
3.  Create scene con i valori desiderati dello slider per il canale 14 nell'universo U1. Potete anche impostare i tempi di dissolvenza.
4.  Create pulsanti per le scene.
