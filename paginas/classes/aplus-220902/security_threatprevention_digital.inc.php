<h3>Digital Threat Prevention</h3>

<p class="pheader">Anti-virus / Anti-malware</p>

<p>This software based solution is used to prevent, detect and remove malicious software from computer systems. 
It utilizes virus signatures to detect malicious code trying to execute on the system. Signatures or definition files must be kept up to date in order to continue 
protection against new threats. Options for dealing with detected software are <i>fix, quarantine, delete</i>. 
Windows 7 or later come with their own anti-virus software called <i>Windows Defender</i> but 3rd party software is available for all systems.<br/>

Some best practices for anti-virus / anti-malware are:

<ul class="magiclist">
	<li>use scheduled scans instead of manual</li>
	<li>use automatic update services for virus definitions</li>
	<li>quarantine or delete files rather than attempt to repair</li>
	<li>'you get what you pay for'</li>
	<li>centralized anti-virus / anti-malware software is preferred</li>
</ul>


</p>


<p class="pheader">Firewall</p>

<p>A software or hardware solution that typically resides on the 'edge' of the network (the network gateway) that monitors incoming and outgoing traffic according to applied settings. 
Firewalls have various functions and capabilities depending on the specific implementation.

<ul class="magiclist">
	<li>filter data packets based on port number, source or destination IP</li>
	<li>filter anonymous requests</li>	
	<li>filter applications to control outgoing access to Internet services</li>
	<li>filter inappropriate materials from the World Wide Web</li>
	<li>log activities and produce reports on access</li>
</ul>

The most common type of network firewall is the hardware firewall. It is a physical device that provides protection solutions for corporate networks and can be implemented by a device that may also function as a router because it protects the entire network. 
Many home/SOHO routers can function as a variety of devices in one and include many different capabilities including firewall and proxy functionality.<br/>
<br/>
Corporate firewalls include: 

	<ul class="magiclist">
		<li>Cisco PIX and ASA</li>
		<li>Sonicwall by Dell</li>
		<li>Barricuda</li>
	</ul>
	
These firewalls are typically implemented at the network perimeter protecting the entire network from the Internet and its threats.
</p>

<p class="pheader">Proxy Firewall</p>

<p>A firewall that uses dual NICs. One NIC port is connected to the intranet and the other one to the Internet (mostly). This proxy firewall acts as a intermediary between these 2 networks. 
It examines all incoming data and makes rule based decisions as to whether the request should be approved or denied. All packets are reprocessed for use internally and sent to internal systems using the firewalls 
intranet IP address thus masking the network from the internet. This method will provide higher security.</p>


<p class="pheader">User Authentication</p>

<p>Policies should be put into place to control password assignment and prevent password sharing. Policies must balance security and usability. 
Education on the creation of strong and complex passwords is critical. A mix of uppercase and lowercase letters, numbers and if allowed, special characters will 
make the password nearly impossible to brute force or guess.
	
	<ul class="magiclist">
		<li><b>apples1</b> - very weak password</li>
		<li><b>Apples1</b> - very weak password</li>
		<li><b>ApPLeS1</b> - weak password</li>
		<li><b>@pPL3S1</b> - medium password</li>
		<li><b>@pPl€5_0n3</b> - a strong password</li>
	</ul>

Some rules of thumb to consider when creating a password are:

	<ul class="magiclist">
		<li>don't use personal information</li>
		<li>don't use dictionary words</li>
		<li>don't use more than 3 consecutive alphabetic characters</li>
		<li>utilize symbols and numbers that 'look' like the letter</li>
		<li>passwords should be at least 8 characters long (if possible)</li>
		<li>passwords should be changed on a regular basis</li>
	</ul>
</p>



<p class="pheader">Multifactor Authentication</p>

<p>We speak of multifactor authentication when there are extra authentication factors used aside from the username and password. This can exponentially increase the difficulty to hack/crack to nearly impossible. 
The three main additional factors are explained in the table below.</p>

<table>
	<tr>
		<th>Factor</th>
		<th>Description</th>
	</tr>

	<tr>
		<td>What you know</td>
		<td>this is usually information like: 
			<ul class="magiclist">
				<li>an extra security question that only the user knows the answer to</li>
				<li>the last digits of your social security number, bank account or phone number</li>
			</td>
	</tr>
	
	<tr>
		<td>What you have</td>
		<td>
			<ul class="magiclist">
				<li>a smartcard</li>
				<li>a keyfob</li>
				<li>a randomly generated code</li>
			</ul>
		</td>
	</tr>
	
	<tr>
		<td>Who you are</td>
		<td>identity through biometrics (fingerprints, iris scans, voice recognition, etc.)	</td>
	</tr>
	
</table>

<p><b>Out-of-band authentication</b> is often used with Internet systems like Google and others. This is an additional step of user identification confirmation through 'out of band' methods. 
These methods can be: 
	<ul class="magiclist">
		<li>receiving an access code through a phonecall</li>
		<li>receiving an access code through a text message (phone)</li>
	</ul>
</p>

<p class="pheader">VPN (Virtual Private Networks)</p>

<p>Remote access connections that provice secure communications to a corporate office. The VPN endpoint can be a server or a network appliance. 
Protocols used with VPN will encrypt and tunnel data for secure transmission. </p>


<p class="pheader">DLP (Data Loss Prevention)</p>

<p>Preventing data from leaking outside of a corporate organization, either on purpose or by mistake, through systems and corporate policies.
Provide the ability to specify actions that are allowed by users on a file or document. 
<br/>This concept goes by many different names:

	<ul class="magiclist">
		<li>IRM - Information Rights Management</li>
		<li>DRM - Digital Rights Management</li>
		<li>DLP - Data Leakage Prevention</li>
		<li>DLP - Data Loss Prevention</li>
	</ul>
</p>

<p class="pheader">System Hardening</p>

<p>The process of increasing system security to lessen the likelihood of an attack.
	
	<ul class="magiclist">
		<li>Disabling ports - uninstalling applications and disabling unnecessary services user can prevent communication on the ports used by those services</li>
		<li>Access Control Lists (ACLs) - are used by firewalls and in the file sysem</li>
	</ul>
</p>
 

<p class="pheader">E-mail filtering</p>

<p>Software that scans the content of an e-mail and can recognize and block messages that contain content that is not compliant with the types of email sent by that organization. 
Concerned not only with spam but also with preventing malware and social engineering.</p>
 
<p class="pheader">Trusted / Untrusted Software</p>

<p>Users downloading and installing software is a danger to any organization as it does not always come from trusted sources. Some organizations may choose to go beyond policies and 
implement controls via proxy servers. Additionally, administrative rights may be removed preventing the installation of any software regardless of the source. 
Group policy can apply software restrictions to prevent unwanted installations. (Application Control Policies also known as AppLocker)</p>


<p class="pheader">Acceptable Use Policy (AUP)</p>

<p>A signed document specifying what users can and cannot do which is often signed during the hiring process. Users must be informed as to the role they play in security and the 
dangers that are out there and they must be held accountable for disregarding the AUP.</p>


<!-- [Additional Links] -->

<p class="psub">
	<span class="pbold">Related notes:</span>
<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_socialengineering.inc.php#content">220-902 Security threatprevention social engineering notations</a><br/>
<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_physical.inc.php#content">220-902 Security threatprevention physical notations</a><br/>
<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_workstation.inc.php#content">220-902 Security workstation notations</a><br/>
<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_mobiledevices.inc.php#content">220-902 Security mobiledevices notations</a><br/>
</p>



