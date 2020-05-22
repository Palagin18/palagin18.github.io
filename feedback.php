<?php
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	if ($name =='' || $email =='' || $subject =='' ||$message ==''){
		echo "Заполните все поля";
		exit;
	}
	//Отправка
	$subject = "=?utf8?B?".base64_encode($subject)."?=";
	$headers = "From: $email\r\nReplt-to: $email\r\nContent-type:text/html;carset=utf-8\r\n";
	if (emil("dofarre09@mail.ru",$subject, $message, $headers))
		echo "Сообщение отправленно";
	else
		echo "Сообщение не отправленно";
?>