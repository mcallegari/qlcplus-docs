---
title: 'XY Pad'
date: '03:22 22-08-2023'
media_order: 'xypad.png,xypad2.png,xypad-efx.png'
---

Un **XY Pad** es un control de dos ejes para **pan y tilt** — al arrastrar el
cursor por el pad, los fixtures móviles asociados lo siguen. Es la forma más
natural de posicionar a mano cabezas móviles y scanners desde la
[Virtual Console](/virtual-console).

El eje horizontal del pad pilota el **pan** y el eje vertical pilota el
**tilt**. Toda el área representa el rango completo de movimiento que
pueden alcanzar los fixtures: el borde izquierdo es el pan mínimo, el borde
derecho el pan máximo, el borde superior el tilt mínimo y el borde inferior
el tilt máximo.

## Elementos del widget

|     |     |
| --- | --- |
| **Range sliders** | Los sliders de dos asas en el lado superior e izquierdo. Definen la **range window**: la parte del pad en la que el cursor puede moverse. |
| **Main area** | El área oscura en el centro, que representa todas las posiciones X/Y posibles. |
| **Range window** | El rectángulo cian semitransparente dibujado sobre el área principal, que marca los límites establecidos con los range sliders. Está oculto cuando los range sliders cubren todo el rango. |
| **Cursor** | El asa redonda resaltada. Se arrastra con el ratón/tacto, con los sliders de valores, o se mueve desde un controlador externo. |
| **Fixture position dots** | Los pequeños puntos amarillos que muestran dónde se encuentra realmente cada cabeza controlada, leídos de la salida DMX. Permiten ver los fixtures que van por detrás del cursor (velocidad de pan/tilt, fades) o que están limitados a un rango más estrecho. |
| **Value sliders** | Los sliders de una sola asa en la parte inferior y derecha. Establecen la posición X e Y de forma independiente, útil para ajustes precisos en un solo eje. |
| **Presets** | La fila de botones bajo el pad, mostrada solo cuando se ha añadido al menos un preset. Un botón de preset activo aparece resaltado. |

## Añadir fixtures

Los fixtures se añaden desde los **ajustes** del widget, en la sección
**Fixtures**:

* Hacer clic en el botón <i class="fa fa-2x fa-plus" style="color:limegreen"></i>
  **Add a fixture/head** para abrir el panel lateral de fixtures, y luego
  **arrastrar** los elementos al área de destino bajo la lista.
* Se puede soltar un **universe**, un **fixture group**, un **fixture** o
  una sola **head**. Los universos, grupos y fixtures se expanden en sus
  cabezas individuales, y las cabezas ya presentes en la lista no se añaden
  dos veces.
* Cada fila muestra el **nombre** de la cabeza y su **X-Axis Range** y
  **Y-Axis Range** actuales, en las unidades del Range Display Mode
  actual. Un eje invertido se marca con **(R)**.
* Se pueden añadir cabezas sin canal Pan o Tilt, pero simplemente no
  producen ninguna salida — el pad solo pilota los canales Pan/Tilt que
  encuentra.

Seleccionar filas en la lista (con Ctrl/Shift para selección múltiple) para
actuar sobre ellas con los botones
<i class="fa fa-2x fa-pencil"></i> y
<i class="fa fa-2x fa-minus" style="color:crimson"></i> de la misma barra de
herramientas.

## Limitar el movimiento

Existen dos maneras independientes de impedir que los fixtures apunten
hacia donde no deberían — hacia el techo, hacia el público o fuera del
escenario. Pueden usarse juntas.

### 1. La range window (range sliders)

Los range sliders superior e izquierdo limitan el área en la que trabaja el
pad. Un rectángulo cian semitransparente marca la **range window**
resultante sobre el área principal.

* Al arrastrar con el ratón, el cursor queda **restringido** a la ventana:
  no saldrá de ella aunque se arrastre hacia fuera.
* Al mover el pad desde un **controlador externo**, el valor de entrada se
  **escala** a la ventana en su lugar. El recorrido completo de un fader
  físico se mapea sobre la ventana reducida, obteniendo así mayor
  sensibilidad donde importa, y el feedback enviado de vuelta al controlador
  se escala del mismo modo.
* La range window es una propiedad del *pad*, no de los fixtures: se aplica
  a todas las cabezas controladas a la vez.

