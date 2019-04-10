<?php

	include_once("includes/dbh.inc.php");
?>
<?php
	
	//retrieve the data from the form and store it in a variable
	
	$first = $_POST['first'];
	$email = $_POST['email'];
	$injury = $_POST['injury'];
	$massage = $_POST['massage'];
	$timeslot = $_POST['timeslot'];
	
	//store the data in the database
	echo $sql = "Insert into booking(first, email, injury, massage, timeslot) VALUES('$first','$email','$injury','$massage','$timeslot')";
	 if($conn->query($sql)==true){
        echo 'data is saved sucessesfully';
    }
    else {
        echo 'data is not saved';
    }

    header('location:index.php?data_save_sucessesfully');
    $conn->close();
//echo mysqli_error($conn);
?>
