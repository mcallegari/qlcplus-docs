---
title: Modes
date: '12:00 04-07-2026'
---

<style>
table th:first-of-type {
    width: 25%;
}
table th:nth-of-type(2) {
    width: 75%;
}
</style>

La section **Modes** contient tous les [modes](/basics/glossary-and-concepts#fixture-mode)
que le fixture peut être configuré pour utiliser. Chaque mode est une
disposition ordonnée des canaux que vous avez définis dans la section
[Channels](../channels), correspondant au comportement du fixture dans ce
mode de fonctionnement.

Une petite barre d'outils se trouve en haut de la section :

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new mode** | Crée un nouveau mode et ouvre le [Mode Editor](#mode-editor) à droite. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected mode(s)** | Retire le mode sélectionné. Retirer un mode ne supprime aucun canal ni les autres modes. |

Chaque mode apparaît comme une ligne affichant son nom. **Double-cliquez**
sur un mode pour l'ouvrir dans le Mode Editor.

## Mode Editor

Le Mode Editor s'ouvre dans le panneau à **droite**. Il comporte un champ
**Name** (le nom de chaque mode doit être unique) et trois sections :
**Channels**, **Emitters** et **Physical**.

### Channels

C'est ici que vous placez les canaux du fixture dans l'ordre exact dans
lequel le fixture les utilise dans ce mode.

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected channel(s)** | Retire les canaux sélectionnés de ce mode. Les autres modes restent inchangés. |
| <i class="fa fa-2x fa-certificate"></i> **Create a new emitter** | Regroupe les canaux sélectionnés dans un nouvel [emitter](#emitters). |

Pour **ajouter** des canaux au mode, **faites-les glisser** depuis la
section [Channels](../channels) dans cette liste (une zone « Drop channels
here » s'affiche lorsque le mode est vide). Faites glisser les canaux à
l'intérieur de la liste pour les réordonner — leur ordre est fondamental
pour la définition du mode. La colonne **Acts on** à côté de chaque canal le
lie à un autre canal (par exemple un canal qui contrôle la vitesse d'un
gobo rotatif).

### Emitters

Les emitters (appelés *heads* dans les versions antérieures) permettent de
définir plusieurs sources lumineuses au sein d'un seul fixture, afin que
QLC+ puisse traiter chacune individuellement — par exemple dans les
[Fixture Groups](/basics/glossary-and-concepts#fixture-group) ou les vues
2D/3D. Si un mode ne pilote qu'une seule source lumineuse, il n'est pas
nécessaire de définir des emitters.

Créez un emitter depuis la section **Channels** du mode : sélectionnez les
canaux qui appartiennent à une seule source lumineuse, puis utilisez
<i class="fa fa-certificate"></i> **Create a new emitter**. Chaque emitter
est numéroté automatiquement (#1, #2, …) et liste les canaux qui lui sont
assignés.

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-minus" style="color:crimson"></i> **Remove the selected emitter(s)** | Supprime les emitters sélectionnés. |

N'incluez que les canaux spécifiques à chaque source lumineuse. Par exemple,
si trois heads ont chacun leur propre dimmer, incluez le canal dimmer dans
chaque emitter ; si le fixture a un seul dimmer pour tous les heads,
omettez-le.

### Physical

Cette section contient les mêmes propriétés que la section globale
[Physical](../physical). Choisissez :

* **Use global settings** — le mode utilise les informations physiques
  globales du fixture (par défaut).
* **Override global settings** — le mode possède ses propres valeurs
  physiques ; les champs deviennent modifiables pour pouvoir les saisir.
