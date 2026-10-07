---
title: 'Show Wizard'
date: '12:00 07-10-2026'
taxonomy:
    category:
        - docs
---

El **Show Wizard** construeix per a tu un show complet i llest per executar
— posicions de fixtures, paletes, efectes i una Virtual Console — a partir
d'unes quantes opcions d'alt nivell. Està pensat per portar-te d'un projecte
buit a un muntatge utilitzable en pocs minuts, i per donar als nouvinguts un
exemple de treball del qual aprendre.

Obre'l amb el botó <i class="fa fa-hat-wizard fa-2x" style="color:yellow"></i>
**Show Wizard** a la part superior del panell dret de l'espai de treball
[Fixtures and Functions](/fixtures-and-functions). S'obre com una capa a
pantalla completa amb sis passos; un indicador de pas a la part superior
mostra on et trobes, i els botons **← Back** / **Next →** a la part inferior
et mouen entre passos. El botó de l'últim pas diu **Generate ✦** en lloc de
**Next →**.

No s'escriu res al teu projecte fins que prems **Generate** a l'últim pas, i
el resultat sencer — disposició de l'escenari, funcions i Virtual Console —
es crea d'un sol cop i és **completament desfer amb Ctrl+Z**, igual que
qualsevol altre canvi. Tancar l'assistent amb el botó **✕** en qualsevol
moment descarta les teves tries sense tocar el projecte.

## Pas 1 — Show Type

El primer pas pregunta quin tipus de show estàs construint. La teva tria
estableix valors per defecte sensats per a la resta de l'assistent — el lloc
suggerit al pas 3 i els efectes preseleccionats al pas 4 — però cadascun
d'aquests valors per defecte encara es pot canviar més endavant.

| Show type | Ús típic | Èmfasi d'efectes |
|-----------|--------------|-------------------|
| **Club Night** | Sala / club | Chasers ràpids, cops d'estroboscopi, chases RGB, efectes sincronitzats al BPM |
| **Concert / Live** | Escenari de rock | Posicions predefinides, rentats de color, encegadors per al públic, EFX de moviment |
| **Theatrical** | Teatre | Basat en escenes, esvaïments lents, colors càlids, patrons de gobo, posicions predefinides |
| **Architectural** | Espai obert | Chases de píxels suaus, barreges de color, bucles ambientals |
| **Custom** | Qualsevol | No hi ha res preseleccionat — tria-ho tot tu mateix als passos següents |

## Pas 2 — Fixture Groups & Roles

Aquest pas organitza els teus fixtures en **grups** i assigna a cada grup un
**rol**. Els rols determinen tant la col·locació automàtica a l'escenari al
pas 3 com quins efectes es generen per al grup al pas 4.

El pas es divideix en tres columnes:

* **Fixture Browser** (esquerra) — el mateix navegador utilitzat a la resta
  de QLC+. Arrossega un fixture des d'aquí fins a un requadre de grup a la
  columna central per apedaçar-lo i afegir-lo a aquell grup en una sola
  acció.
