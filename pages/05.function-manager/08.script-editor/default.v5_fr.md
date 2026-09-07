---
title: 'Éditeur de Script'
date: '04:07 22-08-2023'
---

Un **Script** est une fonction écrite comme un petit programme **JavaScript**.
Il permet de contrôler des fixtures et d'autres fonctions par la logique —
démarrer et arrêter des fonctions, définir des canaux, attendre, générer des
valeurs aléatoires, exécuter des commandes système et bien plus encore.
L'éditeur de Script s'ouvre dans le panneau droit de l'espace de travail
[Fixtures and Functions](/fixtures-and-functions).

L'ensemble du corps du script s'exécute comme le contenu d'une unique
fonction JavaScript, vous pouvez donc utiliser du JavaScript classique —
variables, `if`/`for`/`while`, fonctions, et les objets standards `Math`,
`String`, etc. Toute interaction avec QLC+ passe par un objet global appelé
**`Engine`**, dont les méthodes sont documentées dans l'[Engine API](#engine-api)
ci-dessous.

## Barre d'outils

| Bouton | Ce qu'il fait |
|--------|--------------|
| **Name** | Le nom du script (barre supérieure). |
| <i class="fa fa-chevron-left fa-2x"></i> **Back** | Retourne à l'éditeur précédent. |
| <i class="fa fa-plus fa-2x" style="color:limegreen"></i> **Add a method call at cursor position** | Ouvre un menu de commandes prêtes à insérer à la position du curseur (voir ci-dessous). |
| ![](/basics/functions.svg?resize=48,48) **Show/hide functions tree** | Ouvre le Function Manager dans un panneau latéral. **Double-cliquez** ou faites glisser une fonction pour insérer son ID dans le script. |
| ![](/basics/fixture.svg?resize=48,48) **Show/hide fixture tree** | Ouvre le Fixture Group Manager dans un panneau latéral. **Double-cliquez** ou faites glisser un fixture pour insérer son ID. |
| <i class="fa fa-spell-check fa-2x"></i> **Check the script syntax** | Valide le script et signale les éventuelles erreurs dans une fenêtre. |

## Écrire le script

La zone principale est un simple éditeur de texte où vous tapez le script,
une commande par ligne. Les modifications sont enregistrées automatiquement
peu après que vous ayez cessé de taper.

Comme les commandes font référence aux fonctions et aux fixtures par leur
**ID**, les arborescences de fonctions et de fixtures (et le glisser-déposer)
sont le moyen le plus simple d'insérer les bons ID sans avoir à les chercher.

## Menu d'insertion de méthode

Le bouton <i class="fa fa-2x fa-plus" style="color:limegreen"></i> insère un
modèle pour une commande courante, prêt à être complété :

| Entrée | Ce qu'elle insère |
|-------|-----------------|
| <i class="fa fa-2x fa-play"></i> **Start function** | Démarre l'exécution d'une autre fonction. |
| <i class="fa fa-2x fa-stop"></i> **Stop function** | Arrête une fonction en cours d'exécution. |
| <i class="fa fa-2x fa-sliders" style="color:lime"></i> **Set fixture channel** | Définit une valeur de canal sur un fixture. |
| <i class="fa fa-2x fa-hourglass-end" style="color:deepskyblue"></i> **Wait time** | Met en pause pendant un temps donné avant la ligne suivante. |
| <i class="fa fa-2x fa-dice" style="color:coral"></i> **Random number** | Produit une valeur aléatoire. |
| <i class="fa fa-2x fa-moon" style="color:darkslateblue"></i> **Blackout** | Active ou désactive le blackout. |
| <i class="fa fa-2x fa-terminal"></i> **System command** | Exécute une commande externe. |
| <i class="fa fa-2x fa-folder-open" style="color:gold"></i> **File path** | Ouvre un sélecteur de fichier et insère le chemin du fichier sélectionné (entre guillemets), pour les commandes qui nécessitent un fichier. |

## Engine API

Chaque opération de QLC+ est une méthode de l'objet global **`Engine`**,
appelée sous la forme `Engine.methodName(arguments)`. Les fonctions et les
fixtures sont toujours désignés par leur **ID** numérique — utilisez les
arborescences de fonctions/fixtures ou le glisser-déposer pour insérer les
bons ID.

Les temps peuvent être indiqués soit en **millisecondes** (un nombre), soit
sous forme de **chaîne de temps QLC+** (par ex. `"2s"`, `"1m30s"`, `"2s.140"`),
selon la méthode.

### Functions

