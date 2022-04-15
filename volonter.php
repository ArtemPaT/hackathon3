<?php session_start() 
?>
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
	
	<div class="col-12 p-0" style="background-image: url(feat-idpd.jpg); background-size: 100%; position: absolute; height: 300px;">

	</div>
	<div class="col-12 p-0 bg-black lol-shadow" style="height: 300px; opacity: 0.8; position: absolute;">
		
	</div>
	<div class="col-12 pl-0 pr-0 mb-5 text-white" style="height: 300px; padding-top: 100px;">
		
	</div>
	<div class="br-15 shadow overall bg-white pt-4 pb-4 text-center" style="width: 300px; position: absolute; top: 300px; left: 50px; overflow: hidden;">
		<?php 
			$query1 = mysqli_query($con, "SELECT * FROM accounts WHERE login = '{$_SESSION['login']}'");
			$res1 = $query1->fetch_assoc();	
			$query3 = mysqli_query($con, "SELECT * FROM ankets WHERE login = '{$_SESSION['login']}'");
			$table_count2 = mysqli_num_rows($query3);
			$res3 = $query3->fetch_assoc();	
		 ?>
		<h4 class="mb-4"><?php echo "{$_SESSION['login']}"; ?></h4>
		<hr>
		<div class="rounded mb-2 mx-auto" style="width: 140px; height: 140px">
			<a href=""><img src="<?php echo $res3['photo'] ?>" class="rounded-circle" style="width: 100%; height: 100%"></a>
		</div>
		
		<p class="pt-3">ВОЛОНТЕР</p>
		<h6><?php echo "{$res1['surname']} {$res1['name']} {$res1['otch']}"; ?></h6>
		<a href="doska.php">		
			<button type="button" class="btn btn-primary" >
		  		Найти объявление
			</button>
		</a>

		

		
	</div>
	<div class="col-12">
		<div class="row">
			<div class="col-4">
			
			</div>
			<div class="col-8">
				<div class="row">
					<h4 class="works pointer" style="color: #f1d303;">Моя анкета</h4>
					<h4 class="projs ml-5 pointer">Отзывы</h4>

				</div>
				<div class="works_block mt-3">
					<div class="col-6 p-4">
						<div class="d-flex border p-3 rounded">
							<div class="col-6">
								<a href=""><img src="<?php echo $res3['photo'] ?>" class="rounded-circle" style="width: 100%; height: 100%"></a>
							</div>
							<div class="col-6">
								<?php if ($table_count2==0){echo "<h4>Ваша анкета пуста. <a href='anketa.php'>Заполните её</a>";}else{ ?></h4>
								<h4><?php echo "{$res1['surname']} {$res1['name']} {$res1['otch']}"; ?></h4><br>
								<span class="underline">Пол: <?php echo "{$res3['sex']}"; ?></span><br>
								<span class="underline">Возраст: <?php echo "{$res3['age']}"; ?></span><br>
								<span class="underline">Населенный пункт: <?php echo "{$res3['place']}"; ?></span><br>
								<span class="underline">О себе: <?php echo "{$res3['about']}"; ?></span><br>

								<?php } ?>
							</div>
						</div>
						
					</div>

				</div>
				<div class="row projs_block mt-5">
					<?php 
						$query2 = mysqli_query($con, "SELECT * FROM otz WHERE id = 0");
						$table_count = mysqli_num_rows($query2);
						for ($i=0; $i < $table_count; $i++) { 
							$res2 = $query2->fetch_assoc();			
						
					 ?>
					 <div class="d-flex col-10 border p-0 rounded">
					 	<div class="col-2">
					 		<img src="haryshal.png" class="rounded-circle w-100 mt-2">
					 	</div>
						<div class="col-7 p-3">
							
							<h5><?php echo "{$res2['name']}" ?></p>
							<span class="ml-3"> <?php echo "{$res2['text']}" ?></span><br>
							<span class="ml-3 "><?php echo "{$res2['num']}" ?>/10</span><br>
							<span>От: example</span>
						</div>
					 </div>
					
					<?php } ?>
				</div>
				
				
			</div>
		</div>
		
	</div>
	

<script type="text/javascript">
	let works = document.querySelector('.works');
	let projs = document.querySelector('.projs');
	let works_block = document.querySelector('.works_block');
	let projs_block = document.querySelector('.projs_block');
	//let projs_block = document.querySelector('.mood');
	//let mood_block = document.querySelector('.mood');
	projs.onclick = function() {
		works_block.style.display = "none";
		projs_block.style.display = "flex";
		works.style.color = "black";
		projs.style.color = "#f1d303";
	}
	works.onclick = function() {
		works_block.style.display = "flex";
		projs_block.style.display = "none";
		works.style.color = "#f1d303";
		projs.style.color = "black";
	}
	
	

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>