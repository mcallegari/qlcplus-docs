---
title: 'Show Wizard'
date: '12:00 07-10-2026'
taxonomy:
    category:
        - docs
---

El **Show Wizard** construye para usted un show completo y listo para funcionar — posiciones
de fixtures, palettes, efectos y una Virtual Console — a partir de unas pocas decisiones
de alto nivel. Está pensado para llevarlo de un proyecto vacío a un rig utilizable en
minutos, y para dar a los recién llegados un ejemplo funcional del que aprender.

Ábralo con el botón <i class="fa fa-hat-wizard fa-2x" style="color:yellow"></i>
**Show Wizard** en la parte superior del panel derecho del espacio de trabajo
[Fixtures and Functions](/fixtures-and-functions). Se abre como una superposición a
pantalla completa con seis pasos; un indicador de pasos en la parte superior muestra
dónde se encuentra, y los botones **← Back** / **Next →** en la parte inferior permiten
moverse entre los pasos. El botón del último paso dice **Generate ✦** en lugar de
**Next →**.

No se escribe nada en el proyecto hasta que se pulsa **Generate** en el último paso, y
todo el resultado — disposición del escenario, funciones y Virtual Console — se crea de
una vez y es **completamente deshacible con Ctrl+Z**, igual que cualquier otro cambio.
Cerrar el wizard con el botón **✕** en cualquier momento descarta las elecciones hechas
sin tocar el proyecto.

## Paso 1 — Show Type

El primer paso pregunta qué tipo de show se está construyendo. La elección establece
valores predeterminados razonables para el resto del wizard — el venue sugerido en el
paso 3 y los efectos preseleccionados en el paso 4 — pero cualquiera de esos valores
predeterminados se puede cambiar después.

| Show type | Uso típico | Énfasis de efectos |
|-----------|--------------|-------------------|
| **Club Night** | Sala / club | Chasers rápidos, golpes de estrobo, chases RGB, efectos sincronizados con el BPM |
| **Concert / Live** | Escenario de rock | Presets de posición, barridos de color, cegadores de público, EFX de movimiento |
| **Theatrical** | Teatro | Basado en escenas, fundidos lentos, colores cálidos, patrones de gobo, presets de posición |
| **Architectural** | Espacio abierto | Chases de píxeles suaves, mezclas de color, bucles ambientales |
| **Custom** | Cualquiera | No hay nada preseleccionado — elija todo usted mismo en los pasos siguientes |

## Paso 2 — Fixture Groups & Roles

Este paso organiza los fixtures en **grupos** y asigna a cada grupo un **rol**. Los roles
determinan tanto la colocación automática en el escenario en el paso 3 como qué efectos
se generan para el grupo en el paso 4.

El paso se divide en tres columnas:

* **Fixture Browser** (izquierda) — el mismo browser utilizado en otras partes de QLC+.
  Arrastre un fixture desde él hasta una casilla de grupo en la columna central para
  patchearlo y añadirlo a ese grupo en una sola acción.
* **Fixture Groups** (centro) — las casillas de grupo. Haga clic en **+ Add group** para
  crear una casilla vacía con nombre (nombre predeterminado "Group N"), y luego arrastre
  fixtures sobre ella. Marque la casilla de un grupo para incluirlo en la colocación
  automática y en las funciones generadas. Los grupos que ya existen en el proyecto
  (creados fuera del wizard) también aparecen aquí, de modo que se puede incorporar rigs
  existentes a la generación de efectos y Virtual Console del wizard sin volver a
  patchear nada.
* **Detected capabilities & roles** (derecha) — para cada grupo **marcado**, muestra el
  rol que se le ha asignado y las capabilities que QLC+ detectó en sus fixtures
  (movimiento, mezcla de color, gobo, shutter, dimmer). Los roles se sugieren
  automáticamente a partir de esas capabilities, pero se puede cambiar a mano el rol de
  cualquier grupo.

### Roles

| Rol | Icono | Significado |
|------|------|---------|
| **Key Light** | 💡 | Barrido frontal/superior, la iluminación principal |
| **Fill Light** | 🔦 | Barrido suplementario desde un ángulo diferente |
| **Back Light** | 🔙 | Contraluz trasero / up-lighter |
| **Side Light** | 📐 | Boom o luz lateral (bambalinas de teatro) |
| **Effect** | ✨ | Fixture de efecto aéreo, haces en el aire |
| **Strip / Bar** | ▬ | Tira LED o batten que recorre el rig |
| **Blinder** | 💥 | Cegador de público / estrobo |
| **Hazer** | 💨 | Hazer o máquina de humo |
| **Floor** | ⬆ | Up-lighter de suelo |

> Un grupo cuyos fixtures ya están **patcheados y posicionados** en otra parte del
> proyecto (es decir, que no aporta fixtures *nuevos*) permite al wizard omitir por
> completo el Paso 3 — ver más abajo.

## Paso 3 — Venue & Stage

