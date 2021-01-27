<?php
function homeadm() {
  require_once("config/config.php");
  require_once("function.php");

  include "head.php";
  include "homeadm.php";
  echo $homeadm;
}
 ?>
