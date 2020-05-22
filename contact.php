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
  <li><a href="Product.php">Товары</a></li>
  <li><a href="">Контакты</a></li>
</ul>
	
</div>
<?php	
}
?>
</header>
<?php if(empty($_COOKIE['username'])) {?>


<?php }
else {
	?>

<div id="form">
	<h1 class="obr">Обратная связь</h1>
   	 	<form action="submit.php" method="POST" id="ret">
   		 	<input name="email" placeholder="Email">
    		<input name="name" placeholder="Имя">
    		<input name="phone" placeholder="Телефон">
    		<textarea name="message" placeholder="Сообщение"></textarea>
    		<button type="submit" name="submit" class="battonn">Отправить</button> 
 		 </form>
</div>

<?php }?>




<footer class="clear">
	<p class="fut">© 1999-2019 ООО "Багсан" - мебельная фабрика. Производство мебели из массива дерева.</p>
</footer>
</body>
</html>