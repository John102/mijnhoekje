<h3>Networking and Configuration</h3>

<p class="pheader">Overview</p>

<p>The basic idea of networking is sharing and accessing resources.<br/>
To connect to a network the system will require three components:
<ul class="magiclist">
	<li>a physical connection (NIC)</li>
	<li>a properly configured network protocol</li>
	<li>a client</li>
</ul></p>

<p>Most systems will locate and install a device driver and TCP/IP protocol for the connected NIC upon installation. 
When connecting to a network with DHCP services enabled there might not even be additional configurations necessary.</p>

<p class="pheader">TCP/IP</p>

<p>TCP/IP is the primary protocol in use on the Internet and an industry standard for all major operating systems. 
The protocol defines IP addresses using version IPv4 and IPv6 and it can automatically assign IP addresses using DHCP.</p>

<p class="pheader">Basic Configuration</p>

<p>A basic network configuration will consist of one or more clients, an unmanaged switch and a modem/router (provided by your ISP most of the time). 
This modem/router contains a DNS server, a DHCP server, configurable NAT rules and many more options. The clients connected to the network will receive an IP address from the DHCP service if configured correctly.<br/>
The client that obtained an IP address can then communicate to other devices with enabled IP addresses on the network. Communication requests to/from the Internet will travel from client to gateway to Internet and vice versa.

</p>

<p class="pheader">IP Addressing</p>

<p>An <b>IPv4 address</b> is a 32-bit binary address. It consists of 4 octets (hence 32-bit = 4* 8(octet)) that are calculated from binary to decimal notation.
 To further understand this you might want to look at the related notes at the bottom of this page.<br/>
 The IPv4 addresses are divided into 2 parts, the Network ID (the segment that identifies the network) and the Host ID (the segment that identifies the computer).<br/>
 A <b>subnet mask</b> shows exactly which part of the IPv4 address is the Network ID and which part is the Host ID. <br/>
 The subnet mask also is a 32-bit binary address translated to decimal. A subnet mask always exists of contiguous binary values. Check the related notes for more information.</p>
 
<p>IP addresses come in multiple 'forms'. There are Classful IP addresses, Classless IP addresses, Public IP addresses and Private IP addresses.</p>

<table>
	<tr>
		<th>IP Address Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>Classful</td>
		<td>Class A - 128 networks - 16,777,216 address per network - start address 0.0.0.0 - default subnet mask 255.0.0.0<br/> 
			Class B - 16,384 networks - 65,536 address per network - start address 128.0.0.0 - default subnet mask 255.255.0.0<br/>
			Class C - 2,097,152 networks - 256 address per network - start address 192.0.0.0 - default subnet mask 255.255.255.0<br/></td>
	</tr>
	<tr>
		<td>Classless</td>
		<td>Classless Inter-Domain Routing (CIDR) allows for flexible subnet masking which means that the amount of networks and amount of hosts can be allocated through a 'custom made subnet mask'. (Check CIDR notations - Related notes)</td>
	</tr>
	<tr>
		<td>Public</td>
		<td>An IP address that is available for communication on the Internet, this is your typical WAN address</td>
	</tr>
	<tr>
		<td>Private</td>
		<td>An IP address that is only available for communication on a network, mostly assigned to the NIC by a DHCP service.</td>
	</tr>
</table> 
 
<p>Windows will obtain IP addresses automatically by default using DHCP which works in most scenarios. However, if the DHCP service is not available there is an alternative that will be used. 
This is called APIPA (Automatic Private IP Addressing) and is a separate range of IP addresses reserved for this scenario. This protocol will offer addresses ranging from 169.254.1.0/16 to 169.254.254.255/16.</p>
 
 
<p class="pheader">Network Types</p>

<p>Networks come in many types. Each type is slightly different and requires different configuration along with the common components already discussed. Below is an overview of some of the most common network types and their properties.</p>

