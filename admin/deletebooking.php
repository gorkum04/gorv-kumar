<?php
include("../includes/dbh.inc.php");
  /* Get the particular id using GET[] method.
   * use DELETE statement to delete the entry of the particualar id */	
	$id=$_GET['id'];
	$sql="delete from booking where id='$id'";
 
	if(mysqli_query($conn,$sql)) {
		header("location:managebooking.php?m=ds");
	} else {
		header("location:managebooking.php?m=n");
	}
	//echo mysqli_error($conn);
?>