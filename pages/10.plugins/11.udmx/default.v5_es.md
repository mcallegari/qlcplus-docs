---
title: uDMX
date: '05:20 22-08-2023'
---

Introducción
------------

El plugin de output uDMX admite la interfaz USB-DMX [Anyma uDMX](https://www.anyma.ch/research/udmx/) en Linux y macOS.

Requisitos
------------

### Linux

En todas las distribuciones de Linux, necesita instalar libusb. Si instala QLC+ con el Ubuntu Software Center u otra herramienta de instalación automática, esta librería se instalará automáticamente por usted.

### macOS

En Apple macOS, no necesita ningún driver en absoluto, ya que QLC+ usa la interfaz USB nativa de macOS.

### Windows

Este dispositivo todavía no es compatible en Windows.

Ajuste fino
------

Es posible cambiar la frecuencia de frame DMX para todos los dispositivos uDMX mediante una clave de configuración oculta en cada plataforma. Esta clave indica a QLC+ cuántas veces se debe enviar cada frame DMX (512 canales) al universo por segundo. Un valor de "30" significa 30 veces por segundo (30Hz). Consulte la sección uDMX de [Ajuste manual de parámetros](/advanced/parameters-tuning#3-udmx-frequency)
