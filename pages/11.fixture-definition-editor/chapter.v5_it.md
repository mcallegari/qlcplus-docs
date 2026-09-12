---
title: 'Fixture Definition Editor'
date: '12:00 04-07-2026'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Capitolo 10

# Fixture Definition Editor

Il **Fixture Definition Editor** viene utilizzato per creare e modificare le
[definizioni dei fixture](/basics/glossary-and-concepts#fixture) — i file che
indicano a QLC+ come controllare ciascuna delle proprie luci.<br>
Nell'interfaccia della versione 5, l'editor è integrato direttamente in QLC+
anziché essere un'applicazione separata: si apre dal **Fixture Browser** (il
pannello **Add Fixtures**), utilizzando il pulsante
<i class="fa fa-plus" style="color:limegreen"></i> **Create a new fixture
definition**, oppure il pulsante ![](../basics/edit.svg?resize=24,24) **Edit**
per modificare quella selezionata.<br>
Quando si crea una nuova definizione di fixture, è consigliabile convalidarla
con il [validatore online di fixture](https://www.qlcplus.org/fixture_validator.php).
Aiuterà a creare una definizione corretta.

## Salvare le proprie definizioni di fixture

Per utilizzare le proprie definizioni di fixture in QLC+, è necessario
salvarle nel percorso in cui QLC+ si aspetta di trovarle. L'editor salva
all'interno della cartella personale **user fixtures folder**:

* Linux: una cartella nascosta nella home directory dell'utente — `$HOME/.qlcplus/Fixtures`
* Windows: una cartella nella directory utente — `C:\Users\{Username}\QLC+\Fixtures`
* macOS: nella Library dell'utente — `$HOME/Library/Application Support/QLC+/Fixtures`

Se si modifica una definizione **inclusa** (di sistema), l'editor salva
automaticamente una copia nella cartella utente che sovrascrive quella
inclusa, così l'originale non viene mai toccato.

**Importante: le fixture personalizzate NON DEVONO essere salvate nella
cartella fixture di *sistema* di QLC+. Quando QLC+ viene disinstallato, tutto
il contenuto di quella cartella viene eliminato, e questo può causare
conflitti tra le definizioni di sistema e quelle personali.**

## Barra degli strumenti principale

La barra degli strumenti in alto nell'editor contiene le azioni sui file. Ogni
definizione aperta ottiene una propria **scheda** nella riga sottostante, in
modo da poter lavorare su più definizioni contemporaneamente.

| Pulsante | Funzione |
|--------|--------------|
| <i class="fa fa-chevron-left"></i> **Back to QLC+** | Chiude l'editor e torna a QLC+ (chiedendo prima di salvare eventuali modifiche non salvate). |
| ![](../basics/filenew.svg) **New definition** | Crea una nuova definizione di fixture vuota in una nuova scheda. |
| ![](../basics/fileopen.svg?resize=48,48) **Open definition** | Apre una definizione di fixture `.qxf` esistente in una nuova scheda. |
| ![](../basics/filesave.svg?resize=48,48) **Save definition** | Salva la definizione nella scheda attiva. |
| ![](../basics/filesaveas.svg?resize=48,48) **Save definition as…** | Salva la definizione attiva con un nuovo nome. |

## L'editor

A differenza dell'editor standalone della versione 4 (che utilizzava schede e
finestre separate), l'editor della versione 5 mostra l'intera definizione come
un unico pannello scorrevole di **sezioni** comprimibili sulla sinistra, con un
**pannello editor** condiviso sulla destra che si apre quando si aggiunge o
modifica un canale o una modalità.

Le sezioni appaiono nell'ordine logico da seguire durante la creazione di una
nuova definizione, dall'alto verso il basso:

[**Generale**](general)<br>
[**Fisico**](physical)<br>
[**Canali**](channels)<br>
[**Modalità**](modes)<br>
[**Alias**](aliases)<br>
