---
title: 'Marc Solo'
date: '03:43 22-08-2023'
---

Un **Marc Solo** és un [Marc](../frame) especial de la
[Consola Virtual](/virtual-console) amb una regla addicional: només **una**
de les funcions que hi ha a dins es pot executar alhora. En iniciar una
funció, s'atura automàticament qualsevol altra funció que s'estigui executant
des d'un giny del mateix marc.

Això fa que un Marc Solo sigui el contenidor natural per a qualsevol grup
d'efectes que s'hagin d'excloure mútuament — una filera de botons de color, un
banc d'«estats» d'escena, o una paleta on seleccionar un efecte nou substitueix
l'anterior. Sense això, hauries d'aturar manualment l'efecte antic abans
d'iniciar-ne el nou.

Un Marc Solo és el mateix giny que un [Marc](../frame) i en comparteix tota la
configuració; simplement hi afegeix el comportament solo i la secció
**Solo Frame Options**.

## Com funciona el comportament solo

* Quan un giny dins del marc **inicia una funció**, s'atura qualsevol altra
  funció iniciada per ginys del mateix marc.
* Això s'aplica als ginys continguts directament al marc (per exemple els seus
  [Botons](../button)), i dona un selector net d'un en un.
* Només afecta les funcions iniciades *des de dins d'aquest marc* — les
  funcions que s'executen en altres llocs de la consola no es veuen afectades.

## Configuració

Un Marc Solo té tota la [configuració del Marc](../frame#configuració) —
Capçalera, Pàgines, Dreceres — més:

### Solo Frame Options

* **Exclude monitored functions** — evita que les funcions que només s'estan
  *supervisant* s'aturin per la regla de solo. Utilitza-ho quan un giny del
  marc supervisa/reflecteix l'estat d'una funció en lloc d'executar-la
  activament, de manera que la supervisió no s'interrompi cada cop que es
  prem un altre botó.

## Com crear-ne un

* Arrossega **Solo Frame** des de la llista de ginys fins a la pàgina, **o bé**
* Quan crees una [Matriu de Botons](../button-matrix) o una
  [Matriu de Controls Lliscants](../slider-matrix), tria **Solo** com a tipus
  de marc per embolcallar tota la graella en un Marc Solo.

## Consells

* Posa una paleta de botons de color o d'escena en un Marc Solo perquè en
  prémer-ne un sempre es cancel·li l'anterior — sense cap pas d'«atura»
  necessari.
* Combina-ho amb **Pàgines** (de la configuració del Marc) per crear un
  selector paginat d'un en un que continuï comportant-se com a solo a totes
  les pàgines.
