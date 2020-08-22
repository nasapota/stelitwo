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
if  (isset($_POST['phone'])) {
    $phone = $_POST['phone']; 
    if ($phone == '') unset($phone);
}
if  (isset($_POST['space'])) {
    $space = $_POST['space']; 
    if ($space == '') unset($space);
}
if  (isset($_POST['perimetr'])) {
    $perimetr = $_POST['perimetr']; 
    if ($perimetr == '') unset($perimetr);
}
if  (isset($_POST['angles'])) {
    $angles = $_POST['angles']; 
    if ($angles == '') unset($angles);
}
if  (isset($_POST['curve'])) {
    $curve = $_POST['curve']; 
    if ($curve == '') unset($curve);
}
if  (isset($_POST['material'])) {
    $material = $_POST['material']; 
    if ($material == '') unset($material);
}
if  (isset($_POST['message'])) {
    $message = $_POST['message']; 
    if ($message == '') unset($message);
}


/* Проверяем заполнены ли все поля */ 
if  (isset($name) && isset($email) && isset($phone) && isset($space) && isset($perimetr) && isset($angles) && isset($curve) && isset($material) && isset($message)) {

   /* Убираем все лишние пробелы и переносы строк, а также преобразуем  все теги HTML в  символы*/   
   $name =  htmlspecialchars(iconv("UTF-8", "UTF-8", trim($name))); 
   $email =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($email)));
   $phone =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($phone)));
$space =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($space)));
$perimetr =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($perimetr)));
$angles =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($angles)));
$curve =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($curve)));
$material =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($material)));
   $message =  htmlspecialchars(iconv("UTF-8", "UTF-8",trim($message)));

  /*  Проверяем правильность ввода email-адреса */ 
  if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i",  $email)){ 
     die("Неправильный формат e-mail адреса!\n");
  }

 /* Формируем сообщение */
 $address  = "info@steli.kiev.ua";
 $sub  = "(^-^) ВНИМАНИЕ! Заявка на просчет натяжного потолка.";
 $mes  = "
<head>
  <title>(^-^) ВНИМАНИЕ! Заявка на просчет натяжного потолка.</title>
</head>
<body>
  <h2>(^-^) ВНИМАНИЕ! Заявка на просчет натяжного потолка.</h2>
  <table>
    <tr>
      <td>Автор назвался:</td><td>$name</td>
    </tr>
    <tr>
      <td>Оставил такой E-mail:</td><td>$email</td>
    </tr>

    <tr>
      <td>Оставил такой номер телефона:</td><td>$phone</td>
    </tr>

    <tr>
      <td>Площадь:</td><td>$space</td>
    </tr>

    <tr>
      <td>Периметр:</td><td>$perimetr</td>
    </tr>

    <tr>
      <td>Углы:</td><td>$angles</td>
    </tr>

    <tr>
      <td>Криволинейность:</td><td>$curve</td>
    </tr>

    <tr>
      <td>Материал:</td><td>$material</td>
    </tr>
  </table>
  <h3>Содержание письма</h3>
  $message
</body>
</html>";

 /* Отправка  сообщения */ 
 $verify =  mail ($address,$sub,$mes,"Content-type:text/html; charset = UTF-8\r\nFrom:$email");
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
