---
title: 'Preguntas y respuestas'
date: '08:32 21-08-2023'
media_order: dmx-usb-settings.png
---

En esta página encontrará las preguntas más comunes que pueden surgir al empezar a usar QLC+.  
Aquí puede encontrar la respuesta directamente o encontrar ayuda para orientarse en la dirección correcta.  

#### Pregunta #1: QLC+ no detecta mi dispositivo USB

**R:** QLC+ es compatible con una amplia variedad de dispositivos USB. En primer lugar, debe comprobar si la conexión 
física es correcta. Normalmente, un LED en su dispositivo debería indicar si está encendido y funcionando correctamente.

Si está usando Windows y su dispositivo está fabricado por Peperoni o Velleman, lea la 
información sobre cómo hacerlos funcionar en estas páginas de ayuda. Por cuestiones de licencia, ambos necesitan un archivo
DLL adicional para funcionar. Consulte el [plugin de salida Peperoni](/plugins/peperoni) o el [plugin de salida Velleman](/plugins/velleman)

Si está usando Linux, compruebe si su distribución detectó el dispositivo al conectarlo. Básicamente,
el comando `dmesg` debería indicarle algo.

#### Pregunta #2: Tengo varios [botones](/virtual-console/button) en mi Virtual Console. Necesito una forma de desactivar el botón actualmente activo cuando activo otro. ¿Cómo puedo hacerlo?

**R:** Simplemente coloque sus botones dentro de un [Solo Frame](/virtual-console/solo-frame). Hace exactamente eso.

#### Pregunta #3: Acabo de actualizar mi Mac a Mavericks (o posterior) y mi adaptador USB DMX no transmite ningún dato.

**R:** El problema está en un driver de Apple llamado AppleUSBFTDI, que toma el control de cualquier
dispositivo basado en FTDI detectado en el sistema.

Hay varias formas de resolver el problema, pero básicamente el resultado es el mismo: el driver de Apple debe desactivarse.

Consulte la página dedicada para entender cómo [desactivar el driver Apple FTDI](/plugins/disable-apple-serial-vcp-driver)

De lo contrario, puede descargar la herramienta [ENTTEC FTDI Driver Control](https://www.dmxis.com/release/FtdiDriverControl.zip)
e intentar activar/desactivar el driver de Apple con ella.

**Nota 1: esto puede comprometer el comportamiento de otros dispositivos USB, así que hágalo solo si sabe lo que está haciendo.**

**Nota 2: cada vez que Mac OS recibe una actualización, es necesario repetir este procedimiento.**

**Nota 3: lo más probable es que, al desactivar/activar el driver de Apple, deba reiniciar su Mac**

#### Pregunta #4: ¿Dónde se encuentra la carpeta de usuario de QLC+ en mi sistema?

**R:** La carpeta de usuario es donde se guardan los fixtures de usuario, los perfiles de input, los scripts RGB y las plantillas MIDI.

Cambia según el sistema operativo:

* **Linux**: es una carpeta oculta en el directorio home de su usuario: `$HOME/.qlcplus`
* **Windows**: es una carpeta en su directorio de usuario (p. ej. <Username>): `C:\\Users\\<Username>\\QLC+`
* **Mac OS**: se encuentra en el directorio `Library` de su usuario: `$HOME/Library/Application\\ Support/QLC+`

Puede acceder a cualquiera de estas carpetas desde una terminal con el comando `cd`. Por ejemplo:

`cd $HOME/Library/Application\\ Support/QLC+`

Tenga en cuenta que los fixtures y perfiles de input que se encuentren en la carpeta de usuario tendrán precedencia sobre
los mismos archivos en la carpeta de sistema de QLC+. 

También puede guardar [Definiciones de Fixture](/basics/glossary-and-concepts#fixtures) personalizadas y
[Perfiles de Input](/input-output/input-profiles) en la misma carpeta que su proyecto; QLC+ los encontrará
cuando abra ese proyecto.

#### Pregunta #5: ¿Dónde se encuentra la carpeta de sistema de QLC+ en mi sistema?

**R:** La carpeta de sistema es donde se instalan los recursos de QLC+ (fixtures, perfiles de input, scripts RGB, etc.)
y cambia según el sistema operativo:

* **Linux**: es una carpeta fija llamada `/usr/share/qlcplus`
* **Windows**: es la carpeta donde realmente instaló QLC+. Por defecto: `C:\\QLC+`
* **Mac OS**: es una carpeta dentro del paquete de QLC+ (archivo .app). Es posible explorar
  el contenido del paquete QLC+.app simplemente con el Finder. Solo haga clic derecho en el archivo y seleccione
  "Mostrar contenido del paquete".<br>De lo contrario, se puede acceder a la carpeta de sistema con una terminal,
  pero depende de dónde instaló QLC+. Por ejemplo, si arrastró QLC+ a
  Aplicaciones, será: `/Applications/QLC+.app/Contents/Resources`

#### Pregunta #6: QLC+ no puede reproducir algunos vídeos en Windows

**R:** QLC+ depende de las librerías Qt, que a su vez dependen de los filtros DirectShow instalados en el sistema.

Lamentablemente, los códecs básicos que admite Windows son bastante pobres, por lo que es necesario instalar un paquete
de códecs adicional como K-Lite, [disponible aquí](https://www.codecguide.com/download_kl.htm).

#### Pregunta #7: Tengo una pantalla 4k y todo en la interfaz de QLC+ se ve extremadamente pequeño

**R:** Debe añadir una opción a la línea de comandos de QLC+ para indicar a las librerías Qt que escalen automáticamente
la interfaz en una pantalla de alta densidad (High DPI). Ejemplos:

* **Linux (desde terminal)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 qlcplus`
* **Acceso directo de Windows**: `C:\\Windows\\System32\\cmd.exe /c "SET QT_AUTO_SCREEN_SCALE_FACTOR=1 && START /D ^"C:\\QLC+^" qlcplus.exe"`
* **Mac OS (desde terminal)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 QLC+.app\\Contents\\MacOS\\qlcplus`

En cualquier caso, consulte la página de [parámetros de línea de comandos](/advanced/command-line-parameters) para más información.

#### Pregunta #8: Mis luces parpadean. ¿Qué puedo hacer?

**R:** A veces, un adaptador USB DMX sin buffer o una línea DMX con ruido pueden hacer que algunos fixtures
parpadeen de forma inesperada. QLC+ le permite ajustar la frecuencia de salida para mitigar el efecto no deseado.
Tenga en cuenta que una buena tasa de refresco DMX debería rondar los 44Hz.<br>Aquí tiene un ejemplo que muestra el
panel de configuración de un clon de Open DMX. Puede acceder a él haciendo doble clic en la línea de output o seleccionando
una línea de output y haciendo clic en el icono ![](/basics/configure.png).

![dmx-usb-settings](dmx-usb-settings.png "dmx-usb-settings")

