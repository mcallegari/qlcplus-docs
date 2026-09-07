---
title: 'Fixture Definition Editor'
date: '12:00 04-07-2026'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
table th:first-of-type {
    width: 30%;
}
table th:nth-of-type(2) {
    width: 70%;
}
</style>
### Capítulo 10

# Fixture Definition Editor

El **Fixture Definition Editor** se utiliza para crear y modificar las
[definiciones de fixture](/basics/glossary-and-concepts#fixtures) — los
archivos que indican a QLC+ cómo controlar cada una de las luces.<br>
En la interfaz de la versión 5, el editor está integrado directamente en
QLC+ en lugar de ser una aplicación separada: se abre desde el **Fixture
Browser** (el panel **Add Fixtures**), utilizando el botón
<i class="fa fa-plus" style="color:limegreen"></i> **Create a new fixture
definition**, o el botón ![](../basics/edit.svg?resize=24,24) **Edit** para
modificar el seleccionado.<br>
Al crear una nueva definición de fixture, se recomienda validarla con el
[validador de fixtures en línea](https://www.qlcplus.org/fixture_validator.php).
Ayudará a crear una definición correcta.

## Guardar las definiciones de fixture

Para utilizar las definiciones de fixture propias en QLC+, es necesario
guardarlas en el lugar donde QLC+ espera encontrarlas. El editor guarda
dentro de la carpeta personal **user fixtures folder**:

* Linux: una carpeta oculta en el directorio de inicio del usuario —
  `$HOME/.qlcplus/Fixtures`
* Windows: una carpeta en el directorio de usuario —
  `C:\Users\{Username}\QLC+\Fixtures`
* macOS: en la Library del usuario —
  `$HOME/Library/Application Support/QLC+/Fixtures`

Si se modifica una definición **incluida** (de sistema), el editor guarda
automáticamente una copia en la carpeta de usuario que sobrescribe la
incluida, de modo que el original nunca se modifica.

**Importante: NO se deben guardar fixtures personalizados en la carpeta de
fixtures del *sistema* de QLC+. Cuando se desinstala QLC+, todo el contenido
de esa carpeta se elimina, y esto puede causar conflictos entre las
definiciones de sistema y las propias.**

## Barra de herramientas principal

La barra de herramientas superior del editor contiene las acciones sobre
archivos. Cada definición abierta obtiene su propia **pestaña** en la fila
inferior, de modo que se puede trabajar en varias a la vez.

| Botón | Función |
|--------|--------------|
| <i class="fa fa-chevron-left"></i> **Back to QLC+** | Cierra el editor y vuelve a QLC+ (pidiendo antes guardar los cambios no guardados). |
| ![](../basics/filenew.svg) **New definition** | Crea una nueva definición de fixture vacía en una nueva pestaña. |
| ![](../basics/fileopen.svg?resize=48,48) **Open definition** | Abre una definición de fixture `.qxf` existente en una nueva pestaña. |
| ![](../basics/filesave.svg?resize=48,48) **Save definition** | Guarda la definición de la pestaña activa. |
| ![](../basics/filesaveas.svg?resize=48,48) **Save definition as…** | Guarda la definición activa con un nuevo nombre. |

## El editor

A diferencia del editor independiente de la versión 4 (que utilizaba
pestañas y ventanas separadas), el editor de la versión 5 muestra toda la
definición como un único panel desplazable de **secciones** plegables a la
izquierda, con un **panel editor** compartido a la derecha que se abre al
añadir o editar un canal o un modo.

Las secciones aparecen en el orden lógico que se debe seguir al crear una
nueva definición, de arriba a abajo:

[**General**](general)<br>
[**Physical**](physical)<br>
[**Channels**](channels)<br>
[**Modes**](modes)<br>
[**Aliases**](aliases)<br>
