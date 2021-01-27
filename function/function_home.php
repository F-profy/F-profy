<?php
function home(){
if( $_SESSION['count'] < 1){
  header('Location: ?mod=login');
}
else {
  require_once("config/config.php");
  require_once("function.php");
  include "head.php";
  include "home.php";

  $query = "SELECT * FROM users WHERE payement = '1'";
  $run_query = mysqli_query($connection, $query);

    $numbers = mysqli_num_rows($run_query);

  echo $home;
}
}
?>