* **Fixture Groups** (centre) — els teus requadres de grup. Fes clic a
  **+ Add group** per crear un requadre buit amb nom (nom per defecte "Group
  N"), i després arrossega-hi fixtures. Marca la casella d'un grup per
  incloure'l a la col·locació automàtica i a les funcions generades. Els
  grups que ja existeixen al projecte (creats fora de l'assistent) també es
  llisten aquí, de manera que pots incorporar muntatges existents a la
  generació d'efectes i de Virtual Console de l'assistent sense tornar a
  apedaçar res.
* **Detected capabilities & roles** (dreta) — per a cada grup **marcat**,
  mostra el rol que se li ha assignat i les capacitats que QLC+ ha detectat
  als seus fixtures (moviment, barreja de color, gobo, obturador, dimmer).
  Els rols se suggereixen automàticament a partir d'aquestes capacitats, però
  pots canviar el rol de qualsevol grup manualment.

### Roles

| Rol | Icona | Significat |
|------|------|---------|
| **Key Light** | 💡 | Rentat frontal/superior, la il·luminació principal |
| **Fill Light** | 🔦 | Rentat suplementari des d'un angle diferent |
| **Back Light** | 🔙 | Contrallum / il·luminació des de darrere |
| **Side Light** | 📐 | Llum lateral o de boom (bastidors de teatre) |
| **Effect** | ✨ | Fixture d'efecte aeri, feixos a mitja alçada |
| **Strip / Bar** | ▬ | Tira LED o barra que recorre el muntatge |
| **Blinder** | 💥 | Encegador per al públic / estroboscopi |
| **Hazer** | 💨 | Màquina de boira lleugera o de fum |
| **Floor** | ⬆ | Il·luminador de terra |

> Un grup els fixtures del qual ja estan **apedaçats i posicionats** en un
> altre lloc del projecte (és a dir, no aporta cap fixture *nou*) permet que
> l'assistent salti completament el Pas 3 — vegeu més avall.

## Pas 3 — Venue & Stage

Aquest pas tria un **tipus d'escenari** i una **mida d'escenari**, i després
mostra com es col·locaran en ell els teus grups marcats. **Se salta
automàticament** quan cap dels grups marcats conté un fixture que
l'assistent encara necessiti col·locar — per exemple, si només has marcat un
grup existent que ja està posicionat a la [3D View](/fixtures-and-functions/3d-view).
L'indicador de pas atenua el pas saltat en lloc d'amagar-lo, de manera que
sempre veus on hauria estat.

* **Venue type** — una de quatre formes d'escenari. Cadascuna indica els
  tipus de show als quals s'adapta millor:

  | Escenari | Descripció | Millor per a |
  |-------|-------------|----------|
  | **Open Space** | Terra pla, sense elements escènics. Bo per a muntatges temporals i esdeveniments d'ús general. | Architectural, Custom |
  | **Box / Club** | Quatre parets i un sostre, truss al voltant del perímetre. | Club Night |
  | **Rock Stage** | Escenari elevat, truss frontal i columnes verticals. | Concert / Live |
  | **Theatre** | Arc de proscenis, barres de l'avantescenari, booms laterals. | Theatrical |

* **Stage size (metres)** — **Width**, **Height** i **Depth**, preomplerts
  amb una mida suggerida a partir del teu nombre de fixtures. Ajusta els
  camps si el teu local real és diferent; aquesta és la mateixa mida
  d'entorn utilitzada pels paràmetres **Width / Height / Depth** de la
  [3D View](/fixtures-and-functions/3d-view), de manera que canviar-la aquí
  també la canvia allà.
* **Automatic fixture placement** (costat dret) — llista, per a cada grup
  marcat, on es muntaran els seus fixtures i quants fixtures són, per
  exemple *Key Light → Front truss, high — aimed at stage centre ~45°*. La
  col·locació segueix convencions habituals de muntatge per al rol — trusses
  frontals per a key light, trusses posteriors per a backlight, booms
  laterals alternats per a side light, una barra d'amplada completa per a
  tires, etc. — i els caps es reparteixen uniformement entre les posicions
  disponibles. No cal cap col·locació 3D manual, tot i que sempre pots
  ajustar individualment els fixtures més tard a la 3D View.

## Pas 4 — Effects

Aquest pas selecciona quines **funcions** generarà l'assistent — agrupades
en famílies, amb un recompte en directe de quantes n'hi ha seleccionades.
Els efectes que necessiten una capacitat que cap dels teus fixtures té (per
exemple, efectes de moviment en un muntatge de dimmers simples) es mostren
**en gris** i no es poden activar. Fes clic a **All / None** a la
capçalera d'una família per seleccionar o netejar tots els efectes
disponibles d'aquella família d'un cop.

| Família | Efectes | Necessita |
|--------|---------|-------|
| 🎨 **Color** | Color Palette, Color Rainbow, Split Color, Gobo Palette | Barreja de color i/o canals de gobo |
| 💡 **Intensity** | Shutter Effects, Blinder Hit, Strobe Chase, Heartbeat | Un canal d'obturador/estroboscopi, o un dimmer |
| 🎯 **Movement** | Position Presets, Fly Out, Fly In, Circle Chase, Figure Eight, Audience Sweep | Fixtures amb Pan/Tilt |
| ▦ **Matrix** | Pixel Chase, Wave, Fireworks, Plasma, Marquee | Un fixture de dimmer o de barreja de color (inclosos els moving heads — els efectes de matriu funcionen sobre la intensitat quan no hi ha barreja de color disponible) |
| 🎬 **Show Cues** | Ambient Loop | Almenys un fixture de barreja de color **estàtic** (que no es mogui) |

Cada tipus de show preselecciona un subconjunt sensat en entrar en aquest
pas (per exemple, Club Night activa Color Rainbow, Blinder Hit, Strobe Chase,
Circle Chase i Pixel Chase; Theatrical activa Color Palette, Position
Presets, Gobo Palette i Ambient Loop), però pots afegir o treure efectes
lliurement independentment del tipus de show que vas triar al pas 1.
**Custom** comença sense res seleccionat.

## Pas 5 — Controller

Aquest pas **opcional** vincula un controlador d'entrada MIDI, OSC o DMX
apedaçat a la Virtual Console que l'assistent està a punt de construir.
Salta'l lliurement — sempre pots mapar els controls a mà més endavant amb
**Auto Detect** a qualsevol giny de la Virtual Console.

* **Connected controllers** (esquerra) — cada univers que actualment té una
  connexió d'entrada (no només una línia de connector que *podria* ser
  apedaçada). Fes clic a una entrada per seleccionar-la per al mapatge; fes-hi
  clic de nou per desseleccionar-la. Cada entrada mostra el connector, el
  número d'univers, i unes quantes etiquetes de capacitat: el nom del
  **perfil d'entrada** apedaçat (o *No input profile* quan s'utilitzarà en
  el seu lloc un mapatge genèric/lineal), quants **botons** i **faders** ha
  trobat l'assistent, si el perfil té **LEDs de color**, i si la
  **retroalimentació** ja està activada en aquell univers. Si encara no hi
  ha res apedaçat, un botó aquí et porta directament al panell
  **Input/Output** per apedaçar-ne un, i després et torna a l'assistent.
