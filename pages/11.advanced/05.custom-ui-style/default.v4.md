---
title: 'Custom UI Style'
date: '11:59 22-08-2023'
---

Starting from version 4.5.0, QLC+ can read a custom file to change the GUI appearance in a very accessible way.  
If no file is found, QLC+ will start with the default style.

The theme style file
------------------

The file name is  hard-coded into QLC+ and must be: `qlcplusStyle.qss`  
The style file must also be placed in a specific path which is:  

* **Linux**: `$HOME/.qlcplus`
* **Windows**: `C:\\Users\<YourUser>\QLC+`
* **OSX**: `$HOME/Library/Application\\ Support/QLC+`

The theme file is divided in sections. Each section represents the UI items that will be modified when running QLC+. Unchanged sections can be omitted.  
Sections start with a bunch of ```===``` characters and the section name.  
At the moment, supported section keywords are:  
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

The section content must have a CSS syntax. If you're comfortable with web designing, you should find the creation of this file very easy!  
Since the style file is strictly related to the inner Qt objects, you might want to read the following articles to find out the elements' names and the additional CSS properties the Qt team added to the default CSS syntax.  
[Qt Style Sheets](https://doc.qt.io/qt-5/stylesheet-syntax.html)  
[Qt Style Sheets Examples](https://doc.qt.io/archives/qt-4.8/stylesheet-examples.html)  
It is up to your imagination how you prefer to customize the QLC+ GUI appearance! If you find a style worth sharing, don't forget to send in your contribution by posting it online in the [QLC+ forum](https://www.qlcplus.org/forum/viewforum.php?f=5)

Please note: not all styles are available to be changed via the stylesheet as they are  hard-coded in C++. 

QLC+ dark blue style example
----------------------------

Just to give you an example of how easy this process is, here's a bluish dark style for QLC+.  
If you copy the following lines into `qlcplusStyle.qss` in the right location as explained above, you will see it applied to QLC+ at the next startup.
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
