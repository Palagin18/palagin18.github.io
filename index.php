<?php
$dbc = mysqli_connect('localhost', 'root', '', 'reg');
if(!isset($_COOKIE['user_id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
				setcookie('username', $row['username'], time() + (60*60*24*30));
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url);
			}
			else {
				echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
			}
		}
		else {
			echo 'Извините вы должны заполнить поля правильно';
		}
	}
}
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style  /csss.css">
<link rel="stylesheet" type="text/css" href="slaider/style.css">
<link rel="stylesheet" type="text/css" href="css    /my.css">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="js/my.js"></script>
<title></title>
</head>
<body>
<header>
	<div id="block">
		<img src="img/logo.png">
<?php
	if(empty($_COOKIE['username'])) {
}
	else { ?>
	<p>
		<a href="exit.php" id="exit">Выход <?php echo $_COOKIE['username']; ?></a>
	</p>
	<ul class="menu-main">
  		<li><a href="#">О фабрике</a></li>
  		<li><a href="Product.php">Товары</a></li>
 		 <li><a href="contact.php">Контакты</a></li>
	</ul>	
</div>
<?php }?>
<div class="container">
<!-- Регистрация -->
<button type="button" class="btn" onclick="modal('myModal')">Регистрация</button>
	<div id="myModal" class="modal">
		<div class="modalContent modalSuccess">
			<div class="modalHeader">
				<span class="modalClose" data-close="true" title="Close">&times;</span>
				Регистрация
			</div>
				<div class="modalBody">
					<content>
						<form method="POST" action="signup.php" id="sec1">
							<input type="text" name="username" placeholder="Введите логин:" class="big_text">
							<input type="password" name="password1" placeholder="Введите пароль:"  class="big_text">
							<input type="password" name="password2" placeholder="Введите пароль еще раз:"  class="big_text">
							<button type="submit" name="submit" id="regwx">Зарегистрироваться</button>
						</form>
					</content>	
				</div>
				<div class="modalFooter">		
				<button type="button" class="btn" data-close="true">Закрыть</button>									
			</div>
		</div>
	</div>
<!-- Вход -->
	<button type="button" class="btn btnPrimary" onclick="modal('myModal2')">Вход</button>
	<div id="myModal2" class="modal">
		<div class="modalContent modalPrimary">
			<div class="modalHeader">
				<span class="modalClose" data-close="true" title="Close">&times;</span>
				Вход
			</div>
			<div class="modalBody">
				<section id="sec">
					<form id="forma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<input class="big_text" type="text" name="username" placeholder="Введите ваш логин">
						<input class="big_text" type="password" name="password" placeholder="Введите ваш пароль">
						<button type="submit" name="submit" id="sub">Вход</button>
					</form>
				</section>
			</div>
			<div class="modalFooter">
				<div>
					<button type="button" class="btn" data-close="true">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
