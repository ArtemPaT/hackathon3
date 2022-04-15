<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
	mysqli_query($con, "INSERT INTO ankets(login, sex,age,place,about,photo) VALUES ('{$_SESSION['login']}','{$_POST['sex']}','{$_POST['age']}','{$_POST['place']}','{$_POST['about']}','{$_POST['photo']}')");
	header("Location: volonter.php");
 ?>