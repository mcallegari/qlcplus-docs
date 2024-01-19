---
title: 'Custom UI Style'
date: '11:59 22-08-2023'
---

A partir de la versió 4.5.0, QLC+ pot llegir un fitxer personalitzat de l'usuari per canviar l'aparença de la interfície gràfica d'una manera molt accessible.  
Si no es troba cap fitxer, QLC+ començarà amb l'estil predeterminat.

El fitxer d'estil GUI
------------------

El nom del fitxer està codificat a QLC+ i ha de ser: `qlcplusStyle.qss`  
El fitxer d'estil també s'ha de col·locar en un camí específic que és:

* **Linux**: `$HOME/.qlcplus`
* **Windows**: `<your user folder>/QLC+`
* **OSX**: `Library/Application Support/QLC+`

El fitxer d'estil ha de tenir una sintaxi CSS. Si esteu còmode amb el disseny web, heu de trobar la creació d'aquest fitxer molt fàcil!  
Atès que el fitxer d'estil està estrictament relacionat amb els objectes interiors de les Qt, és possible que vulgueu llegir els articles següents per a esbrinar els noms dels elements i les propietats CSS addicionals que l'equip de les Qt ha afegit a la sintaxi CSS predeterminada.  
[Fulls d'estil de les Qt](https://doc.qt.io/qt-5/stylesheet-syntax.html)  
[Fulls d'estil de les Qt Exemples](https://doc.qt.io/archives/qt-4.8/stylesheet-examples.html)  
Depèn de la teva imaginació com prefereixis personalitzar l'aparença de la IGU QLC+! Si trobeu un estil digne de compartir, no oblideu enviar la vostra contribució publicant-lo en línia al [Fòrum QLC+](https://www.qlcplus.org/forum/viewforum.php?f=5)

Nota: no tots els estils estan disponibles per a ser canviats a través del full d'estil, ja que estan codificats en C++.

Exemple d'estil blau fosc QLC+
----------------------------

Només per donar-te un exemple de com de fàcil és aquest procés, aquí tens un estil fosc de color blau per a QLC+.  
Si copieu les línies següents a `qlcplusStyle.qss` a la ubicació correcta, tal com s'ha explicat anteriorment, veureu que s'aplica a QLC+ en la propera posada en marxa.
```CSS
QMainWindow, QDialog
{
    background-color: #404B57;
    color: #E6E6E6;
}

QTreeWidget
{
    background-color: #3A444F;
    alternate-background-color: #404B57;
    color: #E6E6E6;
}

QTextBrowser
{
    background-color: #3A444F;
    color: #E6E6E6;
}
```
