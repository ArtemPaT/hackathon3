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
		.bg-strange {
			background: #f1d303;
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
<body style="font-family: Cera" class="bg-light">
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'trek3');
		$query = mysqli_query($con, "SELECT * FROM accounts WHERE login = '{$_SESSION["login"]}'");
		$res = $query->fetch_assoc();
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
				
				<a href="<?php if($res['ch'] == 1) {echo 'portfolio.php';} else{echo 'volonter.php';} ?>" class="mt-2 strange-color" style="margin-left: 100px; position: absolute; right: 100px;"><h6 class="strange-color"><?php if($_SESSION["login"] == null) 
					{
						echo "Личный кабинет";
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
	<div class="col-9 mx-auto border shadow p-0 pt-3 bg-white">
		<div class="d-flex p-0"style="border-bottom: 1px solid">
			<div class="col-4 bg-white" ><h4 class="ml-5">Фильтр</h4>
				<form action="poisk.php" method="POST">
					<select class="rounded p-2 ml-5" name="naprav" style="border: 2px solid; ">
						<option <?php if($_SESSION['naprav']=='Образование'){echo 'selected';} ?>>Образование</option>
						<option <?php if($_SESSION['naprav']=='Природа'){echo 'selected';} ?>>Природа</option>
						<option <?php if($_SESSION['naprav']=='ЧС'){echo 'selected';} ?>>ЧС</option>
						<option <?php if($_SESSION['naprav']=='Дети, молодость'){echo 'selected';} ?>>Дети, молодость</option>
						<option <?php if($_SESSION['naprav']=='Спорт'){echo 'selected';} ?>>Спорт</option>
						<option <?php if($_SESSION['naprav']=='Животные'){echo 'selected';} ?>>Животные</option>
						<option <?php if($_SESSION['naprav']=='Пожилые'){echo 'selected';} ?>>Пожилые</option>
						<option <?php if($_SESSION['naprav']=='Культура и искусство'){echo 'selected';} ?>>Культура и искусство</option>
						<option <?php if($_SESSION['naprav']=='Поиск людей, животных'){echo 'selected';} ?>>Поиск людей, животных</option>
						<option <?php if($_SESSION['naprav']=='Другое'){echo 'selected';} ?>>Другое</option>
						<option <?php if($_SESSION['naprav']=='Взрослые'){echo 'selected';} ?>>Взрослые</option>
					</select>
					<button class="p-0 mb-1 bg-white" style="border:0;width: 40px; height:40px;">
						<img src="poisk.png" class="w-75">
					</button>
				</form>
				
			</div>
			<div class="col-8 text-center pt-3 underline" style="border-left: 1px solid">
				<h2>Доска объявлений</h2>
			</div>
		</div>
		<?php 
			$query3 = mysqli_query($con, "SELECT * FROM projs WHERE naprav = '{$_SESSION['naprav']}'");
			$table_count2 = mysqli_num_rows($query3);
			for ($i=0; $i < $table_count2; $i++) { 
				$res3 = $query3->fetch_assoc();					
						
			 ?>
			 <div class="col-12 border pt-3 pb-1 pr-3 pl-3" >
			 	<h4><?php echo $res3['name']; ?></h4>
			 	<div class="row">

			 		<div class="col-3">
			 			
		 				<img src="<?php echo $res3['photo']; ?>" class="w-75 rounded">
			 		</div>
			 		<div class="col-9">
			 			<?php 
			 				$shit = $res3['own']
			 			 ?>
			 			<p class="ml-3 p-0"><?php echo "{$res3['descr']}" ?></p>
			 			<span class="ml-3"><span class="underline">Организатор:</span> <?php echo $shit ?></span><br>
			 			<span class="ml-3"><span class="underline">Направление:</span> <?php echo "{$res3['naprav']}" ?></span><br>
			 			<span class="ml-3"><span class="underline">Местоположение:</span> <?php echo "{$res3['place']}" ?></span><br>
			 			<form action="zayava.php" method="POST">
			 				<input type="" name="idik" style="display: none;" value="<?php echo $shit ?>">
				 			<?php if($res['ch'] == 0) {
				 				echo '
				 			 
				 			<a href="" style="margin-left:80%"><button class="btn btn-primary">Подать заявку</button></a>';
					 			}
				 			?>
				 			<?php 
				 				if ($_GET['check']==12345) {
				 					echo "<span class='text-danger mt-3'style='margin-left:70%'>Сначала заполните анкету</span>";
				 				}
				 				elseif ($_GET['check2']==445678){
				 					echo "<span class='text-danger mt-3'style='margin-left:75%'>Заявка уже отправлена</span>";
				 				}
				 				elseif ($_GET['fkjd']==12342){
				 					echo "<span class='text-success mt-3'style='margin-left:70%'>Заявка успешно отправлена</span>";
				 				}
				 			 ?>
			 			</form>
			 		</div>
			 	</div>
			 	
			 	
			 </div>

		<?php } ?>
		
		
	</div>
</body>
</html>