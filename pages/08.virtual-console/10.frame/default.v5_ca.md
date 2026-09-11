---
title: Marc
date: '03:39 22-08-2023'
---

Un **Marc** és un contenidor de la [Consola Virtual](/virtual-console) que
agrupa altres ginys. Utilitza'l per organitzar la consola en seccions, per
moure i mostrar/amagar tot un grup alhora, i per afegir subàrees de diverses
pàgines.

> Per a un marc en què només s'executi una funció a la vegada, vegeu el
> [Marc Solo](../solo-frame). Un Marc Solo comparteix tota la configuració de
> més avall i hi afegeix la regla de solo.

## Configuració

### Capçalera

* **Show header** — mostra la barra de capçalera del marc (amb la seva
  etiqueta).
* **Show enable button** — afegeix un commutador a la capçalera que
  activa/desactiva tots els ginys del marc alhora.

### Pàgines

Un marc pot allotjar diverses **pàgines** pròpies, convertint un marc en una
subconsola paginada:

* **Enable pages** — activa la paginació per al marc.
* **Circular pages scrolling** — torna de l'última pàgina a la primera en
  arribar-hi.
* **Pages number** — quantes pàgines té el marc.
* **Clone first page widgets** — copia els ginys de la primera pàgina a totes
  les pàgines, de manera que un disseny comú (per exemple, faders màster
  compartits) aparegui a totes les pàgines.

### Dreceres

* **Shortcut name** — anomena les dreceres de pàgina que s'utilitzen per
  saltar entre les pàgines del marc.

## Consells

* Deixa anar ginys sobre un marc per convertir-los en fills seu; en moure el
  marc, es mouen tots.
* Utilitza un [Marc Solo](../solo-frame) per a qualsevol grup en què dos
  efectes no s'hagin d'executar alhora.
* Combina **Enable pages** amb **Clone first page widgets** per crear una
  secció paginada que mantingui visibles els seus controls màster a totes les
  pàgines.
