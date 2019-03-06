<h3>CIDR Notation</h3>

<p class="pheader">Overview</p>

<p>CIDR or '<i>Classless Inter-Domain Routing</i>' is a compact representation of an IP address and its associated routing prefix. This means the IP address 
carries an extra value behind it which is written as <b>/value</b> so for example <b>/24</b> or <b>/3</b>. <br />
It shows the amount of bits reserved for the network ID thus basically it shows the subnet mask.</p>


<p class="pheader">Examples</p>

<p>In the table below there are some examples of CIDR notations.</p>

<table>
		<tr>
			<th>Description</th>
			<th>IP</th>
			<th>Explanation</th>
		</tr>
		<tr>
			<td>Given IP/CIDR</td>
			<td>192.168.178.1/24</td>
			<td>This is an IP address with CIDR notation /24</td>
		</tr>
		<tr>
			<td>Subnet Mask</td>
			<td>255.255.255.0</td>
			<td>Every octet in an IP equals /8 CIDR, so /24 equals 3 octets reserved for network ID.</td>
		</tr>
		<tr>
			<td>Network ID</td>
			<td>192.168.178.0</td>
			<td>The first 3 octets are fully reserved (8 bits or 255 in the Subnet Mask).</td>
		</tr>
		<tr>
			<td>Broadcast ID</td>
			<td>192.168.178.255</td>
			<td>The last possible address in the identified network is the broadcast address.</td>
		</tr>
		<tr>
			<td>Possible IPs for hosts</td>
			<td>192.168.178.1<br>192.168.178.254</td>
			<td>The available range of IP addresses in this CIDR notation.</td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td>Given IP/CIDR</td>
			<td>192.168.178.1/21</td>
			<td>This is an IP address with CIDR notation /21</td>
		</tr>
		<tr>
			<td>Subnet Mask</td>
			<td>255.255.248.0</td>
			<td>Every octet in an IP equals /8 CIDR, so /21 equals 2 whole octets and 1 partial octet reserved for network ID.</td>
		</tr>
		<tr>
			<td>Network ID</td>
			<td>192.168.176.0</td>
			<td>The first 2 octets are fully reserved and the third is partially reserved. You can find out the network ID by 'anding' the binary values of the subnet mask octet and the actual IP octet.</td>
		</tr>
		<tr>
			<td>Broadcast ID</td>
			<td>192.168.183.255</td>
			<td>The last possible address in the identified network is the broadcast address. This can be found by adding the last 'enabled' bit value in the partial subnet mask octet to the network ID octect and subtracting 1.</td>
		</tr>
		<tr>
			<td>Possible IPs for hosts</td>
			<td>192.168.176.1<br>192.168.183.254</td>
			<td>The available range of IP addresses in this CIDR notation.</td>
		</tr>
		<tr>
	</table>