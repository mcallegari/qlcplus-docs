---
title: 'Fixtures y Funciones'
date: '14:33 23-06-2026'
taxonomy:
    category:
        - docs
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

El contexto **Fixtures y Funciones** es el espacio de trabajo principal de edición de la interfaz de usuario de la versión 5.
Aquí es donde se añaden y disponen los fixtures, se controlan sus canales, se organizan palettes y grupos de fixtures, y se crean y editan funciones como Scenes, Chasers, EFX y Shows.

El espacio de trabajo se divide en varias áreas:
* **Panel izquierdo** — añade fixtures, gestiona grupos y palettes, y controla los
  canales de los fixtures seleccionados.
* **Área de vista principal** — muestra los fixtures de una de cuatro formas (cuadrícula de Universo,
  canales DMX, escenario 2D o escenario 3D).
* **Panel derecho** — crea, edita y gestiona las funciones.
* **Panel inferior** — abre editores contextuales, como la consola de
  canales de la Scene.

Los paneles izquierdo y derecho están colapsados de forma predeterminada. Haga clic en uno de sus botones para deslizar el panel y abrirlo; haga clic de nuevo en el botón activo para cerrarlo. También se puede arrastrar el borde interior de un panel para hacerlo más ancho o más estrecho.

![Fixtures_and_functions](Fixtures_and_functions.png "Fixtures_and_functions")

---

## La vista principal

El centro de la pantalla muestra los fixtures. Una barra de herramientas en la parte superior permite
elegir entre cuatro vistas diferentes de la misma configuración. Solo se muestra una vista
a la vez.

| Vista | Qué muestra |
|------|---------------|
| ![](../basics/uniview.svg?resize=48,48) **Universe View** | Una cuadrícula de direcciones DMX para el universo seleccionado. Los fixtures ocupan los canales a los que están patcheados. Se puede arrastrar un fixture para moverlo a una dirección diferente, y cortar y pegar fixtures. |
| ![](../basics/dmxview.svg?resize=48,48) **DMX View** | Cada fixture mostrado como una tira de sus canales con sus valores en tiempo real. Haga clic en un canal para abrir un slider o una herramienta de presets y cambiar su valor directamente. |
| ![](../basics/2dview.svg?resize=48,48) **2D View** | Un plano cenital del escenario, con cada fixture dibujado en su posición real. Útil para disponer un montaje visto desde arriba. |
| ![](../basics/3dview.svg?resize=48,48) **3D View** | Una representación tridimensional del escenario, incluyendo haces y colores. (Si el sistema no admite renderizado 3D, se muestra un aviso en su lugar.) |

### Elegir y separar una vista

* **Clic izquierdo** en un botón de vista de la barra de herramientas para cambiar a esa vista.
* **Clic derecho** en un botón de vista para **separar** esa vista en su propia
  ventana independiente. Esto resulta útil en configuraciones con varios monitores — por ejemplo, para mantener el plano 2D
  en una pantalla y la representación 3D en otra. El botón desaparece de la
  barra de herramientas mientras su vista está separada; cierre la ventana separada para que
  vuelva.

### Herramientas de la barra de herramientas de la vista

A la derecha de los botones de vista se encuentran:

* **Selector de universo** — un menú desplegable para elegir qué universo se muestra. Elija
  un único universo para centrarse en él, ocultando los fixtures patcheados en otros lugares.
* **Alejar / Acercar zoom** — hace que los fixtures aparezcan más pequeños o más grandes en la
  vista actual.
* **Ajustes de vista** (el botón de "barras") — muestra u oculta el panel de ajustes de
  la vista actual. Este botón solo aparece para las vistas que tienen ajustes propios (las vistas DMX y 2D).

---

## Panel izquierdo — Fixtures y canales

El panel izquierdo agrupa tres herramientas de gestión en la parte superior, las herramientas
de control de canales en el medio, y las herramientas de selección en la parte inferior.

### Gestionar fixtures

| Botón | Qué hace |
|--------|--------------|
| ![](../basics/fixture.svg?resize=48,48) **Add Fixtures** | Abre el fixture browser. Busque en la biblioteca de fixtures y arrastre un fixture a la vista para patchearlo. (Solo disponible cuando se permite la edición de fixtures.) |
| ![](../basics/group.svg?resize=48,48) **Fixture Groups** | Crea y edita grupos de fixtures, de modo que se puedan seleccionar y controlar varios fixtures juntos. |
| ![](../basics/palette.svg?resize=48,48) **Palettes** | Crea y gestiona palettes — valores guardados para color, posición, dimmer, etc. — que se pueden reutilizar en las funciones. |

### Herramientas de control de canales

Estas herramientas permiten controlar directamente los fixtures **seleccionados**. Cada botón solo
se activa cuando al menos un fixture seleccionado tiene realmente esa capacidad;
el pequeño número en un botón indica a cuántos de los fixtures seleccionados se aplica. Haga clic en un botón para abrir su herramienta junto al panel.

