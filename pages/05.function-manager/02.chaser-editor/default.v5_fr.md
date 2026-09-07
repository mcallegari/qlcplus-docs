---
title: 'Éditeur de Chaser'
date: '12:08 21-08-2023'
---

Un **Chaser** joue une liste de fonctions (généralement des scènes) l'une après
l'autre, chacune pendant une durée définie. C'est le principal moyen de
construire des séquences d'aspects — chases de couleur, effets basés sur des
steps, piles de cues, etc. L'Éditeur de Chaser s'ouvre dans le panneau droit de
l'espace de travail [Fixtures and Functions](/fixtures-and-functions).

## Barre d'outils

| Bouton | Ce qu'il fait |
|--------|--------------|
| **Name** | Le nom du chaser (barre supérieure). |
| <i class="fa fa-chevron-left fa-2x"></i> **Back** | Retourne à l'éditeur précédent. |
| <i class="fa fa-2x fa-circle-left" style="color:cyan"></i> **Preview the previous step** | Lorsque l'aperçu est en cours, recule pas à pas dans le chaser afin de pouvoir vérifier chaque aspect sur la sortie. |
| <i class="fa fa-2x fa-circle-right" style="color:cyan"></i> **Preview the next step** | Lorsque l'aperçu est en cours, avance pas à pas dans le chaser. |
| <i class="fa fa-2x fa-plus" style="color:limegreen"></i> **Add a new step** | Ouvre le Gestionnaire de Fonctions dans un panneau latéral. **Double-cliquez** ou glissez des fonctions depuis celui-ci pour les ajouter comme steps. |
| <i class="fa fa-2x fa-clone"></i> **Duplicate the selected step(s)** | Copie les steps sélectionnés, en insérant les copies dans la liste. |
| <i class="fa fa-2x fa-shuffle" style="color:gold"></i> **Randomize the selected step(s) order** | Mélange l'ordre des steps sélectionnés. |
| <i class="fa fa-2x fa-stopwatch" style="color:lightskyblue"></i> **Auto-set step durations** | Répartit la durée totale du chaser de manière égale entre les steps sélectionnés. |
| <i class="fa fa-2x fa-minus" style="color:crimson"></i> **Remove the selected steps** | Supprime les steps sélectionnés (demande une confirmation). |
| <i class="fa fa-2x fa-print"></i> **Print the Chaser steps** | Imprime la liste des steps du chaser. |

Les boutons d'aperçu n'apparaissent que lorsque l'aperçu est actif. Les boutons
d'édition sont désactivés pendant l'exécution de l'aperçu, et les boutons de
duplication/durée automatique/suppression nécessitent qu'au moins un step soit
sélectionné.

## La liste des steps

Chaque ligne est un step du chaser :

| Colonne | Signification |
|--------|---------|
| **#** | Le numéro du step, dans l'ordre de lecture. |
| **Function** | La fonction jouée par ce step. |
| **Fade In** | Le temps mis par le step pour son fondu d'entrée. |
| **Hold** | Le temps pendant lequel le step reste au maximum avant le fondu de sortie. |
| **Fade Out** | Le temps mis par le step pour son fondu de sortie. |
| **Duration** | Le temps total du step (fade in + hold). |
| **Note** | Un commentaire en texte libre pour le step. |

Interactions :

| Action | Résultat |
|--------|--------|
| **Clic** | Sélectionne un step. |
| **Ctrl+clic** / **Shift+clic** | Ajoute à la sélection / sélectionne une plage. |
| **Glisser** un step | Le réordonne ; une ligne indique où il sera déposé. |
| **Glisser** depuis le Gestionnaire de Fonctions | Ajoute des fonctions comme steps à la position de dépôt. |
| **Double-clic** sur le nom de la fonction | Ouvre l'éditeur propre à cette fonction. |
| **Double-clic** sur un champ de temps | Modifie le temps de ce step directement dans la liste. |
| **Double-clic** sur la note | Modifie la note du step directement dans la liste (**Entrée** confirme, **Échap** annule). |

Les champs de temps qui ne sont pas en mode **Per Step** (voir ci-dessous) ne
sont pas modifiables dans la liste.

## Propriétés d'exécution

La section **Propriétés d'exécution**, repliable, contrôle la manière dont le
chaser est lu.

### Ordre d'exécution

| Icône | Mode | Comportement |
|------|------|-----------|
| <i class="fa fa-2x fa-retweet"></i> | **Loop** | Recommence depuis le premier step indéfiniment. |
| <i class="fa fa-2x fa-right-long"></i> | **Single Shot** | Joue une seule fois, puis s'arrête. |
| <i class="fa fa-2x fa-right-left"></i> | **Ping Pong** | Joue en avant, puis en arrière, et recommence. |
| <i class="fa fa-2x fa-shuffle"></i> | **Random** | Joue les steps dans un ordre aléatoire. |

### Direction

| Icône | Mode | Comportement |
|------|------|-----------|
| <i class="fa fa-2x fa-angles-right"></i> | **Forward** | Commence au premier step et descend dans la liste. |
| <i class="fa fa-2x fa-angles-left"></i> | **Backward** | Commence au dernier step et remonte dans la liste. |

### Tempo

| Icône | Mode | Comportement |
|------|------|-----------|
| **T** | **Time** | Les temps des steps sont exprimés en minutes/secondes/millisecondes. |
| **B** | **Beats** | Les temps des steps sont exprimés en beats, synchronisés avec le tempo global. |

### Fade In / Fade Out / Duration

Ces trois réglages déterminent d'où chaque step tire sa temporisation.

| Icône | Mode | Comportement |
|------|------|-----------|
| **D** | **Default** | Chaque step utilise le temps de fondu de sa propre fonction. (Fade In / Fade Out uniquement.) |
| **C** | **Common** | Une seule valeur, saisie une fois, est partagée par tous les steps. |
| **S** | **Per Step** | Chaque step conserve sa propre valeur, modifiable directement dans la liste des steps. |
