---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ admite numerosos parámetros de línea de comandos para automatizar/ampliar
algunas funcionalidades al inicio.
El uso de los parámetros de línea de comandos puede resultar complicado según
el sistema operativo utilizado:

**Linux**: basta con abrir una terminal y escribir `qlcplus5` seguido de
los parámetros necesarios<br>
**Windows**: crear un acceso directo de qlcplus5.exe (normalmente ubicado
en C:\\QLC+) en el escritorio. Hacer clic con el botón derecho en el acceso
directo y seleccionar "Propiedades". En el campo "Destino" aparecerá algo
como `C:\\QLC+\\qlcplus5.exe`. Allí se pueden añadir los parámetros de
línea de comandos. Al terminar, hacer clic en Aceptar.<br>
Por ejemplo, para forzar el idioma alemán al inicio, modificar la línea de
comandos del acceso directo de esta manera:

![](../command-line-v5.png)

**OSX**: este es el caso más complicado, ya que QLC+ en OSX se distribuye
dentro de un paquete DMG. Es necesario abrir una terminal y entrar en el DMG
de QLC+ con "cd", de esta manera:<br>`cd QLC+.app\\Contents\\MacOS`<br>
Hecho esto, escribir `./qlcplus5` seguido de los parámetros necesarios.

|     |
| --- |
| **-o o --open**<br><br>**Descripción:** Abre el archivo de workspace especificado<br><br>**Parámetros:** Nombre de archivo<br><br>**Ejemplos:**  <br>Abrir sample.qxw:  <br>qlcplus5 -o sample.qxw  <br>qlcplus5 --open sample.qxw |

|     |
| --- |
| **-9 o --openlast**<br><br>**Descripción:** Abre el archivo de proyecto de la última sesión<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Abrir el último archivo abierto:  <br>qlcplus5 -9  <br>qlcplus5 --openlast |

|     |
| --- |
| **-f o --fullscreen**<br><br>**Descripción:** Inicia la aplicación en modo de pantalla completa<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Indicar al gestor de ventanas que asigne a QLC+ todo el espacio de la pantalla:  <br>qlcplus5 -f  <br>qlcplus5 --fullscreen |

|     |
| --- |
| **-h o --help**<br><br>**Descripción:** Muestra la ayuda de línea de comandos (solo en Linux y macOS)<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Mostrar la ayuda de línea de comandos:  <br>qlcplus5 -h  <br>qlcplus5 --help |

|     |
| --- |
| **-3 o --no3d**<br><br>**Descripción:** Deshabilita el subcontexto de vista previa 3d<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Deshabilitar la vista previa 3d:  <br>qlcplus5 -3  <br>qlcplus5 --no3d |

|     |
| --- |
| **-k o --kiosk**<br><br>**Descripción:** Habilita el modo kiosco (solo es visible la [consola virtual](/virtual-console)<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Iniciar la aplicación en modo kiosco:  <br>qlcplus5 -k  <br>qlcplus5 --kiosk |

|     |
| --- |
| **-l o --locale**<br><br>**Descripción:** Utiliza el idioma especificado para la traducción<br><br>**Parámetros:** Código de idioma (actualmente admitidos: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Ejemplos:**  <br>Utilizar el idioma finlandés:  <br>qlcplus5 -l fi_FI  <br>qlcplus5 --locale fi_FI |

|     |
| --- |
| **-m o --nowm**<br><br>**Descripción:** Informa a la aplicación de que el sistema no proporciona un gestor de ventanas. Por tanto, QLC+ añadirá algunos controles adicionales para cerrar las ventanas.<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Iniciar QLC+ sin gestor de ventanas:  <br>qlcplus5 -m  <br>qlcplus5 --nowm |

|     |
| --- |
| **-v o --version**<br><br>**Descripción:** Muestra el número de versión actual de la aplicación<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>qlcplus5 -v  <br>qlcplus5 --version |

|     |
| --- |
| **-w o --web**<br><br>**Descripción:** Habilita el acceso web remoto en el puerto 9999<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>qlcplus5 -w  <br>qlcplus5 --web |

|     |
| --- |
| **-wp o --web-port**<br><br>**Descripción:** Utiliza un puerto específico para el acceso web<br><br>**Parámetros:** Número de puerto<br><br>**Ejemplos:**  <br>qlcplus5 -wp 12345  <br>qlcplus5 --web-port 12345 |

|     |
| --- |
| **-wa o --web-auth**<br><br>**Descripción:** Habilita el acceso web remoto con autenticación de usuarios<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>qlcplus5 -wa  <br>qlcplus5 --web-auth |

|     |
| --- |
| **-a o --web-auth-file**<br><br>**Descripción:** Especifica un archivo en el que almacenar las credenciales de autenticación básica para el acceso web<br><br>**Parámetros:** Nombre de archivo<br><br>**Ejemplos:**  <br>qlcplus5 -wa qlcplus_password  <br>qlcplus5 --web-auth-file qlcplus_password |

|     |
| --- |
| **-d o --debug**<br><br>**Descripción:** Habilita el modo debug. Tener en cuenta que los mensajes de debug no se incluyen en los binarios publicados.<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Habilitar el modo debug:  <br>qlcplus5 -d  <br>qlcplus5 --debug  <br>  |

|     |
| --- |
| **-g o --log**<br><br>**Descripción:** Registra los mensajes de debug en un archivo (`$HOME/QLC+.log`)<br><br>**Parámetros:** Ninguno<br><br>**Ejemplos:**  <br>Habilitar los mensajes de debug y guardarlos en el registro  <br>qlcplus5 -d -g  <br>qlcplus5 --debug --log |
