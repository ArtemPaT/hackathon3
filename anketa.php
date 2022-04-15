<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="col-6 bg-light border mx-auto  mt-5">
		<h3 class="text-center">Заполните свою анкету</h3>
		<div class="col-6 mx-auto"><br>
			<form action="send.php" method="POST">
				<span>Пол</span><br>
				<select class="rounded p-2" name="sex" style="border: 2px solid; ">
					<option>Мужской</option>
					<option>Женский</option>
				</select><br><br>
				<span>Возраст</span>
				<input class="form-control" type="" name="age"><br>
				<span>Место жительства</span>
				<input class="form-control" type="" name="place"><br>
				<span>Расскажите о себе</span>
				<textarea class="form-control" name="about">
				
				</textarea><br>
				<span>Ваше фото</span>
				<input type="file" name="photo" multiple accept="image/*"> 
				<button class="mt-2 btn btn-info">Сохранить</button>
			</form>
		</div>
	</div>
</body>
</html>