---
title: Modes
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

La sezione **Modes** contiene tutte le [modalità](/basics/glossary-and-concepts#fixture-mode)
per cui il fixture può essere configurato. Ciascuna modalità è una disposizione
ordinata dei canali definiti nella sezione [Channels](../channels), che
corrisponde al comportamento del fixture in quella modalità operativa.

Una piccola barra degli strumenti si trova nella parte superiore della
sezione:

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new mode** | Crea una nuova modalità e apre il [Mode Editor](#mode-editor) sulla destra. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected mode(s)** | Rimuove la modalità selezionata. La rimozione di una modalità non elimina alcun canale né altre modalità. |

Ciascuna modalità appare come una riga che ne mostra il nome. Fare **doppio
clic** su una modalità per aprirla nel Mode Editor.

## Mode Editor

Il Mode Editor si apre nel pannello sulla **destra**. Dispone di un campo
**Name** (il nome di ciascuna modalità deve essere univoco) e di tre sezioni:
**Channels**, **Emitters** e **Physical**.

### Channels

Qui si dispongono i canali del fixture nell'ordine esatto in cui il fixture li
utilizza in questa modalità.

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Rimuove i canali selezionati da questa modalità. Le altre modalità restano invariate. |
| <i class="fa fa-2x fa-certificate"></i> **Create a new emitter** | Raggruppa i canali selezionati in un nuovo [emitter](#emitters). |

Per **aggiungere** canali alla modalità, **trascinarli** dalla sezione
[Channels](../channels) in questo elenco (viene mostrata un'area "Drop
channels here" quando la modalità è vuota). Trascinare i canali all'interno
dell'elenco per riordinarli — il loro ordine è fondamentale per la definizione
della modalità. La colonna **Acts on** accanto a ciascun canale lo collega a
un altro canale (ad esempio un canale che controlla la velocità di un gobo
rotante).

### Emitters

Gli emitter (chiamati *heads* nelle versioni precedenti) permettono di
definire più sorgenti luminose all'interno di un singolo fixture, in modo che
QLC+ possa trattare ciascuna individualmente — ad esempio nei
[Fixture Groups](/basics/glossary-and-concepts#fixture-group) o nelle viste
2D/3D. Se una modalità pilota una sola sorgente luminosa non è necessario
definire emitter.

Per creare un emitter, dalla sezione **Channels** della modalità: selezionare i
canali appartenenti a una singola sorgente luminosa, quindi utilizzare
<i class="fa fa-certificate"></i> **Create a new emitter**. Ogni emitter viene
numerato automaticamente (#1, #2, …) ed elenca i canali ad esso assegnati.

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-minus" style="color:crimson"></i> **Remove the selected emitter(s)** | Elimina gli emitter selezionati. |

Includere solo i canali specifici di ciascuna sorgente luminosa. Ad esempio,
se tre teste hanno ciascuna il proprio dimmer, includere il canale dimmer in
ogni emitter; se il fixture ha un unico dimmer per tutte le teste, ometterlo.

### Physical

Questa sezione contiene le stesse proprietà della sezione globale
[Physical](../physical). Scegliere:

* **Use global settings** — la modalità utilizza le informazioni fisiche
  globali del fixture (impostazione predefinita).
* **Override global settings** — la modalità ha valori fisici propri; i campi
  diventano modificabili per poterli inserire.
