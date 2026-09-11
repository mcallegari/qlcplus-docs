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
### Capítol 10

# Editor de Definicions de Fixture

L'**Editor de Definicions de Fixture** s'utilitza per crear i modificar [definicions de
fixture](/basics/glossary-and-concepts#fixtures) — els fitxers que indiquen a QLC+
com controlar cadascun dels vostres llums.<br>
A la interfície de la versió 5, l'editor està integrat dins del mateix QLC+ en lloc de ser
una aplicació separada: l'obriu des del **Navegador de Fixtures** (el panell **Afegeix
Fixtures**), utilitzant el botó <i class="fa fa-plus" style="color:limegreen"></i>
**Crea una nova definició de fixture**, o el botó
![](../basics/edit.svg?resize=24,24) **Edita** per modificar la
seleccionada.<br>
Quan creeu una nova definició de fixture, si us plau valideu-la amb el [validador de
fixtures en línia](https://www.qlcplus.org/fixture_validator.php). Us ajudarà a fer
una definició correcta.

## Desar les vostres definicions de fixture

Per utilitzar les vostres definicions de fixture a QLC+, s'han de desar on QLC+ espera
trobar-les. L'editor desa a la vostra **carpeta de fixtures d'usuari** personal:

* Linux: una carpeta amagada al vostre directori d'inici — `$HOME/.qlcplus/Fixtures`
* Windows: una carpeta al vostre directori d'usuari — `C:\Users\{Username}\QLC+\Fixtures`
* macOS: a la vostra Library d'usuari — `$HOME/Library/Application Support/QLC+/Fixtures`

Si editeu una definició **inclosa** (del sistema), l'editor desa automàticament una
còpia a la vostra carpeta d'usuari que substitueix l'original inclosa, de manera que
l'original mai es toca.

**Important: NO hauríeu de desar fixtures personalitzats a la carpeta de fixtures del
*sistema* de QLC+. Quan es desinstal·la QLC+, tot el que hi ha en aquesta carpeta
s'elimina, i pot causar conflictes entre el sistema i les vostres pròpies
definicions.**

## Barra d'eines principal

La barra d'eines superior de l'editor conté les accions de fitxer. Cada definició que
obriu obté la seva pròpia **pestanya** a la fila de sota, de manera que podeu treballar
en diverses alhora.

| Botó | Què fa |
|--------|--------------|
| <i class="fa fa-chevron-left"></i> **Torna a QLC+** | Tanca l'editor i torna a QLC+ (demanant-vos primer que deseu qualsevol canvi no desat). |
| ![](../basics/filenew.svg) **Nova definició** | Crea una definició de fixture nova i buida en una nova pestanya. |
| ![](../basics/fileopen.svg?resize=48,48) **Obre definició** | Obre una definició de fixture `.qxf` existent en una nova pestanya. |
| ![](../basics/filesave.svg?resize=48,48) **Desa definició** | Desa la definició de la pestanya activa. |
| ![](../basics/filesaveas.svg?resize=48,48) **Desa la definició com a…** | Desa la definició activa amb un nom nou. |

## L'editor

A diferència de l'editor autònom de la versió 4 (que utilitzava pestanyes i finestres
separades), l'editor de la versió 5 mostra tota la definició com un únic panell
desplaçable de **seccions** plegables a l'esquerra, amb un **panell d'edició** compartit
a la dreta que s'obre quan afegiu o editeu un canal o un mode.

Les seccions apareixen en l'ordre lògic que hauríeu de seguir en crear una nova
definició, de dalt a baix:

[**General**](general)<br>
[**Física**](physical)<br>
[**Canals**](channels)<br>
[**Modes**](modes)<br>
[**Àlies**](aliases)<br>