### 2. Rango de Pan/Tilt por fixture

Seleccionar una o más cabezas en la lista **Fixtures** y hacer clic en el
botón <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the
selected fixture head(s)**. Un cuadro de diálogo permite establecer, tanto
para **Pan** como para **Tilt**:

|     |     |
| --- | --- |
| **Minimum** | Inicio del rango utilizable para esa cabeza. |
| **Maximum** | Fin del rango utilizable para esa cabeza. |
| **Reverse** | Invierte la dirección de ese eje para esa cabeza. |

Toda el área principal se utiliza siempre, y el rango de cada cabeza se
**escala sobre ella**. Esto es lo que hace que un equipo mixto se comporte
de manera coherente: un fixture con pan de 540° puede hacerse mover
exactamente como uno de 360°, de modo que todas las cabezas apuntan al
mismo punto cuando el cursor está en la misma posición.

Por ejemplo, al establecer el mínimo de Pan en 20% y el máximo en 80%, el
cursor en el borde izquierdo produce una salida del 20% (DMX 51), en el
borde derecho del 80% (DMX 204), y todos los valores intermedios se escalan
de forma proporcional.

> Los valores de este cuadro de diálogo se expresan en las unidades del
> **Range Display Mode** actual (ver más abajo): grados, porcentaje o DMX.
> Cuando hay varias cabezas seleccionadas, el cuadro de diálogo muestra el
> rango de la primera cabeza seleccionada y — en modo Degrees — el valor
> máximo permitido es el rango más pequeño entre las seleccionadas, de modo
> que los valores introducidos sean válidos para cada cabeza seleccionada.
> Al pulsar OK se aplica el mismo rango a todas ellas.

## Settings

### Display Properties

* **Inverted Y-Axis** — invierte el eje vertical, de modo que el valor
  máximo de tilt se alcanza en la parte superior del pad en lugar de en la
  inferior. Útil para fixtures montados boca abajo en un truss.

### Range Display Mode

Selecciona las unidades usadas al mostrar y editar los rangos de Pan/Tilt de
los fixtures:

* **Degrees** — los ángulos físicos tomados de la definición del fixture.
  Solo tiene sentido para fixtures cuya definición declara un rango de
  pan/tilt.
* **Percentage** — 0–100% del recorrido completo del fixture.
* **DMX** — valores DMX en bruto, 0–255.

Cambiar el modo no modifica los rangos almacenados, solo la forma en que se
muestran e introducen.

### Fixtures

La lista de cabezas controladas por el pad, con su barra de herramientas:

|     |     |
| --- | --- |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a fixture/head** | Abre el panel lateral de fixtures y el área de destino para añadir universos, grupos, fixtures o cabezas individuales. |
| <i class="fa fa-2x fa-pencil"></i> **Set the Pan/Tilt range of the selected fixture head(s)** | Abre el cuadro de diálogo del rango Pan/Tilt para las cabezas seleccionadas. Ver *Rango de Pan/Tilt por fixture* más arriba. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected fixture head(s)** | Elimina las cabezas seleccionadas del pad. |

## Presets

Los presets se muestran como botones bajo el pad y dan acceso con un toque
a posiciones, efectos y subconjuntos de fixtures. Se gestionan en la
pestaña **Presets** de los ajustes del widget.

