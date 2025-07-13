---
title: 'Benutzerdefinierter UI-Stil'
date: '11:59 22-08-2023'
---

Ab Version 4.5.0 kann QLC+ eine benutzerdefinierte Datei lesen, um das Erscheinungsbild der GUI auf sehr zugängliche Weise zu ändern.  
Wenn keine Datei gefunden wird, startet QLC+ mit dem Standardstil.

Die Theme-Stildatei
-------------------

Der Dateiname ist in QLC+ fest codiert und muss lauten: „qlcplusStyle.qss“.  
Die Stildatei muss außerdem in einem bestimmten Pfad abgelegt werden:  

* **Linux**: `$HOME/.qlcplus`
* **Windows**: `C:\Benutzer\<Benutzername>\QLC+`.
* **OSX**: `$HOME/Library/Application\\ Support/QLC+`

Die Theme-Datei ist in Abschnitte unterteilt. Jeder Abschnitt stellt die UI-Elemente dar, die beim Ausführen von QLC+ geändert werden. Unveränderte Abschnitte können weggelassen werden.  
Abschnitte beginnen mit einer Reihe von „===“-Zeichen und dem Abschnittsnamen.  
Derzeit werden folgende Abschnittsschlüsselwörter unterstützt:  
```
============== MAIN
============== SIMPLE_DESK_NONE
============== SIMPLE_DESK_EVEN
============== SIMPLE_DESK_ODD
============== SIMPLE_DESK_OVERRIDE
============== GRANDMASTER
============== FIXTURE_CONSOLE_COMMON
============== FIXTURE_CONSOLE_NORMAL
============== FIXTURE_CONSOLE_EVEN
============== FIXTURE_CONSOLE_ODD
============== CONSOLE_CHANNEL_COMMON
```

Der Abschnittsinhalt muss eine CSS-Syntax haben. Wenn Sie sich mit Webdesign auskennen, dürfte Ihnen die Erstellung dieser Datei sehr leicht fallen!  
Da die Stildatei eng mit den inneren Qt-Objekten verknüpft ist, möchten Sie möglicherweise die folgenden Artikel lesen, um die Namen der Elemente und die zusätzlichen CSS-Eigenschaften herauszufinden, die das Qt-Team der Standard-CSS-Syntax hinzugefügt hat.  
[Qt-Stylesheets](https://doc.qt.io/qt-5/stylesheet-syntax.html)  
[Beispiele für Qt-Stylesheets](https://doc.qt.io/archives/qt-4.8/stylesheet-examples.html)  
Es bleibt Ihrer Fantasie überlassen, wie Sie das Erscheinungsbild der QLC+-GUI am liebsten anpassen möchten! Wenn Sie einen Stil finden, der es wert ist, geteilt zu werden, vergessen Sie nicht, Ihren Beitrag einzusenden, indem Sie ihn online im [QLC+-Forum](https://www.qlcplus.org/forum/viewforum.php?f=5) veröffentlichen.

Bitte beachten Sie: Nicht alle Stile können über das Stylesheet geändert werden, da sie in C++ fest codiert sind. 

Beispiel für den dunkelblauen QLC+-Stil
--------------

Um Ihnen ein Beispiel dafür zu geben, wie einfach dieser Vorgang ist, finden Sie hier einen bläulich-dunklen Stil für QLC+.  
Wenn Sie die folgenden Zeilen wie oben erläutert an der richtigen Stelle in „qlcplusStyle.qss“ kopieren, werden Sie beim nächsten Start sehen, dass sie auf QLC+ angewendet werden.
```
============== MAIN
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
