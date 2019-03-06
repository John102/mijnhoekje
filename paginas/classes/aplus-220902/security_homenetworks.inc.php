<h3>Security: Home Networks</h3>

<p class="pheader">Overview</p>

<p>The amount of SOHO (Small Office Home Office) networks has exploded over the last decade. Where back in the early days homes had only 1 computer, nowadays 
a home may have multiple computers, smart phones, laptops, tablets, smart TVs, gaming consoles and more all connected to their home network. <br/>
These networks however, usually have very little security but still contain a lot of private data that should be secured.<br/>
Security is easier than we might imagine and simply requires some planning and implementation to realize.</p>

<p class="pheader">Wireless SOHO networks</p>

<p>Wireless communication is the most common implementation of a SOHO network. Wireless communications use radio frequencies which opens up additional threats in the 
area of network security. <br/>
All SOHO wireless devices (WAP) come with multiple security controls that need to be understood and implemented.</p>


	<table>
		<tr>
			<th>Practice</th>
			<th>Explanation</th>
		</tr>
		<tr>
			<td>change administrative credentials</td>
			<td>Always make sure that administrative credentials are changed immediately upon installation of a router. The default information is well known 
				by many people that might want to do harm to a network. Changing these credentials will keep unwanted visitors out of your router setup. 
				Use strong password policies.</td>
		</tr>
		<tr>
			<td>change default SSID</td>
			<td>The default SSID name is usually the name of the router model or ISP. Leaving this setting default might signal people outside of the network 
				that the router is still completely configured with default settings. This also means that the access credentials to get inside the router 
				are most likely still the default values. These values are well known and therefor people might have access to your router and network.</td>
		</tr>
		<tr>
			<td>set encryption method</td>
			<td>Always use the highest available level of encryption. This will prevent intercepted data from being read and allows for a secure transmission 
				of data across the network.</td>
		</tr>
		<tr>
			<td>Extra 'Security' through obscurity</td>
			<td>
				<ul class="magiclist">
					<li>use guest access features</li>
					<li>enable MAC filtering</li>
					<li>assign static IP addresses</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>disable SSID broadcast</td>
			<td>A way of completely removing the WiFi SSID advertising in the scan list. Disabling SSID broadcast will make the network name disappear from the 
				overview when people are searching for WiFi networks in the area.</td>
		</tr>
		<tr>
			<td>antenna / AP placement</td>
			<td rowspan="2">These can be lowered to decrease the area of signal coverage.<br/>
							Moving access points (AP) and redirecting antenna positions can strengthen or weaken the signal in certain areas. </td>
		</tr>
		<tr>
			<td>radio power levels</td>
		</tr>
		<tr>
			<td>WPS</td>
			<td>A button on a router that can be pushed to make the router discoverable by other WiFi devices. In that discoverable time window the other device 
				has to make a connection request (usually with a button as well) and will negotiate security and connect. <br/>
				Avoid using WPS because it is not a safe option anymore.</td>
		</tr>
	</table>



<p class="pheader">Wired SOHO networks</p>

<p>Many SOHO networks are not completely wireless and use wired connections for workstations as well. Standard policies and procedures apply to securing systems with 
a few unique options.

	<table>
		<tr>
			<th>Practice</th>
			<th>Explanation</th>
		</tr>
		<tr>
			<td>change administrative credentials</td>
			<td>Always make sure that administrative credentials are changed immediately upon installation of a router. The default information is well known 
				by many people that might want to do harm to a network. Changing these credentials will keep unwanted visitors out of your router setup. 
				Use strong password policies.</td>
		</tr>
		<tr>
			<td>physical security</td>
			<td>Make sure that access to the SOHO network is being performed in a controlled environment. Don't let switch ports be unmanaged / unguarded. 
				Also secure the position of the router and power adapter cable.</td>
		</tr>
		<tr>
			<td>static IP addresses</td>
			<td>This will drastically narrow down the possible of someone connecting to the SOHO network and obtaining a proper IP address. 
				DHCP is disabled and make sure only a range of ports are in use. The usable port range has to be guessed and the IP address that is 
				chosen eventually might be currently in use by a connected device.</td>
		</tr>
		<tr>
			<td>disabling switch ports</td>
			<td>Exposed active ports on switches are a way to access the network internally. Especially in conjunction with DHCP enabled, this is a very 
				easy way to perform a man in the middle attack. Switch ports can be disabled if the switch is a managed piece of hardware.</td>
		</tr>
	</table>
	
	
</p>



<p class="pheader">MAC filtering</p>

<p>Most access points (APs) and network switches provide the ability to turn on MAC filtering.

	<ul class="magiclist">
		<li>a list of MAC addresses is configured as 'approved' devices (whitelist)</li>
		<li>a list of MAC addresses is configured as 'blocked' devices (blacklist)</li>
	</ul>
		
If a device is not on the list it will not be able to connect to the network. This feature is sometimes called <i>network lock</i> on wireless access points.</p>
	
	
	
<p class="pheader">Firewall settings</p>

<p>All devices, both wired and wireless, should have firewall capabilities and it should remain enabled to protect the system. 
Device firewalls and personal firewalls are both important. <br/>
Firewalls can and will be configured by the applications and games that are installed on the system. 
A game might need certain inbound- and outbound rules in the personal firewall configuration in order to download / upload data that allows the game to function.
</p>

<p class="pheader">Port forwarding / mapping</p>

<p>Ports on the device are set aside for an internal host. External hosts must utilize the specific port to communicate with the internal system. 
For example: Setting up a local game server that has to be accessible from the Internet will use 1 or more specific ports to upload / download data from the connected 
player. This external player (that connects over the Internet to your local machine) will connect to the WAN IP address of your router and the port number that redirects 
this connection from the router to the local machine that hosts the game server files. </p>

<img class="image-block" src="<?=$class_220902.'multimedia/'?>portforward.png"/>
	
	
<p class="pheader">Content filtering / Parental controls</p>

<p>Software can be used to examine all web connections, social media, searches and even e-mails. Parental control allows for objectionable content or sites configured as restricted 
by the administrator.</p>

<p class="pheader">Update Firmware</p>

<p>Due to more and more security attacks, firmware updates are no longer considered optional. Each firmware version may contain weaknesses that might get exposed and patched eventually. 
Therefore it is important to keep firmware up-to-date.</p>
	
	
	


<!-- [Additional Links] -->

<p class="psub">
	<span class="pbold">Related notes:</span>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=wirelessencryption.inc.php#content">220-901 Wireless encryption notations</a><br/>
</p>