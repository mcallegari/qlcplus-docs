---
title: Installazione
taxonomy:
    category:
        - docs
---

Installare QLC+ è piuttosto semplice.
Basta andare alla [pagina di download](https://www.qlcplus.org/download) e scaricare la versione che preferite per il sistema operativo che state usando.

## Windows

QLC+ su Windows viene distribuito come pacchetto .exe autoinstallante. Basta fare doppio clic sul file e seguire le istruzioni visualizzate.

Scegliete se installare QLC+ nella sua posizione standard (C:\QLC+) oppure in un'altra cartella come C:\Program Files.

Non sono richiesti privilegi di amministratore per installare QLC+, a meno che non vogliate associare i file .qxw (file di progetto) e .qxf (file di definizione fixture) all'applicazione corrispondente.
In quel caso, fate clic con il tasto destro sul file di installazione ed eseguitelo come amministratore.

**Nota:** le versioni 4.x.x e 5.x.x non possono coesistere nella stessa cartella, quindi se le installate entrambe, ricordatevi di installarle in cartelle separate.

## macOS

QLC+ su macOS viene distribuito come pacchetto DMG.

Basta fare doppio clic su di esso per avviare direttamente QLC+. In alternativa potete trascinarlo nella cartella Applicazioni.

## Linux

Il pacchetto ufficiale di QLC+ per Linux viene distribuito come pacchetto Debian (.deb).

Per installarlo, eseguite quanto segue da un terminale, nella cartella in cui avete scaricato il pacchetto:
```
sudo apt install ./qlcplus_x.y.z.deb
```
Gli utenti avanzati che hanno familiarità con le dipendenze possono considerare l'uso di `sudo dpkg -i qlcplus_x.y.z.deb`.
