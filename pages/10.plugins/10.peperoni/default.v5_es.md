---
title: Peperoni
date: '05:19 22-08-2023'
media_order: zadig-peperoni-usb.png
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

QLC+ se comunica con los dispositivos Peperoni a través de libusb, que está incluida en el instalador de QLC+, por lo que no se necesita ninguna DLL adicional. El dispositivo debe usar el driver **WinUSB**:

* Los dispositivos con firmware 0x1000 o posterior instalan el driver WinUSB automáticamente al conectarlos.
* Los dispositivos con firmware anterior necesitan que el driver WinUSB se instale manualmente con [Zadig](https://zadig.akeo.ie): abra Zadig, seleccione **Options > List All Devices**, elija el dispositivo Peperoni, seleccione **WinUSB** y haga clic en **Install Driver**. Como alternativa, actualice el firmware del dispositivo.
* Para el X-Switch, seleccione **libusbK** en lugar de WinUSB en Zadig, ya que WinUSB no puede cambiar la configuración USB del dispositivo.

![](zadig-peperoni-usb.png)