|     |     |
| --- | --- |
| ![](/basics/position.svg?resize=48,48) **Position Preset** | Almacena la posición XY actual del cursor como preset. El nombre predeterminado son las coordenadas X/Y en el momento de la creación. |
| ![](/basics/functions.svg?resize=48,48) **Scene/EFX Function Preset** | Abre el panel lateral del Function Manager; soltar funciones ![](/basics/scene.svg?resize=48,48) [Scene](/basics/glossary-and-concepts#scene) o ![](/basics/efx.svg?resize=48,48) [EFX](/basics/glossary-and-concepts#efx) en el área de destino para convertirlas en presets. El nombre predeterminado es el nombre de la función. Las escenas sin ningún canal Pan o Tilt son rechazadas. |
| ![](/basics/group.svg?resize=48,48) **Fixture Group Preset** | Abre el panel lateral de fixtures; soltar universos, grupos, fixtures o cabezas para crear un preset de grupo de fixtures. Solo se conservan las cabezas ya controladas por el pad. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove selected preset** | Elimina el preset seleccionado. |
| <i class="fa fa-2x fa-arrow-up"></i> / <i class="fa fa-2x fa-arrow-down"></i> **Move selected preset up / down** | Reordena el preset seleccionado, que es también el orden de los botones bajo el pad. |
| **Preset name** | Renombra el preset seleccionado. El nombre es lo que aparece en el botón. |

### Tipos de preset y comportamiento

Solo puede estar activo **un preset a la vez**. Activar un preset desactiva
automáticamente el anterior.

* ![](/basics/position.svg?resize=48,48) **Position** — al hacer clic en el
  botón, el cursor se desplaza a la posición almacenada. El pad sigue
  funcionando con normalidad después, por lo que es posible corregir la
  posición a mano desde ahí.
* ![](/basics/efx.svg?resize=48,48) **EFX** — inicia la función
  [EFX](/function-manager/efx-editor). Hacer clic de nuevo en el botón (o
  activar otro preset) para detenerla. Mientras la EFX se ejecuta, los
  puntos de posición de los fixtures muestran los fixtures moviéndose a lo
  largo del patrón.
* ![](/basics/scene.svg?resize=48,48) **Scene** — inicia la función
  [Scene](/function-manager/scene-editor), que establece sus propios
  valores de Pan/Tilt. Hacer clic de nuevo para detenerla.
  > Nótese que se inicia la **totalidad** de la Scene, colores, dimmers y
  > todo lo demás incluido. Es preferible crear Scenes dedicadas que
  > contengan solo canales Pan y Tilt para usarlas como presets del XY Pad.
* ![](/basics/group.svg?resize=48,48) **Fixture Group** — restringe el pad a
  un **subconjunto** de las cabezas que controla: mientras está activo, solo
  esas cabezas siguen al cursor, las demás mantienen su posición. Hacer clic
  de nuevo para liberar la restricción y volver a controlar todas las
  cabezas. La lista muestra cuántas cabezas contiene el preset.

## External input

Como cualquier widget de la Virtual Console, el XY Pad puede pilotarse desde
MIDI, OSC, DMX-in o cualquier otra entrada compatible. En la configuración
de entradas del widget se pueden asignar los siguientes controles:

|     |     |
| --- | --- |
| **Pan / Horizontal axis** | Posición horizontal (pan) de grano grueso. Escalada a la range window cuando hay una establecida. |
| **Pan fine** | Posición horizontal fina (LSB), para fixtures con pan de 16 bits. |
| **Tilt / Vertical axis** | Posición vertical (tilt) de grano grueso. Escalada a la range window cuando hay una establecida. |
| **Tilt fine** | Posición vertical fina (LSB), para fixtures con tilt de 16 bits. |
| **Width** | Reservado para el ancho de la range window. |
| **Height** | Reservado para la altura de la range window. |
| **Preset: &lt;name&gt;** | Se crea una entrada para cada preset. Enviar un valor máximo (pulsación de un botón) activa o conmuta ese preset, exactamente igual que hacer clic en su botón. |

Cada vez que la posición cambia por un motivo *distinto* de una entrada
externa — un arrastre con el ratón, la recuperación de un preset, un
deshacer — el pad envía un **feedback** con la posición actual. Los faders
absolutos/motorizados siguen al cursor, y los encoders reciben su valor
interno resembrado para seguir funcionando de manera relativa a la posición
real. El feedback no se retransmite mientras es el propio controlador el
que mueve el pad, de modo que no se genera ningún bucle de feedback.

## Consejos

* Establecer **rangos X/Y** por fixture para que un equipo mixto de cabezas
  móviles apunte todo al mismo punto cuando el cursor del pad está
  centrado.
* Usar la **range window** para mantener un XY Pad dentro del área del
  escenario de forma segura, ganando al mismo tiempo resolución de fader en
  un controlador externo.
* Guardar posiciones habituales como **position presets** para una
  recuperación instantánea durante el espectáculo, y reordenarlas poniendo
  primero las que más se usan.
* Añadir **fixture group presets** a un único pad en lugar de construir
  varios: un toque selecciona hacia qué cabezas se está apuntando.
* Observar los **fixture position dots** para comprobar que cada cabeza haya
  alcanzado realmente la posición — las cabezas todavía en movimiento, o con
  un rango más estrecho, son inmediatamente visibles.
