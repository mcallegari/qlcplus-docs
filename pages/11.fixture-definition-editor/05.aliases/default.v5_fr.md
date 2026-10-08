---
title: Aliases
date: '12:00 04-07-2026'
---

La section **Aliases** définit des règles permettant de remplacer un canal
par un autre, déclenchées par des capabilities définies avec le preset
**Alias** (voir [Channels](../channels)).

Un alias permet à un canal de changer de signification en fonction de la
valeur d'un autre canal. Par exemple, un fixture possède un canal 5 nommé
« Effects » qui contrôle le comportement du canal 6. Le canal 5 a deux
capabilities : « Speed on channel 6 » et « Sound sensitivity on channel 6 »,
cette dernière étant définie avec le preset **Alias**. Par défaut (canal 5 à
0), le canal 6 agit comme un contrôle de vitesse ; lorsque le canal 5 entre
dans la plage « sound sensitivity », le canal 6 devient un réglage de
sensibilité au son.

Pour gérer cela, vous définissez deux canaux — « Speed » et « Sound
sensitivity » — et n'ajoutez que « Speed » au mode (le comportement par
défaut). Vous définissez ensuite un seul alias qui remplace « Speed » par
« Sound sensitivity ». QLC+ sait alors quoi faire lorsque la valeur DMX du
canal 5 entre dans la plage de l'alias ou en sort.

Un alias est décrit par trois parties :

* **In mode** — le mode dans lequel l'alias prend effet.
* **replace** — le canal du mode à remplacer lorsque l'alias est déclenché.
* **with** — le canal qui le remplace lorsque l'alias est déclenché.

> **Remarque :** la section Aliases n'est pas encore disponible dans
> l'éditeur de fixtures de la version 5. Les définitions de fixtures qui
> contiennent déjà des alias continuent de fonctionner, mais pour l'instant
> les alias doivent être ajoutés à l'aide de l'éditeur de la version 4.
> Cette page sera mise à jour lorsque la modification des alias sera
> disponible dans l'interface de la version 5.
