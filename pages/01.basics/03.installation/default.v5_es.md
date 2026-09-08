---
title: Instalación
taxonomy:
    category:
        - docs
---

Instalar QLC+ es bastante sencillo.
Simplemente vaya a la [página de descargas](https://www.qlcplus.org/download) y obtenga la versión que prefiera para el sistema operativo que esté utilizando.

## Windows

QLC+ en Windows se distribuye como un paquete .exe autoinstalable. Simplemente haga doble clic en el archivo y siga las instrucciones que se muestran.

Elija si desea instalar QLC+ en su ubicación estándar (C:\QLC+) o en otra carpeta como C:\Program Files.

No se requieren privilegios de administrador para instalar QLC+, a menos que desee asociar los archivos .qxw (archivos de proyecto) y .qxf (archivos de definición de fixture) a la aplicación correspondiente.
En ese caso, haga clic derecho en el archivo del instalador y ejecútelo como administrador.

**Tenga en cuenta** que la versión 4.x.x y la versión 5.x.x no pueden coexistir en la misma carpeta, así que si instala ambas, recuerde instalarlas en carpetas separadas.

## macOS

QLC+ en macOS se distribuye como un paquete DMG.

Simplemente haga doble clic en él y ejecute QLC+ directamente. También puede arrastrarlo y soltarlo en la carpeta Aplicaciones.

## Linux

El paquete oficial de QLC+ para Linux se distribuye como paquete Debian (.deb).

Para instalarlo, ejecute lo siguiente desde una terminal, en la carpeta donde descargó el paquete:
```
sudo apt install ./qlcplus_x.y.z.deb
```
Los usuarios avanzados familiarizados con las dependencias pueden considerar usar `sudo dpkg -i qlcplus_x.y.z.deb`.
