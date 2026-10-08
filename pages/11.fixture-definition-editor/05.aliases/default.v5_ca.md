---
title: Aliases
date: '12:00 04-07-2026'
---

La secció **Àlies** defineix regles per substituir un canal per un altre,
activades per capacitats establertes al predefinit **Àlies** (vegeu
[Canals](../channels)).

Un àlies permet que un canal canviï el seu significat en funció del valor d'un altre
canal. Per exemple, un fixture té el canal 5 anomenat "Efectes" que controla el
comportament del canal 6. El canal 5 té dues capacitats: "Speed on channel 6" i
"Sound sensitivity on channel 6", aquesta última establerta al predefinit **Àlies**. Per
defecte (canal 5 a 0) el canal 6 actua com a control de velocitat; quan el canal 5 entra
al rang de "sensibilitat sonora", el canal 6 esdevé un ajust de sensibilitat sonora.

Per gestionar això, definiu dos canals — "Velocitat" i "Sensibilitat sonora" — i
afegiu només "Velocitat" al mode (el comportament per defecte). Després definiu un únic
àlies que substitueix "Velocitat" per "Sensibilitat sonora". QLC+ llavors sap què fer
quan el valor DMX del canal 5 entra o surt del rang de l'àlies.

Un àlies es descriu amb tres parts:

* **En mode** — el mode on l'àlies té efecte.
* **substitueix** — el canal del mode que se substitueix quan s'activa l'àlies.
* **amb** — el canal que el substitueix quan s'activa l'àlies.

> **Nota:** la secció Àlies encara no està disponible a l'editor de fixtures de la
> versió 5. Les definicions de fixture que ja contenen àlies continuen funcionant, però
> de moment els àlies s'han d'afegir utilitzant l'editor de la versió 4. Aquesta pàgina
> s'actualitzarà quan l'edició d'àlies estigui disponible a la interfície de la versió 5.
