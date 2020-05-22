<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style  /csss.css">
<link rel="stylesheet" type="text/css" href="slaider/style.css">
<link rel="stylesheet" type="text/css" href="css    /my.css">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="js/my.js"></script>
<title>Мебельная фабрика Багсан</title>
</head>
<body>
<header>

	<div id="block">
	<p><a href="index.php"><img src="img/logo.png"></a></p>
		

<?php
	if(empty($_COOKIE['username'])) {
}
else {
	?>
	<p><a href="exit.php" id="exit">Выход <?php echo $_COOKIE['username']; ?></a></p>
	<ul class="menu-main">
  <li><a href="index.php">О фабрике</a></li>
  <li><a href="#">Товары</a></li>
  <li><a href="contact.php">Контакты</a></li>
</ul>
	
</div>
<?php	
}
?>

</header>
<?php
	if(empty($_COOKIE['username'])) {
?>

<?php
}
else {
	?>

	

<br><br>
<div id="text"></div>






	

<div class="image">
	<center><img src="img/baner.jpg" alt="" /></center>
	<h1 id="h1">Стулья из массива</h1>
	<h2 class="h2w">Стулья мебельной фабрики «Багсан» производятся из натурального дерева - массива березы. Деревянный каркас усилен<br> металлическими косынками и уголками, повышающими стойкость к расшатыванию. Дополнительно заказные подлокотники<br> превращают стул в комфортное кресло. Полиуретановые тонировки из Германии, Италии проявляют текстуру дерева, создают<br> стойкое полуматовое покрытие. Ткани для стульев доступны из сотен каталогов поставщиков.</h2>
</div>

<h1 class="h1">Стулья из массива</h1>
	<div class="cars wrapper margin-center justify-between">
		<div class="card">
					<img src="img/product1.jpg">
					<div class="info">Кресло "Престиж-В"</div>
					<div class="info">Цена: 5 000 р.</div>
				</div>
				<div class="card">
					<img src="img/product2.jpg">
					<div class="info">Кресло из массива "Престиж"</div>
						
					<div class="info">Цена: 1 200 000 р.</div>
				</div>
				<div class="card">
					<img src="img/product3.jpg">
					<div class="info">Кресло из массива "Ретро"</div>
						
					<div class="info">Цена: 2 800 000 р.</div>
				</div>
				<div class="card">
					<img src="img/product4.jpg">
					<div class="info">Стул "Лидер"</div>
				
					<div class="info">Цена: 825 000 р.</div>
				</div>



				<div class="card">
					<img src="img/product5.jpg">
					<div class="info">Стул из массива "Венский" с жестким сиденьем</div>
				
					<div class="info">Цена: 1 315 000 р.</div>
				</div>
				<div class="card">
					<img src="img/product6.jpg">
					<div class="info">Стул из массива "Венский" с мягким сиденьем	</div>
					
					<div class="info">Цена: 3 600 000 р.</div>
				</div>
				<div class="card">
					<img src="img/product7.jpg">
					<div class="info">Стул из массива "Грация"	</div>
					
					<div class="info">Цена: 2 400 000 р.</div>
				</div>



				<div class="card">
					<img src="img/product8.jpg">
					<div class="info">Стул из массива "Классика" с жестким сиденьем</div>
					
					<div class="info">Цена: 1 315 000 р.</div>
				</div>
				<div class="card">
					<img src="img/product9.jpg">
					<div class="info">Стул из массива "Классика" с мягким сиденьем</div>
					
					<div class="info">Цена: 888 000р.</div>
				</div>
			

	</div>

<?php	
}
?>










       
 

<footer class="clear">
	<p class="fut">© 1999-2019 ООО "Багсан" - мебельная фабрика. Производство мебели из массива дерева.</p>
</footer>
</body>
</html>