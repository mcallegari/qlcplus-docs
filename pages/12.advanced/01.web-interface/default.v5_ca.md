---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

QLC+ inclou un servidor web integrat que exposa algunes de les seves
funcionalitats a un navegador web normal. Això és molt útil per executar QLC+ en
un dispositiu sense pantalla (un sistema **headless**), ja sigui per treballar de
manera autònoma o per controlar-lo remotament des d'un telèfon, una tauleta o un
altre ordinador.

## Habilitar la interfície web

La interfície web **no** està habilitada per defecte. Inicieu QLC+ amb l'opció
`-w` (o `--web`) per activar-la. Opcions de línia d'ordres relacionades:

| Opció | Propòsit |
|--------|---------|
| `-w`, `--web` | Habilita l'accés web remot. |
| `-wp`, `--web-port <port>` | Utilitza un port específic (el valor per defecte és **9999**). |
| `-wa`, `--web-auth` | Habilita l'accés web amb autenticació d'usuaris. |
| `-a`, `--web-auth-file <file>` | Fitxer on emmagatzemar les credencials d'autenticació bàsica. |

Consulteu la pàgina de [paràmetres de línia d'ordres](../command-line-parameters)
per veure com passar aquestes opcions.

## Accedir a la interfície web

Des de qualsevol navegador modern (en qualsevol dispositiu de la mateixa xarxa)
connecteu-vos a:

**http://\[adreça IP\]:9999**

on *\[adreça IP\]* és l'adreça de la màquina que executa QLC+ — per exemple
`http://192.168.0.100:9999`. El navegador ha de suportar [WebSockets](https://caniuse.com/mdn-api_websocket), que QLC+
utilitza per comunicar-se amb la pàgina en temps real.

La interfície web té tres pàgines:

* **Consola Virtual**
* **Taula Simple**
* **Configuració**

També podeu crear les vostres pròpies pàgines web que es comuniquin amb QLC+ a
través de la seva [API web](web-api).

## Pàgina de la Consola Virtual

Aquesta és la pàgina per defecte. Reflecteix la **Consola Virtual** de QLC+: si
hi ha un projecte carregat, mostra els ginys que heu creat (botons, controls
lliscants, llistes de cues, marcs, rellotges, pads XY, selectors de velocitat,
animacions, activadors d'àudio, etiquetes), i operar-los al navegador controla
QLC+ en directe. Si no hi ha cap projecte carregat, la pàgina està buida.

* **Carrega el projecte** (a dalt a l'esquerra) — trieu un fitxer de projecte
  del dispositiu amb què esteu navegant; es transfereix a QLC+ i el carrega.
* **Configuració** — obre la pàgina de configuració.

La disposició i l'estat dels ginys s'envien al navegador com a JSON, i les
actualitzacions (una funció en execució, un fader mogut, un canvi de cue) es
transmeten en directe a través del WebSocket, de manera que la vista web es
manté sincronitzada amb QLC+.

## Pàgina de la Taula Simple

Una versió simplificada de la [Taula Simple](/simple-desk) d'escriptori. Mostra
un univers DMX dividit en pàgines de 32 canals.

* Utilitzeu les **fletxes esquerra/dreta** per moure-us entre pàgines de canals.
* Utilitzeu el **menú desplegable** a la part superior dreta per triar quin
  univers es mostra.
* Utilitzeu el botó de **reinici** (X gris) per reiniciar tot l'univers.

### Teclat DMX

El botó **Teclat DMX** obre un teclat numèric tradicional per establir molts
canals amb una sola ordre. La sintaxi de les ordres coincideix amb la del
[teclat de la Taula Simple](/simple-desk) d'escriptori:

| Tecla | Descripció |
|-----|-------------|
| **AT** | Estableix un valor per a un canal o rang. Exemple: **13 AT 148**. |
| **THRU** | Selecciona un rang de canals. Exemple: **3 THRU 15 AT 133**. |
| **FULL** | Estableix el valor màxim (255). Exemple: **1 THRU 10 FULL**. |
| **ZERO** | Estableix el valor mínim (0). Exemple: **4 ZERO**. |
| **BY** | Estableix un pas dins d'un rang. Exemple: **1 THRU 10 BY 2 AT 100** (canals 1, 3, 5, 7, 9). |
| **+%** | Augmenta els valors actuals en un percentatge. Exemple: **1 THRU 10 BY 2 +% 20**. |
| **-%** | Redueix els valors actuals en un percentatge. Exemple: **1 THRU 10 BY 2 -% 20**. |

Tingueu en compte que:

* Una ordre només s'envia quan premeu **ENTER**.
* Les adreces DMX són contigües entre universos — l'Univers 1 va d'1 a 512,
  l'Univers 2 de 513 a 1024, i així successivament.
* També podeu escriure ordres directament al quadre de text superior una
  vegada conegueu la sintaxi.

## Pàgina de Configuració

Us permet establir la configuració de QLC+ remotament, en diverses àrees:

* **Configuració d'universos** — establiu les entrades, sortides,
  retroalimentació, perfils i mode de pas per a cada univers (el mateix que el
  panell d'[Entrada/Sortida](/input-output) d'escriptori). Com que un projecte
  ja emmagatzema la seva configuració d'E/S, normalment només cal comprovar-ho
  aquí en lloc de tornar-ho a configurar.
* **Configuració d'àudio** — trieu els dispositius de reproducció i entrada
  d'àudio.
* **Fixtures carregats per l'usuari** — carregueu remotament una definició de
  fixture personalitzada a QLC+ amb **Carrega el fixture**. Després d'afegir
  fixtures personalitzats, torneu a carregar el projecte o reinicieu QLC+ al
  dispositiu de destinació.
* **Usuaris autoritzats** — disponible només quan QLC+ s'inicia amb `-wa` /
  `--web-auth`. Habilita l'autenticació HTTP bàsica (sense HTTPS/certificats).
  En habilitar-ho per primera vegada heu d'afegir almenys un administrador,
  altrament mai es demana cap contrasenya. Nivells d'accés:
  * **Tot** — administradors; accés complet, incloent la gestió d'usuaris.
  * **Consola Virtual i Taula Simple** — poden veure aquestes dues pàgines,
    però no la pàgina de Configuració.
  * **Només Consola Virtual** — només poden veure la pàgina de la Consola
    Virtual.

  Un administrador pot afegir usuaris (Nom d'usuari + Contrasenya →
  **Afegeix usuari**), suprimir usuaris, i canviar el nivell d'accés o la
  contrasenya d'un usuari (**Canvia**).

Utilitzeu el botó **Enrere** (a dalt a l'esquerra) per tornar a la pàgina
principal.

## Pàgina del Sistema

A les plataformes compatibles (normalment dispositius Linux sense pantalla com
una Raspberry Pi) hi ha disponible una àrea de **sistema** per configurar la
xarxa i el punt d'accés del dispositiu, triar el projecte d'**inici automàtic**,
i **reiniciar** o **apagar** el dispositiu remotament.
