---
title: 'Activadors d''Àudio'
date: '03:46 22-08-2023'
---

Un giny **Activadors d'Àudio** escolta l'àudio en directe (des de l'entrada
d'àudio de l'ordinador) i utilitza el seu **espectre de freqüències** per
controlar funcions, canals DMX o altres ginys. És la manera de fer que els
llums reaccionin a la música automàticament a la
[Consola Virtual](/virtual-console).

El so entrant es divideix en un nombre de **barres de freqüència** (de greus a
aguts), i a cada barra se li pot assignar un objectiu que controla mentre sona
la música.

## Configuració

* **Activation threshold** — el nivell que ha d'assolir una barra abans que
  s'activi el seu objectiu.
* **Deactivation threshold** — el nivell per sota del qual ha de tornar a
  caure una barra perquè el seu objectiu es desactivi. (Tenir els dos
  llindars separats evita el parpelleig d'activació i desactivació.)

### Spectrum Bars

* **Number of bars** — en quantes bandes de freqüència es divideix
  l'espectre. Més barres donen un control més fi a tot el rang de
  freqüències.

### Assignació per barra

Per a cada barra pots configurar:

* **Name** — una etiqueta per a la barra.
* **Type** — què controla la barra:
  * **None** — sense ús.
  * **DMX** — controla el nivell d'un canal DMX.
  * **Function** — inicia/atura una funció. **Drop a Function here** per
    assignar-la.
  * **Widget** — controla un altre giny de la Consola Virtual.
    **Drop a VC Widget here** per assignar-lo.
* **Information** — mostra l'assignació actual.

## Consells

* Assigna les barres de **greus** a funcions d'intensitat o estrobo i les
  barres d'**aguts** a canvis de color per aconseguir un efecte clàssic
  reactiu a la música.
* Ajusta els **llindars d'activació/desactivació** a la pista perquè els
  efectes s'activin amb els cops sense parpellejar.
