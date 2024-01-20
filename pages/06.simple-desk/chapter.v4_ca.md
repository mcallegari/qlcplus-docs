---
title: 'Taula Simple'
date: '14:16 21-08-2023'
taxonomy:
    category: docs
---

<style>
    #chapter p {
        text-align: left;
    }
</style>
### Capítol 6

# Taula Simple

La Taula simple emula una consola d'il·luminació típica que és capaç de controlar un univers DMX complet de 512 canals amb diverses piles de cues operades amb controls lliscants de reproducció.  
La Taula simple es divideix en dues àrees principals: **canals** (àrea superior) i **cues** (àrea inferior).  
L'àrea dels canals reflecteix exactament l'estat actual de cada canal DMX de cada univers. Si els canals es controlen sense cap projecte carregat, els usuaris tenen un control completament manual d'ells.  
Quan es carrega un projecte, en canvi, moure un canal de la Taula Simple substituirà qualsevol altra funció QLC+ que intenti controlar aquest canal. Una indicació visual convertirà el fons del canal en vermell, informant l'usuari que la Taula Simple ara té el control total d'aquest.  
Això és molt útil en algunes circumstàncies en directe on una funció en execució necessita algun ajust manual.  
Per a "desvincular" la Taula Simple dels canals anul·lants, simplement feu clic al botó de reinicialització. El restabliment de canals els retornarà a zero o al valor prèviament establert per una funció.

Cues opera per separat d'altres components de QLC+. Per exemple, els cues dins de la pila cue no són visibles al [Gestor de Funcions](/function-selection) i les [Escenes](/basics/glossary-and-concepts#escena) no són visibles a la pila cue.

Controls - Univers
-------------------

La caixa de l'univers conté els controls lliscants que s'utilitzen per controlar canals individuals DMX en el primer univers DMX. Atès que 512 controls lliscants no poden encaixar bé a la pantalla al mateix temps, s'han dividit en pàgines. Per defecte, cada pàgina conté 32 controls lliscants però això pot ser [configurat](#ajustaments).

|     |     |
| --- | --- |
| ![](/basics/tabview.png) | Canvieu el mode de vista de tots els canals als canals de fixture. Tingueu en compte que si no s'ha definit cap fixtures, el segon mode produirà un resultat buit |
| ![](/basics/back.png) | Salta a la pàgina DMX anterior. |
| **Quadre de pàgina de l'Univers** | Mostra la pàgina DMX actual. Podeu saltar a una pàgina escrivint el número de pàgina directament en aquest quadre o utilitzant la roda del ratolí per saltar entre pàgines ràpidament. |
| ![](/basics/forward.png) | Salta a la pàgina DMX següent. |
| ![](/basics/fileclose.png) | Restableix tots els controls lliscants DMX de nou a zero o al valor prèviament establert per una funció. |
| **GM** | El [Gran Mestre](/basics/glossary-and-concepts#gran-mestre) |

Controls - Reproducció
-------------------

La caixa de reproducció conté un munt de controls lliscants de reproducció cadascun dels quals pot contenir una pila de cues. Les reproduccions es poden utilitzar per a "reproduir" el contingut de les seves piles de cues i també es poden utilitzar per a ajustar la seva intensitat general de la cue.

|     |     |
| --- | --- |
| ![](/basics/check.png) | Seleccioneu la reproducció actualment activa, la pila cue es mostra a la part dreta de la pantalla. |
| **Control lliscant de reproducció** | Ajusta la intensitat de la pila de cues de la reproducció. Quan es baixa el control lliscant fins a zero, s'atura la pila de cues. Qualsevol valor per sobre de zero començarà a reproduir la pila de cues. |
| ![](/basics/flash.png) | Fes flaix el primer cue de la reproducció. |

Controls - Pila Cues
--------------------

El quadre de la pila cue mostra el contingut de la reproducció seleccionada.

|     |     |
| --- | --- |
| ![](/basics/back.png) | Salta al punt cue anterior (o comença la reproducció a l'últim punt cue de la pila cue amb tota la intensitat). |
| ![](/basics/player_stop.png) | Atura la pila cue activa. |
| ![](/basics/forward.png) | Salta al següent cue (o comença la reproducció del primer cue de la pila de cues amb tota la intensitat). |
| ![](/basics/edit.png) | Canvia al/des del mode d'edició cue. Quan es prem aquest botó, podreu editar el contingut de les pistes individuals; el contingut de les pistes actualment actives es mostra als controls lliscants DMX.<br><br>La velocitat d'entrada de l'esvaïment, la velocitat de sortida de l'esvaïment i la durada, així com el nom de les pistes individuals es poden ajustar amb els marcadors de velocitat que es mostren en una finestra d'eina separada. També pots seleccionar diverses cues per ajustar les seves velocitats al mateix temps, però després es desactiven els lliscadors DMX per evitar que sobreescriguis accidentalment tots els continguts de les indicacions amb els mateixos valors. |
| ![](/basics/record.png) | Enregistra una cue nova, prenent el seu contingut dels valors actuals del control lliscant DMX. |
| **Pila de Cues** | Aquest quadre mostra el contingut de la pila cue de la reproducció seleccionada, juntament amb el número d'índex (1, 2, 3...), la velocitat d'entrada de l'esvaïment, la velocitat de sortida de l'esvaïment, la durada i un nom opcional per a cada cue.<br><br>Podeu canviar l'ordre de les cues arrossegant les cues una sobre l'altra, una a la vegada o múltiples cues a la vegada. |

[](#Tuning)

Ajustaments
------

Consulteu la secció de [Ajustament de paràmetres manuals](/advanced/parameters-tuning#1-taula-simple) de la secció Taula Simple
