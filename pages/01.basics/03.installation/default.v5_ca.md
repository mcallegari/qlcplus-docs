---
title: Instal·lació
taxonomy:
    category:
        - docs
---

Instal·lar QLC+ és força senzill.
Simplement dirigeix-te a la [pàgina de descàrregues](https://www.qlcplus.org/download) i obtén la versió que prefereixis per al sistema operatiu que utilitzes.

## Windows

QLC+ a Windows es distribueix com un paquet .exe autoinstal·lable. Simplement fes doble clic al fitxer i segueix les instruccions que es mostren.

Tria si vols instal·lar QLC+ a la seva ubicació estàndard (C:\QLC+) o en una altra carpeta com C:\Program Files.

No calen privilegis d'administrador per instal·lar QLC+ tret que vulguis associar els fitxers .qxw (fitxers de projecte) i .qxf (fitxers de definició de fixtures) a l'aplicació corresponent.
En aquest cas, fes clic amb el botó dret al fitxer de l'instal·lador i executa'l com a administrador.

**Nota** que la versió 4.x.x i la versió 5.x.x no poden coexistir a la mateixa carpeta, així que si instal·les totes dues, recorda instal·lar-les en carpetes separades.

## macOS

QLC+ a macOS es distribueix com un paquet DMG.

Simplement fes-hi doble clic i inicia directament QLC+. També pots arrossegar-lo i deixar-lo anar a la carpeta d'Aplicacions.

## Linux

El paquet oficial de QLC+ per a Linux es distribueix com a paquet Debian (.deb).

Per instal·lar-lo, executa el següent des d'un terminal i des de la carpeta on has descarregat el paquet:
```
sudo apt install ./qlcplus_x.y.z.deb
```
Els usuaris avançats familiaritzats amb les dependències poden considerar utilitzar `sudo dpkg -i qlcplus_x.y.z.deb`.
