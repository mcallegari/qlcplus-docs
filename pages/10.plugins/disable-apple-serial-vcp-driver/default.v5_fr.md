---
title: 'Désactiver le pilote VCP série d''Apple'
date: '08:06 22-08-2023'
---

Compte tenu de tous les problèmes soulevés par les utilisateurs de QLC+ à ce sujet, voici un extrait de la note d'application officielle [FTDI Application Note 134](https://www.ftdichip.com/Support/Documents/AppNotes/AN_134_FTDI_Drivers_Installation_Guide_for_MAC_OSX.pdf)

## Désactiver le VCP fourni par Apple sur OS X 10.9 et versions ultérieures

Un driver VCP pour la plupart des convertisseurs FTDI USB vers série est fourni dans le cadre du noyau sous OS X 10.9 et versions ultérieures. OS X charge ce driver (AppleUSBFTDI.kext) lorsqu'un périphérique avec des identifiants de fabricant et de produit FTDI standard est connecté. Pour utiliser le VCP propre à FTDI à la place, ou pour utiliser des programmes D2XX, AppleUSBFTDI doit être désactivé, déchargé ou bloqué, comme suit.

### Désactiver en renommant (OS X 10.9 et 10.10 uniquement)

Remarque : cette méthode ne fonctionne **que sur 10.9 Mavericks et 10.10 Yosemite.**  
  
Démarrez une session de terminal (Aller > Applications > Utilitaires > Terminal) et copiez/collez le texte suivant dans l'invite de commande :

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.kext AppleUSBFTDI.disabled
sudo touch /System/Library/Extensions
```

puis redémarrez.  
Pour réactiver le VCP, renommez AppleUSBFTDI.disabled en AppleUSBFTDI.kext

```
cd /System/Library/Extensions/IOUSBFamily.kext/Contents/Plugins
sudo mv AppleUSBFTDI.disabled AppleUSBFTDI.kext
sudo touch /System/Library/Extensions
```

puis redémarrez.

### Décharger temporairement (toutes les versions d'OS X)

Remarque : cette méthode fonctionne sur toutes les versions d'OS X.  
  
Il est possible de décharger le VCP d'Apple pour la session en cours, c'est-à-dire jusqu'au prochain redémarrage :

```
sudo kextunload -b com.apple.driver.AppleUSBFTDI
```

(Si un message d'avertissement indique que le kext ne peut pas être déchargé, redémarrez puis réessayez la commande ci-dessus.) Pour le recharger :

```
sudo kextload -b com.apple.driver.AppleUSBFTDI
```

Les commandes kextunload et kextload peuvent être exécutées depuis n'importe quel répertoire.

### Bloquer avec D2xxHelper (OS X 10.9 et versions ultérieures)

Remarque : il s'agit de la seule méthode non temporaire qui fonctionne sur **10.11 El Capitan**.  
  
FTDI fournit une extension noyau signée (D2xxHelper.kext) qui ne contient aucun code mais empêche OS X de faire correspondre une puce FTDI (avec des identifiants de fabricant et de produit standard) à un driver VCP, qu'il soit d'Apple ou de FTDI. Cela laisse le périphérique non revendiqué, et disponible uniquement pour les programmes D2XX.  
1. Déconnectez tous les périphériques FTDI.  
2. Téléchargez et exécutez l'installateur D2xxHelper depuis [https://ftdichip.com/drivers/d2xx-drivers/](https://ftdichip.com/drivers/d2xx-drivers/).  
3. Redémarrez.  
4. Reconnectez les périphériques FTDI.
