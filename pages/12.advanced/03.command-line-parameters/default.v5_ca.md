---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ suporta una sèrie de paràmetres de línia d'ordres per automatitzar/ampliar algunes funcionalitats en iniciar-se.  
L'ús de paràmetres de línia d'ordres pot ser complicat depenent del sistema operatiu que utilitzeu:

**Linux**: simplement obriu un terminal i escriviu `qlcplus5` seguit dels paràmetres que necessiteu<br>
**Windows**: creeu una drecera de qlcplus5.exe (normalment ubicat a C:\\QLC+) al vostre escriptori. Feu clic dret a la drecera i seleccioneu "Propietats". Al camp "Objectiu" veureu una cosa com `C:\\QLC+\\qlcplus5.exe`. Allà podeu afegir paràmetres de línia d'ordres. Quan acabeu feu clic a D'acord.<br>
Per exemple, per forçar l'idioma alemany a l'inici, modifiqueu la línia d'ordres de la drecera així:

![](../command-line-v5.png)

**OSX**: Aquest és el cas més difícil, ja que QLC+ a OSX s'inclou en un paquet DMG. Cal obrir un terminal i fer "cd" al DMG de QLC+ així:<br>`cd QLC+.app\\Contents\\MacOS`<br>
Quan hàgiu acabat, escriviu `./qlcplus5` seguit dels paràmetres que necessiteu.

|     |
| --- |
| **-o o --open**<br><br>**Descripció:** Obre el fitxer d'espai de treball indicat<br><br>**Paràmetres:** Nom del fitxer<br><br>**Exemples:**  <br>Obre sample.qxw:  <br>qlcplus5 -o sample.qxw  <br>qlcplus5 --open sample.qxw |

|     |
| --- |
| **-9 o --openlast**<br><br>**Descripció:** Obre el fitxer de projecte de l'última sessió<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Obre l'últim fitxer obert:  <br>qlcplus5 -9  <br>qlcplus5 --openlast |

|     |
| --- |
| **-f o --fullscreen**<br><br>**Descripció:** Inicia l'aplicació en mode de pantalla completa<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Digueu al gestor de finestres que doni tot l'espai de la pantalla a QLC+:  <br>qlcplus5 -f  <br>qlcplus5 --fullscreen |

|     |
| --- |
| **-h o --help**<br><br>**Descripció:** Mostra l'ajuda de la línia d'ordres (només a Linux i macOS)<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Mostra l'ajuda de la línia d'ordres:  <br>qlcplus5 -h  <br>qlcplus5 --help |

|     |
| --- |
| **-3 o --no3d**<br><br>**Descripció:** Desactiva el subcontext de previsualització 3d<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Desactiva la previsualització 3d:  <br>qlcplus5 -3  <br>qlcplus5 --no3d |

|     |
| --- |
| **-k o --kiosk**<br><br>**Descripció:** Activa el mode quiosc (només és visible la [consola virtual](/virtual-console)<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Inicia l'aplicació en mode quiosc:  <br>qlcplus5 -k  <br>qlcplus5 --kiosk |

|     |
| --- |
| **-l o --locale**<br><br>**Descripció:** Utilitza l'idioma indicat per a la traducció<br><br>**Paràmetres:** Codi d'idioma (actualment admesos: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Exemples:**  <br>Utilitza l'idioma finès:  <br>qlcplus5 -l fi_FI  <br>qlcplus5 --locale fi_FI |

|     |
| --- |
| **-m o --nowm**<br><br>**Descripció:** Informa l'aplicació que el sistema no proporciona un gestor de finestres. QLC+ afegirà per tant alguns controls addicionals per tancar les finestres.<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Inicia QLC+ sense gestor de finestres:  <br>qlcplus5 -m  <br>qlcplus5 --nowm |

|     |
| --- |
| **-v o --version**<br><br>**Descripció:** Mostra el número de versió actual de l'aplicació<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>qlcplus5 -v  <br>qlcplus5 --version |

|     |
| --- |
| **-w o --web**<br><br>**Descripció:** Activa l'accés web remot al port 9999<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>qlcplus5 -w  <br>qlcplus5 --web |

|     |
| --- |
| **-wp o --web-port**<br><br>**Descripció:** Utilitza un port específic per a l'accés web<br><br>**Paràmetres:** Número de port<br><br>**Exemples:**  <br>qlcplus5 -wp 12345  <br>qlcplus5 --web-port 12345 |

|     |
| --- |
| **-wa o --web-auth**<br><br>**Descripció:** Activa l'accés web remot amb autenticació d'usuaris<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>qlcplus5 -wa  <br>qlcplus5 --web-auth |

|     |
| --- |
| **-a o --web-auth-file**<br><br>**Descripció:** Especifica un fitxer on emmagatzemar les credencials d'autenticació bàsica d'accés web<br><br>**Paràmetres:** Nom del fitxer<br><br>**Exemples:**  <br>qlcplus5 -wa qlcplus_password  <br>qlcplus5 --web-auth-file qlcplus_password |

|     |
| --- |
| **-d o --debug**<br><br>**Descripció:** Activa el mode de depuració. Tingueu en compte que els missatges de depuració no s'inclouen als binaris publicats.<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Activa el mode de depuració:  <br>qlcplus5 -d  <br>qlcplus5 --debug  <br>  |

|     |
| --- |
| **-g o --log**<br><br>**Descripció:** Registra els missatges de depuració a un fitxer (`$HOME/QLC+.log`)<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Activa els missatges de depuració i emmagatzema'ls al registre  <br>qlcplus5 -d -g  <br>qlcplus5 --debug --log |
