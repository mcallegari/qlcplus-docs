---
title: 'Editor de Scripts'
date: '04:07 22-08-2023'
---

Un **Script** és una funció escrita com un petit programa **JavaScript**. Us permet controlar fixtures i altres funcions amb lògica — iniciant i aturant funcions, establint canals, esperant, generant valors aleatoris, executant ordres del sistema i més. L'Editor de Scripts s'obre al panell dret de l'espai de treball [Fixtures and Functions](/fixtures-and-functions).

Tot el cos de l'script s'executa com el contingut d'una única funció JavaScript, de manera que podeu utilitzar JavaScript normal — variables, `if`/`for`/`while`, funcions, i els objectes estàndard `Math`, `String`, etc. Tota la interacció amb QLC+ es fa a través d'un objecte global anomenat **`Engine`**, els mètodes del qual es documenten a l'[Engine API](#engine-api) més avall.

## Barra d'eines

| Botó | Què fa |
|--------|--------------|
| **Name** | El nom de l'script (barra superior). |
| <i class="fa fa-chevron-left fa-2x"></i> **Back** | Torna a l'editor anterior. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Afegir una crida a mètode a la posició del cursor** | Obre un menú d'ordres ja fetes per inserir a la posició del cursor (vegeu més avall). |
| ![](/basics/functions.svg?resize=48,48) **Mostrar/amagar l'arbre de funcions** | Obre el Gestor de Funcions en un panell lateral. Feu **doble clic** o arrossegueu una funció per inserir el seu ID a l'script. |
| ![](/basics/fixture.svg?resize=48,48) **Mostrar/amagar l'arbre de fixtures** | Obre el Gestor de Grups de Fixtures en un panell lateral. Feu **doble clic** o arrossegueu un fixture per inserir el seu ID. |
| <i class="fa fa-spell-check fa-2x"></i> **Comprovar la sintaxi de l'script** | Valida l'script i informa de qualsevol error en una finestra emergent. |

## Escriure l'script

L'àrea principal és un editor de text pla on escriviu l'script, una ordre per línia. Els canvis es desen automàticament un moment després de deixar d'escriure.

