---
title: 'DMX View'
date: '13:59 27-06-2026'
taxonomy:
    category:
        - docs
---

La **DMX View** mostra els teus fixtures com una llista fluida de panells, un per
fixture, cadascun mostrant els seus canals individuals i els seus **valors en directe**. És
la millor vista per comprovar què està enviant actualment cada canal i per
establir un sol canal manualment.

És una de les quatre vistes disponibles a la barra d'eines de la part superior de
l'espai de treball [Fixtures and Functions](/fixtures-and-functions). Utilitza el
**selector d'univers** d'aquesta barra d'eines per limitar la vista a un sol univers.

## Els panells de fixture

Cada fixture es dibuixa com un petit panell que llista els seus canals. Per a cada canal
pots veure el seu valor DMX actual (0–255), actualitzat en directe a mesura que canvia la sortida —
tant si és per control manual, per una funció en execució, com per una entrada externa.

Els panells flueixen per omplir l'amplada disponible i s'ajusten a noves files segons calgui.
Utilitza les barres de desplaçament (o els botons de **zoom** de la barra d'eines) si tens molts
fixtures.

## Canviar el valor d'un canal

Fes clic a un canal per obrir una eina de control per a ell. Segons el tipus de canal,
això és un lliscador o un selector de presets, que et permet establir el valor
d'aquest canal individual directament. El nou valor s'envia a la sortida immediatament.

Aquesta és una manera ràpida de provar un canal individual, o d'ajustar lleugerament un valor sense
obrir les eines completes de capacitats al panell esquerre.

## Configuració de la vista

Fes clic al botó de **configuració** (la icona de "barres") a la barra d'eines per obrir el panell
de configuració de la DMX view a la dreta. Conté una secció **Channels** que
controla com s'etiqueta cada canal als panells de fixture:

* **Show addresses** — quan està activat, cada canal mostra el seu número d'adreça DMX
  a sobre del valor. Desactiva'l per obtenir una visualització més compacta que només mostra
  els valors dels canals.
* **Relative addresses** — tria com es numeren aquestes adreces (només té sentit
  quan **Show addresses** està activat):
  * **Off** — els canals mostren la seva adreça DMX **absoluta** a l'univers. Per a
    un fixture apedaçat a l'adreça 10, els seus canals s'etiqueten com 11, 12, 13, …
    (l'adreça d'inici del fixture més el desplaçament del canal).
  * **On** — els canals mostren la seva adreça **relativa al fixture**, sempre
    començant per 1. Els canals del mateix fixture s'etiqueten com 1, 2, 3, …
    independentment d'on estigui apedaçat.

  Utilitza adreces absolutes quan hagis de fer coincidir el que informa la taula o un
  full de patch; utilitza adreces relatives quan et preocupa la posició d'un canal
  dins del propi fixture.

## Seleccionar fixtures

Seleccionar fixtures aquí funciona conjuntament amb la resta de l'espai de treball: un fixture
seleccionat a la DMX View també queda seleccionat a les altres vistes i a les eines de canal
del panell esquerre, de manera que pots combinar l'edició directa de canals amb els
controls de capacitats de nivell més alt.
