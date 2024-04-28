---
title: 'E1.31 (sACN)'
date: '05:11 22-08-2023'
media_order: e131_configuration.png
---

Introduction
------------

QLC+ supports the [E1.31 protocol](https://www.opendmx.net/index.php/E1.31) (also known as s.ACN) through an input/output plugin that receives and transmits packets on the network.  
No extra requirements are needed, since QLC+ has a native implementation of the E1.31 protocol that works on Linux, Windows and OSX systems.  
The E1.31 plugin can send and receive packets from multiple network cards, virtual addresses, the loopback device (127.0.0.1) and multiple universes per network interface.  
By default, E1.31 packets will be sent as UDP on multicast addresses like 239.255.0.x, where 'x' is the universe number selected in QLC+. The port used is 5568.  
When using the loopback device packets are always transmitted using address 127.0.0.1.  
When transmitting multiple universes on the same interface, the packets will be sent by default with an E1.31 Universe ID equal to the QLC+ universe.  
  
For example:  
QLC+ Universe 1 --> E1.31 Universe 1 on 239.255.0.1  
QLC+ Universe 2 --> E1.31 Universe 2 on 239.255.0.2  
...  
QLC+ Universe 8 --> E1.31 Universe 8 on 239.255.0.8  
  
If the above settings don't meet the requirements of your network, please read the following chapter.

Configuration
-------------

When clicking on the ![](/basics/configure.png) configuration button, a small dialog will be displayed, showing the Universes Configuration panel.  
  
After a QLC+ universe is patched with an E1.31 input or output, an entry will be displayed in this list, allowing to manually configure the desired parameters to be used by the E1.31 plugin.  
Input lines can be configured with the following parameters:  

|     |     |
| --- | --- |
| **Multicast** | This checkbox enables you to select between multicast input and unicast input.  <br>When checked, this universe will received packets from the chosen multicast group on this interface.  <br>When unchecked, this universe will receive unicast packets on this IP address only.  <br>Selecting Unicast input will allow selecting a different input Port. |
| **IP Address** | This is the input IP address the E1.31 plugin will listen to on the selected interface, for this QLC+ universe.  <br>When the input is set to multicast, you can select the multicast IP from 239.255.0.1 to 239.255.0.255.  <br>When the input is set to unicast, the IP address is locked on the IP address of the selected interface. |
| **Port** | This is the input port the E1.31 plugin will listen to for this QLC+ universe.  <br>When the input is set to multicast, the port is locked on the default E1.31 multicast port: 5568  <br>When the input is set to unicast, you can select any port you want. |
| **E1.31 Universe** | This is the input E1.31 universe the plugin will accept for this QLC+ universe.  <br>This allows mapping any E1.31 universe to any QLC+ universe. |

  
Input configuration example:

![](e131_configuration.png)

In this example, when receiving E1.31 packets on the address 127.0.0.1 and port 8000, the packets operating on E1.31 universe 4 will affect QLC+ universe 1.  
Also we're transmitting QLC+ universe 2 on the multicast address 239.255.0.2, E1.31 universe 1, and QLC+ universe 3 on the unicast address 13.0.0.175 port 7000, E1.31 universe 2.  
  
Output lines can be configured with the following parameters:  

|     |     |
| --- | --- |
| **Multicast** | This checkbox enables you to select between multicast output and unicast output.  <br>When checked, this universe will send packets to the chosen multicast group on this interface.  <br>When unchecked, this universe will send unicast packets to the chosen unicast IP address.  <br>Selecting Unicast output will also allow you to select the outgoing port. |
| **IP Address** | This is the destination IP address where the E1.31 plugin will transmit packets to.  <br>By default a multicast address is used as described above.  <br>When the output is set to multicast, you can set this parameter within the range 1-255.  <br>This allows sending packets to the multicast range 239.255.0.1 to 239.255.0.255.  <br>When the output is set to unicast, you can select any arbitrary IP address.  <br>When patching a QLC+ universe to the loopback device (127.0.0.1), unicast packets will be always transmitted to 127.0.0.1. |
| **Port** | This is the port the outgoing packets will target.  <br>Multicast E1.31 port is always 5568.  <br>When the output is set to unicast, you can select any port you want. |
| **E1.31 Universe** | This is the E1.31 universe that will be actually written in every packet transmitted.  <br>By setting this parameter, you can use any QLC+ universe to transmit to the desired E1.31 universe. |
| **Transmission Mode** | Here you can select if QLC+ should transmit full or partial universes.  <br>'Full' means that all the 512 DMX channels of a universe are transmitted at the speed rate of the QLC+ internal clock (50Hz), producing a fixed bitrate of about 200kbps.  <br>'Partial', instead, means that QLC+ will transmit only the DMX channel actually used in a universe, starting from channel 1. For example if you raise channel 3 of a fixture with address 50, the E1.31 plugin will transmit only 53 DMX channels, thus limiting the transmission bitrate.  <br>Use this setting only if the receiving E1.31 node supports partial transmission. |
| **Priority** | E1.31 source priority.  <br>**0** is the minimum priority, **200** is the maximum, **100** is default priority.  <br>When E1.31 receiver gets data for a particular universe from multiple sources, it uses data from source with the highest priority.  <br>This allows various failover schemes. Note that QLC+ does not yet acknowledge priority on input. |

  
Settings that are different from the plugin defaults, will be stored in your QLC+ workspace, to increase the portability of a project across different platforms, such as different operating systems or a PC and a Raspberry Pi.

Compatibility
-------------

QLC+ has been tested with the following E1.31 software and devices:

* [DMXKing eDMX2 TX](https://dmxking.com/artnetsacn/edmx2-tx-rdm) \- Output device