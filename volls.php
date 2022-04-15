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
	
	
	<div class="col-10 mx-auto pt-3 border bg-white shadow p-4">
		<div class="d-flex" style="border-bottom: 1px solid">
			<div class="col-2">
				<img src="we.png" class="w-100">
			</div>
			<div class="col-6 pt-3 pl-4">
				<h4>Не знаете, с чего начать?</h4>
				<h5>Прочитайте вводную статью ниже и дерзайте!</h5>
			</div>
		</div><br>
		<h4>Кто такой волонтер (доброволец)?</h4>
		<p class="ml-3">Слово «волонтер» произошло от латинского «voluntarius» – добровольный. В России волонтер и доброволец – это равнозначные понятия, обозначающие человека, который добровольно и безвозмездно выполняет какую-либо работу или занимается общественной деятельностью. Доброволец вкладывает в дело, которым занимается, свои навыки и время.
<br><br>
		Стать волонтером может любой, профессия и взгляды на мир не имеют значения. Несовершеннолетним добровольцам нужно разрешение от родителей, а детей младше 14 лет во время волонтерских работ должны сопровождать официальные представители. Точное определение волонтера и возможные цели добровольческой деятельности прописаны в Федеральном законе «О благотворительной деятельности и добровольчестве (волонтерстве)».
<br><br>
		Волонтерство может быть как индивидуальным, так и групповым. Например, если вы в одиночку или вдвоем с другом вышли и убрали мусор с берега реки, то можно считать, что вы уже экологические волонтеры.
<br><br>
		В любом случае следует помнить, что волонтерская деятельность – это серьезный инструмент социального, культурного, экономического и экологического развития страны.</p>
		<h4>Какую деятельность может осуществлять волонтер (доброволец)?</h4>
		<p class="ml-3">Существует множество направлений, в которых добровольцы могут проявить себя и принести пользу обществу. В числе основных – социальное, культурное, экологическое, медицинское и спортивное волонтерство. Добровольцы ездят в дома престарелых, общаются с пожилыми людьми, восстанавливают старинные усадьбы, проводят археологические раскопки, ищут пропавших людей, ведут наблюдения за птицами и помогают работе крупных мероприятий.
<br><br>
		Волонтером можно стать, не выезжая за пределы родного города, а можно посвятить ему все лето – например, уехав в серф-лагерь на Камчатку или добровольцем на остров Кижи.
<br><br>
		Часто добровольцы помогают тем, кто не может помочь себе сам: бездомным, детям-сиротам, людям с инвалидностью и тем, кто пострадал от природных и техногенных катастроф.
<br><br>
		Сегодня популярно событийное волонтерство, когда люди помогают на конкретных мероприятиях. Самые яркие примеры таких событий – это Олимпийские игры в Сочи в 2014 году и Чемпионат мира по футболу в 2018 году.
<br><br>
		Волонтерство может быть разовым или системным. Можно принять участие в одной акции или помогать регулярно, вступив в какую-либо волонтерскую организацию.</p>
		<h4>Что такое волонтерская организация?</h4>
		<p class="ml-3">Волонтерская организация – это сообщество людей, которые готовы безвозмездно делиться своими ресурсами, силами, временем, умениями и профессиональными навыками на благо других людей. Волонтерские организации объединяют добровольцев, обеспечивая их обучение, координацию и поддержку.
<br><br>
Часто волонтерская организация вырастает из небольшой группы людей, которых сначала объединила конкретная социальная проблема, а со временем они поняли, что могут помогать системно: регулярно, более качественно и продуманно. Волонтерская организация может помогать конкретной группе людей (например, беженцам или сиротам) или же решать задачи в определенной области (сохранение культурного наследия, экологическая безопасность).
<br><br>
Кроме того, волонтерские объединения могут создаваться при образовательных, медицинских, и коммерческих организациях.
<br><br>
Волонтерская организация может объединяться с другими добровольческими проектами, чтобы реализовать свои программы, или же работать самостоятельно. По закону добровольческая организация должна проводить инструктаж для волонтеров и обязательно назначать координатора для каждого проекта.</p>
		<h4>Что такое ресурсный центр добровольчества?
</h4>
		<p class="ml-3">Ресурсный центр добровольчества – это региональная организация, которая занимается поддержкой и развитием волонтерства. Такая организация координирует волонтеров, снабжает их методическими материалами, а также обучает лидеров волонтерских объединений эффективному управлению. Например, в Москве такой организацией выступает центр «Мосволонтер» – там можно узнать о волонтерских программах, интересных городских событиях и акциях. К 2024 году такие центры появятся в каждом регионе России.