* **Mapping options** (dreta, activades un cop seleccionat un controlador):

  | Opció | Efecte |
  |--------|--------|
  | **Auto-map Virtual Console controls** | Vincula els botons, faders i pads XY generats als canals del controlador: els botons del controlador controlen els botons de la VC, els faders/encoders controlen els controls lliscants d'intensitat i el pan/tilt. |
  | **Send feedback to the controller** | Apedaça la línia de sortida del controlador perquè els seus LEDs s'il·luminin i els seus faders motoritzats es moguin per coincidir amb l'estat de la Virtual Console. |
  | **Match LED colours to button colours** | En un controlador el perfil d'entrada del qual té una taula de colors, il·lumina el pad de cada botó de color amb el color coincident més proper. S'ignora en controladors sense LEDs de color. |

  Sota les opcions, un requadre **Estimated usage** dóna una previsualització
  en directe del que consumirà el mapatge, p. ex. *"18 of 24 buttons, 3 of 9
  faders"*, actualitzada a mesura que canvies el controlador o les opcions.

QLC+ reconeix controladors comuns de **graella de pads** (com ara
disposicions APC mini o Launchpad) a partir del seu perfil d'entrada i mapa
els controls de manera que el mateix tipus de control sempre acaba al mateix
lloc de la graella independentment de quina pàgina de la Virtual Console es
mostri: els botons de canvi de pàgina, les mostres de color, els activadors
d'efectes i els botons de show-cue reben cadascun la seva pròpia banda de
files. Els controladors sense una graella reconeguda igualment obtenen un
mapatge utilitzable — els botons es reparteixen en ordre i els faders es
mapen als controls lliscants que crea l'assistent.

