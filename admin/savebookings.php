<?php
include("../includes/dbh.inc.php");

	$first = $_POST['first'];
	$email = $_POST['email'];
	$injury = $_POST['injury'];
	$massage = $_POST['massage'];
	$timeslot = $_POST['timeslot'];
	
	 $sql="insert into booking (first, email, injury, massage, timeslot)
		values ('$first','$email','$injury','$massage','$timeslot')";

 
		$run= mysqli_query($conn,$sql);
		if(!$run){
			die(); 
		}else{
			echo "Booking done successfully";
			//header("location:managebooking.php?m=success!	");
		}
		echo mysqli_error($conn);
?>
	