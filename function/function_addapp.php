<?php
function addapp() {
  require_once("config/config.php");
  require_once("function.php");
  if(isset($_POST['add'])){
  ////////////////// POST ACTION TO REGISTER NEW ADMIN ////////////////
  $name = inject_checker($connection, $_POST['name']);
  $href = inject_checker($connection, $_POST['href']);
  $hrefim = inject_checker($connection, $_POST['hrefim']);
  $price = inject_checker($connection, $_POST['price']);
  if(empty($name)){
  $error_msg = "Поле Назва не може бути пустим";
  }
  elseif(empty($href)){
  $error_msg = "Поле Силка не може бути пустим";
  }
  elseif(empty($hrefim)){
  $error_msg = "Поле Силка на картинку не може бути пустим";
  }
  elseif(empty($price)){
  $error_msg = "Поле Ціна не може бути пустим";
  }
  else{
  $query = " SELECT * FROM programs WHERE href = '{$href}' ";
  $run_query = mysqli_query($connection, $query);

  if(mysqli_num_rows($run_query) > 0){
  $error_msg = "Помилка: цей Програма уже існує";
  }else{
  $query = " INSERT INTO programs(name, href, price, take, hrefim)
  VALUES('$name', '$href', '$price', '2', '$href')";
  $run_query = mysqli_query($connection, $query);

  if($run_query == true){
  $msg_success = "Вітаю вас, Ви успішно додали програму";
  }else{
  $error_msg = "Упс... Щось пішло не так,спробуйте пізніше або зверніться у службу підтримки";
  }
  }
  }
  }
  include "head.php";
  include "addapp.php";
  echo $addapp;
}
 ?>
