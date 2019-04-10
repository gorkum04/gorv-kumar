<?php
	include("../includes/dbh.inc.php");

/* Display the booking made by the client.
 * EDIT the bookingif necessary.  
 * Use UPDATE statement to update the information in the database.*/
	$first = $_POST['first'];
	$email = $_POST['email'];
	$injury = $_POST['injury'];
	$massage = $_POST['massage'];
	$timeslot = $_POST['timeslot'];


	$sql="update booking set first='$first',email='$email',injury='$injury',massage='$massage',timeslot='$timeslot'";
	if(mysqli_query($conn,$sql)) {
		
		header("location:home.php?m=s");
	} else {

		header("location:editbooking.php?m=n&id={$id}");
	}
	//echo mysqli_error($conn);


?>