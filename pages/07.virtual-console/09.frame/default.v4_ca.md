---
title: Frame
date: '03:39 22-08-2023'
---

Un Marc és un contenidor que pot contenir una varietat de ginys, inclosos altres marcs, a l'interior. De fet, tota la Consola Virtual ja és el teu marc de més avall. A més, si apliqueu alguns [atributs d'estil](../styling-and-placement) a un marc, tots els seus fills (que no han aplicat la seva pròpia configuració d'estil no predeterminada) també hereten les propietats d'estil del seu pare.

## Configuració
<hr>

Els marcs es poden configurar amb el botó de propietats ![](/basics/edit.png) que es troba a la barra d'eines o fent doble clic al marc en si.

A part de les [opcions estàndard d'estil i col·locació](../styling-and-placement), els marcs tenen les següents opcions addicionals, dividides en 2 pestanyes:

### La pestanya Aparença

* **Nom del Marc**: Permet assignar una etiqueta arbitrària al marc. Això només es mostrarà quan l'opció «Mostra la capçalera» estigui habilitada (vegeu més avall).
* **Accepta ginys fills**: Permet afegir ginys al marc.
* **Permet redimensionar**: Permet canviar l'alçada i l'amplada del marc.
* **Mostra la capçalera**: Mostra la capçalera del marc. Per defecte mostrarà 3 elements: un botó d'expansió/reducció, el nom del marc i un botó d'activació/inhabilitació. Alguns altres controls opcionals es mostren quan el marc està en mode multipàgina. Vegeu el paràgraf següent.

### La pestanya Pàgines

Els Marcs de la Consola Virtual es poden convertir en ginys de diverses pàgines, útils quan es tracta de molts ginys o controladors que admeten pàgines.  
La funcionalitat multipàgina està desactivada de manera predeterminada, però es pot activar en aquesta pestanya.  
Seguint les opcions per configurar aquesta funcionalitat:

* **Activa**: Aquesta casella de selecció activa/inhabilita la funcionalitat de múltiples pàgines. Quan està habilitat, els marcs VC mostraran controls addicionals a la barra de capçalera (si la barra de capçalera també està activada). Aquests són: botó de pàgina anterior, nom de pàgina i botó de pàgina següent.
* **Nombre de pàgines**: Amb aquest comptador és possible determinar el nombre de pàgines que manejarà el marc.
* **Clona els primers ginys de pàgina**: Quan està marcada, QLC+ clonarà els ginys de la primera pàgina del marc en totes les altres pàgines noves definides pel camp «Nombre de pàgines». Aquesta és una opció molt útil per accelerar el mapatge d'un controlador extern on totes les pàgines tenen els mateixos ginys.
* **Entrada externa - Pàgina anterior**: Aquí podeu establir un senyal d'entrada externa o una combinació de teclat que farà que es mostri la pàgina anterior del marc.
* **Entrada externa - Pàgina següent**: Aquí podeu establir un senyal d'entrada externa o una combinació de teclat que farà que es mostri la pàgina següent del marc.
* **Dreceres de pàgina**: a la secció inferior de la pestanya de pàgines, és possible assignar a cada pàgina un nom personalitzat, un senyal d'entrada extern o una combinació de teclat.  
    D'aquesta manera es pot accedir directament a una pàgina sense passar per les pàgines intermèdies.


## Controls de Capçalera
<hr>

De manera predeterminada, es mostra un marc amb una capçalera. Seguint una breu descripció dels controls predeterminats i opcionals que es poden utilitzar en mode Operar o Disseny.

* ![](/basics/expand.png) **Botó Expandeix/Col·lapsa**: quan feu clic, la mida del marc es reduirà dramàticament, per estalviar espai a la vostra Consola Virtual. L'estat col·lapsat es desa al projecte.
* **Nom del Marc**: una etiqueta que mostra el nom del Marc
* ![](/basics/check.png) **Botó Activa/Desactiva**: quan feu clic, el Marc entrarà en un estat de desactivació. Tots els ginys dins del marc ja no respondran als controls d'entrada.  
    Això és útil, per exemple, per utilitzar els mateixos controls d'entrada en ginys de diferents marcs. Per exemple, si heu lligat la tecla "G" a un botó del Marc A i també a un botó del Marc B, podeu habilitar un Marc alhora per a utilitzar la vinculació de la clau unívocament.
* ![](/basics/back.png) Pàgina ![](/basics/forward.png) **Controls Multipàgina** (Opcional): quan es configura un marc en mode multipàgina, es mostraran alguns botons addicionals a la capçalera, la qual cosa us permetrà canviar entre les pàgines del marc i fer un seguiment de la pàgina actual.