| Herramienta | Qué controla |
|------|------------------|
| ![](../basics/intensity.svg?resize=48,48) **Intensity** | La intensidad del dimmer / master de los fixtures seleccionados. |
| ![](../basics/shutter.svg?resize=48,48) **Shutter** | Presets de shutter y estroboscopio (abierto, cerrado, strobo, pulse, …). |
| ![](../basics/position.svg?resize=48,48) **Position** | Pan y tilt — apuntar moving heads y scanners. |
| ![](../basics/color.svg?resize=48,48) **Color** | El color de los fixtures, mezclando RGB (y blanco / ámbar / UV cuando estén disponibles). |
| ![](../basics/colorwheel.svg?resize=48,48) **Color Wheel** | Selecciona un color de la rueda de colores fija del fixture. |
| ![](../basics/gobo.svg?resize=48,48) **Gobos** | Selecciona un gobo de la rueda de gobos del fixture. |
| ![](../basics/beam.svg?resize=48,48) **Beam** | Propiedades del haz, como zoom y focus. |

### Herramientas de selección (parte inferior del panel)

| Botón | Qué hace |
|--------|--------------|
| <i class="fa fa-bolt fa-2x"></i> **Highlight** | Resalta temporalmente los fixtures seleccionados actualmente para que se pueda ver cuáles son. El número muestra cuántos fixtures están seleccionados. |
| <i class="fa fa-crosshairs fa-2x"></i> **Pick a 3D point** | (Solo en la vista 3D) Permite hacer clic en un punto del escenario 3D para apuntar hacia él los fixtures seleccionados. Atajo: **Ctrl+P**. |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple selection** | Cuando está activado, al hacer clic en los fixtures estos se añaden a la selección en lugar de reemplazarla, de modo que se puede ir construyendo una selección de varios fixtures. |
| ![](../basics/selectall.svg?resize=48,48) **Select / Deselect all** | Selecciona todos los fixtures, o vacía la selección si ya está todo seleccionado. Atajo: **Ctrl+A**. |

---

## Panel derecho — funciones

El panel derecho es donde se trabaja con las **funciones** — Scenes, Chasers,
Sequences, EFX, RGB Matrices, Collections, Scripts, Audio, Video y Shows.

| Botón | Qué hace |
|--------|--------------|
| ![](../basics/functions.svg?resize=48,48) **Function Manager** | Abre la lista de todas las funciones, organizadas en carpetas. Seleccione una función aquí para editarla. |
| <i class="fa fa-stopwatch fa-2x" style="color:turquoise"></i>**Timing Settings** | (Solo en [Show Manager](/show-manager)) Ajusta la temporización del show. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i>**Add a new function** | Abre un menú para crear una nueva función. Elija el tipo y su editor se abre automáticamente. (Solo disponible cuando se permite la edición de funciones.) |
| <i class="fa fa-minus fa-2x" style="color:crimson"></i>**Delete** | Elimina las funciones y carpetas seleccionadas, tras pedir confirmación. |
| ![](../basics/rename.svg?resize=48,48) **Rename** | Renombra el elemento seleccionado. Cuando hay varios elementos seleccionados, se pueden renombrar todos a la vez con numeración automática. |
| <i class="fa fa-clone fa-2x"></i>**Clone** | Hace una copia de cada función seleccionada. |
| <i class="fa fa-sitemap fa-2x"></i>**Show function usage** | Muestra dónde se utiliza la función seleccionada — qué otras funciones, widgets de virtual console, etc. la referencian. |
| ![](../basics/autostart.svg?resize=48,48) **Autostart** | Marca la función seleccionada para que se inicie automáticamente al cargar el proyecto (o elimina esa marca). |
| <i class="fa fa-play fa-2x"></i>**Function Preview** | Ejecuta la función seleccionada en vivo para poder previsualizarla. Haga clic de nuevo para detenerla. |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple selection** | (Solo en [Show Manager](/show-manager)) Permite seleccionar varios elementos a la vez. |
| <i class="fa fa-xmark fa-2x"></i>**Reset dump channels** | Borra los canales actualmente capturados para el dump en una escena. Atajo: **Ctrl+R**. |

### Crear una función

Al elegir un tipo del menú **Add a new function**:

* Las funciones **Audio** y **Video** piden primero elegir el archivo o archivos multimedia. Si
  se selecciona un solo archivo, su editor se abre de inmediato; si se seleccionan
  varios, se crea una función para cada uno y se abre el Function Manager para que sea
  posible revisarlas.
* Un **Show** cambia la aplicación al espacio de trabajo **Show Manager**.
* Cualquier otro tipo crea la función y abre su editor en el panel derecho,
  listo para editar.

---

## Panel inferior

El panel inferior permanece oculto hasta que se necesita. Se desliza hacia arriba desde la parte inferior
de la pantalla para alojar editores que trabajan junto a la vista principal — con mayor frecuencia la
**consola de canales de la Scene**, donde se establecen los valores de canal de una escena.

| Botón | Qué hace |
|----------|-------------------|
| <i class="fa fa-chevron-up fa-2x"></i> **Expand / Collapse** | abre el panel a su altura completa o lo contrae de nuevo a una tira delgada. También se puede arrastrar el borde superior del panel hacia arriba o hacia abajo para establecer la altura que se desee |
| <i class="fa fa-copy fa-2x"></i> **Copy to fixtures of the same type** | (Solo en la consola de la Scene) copia los valores de canal seleccionados a cualquier otro fixture del mismo tipo, de modo que no sea necesario establecerlos uno por uno |
| ![](../basics/multiple.svg?resize=48,48) **Toggle multiple channel selection** | (Solo en la consola de la Scene) permite seleccionar varios canales a la vez |

Mientras el panel inferior está abierto, comparte la pantalla con las vistas de encima,
que se reducen para hacerle espacio.
