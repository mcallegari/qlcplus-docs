---
title: HID
date: '05:13 22-08-2023'
---

Introducción
------------

El plugin HID admite el [sistema HID](https://en.wikipedia.org/wiki/Human_interface_device) en Windows y Linux.  
HID es una forma genérica de mapear dispositivos de input/output como joysticks, touchpads, teclados, ratones, etc.  
El plugin HID de QLC+ pretende admitir únicamente joysticks y el adaptador FX5 USB DMX.

Requisitos
------------

No se necesita ningún requisito especial para este plugin. Solo asegúrese de que su sistema operativo reconozca realmente el dispositivo que va a usar. En Linux podría necesitar algunos módulos del kernel (normalmente incluidos en las distribuciones modernas) y en Windows un driver proporcionado por el fabricante del dispositivo.

Joysticks
---------

QLC+ intenta detectar las funcionalidades específicas del joystick, como ejes y botones, como canales individuales que se pueden mapear a los widgets de su Virtual Console.  
Los ejes y botones son mapeados por QLC+ en orden secuencial, así que por ejemplo si su joystick admite 2 ejes y 4 botones, aparecerán en los diálogos de mapeo de input así:  

* canal 1: Eje X
* canal 2: Eje Y
* canal 3: Botón 1
* canal 4: Botón 2
* canal 5: Botón 3
* canal 6: Botón 4

Interfaz Nodle USB DMX
-----------------------

La interfaz Nodle USB DMX está disponible en dos versiones: la versión de kit para autoconstrucción se llama
[Nodle U1](https://www.dmxcontrol-projects.org/en/projects/nodle-u1-interface.html) y la versión prefabricada se llama [Nodle R4S](https://www.dmxcontrol-projects.org/en/projects/nodle-r4s-interface.html) (lista para el espectáculo).

Ambas pueden recibir y enviar datos DMX de forma normal, pero también pueden fusionar DMX internamente. Cuando se activa mediante el diálogo
de configuración, el dispositivo fusiona cualquier dato DMX proveniente de QLC+ (si está seleccionado como output) con todos
los datos DMX provenientes del input del dispositivo de manera HTP (Highest Takes Precedence).

Si se activa, el modo de fusión persiste incluso cuando se cierra QLC+, mientras el dispositivo esté encendido.
De esta manera, el dispositivo es transparente a los datos DMX entrantes y simplemente los reenvía.

El dispositivo almacena en búfer los datos DMX entrantes. Así, cuando se interrumpe la conexión DMX entrante, el último
frame DMX se repite hasta que lleguen más datos DMX o se reinicie el dispositivo.

Consulte el manual del producto para más información o resolución de problemas.

FX5 USB DMX
-----------

Aunque ya no está disponible, el adaptador FX5 USB DMX todavía es compatible tanto para output como para input de
datos DMX. Ofrece las mismas funcionalidades que el Nodle USB DMX. Consulte el manual del producto para la conexión y posibles problemas particulares.
