<h3>Security: Mobile Devices</h3>

<p class="pheader">Overview</p>

<p>Mobile devices are highly portable and are susceptible to being lost or stolen in addition to the possibility and likelihood that they contain personal and/ore corporate information. 
There are multiple options for securing these devices which depend on the type of device.</p>


<p class="pheader">Locking mechanisms</p>

<p>There are many types of mobile device locking mechanisms designed to keep unauthenticated people out of the device.</p>

<table>
	<tr>
		<th>Mechanism</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>Fingerpint Lock</td>
		<td>Many modern mobile smart devices contain a fingerprint reader pad on the front of back of the device. The OS installed on this device often has an option 
			to configure a device unlock setting based on a fingerprint. (Who you are)</td>
	</tr>
	<tr>
		<td>Face Lock</td>
		<td>Users the front built-in camera to scan a users face and compare it to the configured scan(s) to verify the user. (Who you are)</td>
	</tr>
	<tr>
		<td>Swipe Lock</td>
		<td>Uses a single gesture or series of gestures to unlock the mobile device. Sometimes requires the moment of an icon in a precise way or pattern. (What you know)</td>
	</tr>
	<tr>
		<td>Passcode Lock</td>
		<td>Requires the user to input a PIN number or password to unlock the device. (What you know)</td>
	</tr>
</table>


<p class="pheader">Other mobile security features</p>

<table>

	<tr>
		<th>Feature</th>
		<th>Description</th>
	</tr>
	
	<tr>
		<td>Remote Wipes</td>
		<td><b>IOS5</b> and later provide remote wipe capabilities through iCloud. <b>LostAndroid</b> app is not installed by default but freely available. Many email applications and MDM programs will support the ability to remotely wipe a device.</td>
	</tr>
	
	<tr>
		<td>Location Applications</td>
		<td><b>FindMe</b> programs use GPS to locate lost or stolen devices. It must be turned on prior to losing the device.</td>
	</tr>
	
	<tr>
		<td>Remote Backup Applications</td>
		<td>Backing up an iPhone can be performed by connecting the device to a Mac or PC that has iTunes installed but this might not be optional. Additional apps can be 
	used to perform online backups. Android has always taken a cloud approach to backups and has many apps that will back up entire devices or individual bits of data. (Dropbox, Google Drive, Box.net)</td>
	</tr>
	
	<tr>
		<td>Failed Login Attempt Restrictions</td>
		<td>Similar to account lockout restrictions on a desktop or laptop. This feature is available on mobile devices to lock the device for a period of time or/and perform a remote wipe after a certain number of failed attempts
			In iOS the <b>Erase Data</b> function can be set after a number of failed attempts.<br/>
			Android does not have this feature built in but it can be added via the Play Store.
		</td>
	</tr>
	
	<tr>
		<td>Anti-virus / Anti-malware</td>
		<td>Mobile devices can be infected with viruses and malware just like laptops and desktops. Major anti-virus vendors provide products for mobile devices. 
			Same rules and best practices apply to mobile devices.</td>
	</tr>
	
	<tr>
		<td>Patching / OS updates</td>
		<td>Patching and updating the mobile OS and anti-virus / anti-malware software will keep the device up to date and protected best as possible.<br/>
			iOS automatic update features are available through iTunes.<br/>
			Android has an auto-update feature directly built into the OS.</td>
	</tr>
		
	<tr>
		<td>Full device Encryption</td>
		<td>This feature is available for most smartphones and mobile devices. Often implemented through 3rd party applications and Mobile Device Management software like InTune.</td>
	</tr>
	
	<tr>
		<td>Authenticator Applications</td>
		<td>Makes it possible for mobile devices to utilize a time-based one-time password (TOTP) algorithm with a site that requires such authentication. The shared key is provided to the user over a secure channel and stored in the authenticator application. 
		The key is used for all future logins to the site. The user will provide a username and password and a one-time password as well.</td>	
	</tr>
	
	<tr>
		<td>Trusted Source vs. Untrusted Source</td>
		<td>Applications for mobile devices can be obtained from different sources. Trusted sources are <b>Google Play Store</b> and <b>Apple Store</b>. Users should be trained about untrusted sources and the dangers associated with them. 
		Devices can be configured to disallow installations from untrusted sources.</td>
	</tr>
	
	<tr>
		<td>Firewalls</td>
		<td>Mobile devices now support the running of firewall apps just like desktop and laptop systems. In addition, IPS and IDS can be placed on mobile devices. Realize that these apps are always running and can have a negative effect on the lifetime of the device battery.</td>
	</tr>
	
	<tr>
		<td>Policies and Procedures</td>
		<td>With the influx of mobile devices on modern networks, changes and additions to security policies for organizations might be required.<br/>
			<b>BYOD (Bring Your Own Device)</b> policy brings a set of security challenges often mitigated through mobile device management software.<br/>
			<b>Corporate Owned</b> policy devices are often controlled in the same way but have a higher success rate due to a common device being used.<br/>
			<b>Profile Security Requirements</b> implement baseline levels of security settings for all mobile devices connected to the network.</td>
	</tr>
</table>

<p class="pheader">Best Practices for Security</p>

<p>

	<ul class="magiclist">
		<li>for highest security for business invest in MDM (Mobile Device Management)</li>
		<li>enforce passcodes and lockout settings</li>
		<li>use complex PINs and passwords</li>
		<li>use biometric options when available</li>
		<li>always leave Bluetooth disabled and when enabled, only visible to known devices</li>
		<li>configure passwords for purchases</li>
		<li>utilize device encryption when available</li>
	</ul>
	
</p>






<!-- [Additional Links] -->

<p class="psub">
	<span class="pbold">Related notes:</span>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_socialengineering.inc.php#content">220-902 Security threatprevention social engineering notations</a><br/>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_physical.inc.php#content">220-902 Security threatprevention physical notations</a><br/>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_digital.inc.php#content">220-902 Security threatprevention digital notations</a><br/>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_workstation.inc.php#content">220-902 Security workstation notations</a><br/>
</p>