</header>
<?php
	if(empty($_COOKIE['username'])) {
?>
<div class="all">
	<input checked type="radio" name="respond" id="desktop">
		<article id="slider">
				<input checked type="radio" name="slider" id="switch1">
				<input type="radio" name="slider" id="switch2">
				<input type="radio" name="slider" id="switch3">
				<input type="radio" name="slider" id="switch4">
				<input type="radio" name="slider" id="switch5">
			<div id="slides">
				<div id="overflow">
					<div class="image">
						<article><img src="img/1.jpg"></article>
						<article><img src="img/2.jpg"></article>
						<article><img src="img/3.jpg"></article>
						<article><img src="img/4.jpg"></article>
						<article><img src="img/5.jpg"></article>
					</div>
				</div>
			</div>
			<div id="controls">
				<label for="switch1"></label>
				<label for="switch2"></label>
				<label for="switch3"></label>
				<label for="switch4"></label>
				<label for="switch5"></label>
			</div>
			<div id="active">
				<label for="switch1"></label>
				<label for="switch2"></label>
				<label for="switch3"></label>
				<label for="switch4"></label>
				<label for="switch5"></label>
			</div>
		</article>
</div><br><br>
<p>
	<h1 class="h">Производство мебели из массива дерева</h1>
</p>
<p class="cont">Мебельная фабрика «БАГСАН» — производитель качественной деревянной мебели из Ульяновска. Мы поставляем обеденные столы и стулья оптом в регионы Российской Федерации и стран СНГ. 
Миссия компании: производство экологически чистой продукции, оптовые поставки по лучшему соотношению цена-качество.

	<ul class="cont">Работая с нами, вы получаете:<br><br>
		<li>Мебель из массива дерева серийного производства - обеденные столы, стулья по оптовым и крупнооптовым ценам.</li>
		<li>Помощь в подборе ходовой продукции.</li>
		<li>Расширенную складскую программу – большая часть товара имеется на складе.</li>
		<li>Сжатые сроки изготовления (в случае отсутствия на складе) – от 7 до 14 дней.</li>
		<li>Кастомизация изделий (изготовление в цвете заказчика с использованием выбранного текстиля).</li>
		<li>Скидку на экспозицию выставки - отгрузка по крупнооптовому прайсу.</li>
		<li>Доставку по России через ТК.</li>
		<li>Рекламные материалы и поддержку.</li>
		<li>Размещение информации о розничных точках на сайте https://bagsan.ru/, поисковое продвижение в Вашем в регионе.</li><br>
		Сотрудничая с нами, вы приобретаете мебель, пользующуюся спросом в каждом сезоне. Вы сможете успешно конкурировать за счет лояльности покупателя и лучшего соотношения цена-качество.
	</ul>
</p>
<div class="redact">
	<p>
		<h2 class="h">Преимущества столов фабрики "Багсан"</h2>
			<ul>
				<li>Надежная конструкция, стойкая к расшатыванию;</li>
				<li>100% деревянная столешница (без шпона и ДСП);</li>
				<li>Изготовление по нестандартным размерам (кратно 5 см);</li>
				<li>Полиуретановое покрытие, устоичивое к истиранию и воздействию влаги;</li>
				<li>Собственный дизайн;</li>
				<li>16 стандартных тонировок, нестандартные эмали под заказ из каталога RAL.</li>
			</ul><br>
<h2 class="h">12 лет для мебели в режиме ресторана - не срок</h2>
В 2006 году в г. Ульяновск открылся ресторан "Сахара", в который нами поставлены деревянные столы БАГСАН, стулья, а так же некоторые другие элементы интерьера. В 2018 году ресторану исполняется 12 лет со дня открытия. 12 лет, 4000 дней ежедневной эксплуатации, сотни банкетов и корпоративов. Мебель выдержала, и продолжает ежедневно работать.
<br><br>
<b>Пример заведения: Ресторан "Сахара", г. Ульяновск</b>
<br><br>
</p><img src="img/cartinca1.jpg">
<?php
}
else {
	?>	
<div class="conten">
<p id="ter">
	<h1>О фабрике</h1><br>
<p>ООО «Багсан» образовано в 1998 году в городе Ульяновске, в Поволжском регионе России. Предприятие специализируется на производстве мебели исключительно из массива дерева уже более 20 лет. Фабрика «Багсан» - одно из немногих предприятий, которое серийно производит столы и стулья из массива березы. Специализируясь на обеденных зонах, мы добились высокого качества изготавливаемой мебели, которая обладает изысканными формами, удобством пользования и долговечностью. Компания сохраняет невысокие конкурентные оптовые цены.</p><br>
<h2>Отличительные особенности мебели производства «Багсан»</h2><br>
Исключительно натуральная древесина.
Это означает, что столешницы также изготавливаются целиком из массива березы (без МДФ, ДСП и шпона). В изготовлении столешниц используется технология сращивания древесины. В сочетании с лучшими зарубежными клеями, конструкция столешниц приобретает необходимую прочность, жесткость и долговечность.<br><br>

<h1>Безупречное качество покрытия.</h1><br>
Стойкие полиуретановые лаки HESS (Германия), эмали ILVA (Италия), а также байцы, придающие древесине различные оттенки ценных пород дерева. Технология тонирования проявляет текстуру древесины, придавая волокнам природную индивидуальность и неповторимость. Высококлассные эмали превращают поверхность древесины в ровное однотонное полуматовое покрытие. Многообразие тонов, а также бесконечная возможность их колеровок, позволяет получить любой оттенок из каталога RAL. Разнообразие покрытий дополняется возможностью применения патины «золото», «серебро» и других, что делает производимую мебель неповторимой и изысканной.
<br><br>
<h1>Высокая прочность и ресурс изделий.</h1><br>
В силовой конструкции столов и стульев используются металлические элементы, позволяющие кратно повысить выносливость продукции при ежедневной эксплуатации. Мы намеренно отказались от традиционных шиповых соединений, которые до сих пор являются слабым местом в большей части изделий деревообработки, и неизбежно расшатываются.
<br><br>
<h1>Уникальный дизайн.</h1><br>
Все изделия оригинальны, разработаны собственной дизайнерской группой.
<br><br>
<h1>Только массив дерева</h1><br>
Наша продукция изготавливается из Волжской березы – твердой породы древесины, которая отлично подходит для создания прочной и долговечной мебели. Береза отличается своей благородностью и экологической чистотой. Материал тщательно отбирается, сушится (до 7-9% влажности), далее бережно обрабатывается, создавая уникальную мебель из массива дерева. В отличие от большинства изделий из пластика и прессованных опилок, мебель, изготовленная из дерева, несет в дом тепло и уют.<br><br>
<img src="img/derevo1.jpg">
<img src="img/derevo2.jpg">
<img src="img/derevo3.jpg"><br><br>
</p>
<h1>Современное производство</h1><br>
<p>При производстве мебели задействованы передовые технологии. Использование современного и универсального оборудования (Россия, Италия, Китай, Германия), а также специальной оснастки, позволяет добиваться высокого качества продукции. Применение твердосплавного режущего инструмента существенно увеличивает скорость обработки древесины, повышает качество обрабатываемой поверхности. Технологическая схема фабрики, в сочетании с квалифицированным составом работников обеспечивают выпуск стабильно качественный товар. Гибкая система мебельного производства позволяет в кратчайшие сроки осваивать серийный выпуск новой продукции.</p>
</div>

<?php	
}
?>
<footer class="clear">
	<p class="fut">© 1999-2019 ООО "Багсан" - мебельная фабрика. Производство мебели из массива дерева.</p>
</footer>
</body>
</html>