<h3>Networking 101</h3>

<p class="pheader">Overview</p>

<p>A <b>workgroup</b> or '<i>peer to peer</i>' network model is a simplistic type of network environment on which every client connected can provide some services.
There are no dedicated servers present and usually 'centralized administration' doesn't apply to the model.</p>

<p>A <b>domain</b> or '<i>client-server</i>' network model is a more complex type of network environment which is usually administrated from a centralized position on the network. 
Also it usually has one or multiple servers that provide every connected client with the necessary software to properly function.</p>
		
	<table>
		<tr>
			<th>NIC Mode</th>
			<th>Description</th>
		</tr>
		<tr><td>Half Duplex (<i>most common</i>)</td><td>Traffic both ways but one way at the time.</td></tr>
		<tr><td>Full Duplex</td><td>Traffic both ways simultaneously.</td></tr>
	</table> 
	
<p>Networking is divided into several categories. Each category has its own name and properties.</p>

	<table>
		<tr>
			<th>Network Name</th>
			<th>Description</th>
		</tr>
		<tr><td>Local Area Network (<i>LAN</i>)</td><td>A group of computers and devices within the same geographical area such as a building.</td></tr>
		<tr><td>Wide Area Network (<i>WAN</i>)</td><td>A group of multiple LANs. The internet is the largest WAN there is.</td></tr>
		<tr><td>Personal Area Network (<i>PAN</i>)</td><td>A small group of devices usually connected through Bluetooth such as tablets and phones.</td></tr>
		<tr><td>Wireless Local Area Network (<i>WLAN</i>)</td><td>A LAN that has wireless technology integrated in its architecture.</td></tr>
	</table> 


<p class="pheader">Cables and Connectors</p>

<p><b>UTP</b> (<i>Unshielded Twisted Pair</i>) and <b>STP</b> (<i>Shielded Twisted Pair</i>) are the common copper network cables that are used for ethernet traffic.
They consist of 8 small twisted cables encapsulated by cabling coat. STP are shielded with a type of aluminum insulation to protect the wires from EMR. 
All of the twisted pair cables suffer attenuation and thus are limited to 100 meters of maximum length.</p>


<p><b>Composite cables</b> can combine multiple cable types in one PVC jacket. Think of a combination of coaxial, cat5 into a single cable jacket.</p>

<p><b>Fiber Optic cabling</b> is light based through strands of glass instead of electrical signals through conductive media. Therefore fiber optics are not susceptible to EMI. 
It is also the fastest transmission media available and can cover vast distances of data transmission. Some downsides of fiber optics are that it is also the most expensive and 
delicate type of cabling.</p>

<table>
	<tr>
		<th>Wire Type</th>
		<th>Properties</th>
	</tr>
	<tr>
		<td>Cat3</td>
		<td>Up to 10 MBPS - two to three twists per foot.</td>
	</tr>
	<tr>
		<td>Cat 5</td>
		<td>Up to 100 MBPS - twenty twists per foot. </td>
	</tr>
	<tr>
		<td>Cat 5e</td>
		<td>Up to 1000 MBPS (1GBPS) - twenty twists per foot.</td>
	</tr>
	<tr>
		<td>Cat 6</td>
		<td>Potentially up to 10.000 MBPS (10GBPS) - higher quality materials.</td>
	</tr>
	<tr>
		<td>Cat 6e</td>
		<td>Potentially up to 10.000 MBPS (10GBPS) - double transmission frequency to 500 mHz</td>
	</tr>
	<tr>
		<td>Cat 7</td>
		<td>Not recognized but breaks 100 meter cable length limitation.</td>
	</tr>
	<tr>
		<td>Coaxial</td>
		<td>	Thinnet (RG-58) - up to 10 MBPS - 185 meters	<br/>
				Thicknet (RG-8) - up to 10 MBPS - 500 meters	
				
		</td>
	</tr>
	<tr>
		<td>Fiber Optic</td>
		<td>	Core of glass or plastic, surrounded by reflective layer to keep light inside cable.<br/>
				Single mode - beyond 1GBPS - 10 miles and beyond.<br/>
				Multi mode - beyond 1GBPS - shorter distances and ability to carry multiple data transmissions simultaneously.
		</td>
	</tr>
</table>

<br />

<table>

	<tr>
		<th>Connector</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>RJ-11</td>
		<td>Standard phone connector (6 pin plug) </td>
	</tr>
	<tr>
		<td>RJ-45</td>
		<td>Standard connector using EIA/TIA 568A or 568B standard (8 pin plug)</td>
	</tr>
	<tr>
		<td>F-Connector</td>
		<td>Coaxial connector used for modern video type installations</td>
	</tr>
	<tr>
		<td>BNC connector</td>
		<td>Used for older ethernet implementations (Barrel, T-Connector)</td>
	</tr>
</table>

<p>The RJ45 connectors are wired according to the EIA/TIA 568A and B standard. The color layout can be seen below.</p>

<table>
	<tr>
		<th>Standard</th>
		<th>Color layout</th>
	</tr>
	<tr>
		<td>EIA/TIA 568A</td>
		<td>	<img class="image-block" src="<?=$img_cables;?>rj45tiaeia568a.png" />	</td>
	</tr>
	<tr>
		<td>EIA/TIA 568B</td>
		<td>	<img class="image-block" src="<?=$img_cables;?>rj45tiaeia568b.png" />	</td>
	</tr>
</table>



<p>Plenum is referred to as an enclosure in a building (room between 2 floors) to move are for heating, cooling or humidity control. 
It is also often used to run high and/or low voltage cables through the building. Cabling that runs through a plenum must meet certain protection and environmental requirements. (non toxic jackets at high temperature in example).</p>


<p class="pheader">OSI/RM</p>
	
<p>The OSI/RM or '<i>OSI Reference Model</i>' defines communications but also helps to define the functionality provided by a device.</p>


<table class="neat_table">
		<tr>
			<th>OSI Layer</th>
			<th>Devices</th>
		</tr>
		<tr><td>Application</td><td></td></tr>
		<tr><td>Presentation</td><td></td></tr>
		<tr><td>Session</td><td></td></tr>
		<tr><td>Transport</td><td></td></tr>
		<tr><td>Network (<i>Protocol address filtering</i>)</td><td>Router</td></tr>
		<tr><td>Data Link (<i>MAC address based filtering</i>)</td><td>Bridge/Switch</td></tr>
		<tr><td>Physical (<i>Dumb Devices</i>)</td><td>Hub (multiport repeater)</td></tr>
		
	</table> 


<p class="pheader">Voice Over IP (VoIP)</p>
	
<p>Voice over IP (<i>VoIP)</i> is a technology that allows digital audio data over the networks. It is referred to as convergence technology. 
VoIP uses 2 protocols especially designed for it. The <i>Session Initiation Protocol (SIP)</i> is used for the initial connection.
The <i>Real-time Transport Protocol (RTP)</i> is used for voice data carriage.</p>
	
<p>A network protocol is needed for computers on a network to communicate. Thé standardised protocol suite is <b>TCP/IP</b>.</p>

<h3>Automatic Private IP Addressing (APIPA)</h3>

<p>A range of automatically assigned link-local IP addresses for a network that cannot reach a DHCP.<br/>
Address range is 169.254.1.0 through 169.254.254.255</p>
	
	
	
	
	
	
	
