<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		@font-face {
		    font-family: Cera;
		    src: url(CeraPro-Medium.ttf);
		}
		.underline {
			text-decoration: underline;
		}
	</style>
</head>
<body style="font-family: Cera;"> 
	<div class="col-6 mx-auto pt-3 mt-5 border rounded">
		<img src="">
		<div class="d-flex">
			<div class="col-7 p-3">
				<form action="reg2.php" method="POST">
					<h4>Создайте аккаунт</h4>
					<h6 class="underline">Как организация</h6>
					<br>
					<div class="d-flex col-10 p-0">
						<input type="" name="name" class="border rounded p-1 pl-2 col-6" placeholder="Имя">
						<input type="" name="surname" class="border rounded p-1 pl-2 ml-2 col-6" placeholder="Фамилия">
					</div><br>
					<input type="" name="login" class="border rounded p-1 pl-2 col-10" placeholder="Логин">
					<p style="font-size: 13px; " class="ml-2 text-muted">
						<?php 
							if ($_GET['che']==155164) {
								echo "<span class='text-danger'>Логин занят</span>";
							}
						 ?>
						
					</p>
					<input type="" name="email" class="border rounded p-1 pl-2 col-10 mt-2" placeholder="E-Mail"><br><br>
					<input type="" name="phone" class="border rounded p-1 pl-2 col-10" placeholder="Номер телефона">
					 <div class="d-flex col-10 p-0 mt-4">
						<input type="" name="password" class="border rounded p-1 pl-2 col-6" placeholder="Пароль">
						<input type="" name="checkpassword" class="border rounded p-1 pl-2 ml-2 col-6" placeholder="Повторите пароль">

					</div>
					<p style="font-size: 13px; " class="ml-2 text-muted">
						<?php 
							if ($_GET['id']==112313241123) {
								echo "<span class='text-danger'>Пароли не совпадают</span>";
							}
							elseif ($_GET['lol']==359089545809) {
								echo "<span class='text-danger'>Не все поля заполнены</span>";
							}
						 ?>
						
					</p>
					<br>



					
					<button class="btn btn-primary border" style="position: absolute; right: 20px;">
						Зарегистрироваться
					</button>
				</form>
				<button class="btn border">
						Войти
				</button>
			</div>
			<div class="col-5 my-auto">
				<img src="we.png" class="w-100">
				<h5 class="text-center"><a href="registration.php">Зарегистрируйтесь как волонтер</a></h5>
			</div>
		</div>
		
	</div>
</body>
</html>