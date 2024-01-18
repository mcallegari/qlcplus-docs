---
title: Mode Quiosc
date: '08:17 22-08-2023'
---

QLC+ té un mode especial quan la il·luminació ha de ser operada per persones inexpertes, o simplement voleu evitar canvis no desitjats. S'anomena el Mode Quiosc. En aquest mode només es mostra la Consola Virtual, de manera que no és possible editar-la.

Quan vulgueu iniciar QLC+ en mode quiosc, executeu:

`qlcplus -k -f -o workspace.qxw -p -c 500,10,32,32`

* **-k** activa el mode quiosc
* **-f** posa QLC+ en mode de pantalla completa
* **-o workspace.qxw** obre l'espai de treball especificat
* **-p** comença el mode d'operació
* **-c 500,10,32,32** crea un botó de tancament amb una mida de 32x32 píxels, 500 píxels de l'esquerra i 10 píxels de la part superior.

Per descomptat, podeu especificar el vostre propi fitxer d'espai de treball per a **-o**, i mida/posició per a **-c**.

Podeu ometre qualsevol dels paràmetres si necessiteu - per exemple, ometre **-c 500,10,32,32** si no voleu el botó de tancar, i ometre **-f** si no voleu pantalla completa.

Tots els paràmetres de la línia d'ordres es descriuen [aquí](../command-line-parameters).
