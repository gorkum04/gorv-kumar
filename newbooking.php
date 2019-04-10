<?php include("header2.php"); 
	include("includes/dbh.inc.php");
?>

 
<?php
	/* This page a double sided page.
		 *If we click on edit button then this behaves as an edit page.
		 *If we click on new booking or if there is no data in the form to display then it will create a new booking.
		 *First of all get the particular id using GET[] method.
		 *Using SELECT statement store the data in a variable.
 	*/
	 if(isset($_GET['id'])) {
		 $id=$_GET['id'];
		 $res=mysqli_query($conn,$sql);
		 $rec=mysqli_fetch_array($res);
		
	/* Create two functions:
	 * 1) if the choice is an edit button
	 * 2)if the choice is a new booking
	 * BOTH OF THESE HAVE DIFFERENT BUTTON AND HEADINGS.
	 * Check whether it is a edit or a new booking.
	*/	
		 $formaction="editbooking.php";
		 $pageheading="Edit Booking";
		 $btn="Save Changes";
		 $hidden="<input type='hidden' name='id' value='{$user_id}'>";
 			 } else {
		$rec=array('id'=>'','first'=>'','email'=>'','injury'=>'','massage'=>'','timeslot'=>'');
		//$cphoto="";
		$pageheading="Create New Booking";
		$formaction="savebookings.php";
		$btn="Cancel Booking";
		$hidden="";
	 }
?>

<div class='blue-container'>
	<div class="container">
		<h3> Bookings </h3>
	</div>
</div>
<div class="container">
	<h3 class='mainheading'> <span><?php echo $pageheading; ?></span> </h3>
    <?php
    
    /* This will get the message from the header using GET[] method and displays the message accordingly. */
   		if(isset($_GET['m'])) {
			$m=$_GET['m'];
			if($m=='s') {
				echo "<div class='msg smsg'>Successfully Saved. </div>";
			} else if($m=='n') {
				echo "<div class='msg nmsg'> Not Saved. Please try again. </div>";
			}
			

		} 
	?>
	<!-- form action=<?php echo $formaction; ?>" will diferentiate between the two pages. -->
	<form name="locform" action="<?php echo $formaction; ?>" method="post" enctype="multipart/form-data">
    	<?php echo $hidden; ?>
    	
    	<table class="formtable" style="width:80%;" cellspacing="0" cellpadding="0" border=0>
			
		
			<div class="cform">
                <tr>
                    <th> First Name: </th>
                    <!-- value="" will print the data of the particular column from the database  -->
                    <td> <input class="fitem" type="text" required="true" name="first" placeholder="Your first name" value="<?php echo $rec['first']; ?>"></td>
                <tr/>
                   
                <tr>
                    <th> Email: </th>
                    <td> <input class="fitem" type="text" name="email" required="true" value="<?php echo $rec['email']; ?>" ></td>
                    <!-- <th> Upload ID: </th>
                    <td> <input class="fitem" type="file" name="file" value="<?php echo $brec['bupload']; ?>" placeholder="Upload your valid ID Proof(passport/ration card/aadharcard)"></td>
                     -->
                </tr>
                
                    <th> Injury: </th>
                    <!-- value="" will print the data of the particular column from the database  -->
                    <td> <input class="fitem" type="text" required="true" name="injury" placeholder="Your first name" value="<?php echo $rec['injury']; ?>"></td>
                <tr/>
                <tr>
                    <th> Massage: </th>
                    <!-- value="" will print the data of the particular column from the database  -->
                    <td> <input class="fitem" type="text" required="true" name="massage" placeholder="Your first name" value="<?php echo $rec['massage']; ?>"></td>
                <tr/>
                <tr>
                    <th> Timeslot: </th>
                    <!-- value="" will print the data of the particular column from the database  -->
                    <td> <input class="fitem" type="text" required="true" name="timeslot" placeholder="Your first name" value="<?php echo $rec['timeslot']; ?>"></td>
                <tr/>
                <tr>
				<th></th>
				<td colspan="3">
					<input class="fbtn" type="submit" value="<?php echo $btn; ?>">
					<input class="fbtn" type="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</div>

