<?php
function login(){

  require_once("function.php");
  require_once("config/config.php");
if( $_SESSION['count'] < 1){
  if(isset($_POST['log_btn'])){
  ////////////////// POST ACTION TO REGISTER NEW ADMIN ////////////////
  $reg_name = inject_checker($connection, $_POST['login']);
  $reg_password1 = inject_checker($connection, $_POST['password']);

  /////////// ERROR CHECKING FOR EMPTY FILEDS
  if(empty($reg_name)){
  $error_msg = "Поле Логін не може бути пустим";
  }
  elseif(empty($reg_password1)){
  $error_msg = "Поле Пароль не може бути пустим";
  }
  else{
  $query = " SELECT * FROM users WHERE login = '{$reg_name}' AND password = '{$reg_password1}' ";
  $run_query = mysqli_query($connection, $query);

  if(mysqli_num_rows($run_query) > 0){
    session_start();
    $sql = "SELECT * FROM users WHERE login = '{$reg_name}' AND password = '{$reg_password1}' ";
    $result = mysqli_query($connection, $sql);

    $rows = mysqli_fetch_array($result);


  $error_msg = "Ви увійшли в аккаунт";
  $_SESSION['log'] = 1;
    $_SESSION['count']= 1;
  $_SESSION['id'] = $rows['id'];
  $_SESSION['name'] = $rows['name'];
  $_SESSION['admin'] = $rows['admin'];
header('Location: ?mod=home');
  }
  else{
  $error_msg = "Помилка: Такого користувача не існує";

  }
  }
  }

  //Close Connection
  mysqli_close($connection);
  include "login.php";
  echo $login;

}
  else {
    header('Location: ?mod=login');
  }
}

 ?>
