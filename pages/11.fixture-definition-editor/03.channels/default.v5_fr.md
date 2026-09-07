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

La section **Channels** contient tous les canaux que le fixture comprend
dans l'ensemble de ses modes. Leur ordre ici n'a pas d'importance — les
canaux sont disposés dans un ordre précis à l'intérieur de chaque mode, dans
la section [Modes](../modes). Ce qui compte ici, c'est le **nom** de chaque
canal et ses **capabilities** (ses plages de valeurs DMX et ce qu'elles
font).

Une petite barre d'outils se trouve en haut de la section :

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new channel** | Crée un nouveau canal et ouvre le [Channel Editor](#channel-editor) à droite. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Retire les canaux sélectionnés du fixture **et de tous les modes**. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> **Channel wizard** | Crée plusieurs canaux similaires à la fois (voir [Capability wizard](#capability-wizard)). |

Cliquez sur un canal pour le sélectionner ; **double-cliquez** dessus pour
l'ouvrir dans le Channel Editor. Les canaux peuvent être **glissés** depuis
cette liste vers la liste de canaux d'un mode, dans la section
[Modes](../modes).

## Channel Editor

Le Channel Editor s'ouvre dans le panneau à **droite** de l'éditeur. Il est
utilisé pour modifier un canal individuel et les plages de valeurs DMX de
chaque **capability** (une couleur, un gobo, une rotation de prisme, etc.).
Reportez-vous au manuel de votre fixture (son « tableau DMX ») pour les
canaux et plages de valeurs exacts.

|     |     |
| --- | --- |
| **Name** | Le nom du canal. Lorsque vous choisissez un **Preset** de canal (un canal à capability unique), un nom est suggéré automatiquement, que vous pouvez tout de même personnaliser. |
| **Preset** | Un preset est un raccourci qui accélère la création de la définition et fournit au moteur de QLC+ les informations nécessaires pour reconnaître et traiter correctement un canal. Par exemple, choisir un preset de couleur (Red, Green, Blue, …) ou un preset Pan/Tilt remplit toutes les informations requises en un seul clic. Lorsqu'un preset est sélectionné, le reste de l'éditeur devient inactif. Si le canal comporte plusieurs plages DMX (capabilities), laissez **Preset** sur « Custom » et définissez vous-même les capabilities (ci-dessous). |
| **Type** | Le rôle du canal dans le fixture. Choisir un type définit implicitement la précédence du canal ([LTP](/basics/glossary-and-concepts#ltp-latest-takes-precedence) ou [HTP](/basics/glossary-and-concepts#htp-highest-takes-precedence)), il est donc important de choisir le bon type.<br><br>Les types d'intensité/couleur obéissent à la règle **HTP** : **Intensity, Red, Green, Blue, Cyan, Magenta, Yellow, White, Amber, UV, Lime et Indigo**.<br>Tous les autres types obéissent à la règle **LTP** : **Beam, Colour, Effect, Gobo, Maintenance, Nothing, Pan, Tilt, Prism, Shutter et Speed**.<br><br>**Intensity** est utilisé pour les canaux dimmer / master dimmer.<br>Les **couleurs primaires** (Red, Cyan, White, …) contrôlent des canaux de couleur unique — à ne pas confondre avec le type « Colour » ci-dessous. Notez que le [Grand Master](/basics/glossary-and-concepts#grand-master) ne contrôle par défaut que les canaux Intensity et de couleur primaire, et l'outil Color n'est disponible que lorsqu'un fixture fournit des canaux de couleur primaire RGBAWUV/CMY.<br>Le type **Colour** contrôle une roue de couleurs fixe ou des macros de couleur prédéfinies — *ne lui assignez pas* de canaux RGBAW/CMY individuels.<br>Le type **Gobo** contrôle la position ou l'indexation de la roue de gobos.<br>Le type **Speed** contrôle quelque chose lié à la vitesse (rotation de gobo, vitesse d'arc-en-ciel, …).<br>Le type **Prism** contrôle un prisme.<br>Le type **Shutter** contrôle un shutter, un strobe ou un iris.<br>Le type **Beam** contrôle un modeleur de faisceau (comme un zoom).<br>Le type **Effect** contrôle quelque chose qui ne rentre pas dans les autres groupes.<br>Le type **Maintenance** contrôle des fonctions telles que la réinitialisation ou un ventilateur de refroidissement.<br>Le type **Nothing** est un canal espaceur ou de remplissage.<br>Les types **Pan** et **Tilt** contrôlent le mouvement Pan/Tilt (X/Y) des lyres ou des lasers. |
| **Role** | Applicable aux paires de canaux qui forment des valeurs sur 16 bits, généralement **Pan** ou **Tilt** (certains fixtures plus récents prennent aussi en charge le dimmer, RGB, gobo ou focus en 16 bits).<br>Pour les valeurs sur 8 bits (un canal par fonction), assignez l'octet de contrôle **Coarse (MSB)**. Pour les valeurs sur 16 bits (deux canaux par fonction), assignez **Coarse (MSB)** au canal grossier et **Fine (LSB)** au canal fin. En cas de doute, utilisez **Coarse (MSB)**. |
| **Default value** | La valeur DMX (0–255) à laquelle le canal est réglé à la mise sous tension. Par exemple, certaines lyres centrent leur Pan/Tilt, ce qui correspond à une valeur initiale de 127. |
| **Capabilities** | La liste des plages de valeurs DMX pour le canal, chacune avec une valeur **From**, une valeur **To** et une **Description**. Si un canal ne fournit qu'une seule capability (par ex. pan ou dimmer), utilisez plutôt un preset de canal. Pour des canaux plus riches (couleurs, gobos), créez une plage pour chaque entrée (par ex. 0–15 blanc, 16–32 bleu …). Cliquez sur From / To / Description d'une ligne pour la modifier ; appuyez sur **Tab** pour passer d'un champ à l'autre et continuer sur la ligne suivante. Une icône d'avertissement ⚠ apparaît sur une ligne dont la description est vide ou dont la plage chevauche une autre. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> | **Supprime les capabilities sélectionnées** du canal. |
| <i class="fa fa-2x fa-palette" style="color:yellow"></i> | **Assignation automatique de couleur** — pour un canal de couleur, remplit automatiquement les capabilities de couleur standard. |
| <i class="fa fa-2x fa-wand-magic-sparkles" style="color:cyan"></i> | **Capability wizard** — crée plusieurs capabilities de même taille à la fois (voir ci-dessous). |

### Capability preset

Chaque capability peut se voir attribuer un **preset**, qui indique au
moteur de QLC+ des informations supplémentaires sur cette plage de valeurs
DMX. Selon le type de preset, des champs supplémentaires apparaissent :

* **ColorMacro** — choisissez une couleur unique (généralement utilisé sur
  les roues de couleurs).
* **ColorDoubleMacro** — choisissez deux couleurs pour représenter une
  position intermédiaire de roue de couleurs.
* **GoboMacro** — choisissez une image de gobo à afficher lorsque cette
  plage est active.
* **StrobeFrequency** — saisissez une fréquence de strobe précise, en Hertz.
* **StrobeFreqRange** — saisissez une fréquence minimale et maximale (en
  Hertz) pour une plage de strobe.
* **Alias** — un preset spécial indiquant que, lorsque cette plage est
  active, un canal doit être remplacé. Voir la section [Aliases](../aliases).

Une case **Preview** ou **Value(s)** à côté du preset permet de définir la
ou les couleurs associées, l'image de gobo ou la ou les valeurs de
fréquence.

## Capability wizard

Le Capability Wizard crée rapidement plusieurs plages de capability de même
taille. Cela s'applique généralement aux couleurs fixes, aux index de gobos
et aux canaux de macros.

|     |     |
| --- | --- |
| **Start** | La valeur de départ pour les nouvelles capabilities. Ajustez-la pour ignorer les capabilities déjà existantes au début de la plage du canal. |
| **Width** | La taille de chaque plage de valeurs. |
| **Amount** | Le nombre de capabilities à créer. |
| **Name** | Le nom commun pour chaque capability. Utilisez un dièse `#` pour marquer où placer un numéro d'index (par ex. « Gobo # » crée Gobo 1, Gobo 2, Gobo 3 …). |
| **Sample** | Se met à jour au fur et à mesure que vous modifiez les paramètres, en prévisualisant les capabilities qui seront créées. |
