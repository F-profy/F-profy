<?php
session_start();
//if( $_SESSION['count'] < 1){
//  header('Location: ?mod=login');
//
switch ($_GET['mod']) {
    case login:
    require_once("function/function_login.php");
    login();
    break;

    case register:
    require_once("function/function_reg.php");
    register();
    break;

    case home:
    require_once("head.php");
    require_once("function/function_home.php");

    home();
    break;

    case app:
    require_once("function/function_app.php");
    app();
    break;
    case usersset:
    require_once("function/function_usersset.php");
    usersset();
    break;

    case logout:
    session_unset();
    header('Location: ?mod=login');
    break;
  }
    if($_SESSION["admin"] == 1){
      switch ($_GET['mod']) {
      case homeadm:
      require_once("head.php");
      require_once("function/function_homeadm.php");
      homeadm();
      break;

      case editusers:
      require_once("head.php");
      require_once("function/function_editusers.php");
      editusers();
      break;

      case addapp:
      require_once("head.php");
      require_once("function/function_addapp.php");
      addapp();
      break;

    }
}
    else{
      require_once("head.php");
      require_once("function/function_home.php");
      home();

}

//}



?>