<br><br>
Воспользоваться услугами ресурсного центра добровольчества может любая организация: образовательная, социальная, некоммерческая или бизнес-структура. Ресурсные центры нужны для того, чтобы создать на региональном уровне эффективную систему поддержки добровольчества и обеспечить ее развитие на постоянной основе.
<br><br>
Список региональных ресурсных центров, в частности, представлен на сайте Ассоциации волонтерских центров.</p>
		<h4>Перечень документов, регламентирующих добровольческую деятельность
</h4>
		<p class="ml-3">На международном уровне добровольческую деятельность регламентирует Всеобщая декларация прав человека, принятая в 1948 году. Она закрепляет право человека на его ответственность перед обществом.

В 1990 году в Париже была принята Всеобщая декларация волонтеров, где обозначили главные принципы движения, его смысл и цели. В 2001 году в Амстердаме также провозгласили Всеобщую декларацию добровольчества – она гласит, что все люди в мире должны иметь право добровольно посвящать свое время, талант, энергию другим людям или своим сообществам посредством индивидуальных или коллективных действий, не ожидая финансового вознаграждения. Декларация – это документ, положения которого не носят строго обязательный для выполнения характер и лучше отталкиваться от законов, которые действует на территории нашей страны.
<br><br>
В России добровольческую деятельность регулируют несколько федеральных законов. Основной документ, который регулирует деятельность добровольцев в России, – федеральный закон № 135 «О благотворительной деятельности и добровольчестве (волонтерстве)», принятый в 1995 году. В феврале 2018 года его доработали и внесли изменения. В законе прописаны понятия, связанные с волонтерством, права и обязанности добровольца и организаторов волонтерской деятельности, а еще – порядок взаимодействия органов власти с волонтерскими организациями. Кроме того, в ряде регионов приняты местные законы о волонтерской деятельности.
<br><br>
Кроме того, добровольческую деятельность регулируют ФЗ от 19 мая 1995 г. № 82-ФЗ «Об общественных объединениях» и ФЗ от 28 июня 1995 г. № 98-ФЗ «О государственной поддержке молодежных и детских общественных объединений».
<br><br>
В 2018 году утверждена Концепция развития добровольчества (волонтерства) в России до 2025 года. Документ, в частности, предусматривает развитие методической, информационной, консультационной, образовательной и ресурсной поддержки деятельности по привлечению волонтеров к работе в учреждениях социального обслуживания населения, образования, здравоохранения, оказанию помощи при возникновении чрезвычайных ситуаций. Согласно концепции, добровольчество планируется развивать в различных профессиональных и социальных группах, возрастных категориях, семейных формах с учетом региональных и местных условий волонтерской деятельности.
<br><br>
Существуют и региональные нормативные акты, которые регулируют волонтерскую деятельность. Например, в Москве действует регламент Департамента соцзащиты от 2015 года «взаимодействия организаций для детей-сирот и детей, оставшихся без попечения родителей, организаций по работе с семьями с детьми Департамента социальной защиты населения города Москвы с негосударственными, социально ориентированными некоммерческими, общественными и волонтерскими организациями».
<br><br>
В 2016 году появился регламент взаимодействия Департамента здравоохранения города Москвы и организаций, подведомственных Департаменту здравоохранения города Москвы, с социально ориентированными некоммерческими организациями. Учреждениям предписывается «оказывать содействие по внедрению добровольческих проектов и программ НКО в медицинских организациях», выявлять лучшие практики и распространять их дальше.
<br><br>
В Санкт-Петербурге действует Положение об организации и использовании труда добровольцев в государственных учреждениях социального обслуживания населения города. В нем прописаны достаточно строгие правила допуска волонтеров: например, они обязаны иметь медкнижку и справку о несудимости.
<br><br>
Регламенты взаимодействия волонтерских организаций с бюджетными учреждениями созданы пока не во всех регионах. После того, как региональные власти установят регламенты по конкретному направлению деятельности госучреждения, руководители учреждений должны будут создать специальные положения о работе с НКО и волонтерами.
<br><br></p>
Источник: <a href="https://dobro.ru/kb/article/33">https://dobro.ru/kb/article/33</a>
	</div>
</body>
</html>