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
			
			<div class="col-12 text-center pt-3 underline" style="border-left: 1px solid">
				<h2>Рейтинг волонтеров</h2>
			</div>
		</div>
		<div class="col-12 mx-auto p-3">
			<?php 
				$query2 = mysqli_query($con, "SELECT * FROM otz WHERE who = 'lolik'");
				$query3 = mysqli_query($con, "SELECT * FROM otz WHERE who = 'artemiy.ykt@gmail.com'");
				$table_count2 = mysqli_num_rows($query2);
				$table_count3 = mysqli_num_rows($query3);
				$sr = 0;
				$sr2 = 0;
				$k = 0;
				$k2 = 0;
				for ($i=0; $i < $table_count2; $i++) { 
					$result2 = $query2->fetch_assoc();
					$sr = $sr + $result2['num'];
					$k = $k + 1;
				}
				for ($i=0; $i < $table_count3; $i++) { 
					$result3 = $query3->fetch_assoc();
					$sr2 = $sr2 + $result3['num'];
					$k2 = $k2 + 1;
				}
				$sr = $sr / $k;
				$sr2 = $sr2 / $k2;
				$a = [$sr,$sr2];
				sort($a);

			 ?>
			 <div class="col-12 border p-0">
			 	<div class="d-flex">
			 		<div class="col-3 p-4">
				 		<img src="me.png" class="w-100 ">
				 	</div>
				 	<div class="col-9 p-4">
				 		<h5>Курчатов Артем (artemiy.ykt@gmail.com)</h5>
				 		<h5 class="underline">Волонтер</h5>
				 		<h6><span class="underline">Населенный пункт:</span> якутск</h6>
				 		<h6><span class="underline">Возраст:</span> 34</h6>
				 		<h6><span class="underline">О себе:</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 		tempor incididunt ut labore et dolore magna aliqua.</h6>
				 		<h5><span style="color: red">Оценка:</span> <?php echo $a[1]; ?>/10</h5>
				 	</div>
			 	</div>
			 	
			 </div>
			 <div class="col-12 border">
			 	<div class="d-flex">
			 		<div class="col-3">
				 		<img src="graduationhat.png" class="w-100">
				 	</div>
				 	<div class="col-9">
				 		<h5>aa Артемий (lolik)</h5>
				 		<h5 class="underline">Волонтер</h5>
				 		<h6><span class="underline">Населенный пункт:</span> Якутск</h6>
				 		<h6><span class="underline">Возраст:</span> 34</h6>
				 		<h6><span class="underline">О себе:</span> Люблю помогать людям. tempor incididunt ut labore et dolore magna aliqua.</h6>
				 		<h5><span style="color: red">Оценка:</span> <?php echo $a[0]; ?>/10</h5>
				 	</div>
			 	</div>
			 	
			 </div>
		</div>
		
		
	</div>
</body>
</html>