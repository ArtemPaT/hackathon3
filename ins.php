<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		@font-face {
		    font-family: Cera;
		    src: url(CeraPro-Medium.ttf);
		}
		.strange-color {
			color: #f1d303;
		}
		.bg-black {
			background-color: #000000;
		}
		.btext {
			width: 815px;
			height: 216px;
			font-family: Cera;
			font-style: normal;
			font-weight: bold;
			font-size: 100px;
			line-height: 91.2%;
			/* or 137px */

		}
		.ml-73 {
			margin-top: 111px;
			margin-left: 73px;
		}
		.pill {
			border-radius: 20px;
		}
		.br-15 {
			border-radius: 15px;
		}
		.mt-10 {
			margin-top: 100px;
		}
		.overall {
			z-index: 100;
		}
		.pointer {
			cursor: pointer;
		}
		.bg-cobalt {
			background: #0047ab;
		}
		.lol-shadow {
			box-shadow: 0 0 20px rgba(0,0,0,1);
		}
	</style>
</head>
<body style="font-family: Cera">
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
		//$query = mysqli_query($con, "SELECT * FROM works WHERE name = '{$_SESSION["login"]}'");
	 ?>
	<nav class="navbar p-3 pl-4 bg-cobalt text-white d-flex pt-4 ">
		<div style="height: 50px">
			<a href="index.php">
				<img src="LOO.png" class="h-100">
			</a>
		</div>
			
		<a href="index.php" style="text-decoration: none; color: white; padding-right: 90px;"><h3><span class="strange-color">Go</span>Dee</h3></a>
		<div class="col-10">
			<div class="d-flex">
				<div class="d-flex">
					<a href="doska.php" class="ml-5 mt-2"><h6 class="text-white ml-4">ДОСКА ОБЪЯВЛЕНИЙ</h6></a>
					<a href="volls.php" class="ml-5 mt-2"><h6 class="text-white ml-4">ВОЛОНТЕРЫ</h6></a>
					<a href="volls.php" class="ml-5 mt-2"><h6 class="text-white ml-4">РЕЙТИНГ ВОЛОНТЕРОВ</h6></a>
				</div>
				
				<a href="portfolio.php" class="mt-2 strange-color" style="margin-left: 100px; position: absolute; right: 100px;"><h6 class="strange-color"><?php if($_SESSION["login"] == null) 
					{
						echo "ПОРТФОЛИО";
					}
					else {
						echo $_SESSION["login"];

					} ?></h6></a>
					<?php 
						
							echo "<a href='signout.php' style='position: absolute; right: 20px; top: 5px'><span class='text-white'>Выход</span></a>";

						
					 ?>
					
			</div>
		</div>


	</nav>
<div class="col-10 mx-auto p-3">
	<h2 class="text-center">Создание проекта</h2>
	<form method="POST" action="insert.php">
			
		
	<div class="d-flex " style="border-top: 2px solid">
		
		<div class="col-6 " style="border-right: 2px solid;">
			<h4 class="mt-2">Направление:</h4>
			<select class="rounded ml-3 p-2" name="naprav" style="border: 2px solid; ">
				<option>Образование</option>
				<option>Природа</option>
				<option>ЧС</option>
				<option>Дети, молодость</option>
				<option>Спорт</option>
				<option>Животные</option>
				<option>Пожилые</option>
				<option>Культура и искусство</option>
				<option>Поиск людей, животных</option>
				<option>Другое</option>
				<option>Взрослые</option>
			</select>
			<h4 class="mt-2">Населенный пункт:</h4>
				<input class="rounded ml-3 p-2" type="" name="place"  placeholder="Населенный пункт">
			<h4 class="mt-2">Обложка:</h4>
				<input type="file" name="photo" class="ml-3" multiple accept="image/*"> 
			<h4 class="mt-2">Описание:</h4>
				<div class="col-10">
					<textarea name="descr" class="ml-3 form-control" placeholder="Описание" style="border: 2px solid; "> Ваше описание
					</textarea>
				</div>
			<h4 class="mt-2">Цель:</h4>
				<div class="col-10">
					<textarea name="goal" class="ml-3 form-control" placeholder="Описание" style="border: 2px solid; "> Ваша цель
					</textarea>
				</div>
			<h4 class="mt-2">Результаты:</h4>
				<div class="col-10">
					<textarea name="results" class="ml-3 form-control" placeholder="Описание" style="border: 2px solid; ">Ваши результаты
					</textarea>
				</div>				
		</div>
		<div class="col-6">
			<h4 class="mt-2">Примечание:</h4>
				<div class="col-10">
					<textarea name="ops" class="form-control" placeholder="Описание" style="border: 2px solid; "> 
					</textarea>
				</div>
			<h4 class="mt-2">Контактный номер:</h4>
				<input class="rounded ml-3 p-2" type="" name="phone"  placeholder="+7999-999-99-99">
			<h4 class="mt-2">Whatsapp:</h4>
				<input class="rounded ml-3 p-2" type="" name="whatsapp"  placeholder="+7999-999-99-99">
			<h4 class="mt-2">Telegram:</h4>
				<input class="rounded ml-3 p-2" type="" name="telegram"  placeholder="Активная ссылка">
			<h4 class="mt-2">Вконтакте:</h4>
				<input class="rounded ml-3 p-2" type="" name="vk"  placeholder="Активная ссылка"><br><br>
			<h4 class="mt-2">Название проекта:</h4>
				<input class="rounded ml-3 p-2" type="" name="name"  placeholder="Название проекта">
			<button class="btn bg-light ml-3 pr-5 pl-5 col-6" style="border: 1.5px solid;">Создать проект</button>
		</div>
	</div>

	</form>
		
</div>


</body>
</html>