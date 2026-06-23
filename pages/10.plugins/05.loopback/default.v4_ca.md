---
title: Loopback
date: '05:14 22-08-2023'
---

Introducció
------------

El connector Loopback proporciona una manera de controlar els ginys de la [Consola Virtual](/virtual-console) des d'escenes i altres [Funcions](/basics/glossary-and-concepts#funcions). Les dades que QLC+ envia al port de sortida es retornen al port d'entrada, on es poden utilitzar per al control extern. Òbviament, el port de Sortida i el port d'Entrada poden estar connectats a diferents universos.

El connector proporciona 4 línies independents.

Aquest connector és principalment per a usuaris avançats -- a diferència d'altres connectors d'entrada/sortida, aquest connector no controla cap dispositiu real.

Configuració
-------------

El connector Loopback no té cap configuració. Simplement adjunta l'Entrada i la Sortida als universos desitjats.

Exemples
--------

### Botons que estableixen un control lliscant (submestre o regular) a un valor predefinit

Aquests botons poden tenir un temps d'esvaïment, aquests canvis poden ser graduals.

Passos:

1. Definiu un univers per a la sortida de Loopback (U1) i establiu l'univers d'entrada del control lliscant a Entrada de Loopback (U2). Diguem que el control extern dels controls lliscants està establert al canal 14.
2. Afegeix un canal dimmer a U1 a l'adreça 14. En el diàleg de modificadors de canal, establiu-lo a LTP (de manera que si el botó es desactiva, el control lliscant no anirà a zero.
3. Crea escenes amb els valors desitjats del control lliscant per al canal 14 de l'univers U1. També podeu establir temps d'esvaïment.
4. Crea botons per a les escenes
