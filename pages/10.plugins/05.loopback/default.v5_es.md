---
title: Loopback
date: '05:14 22-08-2023'
---

Introducción
------------

El plugin Loopback proporciona una forma de controlar widgets de [Virtual Console](/virtual-console) desde Scenes y otras [Functions](/basics/glossary-and-concepts#functions). Los datos que QLC+ envía al puerto de Output se reenvían de vuelta al puerto de Input, donde se pueden usar para control externo. Obviamente, el puerto de Output y el puerto de Input pueden estar conectados a universos diferentes.

El plugin proporciona 4 líneas independientes.

Este plugin es principalmente para usuarios avanzados; a diferencia de otros plugins de input/output, este plugin no controla ningún dispositivo real.

Configuración
-------------

El plugin Loopback no tiene ninguna configuración. Simplemente conecte Input y Output a los universos deseados.

Ejemplos
--------

### Botones que establecen un slider (submaster o normal) a un valor predefinido

Estos botones pueden tener un tiempo de fade asociado, de modo que estos cambios pueden ser graduales.

Pasos:

1.  Configure un universo para el output de Loopback (U1), y configure el universo de input del slider como Loopback Input (U2). Supongamos que el control externo de los sliders está configurado en el canal 14.
2.  Añada un canal dimmer a U1 en la dirección 14. En el diálogo de modificadores de canal, configúrelo como LTP (para que si el botón se apaga, el slider no vaya a cero).
3.  Cree escenas con los valores de slider deseados para el canal 14 en el universo U1. También puede establecer tiempos de fade.
4.  Cree botones para las escenas.
