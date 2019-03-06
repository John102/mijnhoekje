<h3>TCP/IP Fundamentals</h3>

<p class="pheader">Overview</p>

<p>TCP/IP or '<i>Transmission Control Protocol / Internet protocol</i>' is an industry standard, non proprietary suite of protocols that serves as the foundation for network communications. 
It provides a four layer architecture loosely based on the OSI/RM or '<i>Open SYstems Interconnection / Reference Model</i>'. <br /> These four layers are the following: </p>

<ul class="magiclist">
	<li>Application</li>
	<li>Transport</li>
	<li>Internet</li>
	<li>Network Interface</li>
</ul>

<p>The following schematic shows what protocols operate in each layer of the TCP/IP suite.</p>

<table>
	<tr>
		<th colspan="4">TCP/IP Layers</th>
	</tr>
	<tr>
		<th>Application</th>
		<th>Transport</th>
		<th>Internet</th>
		<th>Network Access</th>
	</tr>
	<tr>
		<td>DNS<br/> BOOTP<br/> DHCP<br/> SMTP<br/> POP<br/> IMAP<br/> FTP<br/> TFTP<br/> HTTP<br/> LDAP<br/> SNMP<br/> SMB<br/> SSH<br/> SFTP<br/> Kerberos<br/> Apple Filing Protocol</td>
		<td>UDP<br/> TCP</td>
		<td>IP<br/> NAT<br/> ARP<br/> ICMP<br/> RIP<br/> OSPF<br/> EIGRP<br/> BGP</td>
		<td>ARP<br/>PPP<br/>Ethernet<br/>Interface Drivers</td>
	</tr>
</table>

<br/>

<p>So what are these protocols and what is their task.</p>

<table>
	<tr>
		<th>Protocol</th>
		<th>Description</th>
		<th>Full Name</th>
	</tr>
	<tr>
		<th colspan="3">Application Layer</th>
	</tr>
	<tr>
		<td>DNS</td>
		<td>A register of IP address to URL translations.</td>
		<td>Domain Name System</td>
	</tr>
		<tr>
		<td>BOOTP</td>
		<td>Downloads configuration data such as an IP and subnet mask from a Bootp server.</td>
		<td>Bootstrap Protocol</td>
	</tr>
	<tr>
		<td>DHCP</td>
		<td>Automatically assigns IP addresses to hosts on the network.</td>
		<td>Dynamic Host Configuration Protocol</td>
	</tr>
	<tr>
		<td>SMTP</td>
		<td>Internet standard for electronic mail transmission.</td>
		<td>Simple Mail Transfer Protocol</td>
	</tr>
	<tr>
		<td>POP</td>
		<td>Retrieves e-mail from a remote server over TCP/IP.</td>
		<td>Post Office Protocol</td>
	</tr>
	<tr>
		<td>IMAP</td>
		<td>Retrieves e-mail from a remote server over TCP/IP.</td>
		<td>Internet Message Access Protocol.</td>
	</tr>
	<tr>
		<td>FTP</td>
		<td>Transfer computer files between client and server.</td>
		<td>File Transfer Protocol</td>
	</tr>
	<tr>
		<td>TFTP</td>
		<td>Simpler than use of FTP but less capable.</td>
		<td>Trivial File Transfer Protocol</td>
	</tr>
	<tr>
		<td>HTTP</td>
		<td>A request-response protocol in the client-server computing model.</td>
		<td>Hypertext Transfer Protocol</td>
	</tr>
	<tr>
		<td>LDAP</td>
		<td>Provides mechanism to connect to, search and modify internet directories.</td>
		<td>Lightweight Directory Access Protocol</td>
	</tr>
	<tr>
		<td>SNMP</td>
		<td>Management and monitoring protocol for network devices.</td>
		<td>Simple Network Management Protocol</td>
	</tr>
	<tr>
		<td>SMB</td>
		<td>The client-server protocol on windows networks mainly used to provide shared resources such as files, printers, serial ports.</td>
		<td>Server Message Block</td>
	</tr>
	<tr>
		<td>SSH</td>
		<td>Used to log into a remote machine and execute commands.</td>
		<td>Secure Shell</td>
	</tr>
	<tr>
		<td>SFTP</td>
		<td>The protocol used to securely transfer files over SSH.</td>
		<td>Secure File Transfer Protocol</td>
	</tr>
	<tr>
		<td>Kerberos</td>
		<td colspan="2">Authentication protocol in a Windows active directory network.</td>
	</tr>
	<tr>
		<td>Apple Filing Protocol</td>
		<td colspan="2">Used to share resources and device discovery on Macintosh networks.</td>
	</tr>
	<tr>
		<th colspan="3">Transport Layer</th>
	</tr>
	<tr>
		<td>UDP</td>
		<td>Less reliable but fast communication protocol. Involves minimal amount of communication mechanism.</td>
		<td>User Diagram Protocol.</td>
	</tr>
	<tr>
		<td>TCP</td>
		<td>Reliable communication protocol that is based on feedback on sent data.</td>
		<td>Transmission Control Protocol</td>
	</tr>
	<tr>
		<th colspan="3">Internet Layer</th>
	</tr>
	<tr>
		<td>IP</td>
		<td>The protocol for relaying datagrams across network boundaries. Routing functionality.</td>
		<td>Internet Protocol</td>
	</tr>
	<tr>
		<td>NAT</td>
		<td>Remaps IP address space by modifying network address information in datagram packet header while in transit accross traffic routing device.</td>
		<td>Network Address Translation</td>
	</tr>
	<tr>
		<td>ARP</td>
		<td>Mapping IP network addresses to hardware addresses used by a data link protocol.</td>
		<td>Address Resolution Protocol</td>
	</tr>
	<tr>
		<td>ICMP</td>
		<td>Support protocol used by 'ping' and 'tracert'.</td>
		<td>Internet Control Message Protol</td>
	</tr>
	<tr>
		<td>RIP</td>
		<td>One of the oldest distance-vector routing protocols. Uses hop count as routing metric.</td>
		<td>Routing Information Protocol</td>
	</tr>
	<tr>
		<td>OSPF</td>
		<td>Uses LSR (Link State Routing) algorithm to construct a topology map of the network.</td>
		<td>Open Shortest Path First</td>
	</tr>
	<tr>
		<td>EIGRP</td>
		<td>Advanced distance-vector routing protocol used on a computer network for automating routing decisions and configuration.</td>
		<td>Enhanced Interior Gateway Routing Protocol</td>
	</tr>
	<tr>
		<td>BGP</td>
		<td>Exterior gateway protocol designed to exchange routing and reachability information among autonomous systems on the internet.</td>
		<td>Border Gateway Protocol</td>
	</tr>
	<tr>
		<th colspan="3">Network Access Layer</th>
	</tr>
	<tr>
		<td>PPP</td>
		<td>Establishes a direct connection between two nodes.</td>
		<td>Point-to-Point Protocol</td>
	</tr>
	<tr>
		<td>Ethernet</td>
		<td colspan="2">Family of computer working technologies commonly used in LANs, MANs and WANs.</td>
	</tr>
	<tr>
		<td>Interface Drivers</td>
		<td colspan="2">Software that allows your NIC (Network Interface Card) to function properly.</td>
	</tr>
</table>

