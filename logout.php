<?php 
	session_start();
	// if the session is destroyed, redirect the user to the signin page
	if(session_destroy()) {
		header("Location: signin.php");
	}

 ?>