Com que les ordres es refereixen a funcions i fixtures pel seu **ID**, els arbres de funcions i fixtures (i l'arrossegar i deixar anar) són la manera fàcil d'inserir els ID correctes sense haver-los de cercar.

## Menú d'inserció de mètode

El botó <i class="fa fa-2x fa-plus" style="color:limegreen"></i> insereix una plantilla
per a una ordre habitual, a punt perquè la ompliu:

| Entrada | Què insereix |
|-------|-----------------|
| <i class="fa fa-2x fa-play"></i> **Start function** | Comença a executar una altra funció. |
| <i class="fa fa-2x fa-stop"></i> **Stop function** | Atura una funció en execució. |
| <i class="fa fa-2x fa-sliders" style="color:lime"></i> **Set fixture channel** | Estableix un valor de canal en un fixture. |
| <i class="fa fa-2x fa-hourglass-end" style="color:deepskyblue"></i> **Wait time** | Pausa durant un temps determinat abans de la línia següent. |
| <i class="fa fa-2x fa-dice" style="color:coral"></i> **Random number** | Produeix un valor aleatori. |
| <i class="fa fa-2x fa-moon" style="color:darkslateblue"></i> **Blackout** | Activa o desactiva el blackout. |
| <i class="fa fa-2x fa-terminal"></i> **System command** | Executa una ordre externa. |
| <i class="fa fa-2x fa-folder-open" style="color:gold"></i> **File path** | Obre un selector de fitxers i insereix el camí del fitxer seleccionat (entre cometes), per a ordres que necessiten un fitxer. |

## Engine API

Cada operació de QLC+ és un mètode de l'objecte global **`Engine`**, invocat com a
`Engine.methodName(arguments)`. Les funcions i els fixtures sempre es referencien pel seu
**ID** numèric — utilitzeu els arbres de funcions/fixtures o l'arrossegar i deixar anar per inserir
els ID correctes.

Els temps es poden indicar en **mil·lisegons** (un nombre) o com una **cadena de temps
de QLC+** (p. ex. `"2s"`, `"1m30s"`, `"2s.140"`), segons el mètode.

### Funcions

| Mètode | Descripció |
|--------|-------------|
| `Engine.startFunction(fID)` | Inicia la funció amb l'ID indicat. Per defecte, l'script en fa un seguiment i l'atura quan l'script acaba (vegeu `stopOnExit`). Retorna `true` si té èxit. |
| `Engine.stopFunction(fID)` | Atura la funció en execució amb l'ID indicat. Retorna `true` si té èxit. |
| `Engine.isFunctionRunning(fID)` | Retorna `true` si la funció s'està executant actualment, altrament `false`. |
| `Engine.waitFunctionStart(fID)` | Pausa l'script fins que la funció indicada s'hagi iniciat. |
| `Engine.waitFunctionStop(fID)` | Pausa l'script fins que la funció indicada s'hagi aturat (acabat). |
| `Engine.stopOnExit(value)` | Quan és `true` (el valor per defecte), les funcions iniciades per aquest script s'aturen automàticament quan l'script acaba. Crideu `Engine.stopOnExit(false)` per deixar en execució les funcions iniciades després que l'script acabi. |

### Atributs de funció

Els atributs són els valors ajustables d'una funció, com la **Intensity** (índex `0`)
i els atributs de velocitat d'una funció. Es poden referenciar per índex o per nom.

| Mètode | Descripció |
|--------|-------------|
| `Engine.getFunctionAttribute(fID, attributeIndex)` | Retorna el valor actual de l'atribut a l'índex indicat (Intensity és `0`), o `0` si no està disponible. |
| `Engine.setFunctionAttribute(fID, attributeIndex, value)` | Estableix l'atribut a l'índex indicat a `value`. Retorna `true` si té èxit. |
| `Engine.setFunctionAttribute(fID, attributeName, value)` | Estableix l'atribut amb el nom indicat (p. ex. `"Intensity"`) a `value`. Retorna `true` si té èxit. |

### Fixtures i canals

| Mètode | Descripció |
|--------|-------------|
| `Engine.setFixture(fxID, channel, value)` | Estableix `channel` (índex a partir de `0`, relatiu al fixture) del fixture `fxID` al valor DMX `value` (0–255). Retorna `true` si té èxit. |
| `Engine.setFixture(fxID, channel, value, time)` | Com a l'anterior, però esvaint fins al valor durant `time` mil·lisegons. |
| `Engine.getChannelValue(universe, channel)` | Retorna el valor DMX actual (0–255) d'un canal **absolut** en un univers. Nota: aquí `universe` i `channel` són l'índex d'univers i l'índex de canal en base zero, **no** un canal relatiu al fixture. |

### Temporització i flux

| Mètode | Descripció |
|--------|-------------|
| `Engine.waitTime(ms)` | Pausa l'script durant `ms` mil·lisegons abans d'executar la línia següent. |
| `Engine.waitTime(time)` | Pausa l'script durant la cadena de temps de QLC+ indicada (p. ex. `"1s.500"`). |
| `Engine.random(min, max)` | Retorna un nombre enter aleatori entre `min` i `max` **mil·lisegons** (nombres). Útil combinat amb `waitTime`. |
| `Engine.random(minTime, maxTime)` | Retorna un nombre aleatori de mil·lisegons entre dues cadenes de temps de QLC+ (p. ex. `Engine.random("1s", "5s")`). |

### Control global

| Mètode | Descripció |
|--------|-------------|
| `Engine.setBlackout(enable)` | Sol·licita el blackout quan `enable` és `true`, l'allibera quan és `false`. Retorna `true` si té èxit. |
| `Engine.setBPM(bpm)` | Estableix les pulsacions per minut del generador de pols intern. Retorna `true` si té èxit. |
| `Engine.systemCommand(command)` | Executa un programa extern separat de QLC+. La primera paraula és el programa; la resta són arguments. Poseu entre cometes simples un argument que contingui espais — per exemple `Engine.systemCommand("aplay '/home/me/my file.wav'")`. (No disponible a iOS.) |

### Exemple

```javascript
// Fade fixture 0's first channel (dimmer) up over 2 seconds
Engine.setFixture(0, 0, 255, 2000);
Engine.waitTime("2s");

// Start a chaser and let it run on its own after the script ends
Engine.stopOnExit(false);
Engine.startFunction(5);

// Wait a random time, then trigger a blackout
Engine.waitTime(Engine.random("1s", "4s"));
Engine.setBlackout(true);
```

> **Nota sobre errors:** si l'script no es pot analitzar o llança una excepció, QLC+
> informa del número de línia i el missatge. Utilitzeu **Comprovar la sintaxi de
> l'script** a la barra d'eines per validar-lo sense executar-lo.