## Pas 6 — Summary

L'últim pas repassa què es crearà, en dues columnes:

* **What will be created** (esquerra) — una targeta per secció: **Stage**
  (quants grups s'han posicionat, i en quin tipus d'escenari — o una nota
  indicant que la disposició existent s'ha deixat intacta quan el pas 3 s'ha
  saltat), **Functions** (quants efectes s'han seleccionat), **Virtual
  Console** (una pàgina principal més una pàgina de marc per grup), i
  **Controller** (el resum del mapatge del pas 5, o *"No external
  controller mapped"*). A sota, cada efecte seleccionat es llista com una
  petita etiqueta.
* **Virtual Console layout preview** (dreta) — una maqueta esquemàtica del
  marc multipàgina que construirà l'assistent: una pàgina **All Groups** més
  una pàgina per grup marcat, cadascuna amb el seu propi control lliscant
  d'intensitat, botons de color, pad XY (per a grups amb moviment) i botons
  d'efecte, i una fila de botons de show-cue (Ambient, Blinder) compartida a
  totes les pàgines. Fes clic a les pestanyes de pàgina de la maqueta per
  previsualitzar una altra pàgina abans de generar.

Prem **Generate ✦** per construir-ho tot. Apareix breument un indicador
**"Generating…"** al peu; l'assistent llavors es tanca automàticament i el
teu nou show està llest a l'espai de treball principal.

## Què es crea

* **Stage** — quan el pas 3 no s'ha saltat, els fixtures de cada grup marcat
  s'apedacen (si encara no ho estan) i es posicionen a la
  [3D View](/fixtures-and-functions/3d-view) segons el seu rol i el tipus
  d'escenari triat.
* **Fixture Groups** — cada grup marcat esdevé (o continua sent) un
  [Fixture Group](/fixtures-and-functions/fixture-group-manager) real,
  incloent-hi un grup sintètic **All Groups** que abasta els fixtures de
  tots els grups marcats, utilitzat per la pàgina mestra de la Virtual
  Console.
* **Functions** — per a cada grup i per a l'agregat All Groups, l'assistent
  crea les paletes (color, dimmer, obturador) i les escenes necessàries per
  conduir cada efecte seleccionat, arxivades en carpetes de l'arbre de
  funcions per grup. Els efectes de moviment es construeixen a partir d'una
  escena **Position** base més un [EFX](/function-manager/efx-editor) (o un
  **Chaser** per a efectes basats en passos com Strobe Chase), de manera que
  sempre comencen des d'un apuntament definit. Els efectes de matriu
  utilitzen una [RGB Matrix](/function-manager/rgb-matrix-editor) amb un
  script integrat, recorrent a una animació d'intensitat simple en fixtures
  sense barreja de color.
* **Virtual Console** — un únic **Frame** multipàgina que actua com a
  disposició mestra: la pàgina 0 és **All Groups**, seguida d'una pàgina per
  grup marcat, amb controls lliscants d'intensitat, botons de color/gobo,
  botons de moviment/efecte i, per als grups amb moviment, un
  [XY Pad](/virtual-console/xy-pad). El canvi de pàgina utilitza dimmers
  d'un sol canal ocults apedaçats en un univers lliure a través del connector
  [Loopback](/plugins/loopback) — no cal que configuris això tu mateix.
* **External controller mapping** — quan al pas 5 hi havia un controlador
  seleccionat, els ginys generats es vinculen a ell seguint les opcions de
  mapatge que vas triar, amb la retroalimentació i la coincidència de color
  aplicades on estiguin activades.

> Tornar a executar l'assistent no fusiona ni modifica res del que va
> generar abans — cada execució afegeix un nou conjunt de grups, funcions i
> un nou marc de Virtual Console. Elimina primer els anteriors (o
> simplement desfés-ho) si vols començar de nou.
