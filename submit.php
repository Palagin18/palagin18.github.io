<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) 
{
    $headers = 'From: Палагин Станислав
' .
                'Reply-To: dofarre09@mail.ru
' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "Новое сообщение с сайта";             
             
    $letter = "Данные сообщения:";
    $letter .="
";
    $letter .="Имя: ".$_POST['name'];
    $letter .="
Email: ".$_POST['email'];
    $letter .="
Телефон: ".$_POST['phone'];
    $letter .="
Сообщение: ".$_POST['message'];
    
    if (mail("drugoisvet@gmail.com", $theme, $letter, $headers)){
      header("Location: /");
    } else {
      header("Location: /");
    }  
              
} else {
  header("Location: /");
}
?>