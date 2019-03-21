<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['message'])) {$message = $_POST['message'];}
 if (isset($_POST['clemail'])) {$clemail = $_POST['clemail'];}
 
/* Сюда впишите свою эл. почту */
 $address = "leitis.elen@mail.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Тема: Запрос обратной связи с сайта masage33.ru!\nИмя: $name\nТелефон: $phone\nE-mail: $clemail\nСообщение: $message";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ на Массаж с сайта'; //сабж
$email='Сайт <masage33.ru>'; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>С вами свяжутся</title>
<meta name="generator">
<style type="text/css">
body
{
   
   background: #cb64ba url(images/zakaz.jpg) top -70% center no-repeat;
   
}

<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
</body>
</html>