---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ suporta una sèrie de paràmetres de línia d'ordres per automatitzar/ampliar algunes funcionalitats en iniciar.  
L'ús dels paràmetres de la línia d'ordres pot ser complicat depenent del sistema operatiu que utilitzeu:

**Linux**: simplement obriu un terminal i escriviu «qlcplus» seguit dels paràmetres que necessiteu<br>
**Windows**: creeu una drecera de qlcplus.exe (normalment ubicat a C:\\QLC+) a l'escriptori. Feu clic dret a la drecera i seleccioneu «Propietats». Al camp "Objectiu" veuràs una cosa així com `C:\\QLC+\\qlcplus.exe`. Aquí podeu afegir paràmetres de la línia d'ordres. En acabar feu clic a D'acord.<br>
Per exemple, per forçar l'idioma alemany a l'inici, modifiqueu la línia d'ordres de drecera com aquesta:

![](../commandline.png)

**OSX**: Aquest és el cas més difícil, ja que QLC+ a OSX s'inclou en un paquet DMG. Necessites obrir un terminal i executar "cd" al QLC+ DMG com aquest: `cd QLC+.app\\Contents\\MacOS`<br>
Quan hagis acabat, escriu "qlcplus" seguit dels paràmetres que necessitis



|     |
| --- |
| **-c o --closebutton**<br><br>**Descripció:** Defineix una posició per a un botó de tancament a la consola virtual. El botó es pot utilitzar per tancar QLC+. Només té efecte en mode quiosc (vegeu -k) i és més útil quan està en mode de pantalla completa sense un gestor de finestres.<br><br>**Paràmetres:** x,y,w,h<br><br>**Exemples:**  <br>Crea un botó a (x400, y500) la mida del qual sigui (w70, h50):  <br>qlcplus -c 400,500,70,50  <br>qlcplus --closebutton 400,500,70,50 |

|     |
| --- |
| **-d o --debug**<br><br>**Descripció:** Activa el mode de depuració i opcionalment estableix el nivell de sortida. Tingueu en compte que, des de la versió 4.8.0, els missatges per a la DEPURACIÓ de nivell (0) no s'inclouen en els binaris llançats.<br><br>**Paràmetres:** Nivell (vegeu QtMsgType[)](https://doc.qt.io/qt-5/qtglobal.html#QtMsgType-enum)<br><br>**Exemples:**  <br>Habilita el mode de depuració i estableix el nivell de depuració a 0<br>  qlcplus -d  <br>qlcplus --debug  <br>  <br>Activa el mode de depuració i estableix el nivell de depuració a 3: <br>qlcplus -d 3 |

|     |
| --- |
| **-f o --fullscreen**<br><br>**Descripció:** Inicia l'aplicació en mode de pantalla completa<br><br>** Paràmetres:** Mètode (ja sigui 'normal' o 'redimensionar')<br><br>**Exemples:**  <br>Digues al gestor de finestres que doni espai a tota la pantalla a QLC+<br>: qlcplus  -f<br>qlcplus  --fullscreen<br>qlcplus -f normal  <br>qlcplus --fullscreen normal  <br>  <br>Redimensiona QLC+ per ocupar tot l'espai de la pantalla (útil en sessions X11 personalitzades sense un gestor de finestres): <br>qlcplus -f resize <br>qlcplus --fullscreen resize |

|     |
| --- |
| **-g o --log**<br><br>**Descripció:** Registra els missatges de depuració a un fitxer (`$HOME/QLC+.log`)<br><br>**Paràmetres:**1 Cap<br><br>**Exemples:** <br>Habilita els missatges de depuració i emmagatzema'ls per registrar <br>qlcplus -d 0 -g <br>qlcplus --debug 0 --log |

|     |
| --- |
| **-h o --help**<br><br>**Descripció:** Mostra l'ajuda de la línia d'ordres (només en Linux i OS X)<br><br>**Paràmetres:** Cap**0 **1**Exemples:** <br>Mostra l'ajuda de la línia d'ordres: <br>qlcplus -h <br>qlcplus --help |

|     |
| --- |
| **-k o --kiosk**<br><br>**Descripció:** Activa el mode quiosc (només és visible la [consola virtual](/virtual-console) i l'aplicació està bloquejada en [mode d'operació](/basics/glossary-and-concepts#modes))<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Inicia l'aplicació en mode quiosc:  <br>qlcplus -k  <br>qlcplus --kiosk |

|     |
| --- |
| **-l o** --locale<br><br>** Descripció:** Utilitza l'idioma indicat per a la traducció<br><br>**Paràmetres:** Codi d'idioma (actualment admès: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Exemples:**  <br>Utilitza l'idioma finès:  <br>qlcplus -l fi_FI  <br>qlcplus --locale fi_FI |

|     |
| --- |
| **-m o --nowm**<br><br>**Descripció:** Informa l'aplicació que el sistema no proporciona un gestor de finestres. Per tant, QLC+ afegirà alguns controls addicionals per tancar les finestres.<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Iniciar QLC+ sense gestor de finestres:  <br>qlcplus -m  <br>qlcplus --nowm |

|     |
| --- |
| **-n o --nogui**<br><br>**Descripció:** Inicia l'aplicació amb la interfície gràfica oculta (només Raspberry Pi)<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Inicia QLC+ sense interfície gràfica visible:  <br>qlcplus -n  <br>qlcplus --nogui |

|     |
| --- |
| **-o o --open**<br><br>**Descripció:**Obre el fitxer de l'espai de treball donat<br><br>**Paràmetres:** Nom del fitxer<br><br>**Exemples:**  <br>Obre mydesk.qxw:<br> qlcplus -o mydesk.qxw  <br>qlcplus --open mydesk.qxw |

|     |
| --- |
| **-p o --operate**<br><br>**Descripció:** Inicia l'aplicació en mode [Operate](/basics/glossary-and-concepts#modes).<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Iniciar QLC+ en mode d'operació:  <br>qlcplus -p  <br>qlcplus --operate |

|     |
| --- |
| **-v o --version**<br><br>**Descripció:** Mostra el número de versió actual de l'aplicació<br><br>**Paràmetres:** Cap**0 **1**Exemples:** <br>qlcplus -v <br>qlcplus --version |

|     |
| --- |
| **-w o --web**<br><br>**Descripció:** Activa l'accés remot a la web al port 9999<br><br>**Paràmetres:** Cap**0 **1**Exemples:** <br>qlcplus -w <br>qlcplus --web |

|     |
| --- |
| **-wp o --web-port**<br><br>**Descripció:** Utilitzar un port específic per a l'accés web<br><br>**Paràmetres:** Número de port<br><br>**Exemples:**  <br>qlcplus -wp 12345  <br>qlcplus --web-port 12345 |

|     |
| --- |
| **-wa o --web-auth**<br><br>**Descripció:** Activa l'accés web remot amb l'autenticació dels usuaris<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>qlcplus -wa  <br>qlcplus --web-auth |

|     |
| --- |
| **-a o --web-auth-file**<br><br>**Descripció:** Especifiqueu un fitxer on emmagatzemar les credencials d'autenticació bàsica d'accés web<br><br>**Paràmetres:** Nom del fitxer<br><br>**Exemples:**  <br>qlcplus -wa qlcplus_passwd  <br>qlcplus --web-auth-file qlcplus_passwd |
