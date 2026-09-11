---
title: Channels
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 20%;
}
table th:nth-of-type(2) {
    width: 80%;
}
</style>

La secció **Canals** conté tots els canals que el fixture entén en tots els seus
modes. El seu ordre aquí no importa — els canals es disposen en un ordre
específic dins de cada mode a la secció [Modes](../modes). El que importa
aquí és el **nom** de cada canal i les seves **capacitats** (els seus rangs de valor
DMX i què fan).

A la part superior de la secció hi ha una petita barra d'eines:

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix un canal nou** | Crea un canal nou i obre l'[Editor de Canals](#editor-de-canals) a la dreta. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Elimina els canals seleccionats** | Elimina els canals seleccionats del fixture **i de tots els modes**. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Assistent de canals** | Crea molts canals similars alhora (vegeu l'[Assistent de capacitats](#assistent-de-capacitats)). |

Feu clic a un canal per seleccionar-lo; feu-hi **doble clic** per obrir-lo a
l'Editor de Canals. Els canals es poden **arrossegar** des d'aquesta llista a la
llista de canals d'un mode a la secció [Modes](../modes).

## Editor de Canals

L'Editor de Canals s'obre al panell de la **dreta** de l'editor. S'utilitza
per editar un canal individual i els rangs de valor DMX de cada **capacitat** (un
color, un gobo, la rotació d'un prisma, etc.). Consulteu el manual del vostre
fixture (el seu "diagrama DMX") per als canals i rangs de valor exactes.

|     |     |
| --- | --- |
| **Nom** | El nom del canal. Quan trieu un **predefinit** de canal (un canal d'una sola capacitat), es suggereix automàticament un nom, que encara podeu personalitzar. |
| **Predefinit** | Un predefinit és una drecera que accelera la creació de la definició i proporciona al motor de QLC+ la informació que necessita per reconèixer i tractar correctament un canal. Per exemple, triar un predefinit de color (Vermell, Verd, Blau, …) o un predefinit de Panoràmica/Inclinació omple tota la informació necessària amb un sol clic. Quan se selecciona un predefinit, la resta de l'editor esdevé inactiva. Si el canal té múltiples rangs DMX (capacitats), deixeu **Predefinit** a "Personalitzat" i definiu les capacitats vosaltres mateixos (a continuació). |
| **Tipus** | El rol del canal dins del fixture. Triar un tipus estableix implícitament la precedència del canal ([LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence) o [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence)), per la qual cosa és important triar el tipus correcte.<br><br>Els tipus d'intensitat/color obeeixen la regla **HTP**: **Intensitat, Vermell, Verd, Blau, Cian, Magenta, Groc, Blanc, Ambre, UV, Llima i Indigo**.<br>Tots els altres tipus obeeixen la regla **LTP**: **Feix, Color, Efecte, Gobo, Manteniment, Res, Panoràmica, Inclinació, Prisma, Obturador i Velocitat**.<br><br>**Intensitat** s'utilitza per als canals de dimmer / master dimmer.<br>Els **colors primaris** (Vermell, Cian, Blanc, …) controlen canals de color únics — no els confongueu amb el tipus "Color" descrit a continuació. Tingueu en compte que el [Grand Master](/basics/glossary-and-concepts#grand-master) només controla la Intensitat i els canals de color primaris per defecte, i que l'eina de Color només està disponible quan un fixture proporciona canals de color primaris RGBAWUV/CMY.<br>El tipus **Color** controla una roda de color fixa o macros de color predefinides — *no* hi assigneu canals RGBAW/CMY individuals.<br>El tipus **Gobo** controla la posició o indexació de la roda de gobos.<br>El tipus **Velocitat** controla alguna cosa relacionada amb la velocitat (rotació de gobo, velocitat d'arc de Sant Martí, …).<br>El tipus **Prisma** controla un prisma.<br>El tipus **Obturador** controla un obturador, un estroboscopi o un iris.<br>El tipus **Feix** controla un modelador de feix (com ara un zoom).<br>El tipus **Efecte** controla alguna cosa que no encaixa en cap dels altres grups.<br>El tipus **Manteniment** controla funcions com el reinici o un ventilador de refrigeració.<br>El tipus **Res** és un espaiador o marcador de posició de canal.<br>Els tipus **Panoràmica** i **Inclinació** controlen el moviment de Panoràmica/Inclinació (X/Y) de capçals mòbils o làsers. |
| **Rol** | Aplicable als parells de canals que formen valors de 16 bits, normalment **Panoràmica** o **Inclinació** (alguns fixtures més nous també admeten dimmer, RGB, gobo o focus de 16 bits).<br>Per a valors de 8 bits (un canal per característica) assigneu el byte de control **Coarse (MSB)**. Per a valors de 16 bits (dos canals per característica) assigneu **Coarse (MSB)** al canal gruixut i **Fine (LSB)** al canal fi. Si no n'esteu segurs, utilitzeu **Coarse (MSB)**. |
| **Valor per defecte** | El valor DMX (0–255) al qual s'estableix el canal en engegar. Per exemple, alguns capçals mòbils centren la seva Panoràmica/Inclinació, el que significa un valor inicial de 127. |
| **Capacitats** | La llista de rangs de valor DMX per al canal, cadascun amb un valor **Des de**, un valor **Fins a** i una **Descripció**. Si un canal només proporciona una capacitat (p. ex. panoràmica o dimmer) utilitzeu en canvi un predefinit de canal. Per a canals més elaborats (colors, gobos) creeu un rang per a cada entrada (p. ex. 0–15 blanc, 16–32 blau …). Feu clic a Des de / Fins a / Descripció d'una fila per editar-la; premeu **Tab** per moure-us entre camps i continuar a la fila següent. Apareix una icona d'avís ⚠ a una fila amb la descripció buida o el rang solapat amb un altre. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> | **Suprimeix les capacitats seleccionades** del canal. |
| <i class="fa fa-2x fa-palette" style="color:yellow"></i> | **Assignació automàtica de color** — per a un canal de color, omple automàticament les capacitats de color estàndard. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> | **Assistent de capacitats** — crea diverses capacitats de la mateixa mida alhora (vegeu a continuació). |

### Predefinit de capacitat

A cada capacitat se li pot donar un **predefinit**, que indica al motor de QLC+ més
informació sobre aquell rang de valors DMX. Depenent del tipus de predefinit,
apareixen camps addicionals:

* **ColorMacro** — tria un sol color (utilitzat normalment en rodes de color).
* **ColorDoubleMacro** — tria dos colors per representar una posició
  intermèdia de la roda de color.
* **GoboMacro** — tria una imatge de gobo per mostrar quan aquest rang està
  actiu.
* **StrobeFrequency** — introdueix una freqüència estroboscòpica precisa en
  Hertz.
* **StrobeFreqRange** — introdueix una freqüència mínima i màxima (en Hertz)
  per a un rang estroboscòpic.
* **Alias** — un predefinit especial que indica que quan aquest rang està
  actiu, s'ha de substituir un canal. Vegeu la secció [Àlies](../aliases).

Un quadre de **Previsualització** o **Valor(s)** al costat del predefinit us permet
establir el color o colors, la imatge de gobo o el valor o valors de freqüència
associats.

## Assistent de capacitats

L'Assistent de Capacitats crea ràpidament múltiples rangs de capacitat de la
mateixa mida. Això s'aplica normalment a colors fixos, índexs de gobo i canals de
macro.

|     |     |
| --- | --- |
| **Inici** | El valor inicial per a les noves capacitats. Ajusteu-lo per saltar-vos qualsevol capacitat que ja existeixi a l'inici del rang del canal. |
| **Amplada** | La mida de cada rang de valor. |
| **Import** | El nombre de capacitats a crear. |
| **Nom** | El nom comú de cada capacitat. Utilitzeu una coixinet `#` per marcar on va un número d'índex (p. ex. "Gobo #" crea Gobo 1, Gobo 2, Gobo 3 …). |
| **Mostra** | S'actualitza a mesura que canvieu els paràmetres, mostrant una previsualització de les capacitats que es crearan. |
