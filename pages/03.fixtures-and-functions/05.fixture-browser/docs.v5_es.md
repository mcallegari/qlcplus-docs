---
title: 'Fixture Browser'
date: '14:32 27-06-2026'
taxonomy:
    category:
        - docs
---

El **Fixture Browser** es donde se patchean nuevos fixtures en el proyecto. Ábralo con el
botón **Add Fixtures** en la parte superior del panel izquierdo del espacio de trabajo
[Fixtures and Functions](/fixtures-and-functions).

Permite encontrar una definición de fixture en la biblioteca, establecer cómo debe
patchearse, y arrastrarlo a una de las vistas.

## Encontrar un fixture

Hay dos formas de encontrar un fixture:

* **Explorar por fabricante** — el navegador se abre en una lista de fabricantes.
  Haga clic en un fabricante para ver sus modelos, y luego haga clic en un modelo para seleccionarlo. Use
  la flecha hacia atrás (el nombre del fabricante en la parte superior) para volver a la
  lista de fabricantes.
* **Buscar** — escriba al menos tres caracteres en el cuadro de búsqueda de la parte superior. La
  lista cambia a un árbol de resultados de búsqueda, agrupados por fabricante, comparando su
  texto con fabricantes y modelos.

## Botones de la barra de herramientas

En la parte superior del navegador:

* **＋ Create a new fixture definition** — abre el editor de definiciones de fixture para
  crear un fixture completamente nuevo desde cero.
* **Edit the selected fixture definition** — abre la definición del fixture seleccionado
  en el editor. Se habilita una vez seleccionado un modelo.
* **Remap fixtures** (icono de mezcla) — abre la herramienta **Fixture Remap**, utilizada para
  transferir el patch y el contenido de un proyecto existente a un conjunto diferente de
  fixtures.

## Propiedades del fixture

Al seleccionar un modelo, aparece un panel **Fixture properties** en la parte inferior del
navegador. Configure estos valores antes de arrastrar el fixture a una vista — determinan cómo
se nombra, dónde se patchea y cuántas copias se crean.

| Propiedad | Significado |
|----------|---------|
| **Name** | El nombre que tendrá el fixture (o los fixtures) en el proyecto. Se sugiere un nombre predeterminado; edítelo como desee. Al añadir más de uno a la vez, se numeran automáticamente. |
| **Universe** | El universo al que está patcheado el fixture. El menú desplegable enumera los universos definidos. |
| **Address** | La dirección DMX de inicio (1–512) dentro de ese universo. El navegador sugiere la primera dirección libre que encaja; se recalcula cada vez que se cambia el modo, la cantidad o el número de fixtures ya patcheados. |
| **Quantity** | Cuántas copias de este fixture añadir de una vez (1–512). Las copias se disponen una tras otra a partir de la dirección de inicio, separadas por el **Gap**. |
| **Channels** | El número de canales DMX que utiliza el fixture. Se establece automáticamente según el **Mode** seleccionado y es de solo lectura para los fixtures que tienen modos. Para un fixture genérico/dimmer sin modos, puede establecer usted mismo el número de canales (1–512). |
| **Gap** | El número de canales vacíos que se dejan entre copias consecutivas cuando **Quantity** es mayor que uno (0–511). Úselo para mantener cada fixture en una dirección redonda, o para reservar espacio para futuras ampliaciones. |
| **Mode** | El modo de funcionamiento del fixture (se muestra solo para los fixtures que definen modos). Modos diferentes exponen conjuntos de canales diferentes — por ejemplo, un modo básico frente a un modo extendido con más controles. Seleccionar un modo actualiza el recuento de **Channels**. |

### Inspeccionar los canales de un modo

Junto al menú desplegable **Mode** hay un botón de **info** (ⓘ). Actívelo para enumerar
todos los canales del modo seleccionado, cada uno con su nombre y un icono de tipo, para
poder confirmar que el modo hace lo que se espera antes de patchear.

## Patchear el fixture

Una vez establecidas las propiedades, **arrastre el fixture a una vista** para patchearlo:

* En la **Universe View**, la cuadrícula resalta los canales que ocupará
  (un bloque por copia, separado por el gap) y muestra si la dirección está
  libre.
* En la **2D / 3D View**, suéltelo donde desee posicionarlo en el escenario.

Si la dirección elegida se solapa con un fixture existente, se muestra un error
**"Address overlapping"** y debe elegir otra dirección DMX.

## Generic RGB Panel

Al seleccionar el modelo especial **Generic RGB Panel** se muestra en su lugar un panel dedicado
**RGB panel properties**, con parámetros adicionales para describir una matriz de
píxeles. Una vista previa en vivo en la parte inferior se actualiza a medida que los modifica, mostrando la
disposición de los píxeles, el cableado en serpentina/zig-zag y la esquina de inicio.

Además de **Name**, **Universe** y **Address** (como arriba), se establece:

| Propiedad | Significado |
|----------|---------|
| **Components** | El orden de color de cada píxel: **RGB**, **BGR**, **BRG**, **GBR**, **GRB**, **RBG**, o **RGBW**. Hágalo coincidir con la forma en que están cableados los LED del panel para que los colores salgan correctos. |
| **Size** | La resolución del panel en píxeles, como **columnas × filas** (ancho hasta 170, alto hasta 999). Esto determina cuántas celdas tiene la matriz. |
| **Physical** | El tamaño real del panel, como **ancho × alto** en milímetros. Se usa para dibujar el panel a escala en las vistas 2D/3D. |
| **Start corner** | La esquina por la que empieza la cadena de píxeles: **Top-Left**, **Top-Right**, **Bottom-Left** o **Bottom-Right**. Marcada con un punto en la vista previa. |
| **Displacement** | Cómo discurre el cableado de fila en fila (o de columna en columna): **Snake** (dirección alterna en cada línea) o **Zig Zag** (cada línea discurre en la misma dirección). Debe coincidir con el panel para que los efectos se mapeen correctamente. |
| **Direction** | Si los píxeles están encadenados **Horizontally** (fila por fila) o **Vertically** (columna por columna). |

Dado que un solo panel puede usar un número elevado de canales — potencialmente más
de un universo — el panel puede extenderse a lo largo de varios universos a partir de la dirección elegida.
