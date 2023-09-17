<?php
	session_start();
    // it will unset the session variable.
    unset($_SESSION['IS_LOGIN']);
    session_destroy();
    //echo "Log Out Successful";
	header("location:Student Login Page.html");
	
?>