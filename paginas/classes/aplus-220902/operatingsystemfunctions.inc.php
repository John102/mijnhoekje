<h3>Operating System Functions</h3>

<p class="pheader">Overview</p>

<p><b>Multi-tasking</b> is a technology in which the OS allows multiple applications to run simultaneously while keeping required resources separated. 
There are 2 ways in which is can be accomplished.</p>

<table>
	
	<tr>
		<td>Cooperative multi-tasking</td>
		<td>Used in older versions of Windows and requires applications to cooperate with on another</td>
	</tr>
	<tr>
		<td>Preemptive multi-tasking</td>
		<td>Used by all modern OS and the OS is in control of which application gets resources</td>
	</tr>
</table>

<p><b>Virtual memory</b> is used by the OS to support multiple applications that require memory. As the system runs out of physical RAM resources it starts using Virtual Memory, which is basically a file on the hard drive. The OS then stores lower prioritized data from RAM into Virtual Memory and when the data is needed again it performs 'swapping' to transfer this data back to RAM.</p>

<p><b>Memory management</b> must be utilized by the OS in order to run applications properly. Applications fall into 4 categories.</p>

<table>
	<tr>
		<th>Application Category</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>DOS 16-bit</td>
		<td>Assume single tasking environment and are given a seperate virtual machine when in protected mode</td>
	</tr>
	<tr>
		<td>Windows 16-bit</td>
		<td>Given a single virtual machine for all 16-bit applications, it's called Windows on Windows (WOW)</td>
	</tr>
	<tr>
		<td>Windows 32-bit</td>
		<td>Given their own seperate memory space, they support multi-threading. On a 64-bit OS these are supported through WOW64 environment.</td>
	</tr>
	<tr>
		<td>Windows 64-bit</td>
		<td>Given their own seperate memory space, they support multi-threading. Only used in 64-bit OS.</td>
	</tr>
</table>

<p><b>Controlling hardware</b> on behalf of software and users is yet another responsibility of the OS. Though the OS does not directly manipulate hardware it is able to interact with hardware through the following options.</p>

<table>
	<tr>
		<td>Device drivers</td>
		<td>Small programs stored on the hard drive that instruct the OS on how to communicate with a specific hardware device</td>
	</tr>
	<tr>
		<td>BIOS</td>
		<td>Used to communicate with simple devices such as floppy drives, mice and keyboards, which are part of the system board</td>
	</tr>
</table>