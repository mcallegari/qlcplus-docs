---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

Un **XY Pad** és un control de dos eixos per a **pan i tilt** — arrossega el
cursor pel pad i els fixtures mòbils associats el segueixen. És la manera més
natural de posicionar a mà caps mòbils i escàners des de la
[Virtual Console](/virtual-console).

L'eix horitzontal del pad controla el **pan** i l'eix vertical controla el
**tilt**. Tota l'àrea representa el rang complet de moviment que poden
assolir els teus fixtures: la vora esquerra és el pan mínim, la vora dreta el
pan màxim, la vora superior el tilt mínim i la vora inferior el tilt màxim.

## Elements del giny

|     |     |
| --- | --- |
| **Range sliders** | Els controls lliscants de dues nanses de la part superior i esquerra. Defineixen la **range window**: la porció del pad on es pot moure el cursor. |
| **Main area** | L'àrea fosca del centre, que representa totes les posicions X/Y possibles. |
| **Range window** | El rectangle cian semitransparent dibuixat sobre l'àrea principal, que marca els límits establerts amb els range sliders. Es oculta quan els range sliders cobreixen tot el rang. |
| **Cursor** | La nansa rodona ressaltada. Arrossega-la amb el ratolí/tacte, amb els controls lliscants de valor, o mou-la des d'un controlador extern. |
| **Fixture position dots** | Els petits punts grocs que mostren on es troba realment cada cap controlat, llegits a partir de la sortida DMX. Et permeten veure els fixtures que van per darrere del cursor (velocitat de pan/tilt, esvaïments) o que estan limitats a un rang més estret. |
| **Value sliders** | Els controls lliscants d'una sola nansa de la part inferior i dreta. Estableixen la posició X i Y de manera independent, cosa útil per a ajustos precisos d'un sol eix. |
| **Presets** | La fila de botons sota el pad, que es mostra només quan s'ha afegit almenys un preset. Un botó de preset actiu es mostra ressaltat. |

## Afegir fixtures

Els fixtures s'afegeixen des dels **ajustos** del giny, a la secció
**Fixtures**:

* Fes clic al botó <i class="fa fa-2x fa-plus" style="color:limegreen"></i>
  **Add a fixture/head** per obrir el plafó lateral de fixtures, i després
  **arrossega** els elements a l'àrea de destinació sota la llista.
* Pots deixar anar un **universe**, un **fixture group**, un **fixture** o
  una sola **head**. Els universos, grups i fixtures s'expandeixen en els
  seus caps individuals, i els caps que ja són a la llista no s'afegeixen
  dues vegades.
* Cada fila mostra el **nom** del cap i el seu **X-Axis Range** i **Y-Axis
  Range** actuals, en les unitats del Range Display Mode actual. Un eix
  invertit es marca amb **(R)**.
* Es poden afegir caps sense canal Pan o Tilt, però simplement no produeixen
  cap sortida — el pad només controla els canals Pan/Tilt que troba.

Selecciona files a la llista (amb Ctrl/Maj per a selecció múltiple) per
actuar-hi amb els botons
<i class="fa fa-2x fa-pencil"></i> i
<i class="fa fa-2x fa-minus" style="color:crimson"></i> de la mateixa barra
d'eines.

## Limitar el moviment

Hi ha dues maneres independents d'evitar que els teus fixtures apuntin cap a
on no haurien — cap al sostre, cap al públic o fora de l'escenari. Es poden
utilitzar juntes.

### 1. La range window (range sliders)

Els range sliders superior i esquerre limiten l'àrea on treballa el pad. Un
rectangle cian semitransparent marca la **range window** resultant sobre
l'àrea principal.

* Quan arrossegues amb el ratolí, el cursor queda **fixat** a la finestra: no
  en sortirà encara que arrossegues cap enfora.
* Quan mous el pad des d'un **controlador extern**, el valor entrant
  s'**escala** a la finestra. Tot el recorregut d'un fader físic es mapa
  sobre la finestra reduïda, de manera que obtens més sensibilitat on
  importa, i el feedback retornat al controlador s'escala de la mateixa
  manera.
* La range window és una propietat del *pad*, no dels fixtures: s'aplica a
  tots els caps controlats alhora.

### 2. Rang de Pan/Tilt per fixture

