---
title: 'Add/Edit Fixtures'
taxonomy:
    category:
        - docs
---

El mateix diàleg (amb lleugeres diferències) s'utilitza tant per afegir noves com per editar les propietats dels [Fixtures](/basics/glossary-and-concepts#fixtures) existents.

**NOTA:** Quan editeu un aparell existent, sempre podeu triar un tipus d'aparell completament diferent per substituir l'anterior, però si els seus canals no coincideixen exactament, qualsevol funció d'[Escena](/basics/glossary-and-concepts#scene) que hàgiu creat probablement farà coses que no voleu. A més, si el recompte de canals no coincideix, és possible que acabeu tenint accessoris amb canals superposats, cosa que també provoca comportaments no desitjats. [Matriu RGB](/basics/glossary-and-concepts#rgb-matrix), [EFX](/basics/glossary-and-concepts#efx), [Chaser](/basics/glossary-and-concepts#chaser) i [Col·lecció](/basics/glossary-and-concepts#collection) les funcions no es veuen afectades, ja que no s'adrecen directament a canals específics, però són de naturalesa més dinàmica.

### Controls

|     |     |
| --- | --- |
| **Llista de models de Fixtures** | Mostra una llista de les definicions de fixture disponibles i els seus tipus generals. Si no veieu la vostra definició de fixa preferida a la llista, podeu crear-ne una vosaltres mateixos amb l'**Editor de Fixtures de QLC+** fàcil d'utilitzar. Com que QLC+ és completament programari lliure, considereu compartir els fitxers de definició amb la comunitat a [https://www.qlcplus.org/forum/viewforum.php?f33](https://www.qlcplus.org/forum/viewforum.php?f=3) |
| **Propietats del Fixture** | **Nom:** El nom amigable que voleu assignar al <br>**Mode** del fixture: El [mode](/basics/glossary-and-concepts#fixture-mode) que heu configurat a<br> **l'Univers**: L'univers DMX on estan connectats els fixtures recentment afegits<br>**Adreça:** L'adreça del (primer) aparell que esteu afegint. Si afegiu múltiples fixtures, a cada fixture consecutiu se li assignarà una adreça immediatament després dels canals del fixture anterior, tret que el buit d'adreça (vegeu més avall) sigui diferent de zero.<br>**Canals:** Si heu seleccionat el dispositiu dimmer **Genèric**, podeu definir el seu recompte de canals a aquest camp. Altrament aquest camp és de només lectura i només indica quants canals necessita el fixture seleccionat en el seu mode actualment seleccionat.<br>**Llista de canals:** Aquest camp mostra una llista més detallada de canals individuals per al fixture seleccionat i el seu mode. Per als dimmers **Genèrics** , aquest camp roman buit ja que tots els canals dimmers es tracten com a canals **d'intensitat** ficticis. |
| **Fixtures Múltiples** | També podeu afegir més d'un fixture al mateix temps si la vostra configuració consisteix en diversos accessoris que siguin de la mateixa marca i model. Aquestes funcions es desactiven quan editeu un fixture existent.<x1></x1><x2></x2>* Quantitat: Nombre d'accessoris nous per crear. Cada fixture que s'acaba d'afegir també inclou un número després del seu nom assignat quan s'afegeix més d'un fixture alhora.<br>* Espai d'adreça: Deixa aquest nombre de canals buits entre cada fixture nou |