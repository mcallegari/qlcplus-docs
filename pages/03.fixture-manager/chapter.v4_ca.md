---
title: 'Fixture Manager'
taxonomy:
    category: docs
child_type: docs
---

### Capítol 3

# Gestor de Fixtures
El gestor de fixtures és el cor de l'arquitectura orientada a fixtures de QLC+. Com ja diu el seu nom, pots gestionar (afegir, eliminar i editar) els teus accessoris d'il·luminació des del gestor de fixtures. A la part esquerra del gestor hi ha una llista que mostra tots els fixtures de l'espai de treball actual. Quan se selecciona un fixture, el costat dret de la finestra mostra els detalls del fixture seleccionat. Quan se selecciona un [Grup de Fixtures](/basics/glossary-and-concepts#fixture-group), el costat dret de la finestra està ocupat per l'editor de grups de Fixtures](fixture-group-editor).

### Controls

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Afegeix un nou [Fixture](/basics/glossary-and-concepts#fixtures)(s) a l'espai de treball amb el diàleg [Afegeix/Edita Fixture](add-edit-fixtures). |
| ![](/basics/rgbpanel.png) | Afegeix un panell RGB a l'espai de treball amb el diàleg [Afegeix un panell RGB](add-rgb-panel). |
| ![](/basics/edit_remove.png) | Elimina els fixtures seleccionats de l'espai de treball. Això també elimina els fixtures de tots els grups als quals han estat assignats. |
| ![](/basics/configure.png) | Editeu les propietats del fixture seleccionat amb el diàleg [Afegeix/Edita Fixture](add-edit-fixtures). |
| ![](/basics/fade.png) | Obre la finestra [Configuració de les Propietats del Canal](channel-properties). |
| ![](/basics/group.png) | Assigna els fixtures seleccionats a un  [Grup de Fixtures](/basics/glossary-and-concepts#fixture-group) mostrat en un menú emergent. Si encara no teniu grups definits, podeu triar crear-ne un de nou des del menú que s'obre quan es fa clic en aquest botó. |
| ![](/basics/ungroup.png) | Renuncia (elimina) els fixtures seleccionats del grup en què es troben actualment. Tingueu en compte que eliminar fixtures d'un grup NO destruirà completament els fixtures. A més, l'eliminació d'un grup no afectarà les pertinences dels fixtures a altres grups. |
| ![](/basics/up.png) | Mou el Grup de Canals seleccionat cap amunt |
| ![](/basics/down.png) | Mou el Grup de Canals seleccionat cap avall |
| ![](/basics/fileimport.png) | Importa un fitxer de llista de fixture (.qxfl) a QLC+. Tingueu en compte que els conflictes d'adreces fixture no es gestionen, per la qual cosa se suggereix utilitzar aquesta funcionalitat en un projecte buit. |
| ![](/basics/fileexport.png) | Exporta la llista de fixtures disponibles actualment en un projecte QLC+ a un fitxer amb l'extensió .qxfl. Aquest fitxer es pot utilitzar després amb la funcionalitat d'importació. |
| ![](/basics/remap.png) | Obre la finestra de [remapeig de Fixtures](fixture-remapping). |