Selecciona un o més caps a la llista **Fixtures** i fes clic al botó
<i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the selected
fixture head(s)**. Un diàleg et permet establir, tant per a **Pan** com per a
**Tilt**:

|     |     |
| --- | --- |
| **Minimum** | Inici del rang utilitzable per a aquest cap. |
| **Maximum** | Final del rang utilitzable per a aquest cap. |
| **Reverse** | Inverteix la direcció d'aquest eix per a aquest cap. |

Sempre s'utilitza tota l'àrea principal, i el rang de cada cap s'**escala**
sobre aquesta. Això és el que fa que un equip mixt es comporti de manera
coherent: un fixture amb un pan de 540° es pot fer moure exactament com un de
360°, de manera que tots els caps apunten al mateix punt quan el cursor és al
mateix lloc.

Per exemple, si estableixes el mínim de Pan al 20% i el màxim al 80%, el
cursor a la vora esquerra produeix una sortida del 20% (DMX 51), a la vora
dreta del 80% (DMX 204), i tots els valors intermedis s'escalen
proporcionalment.

> Els valors d'aquest diàleg s'expressen en les unitats del **Range Display
> Mode** actual (vegeu més avall): graus, percentatge o DMX. Quan hi ha
> diversos caps seleccionats, el diàleg mostra el rang del primer cap
> seleccionat i — en mode Degrees — el valor màxim permès és el rang més
> petit entre els seleccionats, de manera que els valors introduïts siguin
> vàlids per a tots els caps seleccionats. En prémer OK s'aplica el mateix
> rang a tots ells.

## Settings

### Display Properties

* **Inverted Y-Axis** — inverteix l'eix vertical, de manera que el valor
  màxim de tilt s'assoleix a la part superior del pad en lloc de a la part
  inferior. Útil per a fixtures muntats cap per avall en un truss.

### Range Display Mode

Selecciona les unitats utilitzades en mostrar i editar els rangs Pan/Tilt
dels fixtures:

* **Degrees** — els angles físics presos de la definició del fixture. Només
  té sentit per a fixtures la definició dels quals declara un rang de
  pan/tilt.
* **Percentage** — 0–100% del recorregut complet del fixture.
* **DMX** — valors DMX en brut, 0–255.

Canviar el mode no canvia els rangs emmagatzemats, només com es mostren i
s'introdueixen.

### Fixtures

La llista de caps controlats pel pad, amb la seva barra d'eines:

|     |     |
| --- | --- |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a fixture/head** | Obre el plafó lateral de fixtures i l'àrea de destinació per afegir universos, grups, fixtures o caps individuals. |
| <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the selected fixture head(s)** | Obre el diàleg del rang Pan/Tilt per als caps seleccionats. Vegeu *Rang de Pan/Tilt per fixture* més amunt. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected fixture head(s)** | Elimina els caps seleccionats del pad. |

## Presets

Els presets es mostren com a botons sota el pad i donen accés d'un sol toc a
posicions, efectes i subconjunts de fixtures. Es gestionen a la pestanya
**Presets** dels ajustos del giny.

