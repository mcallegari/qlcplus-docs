---
title: uDMX
date: '05:20 22-08-2023'
media_order: zadig_udmx_windows.png
---

Introducción
------------

El plugin de output uDMX admite la interfaz USB-DMX [Anyma uDMX](https://www.anyma.ch/research/udmx/) en Linux, macOS y Windows.

Requisitos
------------

### Linux

En todas las distribuciones de Linux, necesita instalar libusb. Si instala QLC+ con el Ubuntu Software Center u otra herramienta de instalación automática, esta librería se instalará automáticamente por usted.

### macOS

En Apple macOS, no necesita ningún driver en absoluto, ya que QLC+ usa la interfaz USB nativa de macOS.

### Windows

QLC+ se comunica con los dispositivos uDMX a través de libusb, que está incluida en el instalador de QLC+, por lo que no se necesita ninguna DLL adicional. El dispositivo debe usar el driver **WinUSB**, que se puede instalar con [Zadig](https://zadig.akeo.ie): abra Zadig, seleccione **Options > List All Devices**, elija el dispositivo uDMX, seleccione **WinUSB** y haga clic en **Install Driver**.

![](zadig_udmx_windows.png)

Ajuste fino
------

Es posible cambiar la frecuencia de frame DMX para todos los dispositivos uDMX mediante una clave de configuración oculta en cada plataforma. Esta clave indica a QLC+ cuántas veces se debe enviar cada frame DMX (512 canales) al universo por segundo. Un valor de "30" significa 30 veces por segundo (30Hz). Consulte la sección uDMX de [Ajuste manual de parámetros](/advanced/parameters-tuning#3-udmx-frequency)
