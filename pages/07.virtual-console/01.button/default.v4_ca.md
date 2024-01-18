---
title: Botó
date: '14:26 21-08-2023'
---

Un botó és un dels ginys més senzills i potents de QLC+; amb ell, podreu iniciar, aturar i fer flaixos a les vostres Funcions.

### Configuració

Els botons es poden configurar amb el botó de propietats ![](/basics/edit.png) trobat a la barra d'eines o fent doble clic al botó mateix.

|     |     |
| --- | --- |
| **Etiqueta del Botó** | Estableix el nom amigable del botó. El nom apareix al botó a la consola virtual.<br>**NOTA:** Si establiu una icona a un botó amb el menú **Edita -. Icona -. Trieu**, la icona substituirà aquesta etiqueta. |
| **Funció** | Mostra el nom de la [Funció](/basics/glossary-and-concepts#funcions) que està assignada al botó.<br><br>![](/basics/attach.png) Adjunteu una funció al botó <br>![](/basics/detach.png) Desacobla la funció actual des del botó |
| **Entrada Externa** | Podeu adjuntar un canal d'entrada extern des d'un dispositiu d'entrada (com un tauler de control) als botons perquè no sempre hàgiu d'utilitzar el ratolí, la pantalla tàctil o el teclat per accedir als botons.<br><br>**Univers d'entrada**: L'univers d'entrada que voleu proporcionar dades d'entrada al botó.<br>**Canal d'entrada**: El canal d'entrada individual dins de l'univers d'entrada seleccionat que voleu utilitzar per controlar el botó.<br>**Detecta automàticament**: Quan està activat, només heu de prémer un botó al vostre maquinari d'entrada extern i s'assignarà automàticament al botó. L'última combinació es mostra als quadres de text quan QLC+ rep dades d'entrada. Si no veieu res en els quadres, la connexió d'entrada pot tenir un problema que primer heu de solucionar.<br>**Trieu...**: Mostra el diàleg [Seleccioneu el Canal d'Entrada](../seleccio-canal-de-entrada) que podeu utilitzar per a seleccionar un canal d'entrada manualment. |
| **Combinació de tecles** | Podeu adjuntar una tecla de teclat (o combinació de tecles) al botó, que després actua com si feu clic al botó directament amb el ratolí.<br><br>![![](/basics/key_bindings.png) Adjunteu una tecla de teclat (o combinació de tecles) al botó <br>![](/basics/fileclose.png) Desmarqueu la combinació de tecles actual des del botó |
| **En prémer el botó...** | **Activa/desactiva la Funció**: Quan feu clic al botó, s'inicia la funció adjunta. Quan feu clic al botó una segona vegada, la Funció s'atura, tret que ja s'hagi aturat per si mateixa.<br>**Funció Flash**: Podeu  "flaixar" l'escena [adjunta](/basics/glossary-and-concepts#escena) quan manteniu premut el botó. Si s'adjunta un altre tipus de Funció al botó, no passa res quan feu clic.<br>**Commuta l'Apagada/Blackout**: Quan feu clic al botó, QLC+ commutarà el mode d'apagada/Blackout](/basics/glossary-and-concepts#blackout)<br>**Atura totes les Funcions**: Quan feu clic al botó, totes les funcions que s'estan executant a QLC+ s'aturaran immediatament. És possible especificar un temps d'esvaïment per esperar que tots els canals d'intensitat arribin a un nivell zero |
| **Ajusta la Intensitat de la Funció** | Si està marcada, aquesta característica ajustarà la intensitat de la funció assignada just abans de reproduir-la quan es prem el botó. |

### Estats del Botó

Un botó pot estar en un dels 3 estats; aquests són Desactivat, Activat i Monitorització. L'estat es pot canviar fent clic amb el ratolí, mitjançant l'entrada externa establerta o utilitzant la combinació de tecles establerta.

| Estat | Aparença del Botó | Descripció de l'Estat |
|-------------|-------------------|------------------------------------------------------------|
| Desactivat/Off | Sense Vora | La funció associada al botó no s'està executant. |
| Activat/On | Vora Verda | S'ha activat el botó i s'està executant la funció. |
| Monitoratge* | Vora Taronja | La funció s'està executant (però activada per un altre giny) |

*Nota: un botó en mode de monitorització no envia cap retroalimentació a un univers associat de controlador/feedback (retroalimentació).

Prement un Botó mentre estigui en l'estat de "monitorització" agafarà el control de la funció en execució i la vora del Botó es tornarà verda. Una altra premuda i la Funció adjunta s'aturarà.
