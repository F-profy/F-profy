<?php
function usersset() {
  require_once("config/config.php");
  require_once("function.php");

  $sql = "SELECT * FROM users WHERE name = {$_SESSION['name']}";
  $result = mysqli_query($connection, $sql);

  $rows = mysqli_fetch_array($result);

$name = $rows['name'];
$foto1 = $rows['foto1'];
$login = $rows['login'];
$email = $rows['email'];
$payement1 = $rows['payement'];
switch ($payement1) {
  case '0':
  $payement = "Стандарт";
  break;
  case '1':
  $payement = "Платний";
  break;
}
if(isset($_POST['save'])){
////////////////// POST ACTION TO REGISTER NEW ADMIN ////////////////
$name = inject_checker($connection, $_POST['name']);
$mail = inject_checker($connection, $_POST['mail']);
$telephone = inject_checker($connection, $_POST['telephone']);
$password = inject_checker($connection, $_POST['password']);
$radio = inject_checker($connection, $_POST['radio1']);
$select = inject_checker($connection, $_POST['select']);
if(empty($name)){
$error_msg = "Поле Назва не може бути пустим";
}
elseif(empty($mail)){
$error_msg = "Поле Силка не може бути пустим";
}
elseif(empty($telephone)){
$error_msg = "Поле Силка на картинку не може бути пустим";
}
elseif(empty($password)){
$error_msg = "Поле Ціна не може бути пустим";
}
else{
$query = " SELECT * FROM users WHERE login = '{$name}' ";
$run_query = mysqli_query($connection, $query);

if(mysqli_num_rows($run_query) > 0){

$query = "UPDATE `users` SET `name`= '{$name}', `email`='{$mail}',`telephone` = '{$telephone}',`password`= '{$password}',`radio`= '{$radio}',`country`= '{$select}'";
$run_query = mysqli_query($connection, $query);
if($run_query == true){
$msg_success = "Вітаю вас, Ви успішно додали програму";
}else{
$error_msg = "Упс... Щось пішло не так,спробуйте пізніше або зверніться у службу підтримки";
}
}else{
$error_msg = "Помилка: цей Програма уже існує";


}
}
}
  include "head.php";
  include "usersset.php";
  echo $usersset;
  }
 ?>
