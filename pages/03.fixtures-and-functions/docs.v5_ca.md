---
title: 'Fixtures i Funcions'
date: '14:33 23-06-2026'
taxonomy:
    category:
        - docs
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

El context **Fixtures i Funcions** és l'espai de treball principal d'edició de la interfície de la versió 5.
Aquí és on afegeixes i organitzes els teus fixtures, controles els seus canals, organitzes paletes i grups de fixtures, i crees i edites funcions com Escenes, Chasers, EFX i Shows.

L'espai de treball es divideix en diverses àrees:
* **Panell esquerre** — afegeix fixtures, gestiona grups i paletes, i controla
  els canals dels fixtures seleccionats.
* **Àrea de vista principal** — mostra els teus fixtures d'una de quatre maneres (Graella
  d'univers, Canals DMX, escenari 2D o escenari 3D).
* **Panell dret** — crea, edita i gestiona les teves funcions.
* **Panell inferior** — obre editors contextuals, com ara la consola de
  canals d'Escena.

Els panells esquerre i dret estan replegats per defecte. Fes clic a un dels seus botons per fer lliscar el panell i obrir-lo; torna a fer clic al botó actiu per tancar-lo. També pots arrossegar la vora interior d'un panell per fer-lo més ample o més estret.

![Fixtures_and_functions](Fixtures_and_functions.png "Fixtures_and_functions")

---

## La vista principal

El centre de la pantalla mostra els teus fixtures. Una barra d'eines a la part superior et permet
triar entre quatre vistes diferents de la mateixa configuració. Només es mostra una vista
a la vegada.

| Vista | Què mostra |
|------|---------------|
| ![](../basics/uniview.svg?resize=48,48) **Vista d'Univers** | Una graella d'adreces DMX per a l'univers seleccionat. Els fixtures ocupen els canals als quals estan connectats. Pots arrossegar un fixture per moure'l a una adreça diferent, i retallar i enganxar fixtures. |
| ![](../basics/dmxview.svg?resize=48,48) **Vista DMX** | Cada fixture es mostra com una franja dels seus canals amb els seus valors en directe. Fes clic a un canal per obrir un control lliscant o una eina de valors predefinits i canviar el seu valor directament. |
| ![](../basics/2dview.svg?resize=48,48) **Vista 2D** | Un plànol de l'escenari des de dalt, amb cada fixture dibuixat a la seva posició real. Útil per dissenyar un muntatge tal com es veu des de dalt. |
| ![](../basics/3dview.svg?resize=48,48) **Vista 3D** | Una representació tridimensional de l'escenari, incloent-hi feixos i colors. (Si el teu sistema no admet renderització 3D, es mostra un avís en el seu lloc.) |

### Triar i separar una vista

* **Clic amb el botó esquerre** en un botó de vista de la barra d'eines per canviar a aquella vista.
* **Clic amb el botó dret** en un botó de vista per **separar** aquella vista en una
  finestra pròpia independent. Això és útil en configuracions amb múltiples monitors — per
  exemple, mantenir el plànol 2D en una pantalla i el renderitzat 3D en una altra. El botó
  desapareix de la barra d'eines mentre la seva vista està separada; tanca la finestra separada
  per fer-la tornar.

### Eines de la barra d'eines de la vista

A la dreta dels botons de vista trobaràs:

* **Selector d'univers** — un menú desplegable per triar quin univers es mostra. Tria un
  únic univers per centrar-t'hi, ocultant els fixtures connectats a un altre lloc.
* **Allunyar / Apropar** — fa que els fixtures apareguin més petits o més grans en la
  vista actual.
* **Configuració de la vista** (el botó de "barres") — mostra o amaga el panell de configuració de
  la vista actual. Aquest botó només apareix per a vistes que tenen la seva pròpia
  configuració (les vistes DMX i 2D).

---

## Panell esquerre — Fixtures i canals

El panell esquerre agrupa tres eines de gestió a la part superior, les eines de
control de canals al mig, i les eines de selecció a la part inferior.

### Gestió de fixtures

| Botó | Què fa |
|--------|--------------|
| ![](../basics/fixture.svg?resize=48,48) **Afegeix Fixtures** | Obre l'explorador de fixtures. Cerca a la biblioteca de fixtures i arrossega un fixture a la vista per connectar-lo. (Només disponible quan l'edició de fixtures està permesa.) |
| ![](../basics/group.svg?resize=48,48) **Grups de Fixtures** | Crea i edita grups de fixtures, perquè puguis seleccionar i controlar diversos fixtures alhora. |
| ![](../basics/palette.svg?resize=48,48) **Paletes** | Crea i gestiona paletes — valors desats per a color, posició, dimmer, etc. — que pots reutilitzar a les teves funcions. |

### Eines de control de canals

Aquestes eines et permeten controlar directament els fixtures **seleccionats**. Cada botó
només s'activa quan almenys un fixture seleccionat té realment aquesta capacitat;
el número petit en un botó t'indica a quants dels fixtures seleccionats s'aplica.
Fes clic a un botó per obrir la seva eina al costat del panell.

