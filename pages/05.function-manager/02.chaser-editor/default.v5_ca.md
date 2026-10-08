---
title: 'Editor de Chasers'
date: '12:08 21-08-2023'
---

Un **Chaser** reprodueix una llista de funcions (normalment escenes) una després de l'altra, cadascuna durant un temps definit. És la manera principal de construir seqüències d'aspectes — chases de color, efectes basats en passos, piles de cues, etc. L'Editor de Chasers s'obre al panell dret de l'espai de treball [Fixtures i Funcions](/fixtures-and-functions).

## Barra d'eines

| Botó | Què fa |
|--------|--------------|
| **Nom** | El nom del chaser (barra superior). |
| <i class="fa fa-chevron-left fa-2x"></i> **Enrere** | Torna a l'editor anterior. |
| <i class="fa fa-2x fa-circle-left" style="color:cyan"></i> **Previsualitza el pas anterior** | Quan la previsualització s'està executant, retrocedeix pels passos del chaser perquè puguis comprovar cada aspecte a la sortida. |
| <i class="fa fa-2x fa-circle-right" style="color:cyan"></i> **Previsualitza el pas següent** | Quan la previsualització s'està executant, avança pels passos del chaser. |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Afegeix un pas nou** | Obre el Gestor de Funcions en un panell lateral. Fes **doble clic** o arrossega funcions des d'allà per afegir-les com a passos. |
| <i class="fa fa-2x fa-clone"></i> **Duplica els passos seleccionats** | Copia els passos seleccionats, inserint les còpies a la llista. |
| <i class="fa fa-2x fa-shuffle" style="color:gold"></i> **Ordre aleatori dels passos seleccionats** | Barreja l'ordre dels passos seleccionats. |
| <i class="fa fa-2x fa-stopwatch" style="color:lightskyblue"></i> **Estableix automàticament les durades dels passos** | Divideix la durada total del chaser de manera uniforme entre els passos seleccionats. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Elimina els passos seleccionats** | Suprimeix els passos seleccionats (demana confirmació). |
| <i class="fa fa-2x fa-print"></i> **Imprimeix els passos del Chaser** | Imprimeix la llista de passos del chaser. |

Els botons de previsualització només apareixen mentre la previsualització està activada. Els botons d'edició es desactiven mentre la previsualització s'està executant, i els botons de duplicar/durada automàtica/eliminar necessiten almenys un pas seleccionat.

## La llista de passos

Cada fila és un pas del chaser:

| Columna | Significat |
|--------|---------|
| **#** | El número del pas, en l'ordre de reproducció. |
| **Funció** | La funció que reprodueix aquest pas. |
| **Fade In** | El temps que triga el pas a esvair-se d'entrada. |
| **Hold** | El temps que el pas es manté al màxim abans d'esvair-se de sortida. |
| **Fade Out** | El temps que triga el pas a esvair-se de sortida. |
| **Duració** | El temps total del pas (fade in + hold). |
| **Nota** | Un comentari de text lliure per al pas. |

Interaccions:

| Acció | Resultat |
|--------|--------|
| **Clic** | Selecciona un pas. |
| **Ctrl+clic** / **Maj+clic** | Afegeix a la selecció / selecciona un interval. |
| **Arrossega** un pas | El reordena; una línia mostra on es deixarà anar. |
| **Arrossega** des del Gestor de Funcions | Afegeix funcions com a passos a la posició on es deixen anar. |
| **Doble clic** al nom de la funció | Obre l'editor propi d'aquesta funció. |
| **Doble clic** en un camp de temps | Edita el temps d'aquest pas directament. |
| **Doble clic** a la nota | Edita la nota del pas directament (**Retorn** confirma, **Esc** cancel·la). |

Els camps de temps que no són **Per Step** (vegeu més avall) no es poden editar a la llista.

## Propietats d'execució

La secció plegable **Propietats d'execució** controla com es reprodueix el chaser.

### Ordre d'execució

| Icona | Mode | Comportament |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Repeteix des del primer pas indefinidament. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Es reprodueix una vegada i s'atura. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Es reprodueix cap endavant, després cap enrere, i repeteix. |
| <i class="fa fa-2x fa-shuffle"></i> | **Random** | Reprodueix els passos en ordre aleatori. |

### Direcció

| Icona | Mode | Comportament |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Comença pel primer pas i avança cap avall per la llista. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Comença per l'últim pas i avança cap amunt per la llista. |

### Tempo

| Icona | Mode | Comportament |
|------|------|-----------|
| **T** | **Time** | Els temps dels passos s'indiquen en minuts/segons/mil·lisegons. |
| **B** | **Beats** | Els temps dels passos s'indiquen en beats, sincronitzats amb el tempo global. |

### Fade In / Fade Out / Duration

Aquests tres ajustos decideixen d'on obté cada pas la seva temporització.

| Icona | Mode | Comportament |
|------|------|-----------|
| **D** | **Default** | Cada pas utilitza el temps d'esvaïment de la seva pròpia funció. (Només Fade In / Fade Out.) |
| **C** | **Common** | Un únic valor, introduït una sola vegada, es comparteix entre tots els passos. |
| **S** | **Per Step** | Cada pas manté el seu propi valor, editable directament a la llista de passos. |
