---
title: MIDI
date: '05:15 22-08-2023'
---

Introducció
------------

Aquest connector dona suport d'entrada/sortida per al  [protocol MIDI](https://ca.wikipedia.org/wiki/MIDI) i dona llibertat a l'usuari per controlar paràmetres típics com els canals, Notes, Canvi de programa i Canvi de Control.  
El connector MIDI pot ser força potent utilitzat en combinació amb dispositius MIDI com teclats, controladors MIDI (com Behringer BCF2000 o KORG nanoKONTROL) o un seqüenciador d'àudio de programari com Cubase o Ardour 3.  
L'ús pot variar des del control de fader-to-fader (el cas BCF2000) fins a l'activació de seqüències per a espectacles sincronitzats (concerts o espectacles controlats per metrònom utilitzant un seqüenciador d'àudio)

Configuració
-------------

Quan feu clic al botó de configuració ![](/basics/configure.png) apareixerà una finestra, mostrant totes les línies d'entrada i sortida MIDI detectades.  
Cada línia té tres opcions que es poden canviar en funció de les teves necessitats:

* **Canal MIDI**: Aquest és el canal on QLC+ rebrà o enviarà dades a través del sistema MIDI. Els canals MIDI poden anar de l'1 al 16. El canal especial "1-16" dirà a QLC+ que rebi o enviï dades en qualsevol canal MIDI.
* **Mode**: Aquest és el mode MIDI que QLC+ utilitzarà per enviar dades a través del sistema MIDI. Aquest paràmetre pot assumir tres valors possibles:
    * **Velocitat de Nota**: en aquest mode, QLC+ enviarà dades utilitzant la velocitat de les notes MIDI. Les notes MIDI poden anar de 21 (A0) a 108 (C8) i cada nota pot tenir una velocitat que va de 0 a 127, que es duplicarà dins de QLC+ perquè coincideixi amb el rang DMX (0-255).
    * **Canvi de Control**: aquest és un dels missatges de protocol MIDI (com el Canvi de Programa) que utilitzen freqüentment els controladors MIDI. Cada dispositiu hauria de llistar els missatges CC compatibles en el seu manual d'usuari, per tant, consulteu-lo abans d'utilitzar aquest mode. L'interval CC pot anar de 0 a 127 i pot tenir valors de 0 a 127, que es duplicaran dins de QLC+ per a coincidir amb l'interval DMX (0-255).
    * **Canvi de Programa**: aquest és un dels missatges de protocol MIDI (com Canvi de Control) que utilitzen freqüentment els controladors MIDI. Cada dispositiu hauria de llistar els missatges PC compatibles en el seu manual d'usuari, per tant, consulteu-lo abans d'utilitzar aquest mode. L'interval de PC pot anar de 0 a 127 i pot tenir valors de 0 a 127, que es duplicaran dins de QLC+ perquè coincideixi amb l'interval DMX (0-255).
* **Missatge d'Inicialització**: Aquesta és una llista de predefinits (plantilles) que contenen el missatge d'inicialització que QLC+ enviarà en obrir un dispositiu MIDI abans d'utilitzar-lo. A continuació s'escriu una explicació detallada d'aquesta funcionalitat.

Feedback/Retroalimentacions
---------

El connector MIDI és un dels connectors QLC+ que admeten retroalimentació/feedback. Quan QLC+ detecti un dispositiu MIDI amb una línia de sortida, habilitarà la casella de selecció de retroalimentació en el panell d'Entrada/Sortida](/input-output). Tingueu en compte que la sortida i els feedback són exclusius, de manera que no es poden utilitzar tots dos alhora.  
Si el dispositiu MIDI admet un canal de feedback, QLC+ pot enviar-li una retroalimentació visual/mecànica. Dispositius com el Behringer BCF2000 admeten aquesta característica. Això és molt útil durant els espectacles en directe per tenir coneixement immediat de l'estat actual dels faders mapejats al QLC+.

Un petit truc que es pot aconseguir amb QLC+ és utilitzar retroalimentació com una línia de sortida MIDI genèrica per activar controladors/seqüenciadors externs.  
Vegem alguns exemples:

* Entrada: **OSC** ---\: Sortida: **DMX USB** --\: Retroalimentació: **MIDI**
* Entrada: **Ala Enttec** --\: Sortida: **ArtNet** --\: Retroalimentació: **MIDI**

Eix X del nanoPAD de KORG
-------------------

Per raons desconegudes, els valors per defecte de fàbrica del nanoPAD no mapegen l'eix X de l'àrea del pad. Per fer que funcioni plenament amb QLC+, descarrega l'utilitat KORG (només per a Windows i macOS) des d'[aquí](http://i.korg.com/SupportPage.aspx?productid=415) i configura l'Eix X a CC2 (Controla el canvi #2).

Feedback LED dels APC de l'AKAI
----------------------

Quan s'utilitza un controlador de la família APC d'Akai, hi ha una funció que pot ser molt útil: feedback de color LED.  
El comportament per defecte amb els botons de la consola virtual és: valor = 0: LED apagat, valor = 255: LED verd  
Això es pot personalitzar en seleccionar un canal d'entrada, prement el botó "Retroalimentació personalitzada".  
Es mostra una nova àrea, que mostra la possibilitat d'introduir un valor inferior i un valor superior. Això es tradueix bàsicament en què els valors QLC+ haurien d'enviar per als botons d'estats activats/desactivats.  
Atès que el protocol MIDI funciona en un rang de valors 0-127, i QLC+ funciona en el rang DMX de 0-255, la taula següent apunta directament als valors que heu d'introduir per obtenir el color desitjat d'un LED APC. Bàsicament es prenen de manuals d'APC i es dupliquen.

| Valor | Color LED |
| --- | --- |
| 0 | Desactivat/Off |
| 2 | Verd |
| 4 | Parpelleig Verd |
| 6 | Vermell |
| 8 | Parpelleig Vermell |
| 10 | Groc |
| 12 | Parpelleig Groc |
| 14-255 | Verd |

És interessant observar que no cal mantenir el 0 com a valor inferior. Per exemple, amb inferior = 6 i superior = 2, el resultat serà: Funció desactivada -> LED vermell, Funció activada -> LED verd.

Rellotge de ritme MIDI
---------------

A partir de la versió 4.5.0, QLC+ és compatible amb el [rellotge de ritme MIDI](https://en.wikipedia.org/wiki/MIDI_beat_clock)  
No s'ha de confondre amb el [codi de temps MIDI](https://en.wikipedia.org/wiki/MIDI_timecode), el rellotge de ritme MIDI és un senyal útil per sincronitzar dispositius basats en BPM, com ara una caixa de ritmes amb els llums controlats per QLC+.  
S'han de mapejar dos canals MIDI especials en QLC+ per controlar els ginys de la [Consola Virtual](/virtual-console) amb un rellotge de ritme.  
Aquí tens una breu explicació dels canals especials:

* **Canal 530**: S'envia un senyal en aquest canal quan s'inicia o s'atura un rellotge de ritme.
* **Canal 531**: Aquest senyal s'envia cada BPM. QLC+ no pren cap avís de les mesures (p. ex. 3/4, 4/4, 7/8), de manera que quan configureu el rellotge MIDI haureu de considerar com ho manejarà QLC+.


**Consell**: Si el vostre controlador funciona amb un BPM alt (p. ex. 180-200), és possible que us resulti difícil agafar el senyal d'inici. Un truc per fer-ho és agafar el senyal de aturada. Exemple:

1. Activa la detecció automàtica del Giny de la Consola Virtual QLC+
2. Premeu reprodueix al dispositiu generant el rellotge de ritme MIDI. QLC+ detectarà el canal 530 i canviarà molt ràpidament al 531
3. Atura la reproducció al dispositiu de rellotge de ritme MIDI. QLC+ detectarà de nou el canal 530.
4. Desactiva la detecció automàtica del Giny de la Consola Virtual de QLC+

De manera similar també es pot agafar el senyal de ritme. Només has de desactivar el procés de detecció automàtica abans d'aturar la reproducció del controlador de ritme (inverteix els passos 3 i 4).

Missatge d'inicialització MIDI
---------------------------

Pot haver-hi casos en què el dispositiu MIDI necessiti algunes ordres per convertir-se en un mode operatiu específic  
El protocol MIDI pot gestionar això a través de SysEx. Aquests són missatges particulars per a instruir a un dispositiu MIDI de com comportar-se.  
QLC+ pot utilitzar una plantilla XML per aconseguir-ho que es pot seleccionar al panell de configuració MIDI.  
Aquí teniu un exemple de com es veu una plantilla:

<!DOCTYPE MidiTemplate>
<MidiTemplate>
<Creator>
<Author>El vostre nom</Author>
</Creator>
<Description>Una breu descripció del que fa la plantilla.</Description>
<Name>Nom de plantilla que es mostrarà amb QLC+</Name>
<InitMessage>F0 47 00 7B 60 00 04 41 09 00 05 F7</InitMessage>
</MidiTemplate>

Podeu crear les que necessiteu i col·locar-les a la carpeta MidiTemplates.  
Us convidem a enviar-les al fòrum QLC+.

Mapa de Canals
-----------------

Per gestionar una barreja de diversos missatges MIDI (Notes, PC, CC, etc.), QLC+ els reassigna a un ordre seqüencial.  
A continuació, els números de canal que s'utilitzaran a l'[Editor del Perfil d'Entrada](/input-output/input-profiles):

| Canal | Missatge MIDI |
| --- | --- |
| 1 | Canvi de Control 1 |
| ... | ... |
| 128 | Canvi de Control 128 |
| 129 | NOTA ACTIVADA/NOTA DESACTIVADA 1 |
| ... | ... |
| 256 | NOTA ACTIVADA/DESACTIVADA 128 |
| 257 | NOTA DESPRÉS DE TOCAR 1 |
| ... | ... |
| 384 | NOTA DESPRÈS DE TOCAR 128 |
| 385 | Canvi de Programa 1 |
| ... | ... |
| 512 | Canvi de Programa 128 |
| 513 | Canal Desrprès de Tocar |
| 514 | Roda de To |
| 530 | Rellotge de tocs MIDI: Inici/Continuació |
| 531 | Rellotge de tocs MIDI: ritme |
| 532 | Rellotge de tocs MIDI: atura |

In OMNI mode, add 4096 * Channel number
