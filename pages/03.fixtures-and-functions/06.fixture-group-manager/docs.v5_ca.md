---
title: 'Fixture Group Manager'
date: '14:33 27-06-2026'
taxonomy:
    category:
        - docs
---

El **Fixture Group Manager** llista tots els fixtures del teu projecte, organitzats
per univers, i et permet crear **fixture groups**, inspeccionar i canviar el nom d'elements,
i editar les propietats de fixtures i canals. Obre'l amb el botó **Fixture Groups**
al panell esquerre de l'espai de treball
[Fixtures and Functions](/fixtures-and-functions).

## L'arbre

L'àrea principal és un arbre. Al nivell superior hi ha els **universos**; expandeix un
univers per veure els **fixtures** que hi ha apedaçats, i expandeix un fixture per veure els seus
**heads** i **canals**. Els **fixture groups** que crees també apareixen aquí com a
nodes expandibles.

### Seleccionar elements

* **Fes clic** a un element per seleccionar-lo (un univers, grup, fixture, head o canal).
  Seleccionar fixtures aquí també els selecciona a les vistes.
* Mantén premuda la tecla **Ctrl** per seleccionar diversos elements alhora.
* **Fes doble clic** a un node per expandir-lo o col·lapsar-lo.

### Construir grups arrossegant

Arrossega fixtures (o seleccions senceres) sobre un node de grup per afegir-los a aquell grup.
Els grups et permeten seleccionar i controlar diversos fixtures junts a tot el programa.

## Botons de la barra d'eines

* **＋ Add a new fixture group** — crea un nou fixture group buit.
* **－ Remove the selected items** — elimina els fixtures i/o fixture groups
  seleccionats. (Eliminar un fixture de dins d'un grup l'elimina del
  grup.)
* **Apply changes to fixtures of the same type** (icona de doble verificació) — quan
  s'editen propietats de fixture/canal, fa que les teves edicions s'apliquin també a tots
  els altres fixtures del mateix tipus. Es pot activar o desactivar.
* **Search** (lupa) — obre un quadre de cerca per filtrar l'arbre per nom de grup,
  fixture o canal.
* **Rename the selected items** — canvia el nom de l'element seleccionat. Quan hi ha diversos elements
  seleccionats, els pots canviar de nom tots alhora amb numeració automàtica.
* **Inspect the selected item** (icona d'info) — obre un resum d'informació de
  l'element seleccionat a la vista principal (un resum d'univers/grup, o un resum
  de fixture). Desactiva-ho per tornar a la vista anterior.
* **Edit the selected item** (icona de llapis) — entra en el mode d'edició per a
  l'element seleccionat:
  * Per a un **fixture group**, obre l'editor de grups a la vista principal.
  * Per a un **fixture** (o univers), obre l'editor de propietats de canal i
    eixampla el panell per mostrar les columnes de propietats.
* **Add/Remove a linked fixture** (icona d'enllaç) — apareix mentre s'edita un fixture;
  afegeix o elimina una còpia enllaçada del fixture (un fixture que comparteix la mateixa
  adreça DMX).

## Propietats de canal

Quan edites un fixture, el panell s'eixampla i mostra una fila de columnes per a cada
canal:

* **Name** — el nom del canal.
* **Mode** — el mode de funcionament del canal.
* **Flags** — indicadors especials del canal.
* **Can fade** — si el canal pot fer esvaïment entre valors.
* **Behaviour** — com es comporta el canal quan diverses funcions el controlen
  (precedència).
* **Modifier** — una corba modificadora de canal opcional.

Aquests paràmetres et permeten ajustar amb precisió com respon cada canal. Amb **Apply to
fixtures of the same type** activat, els canvis es propaguen a tots els fixtures coincidents.
