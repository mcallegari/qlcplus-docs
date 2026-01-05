---
title: Art-Net
date: '05:06 22-08-2023'
---

Introduction
------------

QLC+ supports the [Art-Net protocol](https://en.wikipedia.org/wiki/Art-Net) through an input/output plugin that receives and transmits packets on the network.  
No extra requirements are needed, since QLC+ has a native implementation of the Art-Net protocol that works on Linux, Windows and macOS systems.  
The Art-Net plugin can send and receive packets from multiple network cards, virtual addresses, the loopback device (127.0.0.1) and multiple universes per network interface.  
By default, Art-Net packets are transmitted as UDP, using the default port 6454 and the broadcast address of the selected interface (e.g. 192.168.0.255). When using the loopback device packets are always transmitted using address 127.0.0.1.  
When transmitting multiple universes on the same interface, the packets will be sent by default with an Art-Net Universe ID equal to the QLC+ universe number minus 1.  
  
For example:  
QLC+ Universe 1 --> Art-Net Universe 0  
QLC+ Universe 2 --> Art-Net Universe 1  
...  
QLC+ Universe 8 --> Art-Net Universe 7  
  
This choice is due to some facts:  
1- The first valid Art-Net universe is 0 and not 1  
2- The first universe accepted by commercial Art-Net-DMX devices like eDMX and ODE is 0, so to have QLC+ to work out of the box, the first Art-Net universe must be 0.  
  
If the above settings don't meet the requirements of your network, please read the following chapter.

Configuration
-------------

When clicking on the ![](/basics/configure.png) configuration button, a small dialog will be displayed, showing 2 tabs: the Universes Configuration and the Nodes Tree.  
  
**Universes Configuration**: after a QLC+ universe is patched with an Art-Net input or output, an entry will be displayed in this list, allowing to manually configure the desired parameters to be used by the Art-Net plugin.  
Input lines do not have particular parameters, while an output line can be configured with the following:  

* **IP Address**: This is the destination IP address where the Art-Net plugin will transmit packets to. By default a broadcast address is used (so ending with .255) and by setting this in the 1-254 range, Art-Net will transmit a QLC+ universe in unicast mode. If your Art-Net network uses a simple hub, the output IP address is irrelevant, as broadcast or unicast doesn't make any difference. However, if you use a network switch, unicast is fundamental to balance the network congestion, as every port of the switch is associated to a network IP and will receive only the packets with its destination IP.  
    **Note**: Do not set the output IP address with the same IP address of your transmitting node (e.g. the PC where QLC+ is running) as it is just wrong and can cause a network loop. If you need to communicate with an Art-Net node running in the same machine where QLC+ is running, use the loopback device instead (127.0.0.1).
* **Art-Net Universe**: This is the Art-Net universe that will be actually written in every packet transmitted. By setting this parameter, you can use any QLC+ universe to transmit to the desired Art-Net universe.
* **Transmission Mode**: Here you can select if QLC+ should transmit full or partial universes.  
    _Standard_ means that DMX universes are transmitted only when at least one DMX channel changes or every 2 seconds to refresh receiver's values.  
    _Full_ means that all the 512 DMX channels of a universe are transmitted at the speed rate of the QLC+ internal clock (50Hz), producing a fixed bitrate of about 250kbps.  
    _Partial_, instead, means that QLC+ will transmit only the DMX channel actually used in a universe, starting from channel 1. For example if you raise channel 3 of a fixture with address 50, the Art-Net plugin will transmit only 53 DMX channels, thus limiting the transmission bitrate. Use this setting only if the receiving Art-Net node supports partial transmission.

Settings that are different from the plugin defaults, will be stored in your QLC+ workspace, to increase the portability of a project across different platforms, such as different operating systems or a PC and a Raspberry Pi.  
  
**Nodes Tree**: This tab displays the Art-Net nodes discovered on the network, grouped by network interface.  
QLC+ will always appear in this list as a node participating to the network.  
Art-Net nodes are added to this list if they support the ArtPoll/ArtPollReply message, otherwise they won't appear. This doesn't mean you will not able to communicate with them.

DMXKing eDMX and ENTTEC ODE
---------------------------

If you own one of these devices, they both have configuration tools that might come handy when working with QLC+. With them you can set several parameters to match the best configuration to input/output data from/to QLC+.  
For example if you want QLC+ universe 3 to output data on the first port of a eDMX, you need to use the tool below to change the device universe address to 2.  
  
Here the links to download the tools:  
[DMXKing eDMX Configuration tool](https://dmxking.com/downloads/eDMX_Configuration.zip)  
[ENTTEC Node Management Utility](https://www.enttec.com/?main_menu=Products&pn=79001)  

Compatibility
-------------

Compatible Art-Net devices are listed on the [compatibility](https://qlcplus.org/discover/compatibility) page of the QLC+ website.
