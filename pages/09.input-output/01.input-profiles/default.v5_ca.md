---
title: 'Perfils d''Entrada'
date: '04:57 22-08-2023'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

## Què és un perfil d'entrada?

Un **perfil d'entrada** mapeja els senyals que provenen d'un dispositiu de
control extern (un controlador MIDI, una app OSC, una taula DMX, un
joystick, …) a canals que QLC+ pot entendre, de manera que puguis controlar
el teu espectacle amb el maquinari que prefereixis sense conèixer el
protocol subjacent. Un cop assignat un perfil a un univers, els seus canals
es poden vincular a ginys de la Consola Virtual, grups de canals i més.

## Seleccionar un perfil d'entrada

QLC+ inclou molts perfils ja preparats. Per assignar-ne un:

1. Obre el context ![](/basics/inputoutput.svg?resize=24,24)
   **Entrades/Sortides**.
2. Selecciona l'univers en què està connectat el dispositiu.
3. Obre la llista de **perfils d'entrada** des del plafó esquerre (el botó
   **P**).
4. Troba el perfil del teu dispositiu i selecciona'l. Es vincula a la
   connexió d'entrada de l'univers.

## Crear / editar un perfil

Si el teu dispositiu no és a la llista, pots crear-ne un de propi. Des de
la llista de perfils d'entrada, utilitza el botó
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> per crear un
perfil nou, o selecciona'n un d'existent i edita'l. En qualsevol dels dos
casos s'obre l'**Editor de perfils d'entrada**; el procediment és el
mateix a partir d'aquí.

## Editor de perfils d'entrada

L'editor s'organitza en pestanyes, amb una barra d'eines compartida per
afegir, eliminar i desar elements:

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix** | Afegeix un nou canal / color / canal MIDI, segons la pestanya actual. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Elimina** | Elimina l'element seleccionat. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Assistent** | (Pestanya de mapatge d'entrada) Activa/desactiva l'assistent de detecció automàtica de canals (vegeu més avall). |
| ![](/basics/filesave.svg?resize=32,32) **Desa aquest perfil** | Desa el perfil. Si el fabricant/model estan buits, se't demanarà que els omplis primer. |

### General

L'àrea **General** conté la identificació del perfil:

* **Manufacturer** — el fabricant del dispositiu. Si ja és a la llista,
  utilitza la mateixa grafia i majúscules/minúscules.
* **Model** — el model del dispositiu, incloent-hi la versió si és
  rellevant (p. ex. "APC Mini MK2").
* **Type** — el tipus de perfil: **MIDI**, **OS2L**, **OSC**, **HID**,
  **DMX** o **ENTTEC**. Els perfils MIDI mostren camps addicionals de
  missatges MIDI a l'editor de canals i exposen la pestanya **MIDI
  Channels** i els paràmetres globals MIDI.

Per als perfils MIDI hi ha disponible una opció de **MIDI Global
Settings**: *When MIDI notes are used, send a Note Off when value is 0*
(quan s'utilitzen notes MIDI, envia un Note Off quan el valor és 0).

### Input Mapping

Aquesta pestanya llista els canals del perfil (número de canal, nom i
tipus). Hi ha dues maneres d'afegir canals.

**Manual** — utilitza el botó
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix** per
introduir els detalls del canal a mà. Útil si coneixes els codis MIDI/OSC
del teu dispositiu.

**Automàtic** — utilitza l'
<i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i>
**Assistent** per detectar canals accionant els controls del teu
dispositiu. QLC+ afegeix cada control a mesura que el toques. Perquè això
funcioni cal tenir un connector d'entrada connectat a l'univers actual, i
cal aturar l'assistent abans de sortir de la pàgina.

> No pots afegir el mateix canal més d'una vegada a un perfil.

#### Propietats del canal

En afegir o editar un canal, estableixes:

* **Number** — el número del canal. Com que QLC+ admet molts connectors,
  això pot no ser intuïtiu, així que canvia'l només si saps què estàs
  fent.
* **Name** — una etiqueta arbitrària que descriu la finalitat del control.
* **Type** — el tipus de control:
  ![](/basics/slider.svg?resize=24,24) **Slider**,
  ![](/basics/knob.svg?resize=24,24) **Knob**,
  ![](/basics/button.svg?resize=24,24) **Button** o
  ![](/basics/knob.svg?resize=24,24) **Encoder**. Tres tipus especials —
  ![](/basics/back.svg?resize=24,24) **Previous Page**,
  ![](/basics/forward.svg?resize=24,24) **Next Page** i
  ![](/basics/star.svg?resize=24,24) **Page Set** — s'utilitzen per
  controlar marcs multipàgina.

Per als perfils **MIDI**, l'editor afegeix els camps **Channel**,
**Message**, **Param** i **Note**, que permeten introduir l'especificació
MIDI d'una manera més intuïtiva (aquests es tradueixen al número de
canal).

