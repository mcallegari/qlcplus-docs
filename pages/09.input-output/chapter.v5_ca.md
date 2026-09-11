---
title: 'Entrada Sortida'
date: '04:54 22-08-2023'
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
### Capítol 8

# Entrada/Sortida

El context **Entrada/Sortida** és on connectes els **universos** interns de
QLC+ amb el món real — els connectors i dispositius que envien DMX cap als
teus llums, i els controladors que envien l'entrada. Per defecte QLC+
proporciona diversos universos, i pots afegir-ne o eliminar-ne segons
calgui.

El mapatge d'entrada/sortida es desa dins del projecte actual, de manera que
pots moure un projecte a un altre ordinador o sistema operatiu sense haver
de reconfigurar-lo. Si no hi ha cap projecte carregat, QLC+ manté el
mapatge com una configuració "alternativa".

Obre el context des de la pestanya ![](/basics/inputoutput.svg?resize=24,24)
**Entrades/Sortides** a la part inferior de la pantalla principal de QLC+.

## Estructura

El context és un diagrama de connexions amb un plafó a cada costat:

* **Plafó esquerre** — les eines per al costat d'**entrada** de l'univers
  seleccionat (connectors d'entrada, perfils d'entrada i configuració de
  connectors/àudio).
* **Centre** — una fila de blocs, un per **univers** (més un bloc d'àudio a
  dalt). Les connexions d'entrada es fixen a l'esquerra de cada bloc, les de
  sortida a la dreta, dibuixades com a **fils** de connexió.
* **Plafó dret** — les eines per al costat de **sortida**, a més del
  blackout i els botons d'afegir/eliminar universos.

Fes clic a un bloc d'univers per seleccionar-lo; els plafons laterals
actuaran llavors sobre aquest univers.

## El bloc de l'univers

Cada univers es dibuixa com un bloc central amb els seus fils:

* **Nom** — fes doble clic al bloc per canviar el nom de l'univers a
  quelcom significatiu ("Escenari esquerre", "Caps mòbils", …).
* <i class="fa fa-arrow-right-long"></i> **Passthrough** — el petit botó de
  fletxa activa/desactiva el passthrough per a l'univers (vegeu [més
  avall](#passthrough-de-lunivers)).
* **F — Feedback** — quan hi ha una connexió d'entrada present, el botó
  **F** activa/desactiva la línia de retroalimentació cap al controlador.

## Connexions (Patching)

Les connexions es fan mitjançant **arrossegar i deixar anar**:

* Obre la llista de connectors d'**entrada** o **sortida** des del plafó
  lateral (el botó ![](/basics/inputoutput.svg?resize=24,24)), i després
  **arrossega una línia de connector** cap al costat esquerre (entrada) o
  dret (sortida) d'un bloc d'univers. Es dibuixa un fil per mostrar la
  connexió.
* Cada univers pot tenir **una sola entrada** però **diverses sortides**
  (deixa anar més línies de connectors a la dreta per afegir-ne).
* Per **eliminar** una connexió, arrossega el seu bloc de connexió lluny de
  l'univers i deixa'l anar a la paperera <i class="fa fa-trash-can"></i> que
  apareix a la part inferior de la pantalla.

Si un connector necessita configuració abans que apareguin les seves
línies, utilitza el botó ![](/basics/configure.svg?resize=24,24)
**configuració del connector** al plafó lateral (només es mostra quan el
connector admet configuració manual).

## Afegir / eliminar universos

El plafó dret conté els botons de gestió d'universos:

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix un univers nou** | Afegeix un univers nou, anomenat "Universe X" on X és un número progressiu (que també és el seu ID). |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Elimina l'univers seleccionat** | Elimina l'últim univers. **Vés amb compte — això pot afectar les fixtures connectades i no es pot desfer.** |

## Blackout

El plafó dret també té un interruptor de blackout
(<i class="fa fa-eye"></i> / <i class="fa fa-eye-slash"></i>) que força
**totes les connexions de sortida** a zero — un "apagat" instantani per a
tot l'equip. Torna a activar-lo per restaurar la sortida.

## Passthrough de l'univers

Quan el passthrough està activat, un univers simplement reenvia el que
rep a la seva línia d'**entrada** cap a la seva línia de **sortida**. Això
és útil per a:

* **Conversió de protocol** — per exemple, mapejar de forma transparent una
  xarxa Art-Net a un adaptador DMX USB o a MIDI.
* **Monitorar dades externes** — connecta fixtures i observa les dades
  entrants al monitor DMX.
* **Fusionar una taula externa** — deixa que una taula d'il·luminació
  externa controli alguns canals mentre QLC+ controla llums intel·ligents
  al mateix univers.
* **Configuracions amb Raspberry Pi** — programa en un PC i després passa
  la reproducció a una Pi que roman connectada als dispositius.

Les dades de passthrough no es veuen afectades pel Grand Master ni pels
modificadors de canal. Es fusionen en mode HTP amb la sortida de QLC+ allà
on hi ha fixtures connectades (no utilitza els paràmetres de canal
LTP/HTP). El blackout **sí** afecta les dades de passthrough.

## Àudio

El bloc a la part superior de la llista representa els dispositius
d'entrada i sortida d'**àudio**. Selecciona'l i utilitza els botons
![](/basics/audiocard.svg?resize=24,24) als plafons laterals per triar la
font d'entrada d'àudio i el dispositiu de sortida, i el botó
![](/basics/configure.svg?resize=24,24) per obrir la configuració d'àudio.

## Entrada i retroalimentació

Quan es connecta una línia d'entrada, s'activa immediatament, de manera
que la pots provar: mou un fader o un knob al teu controlador i, si
funciona, veuràs activitat d'entrada en aquell univers.

Si el teu controlador té un canal de retorn, QLC+ li pot enviar
**retroalimentació** visual/mecànica (per exemple, per encendre botons o
motoritzar faders en un Behringer BCF2000). Activa-ho amb el botó **F** al
bloc de l'univers. Actualment la retroalimentació és compatible amb MIDI,
OSC i loopback.

Per treure el màxim profit d'un controlador extern, configura un **perfil
d'entrada** — vegeu [Perfils d'Entrada](input-profiles).
</content>
