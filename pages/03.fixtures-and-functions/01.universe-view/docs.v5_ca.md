---
title: 'Universe View'
date: '13:53 27-06-2026'
published: true
taxonomy:
    category: docs
---

La **Universe View** mostra un únic univers DMX com una graella dels seus 512
canals. És la més tècnica de les quatre vistes i és útil per comprovar
exactament quins canals ocupa cada fixture, detectar buits o solapaments,
i reassignar adreces als fixtures.

És una de les quatre vistes disponibles a la barra d'eines de la part superior de
l'espai de treball [Fixtures and Functions](/fixtures-and-functions). Utilitza el
**selector d'univers** d'aquesta barra d'eines per triar quin univers estàs veient.

## La graella

La vista és una graella de cel·les, una cel·la per canal DMX (adreces 1–512). Cada
fixture ocupa un bloc contigu de cel·les corresponent als seus canals,
etiquetat amb el nom del fixture. La icona que es mostra a cada cel·la indica el tipus
d'aquell canal (intensitat, color, pan, tilt, etc.).

Passa el cursor per sobre d'una cel·la per veure un tooltip que descriu el fixture i el canal en aquella adreça.

El nom de l'univers que es mostra actualment apareix a dalt a l'esquerra.

## Seleccionar fixtures

* **Fes clic** a les cel·les d'un fixture per seleccionar-lo. Seleccionar un fixture substitueix la
  selecció actual.
* Mantén premuda la tecla **Ctrl** (o activa **Toggle multiple selection** al panell esquerre) per
  afegir fixtures a la selecció en comptes de substituir-la.

## Moure un fixture

Arrossega un fixture seleccionat al llarg de la graella per moure'l a una adreça
d'inici diferent. Mentre l'arrossegues, les cel·les de destinació es ressalten per mostrar on
aterrarà el fixture:

* Si la nova posició és lliure, es permet el moviment.
* Si la nova posició se solapés amb un altre fixture, el moviment es rebutja i
  el fixture es queda on era.

## Retallar i enganxar

Dos botons a la part superior dreta de la vista et permeten duplicar o reubicar fixtures:

* **Cut** (tisores) — copia els fixtures actualment seleccionats al porta-retalls.
* **Paste** (porta-retalls) — col·loca els fixtures del porta-retalls a la primera posició
  lliure disponible a l'univers. Si no hi ha prou espai lliure, es mostra un error
  i no s'enganxa res.

## Afegir fixtures

També pots arrossegar un fixture des del navegador **Add Fixtures** (panell esquerre)
directament a la graella. Mentre arrossegues, la graella ressalta els canals que el
fixture ocuparia i mostra si l'adreça triada està lliure. Deixa'l anar en un bloc
lliure per apedaçar-lo allà.
