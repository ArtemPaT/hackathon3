<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
	$check = mysqli_query($con, "SELECT * FROM ankets WHERE login = '{$_SESSION['login']}'");
	$table_count = mysqli_num_rows($check);
	if ($table_count != null) {
		$check2 = mysqli_query($con, "SELECT * FROM zayava WHERE sender = '{$_SESSION['login']}'");
		$table_count2 = mysqli_num_rows($check2);
		if ($table_count2 == null) {
			mysqli_query($con, "INSERT INTO zayava(project,sender) VALUES ('{$_POST['idik']}','{$_SESSION['login']}')");
			header("Location: doska.php?fkjd=12342");
		}		
		else {
			header("Location: doska.php?check2=445678");
		}
	}
	else {	
		header("Location: doska.php?check=12345");
	}
	
 ?>