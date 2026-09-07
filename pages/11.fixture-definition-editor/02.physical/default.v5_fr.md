---
title: Physical
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

La section **Physical properties** est l'endroit où sont fournies les
informations physiques _globales_ du fixture.<br>
Le même ensemble de propriétés est également disponible à l'intérieur de
chaque **mode**, au cas où les caractéristiques physiques du fixture (par
exemple la plage de pan/tilt) changeraient selon le mode. Là, vous pouvez
soit **Use global settings**, soit **Override global settings** avec des
valeurs propres au mode (voir [Modes](../modes)).

|     |     |
| --- | --- |
| **Bulb** | * **Type** : le type de source lumineuse réelle à l'intérieur du fixture.<br>* **Lumens** : la puissance lumineuse totale de la source lumineuse, en lumens.<br>* **Colour Temp (K)** : la température de couleur de la source lumineuse, en [Kelvins](https://fr.wikipedia.org/wiki/Kelvin). |
| **Lens** | * **Name** : le type/nom de la lentille, le cas échéant.<br>* **Min Degrees** : l'angle de faisceau minimal du fixture, en [degrés](https://fr.wikipedia.org/wiki/Degr%C3%A9_(angle)).<br>* **Max Degrees** : l'angle de faisceau maximal du fixture, en [degrés](https://fr.wikipedia.org/wiki/Degr%C3%A9_(angle)). |
| **Head(s)** | * **Pan Max Degrees** : l'amplitude maximale du pan, en [degrés](https://fr.wikipedia.org/wiki/Degr%C3%A9_(angle)).<br>* **Tilt Max Degrees** : l'amplitude maximale du tilt, en [degrés](https://fr.wikipedia.org/wiki/Degr%C3%A9_(angle)).<br>* **Layout (Columns x Rows)** : pour les fixtures à pixels/matrice, la disposition des sources lumineuses sous forme de grille de colonnes par lignes. |
| **Electrical** | * **Power Consumption** : la consommation électrique totale du fixture, en [Watts](https://fr.wikipedia.org/wiki/Watt).<br>* **DMX Connector** : le type de connecteur DMX du fixture. |
| **Dimensions** | * **Weight** : le poids total du fixture, en [kilogrammes](https://fr.wikipedia.org/wiki/Kilogramme).<br>* **Width** : la largeur horizontale totale du fixture, en [millimètres](https://fr.wikipedia.org/wiki/Millim%C3%A8tre).<br>* **Height** : la hauteur verticale totale du fixture, en [millimètres](https://fr.wikipedia.org/wiki/Millim%C3%A8tre).<br>* **Depth** : la profondeur totale du fixture, en [millimètres](https://fr.wikipedia.org/wiki/Millim%C3%A8tre). |
