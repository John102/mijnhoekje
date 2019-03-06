<h3>File Systems</h3>

<p class="pheader">Overview</p>

<p>Operating systems allow users to permanently store data onto secondary storage devices such as a harddisk, CD, DVD and flash drive. 
In order to store information on a physical medium a file system is required. Some file systems are listed below.</p>

<table>
	<tr>
		<th>File System</th>
		<th>Full Name</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>FAT</td>
		<td>File Allocation Table</td>
		<td>Really old version file system<br />File table; File Allocation</td>
	</tr>
	<tr>
		<td>FAT32</td>
		<td>File Allocation Table 32</td>
		<td>FAT32 is an extension which means that data is stored in chunks of 32 bits<br />File table; File Allocation</td>
	</tr>
	<tr>
		<td>exFAT</td>
		<td>extended File Allocation Table</td>
		<td>Introduced in 2006 and optimized for flash memory such as USB flash drives and SD cards<br />File table; File Allocation</td>
	</tr>
	<tr>
		<td>NTFS</td>
		<td>New Technology File System</td>
		<td>Still widely used today<br />File table; MFT - Master File Table</td>
	</tr>
	<tr>
		<td>CDFS</td>
		<td>Compact Disk File System</td>
		<td>a filesystem used for CD-ROMs</td>
	</tr>
	<tr>
		<td>UDF</td>
		<td>Universal Disk Format</td>
		<td>a filesystem used for DVDs and BlueRay disks</td>
	</tr>
</table>

<p>A harddisk consists of sectors, the smallest physical area of space on a drive (512 Bytes). The smallest logical part of a harddisk that an OS can write to is a cluster. 
A cluster is a logical unit that usually consists of 4 to 64 physical sectors. <br/>
The role of the file system is to track cluster use for data stored on the disk. All of this location data is managed in a file table. The file system manages harddisks using root directories and subdirectories.</p>



 
<!-- [ RELATED NOTES ]	-->
 
 
<p class="psub">
	<span class="pbold">Related notes:</span>
	<a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=magneticdisks.inc.php#content">220-901 Magnetic disks notations</a><br/>		
</p>