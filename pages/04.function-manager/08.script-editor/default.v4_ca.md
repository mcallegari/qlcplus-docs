---
title: 'Editor de Scripts'
date: '04:07 22-08-2023'
---

L'editor de scripts, com el seu nom indica, s'utilitza per editar ![](/basics/script.png) [Funcions de Script](/basics/glossary-and-concepts#script).  
Bàsicament consisteix en un editor de text on l'usuari pot escriure un script utilitzant un metallenguatge amb una sintaxi descrita a continuació.  
L'script es pot modificar manualment si teniu una comprensió completa de la sintaxi del llenguatge, en cas contrari hi ha disponibles uns quants botons d'ajuda a la part dreta de l'editor per accelerar i facilitar la creació/edició de l'script.  
Cada línia d'un script serà executada per QLC+ en un ordre seqüencial.

### Controls

|     |     |
| --- | --- |
| ![](/basics/player_play.png) | Activa la sortida i executa l'script per provar la seva execució |
| **Nom de l'Script** | Canvia el nom de l'Script. |
| ![](/basics/edit_add.png) | Quan es faci clic en aquest botó, es mostrarà una finestra emergent on podreu triar el fragment d'script que voleu inserir a la posició actual del cursor a l'editor. **Funció d'inici**<br><br>![](/basics/function.png): obre el diàleg de selecció de[Funció](../selector-de-funcions) per seleccionar una funció que s'ha d'iniciar.  <br>    Aquesta operació afegirà automàticament un comentari al final de la línia de codi, amb el nom QLC+ de la funció seleccionada. **Funció d'aturada**<br>![](/basics/fileclose.png): obre el diàleg de selecció[Funció](../selector-de-funcions) per seleccionar una funció a aturar. Si en el moment d'executar aquesta línia de codi la funció seleccionada no s'està executant, aquesta instrucció no tindrà cap efecte.  <br> Aquesta operació afegirà automàticament un comentari al final de la línia de codi, amb el nom QLC+ de la funció seleccionada.<br>![](/basics/blackout.png) **Blackout**: Obre el diàleg sol·licitant si s'ha d'activar o desactivar l'apagada.<br>![](/basics/fixture.png) **Estableix Fixture<br>: Obre el diàleg de selecció de Canals del Fixture, on podreu triar els canals que voleu controlar amb l'script. Si se seleccionen diversos canals, aquesta operació afegirà una línia de codi per a cada canal seleccionat. Per defecte, el valor DMX generat per aquesta operació serà 0 i s'haurà de canviar manualment amb l'editor de text de l'script.  <br> Aquesta operació afegirà automàticament un comentari al final de la línia de codi, amb el nom QLC+ dels fixtures i canals seleccionats.<br>![](/basics/player_play.png) **Ordre del sistema**: Obre un diàleg de fitxer per a triar el programa/script extern a executar. Tingueu en compte que el fitxer seleccionat ha de ser executable per a ser acceptat. Un cop seleccionat un fitxer, un altre diàleg us demanarà que introduïu els arguments del programa/script. Si no es requereix cap, simplement deixeu el camp buit.<br>![](/basics/speed.png) **Wait**: Obre un diàleg demanant el temps d'espera abans que l'script pugui executar la següent instrucció<br>![](/basics/label.png) **Comentari**: Obre un diàleg demanant el text del comentari a inserir a la posició del cursor a l'editor.  <br> Un comentari té una aparença d'estil de llenguatge C: comença amb «//» i tot fins al final de la línia es considera un comentari<br>![](/basics/other.png) **Nombre aleatori**: Obre un diàleg que demana l'interval de valors on realitzar una aleatorització d'un nombre. El fragment de codi resultant s'inserirà a la posició actual del cursor de l'editor.  <br> Això pot ser útil per a aleatoritzar els valors DMX establerts a través de la paraula clau setfixture. Veure més avall.<br>![](/basics/fileopen.png) **Camí de fitxer**: Obre un diàleg de fitxer per a seleccionar un fitxer. El camí absolut i el nom del fitxer s'introduiran a la posició actual de l'editor.  <br> Si un camí conté espais, s'escriurà entre cometes |
| ![](/basics/editcut.png) | Retalla el text seleccionat a l'editor per a una enganxada posterior |
| ![](/basics/editcopy.png) | Copia el text seleccionat a l'editor per a una enganxada posterior |
| ![](/basics/editpaste.png) | Enganxa un text prèviament tallat o copiat a la posició del cursor a l'editor |
| ![](/basics/undo.png) | Desfés l'última operació realitzada a l'editor |
| ![](/basics/check.png) | Comproveu la sintaxi de l'script. Es mostrarà un missatge emergent indicant si l'script és correcte o els números de línia on s'han trobat errors de sintaxi. |

### Sintaxi del Llenguatge

El metallenguatge de l'script QLC+ es basa en una paraula clau:valor** de **, amb algunes insercions de les regles de sintaxi del llenguatge C.  
Cada línia de codi és analitzada pel motor QLC+ i verificada per detectar la presència d'errors de sintaxi.  
Aquí hi ha una taula que descriu cada paraula clau acceptada pel motor Script i la seva sintaxi.

#### startfunction
**Tipus**: paraula clau<br>
**Descripció**: comença una funció QLC+ amb l'identificador indicat<br>
**Sintaxi**: `startfunction:functionID`<br>
`functionID` és un nombre enter de l'ID assignat per QLC+ a una Funció.<br>
Atès que els ID no estan exposats als usuaris de QLC+, en aquest cas és convenient utilitzar el botó d'ajuda a la part dreta de l'editor, que també afegeix un comentari amb el nom de la funció. <br>
Eventualment un usuari aprendrà l'ID d'una funció i, per tant, l'utilitzarà per afegir manualment més codi a l'script.<br>
**Exemple**:
```
startfunction:2 //Escena verda
```

#### stopfunction
**Tipus**: paraula clau<br>
**Descripció**: atura una funció QLC+ en execució amb l'identificador indicat<br>
**Sintaxi**: `stopfunction:functionID`<br>
`functionID` és un nombre enter de l'ID assignat per QLC+ a una Funció. Veure _startfunction_ descripció<br>
**Exemple**:
```
stopfunction:0 // Escena blava
```

#### blackout
**Tipus**: paraula clau<br>
**Descripció**: activa o desactiva el blackout,  <br>
**Sintaxi**: `blackout:on|off `<br>
`functionID` és un nombre enter de l'ID assignat per QLC+ a una funció. Vegeu _startfunction_ descripció.<br>
**Exemples**:
```
blackout:on
blackout:off
```
#### systemcommand
**Tipus**: paraula clau <br>
**Descripció**: executeu un programa o un script al camí absolut proporcionat amb els arguments (opcionals) proporcionats.  <br>
**Sintaxi**:`systemcommand:programPath arg:arg1 arg:arg2 ... arg:argN`<br>
`programPath` és el camí absolut d'un programa executable o script. Per exemple `/usr/bin/vlc` o `C:\\Tools\\myTool.exe`<br>
Si el camí a un executable conté espais, s'ha d'escriure entre cometes.  <br>
`.arg1 ... argN` són els arguments que s'han d'utilitzar en executar _programPath_. Si no es necessiten arguments, llavors les paraules clau arg: no són necessàries.  <br>
Si un argument contanca espais, s'ha d'escriure entre cometes.<br>
**Exemples**:
```
systemcommand:/usr/bin/vlc arg:-f arg:/home/usuari/vídeo.mp4 // reprodueix el meu vídeo amb el VLC a pantalla completa
systemcommand:"C:\\Fitxers de programa\\Eines\\My Tool.exe" arg:"D:\\My Files\\My file.txt"
```

#### setfixture
**Tipus**: paraula clau <br>
**Descripció**: estableix un canal d'un fixture de QLC+ al valor DMX proporcionat.  <br>
**Sintaxi**: `setfixture:fixtureID ch:channelIndex val:DMXValue`:br<
`fixtureID` és un nombre enter de l'ID assignat per QLC+ a una funció.<br>
Atès que els ID no estan exposats als usuaris de QLC+, en aquest cas és convenient utilitzar el botó d'ajuda a la part dreta de l'editor, que també afegeix un comentari amb el nom del fixture i del canal.  <br>
Eventualment un usuari aprendrà l'ID d'un fixture i l'índex d'un canal i, per tant, els utilitzarà per afegir manualment més codi a l'script.  <br>
`channelIndex` és un nombre enter que representa el número de canal fixture. Els índexs dels canals comencen des de 0.  <br>
`DMXValue` és el valor real DMX que s'ha d'establir al canal fixture especificat. Va del 0 al 255 <br>
**Exemple**:
```
setfixture:0 ch:1 val:135 // RGB genèric, vermell. Estableix el canal vermell d'un fixture RGB genèric al valor DMX 135
```

#### wait
**Tipus**: paraula clau <br>
**Descripció**: espereu el temps proporcionat abans d'executar la següent línia de codi.  <br>Tingueu en compte que el temps d'espera també es pot assignar a l'atzar, seguint la sintaxi _random_ que es descriu a continuació.  <br>
**Sintaxi**: `wait:temps`
El<br>` temps` pot ser un nombre enter de mil·lisegons o una cadena que representa el temps d'espera a la manera QLC+: \*\*h\*\*m\*\*s.\*\*
  <br>**Exemples**:
```
wait:1800 // espera 1 segon i 800 mil·lisegons
wait:03s.20 // Espera 3 segons i 200 mil·lisegons
```

#### comentaris
**Tipus**: macro d'ajuda <br>
**Descripció**: els comentaris es poden inserir en qualsevol posició del codi de l'script i no afecten l'execució de l'script. Normalment s'utilitzen per donar un significat a una línia de codi.  <br>
Els comentaris dels scripts QLC+ segueixen la regla de l'estil de llenguatge C de la sintaxi "//". Bàsicament tot el que s'escriu després de "//" es considerarà un comentari fins al final de la línia de codi.  <br>
Així que presteu una atenció particular a no escriure codi significatiu després d'una "//" i espereu que s'executi, perquè no ho farà.  <br>
Els comentaris es poden afegir al final d'una línia de codi de Script o poden prendre una línia sencera, per exemple per descriure un bloc de codi sencer.

#### random
**Tipus**: macro d'ajuda <br>
**Descripció**: genera un nombre enter aleatori entre els valors mínims i màxims proporcionats <br>
**Sintaxi**: `random(min,max)`<br>
`min` és el valor mínim que pot assolir l'aleatorització. Pot ser un nombre enter o una cadena de temps <br>
`max` és el valor màxim que pot assolir l'aleatorització. Pot ser un nombre enter o una cadena de temps <br>
**Exemples**:
```
wait:random(02s.00,05s.00) // Espera un temps aleatori entre 2 i 5 segons
// estableix el canal 3 del fixture amb ID:1 a un valor DMX aleatori entre 20 i 235
setfixture:1 ch:2 val:random(20,235)
```
