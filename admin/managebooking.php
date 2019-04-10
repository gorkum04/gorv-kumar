<?php include("header.php"); include("../includes/dbh.inc.php"); ?>
<div class='blue-container'>
	<div class="container">
		<h3>Manage Booking </h3>
	</div>
</div>
<div class="container">
	
	<?php
	/* This will get the message from the header using GET[] method and displays the message accordingly. */
		if(isset($_GET['m'])) {
			$m=$_GET['m'];
			if($m=='ds') {
				echo "<div class='msg smsg'> Deleted Successfully . </div>";
			} else if($m=='n') {
				echo "<div class='msg nmsg'> Not Successfull. Please try agian. </div>";
			}
		} 
	?>
	
	<!-- Display the headings of the table -->
	<table style="border:1px;width:100%;margin:auto;background:#bdd8e3;" border="1" cellspacing="0">
		<tr style="background:#ccc;">
			<th> Sr.No. </th>
			<th> Name </th>
			<th> Email </th>
			<th> Injury Type </th>
            <th> Massage Type </th>
            <th> Time Slot </th>
            <th> Options </th>

		</tr>
		<?php
			$i=1;
			$sql="select * from booking";
			$res=mysqli_query($conn,$sql);
			while($rec=mysqli_fetch_array($res)){
				echo "<tr>";
				echo "<td align='center'> $i.</td>";
				echo "<td> {$rec['first']} </td>";
				echo "<td> {$rec['email']} </td>";
				echo "<td> {$rec['injury']} </td>";
				echo "<td> {$rec['massage']} </td>";
				echo "<td> {$rec['timeslot']} </td>";
			
			echo "<td align='center'> <a class='btn' href='newbooking.php?id={$rec['id']}'>Edit</a>  | <a class='btn' href='deletebooking.php?id={$rec['id']}'>Delete</a> </td>";
				/* Give each button a id so that we can use it to do other tasks. */
		// echo "<td align='center'> <a class='btn' href='viewbookings.php?id={$rec['bid']}'>Open</a> |<a class='btn' href='newbooking.php?id={$rec['bid']}'>Edit</a> | <a class='btn' href='deletebooking.php?id={$rec['bid']}'>Delete</a> </td>";
				echo"</tr>";
				$i++;
			}
		?>
	</table>
</div>
