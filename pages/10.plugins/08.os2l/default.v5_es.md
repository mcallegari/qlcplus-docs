---
title: OS2L
date: '05:18 22-08-2023'
---

Introducción
------------

El plugin OS2L permite la comunicación directa entre QLC+ y un host compatible con OS2L.  
Las especificaciones de OS2L se pueden encontrar en: [https://os2l.org](https://os2l.org/)  
Por el momento, el único host OS2L compatible es [Virtual DJ](https://www.virtualdj.com/).  
El plugin OS2L de QLC+ funcionará tanto en el mismo host (127.0.0.1) como en un host diferente con el sistema operativo de su elección (Windows, macOS, Linux)

Configuración - Virtual DJ
--------------------------

En primer lugar, debe indicarle a VDJ dónde enviar los mensajes OS2L.  
Abra los ajustes de VDJ, vaya al panel 'Options' y escriba 'os2l' en el cuadro de búsqueda superior.  
Modifique el campo 'os2lDirectIp' estableciendo la IP:puerto donde VDJ puede alcanzar QLC+. Por ejemplo, '127.0.0.1:9996' debería funcionar si QLC+ se ejecuta en el mismo PC (Windows) que VDJ.  
Una vez hecho, reinicie VDJ.  
  
Ahora vaya a QLC+, active el plugin OS2L en cualquier universo. Si ha configurado un puerto específico en VDJ, abra el diálogo de configuración de OS2L y establezca el mismo puerto allí.  
Una vez hecho, QLC+ comenzará a recibir señales de VDJ (el icono de joystick parpadeará junto al cuadro de Universo)

Clientes personalizados
--------------

Para admitir clientes personalizados, se debe configurar un Input Profile que mapee los mensajes OS2L a canales. El plugin OS2L escucha los siguientes eventos: `beat`, `cmd` y `btn`.

Un mensaje `beat` cambiará el valor del canal 8342 a 255 si se recibe. Ejemplo: `{"evt":"beat"}`.

Un mensaje `cmd` establecerá el canal indicado por `id` al valor indicado por `param`. Ejemplo: `{"evt": "cmd", "id": "1", "param": 255}`.

Un mensaje `btn` también se puede mapear. El canal se controla mediante un CRC del `name`. La forma más fácil de averiguar el canal es usar el mapeador de input automático al configurar el Input Profile. El valor enviado al canal es 255 en caso de `on`, o 0 en caso de `off`. Ejemplo: `{"evt":"btn","name":"Light Left 2","state":"on"}`.

