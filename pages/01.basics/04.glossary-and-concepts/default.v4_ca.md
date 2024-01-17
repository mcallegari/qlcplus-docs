---
title: 'Glossary and Concepts'
date: '07:32 21-08-2023'
---

Q Light Controller Plus (QLC+ per abreviar) té com a objectiu controlar els equips d'il·luminació utilitzats en diverses actuacions, com concerts en directe i teatres, etc. La intenció principal és que QLC+ pugui superar els taulells d'il·luminació comercials sense necessitat d'un manual de més de 500 pàgines mitjançant l'ús d'una interfície d'usuari intuïtiva i flexible.

Aquesta pàgina s'ha ordenat alfabèticament per facilitar la cerca d'un tema concret.

### ![](../audio.png) Àudio

Una [funció](#-funcions) d'àudio és un objecte que representa un fitxer d'àudio emmagatzemat en un disc.  
QLC+ és compatible amb els formats d'àudio més comuns, com ara Wave, MP3, M4A, Ogg i Flac. Suporta canals mono o estèreo i diverses taxes de mostreig com 44.1KHz, 48KHz, etc...  
Les funcions d'àudio es poden col·locar en el [Chaser](#chaser) o en un [Show](#show) en el moment desitjat, utilitzant el panell [Show Manager](/gestor-de-shows).  
Com la majoria de les funcions QLC+, l'àudio suporta temps d'esvaiment d'entrada i d'esvaiment de sortida.

### ![](../blackout.png)Blackout

Blackout és una funció QLC+ especial que s'utilitza per posar a zero tots els canals [HTP](#htp-highest-takes-precedence) de tots els universos. Això tindrà l'efecte d'aturar la sortida de llum de tots els fixtures. Els canals es mantindran a zero, independentment de les funcions o valors que s'estiguin executant manualment (des de la taula simple [](/taula-simple), per exemple). Quan s'apagui el Blackout, tots els canals tornaran a ser controlats per les funcions o el seu valor establert manualment.

### Capacitats

Alguns canals en fixtures o dispositius intel·ligents proporcionen molts tipus de funcions, o _capacitats_ com encendre el llum quan el valor del canal és \[240-255\], establir un color vermell en una roda de color quan el valor és exactament \[15\], o simplement controlar la intensitat del atenuador del dispositiu amb valors \[0-255\]. Cadascuna d'aquestes funcions individuals s'anomena capacitat i cadascuna d'elles té aquestes tres propietats:

* Valor mínim: El valor mínim del canal que proporciona una capacitat.
* Valor màxim: el valor màxim del canal que proporciona una capacitat.
* Nom: El nom amigable d'una capacitat.

### Grups de Canals

Els grups de canals es poden afegir i definir al panell [Fixture Manager](/gestos-de-fixtures) utilitzant [l'editor de grups de canals](/fixture-manager/editor-de-grups-de-canal).  
Els grups de canals poden tenir un nom definit per l'usuari i poden agrupar tots els canals definits per l'usuari seleccionats d'una llista de Fixtures existent.

### ![](../chaser.png) Chaser

Una [funció](#funcions) chaser es construeix a partir de múltiples escenes que s'executen en seqüència, una darrere l'altra, quan s'inicia la funció chaser. La següent funció s'executa només després que hagi finalitzat l'anterior. Qualsevol nombre de [funcions](#funcions) es pot inserir a un chaser.

La direcció de la funció Chaser es pot invertir o la selecció d'escena es pot aleatoritzar. La funció Chaser també es pot configurar per fer un bucle infinit, un bucle de ping-pong infinit (la direcció s'inverteix després de cada passada) o es pot executar només una vegada, en un mode d'un sol tir, després del qual acaba per si mateix. Si la funció s'estableix a bucle infinitament, s'ha d'aturar manualment.

Cada Chaser té la seva pròpia configuració de velocitat:

* **Fade In:** L'esvaïment d'entrada de la velocitat d'un pas
* **Retenció:** el temps de retenció d'un pas.
* **Fade Out:** La velocitat d'esvaïment de sortida d'un pas
* **Durada:** La durada d'un pas

Es poden crear còpies de les funcions del caçador amb el [Gestor de funcions](/gestor-de-funcions). Les escenes dins d'un chaser no es dupliquen quan es copia un chaser. Només es copia l'ordre i la direcció al nou.

### Feu clic i aneu

Click And Go és una tecnologia que permet a l'usuari accedir ràpidament a macros i colors d'una manera completament visual i amb només un parell de clics. Això pot comportar espectacles en directe més eficients i més llibertat per triar el resultat desitjat amb molta facilitat.  
Fins ara, hi ha tres tipus de ginys disponibles:

* Color únic (s'aplica a: canals d'intensitat vermell, verd, blau, cian, groc, magenta, ambre i blanc)
* Selector de color RGB. Controla els valors dels canals RGB seleccionats amb un sol clic
* Selector de Gobo/Macro. Accedeix i mostra un Gobo/Macro definit a la definició del Fixture

Hi ha disponible una visió general amb captures de pantalla [aquí](https://qlcplus.org/old/clickandgo.html)

### ![](../collection.png) Col·lecció

Una [funció](#funcions) col·lecció encapsula múltiples funcions que s'executen simultàniament quan s'executa la funció col·leció. Qualsevol nombre de funcions es pot inserir a una col·lecció, però cada funció només es pot inserir una vegada i una col·lecció no pot ser un membre directe de si mateixa.

Les col·leccions no tenen paràmetres de velocitat. La velocitat de cada funció membre s'estableix individualment utilitzant els seus propis editors.

Es poden crear còpies de funcions de col·lecció amb el [Gestor de funcions](/gestor-de-funcions). Les funcions contingudes en una col·lecció no es dupliquen; només es copia la llista de funcions.

### DMX

[DMX](https://en.wikipedia.org/wiki/DMX512) és l'abreviatura de **D**igital **M**ultiple**X**. Bàsicament defineix tot un conjunt de propietats, protocol, cablejat, etc. En el cas del programari d'il·luminació, defineix el nombre màxim de canals (512) per univers i el rang de valors de cada canal (0-255).

QLC+ admet universos il·limitats (hi ha 4 inicials, però es poden afegir-ne més si cal). No necessàriament han d'estar connectats al maquinari DMX; més aviat, DMX acaba de ser seleccionat com l'estàndard d'il·luminació de facto. L'abstracció real del maquinari (ja sigui analògic 0-10V, DMX o algun altre mètode) s'aconsegueix mitjançant [connectors de sortida](#connectors-de-sortida).

### ![](../efx.png) EFX

Una [funció](#funcions) EFX s'utilitza principalment per automatitzar llums mòbils (per exemple, escàners i caps mòbils). L'EFX pot crear camins matemàtics complexos en un pla X-Y que es converteixen en valors DMX per als canals de desplaçament i inclinació del fixture. **Només els accessoris que continguin canals de panoràmica i inclinació vàlids poden participar en una funció EFX.** Últimament EFX també pot controlar altres canals com Dimmer o RGB.

### ![](../fixture.png)Fixtures

Un fixture és essencialment un dispositiu d'il·luminació. Pot ser, per exemple, un capçal mòbil, un escàner, un làser, etc. No obstant això, per simplicitat, els PAR individuals (i similars) que normalment es controlen a través d'un canal dimmer per dispositiu, es poden agrupar juntes per formar un únic fixture.

Amb l'editor de definició de Fixture, els usuaris poden editar la informació del fixture compartit emmagatzemada en una biblioteca de fixtures que conté les propietats següents per a cada fixture:

* Fabricant (p. ex. Martin)
* Model (p. ex. MAC250)
* Tipus (canviador de color, escàner, capçal mòbil, fum, nebulosa, ventilador...)
* Propietats físiques (tipus de bombeta, angle de feix, dimensions...)
* Canals:
    * Grup de canals (Intensitat, Pan, Inclinació, Gobo, Color, Velocitat, etc.)
    * Vinculacions de canal de 8 i 16 bits per a grups pan & tilt
    * Color primari opcional per als canals d'intensitat (RGB/CMY)
    * Intervals de valors per a les característiques del canal (p. ex. 0-5:Amplia la làmpada, 6-15:Strobe, etc.)

Aquestes definicions de fixture es poden utilitzar per crear fixtures reals a l'aplicació Q Light Controller Plus, que tindrà propietats addicionals definides pels usuaris:

* Univers DMX
* Adreça DMX
* Nom

Es poden crear diverses instàncies d'un fixture (per exemple, els usuaris han de poder tenir diverses instàncies d'un MAC250 en ús). Cada fixture pot ser anomenat, però el nom no és utilitzat internament per QLC+ per identificar instàncies individuals de fixture. El mateix passa amb l'adreça DMX. No obstant això, es recomana als usuaris que nomenin els seus fixtures d'alguna manera sistemàtica per ajudar a identificar cadascun d'ells - si és necessari.

Els dispositius genèrics dimmer no necessiten les seves pròpies definicions de fixture, perquè normalment múltiples dimmers són apedaçats en un espai d'adreces comú, emprant un o més racks dimmer. Els usuaris poden crear instàncies d'aquestes entitats dimmer genèriques amb només definir el nombre de canals que ha de tenir cadascuna d'elles.

### ![](../group.png) Grup de fixtures

Un grup de fixtures és, com diu el seu nom, un grup de [fixtures](#fixtures). També defineixen (a un nivell bastant bàsic) la disposició física real del món real d'aquests fixtures. Aquest coneixement es pot utilitzar, per exemple, en la Matriu RGB per produir una paret de llums mesclables RGB que poden actuar com a píxels individuals en un patró gràfic o text de desplaçament.

### Mode del Fixture

Molts fabricants dissenyen les seves llums intel·ligents de manera que es puguin configurar per entendre diferents conjunts de canals. Per exemple, un escàner pot tenir dues opcions de configuració: una per a només canals de moviment de 8 bits (1x pan, 1x tilt) i una altra per a canals de moviment de 16 bits (2x pan, 2x tilt). En lloc de crear una definició de fixture completament nova per a cada variació, s'han agrupat en les definicions de fixture de QLC+ en modes de fixture.

### ![](../function.png) Funcions

El nombre de funcions és pràcticament il·limitat. Les funcions s'utilitzen per automatitzar l'establiment de valors als canals DMX. Cada tipus de funció té la seva pròpia manera d'automatitzar llums.

Els tipus de funcions són:

* [Escena](#escena)
* [Chaser](#chaser)
* [Seqüència](#seqüència)
* [EFX](#efx)
* [Matriu RGB](#matriu-rgb)
* [Col·lecció](#colleccio)
* [Show](#show)
* [Àudio](#audio)
* [Vídeo](#video)

Cada funció pot ser nomenada i, tot i que el nom no s'utilitza per identificar de forma única les funcions individuals, s'anima als usuaris a nomenar les seves funcions d'una manera sistemàtica i concisa per ajudar a identificar cadascuna d'elles. Per a la teva comoditat.

A partir de la versió 3.3.0, cada funció té la seva pròpia configuració de velocitat:

* **Fade In:** el temps utilitzat per esvair els canals HTP (en escenes també LTP) al seu valor objectiu.
* **Fade Out:** el temps utilitzat per esvair els canals de HTP/intensitat de nou a zero
* **Durada:** La durada del pas actual (no aplicable a les escenes)

### Gran Mestre

El Gran Mestre s'utilitza com a lliscador mestre final abans que els valors s'escriguin al maquinari DMX físic real. Normalment, el Gran Mestre afecta només els canals **d'intensitat**, però també es pot canviar per afectar els valors de **tots els** canals.

El Gran Mestre també té dos **Modes de Valor** que controlen la manera _com_ el Gran Mestre afecta els valors del canal:

* Reduir: els valors dels canals afectats es redueixen en un percentatge establert amb el control lliscant Gran Mestre. Per exemple, el Gran Mestre al 50% farà que tots els canals afectats es redueixin al 50% dels seus **actuals** valors.
* Límit: els canals afectats no poden obtenir valors més grans que el valor establert amb el control lliscant Gran Mestre. Per exemple, el Gran Mestre a 127 donarà com a resultat que tots els valors màxims dels canals afectats estiguin limitats exactament a 127.

### Capçal

Un capçal representa un dispositiu de sortida de llum individual en un fixture. Normalment, un sol fixture conté exactament una sortida, com la lent, la bombeta o un conjunt de LEDs. No obstant això, hi ha un nombre creixent d'aparells o fixtures en el mercat que, tot i tractar-se com un únic aparell, tenen múltiples dispositius de sortida de llum, és a dir, capçals.

Per exemple, podeu tenir un fixture de barra LED RGB que es munta sobre un sol xassís i, com a tal, apareix com un únic fixture amb una entrada DMX i una sortida DMX. No obstant això, en realitat es compon de quatre "fixtures" LED RGB separades. Aquests fixtures separats es tracten en QLC+ com a caps; comparteixen algunes propietats amb els seus caps germans, poden ser controlats individualment, però també poden tenir un control d'intensitat mestre que controla la sortida de llum de tots els caps junts.

Cada capçal pertany a un [mode de fixture](#mode-de-fixture) perquè en un mode, un fixture pot proporcionar suficients canals per controlar cadascun dels seus capçals individualment, mentre que en un altre mode, només es poden proporcionar un grapat de canals per controlar tots els capçals simultàniament.

### HTP (El més alt té prioritat)

HTP és una regla que decideix quin nivell s'envia a un univers DMX per un canal quan el canal està controlat per més d'una [funció](#funcions) o giny de consola virtual. Generalment, els canals d'intensitat obeeixen la regla HTP. Això inclou canals d'intensitat genèrics utilitzats per controlar _la intensitat de la llum_ amb dimmers i també canals que controlen la intensitat d'un color, normalment en un dispositiu LED.

La regla HTP és simple: el nivell més alt (més proper al 100%) que s'envia actualment a un canal és el que s'envia a l'univers DMX.

Suposem que teniu dos lliscadors que controlen el mateix canal d'intensitat. En primer lloc, heu establert el control lliscant 1 al 50% i, a continuació, moveu el control lliscant 2 del 0% al 75%. Mentre el lliscador 2 estigui per sota del 50% no passa res, però després de creuar el nivell del 50% establert pel lliscador 1, la intensitat de la llum augmenta fins al 75%. Si tornes a arrossegar el control lliscant 2 cap al 0%, la intensitat de la llum disminueix fins que arriba al 50% establert pel control lliscant 1 i es manté al 50% fins que el control lliscant 1 s'arrossega cap avall.

Un esvaïment creuat entre 2 [escenes](#escena) substituirà els nivells d'HTP de la primera escena pels nivells d'HTP de la segona. Els nous nivells HTP es combinaran amb els nivells HTP d'altres funcions i ginys de consola virtuals com els anteriors. Vegeu també [LTP](#ltp).

### ![](../input_output.png) Connectors d'entrada/sortida

QLC+ admet una varietat de connectors per enviar i rebre dades des de/cap al món extern.  
Un connector pot ser una interfície amb dispositius físics (com ara adaptadors DMX o controladors MIDI) o amb un protocol de xarxa (com [ArtNet](/plugins/art-net), [OSC](/plugins/osc) o [E1.31](/plugins/e1-31-sacn)).  
Els connectors admeten capacitats d'entrada, sortida o comentaris segons el dispositiu o el protocol que estiguin controlant.

Els mètodes d'entrada principals per a QLC+ són naturalment el teclat i el ratolí. Els usuaris poden assignar tecles de teclat als botons virtuals de consola i arrossegar els controls lliscants i fer gairebé tot amb el ratolí.

Tot i que, amb els connectors, és possible adjuntar dispositius d'entrada addicionals a l'ordinador per alleujar l'experiència d'usuari bastant maldestra i lenta que s'aconsegueix amb un ratolí i un teclat regulars. Els connectors que admeten una línia d'entrada proporcionen capacitats per aconseguir que els dispositius externs produeixin dades d'entrada a diversos elements QLC+.

Una línia d'entrada és una connexió proporcionada per algun maquinari o xarxa a la qual s'accedeix a través d'un connector d'entrada. Pot ser, per exemple, un connector MIDI IN a l'ordinador de l'usuari (o perifèric) al qual els usuaris poden connectar dispositius d'entrada amb capacitat MIDI, com ara taulers lliscants, etc.

Una línia de sortida és una connexió proporcionada per un maquinari o xarxa a la qual s'accedeix a través d'un connector de sortida. És a dir, és un univers real DMX, però s'ha anomenat sortida per separar-lo dels universos interns de QLC+. Podríeu pensar en ells com a connectors de sortida XLR individuals en el vostre maquinari DMX.

### Perfils d'entrada

Els perfils d'entrada es poden considerar com a cosins [dels fixtures](#fixtures); contenen informació sobre dispositius específics que produeixen dades d'entrada. Un dispositiu d'entrada pot ser, per exemple, un tauler lliscant com el Behringer BCF-2000, el Korg nanoKONTROL, un Enttec Playback Wing...

### LTP (l'últim té prioritat)

LTP és una regla que decideix quin nivell s'envia a un univers DMX per un canal quan el canal està sent controlat per més d'una  [funció](#funcions) o giny de la consola virtual. En general, s'utilitza per a canals que s'han assignat a grups diferents del grup **d'intensitat**, com ara panoràmica, inclinació, gobo, velocitat estroboscòpica i altres _paràmetres de fixture intel·ligent_

La regla LTP és senzilla: l'últim nivell establert per una funció o un giny de consola virtual s'envia a l'univers DMX.

Durant un esvaïment creuat entre [Escenes](#escena), sovint es canviaran els nivells de LTP. Això s'ha de gestionar amb certa cura, ja que alguns nivells de LTP han de saltar immediatament a un nou nivell, per exemple, canviant d'un gobo a un altre. No obstant això, els grups LTP com la panoràmica i la inclinació, poden haver de canviar gradualment d'un nivell a un altre durant un esvaïment creuat. Es poden aconseguir diferents temps combinant escenes en una [col·lecció](#colleccio). Vegeu també [HTP](#htp).

### ![](../operate.png) Modes

Q Light Controller Plus es basa en el concepte comú de tenir dos modes operatius diferents per evitar canvis accidentals i possiblement perjudicials durant el funcionament:

* El mode de disseny està destinat a editar el comportament del programa; creeu i editeu [funcions](#funcions) i [fixtures](#fixtures) i ajusteu com funcionen.
* El mode d'operació està destinat a executar les funcions creades que eventualment controlen els accessoris d'il·luminació de l'usuari.

### ![](../rgbmatrix.png) Matriu RGB

Es pot utilitzar una [funció](#funcions) de matriu RGB per imposar gràfics i text senzills en una matriu (una graella o una paret) de [capçals](#head) de fixture RGB i/o monocromàtics. La funció de matriu RGB ha estat dissenyada per ser ampliable amb [scripts](#rgbscript) que poden ser escrits pels usuaris.

Cada matriu RGB té la seva pròpia configuració de velocitat:

* **Fade In:** Temps d'esvaïment d'entrada de cada píxel activat
* **Fade Out:** Temps d'esvaïment de sortida de cada píxel a desactivat
* **Durada:** La durada del pas/marc actual

### ![](../rgbmatrix.png) Script RGB

Un script RGB és un programa escrit en [ECMAScript](https://en.wikipedia.org/wiki/ECMAScript) (també conegut com a JavaScript) que produeix les dades d'imatge necessàries per a les funcions  [Matriu RGB](#rgb-matrix). Més informació a la pàgina de l'[API d'script RGB](/function-manager/rgb-script-api).

### ![](../scene.png) Escena

Una [funció](#funcions) d'escena comprèn els valors dels canals seleccionats que estan continguts en una o més instàncies de fixtures. Quan s'inicia una escena, el temps que triga els seus canals a arribar als seus valors objectius depèn de la configuració de velocitat de l'escena:

Cada funció té els seus propis paràmetres de velocitat:

* **Fade In:** El temps utilitzat per esvair tots els canals als seus valors objectius, des de qualsevol valor que tinguin
* **Fade Out:** el temps utilitzat per esvair els canals de HTP/intensitat de nou a zero. Tingueu en compte que NOMÉS els canals [HTP](#htp) es veuen afectats per aquesta configuració.

Es poden crear còpies de funcions d'escena amb el [Gestor de funcions](/gestor-de-funcions). Tots els continguts de l'escena es copien al duplicat.

### ![](../sequence.png) Seqüència

Una seqüència té algunes de les funcionalitats d'un [Chaser](#chaser).  
És equivalent a un chaser en el qual cada pas és una sola [escena](#escena) i cadascuna d'aquestes escenes controla el mateix conjunt de canals. Una seqüència està lligada a una escena específica, el que significa que tots els passos de la seqüència només poden controlar els canals habilitats d'aquesta escena.  
Quan es creen nous passos en una seqüència, no apareixerà cap emergent de selecció de Funcions, ja que un pas de Seqüència no pot incloure altres Funcions, a diferència d'un pas de Chaser.  
Quan es crea una seqüència, apareixerà una icona de seqüència especial al [Gestor de funcions](/gestor-de-funcions) com a fill de l'escena a la qual està vinculada.  
Per entendre la diferència entre una seqüència i un Chaser, se us convida a llegir el segon paràgraf de la documentació [Show Manager](/gestor-de-shows).

### ![](../script.png) Script

La [funció](#funcions) Script funciona en un llenguatge de scripting senzill però potent per automatitzar les funcionalitats de QLC+ en un ordre seqüencial. Un script es pot modificar amb l'[editor de scripts](/function-manager/editor-de-scripts).

### ![](../show.png) Show

Un Show és una [funció](#funcions) avançada que encapsula la majoria de les funcions QLC+ per crear un espectacle de llums impulsat pel temps. Només es pot crear un Show amb el [gestor de Shows](/gestor-de-shows) i es pot inspeccionar i canviar el nom amb l'[editor de Shows](/function-manager/editor-de-shows).

### ![](../video.png) Vídeo

Una [funció](#funcions) de vídeo és un objecte que representa un fitxer de vídeo emmagatzemat en un disc o en un URL de xarxa.  
Els formats de vídeo admesos depenen del vostre sistema operatiu. Per exemple, Mac OSX es limita a fitxers MOV/MP4 i no molt més.  
Les funcions de vídeo es poden col·locar en el [Chaser](#chaser) o en un [Show](#show) en el moment desitjat, utilitzant el panell [Show Manager](/gestor-de-shows).
