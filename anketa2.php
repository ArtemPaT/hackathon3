<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
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
	
	<div class="col-6 bg-light border mx-auto  mt-5">
		<h3 class="text-center">Заполните свою анкету</h3>
		<div class="col-6 mx-auto"><br>
			<form action="send2.php" method="POST">
				<input type="" name="id" style="display: none;" value="<?php echo'$_SESSION["login"])';?>"> 
				<textarea class="form-control" name="about">Кратко опишите свою компанию
				</textarea><br>
				<span>Ваше фото</span>
				<input type="file" name="photo" multiple accept="image/*"> 
				<button class="mt-2 btn btn-info">Сохранить</button>
			</form>
		</div>
	</div>
</body>
</html>