|     |     |
| --- | --- |
| ![](/basics/position.svg?resize=48,48) **Position Preset** | Emmagatzema la posició XY actual del cursor com a preset. El nom per defecte són les coordenades X/Y en el moment de la creació. |
| ![](/basics/functions.svg?resize=48,48) **Scene/EFX Function Preset** | Obre el plafó lateral del Function Manager; deixa anar funcions ![](/basics/scene.svg?resize=48,48) [Scene](/basics/glossary-and-concepts#escena) o ![](/basics/efx.svg?resize=48,48) [EFX](/basics/glossary-and-concepts#efx) a l'àrea de destinació per convertir-les en presets. El nom per defecte és el nom de la funció. Les escenes sense cap canal Pan o Tilt es rebutgen. |
| ![](/basics/group.svg?resize=48,48) **Fixture Group Preset** | Obre el plafó lateral de fixtures; deixa anar universos, grups, fixtures o caps per crear un preset de grup de fixtures. Només es conserven els caps ja controlats pel pad. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove selected preset** | Suprimeix el preset seleccionat. |
| <i class="fa fa-2x fa-arrow-up"></i> / <i class="fa fa-2x fa-arrow-down"></i> **Move selected preset up / down** | Reordena el preset seleccionat, que és també l'ordre dels botons sota el pad. |
| **Preset name** | Canvia el nom del preset seleccionat. El nom és el que apareix al botó. |

### Tipus de preset i comportament

Només pot estar actiu **un preset alhora**. En activar un preset es
desactiva automàticament l'anterior.

* ![](/basics/position.svg?resize=48,48) **Position** — en fer clic al botó,
  el cursor es desplaça a la posició emmagatzemada. El pad continua
  funcionant amb normalitat després, de manera que pots ajustar la posició a
  mà des d'allà.
* ![](/basics/efx.svg?resize=48,48) **EFX** — inicia la funció
  [EFX](/function-manager/efx-editor). Fes clic de nou al botó (o activa un
  altre preset) per aturar-la. Mentre l'EFX s'executa, els punts de posició
  dels fixtures mostren els fixtures movent-se al llarg del patró.
* ![](/basics/scene.svg?resize=48,48) **Scene** — inicia la funció
  [Scene](/function-manager/scene-editor), que estableix els seus propis
  valors de Pan/Tilt. Fes clic de nou per aturar-la.
  > Tingues en compte que s'inicia **tota** l'Scene, colors, dimmers i tota
  > la resta inclosos. És millor crear Scenes dedicades que continguin
  > només canals Pan i Tilt per utilitzar-les com a presets de l'XY Pad.
* ![](/basics/group.svg?resize=48,48) **Fixture Group** — restringeix el pad
  a un **subconjunt** dels caps que controla: mentre està actiu, només
  aquests caps segueixen el cursor, la resta mantenen la seva posició. Fes
  clic de nou per alliberar la restricció i tornar a controlar tots els
  caps. La llista mostra quants caps conté el preset.

## External input

Com qualsevol giny de la Virtual Console, l'XY Pad es pot controlar des de
MIDI, OSC, DMX-in o qualsevol altra entrada compatible. Els controls
següents es poden assignar a la configuració d'entrada del giny:

|     |     |
| --- | --- |
| **Pan / Horizontal axis** | Posició horitzontal (pan) de gra gruixut. Escalada a la range window quan n'hi ha una d'establerta. |
| **Pan fine** | Posició horitzontal fina (LSB), per a fixtures amb pan de 16 bits. |
| **Tilt / Vertical axis** | Posició vertical (tilt) de gra gruixut. Escalada a la range window quan n'hi ha una d'establerta. |
| **Tilt fine** | Posició vertical fina (LSB), per a fixtures amb tilt de 16 bits. |
| **Width** | Reservat per a l'amplada de la range window. |
| **Height** | Reservat per a l'alçada de la range window. |
| **Preset: &lt;name&gt;** | Es crea una entrada per a cada preset. Enviar un valor màxim (pulsació d'un botó) activa o commuta aquest preset, exactament igual que fer clic al seu botó. |

Cada vegada que la posició canvia per un motiu *diferent* d'una entrada
externa — un arrossegament amb el ratolí, la recuperació d'un preset, un
desfer — el pad envia un **feedback** amb la posició actual. Els faders
absoluts/motoritzats segueixen el cursor, i els encoders reben el seu valor
intern reajustat perquè continuïn funcionant en relació amb la posició real.
El feedback no es retorna mentre és el mateix controlador qui mou el pad, de
manera que no es genera cap bucle de feedback.

## Consells

* Estableix **rangs X/Y** per fixture perquè un equip mixt de caps mòbils
  apunti tot al mateix punt quan el cursor del pad està centrat.
* Utilitza la **range window** per mantenir un XY Pad de manera segura dins
  de l'àrea de l'escenari, i guanya alhora resolució de fader en un
  controlador extern.
* Desa posicions habituals com a **position presets** per a una recuperació
  instantània durant un espectacle, i reordena-les perquè les més utilitzades
  quedin primer.
* Afegeix **fixture group presets** a un únic pad en lloc de construir-ne
  diversos: un sol toc selecciona cap a quins caps estàs apuntant.
* Observa els **fixture position dots** per comprovar que cada cap ha
  arribat realment a la posició — els caps que encara estan de camí, o amb
  un rang més estret, es veuen immediatament.
