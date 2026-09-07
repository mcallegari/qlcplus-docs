---
title: 'Web Interface'
date: '08:15 22-08-2023'
---

QLC+ inclut un serveur web intégré qui expose certaines de ses
fonctionnalités à un navigateur web classique. C'est très pratique pour
faire fonctionner QLC+ sur un appareil sans écran (un système **headless**),
que ce soit pour travailler de façon autonome ou pour le contrôler à
distance depuis un téléphone, une tablette ou un autre ordinateur.

## Activer l'interface web

L'interface web n'est **pas** activée par défaut. Démarrez QLC+ avec
l'option `-w` (ou `--web`) pour l'activer. Options de ligne de commande
associées :

| Option | Objectif |
|--------|---------|
| `-w`, `--web` | Active l'accès web distant. |
| `-wp`, `--web-port <port>` | Utilise un port spécifique (la valeur par défaut est **9999**). |
| `-wa`, `--web-auth` | Active l'accès web avec authentification utilisateur. |
| `-a`, `--web-auth-file <file>` | Fichier dans lequel stocker les identifiants d'authentification de base. |

Voir la page [paramètres de ligne de commande](../command-line-parameters)
pour savoir comment passer ces options.

## Accéder à l'interface web

Depuis n'importe quel navigateur moderne (sur n'importe quel appareil du
même réseau), connectez-vous à :

**http://\[adresse IP\]:9999**

où *\[adresse IP\]* est l'adresse de la machine sur laquelle QLC+ s'exécute
— par exemple `http://192.168.0.100:9999`. Le navigateur doit prendre en
charge les [WebSockets](https://caniuse.com/mdn-api_websocket), que QLC+
utilise pour communiquer avec la page en temps réel.

L'interface web comporte trois pages :

* **Virtual Console**
* **Simple Desk**
* **Configuration**

Vous pouvez également créer vos propres pages web qui communiquent avec
QLC+ via sa [Web API](web-api).

## Page Virtual Console

C'est la page par défaut. Elle reflète la **Virtual Console** de QLC+ : si
un projet est chargé, elle affiche les widgets que vous avez créés (boutons,
sliders, cue lists, frames, horloges, XY pads, speed dials, animations,
audio triggers, labels), et les actionner dans le navigateur pilote QLC+ en
direct. Si aucun projet n'est chargé, la page est vide.

* **Load project** (en haut à gauche) — choisissez un fichier de projet
  depuis l'appareil avec lequel vous naviguez ; il est transféré vers QLC+
  et chargé par celui-ci.
* **Configuration** — ouvre la page de configuration.

La disposition et l'état des widgets sont envoyés au navigateur en JSON, et
les mises à jour (une fonction en cours d'exécution, un fader déplacé, un
changement de cue) sont retransmises en direct via le WebSocket, de sorte
que la vue web reste synchronisée avec QLC+.

## Page Simple Desk

Une version simplifiée du [Simple Desk](/simple-desk) de bureau. Elle
affiche un univers DMX divisé en pages de 32 canaux.

* Utilisez les **flèches gauche/droite** pour naviguer entre les pages de
  canaux.
* Utilisez le **menu déroulant** en haut à droite pour choisir quel univers
  est affiché.
* Utilisez le bouton **reset** (✕ gris) pour réinitialiser tout l'univers.

### DMX Keypad

Le bouton **DMX Keypad** ouvre un pavé numérique traditionnel permettant de
régler de nombreux canaux avec une seule commande. La syntaxe des commandes
correspond à celle du [pavé numérique Simple Desk](/simple-desk) de bureau :

| Touche | Description |
|-----|-------------|
| **AT** | Définit une valeur pour un canal ou une plage. Exemple : **13 AT 148**. |
| **THRU** | Sélectionne une plage de canaux. Exemple : **3 THRU 15 AT 133**. |
| **FULL** | Définit la valeur maximale (255). Exemple : **1 THRU 10 FULL**. |
| **ZERO** | Définit la valeur minimale (0). Exemple : **4 ZERO**. |
| **BY** | Définit un pas au sein d'une plage. Exemple : **1 THRU 10 BY 2 AT 100** (canaux 1, 3, 5, 7, 9). |
| **+%** | Augmente les valeurs actuelles d'un pourcentage. Exemple : **1 THRU 10 BY 2 +% 20**. |
| **-%** | Diminue les valeurs actuelles d'un pourcentage. Exemple : **1 THRU 10 BY 2 -% 20**. |

À garder à l'esprit :

* Une commande n'est envoyée que lorsque vous appuyez sur **ENTER**.
* Les adresses DMX sont contiguës entre les univers — l'Univers 1 va de 1 à
  512, l'Univers 2 de 513 à 1024, et ainsi de suite.
* Vous pouvez également taper les commandes directement dans la zone de
  texte en haut une fois la syntaxe connue.

## Page Configuration

Permet de définir la configuration de QLC+ à distance, dans plusieurs
domaines :

* **Universes configuration** — définit les inputs, outputs, feedback,
  profils et passthrough pour chaque univers (l'équivalent du panneau
  [Input/Output](/input-output) de bureau). Comme un projet stocke déjà son
  mappage E/S, il suffit généralement de le vérifier ici plutôt que de le
  reconfigurer.
* **Audio configuration** — choisit les dispositifs de lecture et d'entrée
  audio.
* **User loaded fixtures** — téléverse à distance une définition de fixture
  personnalisée vers QLC+ avec **Load fixture**. Après avoir ajouté des
  fixtures personnalisés, rechargez le projet ou redémarrez QLC+ sur
  l'appareil cible.
* **Authorized users** — disponible uniquement lorsque QLC+ est démarré
  avec `-wa` / `--web-auth`. Cela active l'authentification HTTP de base
  (sans HTTPS/certificats). Lors de la première activation, vous devez
  ajouter au moins un administrateur, sinon aucun mot de passe n'est jamais
  demandé. Niveaux d'accès :
  * **Everything** — administrateurs ; accès complet, y compris la gestion
    des utilisateurs.
  * **Virtual Console and Simple Desk** — peuvent voir ces deux pages, mais
    pas la page Configuration.
  * **Only Virtual Console** — ne peut voir que la page Virtual Console.

  Un administrateur peut ajouter des utilisateurs (Username + Password →
  **Add user**), supprimer des utilisateurs, et modifier le niveau d'accès
  ou le mot de passe d'un utilisateur (**Change**).

Utilisez le bouton **Back** (en haut à gauche) pour revenir à la page
principale.

## Page System

Sur les plateformes prises en charge (typiquement des appareils Linux
headless comme un Raspberry Pi), une zone **system** est disponible pour
configurer le réseau et le point d'accès de l'appareil, choisir le projet
d'**autostart**, et **redémarrer** ou **éteindre** l'appareil à distance.
