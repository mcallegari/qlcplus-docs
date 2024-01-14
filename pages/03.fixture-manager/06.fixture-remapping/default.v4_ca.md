---
title: 'Fixture Remapping'
date: '11:36 21-08-2023'
media_order: fixremap.png
---

A partir de la versió 4.4.1, QLC+ ofereix una funcionalitat anomenada remapatge de fixtures.  
Quan realitzis espectacles en directe en diferents llocs, és possible que només puguis esbrinar a última hora quins [fixtures](/basics/glossary-and-concepts#fixtures) hi ha instal·lats. Bé, el remapeig de fixtures t'ajuda a utilitzar els teus projectes existents en aquesta i moltes altres situacions, com ara quan necessites reemplaçar un fixture defectuos o quan vols utilitzar equips contractats al costat del teu.  
Per exemple, podeu configurar un projecte amb només un PAR, un capçal mòbil i un escàner. En arribar al recinte on tindrà lloc l'espectacle, pots reassignar els teus fixtures als que hi trobaràs, per exemple 50 PAR, 30 caps mòbils i 15 escàners.  
Amb QLC+, només calen uns minuts per fer aquesta operació!

El remapeig de Fixtures permet realitzar reassignacions d'1 a 1 o d'1 a molts fixtures sencers o canals individuals. QLC+ intentarà, en la mesura que sigui possible, reassignar els canals originals utilitzats en el projecte a nous canals de la mateixa categoria.  
Quan confirmeu l'operació de reassignació, es desarà automàticament un projecte nou per preservar el projecte original.  
Tots els dispositius fixtures, escenes, EFX, ginys de la consola virtual i activadors d'àudio trobats en el projecte original seran remapats de manera que treballin en la llista de fixtures nous.


Finestra de remapeig
----------------

A continuació, expliquem com utilitzar la finestra de remapeig de fixture, començant des d'una captura de pantalla d'un exemple complet:

![](fixremap.png)

I ara, aquí teniu una explicació detallada de cada element de la finestra de remapeig

|     |     |
| --- | --- |
| **Fixtures d'Origen** | Al costat esquerre de la finestra hi ha un arbre que representa els universos, fixtures i canals utilitzats en el teu projecte. Aquesta llista no es pot canviar en aquesta finestra. |
| **Fixtures remapats** | A la part dreta de la finestra, hi ha un arbre que representa els universos, fixtures i canals on vas a remapar els teus fixtures d'origen. |
| ![](/basics/edit_add.png) | Afegiu un o més fixtures a la llista de fixtures remapats En fer clic en aquest botó s'obrirà la finestra [Afegeix/Edita Fixtures](/fixture-manager/add-edit-fixtures). Tingueu en compte que un cop s'afegeix un fixture, no es pot modificar, així que si necessiteu noms o quantitat específics, recordeu fer-ho abans d'afegir els nous fixtures |
| ![](/basics/edit_remove.png) | Suprimiu el  [Fixture](/basics/glossary-and-concepts#fixtures) seleccionat de la llista de fixtures remapats. |
| ![](/basics/remap.png) | Aquest és probablement el botó més important de la finestra. Permet determinar la connexió entre una fixture d'origen i un fixture remapat. Les connexions es poden realitzar tant entre canals individuals com en fixtures sencers.  <br>En el primer cas haureu de seleccionar el canal d'origen de la llista de fixtures d'origen i un canal de destinació de la llista de fixtures remapats.  <br>En el segon cas haureu de seleccionar un fixture de la llista de fixtures d'origen i un fixture de destinació de la llista de fixtures remapats.  <br>Seleccions incorrectes provocaran un missatge d'error a la finestra emergent. Per exemple, no podeu tornar a assignar un canal a un fixture i viceversa.  <br>Si la connexió és vàlida, es representarà com una línia a l'àrea blanca entre la llista d'origen i la llista de remapada |
| ![](/basics/fileclose.png) | Elimina una connexió de remapatge creada prèviament. Seleccions incorrectes causaran un error emergent. |
| **Remapa els noms dels fixtures** | Si està marcada, una nova connexió de remapatge entre fixtures també establirà el nom del fixture de destinació com el nom del fixture d'origen. |
| **Nom del projecte de destinació** | El camí absolut i el nom del projecte remapejat. Per comoditat, QLC+ prendrà automàticament el nom del projecte original i afegirà "(remapped)" al final d'aquest. |
