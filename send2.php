<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
	mysqli_query($con, "INSERT INTO anket2(author_id,text,photo) VALUES ('{$_POST['id']}','{$_POST['about']}','{$_POST['photo']}')");
	header("Location: portfolio.php");
 ?>