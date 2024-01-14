---
title: 'Function Manager'
date: '11:55 21-08-2023'
taxonomy:
    category: docs
---

### Capítol 4

# Gestor de Funcions

Amb el gestor de funcions podràs gestionar totes les teves funcions que fan el treball real d'automatitzar els teus llums. Podeu crear funcions noves, eliminar-ne i editar-ne d'existents, així com crear-ne còpies. Els controls es troben a la part superior de la finestra; la part inferior mostra totes les vostres funcions, així com l'editor de funcions per a la funció seleccionada (si n'hi ha).

Cada tipus de funció es pot trobar sota la seva pròpia categoria: Escena per a escenes, EFX per a EFX, etc. Quan es crea una nova funció o se selecciona una existent, es tria l'editor apropiat i es mostra a la part dreta de la finestra del Gestor de funcions. Els canvis fets a la subfinestra de l'editor s'emmagatzemen immediatament a les pròpies funcions i no es requereixen clics d'acord addicionals.

Controls
--------

|     |     |
| --- | --- |
| ![](/basics/scene.png) | Crea una [Escena](/basics/glossary-and-concepts#scene) nova i edita-la amb l'[Editor d'Escenes](scene-editor). (Drecera: CTRL+1) |
| ![](/basics/chaser.png) | Crea un [Chaser](/basics/glossary-and-concepts#chaser) nou i edita'l mitjançant l'[editor de Chasers](chaser-editor). (Drecera: CTRL+2) |
| ![](/basics/sequence.png) | Crea una [Seqüència](/basics/glossary-and-concepts#sequence) nova i edita-la mitjançant l'[Editor de Chaser](chaser-editor). (Drecera: CTRL+3) |
| ![](/basics/efx.png) | Crea un [EFX](/basics/glossary-and-concepts#efx) nou i edita'l mitjançant l'[Editor d'EFX](efx-editor). (Drecera: CTRL+4) |
| ![](/basics/collection.png) | Crea una [Col·lecció](/basics/glossary-and-concepts#collection) nova i edita-la mitjançant l'[Editor de Col·leccions](collection-editor). (Drecera: CTRL+5) |
| ![](/basics/rgbmatrix.png) | Crea una [matriu RGB](/basics/glossary-and-concepts#rgb-matrix) nova i edita-la mitjançant l'[Editor de matrius RGB](rgb-matrix-editor). (Drecera: CTRL+6) |
| ![](/basics/script.png) | Crea un [Script RGB](/basics/glossary-and-concepts#rgb-script) nou i edita'l mitjançant l'[Editor d'Scripts RGB](rgb-script-api). (Drecera: CTRL+7) |
| ![](/basics/audio.png) | Creeu una nova funció d'[Audio](/basics/glossary-and-concepts#audio) a emprar-la en [Chasers](/basics/glossary-and-concepts#chaser) o [Shows](/basics/glossary-and-concepts#show). (Drecera: CTRL+8) |
| ![](/basics/video.png) | Creeu una nova funció de [Video](/basics/glossary-and-concepts#video) per a emprar-la en [Chasers](/basics/glossary-and-concepts#chaser) o [Shows](/basics/glossary-and-concepts#show). (Drecera: CTRL+9) |
| ![](/basics/folder.png) | Crea una carpeta nova a la categoria seleccionada. (Drecera: CTRL+L) Es pot canviar el nom d'una carpeta fent doble clic sobre ella.  <br>Quan se selecciona una carpeta, quan es crea una nova funció se li afegirà a aquesta. Per a moure funcions existents dins d'una carpeta, seleccioneu-les i arrossegueu-les. De la mateixa manera, es poden moure fora d'una carpeta arrossegant-les a un element de categoria.  <br>En suprimir una carpeta, se suprimiran totes les funcions i subcarpetes que conté.  <br>**Nota:** Les carpetes buides no es desaran al projecte. |
| ![](/basics/autostart.png) | <No function>Obriu el diàleg Selecció de funcions per a triar una funció d'inici. La funció seleccionada s'iniciarà cada vegada que QLC+ canviï al mode d'operació. Això és molt útil quan s'executa QLC+ en mode quiosc (usant [-k o -p flags](/advanced/command-line-parameters)) <br>Hi ha una entrada especial anomenada "" per eliminar una funció d'inici establerta prèviament. |
| ![](/basics/wizard.png) | Inicia l'[Assistent de Funcions](function-wizard). (Drecera: CTRL+W) |
| ![](/basics/editcopy.png) | Crea una còpia de cadascuna de les funcions seleccionades. **Nota**: la clonació d'una seqüència també clonarà l'escena enllaçada. |
| ![](/basics/editdelete.png) | Elimina permanentment les funcions seleccionades. |