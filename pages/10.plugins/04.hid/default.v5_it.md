---
title: HID
date: '05:13 22-08-2023'
---

Introduzione
------------

Il plugin HID supporta il [sistema HID](https://en.wikipedia.org/wiki/Human_interface_device) su Windows e Linux.  
HID è un modo generico di mappare dispositivi di input/output come joystick, touchpad, tastiere, mouse, ecc.  
Il plugin HID di QLC+ mira a supportare solo joystick e l'adattatore USB DMX FX5.

Requisiti
------------

Non è richiesto alcun requisito speciale per questo plugin. Assicuratevi solamente che il vostro sistema operativo riconosca effettivamente il dispositivo che intendete usare. Su Linux potreste aver bisogno di alcuni moduli del kernel (normalmente forniti dalle distribuzioni moderne) e su Windows di un driver fornito dal produttore del dispositivo.

Joystick
---------

QLC+ cerca di rilevare le funzionalità specifiche del joystick, come assi e pulsanti, come canali individuali che possono essere mappati sui widget della vostra Virtual Console.  
Assi e pulsanti vengono mappati da QLC+ in ordine sequenziale, quindi ad esempio se il vostro joystick supporta 2 assi e 4 pulsanti, appariranno nelle finestre di mappatura dell'input in questo modo:  

* canale 1: Asse X
* canale 2: Asse Y
* canale 3: Pulsante 1
* canale 4: Pulsante 2
* canale 5: Pulsante 3
* canale 6: Pulsante 4

Interfaccia Nodle USB DMX
-----------------------

L'interfaccia Nodle USB DMX è disponibile in due versioni: per la versione a kit da autocostruire si chiama:
[Nodle U1](https://www.dmxcontrol-projects.org/en/projects/nodle-u1-interface.html) e per quella prefabbricata si chiama [Nodle R4S](https://www.dmxcontrol-projects.org/en/projects/nodle-r4s-interface.html) (ready for show).

Entrambe possono ricevere e trasmettere dati DMX normalmente, ma possono anche unire (merge) i dati dmx internamente. Quando attivata tramite la finestra di
configurazione, il dispositivo unisce qualsiasi dato DMX proveniente da QLC+ (se selezionato come output) con tutti
i dati DMX provenienti dall'input del dispositivo in modalità HTP (Highest Takes Precedence).

Se impostata, la modalità di unione (merger) persiste anche quando QLC+ viene chiuso, finché il dispositivo è alimentato.
In questo modo il dispositivo risulta trasparente rispetto ai dati DMX in ingresso e si limita a inoltrarli.

Il dispositivo memorizza in un buffer i dati DMX in ingresso. Quindi, quando la connessione DMX in ingresso viene interrotta, l'ultimo
frame DMX viene ripetuto finché non arrivano altri dati DMX o il dispositivo non viene resettato.

Controllate il manuale del prodotto per ulteriori informazioni o per la risoluzione dei problemi.

FX5 USB DMX
-----------

Sebbene non sia più disponibile, l'adattatore FX5 USB DMX è ancora supportato sia per l'output che per l'input
di dati DMX. Offre le stesse funzionalità del Nodle USB DMX. Controllate il manuale del prodotto per la connessione e i problemi specifici.
