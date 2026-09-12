---
title: 'Glossari i Conceptes'
date: '07:32 21-08-2023'
---

Q Light Controller Plus (QLC+ per abreujar) té com a objectiu controlar els equips d'il·luminació utilitzats en diverses actuacions, com ara concerts en directe i teatres, etc. La intenció principal és que QLC+ pugui superar els taulells d'il·luminació comercials sense necessitat d'un manual de més de 500 pàgines mitjançant l'ús d'una interfície d'usuari intuïtiva i flexible.

Aquesta pàgina s'ha ordenat alfabèticament per facilitar la cerca d'un tema concret.

### ![](../audio.svg) Àudio

Una [funció](#funcions) d'àudio és un objecte que representa un fitxer d'àudio emmagatzemat en un disc.  
QLC+ és compatible amb els formats d'àudio més comuns, com ara Wave, MP3, M4A, Ogg i Flac. Admet canals mono o estèreo i diverses taxes de mostreig com 44.1KHz, 48KHz, etc...  
Les funcions d'àudio es poden col·locar en un [Chaser](#chaser) o en un [Show](#show) en el moment desitjat, utilitzant el panell [Show Manager](/show-manager).  
Com la majoria de les funcions de QLC+, l'àudio admet temps d'esvaïment d'entrada i de sortida.  

### ![](../blackout.svg) Blackout

Blackout és una funció especial de QLC+ que s'utilitza per posar a zero tots els canals [HTP](#htp-highest-takes-precedence) de tots els universos. Això tindrà l'efecte d'aturar la sortida de llum de tots els fixtures. Els canals es mantindran a zero, independentment de les funcions en execució o dels valors assignats manualment (des del [Simple Desk](/simple-desk), per exemple). Quan es desactiva el Blackout, tots els canals tornen a estar controlats per les funcions o pel seu valor establert manualment. 

### Capacitats

Alguns canals dels fixtures intel·ligents proporcionen molts tipus de funcions, o _capacitats_, com encendre la làmpada quan el valor del canal és \[240-255\], establir un color vermell en una roda de color quan el valor és exactament \[15\], o simplement controlar la intensitat del dimmer del fixture amb valors \[0-255\]. Cadascuna d'aquestes funcions individuals s'anomena capacitat i cadascuna té aquestes tres propietats:

*   Valor mínim: El valor mínim del canal que proporciona una capacitat.
*   Valor màxim: El valor màxim del canal que proporciona una capacitat.
*   Nom: El nom amigable d'una capacitat
*   Preset: Una funcionalitat predefinida perquè QLC+ reconegui amb precisió com tractar i simular un valor de canal

### ![](../chaser.svg) Chaser

Una funció [chaser](#funcions) es construeix a partir de diverses escenes que s'executen en seqüència, una darrere l'altra, quan s'inicia la funció chaser. La funció següent només s'executa un cop ha finalitzat l'anterior. Es pot inserir qualsevol nombre de [funcions](#funcions) en un chaser.

La direcció de la funció Chaser es pot invertir o la selecció d'escenes es pot aleatoritzar. La funció Chaser també es pot configurar perquè faci un bucle infinit, un bucle infinit de ping-pong (la direcció s'inverteix després de cada passada) o pot executar-se una sola vegada, en mode d'un sol tret, després del qual acaba per si mateixa. Si la funció s'estableix perquè faci un bucle infinit, s'ha d'aturar manualment.

Cada Chaser té la seva pròpia configuració de velocitat:

*   **Fade In:** La velocitat d'esvaïment d'entrada d'un pas
*   **Hold:** El temps de retenció d'un pas
*   **Fade Out:** La velocitat d'esvaïment de sortida d'un pas
*   **Duration:** La durada d'un pas

Es poden crear còpies de funcions chaser amb el [Function Manager](/function-manager). Les escenes dins d'un chaser no es dupliquen quan es copia un chaser. Només es copien l'ordre i la direcció al nou.

### Click And Go

Click And Go és una tecnologia que permet a l'usuari accedir ràpidament a macros i colors d'una manera completament visual i amb només un parell de clics. Això pot comportar espectacles en directe més eficients i més llibertat per triar el resultat desitjat amb molta facilitat.  
Fins ara hi ha disponibles tres tipus de widgets:

*   Color únic (s'aplica als canals d'intensitat Vermell, Verd, Blau, Cian, Groc, Magenta, Ambre i Blanc)
*   Selector de color RGB. Controla els valors dels canals RGB seleccionats amb un sol clic
*   Selector de Gobo/Macro. Accedeix i mostra un Gobo/Macro definit a la definició del Fixture

Hi ha disponible una visió general amb captures de pantalla [aquí](https://www.qlcplus.org/old/clickandgo.html)

### ![](../collection.svg) Col·lecció

Una funció [col·lecció](#funcions) encapsula diverses funcions que s'executen simultàniament quan s'executa la funció col·lecció. Es pot inserir qualsevol nombre de funcions en una col·lecció, però cada funció només es pot inserir una vegada i una col·lecció no pot ser membre directe de si mateixa.

Les col·leccions no tenen configuració de velocitat. La velocitat de cada funció membre s'estableix individualment mitjançant els seus propis editors.

Es poden crear còpies de funcions de col·lecció amb el [Function Manager](/function-manager). Les funcions contingudes en una col·lecció no es dupliquen; només es copia la llista de funcions.

### DMX

[DMX](https://ca.wikipedia.org/wiki/DMX512) és l'abreviatura de Digital MultipleX. Bàsicament defineix tot un conjunt de propietats, protocol, cablejat, etc. En el cas del programari d'il·luminació, defineix el nombre màxim de canals (512) per univers i el rang de valors de cada canal (0-255).

QLC+ admet universos il·limitats (n'hi ha 4 d'inicials, però se'n poden afegir més si cal). No cal que estiguin connectats necessàriament a maquinari DMX. L'abstracció real del maquinari (ja sigui analògic 0-10V, DMX o algun altre mètode) s'aconsegueix mitjançant [connectors de sortida](#connectors-dentrada-sortida).

### ![](../efx.svg) EFX

Una funció [EFX](#funcions) s'utilitza principalment per automatitzar llums mòbils (per exemple, escàners i caps mòbils), tot i que també pot automatitzar valors RGB o de Dimmer de llums no mòbils. L'EFX pot crear camins matemàtics complexos en un pla X-Y que es converteixen en valors DMX per als canals de pan i tilt del fixture, o per als canals RGB o de Dimmer.

### ![](../fixture.svg) Fixtures

Un fixture és essencialment un dispositiu d'il·luminació. Pot ser, per exemple, un capçal mòbil, un escàner, un làser, etc. No obstant això, per simplicitat, els PAR individuals (i similars) que normalment es controlen mitjançant un canal dimmer per unitat, es poden agrupar per formar un únic fixture.

Amb l'editor de definicions de Fixture, els usuaris poden editar la informació compartida dels fixtures emmagatzemada en una biblioteca de fixtures que conté les propietats següents per a cada fixture:

*   Fabricant (p. ex. ClayPaky)
*   Model (p. ex. MAC250)
*   Tipus (canviador de color, escàner, capçal mòbil, fum, boira, ventilador...)
*   Propietats físiques (tipus de bombeta, angle de feix, dimensions...)
*   Canals:
    *   Grup de canal (Intensity, Pan, Tilt, Gobo, Color, Speed, etc.)
    *   Vinculacions de canal de 8 i 16 bits per als grups de pan i tilt
    *   Color primari opcional per als canals d'intensitat (RGB/CMY)
    *   Rangs de valors per a les característiques del canal (p. ex. 0-5:Làmpada encesa, 6-15:Estroboscopi, etc..)

Aquestes definicions de fixture es poden utilitzar després per crear fixtures reals a l'aplicació Q Light Controller Plus, que tindran propietats addicionals definides pels usuaris:

*   Univers DMX
*   Adreça DMX
*   Nom

Es poden crear diverses instàncies d'un fixture (p. ex. els usuaris han de poder tenir diverses instàncies d'un MAC250 en ús). Cada fixture es pot anomenar, però el nom no s'utilitza internament per QLC+ per identificar instàncies individuals de fixture. Passa el mateix amb l'adreça DMX. Tot i així, s'anima els usuaris a anomenar els seus fixtures d'alguna manera sistemàtica per ajudar a identificar cadascun d'ells, si cal.

Els dispositius dimmer genèrics no necessiten les seves pròpies definicions de fixture, perquè normalment diversos dimmers s'apedacen en un espai d'adreces comú, emprant un o més racks de dimmer. Els usuaris poden crear instàncies d'aquestes entitats de dimmer genèric simplement definint el nombre de canals que ha de tenir cadascuna.

### ![](../group.svg) Grup de fixtures

Un grup de fixtures és, com indica el seu nom, un grup de [fixtures](#fixtures). També defineixen (a un nivell força bàsic) la disposició física real, del món real, d'aquests fixtures. Aquest coneixement es pot utilitzar, per exemple, a la Matriu RGB per produir una paret de llums mesclables en RGB que puguin actuar com a píxels individuals en un patró gràfic o en un text desplaçant-se.

### Mode del Fixture

Molts fabricants dissenyen els seus llums intel·ligents de manera que es puguin configurar per entendre diferents conjunts de canals. Per exemple, un escàner pot tenir dues opcions de configuració: una només per a canals de moviment de 8 bits (1x pan, 1x tilt) i una altra per a canals de moviment de 16 bits (2x pan, 2x tilt). En lloc de crear una definició de fixture completament nova per a cada variació, s'han agrupat en les definicions de fixture de QLC+ en modes de fixture. Altres taulells o formats en diuen "personalitat".

### ![](../functions2.svg) Funcions

El nombre de funcions és pràcticament il·limitat. Les funcions s'utilitzen per automatitzar l'establiment de valors als canals DMX. Cada tipus de funció té la seva pròpia manera d'automatitzar llums.

Els tipus de funció són:

*   [Escena](#escena)
*   [Chaser](#chaser)
*   [Seqüència](#seqüència)
*   [EFX](#efx)
*   [Matriu RGB](#matriu-rgb)
*   [Col·lecció](#col·lecció)
*   [Show](#show)
*   [Àudio](#àudio)
*   [Vídeo](#vídeo)

Cada funció es pot anomenar i, tot i que el nom no s'utilitza per identificar de forma única les funcions individuals, s'anima els usuaris a anomenar les seves funcions d'una manera sistemàtica i concisa per ajudar a identificar cadascuna d'elles. Per a la teva pròpia comoditat.

Cada funció té la seva pròpia configuració de velocitat:

*   **Fade In:** El temps utilitzat per esvair els canals HTP (a les Escenes també LTP) al seu valor objectiu
*   **Fade Out:** El temps utilitzat per esvair els canals HTP/d'intensitat de nou a zero
*   **Duration:** La durada del pas actual (no aplicable a les Escenes)

### Grand Master

El Grand Master s'utilitza com el lliscador mestre final abans que els valors s'escriguin al maquinari DMX físic real. Normalment, el Grand Master afecta només els canals **Intensity**, però també es pot canviar perquè afecti els valors de **tots** els canals.

El Grand Master també té dos **Value Modes** que controlen la manera _com_ el Grand Master afecta els valors del canal:

*   Reduce: Els valors dels canals afectats es redueixen en un percentatge establert amb el lliscador del Grand Master. Per exemple, el Grand Master al 50% farà que tots els canals afectats es redueixin al 50% dels seus valors **actuals**.
*   Limit: Els canals afectats no poden obtenir valors més grans que el valor establert amb el lliscador del Grand Master. Per exemple, el Grand Master a 127 farà que els valors màxims de tots els canals afectats es limitin exactament a 127.

### Head

Un head representa un dispositiu individual de sortida de llum en un fixture. Normalment, un únic fixture conté exactament una sortida, com la lent, la bombeta o un conjunt de LEDs. No obstant això, hi ha un nombre creixent de fixtures al mercat que, tot i tractar-se com un únic fixture, tenen diversos dispositius de sortida de llum, és a dir, heads.

Per exemple, pots tenir un fixture de barra LED RGB que està muntat sobre un únic xassís i que, com a tal, apareix com un únic fixture amb una entrada DMX i una sortida DMX. No obstant això, en realitat està format per quatre "fixtures" LED RGB separats. Aquests fixtures separats es tracten a QLC+ com a heads; comparteixen algunes propietats amb els seus heads germans, es poden controlar individualment, però també poden tenir un control d'intensitat mestre que controla la sortida de llum de tots els heads junts.

Cada head pertany a un [Mode de Fixture](#mode-del-fixture) perquè en un mode, un fixture pot proporcionar prou canals per controlar cadascun dels seus heads individualment, mentre que en un altre mode, només es pot proporcionar un grapat de canals per controlar tots els heads simultàniament.

### HTP (Highest Takes Precedence)

HTP és una regla que decideix quin nivell s'envia a un univers DMX per a un canal quan aquest està sent controlat per més d'una [funció](#funcions) o widget de la Virtual Console. Generalment, els canals d'intensitat obeeixen la regla HTP. Això inclou els canals d'intensitat genèrics utilitzats per controlar _la intensitat de la llum_ amb dimmers i també els canals que controlen la intensitat d'un color, normalment en un fixture LED.

La regla HTP és senzilla: el nivell més alt (més proper al 100%) que s'està enviant actualment a un canal és el que s'envia a l'univers DMX.

Suposem que tens dos lliscadors que controlen el mateix canal d'intensitat. Primer, poses el lliscador 1 al 50% i després mous el lliscador 2 del 0% al 75%. Mentre el lliscador 2 estigui per sota del 50%, no passa res, però un cop es supera el nivell del 50% establert pel lliscador 1, la intensitat de la llum augmenta fins al 75%. Si tornes a arrossegar el lliscador 2 cap al 0%, la intensitat de la llum disminueix fins que arriba al 50% establert pel lliscador 1 i es manté al 50% fins que el lliscador 1 s'arrossega cap avall.

Un esvaïment creuat entre 2 [Escenes](#escena) substituirà els nivells HTP de la primera escena pels nivells HTP de la segona. Els nous nivells HTP es combinaran amb els nivells HTP d'altres funcions i widgets de la virtual console com s'ha descrit anteriorment. Vegeu també [LTP](#ltp-latest-takes-precedence).

### ![](../inputoutput.svg) Connectors d'entrada/sortida

QLC+ admet una varietat de connectors per enviar i rebre dades des de/cap al món extern.  
Un connector pot ser una interfície amb dispositius físics (com ara adaptadors DMX o controladors MIDI) o amb un protocol de xarxa (com [Art-Net](/plugins/art-net), [OSC](/plugins/osc) o [E1.31](/plugins/e1-31-sacn)).  
Els connectors admeten capacitats d'entrada, sortida o de feedback en funció del dispositiu o del protocol que estiguin controlant.  

Els mètodes d'entrada principals per a QLC+ són, naturalment, el teclat i el ratolí. Els usuaris poden assignar tecles del teclat als botons de la consola virtual i arrossegar lliscadors, i fer gairebé de tot amb el ratolí.

Tot i això, amb els connectors és possible connectar dispositius d'entrada addicionals a l'ordinador per alleugerir l'experiència d'usuari, més aviat feixuga i lenta, que s'aconsegueix amb un ratolí i un teclat normals. Els connectors que admeten una línia d'entrada proporcionen capacitats perquè dispositius externs generin dades d'entrada per a diversos elements de QLC+.

Una línia d'entrada és una connexió proporcionada per algun maquinari o xarxa, a la qual s'accedeix mitjançant un connector d'entrada. Pot ser, per exemple, un connector MIDI IN de l'ordinador de l'usuari (o d'un perifèric) al qual els usuaris poden connectar dispositius d'entrada compatibles amb MIDI, com ara taulers lliscants, etc.

Una línia de sortida és una connexió proporcionada per un maquinari o xarxa, a la qual s'accedeix mitjançant un connector de sortida. En altres paraules, és un univers DMX real, però se l'ha anomenat sortida per separar-lo dels universos interns de QLC+. Els pots pensar com a connectors de sortida XLR individuals al teu maquinari DMX.

### Perfils d'entrada

Els perfils d'entrada es poden considerar com a cosins dels [fixtures](#fixtures); contenen informació sobre dispositius específics que generen dades d'entrada. Un dispositiu d'entrada pot ser, per exemple, un tauler lliscant com el Behringer BCF-2000, el KORG nanoKONTROL, un Enttec Playback Wing...

### LTP (Latest Takes Precedence)

LTP és una regla que decideix quin nivell s'envia a un univers DMX per a un canal quan aquest està sent controlat per més d'una [funció](#funcions) o widget de la Virtual Console. Generalment, s'utilitza per a canals que s'han assignat a grups diferents del grup **Intensity**, com ara pan, tilt, gobo, velocitat d'estroboscopi i altres _paràmetres de fixture intel·ligent_

La regla LTP és senzilla: l'últim nivell establert per una funció o per un widget de la Virtual Console és el que s'envia a l'univers DMX.

Durant un esvaïment creuat entre [Escenes](#escena), sovint es canviaran els nivells LTP. Això s'ha de gestionar amb certa cura, ja que alguns nivells LTP han de saltar immediatament a un nou nivell, per exemple, en canviar d'un gobo a un altre. No obstant això, els grups LTP com pan i tilt potser han de canviar gradualment d'un nivell a un altre durant un esvaïment creuat. Es poden aconseguir temporitzacions diferents combinant escenes en una [Col·lecció](#col·lecció). Vegeu també [HTP](#htp-highest-takes-precedence).

### ![](../palette.svg) Palette

Una Palette és una entitat de QLC+ que representa una característica d'un fixture. Per exemple, una Palette pot ser un color, una posició, un angle de zoom, etc.
Les Palettes es poden utilitzar dins d'[Escenes](#escena) per abstreure una característica independentment dels Fixtures controlats per l'Escena.

### ![](../rgbmatrix.svg) Matriu RGB

Una funció de [matriu RGB](#funcions) es pot utilitzar per imposar gràfics i text senzills en una matriu (una graella o una paret) de [heads](#head) de fixture RGB i/o monocromàtics. La funció de matriu RGB ha estat dissenyada per ser ampliable amb [scripts](#script-rgb) que poden ser escrits pels usuaris.

Cada matriu RGB té la seva pròpia configuració de velocitat:

*   **Fade In:** Temps per esvair cada píxel a ON
*   **Fade Out:** Temps per esvair cada píxel a OFF
*   **Duration:** La durada del pas/fotograma actual

### ![](../rgbmatrix.svg) Script RGB

Un script RGB és un programa escrit en [ECMAScript](https://ca.wikipedia.org/wiki/ECMAScript) (també conegut com a JavaScript) que produeix les dades d'imatge necessàries per a les funcions de [Matriu RGB](#matriu-rgb). Aprèn-ne més a la pàgina de l'[API d'Script RGB](/function-manager/rgb-script-api).

### ![](../scene.svg) Escena

Una funció d'[escena](#funcions) comprèn els valors dels canals seleccionats que estan continguts en una o més instàncies de fixture. Quan s'inicia una escena, el temps que triguen els seus canals a arribar als valors objectiu depèn de la configuració de velocitat de l'escena:

Cada funció té la seva pròpia configuració de velocitat:

*   **Fade In:** El temps utilitzat per esvair tots els canals als seus valors objectiu, des de qualsevol valor que tinguessin
*   **Fade Out:** El temps utilitzat per esvair els canals HTP/d'intensitat de nou a zero. Tingues en compte que NOMÉS els canals [HTP](#htp-highest-takes-precedence) es veuen afectats per aquesta configuració.

Es poden crear còpies de funcions d'escena amb el [Function Manager](/function-manager). Tot el contingut de l'escena es copia al duplicat.

### ![](../sequence.svg) Seqüència

Una Seqüència té algunes de les funcionalitats d'un [Chaser](#chaser).  
És equivalent a un Chaser en el qual cada pas és una única [Escena](#escena) i cadascuna d'aquestes Escenes controla el mateix conjunt de canals. Una Seqüència està lligada a una Escena específica, cosa que significa que tots els passos de la Seqüència només poden controlar els canals habilitats d'aquesta Escena.  
Quan es creen nous passos en una Seqüència, no apareixerà cap finestra emergent de selecció de Funcions, ja que un pas de Seqüència no pot incloure altres Funcions, a diferència d'un pas de Chaser.  
Quan es crea una Seqüència, apareixerà una icona especial de seqüència al [Function Manager](/function-manager) com a fill de l'Escena a la qual està lligada.  
Per entendre la diferència entre una Seqüència i un Chaser, et convidem a llegir el segon paràgraf de la documentació del [Show Manager](/show-manager).

### ![](../script.svg) Script

La funció [Script](#funcions) treballa amb un llenguatge d'scripting senzill però potent per automatitzar les funcionalitats de QLC+ en un ordre seqüencial. Un Script es pot modificar amb l'[editor d'Scripts](/function-manager/script-editor).

### ![](../show.svg) Show

Un Show és una funció [avançada](#funcions) que encapsula la majoria de les Funcions de QLC+ per crear un espectacle de llum impulsat pel temps. Un Show només es pot crear amb el [Show Manager](/show-manager) i es pot inspeccionar i canviar de nom amb l'[editor de Shows](/function-manager/show-editor).

### ![](../video2.svg) Vídeo

Una funció de [vídeo](#funcions) és un objecte que representa un fitxer de vídeo emmagatzemat en un disc o en un URL de xarxa.  
Els formats de vídeo admesos depenen del teu sistema operatiu. Per exemple, Mac OSX es limita a fitxers MOV/MP4 i poc més.  
Les funcions de vídeo es poden col·locar en un [Chaser](#chaser) o en un [Show](#show) en el moment desitjat, utilitzant el panell [Show Manager](/show-manager).
