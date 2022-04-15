<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
	mysqli_query($con, "INSERT INTO projs(own,naprav,place,photo,descr,goal,results,ops,phone,whatsapp,telegram,vk,name) VALUES ('{$_SESSION['login']}','{$_POST['naprav']}','{$_POST['place']}','{$_POST['photo']}','{$_POST['descr']}','{$_POST['goal']}','{$_POST['results']}','{$_POST['ops']}','{$_POST['phone']}','{$_POST['whatsapp']}','{$_POST['telegram']}','{$_POST['vk']}','{$_POST['name']}')");

	header("Location: portfolio.php");
 ?>