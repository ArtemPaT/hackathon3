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
		.projs_block {
			display: none
		}
		.underline {
			text-decoration: underline;
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
					<a href="rating.php" class="ml-5 mt-2"><h6 class="text-white ml-4">РЕЙТИНГ ВОЛОНТЕРОВ</h6></a>
					<a href="test.php" class="ml-5 mt-2"><h6 class="text-white ml-4">ТЕСТ</h6></a>
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
	
	<div class="col-8 mx-auto border shadow pb-3"> 
		<h4 class="text-center mt-2 underline">Тест на знания о волонтерстве</h4>
		<form method="POST" action="jgf.php">
			<div class="d-flex mx-auto col-10" style="border-bottom: 1px solid">
				<div class="col-7 mt-3">
					<h5 class="underline">1.Кто такой волонтёр?</h5>
					<div class="d-flex ">
						<input type="radio" name="q1" value="1" class="mt-1 mr-1"><h5>Доброволец</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q1" value="2" class="mt-1 mr-1"><h5>Наемный работник</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q1" value="3" class="mt-1 mr-1"><h5>Охранник</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q1" value="4" class="mt-1 mr-1"><h5>Тот, кто лечит животных</h5>
					</div>
				</div>
				<div class="col-5 mt-3">
					<h5 class="underline">2.Кто может стать волонтером?</h5>
					<div class="d-flex ">
						<input type="radio" name="q2" value="1" class="mt-1 mr-1"><h5>Только люди с высшим образованием </h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q2" value="2" class="mt-1 mr-1"><h5>Любой желающий</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q2" value="3" class="mt-1 mr-1"><h5>Люди, прошедшие специальное обучение</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q2" value="4" class="mt-1 mr-1"><h5>Только пенсионеры</h5>
					</div>
				</div>
			</div>
			<div class="d-flex mx-auto col-10" style="border-bottom: 1px solid">
				<div class="col-7 mt-3">
					<h5 class="underline">3.В каком возрасте можно стать волонтёром?</h5>
					<div class="d-flex ">
						<input type="radio" name="q3" value="1" class="mt-1 mr-1"><h5>В любом возрасте при выполнении всех необходимых требований</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q3" value="2" class="mt-1 mr-1"><h5>Только с 18 лет</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q3" value="3" class="mt-1 mr-1"><h5>Только с 14 лет</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q3" value="4" class="mt-1 mr-1"><h5>Только в трудоспособном возрасте</h5>
					</div>
				</div>
				<div class="col-5 mt-3">
					<h5 class="underline">4.Каким может быть волонтёрство?</h5>
					<div class="d-flex ">
						<input type="radio" name="q4" value="1" class="mt-1 mr-1"><h5>Только групповым</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q4" value="2" class="mt-1 mr-1"><h5>Только индивидуальным</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q4" value="3" class="mt-1 mr-1"><h5>Групповым и индивидуальным</h5>
					</div>
				</div>
			</div>
			<div class="d-flex mx-auto col-10" style="border-bottom: 1px solid">
				<div class="col-7 mt-3">
					<h5 class="underline">5.Где можно стать волонтером?</h5>
					<div class="d-flex ">
						<input type="radio" name="q5" value="1" class="mt-1 mr-1"><h5>Только в своём городе</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q5" value="2" class="mt-1 mr-1"><h5>Где угодно</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q5" value="3" class="mt-1 mr-1"><h5>Только в серф лагере</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q5" value="4" class="mt-1 mr-1"><h5>Только в мероприятиях</h5>
					</div>
				</div>
				<div class="col-5 mt-3">
					<h5 class="underline">6.Каким может быть волонтёрство?</h5>
					<div class="d-flex ">
						<input type="radio" name="q6" value="1" class="mt-1 mr-1"><h5>Только Разовым</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q6" value="2" class="mt-1 mr-1"><h5>Только системным</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q6" value="3" class="mt-1 mr-1"><h5>Разовым и системным</h5>
					</div>
				</div>
			</div>
			<div class="d-flex mx-auto col-10" style="border-bottom: 1px solid">
				<div class="col-7 mt-3">
					<h5 class="underline">7.Что такое волонтёрская организация?</h5>
					<div class="d-flex ">
						<input type="radio" name="q7" value="1" class="mt-1 mr-1"><h5>это сообщество людей, которые готовы оказать помощь</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q7" value="2" class="mt-1 mr-1"><h5>Это сообщество людей ,которые пишут стихи </h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q7" value="3" class="mt-1 mr-1"><h5>Это сообщество людей, которые развлекают людей </h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q7" value="4" class="mt-1 mr-1"><h5>Это сообщество людей, которые объединены религией</h5>
					</div>
				</div>
				<div class="col-5 mt-3">
					<h5 class="underline">8.Что такое ресурсный центр добровольчества?</h5>
					<div class="d-flex ">
						<input type="radio" name="q8" value="1" class="mt-1 mr-1"><h5>это региональная организация, которая занимается поддержкой и развитием волонтерства.</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q8" value="2" class="mt-1 mr-1"><h5>Это региональная организация, которая занимается развлечением людей</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q8" value="3" class="mt-1 mr-1"><h5>Это региональная организация ,которая занимается ценными бумагами </h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q8" value="4" class="mt-1 mr-1"><h5>Это региональная организация, которая занимается выработкой электроэнергии</h5>
					</div>
				</div>
			</div>
			<div class="d-flex mx-auto col-10" style="border-bottom: 1px solid">
				<div class="col-7 mt-3">
					<h5 class="underline">9.Что такое декларация?</h5>
					<div class="d-flex ">
						<input type="radio" name="q9" value="1" class="mt-1 mr-1"><h5>это документ, который показывает финансовое состояние предприятия на определенную дату, а также результаты его деятельности за определенный период</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q9" value="2" class="mt-1 mr-1"><h5>
						это документ, положения которого не носят строго обязательный для выполнения характер и лучше отталкиваться от законов, которые действует на территории нашей страны.</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q9" value="3" class="mt-1 mr-1"><h5>это документ, отражающий имущественные права, имеющий стоимость, способный самостоятельно обращаться на рынке, быть объектом купли-продажи и иных сделок.</h5>
					</div>
				</div>
				<div class="col-5 mt-3">
					<h5 class="underline">10.Регламенты взаимодействия волонтерских организаций с бюджетными учреждениями созданы…</h5>
					<div class="d-flex ">
						<input type="radio" name="q10" value="1" class="mt-1 mr-1"><h5> Во всех регионах</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q10" value="2" class="mt-1 mr-1"><h5>Пока не во всех регионах</h5>
					</div>
					<div class="d-flex">
						<input type="radio" name="q10" value="3" class="mt-1 mr-1"><h5>Только в одном регионе</h5>
					</div>
				</div>
			</div>
			<div class="col-3 mx-auto mt-3">
				<button class="btn mx-auto btn-primary p-2">
					Закончить тест
				</button>
			</div>
		</form>
		
		
		

		
		
	</div>
	
	

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>