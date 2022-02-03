<?php

session_start();		
	if (!isset($_SESSION['user_name'])) {
		header('location:login.php');
	}

	
	include 'profile.php';

	//echo 'Wellcome'. " ".$_SESSION['user_name'];
	

	
?>
<div><a href="logout.php"><input type="submit" class="submit" name="login" value="LOGOUT"></a></div>