Este paso elige un **tipo de venue** y un **tamaño de escenario**, y luego muestra cómo
se posicionarán en él los grupos marcados. Se **omite automáticamente** cuando ninguno
de los grupos marcados contiene un fixture que el wizard todavía necesite colocar — por
ejemplo, si solo se ha marcado un grupo ya existente que ya está posicionado en la
[3D View](/fixtures-and-functions/3d-view). El indicador de pasos muestra el paso omitido
en gris en lugar de ocultarlo, de modo que siempre se ve dónde habría estado.

* **Venue type** — una de cuatro formas de escenario. Cada una indica los show types a
  los que se adapta mejor:

  | Stage | Descripción | Mejor para |
  |-------|-------------|----------|
  | **Open Space** | Suelo liso, sin elementos escénicos. Adecuado para rigs temporales y eventos de uso general. | Architectural, Custom |
  | **Box / Club** | Cuatro paredes y un techo, truss a lo largo del perímetro. | Club Night |
  | **Rock Stage** | Escenario elevado, truss frontal y columnas verticales. | Concert / Live |
  | **Theatre** | Arco de proscenio, barras de boca, bambalinas laterales. | Theatrical |

* **Stage size (metres)** — **Width**, **Height** y **Depth**, prerrellenados con un
  tamaño sugerido a partir del número de fixtures. Ajuste los campos si el venue real es
  diferente; es el mismo tamaño de entorno utilizado por los ajustes **Width / Height /
  Depth** de la [3D View](/fixtures-and-functions/3d-view), de modo que cambiarlo aquí
  también lo cambia allí.
* **Automatic fixture placement** (lado derecho) — enumera, para cada grupo marcado,
  dónde se colgarán sus fixtures y cuántos fixtures son, por ejemplo *Key Light → Front
  truss, high — aimed at stage centre ~45°*. La colocación sigue las convenciones de
  rigging habituales para el rol — truss frontal para key light, truss trasero para
  backlight, booms laterales alternos para side light, un batten de ancho completo para
  strips, etc. — y las cabezas se reparten de forma uniforme entre las posiciones
  disponibles. No se necesita colocación manual en 3D, aunque siempre se puede ajustar
  después cada fixture individualmente en la 3D View.

## Paso 4 — Effects

Este paso selecciona qué **funciones** generará el wizard — agrupadas en familias, con
un recuento en tiempo real de cuántas están seleccionadas. Los efectos que necesitan una
capability que ninguno de los fixtures tiene (por ejemplo efectos de movimiento en un rig
de simples dimmers) se muestran **en gris** y no se pueden activar. Haga clic en **All /
None** en la cabecera de una familia para seleccionar o borrar de una vez todos los
efectos disponibles de esa familia.

| Family | Efectos | Necesita |
|--------|---------|-------|
| 🎨 **Color** | Color Palette, Color Rainbow, Split Color, Gobo Palette | Canales de mezcla de color y/o de gobo |
| 💡 **Intensity** | Shutter Effects, Blinder Hit, Strobe Chase, Heartbeat | Un canal de shutter/estrobo, o un dimmer |
| 🎯 **Movement** | Position Presets, Fly Out, Fly In, Circle Chase, Figure Eight, Audience Sweep | Fixtures con Pan/Tilt |
| ▦ **Matrix** | Pixel Chase, Wave, Fireworks, Plasma, Marquee | Un fixture con dimmer o mezcla de color (se incluyen los movers — los efectos de matrix funcionan sobre la intensidad cuando no hay mezcla de color disponible) |
| 🎬 **Show Cues** | Ambient Loop | Al menos un fixture de mezcla de color **estático** (que no se mueve) |

Cada show type preselecciona un subconjunto razonable al entrar en este paso (por
ejemplo, Club Night activa Color Rainbow, Blinder Hit, Strobe Chase, Circle Chase y
Pixel Chase; Theatrical activa Color Palette, Position Presets, Gobo Palette y Ambient
Loop), pero se pueden añadir o quitar efectos libremente, independientemente del show
type elegido en el paso 1. **Custom** empieza sin nada seleccionado.

## Paso 5 — Controller

Este paso **opcional** vincula un controlador de input MIDI, OSC o DMX patcheado a la
Virtual Console que el wizard está a punto de construir. Se puede omitir libremente —
siempre se pueden mapear los controles a mano más tarde con **Auto Detect** en cualquier
widget de la Virtual Console.

* **Connected controllers** (izquierda) — todos los universos que actualmente tienen una
  patch de input (no solo una línea de plugin que *podría* patchearse). Haga clic en una
  entrada para seleccionarla para el mapeo; haga clic de nuevo para deseleccionarla. Cada
  entrada muestra el plugin, el número de universo, y algunas etiquetas de capability: el
  nombre del **input profile** patcheado (o *No input profile* cuando en su lugar se
  utilizará un mapeo genérico/lineal), cuántos **buttons** y **faders** encontró el
  wizard, si el perfil tiene **colour LEDs**, y si el **feedback** ya está habilitado en
  ese universo. Si todavía no hay nada patcheado, un botón aquí lleva directamente al
  panel **Input/Output** para patchear uno, y luego vuelve al wizard.
