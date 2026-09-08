---
title: Art-Net
date: '05:06 22-08-2023'
---

Introducción
------------

QLC+ admite el [protocolo Art-Net](https://en.wikipedia.org/wiki/Art-Net) mediante un plugin de input/output que recibe y transmite paquetes en la red.  
No se necesitan requisitos adicionales, ya que QLC+ tiene una implementación nativa del protocolo Art-Net que funciona en sistemas Linux, Windows y macOS.  
El plugin Art-Net puede enviar y recibir paquetes desde múltiples tarjetas de red, direcciones virtuales, el dispositivo de loopback (127.0.0.1) y múltiples universos por interfaz de red.  
Por defecto, los paquetes Art-Net se transmiten como UDP, usando el puerto predeterminado 6454 y la dirección de broadcast de la interfaz seleccionada (p. ej. 192.168.0.255). Al usar el dispositivo de loopback, los paquetes siempre se transmiten usando la dirección 127.0.0.1.  
Al transmitir múltiples universos en la misma interfaz, los paquetes se enviarán por defecto con un ID de universo Art-Net igual al número de universo de QLC+ menos 1.  
  
Por ejemplo:  
Universo 1 de QLC+ --> Universo 0 de Art-Net  
Universo 2 de QLC+ --> Universo 1 de Art-Net  
...  
Universo 8 de QLC+ --> Universo 7 de Art-Net  
  
Esta elección se debe a algunos hechos:  
1- El primer universo Art-Net válido es el 0, no el 1  
2- El primer universo aceptado por dispositivos Art-Net-DMX comerciales como eDMX y ODE es el 0, así que para que QLC+ funcione de fábrica, el primer universo Art-Net debe ser 0.  
  
Si la configuración anterior no cumple con los requisitos de su red, lea el siguiente capítulo.

Configuración
-------------

Al hacer clic en el botón de configuración ![](/basics/configure.png), se mostrará un pequeño diálogo con 2 pestañas: la Configuración de Universos y el Árbol de Nodos.  
  
**Configuración de Universos**: después de que un universo de QLC+ se haya patcheado con un input u output Art-Net, se mostrará una entrada en esta lista, permitiendo configurar manualmente los parámetros deseados que utilizará el plugin Art-Net.  
Las líneas de input no tienen parámetros particulares, mientras que una línea de output se puede configurar con lo siguiente:  

* **Dirección IP**: Es la dirección IP de destino a la que el plugin Art-Net transmitirá los paquetes. Por defecto se usa una dirección de broadcast (que termina en .255), y estableciendo esto en el rango 1-254, Art-Net transmitirá un universo de QLC+ en modo unicast. Si su red Art-Net usa un simple hub, la dirección IP de output es irrelevante, ya que broadcast o unicast no supone ninguna diferencia. Sin embargo, si usa un switch de red, el unicast es fundamental para equilibrar la congestión de la red, ya que cada puerto del switch está asociado a una IP de red y solo recibirá los paquetes con esa IP de destino.  
    **Nota**: No configure la dirección IP de output con la misma dirección IP de su nodo transmisor (p. ej. el PC donde se ejecuta QLC+), ya que esto es simplemente incorrecto y puede provocar un bucle de red. Si necesita comunicarse con un nodo Art-Net que se ejecuta en la misma máquina donde se ejecuta QLC+, use en su lugar el dispositivo de loopback (127.0.0.1).
* **Universo Art-Net**: Es el universo Art-Net que se escribirá realmente en cada paquete transmitido. Al configurar este parámetro, puede usar cualquier universo de QLC+ para transmitir al universo Art-Net deseado.
* **Modo de transmisión**: Aquí puede seleccionar si QLC+ debe transmitir universos completos o parciales.  
    _Standard_ significa que los universos DMX se transmiten solo cuando al menos un canal DMX cambia, o cada 2 segundos para refrescar los valores del receptor.  
    _Full_ significa que los 512 canales DMX de un universo se transmiten a la velocidad del reloj interno de QLC+ (50Hz), produciendo una tasa de bits fija de aproximadamente 250kbps.  
    _Partial_, en cambio, significa que QLC+ transmitirá solo el canal DMX realmente usado en un universo, comenzando desde el canal 1. Por ejemplo, si sube el canal 3 de un fixture con dirección 50, el plugin Art-Net transmitirá solo 53 canales DMX, limitando así la tasa de transmisión. Use este ajuste solo si el nodo Art-Net receptor admite transmisión parcial.

Los ajustes que difieran de los valores predeterminados del plugin se guardarán en su espacio de trabajo de QLC+, para aumentar la portabilidad de un proyecto entre diferentes plataformas, como distintos sistemas operativos o un PC y una Raspberry Pi.  
  
**Árbol de Nodos**: Esta pestaña muestra los nodos Art-Net descubiertos en la red, agrupados por interfaz de red.  
QLC+ siempre aparecerá en esta lista como un nodo participante en la red.  
Los nodos Art-Net se añaden a esta lista si admiten el mensaje ArtPoll/ArtPollReply; de lo contrario, no aparecerán. Esto no significa que no pueda comunicarse con ellos.

DMXKing eDMX y ENTTEC ODE
---------------------------

Si posee alguno de estos dispositivos, ambos tienen herramientas de configuración que pueden resultar útiles al trabajar con QLC+. Con ellas puede establecer varios parámetros para ajustar la mejor configuración de input/output de datos desde/hacia QLC+.  
Por ejemplo, si desea que el universo 3 de QLC+ envíe datos en el primer puerto de un eDMX, debe usar la herramienta de abajo para cambiar la dirección de universo del dispositivo a 2.  
  
Aquí los enlaces para descargar las herramientas:  
[Herramienta de configuración DMXKing eDMX](https://dmxking.com/downloads/eDMX_Configuration.zip)  
[ENTTEC Node Management Utility](https://www.enttec.com/?main_menu=Products&pn=79001)  

Compatibilidad
-------------

Los dispositivos Art-Net compatibles se enumeran en la página de [compatibilidad](https://www.qlcplus.org/discover/compatibility) del sitio web de QLC+.
