<?php
	session_start();
	include_once("../includes/dbh.inc.php");

 
 	$uname = $_POST['uname'];
 	$upwd = $_POST['upwd'];
 
 	$sql = "select *from admin where uname = '$uname' and upwd = '$upwd'"; 
 	$result = mysqli_query($conn, $sql);
	$rec = mysqli_fetch_array($result);
	
	if($rec['uname']!=""){
		$_SESSION['ufullname']=$rec['ufullname'];
		$_SESSION['msg']='s';
		header("location:home.php");
	}else{
		$_SESSION['msg'] = 'n';
		header("location:index.php");
	}
	echo mysqli_error($conn);
	
?>
 
  
  
