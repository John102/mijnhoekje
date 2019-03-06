<h3>Random Access Memory (RAM)</h3>

<p class="pheader">Overview</p>

<p>Memory is one of the most important components in your computer. The reason for this is that your computer can only process data from memory. 
So if you want to run a program, the program first has to be loaded into RAM before it can be accessed by your processor.</p>

<p>The memory we primarily use for loading in programs is SDRAM or Synchronous Dynamic Random Access Memory.<br/>
We call it <i>Synchronous</i> because it is in sync with the system clock.<br/>
The reason it is called <i>Dynamic</i> is because it needs constant refreshing to keep the data active and updated. <br/>
It is <i>Random Access Memory</i> because any location on it can be accessed directly.</p>
		
<table>
	<tr>
		<th>Name</th>
		<th>Pins</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>SDR-RAM</td>
		<td>168</td>
		<td>Single Data Rate (SDR), meaning it only sends one signal per clockcycle.</td>
	</tr>
	<tr>
		<td>DDR-RAM</td>
		<td>184</td>
		<td>Double Data Rate (DDR), meaning it sends two signals per clockcycle.<br/> (<i>1 on the rising edge, 1 on the falling edge</i>).<br/>It is twice as fast as SDR but still runs at the same clock speed.</td>
	</tr>
	<tr>
		<td>DDR2-RAM</td>
		<td>240</td>
		<td>Double Data Rate 2 (DDR2) is twice as fast as DDR and four times as fast as SDR-RAM. This is because of its I/O bus clock speed.</td>
	</tr>
	<tr>
		<td>DDR3-RAM</td>
		<td>240</td>
		<td>Double Data Rate 3 (DDR3) is twice as fast as DDR2, four times as fast as DDR and eight times as fast as SDR-RAM. This is because of its I/O bus clock speed. </td>
	</tr>
</table>

<p class="psub">Memory has certain naming conventions in the industry. One of which is the actual amount of throughput on a timescale. <i>DDR-200</i> for example can manage 200 million transfers per second.<br/>
If you multiply the throughput by 8 you will get the amount of MB/s. In this case it's <i>200 x 8 is 1600 MB/s</i> so this memory can also be called <i>PC1600</i>. <br/>
To calculate the total transfers per second a module can perform you have to find out what the clockspeed is. If the clockspeed of a DDR module is 100mHz it means it can do 200-million transfers per second because it is a DDR (<i>Double Data Rate</i>) module. To understand this concept you have to know what clockspeed (Hertz) actually is. <a target="_self" href="main.php?pagina=notitie&files=aplus-220901&file=hertzexplained.inc.php#content">Click here for more information about frequency</a>. </p>

<table class="neat_table">
	<tr>
		<th>Memory Clock Speed</th>
		<th>I/O Bus Clock Speed</th>
		<th>DDR Speed</th>
		<th>Transfers Per Second</th>
		<th>Transfer Rate</th>
		<th>Module Naming</th>
	</tr>
	<tr>
		<td>100 MHz</td>
		<td>100 MHz</td>
		<td>DDR-200</td>
		<td>200 Million</td>
		<td>1600 MB/s</td>
		<td>PC-1600</td>
	</tr>
	<tr>
		<td>100 MHz</td>
		<td>200 MHz</td>
		<td>DDR2-400</td>
		<td>400 Million</td>
		<td>3200 MB/s</td>
		<td>PC2-3200</td>
	</tr>
	<tr>
		<td>100 MHz</td>
		<td>400 MHz</td>
		<td>DDR3-800</td>
		<td>800 Million</td>
		<td>6400 MB/s</td>
		<td>PC3-6400</td>
	</tr>
</table>

<p>As you can see in the table above the I/O Bus Clock Speed is getting faster with each generation of DDR memory. The I/O bus clock speed in a DDR module is equal to the memory clock speed.<br/>
But in a DDR2 module the I/O bus clock speed is twice as fast as the memory clock speed.<br/>
In a DDR3 module the I/O bus clock speed is 4 times faster than the memory clock speed.<br/>
And because the Double Data Rate technology is present the amount of transfers per second is double the I/O bus clock speed.</p>