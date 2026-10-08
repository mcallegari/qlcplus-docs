---
title: Aliases
date: '12:00 04-07-2026'
---

La sección **Aliases** define reglas para sustituir un canal por otro,
activadas por capabilities configuradas con el preset **Alias** (ver
[Channels](../channels)).

Un alias permite que un canal cambie de significado según el valor de otro
canal. Por ejemplo, un fixture tiene el canal 5 denominado "Effects" que
controla el comportamiento del canal 6. El canal 5 tiene dos capabilities:
"Speed on channel 6" y "Sound sensitivity on channel 6", esta última
configurada con el preset **Alias**. Por defecto (canal 5 en 0) el canal 6
actúa como control de velocidad; cuando el canal 5 entra en el rango "sound
sensitivity", el canal 6 se convierte en un ajuste de sensibilidad al
sonido.

Para gestionar esto se definen dos canales — "Speed" y "Sound sensitivity" —
y se añade al modo solo "Speed" (el comportamiento predeterminado). Luego se
define un único alias que sustituye "Speed" por "Sound sensitivity". QLC+
sabe entonces qué hacer cuando el valor DMX del canal 5 entra o sale del
rango del alias.

Un alias se describe mediante tres partes:

* **In mode** — el modo en el que el alias surte efecto.
* **replace** — el canal del modo que se sustituye cuando se activa el
  alias.
* **with** — el canal que lo sustituye cuando se activa el alias.

> **Nota:** la sección Aliases todavía no está disponible en el editor de
> fixtures de la versión 5. Las definiciones de fixture que ya contienen
> alias siguen funcionando, pero por ahora los alias deben añadirse
> utilizando el editor de la versión 4. Esta página se actualizará cuando la
> edición de alias esté disponible en la interfaz de la versión 5.
