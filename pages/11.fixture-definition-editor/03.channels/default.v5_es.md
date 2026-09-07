---
title: Channels
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 20%;
}
table th:nth-of-type(2) {
    width: 80%;
}
</style>

La sección **Channels** contiene todos los canales que el fixture entiende en
todos sus modos. El orden en que aparecen aquí no importa — los canales se
disponen en un orden específico dentro de cada modo, en la sección
[Modes](../modes). Lo que importa aquí es el **nombre** de cada canal y sus
**capabilities** (sus rangos de valores DMX y lo que hacen).

En la parte superior de la sección hay una pequeña barra de herramientas:

| Botón | Función |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new channel** | Crea un nuevo canal y abre el [Channel Editor](#channel-editor) a la derecha. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Elimina los canales seleccionados del fixture **y de todos los modos**. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Channel wizard** | Crea muchos canales similares a la vez (ver [Capability wizard](#capability-wizard)). |

Hacer clic en un canal para seleccionarlo; hacer **doble clic** para abrirlo
en el Channel Editor. Los canales se pueden **arrastrar** desde esta lista
hasta la lista de canales de un modo, en la sección [Modes](../modes).

## Channel Editor

El Channel Editor se abre en el panel de la **derecha** del editor. Se
utiliza para editar un canal individual y los rangos de valores DMX de cada
**capability** (un color, un gobo, la rotación de un prisma, etc.). Consultar
el manual del fixture (su "tabla DMX") para conocer los canales y rangos de
valores exactos.

|     |     |
| --- | --- |
| **Name** | El nombre del canal. Al elegir un **Preset** de canal (un canal con una sola capability), se sugiere automáticamente un nombre, que se puede personalizar de todos modos. |
| **Preset** | Un preset es un atajo que acelera la creación de la definición y proporciona al motor de QLC+ la información necesaria para reconocer y tratar correctamente un canal. Por ejemplo, elegir un preset de color (Red, Green, Blue, …) o un preset Pan/Tilt completa toda la información requerida con un solo clic. Cuando se selecciona un preset, el resto del editor se vuelve inactivo. Si el canal tiene varios rangos DMX (capabilities), dejar **Preset** en "Custom" y definir las capabilities uno mismo (más abajo). |
| **Type** | El rol del canal en el fixture. Elegir un tipo establece implícitamente la precedencia del canal ([LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence) o [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence)), por lo que es importante elegir el tipo correcto.<br><br>Los tipos de intensidad/color obedecen la regla **HTP**: **Intensity, Red, Green, Blue, Cyan, Magenta, Yellow, White, Amber, UV, Lime e Indigo**.<br>Todos los demás tipos obedecen la regla **LTP**: **Beam, Colour, Effect, Gobo, Maintenance, Nothing, Pan, Tilt, Prism, Shutter y Speed**.<br><br>**Intensity** se utiliza para canales de dimmer / master dimmer.<br>Los **colores primarios** (Red, Cyan, White, …) controlan canales de un solo color — no confundir con el tipo "Colour" descrito abajo. Tener en cuenta que el [Grand Master](/basics/glossary-and-concepts#grand-master) controla por defecto solo los canales Intensity y los canales de color primario, y la herramienta Color solo está disponible cuando un fixture proporciona canales de color primario RGBAWUV/CMY.<br>El tipo **Colour** controla una rueda de color fija o macros de color predefinidas — *no* le asignes canales RGBAW/CMY individuales.<br>El tipo **Gobo** controla la posición o indexación de la rueda de gobos.<br>El tipo **Speed** controla algo relacionado con la velocidad (rotación de gobo, velocidad de arcoíris, …).<br>El tipo **Prism** controla un prisma.<br>El tipo **Shutter** controla un obturador, un estrobo o un iris.<br>El tipo **Beam** controla un conformador de haz (como un zoom).<br>El tipo **Effect** controla algo que no encaja en los demás grupos.<br>El tipo **Maintenance** controla funciones como el reset o un ventilador de refrigeración.<br>El tipo **Nothing** es un canal de relleno o marcador de posición.<br>Los tipos **Pan** y **Tilt** controlan el movimiento Pan/Tilt (X/Y) de las cabezas móviles o los láseres. |
| **Role** | Aplicable a pares de canales que forman valores de 16 bits, normalmente **Pan** o **Tilt** (algunos fixtures más recientes también admiten dimmer, RGB, gobo o focus de 16 bits).<br>Para valores de 8 bits (un canal por función) asignar el byte de control **Coarse (MSB)**. Para valores de 16 bits (dos canales por función) asignar **Coarse (MSB)** al canal grueso y **Fine (LSB)** al canal fino. En caso de duda, utilizar **Coarse (MSB)**. |
| **Default value** | El valor DMX (0–255) al que se establece el canal al encender. Por ejemplo, algunas cabezas móviles centran su Pan/Tilt, lo que implica un valor inicial de 127. |
| **Capabilities** | La lista de rangos de valores DMX del canal, cada uno con un valor **From**, un valor **To** y una **Description**. Si un canal proporciona una sola capability (por ejemplo, pan o dimmer) utilizar en su lugar un preset de canal. Para canales más complejos (colores, gobos) crear un rango para cada entrada (por ejemplo, 0–15 blanco, 16–32 azul …). Hacer clic en From / To / Description de una fila para editarla; pulsar **Tab** para moverse entre campos y continuar en la siguiente fila. Aparece un icono de advertencia ⚠ en una fila cuya descripción está vacía o cuyo rango se superpone con otro. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> | **Elimina las capabilities seleccionadas** del canal. |
| <i class="fa fa-2x fa-palette" style="color:yellow"></i> | **Asignación automática de color** — para un canal de color, completa automáticamente las capabilities de color estándar. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> | **Capability wizard** — crea varias capabilities del mismo tamaño a la vez (ver más abajo). |

### Capability preset

A cada capability se le puede asignar un **preset**, que indica al motor de
QLC+ más información sobre ese rango de valores DMX. Según el tipo de preset,
aparecen campos adicionales:

* **ColorMacro** — elegir un solo color (utilizado normalmente en ruedas de
  color).
* **ColorDoubleMacro** — elegir dos colores para representar una posición
  intermedia de la rueda de color.
* **GoboMacro** — elegir una imagen de gobo para mostrar cuando este rango
  está activo.
* **StrobeFrequency** — introducir una frecuencia de estrobo precisa, en
  hercios.
* **StrobeFreqRange** — introducir una frecuencia mínima y máxima (en
  hercios) para un rango de estrobo.
* **Alias** — un preset especial que indica que, cuando este rango está
  activo, se debe sustituir un canal. Ver la sección [Aliases](../aliases).

Un cuadro **Preview** o **Value(s)** junto al preset permite establecer los
colores asociados, la imagen del gobo o los valores de frecuencia.

## Capability wizard

El Capability Wizard crea rápidamente múltiples rangos de capability del
mismo tamaño. Esto se aplica generalmente a colores fijos, índices de gobo y
canales de macro.

|     |     |
| --- | --- |
| **Start** | El valor inicial para las nuevas capabilities. Ajustarlo para omitir las capabilities que ya existan al principio del rango del canal. |
| **Width** | El tamaño de cada rango de valores. |
| **Amount** | El número de capabilities a crear. |
| **Name** | El nombre común para cada capability. Utilizar una almohadilla `#` para marcar dónde va un número de índice (por ejemplo, "Gobo #" crea Gobo 1, Gobo 2, Gobo 3 …). |
| **Sample** | Se actualiza a medida que se modifican los parámetros, mostrando una vista previa de las capabilities que se crearán. |