<table>
	<tr>
		<th>Network Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>SOHO Networks (Small Office Home Office)</td>
		<td>Mostly configured in a Workgroup setup</td>
	</tr>
	<tr>
		<td>Large Business Networks</td>
		<td>Mostly configured in a domain setup</td>
	</tr>
	<tr>
		<td>Remote Access Connections</td>
		<td><b>VPN </b>- (Virtual Private Network) - A secure 'tunnel' connection using public wires (usually the Internet) to connect to offices/business networks remotely<br/>
			<b>Remote Desktop</b> - Allows for connecting to a remote computer and operate it as if the user was in front of the actual computer<br/>
			<b>Remote Assistance</b> - A one time connection that allows for a remote operation of a system
		</td>
	</tr>
</table>
 
 
<p class="pheader">SOHO Networks</p>

<p>The SOHO networks usually do not contain dedicated servers. They're typically made up of individual workstations. These workstations then have the ability to share folders, drives, printers with other standalone workstations on the network. 
The common configuration is called a Workgroup configuration. In Windows 7 and 8 it is called a Homegroup configuration.<br/>
Below is a small list with some characteristics unique to a Workgroup/homegroup configuration:<br/>
<ul class="magiclist">
	<li>user accounts are local to each workstation</li>
	<li>account credentials are duplicated or shared</li>
	<li>broadcast name resolution is often used</li>
	<li>drives can be mapped with persistent credentials to facilitate easier resource sharing</li>
	<li>setup unpractical for networks with large amount of clients</li>
</ul>
</p>
 
 <p class="pheader">Large Business Networks</p>
 
 <p>These networks usually operate with a client/server model also known as a domain. Domains use dedicated servers known as Domain Controllers which run Active Directory Domain Services on Windows Server 2008 or Windows Server 2012.
 <ul class="magiclist">
	<li>LDAP searching of the directory database</li>
	<li>Kerberos authentication protocol for authentication and SSO (Single Sign On)</li>
	<li>access to resources throughout the domain using a single user account</li>
	<li>scale to hundreds of thousands of systems</li>
 </ul>
 </p>
 
<p class="pheader">Joining a Domain Network</p>

<p>Joining a domain is done by going to the 'System' tab in Control Panel. Then the 'change settings' link is clicked at the Computer name, domain and workgroup settings.<br/>
A domain name is needed and after inserting it, the OS will use DNS name resolution in order to locate a Domain Controller for that particular domain. <br/>
Once found, some other information is required.</br/>
<ul class="magiclist">
	<li>Domain username and password</li>
	<li>Local administrative rights</li>
	<li>DNS name resolution</li>
</ul>
</p>

<p class="pheader">Mapped Network Drives</p>

<p>An awesome little feature in Windows is Mapped Network Drives. This allows for the creation of multiple drive letters in the client file explorer that are actually directly linked to specific directories on a server on the domain.<br/>
To do so, all that is required is to go to file explorer, right click 'Computer' and click 'Map Network Drive'.</p>


<p class="pheader">Remote Desktop</p>

<p>One type of network connection that is frequently used is Remote Desktop which is available on the business and ultimate versions of Windows Vista and Windows 7 along with Windows XP Professional.<br/>
Remote Desktop uses the Remote Desktop Protocol (RDP) which operates on TCP port 3389. The program itself is MSTSC.exe. It requires administrative rights or membership in a Remote Desktop users group in order to be utilized.<br/>
It must also be enabled in the 'System' tab in Control Panel.</p>


<!-- [ RELATED NOTES ]	-->
 
 
<p class="psub">
	<span class="pbold">Related notes:</span>
	<a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=tcpip.inc.php#content">220-901 TCP/IP notations</a><br/>		
	<a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=networking.inc.php#content">220-901 Networking notations</a><br/>
	<a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=cidr-notation.inc.php#content">220-901 CIDR notations</a><br/>
	<a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=binary.inc.php#content">220-901 Binary notations</a>
</p>