<?php 
	session_start();
	$_SESSION['login'] = null;
	$_SESSION["check"] = true;
	header("Location: index.php");
 ?>