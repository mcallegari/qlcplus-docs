---
title: MIDI
date: '05:15 22-08-2023'
---

Introducción
------------

Este plugin ofrece compatibilidad de input/output para el [protocolo MIDI](https://en.wikipedia.org/wiki/MIDI) y le da al usuario libertad para controlar parámetros típicos como canales, Notes, Program Change y Control Change.  
El plugin MIDI puede ser bastante potente usado en combinación con dispositivos MIDI como teclados, controladores MIDI (como el Behringer BCF2000 o el KORG nanoKONTROL) o un secuenciador de audio por software como Cubase o Ardour 3.  
El uso puede variar desde control fader-a-fader (el caso del BCF2000) hasta el disparo de secuencias para espectáculos sincronizados (conciertos controlados por metrónomo usando un secuenciador de audio)

Configuración
-------------

Al hacer clic en el botón de configuración ![](/basics/configure.png) aparecerá una ventana, mostrando todas las líneas de input y output MIDI detectadas.  
Cada línea tiene tres opciones que se pueden cambiar según sus necesidades:

* **Canal MIDI**: Es el canal por el que QLC+ recibirá o enviará datos a través del sistema MIDI. Los canales MIDI pueden ir de 1 a 16. El canal especial "1-16" indicará a QLC+ que reciba o envíe datos en cualquier canal MIDI.
* **Modo**: Es el modo MIDI que usará QLC+ para enviar datos a través del sistema MIDI. Este parámetro puede tomar tres valores posibles:
    * **Note velocity**: en este modo, QLC+ enviará datos usando la velocity de notas MIDI. Las notas MIDI pueden ir de 21 (A0) a 108 (C8) y cada nota puede tener una velocity de 0 a 127, que se duplicará dentro de QLC+ para ajustarse al rango DMX (0-255).
    * **Control Change**: es uno de los mensajes del protocolo MIDI (como Program Change) usado frecuentemente por los controladores MIDI. Cada dispositivo debería listar los mensajes CC compatibles en su manual de usuario, así que consúltelo antes de usar este modo. El rango CC puede ir de 0 a 127 y puede tener valores de 0 a 127, que se duplicarán dentro de QLC+ para ajustarse al rango DMX (0-255).
    * **Program Change**: es uno de los mensajes del protocolo MIDI (como Control Change) usado frecuentemente por los controladores MIDI. Cada dispositivo debería listar los mensajes PC compatibles en su manual de usuario, así que consúltelo antes de usar este modo. El rango PC puede ir de 0 a 127 y puede tener valores de 0 a 127, que se duplicarán dentro de QLC+ para ajustarse al rango DMX (0-255).
* **Mensaje de inicialización**: Es una lista de presets (plantillas) que contienen el mensaje de inicialización que QLC+ enviará al abrir un dispositivo MIDI antes de usarlo. A continuación se incluye una explicación detallada de esta funcionalidad.

> [!IMPORTANT]
> **Nota:** QLC+ sigue el estándar MIDI, en el que un mensaje "Note On" con velocity `0` se interpreta como "Note Off". Si su controlador o software envía mensajes Note On con velocity `0`, QLC+ no activará los botones de la Virtual Console. Para activar los controles, asegúrese de que los mensajes Note On usen una velocity distinta de cero. Este problema se ha observado con ProPresenter, y se puede resolver configurando una velocity distinta de cero.

Feedback
---------

El plugin MIDI es uno de los plugins de QLC+ que admite feedback. Cuando QLC+ detecta un dispositivo MIDI con una línea de output, activará la casilla de feedback en el [panel Input/Output](/input-output). Tenga en cuenta que output y feedback son excluyentes, por lo que no se pueden usar ambos al mismo tiempo.  
Si su dispositivo MIDI admite un canal de retorno, QLC+ puede enviarle feedback visual/mecánico. Dispositivos como el Behringer BCF2000 admiten esta función. Esto es muy útil durante espectáculos en vivo para tener conocimiento inmediato del estado actual de los faders mapeados en QLC+.  
  
Un pequeño truco que se puede lograr con QLC+ es usar el feedback como una línea de output MIDI genérica para disparar controladores/secuenciadores externos.  
Veamos algunos ejemplos:

* Input: **OSC** ---\> Output: **DMX USB** --\> Feedback: **MIDI**
* Input: **Enttec Wing** --\> Output: **ArtNet** --\> Feedback: **MIDI**

KORG nanoPAD Eje X
-------------------

Por razones desconocidas, los valores de fábrica del nanoPAD no mapean el Eje X del área del pad. Para que funcione completamente con QLC+, descargue la utilidad de KORG (solo Windows y macOS) desde [aquí](http://i.korg.com/SupportPage.aspx?productid=415) y configure el Eje X como CC2 (Control Change #2).

Feedback LED del AKAI APC
----------------------

Al usar uno de los controladores AKAI APC, hay una función que puede ser muy útil: el feedback de color LED.  
El comportamiento predeterminado con los botones de la Virtual Console es: valor = 0: LED apagado, valor = 255: LED verde  
Esto se puede personalizar al seleccionar un canal de input, presionando el botón "Custom feedback".  
Se muestra una nueva área, ofreciendo la posibilidad de introducir un valor inferior y uno superior. Esto se traduce básicamente en qué valores debe enviar QLC+ para los estados on/off de los botones.  
Dado que el protocolo MIDI funciona en un rango de valores de 0-127, y QLC+ funciona en el rango DMX de 0-255, la siguiente tabla le indica directamente los valores que debe introducir para obtener el color deseado de un LED del APC. Básicamente están tomados de los manuales de APC y duplicados.

| Valor | Color del LED |
| --- | --- |
| 0   | Apagado |
| 2   | Verde |
| 4   | Verde parpadeando |
| 6   | Rojo |
| 8   | Rojo parpadeando |
| 10  | Amarillo |
| 12  | Amarillo parpadeando |
| 14-255 | Verde |

Es interesante notar que no necesariamente debe mantener 0 como valor inferior. Por ejemplo, con inferior = 6 y superior = 2, el resultado será: Función apagada -> LED rojo, Función encendida -> LED verde.

Reloj de pulso MIDI (MIDI beat clock)
---------------

Desde la versión 4.5.0, QLC+ admite el [MIDI beat clock](https://en.wikipedia.org/wiki/MIDI_beat_clock)  
No debe confundirse con el [MIDI timecode](https://en.wikipedia.org/wiki/MIDI_timecode); el MIDI beat clock es una señal útil para sincronizar dispositivos basados en BPM, como una caja de ritmos, con sus luces controladas por QLC+.  
Se han mapeado dos canales MIDI especiales en QLC+ para controlar sus widgets de [Virtual Console](/virtual-console) con un beat clock.  
Aquí una breve explicación de los canales especiales:

* **Canal 530**: Se envía una señal por este canal cuando un beat clock inicia o se detiene.
* **Canal 531**: Esta señal se envía en cada BPM. QLC+ no tiene en cuenta los compases (p. ej. 3/4, 4/4, 7/8), así que al configurar su reloj MIDI debe considerar cómo lo manejará QLC+.

  
**Consejo**: Si su controlador está configurado para trabajar a un BPM alto (p. ej. 180-200), puede resultarle difícil captar la señal de inicio. Un truco para hacerlo es captar la señal de parada. Ejemplo:  

1.  Active la autodetección de widgets de la Virtual Console de QLC+
2.  Presione play en su dispositivo generador del MIDI beat clock. QLC+ detectará el canal 530 y cambiará muy rápidamente al 531
3.  Detenga la reproducción en su dispositivo de MIDI beat clock. QLC+ detectará el canal 530 de nuevo.
4.  Desactive la autodetección de widgets de la Virtual Console de QLC+

De forma similar, también puede captar la señal de beat. Simplemente desactive el proceso de autodetección antes de detener la reproducción en su controlador de beat (invierta los pasos 3 y 4).

Mensaje de inicialización MIDI
---------------------------

Puede haber casos en los que su dispositivo MIDI necesite algunos comandos para pasar a un modo de funcionamiento específico  
El protocolo MIDI puede gestionar esto mediante SysEx. Estos son mensajes particulares para indicar a un dispositivo MIDI cómo comportarse.  
QLC+ puede usar una plantilla XML para lograr esto, que se puede seleccionar en el panel de configuración MIDI.  
Aquí un ejemplo de cómo se ve una plantilla:  

&lt;!DOCTYPE MidiTemplate&gt;
&lt;MidiTemplate&gt;
 &lt;Creator&gt;
  &lt;Author&gt;Your name&lt;/Author&gt;
 &lt;/Creator&gt;
 &lt;Description&gt;A brief description of what the template does.&lt;/Description&gt;
 &lt;Name&gt;Template name to be displayed by QLC+&lt;/Name&gt;
 &lt;InitMessage&gt;F0 47 00 7B 60 00 04 41 09 00 05 F7&lt;/InitMessage&gt;
&lt;/MidiTemplate&gt;

Puede crear las que necesite y colocarlas en su carpeta MidiTemplates.  
Es bienvenido a enviarlas en el foro de QLC+.

Mapa de canales
-----------------

Para gestionar una combinación de varios mensajes MIDI (Notes, PC, CC, etc.), QLC+ los remapea en un orden secuencial.  
A continuación, los números de canal que se deben usar en el [editor de Input Profile](/input-output/input-profiles):

| Canal | Mensaje MIDI |
| --- | --- |
| 1   | Control Change 1 |
| ... | ... |
| 128 | Control Change 128 |
| 129 | NOTE ON/NOTE OFF 1 |
| ... | ... |
| 256 | NOTE ON/NOTE OFF 128 |
| 257 | NOTE AFTERTOUCH 1 |
| ... | ... |
| 384 | NOTE AFTERTOUCH 128 |
| 385 | Program Change 1 |
| ... | ... |
| 512 | Program Change 128 |
| 513 | Channel Aftertouch |
| 514 | Pitch Wheel |
| 530 | MIDI Beat Clock: Start/Continue |
| 531 | MIDI Beat Clock: Beat |
| 532 | MIDI Beat Clock: Stop |

En modo OMNI, sume 4096 * número de canal
