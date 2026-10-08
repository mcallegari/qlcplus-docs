---
title: Peperoni
date: '05:19 22-08-2023'
---

Introducción
--------------

El plugin de output Peperoni admite los dispositivos de output USB-DMX producidos por [Peperoni Light](http://www.peperoni-light.de/products1.htm).

Requisitos
--------------

### Linux

En todas las distribuciones de Linux, necesita instalar libusb. Si instala QLC+ con el Ubuntu Software Center u otra herramienta de instalación automática, esta librería se instalará automáticamente por usted.

### Mac OS X

No se necesita nada especial para Mac OS X. Todos los componentes necesarios ya están incluidos dentro del paquete de la aplicación Q Light Controller Plus, ya que QLC+ usa la interfaz USB nativa de OS X.

### Windows

Debe instalar los [drivers de Windows Peperoni USBDMX](http://www.lighting-solutions.de/support/driver.html). Normalmente estos vienen en un CD junto con el dispositivo Peperoni que ha comprado.  
Si después de instalar el driver, QLC+ sigue sin detectar su dispositivo Peperoni, copie el archivo usbdmx.dll que se encuentra dentro del paquete ZIP del driver (carpeta i386) en la carpeta principal de QLC+.

* Descomprima el paquete del driver en una carpeta de su disco duro.
* Conecte el dispositivo peperoni a un puerto USB.
* Si está ejecutando una versión de 32 bits de Windows, indique al asistente de "Nuevo hardware encontrado" que busque el driver en **windows/i386**.
* Si está ejecutando una versión de 64 bits de Windows, indique al asistente de "Nuevo hardware encontrado" que busque el driver en **windows/ia64** o **windows/amd64**.
