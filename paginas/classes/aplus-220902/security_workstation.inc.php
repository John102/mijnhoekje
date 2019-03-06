<h3>Security: Workstations</h3>

<p class="pheader">5 best practices to secure workstations</p>

<table>
	<tr>
		<th>Practice</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>password best practices</td>
		<td>Passwords should always contain a mix of uppercase and lowercase letters, numbers and special symbols in order to extend the time it would take to 
		bruteforce hack these passwords. It would also make it nearly impossible to guess passwords.<br/>
		Passwords should be at least 8 characters long for this same purpose.<br/>
		Passwords should also be changed after every interval of some weeks or months.<br/>
		Never share or write down passwords.<br/>
		Some other practices are recommended aswell:
		
			<ul class="magiclist">
				<li>change default usernames and passwords</li>
				<li>disable default accounts (especially guest account)</li>
				<li>requiring screensaver password</li>
				<li>set BIOS/UEFI passwords</li>
				<li>always require passwords</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>account management</td>
		<td>
			<ul class="magiclist">
				<li>restrict user permissions (according to concept of least privilege)</li>
				<li>login time restriction</li>
				<li>disabling guest account</li>
				<li>failed attempts lockout</li>
				<li>timeout / screenlock</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>disable autorun</td>
		<td>Some malware can infect files on removable media and can be placed in the autorun.inf file on that media. 
			Never insert media to install software from an unknown source! 
			Ensure the autorun remains disabled.</td>
	</tr>
	<tr>
		<td>data encryption</td>
		<td>This is possible at both the drive (BitLocker) and file (EFS) level. It should not be overutilized. 
			Strike balance between security and usability.</td>
	</tr>
	<tr>
		<td>patch/update management</td>
		<td>Always keep the software up to date. Especially Operating System files and anti-malware / anti-virus software. 
			Windows Automatic Updates can be configured to update the system automatically.</td>
	</tr>
</table>


<!-- [Additional Links] -->

<p class="psub">
	<span class="pbold">Related notes:</span>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_socialengineering.inc.php#content">220-902 Security threatprevention social engineering notations</a><br/>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_physical.inc.php#content">220-902 Security threatprevention physical notations</a><br/>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_threatprevention_digital.inc.php#content">220-902 Security threatprevention digital notations</a><br/>
		<a target="_self" href="main.php?pagina=notitie&files=aplus-220902&file=security_mobiledevices.inc.php#content">220-902 Security mobiledevices notations</a><br/>
</p>