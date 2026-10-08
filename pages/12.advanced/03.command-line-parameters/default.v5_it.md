---
title: 'Command Line Parameters'
date: '08:19 22-08-2023'
---

QLC+ supporta numerosi parametri della riga di comando per automatizzare/estendere
alcune funzionalità all'avvio.
L'utilizzo dei parametri della riga di comando può risultare complesso a
seconda del sistema operativo utilizzato:

**Linux**: basta aprire un terminale e digitare `qlcplus-qml` seguito dai
parametri necessari<br>
**Windows**: creare un collegamento a qlcplus-qml.exe (solitamente in
C:\\QLC+) sul desktop. Fare clic con il tasto destro sul collegamento e
selezionare "Proprietà". Nel campo "Destinazione" comparirà qualcosa come
`C:\\QLC+\\qlcplus-qml.exe`. Lì è possibile aggiungere i parametri della riga
di comando. Al termine, fare clic su OK.<br>
Ad esempio, per forzare la lingua tedesca all'avvio, modificare la riga di
comando del collegamento in questo modo:

![](../command-line-v5.png)

**OSX**: questo è il caso più complesso, poiché QLC+ su OSX è distribuito in
un pacchetto DMG. È necessario aprire un terminale ed entrare nel DMG di QLC+
con "cd", in questo modo:<br>`cd QLC+.app\\Contents\\MacOS`<br>
Fatto ciò, digitare `./qlcplus-qml` seguito dai parametri necessari.

|     |
| --- |
| **-o o --open**<br><br>**Descrizione:** Apre il file di workspace specificato<br><br>**Parametri:** Nome file<br><br>**Esempi:**  <br>Aprire sample.qxw:  <br>qlcplus-qml -o sample.qxw  <br>qlcplus-qml --open sample.qxw |

|     |
| --- |
| **-9 o --openlast**<br><br>**Descrizione:** Apre il file di progetto dell'ultima sessione<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Aprire l'ultimo file aperto:  <br>qlcplus-qml -9  <br>qlcplus-qml --openlast |

|     |
| --- |
| **-f o --fullscreen**<br><br>**Descrizione:** Avvia l'applicazione in modalità schermo intero<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Chiedere al window manager di assegnare a QLC+ l'intero spazio dello schermo:  <br>qlcplus-qml -f  <br>qlcplus-qml --fullscreen |

|     |
| --- |
| **-h o --help**<br><br>**Descrizione:** Mostra la guida della riga di comando (solo su Linux e macOS)<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Mostrare la guida della riga di comando:  <br>qlcplus-qml -h  <br>qlcplus-qml --help |

|     |
| --- |
| **-3 o --no3d**<br><br>**Descrizione:** Disabilita il sotto-contesto di anteprima 3d<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Disabilitare l'anteprima 3d:  <br>qlcplus-qml -3  <br>qlcplus-qml --no3d |

|     |
| --- |
| **-k o --kiosk**<br><br>**Descrizione:** Abilita la modalità kiosk (è visibile solo la [console virtuale](/virtual-console)<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Avviare l'applicazione in modalità kiosk:  <br>qlcplus -k  <br>qlcplus --kiosk |

|     |
| --- |
| **-l o --locale**<br><br>**Descrizione:** Utilizza la lingua specificata per la traduzione<br><br>**Parametri:** Codice lingua (attualmente supportati: ca\_ES, cz\_CZ, de\_DE, en\_GB, es\_ES, fi\_FI, fr\_FR, it\_IT, ja\_JP, nl\_NL, pt_BR)<br><br>**Esempi:**  <br>Utilizzare la lingua finlandese:  <br>qlcplus-qml -l fi_FI  <br>qlcplus-qml --locale fi_FI |

|     |
| --- |
| **-m o --nowm**<br><br>**Descrizione:** Informa l'applicazione che il sistema non fornisce un window manager. QLC+ aggiungerà quindi alcuni controlli extra per chiudere le finestre.<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Avviare QLC+ senza window manager:  <br>qlcplus-qml -m  <br>qlcplus-qml --nowm |

|     |
| --- |
| **-v o --version**<br><br>**Descrizione:** Mostra il numero di versione corrente dell'applicazione<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>qlcplus-qml -v  <br>qlcplus-qml --version |

|     |
| --- |
| **-w o --web**<br><br>**Descrizione:** Abilita l'accesso web remoto sulla porta 9999<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>qlcplus-qml -w  <br>qlcplus-qml --web |

|     |
| --- |
| **-wp o --web-port**<br><br>**Descrizione:** Utilizza una porta specifica per l'accesso web<br><br>**Parametri:** Numero di porta<br><br>**Esempi:**  <br>qlcplus-qml -wp 12345  <br>qlcplus-qml --web-port 12345 |

|     |
| --- |
| **-wa o --web-auth**<br><br>**Descrizione:** Abilita l'accesso web remoto con autenticazione utenti<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>qlcplus-qml -wa  <br>qlcplus-qml --web-auth |

|     |
| --- |
| **-a o --web-auth-file**<br><br>**Descrizione:** Specifica un file in cui memorizzare le credenziali di autenticazione di base per l'accesso web<br><br>**Parametri:** Nome file<br><br>**Esempi:**  <br>qlcplus-qml -wa qlcplus_password  <br>qlcplus-qml --web-auth-file qlcplus_password |

|     |
| --- |
| **-d o --debug**<br><br>**Descrizione:** Abilita la modalità debug. Da notare che i messaggi di debug non sono inclusi nei binari rilasciati.<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Abilitare la modalità debug:  <br>qlcplus-qml -d  <br>qlcplus-qml --debug  <br>  |

|     |
| --- |
| **-g o --log**<br><br>**Descrizione:** Registra i messaggi di debug in un file (`$HOME/QLC+.log`)<br><br>**Parametri:** Nessuno<br><br>**Esempi:**  <br>Abilitare i messaggi di debug e salvarli nel registro  <br>qlcplus -d -g  <br>qlcplus --debug --log |
