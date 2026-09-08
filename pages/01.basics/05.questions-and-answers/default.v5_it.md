---
title: 'Domande e risposte'
date: '08:32 21-08-2023'
media_order: dmx-usb-settings.png
---

In questa pagina troverete le domande più comuni che possono sorgere quando si inizia a usare QLC+.  
Qui potete trovare direttamente la risposta oppure un aiuto per indirizzarvi nella giusta direzione.  

#### Domanda #1: QLC+ non rileva il mio dispositivo USB

**R:** QLC+ supporta un'ampia varietà di dispositivi USB. Prima di tutto dovreste verificare che il 
collegamento fisico sia corretto. Solitamente un LED sul vostro dispositivo dovrebbe indicare se è acceso e funziona correttamente.

Se state usando Windows e il vostro dispositivo è prodotto da Peperoni o Velleman, leggete le 
informazioni su come farli funzionare in queste pagine di aiuto. Per questioni di licenza, entrambi richiedono un 
file DLL aggiuntivo per funzionare. Consultate [plugin di output Peperoni](/plugins/peperoni) o [plugin di output Velleman](/plugins/velleman)

Se state usando Linux, verificate che la vostra distribuzione abbia rilevato il dispositivo quando è stato collegato. In pratica,
il comando `dmesg` dovrebbe dirvi qualcosa.

#### Domanda #2: Ho diversi [pulsanti](/virtual-console/button) nella mia Virtual Console. Ho bisogno di un modo per disattivare il pulsante attualmente attivo quando ne attivo un altro. Come si fa?

**R:** Semplicemente posizionate i vostri pulsanti all'interno di un [Solo Frame](/virtual-console/solo-frame). Fa esattamente questo.

#### Domanda #3: Ho appena aggiornato il mio Mac a Mavericks (o versioni successive) e il mio adattatore USB DMX non trasmette alcun dato.

**R:** Il problema risiede in un driver Apple chiamato AppleUSBFTDI, che prende il controllo di ogni dispositivo basato su FTDI
rilevato nel sistema.

Ci sono diversi modi per risolvere il problema, ma sostanzialmente il risultato è lo stesso: il driver Apple deve essere disabilitato.

Consultate la pagina dedicata per capire come [disabilitare il driver Apple FTDI](/plugins/disable-apple-serial-vcp-driver)

In alternativa, potete scaricare lo strumento [ENTTEC FTDI Driver Control tool](https://www.dmxis.com/release/FtdiDriverControl.zip)
e provare ad abilitare/disabilitare il driver Apple con esso.

**Nota 1: questo può compromettere il comportamento di altri dispositivi USB, quindi fatelo solo se sapete cosa state facendo!**

**Nota 2: ogni volta che Mac OS riceve un aggiornamento, dovete eseguire di nuovo questa procedura!**

**Nota 3: molto probabilmente, quando disabilitate/abilitate il driver Apple, dovrete riavviare il vostro Mac**

#### Domanda #4: Dove si trova la cartella utente di QLC+ nel mio sistema?

**R:** La cartella utente è dove vanno i fixture utente, i profili di input, gli script RGB e i template MIDI.

Cambia a seconda del vostro sistema operativo:

* **Linux**: è una cartella nascosta nella directory home del vostro utente: `$HOME/.qlcplus`
* **Windows**: è una cartella nella directory del vostro utente (es. <Username>): `C:\\Users\\<Username>\\QLC+`
* **Mac OS**: si trova nella directory `Library` del vostro utente: `$HOME/Library/Application\\ Support/QLC+`

Potete raggiungere una qualsiasi di queste cartelle da un terminale con il comando `cd`. Ad esempio:

`cd $HOME/Library/Application\\ Support/QLC+`

Tenete presente che i fixture e i profili di input presenti nella cartella utente avranno la precedenza rispetto
agli stessi file nella cartella di sistema di QLC+. 

Potete anche salvare [Definizioni Fixture](/basics/glossary-and-concepts#fixtures) personalizzate e
[Profili di Input](/input-output/input-profiles) nella stessa cartella del vostro progetto; QLC+ li 
troverà quando aprirete quel progetto.

#### Domanda #5: Dove si trova la cartella di sistema di QLC+ nel mio sistema?

**R:** La cartella di sistema è dove vengono installate le risorse di QLC+ (fixture, profili di input, script RGB, ecc.)
e cambia a seconda del vostro sistema operativo:

* **Linux**: è una cartella fissa chiamata `/usr/share/qlcplus`
* **Windows**: è la cartella in cui avete effettivamente installato QLC+. Per impostazione predefinita: `C:\\QLC+`
* **Mac OS**: è una cartella all'interno del pacchetto QLC+ (file .app). È possibile sfogliare
  il contenuto del pacchetto QLC+.app semplicemente con Finder. Basta fare clic con il tasto destro sul file e selezionare
  "Mostra contenuto pacchetto".<br>In alternativa, la cartella di sistema può essere raggiunta con un terminale,
  ma dipende da dove avete installato QLC+. Ad esempio, se avete trascinato QLC+ nella cartella
  Applicazioni, sarà: `/Applications/QLC+.app/Contents/Resources`

#### Domanda #6: QLC+ non riesce a riprodurre alcuni video su Windows

**R:** QLC+ si basa sulle librerie Qt, che a loro volta si basano sui filtri DirectShow installati nel sistema.

Sfortunatamente i codec di base supportati da Windows sono piuttosto scarsi, quindi dovete installare un pacchetto di codec 
aggiuntivi come K-Lite, [disponibile qui](https://www.codecguide.com/download_kl.htm).

#### Domanda #7: Ho un display 4k e tutto nell'interfaccia di QLC+ è estremamente piccolo

**R:** Dovete aggiungere un'opzione alla riga di comando di QLC+ per dire alle librerie Qt di ridimensionare automaticamente
l'interfaccia su un display ad alta densità di pixel (High DPI). Esempi:

* **Linux (da terminale)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 qlcplus`
* **Collegamento Windows**: `C:\\Windows\\System32\\cmd.exe /c "SET QT_AUTO_SCREEN_SCALE_FACTOR=1 && START /D ^"C:\\QLC+^" qlcplus.exe"`
* **Mac OS (da terminale)**: `QT_AUTO_SCREEN_SCALE_FACTOR=1 QLC+.app\\Contents\\MacOS\\qlcplus`

Nel caso, consultate la pagina [parametri della riga di comando](/advanced/command-line-parameters) per ulteriori informazioni.

#### Domanda #8: Le mie luci sfarfallano. Cosa posso fare?

**R:** A volte un adattatore USB DMX non bufferizzato o una linea DMX disturbata possono causare uno sfarfallio
inaspettato in alcuni fixture. QLC+ consente di regolare la frequenza di uscita per mitigare l'effetto indesiderato.
Considerate che una buona frequenza di aggiornamento DMX dovrebbe essere intorno ai 44Hz.<br>Ecco un esempio che mostra
il pannello di impostazioni di un clone Open DMX. Potete accedervi facendo doppio clic sulla linea di output o selezionando
una linea di output e facendo clic sull'icona ![](/basics/configure.png).

![dmx-usb-settings](dmx-usb-settings.png "dmx-usb-settings")

