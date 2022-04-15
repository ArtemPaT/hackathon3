<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
	$_SESSION['naprav'] = $_POST['naprav'];
	header("Location: doska.php");
 ?>