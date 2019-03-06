<h3>BIOS (Basic Input/Output System)</h3>

<p class="pheader">Overview</p>

<p>The BIOS is a piece of software (firmware) that resides on a ROM chip on your motherboard. 
The BIOS is used to start your computer. It initializes the processor and memory and performs a Power-On Self-Test or POST. 
The POST basically checks all of the hardware before continuing to boot an operating system if available from one of the devices in the boot record. 
If the POST method finds something that is not functioning properly it will give feedback on the display and through beep sounds.
</p>

<h3>UEFI (Unified Extensible Firmware Interface)</h3>

<p>The UEFI is the modern standard replacement of the legacy BIOS. It usually resides on a piece of flash memory on your motherboard and no longer needs a CMOS battery to keep its content valid. 
One of the advantages of a UEFI in comparison to the legacy BIOS is that the UEFI supports boot possibilities from disks larger than 2.2 TB. 
Another advantage is the fact that it supports legacy FAT filesystems and removable media.<br />
The UEFI also includes a pre-boot environment. This is not an operating system but it provides the user with an interactive environment to aid with troubleshooting. 
The pre-boot environment has its own shell, drivers and applications and allows for internet browsing, backup- and storage drive management, remote diagnostics etc.</p>

<p class="pheader">Security</p>

<table>
<tr>
	<th>Security Method</th>
	<th>Description</th>
</tr>
<tr>
	<td>BIOS Password / User Password</td>
	<td>System won't boot without it.</td>
</tr>
<tr>
	<td>Supervisor Password</td>
	<td>Locks BIOS configuration for unauthorised people.</td>
</tr>
<tr>
	<td>Full Disk Encryption</td>
	<td>Encrypting all files including the operating system.<br/>One way is Windows Bitlocker (BIOS integrates with TPM)<br/>TPM (Trusted Platform Module) can be added to many motherboards, built-in to some systems, adds advanced cryptographic functions</td>
</tr>
<tr>
	<td>LoJack (computrace)</td>
	<td>Built into the BIOS of laptop, automatically installed into the operating system, reinstalls itself when operating system is reinstalled<br/>Contains a 'phone home' function which provides location information on the whereabouts of the latop<br/>Also contains 'Theft mode' that can force a startup password or remotely lock and/or erase files on the laptop</td>
</tr>
<tr>
	<td>Secure Boot</td>
	<td>Built into the UEFI<br/>It can digitally sign known-good software, is cryptographically secure, prevents software from running without proper signature<br/>Supported in many operating systems, win8, win8.1, winserv2012, winserv2012r2, linux fedora,opensuse,ubuntu</td>
</tr>
</table>