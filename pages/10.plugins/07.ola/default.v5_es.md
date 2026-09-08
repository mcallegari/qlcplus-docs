---
title: OLA
date: '05:17 22-08-2023'
---

Introducción
------------

El plugin OLA permite la comunicación directa entre QLC+ y el [framework OLA](https://wiki.openlighting.org/index.php/Open_Lighting_Architecture) en la misma máquina.

Requisitos
------------

El plugin OLA requiere que OLA esté instalado en el sistema.  
Dado que OLA no se ejecuta en Windows, solo los usuarios de Linux y macOS pueden beneficiarse de este plugin.  
Puede encontrar información sobre cómo descargar e instalar OLA [aquí](https://wiki.openlighting.org/index.php/Download_%26_Install_OLA).  
QLC+ necesita que el servidor OLA esté en ejecución para poder comunicarse con el framework OLA. Esto se puede hacer manualmente iniciando "olad" desde una terminal, o en el panel de configuración marcando "Run standalone OLA daemon".

Configuración
-------------

Al pulsar el botón de configuración sobre una línea de output OLA, aparecerá una pequeña ventana emergente mostrando la información básica de cómo se mapean los outputs de QLC+ frente a los universos de OLA.  
En la parte inferior, un botón de verificación le permitirá forzar el inicio del servidor OLA.

Configuración de OLA
---------

Cuando se haya asegurado de que todo funciona en QLC+ y haya comprobado cómo están mapeados los universos, puede configurar OLA para enviar la señal recibida desde QLC+ a un dispositivo DMX, ya sea por USB o por red.  
Aquí tiene una [introducción al uso de OLA](https://wiki.openlighting.org/index.php/Using_OLA).  
Básicamente necesita abrir un navegador web, conectarse a [http://localhost:9090](http://localhost:9090) o [http://127.0.0.1:9090](http://127.0.0.1:9090), añadir un universo con el mismo número mapeado en QLC+ y seleccionar la línea de output deseada.
