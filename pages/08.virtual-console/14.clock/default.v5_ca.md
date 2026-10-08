---
title: Rellotge
date: '10:27 01-07-2026'
taxonomy:
    category:
        - docs
---

Un giny **Rellotge** mostra l'hora a la [Consola Virtual](/virtual-console) —
com a rellotge en curs, cronòmetre o compte enrere — i pot **programar
funcions** perquè s'iniciïn i s'aturin a hores establertes. S'utilitza per a
espectacles temporitzats i desatesos (per exemple un aparador de museu o de
botiga que segueix un horari diari).

## Configuració

### Clock type

* **Clock** — mostra l'hora actual del dia.
* **Stopwatch** — compta cap amunt des de zero; útil per cronometrar un
  espectacle en curs.
* **Countdown** — compta enrere fins a zero a partir d'un temps establert.
* **Schedule** — executa funcions segons una llista d'hores programades
  (a sota).

### Schedule *(tipus Schedule)*

Crea una llista d'esdeveniments temporitzats. Per a cada entrada de la
programació:

* **Add a function schedule** — vincula una funció a una entrada de
  programació nova.
* **Start time** — quan s'inicia la funció.
* **Stop time** — quan s'atura (activa-ho amb **Enable the stop time**; sense
  això, la funció simplement s'inicia a l'hora d'inici).
* **Days / Repeat weekly** — tria els dies de la setmana en què s'executa la
  programació, de manera que un esdeveniment es pugui repetir, per exemple,
  cada dia feiner.
* **Remove this schedule** — elimina una entrada.

Utilitza **Add a new schedule** per afegir més entrades.

## Consells

* Utilitza **Schedule** amb **Repeat weekly** per gestionar automàticament la
  il·luminació d'un local segons un horari recurrent.
* Utilitza **Countdown** a l'escenari com a temporitzador visible per als
  canvis d'escena o el final d'un intermedi.
