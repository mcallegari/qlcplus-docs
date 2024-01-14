---
title: 'Collection Editor'
date: '12:21 21-08-2023'
---

L'editor de col·leccions, com el seu nom indica, s'utilitza per editar les funcions  ![](/basics/collection.png) [Col·lecció](/basics/glossary-and-concepts#collection).  
Les col·leccions són molt útils en un flux de treball on creeu funcions QLC+ dedicades a àrees específiques del vostre espectacle. Per exemple, podeu crear un nombre d'Escenes per a controlar només els colors, algunes altres Escenes per a controlar només les posicions, etc. A continuació, podeu crear una sèrie de Chasers i EFX per a les automatitzacions.  
Quan hàgiu creat tots els elements bàsics del vostre espectacle, podeu utilitzar Col·leccions per crear una mena de "drecera" a les escenes compostes. Per exemple, una escena de color + una escena de posició.

**Nota:** Les col·leccions no tenen paràmetres de velocitat; cada funció que incloeu en una col·lecció segueix els seus propis paràmetres de velocitat.

**Important**: L'ordre de les funcions en una col·lecció és fonamental quan es tracta de l'ús de l'HTP/LTP o de valors relatius. QLC+ iniciarà internament les funcions d'una col·lecció des de la primera fins a l'última, de manera que si utilitzen els mateixos canals, tingueu-ho en compte perquè podeu trobar-vos amb efectes no desitjats.  
Per exemple, una configuració d'escena Canals de Panoràmica/Inclinació + un EFX en mode relatiu ha de tenir un ordre precís: l'escena en la primera posició i l'EFX en la segona posició.

### Controls

|     |     |
| --- | --- |
| **Nom de la Col·lecció** | Canvia el nom de la col·lecció. |
| ![](/basics/edit_add.png) | Afegeix una [Funció](/basics/glossary-and-concepts#functions) existent a la col·lecció mitjançant el diàleg [Selecciona funció](../function-selection). L'ordre de les funcions no té cap significat. |
| ![](/basics/edit_remove.png) | Suprimeix les funcions seleccionades de la col·lecció. |