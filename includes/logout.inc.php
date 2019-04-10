<?php 

//Logon out action will be shown if there is a session to allow user to logout
if (isset($_POST['submit'])) {
    session_start();
    session_unset();// destroys the variables associated with the session
    session_destroy();//destroys the session but not the global variables
    header("Location: ../start.php");
    exit();
}