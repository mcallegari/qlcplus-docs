---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ suporta una sèrie de paràmetres de línia d'ordres per automatitzar/ampliar algunes funcionalitats en iniciar-se.  
L'ús de paràmetres de línia d'ordres pot ser complicat depenent del sistema operatiu que utilitzeu:

**Linux**: simplement obriu un terminal i escriviu `qlcplus-qml` seguit dels paràmetres que necessiteu<br>
**Windows**: creeu una drecera de qlcplus-qml.exe (normalment ubicat a C:\\QLC+) al vostre escriptori. Feu clic dret a la drecera i seleccioneu "Propietats". Al camp "Objectiu" veureu una cosa com `C:\\QLC+\\qlcplus-qml.exe`. Allà podeu afegir paràmetres de línia d'ordres. Quan acabeu feu clic a D'acord.<br>
Per exemple, per forçar l'idioma alemany a l'inici, modifiqueu la línia d'ordres de la drecera així:

![](../command-line-v5.png)

**OSX**: Aquest és el cas més difícil, ja que QLC+ a OSX s'inclou en un paquet DMG. Cal obrir un terminal i fer "cd" al DMG de QLC+ així:<br>`cd QLC+.app\\Contents\\MacOS`<br>
Quan hàgiu acabat, escriviu `./qlcplus-qml` seguit dels paràmetres que necessiteu.

|     |
| --- |
| **-o o --open**<br><br>**Descripció:** Obre el fitxer d'espai de treball indicat<br><br>**Paràmetres:** Nom del fitxer<br><br>**Exemples:**  <br>Obre sample.qxw:  <br>qlcplus-qml -o sample.qxw  <br>qlcplus-qml --open sample.qxw |

|     |
| --- |
| **-9 o --openlast**<br><br>**Descripció:** Obre el fitxer de projecte de l'última sessió<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Obre l'últim fitxer obert:  <br>qlcplus-qml -9  <br>qlcplus-qml --openlast |

|     |
| --- |
| **-f o --fullscreen**<br><br>**Descripció:** Inicia l'aplicació en mode de pantalla completa<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Digueu al gestor de finestres que doni tot l'espai de la pantalla a QLC+:  <br>qlcplus-qml -f  <br>qlcplus-qml --fullscreen |

|     |
| --- |
| **-h o --help**<br><br>**Descripció:** Mostra l'ajuda de la línia d'ordres (només a Linux i macOS)<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Mostra l'ajuda de la línia d'ordres:  <br>qlcplus-qml -h  <br>qlcplus-qml --help |

|     |
| --- |
| **-3 o --no3d**<br><br>**Descripció:** Desactiva el subcontext de previsualització 3d<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Desactiva la previsualització 3d:  <br>qlcplus-qml -3  <br>qlcplus-qml --no3d |

|     |
| --- |
| **-k o --kiosk**<br><br>**Descripció:** Activa el mode quiosc (només és visible la [consola virtual](/virtual-console)<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Inicia l'aplicació en mode quiosc:  <br>qlcplus -k  <br>qlcplus --kiosk |

|     |
| --- |
| **-l o --locale**<br><br>**Descripció:** Utilitza l'idioma indicat per a la traducció<br><br>**Paràmetres:** Codi d'idioma (actualment admesos: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Exemples:**  <br>Utilitza l'idioma finès:  <br>qlcplus-qml -l fi_FI  <br>qlcplus-qml --locale fi_FI |

|     |
| --- |
| **-m o --nowm**<br><br>**Descripció:** Informa l'aplicació que el sistema no proporciona un gestor de finestres. QLC+ afegirà per tant alguns controls addicionals per tancar les finestres.<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Inicia QLC+ sense gestor de finestres:  <br>qlcplus-qml -m  <br>qlcplus-qml --nowm |

|     |
| --- |
| **-v o --version**<br><br>**Descripció:** Mostra el número de versió actual de l'aplicació<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>qlcplus-qml -v  <br>qlcplus-qml --version |

|     |
| --- |
| **-w o --web**<br><br>**Descripció:** Activa l'accés web remot al port 9999<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>qlcplus-qml -w  <br>qlcplus-qml --web |

|     |
| --- |
| **-wp o --web-port**<br><br>**Descripció:** Utilitza un port específic per a l'accés web<br><br>**Paràmetres:** Número de port<br><br>**Exemples:**  <br>qlcplus-qml -wp 12345  <br>qlcplus-qml --web-port 12345 |

|     |
| --- |
| **-wa o --web-auth**<br><br>**Descripció:** Activa l'accés web remot amb autenticació d'usuaris<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>qlcplus-qml -wa  <br>qlcplus-qml --web-auth |

|     |
| --- |
| **-a o --web-auth-file**<br><br>**Descripció:** Especifica un fitxer on emmagatzemar les credencials d'autenticació bàsica d'accés web<br><br>**Paràmetres:** Nom del fitxer<br><br>**Exemples:**  <br>qlcplus-qml -wa qlcplus_password  <br>qlcplus-qml --web-auth-file qlcplus_password |

|     |
| --- |
| **-d o --debug**<br><br>**Descripció:** Activa el mode de depuració. Tingueu en compte que els missatges de depuració no s'inclouen als binaris publicats.<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Activa el mode de depuració:  <br>qlcplus-qml -d  <br>qlcplus-qml --debug  <br>  |

|     |
| --- |
| **-g o --log**<br><br>**Descripció:** Registra els missatges de depuració a un fitxer (`$HOME/QLC+.log`)<br><br>**Paràmetres:** Cap<br><br>**Exemples:**  <br>Activa els missatges de depuració i emmagatzema'ls al registre  <br>qlcplus -d -g  <br>qlcplus --debug --log |