* **Mapping options** (derecha, habilitadas una vez seleccionado un controlador):

  | Opción | Efecto |
  |--------|--------|
  | **Auto-map Virtual Console controls** | Vincula los buttons, faders y XY pads generados a los canales del controlador: los buttons del controlador pilotan los buttons de la VC, los faders/encoders pilotan los sliders de intensidad y pan/tilt. |
  | **Send feedback to the controller** | Patchea la línea de output del controlador para que sus LEDs se enciendan y sus faders motorizados se muevan para reflejar el estado de la Virtual Console. |
  | **Match LED colours to button colours** | En un controlador cuyo input profile tiene una tabla de colores, ilumina el pad de cada button de color con el color más parecido. Se ignora en controladores sin colour LEDs. |

  Debajo de las opciones, un recuadro **Estimated usage** ofrece una vista previa en
  tiempo real de lo que consumirá el mapeo, por ejemplo *"18 of 24 buttons, 3 of 9
  faders"*, que se actualiza al cambiar el controlador o las opciones.

QLC+ reconoce los controladores habituales de tipo **pad-grid** (como las disposiciones
APC mini o Launchpad) a partir de su input profile y mapea los controles de modo que el
mismo tipo de control siempre acabe en el mismo lugar de la grid, independientemente de
qué página de la Virtual Console se esté mostrando: los buttons de cambio de página, los
swatches de color, los disparadores de efectos y los buttons de show-cue reciben cada uno
su propia banda de filas. Los controladores sin una grid reconocida reciben igualmente un
mapeo utilizable — los buttons se reparten en orden y los faders se mapean a los sliders
que crea el wizard.

## Paso 6 — Summary

El último paso repasa lo que se va a crear, en dos columnas:

* **What will be created** (izquierda) — una tarjeta por sección: **Stage** (cuántos
  grupos se posicionaron, y en qué tipo de escenario — o una nota indicando que la
  disposición existente se dejó intacta cuando se omitió el paso 3), **Functions**
  (cuántos efectos se seleccionaron), **Virtual Console** (una página principal más una
  página de frame por grupo), y **Controller** (el resumen del mapeo del paso 5, o *"No
  external controller mapped"*). Debajo, cada efecto seleccionado se muestra como una
  pequeña etiqueta.
* **Virtual Console layout preview** (derecha) — una maqueta esquemática del frame
  multipágina que construirá el wizard: una página **All Groups** más una página por cada
  grupo marcado, cada una con su propio slider de intensidad, buttons de color, XY pad
  (para grupos con movimiento) y buttons de efectos, y una fila de buttons de show-cue
  (Ambient, Blinder) compartida en todas las páginas. Haga clic en las pestañas de página
  de la maqueta para previsualizar una página diferente antes de generar.

Pulse **Generate ✦** para construirlo todo. Aparece brevemente un indicador
**"Generating…"** en el pie; el wizard se cierra entonces automáticamente y el nuevo show
queda listo en el espacio de trabajo principal.

## Qué se crea

* **Stage** — cuando el paso 3 no se omitió, los fixtures de cada grupo marcado se
  patchean (si no lo estaban ya) y se posicionan en la
  [3D View](/fixtures-and-functions/3d-view) según su rol y el tipo de escenario
  elegido.
* **Fixture Groups** — cada grupo marcado se convierte (o permanece) en un
  [Fixture Group](/fixtures-and-functions/fixture-group-manager) real, incluyendo un
  grupo sintético **All Groups** que abarca los fixtures de todos los grupos marcados,
  utilizado por la página principal de la Virtual Console.
* **Functions** — para cada grupo y para el agregado All Groups, el wizard crea las
  palettes (color, dimmer, shutter) y las scenes necesarias para pilotar cada efecto
  seleccionado, archivadas en carpetas del árbol de funciones por grupo. Los efectos de
  movimiento se construyen a partir de una scene **Position** base más un
  [EFX](/function-manager/efx-editor) (o un **Chaser** para efectos por pasos como
  Strobe Chase), de modo que siempre parten de un apunte definido. Los efectos de matrix
  utilizan una [RGB Matrix](/function-manager/rgb-matrix-editor) con un script
  incorporado, recurriendo a una simple animación de intensidad en los fixtures sin
  mezcla de color.
* **Virtual Console** — un único **Frame** multipágina que actúa como disposición
  maestra: la página 0 es **All Groups**, seguida de una página por cada grupo marcado,
  con sliders de intensidad, buttons de color/gobo, buttons de movimiento/efectos y, para
  los grupos con movimiento, un [XY Pad](/virtual-console/xy-pad). El cambio de página
  utiliza dimmers ocultos de un canal patcheados en un universo libre a través del plugin
  [Loopback](/plugins/loopback) — no es necesario configurar esto uno mismo.
* **External controller mapping** — cuando en el paso 5 se había seleccionado un
  controlador, los widgets generados se vinculan a él siguiendo las mapping options
  elegidas, aplicando feedback y coincidencia de color donde estén habilitados.

> Volver a ejecutar el wizard no combina ni modifica nada de lo generado anteriormente —
> cada ejecución añade un nuevo conjunto de grupos, funciones y un nuevo frame de Virtual
> Console. Elimine antes los anteriores (o simplemente deshaga) si desea empezar de
> nuevo.
