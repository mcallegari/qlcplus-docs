---
title: 'Glosario y conceptos'
date: '07:32 21-08-2023'
---

Q Light Controller Plus (QLC+ para abreviar) está pensado para controlar equipos de iluminación utilizados en varios tipos de espectáculos, como conciertos en vivo y teatros, etc. La intención principal es que QLC+ sea capaz de superar a las mesas de iluminación comerciales sin necesidad de un manual de más de 500 páginas, gracias a una interfaz de usuario intuitiva y flexible.

Esta página se ha organizado en orden alfabético para facilitar la búsqueda de un tema específico.

### ![](../audio.svg) Audio

Una función [audio](#functions) es un objeto que representa un archivo de audio guardado en disco.  
QLC+ admite los formatos de audio más comunes, como Wave, MP3, M4A, Ogg y Flac. Admite canales mono o estéreo y varias frecuencias de muestreo, como 44,1KHz, 48KHz, etc...  
Las funciones Audio se pueden colocar en un [Chaser](#chaser) o en un [Show](#show) en el momento deseado, mediante el panel [Show Manager](/show-manager).  
Como la mayoría de las funciones de QLC+, Audio admite tiempos de fade in y fade out.

### ![](../blackout.svg) Blackout

Blackout es una función especial de QLC+ utilizada para poner a cero todos los canales [HTP](#htp-highest-takes-precedence) en todos los universos. Esto tendrá el efecto de detener la emisión de luz de todos los fixtures. Los canales permanecerán a cero, independientemente de las funciones que estén actualmente en ejecución o de los valores asignados manualmente (por ejemplo, desde el [Simple Desk](/simple-desk)). Cuando se desactiva el Blackout, todos los canales volverán a estar controlados por las funciones o por su valor establecido manualmente.

### Capabilities

Algunos canales de los fixtures inteligentes ofrecen muchos tipos de funciones, o _capabilities_, como encender la lámpara cuando el valor del canal es \[240-255\], establecer un color rojo en una rueda de colores cuando el valor es exactamente \[15\], o simplemente controlar la intensidad del dimmer del fixture con valores \[0-255\]. Cada una de estas funciones individuales se denomina capability y cada una de ellas tiene estas tres propiedades:

*   Valor mínimo: El valor mínimo del canal que proporciona una capability.
*   Valor máximo: El valor máximo del canal que proporciona una capability.
*   Nombre: El nombre descriptivo de una capability
*   Preset: Una funcionalidad predefinida que permite a QLC+ reconocer con precisión cómo tratar y simular un valor de canal

### ![](../chaser.svg) Chaser

Una función [Chaser](#functions) está formada por varias escenas que se ejecutan en secuencia, una tras otra, cuando se inicia la función chaser. La siguiente función se ejecuta solo después de que la anterior haya finalizado. Se puede insertar en un chaser cualquier número de [funciones](#functions).

La dirección de la función Chaser se puede invertir, o la selección de escenas puede ser aleatoria. La función Chaser también se puede configurar para ejecutar un bucle infinito, un bucle ping-pong infinito (la dirección se invierte después de cada pasada), o puede ejecutarse una sola vez, en modo single-shot, tras lo cual finaliza por sí sola. Si la función está configurada para repetirse infinitamente, debe detenerse manualmente.

Cada Chaser tiene sus propios ajustes de velocidad:

*   **Fade In:** La velocidad de entrada de un step
*   **Hold:** El tiempo de mantenimiento de un step
*   **Fade Out:** La velocidad de salida de un step
*   **Duration:** La duración de un step

Se pueden crear copias de las funciones chaser con el [Function Manager](/function-manager). Las escenas contenidas en un chaser no se duplican cuando se copia un chaser. Solo el orden y la dirección se copian en el nuevo chaser.

### Click And Go

Click And Go es una tecnología que permite al usuario acceder rápidamente a macros y colores de forma completamente visual y con solo un par de clics. Esto puede dar lugar a espectáculos en vivo más eficientes y a una mayor libertad para elegir fácilmente el resultado deseado.  
Por el momento hay disponibles tres tipos de widgets:

*   Color único (se aplica a los canales de intensidad Rojo, Verde, Azul, Cian, Amarillo, Magenta, Ámbar y Blanco)
*   Selector de color RGB. Controla los valores de los canales RGB seleccionados con un solo clic
*   Selector de Gobo/Macro. Accede y muestra un Gobo/Macro definido en la definición del fixture

Hay disponible una vista general con capturas de pantalla [aquí](https://www.qlcplus.org/old/clickandgo.html)

### ![](../collection.svg) Collection

Una función [Collection](#functions) engloba varias funciones que se ejecutan simultáneamente cuando se ejecuta la función collection. Se puede insertar en una collection cualquier número de funciones, pero cada función solo puede insertarse una vez y una collection no puede ser miembro directo de sí misma.

Las collections no tienen ajustes de velocidad. La velocidad de cada función miembro se establece individualmente mediante sus propios editores.

Se pueden crear copias de las funciones collection con el [Function Manager](/function-manager). Las funciones contenidas en una collection no se duplican; solo se copia la lista de funciones.

### DMX

[DMX](https://es.wikipedia.org/wiki/DMX512) es la abreviatura de Digital MultipleX. Básicamente define un conjunto de propiedades, protocolo, cableado, etc. En el caso del software de iluminación, define el número máximo de canales (512) por universo y el rango de valores de cada canal (0-255).

QLC+ admite un número ilimitado de universos (hay 4 iniciales, pero se pueden añadir más si es necesario). No es necesario que estén conectados a hardware DMX. La abstracción real del hardware (ya sea analógica de 0-10V, DMX u otro método) se logra a través de los [plugins de salida](#input-output-plugins).

### ![](../efx.svg) EFX

Una función [EFX](#functions) se utiliza principalmente para automatizar luces móviles (por ejemplo, scanners y cabezas móviles), aunque también puede automatizar valores RGB o Dimmer de luces no móviles. El EFX puede crear trayectorias matemáticas complejas en un plano X-Y que se convierten en valores DMX para los canales pan y tilt, o RGB o Dimmer del fixture.

### ![](../fixture.svg) Fixtures

Un fixture es esencialmente un dispositivo de iluminación. Puede ser, por ejemplo, una cabeza móvil, un scanner, un láser, etc. Sin embargo, por simplicidad, los PAR individuales (y similares) que normalmente se controlan mediante un canal dimmer por unidad se pueden agrupar para formar un único fixture.

Con el Fixture Definition Editor, los usuarios pueden editar la información compartida de los fixtures almacenada en una biblioteca de fixtures que contiene las siguientes propiedades para cada fixture:

*   Fabricante (por ejemplo, ClayPaky)
*   Modelo (por ejemplo, MAC250)
*   Tipo (Color Changer, Scanner, Moving Head, Smoke, Haze, Fan...)
*   Propiedades físicas (tipo de lámpara, ángulo del haz, dimensiones...)
*   Canales:
    *   Grupo de canal (Intensity, Pan, Tilt, Gobo, Color, Speed, etc.)
    *   Asignaciones de canal de 8 bits y 16 bits para los grupos pan y tilt
    *   Color primario opcional para los canales de intensidad (RGB/CMY)
    *   Rangos de valores para las funciones del canal (por ejemplo, 0-5:Lamp on, 6-15:Strobe, etc.)

Estas definiciones de fixture se pueden utilizar después para crear los fixtures reales en la aplicación Q Light Controller Plus, que tendrán propiedades adicionales definidas por los usuarios:

*   Universo DMX
*   Dirección DMX
*   Nombre

Se pueden crear varias instancias de un fixture (por ejemplo, los usuarios deben poder tener varias instancias de un MAC250 en uso). Cada fixture puede tener un nombre, pero el nombre no lo utiliza internamente QLC+ para identificar las instancias individuales de los fixtures. Lo mismo ocurre con la dirección DMX. No obstante, se anima a los usuarios a nombrar sus fixtures de forma sistemática para ayudar a identificar cada uno de ellos, si es necesario.

Los dispositivos dimmer genéricos no necesitan su propia definición de fixture, porque normalmente varios dimmers se conectan a un espacio de direcciones común, empleando uno o más racks de dimmers. Los usuarios pueden crear instancias de estas entidades dimmer genéricas simplemente definiendo el número de canales que debe tener cada una.

### ![](../group.svg) Fixture Group

Un fixture group es, como su nombre indica, un grupo de [fixtures](#fixtures). También define (a un nivel bastante básico) la disposición física real de estos fixtures en el mundo real. Este conocimiento se puede utilizar, por ejemplo, en la RGB Matrix para producir una pared de luces mezclables RGB que puedan actuar como píxeles individuales en un patrón gráfico o en un texto en movimiento.

### Fixture Mode

Muchos fabricantes diseñan sus equipos inteligentes de forma que puedan configurarse para entender diferentes conjuntos de canales. Por ejemplo, un scanner podría tener dos opciones de configuración: una solo para canales de movimiento de 8 bits (1x pan, 1x tilt) y otra para canales de movimiento de 16 bits (2x pan, 2x tilt). En lugar de crear una definición de fixture completamente nueva para cada variante, estas se han agrupado en las definiciones de fixture de QLC+ en fixture modes. Otras mesas o formatos llaman a esto "personality".

### ![](../functions2.svg) Functions

El número de funciones es prácticamente ilimitado. Las funciones se utilizan para automatizar el ajuste de valores en los canales DMX. Cada tipo de función tiene su propia forma de automatizar las luces.

Los tipos de función son:

*   [Scene](#scene)
*   [Chaser](#chaser)
*   [Sequence](#sequence)
*   [EFX](#efx)
*   [RGB Matrix](#rgb-matrix)
*   [Collection](#collection)
*   [Show](#show)
*   [Audio](#audio)
*   [Video](#video)

Cada función puede tener un nombre y, aunque el nombre no se utiliza para identificar de forma unívoca las funciones individuales, se anima a los usuarios a nombrar sus funciones de forma sistemática y concisa para ayudar a identificar cada una de ellas. Para su propia comodidad.

Cada función tiene sus propios ajustes de velocidad:

*   **Fade In:** El tiempo utilizado para atenuar los canales HTP (en las Scenes también LTP) hasta su valor objetivo
*   **Fade Out:** El tiempo utilizado para atenuar los canales HTP/intensity de vuelta a cero
*   **Duration:** La duración del step actual (no aplicable a las Scenes)

### Grand Master

El Grand Master se utiliza como el slider master final antes de que los valores se escriban en el hardware DMX físico real. Normalmente, el Grand Master afecta solo a los canales **Intensity**, pero también se puede modificar para que afecte a los valores de **todos** los canales.

El Grand Master también tiene dos **Value Modes** que controlan la forma en que el Grand Master afecta a los valores de los canales:

*   Reduce: Los valores de los canales afectados se reducen en un porcentaje establecido con el slider del Grand Master. Por ejemplo, un Grand Master al 50% hará que todos los canales afectados se reduzcan al 50% de sus valores **actuales**.
*   Limit: Los canales afectados no pueden obtener valores superiores al establecido con el slider del Grand Master. Por ejemplo, un Grand Master a 127 hará que los valores máximos de todos los canales afectados se limiten exactamente a 127.

### Head

Un head representa un dispositivo individual de emisión de luz dentro de un fixture. Normalmente, un solo fixture contiene exactamente una salida, como la lente, la lámpara o un conjunto de LEDs. Sin embargo, existe un número creciente de fixtures en el mercado que, aunque se tratan como un único fixture, tienen varios dispositivos de emisión de luz, es decir, heads.

Por ejemplo, se podría tener un fixture de barra LED RGB ensamblado en un único chasis que, por lo tanto, aparece como un único fixture con una entrada DMX y una salida DMX. Sin embargo, en realidad está compuesto por cuatro "fixtures" LED RGB independientes. Estos fixtures separados se tratan en QLC+ como heads; comparten algunas propiedades con sus heads hermanos, se pueden controlar individualmente, pero también podrían tener un control de intensidad master que controle la emisión de luz de todos los heads en conjunto.

Cada head pertenece a un [Fixture Mode](#fixture-mode) porque en un modo, un fixture podría proporcionar canales suficientes para controlar individualmente cada uno de sus heads, mientras que en otro modo podrían proporcionarse solo unos pocos canales para controlar todos los heads simultáneamente.

### HTP (Highest Takes Precedence)

HTP es una regla que decide qué nivel se envía a un universo DMX por un canal cuando dicho canal está controlado por más de una [función](#functions) o widget de la Virtual Console. Generalmente, los canales de intensidad obedecen la regla HTP. Esto incluye los canales de intensidad genéricos utilizados para controlar la _intensidad luminosa_ con dimmers y también los canales que controlan la intensidad de un color, típicamente en un fixture LED.

La regla HTP es simple: el nivel más alto (más cercano al 100%) que se envía actualmente a un canal es el que se envía al universo DMX.

Supongamos que tiene dos sliders que controlan el mismo canal de intensidad. Primero, establece el slider 1 al 50% y luego mueve el slider 2 del 0% al 75%. Mientras el slider 2 esté por debajo del 50%, no ocurre nada, pero después de superar el nivel del 50% establecido por el slider 1, la intensidad luminosa aumenta hasta el 75%. Si arrastra de nuevo el slider 2 hacia el 0%, la intensidad luminosa disminuye hasta alcanzar el 50% establecido por el slider 1 y permanece en el 50% hasta que se baja el slider 1.

Un crossfade entre 2 [Scenes](#scene) sustituirá los niveles HTP de la primera escena por los niveles HTP de la segunda. Los nuevos niveles HTP se combinarán con los niveles HTP de otras funciones y widgets de la virtual console como se ha descrito anteriormente. Véase también [LTP](#ltp-latest-takes-precedence).

### ![](../inputoutput.svg) Input/Output plugins

QLC+ admite una variedad de plugins para enviar y recibir datos desde/hacia el mundo exterior.  
Un plugin puede ser una interfaz hacia dispositivos físicos (como adaptadores DMX o controladores MIDI) o hacia un protocolo de red (como [Art-Net](/plugins/art-net), [OSC](/plugins/osc) o [E1.31](/plugins/e1-31-sacn)).  
Los plugins admiten funciones de input, output o feedback dependiendo del dispositivo o protocolo que controlan.

Los principales métodos de input para QLC+ son, naturalmente, el teclado y el ratón. Los usuarios pueden asignar teclas del teclado a los botones de la virtual console y arrastrar sliders, además de hacer prácticamente todo con un ratón.

Sin embargo, con los plugins es posible conectar dispositivos de input adicionales al ordenador para aliviar la experiencia de usuario, más bien incómoda y lenta, que se obtiene con un ratón y un teclado normales. Los plugins que admiten una línea de input ofrecen la capacidad de hacer que dispositivos externos produzcan datos de input hacia varios elementos de QLC+.

Una input line es una conexión proporcionada por un hardware o una red a la que se accede a través de un plugin de input. Puede ser, por ejemplo, un conector MIDI IN en el ordenador del usuario (o periférico) al que los usuarios pueden conectar dispositivos de input compatibles con MIDI, como slider boards, etc.

Una output line es una conexión proporcionada por un hardware o una red a la que se accede a través de un plugin de output. En otras palabras, es un universo DMX real, pero se ha denominado output para diferenciarlo de los universos internos de QLC+. Se pueden considerar como los conectores de salida XLR individuales del hardware DMX.

### Input profiles

Los input profiles se pueden considerar como los "primos" de los [fixtures](#fixtures); contienen información sobre dispositivos específicos que producen datos de input. Un dispositivo de input puede ser, por ejemplo, una slider board como la Behringer BCF-2000, el KORG nanoKONTROL, un Enttec Playback Wing...

### LTP (Latest Takes Precedence)

LTP es una regla que decide qué nivel se envía a un universo DMX por un canal cuando dicho canal está controlado por más de una [función](#functions) o widget de la Virtual Console. Generalmente, se utiliza para canales que se han asignado a grupos distintos del grupo **Intensity**, como pan, tilt, gobo, velocidad de strobo y otros _parámetros de fixture inteligente_

La regla LTP es simple: el último nivel establecido por una función o un widget de la Virtual Console es el que se envía al universo DMX.

Durante un crossfade entre [Scenes](#scene), los niveles LTP suelen cambiar. Esto debe manejarse con cierto cuidado, ya que algunos niveles LTP necesitan saltar inmediatamente a un nuevo nivel, por ejemplo, al cambiar de un gobo a otro. Sin embargo, los grupos LTP como pan y tilt podrían necesitar cambiar gradualmente de un nivel a otro durante un crossfade. Se pueden lograr diferentes temporizaciones combinando escenas en una [Collection](#collection). Véase también [HTP](#htp-highest-takes-precedence).

### ![](../palette.svg) Palette

Una Palette es una entidad en QLC+ que representa una característica de un fixture. Por ejemplo, una Palette puede ser un color, una posición, un ángulo de zoom, etc.
Las Palettes se pueden usar en las [Scenes](#scene) para abstraer una característica independientemente de los fixtures controlados por la Scene.

### ![](../rgbmatrix.svg) RGB Matrix

Una función [RGB Matrix](#functions) se puede usar para imponer gráficos sencillos y texto en una matriz (una cuadrícula o una pared) de [heads](#head) de fixtures RGB y/o monocromáticos. La función RGB Matrix ha sido diseñada para ser extensible con [scripts](#rgb-script) que pueden ser escritos por los usuarios.

Cada RGB Matrix tiene sus propios ajustes de velocidad:

*   **Fade In:** Tiempo de encendido gradual de cada píxel
*   **Fade Out:** Tiempo de apagado gradual de cada píxel
*   **Duration:** La duración del step/frame actual

### ![](../rgbmatrix.svg) RGB Script

Un RGB script es un programa escrito en [ECMAScript](https://es.wikipedia.org/wiki/ECMAScript) (también conocido como JavaScript) que produce los datos de imagen necesarios para las funciones [RGB Matrix](#rgb-matrix). Para saber más, consulte la página [RGB Script API](/function-manager/rgb-script-api).

### ![](../scene.svg) Scene

Una función [Scene](#functions) comprende los valores de los canales seleccionados contenidos en una o más instancias de fixture. Cuando se inicia una escena, el tiempo que tardan sus canales en alcanzar sus valores objetivo depende de los ajustes de velocidad de la escena:

Cada función tiene sus propios ajustes de velocidad:

*   **Fade In:** El tiempo utilizado para atenuar todos los canales hasta sus valores objetivo, desde cualquier valor que tuvieran
*   **Fade Out:** El tiempo utilizado para atenuar los canales HTP/intensity de vuelta a cero. Tenga en cuenta que SOLO los canales [HTP](#htp-highest-takes-precedence) se ven afectados por este ajuste.

Se pueden crear copias de las funciones scene con el [Function Manager](/function-manager). Todo el contenido de la escena se copia en el duplicado.

### ![](../sequence.svg) Sequence

Una Sequence tiene algunas de las funcionalidades de un [Chaser](#chaser).  
Es equivalente a un Chaser en el que cada step es una única [Scene](#scene) y cada una de esas Scenes controla el mismo conjunto de canales. Una Sequence está vinculada a una Scene específica, lo que significa que todos los steps de la Sequence solo pueden controlar los canales habilitados de esa Scene.  
Al crear nuevos steps en una Sequence, no aparecerá ningún popup de selección de función, ya que un step de una Sequence no puede incluir otras funciones, a diferencia de un step de un Chaser.  
Cuando se crea una Sequence, aparecerá un icono especial de secuencia en el [Function Manager](/function-manager) como elemento hijo de la Scene a la que está vinculada.  
Para comprender la diferencia entre una Sequence y un Chaser, se invita a leer el segundo párrafo de la documentación del [Show Manager](/show-manager).

### ![](../script.svg) Script

La función [Script](#functions) se basa en un lenguaje de scripting sencillo pero potente para automatizar las funcionalidades de QLC+ en orden secuencial. Un Script se puede modificar con el [Script Editor](/function-manager/script-editor).

### ![](../show.svg) Show

Un Show es una función [avanzada](#functions) que engloba la mayoría de las funciones de QLC+ para crear un espectáculo de luces guiado por tiempo. Un Show solo se puede crear con el [Show Manager](/show-manager) y se puede inspeccionar y renombrar con el [Show Editor](/function-manager/show-editor).

### ![](../video2.svg) Video

Una función [video](#functions) es un objeto que representa un archivo de vídeo guardado en disco o en una URL de red.  
Los formatos de vídeo admitidos dependen del sistema operativo utilizado. Por ejemplo, Mac OSX está limitado a archivos MOV/MP4 y poco más.  
Las funciones Video se pueden colocar en un [Chaser](#chaser) o en un [Show](#show) en el momento deseado, mediante el panel [Show Manager](/show-manager).