| Méthode | Description |
|--------|-------------|
| `Engine.startFunction(fID)` | Démarre la fonction avec l'ID indiqué. Par défaut, le script en garde la trace et l'arrête à la fin du script (voir `stopOnExit`). Retourne `true` en cas de succès. |
| `Engine.stopFunction(fID)` | Arrête la fonction en cours d'exécution avec l'ID indiqué. Retourne `true` en cas de succès. |
| `Engine.isFunctionRunning(fID)` | Retourne `true` si la fonction est actuellement en cours d'exécution, sinon `false`. |
| `Engine.waitFunctionStart(fID)` | Met le script en pause jusqu'à ce que la fonction indiquée ait démarré. |
| `Engine.waitFunctionStop(fID)` | Met le script en pause jusqu'à ce que la fonction indiquée se soit arrêtée (terminée). |
| `Engine.stopOnExit(value)` | Lorsque `true` (valeur par défaut), les fonctions démarrées par ce script sont arrêtées automatiquement à la fin du script. Appelez `Engine.stopOnExit(false)` pour laisser les fonctions démarrées continuer à s'exécuter après la fin du script. |

### Attributs de fonction

Les attributs sont les valeurs ajustables d'une fonction, comme **Intensity**
(index `0`) et les attributs de vitesse d'une fonction. Ils peuvent être
adressés par index ou par nom.

| Méthode | Description |
|--------|-------------|
| `Engine.getFunctionAttribute(fID, attributeIndex)` | Retourne la valeur actuelle de l'attribut à l'index indiqué (Intensity est `0`), ou `0` s'il n'est pas disponible. |
| `Engine.setFunctionAttribute(fID, attributeIndex, value)` | Définit l'attribut à l'index indiqué sur `value`. Retourne `true` en cas de succès. |
| `Engine.setFunctionAttribute(fID, attributeName, value)` | Définit l'attribut portant le nom indiqué (par ex. `"Intensity"`) sur `value`. Retourne `true` en cas de succès. |

### Fixtures et canaux

| Méthode | Description |
|--------|-------------|
| `Engine.setFixture(fxID, channel, value)` | Définit `channel` (index à partir de `0`, relatif au fixture) du fixture `fxID` sur la valeur DMX `value` (0–255). Retourne `true` en cas de succès. |
| `Engine.setFixture(fxID, channel, value, time)` | Comme ci-dessus, mais avec un fondu vers la valeur sur `time` millisecondes. |
| `Engine.getChannelValue(universe, channel)` | Retourne la valeur DMX actuelle (0–255) d'un canal **absolu** dans un univers. Remarque : `universe` et `channel` ici sont l'index d'univers et l'index de canal en base zéro, **pas** un canal relatif au fixture. |

### Temporisation et flux

| Méthode | Description |
|--------|-------------|
| `Engine.waitTime(ms)` | Met le script en pause pendant `ms` millisecondes avant d'exécuter la ligne suivante. |
| `Engine.waitTime(time)` | Met le script en pause pour la chaîne de temps QLC+ indiquée (par ex. `"1s.500"`). |
| `Engine.random(min, max)` | Retourne un entier aléatoire compris entre `min` et `max` **millisecondes** (nombres). Pratique combiné avec `waitTime`. |
| `Engine.random(minTime, maxTime)` | Retourne un nombre aléatoire de millisecondes compris entre deux chaînes de temps QLC+ (par ex. `Engine.random("1s", "5s")`). |

### Contrôle global

| Méthode | Description |
|--------|-------------|
| `Engine.setBlackout(enable)` | Demande le blackout lorsque `enable` est `true`, le relâche lorsqu'il est `false`. Retourne `true` en cas de succès. |
| `Engine.setBPM(bpm)` | Définit les battements par minute du générateur de battement interne. Retourne `true` en cas de succès. |
| `Engine.systemCommand(command)` | Exécute un programme externe détaché de QLC+. Le premier mot est le programme ; le reste sont des arguments. Placez entre guillemets simples un argument contenant des espaces — par exemple `Engine.systemCommand("aplay '/home/me/my file.wav'")`. (Non disponible sur iOS.) |

### Exemple

```javascript
// Fait un fondu du premier canal (dimmer) du fixture 0 sur 2 secondes
Engine.setFixture(0, 0, 255, 2000);
Engine.waitTime("2s");

// Démarre un chaser et le laisse s'exécuter seul après la fin du script
Engine.stopOnExit(false);
Engine.startFunction(5);

// Attend un temps aléatoire, puis déclenche un blackout
Engine.waitTime(Engine.random("1s", "4s"));
Engine.setBlackout(true);
```

> **Remarque sur les erreurs :** si le script ne peut pas être analysé ou
> lève une exception, QLC+ signale le numéro de ligne et le message. Utilisez
> **Check the script syntax** dans la barre d'outils pour valider sans
> exécuter.
