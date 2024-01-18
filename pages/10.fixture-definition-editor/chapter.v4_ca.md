---
title: 'Editor de Definicions de Fixture'
date: '05:24 22-08-2023'
taxonomy:
    category: docs
media_order: 'fixtureeditor_physical.png,fixtureeditor_aliases.png,fixtureeditor_channel_color.png,fixtureeditor_channel_gobo.png,fixtureeditor_channel_preset.png,fixtureeditor_channel_shutter.png,fixtureeditor_channel_wizard.png,fixtureeditor_channels.png,fixtureeditor_general.png,fixtureeditor_mode_channels.png,fixtureeditor_mode_edit_head.png,fixtureeditor_mode_heads.png'
---

### Capítol 10

# Editor de Definicions de Fixture

L'Editor de Definicions de Fixture és una aplicació separada empaquetada juntament amb QLC+ per crear i modificar [definicions de fixture](/basics/glossary-and-concepts#fixtures). Tenir una definició de fixture per a cada un dels teus llums permet a QLC+ saber com controlar-los.

## Desar les definicions del fixture

Per utilitzar les definicions del vostre fixture a QLC+, heu de desar-les en una ubicació on QLC+ espera trobar-les. Hi ha dos llocs on podeu desar les definicions del fixture:
1. A la mateixa carpeta que el teu espai de treball QLC+ (útil si vols donar el teu espai de treball a una altra persona)
2. A la carpeta de fixtures d'usuari que es troba a les ubicacions següents:
    * Linux: és una carpeta amagada al directori d'inici de l'usuari: $HOME/.qlcplus/Fixtures
    * Windows: és una carpeta del vostre usuari (p. ex. MyUser) directori: C:\\Users\\MyUser\\QLC+\\Fixtures
    * Mac OS: es troba al directori de la biblioteca d'usuaris: $HOME/Library/Application\\ Support/QLC+/Fixtures

**Nota important: NO heu de desar ni copiar els vostres fixtures personalitzats a la carpeta QLC+ de fixtures del sistema. Això és perquè quan QLC+ es desinstal·la, se suprimeixen tots els fixtures d'aquesta carpeta. També pot causar conflictes no desitjats entre el sistema i les pròpies definicions de fixture.**

Barra d'eines Principal
------------
La finestra principal de l'Editor de Fixtures és només un espai de treball buit que conté les finestres d'editor reals utilitzades per a editar les definicions de fixture. Teniu a la vostra disposició les opcions següents:

|     |     |
| --- | --- |
| ![](/basics/filenew.png) | Crea una nova definició de fixture. Obre una finestra buida de l'Editor del Fixture. |
| ![](/basics/fileopen.png) | Obre una definició de fixture existent. Obre la definició del fixture en una finestra de l'Editor del Fixture. |
| ![](/basics/filesave.png) | Desa la definició del fixture a la finestra de l'Editor de Fixture actualment activa. |
| ![](/basics/filesaveas.png) | Desa la definició del fixture amb un nom donat a la finestra de l'Editor de Fixture actualment activa. |

Editor de Fixtures
==============

Les finestres de l'Editor de Fixture contenen tot el necessari per editar una definició de Fixture alhora. Les finestres estan separades en cinc pestanyes:<br>
[**General**](general)<br>
[**Física**](physical)<br>
[**Canals**](channels)<br>
[**Modes**](modes)<br>
[**Àlies**](aliases)<br>
Les pestanyes s'organitzen en un ordre lògic que s'ha de seguir d'esquerra a dreta quan es crea una nova definició de fixture.
