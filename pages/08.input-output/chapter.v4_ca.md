---
title: Entrada Sortida
date: '04:54 22-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Capítol 8

# Entrada/Sortida

Per defecte, QLC+ proporciona 4 universos, però podeu afegir-los/eliminar-los segons sigui necessari.  
El mapeig d'entrada/sortida es desa al projecte actualment carregat. Això us permet portar el vostre projecte a un altre ordinador/SO sense necessitat de reconfigurar-lo cada vegada.  
Si no es carrega cap projecte, QLC+ mantindrà el mapatge d'E/S com una configuració "alternativa".

Gestor d'Entrada/Sortida
--------------------

Per accedir al Gestor d'Entrada/Sortida, només heu de fer clic a la pestanya amb la icona ![](/basics/input_output.png) col·locada a la part inferior de la pantalla principal de QLC+.  
La pantalla està composta d'aquesta manera:

* A l'esquerra hi ha la llista d'universos interns que QLC+ pot gestionar
* A la dreta hi ha la llista de dispositius i les seves entrades, sortides i línies de retroalimentació mapejades que ha detectat QLC+
* A la part inferior dreta hi ha un plafó que mostra informació breu sobre el dispositiu seleccionat actualment

Cada dispositiu té una casella de selecció quan hi ha disponible una línia d'entrada, sortida o retroalimentació.  
Cada univers QLC+ pot mapejar una sola entrada, una única sortida i una única línia de retroalimentació

És possible que alguns connectors requereixin configuració abans que es puguin utilitzar, de manera que és possible que no pugueu veure totes les entrades/sortides al principi. El botó de configuració es col·loca al costat del plafó d'informació i està habilitat si el connector permet qualsevol configuració manual.  
La icona del botó és: ![](/basics/configure.png)

Afegint/Suprimint universos
-------------------------

QLC+ suporta qualsevol nombre d'universos, depenent del límit de CPU del dispositiu que els controla.  
A l'esquerra del Gestor d'Entrada/Sortida hi ha una barra d'eines on podeu afegir/eliminar, anomenar i configurar universos.

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Afegeix un nou univers. L'univers tindrà un nom com "Univers X", on X és un nombre progressiu assignat per QLC+ (i també l'Univers ID). |
| ![](/basics/edit_remove.png) | Elimina l'univers seleccionat actualment.  <br>**Aneu amb compte amb aquesta operació, ja que pot comprometre el vostre projecte i no es pot revertir.** <br>Quan suprimiu un univers, si està pedaçat actualment o hi ha alguns fixtures mapats, apareixerà un missatge emergent demanant confirmació si l'operació s'ha de completar o abandonar. |
| **Nom de l'Univers** | Una cadena arbitrària que podeu establir per a identificar ràpidament el significat d'un Univers |
| **Pas a través** | Vegeu [sota](#universe-passthrough) |

Pedaç
--------

Per a pedaçar la línia d'entrada/sortida d'un connector a l'univers seleccionat, heu de col·locar una marca de verificació a la línia d'entrada/sortida d'aquest connector en particular. Només podeu tenir una línia assignada a un univers alhora, de manera que quan marqueu una altra línia, la marca de selecció es mourà des de la seva posició anterior a la que acabeu de marcar.  
Si no veieu cap línia en un connector, vol dir que no teniu cap dispositiu que QLC+ entengui i que us queda amb l'opció única (no seleccionable): Cap.

Quan es marca una línia d'entrada/sortida, la informació de l'univers corresponent a la part esquerra de la pantalla canviarà i mostrarà el nou conjunt de configuració.  
La informació del connector a la part inferior dreta de la pantalla també canviarà i us donarà el nou estat de la línia del connector.

Pas a través per l'Univers
--------------------

Quan el pas a través està habilitat, l'univers només reenvia el que rep en la seva línia d'entrada a la seva línia de sortida. Això és útil per a diverses coses:

* **Convertidor de Protocol**: quan voleu utilitzar QLC+ per actuar com a convertidor "protocol". Per exemple, podeu utilitzar aquesta característica per mapejar de manera transparent una xarxa ArtNet a un adaptador USB DMX o fins i tot MIDI.
* **Monitoreja les dades externes**: pedaça els fixtures i mira les dades al monitor DMX
* **Fusionar dades des d'un controlador extern**: Tenir un escriptori d'il·luminació extern controla alguns dels canals de forma independent (per exemple convencionals) i QLC+ controla llums intel·ligents en el mateix univers.
* **Raspberry Pi**: reenvia les dades de QLC+ a PC mentre es programen escenes; quan es transfereix l'espai de treball, Raspberry es converteix en el controlador principal; els dispositius sempre estan connectats a RPi

Les dades de pas a través  no es veuen afectades pels modificadors de gran mestre o modificadors de canal de QLC+. Es fusiona a la manera de HTP amb la sortida de QLC+ si hi ha cap fixture pedaçada en aquest canal (Nota: no utilitza la configuració del canal LTP/HTP). L'apagada/Blackout afecta les dades de pas a través.

Entrades i Retroalimentacions
-------------------

Quan es marca una línia d'entrada de connectors, s'activa immediatament, de manera que podeu realitzar una prova bàsica per comprovar si el vostre maquinari funciona correctament amb QLC+.  
Simplement moveu un fader/knob al dispositiu extern, i si tot funciona bé, veureu una icona ![](/basics/input.png) que apareix al costat de l'univers corresponent a la part esquerra de la pantalla.

Si el dispositiu d'entrada admet un canal de retorn, QLC+ pot enviar-li una retroalimentació visual/mecànica. Dispositius com Behringer BCF2000 admeten aquesta característica.  
De moment, les retroalimentacions només són compatibles a través de MIDI, OSC i loopback.

Per saber com configurar el dispositiu d'entrada extern per al millor ús amb QLC+, continueu llegint amb el [howto per als perfils d'entrada](input-profiles).
