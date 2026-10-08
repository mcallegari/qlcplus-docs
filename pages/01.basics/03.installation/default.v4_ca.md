---
title: Instal·lació
taxonomy:
    category:
        - docs
---

La instal·lació de QLC+ és bastant senzilla.
Només has de dirigir-te a la [pàgina de descàrrega](https://www.qlcplus.org/download) i obtenir la versió que prefereixis per al sistema operatiu que estiguis utilitzant.

## Windows

QLC+ a Window es presenta com un paquet .exe d'instal·lació automàtica. Només cal fer doble clic sobre el fitxer i seguir les instruccions que es mostren.

Escollir si s'ha d'instal·lar QLC+ a la seva ubicació estàndard (C:\QLC+) o una altra carpeta com C:\Program Files.

No es requereixen privilegis d'administrador per instal·lar QLC+ a menys que vulgueu associar .qxw (fitxers de projecte) i .qxf (fitxers de definició de fixtures) a l'aplicació relacionada.
En aquest cas, feu clic dret sobre el fitxer de l'instal·lador i executeu-lo com a administrador.

## macOS

QLC+ a macOS es presenta com un paquet DMG.

Només feu doble clic sobre ell i llanceu directament QLC+. En cas contrari, pots arrossegar-la i deixar-la anar a la carpeta Aplicació.

## Linux

El paquet oficial QLC+ per a Linux es lliura com a paquet Debian (.deb).

Per instal·lar-lo, executeu el següent des d'un terminal a la carpeta on heu descarregat el paquet:
```
sudo apt install ./qlcplus_x.y.z.deb
```
Els usuaris avançats familiaritzats amb les dependències poden considerar utilitzar `sudo dpkg -i qlcplus_x.y.z.deb`.
