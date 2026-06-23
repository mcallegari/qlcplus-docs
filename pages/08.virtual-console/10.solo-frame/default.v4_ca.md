---
title: Marc Solo
date: '03:43 22-08-2023'
---

Un Marc de Solo és gairebé exactament el mateix tipus de contenidor que un [Marc](../frame) normal  en el qual es poden mantenir diversos ginys i altres marcs dins. No obstant això, la diferència amb el Marc Solo és que tracta qualsevol [Botó](../button) dins d'ell de manera diferent, permetent només un botó activat a la vegada. Per exemple, considereu que teniu **Botó A** i **Botó B** dins d'un marc Solo amb **Botó A** actualment activat. A continuació, feu clic al botó **Botó B**, el qual automàticament dona lloc a la desactivació del **Botó A**, deixant ara només el **Botó B** activat.

### Configuració

Els Marcs Solo es poden configurar amb el ![](/basics/edit.png) botó de propietats que es troba a la barra d'eines o fent doble clic al marc solo.

A part de les [opcions estàndard d'estil i col·locació](../styling-and-placement), els marcs solo tenen totes les opcions addicionals del [marc](../frame):

* **Nom del Marc**: Permet assignar una etiqueta arbitrària al Marc Solo. Això només es mostrarà quan l'opció «Mostra la capçalera» estigui habilitada (vegeu més avall).
* **Accepta ginys fills**: Permet afegir ginys al Marc Solo.
* **Permet redimensionar**: Permet canviar l'alçada i l'amplada del Marc Solo.
* **Mostra la capçalera**: Mostra una capçalera útil composta per un botó i una etiqueta. El botó permet expandir/col·lapsar el Marc Solo, el qual pot estalviar molt espai de la consola virtual. L'etiqueta mostrarà el nom del marc.

I una altra opció específica:

* **Barreja els controls lliscants en mode de reproducció**: Quan aquesta opció està activada, es permet activar els [controls lliscants](../slider) en mode de reproducció**** alhora. En moure un control lliscant cap amunt, en lloc de cancel·lar instantàniament els altres controls lliscants en execució, s'esvairan a la mateixa velocitat que l'esteu esvaint.