#### ![](/basics/slider.svg?resize=24,24) Moviment del control lliscant

En seleccionar un canal de tipus **Slider** es mostra el seu comportament
de moviment:

* **Absolute** (predeterminat) — QLC+ utilitza el valor rebut exactament
  tal com s'envia.
* **Relative** — el valor es tracta com un moviment a partir de la posició
  actual del giny, útil amb un joystick HID que controli un giny
  [XY Pad](/virtual-console/xy-pad) o [Slider](/virtual-console/slider).
  Un valor de **Sensitivity** estableix la intensitat del moviment — com
  més alt, més lent; com més baix, més ràpid.

#### ![](/basics/knob.svg?resize=24,24) Encoder

Un encoder és un control rotatiu infinit, sempre relatiu: en girar-lo
genera desplaçaments positius o negatius a QLC+. Un valor de
**Sensitivity** estableix la mida del desplaçament afegit o restat per
cada pas.

#### ![](/basics/button.svg?resize=24,24) Button

Els botons exposen un comportament global addicional:

* **Generate an extra Press/Release when toggled** — per a dispositius
  (p. ex. Behringer BCF2000) o programari (p. ex. TouchOSC) que només
  envien un únic valor en prémer. QLC+ sintetitza l'alliberament "que
  falta" perquè els commutadors es comportin de manera coherent.
* **Custom Feedback** — amb **Lower value** i **Upper value** forces
  l'enviament de valors personalitzats quan el botó està apagat/encès,
  per exemple per establir el color del LED en dispositius AKAI APC.
  Això és global, però un giny específic de la Consola Virtual el pot
  sobreescriure.

### Colors

Alguns controladors poden mostrar colors als seus botons. Aquesta pestanya
et permet definir un conjunt de colors de retroalimentació perquè es
puguin triar fàcilment en editar la retroalimentació dels ginys de la
Consola Virtual. Utilitza
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix** per
afegir una entrada amb:

* **Value** — el valor que QLC+ ha d'enviar al controlador per produir el
  color.
* **Color** — el color mostrat en aquest valor (un selector de color).
* **Label** — un nom per al color (p. ex. "Blau").

### MIDI Channels

Per als dispositius MIDI que utilitzen diferents canals MIDI per a
diferents modes de retroalimentació/visualització (per exemple l'AKAI APC
Mini MK2), aquesta pestanya et permet afegir els canals MIDI rellevants
amb un nom descriptiu, mitjançant
<i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix**.

## Desar

Quan hagis acabat, desa el perfil amb el botó
![](/basics/filesave.svg?resize=24,24) **Save** (se't demanarà el
fabricant/model si falten). El teu perfil nou apareixerà llavors a la
llista de perfils d'entrada, a punt per assignar-lo a un univers tal com
s'ha descrit més amunt.

Tingues en compte que alguns perfils inclosos són **perfils del sistema**
i no es poden eliminar tret que tinguis drets d'administrador.
</content>
