<?php

/* Destroys the session and takes back to the login page with message = successfully logged out. */
	session_start();
	session_destroy();
	session_start();
	$_SESSION['msg']='s';
	header("location: index.php");

?>