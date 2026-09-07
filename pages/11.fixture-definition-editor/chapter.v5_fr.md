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
### Chapitre 10

# Fixture Definition Editor

Le **Fixture Definition Editor** est utilisé pour créer et modifier des
[définitions de fixture](/basics/glossary-and-concepts#fixtures) — les
fichiers qui indiquent à QLC+ comment contrôler chacune de vos lumières.<br>
Dans l'interface de la version 5, l'éditeur est intégré directement à QLC+
plutôt que d'être une application séparée : vous l'ouvrez depuis le
**Fixture Browser** (le panneau **Add Fixtures**), en utilisant le bouton
<i class="fa fa-plus" style="color:limegreen"></i> **Create a new fixture
definition**, ou le bouton ![](../basics/edit.svg?resize=24,24) **Edit** pour
modifier celle sélectionnée.<br>
Lors de la création d'une nouvelle définition de fixture, veuillez la valider
avec le [validateur de fixture en ligne](https://www.qlcplus.org/fixture_validator.php).
Il vous aidera à créer une définition correcte.

## Enregistrer vos définitions de fixture

Pour utiliser vos définitions de fixture dans QLC+, elles doivent être
enregistrées là où QLC+ s'attend à les trouver. L'éditeur enregistre dans
votre **dossier personnel de fixtures utilisateur** :

* Linux : un dossier caché dans votre répertoire personnel —
  `$HOME/.qlcplus/Fixtures`
* Windows : un dossier dans votre répertoire utilisateur —
  `C:\Users\{Username}\QLC+\Fixtures`
* macOS : dans votre Library utilisateur —
  `$HOME/Library/Application Support/QLC+/Fixtures`

Si vous modifiez une définition **fournie** (système), l'éditeur enregistre
automatiquement une copie dans votre dossier utilisateur qui remplace celle
fournie, de sorte que l'originale n'est jamais touchée.

**Important : vous NE DEVRIEZ PAS enregistrer des fixtures personnalisés
dans le dossier fixtures *système* de QLC+. Lorsque QLC+ est désinstallé,
tout ce dossier est supprimé, et cela peut provoquer des conflits entre les
définitions système et les vôtres.**

## Barre d'outils principale

La barre d'outils en haut de l'éditeur contient les actions sur les
fichiers. Chaque définition que vous ouvrez obtient son propre **onglet**
sur la ligne ci-dessous, afin que vous puissiez travailler sur plusieurs à
la fois.

| Bouton | Ce qu'il fait |
|--------|--------------|
| <i class="fa fa-chevron-left"></i> **Back to QLC+** | Ferme l'éditeur et retourne à QLC+ (en vous demandant d'abord d'enregistrer les modifications non enregistrées). |
| ![](../basics/filenew.svg) **New definition** | Crée une nouvelle définition de fixture vide dans un nouvel onglet. |
| ![](../basics/fileopen.svg?resize=48,48) **Open definition** | Ouvre une définition de fixture `.qxf` existante dans un nouvel onglet. |
| ![](../basics/filesave.svg?resize=48,48) **Save definition** | Enregistre la définition dans l'onglet actif. |
| ![](../basics/filesaveas.svg?resize=48,48) **Save definition as…** | Enregistre la définition active sous un nouveau nom. |

## L'éditeur

Contrairement à l'éditeur autonome de la version 4 (qui utilisait des
onglets et des fenêtres séparés), l'éditeur de la version 5 affiche
l'ensemble de la définition comme un seul panneau défilant de **sections**
repliables à gauche, avec un **panneau d'édition** partagé à droite qui
s'ouvre lorsque vous ajoutez ou modifiez un canal ou un mode.

Les sections apparaissent dans l'ordre logique à suivre lors de la
construction d'une nouvelle définition, de haut en bas :

[**General**](general)<br>
[**Physical**](physical)<br>
[**Channels**](channels)<br>
[**Modes**](modes)<br>
[**Aliases**](aliases)<br>
