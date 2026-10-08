---
title: 'Simple Desk'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Chapter 6

# Simple Desk

El **Simple Desk** és una superfície de control DMX manual. Et dona un fader i
una casella de valor per a cada canal d'un univers, a més d'un **keypad**
per introduir ordres a l'estil de consola — permetent-te controlar el
teu equipament a mà, igual que en una taula d'il·luminació tradicional. És
ideal per a un control pràctic ràpid, el busking i les proves.

Obre'l des de la barra d'eines principal (la icona de Simple Desk). El que
estableixis aquí es pot capturar en una Escena amb
[DMX Dump](/main-window/dmx-dump).

## Disposició

El Simple Desk es divideix en dues àrees, amb un separador arrossegable entre
elles:

* **Superior** — els faders de canal de l'univers seleccionat.
* **Inferior** — la **Fixture List**, l'**historial d'ordres**, i el
  **keypad**.

## Faders de canal

L'àrea superior mostra una columna per cada canal DMX de l'univers actual,
cadascuna amb:

* Una **icona de canal** — feu-hi clic per obrir una eina dedicada a aquest
  tipus de canal (control lliscant o selector de predefinits). Premeu **Esc**
  per tancar-la.
* Un **fader** — arrossega'l per establir el valor del canal.
* Una **casella de valor** — escriu un valor exacte. Mostra DMX (0–255) o
  percentatge (0–100%) segons el mode de visualització.
* La **adreça DMX** del canal.
* Un botó de **restabliment** (✕) — retorna el canal al seu estat normal (no
  sobreescrit).

Els canals que has canviat manualment queden **sobreescrits** i es mostren en
**vermell**. Els altres canals es tenyeixen per mostrar a quin fixture
pertanyen (tons alterns per als fixtures veïns).

### Barra d'eines

A sobre dels faders:

* **Universe** — tria quin univers controlen els faders.
* **Reset the whole universe** (✕) — esborra totes les sobreescriptures de
  l'univers actual.
* **DMX / %** — alterna les caselles de valor entre valors DMX en brut
  (0–255) i percentatges (0–100%).

## Fixture List

La llista inferior esquerra mostra els fixtures connectats a l'univers actual
amb el seu rang d'adreces. Fes clic en un fixture per desplaçar la vista de
faders fins al seu primer canal, cosa que facilita trobar els canals d'un
fixture en un univers complet.

## Keypad i historial d'ordres

L'àrea inferior dreta és un **keypad** numèric per introduir ordres, amb un
**historial d'ordres** al costat. Cada ordre que executes s'afegeix a
l'historial; fes **doble clic** en una entrada de l'historial per tornar-la
a carregar al keypad i així poder tornar-la a executar o editar-la.

Escriu una ordre amb el keypad en pantalla (o amb el teclat) i prem **ENTER**
per executar-la. **CLR** esborra l'ordre actual.

## Sintaxi de les ordres del keypad

Les ordres del keypad s'adrecen a un o més canals i n'estableixen els
valors, a l'estil d'una consola d'il·luminació clàssica. Els canals
s'adrecen mitjançant la seva **adreça DMX** dins de l'univers actual (base 1).

### Paraules clau i operadors

| Token | Significat |
|-------|---------|
| `AT` | Estableix el(s) canal(s) adreçat(s) a un valor: `1 AT 200`. |
| `THRU` | Un rang — de canals (`1 THRU 10`) o, després d'`AT`, de valors per a un esvaïment al llarg del rang. |
| `BY` | Un pas en adreçar un rang: `1 THRU 20 BY 2` selecciona un canal de cada dos. |
| `FULL` | Drecera per al valor màxim (255 / 100%). |
| `ZERO` | Drecera per al valor 0. |
| `+` | Suma als valors actuals dels canals: `1 + 20`. |
| `-` | Resta dels valors actuals dels canals: `1 - 20`. |
| `+%` | Augmenta els valors actuals en un percentatge: `1 +% 10`. |
| `-%` | Disminueix els valors actuals en un percentatge: `1 -% 10`. |

El keypad mostra `+`/`-` o `+%`/`-%` segons el mode de visualització actual.

### Formes bàsiques

| Ordre | Efecte |
|---------|--------|
| `5` | Selecciona el canal 5 (i el converteix en la selecció de treball). |
| `5 AT 128` | Estableix el canal 5 al valor 128. |
| `5 FULL` | Estableix el canal 5 al màxim (255). |
| `5 ZERO` | Estableix el canal 5 a 0. |

### Rangs

| Ordre | Efecte |
|---------|--------|
| `1 THRU 10 AT 255` | Estableix els canals de l'1 al 10, tots a 255. |
| `1 THRU 10 BY 2 AT 128` | Estableix cada segon canal de l'1 al 10 (1, 3, 5, 7, 9) a 128. |
| `1 THRU 10 AT 0 THRU 255` | Reparteix els valors uniformement al llarg del rang — un esvaïment de 0 al canal 1 fins a 255 al canal 10. |

### Canvis relatius

| Ordre | Efecte |
|---------|--------|
| `1 THRU 10 + 20` | Suma 20 al valor actual de cada canal de l'1 al 10 (limitat a 255). |
| `1 THRU 10 - 20` | Resta 20 de cadascun (limitat a 0). |
| `1 +% 10` | Augmenta el valor actual del canal 1 en un 10%. |
| `1 -% 10` | Disminueix el valor actual del canal 1 en un 10%. |

### Repetició sobre l'última selecció

Si introdueixes una ordre **sense especificar canals** (per exemple, només
`AT 100`, `FULL`, o `ZERO`), s'aplica als **mateixos canals que l'ordre
anterior**. Això et permet seleccionar un conjunt de canals una sola vegada i
després continuar ajustant-los:

```
1 THRU 8 AT 255   ← selecciona els canals 1–8 i els estableix al màxim
ZERO              ← els mateixos canals 1–8 passen a 0
AT 128            ← els mateixos canals 1–8 passen a 128
```

> Els valors sempre són DMX (0–255) en les ordres. Un rang de valors `THRU`
> i el pas `BY` et permeten construir esvaïments i patrons en una sola
> línia, exactament igual que en una consola de maquinari.
