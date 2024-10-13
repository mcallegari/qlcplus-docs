---
title: 'Afegir Panell RGB'
date: '11:11 21-08-2023'
---

Al mercat pots trobar fàcilment tires LED que pots cablejar com prefereixis per crear un Panell RGB (o matriu). Aquest diàleg permet crear i configurar ràpidament un panell RGB. És un diàleg dedicat per ajudar-vos amb el procés més molest de crear fixtures manualment depenent de la disposició desitjada.  
Tingueu en compte que una vegada creat el panell, l'única manera de modificar la disposició és manualment.

### Creació del Panell

En fer clic a D'acord en aquest diàleg, succeiran dues coses:

* QLC+ crearà un fixture per a cada fila del panell. Es pot considerar com si el panell estigués compost per barres RGB individuals.
* QLC+ crearà un grup de fixture que representarà el panell amb els capçals ja en el desplaçament correcte

Una vegada que es crea un panell RGB, és senzill anar al [Gestor de funcions](/function-manager), crear una nova [matriu RGB](/basics/glossary-and-concepts#matriu-rgb) i començar a utilitzar el panell molt ràpidament.

Fem un cop d'ull a totes les opcions d'aquest panell:

#### Propietats del Panell
|     |     |
| --- | --- |
| **Nom** | Una cadena arbitrària que es pot utilitzar per anomenar el panell RGB |
| **Univers** | L'univers on començarà el Panell RGB. Si el panell requereix una sèrie de canals que no encaixen en un sol univers, s'estendrà a través de múltiples universos, a partir del seleccionat amb aquesta opció. |
| **Adreça** | L'adreça d'inici DMX on s'ha de mapejar el panell RGB |

#### Mida
|     |     |
| --- | --- |
| **Columnes** | El nombre de columnes del panell RGB (o el nombre de píxels per fila) |
| **Files** | El nombre de files del plafó RGB (o el nombre de píxels per columna) |

#### Física
|     |     |
| --- | --- |
| **Amplada** | L'amplada física en mil·límetres del panell RGB |
| **Alçada** | L'alçada física en mil·límetres del Panell RGB |

#### Orientació
|     |     |
| --- | --- |
| **Superior-Esquerra** | El primer píxel se situarà a la cantonada superior esquerra del panell |
| **Dalt-Dreta** | El primer píxel es trobarà a la cantonada superior dreta del panell |
| **Inferior-Esquerra** | El primer píxel es trobarà a la cantonada inferior esquerra del panell |
| **Inferior-Dreta** | El primer píxel se situarà a la cantonada inferior dreta del panell |

#### Desplaçament
|     |     |
| --- | --- |
| **Serp** | El desplaçament del panell segueix una lògica de serp. Significa que el següent píxel del final d'una fila està a la mateixa columna de la fila següent. Llavors els altres píxels segueixen en la direcció oposada. |
| **Zig-Zag** | El desplaçament del panell segueix una lògica de "zig-zag". Significa que el següent píxel del final d'una fila es troba a la primera columna de la fila següent. |

#### Direcció
|     |     |
| --- | --- |
| **Horitzontal** | Les adreces dels píxels s'incrementen horitzontalment. |
| **Vertical** | Les adreces dels píxels s'incrementen verticalment. |