| Eina | Què controla |
|------|------------------|
| ![](../basics/intensity.svg?resize=48,48) **Intensitat** | El dimmer / la intensitat mestra dels fixtures seleccionats. |
| ![](../basics/shutter.svg?resize=48,48) **Obturador** | Valors predefinits d'obturador i estroboscopi (obert, tancat, estroboscopi, pols, …). |
| ![](../basics/position.svg?resize=48,48) **Posició** | Pan i tilt — apuntar caps mòbils i escàners. |
| ![](../basics/color.svg?resize=48,48) **Color** | El color dels fixtures, barrejant RGB (i blanc / ambre / UV quan estigui disponible). |
| ![](../basics/colorwheel.svg?resize=48,48) **Roda de Color** | Selecciona un color de la roda de color fixa del fixture. |
| ![](../basics/gobo.svg?resize=48,48) **Gobos** | Selecciona un gobo de la roda de gobos del fixture. |
| ![](../basics/beam.svg?resize=48,48) **Feix** | Propietats del feix com el zoom i l'enfocament. |

### Eines de selecció (part inferior del panell)

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-bolt fa-2x"></i> **Ressaltar** | Ressalta temporalment els fixtures seleccionats actualment perquè puguis veure quins són. El número mostra quants fixtures estan seleccionats. |
| <i class="fa fa-crosshairs fa-2x"></i> **Tria un punt 3D** | (Només vista 3D) Et permet fer clic a un punt de l'escenari 3D per apuntar-hi els fixtures seleccionats. Drecera: **Ctrl+P**. |
| ![](../basics/multiple.svg?resize=48,48) **Commuta la selecció múltiple** | Quan està activat, fer clic als fixtures els afegeix a la selecció en lloc de substituir-la, de manera que pots crear una selecció de diversos fixtures. |
| ![](../basics/selectall.svg?resize=48,48) **Selecciona / Deselecciona tot** | Selecciona tots els fixtures, o neteja la selecció si ja ho estan tots. Drecera: **Ctrl+A**. |

---

## Panell dret — funcions

El panell dret és on treballes amb les **funcions** — Escenes, Chasers,
Seqüències, EFX, Matrius RGB, Col·leccions, Scripts, Àudio, Vídeo i Shows.

| Botó | Què fa |
|--------|--------------|
| ![](../basics/functions.svg?resize=48,48) **Gestor de Funcions** | Obre la llista de totes les teves funcions, organitzades en carpetes. Selecciona una funció aquí per editar-la. |
| <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>**Configuració de Temps** | (Només al [Gestor de Shows](/show-manager)) Ajusta la configuració de temps per al show. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i>**Afegeix una funció nova** | Obre un menú per crear una funció nova. Tria el tipus i el seu editor s'obre automàticament. (Només disponible quan l'edició de funcions està permesa.) |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i>**Elimina** | Elimina les funcions i carpetes seleccionades, després de demanar-te confirmació. |
| ![](../basics/rename.svg?resize=48,48) **Canvia el nom** | Canvia el nom de l'element seleccionat. Quan hi ha diversos elements seleccionats, pots canviar-los el nom tots alhora amb numeració automàtica. |
| <i class="fa fa-clone fa-2x"></i>**Clona** | Fa una còpia de cada funció seleccionada. |
| <i class="fa fa-sitemap fa-2x"></i>**Mostra l'ús de la funció** | Mostra on s'utilitza la funció seleccionada — quines altres funcions, ginys de la consola virtual, etc. hi fan referència. |
| ![](../basics/autostart.svg?resize=48,48) **Inici automàtic** | Marca la funció seleccionada perquè s'iniciï automàticament quan es carrega el projecte (o elimina aquesta marca). |
| <i class="fa fa-play fa-2x"></i>**Previsualització de la Funció** | Executa la funció seleccionada en directe perquè la puguis previsualitzar. Torna a fer clic per aturar-la. |
| ![](../basics/multiple.svg?resize=48,48) **Commuta la selecció múltiple** | (Només al [Gestor de Shows](/show-manager)) Et permet seleccionar diversos elements alhora. |
| <i class="fa fa-xmark fa-2x"></i>**Reinicia els canals de bolcat** | Neteja els canals capturats actualment per bolcar-los a una escena. Drecera: **Ctrl+R**. |

### Crear una funció

Quan tries un tipus des del menú **Afegeix una funció nova**:

* Les funcions d'**Àudio** i **Vídeo** primer et demanen que triïs el(s) fitxer(s) multimèdia. Si
  selecciones un únic fitxer, el seu editor s'obre immediatament; si en selecciones
  diversos, es crea una funció per a cadascun i s'obre el Gestor de Funcions perquè
  els puguis revisar.
* Un **Show** canvia l'aplicació a l'espai de treball del **Gestor de Shows**.
* Qualsevol altre tipus crea la funció i obre el seu editor al panell dret,
  a punt per editar.

---

## Panell inferior

El panell inferior està ocult fins que es necessita. Llisca cap amunt des de la part
inferior de la pantalla per allotjar editors que funcionen juntament amb la vista principal —
sovint la **consola de canals d'Escena**, on estableixes els valors dels canals per a una escena.

| Botó | Què fa |
|----------|-------------------|
| <i class="fa fa-chevron-up fa-2x"></i> **Expandeix / Redueix** | obre el panell a la seva alçada completa o el redueix a una franja fina. També pots arrossegar la vora superior del panell cap amunt o cap avall per establir l'alçada que vulguis |
| <i class="fa fa-copy fa-2x"></i> **Copia als fixtures del mateix tipus** | (Només consola d'Escena) copia els valors de canal seleccionats a tots els altres fixtures del mateix tipus, per no haver-los d'establir un per un |
| ![](../basics/multiple.svg?resize=48,48) **Commuta la selecció múltiple de canals** | (Només consola d'Escena) et permet seleccionar diversos canals alhora |

Mentre el panell inferior està obert, comparteix la pantalla amb les vistes de sobre,
que s'encongeixen per fer-li lloc.
