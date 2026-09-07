---
title: 'Ventana principal'
taxonomy:
    category: docs
child_type: docs
media_order: 'main-window-v5.png,main-window.png'
---

<style>
    #chapter p {
        text-align: left;
    }
</style>

### Capítulo 2

# Ventana principal

La ventana principal de QLC+ está formada por cuatro partes principales:

1.  Una barra superior con los atajos globales
2.  Una barra de submenú contextual que contiene los controles del contexto seleccionado
3.  El área de contexto principal, que puede ser un panel de vista previa u operativo
4.  Paneles laterales para actuar sobre la vista actual sin desperdiciar espacio

![](/main-window/main-window-v5.png)

La mayoría de los controles del software tienen tooltips, que aparecen al mantener el cursor del ratón sobre ellos durante un breve periodo.

### Barra superior (1)

La barra superior principal contiene los siguientes atajos (de izquierda a derecha):

* * *
#### ![](../basics/qlcplus.svg?resize=48,48) Menú de acciones globales

Este menú es accesible desde cualquier contexto de QLC+ y es un acceso directo a las operaciones principales del proyecto.  
Los elementos del menú se enumeran aquí:

![](../basics/filenew.svg) Crea un nuevo proyecto en blanco (CTRL+N)  
![](../basics/fileopen.svg?resize=48,48) Abre un proyecto existente (al pasar el ratón por encima, muestra una lista de archivos recientes) (CTRL+O)  
![](../basics/filesave.svg?resize=48,48) Guarda el proyecto actual (CTRL+S)  
![](../basics/filesaveas.svg?resize=48,48) Guarda el proyecto actual con un nuevo nombre  
![](../basics/import.svg?resize=48,48) Importa Fixtures y Funciones desde un proyecto existente  

![](../basics/undo.svg) Deshace la última operación  
![](../basics/redo.svg) Rehace la última operación deshecha  

![](../basics/network.svg) Configura los ajustes de red del cliente y del servidor (ya sea nativa o web interface)  
![](../basics/diptool.svg) Abre la herramienta de cálculo de interruptores DIP  
![](../basics/configure.svg) Abre el panel de configuración de la interfaz para ajustar colores, escala, etc..  
<i class="fa fa-maximize fa-2x"></i> Activa/desactiva el modo de pantalla completa (CTRL+F11)  
<i class="fa fa-earth-europe fa-2x"></i> Cambia el idioma de la interfaz (podría requerir reiniciar la aplicación)  
<i class="fa fa-circle-info fa-2x"></i> Muestra información sobre QLC+  

* * *

#### Botones de cambio de contexto

Al pulsar estos botones, se puede pasar de un contexto a otro.  
Los contextos pueden ayudar en la fase de diseño, en las operaciones en vivo o en la configuración de entrada/salida.  
Los contextos se pueden separar de la ventana principal haciendo clic con el botón derecho sobre su botón.  

![](../basics/editor.svg?resize=48,48) Ver [Fixtures and Functions](/fixtures-and-functions)  
![](../basics/virtualconsole.svg?resize=48,48) Ver la [Virtual Console](/virtual-console)  
![](../basics/simpledesk.svg?resize=48,48) Ver el [Simple Desk](/simple-desk)  
![](../basics/showmanager.svg?resize=48,48) Ver el [Show Manager](/show-manager)  
![](../basics/inputoutput.svg?resize=48,48) Ver el gestor de configuración [Input/Output](/input-output)

#### Ayudantes globales

La barra superior de la ventana principal incluye más ayudantes en el lado derecho de la pantalla.

![](../basics/dmxdump.svg?resize=48,48) Abre la ventana emergente [DMX Dump](dmx-dump) para crear Scenes rápidamente  
<i class="fa fa-wave-square fa-2x"></i>    Control de BPM: muestra el número de BPM actual y abre la ventana emergente [BPM Control](/bpm-system)  
![](../basics/stopall.svg?resize=48,48) Muestra el número de funciones en ejecución y permite detenerlas todas a la vez  


### Barra de subcontrol de contexto (2)

Esta es otra barra de menús que cambia según el contexto (o no está presente en absoluto), donde se puede seleccionar el modo de vista previa del contexto o encontrar una barra de herramientas con varios controles.  

* Fixtures And Functions muestra el modo de vista previa y los selectores de universo 
* Virtual Console muestra un selector de página
* Simple Desk muestra un selector de universo y reset
* Show Manager muestra los controles del editor y de reproducción
* Input/Output Manager no tiene barra de subcontrol

### Área de trabajo principal (3)

Aquí sucede todo. El panel activo depende del contexto que esté seleccionado en cada momento.

### Paneles laterales (4)

Los paneles laterales se introdujeron en la versión 5 para ahorrar espacio y proporcionar herramientas rápidas que mejoren la edición del proyecto.  
En estos paneles se pueden encontrar herramientas como:
* Fixture browser
* Editores de Fixtures, Funciones, Palettes o Widgets
* Lista de plugins de Input/Output, perfiles de entrada o widgets de la Virtual Console
