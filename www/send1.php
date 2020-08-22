<?php
header('Content-Type: text/html; charset=UTF-8');

if  (isset($_POST['name'])) {
    $name = $_POST['name']; 
    if ($name == '') unset($name);
}
if  (isset($_POST['email'])) {
    $email = $_POST['email']; 
    if ($email == '') unset($email);
}
if  (isset($_POST['message'])) {
    $message = $_POST['message']; 
    if ($message == '') unset($message);
}

/* Проверяем заполнены ли все поля */ 
if  (isset($name) && isset($email) && isset($message)) {

   /* Убираем все лишние пробелы и переносы строк, а также преобразуем  все теги HTML в  символы*/   
   $name =  htmlspecialchars(iconv("windows-1251", "UTF-8", trim($name))); 
   $email =  htmlspecialchars(iconv("windows-1251", "UTF-8",trim($email)));
   $message =  htmlspecialchars(iconv("windows-1251", "UTF-8",trim($message)));

  /*  Проверяем правильность ввода email-адреса */ 
  if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i",  $email)){ 
     die("Неправильный формат e-mail адреса!\n");
  }

 /* Формируем сообщение */
 $address  = "info@steli.kiev.ua";
 $sub  = "Сообщение с сайта Steli.kiev.ua";
 $mes  = "Автор назвался: $name  \nОставил такой E-mail: $email \nСодержание письма: \n$message";

 /* Отправка  сообщения */ 
 $verify =  mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
 if  ($verify == 'true'){
   echo  "Сообщение отправлено!\n";
 }
 else {
  echo  "Сообщение не отправлено!\n";
 }

} 
else{
  echo  "Вы заполнили не все поля\n"; 
} 
?>
