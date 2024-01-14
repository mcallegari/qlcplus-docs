---
title: Channels
date: '05:33 22-08-2023'
---

La pestanya canals conté tots els canals possibles que el fixture entén en tots els seus modes. L'ordre del canal no importa en aquesta pestanya. En canvi, els canals estan ordenats en cert ordre en cada mode a la pestanya **Mode**. A la pestanya **Canal**, només els noms dels canals, les seves **capacitats** (és a dir, els intervals de valors i el seu propòsit) importen.

![](../fixtureeditor_channels.png)

|     |     |
| --- | --- |
| ![](/basics/edit_add.png) | Afegeix un canal nou a l'aparell mitjançant l'[Editor de Canals](#channel-editor) |
| ![](/basics/edit_remove.png) | Elimina els canals seleccionats del fixture **i de tots els modes** |
| ![](/basics/edit.png) | Edita el canal seleccionat actualment mitjançant l'[Editor de Canals](#channel-editor) |
| ![](/basics/editcopy.png) | Copia el canal seleccionat al porta-retalls. Els canals del porta-retalls també es poden enganxar a altres finestres de definició de fixture |
| ![](/basics/editpaste.png) | Enganxa un canal des del porta-retalls a la definició del fixture. Els canals del porta-retalls també es poden enganxar a altres finestres de definició de fixture |
| ![](/basics/check.png) | Expandeix o contrau tots els nodes del canal a la llista de canals |

### Editor de Canals

L'Editor de Canals s'utilitza per editar canals individuals i els rangs de valors DMX de cada capacitat (un color verd, un cert gobo, rotació de prisma, etc.) que proporciona un canal de fixture. Consulteu el manual del fixture per obtenir una llista detallada dels canals del fixture i els valors DMX.

Aquí hi ha unes quantes captures de pantalla que mostren els possibles escenaris que es poden trobar mentre s'edita un canal de Fixture.

**Fig. 1**

![](../fixtureeditor_channel_preset.png)

**Fig. 2**

![](../fixtureeditor_channel_shutter.png)

**Fig. 3**

![](../fixtureeditor_channel_color.png)

**Fig. 4**

![](../fixtureeditor_channel_gobo.png)

A continuació, la descripció de la configuració que apareix a l'Editor de Canals. Es farà referència a les figures anteriors per apuntar-vos a un context visual.

|     |     |
| --- | --- |
| **Nom** | El nom del canal. En seleccionar un canal predefinit (canal d'una sola capacitat), es suggerirà automàticament un nom de canal, amb la possibilitat de personalitzar-lo. |
| **Predefinit** | Un predefinit és una mena de drecera per accelerar la creació de la definició. També proporciona al motor QLC+, informació útil per reconèixer i tractar adequadament un canal DMX.  <br>Sovint passa que un Fixture té alguns canals RGB o CMY. Una barra LED podria tenir dotzenes d'elles. Per tant, seleccionant un preconfiguració de color s'omplirà tota la informació necessària que el QLC+ necessiti, amb un sol clic del ratolí. (Vegeu la Fig. 1)  <br>També és freqüent trobar un canal per controlar la velocitat de Panoràmica/Inclinació. Alguns predefinits estan disponibles per a aquest propòsit, indicant també si la velocitat és de lent a ràpid o de ràpid a lent. Només has de triar el predefinit que sigui més adequat per a la definició que estàs creant.  <br>Quan se selecciona un predefinit, tota la resta de l'editor es torna inactiu. Si un canal té múltiples intervals DMX (capacitats), simplement deixeu "Preset" a "Personalitzat" i continueu amb aquesta lectura. |
| **Tipus** | Això indicava el tipus del canal (el seu rol en el fixture). Seleccionant un tipus, implícitament defineix també la precedència del canal ([LTP](/basics/glossary-and-concepts#ltp) o [HTP](/basics/glossary-and-concepts#htp)). Per tant, és molt important triar el tipus correcte aquí, per evitar comportaments no desitjats dins de QLC+.  <br>Tots els tipus de canals d'intensitat/color obeeixen a la regla **HTP**: **Intensitat, Vermell, Verd, Blau, Cian, Magenta, Groc, Blanc, Ambre, UV, Llima i Indigo**.  <br>Tots els altres tipus obeeixen a la regla **LTP**: **Feix, Color, Efecte, Gobo, Manteniment, Res, Panoràmica, Inclinació, Prisma, Obturador i Velocitat**.  <br><br>**Intensitat** s'utilitza per als canals dimmer / master dimmer.  <br>    <br>**Els colors primaris** (Vermell, Cian, Blanc, etc) s'utilitzen per controlar canals de color únics. No confongueu aquests tipus amb el tipus "Color" (vegeu més avall) <br> Tingueu en compte que el [Grand Master](/basics/glossary-and-concepts#grand-master) només controla la Intensitat i els canals de color primaris per defecte. Tingueu en compte també que l'eina de color a l'[Editor d'Escenes](/function-manager/scene-editor) només està disponible si un fixture proporciona canals de **Color Primaris** per a RGBAWUV/CMY.<br>El tipus **Color** s'utilitza per controlar una roda de color fixa o macros de color predefinides. _No_ assigneu canals de color RGBAW/CMY individuals al tipus de color, sinó que utilitzeu els tipus de **color primari** com s'ha descrit anteriorment.<br> El tipus **Gobo** s'utilitza per controlar la posició o indexació de la roda gobo.<br>El tipus **Velocitat** s'utilitza per controlar alguna cosa relacionada amb la velocitat (rotació del gobo, velocitat de l'arc de Sant Martí, velocitat de seguiment).<br>El tipus **Prisma** s'utilitza per controlar un prisma.<br>El tipus **Obturador** s'utilitza per controlar un obturador, un estroboscopi o un iris.<br>El tipus **Feix** s'utilitza per controlar un modelador de feix (com ara una funció de zoom).<br>El tipus **Efecte** s'utilitza per controlar alguna cosa que no encaixa en cap dels altres grups.<br>El tipus **Manteniment** s'utilitza per controlar funcions com el reinici o un ventilador de refrigeració o alguna cosa similar.<br>El tipus **Res** s'utilitza com a espaiador de canals o de espai reservat. Alguns canals d'aquest tipus poden ser substituïts per la característica d'àlies.<br>Els tipus **Pan** i **Tilt** s'utilitzen per controlar les característiques Pan/Tilt (o X/Y) de caps mòbils o làsers |
| **Valor per Defecte** | Especifiqueu el valor DMX (0 a 255) al qual s'estableix un canal en encendre. Per exemple, alguns caps mòbils col·loquen els seus motors Pan/Tilt a mig camí, el que significa que el valor inicial del canal DMX és igual a 127. |
| **Rol** | Aplicable als parells de canals que fan valors de 16 bits, normalment grup **Pan** o **Tilt**, però alguns fixtures més nous admeten dimmer de 16 bits o fins i tot canals RGB, Gobo o Focus.  <br>Per a valors de 8 bits (per exemple, quan el fixture només admet moviment de 8 bits, només un canal per a cada moviment), assigneu el byte de control **Coarse (MSB)** al canal. Si, però, el fixture suporta 16 bits (dos canals per a cada característica), hauríeu d'assignar el byte **Coarse (MSB)** als canals que proporcionen un valor gruixut i el byte **Fine (LSB)** als canals que proporcionen un ajust de valor fi. Si no n'esteu segurs, utilitzeu **Coarse MSB**. |
| **Capacitats** | Mostra la llista dels intervals de valors DMX per al canal editat actualment. Si un canal només proporciona una capacitat (per exemple, panoràmica o dimmer) hauríeu d'utilitzar un canal predefinit (vegeu més amunt). Per a capacitats més elaborades, com ara colors o gobos, heu de crear rangs de capacitats per a cadascun dels colors (per exemple, 0-15 blanc, 16-32 blau...).  <br>Rangs específics per a cada canal es poden trobar en el manual del producte sota el nom de "diagrama DMX".  <br>Entrar en rangs DMX és bastant directe. L'àrea d'entrada s'organitza com un full de càlcul on els valors de l'interval i les descripcions es poden introduir contínuament només prement la tecla TAB. |
| **Predefinit** | Cada capacitat es pot enriquir amb un "preset", que indica al motor QLC+ més informació útil sobre una gamma de valors DMX.  <br>Per exemple, si la capacitat és "Obturador obert", hi ha disponible un preajust anomenat "Obturador obert" perquè QLC+ sàpiga exactament com tractar el rang.  <br>Depenent del tipus preestablert, es podria introduir una o més informacions addicionals: <br><br>**ColorMacro**: permet escollir un sol color utilitzat típicament en rodes de color <br>**ColorDoubleMacro**: permet escollir dos colors per representar una posició intermèdia d'una roda de color (Fig. 3) <br>**GoboMacro**: permet seleccionar una imatge gobo que s'utilitzarà quan s'introdueixi el rang de capacitat (Fig. 4) <br>**StrobeFrequency**: permet introduir una freqüència precisa (en Hertz) per a una funció estroboscòpica <br>**StrobeFreqRange**: permet introduir 2 valors (mínim i màxim) per representar el rang de freqüències (en Hertz) per simular un efecte estroboscòpic (Fig. 2)<br>**Àlies: Es tracta** d'una capacitat especial preestablerta per indicar que quan es troba en aquest rang, s'hauria d'activar un àlies. Un àlies és una substitució d'un canal. Vegeu la  [pestanya Àlies](#aliases) per a entendre com definir àlies |
| ![](/basics/edit_remove.png) | Elimina les capacitats seleccionades del canal. |
| ![](/basics/wizard.png) | Creeu noves capacitats ràpidament amb l'assistent de capacitats. |

### Assistent de Capacitats

L'Assistent de capacitats és una eina pràctica per a crear múltiples intervals de valors de capacitats de la mateixa mida. Normalment això s'aplica als colors fixos, índexs de gobo i diversos canals de macro.

![](../fixtureeditor_channel_wizard.png)

|     |     |
| --- | --- |
| **Inici** | El valor inicial per a les noves capacitats. De vegades pot haver-hi altres capacitats a l'inici de l'interval de valors del canal que podeu saltar ajustant aquest valor. |
| **Amplada** | La mida de cada rang de valors. |
| **Import** | Nombre de capacitats a crear. |
| **Nom** | El nom comú de cada capacitat. Pots utilitzar la marca hash # per indicar un lloc per a un número d'índex (és a dir, "Gobo #" crea Gobo 1, Gobo 2, Gobo 3...) |
| **Mostra** | Cada vegada que canvieu un paràmetre a l'assistent, aquesta llista s'actualitza per a mostrar-vos una mostra de quins tipus de capacitats es crearan una vegada feu clic a D'acord. |