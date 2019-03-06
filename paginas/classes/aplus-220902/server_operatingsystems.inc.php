<h3>Server Operating Systems</h3>

<p class="pheader">Overview</p>

<p>Server operating systems or Network operating systems are the counterparts to client operating systems. These operating systems are designed to control a network of clients. 
Their primary task is to offer network services to other clients.</p>

<p class="pheader">Server Types</p>

<table>
	<tr>
		<th>Server Type</th>
		<th>Description/Role</th>
	</tr>	
	<tr>
		<td>Web servers</td>
		<td>Provides access to information and communication ways using the HTTP protocol, popular versions include IIS for Windows and Apache for Linux<br/>
			Can transmit data securely over HTTPS which utilizes SSL in order to encrypt traffic</td>
	</tr>
	<tr>
		<td>File servers</td>
		<td>Ideally used to store all user data in order to centralize backup processes and take advantage of high speed storage and built in redundancy<br/>
			Additional capabilities include security, file classification, file management and quotas</td>
	</tr>
	<tr>
		<td>Print servers</td>
		<td>Utilized to manage and share printers on the network. Often print devices come with their own internal print server negating this role in some scenarios</td>
	</tr>
	<tr>
		<td>DHCP servers</td>
		<td>Dynamic Host Configuration Protocol; A service that supplies network clients with an IP address automatically. Hosts a database of available IP addresses (scope) and assigns them to clients on a temporary basis (lease)<br/>
			Listens and responds to broadcast requests from clients and offers the first available address in the scope<br/>
			Additional options are; default gateway, DNS server addresses and domain names, TFTP servers, Boot servers for imaging</td>
	</tr>
	<tr>
		<td>DNS servers</td>
		<td>Domain Name System; Translates user friendly host names to IP address; e.g. <i>google.nl -> 172.217.20.99 </i><br/>
			DNS is a required service in a Windows Domain environment or to use the Internet in general</td>
	</tr>
	<tr>
		<td>Proxy servers</td>
		<td>Utilized to make Internet connections on behalf of users on the network. Prevents users from making direct connections to the Internet providing numerous benefits.<br/>
			Caching of web content, access control to the web, safe browsing, URL filtering, time constraints etc.<br/>
			Requires the client browser to be configured to use the proxy server.</td>
	</tr>
	<tr>
		<td>Mail servers</td>
		<td>Run e-mail software and use SMTP in order to send and receive mail for users that have mailboxes on an organizational server.<br/>
			Users connect mail clients directly to the server using various protocols (HTTPS, POP, IMAP). The most popular mail server is Microsoft Exchange messaging platform.</td>
	</tr>
	<tr>
		<td>Authentication servers</td>
		<td>Handles authentication requests from clients in a domain environment. Hosts a security database containing users, groups and computers. <br/>
			It provides SSO (single sign on) in domain environments. Also known as a domain controller running server roles such as Microsoft's Active Directory.</td>
	</tr>
</table>










<!-- [ RELATED NOTES ]	-->
 
<p class="psub">
	<span class="pbold">Related notes:</span>
	<a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=tcpip.inc.php#content">220-901 TCP/IP notations</a><br/>
</p>

