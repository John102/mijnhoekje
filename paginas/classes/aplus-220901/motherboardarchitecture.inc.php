<h3>Motherboard Architecture</h3>

<p class="pheader">Overview</p>

<p>In the image below the basic architecture of a motherboard is shown.</p>

<img class="image-block" src="<?=$img_misc?>mobolayout.png" />

<p>A motherboard contains several slot types which have different properties. In the diagram below you can see an overview of these slot types.</p>

<p>These slots communicate through busses to the chip controllers (<i>Southbridge, Northbridge and CPU</i>). A bus is basically a conductive connection between a slot and a controller. </p>

<p><b>Parallel data transfer</b> on a 32-bit bus requires 32 individual connections to a controller because 32 bits of data are sent simultaneously in a parallel connection. <br />
This means that parallel data transfer on a 64-bit bus requires 64 individual lanes to communicate.</p>

<p>PCIe utilizes <b>serial data transfer</b> to communicate. This significantly reduces the amount of physical lanes needed on a motherboard. 
A PCIe x1 slot has 2 lanes. 1 for communication from the slot to the controller and 1 from controller to slot. A PCIe x2 has 4 lanes. 2 for communication from slot to controller and 2 for communication from controller to slot. 
A PCIe x4 slot has 8 lanes etc.</p>

<table>
	<tr>
		<th>Slot Type</th>
		<th>Throughput</th>
		<th>Notifications</th>
	</tr>
	<tr>
		<td>PCI (<i>Peripheral Component Interconnect</i>)</td>
		<td>133 MB/s (<i>32-bit at 33 MHz</i>) <br />
			266 MB/s (<i>32-bit at 66 MHz or 64-bit at 33 MHz</i>) <br />
			533 MB/s (<i>64-bit at 66 MHz</i>) <br />
		</td>
		<td>Parallel communication. Created in 1994. It's a common expansion interface 32-bit and 64-bit bus width.</td>
	</tr>
	<tr>
		<td>PCIe (<i>PCI Express</i>)</td>
		<td>v1.x: 250 MB/s (<i>per lane</i>) <br />
			v2.x: 500 MB/s (<i>per lane</i>) <br />
			v3.0: &nbsp;~1 GB/s (<i>per lane</i>) <br />
			v4.0: &nbsp;~2 GB/s (<i>per lane</i>) <br />
			v5.0: &nbsp;~4 GB/s (<i>per lane</i>) 			
		</td>
		<td>Serial communication using unidirectional lanes. Replaced PCI, PCI-X and AGP.<br />
			PCIe has x1, x2, x4, x8, x16 and x32 full-duplex lanes.</td>
	</tr>
	
</table>