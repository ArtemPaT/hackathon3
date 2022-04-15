<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
	if ($_POST["password"]!='' and $_POST["checkpassword"]!='' and $_POST["name"]!='' and $_POST["surname"]!='' and $_POST["login"]!='' and $_POST["email"]!='' and $_POST["phone"]!='') {
			if ($_POST["checkpassword"] == $_POST["password"]) {
			$check = mysqli_query($con, "SELECT * FROM accounts WHERE login = '{$_POST['login']}'");
			$table_count = mysqli_num_rows($check);
			if ($table_count == null) {
				mysqli_query($con, "INSERT INTO accounts(name,surname,login,email,password,phone,ch) VALUES ('{$_POST['name']}','{$_POST['surname']}','{$_POST['login']}','{$_POST['email']}','{$_POST['password']}','{$_POST['phone']}',0)");
				$query = mysqli_query($con, "SELECT * FROM accounts WHERE login = '{$_POST['login']}' AND password = '{$_POST['password']}'");
				$result = $query->fetch_assoc();
				$_SESSION["login"] = $result['login'];
					header("Location: volonter.php");
			}
			else {
				header("Location: registration.php?che=155164");
			}
		}
		else {
			header("Location: registration.php?id=112313241123");
		}
	}
	else {
		header("Location: registration.php?lol=359089545809");
	}
	
	
 ?>