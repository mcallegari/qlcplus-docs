---
title: OSC
date: '05:18 22-08-2023'
---

Introducción
------------

QLC+ admite el [protocolo OSC](https://en.wikipedia.org/wiki/Open_Sound_Control) mediante un plugin de input/output que recibe y transmite paquetes en la red.  
No se necesitan requisitos adicionales, ya que QLC+ tiene una implementación nativa del protocolo OSC que funciona en sistemas Linux, Windows y OSX.  
El plugin OSC puede enviar y recibir paquetes desde múltiples tarjetas de red, direcciones virtuales, el dispositivo de loopback (127.0.0.1) y múltiples universos por interfaz de red.  
Por defecto, el plugin OSC escuchará en puertos a partir de 7700, más el universo de QLC+ menos uno.  
El output, en cambio, usará puertos a partir de 9000, más el universo de QLC+ menos uno.  
  
Por ejemplo:  
Universo 1 de QLC+ --> puerto de input OSC 7700, puerto de output 9000  
Universo 2 de QLC+ --> puerto de input OSC 7701, puerto de output 9001  
...  
Universo 8 de QLC+ --> puerto de input OSC 7707, puerto de output 9007  
  

Configuración
-------------

Al hacer clic en el botón de configuración ![](/basics/configure.png), se mostrará un pequeño diálogo con el panel de Configuración de Universos.  
  
Después de que un universo de QLC+ se haya patcheado con un input u output OSC, se mostrará una entrada en esta lista, permitiendo configurar manualmente los parámetros deseados que utilizará el plugin OSC.  
  
Para cada input u output OSC se pueden establecer los siguientes parámetros:

* **Puerto de input:** Si la línea patcheada está abierta para input, este parámetro define el puerto que QLC+ escuchará para recibir datos OSC de su controlador externo.
* **Dirección de output:** Si la línea patcheada está abierta para input, esta es la dirección IP de destino usada para enviar feedback a su controlador externo.  
    Si la línea patcheada está abierta para output, esta es la dirección IP de destino usada para enviar datos OSC en la red.  
    Los paquetes de output OSC se componen para obtener una ruta OSC como la siguiente: /universo de QLC+ - 1/dmx/canal DMX - 1  
    Por ejemplo, el canal 12 del universo 4 de QLC+ tendrá la siguiente ruta: /3/dmx/11  
    Todos los valores transmitidos por el plugin OSC usan el tipo float.
* **Puerto de output:** Si la línea patcheada está abierta para input, este es el puerto de destino usado para enviar feedback a su controlador externo.  
    Si la línea patcheada está abierta para output, este es el puerto de destino usado para enviar datos OSC en la red.

**Nota:** Al patchear una línea de Input+Feedback, la IP/puerto de output que necesita cambiar son los de la sección 'Inputs'. Simplemente deje la sección 'Outputs' con sus valores predeterminados.

Calculadora de canales
-------------

Si no es posible realizar la autodetección mediante el editor de input profile de un controlador OSC, esta herramienta puede ayudarle.  
Puede introducir la **ruta OSC** y QLC+ calculará el número de canal por usted. Básicamente es un hash de 16 bits de la ruta que QLC+ usa para representar un input OSC.  
**Nota:** Hay un desfase de 1 entre la calculadora y lo que ve en el Input Profile Editor. Esto es correcto, ya que los canales en QLC+ comienzan desde 1 y no desde 0. Lo que muestra la calculadora es el número de canal que realmente necesita escribir en un input profile o en su controlador OSC personalizado.

Controladores
-----------

QLC+ se ha probado con los siguientes controladores OSC:

* [Open Stage Control](https://openstagecontrol.ammd.net/)
* [TouchOSC](https://hexler.net/touchosc). Hay un input profile predefinido listo para usar con los layouts Mix16 y Automat5.
* [Pure Data](https://archive.flossmanuals.net/pure-data/network-data/osc.html)
