<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
	mysqli_query($con, "INSERT INTO otz(id, text,num,who) VALUES ('{$_POST['ids']}','{$_POST['text']}','{$_POST['num']}','{$_POST['who']}')");
	header("Location: portfolio.php");
 ?>