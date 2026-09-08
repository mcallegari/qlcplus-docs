---
title: 'DMX USB'
date: '05:08 22-08-2023'
---

Introducción
------------

El plugin DMX USB admite una variedad de dispositivos USB-a-DMX basados en FTDI. 

Los dispositivos DMX USB compatibles se pueden encontrar en nuestra página de [compatibilidad](https://www.qlcplus.org/discover/compatibility).

Configuración
-------------

Los dispositivos DMX USB deberían detectarse automáticamente desde QLC+ y mostrarse en la lista de paneles de input/output.  
Si por alguna razón la autodetección falla, puede "forzar" el tipo de su adaptador DMX USB manualmente.  
Haga clic en el nombre de su dispositivo y abra el diálogo de configuración haciendo clic en el icono ![](/basics/configure.png) en la parte inferior derecha del panel.  
Verá una lista de dispositivos DMX USB actualmente conectados a su ordenador. Cada uno tiene un menú desplegable donde puede forzar el tipo de dispositivo.  
Aquí el significado de cada uno:

* **Open TX**: Enttec USB DMX Open (y clones) en modo output
* **Open RX**: Dispositivos FTDI genéricos en modo de recepción
* **Pro RX/TX**: Enttec USB DMX Pro o la mayoría de los dispositivos DMXKing
* **Pro Mk2**: Enttec USB DMX Pro Mk2 - hay disponibles 2 outputs DMX, 1 input DMX, 1 puerto MIDI IN y 1 puerto MIDI OUT
* **Ultra Pro**: DMXKing ultraDMX Pro con 2 outputs y 1 input
* **DMX4ALL**: DMX4ALL USB-DMX STAGE-PROFI MK2
* **Vince Tx**: Vince DMX512 USB en modo output

**Nota para usuarios de OSX:** Si su adaptador se detecta pero no produce ninguna salida, lo más probable es que encuentre la solución en la página de [Preguntas y respuestas](/basics/questions-and-answers) (Pregunta #3).  
**Nota 1**: Los dispositivos Eurolite USB-DMX512 Pro deben forzarse al modo "Pro RX/TX" para funcionar correctamente.  
**Nota 2**: En Windows, los clones Enttec open DMX pueden parpadear a 44Hz. Puede intentar reducir la frecuencia de output hasta que se resuelva el problema.

Requisitos
------------

### Linux

En todas las distribuciones de Linux, necesita instalar libftdi. Si instala QLC+ con el Ubuntu Software Center u otra herramienta de instalación automática, esta librería se instalará automáticamente por usted.  
En algunos casos, si el dispositivo no genera ninguna salida, puede ser útil añadir su usuario al grupo "dialout" con el siguiente comando:  
```
sudo adduser your\_user\_name dialout
```

### macOS

En Apple macOS, no necesita ningún driver en absoluto, ya que QLC+ usa la interfaz USB nativa de macOS. Instalar los drivers D2XX no debería causar ningún problema, pero **NO INSTALE los drivers VCP (Virtual COM Port)**, ya que definitivamente interferirán con QLC+. Si ha instalado previamente los drivers VCP, consulte las [guías de instalación de FTDI](https://ftdichip.com/document/installation-guides/) sobre cómo desinstalarlos.  
  
**Problemas en OSX Mavericks (o posterior)**: consulte [Preguntas y respuestas #3](/basics/questions-and-answers)

### Windows

En Microsoft Windows, el plugin necesita los [últimos drivers D2XX de FTDI](https://ftdichip.com/drivers/d2xx-drivers/). Normalmente, cuando se conecta un dispositivo FTDI por primera vez, Windows descargará automáticamente los drivers D2XX por usted, así que no es necesaria ninguna acción.  
Si eso no ocurre, consulte las [guías de instalación de FTDI](https://ftdichip.com/document/installation-guides/) para saber cómo instalar los drivers.  
**NO INSTALE los drivers VCP (Virtual COM Port)**, ya que probablemente interferirán con la interfaz D2XX.

Modos compatibles del ENTTEC DMX USB Pro
----------------------------

A continuación, una tabla que muestra los modos de E/S admitidos por QLC+ para dispositivos como el DMX USB Pro y el Pro Mk2.  
Si un modo no aparece aquí, significa que no está admitido por QLC+ o por el propio dispositivo debido a limitaciones de hardware, así que por favor no los reporte como incidencias en el foro de QLC+.  
  

|     |     |     |     |     |     |     |     |     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
|     | 1   | 2   | 3   | 4   | 5   | 6   | 7   | 8   | 9   | 10  | 11  | 12  | 13  | 14  |
| DMX1 IN | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |     |
| DMX1 OUT |     | o   |     |     | o   |     |     | o   |     |     | o   |     |     | o   |
| DMX2 OUT (1) |     |     | o   | o   | o   |     |     |     |     |     |     |     |     |     |
| MIDI IN (2) |     |     |     |     |     | o   | o   | o   |     |     |     | o   | o   | o   |
| MIDI OUT (2) |     |     |     |     |     |     |     |     | o   | o   | o   | o   | o   | o   |

  
(1) DMX2 OUT solo está disponible en el DMX USB Mk2 Pro  
(2) MIDI IN y MIDI OUT solo están disponibles en el DMX USB Mk2 Pro con un cable breakout de 5 vías. Las señales MIDI OUT se envían de 1 a 512 tal como se describe en el [mapa de canales del plugin MIDI](../midi#channels-map)  

Ajuste fino
------

**Nota: el ajuste manual nunca debería realizarse, excepto en casos muy particulares. ¡Úselo bajo su propia responsabilidad!**  
Es posible cambiar el tamaño de frame DMX para dispositivos Enttec Open (y similares) mediante una clave de configuración oculta en cada plataforma. Esta clave indica a QLC+ cuántos canales se deben transmitir en cada frame DMX, es decir, para un universo DMX (por defecto 512).  
Consulte la sección DMX USB Enttec Open de [Ajuste manual de parámetros](/advanced/parameters-tuning#2-dmx-usb-enttec-open-channels-number).
