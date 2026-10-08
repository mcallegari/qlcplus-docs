---
title: 'DMX Dump'
taxonomy:
    category:
        - docs
---

**DMX Dump** captura los valores que se están emitiendo actualmente y los guarda
en una **Scene**. Es la forma más rápida de crear una escena: establecer un
look manualmente usando las herramientas de canales, la vista DMX o el Simple Desk,
y luego "volcar" ese look en una función que se pueda recuperar más tarde.

## Cómo funciona

A medida que se cambian los valores de los canales manualmente, QLC+ realiza un
seguimiento de cada canal que se ha tocado — estos son los **valores de dump**. Son los
candidatos que se escribirán en una escena al realizar el dump.

El botón **DMX Dump** se encuentra en la barra de herramientas superior de la
aplicación (un pequeño icono de "dump"). Una **burbuja** roja en el botón
muestra cuántos canales están actualmente capturados. Cuando la burbuja muestra `0`,
todavía no se ha tocado nada y no hay nada que volcar.

Es posible borrar los valores capturados en cualquier momento sin realizar el
dump usando **Reset dump channels** en el panel derecho (atajo **Ctrl+R**).
Los valores capturados también se restablecen automáticamente en determinadas
situaciones, como al iniciar un nuevo proyecto.

> El botón de dump solo funciona cuando se permite la edición de funciones.

## Iniciar un dump

Hay dos formas de abrir el cuadro de diálogo de dump:

* **Hacer clic** en el botón DMX Dump de la barra de herramientas.
* **Arrastrar** el botón DMX Dump sobre una función en el Function Manager.
  Esto preselecciona esa función como escena existente en la que realizar el
  dump (véase más abajo).

## El cuadro de diálogo DMX Channel Dump

El cuadro de diálogo tiene dos secciones.

### Target Scene

Elegir a dónde van los valores capturados:

* **Dump to a new Scene** — crea una nueva escena. En el cuadro de texto se
  sugiere un nombre predeterminado (*New Scene N*); se puede modificar como se
  desee.
* **Dump to existing Scene** — añade los valores capturados a una escena que
  ya se tenga. El destino es la escena actualmente seleccionada en el Function
  Manager; si no hay ninguna seleccionada, esta opción muestra *(None selected)*.
  (Al arrastrar el botón de dump sobre una función, esta opción se selecciona
  automáticamente.)

### Channels to dump

Elegir cuáles de los canales capturados se escriben:

* **Dump all the available channels** — realiza el dump de todos los canales
  de todos los universos y fixtures, no solo los que se han tocado. El cuadro
  de diálogo muestra cuántos universos y fixtures abarca esto.
  * **Dump only non-zero values** — (disponible con la opción anterior) omite
    los canales que están a cero, de modo que la escena solo contenga los
    canales que realmente están haciendo algo.
* **Dump the selected fixture channels** — realiza el dump solo de los
  canales de los fixtures que se tienen seleccionados actualmente. Esta
  opción está disponible cuando los fixtures seleccionados tienen canales que
  han sido tocados.

#### Detected channel types

Al realizar el dump de los canales de los fixtures seleccionados, el cuadro de
diálogo enumera los **tipos de canal** encontrados entre ellos — por ejemplo
Intensity, RGB/CMY/WAUV, Colour macros, Gobo, Pan, Tilt, Speed, Shutter/Strobe,
Prism, Beam, Effect y Maintenance. Cada tipo tiene una casilla de verificación
para incluirlo o excluirlo. Marcar solo los tipos de canal que se desea
incluir en la escena — por ejemplo, volcar los colores pero dejar fuera la
intensidad.

## Finalizar

Confirmar el cuadro de diálogo para crear o actualizar la escena con los
canales elegidos. La nueva escena (o la actualizada) aparece entonces en el
Function Manager, lista para ser editada, previsualizada y activada como
cualquier otra función.
