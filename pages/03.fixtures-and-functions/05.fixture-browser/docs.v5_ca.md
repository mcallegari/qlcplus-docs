---
title: 'Fixture Browser'
date: '14:32 27-06-2026'
taxonomy:
    category:
        - docs
---

El **Fixture Browser** és on apedaces nous fixtures al teu projecte. Obre'l amb el
botó **Add Fixtures** a la part superior del panell esquerre de l'espai de treball
[Fixtures and Functions](/fixtures-and-functions).

Et permet trobar una definició de fixture a la biblioteca, establir com s'ha
d'apedaçar, i arrossegar-la a una de les vistes.

## Trobar un fixture

Hi ha dues maneres de trobar un fixture:

* **Explorar per fabricant** — el navegador s'obre amb una llista de fabricants.
  Fes clic a un fabricant per veure els seus models, i després fes clic a un model per seleccionar-lo. Utilitza
  la fletxa enrere (el nom del fabricant a dalt) per tornar a la
  llista de fabricants.
* **Cercar** — escriu almenys tres caràcters al quadre de cerca de dalt. La
  llista canvia a un arbre de resultats de cerca, agrupats per fabricant, que compara el teu
  text amb fabricants i models.

## Botons de la barra d'eines

A la part superior del navegador:

* **＋ Create a new fixture definition** — obre l'editor de definicions de fixture per
  construir un fixture completament nou des de zero.
* **Edit the selected fixture definition** — obre la definició del fixture seleccionat
  a l'editor. S'habilita un cop se selecciona un model.
* **Remap fixtures** (icona de barreja) — obre l'eina **Fixture Remap**, que s'utilitza per
  transferir el patch i el contingut d'un projecte existent a un conjunt diferent de
  fixtures.

## Fixture properties

Quan selecciones un model, apareix un panell **Fixture properties** a la part inferior
del navegador. Configura'ls abans d'arrossegar el fixture a una vista — determinen com
es diu, on s'apedaça i quantes còpies es creen.

| Propietat | Significat |
|----------|---------|
| **Name** | El nom que tindrà el fixture (o els fixtures) al teu projecte. Es suggereix un nom per defecte; edita'l com vulguis. Quan n'afegeixes més d'un alhora, es numeren automàticament. |
| **Universe** | L'univers al qual s'apedaça el fixture. El menú desplegable llista els universos que has definit. |
| **Address** | L'adreça DMX d'inici (1–512) dins d'aquell univers. El navegador suggereix la primera adreça lliure que hi càpiga; es recalcula cada vegada que canvies el mode, la quantitat o el nombre de fixtures ja apedaçats. |
| **Quantity** | Quantes còpies d'aquest fixture afegir d'una vegada (1–512). Les còpies es disposen una darrere l'altra a partir de l'adreça d'inici, separades pel **Gap**. |
| **Channels** | El nombre de canals DMX que utilitza el fixture. Aquest valor l'estableix automàticament el **Mode** seleccionat i és de només lectura per als fixtures que tenen modes. Per a un fixture genèric/dimmer sense modes, pots establir tu mateix el nombre de canals (1–512). |
| **Gap** | El nombre de canals buits que es deixen entre còpies consecutives quan **Quantity** és més gran que u (0–511). Utilitza'l per mantenir cada fixture en una adreça rodona, o per reservar espai per a ampliacions. |
| **Mode** | El mode de funcionament del fixture (només es mostra per als fixtures que defineixen modes). Modes diferents exposen conjunts de canals diferents — p. ex. un mode bàsic enfront d'un mode ampliat amb més controls. Seleccionar un mode actualitza el recompte de **Channels**. |

### Inspeccionar els canals d'un mode

Al costat del menú desplegable **Mode** hi ha un botó d'**info** (ⓘ). Activa'l per llistar
tots els canals del mode seleccionat, cadascun amb el seu nom i una icona de tipus, perquè
puguis confirmar que el mode fa el que esperes abans d'apedaçar-lo.

## Apedaçar el fixture

Un cop establertes les propietats, **arrossega el fixture a una vista** per apedaçar-lo:

* A la **Universe View**, la graella ressalta els canals que ocuparà
  (un bloc per còpia, separats pel gap) i mostra si l'adreça està
  lliure.
* A la **2D / 3D View**, deixa'l anar allà on el vulguis posicionar a l'escenari.

Si l'adreça triada se solapa amb un fixture existent, es mostra un error
**"Address overlapping"** i hauries de triar una altra adreça DMX.

## Generic RGB Panel

Seleccionar el model especial **Generic RGB Panel** mostra en el seu lloc un panell dedicat
**RGB panel properties**, amb paràmetres addicionals per descriure una matriu de
píxels. Una previsualització en directe a la part inferior s'actualitza a mesura que els canvies, mostrant
la disposició dels píxels, el cablejat en serp/zig-zag i la cantonada d'inici.

A més de **Name**, **Universe** i **Address** (com abans), estableixes:

| Propietat | Significat |
|----------|---------|
| **Components** | L'ordre de color de cada píxel: **RGB**, **BGR**, **BRG**, **GBR**, **GRB**, **RBG**, o **RGBW**. Fes-lo coincidir amb com estan cablejats els LED del teu panell perquè els colors surtin correctes. |
| **Size** | La resolució del panell en píxels, com a **columnes × files** (amplada fins a 170, alçada fins a 999). Això determina quantes cel·les té la matriu. |
| **Physical** | La mida real del panell, com a **amplada × alçada** en mil·límetres. S'utilitza per dibuixar el panell a escala a les vistes 2D/3D. |
| **Start corner** | Per quina cantonada comença la cadena de píxels: **Top-Left**, **Top-Right**, **Bottom-Left** o **Bottom-Right**. Marcada amb un punt a la previsualització. |
| **Displacement** | Com discorre el cablejat de fila a fila (o de columna a columna): **Snake** (direcció alterna a cada línia) o **Zig Zag** (cada línia va en la mateixa direcció). Ha de coincidir amb el teu panell perquè els efectes es mapegin correctament. |
| **Direction** | Si els píxels estan encadenats **Horizontally** (fila a fila) o **Vertically** (columna a columna). |

Com que un sol panell pot utilitzar un nombre elevat de canals — potencialment més
d'un univers — el panell pot abastar diversos universos a partir de l'adreça
triada.
